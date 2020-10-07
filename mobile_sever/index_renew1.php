<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>단체예약 통합홍보사이트</title>
	<!-- load fonts first -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">

	<!-- css -->
	<link rel="stylesheet" href="http://static.ocean2you.co.kr/css/renew/reset_custom.css">
	<link rel="stylesheet" href="http://static.ocean2you.co.kr/css/jquery-ui.css">

	<!-- 190510 swiper -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" href="http://static.withutour.co.kr/css/init_m_v1.0.2.css">

	<!-- js -->
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

	<!-- 190510 swiper     -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="http://static.withutour.co.kr/js/m/init_v1.0.2.js"></script>

	<script src="http://static.go.co.kr/js/jquery_ui.js"></script>
	<script src="http://static.go.co.kr/js/datepicker_ko.js"></script>
</head>
<?php
	$group_tel = "010-3066-4665";
?>
<body>

	<h1 class="hidden">단체예약 통합홍보사이트</h1>

	<!-- 190307 전체 이미지 경로 수정 -->
	<div class="wrapper">

		<!-- header -->
		<header class="header">
			<!-- 181219 header 수정 -->
			<h1 class="logo"><img src="http://img.withutour.co.kr/logo.png" alt="위드유투어 로고"></h1>
			<!-- 190109 입점문의 추가 -->
			<a href="tel:<?=$group_tel?>" class="cust-txt"><img src="http://img.withutour.co.kr/m/btn_contact.png"
					alt="입점문의 <?=$group_tel?>"></a>

			<!-- menu -->
			<!-- 190510 -->
			<nav class="nav" id="g-nav">
				<div class="nav-container">
					<div class="nav-list-box clr">
						<ul class="nav-list">
							<!-- <li class="item on"><a href="#home">홈</a></li> -->
							<li class="item on"><a href="#gangwon">강원</a></li>
							<li class="item"><a href="#seoulgg">서울</a></li>
							<li class="item"><a href="#chungcheong">충청</a></li>
							<li class="item"><a href="#gyeongsang">경상</a></li>
							<li class="item"><a href="#jeolla">전라</a></li>
							<li class="item"><a href="#jeju">제주</a></li>
						</ul>
						<script>
							$(function() {
								$("ul.nav-list li > a").click(function(e) {
									$("ul.nav-list li").removeClass("on");
									$(this).parent("li").addClass("on");
								});
							});
						</script>
					</div>
					<!-- <a href="javascript:;" class="btn-menu" title="메뉴 열기"><span class="cell">시설<br/>전체</span></a> -->
				</div>
			</nav>

			<!-- menu popup -->
			<div class="menu">
				<div class="container">
					<div class="menu-wrap">
						<div class="menu-tit-area">
							<p class="menu-tit">보유시설 목록</p>
						</div>
						<div class="menu-txt-area">
							<div class="menu-txt-box">
								<p class="p-0">단체예약 추천시설</p>
								<p class="p-1">
									워크샵, 세미나, 연수/교육, 야유회, 체육대회,<br>
									MT/OT, 수학여행/졸업여행, 수련회, 체험/현장학습 등<br>
									단체행사를 위한 최적의 숙박과 행사 프로그램을 제공해 드립니다.
								</p>
							</div>
							<!-- 190307 메뉴 추가 및 이미지 경로 변경 -->
							<ul class="menu-list clr">
								<li class="nth-1">
									<a href="http://m.ramadapt.co.kr/group/" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list01.jpg"
												alt="라마다앙코르평택호텔 이미지"></figure>
										<span class="menu-sub-txt">경기도 / 평택</span>
										<p class="menu-txt">라마다앙코르호텔</p>
									</a>
								</li>
								<li class="nth-2">
									<a href="http://ocean2you.co.kr/group/" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list02.jpg"
												alt="오션투유리조트 이미지"></figure>
										<span class="menu-sub-txt">강원도 / 고성</span>
										<p class="menu-txt">오션투유리조트</p>
									</a>
								</li>
								<!--<li class="nth-3">
										<a href="http://www.bscondo.co.kr/group/" target="_blank">
											<figure><img src="http://img.withutour.co.kr/m/menu/img_list03.jpg" alt="도고BS콘도 이미지"></figure>
											<span class="menu-sub-txt">충남 / 아산</span>
											<p class="menu-txt">도고BS콘도</p>
										</a>
									</li>-->
								<li class="nth-15">
									<a href="http://www.valuehotelgangneung.com" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list16.jpg" alt="강릉밸류호텔 이미지"></figure>
										<span class="menu-sub-txt">강원도 / 강릉</span>
										<p class="menu-txt">강릉씨베이호텔</p>
									</a>
								</li>
								<li class="nth-3">
									<a href="#none" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list04.jpg"
												alt="지리산중앙하이츠 이미지"></figure>
										<span class="menu-sub-txt">전북 / 남원</span>
										<p class="menu-txt">지리산중앙하이츠</p>
									</a>
								</li>
								<li class="nth-4">
									<a href="#none" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list05.jpg"
												alt="코레스코치악 이미지"></figure>
										<span class="menu-sub-txt">강원도 / 횡성</span>
										<p class="menu-txt">코레스코치악</p>
									</a>
								</li>
								<li class="nth-5">
									<a href="#none" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list06.jpg"
												alt="연호리조트 이미지"></figure>
										<span class="menu-sub-txt">강원도 / 속초</span>
										<p class="menu-txt">연호리조트</p>
									</a>
								</li>
								<!-- 190412 메뉴 추가 -->
								<li class="nth-6">
									<a href="#none">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list14.jpg"
												alt="무주덕유산리조트 이미지"></figure>
										<span class="menu-sub-txt">전북 / 무주</span>
										<p class="menu-txt">무주덕유산리조트</p>
									</a>
								</li>
								<li class="nth-7">
									<a href="http://m.go.co.kr/home/view/?p_no=HU1y" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list08.jpg"
												alt="청풍리조트 이미지"></figure>
										<span class="menu-sub-txt">충북 / 제천</span>
										<p class="menu-txt">청풍리조트</p>
									</a>
								</li>
								<li class="nth-8">
									<a href="http://m.go.co.kr/home/view/?p_no=G0dz" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list09.jpg"
												alt="덕구온천리조트 이미지"></figure>
										<span class="menu-sub-txt">경북 / 울진</span>
										<p class="menu-txt">덕구온천리조트</p>
									</a>
								</li>
								<!-- 링크 없는 업체는 #none으로 표기 -->
								<li class="nth-9">
									<a href="#none">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list10.jpg"
												alt="경주마우나오션리조트 이미지"></figure>
										<span class="menu-sub-txt">경북 / 경주</span>
										<p class="menu-txt">경주마우나오션리조트</p>
									</a>
								</li>
								<li class="nth-10">
									<a href="http://www.go.co.kr/home/view/?p_no=Gk1yFG0e" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list11.jpg"
												alt="여수오션힐 호텔 이미지"></figure>
										<span class="menu-sub-txt">전남 / 여수</span>
										<p class="menu-txt">여수오션힐 호텔</p>
									</a>
								</li>
								<li class="nth-11">
									<a href="#none">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list12.jpg"
												alt="부산 글로리콘도 이미지"></figure>
										<span class="menu-sub-txt">부산 / 해운대구</span>
										<p class="menu-txt">부산 글로리콘도</p>
									</a>
								</li>
								<li class="nth-12">
									<a href="#none">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list13.jpg"
												alt="무창포 비체펠리스 이미지"></figure>
										<span class="menu-sub-txt">충남 / 보령</span>
										<p class="menu-txt">무창포 비체펠리스</p>
									</a>
								</li>
								<li class="nth-13">
									<a href="http://m.go.co.kr/home/view/?p_no=Gk94G2sS" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list07.jpg"
												alt="영종스카이리조트 이미지"></figure>
										<span class="menu-sub-txt">인천 / 중구</span>
										<p class="menu-txt">영종스카이리조트</p>
									</a>
								</li>
								<li class="nth-14">
									<a href="http://www.go.co.kr/home/view/?p_no=GEh4Eg==" target="_blank">
										<figure><img src="http://img.withutour.co.kr/m/menu/img_list15.jpg"
												alt="빠레브호텔 이미지"></figure>
										<span class="menu-sub-txt">제주 / 서귀포</span>
										<p class="menu-txt">빠레브호텔</p>
									</a>
								</li>
							</ul>
						</div>
						<a href="javascript:;" class="btn-close" title="메뉴 닫기"><span class="a-i-x"></span></a>
					</div>
				</div>
			</div>
		</header>

		<!-- contents -->
		<div class="contents">
			<section class="visual">
				<div class="container">
					<h2 class="tit"><img src="http://img.withutour.co.kr/m/tit_visual.png"
							alt="단체행사를 계획하세요? 기업, 학생, 모임 등 단체행사 고민 끝!"></h2>
					<p class="p-0">20년 이상 단체행사 경험으로<br>원하시는 비용, 장소, 프로그램 등 모든 것을 완벽하게 맞춰드립니다.</p>
					<a href="tel:<?=$group_tel?>" class="cust-txt">
						<span>지금 전화주세요 !</span>
						<span class="tell-txt"><?=$group_tel?></span>
					</a>
					<!-- 181224 버튼 수정 -->
					<a href="#etc" class="btn-ft type-2">단체행사 상담접수</a>
				</div>
			</section>

			<!-- 190510 -->
			<section class="group">
				<div class="container clr">
					<div class="cf group-container on" id="home">
						<div class="group-list-wrapper cf">
							<div id="gangwon" class="cf"></div>
							<div id="airsky" class="group-list hotel airsky">
                                <div class="link-area" onclick="window.open('http://hotelairsky.co.kr')" title="에어스카이호텔 단체문의 페이지 이동">
                                    <div class="tit-area">
                                        <div class="type-box clr">
                                            <span class="type-adr">인천 영종도</span>
                                            <span class="type-stay">호텔 <span class="type-en">HOTEL</span></span>
                                        </div>
                                        <dl class="tit-box">
                                            <dt class="tit">에어스카이호텔</dt>
                                            <dd class="sub-tit">영종, 인천, 김포, 강화, 부천, 시흥

                                            </dd>
                                        </dl>
                                    </div>

                                    <div class="txt-area">
                                        <figure class="img-type"><img src="http://img.withutour.co.kr/airsky/img_type.jpg" alt="에어스카이호텔"></figure>
                                        <p class="p-1 c-red">※ 총 475객실 호텔 <span class="hidden-xxs">/ 1,200명 동시 이용</span></p>
                                    </div>
                                </div>
                            </div>
                            <!--//.에어스카이 호텔-->
							<div id="ocean" class="group-list resort ocean">
								<div class="link-area" onclick="window.open('http://ocean2you.co.kr/group/')" title="오션투유리조트 단체문의 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">강원도 고성</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">오션투유리조트</dt>
											<dd class="sub-tit">속초, 고성, 설악, 동해, 강릉</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/ocean/img_type.jpg" alt="오션투유리조트"></figure>
										<p class="p-1 c-red">※ 총 250객실 호텔 <span class="hidden-xxs">/ 1,800명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.ocean-->
							<div id="value" class="group-list hotel value">
								<div class="link-area" onclick="window.open('http://www.valuehotelgangneung.com')" title="강릉씨베이호텔 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">강원도 강릉/속초</span>
											<span class="type-stay">호텔 <span class="type-en">HOTEL</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">강릉씨베이호텔</dt>
											<dd class="sub-tit">강릉, 속초, 양양, 동해, 삼척</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/value/img_type.jpg" alt="강릉씨베이호텔"></figure>
										<p class="p-1 c-red">※ 총 340개 객실 <span class="hidden-xxs">/ 1,500명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.value-->
							<div id="chiak" class="group-list resort chiak">
								<div class="link-area" onclick="window.open('http://m.koresco-chiak.co.kr/group/')" title="코레스코 치악 콘도 단체문의 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">강원도 횡성</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">코레스코 치악 콘도</dt>
											<dd class="sub-tit">횡성, 원주, 평창, 제천, 홍천</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/chiak/img_type.jpg" alt="라마다앙코르평택호텔"></figure>
										<p class="p-1 c-red">※ 총 162객실 호텔 <span class="hidden-xxs">/ 1,000명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.chiak-->
							<div id="eonho" class="group-list resort eonho">
								<div class="link-area" onclick="window.open('http://m.eonhoresort.co.kr/group/')" title="연호리조트 단체문의 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">강원도 속초</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">연호리조트</dt>
											<dd class="sub-tit">속초, 고성, 설악, 동해, 강릉</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/eonho/img_type.jpg" alt="라마다앙코르평택호텔"></figure>
										<p class="p-1 c-red">※ 총 119객실 호텔 <span class="hidden-xxs">/ 1,000명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.eonho-->
							<div id="seoulgg" class="group-click-go"></div>
							<!-- <div id="yeongjong" class="group-list resort yeongjong">
								<div class="link-area" onclick="window.open('http://m.go.co.kr/home/view/?p_no=Gk94G2sS')" title="영종스카이리조트 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">인천 중구</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">영종스카이리조트</dt>
											<dd class="sub-tit">인천, 영종, 강화, 김포, 부천, 안산</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/yeongjong/img_type.jpg" alt="영종스카이리조트"></figure>
										<p class="p-1 c-red">※ 총 201개 객실</p>
									</div>
								</div>
							</div> -->
							<!--//.yeongjong-->
							<div id="chungcheong" class="group-click-go"></div>
							<div id="bscondo" class="group-list resort bscondo">
								<div class="link-area" onclick="window.open('http://m.bscondo.co.kr/')" title="청풍리조트 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">충남 아산</span>
											<span class="type-stay">리조트 RESORT</span>
										</div>
										<dl class="tit-box">
											<dt class="tit">도고BS콘도 리조트</dt>
											<dd class="sub-tit">아산, 도고, 당진, 천안, 평택</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/cheongpung/img_type.jpg" alt="청풍리조트"></figure>
										<p class="p-1 c-red">※ 총 230개 객실</p>
									</div>
								</div>
							</div>
							<!--//.bscondo-->

							<!--ramada주석-->
							<!-- <div id="ramada" class="group-list hotel ramada">
								<div class="link-area" onclick="window.open('http://m.ramadapt.co.kr/group/')" title="라마다앙코르평택호텔 단체문의 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">경기도 평택</span>
											<span class="type-stay">호텔 <span class="type-en">HOTEL</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">라마다앙코르평택호텔</dt>
											<dd class="sub-tit">평택, 천안, 당진, 서해, 아산, 도고</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/ramada/img_type.jpg" alt="라마다앙코르평택호텔"></figure>
										<p class="p-1 c-red">※ 총 302객실 호텔 <span class="hidden-xxs">/ 1,500명 동시 이용</span></p>
									</div>
								</div>
							</div> -->
							<!--//.ramada-->
							<div id="cheongpung" class="group-list resort cheongpung">
								<div class="link-area" onclick="window.open('http://m.go.co.kr/home/view/?p_no=HU1y')" title="청풍리조트 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">충북 제천</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">청풍리조트</dt>
											<dd class="sub-tit">제천</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/cheongpung/img_type.jpg" alt="청풍리조트"></figure>
										<p class="p-1 c-red">※ 총 230개 객실</p>
									</div>
								</div>
							</div>
							<!--//.cheongpung-->
							<div id="muchangpo" class="group-list resort muchangpo">
								<div class="link-area">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">충남 보령</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">비체펠리스</dt>
											<dd class="sub-tit">보령, 서천, 부여, 군산, 청양</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/muchangpo/img_type.jpg" alt="무창포 비체펠리스"></figure>
										<p class="p-1 c-red">※ 총 234개 객실</p>
									</div>
								</div>
							</div>
							<!--//.muchangpo-->
							<div id="muju" class="group-list resort muju">
								<div class="link-area">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">전북 무주</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">무주덕유산리조트</dt>
											<dd class="sub-tit">무주</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/muju/img_type.jpg" alt="무주덕유산리조트"></figure>
										<p class="p-1 c-red">※ 총 1,610개 객실 <span class="hidden-xxs">/ 7,300명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.muju-->
							<div id="gyeongsang" class="group-click-go"></div>
							<div id="deokguSpa" class="group-list resort deokguSpa">
								<div class="link-area" onclick="window.open('http://m.go.co.kr/home/view/?p_no=G0dz')" title="덕구온천리조트 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">경북 울진</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">덕구온천리조트</dt>
											<dd class="sub-tit">울진</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/deokguSpa/img_type.jpg" alt="덕구온천리조트"></figure>
										<p class="p-1 c-red">※ 총 172개 객실</p>
									</div>
								</div>
							</div>
							<!--//.deokguSpa-->
							<div id="mauna" class="group-list resort mauna">
								<div class="link-area">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">경북 경주</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">경주마우나오션리조트</dt>
											<dd class="sub-tit">경주</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/mauna/img_type.jpg" alt="경주마우나오션리조트"></figure>
										<p class="p-1 c-red">※ 총 109개 객실</p>
									</div>
								</div>
							</div>
							<!--//.mauna-->
							<div id="glory" class="group-list resort glory">
								<div class="link-area">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">부산 해운대구</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">부산 글로리콘도</dt>
											<dd class="sub-tit">해운대구</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/glory/img_type.jpg" alt="부산 글로리콘도"></figure>
										<p class="p-1 c-red">※ 총 224개 객실</p>
									</div>
								</div>
							</div>
							<!--//.glory-->
							<div id="jeolla" class="group-click-go"></div>
							<div id="namwon" class="group-list resort namwon">
								<div class="link-area" onclick="window.open('http://m.namwoncondo.kr/group/')" title="지리산 중앙하이츠 콘도 단체문의 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">전북 남원</span>
											<span class="type-stay">리조트 <span class="type-en">RESORT</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">지리산 중앙하이츠 콘도</dt>
											<dd class="sub-tit">남원, 전주, 광주, 순창, 담양</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/namwon/img_type.jpg" alt="지리산 중앙하이츠 콘도"></figure>
										<p class="p-1 c-red">※ 총 153객실 호텔 <span class="hidden-xxs">/ 1,000명 동시 이용</span></p>
									</div>
								</div>
							</div>
							<!--//.namwon-->
							<div id="oceanHill" class="group-list hotel oceanHill">
								<div class="link-area" onclick="window.open('http://www.go.co.kr/home/view/?p_no=Gk1yFG0e')" title="여수오션힐 호텔 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">전남 여수</span>
											<span class="type-stay">호텔 <span class="type-en">HOTEL</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">여수오션힐 호텔호텔</dt>
											<dd class="sub-tit">여수</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/oceanHill/img_type.jpg" alt="여수오션힐 호텔"></figure>
										<p class="p-1 c-red">※ 총 210개 객실</p>
									</div>
								</div>
							</div>
							<!--//.oceanHill-->
							<div id="jeju" class="group-click-go"></div>
							<div id="pavel" class="group-list hotel pavel">
								<div class="link-area" onclick="window.open('http://m.go.co.kr/home/view/?p_no=GEh4Eg==')" title="빠레브호텔 예약 페이지 이동">
									<div class="tit-area">
										<div class="type-box clr">
											<span class="type-adr">제주 서귀포</span>
											<span class="type-stay">호텔 <span class="type-en">HOTEL</span></span>
										</div>
										<dl class="tit-box">
											<dt class="tit">빠레브호텔</dt>
											<dd class="sub-tit">서귀포</dd>
										</dl>
									</div>

									<div class="txt-area">
										<figure class="img-type"><img src="http://img.withutour.co.kr/pavel/img_type.jpg" alt="빠레브호텔"></figure>
										<p class="p-1 c-red">※ 총 204개 객실</p>
									</div>
								</div>
							</div>
							<!--//.pavel-->
						</div>
					</div>
				</div>
			</section>

			<!-- 190307 태그 및 html위치 수정(PC와 같은 위치로 변경), 이미지 클래스 제거, 피씨 이미지 제거 / 타이틀 수정 및 서브타이틀 추가 -->
			<section class="facil-sec">
				<div class="container">
					<h2 class="sec-tit">단체 행사 목적 및 추천사례</h2>
					<p class="sec-sub-tit">기업, 종교, 가족, 학교, 팀, 조직 등이 원하시는 <br>모든 단체 행사에 매우 적합합니다.</p>
					<ul class="ul-list-2 clr">
						<li class="li-item">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/m/group/music_01.jpg"
									alt="춤연습장, 보컬연습실이 필요한 단체숙소로 추천">
								<figcaption>춤연습장, 보컬연습실이 필요한 단체숙소로 추천</figcaption>
							</figure>
							<p class="li-txt ht-1"><span>걸그룹 댄스연습실, 아이돌 대형연습실, 보이그룹 춤연습실, 뮤지컬 연습실, 댄스연습장, 대형연습장, 춤연습장,
									합숙연습실, 합숙연습장, 합숙연습, 보컬연습실</span></p>
						</li>
						<li class="li-item">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/m/group/music_02.jpg" alt="합주연습실이 필요한 단체숙소로 추천">
								<figcaption>합주연습실이 필요한 단체숙소로 추천</figcaption>
							</figure>
							<p class="li-txt ht-1"><span>관현악단 합주실, 오케스트라 합주연습실, 국악관현악단 합주연습장, 악단 합숙연습, 뮤지컬악단 합주장소, 교향악단
									합주연습장소, 현악단 연습장소, 교회현악단 합숙연습실, 교회관현악단 합숙연습장, 전자현악단 단체숙박, 국악현악단 단체숙소</span></p>
						</li>
						<li class="li-item">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/m/group/groupEvent_01.jpg"
									alt="초, 중, 고, 대학교, 학술답사 등의 단체숙소와 행사로 추천">
								<figcaption>초, 중, 고, 대학교, 학술답사 등의 단체숙소와 행사로 추천</figcaption>
							</figure>
							<p class="li-txt"><span>수학여행, 체험학습, 수련회, 체육대회, MT, OT, 답사, 학회, 고적답사,<br>유적답사, 문화유적답사,
									문화유산답사, 역사유산답사 등</span></p>
						</li>
						<li class="li-item">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/m/group/groupEvent_02.jpg"
									alt="회사, 기업, 종교, 가족 등의 단체숙소와 행사로 추천">
								<figcaption>회사, 기업, 종교, 가족 등의 단체숙소와 행사로 추천</figcaption>
							</figure>
							<p class="li-txt"><span>워크샵, 세미나, 연수원, 기업OT, 기업행사, 야유회, 신녀회, 송년회,<br>환갑, 회갑, 돌잔치, 결혼식, 상견례,
									환갑잔치, 칠순잔치 등</span></p>
						</li>
					</ul>
				</div>
			</section>

			<!-- 190307 고객사 추가 -->
			<section class="cust-sec">
				<div class="container">
					<h2 class="sec-tit">단체이용 고객사 안내</h2>
					<p class="sec-sub-tit">350여개 유수의 기업체는<br>물론 관,공기업을 고객사로 더욱 정진하고 있습니다.</p>
					
					<ul class="cust-list clr">
						<?php for($i = 1; $i < count($partner_arr); $i++) {
							$cnt = $i <= 9 ? "0".$i : $i; ?>
						<li class="list-<?=$i?>">
							<div class="list-area">
								<div class="list-box">
									<div class="list-img">
										<figure><img src="http://img.withutour.co.kr/cust/img_cust_logo_<?=$cnt?>.png" alt="<?=$partner_arr[$i]?>"></figure>
									</div>
									<p class="list-txt"><span><?=$partner_arr[$i]?></span></p>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
			</section>

			<!-- 181224 단체예약 문의 추가 -->
			<section id="etc" class="etc">
				<div class="container">
					<div class="d-cm">
						<p class="p-0">20년 경력의 특급플래너가 제시하는 최적의 플랜!</p>
						<p class="p-1">모든 것이 완벽한 리조트, 호텔에서 아름다운 추억을 만들어보세요!</p>
						<p class="p-2">중대형 규모의 객실시설에서 1~2,000명까지 동시 이용이 가능합니다.!</p>

						<div class="contact-pop type-2" id="contact-pop" style="z-index: 0;">
							<div class="d-top i-chk-bef">
								<span class="s-1">은 </span>필수 입력 사항입니다.
							</div>
							<form action="./state" method="post" id="iform">
								<input type="hidden" name="pid" value="<?=$_COOKIE["pid"]?>" />
								<input type="hidden" name="mode" value="group_insert" />
								<ul class="ul-tb nece">
									<li class="li-tr">
										<span class="s-lbl i-chk-aft">예약자</span>
										<input type="text" class="wd-1" name="name" maxlength="40">
										<hr class="show-xs">
										<span class="s-lbl i-chk-aft ml-1">연락처</span>
										<input type="number" class="wd-2" name="tel1" maxlength="3">
										<span class="mg-"></span>
										<input type="number" class="wd-2" name="tel2" maxlength="4">
										<span class="mg-"></span>
										<input type="number" class="wd-2" name="tel3" maxlength="4">
										<div class="show-xs"></div>
									</li>
									<li class="li-tr">
										<span class="s-lbl i-chk-aft">이메일</span>
										<input type="text" class="wd-3" name="email">
										<hr class="show-xs">
										<span class="s-lbl ml-1 i-chk-aft">시설선택</span>
										<select name="s_gubun" id="s_gubun" class="wd-1 wd-1-2">
											<option value="">선택하세요.</option>
											<?php for($i = 1; $i <= count($group_arr); $i++) { ?>
											<option value="<?=$group_arr[$i]["comp"]?>"><?=$group_arr[$i]["comp"]?></option>
											<?php } ?>
										</select>
									</li>
								</ul>
								<ul class="ul-tb">
									<li class="li-tr">
										<span class="s-lbl">단체명</span>
										<input type="text" class="wd-1" name="d_name">
										<hr class="show-xs">
										<span class="s-lbl ml-1">행사분류</span>
										<select name="h_gubun" id="h_gubun" class="wd-1 wd-1-2">
											<option value="수련회">수련회</option>
											<option value="워크샵/오티">워크샵/오티</option>
											<option value="세미나/단체행사">세미나/단체행사</option>
											<option value="학술모임">학술모임</option>
											<option value="각종잔치">각종잔치</option>
											<option value="기타">기타</option>
										</select>
									</li>
									<li class="li-tr">
										<span class="s-lbl">이용일</span>
										<input type="text" class="wd-4 sdate" name="date" placeholder="체크인" readonly="" id="datepicker">
										<select name="day" id="day" class="wd-1 wd-1-2">
											<option value="당일">당일</option>
											<option value="1박2일" selected="">1박 2일</option>
											<option value="2박3일">2박 3일</option>
											<option value="3박4일">3박 4일</option>
											<option value="4박5일">4박 5일</option>
											<option value="5박이상">5박 이상</option>
										</select>
									</li>
									<li class="li-tr">
										<span class="s-lbl">인원</span>
										<span class="s-txt">남자</span>
										<input type="number" class="wd-5" name="person_man" onchange="n_sum();" onkeyup="n_sum();"><span>명</span>
										<span class="s-txt">여자</span>
										<input type="number" class="wd-5" name="person_her" onchange="n_sum();" onkeyup="n_sum();"><span>명</span>
										<span class="mg-l"></span>
										<span class="s-txt">총 인원</span>
										<input type="number" class="wd-6" name="person_all" value="0" disabled=""><span>명</span>
									</li>
									<li class="li-tr">
										<span class="s-lbl">예산</span>
										<input type="text" class="wd-7" name="ex_price" onchange="getNumber(this);" onkeyup="getNumber(this);" style="text-align:right;"><span>원</span>
										<p class="p-1">※ 제시하신 예산범위에서 최적의 플랜을 제시해 드리겠습니다.</p>
									</li>
									<li class="li-tr">
										<span class="s-lbl ver-t">기타요청</span>
										<textarea name="content" id="" cols="30" rows="10" class="wd-8"></textarea>
									</li>
								</ul>
							</form>
						</div>
						<!--<center>
							<script src='https://www.google.com/recaptcha/api.js'></script>
							<div class="g-recaptcha" data-sitekey="6Lc0s4sUAAAAAA6NfIZ8-QuKkQaLxs83zZjrrL8Q"></div>
						</center>--->

						<p class="row-btn"><a class="a-btn" href="javascript:form_check();">단체 문의하기 <span class="ic-rArrow"></span></a></p>
						<input type="hidden" name="robot_check" value="N" />
					</div>
				</div>
			</section>
			<!--//END : 181224 단체예약 문의 추가 -->

			<!-- 190307 파트너 추가 -->
			<section class="pt-sec">
				<div class="container">
					<h2 class="sec-tit">위드유투어의 파트너가 되십시오!</h2>
					<p class="sec-sub-tit">
						가장 합리적인 방법으로 귀사의 시설 홍보와<br>판매촉진을 위해 위드유투어가 함께하겠습니다.<br>
						파트너 업체의 시설과 영업망을 공유하여 <br>가장 효율 높은 시너지를 만들겠습니다.
					</p>
					<a href="tel:<?=$group_tel?>" class="cust-txt">
						<span>문의전화</span>
						<span class="tell-txt"><?=$group_tel?></span>
					</a>
				</div>
			</section>
			
			<script type="text/javascript">
			$(function() {
				$("#datepicker").datepicker({
					dateFormat:"yy-mm-dd",
					showAnim:"slideDown",
					dayNamesMin:["일","월","화","수","목","금","토"],
					minDate: "<?=date("Y-m-d")?>",
					//maxDate: "2017-",
					changeMonth: true,
					changeYear: true
				});
			});
			function n_sum(){
				var value1 = $('input[name=person_man]').val();
				var value2 = $('input[name=person_her]').val();

				$.ajax({
					url : "state.php",
					type : "post",
					data: "mode=person_sum&num1="+value1+"&num2="+value2+"",
					success: function(data) {
						$(".wd-6").val(data);
					}
				});
			}

			function form_check(){
				/*if (grecaptcha.getResponse() == ""){
					alert("'로봇이 아닙니다.'를 체크해주세요.");
					return;
				}*/
				$.ajax({
					type	:	"POST",
					data	:	$("#iform").serialize(),
					url		:	"./state.php",
					success :	function(e){
						var res = e.split("||");
						if(res[0] == "SUCC"){
							alert("단체문의사항 접수가 완료되었습니다.");
							location.reload();
						}else if(res[0] == "FAIL" && res[2] != ''){
							alert(res[1]);
							$("input[name='"+res[2]+"']").focus();
						}else{
							alert("단체문의사항 접수에 실패하였습니다. 다시 시도해주세요.");
						}
					}
				});
				//document.iform.submit();
			}
			//자동으로 컴마 붙는 스크립트
			var rgx1 = /\D/g;
			var rgx2 = /(\d+)(\d{3})/; 

			function getNumber(obj){
				
				 var num01;
				 var num02;
				 num01 = obj.value;
				 num02 = num01.replace(rgx1,"");
				 num01 = setComma(num02);
				 obj.value =  num01;

			}
			function setComma(inNum){
				 
				 var outNum;
				 outNum = inNum; 
				 while (rgx2.test(outNum)) {
					  outNum = outNum.replace(rgx2, '$1' + ',' + '$2');
				  }
				 return outNum;

			}
			</script>
		</div>
		<?php
			include "./log.php";
		?>

		<!-- footer -->
		<footer id="footer" class="footer">
			<div class="container">
				<div class="cust-box">
					<a href="tel:<?=$group_tel?>" class="cust-txt">
						<span>단체관련 상담</span>
						<span class="tell-txt"><?=$group_tel?></span>
					</a>
					<p class="cust-txt type-2">
						<span>메일문의</span>
						<span class="mail-txt">help@<?=$dsite?>.co.kr</span>
					</p>
				</div>
				
				<div class="adr-box">
					<address>
						<?=SITE_company?><span class="mgl"></span>대표자 : <?=SITE_ceo?><br>
						<?=SITE_addr?><br>
						사업자등록번호 <?=SITE_company_num1?>
						<a href="javascript:;" onclick="window.open('http://www.ftc.go.kr/bizCommPop.do?wrkr_no=<?=str_replace("-", "", SITE_company_num1)?>&apv_perm_no=');" class="btn-bi">사업자정보확인</a>
					</address>
				</div>
				<?php
					$qry	= "select * from site_info where domain = 'go.co.kr'";
					$res	= $go_slave->query($qry);
					$rw		= $go_slave->fetch($res);
				?>
				
				<p class="logo"><img src="http://img.withutour.co.kr/logo_footer.png" alt="바로네트웍스"></p>
				<div class="adr-box">
					<address>
						<?=$rw["site_address"]?> <br><?=$rw["site_company"]?><br>
						대표이사 : <?=$rw["site_ceo"]?><span class="mgl"></span>사업자번호 : <?=$rw["site_num1"]?><br>
						통신판매업 : <?=$rw["site_num2"]?><br>
						여행업등록번호 : <?=$rw["site_num3"]?><br>
						여행영업보증서 : <?=$rw["site_num4"]?>
					</address>
				</div>
			</div>
		</footer>

		<!-- top button -->
		<a href="#top" class="btn-top"><span>TOP</span></a>

	</div>

</body>

</html>