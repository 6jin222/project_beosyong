<?

include("include/header.php");

?>
        <main id="sub" class="mypageWithdraw02">
          <div class="sub_nav">
            <p>
                <img src="/images/mypage/ico_home.png" alt="집이미지">
            </p>
            <span class="dot"></span>
            <p>
                마이페이지
            </p>
            <span class="dot"></span>
            <p>
                <article class="selectBox2">
                  <button class="label">출금</button>
                  <ul class="optionList">
                    <li><button class="optionItem" type="button">마이페이지 홈</button></li>
                    <li><button class="optionItem" type="button">후배목록</button></li>
                    <li><button class="optionItem" type="button">캠페인 내역</button></li>
                    <li><button class="optionItem" type="button">출금</button></li>
                    <li><button class="optionItem" type="button">개인정보변경</button></li>
                  </ul>
                </article>
            </p>
          </div>
          <h2 class="sub_title">마이페이지</h2>
          <div class="sub_menu">
            <ul>
              <li><a href="#">마이페이지 홈</a></li>
              <li><a href="#">후배목록</a></li>
              <li><a href="#">캠페인 내역</a></li>
              <li class="on"><a href="#">출금</a></li>
              <li><a href="#">개인정보변경</a></li>
            </ul>
          </div>
          <section class="mypage_box">
            <div class="collect">
              <div class="title">
                <div class="title_name">지급명세서 발행정보 수집</div>
              </div>
              <div class="cont">
                <div class="collBox">
                  <ul>
                    <li class="coll_name">이름</li>
                    <li>
                      <input type="text" itemname="이름">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">주민등록번호 (외국인등록번호)</li>
                    <li class="input_s">
                      <input type="text" itemname="주민등록번호앞자리" style="width: 48.7%;"><span class="input_bar">-</span><input type="text" itemname="주민등록번호뒷자리" style="width: 48.7%;">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">주소</li>
                    <li class="input_s">
                      <input type="text" itemname="주소" style="width: 74%;"><a href="#" class="n_code" style="width: 25%;">우편번호 검색</a><input type="text" itemname="상세주소" placeholder="상세주소를 입력해주세요." style="width: 100%; margin-top: 10px;">
                    </li>
                  </ul>
                  <ul>
                  </ul>
                  <ul>
                    <li class="coll_name">은행명</li>
                    <li>
                      <select class="select">
                      <option value="">은행선택</option>
                      </select>
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">계좌번호</li>
                    <li>
                      <input type="text" itemname="계좌번호" placeholder="계좌번호를 입력해주세요.">
                    </li>
                  </ul>
                </div>
              <div class="coll_bottom">
                <ul class="coll_content">
                  <li>
                    <span>-</span>
                    <p>지급명세서 발행을 위해 이름, 주소를 수집하며, 최초 1회만 입력하시면 이후 거래 기록에 활용됩니다.</p>
                  </li>
                  <li>
                    <span>-</span>
                    <p>수집 정보는 <span>법률상 보존기간 종료 이후 지체 없이 파기</span> 합니다.</p>
                  </li>
                  <li>
                    <span>-</span>
                    <p>본 동의를 거부하실 수 있으나, 동의 거부 시 출금이 불가합니다.</p>
                  </li>
                  <li>
                    <span>※</span>
                    <p>소득세법 제 127조에 의거하여 지급 명세서 제출을 위해 주민등록번호(또는 외국인등록번호)를 수집합니다.</p>
                  </li>
                </ul>
                <div class="coll_btn"><a href="#">동의 및 확인</a></div>
              </div>
            </div>
            </div>
          </section>
        </main>
<?

include("include/footer.php");

?>