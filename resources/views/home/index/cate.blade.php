@extends('home.layout')
@section('content')
		<div style="width: 100%; z-index: 100;">
			<header id="top" class="aj-new-top" style="top: 0px;">

				<a class="aj-back qmm-icon-circle-left" onclick="$(document).trigger('aj.goback')"></a>
				<h1 style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">类别</h1>
				<div class="header_right">
					<a title="返回首页" href="/mobile/home" class="home-wrapper iconCom clearfix">
						<span class="head-home">首页</span>
					</a>
					<a title="搜索" class="aj-search login-wrapper clearfix" href="/msearchpage">
						<span class="qmm-icon-iconfont-search"></span>
					</a>
					<a class="side-wrapper iconCom clearfix aj-menu right_menu_btn">
						<span class="qmm-icon-iconfont-qita right_menu_btn"></span>
					</a>
				</div>
			</header>
		</div>
		<div id="cate_content">
			<ul id='cate_left'>
				<li class="cate_activ">本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
				<li>本地生活</li>
			</ul>
			<section id='cate_right'>

				<div class="title">
					<div class="bloder"></div>
					<a href="">打车租车</a>
				</div>
				<div class='content'>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
					<div class="content-one">
						<a href="#">
							<div class="content-one-img">
								<img src="http://image3.juanlaoda.com/AdminImageUpload/8318362.png" alt=""></div>
							<div class="content-one-intr">打车</div>
						</a>
					</div>
				</div>
				
			</section>
		</div>
	<script src="{{asset('assets/home/js/jq.js')}}"></script>
	<script>
		$(function(){
			$('#cate_left').find('li').click(function(){
				$(this).addClass('cate_activ').siblings().removeClass();
			});
		})
	</script>
@endsection('content')