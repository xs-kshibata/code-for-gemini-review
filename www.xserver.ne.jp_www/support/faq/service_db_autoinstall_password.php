<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>簡単インストールを行ったプログラムのデータベースのパスワードを確認する方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="プログラム上の設定ファイルの内容から該当プログラム（該当ドメイン）で利用しているMySQLデータベースのパスワードなどを確認できます。　主なプログラムの設定ファイルと設置先　・WordPress…WordPressのインストールディレクトリ…">

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
            
                <h3 class="sub-ttl">簡単インストールを行ったプログラムのデータベースのパスワードを確認する方法を教えてください。</h3>

                <p>プログラム上の設定ファイルの内容から該当プログラム（該当ドメイン）で利用しているMySQLデータベースのパスワードなどを確認できます。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>主なプログラムの設定ファイルと設置先</dt>
                    <dd>
                        <ul class="list list_arrow-right mb0">
                            <li>WordPress<br>
                                WordPressのインストールディレクトリ/wp-config.php </li>
                            <li>XOOPS Cube<br>
                                XOOPS Cubeのインストールディレクトリ/mainfile.php </li>
                            <li>Movable Type<br>
                                Movable Typeのインストールディレクトリ/mt-config.cgi </li>
                        </ul>
                    </dd>
                </dl>
                <p class="note">※その他プログラムにおいてもMySQLを利用する場合は設定ファイルに記載があります。</p>                            

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_db.php" class="btn btn_gray">「データベース」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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