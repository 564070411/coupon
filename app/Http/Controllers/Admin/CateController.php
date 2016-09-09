<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cate;
use DB;
class CateController extends Controller
{
	/**
	 * 首页
	 */
   public function index()
   {
      $data = DB::table('cate')->get();
      $data = $this->tree_str($data);
   		return view('admin.cate.index',compact('data'));
   }
   /**
    * 添加视图
    */
   public function create()
   {
      return view('admin.cate.create');
   }
   /**
    * 添加栏目
    */
   public function store(Request $request)
   {
   		$cate=new Cate();
   		$cate->cate_name=$request->get('cate_name');
   		$cate->cate_pid=$request->get('cate_pid');
   		if ($cate->save()) {
   		    return redirect(url('admin/cate'));
   		} else {
   		    return redirect()->back()->withInput()->withErrors('保存失败!');
   		}
   }
  /**
   * 修改视图
   */
  public function edit($id)
  {
      $p_cate=DB::table('cate')->get();
      $data=DB::table('cate')->where('id',$id)->first();
      return view('admin.cate.edit',compact('data','p_cate'));
  }
   /**
    * 保存修改
    */
   public function update(Request $request, $id)
   {
   		$cate=Cate::find($id);
      $cate->cate_name=$request->get('cate_name');
      $cate->cate_pid=$request->get('cate_pid');
      if ($cate->save()) {
          return redirect(url('admin/cate'));
      } else {
          return redirect()->back()->withInput()->withErrors('保存失败!');
      }
   }
   /**
    * 添加子栏目
    */
   public function create_child($pid)
   {
     $p_cate=DB::table('cate')->get();
     return view('admin.cate.create_child',compact('pid','p_cate'));
   }
   // 树
   public function tree_str($arr,$pid=0,$level=0)
   {
      $rst=[];
      foreach ($arr as $k => $v) {
        if($v->cate_pid==$pid)
        {
          $v->level=$level;
          $rst[]=$v;
          $rst=array_merge($rst,$this->tree_str($arr,$v->id,$level+1));
        }
      }
      return $rst;
   }
}

