<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ファイルをアップロードしましたが、ホームページが表示されません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「Webサイトトラブル診断」を利用する ファイルをアップロードしても、ホームページが表示されない場合は、「サポート」の「Webサイトトラブル診断」をご利用ください。ホームページで起きているトラブルの原因や解決策を確認することができます。We…">

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
            
                <h3 class="sub-ttl">ファイルをアップロードしましたが、ホームページが表示されません。</h3>
                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>「Webサイトトラブル診断」を利用する</dt>
                  <dd>
                 <p>ファイルをアップロードしても、ホームページが表示されない場合は、「<a href="../support.php">サポート</a>」の「Webサイトトラブル診断」をご利用ください。<br>
                 <p>ホームページで起きているトラブルの原因や解決策を確認することができます。</p>
                </dl>
                </dd>
                <br>             
                <p>ホームページが表示されない場合に考えられる要因については、以下をご確認ください。</p>
                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>対象URLのドメイン名のネームサーバー（DNS）の確認</dt>
                  <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【該当ドメイン名のネームサーバー（DNS）が、エックスサーバー指定のものとなっているか】</strong>
                           <p>ネームサーバーがエックスサーバー指定のものに設定されていない場合は、ファイルをアップロードしても、ホームページのデータが表示されません。</p>
                              <p>エックスサーバーのネームサーバーについては、<a href="../../manual/man_domain_namesever_setting.php">「ネームサーバーの設定」</a>のマニュアルをご確認ください。</p> 
                           <li>
                                <strong>【ネームサーバー（DNS）変更後、24時間以上経過しているか】</strong>
                     <P>ネームサーバー変更後、反映までには、数時間から最大24時間程度かかります。<br>
                     24時間以上経過していない場合は、時間を置いてホームページの表示をご確認ください。</P>
                 </dl>
                 <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>ホームページデータのアップロード場所の確認</dt>
                 <p>エックスサーバーでは、ホームページデータを「ドメイン名/public_html」のフォルダにアップロードしていただく必要があります。<br>
                 上記のフォルダにデータがアップロードされているかをご確認ください。</P>
                 <p>FTP接続直後のフォルダ（ホームディレクトリ）などへホームページデータをアップロードしてもホームページは表示されません。</p>
                </dl>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_ftp_trouble.php" class="btn btn_gray">「ファイル転送(FTP)のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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