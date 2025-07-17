<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ネームサーバーを切り替える前に動作確認する方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネルの「動作確認URL」から動作確認URL設定の追加、またはご利用のPC端末におけるhostsファイルを編集してください。詳細はマニュアルページをご覧ください。">

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

                <h3 class="sub-ttl">ネームサーバーを切り替える前に動作確認する方法を教えてください。</h3>

                <p>下記の方法にて動作確認が可能です。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>静的サイトの場合</dt>
                    <dd>サーバーパネルの「動作確認URL」から動作確認URL設定の追加をし、動作確認アドレスで動作をご確認ください。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WordPressなどの動的サイトの場合</dt>
                    <dd>ご利用のPC端末におけるhostsファイルを編集する方法で動作をご確認ください。<br>
                        詳細な手順は、マニュアル「<a href="../../manual/man_domain_checkproxy.php#link-b">WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>」をご参照ください。</dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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