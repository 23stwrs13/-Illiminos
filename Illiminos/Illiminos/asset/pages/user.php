    <?php        
        session_start();
        include '../php/sait/header.php';
        if(!isset($_SESSION['login'])){
            header("Location: ./regist.php?message= Вы не вошли в аккаунт");
            exit;
        }
    ?>
        <!-- Main -->
        <main class="main">
            <?php
                if(isset($_GET['message'])){
                    echo "<div class='zag-user'>
                        {$_GET['message']}
                        <br><br>
                    </div>";
                }
            ?>
            <div class="user-box">
                <div class="info-user">
                    <?php 
                        include '../php/info.php';
                    ?>
                    <!-- <div class="dannie-user">
                        <div class="inf-boxs-users">
                            <div class="on-lin-innfor">
                                <div class="text-user">Имя</div>
                                <div class="box-inf-us">Жан</div>
                            </div>
                            <div class="on-lin-innfor">
                                <div class="text-user">Фамилия</div>
                                <div class="box-inf-us">Моро</div>
                            </div>
                            <div class="on-lin-innfor">
                                <div class="text-user">Почта</div>
                                <div class="box-inf-us">Moreau@gmail.com</div>
                            </div>
                            <div class="on-lin-innfor">
                                <div class="text-user">Дата
                                    рождения</div>
                                <div class="box-inf-us">07.01.1986</div>
                            </div>
                        </div> -->
                    </div>
                    <div class="user-iconic">
                        <div class="img-user"></div>
                        <div class="btn-users-iconic">
                            <a href="#"><div class="btn-us-ic">
                                Редактировать профиль
                            </div></a>
                            <a href="../php/exit.php"><div class="btn-us-ic">
                                Восстановить пароль
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wached-box">
                <div class="t-wach-b">Недавно просмотренные</div>
                <div class="imgs-wached-box">
                    <div class="film-wac-boxs">
                        <div class="img-films-mini mini1"></div>
                        <div class="lin-wached-ic">
                            <div class="star2"></div>
                            <div class="box-wach-ic-two">
                                <div class="izbr-img"></div>
                                <div class="down-img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="film-wac-boxs">
                        <div class="img-films-mini mini2"></div>
                        <div class="lin-wached-ic">
                            <div class="star2"></div>
                            <div class="box-wach-ic-two">
                                <div class="izbr-img"></div>
                                <div class="down-img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="film-wac-boxs">
                        <div class="img-films-mini mini3"></div>
                        <div class="lin-wached-ic">
                            <div class="star2"></div>
                            <div class="box-wach-ic-two">
                                <div class="izbr-img"></div>
                                <div class="down-img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="film-wac-boxs">
                        <div class="img-films-mini mini4"></div>
                        <div class="lin-wached-ic">
                            <div class="star2"></div>
                            <div class="box-wach-ic-two">
                                <div class="izbr-img"></div>
                                <div class="down-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php        
            include '../php/sait/footer.php';
        ?>