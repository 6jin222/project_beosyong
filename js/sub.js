$(function () {
  //서브메뉴 제어 콘트롤
  if ($(".label").length > 0 && $(".optionList").length > 0) {
    const btn = $(".sub_nav article:eq(0)").find(".label");
    const list = $(".sub_nav article:eq(0)").find(".optionList");
    const btn1 = $(".sub_nav article:eq(1)").find(".label");
    const list1 = $(".sub_nav article:eq(1)").find(".optionList");
    console.log("=====" + btn.attr("class"));
    console.log("=====" + list.attr("class"));

    btn.click(function () {
      list.toggleClass("on", true);
      list1.toggleClass("on", false);
      btn.toggleClass("on", true);
      console.log("check1");
    });

    btn1.click(function () {
      list.toggleClass("on", false);
      list1.toggleClass("on", true);
      btn1.toggleClass("on", true);
      console.log("check2");
    });

    list.click(function () {
      list.toggleClass("on", false);
      console.log("check3");
    });

    list1.click(function () {
      list1.toggleClass("on", false);
      console.log("check4");
    });

    list.mouseleave(function () {
      list.toggleClass("on", false);
    });

    list1.mouseleave(function () {
      list1.toggleClass("on", false);
    });

    //외부 클릭시 서브메뉴 사라짐
    $("html").click(function (e) {
      if (!$(e.target).hasClass("label")) {
        list.toggleClass("on", false);
        list1.toggleClass("on", false);

        console.log("check5");
      }
    });

    //    list.addEventListener("click", function (event) {
    //  if (event.target.nodeName === "BUTTON") {
    //     btn.innerText = event.target.innerText;
    //      list.classList.remove("on");
    //		 console.log("check4");
    //     }
    //   });
  }

  // 마이페이지 - 개인정보변경
  // 버튼 이벤트
  $(".coll_option p").click(function () {
    $(".coll_option p").removeClass("on");
    $(this).addClass("on");
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
    if ($(".login_box").length > 0) {
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
  }

  loginboxHeightControl();

  // 브라우저 사이즈 변경시 로그인창 높이 제어
  var winWidth = $(window).width();
  $(window).resize(function () {
    ////console.log("1111111111111");

    loginboxHeightControl();
    popupPositionControl();
    eduListControl();
    if (this.resizeTO) {
      clearTimeout(this.resizeTO);
    }

    this.resizeTO = setTimeout(function () {
      $(this).trigger("resizeEnd");
    }, 100);
  });

  $("#signature").bind("change", function (e) {
    console.log("서명란 높이 변화 체크 콜백함수");
    popupPositionControl();
  });

  $(window).on("resizeEnd", function () {
    //console.log("222222222");
    var tempSize = $(window).width();

    if (winWidth != tempSize) {
      //console.log("333333");
      popupPositionControl();
      loginboxHeightControl();
      eduListControl();
      winWidth = tempSize;
    }
  });

  // 아코디언 이벤트 (FAQ 게시판 전용 스크립트)
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

  // 팝업
  // 팝업 닫기
  $(".popup_close, .pop_btn02")
    .not(".memo_btn, #pop_memo")
    .click(function () {
      $("body").css("overflow", "auto"); //body 스크롤바 생성
      $(".popup_view").css("visibility", "hidden");
      $(".pop_ver02").css("visibility", "hidden");
      $(".popup_bg").hide();
    });

  // 팝업 열기
  $(".pop_open").click(function () {
    $(".popup_view").css({
      top:
        ($(window).height() - $(".popup_view").outerHeight()) / 2 +
        $(window).scrollTop() +
        "px",
      left:
        ($(window).width() - $(".popup_view").outerWidth()) / 2 +
        $(window).scrollLeft() +
        "px",
      //팝업창을 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
    });
    $("body").css("overflow", "hidden"); //body 스크롤바 없애기
    $(".popup_view").css("visibility", "visible");
    $(".pop_ver02").css("visibility", "visible");
    $(".popup_bg").show();
  });

  $(".point_input_btn ").click(function () {
    $(".pop_withdraw").css({
      top:
        ($(window).height() - $(".pop_withdraw").outerHeight()) / 2 +
        $(window).scrollTop() +
        "px",
      left:
        ($(window).width() - $(".pop_withdraw").outerWidth()) / 2 +
        $(window).scrollLeft() +
        "px",
      //팝업창을 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
    });
    $("body").css("overflow", "hidden"); //body 스크롤바 없애기

    $(".pop_withdraw").css("visibility", "visible");
    $(".popup_bg").show();
  });

  $(".bunny_sign_btn ").click(function () {
    $(".bunny .popup_view.pop_ver02").css({
      top:
        ($(window).height() - $(".bunny .popup_view.pop_ver02").outerHeight()) /
          2 +
        $(window).scrollTop() +
        "px",
      left:
        ($(window).width() - $(".bunny .popup_view.pop_ver02").outerWidth()) /
          2 +
        $(window).scrollLeft() +
        "px",
      visibility: "visible",
      //팝업창을 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
    });
    $("body").css("overflow", "hidden"); //body 스크롤바 없애기
    //$(".bunny .popup_view.pop_ver02").show();
    $(".popup_bg").show();
  });

  $(".sign_btn").click(function () {
    $(".popup_view.sign").css({
      top:
        ($(window).height() - $(".popup_view.sign").outerHeight()) / 2 +
        $(window).scrollTop() +
        "px",
      left:
        ($(window).width() - $(".popup_view.sign").outerWidth()) / 2 +
        $(window).scrollLeft() +
        "px",
      visibility: "visible",
      //팝업창을 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
    });
    $("body").css("overflow", "hidden"); //body 스크롤바 없애기
    //$(".popup_view.sign").css("visibility","visible");
    $(".popup_bg").show();
  });

  function popupPositionControl() {
    if ($(".popup_view").length > 0) {
      for (var i = 0; i < $(".popup_view").length; i++) {
        var tempTop =
          ($(window).height() - $($(".popup_view")[i]).outerHeight()) / 2 +
          $(window).scrollTop() +
          "px";
        var tempLeft =
          ($(window).width() - $($(".popup_view")[i]).outerWidth()) / 2 +
          $(window).scrollLeft() +
          "px";
        $($(".popup_view")[i]).css("top", tempTop);
        $($(".popup_view")[i]).css("left", tempLeft);
      }
    }
  }

  //a 태그 링크 없을 시 새로고침 방지
  $("a").click(function () {
    if ($(this).attr("href") == "#") {
      return false;
    }
  });

  //교육자료실 퀵리스트
  //fadeIn/Out 효과
  var quickListIs = false;

  $(".quick_btn").click(function () {
    if ($(window).width() < 768) {
      quickListIs = true;
      $(".quick_btn").addClass("on");
      $(".quick_menu")
        .show()
        .css({
          top:
            ($(window).height() - $(".quick_menu").outerHeight()) / 2 +
            $(window).scrollTop() +
            "px",
          //퀵리스트를 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
        });
      $("body").css("overflow", "hidden"); //body 스크롤바 없애기
      $(".quick_bg").show();
    }
  });

  function eduListControl() {
    if ($(".quick_menu").length > 0) {
      console.log("quick_menu===" + $(".quick_menu").css("display"));

      var WinW = $(window).width();

      if (WinW > 768) {
        quickListIs = false;
        $(".quick_bg").css("display", "none");
        //if($( "h1" ).css( "color" ))

        if ($(".quick_menu").css("display") == "none") {
          $(".quick_menu").css("display", "block");
        }
        $(".tab_list").css("top", "0");
        $("body").css("overflow", "auto"); //body 스크롤바 생성
        $(".quick_btn").removeClass("on");
      } else {
        console.log("추가클래스존재여부=" + $(".quick_btn on").length);
        if (quickListIs == true) {
          $(".quick_menu").css("display", "block");
        } else {
          $(".quick_menu").css("display", "none");
        }
      }
    }
  }

  /* $(window).on("resize", function () {
	   console.log("quick_menu==="+$(".quick_menu").css("display"));

    var WinW = $(window).width();
    if (WinW > 768) {
		  $(".quick_bg").css("display", "none");
		  //if($( "h1" ).css( "color" ))

		 if($(".quick_menu").css("display")=="none"){
			$(".quick_menu").css("display","block")
		 }
		  $(".tab_list").css("top", "0");
		  $("body").css("overflow", "auto"); //body 스크롤바 생성
    }else{
		$(".quick_menu").css("display","none")
	}

  });*/

  $(".t_l_close").click(function () {
    quickListIs = false;
    $(".quick_btn").removeClass("on");
    $(".quick_menu").hide();
    $(".quick_bg").hide();
    $("body").css("overflow", "auto"); //body 스크롤바 생성
  });

  //아코디언 효과
  $(".t_l_ham").click(function () {
    if ($(".subList:visible").length > 0) {
      $(".subList").slideUp(300); //display :none 일떄
    } else {
      $(".subList").slideDown(300); //display :block 일떄
    }
  });
  $(".t_l_title").click(function () {
    $(this).next(".subList").slideToggle(300);
  });

  //메모하기 팝업창 스크롤생성 없이 닫기
  $(".memo_btn").click(function () {
    $(".pop_ver02").css("visibility", "hidden");
    $(".popup_bg").hide();
    if ($(window).width() > 768) {
      $("body").css("overflow", "auto"); //body 스크롤바 생성
    }
  });
});
