<?php
include("../../../conf.php");

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

<title>サーバーパネルのメニュー構成・一部機能名称等の変更について │ <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」で提供しているサーバーパネルのメニュー構成・一部機能名称等の変更についてご案内しています。">
<meta name="canonical" content="https://www.xserver.ne.jp/info/1805/reorganize/">
</head>

<body id="pid-article">

<?php include("../../../top.php"); ?>

<div class="wrap">

    <header class="header">
        <a class="siteid hover" href="/"><img src="../../../img/news/service_logo.png" alt="エックスサーバー"></a>
    </header>
    
    <article class="article">
    
        <header class="article_header">
            <h1 class="article_ttl">サーバーパネルのメニュー構成・一部機能名称等の変更について</h1>
        </header>
        
        <div class="article_body">
        
            <p>2018年5月23日、レンタルサーバー「エックスサーバー」ではサーバーパネルのメニュー構成および一部機能の名称変更や機能の分割を行い、各種設定がよりスムーズになるよう変更いたしました。</p>
            <p>本ページでは、再編後のメニュー構成などについてご案内しています。</p>
            <p class="border border_blue">
                ※このページでは下記ニュースに付随する補足情報を掲載しています。<br>
                 <span><a href="https://www.xserver.ne.jp/news_detail.php?view_id=4412" target="_blank">『サーバーパネル』メニュー構成・一部機能名称等の変更のお知らせ(2018/05/23) </a></span>
            </p>
            
            <h2 class="heading-1">変更内容について</h2>
            <div class="inner">
                <h3 class="heading-2">カテゴリの名称変更</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="w30per">「統計」カテゴリ</th>
                            <td>
                                <ul class="ul">
                                    <li>「アクセス解析」カテゴリに名称変更</li>
                                </ul
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">一部機能におけるカテゴリの変更</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="w30per">「Cron設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「アカウント」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「SSH設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「アカウント」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「WordPressセキュリティ設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「WordPress」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「PHP Ver.切り替え」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「PHP」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「php.ini設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「PHP」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「PHP高速化設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「ホームページ」カテゴリから「PHP」カテゴリへ移動</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">一部機能の移動・名称変更、および機能分割</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="w30per">「自動インストール」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>名称を「簡単インストール」機能に変更</li>
                                    <li>WordPressのインストール機能を「WordPress簡単インストール」機能として分割するとともに、「wordPress」カテゴリに移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「ログファイル」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「アクセスログ」機能と「エラーログ」機能に分割</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「サーバー情報」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>「バックアップ状況 > MySQLバックアップ状況確認」を削除</li>
                                    <li>機能内の「バックアップ状況」メニューを「バックアップ」機能に移動</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「バックアップ」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>機能内の「バックアップ」メニューを「手動バックアップ」メニューに名称変更</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>「MySQL設定」機能</th>
                            <td>
                                <ul class="ul">
                                    <li>機能内の「MySQLバックアップ」メニューを「MySQLバックアップ」機能として分割するとともに、「データベース」カテゴリに移動</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">総ファイル数の表示</h3>
                <div>
                    <p>サーバーパネルトップに現在のファイル数が表示されるように変更</p>
                </div>
                
            </div>
            
            <h2 class="heading-1">変更後のサーバーパネルのメニュー構成について</h2>
            <div class="inner">
                
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>カテゴリ</th>
                            <th class="w40per">変更前</th>
                            <th class="w30per">変更後</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">アカウント</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>パスワード変更</li>
                                    <li>サーバー情報</li>
                                    <li>バックアップ</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>パスワード変更</li>
                                    <li>サーバー情報</li>
                                    <li>バックアップ</li>
                                    <li>Cron設定</li>
                                    <li>SSH設定</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">ホームページ</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>アクセス制限</li>
                                    <li>エラーページ設定</li>
                                    <li>MIME設定</li>
                                    <li>Cron設定</li>
                                    <li>.htaccess編集</li>
                                    <li>サイト転送設定</li>
                                    <li>アクセス拒否設定</li>
                                    <li>CGIツール</li>
                                    <li>自動インストール</li>
                                    <li>PHP Ver.切替</li>
                                    <li>php.ini設定</li>
                                    <li>PHP高速化設定(FastCGI化)</li>
                                    <li>WordPressセキュリティ設定</li>
                                    <li>Webフォント設定</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>アクセス制限</li>
                                    <li>エラーページ設定</li>
                                    <li>MIME設定</li>
                                    <li><s>Cron設定</s><span class="font-normal light-gray">(移動)</span></li>
                                    <li>.htaccess編集</li>
                                    <li>サイト転送設定</li>
                                    <li>アクセス拒否設定</li>
                                    <li>CGIツール</li>
                                    <li>簡単インストール</li>
                                    <li><s>PHP Ver.切替</s><span class="font-normal light-gray">(移動)</span></li>
                                    <li><s>php.ini設定</s><span class="font-normal light-gray">(移動)</span></li>
                                    <li><s>PHP高速化設定(FastCGI化)</s><span class="font-normal light-gray">(移動)</span></li>
                                    <li><s>WordPressセキュリティ設定</s><span class="font-normal light-gray">(移動)</span></li>
                                    <li>Webフォント設定</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <th scope="row">WordPress</th>
                            <td>-</td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>WordPress簡単インストール</li>
                                    <li>WordPressセキュリティ設定</li>
                                </ul>
                            </td>
                            <td>カテゴリを新設</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">メール</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>メールアカウント設定</li>
                                    <li>迷惑メール設定</li>
                                    <li>自動応答設定</li>
                                    <li>SMTP認証の国外アクセス制限設定</li>
                                    <li>メールの振り分け</li>
                                    <li>メーリングリスト・メールマガジン</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>メールアカウント設定</li>
                                    <li>迷惑メール設定</li>
                                    <li>自動応答設定</li>
                                    <li>SMTP認証の国外アクセス制限設定</li>
                                    <li>メールの振り分け</li>
                                    <li>メーリングリスト・メールマガジン</li>
                                </ul>
                            </td>
                            <td>変更なし</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">FTP</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>サブFTPアカウント設定</li>
                                    <li>FTP制限設定</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>サブFTPアカウント設定</li>
                                    <li>FTP制限設定</li>
                                </ul>
                            </td>
                            <td>変更なし</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">データベース</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>MySQL設定</li>
                                    <li>phpmyadmin(MySQL5.7)</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>MySQL設定</li>
                                    <li>MySQLバックアップ</li>
                                    <li>phpmyadmin(MySQL5.7)</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <th scope="row">PHP</th>
                            <td>-</td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>PHP Ver.切替</li>
                                    <li>php.ini設定</li>
                                    <li>PHP高速化設定(FastCGI化)</li>
                                </ul>
                            </td>
                            <td>カテゴリを新設</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">ドメイン</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>ドメイン設定</li>
                                    <li>サブドメイン設定</li>
                                    <li>DNSレコード設定</li>
                                    <li>SSL設定</li>
                                    <li>動作確認URL</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>ドメイン設定</li>
                                    <li>サブドメイン設定</li>
                                    <li>DNSレコード設定</li>
                                    <li>SSL設定</li>
                                    <li>動作確認URL</li>
                                </ul>
                            </td>
                            <td>変更なし</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">アクセス解析</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>アクセス解析</li>
                                    <li>ログファイル</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>アクセス解析</li>
                                    <li><s>ログファイル</s><span class="font-normal light-gray">(分割)</span></li>
                                    <li>アクセスログ</li>
                                    <li>エラーログ</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <th scope="row"><s>SSH</s></th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>SSH設定</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li><s>SSH設定</s><span class="font-normal light-gray">(移動)</span></li>
                                </ul>
                            </td>
                            <td>再編によりカテゴリを削除</td>
                        </tr>
                        
                    </tbody>
                </table>

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

<?php include("../../../bottom.php"); ?>
</body>
</html>