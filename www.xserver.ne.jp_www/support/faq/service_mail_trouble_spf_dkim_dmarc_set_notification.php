<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">
<title>大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Gmailなど特定の宛先にメールが届かなくなってしまった場合、SPFレコードの内容を修正することで、解消する可能性があります。サーバーパネル内「DNSレコード設定」より、現在の設定を修正して解消するかお試しください。　・現在のTXTレコード…">

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
                <h3 class="sub-ttl">大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。</h3>

                <p>以下のサーバー設定をご確認ください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>DMARCが設定されているかを確認</dt>
                    <dd>
                        <p>メール送信するドメインおよびサブドメインにて、DMARC設定がされているかをご確認ください。<br>
                            DMARCの確認方法は、以下の通りです。</p>

                        <p>1．サーバーパネルにログイン後、『ドメイン』カテゴリの「DNSレコード設定」機能を選択します。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_1.png" alt="DNSレコード設定をクリックしているスクリーンショット"></p>

                        <p>2．DNSレコード設定一覧が表示されますので、対象のドメイン・サブドメインが表示されているかをご確認ください。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_2.png" alt="DKIM設定一覧スクリーンショット"></p>

                        <div class="block_body">
                            <p>例）DMARCレコードの設定値</p>
                            <table class="table break-word">
                                <thead>
                                <tr>
                                    <th class="w25per">ホスト名</th>
                                    <th class="w10per">種別</th>
                                    <th>内容</th>
                                    <th class="w10per">TTL</th>
                                    <th class="w15per">優先度</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>_dmarc.example.com</th>
                                    <td>TXT</td>
                                    <td>v=DMARC1; p=quarantine;
                                    </td>
                                    <td>3600</td>
                                    <td>0</td>
                                </tr>
                                </tbody>
                            </table>
                            <ul class="note-list">
                                <li>※ホスト名はサンプルです。</li>
                                <li>※<em class="font-bold">v=DMARC1; p=quarantine;</em>はお客様が「DMARC設定」より設定された内容によって異なります。</li>
                            </ul>
                        </div>

                        <p class="note">もしDMARCが追加されていない場合は、以下を参考にして設定してください。</p>

                        <p>1．サーバーパネルにログイン後、『メール』カテゴリの「DMARC設定」機能を選択します。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_3.png" alt="DMARCレコード設定をクリックしているスクリーンショット"></p>

                        <p>2.任意の値を選択し、「設定する」をクリックします。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_dmarc_set_notification_4.png" alt="DMARC設定画面のスクリーンショット"></p>

                        <p class="note">DMARC設定の詳細については、以下を参考にしてください。</p>
                        <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_dmarc.php">DMARC設定</a></p>

                    </dd>
                </dl>

                <p>少数のメール送信でもGmailなど特定の宛先にメールが届かない場合は、以下内容をご確認ください。</p>
                <p><strong class="yellow">関連よくある質問：</strong><a href="./service_mail_trouble_err_mail_sender_gmail.php">Gmailへメールが送信できません。</a></p>

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