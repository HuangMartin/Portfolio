<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>馬丁的個人網站</title>
</head>
<body>

    <header>
        <div class="profile">
            <img src="img/profile-img.jpg" alt=""width="150px">
            <h1>Martin Huang</h1>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100006934332320"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/HuangMartin"><i class="fa-brands fa-github"></i></a>
                <a href="https://t.me/hela6415614"><i class="fa-brands fa-telegram"></i></a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#home"><i class="fa-solid fa-house"></i>主頁</a></li>
                <li><a href="#about"><i class="fa-solid fa-user"></i>關於我</a></li>
                <li><a href="#profolio"><i class="fa-solid fa-briefcase"></i>連結</a></li>
                <li><a href="#else"><i class="fa-solid fa-server"></i>其他</a></li>
                <li><a href="#contact"><i class="fa-solid fa-envelope"></i>聯繫方式</a></li>
            </ul>
        </nav>
        <div class="footer">
            <p>&copy; Copyright 2023<br>Designed By MartinHuang</p>
        </div>
    </header>

    <i class="fa-solid fa-bars" id="MenuBtn"></i>

    <main>
        <section id="home">
            <div class="home-row">
                <h1>您好!我的名字是星翔<br>很高興認識您!</h1>
                <p>我是個 <span class="auto-input"></span></p>
            </div>
        </section>


        <section id="about">
            <h1 class="sub-heading">關於我</h1>
            <div class="divider"></div>
            <p class="sub-para">
                一顆蘋果養百種人<br>
                推導AI雛形的圖靈，代表的是軟體<br>
                重塑手機的賈伯斯，代表的是潮流<br>
                發現萬有引力的牛頓，代表的是智慧<br>
                開啟人類思考的亞當，代表的是煩惱<br>
                <br>
                要當哪種人，先挑對那顆蘋果
            </p>

            <div class="about-col">
                <div class="img-col">
                    <img src="img/profile-img.jpg" alt="...">
                </div>

                <div class="info-col">
                    <h2>科技愛好者</h2>
                    <p class="sub-para">
                        有機械者必有機事，有機事者必有機心 <莊子．天地>
                    </p>
                    <div class="icon-list-col">
                        <div class="icon-list">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>生日:</strong> <span>2000/07/23</span></li>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>年齡:</strong> <span>23</span></li>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>現居地:</strong> <span>臺中</span></li>
                            </ul>
                        </div>
                        <div class="icon-list">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>興趣:</strong> <span>樂高.投資.旅遊.探索未知事物</span></li>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>專長:</strong> <span>籃球.游泳.分享所學</span></li>
                                <li><i class="fa-solid fa-angle-right"></i> <strong>電子郵件:</strong> <span>darkknight411032@gmail.com</span></li>
                                </ul>
                        </div>
                    </div>
                </div>
        </section>
        <section id="fact">
            <h1 class="sub-heading">專業證照</h1>
            <div class="divider"></div>
            <p class="sub-para">雖說是參考用的,但求學期間逼不得已還是去考了幾張證照</p>

                <div class="fact-row">
                    
                    <div class="fact-box">
                        <i class="fa-solid fa-toolbox"></i>
                        <strong>電腦硬體裝修技術士</strong>
                        <p>乙級</p>
                    </div>

                    <div class="fact-box">
                        <i class="fa-solid fa-database"></i>
                        <strong>微軟Azure知識認證</strong>
                        <p>初級</p>
                    </div>

                    <div class="fact-box">
                        <i class="fa-solid fa-book"></i>
                        <strong>商教會英語檢定</strong>
                        <p>3級</p>
                    </div>

                    <div class="fact-box">
                        <i class="fa-solid fa-book"></i>
                        <strong>TOEIC英語檢定</strong>
                        <p>550分</p>
                    </div>

                </div>
        </section>

        <section id="skill">
            <h1 class="sub-heading">軟體相關技術</h1>
            <div class="divider"></div>
            <p class="sub-para">
                資工的學生嘛，程式語言一定都學過<br>
                有些是上課教過，期末就忘了<br>
                有些是課堂沒教，自己有興趣摸索玩玩看<br>
                OS御三家都操作過，Linux算是這三個裡面最不熟的<br>
                IDE和Office天天在摸，說不熟練好像有點說不過去
            </p>
            <div class="skill-row">

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>Python</h2>
                        <h2>略懂</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 45%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>C++</h2>
                        <h2>略懂</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 55%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>Microsoft 辦公軟體</h2>
                        <h2>精熟</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 90%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>Visual Studio開發軟體</h2>
                        <h2>精熟</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 85%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>Windows系統</h2>
                        <h2>精熟</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 90%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>MacOS系統</h2>
                        <h2>精熟</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 70%;"></div>
                    </div>
                </div>

                <div class="skill-box">
                    <div class="skill-info">
                        <h2>Linux系統</h2>
                        <h2>略懂</h2>
                    </div>
                    <div class="skill-outter-line">
                        <div class="skill-inner-line" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="resume">

            <h1 class="sub-heading">記事</h1>
            <div class="divider"></div>
            <p class="sub-para">
                簡單收錄一些個人經歷<br>
                欲知更多資訊，敬請移駕到人力銀行過目我的履歷，謝謝
            </p>

            <div class="resume-row">
                <div class="resume-cols">
                    <h2>個人資訊</h2>
                    <div class="my-info">
                        <h3>Martin Huang</h3>
                        <ul>
                            <li>臺中市 北屯區</li>
                            <li>0939-0xx-2xx</li>
                            <li>darkknight411032@gmail.com</li>
                        </ul>
                    </div>

                    <h2>學歷</h2>
                    <div class="my-edu">
                        <h3>國立臺中科技大學進修部</h3>
                        <span class="sp-box">2018-2022</span>
                        <p><i class="fa-solid fa-toolbox"></i> 資訊工程系</p>
                    </div>
                    <div class="my-edu">
                        <h3>私立新民高中</h3>
                        <span class="sp-box">2015-2018</span>
                        <p><i class="fa-solid fa-computer"></i> 資訊科</p>
                    </div>
                </div>

                <div class="resume-cols">
                    <h2>工作經歷</h2>
                    <div class="work-exp">
                        <h3>程設作業代寫</h3>
                        <span class="sp-box">2022-仍在職</span>
                        <p>代寫</p>
                        <ul>
                            <li>在蝦皮看到的一門生意，覺得挺有意思的<br>
                                於是抱著玩票性質嘗試看看<br>
                                服務項目為非資訊類同學的課堂作業<br>
                                不知道會維持多久，也不知道會走多遠</li>
                        </ul>
                    </div>
                    <div class="work-exp">
                        <h3>夢旅人開發團隊</h3>
                        <span class="sp-box">2022-仍在職</span>
                        <p>助理工程師</p>
                        <ul>
                            <li>學弟介紹的程式開發團隊<br>
                                負責人非常樂於分享，我很感謝他們教我Git版控</li>
                        </ul>
                    </div>
                    <div class="work-exp">
                        <h3>國立臺中科技大學資訊工程系</h3>
                        <span class="sp-box">2020-2022</span>
                        <p>行政工讀</p>
                        <ul>
                            <li>主要負責會議事務.電腦維護.系統派送.遞交公文<br>
                                閒暇之餘可利用時間自習<br>
                                這段時間是我最充實的時光</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section id="profolio">
            <h1 class="sub-heading">連結</h1>
            <div class="divider"></div>
            <p class="sub-para">
                以下是個人的一些小興趣，正慢慢將它發展成個人部落格<br>
            </p>


            <div class="port-row">

                <div class="port-item">
                    <div class="port-img">
                        <img src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>金融經濟</h4>
                        <p>Finance Notes</p>
                        <a href="#"><i class="fa-solid fa-coins"></i></a>
                    </div>
                </div>

                <div class="port-item">
                    <div class="port-img">
                        <img src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>電影評論</h4>
                        <p>Movie Review</p>
                        <a href="#"><i class="fa-solid fa-film"></i></a>
                    </div>
                </div>

                <div class="port-item">
                    <div class="port-img">
                        <img src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>旅遊規劃</h4>
                        <p>Travel</p>
                        <a href="#"><i class="fa-solid fa-plane"></i></a>
                    </div>
                </div>

                <div class="port-item">
                    <div class="port-img">
                        <img src="img/blog-4.jpg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>Event與WWDC</h4>
                        <p>Apple Event and WWDC</p>
                        <a href="#"><i class="fa-solid fa-microchip"></i></a>
                    </div>
                </div>

                <div class="port-item">
                    <div class="port-img">
                        <img src="img/blog-5.jpg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>奢華享受</h4>
                        <p>Liquor and Cigar</p>
                        <a href="#"><i class="fa-solid fa-wine-glass"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="else">

            <h1 class="sub-heading">其他</h1>
            <div class="divider"></div>
            <p class="sub-para">
                大學期間的作品.專案.比賽經歷<br>
                有些檔案剛好沒有儲存到，敬請見諒<br>
            </p>

            <div class="else-row">

                <div class="else-box">
                    <div class="icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <div class="else-info">
                        <h4>AI光影與應用結合</h4>
                    </div>
                </div>

                <div class="else-box">
                    <div class="icon">
                        <i class="fa-brands fa-bitcoin"></i>
                    </div>
                    <div class="else-info">
                        <h4>投資小幫手-虛擬貨幣回測</h4>
                    </div>
                </div>

                <div class="else-box">
                    <div class="icon">
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <div class="else-info">
                        <h4>2022臺北市市長盃資料應用黑客松</h4>
                    </div>
                </div>

                <div class="else-box">
                    <div class="icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div class="else-info">
                        <h4>玉山人工智慧挑戰賽2021夏季賽</h4>
                    </div>
                </div>

                <div class="else-box">
                    <div class="icon">
                        <i class="fa-solid fa-person-digging"></i>
                    </div>
                    <div class="else-info">
                        <h4>工程施工即時影像系統</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">

            <h1 class="sub-heading">聯繫方式</h1>
            <div class="divider"></div>
            <p class="sub-para">
                有任何高見都歡迎寄email指教 謝謝!<br>
            </p>

            <div class="contact-row">

                <div class="contact-left">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h4>電子郵件</h4>
                            <p>darkknight411032@gmail.com</p>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <h4>行動電話</h4>
                            <p>0939-0xx-2xx</p>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info">
                            <h4>地址</h4>
                            <p>臺灣 臺中市</p>
                        </div>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10295.399397519424!2d120.68190422125257!
                        3d24.172666883293726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917dcc7aa34cf%3A0xd1fb78fa60b9e619!
                        2z5paH5b-D5bSH5b63!5e0!3m2!1szh-TW!2stw!4v1681301840336!5m2!1szh-TW!2stw" 
                        width="100%" height="300" style="border:2;" loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <div class="contact-right">


                    <form action="send.php" method="post">
                        <input type="text" name="name" id="name" placeholder="您的大名">
                        <input type="email" name="email" id="email" placeholder="您的電子郵件">
                        <input type="text" name="subject" id="subject" placeholder="主旨">
                        <textarea name="msg" id="msg" rows="9" placeholder="您想建議的事項"></textarea>
                        <input type="submit" name="btn" value="送出信件">
                    </form>

                </div>

            </div>

        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>

<!-- http://localhost/Portfolio/index.php -->