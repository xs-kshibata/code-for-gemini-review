<?php include("conf.php"); ?>
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

<?php
require_once('./newsman/dblib_www_x.php');
require_once('./newsman/user_lib.php');

$id = $_GET['view_id'];
//view_idが数値形式の文字列でなければ404.phpへリダイレクト
if(!is_numeric($id)){
    header('Location: '.$SITE_URL.'404.php');
}

$rec = new DBrecord("tips", $id);

// 対象サービスの記事と異なる場合404.phpへリダイレクト
$service = explode(',', $rec->service_category);
if (!in_array(1, $service, false)) {
    header('Location: '.$SITE_URL.'404.php');
}

// OGP画像が設定されている(ブランクではない) かつ 画像ファイルが存在している場合
if (($rec->ogp_img != '') && file_exists('./img/news/detail/ogp/'.$rec->ogp_img)) {
    $ogp_img = $rec->ogp_img;
}

if($rec->content){
    $content = htmlspecialchars($rec->content, ENT_QUOTES, $charset = "EUC-JP");


    // tableタグ 強調タグ 打ち消しタグ 有効化 .
    $content = enable_tag($content,'table');
    $content = enable_tag($content,'strong');
    $content = enable_tag($content,'del');
    $content = enable_tag($content,'hr',true);

    /* aタグの有効化 */
    $patarn = "/&lt;a(.*?)&gt;(.*?)&lt;\/a&gt;/is";
    $replacement = '<a${1}>${2}</a>';
    $content = preg_replace($patarn,$replacement,$content);

    /* imgタグの有効化 */
    $patarn = "/&lt;img(.*?)&gt;/is";
    $replacement = '<img${1}>';
    $content = preg_replace($patarn,$replacement,$content);

    /* ダブルクォーテーションの有効化 */
    $patarn = "/(\s[a-zA-Z0-9]+=)&quot;(.*?)&quot;/is";
    $replacement = '${1}"${2}"';
    $content = preg_replace($patarn,$replacement,$content);

    /* タイトル系タグの有効化 */
    $patarn = "/&lt;(h[1-6])(.*?)&gt;(.*?)&lt;\/\\1&gt;/is";
    $content = preg_replace_callback($patarn, function($matches) {
        $discover = intval(substr($matches[1],1));
        if($matches[1] === 'h1' || $matches[1] === 'h2'){
            return '<h'.($discover + 3).$matches[2].'>'.$matches[3].'</h'.($discover + 3).'>';
        }else{
            return '<h6'.$matches[2].'>'.$matches[3].'</h6>';
        }
    }, $content);

    $posted_date = str_replace('-','/',$rec->posted_date);
}
?>

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
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">
<?php if($rec->show_flag || $rec->noindex): ?>
<meta name="robots" content="noindex">
<?php endif; ?>

<meta property="og:title" content="<?php secure_print($rec->title); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="レンタルサーバー【エックスサーバー】からのお知らせ | <?php secure_print($posted_date); ?> <?php secure_print($rec->title); ?>">
<meta property="og:url" content="<?php print $SITE_URL; ?>news_detail.php?view_id=<?php secure_print($id); ?>">
<?php if($ogp_img){ ?>
<meta property="og:image" content="<?php print $SITE_URL; ?>img/news/detail/ogp/<?php print $ogp_img; ?>">
<?php }else{ ?>
<meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png">
<?php } ?>
<meta property="og:site_name" content="<?php print $SITE_TITLE; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">

<?php if($PC_LAYOUT){ ?>
<meta name="viewport" content="width=1024">
<?php }else{ ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<?php } ?>

<meta name="format-detection" content="telephone=no">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">
<?php include("canonical.php"); ?>
<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<noscript>
    <style>.ltie7 body, .ie7 body, .ie8 body, .srcset { visibility: visible !important; }</style>
</noscript>

<script type="text/javascript" src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
<link href="<?php print_fileURL("x_header/assets/style.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/site.css"); ?>" rel="stylesheet">

<?php if($rec->content){ ?>
<title><?php secure_print($rec->title); ?> - <?php secure_print($posted_date); ?> | レンタルサーバー【エックスサーバー】</title>
<?php } else { ?>
<title>ニュース | レンタルサーバー【エックスサーバー】</title>
<?php } ?>
<meta name="description" content="レンタルサーバー【エックスサーバー】からのお知らせ | <?php secure_print($posted_date); ?> <?php secure_print($rec->title); ?>">
<?php include("schemeorg.php"); ?>
</head>

<body id="pid-support">

<?php include("top.php"); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("support/subnav.php"); ?>
        </header>
        <!-- /.main-header -->

        <?php include("topicpath.php"); ?>

        <article class="section">
<?php if($rec->content){ ?>
            <h3 class="section_ttl"><?php secure_print($rec->title); ?></h3>
            <div class="section_body">
                <div class="clearfix">
                    <p class="disp-ib base-color font-bold"><?php secure_print($posted_date); ?></p>
                    <div class="social-btn">
                        <span class="social-btn_item">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php secure_print($rec->title); ?> | レンタルサーバー【エックスサーバー】">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </span>

                        <span class="social-btn_item">
                            <div class="fb-like" data-href="<?php print $SITE_URL; ?>news_detail.php?view_id=<?php print $id; ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                        </span>

                        <span class="social-btn_item">
                            <a href="http://b.hatena.ne.jp/entry/<?php print $SITE_URL; ?>news_detail.php?view_id=<?php print $id; ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php secure_print($rec->title); ?> | レンタルサーバー【エックスサーバー】" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                        </span>
                    </div>
                </div>

                <div class="infoDetail"><?php print nl2br($content); ?></div>
            </div>
<?php } ?>
            <footer class="section_footer">
                <p class="tac"><a class="btn btn_blue" href="support/news.php">ニュース一覧に戻る<i class="ico ico_refresh"></i></a></p>
            </footer>
        </article>
        <!-- /.section -->

    </section>
    <!-- /.main -->

    <div class="sub">
<?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->

</div>
<!-- /.contents -->

<?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>

<?php include("bottom.php"); ?>