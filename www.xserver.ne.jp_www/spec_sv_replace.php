<?php
include("conf.php");

mb_language("ja");
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

<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

<meta name="format-detection" content="telephone=no">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="サイトマップ">
<link rel="shortcut icon" href="<?php print $SITE_URL; ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php print $SITE_URL; ?>img/common/apple-touch-icon-precomposed.png">

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<noscript>
    <style>.srcset { visibility: visible !important; }</style>
</noscript>

<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
<link href="<?php print_fileURL("css/base.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/component.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/contents/article.css"); ?>" rel="stylesheet">

<title>旧仕様のサーバーを対象とする移行メンテナンス後のサービス仕様について │ <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」の旧仕様のサーバーを対象とする移行メンテナンス後のサービス仕様についてご案内しています。">

</head>

<body id="pid-article">

<?php include("top.php"); ?>

<div class="wrap">

    <header class="header">
        <a class="siteid hover" href="/"><img src="img/news/service_logo.png?date=2411" alt="エックスサーバー"></a>
    </header>
    
    <article class="article">
    
        <header class="article_header">
            <h1 class="article_ttl">旧仕様のサーバーを対象とする<br>移行メンテナンス後のサービス仕様について</h1>
        </header>
        
        <div class="article_body">
            <p>
                平素は当サービスをご利用いただき、誠にありがとうございます。<br>
                弊社では2025年1月より、ご利用のサーバー番号ごとにハードウェアの大幅増強および新基盤システムへの移行メンテナンスを、順次実施しております。<br>
                このメンテナンス作業により変更する提供仕様についてご案内いたします。<br>
            </p>

            <p class="border border_blue">
                ※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/" target="_blank">公式サイト</a>をご参照ください。<br>
                </p>

            <p class="border border_blue">
                2024/11/22：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=14087" target="_blank">『sv30〜sv1510、sv3001〜sv7800サーバー』ハードウェアの大幅増強および新基盤システムへの移行に関するご案内</a><br>
                2024/11/22：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=14087" target="_blank">【随時更新】『sv30〜sv1510、sv3001〜sv7800サーバー』ハードウェアの大幅増強および新基盤システムへの移行スケジュールについて</a><br>
                2024/11/22：<br>　　<a href="https://www.xserver.ne.jp/support/faq/faq_service_replace.php" target="_blank">新サーバーの移行メンテナンスに関するよくある質問</a><br>

            </p>

            <p class="tar">※サーバー番号の確認方法は<a href="support/faq/service_server_number.php" target="_blank">こちら</a>をご参照ください。
            </p>

            
            <h2 class="heading-1">主な仕様差異の一覧</h2>

            <div class="inner">

                <h3 class="heading-2">プログラム</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th class="w20per">移行前</th>
                        <th class="w20per">移行後</th>
                        <th class="w40per">解説</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">PHP<br><span class="font-xs font-normal">(コマンドライン実行時)</span></th>
                        <td>5.4.x</td>
                        <td>8.0.x</td>
                        <td>
                            <p>コマンドラインでPHPを実行する際の標準のバージョンがPHP 8.0 になりました。</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Perl<br><span class="font-xs font-normal">(コマンドライン実行時)</span></th>
                        <td>5.16.x</td>
                        <td>5.26.x</td>
                        <td>
                            <p>コマンドラインでPerlを実行する際の標準のバージョンがPerl 5.26 になりました。</p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Ruby</th>
                        <td>2.0.0</td>
                        <td>2.5.x</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
                
            	<h3 class="heading-2">データベース</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">移行前</th>
                            <th class="w20per">移行後</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">MySQL<br><span class="font-xs font-normal">(sv30〜sv1510)</span></th>
                        <td>5.5(MariaDB)<br>5.7.x</td>
                        <td>5.5(MariaDB)<br>5.7.x<br>10.5.x(MariaDB)</td>
                        <td>現在ご利用中のバージョンに加えMariaDB10.5が利用できるようになります。</td>
                    </tr>
                    <tr>
                        <th scope="row">MySQL<br><span class="font-xs font-normal">(sv3001〜sv7800)</span></th>
                        <td>5.7.x</td>
                        <td>5.7.x <br>10.5.x(MariaDB)</td>
                        <td>現在ご利用中のバージョンに加えMariaDB10.5が利用できるようになります。</td>
                    </tr>
                        <tr>
                            <th scope="row">SQLite</th>
                            <td>3.7.x</td>
                            <td>3.26.x</td>
                            <td class="tac">-</td>
                        </tr>

                    </tbody>
                </table>
                

                <h3 class="heading-2">ライブラリ・コマンドラインツール</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">移行前</th>
                            <th class="w20per">移行後</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">curl</th>
                        <td>7.29.x</td>
                        <td>7.61.x</td>
                        <td>HTTP/2 をサポートしました。</td>
                    </tr>
                    <tr>
                        <th scope="row">vim</th>
                        <td>7.4</td>
                        <td>8</td>
                        <td class="tac">-</td>
                    </tr>
                        <tr>
                            <th scope="row">OpenSSL</th>
                            <td>1.0.1</td>
                            <td>1.1.0<br>※一部機能で1.0.2</td>
                            <td class="tac">-</td>
                        </tr>
                    <tr>
                        <th scope="row">コマンドパス</th>
                        <td>○</td>
                        <td>○<br>※一部変更あり</td>
                        <td>移行後のコマンドパスは、マニュアル「<a href="https://www.xserver.ne.jp/manual/man_program_soft.php" target="_blank">プログラム言語・コマンドパス</a>」をご参照ください。<br>
                        </td>
                    </tr>
                    </tbody>
                </table>

                
                <p class="tar"><small>(最終更新日： 2024年11月22日)</small></p>
                
            </div>
        
        </div>
        
    </article>
    <!-- /.article -->
    
    <footer class="footer">
        <p class="copyright"><small>&copy; 2003-<?php print date( "Y" , time() ) ?> XServer Inc.</small></p>
    </footer>

</div>
<!-- /.wrap -->
<script src="<?php print_fileURL("js/jquery-1.12.4.min.js"); ?>"></script>
<script src="<?php print_fileURL("js/libs.js"); ?>"></script>
<script>
jQuery(function($){
    var replaceImage = function(suffix) {
        var imageLoader = new lib.ImageLoader();

        $('img.srcset').each(function() {
            var $img = $(this);
            var src = $img.attr('src');
            var name = src.substring(0, src.lastIndexOf('_') + 1);
            var ex = src.substring(src.lastIndexOf('.'));

            imageLoader.addFile({
                src: name + suffix + ex,
                extra: $img
            });
        });

        var onLoadProgress = function(e) {
            var $img = e.target.extra;
            $img
            .attr('src', e.target.src)
            .css('visibility', 'visible');
        };

        var onLoadComplete = function() {
            imageLoader.removeListener(imageLoader.event.PROGRESS, onLoadProgress);
            imageLoader.removeListener(imageLoader.event.COMPLETE, onLoadComplete);
            imageLoader = null;
        };

        imageLoader.addListener(imageLoader.event.PROGRESS, onLoadProgress);
        imageLoader.addListener(imageLoader.event.COMPLETE, onLoadComplete);
        imageLoader.start();
    };
    
    rwd.init();
    if (rwd.supported) {
        rwd.register(
            '(min-width: 0px) and (max-width: 767px)',
            function(){
                replaceImage('s');
            }
        );
        
        rwd.register(
            '(min-width: 768px) and (max-width: 799px)',
            function(){
                replaceImage('m');
            }
        );
        
        rwd.register(
            '(min-width: 800px)',
            function(){
                replaceImage('l');
            }
        );
        
        rwd.update();

        $('.primary-table-ml').responsiveTable({
            secondlyClassName: 'secondly-table-s secondly-table-s_diff table table_striped'
        });
        $('.primary-table-l').responsiveTable({
            secondlyClassName: 'secondly-table-sm secondly-table-s_diff table table_striped'
        });
    } else {
        replaceImage('l');
    }
    
    $('html').removeClass('no-js');
    
    lib.smoothScroll({
        duration: 300,
        easing: 'easeOutExpo'
    });
});
</script>

<?php include("bottom.php"); ?>