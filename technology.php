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
            <li class="breadcrumb-item active" aria-current="page">فناوری</li>
        </ol>
    </nav>
    <div class="row" style="margin-top: 102px">
        <div class="col-md-4">
            <div class="row">
                <div class="sidebar-left">
                    <div class="card" style="width: 320px; ">
                        <h5 class="card-header text-right post-new">تازه ترین مطالب</h5>
                        <div class="card-body">
                            <ul class="text-right link-left">
                                <a href="economy-2.php"><li >نرخ ها در بازار طلاوسکه!</li></a>
                                <a href="exercise-1.php" ><li>تاریخ حضور زنان در استادیوم</li></a>
                                <a href="music-1.php"> <li>تلاش برای امنیتِ شغلی هنرمندان</li></a>


                            </ul>

                        </div>
                    </div>
                    <div class="card" style="width: 320px;margin-top: 60px ">
                        <h5 class="card-header text-right post-new">مطالب مرتبط</h5>
                        <div class="card-body">
                            <ul class="text-right link-left">
                                <a href="technology-1.php"> <li>آمازون و مایکروسافت با ساختن ربات‌های قاتل دنیا را به‌خطر می‌اندازند</li></a>
                                <a href="technology-2.php"> <li>بررسی آخرین وضعیت احیای کارت سوخت</li></a>
                                <a href="technology-3.php"> <li>مناظره‌ ایلان ماسک با جک ما؛ از هوش مصنوعی تا کاهش جمعیت</li></a>

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
        <div class="col-md-8">
            <ul class="blog-list">
                <li class="single">
                    <div class="post-content">
                        <div class="post-image text-center">
                            <img src="img/news1.jpg" class="img-fluid">
                            <div class="post-star text-left">

                            </div>

                        </div>
                        <div class="post-text text-right ">
                            <h3>آمازون و مایکروسافت با ساختن ربات‌های قاتل دنیا را به‌خطر می‌اندازند</h3>
                            <br>
                            <p> آمازون و مایکروسافت، غول‌های بزرگ فناوری، با دستیابی به تکنولوژی هوش مصنوعی کُشنده و ساخت ربات‌های قاتل، جهان را درمعرض خطر قرار خواهند داد......</p>

                            <br><br>

                        </div>
                        <a  href="technology-1.php" class="btn-more text-left">ادامه مطلب</a>
                        <div class="break"></div>
                    </div>
                </li>
                <li class="single">
                    <div class="post-content">
                        <div class="post-image text-center">
                            <img src="img/news14.jpg" class="img-fluid">
                            <div class="post-star text-left">

                            </div>

                        </div>
                        <div class="post-text text-right ">
                            <h3>پردازنده‌های سری 3000 تردریپر رایزن AMD امسال معرفی می‌شوند </h3>
                            <br>
                            <p>پردازنده‌های سری ۳۰۰۰ تردریپر رایزن AMD‌ تا پایان سال ۲۰۱۹ برپایه‌ی تراشه‌های جدید با نام‌گذاری متفاوت با تراشه‌های قبلی معرفی خواهند شد. ......</p>

                            <br><br>

                        </div>
                        <a  href="technology-2.php" class="btn-more text-left">ادامه مطلب</a>
                        <div class="break"></div>
                    </div>
                </li>
                <li class="single">
                    <div class="post-content">
                        <div class="post-image text-center">
                            <img src="img/news15.jpg" class="img-fluid">
                            <div class="post-star text-left">

                            </div>

                        </div>
                        <div class="post-text text-right ">
                            <h3>مناظره‌ ایلان ماسک با جک ما؛ از هوش مصنوعی تا کاهش جمعیت</h3>
                            <br>
                            <p>ایلان ماسک و جک ما در حاشیه‌ی کنفرانس هوش مصنوعی در چین، مناظره‌‌ای کردند که نکات درخورتوجهی را از دیدگاه بزرگان دنیای فناوری نشان می‌داد.....</p>

                            <br><br>

                        </div>
                        <a  href="technology-3.php" class="btn-more text-left">ادامه مطلب</a>
                        <div class="break"></div>
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