<?php

namespace App\Http\Controllers\Home;
use DB;
use PDO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载订单页面
        //所有订单遍历
        // config(['database.fetch' => PDO::FETCH_ASSOC]);  
        
        $homeuser=session('phone');
        $user=DB::table('homeusers')->where('phone',$homeuser)->get()[0];
        $where=Input::get('where')?Input::get('where'):null;

        $info['alldind']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('product','like',"%$where%")
            ->orWhere('orderid','like',"%$where%") 
            ->orderBy('id', 'desc')
            ->get();
        // dd($info['alldind']);
        $info['alldind1']=DB::table('shopping')
            ->where('uid',$user->id)
            ->orwhere('product','like',"%$where%")
            ->orderBy('id', 'desc')
            ->get();
        $count['dfk']=DB::table('shopping')
            ->where('uid',$user->id)
            ->orderBy('id', 'desc')
            ->count();
        $info['alldind2']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待发货')
            ->orderBy('id', 'desc')
            ->get();
        $count['dfh']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待发货')
            ->orderBy('id', 'desc')
            ->count();
        $info['alldind3']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待收货')
            ->orderBy('id', 'desc')
            ->get();
        $count['dsh']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待收货')
            ->orderBy('id', 'desc')
            ->count();
        $count['dpl']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待评价')
            ->orderBy('id', 'desc')
            ->count();
        $info['alldind4']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','待评价')
            ->orderBy('id', 'desc')
            ->get();
        $info['alldind5']=DB::table('commodity')
            ->where('uid',$user->id)
            ->where('state','已删除')
            ->orderBy('id', 'desc')
            ->get();
        
        return view('home/My delivery',['info'=>$info,'count'=>$count]);
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
        //随机字符串
        function GetRandStr($len)   
        {   
            $chars = array(   
                "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",    
                "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",    
                "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",    
                "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",    
                "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",    
                "3", "4", "5", "6", "7", "8", "9"   
            );   
            $charsLen = count($chars) - 1;   
            shuffle($chars);     
            $output = "";   
            for ($i=0; $i<$len; $i++)   
            {   
                $output .= $chars[mt_rand(0, $charsLen)];   
            }    
            return $output;    
        }   
        //支付页面判定
        $input['shoppingid']=$request->ids;
        $input['zhifu_value']=$request->zhifu_value;
        $homeuser=$request->session()->all();
        config(['database.fetch' => PDO::FETCH_ASSOC]);

        //获取用户信息
        $shdz=DB::table('homeusers')->where('phone',$homeuser['phone'])->first();
        if($shdz['zfpassword']!=md5($input['zhifu_value'])){
            if($shdz['zfpassword']==null){
                $info['error']='请设置支付密码!';
                return $info;
            }
            $info['error']='支付密码错误,请重试!';
            return $info;
        }else{
            $shopping=DB::table('shopping')
            ->whereIn('id',explode('.', rtrim($input['shoppingid'],'.')))
            ->select('img','product','price','num','aotal','uid','gid')
            ->get();
            foreach ($shopping as $key => $value) {
                $value['state']='待发货';
                $value['uid']=$shdz['id'];
                $value['orderid']=GetRandStr(9);
                $insert=Db::table('commodity')->insert($value);
                $nums=Db::table('goods')->where('id',$value['gid'])->lists('nums');
                $kc=$nums[0]-$value['num'];
                Db::table('goods')->where('id',$value['gid'])->update(['nums'=>$kc]);
                if($insert){
                    DB::table('shopping')->whereIn('id',explode('.', rtrim($input['shoppingid'],'.')))->delete();
                }
                
            }
            // 后台订单更新
            $orderformcount=DB::table('orderformcount')->where('uid',$shdz['id'])->first();
            if($orderformcount==null){
                $count=Db::table('commodity')->where('uid',$shdz['id'])->count();
                Db::table('orderformcount')->insert(['uid'=>$shdz['id'],'num'=>$count]);
            }else{
                $count=Db::table('commodity')->where('uid',$shdz['id'])->count();
                Db::table('orderformcount')->where('uid',$shdz['id'])->update(['num'=>$count]);
            }
           
            $info['error']='y';
            return $info;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        DB::table('shopping')->where('id',$id)->delete();
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        // 删除订单
        
        
        $homeuser=$request->session()->all();
        $shdz=DB::table('homeusers')->where('phone',$homeuser['phone'])->first();
        DB::table('commodity')->where('id',$id)->update(['state'=>'已删除']);
        // dd($shdz);

        $num=DB::table('commodity')->where('uid',$shdz->id)->count()-1;
        // dd($num);
        $a=DB::table('orderformcount')->where('uid',$shdz->id)->update(['num'=>$num]);
        // dd($a);
        return $this->index();
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
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
