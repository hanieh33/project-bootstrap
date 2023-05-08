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
            <li class="breadcrumb-item"><a href="exercise.php">ورزش</a></li>
            <li class="breadcrumb-item active" aria-current="page">ورودزنان به ورزشگاه</li>

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
                                <a href="exercise-1.php"><li >تاریخ حضور زنان در استادیوم</li></a>
                                <a href="exercise-2.php"> <li>چهره استقلالی کاپیتان تیم خارجی شد</li></a>


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
                            <img src="img/news9.jpg" class="img-fluid">
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
                            <h3>تاریخ حضور زنان در استادیوم مشخص شد؛از 18 مهر</h3>
                            <br>
                            <p>معاون حقوقی و امور استان های از حضور زنان در ورزشگاهها خبر داد و گفت: زنان در ۱۸ مهرماه امسال برای تماشای دیدار تیم ملی ایران و کامبوج در مرحله مقدماتی جام جهانی قطر می توانند به ورزشگاه آزادی بروند.<br>
                                او درباره ورود زنان به ورزشگاه ها گفت: «منع قانونی وجود ندارد و ما باید زیر ساخت ها را فعال کنیم که در حال انجام است و ۱۸ مهر نخستین حضور زنان در ورزشگاه آزادی است.»<br>
                                معاون حقوقی وزارت ورزش ادامه داد: «نگاه ما در تمامی سطوح برای زنان فراهم کردن مقدمات آنها در عرصه های بین المللی است و تبعیض جنسیتی هم نداریم.»<br>
                                تقی زاده با اشاره به از سرگیری نشست هایی در حل مسائل قانونی واگذاری به  ۲ باشگاه استقلال و پرسپولیس گفت: «به دلیل موانع قانونی فرآیند واگذاری به تاخیر افتاد که در این باره و برای رفع مشکل حقوقی نشستی با حضور وزیر ورزش و جوانان و نمایندگان سازمان بورس و دیوان محاسبات و برخی نمایندگان در کمیسیون اصل ۴۴ برگزار می شود تا به جمع بندی در این زمینه برسیم.»
                            </p>

                                <br><br>
                                <div class="comment">
                                    <ul class="text-left">
                                        <li class="fa fa-tag">
                                            <a href="exercise-1.php"><span class="comment-3">ورود زنان به ورزشگاه</span></a>
                                            <a href="exercise-2.php"> <span class="comment-1">وزارت ورزش جوانان</span></a>
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