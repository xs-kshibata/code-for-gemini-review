<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>特定のメールアドレスから送られてくるメールを受信拒否したい。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネルの「メールの振り分け」で設定が可能です。">

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
            
                <h3 class="sub-ttl">特定のメールアドレスから送られてくるメールを受信拒否したい。</h3>

                <p>サーバーパネルの「メールの振り分け」で設定が可能です。</p>
                <table class="table table_use-caption" summary="特定のメールアドレスを受信拒否する設定">
                    <caption>特定のメールアドレスを受信拒否する設定</caption>
                    <tbody>
                        <tr>
                            <th scope="row">条件1（キーワード）</th>
                            <td>拒否したいメールアドレス</td>
                        </tr>
                        <tr>
                            <th scope="row">条件1（場所）</th>
                            <td>差出人</td>
                        </tr>
                        <tr>
                            <th scope="row">条件1（一致）</th>
                            <td>内容を含む</td>
                        </tr>
                        <tr>
                            <th scope="row">処理方法（宛先）</th>
                            <td>削除</td>
                        </tr>
                        <tr>
                            <th scope="row">処理方法（配送方法）</th>
                            <td>転送</td>
                        </tr>
                    </tbody>
                </table>
                <p>上記のように設定を追加してください。</p>

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