<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメイン認証SSLの申請・更新申請手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」でドメイン認証SSLをご利用いただくための手順のご案内です。">


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

                <h3 class="sub-ttl">ドメイン認証SSLの申請手続き</h3>
                <p>ドメイン認証SSLの取得申請・更新申請の手順についてご案内しています。<br>
                    オプション独自SSLのお申し込み方法については「<a href="man_order_ssl.php">オプション独自SSLのお申し込み</a>」をご参照ください。</p>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">取得申請の手順</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.取得申請の前に認証作業の準備を行います。</a></li>
                                            <li><a href="#link-previous-a02">2.取得申請を開始します。</a></li>
                                            <li><a href="#link-previous-a03">3.コモンネーム設定・CSR情報を入力してください。</a></li>
                                            <li><a href="#link-previous-a04">4.認証方法を選択してください。</a></li>
                                            <li><a href="#link-previous-a05">5.SSL証明書の取得申請を行います。</a></li>
                                            <li><a href="#link-previous-a06">6.メールによる承認作業</a></li>
                                            <li><a href="#link-previous-a07">7.新規取得手続き完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">更新申請の手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.更新申請を開始します。</a></li>
                                            <li><a href="#link-previous-b02">2.申請情報を入力してください。</a></li>
                                            <li><a href="#link-previous-b03">3.メールによる承認作業</a></li>
                                            <li><a href="#link-previous-b04">4.更新手続き完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                            </ul>


                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">取得申請の手順</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.取得申請の前に認証作業の準備を行います。</h6>
                                            <div class="box_body">
                                                <p>
                                                以下の各ブランドをお申し込みなさる場合は、独自SSLをお申し込みする前に事前作業を行うことで、メールによる承認作業を省略することが可能です。
                                                </p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>クラウドSSL、クラウドセキュア・スピード認証SSL、ジオトラスト クイックSSLプレミアム、ラピッドSSLをご利用の方</dt>
                                                    <dd>「DNS認証」によるお手続きが可能です。<br>
                                                    コモンネームに該当するドメインのネームサーバー情報を、当サービスが指定する内容に変更するのが条件です。<br>

                                                    ネームサーバーの設定方法は
                                                     <a href="man_domain_namesever_setting.php">エックスサーバーマニュアル ＞ ドメインについて ＞ ネームサーバーの設定</a>をご参照ください。</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.取得申請を開始します。</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の<em class="font-bold">「SSL証明書」</em>より、お申し込みいただいたSSL証明書の「<em class="font-bold">取得申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_4.png" alt="取得申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.コモンネーム設定・CSR情報を入力してください。</h6>
                                            <div class="box_body">
                                                <p>取得申請フォームが表示されますので、以下の内容を入力し「<em class="font-bold">次の画面へ進む</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_5.png" alt="コモンネーム及びCSR情報を入力します"></p>
                                                <table class="table table_use-caption mb5">
                                                    <caption>コモンネームについて</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>対象サーバーID</th>
                                                            <td>コモンネームとするドメインが設定されているサーバーIDを選択してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">コモンネーム</th>
                                                            <td>
                                                                <p>独自SSLをご利用になる独自ドメイン、またはサブドメインをご選択ください。</p>
                                                                <p class="note">※事前に、ご利用予定の独自ドメインまたはサブドメインの設定を行っておく必要があります。</p>
                                                                <p class="note">※64文字以上のコモンネームはお申し込みできません。</p>
                                                                <aside class="msg msg_notice mb0">
                                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>コモンネームに関して</h6>
                                                                    <div class="msg_body">
                                                                        <p>「www.」あり/なし両方のURLでSSL接続を利用したい場合に関しては、<a href="man_order_ssl.php#link-d">SSL証明書の「2Way利用」について</a>をご参照ください。</p>
                                                                    </div>
                                                                </aside>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table_use-caption mb5">
                                                    <caption>CSR登録情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">国(Country)</th>
                                                            <td>2文字で構成される国コードをご入力ください。日本の場合は初期状態の「<em class="font-bold">JP</em>」です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>都道府県(State)</th>
                                                            <td>運営組織のある<em class="font-bold">都道府県名</em>をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>市区町村(Local)</th>
                                                            <td>運営組織のある<em class="font-bold">市区町村名</em>をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>組織(Org)</th>
                                                            <td><em class="font-bold">運営組織の正式英文名称</em>をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>部署(Unit)</th>
                                                            <td>運営組織の<em class="font-bold">部署名</em>をご入力ください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a04">4.認証方法を選択してください。</h6>
                                            <div class="box_body">
                                                <p>認証方法を以下のいずれかから選択して、「<em class="fontBold">確認画面へ進む</em>」をクリックしてください。</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">※DNS認証もしくはWeb認証(AレコードがサーバーのIPアドレス)の場合は<br>　この認証方法の選択画面は表示されず、次の確認画面へ進みます。</p>
                                                </div>
                                                <dl class="dl">
                                                    <dt><i class="ico ico--squareFill"></i>メール認証</dt>
                                                    <dd>
                                                        <p> 認証局が定める承認用メールアドレスを用いて、ドメイン管理者であることを確認します。<br>
                                                            申請完了後、承認用メールアドレス宛にドメイン使用権確認のメールを送信します。受信可能なようにあらかじめご用意ください。</p>
                                                        <p>取得申請完了後、各SSL発行元より<em class="fontBold">「承認メール」</em>が送付されます。<br>
                                                            受信した承認メール本文内にある<em class="fontBold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                        <ul class="noteList">
                                                            <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $LOGIN_FORM_URL; ?>" target="_blank">XServerアカウント</a><i class="ico ico--newWindow"></i>のトップページ「SSL証明書 > 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                            <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。 <br>
                                                                その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico--squareFill"></i>Web認証</dt>
                                                    <dd>
                                                        <p>Webサーバー上に設置した認証用ファイルに対し、認証局からWebアクセスを行うことで、ドメイン管理者であることを確認します。</p>
                                                        <p>取得申請完了画面に表示される「認証情報」を現在ご利用中のサーバーへアップロードすることで、ドメインの所有権の確認が完了します。</p>
                                                    </dd>
                                                </dl>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_17.png" alt="認証方法を選択します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a05">5.SSL証明書の取得申請を行います。</h6>
                                            <div class="box_body">
                                                <p>以下の内容でSSL証明書の取得申請を行います。内容をご確認の上、よろしければ「<em class="font-bold">取得申請をする</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_18.png" alt="SSL証明書の取得申請を行います"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a06">6.メールによる承認作業</h6>
                                            <div class="box_body">
                                                <p>新規取得申請が完了しました。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_16.png" alt="取得申請の完了画面"></p>
                                                <p>取得申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                                受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                <ul class="note-list mb15">
                                                    <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                                    <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>のトップページ、「ご契約一覧 &gt; SSL証明書 &gt; 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                    <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。 <br>
                                                    その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a07">7.新規取得手続き完了</h6>
                                            <div class="box_body">
                                                <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                                (審査には数日程度お時間要する場合がございます。あらかじめご了承ください。)</p>
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。<br>
                                                インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                                <p class="note">※既に同一のコモンネームで今回のお申し込みと異なるプランでご利用されていた場合は、発行から72時間以内でのご利用開始となります。</p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「独自IPアドレスあり」のSSLご契約にて、「www.」を付けたコモンネームでお申し込みの方(例：www.example.com)</h6>
                                                    <div class="msg_body">
                                                        <p>「www.」を付けたコモンネームでお申し込みいただくことで、「www.」が付加されたURL(https://www.example.com/)、付加されていないURL(https://example.com/)、どちらでもSSL接続を行うことが可能になります。</p>
                                                        <p>設定が完了した時点では、「www.」ありの状態でのみSSL接続が可能です。<br>「独自IPアドレスあり」でSSLを取得された場合、「www.」なしの状態でも利用するためには、サーバーパネル上のDNSレコード設定より、SSL用のIPアドレスを設定していただく必要があります。</p>
                                                        <p>SSL証明書の設定完了時点では、DNSレコード設定は下記の状態となっています。<br>ホスト名がドメイン名そのもので、種別がAとなっているレコードを下記の通り変更してください。</p>
                                                        <p class="note">※「独自IPアドレスなし」でSSLを取得された場合は、DNSレコードの変更は不要です。</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>変更前</dt>
                                                            <dd>
                                                                <p class="note">※レコードの順序は前後している場合がありますのでご注意ください。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_12.png" alt="DNSレコード設定画面"></p>
                                                                <table class="table break-word">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="w30per">ホスト名</th>
                                                                            <th class="w10per">種別</th>
                                                                            <th class="w40per">内容</th>
                                                                            <th class="w20per">優先度</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>example.com</th>
                                                                            <td>A</td>
                                                                            <td>お客様がご利用のサーバーのIPアドレス<br>
                                                                            <em class="red">→こちらの「変更」をクリックし、内容を変更する</em></td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>www.example.com</th>
                                                                            <td>A</td>
                                                                            <td>SSL用のIPアドレス</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>example.com</th>
                                                                            <td>MX</td>
                                                                            <td>example.com</td>
                                                                            <td>0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>*.example.com</th>
                                                                            <td>A</td>
                                                                            <td>お客様がご利用のサーバーのIPアドレス</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>変更後</dt>
                                                            <dd>
                                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_13.png" alt="DNSレコード設定画面"></p>

                                                                <table class="table break-word">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="w30per">ホスト名</th>
                                                                            <th class="w10per">種別</th>
                                                                            <th class="w40per">内容</th>
                                                                            <th class="w20per">優先度</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>example.com</th>
                                                                            <td>A</td>
                                                                            <td>SSL用のIPアドレス</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>www.example.com</th>
                                                                            <td>A</td>
                                                                            <td>SSL用のIPアドレス</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>example.com</th>
                                                                            <td>MX</td>
                                                                            <td>example.com</td>
                                                                            <td>0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>*.example.com</th>
                                                                            <td>A</td>
                                                                            <td>お客様がご利用のサーバーのIPアドレス</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                        <ul class="note-list">
                                                            <li>※SSL用のIPアドレスについては、サーバーパネル上の「SSL設定 > SSL設定の一覧」に記載がありますのでご確認ください。</li>
                                                            <li>※DNSレコードの設定方法については、「<a href="man_domain_dns_setting.php">DNSレコードの編集</a>」をご参照ください。</li>
                                                        </ul>
                                                    </div>
                                                </aside>

                                                <aside class="msg msg_caution mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>独自SSLの設定が完了した時点では、自動的に「https://〜」のURLへ転送されません。<br>
                                                            Webサイトにおけるすべての表示を常時SSL化する場合は、マニュアル「<a href="man_server_fullssl.php">Webサイトの常時SSL化</a>」をご参照ください。</p>
                                                    </div>
                                                </aside>

                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="update_ssl" class="section">
                                <h4 class="section_ttl" id="link-previous-b">更新申請の手順</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.更新申請を開始します。</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の<em class="font-bold">「SSL証明書」</em>より、お申し込みいただいたSSL証明書の<em class="font-bold">「更新申請」</em>をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_10.png" alt="更新申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.申請情報を入力してください。</h6>
                                            <div class="box_body">
                                                <p class="mb0">新規取得時と同様に、「<em class="font-bold">CSR情報</em>」を入力します。</p>
                                                <p class="note">※コモンネームを変更することは出来ません。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_11.png" alt="CSR情報の入力"></p>
                                                <p>続いて「<em class="font-bold">認証方法</em>」を選択して「<em class="font-bold">確認画面へ進む</em>」をクリックし、進んだ画面にてご入力いただいた情報をご確認の上、「<em class="font-bold">更新申請をする</em>」をクリックしてください。</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">※DNS認証もしくはWeb認証(AレコードがサーバーのIPアドレス)の場合は<br>　この認証方法の選択画面は表示されず、次の確認画面へ進みます。</p>
                                                </div>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_19.png" alt="登録者情報を入力します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.メールによる承認作業</h6>
                                            <div class="box_body">
                                                <p>更新申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                                受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                <ul class="note-list mb15">
                                                    <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                                    <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>のトップページ、「ご契約一覧 &gt; SSL証明書 &gt; 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                    <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。<br>
                                                    その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.更新手続き完了</h6>
                                            <div class="box_body">
                                                <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                                (証明書の種類によって審査には数日程度お時間を要する場合があります。)</p>
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">取得申請の手順</a>
                                        <ol>
                                            <li><a href="#link-a01">1.取得申請の前に認証作業の準備を行います。</a></li>
                                            <li><a href="#link-a02">2.取得申請を開始します。</a></li>
                                            <li><a href="#link-a03">3.コモンネーム設定・CSR情報を入力してください。</a></li>
                                            <li><a href="#link-a04">4.認証方法を選択してください。</a></li>
                                            <li><a href="#link-a05">5.SSL証明書の取得申請を行います。</a></li>
                                            <li><a href="#link-a06">6.メールによる承認作業</a></li>
                                            <li><a href="#link-a07">7.新規取得手続き完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">更新申請の手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.更新申請を開始します。</a></li>
                                            <li><a href="#link-b02">2.申請情報を入力してください。</a></li>
                                            <li><a href="#link-b03">3.メールによる承認作業</a></li>
                                            <li><a href="#link-b04">4.更新手続き完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">取得申請の手順</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a01">1.取得申請の前に認証作業の準備を行います。</h6>
                                            <div class="box_body">
                                                <p>
                                                    以下の各ブランドをお申し込みなさる場合は、独自SSLをお申し込みする前に事前作業を行うことで、メールによる承認作業を省略することが可能です。
                                                </p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>クラウドSSL、クラウドセキュア・スピード認証SSL、ジオトラスト クイックSSLプレミアム、ラピッドSSLをご利用の方</dt>
                                                    <dd>「DNS認証」によるお手続きが可能です。<br>
                                                        コモンネームに該当するドメインのネームサーバー情報を、当サービスが指定する内容に変更するのが条件です。<br>

                                                        ネームサーバーの設定方法は
                                                        <a href="man_domain_namesever_setting.php">エックスサーバーマニュアル ＞ ドメインについて ＞ ネームサーバーの設定</a>をご参照ください。</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a02">2.取得申請を開始します。</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の<em class="font-bold">「SSL証明書」</em>より、お申し込みいただいたSSL証明書の「<em class="font-bold">取得申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_4.png?date=2410" alt="取得申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a03">3.コモンネーム設定・CSR情報を入力してください。</h6>
                                            <div class="box_body">
                                                <p>取得申請フォームが表示されますので、以下の内容を入力し「<em class="font-bold">次の画面へ進む</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_5.png?date=2410" alt="コモンネーム及びCSR情報を入力します"></p>
                                                <table class="table table_use-caption mb5">
                                                    <caption>コモンネームについて</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>対象サーバーID</th>
                                                        <td>コモンネームとするドメインが設定されているサーバーIDを選択してください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="w30per">コモンネーム</th>
                                                        <td>
                                                            <p>独自SSLをご利用になる独自ドメイン、またはサブドメインをご選択ください。</p>
                                                            <p class="note">※事前に、ご利用予定の独自ドメインまたはサブドメインの設定を行っておく必要があります。</p>
                                                            <p class="note">※64文字以上のコモンネームはお申し込みできません。</p>
                                                            <aside class="msg msg_notice mb0">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>コモンネームに関して</h6>
                                                                <div class="msg_body">
                                                                    <p>「www.」あり/なし両方のURLでSSL接続を利用したい場合に関しては、<a href="man_order_ssl.php#link-d">SSL証明書の「2Way利用」について</a>をご参照ください。</p>
                                                                </div>
                                                            </aside>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table_use-caption mb5">
                                                    <caption>CSR登録情報</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30per">国(Country)</th>
                                                        <td>2文字で構成される国コードをご入力ください。日本の場合は初期状態の「<em class="font-bold">JP</em>」です。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>都道府県(State)</th>
                                                        <td>運営組織のある<em class="font-bold">都道府県名</em>をご入力ください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>市区町村(Local)</th>
                                                        <td>運営組織のある<em class="font-bold">市区町村名</em>をご入力ください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>組織(Org)</th>
                                                        <td><em class="font-bold">運営組織の正式英文名称</em>をご入力ください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>部署(Unit)</th>
                                                        <td>運営組織の<em class="font-bold">部署名</em>をご入力ください。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a04">4.認証方法を選択してください。</h6>
                                            <div class="box_body">
                                                <p>認証方法を以下のいずれかから選択して、「<em class="fontBold">確認画面へ進む</em>」をクリックしてください。</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">※DNS認証もしくはWeb認証(AレコードがサーバーのIPアドレス)の場合は<br>　この認証方法の選択画面は表示されず、次の確認画面へ進みます。</p>
                                                </div>
                                                <dl class="dl">
                                                    <dt><i class="ico ico--squareFill"></i>メール認証</dt>
                                                    <dd>
                                                        <p> 認証局が定める承認用メールアドレスを用いて、ドメイン管理者であることを確認します。<br>
                                                            申請完了後、承認用メールアドレス宛にドメイン使用権確認のメールを送信します。受信可能なようにあらかじめご用意ください。</p>
                                                        <p>取得申請完了後、各SSL発行元より<em class="fontBold">「承認メール」</em>が送付されます。<br>
                                                            受信した承認メール本文内にある<em class="fontBold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                        <ul class="noteList">
                                                            <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $LOGIN_FORM_URL; ?>" target="_blank">XServerアカウント</a><i class="ico ico--newWindow"></i>のトップページ「SSL証明書 > 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                            <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。 <br>
                                                                その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico--squareFill"></i>Web認証</dt>
                                                    <dd>
                                                        <p>Webサーバー上に設置した認証用ファイルに対し、認証局からWebアクセスを行うことで、ドメイン管理者であることを確認します。</p>
                                                        <p>取得申請完了画面に表示される「認証情報」を現在ご利用中のサーバーへアップロードすることで、ドメインの所有権の確認が完了します。</p>
                                                    </dd>
                                                </dl>
                                                <p><img class="img" src="../img/manual/previous/man_order_domain_ssl_17.png" alt="認証方法を選択します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a05">5.SSL証明書の取得申請を行います。</h6>
                                            <div class="box_body">
                                                <p>以下の内容でSSL証明書の取得申請を行います。内容をご確認の上、よろしければ「<em class="font-bold">取得申請をする</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_18.png?date=2410" alt="SSL証明書の取得申請を行います"></p>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a06">6.メールによる承認作業</h6>
                                            <div class="box_body">
                                                <p>新規取得申請が完了しました。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_16.png?date=2410" alt="取得申請の完了画面"></p>
                                                <p>取得申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                                    受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                <ul class="note-list mb15">
                                                    <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                                    <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>のトップページ、「ご契約一覧 &gt; SSL証明書 &gt; 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                    <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。 <br>
                                                        その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-a07">7.新規取得手続き完了</h6>
                                            <div class="box_body">
                                                <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                                    (審査には数日程度お時間要する場合がございます。あらかじめご了承ください。)</p>
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。<br>
                                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                                <p class="note">※既に同一のコモンネームで今回のお申し込みと異なるプランでご利用されていた場合は、発行から72時間以内でのご利用開始となります。</p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「独自IPアドレスあり」のSSLご契約にて、「www.」を付けたコモンネームでお申し込みの方(例：www.example.com)</h6>
                                                    <div class="msg_body">
                                                        <p>「www.」を付けたコモンネームでお申し込みいただくことで、「www.」が付加されたURL(https://www.example.com/)、付加されていないURL(https://example.com/)、どちらでもSSL接続を行うことが可能になります。</p>
                                                        <p>設定が完了した時点では、「www.」ありの状態でのみSSL接続が可能です。<br>「独自IPアドレスあり」でSSLを取得された場合、「www.」なしの状態でも利用するためには、サーバーパネル上のDNSレコード設定より、SSL用のIPアドレスを設定していただく必要があります。</p>
                                                        <p>SSL証明書の設定完了時点では、DNSレコード設定は下記の状態となっています。<br>ホスト名がドメイン名そのもので、種別がAとなっているレコードを下記の通り変更してください。</p>
                                                        <p class="note">※「独自IPアドレスなし」でSSLを取得された場合は、DNSレコードの変更は不要です。</p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>変更前</dt>
                                                            <dd>
                                                                <p class="note">※レコードの順序は前後している場合がありますのでご注意ください。</p>
                                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_12.png?date=2410" alt="DNSレコード設定画面"></p>
                                                                <table class="table break-word">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="w30per">ホスト名</th>
                                                                        <th class="w10per">種別</th>
                                                                        <th class="w40per">内容</th>
                                                                        <th class="w20per">優先度</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td>A</td>
                                                                        <td>お客様がご利用のサーバーのIPアドレス<br>
                                                                            <em class="red">→こちらの「変更」をクリックし、内容を変更する</em></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td>A</td>
                                                                        <td>SSL用のIPアドレス</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td>MX</td>
                                                                        <td>example.com</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>*.example.com</th>
                                                                        <td>A</td>
                                                                        <td>お客様がご利用のサーバーのIPアドレス</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>変更後</dt>
                                                            <dd>
                                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_13.png?date=2410" alt="DNSレコード設定画面"></p>

                                                                <table class="table break-word">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="w30per">ホスト名</th>
                                                                        <th class="w10per">種別</th>
                                                                        <th class="w40per">内容</th>
                                                                        <th class="w20per">優先度</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td>A</td>
                                                                        <td>SSL用のIPアドレス</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td>A</td>
                                                                        <td>SSL用のIPアドレス</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td>MX</td>
                                                                        <td>example.com</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>*.example.com</th>
                                                                        <td>A</td>
                                                                        <td>お客様がご利用のサーバーのIPアドレス</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </dd>
                                                        </dl>
                                                        <ul class="note-list">
                                                            <li>※SSL用のIPアドレスについては、サーバーパネル上の「SSL設定 > SSL設定の一覧」に記載がありますのでご確認ください。</li>
                                                            <li>※DNSレコードの設定方法については、「<a href="man_domain_dns_setting.php">DNSレコードの編集</a>」をご参照ください。</li>
                                                        </ul>
                                                    </div>
                                                </aside>

                                                <aside class="msg msg_caution mb0">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>独自SSLの設定が完了した時点では、自動的に「https://〜」のURLへ転送されません。<br>
                                                            Webサイトにおけるすべての表示を常時SSL化する場合は、マニュアル「<a href="man_server_fullssl.php">Webサイトの常時SSL化</a>」をご参照ください。</p>
                                                    </div>
                                                </aside>

                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="update_ssl" class="section">
                                <h4 class="section_ttl" id="link-b">更新申請の手順</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.更新申請を開始します。</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の<em class="font-bold">「SSL証明書」</em>より、お申し込みいただいたSSL証明書の<em class="font-bold">「更新申請」</em>をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_10.png?date=2410" alt="更新申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.申請情報を入力してください。</h6>
                                            <div class="box_body">
                                                <p class="mb0">新規取得時と同様に、「<em class="font-bold">CSR情報</em>」を入力します。</p>
                                                <p class="note">※コモンネームを変更することは出来ません。</p>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_11.png?date=2410" alt="CSR情報の入力"></p>
                                                <p>続いて「<em class="font-bold">認証方法</em>」を選択して「<em class="font-bold">確認画面へ進む</em>」をクリックし、進んだ画面にてご入力いただいた情報をご確認の上、「<em class="font-bold">更新申請をする</em>」をクリックしてください。</p>
                                                <div class="msg msg_caution">
                                                    <p class="red">※DNS認証もしくはWeb認証(AレコードがサーバーのIPアドレス)の場合は<br>　この認証方法の選択画面は表示されず、次の確認画面へ進みます。</p>
                                                </div>
                                                <p><img class="img" src="../img/manual/man_order_domain_ssl_19.png?date=2410" alt="登録者情報を入力します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.メールによる承認作業</h6>
                                            <div class="box_body">
                                                <p>更新申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                                    受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                                <ul class="note-list mb15">
                                                    <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                                    <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>のトップページ、「ご契約一覧 &gt; SSL証明書 &gt; 申請状況確認」より「承認メール再送」のお手続きが可能です。</li>
                                                    <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。<br>
                                                        その際は、当社より「【XServerアカウント】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.更新手続き完了</h6>
                                            <div class="box_body">
                                                <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                                    (証明書の種類によって審査には数日程度お時間を要する場合があります。)</p>
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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