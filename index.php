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
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/ekko-lightbox.css">

</head>
<style>


</style>
<body>
<div class="wrapper">
  <header>
      <div class="news-bar ">
          <div class="container ">
          <div class="row ">
       <div class="bar-one col-6 col-md-2  text-right">
           <ul>
               <li><span class="fa fa-rss "></span></li>
               <li><span class="fa fa-facebook "></span></li>
               <li><span class="fa fa-twitter "></span></li>
           </ul>

       </div>
              <div class="col-6 col-md-4 text-right">

                  <ul class="slidedd">
                      <li>بررسی آخرین وضعیت کارت سوخت</li>
                      <li>پردازنده‌های سری 3000</li>
                      <li>تاریخ حضور زنان در استادیوم</li>
                  </ul>

              </div>

              <div class="col-12 col-md-6 ">

              <span class=" " >
           <?php
           print jdate("l, j F Y");
           ?>
           </span>
          </div>
          </div>
          </div>
      </div>
     <div class="header-top ">

         <div class="container-fluid ">
             <div class="row">
         <div class="col-md-12 back"><img class="" src="img/header-back.png" style=" max-height: 180px width=50% "  ></div>
         </div>

        </div>
     </div>

      <div class="header-nav " id="n">
      <?php include "menu.php"?>
	

      </div>
      <!--end header-nav-->
      <!--start sidebar menu right-->
<?php include "menu-sidebar.php"?>

    </header>
  <section>
      <div class="container">

          <div class="box-news ">


                 <div class="row justify-content-md-center">
      <div class="col-md-4">
        <figure>
            <a href="economy-1.php">
             <div class="box-one  d-flex justify-content-start" >

             <img src="img/5242392.jpg" width="80" height="80">
                 <figcaption >
                   <h4 class="text-right">مشتری نیست، نرخ‌ها در بازار طلا، سکه و ارز ثابت ماند</h4>
                 <span class="txt text-right" >ثبات در بازار ارز و تغییرات مختصر اونس جهانی طلا سبب ثبات در بازار طلا و سکه شده است</span>
                 </figcaption>

             </div>  </a>
          </figure>  <div class=""></div>
      </div>

      <div class="col-md-4">
          <figure>
              <a href="siasi-2.php">
              <div class="box-one  d-flex justify-content-start" >
          <img src="img/news3.jpg" alt="" width="80" height="80" >
                  <figcaption>
                  <h4 class="text-right">بررسی آخرین وضعیت کارت سوخت</h4>
                  <span class="txt text-right">رئیس فراکسیون نمایندگان ولایی جزئیات جلسه امروز این فراکسیون با بیژن زنگنه وزیر نفت را تشریح کرد. </span>
                  </figcaption>
              </div>
              </a>
          </figure>
      </div>
      <div class="col-md-4">
          <figure>
              <a href="technology-2.php">
              <div class="box-one  d-flex justify-content-start" >
          <img src="img/news14.jpg" alt="" width="80" height="80">
                 <figcaption>
                  <h4 class="text-right">پردازنده‌های سری 3000</h4>
                  <span class="txt text-right">پردازنده‌های سری ۳۰۰۰ تردریپر رایزن AMD‌ تا پایان سال ۲۰۱۹ برپایه‌ی تراشه‌های جدید</span>
                  </figcaption>
              </div>
              </a>
          </figure>
      </div>

              </div>

          </div>
      </div>
  </section>
    <section class="main-slide">
        <div class="container">
            <div class="row">

               <div class="col-sm-12 col-md-6 col-lg-6" >

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
                         <div class="carousel-inner nn">
                             <div class="carousel-item ii active">
                                 <img src="img/news1.jpg" class="d-block w-100" height="400" width="600" alt="...">
                                 <div class="carousel-caption d-none d-md-block">
                                     <h5></h5>
                                    <a href="technology-1.php"> <p class="text-right">آمازون و مایکروسافت با ساختن ربات‌های قاتل دنیا را به‌خطر می‌اندازند.</p></a>
                                 </div>
                             </div>
                             <div class="carousel-item ii">
                                 <img src="img/news14.jpg" class="d-block w-100" height="400" width="600" alt="...">
                                 <div class="carousel-caption d-none d-md-block">
                                     <a href="technology-2.php"><h4 class="text-right" style="font-size: 20px;">پردازنده‌های سری 3000</h4></a>
                                     <p class="text-right"></p>
                                 </div>
                             </div>
                             <div class="carousel-item ii ">
                                 <img src="img/news17.jpg" class="d-block w-100" height="400" width="600" alt="...">
                                 <div class="carousel-caption d-none d-md-block">
                                     <a href="siasi-1.php" ><h5 class="text-right">فرمانده نیروی دریایی ارتش</h5></a>
                                     <p class="text-right"></p>
                                 </div>
                             </div>
                         </div>

                         <a class="carousel-control-prev slider-one-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next slider-one-next" href="#carouselExampleControls" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Next</span>
                         </a>
                     </div>

                </div>

                <div class="col-12 col-sm-12 col-md-6" style="margin-top: -2px;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6" style="padding-right: 2px;padding-left: 2px;">
                            <div class="card card-post  text-white ">

                                <img src="img/news9.jpg" alt="" class="img-fluid">
                                <div class="card-img-overlay">
                                    <a href="exercise-1.php">
                                    <h5 class="card-title text-right">
                                        <p>تاریخ حضور زنان در استادیوم</p>
                                    </h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12  col-md-6" style="padding-right: 2px;padding-left: 2px;">
                            <div class="card card-post  text-white ">

                                <img src="img/news15.jpg" alt="" class="img-fluid">
                                <div class="card-img-overlay">
                                    <a href="technology-3.php">
                                    <h5 class="card-title text-right">
                                        <p>مناظره‌ ایلان ماسک با جک ما</p>
                                    </h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12 col-sm-12 col-md-6" style="padding-right: 2px;padding-left: 2px;">
                            <div class="card card-post  text-white " >

                                <img src="img/news7.jpg" alt="" class="img-fluid">
                                <div class="card-img-overlay">
                                    <a href="music-1.php">
                                    <h5 class="card-title text-right">
                                        <p>تلاش برای امنیتِ شغلی هنرمندان موسیقی آغاز شد</p>
                                    </h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6" style="padding-right: 2px;padding-left: 2px;">

                            <div class="card card-post  text-white " >
                                <img src="img/news8.jpg" alt="" class="img-fluid">
                                    <div class="card-img-overlay">
                                    <a href="">
                                    <div class="card-title text-right">
                                       <p> کشف ارتباط آلودگی هوا با افسردگی</p>

                                    </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

             </div>
         </div>
     </section>
     <section class="blog-main">
         <div class="container-fluid">
             <div class="row col-lg-12">
                 <div class="col-lg-8">
                    <article class="title-blog-main">
                        <h3 class="widget-title">
                            <span class="object-one" >تیترهای مهم اخیر</span>
                        </h3>
                    </article>
                     <article style="margin-right: 40px;margin-bottom: 35px;">
                         <ul class="list-unstyled">
                             <li class="media my-4">
                                 <img src="img/news14.jpg" class="mr-3 rounded"  width="100px" height="80px" alt="...">
                                 <div class="media-body">
                                     <a href="technology-2.php">
                                     <h5 class="mt-0 mb-1" >پردازنده‌های سری 3000</h5>
                                     <span class="media-list"> پردازنده‌های سری ۳۰۰۰ تردریپر رایزن AMD‌ تا پایان سال ۲۰۱۹ برپایه‌ی تراشه‌های جدید با نام‌گذاری متفاوت با تراشه‌های قبلی معرفی خواهند شد.</span>
                                     </a>
                                     <div class="hr mr-auto">
                                     <p class="font-weight-light">26دقیقه پیش</p>
                                     </div>
                                 </div>
                             </li>

                             <li class="media my-4">
                                 <img src="img/news9.jpg" class="mr-3 rounded" alt="..." width="100px" height="80px" >
                                 <div class="media-body">
                                     <a href="exercise-1.php">
                                     <h5 class="mt-0 mb-1">تاریخ حضور زنان در استادیوم</h5>
                                    <span class="media-list">معاون حقوقی و امور استان های از حضور زنان در ورزشگاهها خبر داد و گفت: زنان در ۱۸ مهرماه امسال برای تماشای دیدار تیم ملی ایران و کامبوج در مرحله مقدماتی جام جهانی قطر می توانند به ورزشگاه آزادی بروند.</span>
                                     </a>
                                     <div class="hr mr-auto">
                                         <p class="font-weight-light">26دقیقه پیش</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="media my-4">
                                 <img src="img/news10.jpg" class="mr-3 rounded" alt="..." width="100px" height="80px">
                                 <div class="media-body">
                                     <a href="exercise-2.php">
                                     <h5 class="mt-0 mb-1">چهره استقلالی کاپیتان تیم خارجی شد</h5>
                                     <span class="media-list">پژمان منتظری به احتمال بسیار زیاد در این فصل کاپیتان تیم الخریطیات قطر خواهد بود.
پژمان منتظری مدافع سابق تیم ملی ایران و باشگاه استقلال که در دو سال گذشته پیراهن آبی پوشان را بر تن کرده
                                     </span>
                                     </a>
                                     <div class="hr mr-auto">
                                         <p class="font-weight-light">26دقیقه پیش</p>
                                     </div>
                                 </div>
                             </li>
                             <li class="media my-4">
                                 <img src="img/news15.jpg" class="mr-3 rounded" alt="..." width="100px" height="80px">
                                 <div class="media-body">
                                     <a href="technology-3.php">
                                     <h5 class="mt-0 mb-1">مناظره‌ ایلان ماسک با جک ما</h5>
                                     <span class="media-list">ایلان ماسک و جک ما در حاشیه‌ی کنفرانس هوش مصنوعی در چین، مناظره‌‌ای کردند که نکات درخورتوجهی را از دیدگاه بزرگان دنیای فناوری نشان می‌داد.</span>
                                     </a>
                                     <div class="hr mr-auto">
                                         <p class="font-weight-light">26دقیقه پیش</p>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </article>
                 </div>
                 <div class="col-lg-4">
                     <article class="title-blog-main">
                         <h3 class="widget-title">
                             <span class="object-one" >جدیدترین اخبار</span>
                         </h3>
                     </article>
                    <article class="article-list-item">
                        <ul class="items-wrapper">
                            <li>
                                <a href="technology-1.php">
                                    <i class="fa fa-circle"></i>
                                    آمازون و مایکروسافت با ساختن ربات‌های قاتل دنیا را به‌خطر می‌اندازند
                                </a>
                            </li>
                            <li><a href="siasi-1.php">
                                    <i class="fa fa-circle"></i>
                                    فرمانده نیروی دریایی ارتش

                                </a>
                            </li>
                            <li><a href="economy-2.php">
                                    <i class="fa fa-circle"></i>
                                    مشتری نیست، نرخ‌ها در بازار طلا، سکه و ارز ثابت ماند
                                </a>
                            </li>
                            <li><a href="economy-3.php">
                                    <i class="fa fa-circle"></i>
                                    پیش‌بینی بازار ارز در شش ماه دوم سال ۹۸ / دلار ارزانتر می‌شود؟
                                </a>
                            </li>
                            <li><a href="music-1.php">
                                    <i class="fa fa-circle"></i>
                                    اعتراض هنرمندان موسیقی به نبود امنیت شغلی

                                </a>
                            </li>
                        </ul>
                    </article>
                 </div>

             </div>
         </div>
     </section>
    <section class="best-picture">
        <div class="container">

            <div class="pic">
                <div class="col-md-12 text-right" style="padding-bottom: 30px;">
                    <span class="title">عکس</span>
                </div>
           <div class="col-md-12 ">
                <div class="row best-picture-size text-center">
              <div class="ss col-12  col-md-6 col-lg-6" style="padding: 5px">
                  <a href="img/news18.jpg"  data-size="1600x1067" data-toggle="lightbox" data-gallery="gallery" style="height:600px; width: 1200px;">
                  <img src="img/news18.jpg" class="img-fluid" >
                  </a>
              </div>
              <div class="ss col-12  col-md-6 col-lg-6 " style="padding: 5px">
                  <a href="img/news19.jpg" data-size="1600x1067" data-toggle="lightbox" data-gallery="gallery">
                      <img src="img/news19.jpg" class="img-fluid" >
                  </a>
              </div>

              <div class="ss col-12  col-md-4 col-lg-4" style="padding: 5px">
                  <a href="img/news23.jpg" data-size="1600x1067"  data-toggle="lightbox" data-gallery="gallery">
                      <img src="img/news23.jpg" class="img-fluid" >
                  </a>

              </div>
                <div class="ss col-12  col-md-4 col-lg-4 " style="padding: 5px">
                    <a href="img/3225230.jpg" data-size="1600x1067"  data-toggle="lightbox" data-gallery="gallery">
                        <img src="img/3225230.jpg" class="img-fluid" >
                    </a>
                </div>

                <div class="ss col-12  col-md-4 col-lg-4 " style="padding: 5px">
                    <a href="img/3225222.jpg" data-size="1600x1067"  data-toggle="lightbox" data-gallery="gallery">
                        <img src="img/3225222.jpg" class="img-fluid"  >
                    </a>
                </div>



            </div>
           </div>
        </div>



            </div>
    </section>






    <div class="container">
        <ul class="row galleryContainer">
        </ul>
    </div>

    <section style="margin-top: 40px;">
       <div class="container-fluid">

           <section class="main">
               <div class="col-md-10">
             <h3 class="widget-title text-right" >
             <span class="object-one">یادداشت</span>
             </h3>
               </div><div class="col-md-10 mx-auto">
               <div class="most-popular-posts">

                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>

                       </div>
                       </a>
                   </div>
                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>
                       </div>
                           </a>
                   </div>
                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>
                       </div>
                           </a>
                   </div>
                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>
                       </div>
                           </a>
                   </div>
                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>
                       </div>
                       </a>
                   </div>
                   <div class="card" style="width: 18rem;">
                       <a href="Notes.php">
                       <img class="card-img-top" src="img/news24.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">توکیو امن‌ترین شهر دنیا</h5>
                       </div>
                           </a>
                   </div>
               </div>
               </div>
           </section>
        </div>

    </section>
    <section class="footer">
        <div class="footer-top ">
            <div class="container">
                <div class="row">
            <div class="col-md-6 text-right">
                <div class="categories">
         <ul>
             <li class="nav">
                 <span class="widget-title" >دسته بندی مطالب</span>
             </li>
    <li class="nav-item ">
        <a class="nav-link" href="index.php">صفحه اصلی </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="siasi-one.php">سیاسی و اجتماعی</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="economy-1.php">اقتصاد</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="exercise.php" >ورزشی</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="technology.php" >فناوری</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="music.php">موسیقی</a>
    </li>
        </ul>
                </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="Membership">
                  <span class="text-center">عضویت در خبرنامه</span><br>
                  <input type="text" class="membership-name" placeholder="نام شما">
                  <button type="button" class="btn">ثبت</button>
              </div>
            </div>
                </div>
        </div>
        </div>

        <div class="footer-bottom text-right">
            <div class="container">
                <div class="row">
        <div class="col-md-6"> اشتراک‌گذاری تنها با ذکر منبع مجاز است!</div>
        <div class="col-md-6 text-left">
            <ul>
                <li><span class="fa fa-rss "></span></li>
                <li><span class="fa fa-facebook "></span></li>
                <li><span class="fa fa-twitter "></span></li>
            </ul>
        </div>
            </div>
            </div>
</div>

    </section>
 </div>
 </body>
 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="js/slick.min.js"></script>
 <script src="js/setting.js"></script>
<script src="js/in-ss.js"></script>
<script src="js/ekko-lightbox.js"></script>
 <script type="text/javascript">
     $(document).on("click", '[data-toggle="lightbox"]', function(event) {
         event.preventDefault();
         $(this).ekkoLightbox();
     });

</script>
<script>
    $('.most-popular-posts').each(function(){

        $('.most-popular-posts').slick({
            autoplay:true,
            autoplaySpeed:6000,
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1198,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 660,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
            ]
        });

    });
</script>

 </html>
