<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Maildirについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーアカウントのホームディレクトリ直下に自動生成されるシステムフォルダ「Maildir」に関するご案内です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">Maildirについて</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">「Maildir」フォルダとは</a></li>
                    <li><a href="#link-b">「Maildir」フォルダのローテーションについて</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">「Maildir」フォルダとは</h4>
                    <div class="section_body">
                    
                        <p>「Maildir」フォルダは、サーバーアカウントのホームディレクトリ直下に自動生成されるシステムフォルダのことで、サーバーご利用中に、例外的に発生した一部のシステムメールやエラーメールが保存されます。</p>
                        <p>下記の条件に該当した場合に「Maildir」フォルダが自動生成され、データが保存されます。</p>
                        <div class="border border_gray">
                            <ul class="ul ul_list_margin mb0">
                                <li>CGI、PHPプログラムからのメール送信に失敗した際、エラーメールの受け取りアドレスが指定されていない場合</li>
                                <li>CRONにて実行出力を破棄しておらず、コマンド実行結果メールの通知先メールアドレスが未指定、もしくは無効なメールアドレスである場合</li>
                            </ul>
                        </div>
                        <p class="note">※「Maildir」フォルダは、上記の条件下で初めて生成されるものであり、初期状態では存在しないものです。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">「Maildir」フォルダのローテーションについて</h4>
                    <div class="section_body">
                    
                        <p>「Maildir」に保存されたメールデータは、1週間ごとにローテーションされ、およそ4週間後にデータが削除されます。</p>
                        <div class="border border_gray">
                            <p class="mb0">
                            <i class="ico ico_circle base-color"></i><em class="font-bold">1週間後</em>：「Maildir」から「Maildir.1」へ名前変更<br>
                            　　↓<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">2週間後</em>：「Maildir.1」から「Maildir.2」へ名前変更<br>
                            　　↓<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">3週間後</em>：「Maildir.2」から「Maildir.3」へ名前変更<br>
                            　　↓<br>
                            <i class="ico ico_circle base-color"></i><em class="font-bold">4週間後</em>：「Maildir.3」のデータを削除
                            </p>
                        </div>
                        <p class="note">※本処理は毎週日曜日のAM3:00頃実施されます。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                
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
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>