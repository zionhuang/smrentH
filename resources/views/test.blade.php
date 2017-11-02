<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>水木租房</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <!--move jquery.min.js to here and add jquery.more.js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.more.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#more').more({'address': 'php/data.php'})
            //alert('111');
        });
    </script>
</head>
<body>

<header>
    <!--搜索链接跳转-->
    <div class="nav-btn nav-search">
        <a href="#">
            <i class="fa fa-search fa-2x text-primary " aria-hidden="true"></i>
        </a>
    </div>
    <!--LOGO-->
    <div class="nav-btn nav-logo">
        <img class="logo" src="images/logo.jpg" alt="水木租房">
    </div>
    <!--发布信息跳转-->
    <div class="nav-btn nav-publish">
        <a href="#"><i class="fa fa-plus-circle fa-2x text-success " aria-hidden="true"></i>
        </a>
    </div>
</header>

<div class=" body">
    <!--租房信息-->
    <div id="more">
        <div class="single_item"><!--onclick="alert(this.innerHTML);"-->
            <!--<a href="pages/rent_info.html" class="content-box">-->
            <a class="content-box">
                <!--房间图片 float-->
                <div class="pic-wrapper float-left">
                    <img class="room-pic" alt="">
                </div>
                <!--房源标题 float-->
                <div class="content-wrapper float-left">
                    <h4><div class="title"></div></h4>
                    <!--房间属性简介 block 垂直排列-->
                    <div class="abstract">
                        <ul class="room-info">
                            <li id="district"><div class="district"></div></li>
                            <li id="house-type" class="text-center"><div class="room_type"></div></li>
                            <li id="rent-type" class="text-right"><div class="rent_type"></div></li>
                        </ul>
                    </div>
                    <div class="state">
                        <ul class="state-info">
                            <!--房源状态描述-->
                            <li>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span id="watcher"><div class="view"></div></span>
                            </li>
                            <li class="text-center">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                <span id="want"><div class="want"></div></span>
                            </li>
                            <li id="price" class="text-right"><div class="price"></div></li>
                        </ul>
                    </div>
                </div>
            </a>
            <hr>
        </div>
        <a href="javascript:;" class="get_more" style="color:#007bc4/*#424242*/; text-decoration:none;outline: none;">::more::</a>
    </div>




</div>

<footer>
    <!--底部导航栏-->
    <div class="nav-btn fo-nav">
        <!--出租页面,当前页面(已激活)-->
        <a href="#" class="active">
            <i class="fa fa-home fa-2x  " aria-hidden="true"></i>
            <div class="label">出租</div>
        </a>
    </div>
    <div class="nav-btn fo-nav">
        <a href="pages/houseSeek.html" class="">
            <i class="fa fa-search-plus fa-2x  " aria-hidden="true"></i>
            <div class="label">求租</div>
        </a>
    </div>
    <div class="nav-btn fo-nav">
        <a href="pages/my_info.html" class="">
            <i class="fa fa-user-circle fa-2x  " aria-hidden="true"></i>
            <div class="label">我的</div>
        </a>
    </div>
    <div class="nav-btn fo-nav">
        <a href="pages/verity_info.html" class="">
            <i class="fa fa-key fa-2x  " aria-hidden="true"></i>
            <div class="label">验证</div>
        </a>
    </div>


</footer>
</body>
</html>