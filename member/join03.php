<?

include("../include/header.php");

?>
        <main id="sub" class="mypageWithdraw02 modification join">
          <div class="sub_nav">
            <p>
                <img src="/images/mypage/ico_home.png" alt="집이미지">
            </p>
            <span class="dot"></span>
            <p>
                회원가입
            </p>
          </div>
          <h2 class="sub_title">회원가입</h2>
          <section class="mypage_box">
            <div class="join_flow_area">
              <ul class="join_flow">
                <li><spam class="b">STEP 01 </spam>가입약관동의</li>
                <li class="on"><spam class="b"></spam>STEP 02 </spam>정보입력</li>
                <li><spam class="b"></spam>STEP 03 </spam>가입완료</li>
              </ul>  
            </div>
            <div class="collect">
              <div class="info_w">
                <div class="info_w_text">고객님의 동의 없이 제 3자에게 개인정보를 제공하지 않으며  『개인정보처리방침』에 따라 보호되고 있습니다.
                </div>
              </div>
              <div class="title">
                <div class="title_name">정보수정</div>
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
                    <a href="#">가입완료</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
<?

include("../include/footer.php");

?>
