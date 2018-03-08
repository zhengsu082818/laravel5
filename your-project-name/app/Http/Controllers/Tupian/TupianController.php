<?php

namespace App\Http\Controllers\Tupian;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TupianController extends Controller
{
	//图片上传方法
	public function picture(Request $request,$imgurl,$dest){

		 $file = $request->file($imgurl);
		  //判断是否有图片上传
       if ($request->hasFile($imgurl)) {
                
                    //定义能被上传的图片格式
                $allowed_extensions = ["png", "jpg", "gif"];
                    //判断图片格式是否正确
                if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                        flash()->overlay('请选择正确格式的图片', '5');
                         return back();
                }else{
                    $destinationPath = $dest; //public 文件夹下面建 storage/uploads 文件夹
                    //修改图片后缀
                    $extension = $file->getClientOriginalExtension();
                    //随机上传的图片名称
                    $fileName = str_random(10).'.'.$extension;
                    // 把图片以后到storage/uploads/目录下
                    $file->move($destinationPath, $fileName);
                    
                    return $destinationPath.$fileName;
                }
        }else{
                        flash()->overlay('请选择需要上传的图片', '5');
                         return back();
        }
	}	
}