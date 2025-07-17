<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SPF設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜電子メールの送信元ドメインが詐称されていないかを検査し、送信メールの改ざん・なりすましを防ぐ「SPF設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">SPF設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">SPF設定について</a></li>
                                    <li><a href="#link-previous-b">SPFの設定方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「SPF設定」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.設定するドメインまたはサブドメインの「ONにする」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.「ONにする」をクリック</a></li>
                                            <li><a href="#link-previous-b04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">SPF設定にGmailをSMTPサーバーとして利用する際の設定を追加する</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.「Gmail許可の追加」をクリック</a></li>
                                            <li><a href="#link-previous-c02">2.「追加する」をクリック</a></li>
                                            <li><a href="#link-previous-c03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">カスタム設定について</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">1.「カスタム設定」をクリック</a></li>
                                            <li><a href="#link-previous-d02">2.レコード内容を編集し「確認画面へ進む」をクリック</a></li>
                                            <li><a href="#link-previous-d03">3.「変更する」をクリック</a></li>
                                            <li><a href="#link-previous-d04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">初期化について</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.「初期化」をクリック</a></li>
                                            <li><a href="#link-previous-e02">2.「初期化をする」をクリック</a></li>
                                            <li><a href="#link-previous-e03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>



                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">SPF設定について</h4>
                                <div class="section_body">
                                    <p>
                                        SPF(Sender Policy Framework)とは、電子メールの送信元ドメインが詐称されていないかを検査し、送信メールの改ざん・なりすましを防ぐ技術です。<br>
                                        送信メールの信頼性向上やメール到達率の向上が期待されます。
                                    </p>
                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h4>
                                        <div class="msg_body">
                                            <p>ドメイン設定での独自ドメインを追加時に、SPFレコードを自動で追加いたします。<br>
                                                そのため、独自ドメインに対してお客様ご自身でSPF設定を追加していただく必要はありません。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">SPFの設定方法</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「SPF設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SPF設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_1.png" alt="「SPF設定」を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.設定するドメインまたはサブドメインの「ONにする」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定するドメインまたはサブドメインを選択し、「ONにする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_2.png" alt="「ONにする」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.「ONにする」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、「ONにする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_3.png" alt="「ONにする」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.設定完了</h6>
                                            <div class="box_body">
                                                <p>一覧画面の設定したドメインに「ON（標準設定）」と表示されていれば設定完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_4.png" alt="SPF設定一覧画面のスクリーンショット"></p>
                                                <p>SPF設定をONにすることでDNSレコードに以下の内容が追加されます。</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per">ホスト</th>
                                                        <td> 設定をONにしたドメイン</td>
                                                    </tr>
                                                    <tr>
                                                        <th>種別</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>内容</th>
                                                        <td>
                                                            <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>内容について</dt>
                                                                <dd>・「sv***.xserver.jp」の部分は、お客様がご利用のサーバーのホスト名となります。<br>
                                                                    ・「example.com」の部分は、設定をONにしたドメイン名となります。
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>SPF設定がサーバーに反映されるまでに、数分から数時間程度かかる場合があります。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">SPF設定にGmailをSMTPサーバーとして利用する際の設定を追加する</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.「Gmail許可の追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定内容が「ON(標準設定)」のドメインまたはサブドメインを選択し、「Gmail許可の追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_5.png" alt="「Gmail許可の追加」を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.「追加する」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、「追加する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_6.png" alt="「追加する」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.設定完了</h6>
                                            <div class="box_body">
                                                <p>一覧画面の設定したドメインに「ON（標準設定+Gmail許可設定）」と表示されていれば設定完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_7.png" alt="SPF設定一覧画面のスクリーンショット"></p>
                                                <p>Gmail許可設定を追加することで、SPFレコードに以下の内容が追加されます。</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per">内容</th>
                                                        <td>
                                                            <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp <b>include:_spf.google.com</b> ~all</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>内容について</dt>
                                                                <dd>・「include:_spf.google.com」の値がSPFレコードに追記されます。
                                                                </dd>
                                                            </dl>
                                                        </td>
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
                                <h4 class="section_ttl" id="link-previous-d">カスタム設定について</h4>
                                <div class="section_body">

                                    <p>
                                        SPF設定をONにしたドメインに対しては、ご自身で直接SPFレコードを編集いただくことが可能です。
                                    </p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>カスタム設定にて入力されましたSPFレコードの挙動については、サポート対象外となります。<br>
                                                予めご了承の上、お客様にて動作確認を行っていただくようお願いいたします。</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.「カスタム設定」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定内容が「ON(標準設定)」のドメインまたはサブドメインを選択し、「カスタム設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_8.png" alt="「カスタム設定」を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.レコード内容を編集し「確認画面へ進む」をクリック</h6>
                                            <div class="box_body">
                                                <p>レコード内容をお客様ご自身で編集し、「確認画面へ進む」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_9.png" alt="「確認画面へ進む」をフォーカスしているスクリーンショット"></p>

                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPFレコードのDNSLookUp回数の上限について</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            カスタム設定にて下記の警告が表示された場合、入力されたSPFレコードのDNSLookUp回数が上限に達している可能性があります。<br>
                                                            SPFの認証に失敗し、メール送信に問題が発生する可能性がありますので、お客様にて入力されましたSPFレコードの内容をご確認ください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_spf_12.png" alt="エラーが表示されているスクリーンショット"></p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.「変更する」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、「変更する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_10.png" alt="「変更する」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.設定完了</h6>
                                            <div class="box_body">
                                                <p>一覧画面の設定したドメインに「ON（カスタム設定）」と表示され、編集したレコードの内容が表示されていれば設定完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_11.png" alt="SPF設定一覧画面のスクリーンショット"></p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>SPFレコードの主な設定値について</dt>
                                                    <dd>
                                                        <p>SPFレコードに入力される主な値は、下記の通りです。</p>
                                                        <table class="table" style="word-break:break-all;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w30per">レコード内容</th>
                                                                    <th>説明</th>
                                                                    <th>記述例</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>v=spf1</td>
                                                                    <td>SPFレコードのバージョンを表します。この値は必須で、レコードの最初に必ず含める必要があります。</td>
                                                                    <td>v=spf1</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>+a:[ホスト名]</td>
                                                                    <td>ホスト名のAレコードを許可します。</td>
                                                                    <td>+a:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+mx:[ドメイン名]</td>
                                                                    <td>ドメイン名のMXレコードを許可します。</td>
                                                                    <td>+mx:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+ip4:[IPアドレス]</td>
                                                                    <td>IPv4アドレスを許可します。</td>
                                                                    <td>+ip4:192.168.111.11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+ip6:[IPv6アドレス]</td>
                                                                    <td>IPv6アドレスを許可します。</td>
                                                                    <td>+ip6:2001:0db8:85a3:0000:0000:8a2e:0370:7334</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>+include:[ドメイン名]</td>
                                                                    <td>外部メールサービスのSPFレコードを参照して許可します。<br><b>include:spf.sender.xserver.jp</b>は、当社メールサービスのSPF設定を利用していることを表します。</td>
                                                                    <td>+include:example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>~all</td>
                                                                    <td>すべてのメール送信を許可しますが、設定に含まれない送信元は、不審なメールとして扱います。</td>
                                                                    <td>~all</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">初期化について</h4>
                                <div class="section_body">

                                    <p>
                                        カスタム設定やDNSの直接編集後に、当社想定の初期SPF設定に戻す場合は、初期化機能をご利用ください。
                                    </p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.「初期化」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定内容が「ON(カスタム設定)」のドメインまたはサブドメインを選択し、「初期化」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_13.png" alt="「初期化」を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.「初期化する」をクリック</h6>
                                            <div class="box_body">
                                                <p>内容を確認し、「初期化する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_14.png" alt="「初期化する」をフォーカスしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.設定完了</h6>
                                            <div class="box_body">
                                                <p>一覧画面の設定したドメインに「ON（標準設定）」と表示されていれば初期化完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_spf_4.png" alt="SPF設定一覧画面のスクリーンショット"></p>
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
                                    <li><a href="#link-a">SPF設定について</a></li>
                                    <li><a href="#link-b">SPFの設定方法</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「SPF設定」をクリック</a></li>
                                            <li><a href="#link-b2">2.設定するドメインまたはサブドメインのSPF設定の「OFF」をクリック</a></li>
                                            <li><a href="#link-b3">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">SPF設定にGmailをSMTPサーバーとして利用する際の設定を追加する</a>
                                        <ol>
                                            <li><a href="#link-c1">1.「Gmail許可」の「OFF」をクリック</a></li>
                                            <li><a href="#link-c2">2.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">カスタム設定について</a>
                                        <ol>
                                            <li><a href="#link-d1">1.「カスタム設定」をクリック</a></li>
                                            <li><a href="#link-d2">2.レコード内容を編集し「設定する」をクリック</a></li>
                                            <li><a href="#link-d3">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">初期化について</a>
                                        <ol>
                                            <li><a href="#link-e1">1.「初期化」をクリック</a></li>
                                            <li><a href="#link-e2">2.「初期化する」をクリック</a></li>
                                            <li><a href="#link-e3">3.設定完了</a></li>
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
                                        <h4 class="section_ttl">SPF設定について</h4>
                                        <div class="section_body">
                                            <p>
                                                SPF(Sender Policy Framework)とは、電子メールの送信元ドメインが詐称されていないかを検査し、送信メールの改ざん・なりすましを防ぐ技術です。<br>
                                                送信メールの信頼性向上やメール到達率の向上が期待されます。
                                            </p>
                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h5>
                                                <div class="msg_body">
                                                    <p>ドメイン設定での独自ドメインを追加時に、SPFレコードを自動で追加いたします。<br>
                                                        そのため、独自ドメインに対してお客様ご自身でSPF設定を追加していただく必要はありません。</p>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">SPFの設定方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1.「SPF設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、SPF設定をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_1.png?date=2410" alt="SPF設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2.設定するドメインまたはサブドメインのSPF設定の「OFF」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>設定するドメインまたはサブドメインのSPF設定の「OFF」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_2.png?date=2410" alt="「OFF」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3.設定完了</h5>
                                                    <div class="box_body">
                                                        <p>一覧画面の設定したドメインに「標準設定」と表示されていれば設定完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_4.png?date=2410" alt="SPF設定一覧画面"></p>
                                                        <p>SPF設定をONにすることでDNSレコードに以下の内容が追加されます。</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20per">ホスト</th>
                                                                <td> 設定をONにしたドメイン</td>
                                                            </tr>
                                                            <tr>
                                                                <th>種別</th>
                                                                <td>TXT</td>
                                                            </tr>
                                                            <tr>
                                                                <th>内容</th>
                                                                <td>
                                                                    <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>内容について</dt>
                                                                        <dd>・「sv***.xserver.jp」の部分は、お客様がご利用のサーバーのホスト名となります。<br>
                                                                            ・「example.com」の部分は、設定をONにしたドメイン名となります。
                                                                        </dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <aside class="msg msg_notice mt30">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                            <div class="msg_body">
                                                                <p>SPF設定がサーバーに反映されるまでに、数分から数時間程度かかる場合があります。</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section id="link-c" class="section">
                                        <h4 class="section_ttl">SPF設定にGmailをSMTPサーバーとして利用する際の設定を追加する</h4>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-c1" class="box_ttl">1.「Gmail許可」の「OFF」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>設定内容が「標準設定」のドメインまたはサブドメインを選択し、「Gmail許可」の「OFF」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_5.png?date=2410" alt="「Gmail許可」の「OFF」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-c2" class="box_ttl">2.設定完了</h5>
                                                    <div class="box_body">
                                                        <p>一覧画面の設定したドメインに「標準設定+Gmail許可」と表示されていれば設定完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_7.png?date=2410" alt="SPF設定一覧画面"></p>
                                                        <p>Gmail許可設定を追加することで、SPFレコードに以下の内容が追加されます。</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w20per">内容</th>
                                                                <td>
                                                                    <p>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp <b>include:_spf.google.com</b> ~all</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>内容について</dt>
                                                                        <dd>・「include:_spf.google.com」の値がSPFレコードに追記されます。
                                                                        </dd>
                                                                    </dl>
                                                                </td>
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

                                    <section id="link-d" class="section">
                                        <h4 class="section_ttl">カスタム設定について</h4>
                                        <div class="section_body">
                                            <p>
                                                SPF設定をONにしたドメインに対しては、ご自身で直接SPFレコードを編集いただくことが可能です。
                                            </p>
                                            <aside class="msg msg_caution">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                <div class="msg_body">
                                                    <p>カスタム設定にて入力されましたSPFレコードの挙動については、サポート対象外となります。<br>
                                                        予めご了承の上、お客様にて動作確認を行っていただくようお願いいたします。</p>
                                                </div>
                                            </aside>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-d1" class="box_ttl">1.「カスタム設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>設定内容が「標準設定」のドメインまたはサブドメインを選択し、「カスタム設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_8.png?date=2410" alt="「カスタム設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-d2" class="box_ttl">2.レコード内容を編集し「設定する」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>レコード内容をお客様ご自身で編集し、「設定する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_9.png?date=2410" alt="「設定する」をクリック"></p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPFレコードのDNSLookUp回数の上限について</h6>
                                                            <div class="msg_body">
                                                                <p>
                                                                    カスタム設定にて下記の警告が表示された場合、入力されたSPFレコードのDNSLookUp回数が上限に達している可能性があります。<br>
                                                                    SPFの認証に失敗し、メール送信に問題が発生する可能性がありますので、お客様にて入力されましたSPFレコードの内容をご確認ください。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_spf_12.png?date=2410" alt="エラーが表示時"></p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-d3" class="box_ttl">3.設定完了</h5>
                                                    <div class="box_body">
                                                        <p>一覧画面の設定したドメインに「カスタム設定」と表示され、編集したレコードの内容が表示されていれば設定完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_11.png?date=2410" alt="SPF設定一覧画面"></p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>SPFレコードの主な設定値について</dt>
                                                            <dd>
                                                                <p>SPFレコードに入力される主な値は、下記の通りです。</p>
                                                                <table class="table" style="word-break:break-all;">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="w30per">レコード内容</th>
                                                                        <th>説明</th>
                                                                        <th>記述例</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>v=spf1</td>
                                                                        <td>SPFレコードのバージョンを表します。この値は必須で、レコードの最初に必ず含める必要があります。</td>
                                                                        <td>v=spf1</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>+a:[ホスト名]</td>
                                                                        <td>ホスト名のAレコードを許可します。</td>
                                                                        <td>+a:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+mx:[ドメイン名]</td>
                                                                        <td>ドメイン名のMXレコードを許可します。</td>
                                                                        <td>+mx:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+ip4:[IPアドレス]</td>
                                                                        <td>IPv4アドレスを許可します。</td>
                                                                        <td>+ip4:192.168.111.11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+ip6:[IPv6アドレス]</td>
                                                                        <td>IPv6アドレスを許可します。</td>
                                                                        <td>+ip6:2001:0db8:85a3:0000:0000:8a2e:0370:7334</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+include:[ドメイン名]</td>
                                                                        <td>外部メールサービスのSPFレコードを参照して許可します。<br><b>include:spf.sender.xserver.jp</b>は、当社メールサービスのSPF設定を利用していることを表します。</td>
                                                                        <td>+include:example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>~all</td>
                                                                        <td>すべてのメール送信を許可しますが、設定に含まれない送信元は、不審なメールとして扱います。</td>
                                                                        <td>~all</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section id="link-e" class="section">
                                        <h4 class="section_ttl">初期化について</h4>
                                        <div class="section_body">

                                            <p>
                                                カスタム設定やDNSの直接編集後に、当社想定の初期SPF設定に戻す場合は、初期化機能をご利用ください。
                                            </p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 id="link-e1" class="box_ttl">1.「初期化」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>設定内容が「カスタム設定」のドメインまたはサブドメインを選択し、「初期化」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_13.png?date=2410" alt="「初期化」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-e2" class="box_ttl">2.「初期化する」をクリック</h5>
                                                    <div class="box_body">
                                                        <p>内容を確認し、「初期化する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_14.png?date=2410" alt="「初期化する」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-e3" class="box_ttl">3.設定完了</h5>
                                                    <div class="box_body">
                                                        <p>一覧画面の設定したドメインに「標準設定」と表示されていれば初期化完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_spf_4.png?date=2410" alt="SPF設定一覧画面"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

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