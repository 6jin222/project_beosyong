<footer id="footer">
        <div class="f_menu">
          <a href="#">이용약관</a>
          <span class="bar"></span>
          <a href="#">개인정보처리방침</a>
          <span class="bar"></span>
          <a href="#">사업자정보확인</a>
        </div>
        <div class="f_bottom">
          <div class="f_bottom_in">
            <div class="f_ars">
              <div class="title"><span class="color_mint">상담문의</span></div>
              <div class="timetable">
                <div class="timetableBox">
                  <p class="week">월요일~금요일<span>10:00~18:00</span></p>
                </div>
                <p class="rest">주말, 공휴일 휴무</p>
              </div>
            </div>
            <div class="f_info">
              <div class="cont">
                <span class="color_mint">(주)그로스체인</span> 대표: 장인석<br />
                사업자등록 번호 : 767-86-01353<br class="pc_none" /><span
                  class="bar pc_block"
                ></span>
                통신판매업신고번호 : 제 2019-경기부천-2285호<br />
                소재지 : 경기도 부천시 중동로254번길 78,801호<br />
                메일 : contact@growthchain.com<br class="pc_none" /><span
                  class="bar pc_block"
                ></span>
                전화 : 070-4772-1110<span class="bar"></span>팩스 : 032-326-8887
              </div>
              <div class="copy">
                Copyright © 2019-2023 Growth Chain. All Rights Reserved.
              </div>
            </div>
            <div class="f_logo">
              <img src="/images/footer/f_logo.png" alt="하단로고" />
            </div>
          </div>
        </div>
        <script>
          $(window).scroll(function(event){
              var height = $(document).scrollTop();
              if( height > 100){
                  $('#toTop').addClass('on');
              }else{
                  $('#toTop').removeClass('on');
              };
          });
          $(document).ready(function() {
              $('#toTop').click(function(){
              $("html, body").animate({ scrollTop:0}, 600);
              return false;
          });
          })
        </script>
        <a id="toTop" href="#" class="on"></a>
      </footer>
    </div>
  </body>
</html>
