<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールが受信できません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下の内容をご確認ください。　1.メールアカウントのドメイン名は取得されているか。　2.メールアカウントのドメイン名のネームサーバーはエックスサーバーに設定されているか。また、設定してから24時間以上経過しているか。　3.メールアカウントは…">

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
            
                <h3 class="sub-ttl">メールが受信できません。</h3>

                <p>メールの受信ができない場合、まずは<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/" target="_blank">WEBメール</a>にログインをしていただき、受信箱および迷惑メールフォルダにメールが届いているかご確認ください。</p>
                 <dl class="dl">
                   <dt><i class="ico ico_square-fill"></i>WEBメールに届いている場合</dt>
                   <P>メールソフトの設定や利用環境（セキュリティソフトなど）が原因で、メールの受信ができない可能性があります。<br>
                   ご利用のメールソフトの設定やパソコンの設定をご確認ください。</P>
                <p>※設定を変更されていない場合でも、自動アップデートにより意図せず設定が変わる場合があります。</p>
                 <p class="m0">
                    <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_mail_setting.php">メールソフトの設定</a>
                </p>  
                </dl>
                   <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>WEBメールに届いていない場合</dt>
                 <p>WEBメール上でもメールの受信ができていない場合は、以下をご確認ください。</p>
                  <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【メールアカウントの容量に余裕があるか】</strong>
                           <p>メールアカウントの作成時に設定した容量を超えるとメールの受信ができなくなります。</p>
                           <p>サーバーパネルの「メールアカウント設定」より、メールアカウントの容量をご確認のうえ、必要に応じて容量の変更をおこなってください。</P>   
                    <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_mail_change_capacity.php">メールアカウントの容量変更</a></p>               
                    <li>   
                    <p class="m0">            
                    <strong>【メールアカウント設定の「転送設定」で、メールボックスに残さない設定になっていないか】</strong>
                     <P>メールアカウント設定の転送設定で、受信したメールをメールボックスに「残さない」設定をされている場合は、メールボックスには保存されません。</p>
                     <p>設定を「残す」に変更していただき、正常にメールが受信されるかどうかをご確認ください。</p>
                 <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_mail_transfer.php">メールの転送設定</a></p>
                    </dl>
                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>上記で解決ができない場合</dt>
                 <p>上記を確認しても解決しない場合は、以下の情報をお書き添えのうえ、「<a href="../../support/support.php">サポート</a>」のメールのお問い合わせフォームよりお問い合わせください。</p>
                 <br>
                            ・エラーメールが確認できる場合は、その内容を全文お知らせください。<br>
                            ・エラーメール等が確認できない場合は、以下詳細を明記しお知らせください。<br>
                            --------------------------------------------------<br>
                            送信元（FROM）：<br>
                            　　↓<br>
                            あて先（TO）：<br>
                            <br>
                            送信日時：20●●/●●/●●　●●：●●<br>
                            --------------------------------------------------<br>
                            ※可能な限り直近の情報をお知らせください。<br>
                            ※送信日時は必ず分単位でご記載ください。<br>
                            <br>
                        </p>
                </dl>
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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