@extends('admin.layout')
@section('content')

<div class="admin-content">
   <div class="admin-content-body">

     <div class="am-cf am-padding am-padding-bottom-0">
       <div class="am-fl am-cf">
         <strong class="am-text-primary am-text-lg">相册</strong> / <small>Gallery</small>
       </div>
     </div>

     <hr>
     <div class="am-g">
             <div class="am-u-sm-12 am-u-md-6">
               <div class="am-btn-toolbar">
                 <div class="am-btn-group am-btn-group-xs">
                   <button type="button" onclick="add_btn()" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                   <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                   <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                   <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                 </div>
               </div>
             </div>
             <div class="am-u-sm-12 am-u-md-3">
               </div>
             <div class="am-u-sm-12 am-u-md-3">
             </div>
     </div>
     <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 am-margin gallery-list">
       <li>
         <a href="#">
           <img class="am-img-thumbnail am-img-bdrs" src="http://s.amazeui.org/media/i/demos/bing-1.jpg" alt=""/>
           <div class="gallery-title">远方 有一个地方 那里种有我们的梦想</div>
           <div class="gallery-desc">2375-09-26</div>
         </a>
       </li>
     </ul>

     <div class="am-margin am-cf">
       <hr/>
       <p class="am-fl">共 15 条记录</p>
       <ol class="am-pagination am-fr">
         <li class="am-disabled"><a href="#">&laquo;</a></li>
         <li class="am-active"><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
         <li><a href="#">5</a></li>
         <li><a href="#">&raquo;</a></li>
       </ol>
     </div>
   </div>

   <footer class="admin-content-footer">
     <hr>
     <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
   </footer>
 </div>
@endsection
@section('javas')
<script>
  function add_btn()
  {
    window.location.href="{{url('admin/busn/create')}}";
  }
</script>
@endsection