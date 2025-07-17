<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サブFTPアカウントを設定しないとFTPは使えないのでしょうか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="いいえ、初期のアカウントのみでご利用いただくことも可能です。　・特定のフォルダ（ディレクトリ）へアクセスを制限したい　・複数の管理者にそれぞれアカウントを作成したい　上記のような場合にサブFTPアカウントをご利用ください。">

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
            
                <h3 class="sub-ttl">サブFTPアカウントを設定しないとFTPは使えないのでしょうか？</h3>

                <p>いいえ、初期のアカウントのみでご利用いただくことも可能です。</p>
                <ul class="list list_arrow-right">
                    <li>特定のフォルダ（ディレクトリ）へアクセスを制限したい</li>
                    <li>複数の管理者にそれぞれアカウントを作成したい</li>
                </ul>
                <p>上記のような場合にサブFTPアカウントをご利用ください。</p>
                <p>詳細は「<a href="../../manual/man_ftp_add.php">サブFTPアカウントの追加</a>」をご覧ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10">（例）example.com ドメインのサイトだけを編集できるように設定したい</dt>
                    <dd>
                        <p class="mb0">サーバーパネル「サブFTPアカウント設定」にて(/home/サーバーID)/example.com　を接続先ディレクトリに指定したサブFTPアカウントを作成します。<br>
                        追加したサブFTPアカウントは example.com 以下へのアクセスに限定するFTPアカウントとなり、アカウント名と、アカウント作成時にお決めいただいたパスワードでサーバーに接続することができます。</p>
                    </dd>
                </dl>

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