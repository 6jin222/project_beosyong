$(function () {
  const btn = document.querySelector(".label");
  const list = document.querySelector(".optionList");
  btn.addEventListener("click", function (event) {
    list.classList.toggle("on");
    btn.classList.toggle("on");
  });
  list.addEventListener("mouseleave", function (event) {
    list.classList.remove("on");
  });

  $("html").click(function (e) {
    if (!$(e.target).hasClass("label")) {
      list.classList.remove("on");
      console.log("check2");
    }
  });

  list.addEventListener("click", function (event) {
    if (event.target.nodeName === "BUTTON") {
      btn.innerText = event.target.innerText;
      list.classList.remove("on");
    }
  });
});

$(function () {
  // 마이페이지 - 개인정보변경
  // 버튼 이벤트
  $(".coll_option p").click(function () {
    $(".coll_option p").removeClass("on");
    $(this).addClass("on");
  });

  // 마이페이지 - 마이페이지 홈
  // 추천링크 팝업
  $(".popup_close, .pop_btn02").click(function () {
    $(".pop_recomend").hide();
    $(".pop_account").hide();
    $(".pop_withdraw").hide();
    $(".popup_bg").hide();
  });

  // 마이페이지 - 출금
  // 출금신청 팝업
  $(".point_input_btn").click(function () {
    $(".pop_withdraw").show();
    $(".popup_bg").show();
  });

  // 계좌정보 섹션 변경 버튼
  $(".mypageWithdraw_box .title_btn.chang").click(function () {
    $(".mypageWithdraw_box .accountInfo").hide();
    $(".mypageWithdraw_box .accountInfo_chang").show();
  });

  // 마이페이지 - 캠페인 내역
  //검색창 달력
  $(".datepicker").datepicker();

  $.datepicker.setDefaults({
    dateFormat: "yy-mm-dd",
    prevText: "이전 달",
    nextText: "다음 달",
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    dayNames: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    showMonthAfterYear: true,
    yearSuffix: "년",
  });

  // 로그인창
  $(".sub").css("height", $(window).height());
  $(".login_box").css("height", $(window).height());
});
