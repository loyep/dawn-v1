@php

use Illuminate\Support\Facades\Route;

$bodyClass = ['black-top', 'grid-hover grid-radius grid-border'];
if (Route::current()->named('home')) {
    $bodyClass[] = 'home';
}
if (intval(\request()->get('page', '1')) > 1) {
    $bodyClass[] = 'paged-2';
}
@endphp<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('favicon.png') }}"/>
    <title>@yield('page_title', Prism::title())</title>
    <link href="{{ mix('/css/app.css', 'app') }}" rel="stylesheet">
    <script>
        /* <![CDATA[ */
        var globals = {
          'ajax_url': '',
          'url_theme': '',
          'image_popup': 'gallery',
          'new_comment_position': 'asc',
          'single': '1',
          'post_style': 'two',
          'home': '0',
          'page': '0',
          'silide': '0',
        };
        /* ]]> */
    </script>
</head>
<body class="nice-style-shadow">
    <div id="app">
        @include('includes.header')
        <section class="list-magazine list-fixed ">
            <div class="bg-effect bg-dark bg-image-color"></div>
            <div class="bg-effect bg-cover bg-magazine" data-img="https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802292128.jpg&amp;h=600&amp;w=600&amp;zc=1&amp;a=c&amp;q=100&amp;s=1"></div>
                <div class="container">
            <div class="row-sm">
                <div class="col-12 col-md-6 d-flex">
                    <div class="list-item list-nice-overlay custom-hover flex-fill">
                        <div class="media d-flex flex-fill">
                            <a href="#" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url('https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802292128.jpg&amp;h=450&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1')" data-nclazyload="true">
                                <span class="overlay"></span>
                            </a>
                        </div>
                        <div class="list-content">
                            <div class="list-body">
                                <a href="#" class="list-title text-lg h-2x" target="_blank">
                                    大美广西—桂林行之古东瀑布&amp;刘三姐大观园
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <div class="list-scroll-2x">
                        <div class="row-sm row-scroll my-n1 my-md-n2">
                            <div class="col-6 py-1 py-md-2">
                                <div class="list-item list-nice-overlay custom-hover">
                                    <div class="media">
                                        <a href="#" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url('https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804425582.jpeg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1')" data-nclazyload="true">
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-body">
                                            <div class="mt-auto">
                                                <a href="#" class="list-title text-md h-2x ">
                                                    在彩云之南吹！我的骄傲放纵，一份迟到3年的游记
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 py-1 py-md-2">
                                <div class="list-item list-nice-overlay custom-hover">
                                    <div class="media">
                                        <a href="#" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url('https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802292433.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1')" data-nclazyload="true">
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-body">
                                            <div class="mt-auto">
                                                <a href="#" class="list-title text-md h-2x ">
                                                    一个人到中国最北极寻北：如果你迷失了方向，那就一路向北吧！
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                                                        <div class="col-6 py-1 py-md-2">
                                <div class="list-item list-nice-overlay custom-hover">
                                    <div class="media">
                                        <a href="#" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url('https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802283626.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1')" data-nclazyload="true">
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-body">
                                            <div class="mt-auto">
                                                <a href="#" class="list-title text-md h-2x ">
                                                    原来世界文化遗产“平遥古城”不是只有平遥古城：游双林寺和镇国寺有感
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 py-1 py-md-2">
                                <div class="list-item list-nice-overlay custom-hover">
                                    <div class="media">
                                        <a href="#" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url('https://beta.nicetheme.xyz/wp-content/themes/Cosy199/timthumb.php?src=https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804424427.jpeg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1')" data-nclazyload="true">
                                            <span class="overlay"></span>
                                        </a>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-body">
                                            <div class="mt-auto">
                                                <a href="#" class="list-title text-md h-2x ">
                                                    取一瓢深蓝色甜甜的湖水，甜到我的心底解忧愁！
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><main class="py-3 py-md-5"><div class="container">
				                <section class="list-pushes list-scroll-4x"><div class="row-sm my-md-n2 pb-3 pt-2 pt-md-0 pb-md-4">
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804425174.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                自驾记                            </div>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804425184.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                四川绵阳                            </div>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804425014.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                江南事                            </div>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804424914.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                烟水桃花                            </div>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804424981.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                春光正好                            </div>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="col-4 col-md-2 py-md-2 ">
                <div class="list-item list-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content custom-hover-img" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030804424836.jpeg)" data-nclazyload="true">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <a href="http://#" class="list-content p-2" target="_blank">
                        <div class="list-body ">
                            <div class="list-title h-1x text-sm">
                                弦外之音                            </div>
                        </div>
                    </a>
                </div>
            </div>
                    </div>
    </section>

    							<section class="list-home row-md list-grouped list-tb-padding"><div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="Gallerie degli Uffizi 乌菲兹美术馆" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424379.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                        <div class="media-action">
                <i class="iconfont icon-pic-s"></i>
            </div>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/yhty.html" class="text-muted" target="_blank">简旅记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">Gallerie degli Uffizi 乌菲兹美术馆</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>1,365</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 3                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 32                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="苏格兰印象之十日谈第五天：世界最美A82公路自驾记" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424914.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/yhty.html" class="text-muted" target="_blank">简旅记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">苏格兰印象之十日谈第五天：世界最美A82公路自驾记</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>1,159</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 0                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 25                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>
													    <div class="col-6 col-md-3 d-flex">
        <div class="list-item list-overlay block flex-fill">
            <div class="media d-flex flex-fill">
                <a class="media-content" href="special/%E4%B8%80%E5%BA%A7%E5%B0%8F%E5%9F%8E.html" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802301636.jpg)" data-nclazyload="true"><span class="overlay"></span></a>
            </div>
            <div class="list-content">
                <div class="list-body">
                    <div class="mb-3">
                        <a href="special/%E4%B8%80%E5%BA%A7%E5%B0%8F%E5%9F%8E.html">
                            <span class="badge badge-md text-uppercase bg-white-overlay">一座小城</span>
                        </a>
                    </div>
                                            <a href="special/%E4%B8%80%E5%BA%A7%E5%B0%8F%E5%9F%8E.html" target="_blank" class="list-title h-2x mb-2">Gallerie degli Uffizi 乌菲兹美术馆</a>
                                    </div>
                <div class="list-footer d-flex align-items-center text-muted text-xs m-0">
                    <div>专题</div>
                    <div class="flex-fill"></div>
                    <div class="text-nowrap">
                        <span class="d-inline-block px-2">
                            11 篇文章
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

													    <!--下面是web端显示的-->
    <div class="col-6 col-md-3 d-none d-lg-flex">
        <div class="list-item block flex-fill">
            <div class="media flex-fill">
                                    <a href="https://www.nicetheme.cn/" class="media-content flex-fill" style='background-image:url("/app/images/bg.jpg")' target="_blank" data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019031316134141.png)" data-nclazyload="true"></a>
                            </div>
        </div>
    </div>
    <!--下面是手机端显示的，代码需要修改下-->
    <div class="col-6 col-md-3 d-flex d-lg-none">
        <div class="list-item block flex-fill">
            <div class="media flex-fill">
                                    <a href="https://www.nicetheme.cn/" class="media-content flex-fill" style='background-image:url("/app/images/bg.jpg")' target="_blank" data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019031316134141.png)" data-nclazyload="true"></a>
                            </div>
        </div>
    </div>
												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="旅行四川绵阳，这座绵州第一山不能错过！空气好景美能玩一整天！" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424836.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                    <div class="media-action">
                <i class="iconfont icon-bofang"></i>
            </div>
                                </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/juji.html" class="text-muted" target="_blank">剧集</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">旅行四川绵阳，这座绵州第一山不能错过！空气好景美能玩一整天！</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>960</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 4                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 17                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="今天去汉口德国领事馆和江汉关博物馆" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804425695.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                                <div class="media-action">
                <i class="iconfont icon-yinle"></i>
            </div>
                    </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/uncategorized.html" class="text-muted" target="_blank">游记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">今天去汉口德国领事馆和江汉关博物馆</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>544</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 0                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 18                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="取一瓢深蓝色甜甜的湖水，甜到我的心底解忧愁！" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424427.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/yhty.html" class="text-muted" target="_blank">简旅记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">取一瓢深蓝色甜甜的湖水，甜到我的心底解忧愁！</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>406</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 3                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 7                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="苏格兰印象之十日谈第七天：此景只应天上有，威廉堡-格林芬南大桥-天空岛" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804423838.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/ghjh.html" class="text-muted" target="_blank">十七楼</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">苏格兰印象之十日谈第七天：此景只应天上有，威廉堡-格林芬南大桥-天空岛</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>278</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 1                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 5                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="在彩云之南吹！我的骄傲放纵，一份迟到3年的游记" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804425582.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/ghjh.html" class="text-muted" target="_blank">十七楼</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">在彩云之南吹！我的骄傲放纵，一份迟到3年的游记</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>539</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 1                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 10                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="离人犹记江南事，烟水桃花过谢桥" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424524.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/yhty.html" class="text-muted" target="_blank">简旅记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">离人犹记江南事，烟水桃花过谢桥</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>228</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 0                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 5                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="一天徒步36000步！迪士尼，你究竟让姑娘受了什么刺激？" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804425174.jpeg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                            </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/yhty.html" class="text-muted" target="_blank">简旅记</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">一天徒步36000步！迪士尼，你究竟让姑娘受了什么刺激？</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>245</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 1                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 6                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>

												<div class="col-6 col-md-3 d-flex">
    <div class="list-item block custom-hover">
        <div class="media media-3x2">
            <a class="media-content" href="#" target="_blank">
                <img src="/app/images/bg.jpg" alt="苏格兰印象之十日谈第八天：此景应属魔法界，天空岛老人峰-爱莲朵娜城堡" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802292769.jpg&amp;h=300&amp;w=450&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
            </a>
                                    <div class="media-action">
                <i class="iconfont icon-bofang"></i>
            </div>
                                </div>
        <div class="list-content">
            <div class="list-body">
                                    <div class="d-none d-lg-block text-xs mb-1 ">
        <a href="category/juji.html" class="text-muted" target="_blank">剧集</a>
</div>                                <a href="#" class="list-title text-md h-2x" target="_blank">苏格兰印象之十日谈第八天：此景应属魔法界，天空岛老人峰-爱莲朵娜城堡</a>
            </div>
            <div class="list-footer d-flex align-items-center text-muted text-xs mt-2">
                <div>2019-03-08</div>
                <div class="flex-fill"></div>
                <div class="text-nowrap">
                                        <span class="d-none d-lg-none ">
                        <i class="text-sm iconfont icon-view"></i>
                        <small>192</small>
                    </span>
                                                            <span class="d-none d-lg-inline-block  px-2">
                        <i class="text-sm iconfont icon-duanxin"></i> 1                    </span>
                                                            <span class="d-none d-lg-inline-block ">
                        <i class="iconfont icon-shoucang"></i> 5                    </span>
                                    </div>
            </div>
        </div>
    </div>
</div>									</section><!--下面是手机端显示的，代码需要修改下--><section class="list-sales mt-4 mt-md-5 d-lg-none"><a href="https://www.nicetheme.cn/" target="_blank"><img src="/app/images/bg.jpg"></a>
            </section>
            <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts Navigation</h2>
                    <div class="nav-links"><span aria-current='page' class='page-numbers current'>1</span>
            <a class='page-numbers' href='http://wp.loyep.com/page/2/'>2</a>
            <a class='page-numbers' href='http://wp.loyep.com/page/3/'>3</a>
            <a class="next page-numbers" href="http://wp.loyep.com/page/2/"><i class="text-md iconfont icon-arrowright"></i></a></div>
                </nav>
</div>
	</main><section class="list-style-1 py-3 py-md-5 bg-light"><div class="container">
        <div class="list-header h4 mb-3">随笔 <small class="d-block d-md-inline-block text-md text-muted px-md-2">Essay</small>
</div>
        <div class="row-sm">
            <div class="col-12 col-md-3 d-flex mb-3 mb-md-0">
                <div class="list-item list-overlay custom-hover flex-fill">
                    <div class="media media-3x2 d-flex flex-fill">
                        <a class="media-content" href="category/syst.html" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(/images/bg.jpg)" data-nclazyload="true"><span class="overlay"></span></a>
                    </div>
                    <div class="list-content p-3">
                        <div class="list-body">
                            <a href="category/syst.html" class="list-title h4 text-left m-0">
                                深夜食堂
                            </a>
                        </div>
                        <div class="list-footer d-flex align-items-center text-muted text-xs m-0">
                            <div>分类</div>
                            <div class="flex-fill"></div>
                            <div class="text-nowrap">
                                <span class="d-inline-block pl-2">
                                    9 篇文章
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="row-sm my-n2">
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="/app/images/bg.jpg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        很高兴遇见你——初次漫步抚仙湖                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="/app/images/bg.jpg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        跟着米芷萍的朋友圈去游历中国，与文字相拥，与名师相见，与美景相伴                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="/app/images/bg.jpg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        春光正好，圆梦正当时——相约弦外之音·西藏站                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802292626.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        浮光掠影看世界之《墨西哥印象~度假天堂坎坤》                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802294784.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        走进北京胡同，感受繁华城市下的淳朴与自然                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802283991.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        苏格兰印象之十日谈第九天：远方的姑娘，凯恩戈姆国家森林公园-福尔柯克-爱丁堡                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802292433.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        一个人到中国最北极寻北：如果你迷失了方向，那就一路向北吧！                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802284875.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        如果你来重庆，这些一定不能错过的拍摄地                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
            </div>
        </div>
    </div>
</section><section class="list-style-2 py-3 py-md-5 bg-white"><div class="container">
        <div class="list-header h4 mb-3">十七楼 <small class="d-block d-md-inline-block text-md text-muted px-md-2">此处可填写标题的英文翻译</small>
</div>
        <div class="row-sm">
            <div class="col-12 col-md-9  order-2 order-md-1">
                <div class="row-sm my-n2">
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804423838.jpeg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        苏格兰印象之十日谈第七天：此景只应天上有，威廉堡-格林芬南大桥-天空岛                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804425582.jpeg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        在彩云之南吹！我的骄傲放纵，一份迟到3年的游记                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802292769.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        苏格兰印象之十日谈第八天：此景应属魔法界，天空岛老人峰-爱莲朵娜城堡                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802275822.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        在海口，来一场民国的穿越之旅                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802282598.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        旅行四川成都，这3只大熊猫把我萌到了，原来后面这种也是熊猫！                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-6 col-md-3 py-2">
                        <div class="list-item list-nice-overlay custom-hover">
                            <div class="media media-3x2">
                                <a class="media-content" href="#">
                                    <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802281146.jpg&amp;h=300&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                                </a>
                            </div>
                            <div class="list-content p-2">
                                <div class="list-body ">
                                    <a href="#" class="list-title h-2x">
                                        苏格兰印象之十日谈第十天：归去来，爱丁堡-伦敦-佛克斯同                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
            </div>
            <div class="col-12 col-md-3 d-flex order-1 order-md-2 mb-3 mb-md-0">
                <div class="list-item list-overlay custom-hover flex-fill">
                    <div class="media media-3x2 d-flex flex-fill">
                        <a href="category/ghjh.html" class="media-content" style='background-image:url("/app/images/bg.jpg")' data-bg=" url(https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019030802270178.jpg)" data-nclazyload="true"><span class="overlay"></span></a>
                    </div>
                    <div class="list-content p-3">
                        <div class="list-body ">
                            <a href="category/ghjh.html" class="list-title h4 text-left m-0">
                                十七楼                            </a>
                        </div>
                        <div class="list-footer d-flex align-items-center text-muted text-xs m-0">
                            <div>分类</div>
                            <div class="flex-fill"></div>
                            <div class="text-nowrap">
                                <span class="d-inline-block pl-2">
                                    6 篇文章
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section class="list-style-3 py-3 py-md-5 bg-light"><div class="container">
        <div class="list-header h4 text-center mb-3">简旅记 <small class="text-md text-muted px-2 d-block">显示于标题右侧，可填写标题的英文翻译</small>
</div>
        <div class="row-sm my-n2">
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424379.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                Gallerie degli Uffizi 乌菲兹美术馆                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424914.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                苏格兰印象之十日谈第五天：世界最美A82公路自驾记                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424836.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                旅行四川绵阳，这座绵州第一山不能错过！空气好景美能玩一整天！                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424427.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                取一瓢深蓝色甜甜的湖水，甜到我的心底解忧愁！                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804424524.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                离人犹记江南事，烟水桃花过谢桥
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030804425174.jpeg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                一天徒步36000步！迪士尼，你究竟让姑娘受了什么刺激？                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802291463.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                月游美国3~大峡谷国家公园（Grand Canyon National Park）                            </a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-6 col-md-3 py-2">
                <div class="list-item list-nice-overlay custom-hover">
                    <div class="media media-3x2">
                        <a class="media-content" href="#">
                            <img src="/app/images/bg.jpg" data-src="wp-content/themes/Cosy199/timthumb.php-src=https---beta.nicetheme.xyz-wp-content-uploads-2019-03-2019030802293625.jpg&amp;h=200&amp;w=300&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" data-nclazyload="true"><span class="overlay"></span>
                        </a>
                    </div>
                    <div class="list-content p-2">
                        <div class="list-body ">
                            <a href="#" class="list-title h-2x">
                                15天，3,000公里，风景如画新西兰                            </a>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</section>
        <footer class="footer bg-dark pt-4 pt-md-5"><div class="container">
        <div class="row my-n3">
        	            <div class="col py-3">
                <div class="footer-widget pr-lg-5">
                    <div class="footer-widget-header">关于我</div>
                    <div class="footer-widget-content">
                        <p>NICETHEME 坚持原创和保持创新的用户体验设计，提供专业与创新的网站解决方案，6年网站设计开发经验，专注界面设计、WordPress主题开发、网站设计开发、小程序开发，并提供有保障的维护及售后。</p>
                    </div>
                    <div class="footer-widget-social mx-n2 mt-2">
                        <a href="https://weibo.com" target="_blank" class="weibo px-2"><i class="iconfont icon-weibo"></i></a>                        <a href="javascript:" class="single-popup weixin px-2" data-img="https://beta.nicetheme.xyz/wp-content/uploads/2019/03/2019032309582664.jpg" data-title="扫一扫添加站长微信" data-desc="@nicetheme"><i class="iconfont icon-weixin"></i></a>                                                <a href="https://www.facebook.com" target="_blank" class="facebook px-2"><i class="iconfont icon-facebook"></i></a>                        <a href="https://twitter.com" target="_blank" class="twitter px-2"><i class="iconfont icon-twitter"></i></a>                        <a href="https://www.linkedin.com" target="_blank" class="linkedin px-2"><i class="iconfont icon-linkedin"></i></a>                    </div>
                </div>
            </div>
        	            <div class="col-lg-3 py-3">
                <div class="footer-widget">
                    <div class="footer-widget-header">标签</div>
                    <div class="footer-widget-content">
                        <div class="footer-widget-links">
                                                        <a class="nav-link" href="#" aria-current="page">首页</a>
<a class="nav-link" href="category/yhty.html">简旅记</a>
<a class="nav-link" href="category/ghjh.html">十七楼</a>
<a class="nav-link" href="category/syst.html">深夜食堂</a>
<a class="nav-link" href="sample-page.html">示例页面</a>

	<a class="nav-link" href="#">专题</a>
	<a class="nav-link" href="#">小伙伴</a>


<a class="nav-link" href="https://www.nicetheme.cn/store/cosy">主题购买</a>
<a class="nav-link" href="https://demo.nicetheme.xyz/cosy-style1/">旧版本预览</a>
                                                                                </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-3">
                                                <div class="footer-widget">
                    <div class="footer-widget-header">友链</div>
                    <div class="footer-widget-content">
                        <div class="footer-widget-links">
                                                    <a class="nav-link" href="#" aria-current="page">首页</a>
<a class="nav-link" href="category/yhty.html">简旅记</a>
<a class="nav-link" href="category/ghjh.html">十七楼</a>
<a class="nav-link" href="category/syst.html">深夜食堂</a>
<a class="nav-link" href="sample-page.html">示例页面</a>

	<a class="nav-link" href="#">专题</a>
	<a class="nav-link" href="#">小伙伴</a>


<a class="nav-link" href="#">主题购买</a>
<a class="nav-link" href="#">旧版本预览</a>

</div>
                    </div>
                </div>
                            </div>
        </div>
        <div class="footer-copyright border-top py-4 mt-4">
            Copyright © 2019 <a href="#" title="nicetheme" rel="home">nicetheme</a>. Designed by <a href="https://www.nicetheme.cn" title="NICETHEME-坚持有品位且光芒四射的用户体验设计" target="_blank">nicetheme</a>.  <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" class="d-none d-lg-inline-block">ICP备案号23123123123</a> <a href="http://nicetheme.cn" target="_blank" rel="nofollow" class="d-none d-lg-inline-block"><i class="icon icon-beian"></i>公安备案号123123123123</a>         </div>
    </div>
</footer><aside class="sidebar-collapse"><div class="sidebar-mobile bg-light">
					<div class="sidebar-mobile-action bg-white">
				<button type="button" class="link-action text-muted" id="sidebar-mobile-close"><i class="iconfont icon-iconfontradiobox"></i></button>
			</div>
				<div class="sidebar-mobile-tab-menu">
	        <ul id="mobile-tab-menu-id" class="mobile-tab-menu">
<li class="menu-item   menu-item-has-children ">
<a>目录样式</a>
<ul class="sub-menu">
<li class="menu-item "><a class="nav-link" href="category/ghjh.html"><i class="iconfont icon-biaoqian"></i>十七楼</a></li>
	<li class="menu-item "><a class="nav-link" href="category/yhty.html"><i class="iconfont icon-duanxin"></i>简旅记</a></li>
	<li class="menu-item "><a class="nav-link" href="category/syst.html"><i class="iconfont icon-star-1"></i>深夜食堂</a></li>
</ul>
</li>
<li class="menu-item   menu-item-has-children ">
<a>页面模版</a>
<ul class="sub-menu">
<li class="menu-item"><a class="nav-link" href="#"><i class="iconfont icon-biaoqian-"></i>专题</a></li>
	<li class="menu-item"><a class="nav-link" href="#"><i class="iconfont icon-duanxin"></i>小伙伴</a></li>
</ul>
</li>
	        </ul>
</div>
	</div>
        </aside>
    <div id="search-popup-wrap">
        <div class="search-popup-cover bg-light px-3 px-lg-5 py-5">
            <div class="bg-effect bg-cover nc-no-lazy" style="background-image: url('')">
                <span class="overlay"></span>
            </div>
            <form role="search" id="searchform" class="search-popup-form py-lg-5" method="get" action="index.html">
               <input class="form-control form-control-lg form-transparent" type="text" placeholder="请输入搜索关键词…" name="s" id="s" required>
            </form>
        </div>
        <div class="search-key-push px-3 px-lg-5 py-3 py-lg-4">
            <div class="h6 mb-3">热门搜索</div>
            <ul class="nav nav-pills m-n1">
                <li class="nav-item p-1"><a href="search/%E5%88%9D%E6%AC%A1%E6%BC%AB%E6%AD%A5.html" target="_blank" class="btn btn-light btn-sm">初次漫步</a></li>
                <li class="nav-item p-1"><a href="search/%E6%8A%9A%E4%BB%99%E6%B9%96.html" target="_blank" class="btn btn-light btn-sm">抚仙湖</a></li>
                <li class="nav-item p-1"><a href="search/%E6%9C%80%E5%8C%97%E6%9E%81%E5%AF%BB%E5%8C%97.html" target="_blank" class="btn btn-light btn-sm">最北极寻北</a></li>
                <li class="nav-item p-1"><a href="search/%E8%BF%B7%E5%A4%B1%E6%96%B9%E5%90%91.html" target="_blank" class="btn btn-light btn-sm">迷失方向</a></li>
                <li class="nav-item p-1"><a href="search/%E4%B8%80%E8%B7%AF%E5%90%91%E5%8C%97.html" target="_blank" class="btn btn-light btn-sm">一路向北</a></li>
            </ul>
        </div>
    </div>
    <div id="author-popup-wrap">
        <div class="author-popup-cover">
            <div class="media media-16x9 bg-dark-gradient">
                <div class="bg-effect bg-dark-gradient bg-author"></div>
                    <div class="bg-effect bg-cover" data-img="https://secure.gravatar.com/avatar/afa39accf8700cbbe7b13e1d01aa5b17?s=96&amp;d=mm&amp;r=g"></div>
                </div>
            <div class="mt-n5">
            <div class="px-4">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="author/suxing.html" class="avatar mx-2 w-96" taget="_blank">
                        <img alt="" src="https://cdn.v2ex.com/gravatar/afa39accf8700cbbe7b13e1d01aa5b17?s=96&amp;d=mm&amp;r=g" srcset="https://cdn.v2ex.com/gravatar/afa39accf8700cbbe7b13e1d01aa5b17?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo nc-no-lazy" height="96" width="96"></a>
                </div>
                <div class="text-center mt-3">
                    <a href="author/suxing.html" class="h5" target="_blank">Prism</a>
                    <div class="d-block text-sm text-muted mt-2"><span class="h-2x">美好源于热爱。</span></div>
                </div>
            </div>
            <div class="row no-gutters text-center">
                <a href="author/suxing.html" class="col py-3" target="_blank">
                    <span class="font-theme text-lg d-block">32</span>
                    <small class="text-xs text-muted">文章</small>
                </a>
                <div class="col py-3">
                    <span class="font-theme text-lg d-block">23</span>
                    <small class="text-xs text-muted">评论</small>
                </div>
                <div class="col py-3">
                    <span class="font-theme text-lg d-block">201</span>
                    <small class="text-xs text-muted">喜欢</small>
                </div>
            </div>
        </div>
    </div>
</div>
<back-to-top>
    <span class="icon-stack">
        <i class="text-xs iconfont icon-up"></i>
    <span class="back-to-top-text">Top</span>
    </span>
</back-to-top>
</div>
<script src="{{ mix('/js/manifest.js', 'app') }}" type="text/javascript"></script>
<script src="{{ mix('/js/app.js', 'app') }}" type="text/javascript"></script>
<script src="{{ mix('/js/vendor.js', 'app') }}" type="text/javascript"></script>
</body>
</html>
