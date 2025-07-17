<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>契約前の申し込みをキャンセルできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン契約、SSL契約は、お支払い前のお申し込みの取り消しが可能です。また、お試し期間中のサーバー契約についてお申し込みの取り消しをご希望の場合、XServerアカウント内、エックスサーバー契約管理ページのトップページ「契約情報」メニュー…">

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
            
                <h3 class="sub-ttl">契約前の申し込みをキャンセルできますか？</h3>
                
                <p>ドメイン契約、SSL契約は、お支払い前のお申し込みの取り消しが可能です。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ドメイン契約のお申し込みキャンセル</dt>
                    <dd>
						<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページのトップページにあるドメインより、申し込みを取り消すドメインの「契約情報」メニューをクリックして取り消し手続きを進めてください。</p>
						<p><img class="img" src="../../img/faq/faq_contract_cancel1.png?date=20210608" alt="契約情報をクリックしているスクリーンショット"></p>
						<p>ご契約一覧から、お申し込みいただいたドメイン名の記載が削除されましたら、ドメインお申し込みのキャンセルは完了です。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SSL契約のお申し込みキャンセル</dt>
                    <dd>
					<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページの「料金支払い &gt; お支払い/請求書発行」の中の「請求情報一覧」に記載されたSSL契約に関する請求情報の「詳細」からキャンセルしてください。</p>
					<p class="mt5"><img class="img" src="../../img/faq/faq_contract_price1.png?date=20230130" alt="詳細をクリックしているスクリーンショット"></p>
                    <p>請求情報が削除されましたら、SSLお申し込みのキャンセルは完了です。</p>
                    </dd>
                </dl>
                <p>なお、お支払いが反映されたドメイン契約、SSL契約はお申し込みのキャンセルができません。</p>
                <p>また、お試し期間中のサーバー契約についてお申し込みの取り消しをご希望の場合、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページのトップページ「契約情報」メニューより解約申請を行ってください。</p>
                <p><img class="img" src="../../img/faq/faq_contract_alteration3.png?date=20230130" alt="契約情報をクリックしているスクリーンショット"></p>
                


                
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