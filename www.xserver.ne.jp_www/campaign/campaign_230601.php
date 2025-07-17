<?php include("../conf.php"); ?>
<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');

// キャンペーン情報
$name = '【終了いたしました】SSL証明書 最大20%OFFキャンペーン';
$date = '2023年6月1日(木) 12:00〜2023年10月3日(火) 12:00まで';
$date_brackets = '＜' . $date. '＞';
$id = '230601';
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

<meta property="og:title" content="<?php echo $name; ?><?php echo $date_brackets; ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="エックスサーバーのキャンペーンページです。<?php print $name; ?>の詳細をご案内しています。<?php print $date_brackets; ?>">
<meta property="og:url" content="<?php print $SITE_URL; ?>campaign/campaign_<?php print $id; ?>.php">
<meta property="og:image" content="<?php print $SITE_URL; ?>img/campaign/<?php print $id; ?>/ogp.png?date=<?php print $id; ?>01">
<meta property="og:site_name" content="レンタルサーバー 高速・高機能・高安定性の【エックスサーバー】">
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
<?php include("../canonical.php"); ?>

<!--[if lt IE 9]>
<script src="<?php print $SITE_URL; ?>js/html5shiv.js"></script>
<![endif]-->

<noscript>
    <style>.ltie7 body, .ie7 body, .ie8 body, .srcset { visibility: visible !important; }</style>
</noscript>

<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","business.xserver.ne.jp","support.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
</script>
<script src="<?php print_fileURL("js/errorlogger.js"); ?>"></script>

<link href="<?php print_fileURL("x_header/assets/style.css"); ?>" rel="stylesheet">
<link href="<?php print_fileURL("css/site.css"); ?>" rel="stylesheet">

<title><?php print $name; ?><?php print $date_brackets; ?> | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="<?php print $name; ?> - <?php print $SITE_DESCRIPTION; ?>">
<style>
    .campaign_table_inner_list {
        margin-bottom: 15px;
    }
    .campaign_table_inner_list li {
        margin-bottom: 10px;
    }
    @media only screen and (min-width: 768px) {
        .campaign_table_inner_list li {
            margin-bottom: 5px;
        }
    }
</style>
<meta name="robots" content="noindex">
</head>

<body id="pid-info">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>


<div id="toggle-target">
<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <section class="campaign">
            <h2 class="campaign_visual mb15 pt15">
                <img src="<?php print_fileURL("img/campaign/" . $id . "/campaign_top_img.png"); ?>" alt="<?php print $name; ?>">
            </h2>

            <section class="cp-flow">
                <h3 class="cp-flow_ttl">エックスサーバーの独自SSLお申し込みの流れ</h3>
                <div class="cp-flow_unit">
                    <h4 class="cp-flow_unit_ttl">サーバーアカウントをお申し込み<span class="cp-flow_unit_tit_noagree">※サーバー契約がない場合</span></h4>
                    <p>証明書のお申し込みには<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server2_index=on&service=xserver" target="_blank">『エックスサーバー』のサーバー契約</a>が必要です。</p>
                </div>
                <div class="cp-flow_unit">
                    <h4 class="cp-flow_unit_ttl">XServerアカウントへログインし、独自SSLをお申し込み</h4>
                    <p>下記リンクからXServerアカウントへログイン後、SSL証明書の追加お申し込みを行ってください。</p>
                    <p><a class="btn btn_orange-l" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">独自SSLのお申し込みはこちらから<i class="ico ico_new-window"></i></a></p>
                </div>
                <p>お申し込み後の取得申請作業については<a href="../manual/man_order_domain_ssl.php">マニュアル「オプション独自SSLのお申し込み」</a>をご参照ください。</p>
            </section>
            <!-- /.cp-flow -->

            <table class="campaign_table">
                <tr>
                    <th>キャンペーン対象</th>
                    <td>
                        <div class="campaign_table_inner font-bold font-l">
                            <p class="mb5">期間中、新規にお申し込みいただいた全てのSSL証明書(全契約期間対象)</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>キャンペーン期間</th>
                    <td>
                        <div class="campaign_table_inner">
							<p>
								<s><?php print $date; ?></s><br>
								<span class="red font-bold">本キャンペーンは終了いたしました。</span>
							</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>キャンペーン内容</th>
                    <td>
                        <div class="campaign_table_inner">
                            <p><strong class="font-l bright-yellow">全てのSSL証明書において、お支払い金額より最大20%OFF！</strong><br>
                            価格や詳細については、以下のSSL証明書のページよりご確認ください。</p>
                            <div class="border border_yellow">
                                <p class="font-bold mb5 red">≪ 20%OFF！ ≫</p>
                                <ul class="campaign_table_inner_list">
                                    <li><a href="../functions/ssl/securecore.php">クラウドセキュア スピード認証SSL</a></li>
                                    <li><a href="../functions/ssl/securecore_ov.php">クラウドセキュア 企業認証SSL</a></li>
                                    <li><a href="../functions/ssl/securecore_ev.php">クラウドセキュア EV SSL</a></li>
                                </ul>

                                <p class="font-bold mb5 red">≪ 5%OFF！ ≫</p>
                                <ul class="campaign_table_inner_list">
                                    <li><a href="../functions/ssl/coressl.php">クラウドSSL</a></li>
                                    <li><a href="../functions/ssl/geotrust.php">ジオトラスト クイックSSLプレミアム</a></li>
                                    <li><a href="../functions/ssl/digicert_ov.php">デジサート セキュア・サーバID</a></li>
                                    <li><a href="../functions/ssl/rapidssl.php">ラピッドSSL</a></li>
                                </ul>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>ご注意</th>
                    <td>
                        <div class="campaign_table_inner">
                            <p class="note mb5">
                                ※キャンペーン前に申し込んだご契約については、<br>
                                キャンペーン期間中にお支払いをしてもキャンペーンは適用されません。</p>
                            <p class="note mb5">※本キャンペーンは予告なく終了する場合があります。</p>
                            <p class="note">※価格はすべて「税込表記」です。</p>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
        <!-- /.campaign -->

        <section class="cp-btnset">
            <h3 class="cp-btnset_ttl">エックスサーバーの独自SSLお申し込み</h3>
            <div class="cp-btnset_body clearfix">
                <div class="cp-btnset_unitwide">
                    <p>下記リンクからXServerアカウントへログイン後、SSL証明書の追加申し込みを行ってください。</p>
                    <p><a class="btn btn_orange-l" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">独自SSLのお申し込みはこちらから<i class="ico ico_new-window"></i></a></p>
                </div>
            </div>
            <p class="tac">各種証明書のお申し込みには<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server2_index=on&service=xserver" target="_blank">『エックスサーバー』のサーバー契約</a>が必要です。</p>
        </section>
        <!-- /.cpBtnset -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>