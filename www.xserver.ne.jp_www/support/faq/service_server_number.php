<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>利用しているサーバーの番号はどこで確認できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServerアカウント、またはサーバーパネルにてご確認いただけます。　XServerアカウントの場合…以下のいずれかの箇所でご確認いただけます。　1.XServerアカウント内、エックスサーバー契約管理ページ ＞ 料金支払い ＞ お支払い/請求書発行…">

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
            
                <h3 class="sub-ttl">利用しているサーバーの番号はどこで確認できますか？</h3>
                
                <p>XServerアカウント、またはサーバーパネルにてご確認いただけます。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウントの場合</dt>
                    <dd>
                    	<p>以下のいずれかの箇所でご確認いただけます。</p>
                        <ul class="list list_arrow-right">
                            <li>XServerアカウント内、エックスサーバー契約管理ページ &gt; 料金支払い &gt; お支払い/請求書発行ページ下部にある「料金のお支払い手続き」の「サーバー番号」欄</li>
                            <p class="mt5"><img class="img" src="../../img/faq/faq_service_server2.png?date=20230130" alt="料金のお支払い手続きから契約情報を確認しているスクリーンショット"></p>
                            <li class="mt30">XServerアカウント内、エックスサーバー契約管理ページの「契約情報」にある「サーバー番号」欄<br>
                                <p class="mt5"><img class="img" src="../../img/faq/faq_contract_alteration3.png?date=20230130" alt="契約情報をクリックしているスクリーンショット"></p>
                                <p class="mt5"><img class="img" src="../../img/faq/faq_service_server3.png?date=20220216" alt="契約情報を確認しているスクリーンショット"></p>
                            </li>
                        </ul>
                    </dd>
                </dl>
                            
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネルの場合</dt>
                    <dd>
                   	<p>サーバーパネルへとログイン後、「アカウント &gt; サーバー情報」へお進み下さい。<br>「サーバー番号」の欄にてご確認いただけます。</p>
                    </dd>
                </dl>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_server.php" class="btn btn_gray">「サーバー仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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