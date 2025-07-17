<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールでSSL（暗号化）通信を行いたい。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールソフトへ下記のように設定を行ってください。　・受信メールサーバー…sv***.xserver.jp(※)　・送信メールサーバー…sv***.xserver.jp(※)　・POPポート番号…995　・IMAPポート番号…993　・SMTPポート番号…465　「SSLを使用」や…">

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
            
                <h3 class="sub-ttl">メールでSSL（暗号化）通信を行いたい。</h3>

                <p>メールソフトへ下記のように設定を行ってください。</p>
                <table class="table" summary="SSL化設定">
                    <tbody>
                        <tr>
                            <th scope="row">受信メールサーバー</th>
                            <td>sv***.xserver.jp(※)</td>
                        </tr>
                        <tr>
                            <th scope="row">送信メールサーバー</th>
                            <td>sv***.xserver.jp(※)</td>
                        </tr>
                        <tr>
                            <th scope="row">POPポート番号</th>
                            <td>995</td>
                        </tr>
                        <tr>
                            <th scope="row">IMAPポート番号</th>
                            <td>993</td>
                        </tr>
                        <tr>
                            <th scope="row">SMTPポート番号</th>
                            <td>465</td>
                        </tr>
                    </tbody>
                </table>
                <p>「SSLを使用」や「セキュリティで保護された接続(SSL)が必要」などの項目にチェックを入れます。</p>
                <p class="note">※「sv***」部分はお客様がご利用のサーバー番号です。<br>
                サーバーパネル「サーバー情報」の「ホスト名」をご確認ください。</p>
                <p class="note">※上記利用にあたりまして、追加のSSL契約は不要です。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">「メールの設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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