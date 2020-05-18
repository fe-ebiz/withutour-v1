<?php
$group_arr = array();
$i = 1;

$group_arr[$i]["type"] = "hotel";
$group_arr[$i]["name"] = "airsky";
$group_arr[$i]["link"] = "http://hotelairsky.co.kr";
$group_arr[$i]["addr"] = "인천 영종도";
$group_arr[$i]["comp"] = "에어스카이호텔";
$group_arr[$i]["area"] = "인천, 영종도, 인천공항, 서해, 시흥, 김포";
// $group_arr[$i]["cont"] = "라마다앙코르평택에서는 평택항의 노을,<br>
// 						서해대교 전망은 가장 편안한 마음의<br>
// 						휴식처가 되어 드립니다.<br>
// 						편안하고 다양한 부대시설은 물론, 평택호<br> 
// 						관광단지, 아산스파비스, 리솜스파캐슬과<br> 
// 						인접하여 단체행사의 큰 즐거움을 드립니다.";
$group_arr[$i]["room"] = "※ 총 475객실 호텔 / 1,200명 동시 이용";
$group_arr[$i]["default"] = array("화장실", "냉장고", "에어컨", "LED TV ", "어메니티", "Wi-Fi", "금고 등");
$group_arr[$i]["facil"] = array("레스토랑", "세미나툼 ", "컨퍼런스룸", "비즈니스센터", "편의점 등");






// $group_arr[$i]["type"] = "hotel";
// $group_arr[$i]["name"] = "ramada";
// $group_arr[$i]["link"] = "http://m.ramadapt.co.kr/group/";
// $group_arr[$i]["addr"] = "경기도 평택";
// $group_arr[$i]["comp"] = "라마다앙코르평택호텔";
// $group_arr[$i]["area"] = "평택, 천안, 당진, 서해, 아산, 도고, 인천";
// $group_arr[$i]["cont"] = "라마다앙코르평택에서는 평택항의 노을,<br>
// 						서해대교 전망은 가장 편안한 마음의<br>
// 						휴식처가 되어 드립니다.<br>
// 						편안하고 다양한 부대시설은 물론, 평택호<br> 
// 						관광단지, 아산스파비스, 리솜스파캐슬과<br> 
// 						인접하여 단체행사의 큰 즐거움을 드립니다.";
// $group_arr[$i]["room"] = "※ 총 302객실 호텔 / 1,500명 동시 이용";
// $group_arr[$i]["facil"]= array("레스토랑", "휘트니스", "컨퍼런스룸", "건식 사우나", "룸서비스", "펫호텔", "야외테라스", "세탁실");
// $group_arr[$i]["program"]= array("워터파크", "온천,스파체험", "테마파크", "레크레이션", "산행, 트레킹", "레일바이크", "즐거운 체험관광", "풍부한 주변관광");



// $group_arr[$i]["type"] = "resort";
// $group_arr[$i]["name"] = "bscondo";
// $group_arr[$i]["link"] = "http://www.bscondo.co.kr/group/";
// $group_arr[$i]["addr"] = "충남 아산";
// $group_arr[$i]["comp"] = "도고BS콘도 리조트";
// $group_arr[$i]["area"] = "아산, 도고, 당진, 천안, 평택";
// $group_arr[$i]["cont"] = "도고BS콘도 리조트는 국내 최대 온천지인<br>
// 						충남아산에 위치하여 많은 분들께<br>
// 						사랑받고 있는 종합리조트입니다.<br>
// 						온천, 스파, 워터파크는 물론 주변의<br>
// 						볼거리, 놀거리가 가득하여 단체행사 등을<br>
// 						진행하시기에 최적의 장소입니다.";
// $group_arr[$i]["room"] = "※ 총 200객실 호텔 / 1,500명 동시 이용";
// $group_arr[$i]["facil"]= array("바베큐장", "한식당", "대식장", "연회장", "분임토의실", "노래방", "편의점");
// $group_arr[$i]["program"]= array("온천체험", "스파체험", "워터파크", "테마파크", "레크레이션", "즐거운 체험관광", "풍부한 주변관광");

$i++;
$group_arr[$i]["type"] = "resort";
$group_arr[$i]["name"] = "ocean";
$group_arr[$i]["link"] = "http://www.ocean2you.co.kr/group/";
$group_arr[$i]["addr"] = "강원도 고성";
$group_arr[$i]["comp"] = "오션투유리조트";
$group_arr[$i]["area"] = "속초, 고성, 설악, 동해, 강릉";
$group_arr[$i]["cont"] = "천혜의 절경, 삼포해변 배경의 오션투유는<br>
						학교 및 기업의 단체에 최적의 장소입니다.<br>
						워크숍, 세미나, 교육연수 등 단체 활동을<br>
						위한 다양한 부대시설이 준비되어 있습니다.<br> 
						인근에 설악산, 해수욕장들과 인접하여<br> 
						더욱 즐거운 시간을 드립니다.";
$group_arr[$i]["room"] = "※ 총 250객실 호텔 / 1,800명 동시 이용";
$group_arr[$i]["facil"]= array("레스토랑", "휘트니스", "컨퍼런스룸", "건식 사우나", "룸서비스", "펫호텔", "야외테라스", "세탁실");
$group_arr[$i]["program"]= array("캠프파이어", "조개캐기체험", "전동바이크체험", "바다낚시", "워터파크", "산행, 등산", "수상레포츠", "불꽃놀이", "즐거운 체험관광", "풍부한 주변관광");
switch(S_FLAG) {
	case "WUT":
		$i++;
		$group_arr[$i]["comp"] = "강릉씨베이호텔";
		
		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "namwon";
		$group_arr[$i]["link"] = "http://m.namwoncondo.kr/group/";
		$group_arr[$i]["addr"] = "전북 남원";
		$group_arr[$i]["comp"] = "지리산 중앙하이츠 콘도";
		$group_arr[$i]["area"] = "남원, 전주, 광주, 순창, 담양";
		$group_arr[$i]["cont"] = "지리산 중앙하이츠 콘도는 지리산<br>
								국립공원 근처에 위치하여<br>
								천혜의 대자연을 감상할 수 있습니다.<br>
								지리산, 남원, 광한루, 구룡폭포, 청계동 계곡<br>
								등의 관광지가 인접하여 단체행사에 더 큰<br>
								재미를 선사해드립니다.";
		$group_arr[$i]["room"] = "※ 총 153객실 호텔 / 1,000명 동시 이용";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "chiak";
		$group_arr[$i]["link"] = "http://m.koresco-chiak.co.kr/group/";
		$group_arr[$i]["addr"] = "강원도 횡성";
		$group_arr[$i]["comp"] = "코레스코 치악 콘도";
		$group_arr[$i]["area"] = "횡성, 원주, 평창, 제천, 홍천";
		$group_arr[$i]["cont"] = "코레스코치악콘도는 치악산국립공원에<br>
								인접하여 휴양과 편안한 부대시설은 물론<br>
								매화산, 구룡산, 다양한 스키장 등과<br>
								근거리에 있는 등 산악회, 등산, 트래킹을<br>
								비롯한 다양한 단체행사에<br>
								최적의 접근성을 자랑합니다.";
		$group_arr[$i]["room"] = "※ 총 162객실 호텔 / 1,000명 동시 이용";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "eonho";
		$group_arr[$i]["link"] = "http://m.eonhoresort.co.kr/group/";
		$group_arr[$i]["addr"] = "강원도 속초";
		$group_arr[$i]["comp"] = "연호리조트";
		$group_arr[$i]["area"] = "속초, 고성, 설악, 동해, 강릉";
		$group_arr[$i]["cont"] = "설악산과 동해바다를 모두 품고 있는<br>
								연호리조트는 모든 종류의 단체행사에<br>
								최적의 장소입니다.<br>
								속초시내와도 가깝고 주변의 수많은<br>
								관광지가 인접해 있어 다양한 단체행사에<br>
								최고의 즐거움을 약속드립니다.";
		$group_arr[$i]["room"] = "※ 총 119객실 호텔 / 1,000명 동시 이용";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "yeongjong";
		$group_arr[$i]["link"] = "http://www.go.co.kr/home/view/?p_no=Gk94G2sS";
		$group_arr[$i]["addr"] = "인천 중구";
		$group_arr[$i]["comp"] = "영종스카이리조트";
		$group_arr[$i]["area"] = "중구";
		$group_arr[$i]["room"] = "※ 총 201개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "cheongpung";
		$group_arr[$i]["link"] = "http://m.go.co.kr/home/view/?p_no=HU1y";
		$group_arr[$i]["addr"] = "충북 제천";
		$group_arr[$i]["comp"] = "청풍리조트";
		$group_arr[$i]["area"] = "제천";
		$group_arr[$i]["room"] = "※ 총 230개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "deokguSpa";
		$group_arr[$i]["link"] = "http://m.go.co.kr/home/view/?p_no=G0dz";
		$group_arr[$i]["addr"] = "경북 울진";
		$group_arr[$i]["comp"] = "덕구온천리조트";
		$group_arr[$i]["area"] = "울진";
		$group_arr[$i]["room"] = "※ 총 172개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "mauna";
		$group_arr[$i]["addr"] = "경북 경주";
		$group_arr[$i]["comp"] = "경주마우나오션리조트";
		$group_arr[$i]["area"] = "경주";
		$group_arr[$i]["room"] = "※ 총 109개 객실";

		$i++;
		$group_arr[$i]["type"] = "hotel";
		$group_arr[$i]["name"] = "oceanHill";
		$group_arr[$i]["link"] = "http://www.go.co.kr/home/view/?p_no=Gk1yFG0e";
		$group_arr[$i]["addr"] = "전남 여수";
		$group_arr[$i]["comp"] = "여수오션힐 호텔호텔";
		$group_arr[$i]["area"] = "여수";
		$group_arr[$i]["room"] = "※ 총 210개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "glory";
		$group_arr[$i]["addr"] = "부산 해운대구";
		$group_arr[$i]["comp"] = "부산 글로리콘도";
		$group_arr[$i]["area"] = "해운대구";
		$group_arr[$i]["room"] = "※ 총 224개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "muchangpo";
		$group_arr[$i]["addr"] = "충남 보령";
		$group_arr[$i]["comp"] = "무창포 비체펠리스";
		$group_arr[$i]["area"] = "보령";
		$group_arr[$i]["room"] = "※ 총 234개 객실";

		$i++;
		$group_arr[$i]["type"] = "resort";
		$group_arr[$i]["name"] = "muju";
		$group_arr[$i]["addr"] = "전북 무주";
		$group_arr[$i]["comp"] = "무주덕유산리조트";
		$group_arr[$i]["area"] = "무주";
		$group_arr[$i]["room"] = "※ 총 1,610개 객실 (7,300명 동시 이용)";

		$i++;
		$group_arr[$i]["type"] = "hotel";
		$group_arr[$i]["name"] = "pavel";
		$group_arr[$i]["link"] = "http://m.go.co.kr/home/view/?p_no=GEh4Eg==";
		$group_arr[$i]["addr"] = "제주 서귀포";
		$group_arr[$i]["comp"] = "빠레브호텔";
		$group_arr[$i]["area"] = "서귀포";
		$group_arr[$i]["room"] = "※ 총 204개 객실";

		$partner_arr = array("", "GE", "금호타이어", "대한전선", "삼일회계법인", "한국교직원공제회", "현대글로비스", "현대자동차", "맥킨지", "기아자동차", "동국제강", "아우디코리아", "한국시설안전공단", "현대모비스", "삼성디스플레이", "건강보험심사평가원", "녹십자", "롯데푸드", "농심", "한국전력", "혼다코리아", "지방해양수산청", "국군복지단", "대성산업", "삼성물산", "폭스바겐", "한화시스템", "히타치조센", "신세계인터내셔날");
		break;
}
?>