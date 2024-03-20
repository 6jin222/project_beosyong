<?

include("include/header.php");

?>
        <main id="sub" class="mypageHome">
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
                      <button class="label">마이페이지 홈</button>
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
                    <li class="on"><a href="#">마이페이지 홈</a></li>
                    <li><a href="#">후배목록</a></li>
                    <li><a href="#">캠페인 내역</a></li>
                    <li><a href="#">출금</a></li>
                    <li><a href="#">개인정보변경</a></li>
                </ul>
            </div>
            <section class="mypage_box">
                <div class="my">
                    <div class="my_box">
                        <div class="my_photo">
                            <div class="my_photo_in">
                                <img src="/images/mypage/img_my.png" alt="프로필 사진" class="my_photo_y">
                                <img src="/images/mypage/ico_my.png" alt="프로필 사진" class="my_photo_n">
                            </div>
                        </div>
                        <div class="my_info">
                            <div class="title">
                                <div class="title_name">김슬기님 Breeze (닉네임)</div>
                                <div class="title_btn"><p>개인정보 변경</p></div>
                            </div>
                            <div class="cont">
                                <span class="color_red">12회</span> 방문<br>
                                가장 최근 참여한 캠페인은<br>
                                <span class="color_mint">[튜토리얼] 유튜브 쇼츠 제작 캠페인 Beta 캠페인</span> 입니다.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="link">
                    <div class="title">
                        <div class="title_name">내 추천 링크</div>
                        <div class="title_btn"><p>링크 복사</p></div>
                    </div>
                    <div class="cont">https://beosyong.com/register.php?reco_id=breeze6</div>
                </div>
                <div class="point">
                    <div class="title">
                        <div class="title_name">나의 포인트</div>
                        <div class="title_btn"><p>출금 신청</p></div>
                    </div>
                    <div class="cont">
                        <div class="point_all">
                            <p class="name">누적 포인트</p>
                            <p class="number">5,030</p>
                        </div>
                        <span class="bar"></span>
                        <div class="point_now">
                            <p class="name">보유 포인트</p>
                            <p class="number"><span class="color_red">5,030</span></p>
                        </div>
                        <span class="bar"></span>
                        <div class="point_reward">
                            <p class="name">리워드 포인트</p>
                            <p class="number">5,030</p>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="title">
                        <div class="title_name">공지사항</div>
                        <div class="title_btn"><p>더보기</p></div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><a href="#">
                                <p class="text">파트너스 서비스 정기점검 안내 (10/18)</p>
                                <p class="date">2023-10-18</p>
                            </a></li>
                            <li><a href="#">
                                <p class="text">9월 4주차, 10월 1주차 지급 일자 변경 안내</p>
                                <p class="date">2023-9-18</p>
                            </a></li>
                            <li><a href="#">
                                <p class="text">커뮤니티성 콘텐츠 발행 재게 안내</p>
                                <p class="date">2023-8-10</p>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="stats">
                    <div class="title">
                        <div class="title_name">총수익통계<br class="pc_none"><span class="title_text">각 항목에 따른 총 수익을 확인할 수 있으며, 오늘 총 수익은 <span class="bold">실시간으로 갱신</span>되고 있습니다.</span></div>
                    </div>
                    <div class="cont">
                        <div class="stats_today">
                            <p class="name">오늘 수익</p>
                            <p class="number">138,850</p>
                        </div>
                        <div class="stats_yerterday">
                            <p class="name">오늘 수익<br><span class="account">(지난주 같은 요일과 비교)</span></p>
                            <p class="number">-10,850</p>
                        </div>
                        <div class="stats_thatMonth">
                            <p class="name">당월 수익<br><span class="account">(~10/14)</span></p>
                            <p class="number"><span class="color_mint">150,000</span></p>
                        </div>
                        <div class="stats_lastMonth">
                            <p class="name">전월 수익</p>
                            <p class="number">56,550</p>
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <div class="title">
                        <div class="title_name">캠페인 내역<br class="pc_none"><span class="title_text">캠페인 신청 내역과 적립된 캠페인 내역을 함께 확인할 수 있습니다.</span></div>
                        <div class="title_btn"><p>더보기</p></div>
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
                </div>
            </section>
            <div class="popup_view">
              <p>
                나의 추천 링크를 이용해 버숑을 홍보해주세요!
              </p>
              <p class="popup_close">확인</p>
            </div>
        </main>
<?

include("include/footer.php");

?>
