<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメイン設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで独自ドメインを運用するには、サーバーパネルの「ドメイン設定」から運用するドメイン名を追加する必要があります。当ページではドメイン設定の追加手順についてご案内しています。">

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
            
                <h3 class="sub-ttl">ドメイン設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">ドメイン設定</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.「ドメイン設定」をクリック</a></li>
                                        <li><a href="#link-previous-a02">2.「ドメイン設定の追加」をクリック</a></li>
                                        <li><a href="#link-previous-a03">3.入力内容を確認し、「追加する」をクリック</a></li>
                                        <li><a href="#link-previous-a04">4.ドメイン設定の追加完了</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-a011">無料独自SSLが利用できない場合</a></li>
                                        <li><a href="#link-previous-a012">ドメイン設定の追加ができない場合</a></li>
                                        <li><a href="#link-previous-a013">ドメイン設定の追加時に作成されるフォルダについて</a></li>
                                        <li><a href="#link-previous-a014">ドメイン設定の一覧画面に表示されるアイコンについて</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">ドメイン設定</h4>
                                <div class="section_body">

                                    <p>
                                        取得した独自ドメインをエックスサーバーでご利用になるには、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にてドメイン設定の追加が必要です。<br>
                                        ドメイン設定の追加と同時に、無料独自SSL設定も追加されます。
                                    </p>

                                    <section class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>まだ、独自ドメインを取得していない場合</h6>
                                        <div class="msg_body">
                                            <p>
                                                XServerアカウント内「サービスお申し込み」よりドメインを取得することができます。<br>
                                                詳細は、「<a href="<?php print $SITE_URL; ?>order/order_new_domain.php">ドメイン新規取得</a>」をご参照ください。
                                            </p>
                                        </div>
                                    </section>

                                    <div class="manual-youtube-box">
                                        <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。</p>
                                        <div class="manual-youtube">
                                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/Zjb11kQQlOE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.「ドメイン設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「ドメイン設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_setting_1.png" alt="サーバーパネル・ドメイン設定のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.「ドメイン設定の追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>追加設定ご希望のドメインを入力し、「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_setting_2.png" alt="設定したいドメインが入力されたスクリーンショット"></p>
                                                <p>無料独自SSL・Xアクセラレータの設定が不要な場合は、それぞれチェックを外してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.入力内容を確認し、「追加する」をクリック</h5>
                                            <div class="box_body">
                                                <p>追加するドメイン名のつづりを確認してください。<br>
                                                   「追加する」ボタンをクリックすることにより、ドメイン設定と、無料独自SSLの設定、Xアクセラレータの設定が追加されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_setting_3.png" alt="設定内容を確認する画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.ドメイン設定の追加完了</h5>
                                            <div class="box_body">
                                                <p>「ドメイン設定の追加を完了しました。」が表示されましたら、ドメイン設定の追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_setting_5.png" alt="設定完了画面のスクリーンショット"></p>
                                                <p>
                                                    サーバーアカウント内に追加設定したドメイン専用のフォルダを作成します。<br>
                                                    詳細は、「<a href="#domain_folder">ドメイン設定の追加時に作成されるフォルダについて</a>」をご参照ください。
                                                </p>
                                                <p>なお、ご利用サーバーにドメイン設定が反映されるまで数時間〜最大24時間程度かかる場合があります。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a011">無料独自SSLが利用できない場合</h5>
                                        <div class="block_body">
                                            <p>
                                                設定を追加する対象ドメインの運用状況により、無料独自SSLが利用できないことがあります。<br>
                                                この場合、ドメイン設定は追加完了したものの、無料独自SSL設定が追加できなかった旨のメッセージを表示します。
                                            </p>
                                            <p>
                                                上記のような場合には、サーバーパネル内「SSL設定」にて、無料独自SSLの設定を追加することができます。<br>
                                                詳細は、マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」をご参照ください。
                                            </p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a012">ドメイン設定の追加ができない場合</h5>
                                        <div class="block_body">
                                            <p>
                                                エックスサーバーの仕様上、同一ドメインを複数のサーバーへ設定することができません。<br>
                                                この場合、ドメイン設定時に追加できない旨のメッセージを表示します。
                                            </p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>ドメイン運用サーバーを変更する場合</dt>
                                                <dd>よくある質問「<a href="../support/faq/domain_multi_setting_server_change.php">異なるサーバーIDへドメイン運用サーバーを変更したいです。</a>」でご案内の手順に沿って、ドメイン設定を追加してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>以上に該当しないドメイン設定の追加をご希望の場合</dt>
                                                <dd>該当のメッセージにある「サポートに依頼する」ボタンをクリックしてください。<br>
                                                サポートにて運用状況などを確認後、ご登録メールアドレス宛にメールでご連絡をいたします。</dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section id="domain_folder" class="block">
                                        <h5 class="block_ttl" id="link-previous-a013">ドメイン設定の追加時に作成されるフォルダについて</h5>
                                        <div class="block_body">
                                            <p>ドメイン設定の追加を行うと、FTPサーバー上に初期フォルダが自動生成されます。<br>
                                            サイトデータは追加したドメインフォルダ内の「public_html」フォルダにアップロードしてください。</p>
                                            <table class="table table_use-caption">
                                                <caption>ドメイン設定の追加時に作成されるフォルダの一覧</caption>
                                                <tbody>
                                                    <tr>
                                                        <th>対象ドメイン名/.spamassassin</th>
                                                        <td>迷惑メールフィルタ設定についてのファイルが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/autoreply</th>
                                                        <td>自動応答設定についてのファイルが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/htpasswd</th>
                                                        <td>Basic認証のパスワード設定ファイルが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/log</th>
                                                        <td>アクセスログが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/mail</th>
                                                        <td>メールデータが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/public_html</th>
                                                        <td>サイトデータのアップロード先です。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/script</th>
                                                        <td>cgiツールなどの各種スクリプトが保存されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>対象ドメイン名/xserver_php</th>
                                                        <td>php.ini設定のファイルが保存されます。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section id="domain_icon" class="block">
                                        <h5 class="block_ttl" id="link-previous-a014">ドメイン設定の一覧画面に表示されるアイコンについて</h5>
                                        <div class="block_body">
                                            <p>
                                                設定した各ドメインのネームサーバーや取得状況をチェックし、問題がある場合にはアイコンでエラー内容を表示します。
                                            </p>
                                            <table class="table table_use-caption">
                                                <caption>ドメイン設定の一覧画面に表示されるアイコンの一覧</caption>
                                                <tbody>
                                                <tr>
                                                    <th>反映待ち</th>
                                                    <td>設定反映処理中のドメイン名に表示されます。</td>
                                                </tr>
                                                <tr>
                                                    <th>未取得</th>
                                                    <td>ドメイン名が取得されていないか、有効期限切れなどにより利用できない状況になっているドメイン名に表示されます。</td>
                                                </tr>
                                                <tr>
                                                    <th>Aレコード相違</th>
                                                    <td>
                                                        Aレコードが変更され、別のサーバーを参照しているドメイン名に表示されます。
                                                        <p class="note">※Aレコードを他社サーバーのものでご利用される場合は、「Aレコード相違」と表示された状態で問題ありません。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>NS相違</th>
                                                    <td>
                                                        当サービス所定のネームサーバーとは異なるネームサーバーを利用しているドメイン名に表示されます。
                                                        <p class="note">※ネームサーバーを他社サーバーのものでご利用される場合は、「NS相違」と表示された状態で問題ありません。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>期限切れ</th>
                                                    <td>ドメイン名の失効により、ネームサーバーが強制的に変更されている場合があるドメイン名に表示されます。</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- /.block -->

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
                                    <li><a href="#link-a">ドメイン設定</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「ドメイン設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.「ドメインを追加」をクリック</a></li>
                                            <li><a href="#link-a03">3.ドメイン名を入力し、「追加する」をクリック</a></li>
                                            <li><a href="#link-a04">4.ドメイン設定の追加完了</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-b">無料独自SSLが利用できない場合</a></li>
                                            <li><a href="#link-c">ドメイン設定の追加ができない場合</a></li>
                                            <li><a href="#link-d">ドメイン設定の追加時に作成されるフォルダについて</a></li>
                                            <li><a href="#link-e">ドメイン設定の一覧画面に表示されるアイコンについて</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">ドメイン設定</h4>
                                        <div class="section_body">

                                            <p>
                                                取得した独自ドメインをエックスサーバーでご利用になるには、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にてドメイン設定の追加が必要です。<br>
                                                ドメイン設定の追加と同時に、無料独自SSL設定も追加されます。
                                            </p>

                                            <section class="msg">
                                                <h4 class="msg_ttl"><i class="ico ico_circle"></i>まだ、独自ドメインを取得していない場合</h4>
                                                <div class="msg_body">
                                                    <p> XServerアカウント内「サービスお申し込み」よりドメインを取得することができます。<br>
                                                        詳細は、「<a href="<?php print $SITE_URL; ?>order/order_new_domain.php">ドメイン新規取得</a>」をご参照ください。</p>
                                                </div>
                                            </section>

                                            <div class="serial-box mb40">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a01">1.「ドメイン設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a> へログインし、「ドメイン設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_setting_1.png?date=2410" alt="サーバーパネル・ドメイン設定のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a02">2.「ドメインを追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「ドメインを追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_setting_2.png?date=2410" alt="ドメインを追加スクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a03">3.ドメイン名を入力し、「追加する」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>追加するドメイン名を入力し、「追加する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_setting_3.png?date=250117" alt="ドメイン名入力画面のスクリーンショット"></p>
                                                        <p>無料独自SSLが不要な場合は、チェックを外してください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a04">4.ドメイン設定の追加完了</h5>
                                                    <div class="box_body">
                                                        <p>以上でドメイン設定の追加は完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_setting_5.png?date=2410" alt="設定完了画面のスクリーンショット"></p>
                                                        <p>
                                                            サーバーアカウント内に追加設定したドメイン専用のフォルダを作成します。<br>
                                                            詳細は、「<a href="#link-d">ドメイン設定の追加時に作成されるフォルダについて</a>」をご参照ください。
                                                        </p>
                                                        <p>なお、ご利用サーバーにドメイン設定が反映されるまで数時間〜最大24時間程度かかる場合があります。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b">無料独自SSLが利用できない場合</h5>
                                                <div class="block_body">
                                                    <p>
                                                        設定を追加する対象ドメインの運用状況により、無料独自SSLが利用できないことがあります。<br>
                                                        この場合、ドメイン設定は追加完了したものの、無料独自SSL設定が追加できなかった旨のメッセージを表示します。
                                                    </p>
                                                    <p>
                                                        上記のような場合には、サーバーパネル内「SSL設定」にて、無料独自SSLの設定を追加することができます。<br>
                                                        詳細は、マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」をご参照ください。
                                                    </p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-c">ドメイン設定の追加ができない場合</h5>
                                                <div class="block_body">
                                                    <p>
                                                        エックスサーバーの仕様上、同一ドメインを複数のサーバーへ設定することができません。<br>
                                                        この場合、ドメイン設定時に追加できない旨のメッセージを表示します。
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>ドメイン運用サーバーを変更する場合</dt>
                                                        <dd>よくある質問「<a href="../support/faq/domain_multi_setting_server_change.php">異なるサーバーIDへドメイン運用サーバーを変更したいです。</a>」でご案内の手順に沿って、ドメイン設定を追加してください。</dd>
                                                        <dt><i class="ico ico_square-fill"></i>以上に該当しないドメイン設定の追加をご希望の場合</dt>
                                                        <dd>該当のメッセージにある「サポートに依頼する」ボタンをクリックしてください。<br>
                                                            サポートにて運用状況などを確認後、ご登録メールアドレス宛にメールでご連絡をいたします。</dd>
                                                    </dl>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-d">ドメイン設定の追加時に作成されるフォルダについて</h5>
                                                <div class="block_body">
                                                    <p>
                                                        ドメイン設定の追加を行うと、FTPサーバー上に初期フォルダが自動生成されます。<br>
                                                        サイトデータは追加したドメインフォルダ内の「public_html」フォルダにアップロードしてください。
                                                    </p>
                                                    <table class="table table_use-caption">
                                                        <caption>ドメイン設定の追加時に作成されるフォルダの一覧</caption>
                                                        <tbody>
                                                        <tr>
                                                            <th>対象ドメイン名/.spamassassin</th>
                                                            <td>迷惑メールフィルタ設定についてのファイルが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/autoreply</th>
                                                            <td>自動応答設定についてのファイルが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/htpasswd</th>
                                                            <td>Basic認証のパスワード設定ファイルが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/log</th>
                                                            <td>アクセスログが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/mail</th>
                                                            <td>メールデータが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/public_html</th>
                                                            <td>サイトデータのアップロード先です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/script</th>
                                                            <td>cgiツールなどの各種スクリプトが保存されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>対象ドメイン名/xserver_php</th>
                                                            <td>php.ini設定のファイルが保存されます。</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>

                                            <section id="domain_icon" class="block">
                                                <h5 class="block_ttl" id="link-e">ドメイン設定の一覧画面に表示されるアイコンについて</h5>
                                                <div class="block_body">
                                                    <p>
                                                        設定した各ドメインのネームサーバーや取得状況をチェックし、問題がある場合にはアイコンでエラー内容を表示します。
                                                    </p>
                                                    <table class="table table_use-caption">
                                                        <caption>ドメイン設定の一覧画面に表示されるアイコンの一覧</caption>
                                                        <tbody>
                                                        <tr>
                                                            <th>反映待ち</th>
                                                            <td>設定反映処理中のドメイン名に表示されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>未取得</th>
                                                            <td>ドメイン名が取得されていないか、有効期限切れなどにより利用できない状況になっているドメイン名に表示されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Aレコード相違</th>
                                                            <td>
                                                                Aレコードが変更され、別のサーバーを参照しているドメイン名に表示されます。
                                                                <p class="note">※Aレコードを他社サーバーのものでご利用される場合は、「Aレコード相違」と表示された状態で問題ありません。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>NS相違</th>
                                                            <td>
                                                                当サービス所定のネームサーバーとは異なるネームサーバーを利用しているドメイン名に表示されます。
                                                                <p class="note">※ネームサーバーを他社サーバーのものでご利用される場合は、「NS相違」と表示された状態で問題ありません。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>期限切れ</th>
                                                            <td>ドメイン名の失効により、ネームサーバーが強制的に変更されている場合があるドメイン名に表示されます。</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- 新パネル -->
                    </div>
                </div>
                <?php include("vote.php"); ?>

                <section class="section">
                    <div class="pickupFaq">
                        <div class="pickupFaq__title">よくある質問</div>
                        <ul class="pickupFaq__list">
                            <li><a href="../support/faq/domain_multi_setting_not_acquired.php">サーバーパネルにドメイン設定をしましたが、「未取得」と表示されてしまいます。</a></li>
                            <li><a href="../support/faq/domain_multi_setting_nsdifference.php">サーバーパネルにドメイン設定をしましたが、「NS相違」と表示されています。</a></li>
                            <li><a href="../support/faq/domain_multi_setting_waiting.php">ドメイン設定が「反映待ち」の状態ですが、表示が消えるまでにメールアドレスの作成などをすることは可能ですか？</a></li>
                            <li><a href="../support/faq/domain_multi_otherservice.php">他社で取得したドメインを利用できますか？</a></li>
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
