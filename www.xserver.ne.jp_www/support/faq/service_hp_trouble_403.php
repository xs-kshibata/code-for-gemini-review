<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「403 Forbidden」というエラーが表示されてホームページが見られません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="403 Forbiddenエラーは、index.htmlなどのデフォルトドキュメントが存在しない場合や、アクセス権限がない場合に発生するエラーです。詳細は以下をご確認ください。サーバーの契約が有効であるかを確認する 利用期限の超過や不正ア…">

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
            
                <h3 class="sub-ttl">「403 Forbidden」というエラーが表示されてホームページが見られません。</h3>

                <p>403 Forbiddenエラーは、index.htmlなどのデフォルトドキュメントが存在しない場合や、アクセス権限がない場合に発生するエラーです。</p>
                <p>詳細は以下をご確認ください。</p>
                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>サーバーの契約が有効であるかを確認する</dt>
                 <p>利用期限の超過や不正アクセス等でサーバーが凍結されていないかを確認してください。<br>
                 上記に該当する場合は、当サポートにてWEBサイトにアクセスができないように制限を設けています。</p>

                  <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【サーバーの利用期限日が超過し凍結されている場合】</strong>
                           <p>XServerアカウントの「料金支払い」よりサーバーの更新料金のお支払い手続きを行ってください。<br>
                             サーバーの復旧後、Webサイトのアクセスが可能となります。</P>   
                            <li>
                                <strong>【不正アクセスなどでサーバーが凍結されている場合】</strong>
                     <P>ご登録メールアドレス宛に、不正アクセスに関するメールが送信されています。<br>
                    メールの案内に沿って、サーバーの凍結解除を行ってください。</P>
                 </dl>
                 <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>「index.html」「index.htm」のドキュメントがアップロードされているかを確認する</dt>
                 <p>「ドメイン名/public_html」のフォルダに「index.html」や「index.htm」のデフォルトドキュメントがアップロードされていない場合は、Ｗebサイトにアクセスできません。</p>
                 <p>ファイルマネージャやFTPソフトで、該当ファイルが削除されていないかどうかをご確認ください。</P>
                </dl>
                <dl class="dl">
                   <dt><i class="ico ico_square-fill"></i>「public_html」（または上位フォルダ）が削除されていないかを確認する</dt>
                   <P>Webサイトのデータは「ドメイン名/public_html」にアップロードする必要があります。<br>
                   そのため、「public_html」（または上位フォルダ）が削除されている場合は、Webサイトにアクセスができません。</P>
                <p>ファイルマネージャやFTPソフトで、該当ファイルが削除されていないかどうかをご確認ください。</p>   
                </dl>
                    <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>特定のIPアドレスからアクセスを拒否していないかを確認する</dt>
                <p>アクセスされているIPアドレスが拒否されている場合は、Webサイトにアクセスができません。<br>
            サーバーパネルの「アクセス拒否設定」より該当のIPアドレスが追加されていないかをご確認ください。</p>
            <p>また、「.htaccess」を用いて、アクセスを否するIPアドレスを設定していないかもご確認ください。</p>
            </dl>
            <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>パーミッションに誤りがないかを確認する</dt>
                    <p>アクセスするフォルダのパーミッションが「700」や「000」で設定されている場合は、Webサイトへのアクセスができません。</p>
                <p>ファイルマネージャやFTPソフトでパーミッションをご確認のうえ、「755」または「711」へ変更してください。</p>
             </dl>
             <dl class="dl">
            <dt><i class="ico ico_square-fill"></i>.htaccessの記述内容が正しいかどうかを確認する</dt>
             <P>.htaccessの記述内容に誤りがある場合は、Webサイトへのアクセスができません。</p>
             <p>サーバーパネルの「.htaccess」より記述内容に誤りがないかをご確認ください。</P>
            </dl>
            <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>WAF設定を確認する</dt>
                    <P>WAF設定をしている場合、WAF設定の影響により不正アクセスと判断され拒否されている可能性があります。</P>
                <p>サーバーパネルの「WAF設定」より、設定を「OFF」にしていただき解消するかをご確認ください。</P>
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