@extends('home.layout')
@section('content')
	<!-- <img src="index/img/gotop.png" id="gotop"> -->
		<div style="width: 100%; z-index: 100;">
		          <header id="top" class="aj-new-top" style="top: 0px;">
		            
		            <!--******************************-->
		                <a href="/mobile/home">
		                    <img src="{{asset('assets/home/img/logo.png')}}" class="aj-qmm-banner-bg">
		                </a>
				        <div class="header_right">
		                    <a title="返回首页" href="/mobile/home" class="home-wrapper iconCom clearfix"><span class="head-home">
						        首页</span> </a>
		                    <a title="搜索" class="aj-search login-wrapper clearfix" href="/msearchpage">
					            <span class="qmm-icon-iconfont-search"></span>
		                    </a>
		                    <a class="side-wrapper iconCom clearfix aj-menu right_menu_btn">
		                        <span class="qmm-icon-iconfont-qita right_menu_btn"></span>
		                    </a>
				        </div>
		            <!--******************************-->
		            
		        </header>
	    </div>
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide"><img src="{{ asset('assets/home/img/gg1.png')}}" width="100%"></div>
		        <div class="swiper-slide"><img src="{{ asset('assets/home/img/gg2.jpg')}}" width="100%"></div>
		        <div class="swiper-slide"><img src="{{ asset('assets/home/img/gg3.png')}}" width="100%"></div>
		        <div class="swiper-slide"><img src="{{ asset('assets/home/img/gg4.jpg')}}" width="100%"></div>
		    </div>
		    <div class="swiper-pagination" ></div>
		</div>
<!-- 		<section id="list_logo">
			<div><a href="#" style="background-color: #ffb700;"></a><span>肯德基优惠券</span></div>
			<div><a href="#" style="background-color: #ff68b9;"></a><span>打车优惠券</span></div>
			<div><a href="#" style="background-color: #56b2ff;"></a><span>网购优惠券</span></div>
			<div><a href="#" style="background-color: #ff67b9;"></a><span>外卖红包</span></div>
			<div><a href="#" style="background-color: #a8dd99;"></a><span>电影票红包</span></div>
			<div><a href="#" style="background-color: #f61d4b;"></a><span>天天福利</span></div>
			<div><a href="#" style="background-color: #31bd80;"></a><span>酒店旅游</span></div>
			<div><a href="#" style="background-color: #3ea3ff;"></a><span>类别</span></div>
		</section> -->
		<div id="aj-four-icons-line" class="aj-mobile-module">
		            <ul class="aj-ul" style="display: block;">
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-shutiao" style="box-shadow: rgb(255, 183, 0) 0px 0px 2px; background-color: rgb(255, 183, 0);">
		                </span></a>
		                    <p class="aj-p">
		                        肯德基优惠券</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-qiche" style="box-shadow: rgb(255, 104, 185) 0px 0px 2px; background-color: rgb(255, 104, 185);">
		                </span></a>
		                    <p class="aj-p">
		                        打车优惠券</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-xiexiangbao" style="box-shadow: rgb(86, 178, 255) 0px 0px 2px; background-color: rgb(86, 178, 255);"></span></a>
		                    <p class="aj-p">
		                        网购优惠券</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-shipin" style="box-shadow: rgb(255, 103, 185) 0px 0px 2px; background-color: rgb(255, 103, 185);">
		                </span></a>
		                    <p class="aj-p">
		                        外卖红包</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-dianyingpiao" style="box-shadow: rgb(168, 221, 153) 0px 0px 2px; background-color: rgb(168, 221, 153);">
		                </span></a>
		                    <p class="aj-p">
		                        电影票红包</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-tiantianfuli" style="box-shadow: rgb(246, 29, 75) 0px 0px 2px; background-color: rgb(246, 29, 75);">
		                </span></a>
		                    <p class="aj-p">
		                        天天福利</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cplist"><span class="aj-a-bg qmm-icon-iconfont-jiudian" style="box-shadow: rgb(49, 189, 128) 0px 0px 2px; background-color: rgb(49, 189, 128);">
		                </span></a>
		                    <p class="aj-p">
		                        酒店旅游</p>
		                </li>
		                <li class="aj-li"><a class="aj-a" target="_blank" href="cate"><span class="aj-a-bg qmm-icon-iconfont-qita" style="box-shadow: rgb(62, 163, 255) 0px 0px 2px; background-color: rgb(62, 163, 255);">
		                </span></a>
		                    <p class="aj-p">
		                        类别</p>
		                </li>
		            </ul>
		        </div>
		<section id="business">
			<div id="business_top">
				<i></i>
				<span>热门商家</span>
			</div>
			<div id="business_content">
			<div><a href="#"><img src="{{ asset('assets/home/img/jd.png')}}" width="100%" alt=""></a><span>京东</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/wph.png')}}" width="100%" alt=""></a><span>唯品会</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/1haodian.gif')}}" width="100%" alt=""></a><span>1号店</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/jumei.png')}}" width="100%" alt=""></a><span>聚美优品</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/didi.png')}}" width="100%" alt=""></a><span>滴滴打车</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/uber.png')}}" width="100%" alt=""></a><span>优步</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/eleme.png')}}" width="100%" alt=""></a><span>饿了么</span></div>
			<div><a href="#"><img src="{{ asset('assets/home/img/gome.png')}}" width="100%" alt=""></a><span>国美在线</span></div>
			</div>
		</section>
		<section id="articles">
			<ul>
				<li class="art_activ">最新</li>
				<li>最热</li>
				<li>打车</li>
				<li>外卖</li>
				<li>电影票</li>
				<li>理财</li>
				<li>流量话费</li>
				<li>旅游酒店</li>
				<li>美妆</li>
			</ul>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
			<section class="article" onclick="window.location.href='article.html'">
				<div><img src="{{ asset('assets/home/img/demo.png')}}" alt=""></div>
				<div class="desc">
					<div class="d1"><span>同程网</span><span>09-05 16:42</span></div>
					<div class="d2">9月6日最新滴滴打车券</div>
					<div class="d3"><span>打车券合集</span><span>阅读数:2498411</span></div>
				</div>
			</section>
		</section>
	<script src="{{ asset('assets/home/js/swiper.min.js')}}"></script>
	<script src="{{ asset('assets/home/js/jq.js')}}"></script>
	<script>
	var swiper = new Swiper('.swiper-container', {
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    spaceBetween: 30,
	});
	</script>
	<script>
		$(function(){
			$('#articles ul li').click(function(){
				$(this).toggleClass('art_activ').siblings().removeClass();
			});
			$(window).scroll(function(e){
				// console.log($(this).scrollTop());
				// alert('aaa');
				// if($(this).scrollTop()>=parseInt($(window).height()*0.2))
				// {
				// 	// $('#gotop').show();
				// 	alert('aaa');
				// }
				// else if($(this).scrollTop()==0)
				// {
				// 	$('#gotop').hide();
				// }
			})
		})
	</script>
@endsection