<?php
$group_land = "Y";
include "/home/ebizdev/go.co.kr/config/config.php";
include "/home/ebizdev/go.co.kr/class/go_basic.class.php";
if($_SERVER["REMOTE_ADDR"] == "61.74.233.194" && S_FLAG == "WUT" && $_COOKIE["test"] == "test") {
	// include "./main/index.php";
	echo "<script>location.href = '/main'</script>";
	exit;
}
include "./group_arr.php";
switch(S_FLAG) {
	case "WUT":
		$base_css = base_css;
		$base_img = base_img;
		$base_js = base_static."/js";
		break;
	case "H":
		$base_css = base_css."/group";
		$base_img = base_img."/group";
		$base_js = base_js."/group";
		break;
}
define("group_img",	"http://img.withutour.co.kr");
?>
<!DOCTYPE html>
<!--[if IE 8]><html lang="ko-KR" class="no-js ie8 lt-ie10"><![endif]-->
<!--[if IE 9]><html lang="ko-KR" class="no-js ie9 lt-ie10"><![endif]-->
<!--[if !IE]><!-->
<html lang="ko-KR">
<!--<![endif]-->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>단체예약 통합홍보사이트</title>

	<meta name="robots" content="ALL" />
	<meta name="author" content="단체숙박 추천 위드유투어"/>
	<meta name="description" content="시설직접운영, MT, OT, 회사, 기업, 단체 워크샵, 야유회, 수학여행, 수련회, 체험학습 장소 추천"/>
	<meta name="classification" content="단체숙박 추천 위드유투어"/>
	<meta name="keywords" content="단체숙박 추천 위드유투어"/>

	<meta property="og:type" content="website">
	<meta property="og:title" content="단체숙박 추천 위드유투어">
	<meta property="og:description" content="시설직접운영, MT, OT, 회사, 기업, 단체 워크샵, 야유회, 수학여행, 수련회, 체험학습 장소 추천">
	<meta property="og:url" content="http://withutour.co.kr/">


	<!-- load fonts first -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
	
	<!-- css -->
	<link rel="stylesheet" href="http://static.ocean2you.co.kr/css/renew/reset_custom.css">
	<link rel="stylesheet" href="http://static.go.co.kr/css/jquery-ui.css">
	
	<link rel="stylesheet" href="<?=$base_css?>/init.css">
	
	<!-- js -->
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	
	<script src="<?=$base_js?>/common.js"></script>
	<script src="<?=$base_js?>/init.js"></script>
	<script src="http://static.go.co.kr/js/jquery_ui.js"></script>
	<script src="http://static.go.co.kr/js/datepicker_ko.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<?php
	//$group_tel = "010-3066-4665";
	$group_tel = site_tel;
?>

<body>
	<script type="text/javascript">
		function none() {
			
		}
	</script>

	<h1 class="hidden">단체예약 통합홍보사이트</h1>
	
	<div class="wrapper">
		
		<!-- header -->
		<header class="header">
			<h1 class="logo"><img src="<?=$base_img?>/logo.png" alt="로고"></h1>
			<!-- 190109 입점문의 추가 -->
			<a href="tel:<?=$group_tel?>" class="cust-txt"><img src="<?=group_img?>/btn_contact.png" alt="입점문의 <?=$group_tel?>"></a>
		</header>

		<?php if(S_FLAG == "WUT") { ?>
		<div class="r-wing">
			<a href="#none" class="move-group"><img src="http://img.withutour.co.kr/banner/bn_contact.png" alt="위드유투어 단체행사 문의접수"></a>
		</div>
		<?php
		}
		if($ebiz_ip == true) {
		?>
		<iframe src="/common/ebiz_counter.php" frameborder="0" style="position:fixed;z-index:999;width:400px;"></iframe>
		<?php
		}
		?>
		
		<!-- contents -->
		<div class="contents">
			<section class="visual">
				<div class="container">
					<h2 class="tit"><img src="<?=group_img?>/tit_visual.png" alt="단체행사를 계획하세요? 기업, 학생, 모임 등 단체행사 고민 끝!"></h2> 
					<p class="p-0">20년 이상 단체행사 경험으로<br>원하시는 비용, 장소, 프로그램 등 모든 것을 완벽하게 맞춰드립니다.</p>
					<p class="p-1">
						워크샵, 세미나, 연수/교육<br>
						야유회, 체육대회, MT/OT, 수학여행/졸업여행, 수련회, 체험/현장학습 등<br>
						단체행사를 위한 최적의 숙박과 행사 프로그램을 제공해 드립니다.
					</p>
					<a href="tel:<?=$group_tel?>" class="cust-txt">
						<span>지금 전화주세요 !</span>
						<span class="tell-txt"><?php // $group_tel?>010-3066-4665</span>
					</a>
				</div>
			</section>
			
			<section class="group">
				<div class="container clr">
					<!-- 기본 group-list클래스. 유형에 따라 hotel, resort 멀티클래스 추가. 해당 숙박시설명 멀티클래스 추가 -->
					<?php for($i = 1; $i <= count($group_arr); $i++) { ?>
					<div class="group-list <?=$group_arr[$i]["type"]?> <?=$group_arr[$i]["name"]?>">
						<div class="link-area">
							<div class="tit-area">
								<div class="type-box clr">
									<span class="type-adr"><?=$group_arr[$i]["addr"]?></span>
									<span class="type-stay"><?php echo $group_arr[$i]["type"] == "resort" ? "리조트 RESORT" : "호텔 HOTEL"; ?></span>
								</div>
								<dl class="tit-box">
									<dt class="tit"><?=$group_arr[$i]["comp"]?></dt>
									<dd class="sub-tit"><?=$group_arr[$i]["area"]?></dd>
								</dl>
							</div>
							
							<div class="txt-area">
								<figure class="img-type"><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_type.jpg" alt="<?=$group_arr[$i]["comp"]?>"></figure>
								<?php if(S_FLAG == "H") { ?>
								<p class="p-0">
									<?=$group_arr[$i]["cont"]?>
								</p>
								<p class="p-1 c-red"><?=$group_arr[$i]["room"]?></p>
								<?php } ?>

								<?php if($group_arr[$i]["name"] == "bscondo") { ?>
								<a href="http://bscondo.co.kr" target="_blank" class="btn-detail"><span>자세한 시설안내 보기</span></a> 
								<?php } else { ?>
								<a href="javascript:void(0);" class="btn-detail"><span>자세한 시설안내 보기</span></a> <!-- 상위에 새창이동으로 링크 걸려있음 -->
								<?php } ?>
							</div>
						</div>
						<?php if(S_FLAG == "H") { ?>
						<div class="txt-area">
							<ul class="img-list">
								<li><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_list01.jpg" alt="<?=$group_arr[$i]["comp"]?> 01"></li>
								<li><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_list02.jpg" alt="<?=$group_arr[$i]["comp"]?> 02"></li>
								<li><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_list03.jpg" alt="<?=$group_arr[$i]["comp"]?> 03"></li>
								<li><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_list04.jpg" alt="<?=$group_arr[$i]["comp"]?> 04"></li>
							</ul>
							<p class="p-2">단체이용을 위한 <span class="c-red">모든 시설과 환경이<br>구비된 <?php echo $group_arr[$i]["type"] == "resort" ? "중대형 콘도 리조트" : "고급호텔 서비스"; ?></span>입니다.</p>
							<figure class="img-map"><img src="<?=group_img?>/<?=$group_arr[$i]["name"]?>/img_map.jpg" alt="<?=$group_arr[$i]["comp"]?> 지도"></figure>
						</div>
						
						<div class="link-area" onclick="window.open('<?=$group_arr[$i]["link"]?>')" title="<?=$group_arr[$i]["comp"]?> 단체문의 페이지 이동">
							<a href="#none" class="btn-detail"><span>자세한 시설안내 보기</span></a>
							<div class="tit-area">
								<div class="type-box clr">
									<span class="type-adr"><?=$group_arr[$i]["addr"]?></span>
									<span class="type-stay"><?php echo $group_arr[$i]["type"] == "resort" ? "리조트 RESORT" : "호텔 HOTEL"; ?></span>
								</div>
								<dl class="tit-box">
									<dt class="tit"><?=$group_arr[$i]["comp"]?></dt>
									<dd class="sub-tit"><?=$group_arr[$i]["area"]?></dd>
								</dl>
							</div>
							
							<div class="txt-area">
								<div class="txt-list-area clr">
									<div class="txt-list-box">
										<p class="txt-list-tit">부대시설 개요</p>
										<ul class="txt-list">
											<?php foreach($group_arr[$i]["facil"] as $value) { ?>
											<li><?=$value?></li>
											<?php } ?>
										</ul>
									</div>
									<div class="txt-list-box">
										<p class="txt-list-tit">연계 프로그램</p>
										<ul class="txt-list">
											<?php foreach($group_arr[$i]["program"] as $value) { ?>
											<li><?=$value?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</section>

			<section class="facil-sec">
				<div class="container">
					<h2 class="sec-tit">단체 행사 목적 및 추천사례</h2>
					<p class="sec-sub-tit">기업, 종교, 가족, 학교, 팀, 조직 등이 원하시는 모든 단체 행사에 매우 적합합니다.</p>
					<ul class="ul-list-2 clr">
						<li class="li-item item-1">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/group/music_01.jpg" alt="춤연습장, 보컬연습실이 필요한 단체숙소로 추천">
								<figcaption>춤연습장, 보컬연습실이 필요한 단체숙소로 추천</figcaption>
							</figure>
							<p class="li-txt ht-1"><span>걸그룹 댄스연습실, 아이돌 대형연습실, 보이그룹 춤연습실, 뮤지컬 연습실, 댄스연습장, 대형연습장, 춤연습장, 합숙연습실, 합숙연습장, 합숙연습, 보컬연습실</span></p>
						</li>
						<li class="li-item item-2">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/group/music_02.jpg" alt="합주연습실이 필요한 단체숙소로 추천">
								<figcaption>합주연습실이 필요한 단체숙소로 추천</figcaption>
							</figure>
							<p class="li-txt ht-1"><span>관현악단 합주실, 오케스트라 합주연습실, 국악관현악단 합주연습장, 악단 합숙연습, 뮤지컬악단 합주장소, 교향악단 합주연습장소, 현악단 연습장소, 교회현악단 합숙연습실, 교회관현악단 합숙연습장, 전자현악단 단체숙박, 국악현악단 단체숙소</span></p>
						</li>
						<li class="li-item item-3">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/group/groupEvent_01.jpg" alt="초, 중, 고, 대학교, 학술답사 등의 단체숙소와 행사로 추천">
								<figcaption>초, 중, 고, 대학교, 학술답사 등의 단체숙소와 행사로 추천</figcaption>
							</figure>
							<p class="li-txt"><span>수학여행, 체험학습, 수련회, 체육대회, MT, OT, 답사, 학회, 고적답사,<br>유적답사, 문화유적답사, 문화유산답사, 역사유산답사 등</span></p>
						</li>
						<li class="li-item item-4">
							<figure>
								<span class="s-bg"></span>
								<img src="http://img.bscondo.co.kr/group/groupEvent_02.jpg" alt="회사, 기업, 종교, 가족 등의 단체숙소와 행사로 추천">
								<figcaption>회사, 기업, 종교, 가족 등의 단체숙소와 행사로 추천</figcaption>
							</figure>
							<p class="li-txt"><span>워크샵, 세미나, 연수원, 기업OT, 기업행사, 야유회, 신녀회, 송년회,<br>환갑, 회갑, 돌잔치, 결혼식, 상견례, 환갑잔치, 칠순잔치 등</span></p>
						</li>
					</ul>
				</div>
			</section>
			<?php if(S_FLAG == "WUT") { ?>
			<section class="cust-sec">
				<div class="container">
					<h2 class="sec-tit">단체이용 고객사 안내</h2>
					<p class="sec-sub-tit">350여개 유수의 기업체는 물론 관,공기업을 고객사로 더욱 정진하고 있습니다.</p>
					
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
			<?php } ?>
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
								<input type="hidden" name="robot_check" value="N">
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
											<option value="<?=$group_arr[$i]["comp"]?>"><?php echo "[{$group_arr[$i]["addr3"]}] ".$group_arr[$i]["comp"]?></option>
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

						<center>
							<script src="https://www.google.com/recaptcha/api.js"></script>
							<div class="g-recaptcha" data-sitekey="6Lc0s4sUAAAAAA6NfIZ8-QuKkQaLxs83zZjrrL8Q"></div>
						</center>

						<p class="row-btn"><a class="a-btn" href="javascript:form_check();">단체 문의하기 <span class="ic-rArrow"></span></a></p>
					</div>
				</div>
			</section>
			<?php if(S_FLAG == "WUT") { ?>
			<section class="pt-sec">
				<div class="container">
					<h2 class="sec-tit">위드유투어의 파트너가 되십시오!</h2>
					<p class="sec-sub-tit">
						가장 합리적인 방법으로 귀사의 시설 홍보와 판매촉진을 위해 위드유투어가 함께하겠습니다.<br>
						파트너 업체의 시설과 영업망을 공유하여 가장 효율 높은 시너지를 만들겠습니다.
					</p>
					<a href="tel:010-3066-4665" class="cust-txt">
						<span>문의전화</span>
						<span class="tell-txt">010-3066-4665</span>
					</a>
				</div>
			</section>
			<?php } ?>
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
				if (grecaptcha.getResponse() == ""){
					alert("'로봇이 아닙니다.'를 체크해주세요.");
					return;
				} else {
					$("input[name='robot_check']").val("Y");
				}
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
			function select(comp) {
				$("#s_gubun").val(comp);
			}
			</script>
		</div>

		<div class="group-pop" style="display: none">
			<?php for($i = 1; $i <= count($group_arr); $i++) {
				//$group_tel = $group_arr[$i]["name"] == "value" ? "010-4460-3435" : "010-3066-4665";
/*
				switch($group_arr[$i]["name"]){
					case "ramada":
					case "ocean":
						$group_tel = "010-3066-4665";
					default :
						$group_tel = "010-4460-3435";
							
				}
*/
				if($group_arr[$i]["name"] == "ramada" || $group_arr[$i]["name"] == "ocean" || $group_arr[$i]["name"] == "value" || $group_arr[$i]["name"] == "airsky"){
					$group_tel = "010-3066-4665";
				}else{
					$group_tel = "010-4460-3435";
				}
				$default = $group_arr[$i]["default"];
				$facil = $group_arr[$i]["facil"];
				$around = $group_arr[$i]["around"];
				?>
			<div class="pop-list <?=$group_arr[$i]["type"]?> <?=$group_arr[$i]["name"]?>" style="display: none">
				<div class="pop-area">
					<div class="pop-box clr">
						<div class="img-box">
							<div class="type-box clr">
								<span class="type-adr"><?=$group_arr[$i]["addr"]?></span>
								<span class="type-stay"><?php echo $group_arr[$i]["type"] == "resort" ? "리조트" : "호텔"; ?></span>
							</div>
							<figure class="group-img">
								<img src="http://img.withutour.co.kr/<?=$group_arr[$i]["name"]?>/img_type_pop.jpg" alt="<?=$group_arr[$i]["comp"]?>">
							</figure>
						</div>
						<div class="info-box">
							<p class="info-tit"><?=$group_arr[$i]["comp"]?> <span class="pull-right tell-txt">견적문의 <?=$group_tel?></p>
							<ul class="info-list">
								<li>
									<p class="p-1">주소</p>
									<p class="p-2"><?=$group_arr[$i]["addr2"]?></p>
								</li>
								<li>
									<p class="p-1">건축규모</p>
									<p class="p-2"><?=$group_arr[$i]["scale"]?></p>
								</li>
								<li>
									<p class="p-1">총 객실</p>
									<p class="p-2"><?=$group_arr[$i]["room2"]?></p>
								</li>
								<li>
									<p class="p-1">기본시설</p>
									<p class="p-2">
										<?php for($j = 0; $j < count($default); $j++) {
											echo $j == 0 ? $default[$j] : " / ".$default[$j];
										} ?>
									</p>
								</li>
								<li>
									<p class="p-1">부대시설</p>
									<p class="p-2"><?php for($j = 0; $j < count($facil); $j++) {
											echo $j == 0 ? $facil[$j] : " / ".$facil[$j];
										} ?></p>
								</li>
								<li>
									<p class="p-1">주변안내</p>
									<p class="p-2"><?php for($j = 0; $j < count($around); $j++) {
											echo $j == 0 ? $around[$j] : " / ".$around[$j];
										} ?></p>
								</li>
								<?php if($group_arr[$i]["group"] != "") { ?>
								<li class="lst">
									<p class="p-1">단체시설</p>
									<p class="p-2">
										<?=$group_arr[$i]["group"]?>
										<span class="t-mark">※ 워크샵, 컨퍼런스, 가족모임 등 이용목적에 적합하게 세팅해 드립니다.</span>
									</p>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="group-btn-box">
						<div class="group-btn clr">
							<a href="javascript:;" onclick="select('<?=$group_arr[$i]["comp"]?>');" class="btn-com btn-group">견적 요청하기</a>
							<?php if($i != 10 && $i != 12 && $i != 13 && $i != 14) { ?>
							<a href="<?=$group_arr[$i]["link"]?>" target="_blank" class="btn-com" title="페이지로 새창 이동">시설 상세보기</a>
							<?php } ?>
							<a href="javascript:;" class="btn-close">창 닫기</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php
			/*유입카운트*/
			include "./log.php";
		?>
		
		<!-- footer -->
		<footer class="footer">
			<div class="container">
				<div class="adr-box">
					<address>
						<?=SITE_company?><span class="mgl"></span>대표자 : <?=SITE_ceo?><br>
						<?=SITE_addr?><span class="mgl"></span>사업자등록번호 <?=SITE_company_num1?><a href="javascript:;" onclick="window.open('http://www.ftc.go.kr/bizCommPop.do?wrkr_no=<?=str_replace("-", "", SITE_company_num1)?>&apv_perm_no=', 'communicationViewPopup', 'width=870, height=500');" class="btn-bi">사업자정보확인</a>
					</address>
				</div>

				<?php
					$qry	= "select * from site_info where domain = 'go.co.kr'";
					$res	= $go_slave->query($qry);
					$rw		= $go_slave->fetch($res);

				?>
				
				<p class="logo"><img src="<?=group_img?>/logo_footer.png" alt="바로네트웍스"></p>
				<div class="adr-box">
					<address>
						<?=$rw["site_address"]?> <?=$rw["site_company"]?><br>
						대표이사 : <?=$rw["site_ceo"]?><span class="mgl"></span>사업자번호 : <?=$rw["site_num1"]?><span class="mgl"></span>통신판매업 : <?=$rw["site_num2"]?><br>
						여행업등록번호 : <?=$rw["site_num3"]?><span class="mgl"></span>여행영업보증서 : <?=$rw["site_num4"]?>
					</address>
				</div>
				
				<div class="cust-box">
					<a href="tel:<?=$group_tel?>" class="cust-txt">
						<span>단체관련 상담</span>
						<span class="tell-txt">010-3066-4665</span>
					</a>
					<p class="cust-txt type-2">
						<span>메일문의</span>
						<span class="mail-txt">help@<?=$dsite?>.co.kr</span>
					</p>
				</div>
				
				<div class="link-box">
					<ul class="link-list clr">
						<li><img src="<?=group_img?>/f_icon01.gif" alt="국내여행사 부문 랭키닷컴 1위"></li>
						<li><a href="javascript:util.regist_pop('registration02')"><img src="<?=group_img?>/f_icon02.gif" alt="관광사업등록"></a></li>
						<li><a href="javascript:util.regist_pop('registration01')"><img src="<?=group_img?>/f_icon03.gif" alt="서울보증보험"></a></li>
						<li><img src="<?=group_img?>/f_icon04.gif" alt="안전결제"></li>
						<li class="li-mg"><img src="<?=group_img?>/f_icon05.gif" alt="KISA"></li>
						<li class="li-mg"><a href="#none" onclick="onopen();"><img src="<?=group_img?>/f_icon06.gif" alt="공정거래위원회"></a></li>
					</ul>
					<script language="JavaScript">
						function onopen() {
							var site_com = "<?=str_replace('-', '', $rw['site_num1'])?>";
							var url = "http://www.ftc.go.kr/info/bizinfo/communicationViewPopup.jsp?wrkr_no=" + site_com;
							window.open(url, "communicationViewPopup", "width=750, height=700;");
						}
					</script>
				</div>
			</div>
		</footer>
		
	</div>

</body>

</html>