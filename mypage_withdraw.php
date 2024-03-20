<?

include("include/header.php");

?>
        <main id="sub" class="mypageWithdraw">
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
                <div class="point">
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
                        <span class="bar pc_block"></span>
                        <div class="point_withdraw">
                          <div class="point_withdraw_in">
                            <div class="point_input"><input type="text">원</div>
                            <div class="point_input_btn pop_open">출금신청</div>
                          </div>
                          <p class="point_info">※ 1만 포인트 단위로 출금 가능합니다.</p>
                        </div>
                    </div>
                </div>
                <div class="mypageWithdraw_box">
                  <div class="account">
                      <div class="title">
                        <div class="title_name">계좌정보</div>
                        <div class="title_btnBox ver01">
                          <div class="title_btn cancel"><p>취소</p></div>                          
                          <div class="title_btn input"><p>입력</p></div>
                        </div>
                        <!-- 계좌 없을때 나오는 버튼 -->
                        <div class="title_btnBox ver02">
                          <div class="title_btn chang"><p>정보변경</p></div>
                          <!-- 계좌정보 입력 페이지(.accountInfo_chang)로 이동 -->
                        </div>
                        <!-- 계좌 있을때 나오는 버튼 -->
                      </div>
                      <div class="start_box">계좌 정보를 입력해 주세요.</div>
                      <!-- 계좌 없을때 나오는 섹션 -->
                      <div class="cont">
                        <table width="100%" class="accountInfo">
                          <tbody>
                              <tr>
                                  <th>이름</th>
                                  <td style="padding: 0 15px;">박용준</td>
                              </tr>
                              <tr>
                                  <th>은행</th>
                                  <td style="padding: 0 15px;">신한은행</td>
                              </tr>
                              <tr>
                                  <th>계좌번호</th>
                                  <td style="padding: 0 15px;">110252577909</td>
                              </tr>
                          </tbody>
                        </table>
                        <!-- 계좌 있을때 나오는 섹션 -->
                        <table width="100%" class="accountInfo_chang">
                          <tbody>
                              <tr>
                                  <th>이름</th>
                                  <td style="padding: 0 15px;">박용준</td>
                              </tr>
                              <tr>
                                  <th>은행</th>
                                  <td>
                                    <select class="select" style="padding: 0 15px;">
                                      <option value="">선택하세요.</option>
                                    </select>
                                  </td>
                              </tr>
                              <tr>
                                  <th>계좌번호</th>
                                  <td><input type="text" itemname="계좌번호" placeholder="계좌 번호 입력('-'제외)" style="padding: 0 15px;"></td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div class="detail">
                      <div class="title">
                          <div class="title_name">출금내역<br class="pc_none"></div>
                          <div class="title_btn"><p>내역 확인</p></div>
                      </div>
                      <div class="board_list">
                        <div class="board_area">
                            <table class="board_normal">
                                <colgroup>
                                    <col width="25%">
                                    <col width="10%">
                                    <col width="*">
                                    <col width="10%">
                                    <col width="20%">
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>출금신청일</th>
                                    <th>은행</th>
                                    <th>계좌번호</th>
                                    <th>출금액</th>
                                    <th>출금확인</th>
                                  </tr>
                                  <tr class="board_point">
                                    <td>2023-02-13<br>01:38:50</td>
                                    <td>신한은행</td>
                                    <td>110252577909</td>
                                    <td>50,000</td>
                                    <td>출금완료</td>
                                  </tr>
                                  <tr class="board_point">
                                    <td>2023-02-13<br>01:38:50</td>
                                    <td>신한은행</td>
                                    <td>110252577909</td>
                                    <td>50,000</td>
                                    <td>출금완료</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>  
                  </div>
                </div>
                <div class="warning">
                    <div class="title">
                        <div class="title_name">출금 신청 시 주의사항, 꼭 읽어주세요!</div>
                    </div>
                    <div class="cont">
                      <div class="warningBox w01">
                        <div class="w_title">
                          출금신청
                        </div>
                        <ul class="w_cont">
                          <li>
                            <span class="dot"></span>
                            <p>최소 1만 포인트 이상부터 1만원 단위로 출금이 가능합니다.</p>
                          </li>
                          <li>
                            <span class="dot"></span>
                            <p>오후 5시 이전 출금 신청 시, 당일 오후 7시 이후 순차적으로 출금 처리됩니다.</p>
                          </li>
                          <li>
                            <span class="dot"></span>
                            <p>오후 5시 이후 출근 신청 시, 다음 영업일 오후 7시 이후 순차적으로 출금 처리됩니다.</p>
                          </li>
                        </ul>
                      </div>
                      <div class="warningBox w02">
                        <div class="w_title">
                          개인회원
                        </div>
                        <ul class="w_cont">
                          <li>
                            <span class="dot"></span>
                            <p>본인 명의로 된 계좌로만 출금이 가능합니다.</p>
                          </li>
                          <li>
                            <span class="dot"></span>
                            <p>예금주가 일치하지 않거나 정상적인 계좌번호가 아닐 경우 지급처리가 지연될 수 있습니다.
                              신청 전 계좌 정보를 확인해 주세요.
                            </li>
                        </ul>
                      </div>
                      <div class="warningBox w03">
                        <div class="w_title">
                          사업자 회원
                        </div>
                        <ul class="w_cont">
                          <li>
                            <span class="dot"></span>
                            <p>홈텍스에 접속하여 전자세금계산서를 발행해 주셔야 출금이 가능합니다.</p>
                          </li>
                          <li>
                            <span class="dot"></span>
                            <p>전자세금계산서 발행 없이 출금 신청하였을 경우, 출금이 보류됩니다.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </section>
            <div class="popup_view">
              <p>
                계좌정보를 입력해주세요.
              </p>
              <p class="popup_close">확인</p>
            </div>
            <div class="popup_view pop_withdraw">
              <p>
                1,330,000원을 출금하시겠습니까?
              </p>
              <div class="popup_btn">
                <p class="pop_btn01">네</p>
                <p class="pop_btn02">아니오</p>
              </div>
            </div>
        </main>
<?

include("include/footer.php");

?>
