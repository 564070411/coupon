@extends('home.layout')
@section('content')
		<div style="width: 100%; z-index: 100;">
			<header id="top" class="aj-new-top" style="top: 0px;">

				<a class="aj-back qmm-icon-circle-left" onclick="$(document).trigger('aj.goback')"></a>
				<h1 style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">打车租车优惠</h1>
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
		<div class="dealout" style="padding-top: 0px;" id="body">
			<!--<div>
			<a href="http://www.quanmama.com/huodong/p2pwap?utm_source=toptop" style="display:block;font-size:0;" target="_blank">
				<img src="http://image2.juanlaoda.com/AdminImageUpload/5146848p2pwap.jpg" style="width: 100%" />
			</a>
		</div>
		-->
		<div id="aj-mobile-wrap">
			<div id="aj-shop-index-page">

			 <div id="aj-top-types"> 
					<div class="aj-one-type aj-mobile-module" style="height: 180px;">
						<div class="aj-header">
							<div class="aj-color-border" style="background-color: rgb(86, 178, 255);"></div>
							<div class="aj-color-title">
								<span>热门打车租车商家</span>
							</div>
						</div>
						<div class="aj-content aj-content-inside-roll">

							<ul class="aj-ul">

								<li class="aj-li">
									<a href="/mquan_xiaojukeji" class="aj-a">
										<img src="http://image3.juanlaoda.com/AdminImageUpload/1455587券妈妈进驻商家logo200100滴滴_20151113_看图王.png" class="aj-a-img" alt="滴滴打车优惠券"></a>
									<p class="aj-p">滴滴打车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_uber" class="aj-a">
										<img src="http://image3.juanlaoda.com/AdminImageUpload/1214875券妈妈进驻商家logo200100Uber_20151113_看图王.png" class="aj-a-img" alt="优步优惠券"></a>
									<p class="aj-p">优步</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_shenzhouzhuanche" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/1636980神州专车.png" class="aj-a-img" alt="神州专车优惠券"></a>
									<p class="aj-p">神州专车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_didapinche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/2225173嘀嗒拼车.png" class="aj-a-img" alt="嘀嗒拼车优惠券"></a>
									<p class="aj-p">嘀嗒拼车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_yihaozhuanche" class="aj-a">
										<img src="http://image3.juanlaoda.com/AdminImageUpload/364681920150803133922.jpg" class="aj-a-img" alt="一号专车优惠券"></a>
									<p class="aj-p">一号专车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_atzuche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/1919158凹凸共享租车.png" class="aj-a-img" alt="凹凸共享租车优惠券"></a>
									<p class="aj-p">凹凸共享租车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_ppzuche" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/2018953pp租车.png" class="aj-a-img" alt="pp租车优惠券"></a>
									<p class="aj-p">pp租车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_yongche" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/3112825y.jpg" class="aj-a-img" alt="易到用车优惠券"></a>
									<p class="aj-p">易到用车</p>
								</li>

							</ul>

							<ul class="aj-ul">

								<li class="aj-li">
									<a href="/mquan_didikuaiche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/103181滴滴快车.png" class="aj-a-img" alt="滴滴快车优惠券"></a>
									<p class="aj-p">滴滴快车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_didishunfengche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/1541927滴滴顺风车.png" class="aj-a-img" alt="滴滴顺风车优惠券"></a>
									<p class="aj-p">滴滴顺风车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_didizhuanche" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/376429ddzc.png" class="aj-a-img" alt="滴滴专车优惠券"></a>
									<p class="aj-p">滴滴专车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_dididaijia" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/15178940.png" class="aj-a-img" alt="滴滴代驾优惠券"></a>
									<p class="aj-p">滴滴代驾</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_edaijia" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/2532445e代驾.png" class="aj-a-img" alt="e代驾优惠券"></a>
									<p class="aj-p">e代驾</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_1hai" class="aj-a">
										<img src="http://image2.juanlaoda.com/AdminImageUpload/3210774yihai.png" class="aj-a-img" alt="一嗨租车优惠券"></a>
									<p class="aj-p">一嗨租车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_shenzhouzuche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/1729692神州租车.png" class="aj-a-img" alt="神州租车优惠券"></a>
									<p class="aj-p">神州租车</p>
								</li>

								<li class="aj-li">
									<a href="/mquan_aayongche" class="aj-a">
										<img src="http://image1.juanlaoda.com/AdminImageUpload/34216430.png" class="aj-a-img" alt="aa租车优惠券"></a>
									<p class="aj-p">aa租车</p>
								</li>

							</ul>

						</div>
					</div>
				</div>

				
				<div class="aj-s-mid">
					<div style="display: block" class="aj-block aj-mid-content">
						<div class="aj-ul-wrap-for-bg">
							<ul class="list list_preferential dealout">
								<li class="zdm_list_li" data-id="1712028">
									<div class="image_wrap"> <i class=""></i>
										<div class="image">
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
												<img alt="9月7日最新滴滴打车券 打车券合集" src="http://www.quanmama.com/AdminImageUpload/53334085457.gif"></a>
										</div>

									</div>
									<address>

										<a href="/mquan_xiaojukeji">滴滴打车</a>
									</address>
									<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
										<h2>9月7日最新滴滴打车券</h2>
									</a>
									<div class="tips">
										<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html"> <em>打车券合集</em>
										</a>
										<span>
											<span class="read-num">阅读数:</span>
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">9659</a>
										</span>
									</div>
								</li>
								<li class="zdm_list_li" data-id="1712028">
									<div class="image_wrap"> <i class=""></i>
										<div class="image">
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
												<img alt="9月7日最新滴滴打车券 打车券合集" src="http://www.quanmama.com/AdminImageUpload/53334085457.gif"></a>
										</div>

									</div>
									<address>

										<a href="/mquan_xiaojukeji">滴滴打车</a>
									</address>
									<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
										<h2>9月7日最新滴滴打车券</h2>
									</a>
									<div class="tips">
										<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html"> <em>打车券合集</em>
										</a>
										<span>
											<span class="read-num">阅读数:</span>
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">9659</a>
										</span>
									</div>
								</li>
								<li class="zdm_list_li" data-id="1712028">
									<div class="image_wrap"> <i class=""></i>
										<div class="image">
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
												<img alt="9月7日最新滴滴打车券 打车券合集" src="http://www.quanmama.com/AdminImageUpload/53334085457.gif"></a>
										</div>

									</div>
									<address>

										<a href="/mquan_xiaojukeji">滴滴打车</a>
									</address>
									<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
										<h2>9月7日最新滴滴打车券</h2>
									</a>
									<div class="tips">
										<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html"> <em>打车券合集</em>
										</a>
										<span>
											<span class="read-num">阅读数:</span>
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">9659</a>
										</span>
									</div>
								</li>
								<li class="zdm_list_li" data-id="1712028">
									<div class="image_wrap"> <i class=""></i>
										<div class="image">
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
												<img alt="9月7日最新滴滴打车券 打车券合集" src="http://www.quanmama.com/AdminImageUpload/53334085457.gif"></a>
										</div>

									</div>
									<address>

										<a href="/mquan_xiaojukeji">滴滴打车</a>
									</address>
									<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
										<h2>9月7日最新滴滴打车券</h2>
									</a>
									<div class="tips">
										<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html"> <em>打车券合集</em>
										</a>
										<span>
											<span class="read-num">阅读数:</span>
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">9659</a>
										</span>
									</div>
								</li>
								<li class="zdm_list_li" data-id="1712028">
									<div class="image_wrap"> <i class=""></i>
										<div class="image">
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
												<img alt="9月7日最新滴滴打车券 打车券合集" src="http://www.quanmama.com/AdminImageUpload/53334085457.gif"></a>
										</div>

									</div>
									<address>

										<a href="/mquan_xiaojukeji">滴滴打车</a>
									</address>
									<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">
										<h2>9月7日最新滴滴打车券</h2>
									</a>
									<div class="tips">
										<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html"> <em>打车券合集</em>
										</a>
										<span>
											<span class="read-num">阅读数:</span>
											<a target="_blank" href="http://m.quanmama.com/mzdm/1712028.html">9659</a>
										</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					</div>
			</div>
			<div id="aj-delay-page">
				<img class="img" src="http://www.quanmama.com/AdminImageUpload/20148150838532.jpg"></div>
		</div>

	</div>
@endsection('content')