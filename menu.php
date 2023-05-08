<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container ">
    <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light col-md-12" id="menu"  style="text-align: right;"  >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #999999; color: #fff;">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav  mt-2 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" style="padding: 0px;">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="fa fa-bars"></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">صفحه اصلی <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="siasi.php">سیاسی و اجتماعی</a>
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
                <form class="form-inline my-2 my-lg-0" >
                    <span class="fa fa-search show-search"></span>
                    <div id="search">
                        <input class="form-control search mr-sm-2"  type="search" placeholder="جستجو" aria-label="Search">
                        <button class="btn btn-success btn-search my-2 my-sm-0"  type="submit"><span class="fa fa-search"></span></button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
</body>
<script>
    $(window).scroll(function() {
        if($(window).scrollTop() > 620) {
            $('#menu').css({ position: 'fixed', top: 0 });
        } else {
            $('#menu').css({ position: 'absolute', top: '620px' });
        }
</script>
</html>