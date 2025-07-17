<?php include("../conf.php"); ?>
<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');

// �����ڡ������
$name = '�ڽ�λ�������ޤ�����SSL������ ����20%OFF�����ڡ���';
$date = '2023ǯ6��1��(��) 12:00��2023ǯ10��3��(��) 12:00�ޤ�';
$date_brackets = '��' . $date. '��';
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
<meta name="keywords" content="��󥿥륵���С�,��®,�ⵡǽ,�������">

<meta property="og:title" content="<?php echo $name; ?><?php echo $date_brackets; ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="���å��������С��Υ����ڡ���ڡ����Ǥ���<?php print $name; ?>�ξܺ٤򤴰��⤷�Ƥ��ޤ���<?php print $date_brackets; ?>">
<meta property="og:url" content="<?php print $SITE_URL; ?>campaign/campaign_<?php print $id; ?>.php">
<meta property="og:image" content="<?php print $SITE_URL; ?>img/campaign/<?php print $id; ?>/ogp.png?date=<?php print $id; ?>01">
<meta property="og:site_name" content="��󥿥륵���С� ��®���ⵡǽ����������Ρڥ��å��������С���">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">

<?php if($PC_LAYOUT){ ?>
<meta name="viewport" content="width=1024">
<?php }else{ ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<?php } ?>

<meta name="format-detection" content="telephone=no">

<link rel="index" href="<?php print $SITE_URL; ?>sitemap.php" title="�����ȥޥå�">
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
                <h3 class="cp-flow_ttl">���å��������С����ȼ�SSL���������ߤ�ή��</h3>
                <div class="cp-flow_unit">
                    <h4 class="cp-flow_unit_ttl">�����С���������Ȥ򤪿�������<span class="cp-flow_unit_tit_noagree">�������С����󤬤ʤ����</span></h4>
                    <p>������Τ��������ߤˤ�<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server2_index=on&service=xserver" target="_blank">�إ��å��������С��٤Υ����С�����</a>��ɬ�פǤ���</p>
                </div>
                <div class="cp-flow_unit">
                    <h4 class="cp-flow_unit_ttl">XServer��������Ȥإ����󤷡��ȼ�SSL�򤪿�������</h4>
                    <p>������󥯤���XServer��������Ȥإ�����塢SSL��������ɲä��������ߤ�ԤäƤ���������</p>
                    <p><a class="btn btn_orange-l" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">�ȼ�SSL�Τ��������ߤϤ����餫��<i class="ico ico_new-window"></i></a></p>
                </div>
                <p>���������߸�μ���������ȤˤĤ��Ƥ�<a href="../manual/man_order_domain_ssl.php">�ޥ˥奢��֥��ץ�����ȼ�SSL�Τ��������ߡ�</a>�򤴻��Ȥ���������</p>
            </section>
            <!-- /.cp-flow -->

            <table class="campaign_table">
                <tr>
                    <th>�����ڡ����о�</th>
                    <td>
                        <div class="campaign_table_inner font-bold font-l">
                            <p class="mb5">�����桢�����ˤ��������ߤ������������Ƥ�SSL������(����������о�)</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>�����ڡ������</th>
                    <td>
                        <div class="campaign_table_inner">
							<p>
								<s><?php print $date; ?></s><br>
								<span class="red font-bold">�ܥ����ڡ���Ͻ�λ�������ޤ�����</span>
							</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>�����ڡ�������</th>
                    <td>
                        <div class="campaign_table_inner">
                            <p><strong class="font-l bright-yellow">���Ƥ�SSL������ˤ����ơ�����ʧ����ۤ�����20%OFF��</strong><br>
                            ���ʤ�ܺ٤ˤĤ��Ƥϡ��ʲ���SSL������Υڡ�����ꤴ��ǧ����������</p>
                            <div class="border border_yellow">
                                <p class="font-bold mb5 red">�� 20%OFF�� ��</p>
                                <ul class="campaign_table_inner_list">
                                    <li><a href="../functions/ssl/securecore.php">���饦�ɥ����奢 ���ԡ���ǧ��SSL</a></li>
                                    <li><a href="../functions/ssl/securecore_ov.php">���饦�ɥ����奢 ���ǧ��SSL</a></li>
                                    <li><a href="../functions/ssl/securecore_ev.php">���饦�ɥ����奢 EV SSL</a></li>
                                </ul>

                                <p class="font-bold mb5 red">�� 5%OFF�� ��</p>
                                <ul class="campaign_table_inner_list">
                                    <li><a href="../functions/ssl/coressl.php">���饦��SSL</a></li>
                                    <li><a href="../functions/ssl/geotrust.php">�����ȥ饹�� �����å�SSL�ץ�ߥ���</a></li>
                                    <li><a href="../functions/ssl/digicert_ov.php">�ǥ������� �����奢��������ID</a></li>
                                    <li><a href="../functions/ssl/rapidssl.php">��ԥå�SSL</a></li>
                                </ul>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>�����</th>
                    <td>
                        <div class="campaign_table_inner">
                            <p class="note mb5">
                                �������ڡ������˿��������������ˤĤ��Ƥϡ�<br>
                                �����ڡ��������ˤ���ʧ���򤷤Ƥ⥭���ڡ����Ŭ�Ѥ���ޤ���</p>
                            <p class="note mb5">���ܥ����ڡ����ͽ��ʤ���λ�����礬����ޤ���</p>
                            <p class="note">�����ʤϤ��٤ơ��ǹ�ɽ���פǤ���</p>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
        <!-- /.campaign -->

        <section class="cp-btnset">
            <h3 class="cp-btnset_ttl">���å��������С����ȼ�SSL����������</h3>
            <div class="cp-btnset_body clearfix">
                <div class="cp-btnset_unitwide">
                    <p>������󥯤���XServer��������Ȥإ�����塢SSL��������ɲÿ������ߤ�ԤäƤ���������</p>
                    <p><a class="btn btn_orange-l" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">�ȼ�SSL�Τ��������ߤϤ����餫��<i class="ico ico_new-window"></i></a></p>
                </div>
            </div>
            <p class="tac">�Ƽ������Τ��������ߤˤ�<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server2_index=on&service=xserver" target="_blank">�إ��å��������С��٤Υ����С�����</a>��ɬ�פǤ���</p>
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