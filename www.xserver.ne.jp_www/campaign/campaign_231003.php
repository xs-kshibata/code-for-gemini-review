<?php include("../conf.php"); ?>
<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');

// キャンペーン情報
$name = '【終了いたしました】クラウドセキュア SSL30%キャッシュバックキャンペーン';
$date = '2023年10月3日(火) 12:00 〜 2023年11月27日(月) 12:00まで';
$date_brackets = '＜' . $date. '＞';
$id = '231003';
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
    
    <section class="main" role="main">
    
        <section class="campaign">
            <h2 class="campaign_visual mb15 pt15">
                <img src="<?php print_fileURL("img/campaign/" . $id . "/campaign_top_img.png"); ?>" alt="<?php print $name; ?>">
            </h2>

            <div class="holder-sml">
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
                                <p class="mb5">キャンペーン期間中、新規にお申し込みいただいた下記のSSL証明書</p>
                                <ul class="ul">
                                    <li>クラウドセキュア スピード認証SSL</li>
                                    <li>クラウドセキュア 企業認証SSL</li>
                                    <li>クラウドセキュア EV SSL</li>
                                </ul>
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
                                <em class="font-l font-bold bright-yellow">初回お支払い時のご利用料金を《30%》キャッシュバック！</em>
                                <p class="mb0 ml10">
                                    より長期のご契約ほどキャッシュバック金額がアップします！
                                </p>
                                <p class="ml10">SSL証明書ごと、契約期間ごとのキャッシュバック金額は次のとおりです。</p>
                                <ul class="list list_margin list_arrow-right ml35">
                                    <li>
                                        <b>クラウドセキュア スピード認証SSL</b>
                                        <p>1年契約・・・<span class="font-bold bright-yellow">5,940円</span> キャッシュバック<br>
                                           2年契約・・・<span class="font-bold bright-yellow">11,220円</span> キャッシュバック<br>
                                           3年契約・・・<span class="font-bold bright-yellow">15,840円</span> キャッシュバック<br>
                                           4年契約・・・<span class="font-bold bright-yellow">19,800円</span> キャッシュバック<br>
                                           5年契約・・・<span class="font-bold bright-yellow">23,100円</span> キャッシュバック
                                        </p>
                                    </li>
                                    <li>
                                        <b>クラウドセキュア 企業認証SSL</b>
                                        <p>1年契約・・・<span class="font-bold bright-yellow">12,540円</span> キャッシュバック<br>
                                           2年契約・・・<span class="font-bold bright-yellow">23,100円</span> キャッシュバック<br>
                                           3年契約・・・<span class="font-bold bright-yellow">32,670円</span> キャッシュバック<br>
                                           4年契約・・・<span class="font-bold bright-yellow">42,240円</span> キャッシュバック<br>
                                           5年契約・・・<span class="font-bold bright-yellow">49,500円</span> キャッシュバック
                                        </p>
                                    </li>
                                    <li>
                                        <b>クラウドセキュア EV SSL</b>
                                        <p>1年契約・・・<span class="font-bold bright-yellow">31,680円</span> キャッシュバック<br>
                                           2年契約・・・<span class="font-bold bright-yellow">59,400円</span> キャッシュバック<br>
                                           3年契約・・・<span class="font-bold bright-yellow">84,150円</span> キャッシュバック<br>
                                           4年契約・・・<span class="font-bold bright-yellow">106,920円</span> キャッシュバック<br>
                                           5年契約・・・<span class="font-bold bright-yellow">125,400円</span> キャッシュバック
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>特典の受け取り方法</th>
                        <td>
                            <div class="campaign_table_inner">
                                <p>
                                    お申し込み日を起算日として、満6ヶ月が経過した日の翌月初旬にご登録のメールアドレス宛に申請方法に関するメールをお送りします。メールの案内に沿って申請してください。<br>
                                    キャッシュバックの受取方法は<b>銀行振込、またはコンビニ(セブン銀行ATM/ローソン)</b>です。
                                </p>
                                <p>受け取り方法の詳細はマニュアル「<a href="https://www.xserver.ne.jp/manual/man_order_campaign_cashback.php">キャッシュバック特典</a>」をご参照ください。</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>ご注意</th>
                        <td>
                            <div class="campaign_table_inner">
								<p class="note mb5">
                                    ※キャンペーン前に申し込んだご契約については、<br>キャンペーン期間中にお支払いをしてもキャンペーンは適用されません。</p>
                                <p class="note mb5">※本キャンペーンは予告なく終了する場合があります。</p>
								<p class="note mb5">※キャッシュバックの申請は、申し込みから満6ヶ月以上のご利用後に可能です。<br>返金やキャンセルなどにより申請時点で契約が終了している場合や、<br>申請時点でSSL証明書の発行が完了していない場合は、キャッシュバックの対象外です。</p>
								<p class="note mb5">※記載のキャッシュバック金額はすべて「税込表記」です。</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
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