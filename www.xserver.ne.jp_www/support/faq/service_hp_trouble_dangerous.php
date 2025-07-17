<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>検索サイトの検索結果で自分のホームページが危険なサイトだと表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の理由により、お客様のサーバーへ不正にアクセスが行われた可能性があります。　1.お客様がお使いのPCがウィルスに感染し、FTPパスワードが流出した　2.お客様が運用されているプログラムのセキュリティホールを悪用され…">

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
            
                <h3 class="sub-ttl">検索サイトの検索結果で自分のホームページが危険なサイトだと表示されます。</h3>

                <p>以下の理由により、お客様のサーバーへ不正にアクセスが行われた可能性があります。</p>
                <ol class="ol">
                    <li>お客様がお使いのPCがウィルスに感染し、FTPパスワードが流出した</li>
                    <li>お客様が運用されているプログラムのセキュリティホールを悪用され、不正アクセスが行われた</li>
                    <li>FTPパスワードが単純なもので設定されており、推測され不正アクセスが行われた</li>
                </ol>
                <dl class="border border_gray">
                    <dt class="mb10">【不正アクセスの際の対応】</dt>
                    <dd>
                        <p>不正アクセスが行われた場合、お客様のサーバーアカウントから迷惑メールの配信や不正なプログラムを設置される恐れがあり、そのままにされますと、お客様のサーバーアカウントだけでなく、サーバーをご利用いただいている他のお客様に影響する可能性があります。</p>
                        <p>下記の手順でウィルスチェック及びサーバーアカウントの初期化を行ってください。</p>
                        <ol class="ol ol_margin">
                            <li>お客様がお使いのPCにてウィルスチェック、ならびにWindows Updateなどソフトウェアのバージョンアップを行ってください。</li>
                            <li>
                                <p class="mb0">サーバーパネル内「パスワード変更」よりサーバーIDのパスワードを変更してください。</p>
                                <p class="note">※サーバーIDのパスワードとメインFTPアカウントのパスワードは同一のため、メインFTPアカウントのパスワードも同時に変更されます。</p>
                            </li>
                            <li>サーバーパネル内「バックアップ」やFTPソフトにて、必要なサイトデータ・メールデータを全て保存してください。</li>
                            <li>サーバーパネルよりドメイン設定を全て削除してください。またFTPソフトにて、初期ドメイン上の全てのファイルを削除してください。</li>
                            <li>サーバーパネルより再度ドメイン設定をし、サーバーパネル内「バックアップ」やFTPソフトにて、ホームページの各種ファイルを復元・アップロードしてください。<br>
                                またメールをご利用いただいている場合はメールアカウントの設定も必ず行ってください。</li>
                        </ol>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10">【不正アクセスを防ぐために】</dt>
                    <dd>
                        <p>不正アクセスは、セキュリティの脆弱性を突かれることにより発生します。<br>
                        そのためサイトを運営する際には、お客様ご自身でもセキュリティに対する意識を持って対策を行っていただく必要があります。</p>
                        <p>不正アクセスのリスクを軽減するためには、下記のようなご対応をお願いいたします。</p>
                        <ol class="ol mb0">
                            <li>お使いのPCのウィルスチェックを定期的に行う</li>
                            <li>ご利用いただくプログラムは、必ず最新版のプログラムをご利用いただく</li>
                            <li>FTPなどのパスワードは必ず推測されにくい文字列で設定を行っていただく</li>
                        </ol>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_trouble.php" class="btn btn_gray">「Webサイト・WordPressのトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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