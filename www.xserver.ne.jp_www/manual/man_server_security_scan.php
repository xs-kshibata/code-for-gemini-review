<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Web改ざん検知設定（ビジネスプラン） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご利用のWebサイトにおいて改ざんやマルウェア、フィッシングサイトを検知する「Web改ざん検知設定」のご案内です。">

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
            
                <h3 class="sub-ttl">Web改ざん検知設定</h3>

                <div class="targetPlan">
                    <div class="targetPlan_wrap">
                        <p class="targetPlan_ttl">対象</p>
                        <div class="targetPlan_body">ビジネスプラン</div>
                    </div>
                </div>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Web改ざん検知設定とは</a></li>
                                    <li><a href="#link-previous-b">診断方法・診断結果について</a></li>
                                    <li><a href="#link-previous-c">Web改ざん検知へのサイト登録手順</a></li>
                                    <li><a href="#link-previous-d">通知先メールアドレスの変更手順</a></li>
                                    <li><a href="#link-previous-e">Web改ざん検知設定の解除手順</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Web改ざん検知設定とは</h4>
                                <div class="section_body">
                                    <p>
                                        本機能は、クラウドセキュア株式会社の<a href="https://webscan.cloudsecure.ne.jp/" target="_blank">Web改ざん検知&nbsp;<i class="ico ico_new-window base-color"></i></a>を利用し、Webサイトの改ざんやマルウェア等を検知する機能です。<br>
                                    </p>
                                    <p>
                                        「Web改ざん検知設定」を有効にすると、お客様のWebサイトを毎日自動巡回・診断し、Webサイトの改ざんやマルウェア等が確認されたときは、すぐにメール通知を行います。
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">診断方法・診断結果について</h4>
                                <div class="section_body">
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>診断方法について</dt>
                                        <dd>
                                            <ul class="ul">
                                                <li>設定は1サイトのみ可能です。</li>
                                                <li>1日1回、診断開始URLからリンクをたどり、30ページ分のWebページを診断します。</li>
                                                <li>Web改ざん検知設定を「解除」した場合、診断結果が削除されます。</li>
                                            </ul>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>診断結果について</dt>
                                        <dd>
                                            <ul class="ul">
                                                <li>Webサイトの改ざんやマルウェア、フィッシングサイトを検知した場合、<br>「検知時の通知先メールアドレス」にメールでご案内します。</li>
                                                <li>診断結果の詳細は「<a href="https://webscanapi.cloudsecure.ne.jp/xbiz/login" target="_blank">Web改ざん検知管理画面&nbsp;<i class="ico ico_new-window base-color"></i></a>」からご確認ください。<br>
                                                    （「検知時の通知先メールアドレス」でログインできます。）</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">Web改ざん検知へのサイト登録手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl">1. 「Web改ざん検知」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_01.png" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2. 「Web改ざん検知設定の追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「Web改ざん検知設定の追加」メニューにおいて、診断開始URLと検知時の通知先メールアドレスを入力し、Web改ざん検知サービスの「利用規約」に同意するにチェックを入れ、「登録する（確認）」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_02.png" alt="「Web改ざん検知設定の追加」をクリック"></p>

                                                <aside class="msg">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>診断開始URLについて</h6>
                                                    <div class="msg_body">
                                                        <p>診断開始URLからリンクを辿り、30ページ分の検知を行います。</p>
                                                    </div>
                                                </aside>

                                                <aside class="msg">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>通知先メールアドレスについて</h6>
                                                    <div class="msg_body">
                                                        <p>コンテンツの変更・マルウェア・フィッシングURLのいずれかが検知された場合に、登録したメールアドレス宛てに通知が送信されます。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">3. 「登録する（確定）」をクリック</h5>
                                            <div class="box_body">
                                                <p>確認画面で入力内容を確認していただき、最後に「登録する（確定）」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_03.png" alt="「登録する（確定）」をクリック"></p>
                                                <p>以上で、Web改ざん検知設定の開始手続きは完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">通知先メールアドレスの変更手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl">1. 「Web改ざん検知」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_01.png" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2. 「Web改ざん検知設定」をクリック</h5>
                                            <div class="box_body">
                                                <p>「Web改ざん検知設定」メニューにおいて、「変更」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_04.png" alt="「Web改ざん検知設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">3. 通知先メールアドレスを入力</h5>
                                            <div class="box_body">
                                                <p>変更後の通知先メールアドレスを入力し、「Web改ざん設定の変更（確認）」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_05.png" alt="通知先メールアドレスを入力"></p>
                                                <p>以上で、通知先メールアドレスの変更作業は完了です。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">4. 「Web改ざん設定の変更（確定）」をクリック</h5>
                                            <div class="box_body">
                                                <p>確認画面で入力内容を確認していただき、最後に「Web改ざん設定の変更（確定）」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_06.png" alt="「Web改ざん設定の変更（確定）」をクリック"></p>
                                                <p>以上で、通知先メールアドレスの変更作業は完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">Web改ざん検知設定の解除手順</h4>
                                <div class="section_body">
                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>Web改ざん検知設定を解除した場合、学習内容と診断結果レポートがリセットされます。</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl">1. 「Web改ざん検知」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_01.png" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2. 「解除」をクリック</h6>
                                            <div class="box_body">
                                                <p>「Web改ざん検知設定」メニューにおいて、「解除」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_07.png" alt="「解除」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">3. 「解除する（確定）」をクリック</h6>
                                            <div class="box_body">
                                                <p>解除してよろしければ、「解除する（確定）」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_security_scan_08.png" alt="「解除する（確定）」をクリック"></p>
                                                <p>
                                                    以上で、Web改ざん検知設定の解除作業は完了です。<br>
                                                    再登録まで、Web改ざん検知は行われません。
                                                </p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">Web改ざん検知設定とは</a></li>
                                    <li><a href="#link-b">診断方法・診断結果について</a></li>
                                    <li><a href="#link-c">Web改ざん検知へのサイト登録手順</a>
                                        <ol>
                                            <li><a href="#link-c01">1.「Web改ざん検知」をクリック</a></li>
                                            <li><a href="#link-c02">2.「Web改ざん検知設定の追加」をクリック</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">通知先メールアドレスの変更手順</a>
                                        <ol>
                                            <li><a href="#link-d01">1.「Web改ざん検知」をクリック</a></li>
                                            <li><a href="#link-d02">2.「Web改ざん検知」一覧の「編集」をクリック</a></li>
                                            <li><a href="#link-d03">3.通知先メールアドレスを入力</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">Web改ざん検知設定の削除手順</a>
                                        <ol>
                                            <li><a href="#link-e01">1.「Web改ざん検知」をクリック</a></li>
                                            <li><a href="#link-e02">2.「Web改ざん検知」一覧の「削除」をクリック</a></li>
                                            <li><a href="#link-e03">3.「削除する」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Web改ざん検知設定とは</h4>
                                <div class="section_body">
                                    <p>
                                        本機能は、クラウドセキュア株式会社の<a href="https://webscan.cloudsecure.ne.jp/" target="_blank">Web改ざん検知&nbsp;<i class="ico ico_new-window base-color"></i></a>を利用し、Webサイトの改ざんやマルウェア等を検知する機能です。<br>
                                    </p>
                                    <p>
                                        「Web改ざん検知設定」を有効にすると、お客様のWebサイトを毎日自動巡回・診断し、Webサイトの改ざんやマルウェア等が確認されたときは、すぐにメール通知を行います。
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">診断方法・診断結果について</h4>
                                <div class="section_body">
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>診断方法について</dt>
                                        <dd>
                                            <ul class="ul">
                                                <li>設定は1サイトのみ可能です。</li>
                                                <li>1日1回、診断開始URLからリンクをたどり、30ページ分のWebページを診断します。</li>
                                                <li>Web改ざん検知設定を「解除」した場合、診断結果が削除されます。</li>
                                            </ul>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>診断結果について</dt>
                                        <dd>
                                            <ul class="ul">
                                                <li>Webサイトの改ざんやマルウェア、フィッシングサイトを検知した場合、<br>「検知時の通知先メールアドレス」にメールでご案内します。</li>
                                                <li>診断結果の詳細は「<a href="https://webscanapi.cloudsecure.ne.jp/xbiz/login" target="_blank">Web改ざん検知管理画面&nbsp;<i class="ico ico_new-window base-color"></i></a>」からご確認ください。<br>
                                                    （「検知時の通知先メールアドレス」でログインできます。）</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">Web改ざん検知へのサイト登録手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c01">1. 「Web改ざん検知」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_01.png?date=2410" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c02">2. 「Web改ざん検知設定の追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「Web改ざん検知設定の追加」メニューにおいて、診断開始URLと検知時の通知先メールアドレスを入力し、Web改ざん検知サービスの「利用規約」に同意するにチェックを入れ、「追加する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_02.png?date=2410" alt="「Web改ざん検知設定の追加」をクリック"></p>

                                                <p>以上で、Web改ざん検知設定の開始手続きは完了です。</p>

                                                <aside class="msg">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>診断開始URLについて</h6>
                                                    <div class="msg_body">
                                                        <p>診断開始URLからリンクを辿り、30ページ分の検知を行います。</p>
                                                    </div>
                                                </aside>

                                                <aside class="msg">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>通知先メールアドレスについて</h6>
                                                    <div class="msg_body">
                                                        <p>コンテンツの変更・マルウェア・フィッシングURLのいずれかが検知された場合に、登録したメールアドレス宛てに通知が送信されます。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">通知先メールアドレスの変更手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d01">1. 「Web改ざん検知」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_01.png?date=2410" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d02">2. 「Web改ざん検知」一覧の「編集」をクリック</h5>
                                            <div class="box_body">
                                                <p>「Web改ざん検知」一覧において、「編集」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_03.png?date=2410" alt="「編集」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d03">3. 通知先メールアドレスを入力</h5>
                                            <div class="box_body">
                                                <p>変更後の通知先メールアドレスを入力し、「設定する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_04.png?date=2410" alt="通知先メールアドレスを入力"></p>
                                                <p>以上で、通知先メールアドレスの変更作業は完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-e">Web改ざん検知設定の削除手順</h4>
                                <div class="section_body">
                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>Web改ざん検知設定を削除した場合、学習内容と診断結果レポートがリセットされます。</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e01">1. 「Web改ざん検知」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Web改ざん検知」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_01.png?date=2410" alt="「Web改ざん検知」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e02">2.「Web改ざん検知」一覧の「削除」をクリック</h6>
                                            <div class="box_body">
                                                <p>「Web改ざん検知設定」一覧において、「削除」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_05.png?date=2410" alt="「削除」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e03">3. 「削除する」をクリック</h6>
                                            <div class="box_body">
                                                <p>削除してよろしければ、「削除する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_security_scan_06.png?date=2410" alt="「削除する」をクリック"></p>
                                                <p>
                                                    以上で、Web改ざん検知設定の削除作業は完了です。<br>
                                                    再登録まで、Web改ざん検知は行われません。
                                                </p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->


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