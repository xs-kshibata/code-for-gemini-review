<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「ご希望のメールアドレスは過去に登録されたことがあるため、登録することはできません。」と表示され、申し込みができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="過去にご登録されたメールアドレスで新たにXServerアカウントを発行することはできません。既にご契約いただいたXServerアカウント内から追加で申し込むことや、別のメールアドレスで新規に申し込むことなどをご検討ください。">

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
            
                <h3 class="sub-ttl">「ご希望のメールアドレスは過去に登録されたことがあるため、登録することはできません。」と表示され、申し込みができません。</h3>
                
                <p>
                    過去にご登録されたメールアドレスで新たにXServerアカウントを発行することはできません。<br>
                    下記いずれかのお申し込みをご検討ください。
                </p>
                <ul class="list list_arrow-right">
                    <li>既にご契約いただいたXServerアカウント内、エックスサーバー契約管理ページよりお申し込みを行っていただき、1つのXServerアカウントIDで複数の契約を管理する</li>
                    <li>別のメールアドレスを用いて新規のお申し込みを進めていただく</li>
                    <li>既にご契約いただいたXServerアカウントのご登録メールアドレスを別のメールアドレスに変更し、新規のお申し込みをしていただく</li>
                </ul>

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_new_trouble.php" class="btn btn_gray">「契約・料金のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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