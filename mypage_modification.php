<?

include("include/header.php");

?>
        <main id="sub" class="mypageWithdraw02 modification">
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
                  <button class="label">개인정보변경</button>
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
              <li><a href="#">출금</a></li>
              <li class="on"><a href="#">개인정보변경</a></li>
            </ul>
          </div>
          <section class="mypage_box">
            <div class="collect">
              <div class="title">
                <div class="title_name">정보수정</div>
                <div class="title_btn"><p>회원탈퇴</p></div>
              </div>
              <div class="cont">
                <div class="collBox">
                  <ul style="width: 100%;">
                    <li class="coll_name">아이디</li>
                    <li style="display: flex; justify-content: space-between;">
                      <input type="text" itemname="아이디" style="width: 49.4%;">
                      <p class="font16" style="width: 49.4%;">(영문소문자/숫자, 4~16자)</p>
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">비밀번호</li>
                    <li>
                      <input type="text" itemname="비밀번호">
                      <p class="font16">(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자)
                      </p>

                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">비밀번호 확인</li>
                    <li>
                      <input type="text" itemname="비밀번호확인">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">이름</li>
                    <li>
                      <input type="text" itemname="이름">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">생년월일 <em>*</em></li>
                    <li>
                      <input type="text" itemname="생년월일" style="width: 69%;">
                      <select class="select" style="width: 29%; margin-left: 1%;">
                        <option value="">남자</option>
                        <option value="">여자</option>
                      </select>
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">휴대폰 번호 <em>*</em></li>
                    <li>
                      <input type="text" itemname="휴대폰번호">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">이메일주소 <em>*</em></li>
                    <li>
                      <input type="text" itemname="이메일주소">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">닉네임 <em>*</em></li>
                    <li>
                      <input type="text" itemname="닉네임">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">추천인 아이디(선택)</li>
                    <li>
                      <input type="text" itemname="추천인아이디">
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">프로필 사진</li>
                    <li class="input_s">
                      <input type="text" itemname="프로필사진" placeholder="선택된 파일 없음" style="width: 78%;"><a href="#" class="n_code" style="width: 20%;">파일 선택</a>
                    </li>
                    <li class="coll_photo">
                      <div class="coll_photoBox"><img src="/images/mypage/img_my02.png" alt=""></div>
                      <div class="coll_inputBox">testsns.jpg<input type="checkbox">삭제</div>
                    </li>
                  </ul>
                  <ul>
                    <li class="coll_name">마켓팅 정보 수신동의(선택)</li>
                    <li class="coll_option">
                      <p class="op01">SNS</p>
                      <p class="op02 on">이메일</p>
                    </li>
                    <ul class="coll_content">
                      <li>
                        <span>-</span>
                        <p>미동의 시 무료 혜택 및 서비스를 포함한 다양한 마케팅 정보를 받으실 수 없습니다.</p>
                      </li>
                      <li>
                        <span>-</span>
                        <p>수신동의 유효기간 : OFF 설정 시 또는 탈퇴 시</p>
                      </li>
                    </ul>
                  </ul>
                </div>
              <div class="coll_bottom">
                <div class="coll_btn">
                  <a href="#">이전</a>
                  <a href="#" class="on">수정 완료</a>
                </div>
              </div>
              <div class="withdrawal">
                <div class="withdrawal_name">회원탈퇴</div>
                <p class="font16">회원탈퇴 시 고객님의 모든 정보는 삭제처리되며, 복구가 불가능합니다.</p>
                <div class="withdrawal_btn">
                  <a href="#">회원탈퇴하기</a>
                </div>
              </div>
            </div>
            </div>
          </section>
        </main>
<?

include("include/footer.php");

?>