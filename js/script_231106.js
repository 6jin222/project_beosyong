$(function () {
  //AOS 플러그인 애니메이션
  AOS.init({
    disable: function () {
      var desktop = 1280;
      return window.innerWidth < desktop;
    }, // 1280px 이상일 때 disable
  });

  //모바일 네비게이션 메뉴 fadeIn/Out 효과
  $(".gnb_btn").click(function () {
    $(".menu_mo").addClass("on");
  });
  $(".gnb_close").click(function () {
    $(".menu_mo").removeClass("on");
  });

  //모바일 네비게이션 메뉴 아코디언 효과
  $(".gnb_mo > ul > li > a").click(function () {
    $(this).next(".subGnb").slideToggle(300);
    $(this)
      .toggleClass("on")
      .parent("li")
      .siblings("li")
      .children("a")
      .removeClass("on");
    $(this).parent("li").siblings("li").children(".subGnb").slideUp(200);
  });

  //pc 네비게이션 메뉴 slideDown 효과
  $(".gnb_pc > ul > li").mouseover(function () {
    $(".subGnb").stop().show();
    $(".gnb_pc").addClass("on");
    $(this).children("a").addClass("on");
  });
  $(".gnb_pc > ul > li").mouseout(function () {
    $(".subGnb").stop().hide();
    $(".gnb_pc").removeClass("on");
    $(this).children("a").removeClass("on");
  });

  //slick : 상단배너 상하 롤링
  $(document).ready(function () {
    $(".top_slider").slick({
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
    });
  });

  $(".topBn_colse").click(function () {
    $("#top_banner").hide();
  });

  //따라다니는 배너
  function stiky_custom(id) {
    var tid = $(id);
    var tid_t = tid.offset().top;
    var window_t = $(window).scrollTop();
    // console.log(tid_t, window_t)

    if (origin_val.top <= window_t) {
      tid.css("position", "fixed").css("top", 0).css("width", "100%");
    } else {
      tid.css("position", origin_val.position).css("top", origin_val.top);
    }
  }

  var sticky_id = ".fixBar";
  var sticky_id_d = $(sticky_id);
  var origin_val = {};
  origin_val.top = $(sticky_id).offset().top;
  origin_val.position = $(sticky_id).css("position");

  $(window).scroll(function () {
    stiky_custom(sticky_id);
  });

  //slick : contents 버전1 슬라이더
  $(document).ready(function () {
    $(".slick01").slick({
      rows: 5,
      slidesToShow: 1,
      slidesToScroll: 1,
      slidesPerRow: 2,
      autoplay: true,
      arrows: false,
      dots: true,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            rows: 3,
            slidesPerRow: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            rows: 2,
            slidesPerRow: 3,
          },
        },
      ],
    });
  });

  //slick : contents 버전2 슬라이더
  $(document).ready(function () {
    $(".slick02").slick({
      rows: 5,
      slidesToShow: 1,
      slidesToScroll: 1,
      slidesPerRow: 1,
      autoplay: true,
      arrows: false,
      dots: true,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            rows: 3,
            slidesPerRow: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            rows: 2,
            slidesPerRow: 1,
          },
        },
      ],
    });
  });

  //campaign 숫자 카운팅 애니메이션
  $(".counter").counterUp({ delay: 20, time: 2000 });

  //campaign 리스트
  $(window)
    .resize(function () {
      if (window.innerWidth > 1280) {
        // 다바이스 크기가 1200이상일때
        $(".slick.ver03 .slick_box").slice(0, 20).show();
        $(".slick.ver03 #load").click(function (e) {
          e.preventDefault();
          $(".slick.ver03 .slick_box:hidden").slice(0, 5).fadeIn(200); // 클릭시 more 갯수 지저정
          if ($(".slick.ver03 .slick_box:hidden").length == 0) {
            // 컨텐츠 남아있는지 확인
            $("#load").fadeOut(100); // 컨텐츠 없을 시 버튼 사라짐
          }
        });
      } else if (window.innerWidth > 768) {
        $(".slick.ver03 .slick_box").slice(0, 9).show();
        $(".slick.ver03 #load").click(function (e) {
          e.preventDefault();
          $(".slick.ver03 .slick_box:hidden").slice(0, 3).fadeIn(200); // 클릭시 more 갯수 지저정
          if ($(".slick.ver03 .slick_box:hidden").length == 0) {
            // 컨텐츠 남아있는지 확인
            $("#load").fadeOut(100); // 컨텐츠 없을 시 버튼 사라짐
          }
        });
      } else {
        $(".slick.ver03 .slick_box").slice(0, 6).show();
        $(".slick.ver03 #load").click(function (e) {
          e.preventDefault();
          $(".slick.ver03 .slick_box:hidden").slice(0, 2).fadeIn(200); // 클릭시 more 갯수 지저정
          if ($(".slick.ver03 .slick_box:hidden").length == 0) {
            // 컨텐츠 남아있는지 확인
            $(".slick.ver03 #load").fadeOut(100); // 컨텐츠 없을 시 버튼 사라짐
          }
        });
      }
    })
    .resize();

  //slick : contents 버전3 슬라이더

  $(document).ready(function () {
    $(".slick03").slick({
      rows: 4,
      slidesToShow: 1,
      slidesToScroll: 1,
      slidesPerRow: 2,
      autoplay: true,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            rows: 2,
            slidesPerRow: 1,
            dots: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            rows: 1,
            slidesToShow: 1,
            slidesToScroll: 1,
            slidesPerRow: 1,
            dots: true,
          },
        },
      ],
    });
  });

  //slick : contents 폰화면 슬라이더
  $(document).ready(function () {
    $(".influ_slider").slick({
      rows: 1,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      dots: false,
    });
  });

  var slider = $(".slick04");
  var slickOptions = {
    autoplay: false,
    arrows: true,
    prevArrow: $(".slick_arrows_l"),
    nextArrow: $(".slick_arrows_r"),
    dots: false,
  };
  $(window).on("load resize", function () {
    if ($(window).width() > 767) {
      slider.slick("unslick");
    } else {
      slider.not(".slick-initialized").slick(slickOptions);
    }
  });

  //startNow 숫자 카운팅 애니메이션
  $(".startNow_in .text_s span ").counterUp({ delay: 20, time: 2000 });
});
