<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>初期フォルダについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバー契約時、ドメイン設定の追加時に自動的に生成されるフォルダの一覧に関するご案内です。ファイルのアップロード先についても記載しています。">

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
            
                <h3 class="sub-ttl">初期フォルダについて</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">初期フォルダについて</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">初期フォルダについて</h4>
                    <div class="section_body">
                        <p>サーバーアカウント設定完了時、初期状態では以下フォルダが自動作成されます。</p>
                        <table class="table table_use-caption">
                            <caption>サーバーアカウント初期設定時に作成されるフォルダの一覧</caption>
                            <tbody>
                                <tr>
                                    <th>サーバーID.xsrv.jp</th>
                                    <td>初期ドメイン（サーバーID.xsrv.jp）の設定ファイルが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>ssl</th>
                                    <td>SSLに関する各種設定ファイルが保存されます。</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p>また、初期ドメイン（サーバーID.xsrv.jp）フォルダ内に作成されるフォルダは以下となります。</p>
                        <p class="note">※独自ドメイン設定の追加時も同様のフォルダが自動作成されます。</p>
                        
                        <table class="table table_use-caption">
                            <caption>初期ドメインおよびドメイン設定の追加時に作成されるフォルダの一覧</caption>
                            <tbody>
                                <tr>
                                    <th>対象ドメイン名/.spamassassin</th>
                                    <td>迷惑メールフィルタ設定についてのファイルが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/autoreply</th>
                                    <td>自動応答設定についてのファイルが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/htpasswd</th>
                                    <td>Basic認証のパスワード設定ファイルが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/log</th>
                                    <td>アクセスログが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/mail</th>
                                    <td>メールデータが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/public_html</th>
                                    <td>サイトデータのアップロード先です。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/script</th>
                                    <td>cgiツールなどの各種スクリプトが保存されます。</td>
                                </tr>
                                <tr>
                                    <th>対象ドメイン名/xserver_php</th>
                                    <td>php.ini設定のファイルが保存されます。</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                            <div class="msg_body">
                                <p>初期フォルダは削除しないように注意してください。<br>
                                誤って削除されてしまった場合は、<a href="man_domain_reset.php">ドメイン設定の初期化</a>よりファイル・フォルダの復元が可能です。</p>
                            </div>
                        </aside>
                        
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