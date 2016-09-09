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
          <div class="am-panel am-panel-default">
            <div class="am-panel-bd">
              <div class="am-g">
                <div class="am-u-md-4">
                  <img class="am-img-circle am-img-thumbnail" id="myimg" src="" alt="">
                </div>
                <div class="am-u-md-8">
                    <div class="am-form-group">
                      <input type="file" id="myfile">
                      <p class="am-form-help">请选择要上传的图片...</p>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
          <form class="am-form am-form-horizontal">

            <div class="am-form-group">
              <label for="cp_title" class="am-u-sm-3 am-form-label">商家名称</label>
              <div class="am-u-sm-9">
                <input type="text" id="cp_title">
              </div>
            </div>

            <div class="am-form-group">
              <div class="am-u-sm-9 am-u-sm-push-3">
                <button type="button" class="am-btn am-btn-primary">保存修改</button>
              </div>
            </div>

            <input type="hidden" name="busn_img">
          </form>
        </div>
      </div>
    </div>

  </div>
@endsection
  @section('javas')
  <script src="{{asset('assets/admin/js/lrz.all.bundle.js')}}"></script>
  <script>
    $(function(){
      $('#myfile').change(function(){
        lrz(this.files[0])
            .then(function (rst) {
                // 处理成功会执行
                $('#myimg').attr('src',rst.base64);
                $('input[name=busn_img]').val(rst.base64.substr(23));
            });
      })
    })
  </script>
  @endsection('javas')