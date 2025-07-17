<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールの振り分け | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで作成したメールアドレスへ到着したメールに対して様々な条件を指定し振り分けることができる「メールの振り分け」機能のご案内です。">

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
            
                <h3 class="sub-ttl">メールの振り分け</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールの振り分けについて</a></li>
                                    <li><a href="#link-previous-b">メールの振り分け設定</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「メールの振り分け」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.「メール振り分け設定追加」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.振り分け条件を設定</a></li>
                                            <li><a href="#link-previous-b04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>



                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールの振り分けについて</h4>
                                <div class="section_body">

                                    <p>
                                        メールに対して、様々な条件を指定し振り分けることができます。<br>
                                        迷惑メールのフィルタリングや特定メールの振り分けにご活用ください。
                                    </p>
                                    <p>
                                        メールの振り分け設定はドメインごとの設定となります。<br>
                                        また、当社の迷惑メール検知プログラムにて検知された迷惑メールの振り分けに関しては、<a href="../manual/man_mail_spam_setting.php">迷惑メールフィルタ設定</a>にて設定してください。
                                    </p>

                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h4>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>日本語（マルチバイト）を含むメールにおいては、文字コードの相違により、振り分け設定が機能しない場合もあります。</li>
                                                <li>添付ファイルを含むメールの場合、正常に振り分け処理が機能しない場合があります。</li>
                                            </ul>
                                        </div>
                                    </aside>

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
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item current">
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
                                                    <p class="note mb0">※メール振り分け設定によって「転送」されたメールは後続の「自動応答設定」「転送設定」の対象になりません。</p>
                                                    <p class="note mb0">※メール振り分け設定によって「コピー転送」されたメールは後続の「自動応答設定」「転送設定」の対象になります。</p>
                                                    <p class="note">※設定状況によっては「2.迷惑メールフィルタ設定」と「3.メールの振り分け設定」の順番が入れ替わる場合があります。</p>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">メールの振り分け設定</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「メールの振り分け」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールの振り分け」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_1.png" alt="メールの振り分けを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「メール振り分け設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>「メール振り分け設定追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_2.png" alt="「メールフィルタの追加」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.振り分け条件を設定</h6>
                                            <div class="box_body">
                                                <p>振り分け条件を設定し、「確認画面へ進む」をクリックします。</p>
                                                <p class="note">※条件2と3は、全てand条件で設定されます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_3.png" alt="メールの振り分け設定のスクリーンショット"></p>
                                                <table class="table table_use-caption">
                                                    <caption>各項目の説明</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">条件（キーワード）</th>
                                                            <td>振り分けをしたいキーワードを入力</td>
                                                        </tr>
                                                        <tr>
                                                            <th>条件（場所）</th>
                                                            <td>キーワードの場所を選択</td>
                                                        </tr>
                                                        <tr>
                                                            <th>条件（一致）</th>
                                                            <td>キーワードが「内容が一致する（完全一致）」か「内容を含む」か「から始まる」かを選択</td>
                                                        </tr>
                                                        <tr>
                                                            <th>処理方法（宛先）</th>
                                                            <td>転送したい宛先を指定</td>
                                                        </tr>
                                                        <tr>
                                                            <th>処理方法（配送方法）</th>
                                                            <td>メールボックスに残らない「転送」か、メールボックスに残る「コピー転送」かを選択</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>設定例：特定のメールアドレスからのメールを削除する</dt>
                                                    <dd>
                                                        <p>サーバーパネル「メールの振り分け」で下記のように設定してください。</p>
                                                        <table class="table table_use-caption">
                                                            <caption>設定例</caption>
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w30per wauto-s">条件（キーワード）</th>
                                                                    <td>拒否したいメールアドレス</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>条件（場所）</th>
                                                                    <td>差出人</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>条件（一致）</th>
                                                                    <td>内容を含む</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>処理方法（宛先）</th>
                                                                    <td>削除</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>処理方法（配送方法）</th>
                                                                    <td>転送</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                            <div class="msg_body">
                                                                <p>「削除」へ転送されると振り分けられたメールはサーバーから【削除】されます。削除後はメールの確認ができませんので、あらかじめご注意ください。</p>
                                                            </div>
                                                        </aside>
                                                    </dd>
                                                </dl>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>「処理方法（宛先）」の指定方法について</dt>
                                                    <dd>
                                                        <p>「処理方法(宛先)」の箇所にメールアドレスや、コマンドパスを入力することも可能です。</p>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>メールアドレス指定する場合</p>
                                                            <p class="mb0">sample@example.com　と設定　→ sample@example.com へ転送します。</p>
                                                        </div>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>コマンドパス指定する場合</p>
                                                            <p>| /home/sample/... /tensou.php　と設定　→ /home/sample/... /tensou.php へメールを渡します。</p>
                                                            <p class="note">※PHPやPerlなどのスクリプトを実行する際、「|」(パイプ)を先頭に、コマンドパスもあわせて記述してください。</p>
                                                            <p>また、実行するスクリプトファイルに対し、実行権限を付与するパーミッション(パーミッション値「701」など)に変更する必要があります。</p>
                                                            <div class="border border_blue">
                                                            <em class="font-bold">（例）tensou.phpをPHP5.6で実行する場合</em><br>
                                                            |/usr/bin/php5.6 /home/sample/... /tensou.php
                                                            </div>
                                                            <p class="mb0">なお、コマンドパスについてはサーバーパネル「サーバー情報」の「コマンドパス一覧」より確認可能です。</p>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.設定完了</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、問題がなければ「追加する」をクリックします。</p>
                                                <p>追加後「メール振り分け設定一覧」より設定内容の確認が可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_sorting_4.png" alt="メールの振り分けルールの設置に成功したスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">メールの振り分けについて</a></li>
                                    <li><a href="#link-b">メールの振り分け設定</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「メールの振り分け」をクリック</a></li>
                                            <li><a href="#link-b2">2.「メール振り分け設定を追加」をクリック</a></li>
                                            <li><a href="#link-b3">3.振り分け条件を設定</a></li>
                                            <li><a href="#link-b4">4.設定完了</a></li>
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
                                        <h4 class="section_ttl">メールの振り分けについて</h4>
                                        <div class="section_body">

                                            <p>メールに対して、様々な条件を指定し振り分けることができます。<br>
                                                迷惑メールのフィルタリングや特定メールの振り分けにご活用ください。</p>
                                            <p class="note">※ドメインごとの設定となります。</p>

                                            <aside class="msg msg_caution mt10">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                <div class="msg_body">
                                                    <ul class="ul mb0">
                                                        <li>日本語（マルチバイト）を含むメールにおいては、文字コードの相違により、振り分け設定が機能しない場合もあります。</li>
                                                        <li>添付ファイルを含むメールの場合、正常に振り分け処理が機能しない場合があります。</li>
                                                        <li>当社の迷惑メール検知プログラムにて検知された迷惑メールの振り分けに関しては、<a href="../manual/man_mail_spam_setting.php">迷惑メールフィルタ設定</a>にて設定してください。</li>
                                                    </ul>
                                                </div>
                                            </aside>

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
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
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
                                                            <p class="note mb0">※メール振り分け設定によって「転送」されたメールは後続の「自動応答設定」「転送設定」の対象になりません。</p>
                                                            <p class="note mb0">※メール振り分け設定によって「コピー転送」されたメールは後続の「自動応答設定」「転送設定」の対象になります。</p>
                                                            <p class="note">※設定状況によっては「2.迷惑メールフィルタ設定」と「3.メールの振り分け設定」の順番が入れ替わる場合があります。</p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">メールの振り分け設定</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1.「メールの振り分け」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールの振り分け」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_1.png?date=2410" alt="メールの振り分けを選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2.「メール振り分け設定を追加」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>「メール振り分け設定を追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_2.png?date=2410" alt="「メール振り分け設定を追加」をフォーカスしているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3.振り分け条件を設定</h5>
                                                    <div class="box_body">
                                                        <p>振り分け条件を設定し、「追加する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_3.png?date=2410" alt="メールの振り分け設定のスクリーンショット"></p>
                                                        <table class="table table_use-caption">
                                                            <caption>各項目の説明</caption>
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per">条件（キーワード）</th>
                                                                <td>振り分けをしたいキーワードを入力</td>
                                                            </tr>
                                                            <tr>
                                                                <th>条件（場所）</th>
                                                                <td>キーワードの場所を選択</td>
                                                            </tr>
                                                            <tr>
                                                                <th>条件（一致）</th>
                                                                <td>キーワードが「内容が一致する（完全一致）」か「内容を含む」か「から始まる」かを選択</td>
                                                            </tr>
                                                            <tr>
                                                                <th>処理方法（宛先）</th>
                                                                <td>転送したい宛先を指定</td>
                                                            </tr>
                                                            <tr>
                                                                <th>処理方法（配送方法）</th>
                                                                <td>メールボックスに残る「コピー転送」か、メールボックスに残らない「転送」かを選択</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>設定例：特定のメールアドレスからのメールを削除する</dt>
                                                            <dd>
                                                                <p>サーバーパネル「メールの振り分け」で下記のように設定してください。</p>
                                                                <table class="table table_use-caption">
                                                                    <caption>設定例</caption>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="w30per wauto-s">条件（キーワード）</th>
                                                                        <td>拒否したいメールアドレス</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>条件（場所）</th>
                                                                        <td>差出人</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>条件（一致）</th>
                                                                        <td>内容を含む</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>処理方法（宛先）</th>
                                                                        <td>削除</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>処理方法（配送方法）</th>
                                                                        <td>転送</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                    <div class="msg_body">
                                                                        <p>「削除」へ転送されると振り分けられたメールはサーバーから【削除】されます。削除後はメールの確認ができませんので、あらかじめご注意ください。</p>
                                                                    </div>
                                                                </aside>
                                                            </dd>
                                                        </dl>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>「処理方法（宛先）」の指定方法について</dt>
                                                            <dd>
                                                                <p>「処理方法(宛先)」の箇所にメールアドレスや、コマンドパスを入力することも可能です。</p>
                                                                <div class="border border_gray">
                                                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>メールアドレス指定する場合</p>
                                                                    <p class="mb0">sample@example.com　と設定　→ sample@example.com へ転送します。</p>
                                                                </div>
                                                                <div class="border border_gray">
                                                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>コマンドパス指定する場合</p>
                                                                    <p>| /home/sample/... /tensou.php　と設定　→ /home/sample/... /tensou.php へメールを渡します。</p>
                                                                    <p class="note">※PHPやPerlなどのスクリプトを実行する際、「|」(パイプ)を先頭に、コマンドパスもあわせて記述してください。</p>
                                                                    <p>また、実行するスクリプトファイルに対し、実行権限を付与するパーミッション(パーミッション値「701」など)に変更する必要があります。</p>
                                                                    <div class="border border_blue">
                                                                        <em class="font-bold">（例）tensou.phpをPHP5.6で実行する場合</em><br>
                                                                        |/usr/bin/php5.6 /home/sample/... /tensou.php
                                                                    </div>
                                                                    <p class="mb0">なお、コマンドパスについてはサーバーパネル「サーバー情報」の「コマンドパス一覧」より確認可能です。</p>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b4" class="box_ttl">4. 設定完了</h5>
                                                    <div class="box_body">
                                                        <p>追加後「メール振り分け設定」より設定内容の確認が可能です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_sorting_4.png?date=2410" alt="メールの振り分けルールの設置に成功したスクリーンショット"></p>
                                                    </div>
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