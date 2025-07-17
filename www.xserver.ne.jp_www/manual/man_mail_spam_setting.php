<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>迷惑メールフィルタ設定 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで作成したメールアドレスへ到着するメールに対してスパムチェックができる「迷惑メールフィルタ設定」機能のご案内です。">

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

                        <h3 class="sub-ttl">迷惑メールフィルタ設定</h3>

                        <div class="supportTabArea">
                            <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                                <!-- 旧パネル -->
                                <div class="supportTabContents">

                                    <div class="toc-list">
                                        <p class="toc-list--head">目次</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">迷惑（スパム）メール設定</a>
                                                <ol>
                                                    <li><a href="#link-previous-a01">1.迷惑メールフィルタ設定を選択</a></li>
                                                    <li><a href="#link-previous-a02">2. 各項目の設定内容を選択する</a></li>
                                                    <li><a href="#link-previous-a03">3.変更</a></li>
                                                    <li><a href="#link-previous-a04">4.ブラックリスト・ホワイトリスト等の設定</a></li>
                                                    <li><a href="#link-previous-a05">5.受信側DMARCの設定</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>


                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">迷惑（スパム）メール設定</h4>
                                        <div class="section_body">

                                            <p class="mb30">迷惑メール設定は、ドメイン単位で設定されます。マルチドメインにて複数お持ちの場合には、全てのドメインに対して操作を行っていただく必要があります。</p>

                                            <dl class="dl">
                                                <dt>メール受信時のフローについて</dt>
                                                <dd class="pl0">
                                                    <p>メール受信時、図の順番で処理が行われます。</p>
                                                    <div class="receiveMail">
                                                        <div class="receiveMailContents">
                                                            <ul class="flowNav">
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">受信側DMARC設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">メールの振り分け設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">自動応答設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">転送設定</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="receiveMailContents">
                                                            <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                                他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                            <p class="note mb0">※迷惑メールフィルタ設定によって、迷惑メールフォルダ、ゴミ箱フォルダへ移動された、または削除されたメールは後続の「メールの振り分け設定」「自動応答設定」「転送設定」の対象になりません。</p>
                                                            <p class="note">※設定状況によっては「2.迷惑メールフィルタ設定」と「3.メールの振り分け設定」の順番が入れ替わる場合があります。</p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>

                                            <div class="serial-box mb10">

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a01">1.迷惑メールフィルタ設定を選択</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認し、「迷惑メールフィルタ設定」を選択します。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_1.png" alt="迷惑メールフィルタ設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a02">2. 各項目の設定内容を選択する</h6>
                                                    <div class="box_body">
                                                        <p>対象ドメインに適用する設定を選択し「設定する」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_2.png" alt="迷惑メールフィルタ設定の状態を変更しているスクリーンショット"></p>

                                                        <table class="table w100per">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL">OFF</th>
                                                                <td>
                                                                    <p>メールフィルタが無効になります。</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ON（標準スパムフィルタ）</th>
                                                                <td>
                                                                    <p>迷惑メール対策ソフトウェア SpamAssassin （スパムアサシン）が有効化されます。</p>

                                                                    <p>迷惑メール判定基準は6段階から選択いただけます。<br>
                                                                        また、判定オプションを利用することで、より厳しい迷惑メールを判定を行えます。</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ON（高性能スパムフィルタ「Cloudmark Authority」）</th>
                                                                <td>
                                                                    <p>迷惑メール対策ソフトウェア Cloudmark (クラウドマーク)が有効化されます。</p>
                                                                    <p>
                                                                        ※１サーバーアカウントにつき設定するメールアカウント数に上限がございます。</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>各プランにおける設定上限</dt>
                                                                        <dd>
                                                                            <ul class="ul mb0">
                                                                                <li>スタンダード…100個</li>
                                                                                <li>プレミアム…100個</li>
                                                                                <li>ビジネス…1000個</li>
                                                                            </ul>
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <table class="table w100per">
                                                            <caption>迷惑メールフィルタ検知時の処理設定</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30perL">受信箱へ配信する(標準設定)</th>
                                                                <td>
                                                                    <p>迷惑メールが通常メールと同様に「受信箱」フォルダに配信されます。</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>迷惑メールフォルダへ移動</th>
                                                                <td>
                                                                    <p>迷惑メールが「迷惑メール」フォルダに転送されます。<br>
                                                                    迷惑メールフォルダに転送されたメールは「<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/" target="_blank">WEBメール</a>」で確認可能です。</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>ゴミ箱フォルダへ移動</th>
                                                                <td>
                                                                    <p>迷惑メールが「ゴミ箱」フォルダに転送されます。<br>
                                                                       ゴミ箱へ転送されたメールは7日後に自動的に削除されます。</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>削除する</th>
                                                                <td>
                                                                    <p>迷惑メールが削除されます。</p>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_info">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>迷惑メールフィルタ検知時の共通処理について</h6>
                                                            <div class="msg_body">
                                                                <p>迷惑メールフィルタ検知時の処理設定にかかわらず、迷惑メールフィルタ検知時はメール件名の先頭に[SPAM]という文字列を付加します。</p>
                                                            </div>
                                                        </aside>

                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設定上のご注意</h6>
                                                            <div class="msg_body">
                                                                <p>「削除する」に振り分けられたメールはサーバーから【削除】されます。削除後はメールの確認ができませんので、あらかじめご注意ください。</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a03">3.変更</h6>
                                                    <div class="box_body">
                                                        <p>変更されますと、下記の画面となります。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_3.png" alt="迷惑メールフィルタ設定：変更完了画面のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a04">4.ブラックリスト・ホワイトリスト等の設定</h6>
                                                    <div class="box_body">
                                                        <p>迷惑メール判定を回避するホワイトリストや、逆に、常に迷惑メール扱いするブラックリストを設定することも可能です。</p>

                                                        <p>「ホワイトリスト設定」「ブラックリスト設定」メニューにアクセスし、ご希望のメールアドレスを1行1アドレスで登録してください。<br>
                                                        また、*（アスタリスク）を使用して複数のメールアドレスを指定することも可能です。（例）ドメイン毎に指定する場合：*@example.jp</p>

                                                        <p><img class="img" src="../img/manual/previous/man_mail_spam_setting_5.png" alt="ブラックリスト・ホワイトリストを選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-a05">5.受信側DMARCの設定</h6>
                                                    <div class="box_body">

                                                        <dl class="dl">
                                                            <dt>メール受信時のフローについて</dt>
                                                            <dd class="pl0">
                                                                <p>メール受信時、図の順番で処理が行われます。</p>
                                                                <div class="receiveMail">
                                                                    <div class="receiveMailContents">
                                                                        <ul class="flowNav">
                                                                            <li class="flowNav__item current">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">受信側DMARC設定</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">メールの振り分け設定</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">自動応答設定</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="flowNav__item">
                                                                                <div class="flowNav__box">
                                                                                    <p class="flowNav__ttl">転送設定</p>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="receiveMailContents">
                                                                        <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                                            他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                                    </div>
                                                                </div>
                                                            </dd>
                                                        </dl>

                                                        <p>
                                                            送信側で「DMARCポリシー」が指定されているメールを受信した場合、DMARCポリシーに従ってメールを振り分けます。<br>
                                                        </p>

                                                        <table class="table table_responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th>ON</th>
                                                                <td>
                                                                    DKIM認証、SPF認証の両方が認証失敗した場合、送信側DMARCポリシーに沿った処理を行います。<br>
                                                                    <p class="note">
                                                                        ※迷惑メール設定・ホワイトリスト設定・ブラックリスト設定は、DMARC設定にかかわらず適用されます。<br>
                                                                        DMARC設定がONの時はDMARC設定が優先されます。
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>OFF</th>
                                                                <td>送信側のDMARCポリシーにかかわらず、通常通りメールを受信します。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><img class="img" src="../img/manual/previous/man_domain_setting_6.png" alt="受信側DMARC設定画面のスクリーンショット"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>送信側DMARC設定について</dt>
                                                <dd>
                                                    <p>DMARCの概要、送信側DMARC設定については<a href="../manual/man_mail_dmarc.php">DMARC設定</a>よりご確認いただけます。</p>
                                                </dd>
                                            </dl>
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
                                            <li><a href="#link-a">迷惑（スパム）メール設定</a>
                                                <ol>
                                                    <li><a href="#link-a1">1.「迷惑メールフィルタ設定」をクリック</a></li>
                                                    <li><a href="#link-a2">2.各項目の設定内容を選択する</a></li>
                                                    <li><a href="#link-a3">3.ブラックリスト・ホワイトリスト等の設定</a></li>
                                                    <li><a href="#link-a4">4.受信側DMARCの設定</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                    </ul>

                                    <section class="section">
                                        <div class="sectionBody">

                                            <section id="link-a" class="section">
                                                <h4 class="section_ttl">迷惑（スパム）メール設定</h4>
                                                <div class="section_body">

                                                    <dl class="dl">
                                                        <dt>メール受信時のフローについて</dt>
                                                        <dd class="pl0">
                                                            <p>メール受信時、図の順番で処理が行われます。</p>
                                                            <div class="receiveMail">
                                                                <div class="receiveMailContents">
                                                                    <ul class="flowNav">
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">受信側DMARC設定</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item current">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">メールの振り分け設定</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">自動応答設定</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="flowNav__item">
                                                                            <div class="flowNav__box">
                                                                                <p class="flowNav__ttl">転送設定</p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="receiveMailContents">
                                                                    <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                                        他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                                    <p class="note mb0">※迷惑メールフィルタ設定によって、迷惑メールフォルダ、ゴミ箱フォルダへ移動された、または削除されたメールは後続の「メールの振り分け設定」「自動応答設定」「転送設定」の対象になりません。</p>
                                                                    <p class="note">※設定状況によっては「2.迷惑メールフィルタ設定」と「3.メールの振り分け設定」の順番が入れ替わる場合があります。</p>
                                                                </div>
                                                            </div>
                                                        </dd>
                                                    </dl>

                                                    <div class="serial-box mb10">

                                                        <section class="box">
                                                            <h5 id="link-a1" class="box_ttl">1. 「迷惑メールフィルタ設定」をクリック</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「迷惑メールフィルタ設定」をクリックします。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_1.png?date=2410" alt="「迷惑メールフィルタ設定」を選択しているスクリーンショット"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a2" class="box_ttl">2. 各項目の設定内容を選択する</h5>
                                                            <div class="box_body">
                                                                <p>対象ドメインの右端にある[編集]ボタンをクリックします。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_2.png?date=2410" alt="迷惑メールフィルタ設定で[編集]を選択しているスクリーンショット"></p>

                                                                <p>[迷惑メールフィルタ]、[検知時の処理]を設定し、「設定する」ボタンをクリックすると設定完了です。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_3.png?date=2410" alt="迷惑メールフィルタ設定画面"></p>

                                                                <table class="table w100per">
                                                                    <caption>迷惑メールフィルタ</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>ON（高性能スパムフィルタ「Cloudmark Authority」）</th>
                                                                        <td>
                                                                            <p>迷惑メール対策ソフトウェア Cloudmark (クラウドマーク)が有効化されます。</p>
                                                                            <p>
                                                                                ※１サーバーアカウントにつき設定するメールアカウント数に上限がございます。</p>
                                                                            <dl class="dl">
                                                                                <dt><i class="ico ico_square-fill"></i>各プランにおける設定上限</dt>
                                                                                <dd>
                                                                                    <ul class="ul mb0">
                                                                                        <li>スタンダード…100個</li>
                                                                                        <li>プレミアム…100個</li>
                                                                                        <li>ビジネス…1000個</li>
                                                                                    </ul>
                                                                                </dd>
                                                                            </dl>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>ON</th>
                                                                        <td>
                                                                            <p>迷惑メール対策ソフトウェア SpamAssassin （スパムアサシン）が有効化されます。</p>

                                                                            <p>迷惑メール判定基準は6段階から選択いただけます。<br>
                                                                                また、判定オプションを利用することで、より厳しい迷惑メールを判定を行えます。</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="w30perL">OFF</th>
                                                                        <td>
                                                                            <p>メールフィルタが無効になります。</p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table w100per">
                                                                    <caption>検知時の処理</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="w30perL">受信箱へ配信する(標準設定)</th>
                                                                        <td>
                                                                            <p>迷惑メールが通常メールと同様に「受信箱」フォルダに配信されます。</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>迷惑メールフォルダへ移動する</th>
                                                                        <td>
                                                                            <p>迷惑メールがWEBメールの「迷惑メール」フォルダに転送されます。</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>ゴミ箱フォルダへ移動する</th>
                                                                        <td>
                                                                            <p>迷惑メールが「ゴミ箱」フォルダに転送されます。<br>
                                                                               ゴミ箱へ転送されたメールは7日後に自動的に削除されます。</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>削除する</th>
                                                                        <td>
                                                                            <p>迷惑メールが削除されます。</p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <aside class="msg msg_info">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>迷惑メールフィルタ検知時の共通処理について</h6>
                                                                    <div class="msg_body">
                                                                        <p>迷惑メールフィルタ検知時の処理設定にかかわらず、迷惑メールフィルタ検知時はメール件名の先頭に[SPAM]という文字列を付加します。</p>
                                                                    </div>
                                                                </aside>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設定上のご注意</h6>
                                                                    <div class="msg_body">
                                                                        <p>「削除する」に振り分けられたメールはサーバーから【削除】されます。削除後はメールの確認ができませんので、あらかじめご注意ください。</p>
                                                                    </div>
                                                                </aside>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a3" class="box_ttl">3. ブラックリスト・ホワイトリスト等の設定</h5>
                                                            <div class="box_body">
                                                                <p>迷惑メール判定を回避するホワイトリストや、逆に、常に迷惑メール扱いするブラックリストを設定することも可能です。</p>
                                                                <p>[ホワイトリスト]、[ブラックリスト]にご希望のメールアドレスを1行1アドレスで登録してください。
                                                                    また、*（アスタリスク）を使用して複数のメールアドレスを指定することも可能です。（例：*@example.jp）
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_mail_spam_setting_4.png?date=2410" alt="ブラックリスト・ホワイトリストを選択しているスクリーンショット"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-a4" class="box_ttl">4.受信側DMARCの設定</h5>
                                                            <div class="box_body">

                                                                <dl class="dl">
                                                                    <dt>メール受信時のフローについて</dt>
                                                                    <dd class="pl0">
                                                                        <p>メール受信時、図の順番で処理が行われます。</p>
                                                                        <div class="receiveMail">
                                                                            <div class="receiveMailContents">
                                                                                <ul class="flowNav">
                                                                                    <li class="flowNav__item current">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">受信側DMARC設定</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">メールの振り分け設定</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">自動応答設定</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="flowNav__item">
                                                                                        <div class="flowNav__box">
                                                                                            <p class="flowNav__ttl">転送設定</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="receiveMailContents">
                                                                                <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                                                    他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                                            </div>
                                                                        </div>
                                                                    </dd>
                                                                </dl>

                                                                <p>
                                                                    送信側で「DMARCポリシー」が指定されているメールを受信した場合、DMARCポリシーに従ってメールを振り分けます。<br>
                                                                </p>

                                                                <table class="table table_responsive">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>ON</th>
                                                                        <td>
                                                                            DKIM認証、SPF認証の両方が認証失敗した場合、送信側DMARCポリシーに沿った処理を行います。<br>
                                                                            <p class="note">
                                                                                ※迷惑メール設定・ホワイトリスト設定・ブラックリスト設定は、DMARC設定にかかわらず適用されます。<br>
                                                                                DMARC設定がONの時はDMARC設定が優先されます。
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>OFF</th>
                                                                        <td>送信側のDMARCポリシーにかかわらず、通常通りメールを受信します。</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><img class="img" src="../img/manual/man_domain_setting_6.png?date=2410" alt="受信側DMARC設定画面のスクリーンショット"></p>
                                                            </div>
                                                        </section>

                                                    </div>
                                                    <!-- /.serial-box -->

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>送信側DMARC設定について</dt>
                                                        <dd>
                                                            <p>DMARCの概要、送信側DMARC設定については<a href="../manual/man_mail_dmarc.php">DMARC設定</a>よりご確認いただけます。</p>
                                                        </dd>
                                                    </dl>

                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設定上のご注意</h5>
                                                        <div class="msg_body">
                                                            <p>この変更は、ドメイン単位で行われております。マルチドメインにて複数お持ちの場合には、全てのドメインに対して操作を行っていただく必要があります。</p>
                                                        </div>
                                                    </aside>

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