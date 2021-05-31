<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);
echo "Кількість відвудувань сайту: ".$counter;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yak u Babussi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require 'header.php'?>

    <section class="banner" id="banner">
        <div class="content">
            <h2>U Babussi</h2>
            <p>Кращий сімейний ресторан! Приходь з мамою, або з бабусею, або з дружиною...</p>
            <p>Але краще з усіма разом!</p>
            <a href="menu.php" class="btn">Переглянути меню</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>П</span>ро нас</h2>
                <p>Ресторан знаходиться в 300м від головного корпусу КПІ в Києві. 
                    Існує з 1995 року. 
                </p>
                <p>Ми пропонуємо якісні комплексні обіди
                для всієї родини, а також банкети для будь-якої кількості людей!
                </p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="img/about.jpg">
                </div>
            </div>
        </div>
    </section>


    <section class="expert" id="expert">
        <div class="title">
            <h2 class="titleText">Наші <span>К</span>ухарі</h2>
            <p>Ми працюємо відкрито, процес готування ви можете спостерігати в ресторані!</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/cook1.jpg">
                </div>
                <div class="text">
                    <h3>Віктор Васильович</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/cook2.jpg">
                </div>
                <div class="text">
                    <h3>Іван Петрович</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/cookG.jpg">
                </div>
                <div class="text">
                    <h3>Галина Іванівна</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/cook3.jpg">
                </div>
                <div class="text">
                    <h3>Тарас Григорович</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="titleText"><span>В</span>ідгуки нашик клієнтів!</h2>
            <p>Найкращі записи з книги відгуків...</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/Oleh_Vynnyk.jpg">
                </div>
                <div class="text">
                    <p>Всім молодим і не дуже вовчицям, рекомендую! Так смачно я не їв навіть в ресторані Тищенко, де салати по 
                        три тисячі гривень... Тому, хто хоче смачно, якісно і не дорого, ходіть сюди!
                    </p>
                    <h3>Олег Винник</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/Shevchenko.jpg">
                </div>
                <div class="text">
                    <p>Мій улюблений ресторан після важкого, але переможного матчу моєї збірної! Приємна домашня атмосфера,
                        якраз те, що шукають люди після важкого робочого дня. Чудово! </p>
                    <h3>Андрій Шевченко</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/Pysanka.jpg">
                </div>
                <div class="text">
                    <p>Мабуть, ні для кого не секрет, що я обожнюю смачно поїсти! В цьому ресторані, ніби повертаєшся в часі,
                        і знову опиняєшся у своєї найкращої бабусі... А ще тут, подейкують, можна зустріти Винника!
                    </p>
                    <h3>Руслана Писанка</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText">Наші <span>К</span>онтакти</h2>
            <p>Зв'яжіться з нами!</p>
        </div>
        <div class="text">
            <h3>Номер: </h3>
            <p>+380992177614</p>
        </div>
        <div class="text">
            <h3>Імейл: </h3>
            <p>babussia1990@gmail.com</p>
        </div>
        <div class="text">
            <h3>Адреса: </h3>
            <p>м.Київ, вул. Політехнічна, 35б</p>
        </div>
        <form action="" method="post">
        <div class="contactForm">
            <h3>Ми Вам передзвонимо!</h3>
        
            <div class="inputBx">
                <input type="text" name="name" placeholder="Ім'я">
            </div>
            <div class="inputBx">
                <input type="tel" name="phone" placeholder="Номер">
            </div>
            <div class="inputBx">
                <textarea placeholder="Замітка"></textarea>
            </div>
            <div class="inputBx">
                <input type="submit" value="Надіслати">
            </div>
        </div>
        </form>
        Привіт <?php echo htmlspecialchars($_POST['name']);?>.
        Ваш номер: <?php echo (int)($_POST['phone']);?>
        Очікуйте дзвінка...
    </section>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset>
            <legend>Оберіть коли Вам передзвонити:</legend>
            <label for="hour1">
                <input type="checkbox" id="hour1" name="time[]" value="через 1 годину">
                через 1 годину
            </label>
            <label for="min15">
                <input type="checkbox" id="min15" name="time[]" value="через 15 хвилин">
                через 15 хвилин
            </label>
            <label for="min5">
                <input type="checkbox" id="min5" name="time[]" value="через 5 хвилин">
                через 5 хвилин
            </label>
            <label for="notime">
                <input type="checkbox" id="notime" name="time[]" value="одразу">
                одразу
            </label>
        </fieldset>
        <input type="submit" value="Відправити">
    </form>
    <?php
    $time = isset($_POST['time']) ? $_POST['time']:'';
    if (!empty($time)){
        echo '<br><br>Обрані варіанти: ';
        foreach ($time as $t){
            echo "<span style=\"color:green\">".htmlentities($t)."</span><br>";
        }
    }
    ?>
    <div class="copyrightText">
        <p>Copyright © 2020 <a href="#">UBabussi</a>. All Right Reserved.</p>
    </div>
    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>
</html>