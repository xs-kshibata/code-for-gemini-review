<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Outlook 2016設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルで作成したメールアドレスを「Outlook 2016」で使用するための設定手順について記載しています。">

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
        
            <h3 class="sub-ttl">Outlook 2016</h3>
            
			<div class="toc-list">
			<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
                    <li><a href="#link-a">Microsoft Outlook 2016アカウントの設定方法</a>
                        <ol>
                            <li><a href="#link-a01">1.Outlook2016を起動</a></li>
                            <li><a href="#link-a02">2.アカウントの種類をクリック</a></li>
                            <li><a href="#link-a03">3.情報の入力</a></li>
                            <li><a href="#link-a04">4.パスワードを入力</a></li>
                            <li><a href="#link-a05">5.設定完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-b">IMAPで設定した場合　※追加で以下の設定が必要です</a>
                        <ol>
                            <li><a href="#link-b01">1.「ファイル」をクリック</a></li>
                            <li><a href="#link-b02">2.「アカウント設定」をクリック</a></li>
                            <li><a href="#link-b03">3.「変更」をクリック</a></li>
                            <li><a href="#link-b04">4.「詳細設定」をクリック</a></li>
                            <li><a href="#link-b05">5.ルートフォルダーのパスを入力</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">SMTP認証設定方法</a>
                        <ol>
                            <li><a href="#link-c01">1.「ファイル」をクリック</a></li>
                            <li><a href="#link-c02">2.「アカウント設定」をクリック</a></li>
                            <li><a href="#link-c03">3.「変更」をクリック</a></li>
                            <li><a href="#link-c04">4.「詳細設定」をクリック</a></li>
                            <li><a href="#link-c05">5.「送信サーバー」タブをクリック</a></li>
                        </ol>
                    </li>
				</ul>
			</div>
            
            <ul class="link-box">
                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
            </ul>
            
            <section class="section">
                <h4 class="section_ttl" id="link-a">Microsoft Outlook 2016アカウントの設定方法</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-a01">1.Outlook2016を起動</h5>
                            <div class="box_body">
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>『Outlookへようこそ』の画面が表示される場合</dt>
                                    <dd>
                                        <p class="note">※表示されていない場合は、<a class="font-bold" href="#next">「『Outlookへようこそ』の画面が表示されない場合」</a>の手順から進めてください。</p>

                                        <p>メールアドレスを入力し、「詳細オプション」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2016_3.png" alt=""></p>
                                        <p>「自分で自分のアカウントを手動で設定」にチェックを入れます。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2016_4.png" alt=""></p>
                                        <p>「接続」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2016_5.png" alt=""></p>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt id="next"><i class="ico ico_square-fill"></i>『Outlookへようこそ』の画面が表示されない場合</dt>
                                    <dd>
                                        <p>Outlook2016を立ち上げ、「ファイル」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2016_1.png" alt=""></p>
                                        <p>「アカウントの追加」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_mail_setting_ol2016_2.png" alt=""></p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a02">2.アカウントの種類をクリック</h5>
                            <div class="box_body">
                                <p>アカウントの種類を「POP」もしくは「IMAP」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_6.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a03">3.情報の入力</h5>
                            <div class="box_body">
                                <p>POPをクリックした場合はPOPアカウントの設定情報を入力します。入力後は「次へ」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_7.png" alt=""></p>
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
                            <h5 class="box_ttl" id="link-a04">4.アカウント設定のテスト</h5>
                            <div class="box_body">
                                <p>パスワードを入力し、「接続」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_8.png" alt=""></p> 
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-a05">5.設定完了</h5>
                            <div class="box_body">
                                <p>以下のセットアップ完了画面が出たら「OK」をクリックして設定完了です。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_9.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-b">IMAPで設定した場合　※追加で以下の設定が必要です</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-b01">1.「ファイル」をクリック</h5>
                            <div class="box_body">
                                <p>メイン画面の上部メニューバーの「ファイル」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_1.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b02">2.「アカウント設定」をクリック</h5>
                            <div class="box_body">
                                <p>「アカウント設定」のメニュー内にある、「アカウント設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_12.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b03">3.「変更」をクリック</h5>
                            <div class="box_body">
                                <p>メールアドレスをクリックして「変更」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_13.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b04">4.「詳細設定」をクリック</h5>
                            <div class="box_body">
                                <p>「詳細設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_14.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-b05">5.ルートフォルダーのパスを入力</h5>
                            <div class="box_body">
                                <p>「詳細設定」タブをクリックします。「フォルダー」の「ルートフォルダーのパス(F)：」に『inbox』と入力し、「OK」をクリックして画面を閉じてください。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_25.png" alt=""></p>
                            </div>
                        </section>
                    </div>
                    <!-- /.serial-box -->
                    
                </div>
            </section>
            <!-- /.section -->


            <section class="section">
                <h4 class="section_ttl" id="link-c">SMTP認証設定方法</h4>
                <div class="section_body">
                    <div class="serial-box">
                        <section class="box">
                            <h5 class="box_ttl" id="link-c01">1.「ファイル」をクリック</h5>
                            <div class="box_body">
                                <p>メイン画面の「ファイル」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_1.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c02">2.「アカウント設定」をクリック</h5>
                            <div class="box_body">
                                <p>「アカウント設定」のメニュー内にある、「アカウント設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_12.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c03">3.「変更」をクリック</h5>
                            <div class="box_body">
                                <p>メールアドレスをクリックして「変更」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_13.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c04">4.「詳細設定」をクリック</h5>
                            <div class="box_body">
                                <p>「詳細設定」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_14.png" alt=""></p>
                            </div>
                        </section>
                        <section class="box">
                            <h5 class="box_ttl" id="link-c05">5.「送信サーバー」タブをクリック</h5>
                            <div class="box_body">
                                <p>「送信サーバー」タブをクリックします。「送信サーバー（SMTP）は認証が必要」と、「受信メールサーバーと同じ設定を使用する」の2か所にチェックが入っていることを確認し、「OK」をクリックします。</p>
                                <p><img class="img" src="../img/manual/man_mail_setting_ol2016_15.png" alt=""></p>
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