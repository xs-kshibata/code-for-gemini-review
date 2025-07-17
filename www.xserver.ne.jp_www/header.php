<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ltie7 no-js"> <![endif]-->
<!--[if IE 7 ]> <html lang="ja" class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="ja" class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]> <html lang="ja" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js"> <!--<![endif]-->
<head>
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHLFQRP');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3789601-2', {
    'optimize_id': 'GTM-WGFNFH8',
    'linker': {
      'accept_incoming': true,
      'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp']
    }
  });

  gtag('config', 'UA-3789601-22', {
      'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
      }
  });
</script>
<meta charset="euc-jp">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">

<?php if($FILE_PATH ==="functions/index.php") { ?>
<script>var PAGE_ID = 'functions-index'</script>
<?php } ?>

<?php if($FILE_PATH === "index.php") { ?>
<meta property="og:title" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php print $SITE_DESCRIPTION; ?>">
<meta property="og:url" content="<?php print $SITE_URL; ?>">
<meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png?date=240930">
<meta property="og:site_name" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">
<?php } ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
<link rel="icon" href="<?php print $SITE_URL; ?>favicon.ico" sizes="32x32">
<link rel="icon" href="<?php print $SITE_URL; ?>img/common/icon.svg?date=241219" sizes="any" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon.png?date=241227">
<?php include("canonical.php"); ?>
<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<noscript>
    <style>.ltie7 body, .ie7 body, .ie8 body, .srcset { visibility: visible !important; }</style>
</noscript>

<?php  if ($is_top_page) /*TOPファーストビュー使用画像をプリロード*/ { ?>
    <link rel="preload" as="image" href="img/top/mv_bg_wordpress_b_l.png" type="image/png" media="(min-width: 1100px)">
    <link rel="preload" as="image" href="img/top/mv_bg_wordpress_b_m.png" type="image/png" media="(min-width: 768px) and (max-width: 1099px)">
    <link rel="preload" as="image" href="img/top/mv_bg_wordpress_b_s.png" type="image/png" media="(max-width: 767px)">
<?php } ?>

<script src="<?php print_fileURL("js/jquery-1.12.4.min.js"); ?>"></script>
<?php $jqueryLoaded = true; // jquery既読フラグ ?>
<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","business.xserver.ne.jp","support.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
<script src="<?php print_fileURL("js/errorlogger.js"); ?>"></script>
<script src="<?php print_fileURL("js/search_domain.js"); ?>"></script>
<?php  if ($is_top_page) /*イメージマップのレスポンシブ対応*/ { ?>
<script src="<?php print_fileURL("js/imageMapResizer.min.js"); ?>"></script>
<script>imageMapResize();</script>
<?php } ?>
<link href="<?php print_fileURL("x_header/assets/style.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/site.css"); ?>" rel="stylesheet">
<?php include("schemeorg.php"); ?>

<?php if(!isset($_REQUEST['first_name']) && !isset($_REQUEST['last_name'])): ?>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '423554692430195');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=423554692430195&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
<script>document.write('<script src="<?php print $SECURE_URL; ?>xinfo/js/header/annotation.js?date=' + new Date().getTime() + '"><\/script>');</script>
<?php endif; ?>

    <!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="<?php print $SITE_URL; ?>img/common/google_thumbnail_xserver.png"/>
      <Attribute name="width" value="184"/>
      <Attribute name="height" value="184"/>
    </DataObject>
  </PageMap>
-->