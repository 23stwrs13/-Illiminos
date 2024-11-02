<?php        
        session_start();
        include '../php/sait/header.php';
    ?>
        <!-- Main  -->
        <main class="main">
            <div class="film-lines">
                <h2 class="film-name">Популярные фильмы <img src="../img/Vector.png" alt="Стрелочка"></h2>
                <div class="film-line">
                    <div class="film-box">
                        <div class="img-film film1"></div>
                        <div class="text-film-box">Милый дом <div class="bold">7.2</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film2"></div>
                        <div class="text-film-box">Призрачный доктор <div class="bold">8.6</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film3"></div>
                        <div class="text-film-box">Королева Чхорин <div class="bold">8.6</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film4"></div>
                        <div class="text-film-box">Паразиты <div class="bold">8.0</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film5"></div>
                        <div class="text-film-box">Незнакомцы из ада <div class="bold">7.6</div></div>
                    </div>
                </div>
                <div class="film-line">
                    <div class="film-box">
                        <div class="img-film film11 tri-f"></div>
                        <div class="text-film-box">Милый дом <div class="bold">7.2</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film23 pri-f"></div>
                        <div class="text-film-box">Призрачный доктор <div class="bold">8.6</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film12 tri-f"></div>
                        <div class="text-film-box">Королева Чхорин <div class="bold">8.6</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film14 det-f"></div>
                        <div class="text-film-box">Паразиты <div class="bold">8.0</div></div>
                    </div>
                    <div class="film-box">
                        <div class="img-film film24 fan-f"></div>
                        <div class="text-film-box">Незнакомцы из ада <div class="bold">7.6</div></div>
                    </div>
                </div>
            </div>
            <h2 class="zag-films-box">Спенсер <div class="zag-min-film-box">(6.2 <img src="../img/star.png" alt="звездочка">)</div></h2>
            <div class="films-boxs">
                <div class="text-films-box">
                    <div class="inform-about-fimls">Брак принцессы Дианы и принца Чарльза трещит по швам. Злые языки судачат о романе на стороне и прогнозируют развод. Тем не менее, на рождественские праздники в поместье Сандрингем королевская семья изображает мир. Они едят и пьют за одним столом, традиционно выезжают на охоту, но сможет ли Диана продолжать эту игру?</div>
                    <h4 class="min-zag-text-about">В главных ролях:</h4>
                    <div class="inform-min-zag-text-about">
                        -Кристен Стюарт<br>
                        -Джек Фартинг<br>
                        -Тимоти Сполл<br>
                        -Шон Харрис<br>
                        -Салли Хокинс<br>
                        -Джек Нилен<br>
                        -Фредди Спрай<br>
                        -Эмма Дарвол-Смит<br>
                        -Стелла Гонет<br>
                        -Рихард Заммель
                    </div>
                </div>
                <div class="img-films-box"></div>
            </div>
            <div class="films-content">
                <div class="triller-box">
                    <a class="tr-box" href="../pages/film2.php">
                        <div class="zag-about-films-titl">Треллер</div>
                        <div class="img-bg-full-film">.
                            <div class="play-full-film"></div>
                        </div>
                    </a>
                </div>
                <div class="pohoch-box">
                    <div class="zag-pohoch-films">Похожие фильмы</div>
                    <div class="on-lins-films-pohoch">
                        <div class="img-min-film film18"></div>
                        <div class="img-min-film film19"></div>
                        <div class="img-min-film film20"></div>
                    </div>
                </div>
            </div>
        </main>
        <?php        
            include '../php/sait/footer.php';
        ?>