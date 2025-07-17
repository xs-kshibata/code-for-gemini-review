<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールの転送設定をしましたが、転送先に届きません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="まずは、WEBメールにログインをしていただき受信箱にメールが届いているかご確認ください。
WEBメールに届いている場合は、転送先のメールサーバーのセキュリティ設定や迷惑メール設定で弾かれている可能性があります。...">

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
            
                <h3 class="sub-ttl">メールの転送設定をしましたが、転送先に届きません。</h3>

                <p>まずは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank">WEBメール</a>にログインをしていただき受信箱にメールが届いているかご確認ください。</p>
                <p>WEBメールに届いている場合は、転送先のメールサーバーのセキュリティ設定や迷惑メール設定で弾かれている可能性があります。<br>
                    転送先の迷惑メールに入っていないかをご確認ください。</p>
                <p>また、メール送信数の目安を超過している場合も転送先にメールが転送されません。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メール送信数の目安</dt>
                    <dd>
                        <p class="mb0">
                            1,500通/時間<br>
                            15,000通/日
                        </p>
                    </dd>
                </dl>
                <p>
                    上記をご確認いただき、解決しない場合は状況をお調べしますので「<a href="../support.php">お問い合わせ</a>」よりメールにてお問い合わせください。<br>
                    お問い合わせの際には以下の情報をお書き添えください<br>
                    <br>
                    ・エラーメールが届いておりましたら、その内容を全文お知らせください。<br>
                    ・エラーメール等が確認できない場合は、以下詳細を明記しお知らせください。<br>
                    --------------------------------------------------<br>
                    送信元（FROM）：<br>
                    あて先（TO）：<br>
                    転送先：<br>
                    <br>
                    送信日時：20●●/●●/●●　●●：●●<br>
                    --------------------------------------------------<br>
                    ※可能な限り直近の情報をお知らせください。<br>
                    ※送信日時は必ず分単位でご記載ください。<br>
                    <br>
                    状況の調査には送信日時と時刻も必要ですので不足無くお知らせくださいますようご協力のほどよろしくお願いいたします。
                </p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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