<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>データベースサーバーへ接続が出来ません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="MySQL5.0、MySQL5.5、MySQL5.7のいずれかにてPHPや個別プログラム等でデータベースサーバーへの接続が失敗する場合、データベースサーバー（ホスト）指定がlocalhostと指定されている可能性があります。　・MySQL5.0をご使用の場合…">

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
            
                <h3 class="sub-ttl">データベースサーバーへ接続が出来ません。</h3>

                <p>MySQL5.0、MySQL5.5、MySQL5.7のいずれかにてPHPや個別プログラム等でデータベースサーバーへの接続が失敗する場合、データベースサーバー（ホスト）指定がlocalhostと指定されている可能性があります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>MySQL5.0をご使用の場合</dt>
                    <dd>
                        <p class="mb0">MySQL5.0では、接続先のホストは「mysql○○.xserver.jp」といったホスト名となります。<br>
                        サーバーパネルの「MySQL設定」→「MySQLの一覧」ページ下部のMySQL5.0情報よりご確認下さい。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>MySQL5.5をご使用の場合</dt>
                    <dd>
                        <p class="mb0">MySQL5.5では、接続先のホストは「mysql○○a.xserver.jp」(サーバー番号がsv855.xserver.jp 以前)<br>
                        または「mysql○○.xserver.jp」(サーバー番号がsv856.xserver.jp 以降)といったホスト名となります。<br>
                        サーバーパネルの「MySQL設定」→「MySQLの一覧」ページ下部のMySQL5.5情報よりご確認下さい。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>MySQL5.7をご使用の場合</dt>
                    <dd>
                        <p class="mb0">MySQL5.7では、接続先のホストは「mysql○○.xserver.jp」といったホスト名となります。<br>
                        サーバーパネルの「MySQL設定」→「MySQLの一覧」ページ下部のMySQL5.7情報よりご確認下さい。</p>
                    </dd>
                </dl>
				<dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>MariaDB 10.5をご使用の場合</dt>
                    <dd>
                        <p class="mb0">MariaDB 10.5では、接続先のホストは「localhost」といったホスト名となります。<br>
                        サーバーパネルの「MySQL設定」→「MySQLの一覧」ページ下部の情報よりご確認下さい。</p>
                    </dd>
                </dl>
                
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