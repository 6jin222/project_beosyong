<?

include("include/header.php");

?>
        <main id="sub" class="mypageDetail wd">
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
                <div class="identify">
                    <div class="identify_title">회원 비밀번호 확인</div>
                    <p></p>
                    <div class="identify_text">비밀번호를 한번 더 입력해주세요.<br>회원님의 정보를 안전하게 보호하기 위해<br>비밀번호를 한번 더 확인합니다.</div>
                    <input
                    type="password"
                    name="pass"
                    value=""
                    placeholder="비밀번호를 입력해주세요."
                    />
                    <div class="identify_btn">확인</div>
                </div>
            </section>
        </main>
        <?

include("include/footer.php");

?>
