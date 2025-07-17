<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>コンビニでの支払いを申し込みましたが、別のコンビニに変えたいです。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="申し込み済みのコンビニ支払いを一度キャンセルすることで、支払い先のコンビニを変更することが可能です。XServerアカウント内、エックスサーバー契約管理ページの「料金支払い ＞ お支払い/請求書発行」の中の「請求情報一覧」より…">

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
            
                <h3 class="sub-ttl">コンビニでの支払いを申し込みましたが、別のコンビニに変えたいです。</h3>
                
                <p>申し込み済みのコンビニ支払いを一度キャンセルすることで、支払い先のコンビニを変更することが可能です。</p>
                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページの「料金支払い &gt; お支払い/請求書発行」の中の「請求情報一覧」より、該当の請求情報の「詳細」からキャンセルしてください。</p>
				<p class="mt5"><img class="img" src="../../img/faq/faq_contract_price1.png?date=20230130" alt="詳細をクリックしているスクリーンショット"></p>
                <p>キャンセル後、再度「料金支払い &gt; お支払い/請求書発行」よりご希望のコンビニエンスストアを選択の上、請求情報を発行してください。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_price.php" class="btn btn_gray">「料金」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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