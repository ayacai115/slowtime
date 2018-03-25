<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
    <meta property="og:title" content="薬草酵素温浴のSlow Time" />
    <meta property="og:image" content="http://hida-slowtime.com/wp-content/themes/slowtime/img/yakuso-top.JPG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://hida-slowtime.com/" />
    <meta property="og:site_name" content="飛騨古川の酵素風呂" />
    <meta property="og:description" content="冷えは万病のもと。飛騨古川の酵素温浴でからだの芯から温まりませんか？ぜひ一度、Slow Timeでしか味わえない薬草酵素温浴を体験してみてください。" />
    <meta property="fb:app_id" content="2024138124497852" />
    <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/wp-content/themes/slowtime/img/slowtime_icon.ico' ) ); ?>">
    <style type="text/css">
    .wf-sawarabigothic { font-family: "Sawarabi Gothic"; }
    </style>
    <?php wp_head(); ?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100541288-1', 'auto');
    ga('send', 'pageview');

  </script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10&appId=2024138124497852";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar icon-bar-white"></span>
            <span class="icon-bar icon-bar-white"></span>
            <span class="icon-bar icon-bar-white"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
            <img alt="Slow Time" src="<?php echo esc_url( home_url( '/wp-content/themes/slowtime/img/slowtime_logo_white.png' ) ); ?>">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo esc_url( home_url() ); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url( home_url( '/first-time' ) ); ?>">初めての方へ</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">メニュー <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="letter-white"><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>">コース・料金</a></li>
                <li role="separator" class="divider"></li>
                <li class="letter-white"><a href="<?php echo esc_url( home_url( '/yakuso') ); ?>">薬草酵素温浴とは</a></li>
                <li role="separator" class="divider"></li>
                <li class="letter-white"><a href="<?php echo esc_url( home_url( '/cranio') ); ?>">クレニオセイクラルワークとは</a></li>
              </ul>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/customers' ) ); ?>">お客様の声</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" >スタッフブログ</a></li>
            <!-- ====アクセス・お問い合わせは後日追加 ====
            <li><a href="<?php echo esc_url( home_url( '/access' ) ); ?>">アクセス</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a></li>
            -->
            <li><a href="<?php echo esc_url( home_url( '/booking') ); ?>"><strong>ご予約</strong></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
