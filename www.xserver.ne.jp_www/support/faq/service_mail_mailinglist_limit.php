<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メーリングリストを作成できる件数に上限はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい。ご契約のプランに応じて、作成可能な件数に上限を設けております。詳細は、関連マニュアルをご参照ください。">

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
            
                <h3 class="sub-ttl">メーリングリストを作成できる件数に上限はありますか？</h3>

                <p>はい、契約されているサーバープランに応じて、作成可能な件数に上限を設けています。<br>
                プランごとに作成できるメーリングリストの件数は以下です。</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>プラン</th>
                        <th>作成件数</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>スタンダードプラン</td>
                        <td>20件</td>
                    </tr>
                    <tr>
                        <td>プレミアムプラン</td>
                        <td>30件</td>
                    </tr>
                    <tr>
                        <td>ビジネスプラン</td>
                        <td>40件</td>
                    </tr>
                    </tbody>
                </table>
                
                <strong class="yellow">関連マニュアル：</strong>
                <a href="https://www.xserver.ne.jp/manual/man_mail_mailinglist.php">メーリングリストについて</a>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailinglist.php" class="btn btn_gray">「メーリングリスト機能」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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