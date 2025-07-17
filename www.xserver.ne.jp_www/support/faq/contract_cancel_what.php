<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>解約手順を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サービスの解約は、ご契約の管理画面よりお客様にて手続きが必要です。以下の手順で解約を行ってください。1.「XServerアカウント」へログインする2.契約一覧画面で解約希望のサービス(サーバーID、ドメイン名、コモンネームなど)をクリック(または対象契約の…">
</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">解約手順を教えてください。</h3>
                <p>
                    サービスの解約は、ご契約の管理画面よりお客様にて手続きが必要です。<br>
                    以下の手順で解約を行ってください。
                </p>
                <p>
                <ol class="ol ol_margin">
                    <li>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」へログインする</li>
                    <li>契約一覧画面で解約希望のサービス(サーバーID、ドメイン名、コモンネームなど)をクリック<br>
                        (または対象契約の右端クイックメニュー【<i class="ico-xacc ico-xacc--list"></i>】より「契約情報」をクリック) </li>
                    <li>契約情報画面で「解約する」をクリック</li>
                    <li>確認画面で「解約申請をする」をクリック</li>
                    <li>契約一覧画面で対象サービスの「契約」のステータスに【解約】と表示されていれば手続き完了<br>
                        登録メールアドレス宛にメールでご案内が届きますので、ご確認ください。</li>
                </ol>
                </p>
                <aside class="msg msg_notice mt30">
                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご確認ください</h6>
                    <div class="msg_body">
                        <p>
                            サービスのご契約期間中でも解約の手続きが可能です。<br>
                            解約を申請された場合、ご利用サービスの利用期限日をもってサービスが停止します。<br>
                            利用期限日までは引き続きサービスのご利用が可能です。<br>
                            お支払い済みの料金の返金はできません。予めご了承ください。
                        </p>
                    </div>
                </aside>
                <p class="m0">
                    <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_order_quit.php">解約</a>
                </p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_cancel.php" class="btn btn_gray">「解約」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

            </section>
            <!-- /.col-main -->
            
            <aside class="col-side">
<?php include("sidemenu.php"); ?>
            </aside>
            <!-- /.col-side -->
        
        </div>
        <!-- /.clearfix -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>