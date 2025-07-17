<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>更新通知はいつ送られてきますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーの場合…ご利用期限の【2週間前】【1ヶ月半前】に、ご登録メールアドレス宛に更新のご連絡を送信いたします。　独自ドメインの場合…ご利用期限の【1ヶ月前】【2ヶ月前】【3ヶ月前】にそれぞれ、ご登録メールアドレス宛に更新の…">

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
            
                <h3 class="sub-ttl">更新通知はいつ送られてきますか？</h3>
                
                            <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーの場合</dt>
                                <dd>ご利用期限の【2週間前】【1ヶ月半前】に、ご登録メールアドレス宛に更新のご連絡を送信いたします。</dd>
                            </dl>
                            <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>独自ドメインの場合</dt>
                                <dd>ご利用期限の【1ヶ月前】【2ヶ月前】【3ヶ月前】にそれぞれ、ご登録メールアドレス宛に更新のご連絡を送信いたします。</dd>
                            </dl>
							<dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>SSL証明書の場合</dt>
                                <dd>ご利用期限の【30日前】【14日前】【7日前】にそれぞれ、ご登録メールアドレス宛に更新のご連絡を送信いたします。</dd>
                            </dl>
                
                            <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_renewal.php" class="btn btn_gray">「契約更新」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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