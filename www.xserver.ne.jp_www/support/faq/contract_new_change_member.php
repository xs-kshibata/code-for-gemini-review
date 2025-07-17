<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>申し込み時に入力した会員情報は後から変更できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、変更していただくことができます。内容により、XServerアカウント（ご契約の管理画面）よりお客様にて変更いただける項目と、書面でのお手続きが必要になる項目が…">

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
            
                <h3 class="sub-ttl">申し込み時に入力した会員情報は後から変更できますか？</h3>
                
                <p>はい、変更していただくことができます。</p>
                <p>内容により、XServerアカウント（ご契約の管理画面）よりお客様にて変更いただける項目と、書面でのお手続きが必要になる項目があります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウントよりお客様で変更できる項目</dt>
                    <dd>・登録メールアドレス<br>
                        ・XServerアカウントパスワード<br>
                        ・住所<br>
                        ・電話番号<br>
                        ・担当者名（法人区分の場合）
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>書面によるお手続きで変更できる項目</dt>
                    <dd>・契約者名<br>
                        ・契約法人名
                    </dd>
                </dl>
                <p>関連マニュアル：<a href="../../manual/man_order_change_id.php">登録情報について</a></p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new.php" class="btn btn_gray">「新規契約」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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