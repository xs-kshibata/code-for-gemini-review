<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook for Windows / Outlook (new)設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook for Windows / Outlook (new)」で使用するための設定手順について記載しています。">

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
        
            <h3 class="sub-ttl">Outlook for Windows / Outlook (new)</h3>
             
			<div class="toc-list">
			<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
                    <li><a href="#link-a">Microsoft Outlook for Windows / Outlook (new)アカウントの追加方法</a>
                        <ol>
                            <li><a href="#link-a01">1.Outlookを起動</a></li>
                            <li><a href="#link-a02">2.メールアドレスを入力し「続行」をクリック</a></li>
                            <li><a href="#link-a03">3.「プロバイダーを選択」をクリックし、IMAPまたはPOPを選択</a></li>
                            <li><a href="#link-a04">4.設定情報を入力し「続行」をクリック</a></li>
                            <li><a href="#link-a05">5.「続行」をクリック</a></li>
                            <li><a href="#link-a06">6.内容を確認し設定を完了する</a></li>
                            <li><a href="#link-a07">7.アカウント追加完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-b">アカウント設定の確認・修正</a>
                        <ol>
                            <li><a href="#link-b01">1.設定アイコンをクリック</a></li>
                            <li><a href="#link-b02">2.対象メールアドレスの「管理」をクリック</a></li>
                            <li><a href="#link-b03">3.設定内容を確認する</a></li>
                            <li><a href="#link-b04">4.設定内容を修正する</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">Outlookの言語設定を変更する</a>
                        <ol>
                            <li><a href="#link-c01">1.設定アイコンをクリック</a></li>
                            <li><a href="#link-c02">2.「General」をクリック</a></li>
                            <li><a href="#link-c03">3.「Language and time」の「Language」をクリック</a></li>
                        </ol>
                    </li>
				</ul>
			</div>
            
            <ul class="link-box">
                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
            </ul>

            <section class="section">
                <h4 class="section_ttl" id="link-a">Microsoft Outlook for Windows / Outlook (new)アカウントの追加方法</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-a01">1.Outlookを起動</h5>
                            <div class="box_body">
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>初めて利用する場合</dt>
                                    <dd>
                                        <p>Outlookを立ち上げます。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_olwin_1.png" alt=""></p>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt id="next"><i class="ico ico_square-fill"></i>すでにご利用中の場合</dt>
                                    <dd>
                                        <p>Outlookを立ち上げます。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_olwin_1.png" alt=""></p>
                                        <p>左下の「アカウント追加」、または右上の設定アイコンをクリックしアカウントを追加してください。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_olwin_2.png" alt=""></p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a02">2.メールアドレスを入力し「続行」をクリック</h5>
                            <div class="box_body">
                                <p>メールアドレスを入力し、続行ボタンを押してください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_3.png" alt=""></p>
                                <p class="note">※自動的にMicrosoftアカウントなどのメールアドレスが入力されている場合があります。<br>その場合は、入力を削除して設定するアドレスを入力してください。</p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a03">3.「プロバイダーを選択」をクリックし、IMAPまたはPOPを選択</h5>
                            <div class="box_body">
                                <p>画面右下にある「プロバイダーを選択」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_4.png" alt=""></p>
                                <p>IMAPまたはPOPを選択してください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_5.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a04">4.設定情報を入力し「続行」をクリック</h5>
                            <div class="box_body">
                                <p>アカウントの設定情報を入力します。入力後は「続行」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_6.png" alt=""></p>
                                <table class="table table_use-caption">
                                    <caption>設定内容</caption>
                                    <tbody>
                                    <tr>
                                        <th>パスワード</th>
                                        <td>
                                            メールパスワード
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>表示数を増やす</th>
                                        <td>
                                            ON
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>おすすめの設定を使用する</th>
                                        <td>
                                            OFF
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>IMAP/POP 受信サーバー</th>
                                        <td>
                                            設定完了メールに記載されている「メールサーバー」を入力してください。
                                            <p class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。<br>例）sv***.xserver.jp</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ポート</th>
                                        <td>IMAP：993 / POP：995</td>
                                    </tr>
                                    <tr>
                                        <th>セキュア接続タイプ</th>
                                        <td>SSL/TLS (推奨)</td>
                                    </tr>
                                    <tr>
                                        <th>SMTPユーザー名</th>
                                        <td>アカウント追加をしているメールアドレス</td>
                                    </tr>
                                    <tr>
                                        <th>SMTPパスワード</th>
                                        <td>入力不要</td>
                                    </tr>
                                    <tr>
                                        <th>SMTP送信サーバー</th>
                                        <td>
                                            設定完了メールに記載されている「メールサーバー」を入力してください。
                                            <p class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。<br>例）sv***.xserver.jp</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ポート</th>
                                        <td>465</td>
                                    </tr>
                                    <tr>
                                        <th>セキュア接続タイプ</th>
                                        <td>SSL/TLS (推奨)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a05">5.「続行」をクリック</h5>
                            <div class="box_body">
                                <p>「続行」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_7.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a06">6.内容を確認し設定を完了する</h5>
                            <div class="box_body">
                                <p>各画面の内容を確認し、各種設定を行ってください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_8.png" alt=""></p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_9.png" alt=""></p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_10.png" alt=""></p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_11.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a07">7.アカウント追加完了</h5>
                            <div class="box_body">
                                <p>設定が完了したらホーム画面が起動します。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_12.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-b">アカウント設定の確認・修正</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-b01">1.設定アイコンをクリック</h5>
                            <div class="box_body">
                                <p>画面上部にある設定アイコンをクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_13.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.対象メールアドレスの「管理」をクリック</h5>
                            <div class="box_body">
                                <p>「アカウント」のメニュー内にある、対象メールアドレスの「管理」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_14.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.設定内容を確認する</h5>
                            <div class="box_body">
                                <p>この画面で対象メールアドレスの設定内容を確認することが可能です。<br>設定内容に誤りがある場合は「修復」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_15.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.設定内容を修正する</h5>
                            <div class="box_body">
                                <p>設定内容を修正し、「続行」をクリックすると修正完了です。</p>
                                <p class="note">※IMAP/POPサーバーやSMTPユーザー名の設定は変更できません。 <br>こちらの入力に誤りがある場合は、アカウントを削除し追加をやり直してください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_16.png" alt=""></p>
                                <table class="table table_use-caption">
                                    <caption>設定内容</caption>
                                    <tbody>
                                    <tr>
                                        <th>パスワード</th>
                                        <td>
                                            メールパスワード
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>表示数を増やす</th>
                                        <td>
                                            ON
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>おすすめの設定を使用する</th>
                                        <td>
                                            OFF
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>IMAP/POP 受信サーバー</th>
                                        <td>
                                            変更不可
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ポート</th>
                                        <td>
                                            変更不可
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>セキュア接続タイプ</th>
                                        <td>
                                            変更不可
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>SMTPユーザー名</th>
                                        <td>
                                            変更不可
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>SMTPパスワード</th>
                                        <td>
                                            入力不要
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>SMTP送信サーバー</th>
                                        <td>
                                            設定完了メールに記載されている「メールサーバー」を入力してください。
                                            <p class="note">※サーバーパネル内「サーバー情報」に記載の“ホスト名”と同一です。<br>例）sv***.xserver.jp</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ポート</th>
                                        <td>465</td>
                                    </tr>
                                    <tr>
                                        <th>セキュア接続タイプ</th>
                                        <td>SSL/TLS (推奨)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-c">Outlookの言語設定を変更する</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-c01">1.設定アイコンをクリック</h5>
                            <div class="box_body">
                                <p>画面上部にある設定アイコンをクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_17.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c02">2.「General」をクリック</h5>
                            <div class="box_body">
                                <p>「General」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_18.png" alt=""/></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c03">3.「Language and time」の「Language」をクリック</h5>
                            <div class="box_body">
                                <p>「Language and time」の「Language」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_19.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c04">4.「日本語 (日本)」をクリック</h5>
                            <div class="box_body">
                                <p>「日本語 (日本)」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_20.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c05">5.「Save」をクリック</h5>
                            <div class="box_body">
                                <p>「Save」をクリックすると言語設定変更完了です。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_olwin_21.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
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