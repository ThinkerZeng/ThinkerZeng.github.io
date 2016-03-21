<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta id="viewport" name="viewport"
          content="width=device-width,initial-scale=1.0,
                maximum-scale=1.0,user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="lib/HTML5-Reset/assets/css/reset.css" />
    <link rel="stylesheet" href="lib/OwlCarousel2/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="lib/OwlCarousel2/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/style.css" />
<!--    <link rel="stylesheet/less" type="text/css" href="style.less">-->
<!--    <script src="less.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
</head>
<body>
<script src="js/swiper.min.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<!--<div class="swiper-container">-->
<!--    <div class="swiper-wrapper">-->
<!--        <div class="swiper-slide">Slide 1</div>-->
<!--        <div class="swiper-slide">Slide 2</div>-->
<!--        <div class="swiper-slide">Slide 3</div>-->
<!--    </div>-->
<!--<!--     如果需要分页器 -->
<!--    <div class="swiper-pagination"></div>-->
<!---->
<!--<!--     如果需要导航按钮 -->
<!--    <div class="swiper-button-prev"></div>-->
<!--    <div class="swiper-button-next"></div>-->
<!---->
<!--<!--     如果需要滚动条 -->
<!--    <div class="swiper-scrollbar"></div>-->
<!--</div>-->
<!--<!--导航等组件可以放在container之外-->
<header class="header">
    <div class="header-top">
        <div class="header-top-left">
            <a href="" class="">
                <img src="images/mouse.png">
            </a>
            <div class="header-con">
                Investment Company Respo...<a href="">#56053</a>
            </div>
        </div>
        <div class="header-top-middle">
            <a class="computer" href="">
                <img src="images/computer.png">
            </a>
            <a class="ipad" href="">
                <img src="images/ipad.png">
                <img src="images/ipad-cir.png">
            </a>
            <a class="" href="">
                <img src="images/iphone.png">
                <img src="images/iphone-cir.png">
            </a>
        </div>
        <div class="header-top-right">
            <a class="top-left" href="">Single Site License</a>
            <a class="top-right" href="">$199
<!--            <select style="visibility: hidden">-->
<!--                <option>Single Site License $199</option>-->
<!--                <option>Template + 1 Year Hosting $246</option>-->
<!--                <option>Buyout License $4,500-->
<!--                </option>-->
<!--            </select>-->
            </a>
            <img src="images/buynow.png">
        </div>
    </div>
    <div  class="header-up-down">
        <img src="images/up.png">
    </div>
    <div class="header-middle">
        <a href="" class="">
            <img src="images/bottom2.png">
        </a>
        <a href="" class="">
            <div class="stock-top">Stocx</div>
            <h3>STOCK MARKET</h3>
        </a>
    </div>
    <div class="header-bottom">
        <ul class="header-bottom-item">
            <a href="aboutus.php"><li>ABOUT US</li></a>
            <a href="investing.php"><li>INVESTING</li></a>
            <a href=""><li>TRADE</li></a>
            <a href="research.php"><li>RESEARCH</li></a>
            <a href="blog.php"> <li>BLOG</li></a>
            <a href="contacts.php"><li class="header-bottom-last">CONTACTS</li></a>
        </ul>
    </div>
</header>

<script>
    $(function(){
        $(".header-up-down").click(function(){
            $(".header-top").slideToggle(200);
        });
//        $(".header-bottom").onmouseup(function(){
//            $("li").css("background-color":"yellow");
//        })
//        $(".header-bottom li").onmousemove(function(){
//            $("li").css({"background-color":"yellow"});
//        });

    })
</script>