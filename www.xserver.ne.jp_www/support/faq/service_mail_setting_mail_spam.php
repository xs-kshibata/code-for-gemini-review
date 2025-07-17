<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>迷惑メールの対策方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー側の設定やメールソフト側の設定など、複数の設定を組み合わせることで、迷惑メールの受信数を削減することが可能です。">

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
            
                <h3 class="sub-ttl">迷惑メールの対策方法を教えてください。</h3>

                <p>サーバー側の設定やメールソフト側の設定など、複数の設定を組み合わせることで、迷惑メールの受信数を削減することが可能です。<br>
                    具体的な対処方法については、以下をご確認ください。</p>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>サーバーパネルの「迷惑メールフィルタ設定」を設定する</dt>
                    <dd>
                        「迷惑メールフィルタ設定」では、「標準スパムフィルタ」「高性能スパムフィルタ」の設定が可能です。<br>
                        上記を設定することにより、迷惑メールと判定されたメールには、件名の先頭に[SPAM]という文字列が付加されます。<br>
                        また、受信した迷惑メールをWEBメール内の「迷惑メールフォルダ」や「ゴミ箱」へ振り分けることも可能です。<br><br>
                        既に設定をされている場合は、必要に応じて「ブラックリスト設定」をご活用ください。<br><br>
                        詳細な設定方法は、「<a href="../../manual/man_mail_spam_setting.php">迷惑メールフィルタ設定</a>」をご確認ください。
                    </dd>
                </dl>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>サーバーパネルの「メールの振り分け」を設定する</dt>
                    <dd>
                        「メールの振り分け」では、特定のキーワードでフィルタリング設定をすることが可能です。<br>
                        迷惑メール内でよく見られるワードや差出人を指定し、フィルタリング設定をしてください。<br><br>
                        詳細な設定方法は「<a href="../../manual/man_mail_sorting.php">メールの振り分け設定</a>」をご確認ください。
                    </dd>
                </dl>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>ご利用のメールソフト側でフィルタリング機能を設定する</dt>
                    <dd>
                        サーバー側の設定を行っても迷惑メールが減少しない場合は、ご利用のメールソフト側でも迷惑メールフィルタ機能を設定してください。<br>
                        具体的な設定方法は、メールソフトの提供元へご確認ください。
                    </dd>
                </dl>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>WEBサイト上にメールアドレスをテキスト形式で掲載しない</dt>
                    <dd>
                        WEBサイト上にメールアドレスをテキスト形式でそのまま掲載すると、第三者により収集され、スパムメールの標的になるおそれがあります。<br>
                        また、<pre class="code">&lt;a href=&quot;mailto:info@example.com&quot;&gt;お問い合わせ&lt;/a&gt;</pre>のような「mailtoタグ」の利用を避けることも迷惑メール対策として有効です。
                    </dd>
                </dl>
                               
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