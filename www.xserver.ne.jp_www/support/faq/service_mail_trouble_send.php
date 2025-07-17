<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールが送信できません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="まずは、「WEBメール」にログインをしていただきメールの送信が可能かどうかをご確認ください。">

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
            
                <h3 class="sub-ttl">メールが送信できません。</h3>

                <p>まずは、<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/" target="_blank">WEBメール</a>にログインをしていただきメールの送信が可能かどうかをご確認ください。</p>
                <p><strong>【WEBメールで送信ができる場合】</strong></p>
                <p>メールソフトやご利用のパソコンのセキュリティ設定が原因で、送信ができない可能性があります。<br>
                以下をご確認ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ポート番号を確認</dt>
                    <dd>メールソフトの設定で、送信ポート（SMTPポート）が「25」の場合は　「587」に変更することで送信可能になります。<br>
                        <p class="mb0"><strong class="yellow">マニュアル：</strong><a href="../../manual/man_mail_op25b.php">OP25Bについて</a></p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メールソフトの送信設定を確認</dt>
                    <dd>
                        <p>当サービスでは、メール送信時の認証方式として送信の際にID/パスワードを確認する「SMTP AUTH」を採用しており、メールソフトの設定に誤りがあると、メール送信に失敗いたします。<br>
                        設定を変更されていない場合でも、自動アップデートが行われて変わる場合があります。<br>
                        以下のマニュアルをご参照の上、設定を再度ご確認ください。</p>
                        <p><strong class="yellow">マニュアル：</strong><a href="../..//manual/man_mail_setting.php">メールソフトの設定</a></p>
                    </dd>
                </dl>
                <p><strong>【WEBメールでも送信できない】</strong></p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>国外アクセス制限設定を確認</dt>
                    <dd>
                        <p>当サービスでは、サーバーのセキュリティ・安定性を高めるため<br>
                        国外IPアドレスからのSMTP認証によるメールの送信を制限いたしております。
                        </p>
                        <p>
                        国外にご在住等、国外IPアドレスからのSMTP認証が必要なお客様におきましては、サーバーパネルで提供中の｢SMTP認証の国外アクセス制限設定｣にて制限の解除を行ってください。
                        </p>
                        <strong class="yellow">マニュアル：</strong><a href="../../manual/man_mail_jpcheck.php">SMTP認証の国外アクセス制限設定</a>
                    </dd>
                </dl>
                <dl class="border border_gray" style="background: none; #0e4579 solid;">
                    <dt class="mb10" style="color: #0e4579;"><i class="ico ico_square-fill" style="color: #0e4579;"></i>解決しない場合は・・・</dt>
                    <dd>
                        <p>解決しない場合は状況をお調べしますので、<a href="../support.php">サポートまでお問い合わせ</a>ください。<br>
                            お問い合わせの際には以下の情報をお書き添えください<br>
                            <br>
                            ・エラーメールが届いておりましたら、その内容を全文お知らせください。<br>
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
                            状況の調査には送信日時と時刻も必要ですので不足無くお知らせくださいますようご協力のほどよろしくお願いいたします。
                        </p>
                    </dd>
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