<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook 2019(Outlook 365)設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook 2019(Outlook 365)」で使用するための設定手順について記載しています。">

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
        
            <h3 class="sub-ttl">Outlook 2019(Outlook 365)</h3>
            
			<div class="toc-list">
			<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
                    <li><a href="#link-a">Microsoft Outlook 2019(Outlook 365)アカウントの設定方法</a>
                        <ol>
                            <li><a href="#link-a01">1.Outlookを起動</a></li>
                            <li><a href="#link-a02">2.アカウントの種類をクリック</a></li>
                            <li><a href="#link-a03">3.アカウントの設定</a></li>
                            <li><a href="#link-a04">4.パスワードの入力</a></li>
                            <li><a href="#link-a05">5.追加完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-b">SMTP認証設定方法</a>
                        <ol>
                            <li><a href="#link-b01">1.「ファイル」をクリック</a></li>
                            <li><a href="#link-b02">2.「アカウント設定」をクリック</a></li>
                            <li><a href="#link-b03">3.「変更」をクリック</a></li>
                            <li><a href="#link-b04">4.「詳細設定」をクリック</a></li>
                            <li><a href="#link-b05">5.「送信サーバー」タブをクリック</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">IMAPで設定した場合　※追加で以下の設定が必要です</a>
                        <ol>
                            <li><a href="#link-c01">1.「ファイル」をクリック</a></li>
                            <li><a href="#link-c02">2.「アカウント設定」をクリック</a></li>
                            <li><a href="#link-c03">3.ルートフォルダーのパスを入力</a></li>
                        </ol>
                    </li>
				</ul>
			</div>
            
            <ul class="link-box">
                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
            </ul>

            <div class="manual-youtube-box">
                <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                <div class="manual-youtube">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/NInIFm__FcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <section class="section">
                <h4 class="section_ttl" id="link-a">Microsoft Outlook 2019(Outlook 365)アカウントの設定方法</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-a01">1.Outlookを起動</h5>
                            <div class="box_body">
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>初めてOutlookを利用する場合</dt>
                                    <dd>
                                        <p>メールアドレスを入力し、「詳細オプション」をクリック。<br>「自分で自分のアカウントを手動で設定」にチェックを入れ、接続ボタンを押してください。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2019_1.png" alt=""></p>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt id="next"><i class="ico ico_square-fill"></i>すでにOutlookを利用中の場合</dt>
                                    <dd>
                                        <p>Outlookを立ち上げ、「ファイル」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2019_2.png" alt=""></p>
                                        <p>「アカウントの追加」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2019_3.png" alt=""></p>
                                        <p>メールアドレスを入力し、「詳細オプション」をクリック。<br>「自分で自分のアカウントを手動で設定」にチェックを入れ、接続ボタンを押してください。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2019_1.png" alt=""></p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a02">2.アカウントの種類をクリック</h5>
                            <div class="box_body">
                                <p>アカウントの種類を「POP」もしくは「IMAP」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_4.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a03">3.アカウントの設定</h5>
                            <div class="box_body">
                                <p>アカウントの設定情報を入力します。入力後は「次へ」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_5.png" alt=""></p>
                                <table class="table table_use-caption">
                                    <caption>受信メール</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w40per">サーバー</th>
                                            <td>
                                                設定完了メールに記載されている「メールサーバー」を入力してください。 
                                                <p class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。<br>例）sv***.xserver.jp</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ポート</th>
                                            <td>995<br>
                                                ※IMAPの場合は993</td>
                                        </tr>
                                        <tr>
                                            <th>このサーバーは暗号化された接続（SSL/TLS）が必要</th>
                                            <td>チェック 【あり】</td>
                                        </tr>
                                        <tr>
                                            <th>セキュリティで保護されたパスワード認証（SPA）でのログオンが必要</th>
                                            <td>チェック 【なし】</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table_use-caption">
                                    <caption>送信メール</caption>
                                    <tbody>
                                        <tr>
                                            <th class="w40per">サーバー</th>
                                            <td>
                                                設定完了メールに記載されている「メールサーバー」を入力してください。 
                                                <p class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。<br>
                                                例）sv***.xserver.jp</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ポート</th>
                                            <td>465</td>
                                        </tr>
                                        <tr>
                                            <th>暗号化方法</th>
                                            <td>SSL/TLS</td>
                                        </tr>
                                        <tr>
                                            <th>セキュリティで保護されたパスワード認証（SPA）でのログオンが必要</th>
                                            <td>チェック 【なし】</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a04">4.パスワードの入力</h5>
                            <div class="box_body">
                                <p>パスワードを入力し、「接続」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_6.png" alt=""></p> 
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a05">5.追加完了</h5>
                            <div class="box_body">
                                <p>「アカウントが正常に追加されました」と出たら、「完了」を押して画面を閉じ、続けて<a href="#link-b">SMTP認証設定</a>を行ってください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_7.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-b">SMTP認証設定方法</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-b01">1.「ファイル」をクリック</h5>
                            <div class="box_body">
                                <p>メイン画面の「ファイル」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_2.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「アカウント設定」をクリック</h5>
                            <div class="box_body">
                                <p>「アカウント設定」のメニュー内にある、「プロファイルの管理(O)」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_8.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「変更」をクリック</h5>
                            <div class="box_body">
                                <p>メールアドレスを選択して「変更」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_9.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「詳細設定」をクリック</h5>
                            <div class="box_body">
                                <p>「詳細設定(M)」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_10.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b05">5.「送信サーバー」タブをクリック</h5>
                            <div class="box_body">
                                <p>「送信サーバー」タブをクリックします。<br>「送信サーバー（SMTP）は認証が必要(O)」と、「受信メールサーバーと同じ設定を使用する(U)」の2か所にチェックが入っていることを確認し、「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_11.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-c">IMAPで設定した場合　※追加で以下の設定が必要です</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-c01">1.「ファイル」をクリック</h5>
                            <div class="box_body">
                                <p>メイン画面の「ファイル」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_2.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c02">2.「アカウント設定」をクリック</h5>
                            <div class="box_body">
                                <p>「アカウント設定」のメニュー内にある、「アカウント名と同期の設定(N)」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_12.png?220809" alt=""/></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c03">3.ルートフォルダーのパスを入力</h5>
                            <div class="box_body">
                                <p>「フォルダー設定」の「ルートフォルダーのパス」に『inbox』と入力し、「次へ」をクリックして画面を閉じてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2019_13.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->
                <?php include("vote.php"); ?>

                <section class="section">
                    <div class="pickupFaq">
                        <div class="pickupFaq__title">よくある質問</div>
                        <ul class="pickupFaq__list">
                            <li><a href="../support/faq/service_mail_trouble_send.php">メールが送信できません。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_reception.php">メールが受信できません。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_spf_dkim_dmarc_set_notification.php">大量メール送信時のみ、Gmailなど特定の宛先にメールが届かなくなりました。</a></li>
                            <li><a href="../support/faq/service_mail_trouble_ssl_certificate.php">メールソフトで「識別情報を確認できない」「証明書が不正」というエラーが出るようになりました。</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->

            
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