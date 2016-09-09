@extends('admin.layout')
@section('content')
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        </div>

        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
          <form class="am-form am-form-horizontal" method="POST" action="{{url('admin/cate')}}" id="frm">
            <div class="am-form-group">
              <label for="cate_pid" class="am-u-sm-3 am-form-label">上级栏目</label>
              <div class="am-u-sm-9">
                <select name="cate_pid" id="cate_pid">
                  <option value="0">顶级栏目</option>
                </select>
              </div>
            </div>
              
              @if (count($errors) > 0)
              {!! implode('<br>', $errors->all()) !!}
              @endif
            <div class="am-form-group">
              <label for="cate_name" required="required" class="am-u-sm-3 am-form-label">栏目名</label>
              <div class="am-u-sm-9">
                <input type="text" id="cate_name" name="cate_name">
              </div>
            </div>

            <div class="am-form-group">
              <div class="am-u-sm-9 am-u-sm-push-3">
                <button type="button" class="am-btn am-btn-primary" onclick="sbm()">添加栏目</button>
              </div>
            </div>
             {!! csrf_field() !!}
          </form>
        </div>
      </div>
    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>

  </div>
  @endsection('content')
  @section('javas')
  <script type="text/javascript">
    function sbm()
    {
      $('#frm').submit();
    }
  </script>
  @endsection