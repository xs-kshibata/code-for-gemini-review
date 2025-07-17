<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転代行の申し込み時に必要な情報を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「移転用FTP情報」として、サーバー移転代行のお申し込みフォームより、以下の情報をお知らせいただきます。▼お知らせいただく情報・対象URL・ドメイン名・FTPホスト名・FTPユーザー名・FTPパスワード・ポート番号※FTP情報が不明な場合は移転元のサービスへご確…">

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
            
                <h3 class="sub-ttl">サーバー移転代行の申し込み時に必要な情報を教えてください。</h3>
                
                <p>「移転用FTP情報」として、サーバー移転代行のお申し込みフォームより、以下の情報をお知らせいただきます。</p>

                <dl class="border border_gray">
                   <dt class="mb10"><i class="ico ico_square-fill"></i>お知らせいただく情報</dt>
                       <dd>
                          <ul class="ul">
                          <li>対象URL</li>
                          <li>ドメイン名</li>
                          <li>FTPホスト名</li>
                          <li>FTPユーザー名</li>
                          <li>FTPパスワード</li>
                          <li>ポート番号</li>
                          </ul>
                          <P>※FTP情報が不明な場合は移転元のサービスへご確認ください。</P>
                       </dd>
                </dl>

                <p>お申し込みの手順については「<a href="../../manual/man_order_server_daiko.php">サーバー移転代行</a>」をご確認ください。</p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_support_server_daiko.php" class="btn btn_gray">「サーバー移転代行について」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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