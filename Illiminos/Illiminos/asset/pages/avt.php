<?php        
        session_start();
        include '../php/sait/header.php';
    ?>
        <!-- Main  -->
        <main class="main">
            <?php
                if(isset($_GET['message'])){
                    echo "<div class='zag-user'>
                        {$_GET['message']}
                        <br><br>
                    </div>";
                }
            ?>
            <div class="reggi-box">
                <div class="logo-regist"></div>
                <div class="box-form">
                    <form action="../php/avt.php" method="post" class="form-registrit">
                        <div class="inp-form-regist">
                            <div class="on-lin-form">
                                <label for="login">Логин</label>
                                <input type="text" name="login" id="login" required>
                            </div>
                            <div class="on-lin-form">
                                <label for="password">Пароль</label>
                                <input type="password" name="password" id="password" required>
                            </div>                            
                        </div>
                        <input type="submit" name="ottp" id="ottp" value="Отправить" class="ottp-form">
                    </form>
                </div>
            </div>
        </main>
        <script>
            $(function() {
              //задание заполнителя с помощью параметра placeholder
              $("#date").mask("99.99.9999", {placeholder: "дд.мм.гггг" });
            });
        </script>
    <?php        
            include '../php/sait/footer.php';
        ?>