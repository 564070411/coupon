@extends('admin.layout')
@section('css')
<style>
	#nodes li{
		margin:10px;
	}
	#nodes li input{
		width: 60px;
		position: absolute;
		left: 400px;
	}
	.btn-gourp{
		display: inline-block;
		position: absolute;
		right: 150px;
	}
</style>
@endsection('css')
@section('content')
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
      </div>

      <hr>
<div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" onclick="add_btn()" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" id="sort_btn" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 排序</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
          </div>
        </div>
      </div>
      <hr>
	<div class="am-g">
		<div class="am-u-sm-1">&nbsp;</div>
		<div class="am-u-sm-11">
			<ul id="nodes">


				@foreach($data as $v)
				<li node="{{$v->id}}" pnode="{{$v->cate_pid}}"
				@if($v->level!=0)
				style="display:none;"
				@endif
				>
				{{str_repeat('　　',$v->level)}}<img src="{{asset('assets/admin/img/toggle-expand-dark.png')}}">{{$v->cate_name}}
				<input type="text" value="{{$v->cate_sort}}">
				<div class="btn-gourp">
				<button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="create_child_btn({{$v->id}})">添加子菜单</button>
				<button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit_btn({{$v->id}})">编辑</button>
				<button class="am-btn am-btn-default am-btn-xs am-text-danger">删除</button>
				</div>
				</li>
				@endforeach
<!-- 
				<li node="2" pnode="0"><img src="{{asset('assets/admin/img/toggle-collapse-dark.png')}}">旅游酒店 <input type="text"></li>
				<li node="3" pnode="2">　　<img src="{{asset('assets/admin/img/toggle-expand-dark.png')}}">票务 <input type="text"></li>
				<li node="4" pnode="2">　　<img src="{{asset('assets/admin/img/toggle-collapse-dark.png')}}">订酒店 <input type="text"></li>
				<li node="5" pnode="4">　　　　　酒店 <input type="text"></li>
				<li node="6" pnode="2">　　<img src="{{asset('assets/admin/img/toggle-expand-dark.png')}}">旅行 <input type="text"></li>
				<li node="7" pnode="0"><img src="{{asset('assets/admin/img/toggle-expand-dark.png')}}">手机相机 <input type="text"></li> -->
			</ul>
		</div>
	</div>	
  </div>
</div>
@endsection('content')
@section('javas')
<script type="text/javascript">
	var Oli=$('#nodes').find('li');
	var Oimg=$('#nodes').find('li').find('img');
	$(function(){
		Oimg.click(function(){
			// var Oimg=$(this).find('img')
			if($(this).attr('src')=="{{asset('assets/admin/img/toggle-expand-dark.png')}}")
			{
				// 展开
				$(this).attr('src',"{{asset('assets/admin/img/toggle-collapse-dark.png')}}");
				collapse($(this).closest('li').attr('node'));
			}
			else
			{
				// 隐藏
				$(this).attr('src',"{{asset('assets/admin/img/toggle-expand-dark.png')}}");
				expand($(this).closest('li').attr('node'));
			}
		})
	})
	function add_btn()
	{
		window.location.href="{{url('admin/cate/create')}}";
	}
	function collapse(node)
	{
		Oli.each(function(){
			if($(this).attr('pnode')==node)
			{
				$(this).show();
			}
		})
	}
	function expand(node)
	{
		Oli.each(function(){
			if($(this).attr('pnode')==node)
			{
				$(this).hide();
				expand($(this).attr('node'));
			}
		})
	}
	function edit_btn(id)
	{
		window.location.href="{{url('admin/cate')}}/"+id+"/edit";
	}
	function create_child_btn(id)
	{
		window.location.href="{{url('admin/cate/create_child')}}/"+id;
	}
</script>
@endsection('javas')