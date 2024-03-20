<?

include("include/header.php");

?>
        <main id="sub" class="mypageDetail">
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
                      <button class="label">캠페인 내역</button>
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
                    <li class="on"><a href="#">캠페인 내역</a></li>
                    <li><a href="#">출금</a></li>
                    <li><a href="#">개인정보변경</a></li>
                </ul>
            </div>
            <section class="mypage_box">
                <div class="point p01">
                    <div class="cont">
                        <div class="point_all">
                            <p class="name">누적 포인트</p>
                            <p class="number">5,030</p>
                        </div>
                    </div>
                </div>
                <div class="point p02">
                    <div class="cont">
                        <div class="point_all">
                            <p class="name">보유 포인트</p>
                            <p class="number">5,030</p>
                        </div>
                    </div>
                </div>
                <div class="point p03">
                    <div class="cont">
                        <div class="point_all">
                            <p class="name">리워드 포인트</p>
                            <p class="number">5,030</p>
                        </div>
                    </div>
                </div>
                <ul class="tab_nav">
                  <li class="tab_btn active"><a href="#tab1">전체</a></li>
                  <li class="tab_btn"><a href="#tab1">이벤트</a></li>
                  <li class="tab_btn"><a href="#tab1">카톡</a></li>
                  <li class="tab_btn"><a href="#tab1">유튜브</a></li>
                  <li class="tab_btn"><a href="#tab1">밴드</a></li>
                  <li class="tab_btn"><a href="#tab1">인스타그램</a></li>
                  <li class="tab_btn"><a href="#tab1">쇼츠</a></li>
                  <li class="tab_btn"><a href="#tab1">전자책</a></li>
                  <li class="tab_btn"><a href="#tab1">티스토리</a></li>
                  <li class="tab_btn"><a href="#tab1">가숑</a></li>
                </ul>
                <div class="detail tab_content">
                    <div class="board_top">
                        <span class="board_title">총 <span class="color_red">14</span>건의 내역이 있습니다.</span>
                        <form method="get" name="Search">
                          <div class="search_area">
                            <select class="select_search">
                              <option value="all" selected>전체</option>
                            </select>
                            <div class="search_canlender">
                              <input type="text" placeholder="연도 - 월 - 일" class="datepicker">
                              <span class="input_bar">-</span>
                              <input type="text" placeholder="연도 - 월 - 일" class="datepicker">
                            </div>
                            <a href="#" class="search_btn"></a>
                          </div>
                        </form>                   
                    </div>
                    <div class="totalBox">전체 총 포인트 : <span class="color_red">5,300원</span></div>
                    <div class="board_list">
                      <div class="board_area">
                        <table class="board_normal">
                            <colgroup>
                                <col width="20%">
                                <col width="10%">
                                <col width="18%">
                                <col width="*">
                                <col width="20%">
                            </colgroup>
                            <tbody>
                              <tr>
                                <th>신청일</th>
                                <th>목록</th>
                                <th>캠페인명</th>
                                <th>신청내역</th>
                                <th>적립 포인트</th>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
                              </tr>
                              <tr class="board_point">
                                <td>2023-02-13 01:38:50</td>
                                <td>가숑</td>
                                <td>가숑 캠페인</td>
                                <td><a href="#">https://m.blog.naver.com/lovejieun71</a></td>
                                <td>5,000 P / 500P</td>
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