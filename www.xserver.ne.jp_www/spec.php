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

<title>sv2001以降のサーバーのサービス仕様について │ <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のsv2001以降のサーバーにおけるサービス仕様の主な変更点についてご案内しています。">

</head>

<body id="pid-article">

<?php include("top.php"); ?>

<div class="wrap">

    <header class="header">
        <a class="siteid hover" href="/"><img src="img/news/service_logo.png" alt="エックスサーバー"></a>
    </header>
    
    <article class="article">
    
        <header class="article_header">
            <h1 class="article_ttl">sv2001以降のサーバーのサービス仕様について</h1>
        </header>
        
        <div class="article_body">
        
            <p>2016年8月16日、新規受付サーバーにおけるサーバー基盤システムの刷新に伴い、サーバー番号がsv2001以降のサーバーでサービス仕様の一部変更を行っています。</p>
            <p>本ページでは、sv1999までのサーバーとsv2001以降の新仕様サーバーの主な仕様の差異についてご案内しています。</p>

            <p class="border border_blue">
                ※本ページの掲載内容は、現在提供中のサービス内容と異なる可能性があります。最新の情報は<a href="https://www.xserver.ne.jp/" target="_blank">公式サイト</a>をご参照ください。
            </p>

            <p class="border border_blue">
                　2017/09/14：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=3582">「nginx」導入！「HTTP/2」対応！Webサイト表示速度の大幅向上のお知らせ</a><br>
                　2017/07/11：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=3465">ディスク読み込み速度が48倍以上！新規受付サーバーへのオールSSD RAID10構成採用のお知らせ</a><br>
                　2016/11/08：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=2964">sv2001.xserver.jp以降のサーバーにおけるPHP旧バージョン(PHP 5.1、5.3〜5.5)の追加提供について</a><br>
                　2016/08/16：<br>　　<a href="https://www.xserver.ne.jp/news_detail.php?view_id=2821">新規受付サーバーにおけるサーバー基盤システム刷新のお知らせ</a>
                　
            </p>


            <p class="tar">※サーバー番号の確認方法は<a href="./support/faq/service_server_number.php">こちら</a>をご参照ください。</p>
            
            <h2 class="heading-1">主な仕様差異の一覧</h2>
            <div class="inner">
                
            	<h3 class="heading-2">ウェブサーバー</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">サーバーホスト名</th>
                            <td>〜sv1999<span class="disp-ib">.xserver.jp</span></td>
                            <td>sv2001<span class="disp-ib">.xserver.jp〜</span></td>
                            <td>新仕様サーバーは2000番台以降を採番します。</td>
                        </tr>
                        <tr>
                            <th scope="row">apacheバージョン</th>
                            <td>2.2.x</td>
                            <td>apache 2.4.x<br>
                            nginx</td>
                            <td>
                                <p>2017年9月14日(木)より、nginxを導入しました。</p>
                                <p>※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=3582">お知らせ</a>をご参照ください。</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">通信プロトコル</th>
                            <td>HTTP/1.1</td>
                            <td>HTTP/2<br>HTTP/1.1</td>
                            <td>
                                <p>2017年9月14日(木)より、HTTP/2に対応しました。</p>
                                <p>※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=3582">お知らせ</a>をご参照ください。</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">暗号化</th>
                            <td>TLS1.2<br>TLS1.1<br>TLS1.0</td>
                            <td>TLS1.2<br><s>TLS1.1</s><br><s>TLS1.0</s></td>
                            <td>
                                <p>2018年6月12日(火)より、TL1.0/1.1を無効化しました。</p>
                                <p>※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4435">お知らせ</a>をご参照ください。</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">プログラム関連</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">PHP</th>
                            <td>
                                7.1.x<br>
                                7.0.x<br>
                                5.6.x<br>
                                5.5.x<br>
                                5.4.x<br>
                                5.3.x<br>
                                5.2.x<br>
                                5.1.x<br>
                                4.3.x
                            </td>
                            <td>
                                7.2.x<br>
                                7.1.x<br>
                                7.0.x<br>
                                5.6.x<br>
                                5.5.x<br>
                                5.4.x<br>
                                5.3.x<br>
                                <s>5.2.x</s><br>
                                5.1.x<br>
                                <s>4.3.x</s>
                            </td>
                            <td>
                                <p>2016年11月8日(火)より、サーバー番号がsv2001以降のサーバーにおいてもPHP旧バージョン(PHP 5.1、5.3〜5.5)がご利用いただけるようになりました。</p>
                                <p class="note font-s">※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=2964">お知らせ</a>をご参照ください。</p><br />
	    						<p>2017年5月12日(金)よりPHP 7.1 がご利用いただけるようになりました。</p> 
                                <p class="note font-s">※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=3343">お知らせ</a>をご参照ください。</p><br />
                                <p>2018年2月9日(金)より、サーバー番号がsv2001以降のサーバーにおいてPHP 7.2 がご利用いただけるようになりました。</p> 
                                <p class="note font-s">※詳しくは、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4071">お知らせ</a>をご参照ください。</p><br />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">PHPの動作</th>
                            <td>CGI<br>FastCGI</td>
                            <td><s>CGI</s><br>FastCGI</td>
                            <td>
                                <p>
                                	FastCGIとキャッシュモジュール(OPcache)の設定可否状況が異なります。<br>
                                    詳しくは以下のマニュアルをご参照ください。 
                                </p>
                                <a class="btn btn_white" href="manual/man_server_php_rapid.php">PHP高速化設定について<i class="ico ico_chevron-right"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Perl</th>
                            <td>5.8.x</td>
                            <td>5.16.x</td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">Ruby</th>
                            <td>
                                2.0.0<br>
                                1.9.3<br>
                                1.8.5
                            </td>
                            <td>
                                2.0.0<br>
                                <s>1.9.3</s><br>
                                <s>1.8.5</s>
                            </td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">Python</th>
                            <td>
                                3.3.1<br>
                                2.7.4<br>
                                2.4.3
                            </td>
                            <td>
                                3.4.x<br>
                                <s>3.3.1</s><br>
                                2.7.x<br>
                                <s>2.4.3</s>
                            </td>
                            <td class="tac">-</td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">データベース関連</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">MySQL</th>
                            <td>5.5.x</td>
                            <td>5.7.x</td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">SQLite</th>
                            <td>3.3.x</td>
                            <td>3.7.x</td>
                            <td class="tac">-</td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">ログ関連</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">アクセスログ ダウンロード機能</th>
                            <td>当日のみ</td>
                            <td>過去30日</td>
                            <td>サーバーパネル内「ログ」機能でダウンロードが可能なアクセスログは、新仕様サーバーでは保存期間の設定によらず、過去30日分になります。</td>
                        </tr>
                        <tr>
                            <th scope="row">アクセスログの生成周期</th>
                            <td>1週間</td>
                            <td>1日</td>
                            <td>
                                <p>
                                    新仕様サーバーでは、お客様のFTP領域に保存するアクセスログの生成周期が1日毎になります。<br>
                                	なお、保存期間の設定は、以下のマニュアルをご参照ください。
                                </p>
                                <a class="btn btn_white" href="manual/man_server_log.php#tab2">ログ<i class="ico ico_chevron-right"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">過去のアクセスログのファイル名</th>
                            <td>ドメイン名.access_log.数字</td>
                            <td>ドメイン名.access_log_8桁の年月日.gz</td>
                            <td>お客様のFTP領域に保存されるログのファイル名が異なります。</td>
                        </tr>
                        <tr>
                            <th scope="row">過去のアクセスログのファイル形式</th>
                            <td>テキスト形式 (.log 無圧縮)</td>
                            <td>圧縮ファイル形式 (.gz ※)</td>
                            <td>
                                <p>お客様のFTP領域に保存するログは、新仕様サーバーではgzipによるファイル圧縮をします。</p>
                                <p class="note">※圧縮ファイルの展開後は、テキスト形式(.log)形式</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">出力内容のフォーマット</th>
                            <td>-</td>
                            <td>出力ログの先頭にホスト名を追加</td>
                            <td>
                                <p>詳細は以下のマニュアルをご参照ください。</p>
                                <a class="btn btn_white" href="manual/man_server_log.php#tab2">ログ<i class="ico ico_chevron-right"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">ログ保存ファイル</th>
                            <td>ドメイン・サブドメイン毎</td>
                            <td>ドメイン毎</td>
                            <td>出力内容のフォーマット変更にあわせてアクセスログ・エラーログは、新仕様サーバーではドメイン毎に1ファイル(ドメイン・サブドメイン共通)に保存されます。</td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">ツール・ソフトウェア関連</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">自動インストール</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>WordPress 日本語版</li>
                                    <li>Xoops Cube Legacy(PHP 5.3以下利用時のみ)</li>
                                    <li>EC-CUBE</li>
                                    <li>PukiWiki</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>WordPress 日本語版</li>
                                    <li><s>Xoops Cube Legacy(PHP 5.3以下利用時のみ)</s></li>
                                    <li>EC-CUBE</li>
                                    <li>PukiWiki</li>
                                </ul>
                            </td>
                            <td>サーバー番号がsv2001以降のサーバーでは、Xoops Cube Legacyの自動インストール機能を提供しておりません。</td>
                        </tr>
                        <tr>
                            <th scope="row">動作確認済みソフトウェア</th>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>WordPress 日本語版</li>
                                    <li>XOOPS Cube Legacy</li>
                                    <li>EC-CUBE</li>
                                    <li>PukiWiki</li>
                                    <li>concrete5</li>
                                    <li>Drupal</li>
                                    <li>Joomla</li>
                                    <li>MODX 日本語版</li>
                                    <li>Movable Type</li>
                                    <li>osCommerce 日本語版</li>
                                    <li>Zen Cart 日本語版</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list list_arrow-right tal">
                                    <li>WordPress 日本語版</li>
                                    <li><s>XOOPS Cube Legacy</s></li>
                                    <li>EC-CUBE</li>
                                    <li>PukiWiki</li>
                                    <li>concrete5</li>
                                    <li>Drupal</li>
                                    <li>Joomla</li>
                                    <li>MODX 日本語版</li>
                                    <li>Movable Type</li>
                                    <li><s>osCommerce 日本語版</s></li>
                                    <li><s>Zen Cart 日本語版</s></li>
                                </ul>
                            </td>
                            <td>提供するPHPバージョンやMySQLバージョンの差異により、動作確認済みソフトウェアが異なります。</td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">ライブラリ、コマンドラインツール関連</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Libxml2</th>
                            <td>2.6.x</td>
                            <td>2.9.x</td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">curl</th>
                            <td>7.15.x</td>
                            <td>7.29.x</td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">vim</th>
                            <td>7.0</td>
                            <td>7.4</td>
                            <td class="tac">-</td>
                        </tr>
                        <tr>
                            <th scope="row">OpenSSL</th>
                            <td>
                                1.0.1<br>
                                0.9.8<br>
                                ※一部機能で0.9.8
                            </td>
                            <td>1.0.1</td>
                            <td class="tac">-</td>
                        </tr>
                    </tbody>
                </table>
                
                <h3 class="heading-2">その他</h3>
                <table class="diff table primary-table-ml">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="w20per">〜sv1999</th>
                            <th class="w20per">sv2001〜</th>
                            <th class="w40per">解説</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">POP before SMTP</th>
                            <td>提供あり<span class="disp-ib font-s">(国内限定)</span></td>
                            <td>提供なし</td>
                            <td>新仕様サーバーでは、SMTP認証(SMTP-AUTH)による送信のみ可能です。</td>
                        </tr>
                        <tr>
                            <th scope="row">共有SSL</th>
                            <td>2016年11月4日提供終了</td>
                            <td>提供なし</td>
                            <td>
                            	<p>独自SSLのみご利用いただけます。独自SSLの詳細は、以下のページをご参照ください。</p>
                                <p><a class="btn btn_white" href="functions/service_ssl.php">独自SSL<i class="ico ico_chevron-right"></i></a></p>
                                
                                <p class="note font-s">※共有SSL機能の提供は終了しました。提供終了の詳細は、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=2949" target="_blank">お知らせ</a>をご参照ください。</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">(旧)WEBメール</th>
                            <td>提供あり(非推奨)</td>
                            <td>提供なし</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                
                <p class="tar"><small>(最終更新日： 2018年6月27日)</small></p>
                
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