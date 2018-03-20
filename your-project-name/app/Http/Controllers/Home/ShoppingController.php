<?php

namespace App\Http\Controllers\Home;
use App\models\Order;
use Illuminate\Http\Request;
use DB;
use PDO;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
// =========================需要联查商品表中的库存===================
        $info=DB::table('shopping')->get();
        // $info['nums']=200;
        return view('home/shopping',['info'=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //暂时定义支付密码
        $mima=123456;
        $list=Input::get();
        if($list['zhifu']!=$mima){
                $error=1;
             return back()->withInput()->with('mes','error');
        }
        $info=explode('.',rtrim($list['ids'],"."));
        $all=DB::table('shopping')->whereIn('id',$info)->get();
        print_r($all);

        return '订单页面';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        config(['database.fetch' => PDO::FETCH_ASSOC]);
        $id=explode('.', rtrim($id,'.'));
        $list['alljg']=$request->alljg;
        $list['info']=DB::table('shopping')->whereIn('id',$id)->orderBy('id', 'desc')
            ->paginate(2);
        // dd($list['info']);
        
        return view('home/Purchase page',['list'=>$list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
