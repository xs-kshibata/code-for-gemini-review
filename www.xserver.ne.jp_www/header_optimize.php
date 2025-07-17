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
</script>
<meta charset="euc-jp">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">

<?php if($FILE_PATH === "index.php") { ?>
<meta property="og:title" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php print $SITE_DESCRIPTION; ?>">
<meta property="og:url" content="<?php print $SITE_URL; ?>">
<meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png?date=210415">
<meta property="og:site_name" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">
<?php } ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico?date=210604">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png?date=210415">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<noscript>
    <style>.ltie7 body, .ie7 body, .ie8 body, .srcset { visibility: visible !important; }</style>
</noscript>
	
<!-- Page hiding snippet (recommended)　ここから --->
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-WGFNFH8':true});</script>
<!-- Page hiding snippet (recommended)　ここまで --->
<script src="<?php print_fileURL("js/jquery-1.12.4.min.js"); ?>"></script>
<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","business.xserver.ne.jp","support.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
<script src="<?php print_fileURL("js/errorlogger.js"); ?>"></script>
<script src="<?php print_fileURL("js/search_domain.js"); ?>"></script>

<link href="<?php print_fileURL("x_header/assets/style.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/site.css"); ?>" rel="stylesheet">
<?php include("schemeorg.php"); ?>