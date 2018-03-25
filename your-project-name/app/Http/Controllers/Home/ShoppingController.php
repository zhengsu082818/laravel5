<?php

namespace App\Http\Controllers\Home;
use App\models\Order;
use Illuminate\Http\Request;
use DB;
use PDO;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\Good;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //从商品详情体挑选过来的商品标信息
        $uid=DB::table('homeusers')->where('phone',session('phone'))->lists('id');
        // dd();
        $input=input::get();
        if($input){
        $input['aotal']=$input['price']*$input['num'];

        
        // dd($input);
        DB::table('shopping')->insert(
            ['num' => $input['num'], 'img' => $input['img'],'product'=>$input['product'],'gid'=>$input['gid'],'uid'=>$uid[0],'price'=>$input['price'],'aotal'=>$input['aotal']]
        );
        }
        $info=DB::table('shopping')->get();

        //遍历为你推荐,根据每次添加商品的时间倒叙
        $gengxin = good::orderBy('created_at','desc')->limit(10)->get();
        

         return view('home.shopping',['info'=>$info,'gengxin'=>$gengxin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // 加载支付页面
        config(['database.fetch' => PDO::FETCH_ASSOC]);
            
        $input = $request->all();
        $input['shopping']=DB::table('shopping')->whereIn('id',explode('.', rtrim($input['ids'],'.')))->get();
        $input['personals']=DB::table('personals')->where('id',$input['shdz_id'])->get();
        // dd($input);
        return view('home/order_payment',['input'=>$input]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //加载收货地址页面
        $homeuser=$request->session()->all();
        config(['database.fetch' => PDO::FETCH_ASSOC]);
        // dd($homeuser);
        if(isset($homeuser['phone'])){
           
        $list['ids']=$id;
        // dd($homeuser);
        $id=explode('.', rtrim($id,'.'));
        $list['alljg']=$request->alljg;
        $list['info']=DB::table('shopping')->whereIn('id',$id)->orderBy('id', 'desc')
            ->get();
        $shdz=DB::table('homeusers')->where('phone',$homeuser['phone'])->first();
        $list['personals']=DB::table('personals')->where('pid',$shdz['id'])->get();
        // dd($list);

        if($list['personals']!=null){
            return view('home.purchase page',['list'=>$list]);
        }else{
            return view('home.purchase page',['list'=>$list]);
        }
        }else{
            return view('home.login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        // //支付页面判定
        // $input=Input::get();
        // $homeuser=$request->session()->all();
        // config(['database.fetch' => PDO::FETCH_ASSOC]);
        // $shdz=DB::table('homeusers')->where('phone',$homeuser['phone'])->first();
        // if($shdz['zfpassword']!=md5($input['zhifu'])){
        //     return 111;
        // }
        // $shopping=DB::table('shopping')
        //     ->whereIn('id',explode('.', rtrim($input['shoppingid'],'.')))
        //     ->select('img','product','price','num','aotal','uid','gid')
        //     ->get();
        // foreach ($shopping as $key => $value) {
        //     $insert=Db::table('commodity')->insert($value);
        //     DB::table('shopping')->whereIn('id',explode('.', rtrim($input['shoppingid'],'.')))->delete();
        // }
        // // dd(md5(123456));
        // return '去订单页';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list['num']=$request->num;
        $list['state']='未付款';
        $list['price']=$request->price;
        $list['aotal']=$request->price*$request->num;
        // var_dump($list);
        $info=DB::table('shopping')->where('id',$id)->update($list);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除购物车数据
        $info=DB::table('shopping')->whereIn('id', [$id])->delete();
        // return $info;
        dd($id);
        if($info>0){
            return "y";
        }else{
            return "n";
        }
    }
}
