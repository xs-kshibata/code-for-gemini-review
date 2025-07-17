<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「使用できない組織種別」と表示され、ドメインの取得申請ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「組織名」に【組織種別】が入力されていない、または入力が誤っている場合に表示されるエラーです。「組織名」に【組織種別】を含めた正式名称を入力してください。　例）・組織種別…株式会社　・組織名…エックスサーバー株式会社…">

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
            
                <h3 class="sub-ttl">「使用できない組織種別」と表示され、ドメインの取得申請ができません。</h3>
                
                <p>「組織名」に【組織種別】が入力されていない、または入力が誤っている場合に表示されるエラーです。<br>
                    「組織名」に【組織種別】を含めた正式名称を入力してください。</p>
                <table class="table table_use-caption">
                    <caption>（例）「株式会社」の場合</caption>
                    <tbody>
                    <tr>
                        <th>組織種別</th>
                        <td>株式会社
                        </td>
                    </tr>
                    <tr>
                        <th>組織名</th>
                        <td>エックスサーバー株式会社
                        </td>
                    </tr>
                    <tr>
                        <th>組織名（かな）</th>
                        <td>えっくすさーばーかぶしきがいしゃ
                        </td>
                    </tr>

                    </tbody>
                </table>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_domain_take.php" class="btn btn_gray">「ドメイン新規取得」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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