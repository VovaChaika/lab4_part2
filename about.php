<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php require 'header.php'?>

    <main>
        
        <section class="banner3" id="banner3">
            <div class="content">
                <a href="#about" class="btn">Історія</a>
                <a href="#location" class="btn">Місцезнаходження</a>
                <a href="#contacts" class="btn">Контакти</a>
            </div>
        </section>

        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>П</span>ро нас</h2>
                    <p>Ресторан знаходиться в 300м від головного корпусу КПІ в Києві.
                            Існує з 1995 року.
                    </p>
                    <p>Він був заснований власником, в честь своєї бабусі, яку він любив більше ніж будь-кого іншого. Ні для кого не секрет, що
                    сім’я це головне!
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

        <section class="location" id="location">
            <div class="title">
                <h2 class="titleText"><span>К</span>арта місцезнаходження</h2>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.56676366827!2d30.453960015731347!3d50.44916987947517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce82b9bc8a47%3A0x47514e5d91216bf3!2z0JrQuNC10LLRgdC60LjQuSDQv9C-0LvQuNGC0LXRhdC90LjRh9C10YHQutC40Lkg0LjQvdGB0YLQuNGC0YPRgg!5e0!3m2!1sru!2sua!4v1621416556667!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

        <section class="contacts" id="contacts">
            <div class="title">
                <h2 class="titleText"><span>К</span>онтакти</h2>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="img/about/manager.jpg">
                    </div>
                    <div class="text">
                        <h3>Менеджер, Іван Михайлович</h3>
                        <h3>+380954564512</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="img/about/consultant.jpg">
                    </div>
                    <div class="text">
                        <h3>Консультант, Марина Семенівна</h3>
                        <h3>+380955556232</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="img/about/owner.jpg">
                    </div>
                    <div class="text">
                        <h3>Власник, Андрій Петрович</h3>
                        <h3>petrovych@gmail.com</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="order">
            <div class="title">
                <h2 class="titleText"><span>З</span>робити замовлення:</h2>
            </div>

            <div class="info">
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
            </div>
        </section>
    
    </main>


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