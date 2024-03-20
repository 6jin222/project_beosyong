<?

include("include/header.php");

?>
        <main id="sub" class="mypageDetail wd junior">
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
                      <button class="label">후배목록</button>
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
                    <li class="on"><a href="#">후배목록</a></li>
                    <li><a href="#">캠페인 내역</a></li>
                    <li><a href="#">출금</a></li>
                    <li><a href="#">개인정보변경</a></li>
                </ul>
            </div>
            <section class="mypage_box">
                <div class="detail tab_content">
                    <div class="board_top">
                        <form method="get" name="Search">
                          <div class="search_area">
                            <select class="select_search">
                              <option value="all" selected>선택하세요</option>
                              <option value="">일반</option>
                              <option value="">버니</option>
                            </select>
                            <input type="text" placeholder="검색어를 입력해주세요." class="search_input">
                            <div class="search_canlender">
                              <input type="text" placeholder="연도 - 월 - 일" class="datepicker">
                              <span class="input_bar">-</span>
                              <input type="text" placeholder="연도 - 월 - 일" class="datepicker">
                            </div>
                            <a href="#" class="search_btn"></a>
                          </div>
                        </form>                   
                    </div>
                    <div class="board_list">
                      <div class="board_area">
                        <table class="board_normal">
                            <colgroup>
                                <col width="20%">
                                <col width="15%">
                                <col width="*">
                                <col width="15%">
                                <col width="15%">
                                <col width="20%">
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>가입일</th>
                                <th>등급(일반/버니)</th>
                                <th>아이디</th>
                                <th>닉네임</th>
                                <th>연락처</th>
                                <th>최근접속일</th>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>일반</td>
                                <td>test020301</td>
                                <td>내가최고</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>버니</td>
                                <td>test020301</td>
                                <td>오류전담처리반</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>버니</td>
                                <td>test020301</td>
                                <td>오류전담처리반</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>버니</td>
                                <td>test020301</td>
                                <td>오류전담처리반</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>일반</td>
                                <td>test020301</td>
                                <td>내가최고</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>버니</td>
                                <td>test020301</td>
                                <td>오류전담처리반</td>
                                <td>010-0000-1111</td>
                                <td>2023-02-13 01:38:50</td>
                              </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="pagination">
                      <ul>
                        <li><a href="#" class="btn_pre01"></a></li>
                        <li><a href="#" class="btn_pre02"></a></li>
                        <div class="btn_page">
                          <li><a href="#" class="on">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                        </div>
                        <li><a href="#" class="btn_next01"></a></li>
                        <li><a href="#" class="btn_next02"></a></li>
                      </ul>
                    </div>

                </div>
            </section>
        </main>
<?

include("include/footer.php");

?>