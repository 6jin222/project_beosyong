$(function () {
  //서브메뉴 제어 콘트롤
  if ($(".label").length > 0 && $(".optionList").length > 0) {
    const btn = document.querySelector(".label");
    const list = document.querySelector(".optionList");

    btn.addEventListener("click", function (event) {
      list.classList.toggle("on");
      btn.classList.toggle("on");
    });

    list.addEventListener("mouseleave", function (event) {
      list.classList.remove("on");
    });

    //외부 클릭시 서브메뉴 사라짐
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
  }

  // 마이페이지 - 개인정보변경
  // 버튼 이벤트
  $(".coll_option p").click(function () {
    $(".coll_option p").removeClass("on");
    $(this).addClass("on");
  });

  // 마이페이지 - 마이페이지 홈
  // 팝업 닫기
  $(".popup_close, .pop_btn02").click(function () {
    $(".pop_recomend").hide();
    $(".pop_account").hide();
    $(".pop_withdraw").hide();
    $(".pop_ver02").hide();
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
  if ($(this).hasClass("datepicker")) {
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
  }

  $.fn.hasHorizontalScrollBar = function () {
    return this.get(0) ? this.get(0).scrollHeight > this.innerHeight() : false;
  };

  // 로그인창
  function loginboxHeightControl() {
    var winWidthTemp = $(window).width();
    var loginHeight_max = $(".login_box").height();

    if (winWidthTemp > 768) {
      var loginHeight_max = 761;
    } else {
      loginHeight_max = 560;
    }

    //console.log("스크롤바여부"+$('.sub').hasHorizontalScrollBar());
    console.log("로그인박스높이1=" + loginHeight_max);

    if ($(".sub").length > 0) {
      $(".sub").css("height", $(window).innerHeight());
      var paddingTop = parseInt($(".login_box").css("padding-top"));
      var paddingBot = parseInt($(".login_box").css("padding-bottom"));
      var paddingTotal = paddingTop + paddingBot;
      console.log("실행=" + $(window).innerHeight());
      console.log(paddingTotal);

      if ($(".sub").hasHorizontalScrollBar() == false) {
        $(".login_box").css("height", $(window).innerHeight() - paddingTotal);
        console.log("로그인박스높이2=" + $(".login_box").height());
      } else {
        $(".login_box").css("height", loginHeight_max);
        console.log("로그인박스높이3=" + loginHeight_max);
        // $(".login_box").css("padding-bottom"))

        //    if(winWidthTemp>768){
        //		console.log("768해상도이상");
        //		  $(".login_box").css("height", loginHeight_max);
        //	}else{
        //		console.log("768해상도이하");
        //		 $(".login_box").css("height", loginHeight_max);
        //	}
      }
    }
  }

  loginboxHeightControl();

  // 브라우저 사이즈 변경시 로그인창 높이 제어
  var winWidth = $(window).width();
  $(window).resize(function () {
    //console.log("1111111111111");

    loginboxHeightControl();
    if (this.resizeTO) {
      clearTimeout(this.resizeTO);
    }

    this.resizeTO = setTimeout(function () {
      $(this).trigger("resizeEnd");
    }, 100);
  });

  $(window).on("resizeEnd", function () {
    console.log("222222222");
    var tempSize = $(window).width();

    if (winWidth != tempSize) {
      console.log("333333");
      loginboxHeightControl();
      winWidth = tempSize;
    }
  });

  // join 아코디언
  window.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("details").forEach(function (item) {
      item.addEventListener("toggle", (event) => {
        let toggled = event.target;
        if (toggled.attributes.open) {
          /* 열었으면 */
          /* 나머지 다른 열린 아이템을 닫음 */
          document.querySelectorAll("details[open]").forEach(function (opened) {
            if (toggled != opened)
              /* 현재 열려있는 요소가 아니면 */
              opened.removeAttribute("open"); /* 열림 속성 삭제 */
          });
        }
      });
    });
  });

  // 회원가입
  // 기존계정연결 팝업
  $(".withdrawal_btn02").click(function () {
    $(".pop_ver02").show();
    $(".popup_bg").show();
  });
});
