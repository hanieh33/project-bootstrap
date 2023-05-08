<?php
include ("jdf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>سایت خبری</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/new_setting.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

</head>

<html>
<body>
<div class="header-nav " id="n">
    <?php include "menu.php"?>

</div>
<?php include "menu-sidebar.php"?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">صفحه اصلی</a></li>
            <li class="breadcrumb-item"><a href="economy-1.php">اقتصاد</a></li>
            <li class="breadcrumb-item active" aria-current="page">اقتصاد کلان</li>

        </ol>
    </nav>
    <div class="row" style="margin-top: 102px">
        <div class="col-12 col-sm-12 col-md-4  col-lg-4">
            <div class="row">
                <div class="sidebar-left">
                    <div class="card" style="width: 320px; ">
                        <h5 class="card-header text-right post-new">تازه ترین مطالب</h5>
                        <div class="card-body">
                            <ul class="text-right link-left">
                                <a href="economy-2.php"><li >نرخ ها در بازار طلاوسکه!</li></a>
                                <a href="exercise-1.php" ><li>تاریخ حضور زنان در استادیوم</li></a>
                                <a href=""> <li>تلاش برای امنیتِ شغلی هنرمندان</li></a>
                                <a href=""><li >کشف ارتباط آلودگی هوا با افسردگی</li></a>

                                <li></li>

                            </ul>

                        </div>
                    </div>
                    <div class="card" style="width: 320px;margin-top: 60px ">
                        <h5 class="card-header text-right post-new">مطالب مرتبط</h5>
                        <div class="card-body">
                            <ul class="text-right link-left">
                                <a href="economy-2.php"><li >نرخ ها در بازار طلاوسکه!</li></a>
                                <a href="economy-3.php" <li>پیش‌بینی بازار ارز در شش ماه دوم</li>


                            </ul>

                        </div>
                    </div>
                    <div class="card" style="width: 320px;margin-top: 60px ">
                        <h5 class="card-header text-right post-new">مطالب پیشنهادی</h5>
                        <div class="card-body">
                            <ul class="text-right link-left">
                                <a href=""><li ></li></a>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 ">
            <ul class="blog-list">
                <li class="single">
                    <div class="post-content">
                        <div class="round" >
                            <div class="post-img text-right"  >
                                <img src="img/news26.jpg" alt="" class="rounded-circle" width="50" height="50">
                                <div class="author-details">
                                    <span>نویسنده:ادمین</span><br>
                                    <span style="color: #999999"><?php print jdate("l, j F Y"); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-image text-center">
                            <img src="img/5228042.jpg" class="img-fluid">
                            <div class="post-star text-left">
                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                <label class="star star-1" for="star-1"></label>
                            </div>

                        </div>
                        <div class="post-text text-right ">
                            <h3>پیش‌بینی بازار ارز در شش ماه دوم سال ۹۸ / دلار ارزانتر می‌شود؟</h3>
                            <br>
                            <p>اقتصاد ایران درباره وضعیت بازار ارز در نیمه دوم سال گفت: «ما امیدواریم که بتوانیم از پیچ سختی که تحریم‌ها برای ما به‌وجود آورده، بگذریم، ولی نسبت به نیمه اول سال بازار وضعیت بهتری خواهد داشت. »<br>
                                بازار ارز یک هفته گذشته را پرنوسان گذشت؛ تا جایی که نرخ دلار تا ۱۲ هزار و ۹۵۰ تومان کاهش یافت و پس از آن، در روز چهارشنبه دوباره بالا رفت و دوباره وارد کانال ۱۱ هزار تومان شد. در حال حاضر نرخ دلار در بازار ارز در حدود ۱۱ هزار و ۲۰۰ تومان است.
                                در این میان، برخی پیش‌بینی‌ها در رابطه با بازار ارز در ۶ ماهه دوم سال ۹۸، حکایت از تثبیت قیمت ارز در کانال ۱۱ تا ۱۲ هزار تومان را دارد. با این حال، برخی کارشناسان درباره آینده قیمت دلار معتقدند «در شرایط کنونی قیمت واقعی دلار را نمی‌توان از پیش تعیین کرد؛ چراکه باید دلار موجود را در بازار را با تزریق‌های جدید افزایش داد و میزان تقاضای واقعی را پاسخ داد تا از این طریق  قیمت واقعی کشف شود. » اگرچه نسبت به سال گذشته میزان دلالی ارز تا حدودی کاهش یافته، اما هنوز به صفر نرسیده است.

                                <br><br>
                                <div class="comment">
                                    <ul class="text-left">
                                        <li class="fa fa-tag">
                                            <a href="economy-3.php"><span class="comment-3">اقتصاد کلان،</span></a>
                                            <a href="economy-2.php"> <span class="comment-1">بازار طلاو ارز</span></a>
                                        </li>

                                        <li class="comment-2 fa fa-comment ">
                                            <a href=""><span class="comment-4">نظر0</span></a>
                                        </li>

                                    </ul>
                                    <ul>
                            <p style="display: inline-block">اشتراک گذاری:</p>
                            <a href="#"><li class="fa fa-facebook text-center"></li></a>
                <a href="#"><li class="fa fa-google text-center"></li></a>
                <a href="#"><li class="fa fa-twitter text-center"></li></a>

            </ul>
        </div>
    </div>
    <div class="break"></div>
    <div class="comment-respond text-right">
        <h5 class="text-right" style="margin: 50px 30px">ارسال نظر</h5>
        <form>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام*">

            </div>
            <div class="form-group">

                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="ایمیل*">
            </div>
            <div class="form-group">

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-send">ارسال پیام</button>
        </form>

    </div>

</div>
</li>



</ul>

</div>
</div>

</div>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/setting.js"></script>
<script src="js/in-ss.js"></script>
<script type="text/javascript">
    </html>