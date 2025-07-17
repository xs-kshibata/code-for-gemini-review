<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「一定数を超えると追加することができません」と表示され、メールアカウントの追加ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールアカウントの作成数は無制限となっていますが、メールアドレスの悪用防止のため、一定数を超えると制限がかかります。引き続きメールアカウントの追加を希望される場合は、サポートにて制限を緩和することが可能です。制限の緩和を希望される場合...">
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
            
                <h3 class="sub-ttl">「一定数を超えると追加することができません」と表示され、メールアカウントの追加ができません。</h3>

                <p>
                    メールアカウントの作成数は無制限となっていますが、メールアドレス悪用防止などのため、一定数を超えると制限がかかります。<br>
                    引き続きメールアカウントの追加を希望される場合は、サポートにて制限を緩和することが可能です。<br>
                    制限の緩和を希望される場合は、以下をご記載のうえ「<a href="../../support/support.php">サポート</a>」よりメールにてお問い合わせください。
                </p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メールでお送りいただく情報</dt>
                    <dd>
                        <ul class="ul mb0">
                            <li>サーバーID：</li>
                            <li>今後の追加希望数：</li>
                            <li>メールアドレスの利用用途：</li>
                        </ul>
                    </dd>
                </dl>

                <p>※一度に1,000個を越える緩和はできません。</p>
                               
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