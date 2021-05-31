<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php require 'header.php'?>

    <section class="banner2" id="banner2">
        <div class="content">
            <a href="#titlePizza" class="btn">Піца</a>
            <a href="#titleDishes" class="btn">Гарячі страви</a>
            <a href="#titleDrink" class="btn">Напої</a>
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

    <section class="menu-slider">

        <div class="slider-container f">
            <div class="title" id="titlePizza">
                <h2 class="titleText"><span>П</span>іца</h2>
            </div>
            <div class='carousel f'>
                <input checked='checked' class='carousel__activator_f' id='carousel-slide-activator-1' name='carouself' type='radio'>
                <input class='carousel__activator_f' id='carousel-slide-activator-2' name='carouself' type='radio'>
                <div class='carousel__controls f'>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-2'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__controls f'>
                    <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-1'>
                        <img src="img/icons/Arrow.svg" alt="arrow" style="transform: rotate(180deg);">
                    </label>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-3'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__screen f'>
                    <div class='carousel__track f'>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/pizza1.jpg">
                                </div>
                                <div class="text">
                                    <h3>М’ясна, 660г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/pizza2.jpg" class="pizza">
                                </div>
                                <div class="text">
                                    <h3>Руккола Шматочками, 350г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/pizza3.jpg">
                                </div>
                                <div class="text">
                                    <h3>Маргарита, 480г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/pizza1.jpg">
                                </div>
                                <div class="text">
                                    <h3>М’ясна, 660г</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <a href="index.html#contact" class="btn">Замовити!</a>
            </div>
        </div>

        <div class="slider-container s"> 
            <div class="title" id="titleDishes">
                <h2 class="titleText"><span>Г</span>арячі страви</h2>
            </div>

            <div class='carousel s'>
                <input checked='checked' class='carousel__activator_s' id='carousel-slide-activator-3' name='carousels' type='radio'>
                <input class='carousel__activator_s' id='carousel-slide-activator-4' name='carousels' type='radio'>
                <div class='carousel__controlss'>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-4'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__controlss'>
                    <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-3'>
                        <img src="img/icons/Arrow.svg" alt="arrow" style="transform: rotate(180deg);">
                    </label>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-4'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__screen s'>
                    <div class='carousel__track s'>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img class="borsch" src="img/menu/main-dish1.jpg">
                                </div>
                                <div class="text">
                                    <h3>Борщ “Особливий”, 450г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/main-dish2.jpg">
                                </div>
                                <div class="text">
                                    <h3>М’ясна тарілка “Козацька”, 750г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/main-dish3.jpg">
                                </div>
                                <div class="text">
                                    <h3>Фрізе з тунцем “Бабусине”, 340г</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/main-dish1.jpg">
                                </div>
                                <div class="text">
                                    <h3>Борщ “Особливий”, 450г</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <a href="index.html#contact" class="btn">Замовити!</a>
            </div>
        </div>

        <div class="slider-container th">
            <div class="title" id="titleDrink">
                <h2 class="titleText"><span>Н</span>апої</h2>
            </div>
            <div class='carousel th'>
                <input checked='checked' class='carousel__activator_th' id='carousel-slide-activator-5' name='carouselth' type='radio'>
                <input class='carousel__activator_th' id='carousel-slide-activator-6' name='carouselth' type='radio'>
                <div class='carousel__controlsth'>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-6'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__controlsth'>
                    <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-5'>
                        <img src="img/icons/Arrow.svg" alt="arrow" style="transform: rotate(180deg);">
                    </label>
                    <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-6'>
                        <img src="img/icons/Arrow.svg" alt="arrow">
                    </label>
                </div>
                <div class='carousel__screen th'>
                    <div class='carousel__track th'>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img class="coctale" src="img/menu/coctale1.jpg">
                                </div>
                                <div class="text">
                                    <h3>Лимонад, 300мл</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/coctale2.jpg">
                                </div>
                                <div class="text">
                                    <h3>Свіжовижатий сік, 350мл</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/coctale3.jpg">
                                </div>
                                <div class="text">
                                    <h3>Інжирний алкогольний коктейль, 250мл</h3>
                                </div>
                            </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                            <div class='demo-content'>
                                <div class="imgBx">
                                    <img src="img/menu/coctale3.jpg">
                                </div>
                                <div class="text">
                                    <h3>Інжирний алкогольний коктейль, 250мл</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <a href="index.html#contact" class="btn">Замовити!</a>
            </div>
        </div>
    </section>


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