<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ホームページのファイルはどこへアップロードすればいいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="FTPソフトやファイルマネージャを使用し、サーバーに接続を行ってください。接続が完了しますと、サーバーに設定しているドメイン名のフォルダが表示されます。アップロードを行いたいドメイン名のフォルダを選択されますと、[ public_html ]…">

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
            
                <h3 class="sub-ttl">ホームページのファイルはどこへアップロードすればいいですか？</h3>

                <p>FTPソフトやファイルマネージャを使用し、サーバーに接続を行ってください。<br>
                接続が完了しますと、サーバーに設定しているドメイン名のフォルダが表示されます。<br>
                アップロードを行いたいドメイン名のフォルダを選択されますと、[ public_html ]というフォルダが表示されます。<br>
                この[ public_html ]内に、インターネット上で公開するファイルをアップロードしてください。</p>
                <p>また、トップページのファイル名は「index.html」となります。</p>
                <p>例えば、お客様のドメインが example.com　の場合、サーバー内のファイルとホームページURLの関係は</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="w50per">サーバー内のファイルの位置</th>
                            <th>ホームページURL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>example.com/public_html/abc.html</td>
                            <td>http://example.com/abc.html</td>
                        </tr>
                        <tr>
                            <td>example.com/public_html/aaa.html</td>
                            <td>http:/example.com/aaa.html</td>
                        </tr>
                        <tr>
                            <td>example.com/public_html/index.html</td>
                            <td>http://example.com/</td>
                        </tr>
                    </tbody>
                </table>
                <p>という関係性になります。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_setting.php" class="btn btn_gray">「ファイル転送(FTP)の設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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