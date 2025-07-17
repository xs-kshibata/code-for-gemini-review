<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>請求書・受領書・見積書の発行は可能ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="いずれも発行可能です。">

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
            
                <h3 class="sub-ttl">請求書・受領書・見積書の発行は可能ですか？</h3>
                
                <p>いずれも発行可能です。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>請求書・受領書の発行について</dt>
                    <dd>
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページの「料金支払い &gt; お支払い履歴／受領書発行」より、PDFファイル形式でダウンロードすることが可能です。</p>
                        <p class="mt5"><img class="img" src="../../img/faq/faq_contract_price3.png?date=20230130" alt="お支払い履歴／受領書発行をクリックしているスクリーンショット"></p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>見積書の発行について</dt>
                    <dd>
                        <p>
                            見積書は、サービスサイト「料金プラン」の料金シミュレーション機能を使用して発行が可能です。<br>
                            詳しくはマニュアル「<a href="../../manual/man_order_pay_bill.php#link-a03">請求書・受領書・見積書</a>」をご参照ください。
                        </p>
                    </dd>
                </dl>

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