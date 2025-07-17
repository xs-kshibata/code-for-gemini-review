<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>最短利用期間はありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="新規契約・新規お申し込みの場合は、3ヶ月よりご契約が可能です。選択できるご契約期間は3ヶ月、6ヶ月、12ヶ月、24ヶ月、36ヶ月です。契約更新・手動更新の場合は、3ヶ月より更新が可能です。自動更新の場合は、1ヶ月より更新が可能です。">

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
            
                <h3 class="sub-ttl">最短利用期間はありますか？</h3>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>新規契約</dt>
                    <dd>新規お申し込みの場合は、3ヶ月よりご契約が可能です。<br>
                        選択できるご契約期間は3ヶ月、6ヶ月、12ヶ月、24ヶ月、36ヶ月です。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>契約更新</dt>
                    <dd>手動更新の場合は、3ヶ月より更新が可能です。<br>
                        自動更新の場合は、1ヶ月より更新が可能です。</dd>
                </dl>
                
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