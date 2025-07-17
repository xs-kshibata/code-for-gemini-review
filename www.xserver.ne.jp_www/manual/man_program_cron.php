<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Cron設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜あらかじめ指定した時間に指定コマンド（プログラム）を自動的に実行させる機能「Cron」の設定手順に関するご案内です。">

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
            
                <h3 class="sub-ttl">Cron設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">Cronとは</a></li>
                                <li><a href="#link-previous-b">Cronの設定</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「Cron設定」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.「Cron設定追加」をクリック</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-b011">Cronの設定例</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">通知メールアドレスの設定</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.「Cron設定」をクリック</a></li>
                                        <li><a href="#link-previous-c02">2.「Cron設定一覧」をクリック</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-c011">Cron結果通知について</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Cronとは</h4>
                                <div class="section_body">
                                    <p>指定時間に指定コマンド（プログラム）を自動的に実行させるサーバーの機能です。<br>
                                    定期的なメールの送信や、ブログのRSS取得などに使用されます。</p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">Cronの設定</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「Cron設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Cron設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_1.png" alt="Cron設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「Cron設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定内容を入力し、「確認画面へ進む」をクリックします。<br>
                                                    内容を確認し、問題がなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_2.png" alt="Cronの追加のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b011">Cronの設定例</h5>
                                        <div class="block_body">
                                            <p>毎日 PM10:00 に A というプログラムを実行したい場合、下記のように設定してください。</p>
                                            <table class="table">
                                                <caption>Cronの設定例</caption>
                                                <tbody>
                                                    <tr><th>分</th><td>0</td></tr>
                                                    <tr><th>時間</th><td>22</td></tr>
                                                    <tr><th>日</th><td>*</td></tr>
                                                    <tr><th>月</th><td>*</td></tr>
                                                    <tr><th>曜日</th><td>*</td></tr>
                                                    <tr><th>コマンド</th><td>Aプログラムを実行するためのコマンド</td></tr>
                                                </tbody>
                                            </table>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>コマンドの記述例</dt>
                                                <dd>
                                                    <p>PHPやPerlなどのスクリプトをCronで実行する際、 コマンドパスもあわせて記述してください。<br>
                                                    また、実行するスクリプトファイルに対し、実行権限を付与するパーミッション(パーミッション値「701」など)に変更する必要があります。</p>
                                                    <div class="border border_blue">
                                                    （例）abc.phpをPHP 7.4 で実行する場合<br>
                                                    　/usr/bin/php7.4 /home/サーバーID/独自ドメイン名/public_html/abc.php
                                                    </div>
                                                    <p class="note">※コマンドパスについてはサーバーパネル「サーバー情報」の「コマンドパス一覧」より確認可能です。</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">通知メールアドレスの設定</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.「Cron設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Cron設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_1.png" alt="Cron設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.「Cron設定一覧」をクリック</h6>
                                            <div class="box_body">
                                                <p>「Cron結果の通知アドレス」に通知するメールアドレスを入力し「通知アドレス設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_cron_3.png" alt="Cronの一覧のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c011">Cron結果通知について</h5>
                                        <div class="block_body">
                                            <p>「Cron結果の通知アドレス」に有効なメールアドレスが設定されている場合は、設定したメールアドレス宛にCronの結果通知が送信されます。<br>
                                            未設定の場合は、ホームディレクトリ直下の「Maildir」フォルダへと保存されます。</p>

                                            <div class="border border_gray">
                                                <p class="link mb0"><i class="ico ico_square-fill"></i>参考：<a href="man_server_maildir.php">Maildirについて</a><i class="ico ico_chevron-right"></i></p>
                                            </div>

                                            <p>結果通知が不要な場合は、「Cron結果の通知アドレス」に【""】のみ入力し設定してください。<br>
                                            上記設定を行えばMaildirへ保存はされません。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">Cronとは</a></li>
                                    <li><a href="#link-b">Cronの設定</a></li>
                                    <li>
                                        <a href="#link-c">通知メールアドレスの設定</a>
                                        <ol>
                                            <li><a href="#link-c1">1.「Cron設定」をクリック</a></li>
                                            <li><a href="#link-c2">2.「Cron結果の通知アドレス」を設定</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h3 class="section_ttl" id="link-a">Cronとは</h3>
                                        <div class="section_body">
                                            <p>
                                                指定時間に指定コマンド（プログラム）を自動的に実行させるサーバーの機能です。<br>
                                                定期的なメールの送信や、ブログのRSS取得などに使用されます。
                                            </p>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">Cronの設定</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl">1.「Cron設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Cron設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_1.png?date=2410" alt="Cron設定画面へ"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">2.「Cron設定を追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「Cron設定を追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_2.png?date=2410" alt="Cronの追加のスクリーンショット"></p>
                                                        <p>設定内容を入力し、「追加する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_3.png?date=2410" alt="Cronの追加のスクリーンショット"></p>

                                                        <section class="block">
                                                            <h5 class="block_ttl mt30">Cronの設定例</h5>
                                                            <div class="block_body">
                                                                <p>毎日 PM10:00 に A というプログラムを実行したい場合、下記のように設定してください。</p>
                                                                <table class="table">
                                                                    <caption>Cronの設定例</caption>
                                                                    <tbody>
                                                                    <tr><th>分</th><td>0</td></tr>
                                                                    <tr><th>時間</th><td>22</td></tr>
                                                                    <tr><th>日</th><td>*</td></tr>
                                                                    <tr><th>月</th><td>*</td></tr>
                                                                    <tr><th>曜日</th><td>*</td></tr>
                                                                    <tr><th>コマンド</th><td>Aプログラムを実行するためのコマンド</td></tr>
                                                                    </tbody>
                                                                </table>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>コマンドの記述例</dt>
                                                                    <dd>
                                                                        <p>PHPやPerlなどのスクリプトをCronで実行する際、 コマンドパスもあわせて記述してください。<br>
                                                                            また、実行するスクリプトファイルに対し、実行権限を付与するパーミッション(パーミッション値「701」など)に変更する必要があります。</p>
                                                                        <div class="border border_blue">
                                                                            (例)abc.phpをPHP 7.4 で実行する場合<br>
                                                                            /usr/bin/php7.4 /home/サーバーID/独自ドメイン名/public_html/abc.php
                                                                        </div>
                                                                        <p class="note">※コマンドパスについてはサーバーパネル「サーバー情報」の「コマンドパス一覧」より確認可能です。</p>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->


                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-c">通知メールアドレスの設定</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c1">1.「Cron設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Cron設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_1.png?date=2410" alt="Cron設定画面へ"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-c2">2.「Cron結果の通知アドレス」を設定</h5>
                                                    <div class="box_body">
                                                        <p>「Cron結果の通知アドレス」枠内のペンアイコンをクリックして、通知するメールアドレスを入力し「設定する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_program_cron_4.png?date=2410" alt="Cron結果の通知アドレス設定画面のスクリーンショット"></p>
                                                    </div>

                                                    <section class="block p20">
                                                        <h5 class="block_ttl">Cron結果通知について</h5>
                                                        <div class="block_body">
                                                            <p>
                                                                「Cron結果の通知アドレス」に有効なメールアドレスが設定されている場合は、設定したメールアドレス宛にCronの結果通知が送信されます。<br>
                                                                未設定の場合は、ホームディレクトリ直下の「Maildir」フォルダへと保存されます。
                                                            </p>

                                                            <div class="border border_gray">
                                                                <p class="link mb0"><i class="ico ico_square-fill"></i>参考：<a href="man_server_maildir.php">Maildirについて</a><i class="ico ico_chevron-right"></i></p>
                                                            </div>

                                                            <p>
                                                                結果通知が不要な場合は、「Cron結果の通知アドレス」に【""】のみ入力し設定してください。<br>
                                                                上記設定を行えばMaildirへ保存はされません。
                                                            </p>
                                                        </div>
                                                    </section>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /新パネル -->

                    </div>
                </div>

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