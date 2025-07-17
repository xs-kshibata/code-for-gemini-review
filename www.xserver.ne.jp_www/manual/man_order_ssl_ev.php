<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>EV SSLの取得・更新申請手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」でEV SSLをご利用いただくための手順のご案内です。">


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
            
                <h3 class="sub-ttl">EV SSLの申請手続き</h3>
                <p>EV SSLの取得申請・更新申請の手順についてご案内しています。<br>
                    オプション独自SSLのお申し込み方法については「<a href="man_order_ssl.php">オプション独自SSLのお申し込み</a>」をご参照ください。</p>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list mt20">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">取得申請の手順</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.取得申請の前に認証作業の準備</a></li>
                                        <li><a href="#link-previous-a02">2.取得申請を開始します。</a></li>
                                        <li><a href="#link-previous-a03">3.コモンネーム・CSR情報を入力してください。</a></li>
                                        <li><a href="#link-previous-a04">4.SSL証明書登録担当者情報を入力してください。</a></li>
                                        <li><a href="#link-previous-a05">5.認証作業</a></li>
                                        <li><a href="#link-previous-a06">6.新規取得手続き完了</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-b">更新申請の手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.更新申請の前に認証作業の準備</a></li>
                                        <li><a href="#link-previous-b02">2.更新申請を開始します。</a></li>
                                        <li><a href="#link-previous-b03">3.申請情報を入力してください。</a></li>
                                        <li><a href="#link-previous-b04">4.認証作業</a></li>
                                        <li><a href="#link-previous-b05">5.更新手続き完了</a></li>
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
                                            <h5 class="box_ttl" id="link-previous-a01">1.取得申請の前に認証作業の準備</h5>
                                            <div class="box_body">
                                                <p>審査する際に下記が必ず必要となりますので事前にご準備お願いいたします。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)ナンバー</dt>
                                                    <dd>
                                                        <p>企業が実在することを審査する際にDUNS(ダンズ)ナンバーを利用するため、事前にDUNSナンバーの取得を行ってください。
                                                            取得方法については下記をご参照ください。</p>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php">DUNSナンバーの取得方法</a></li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)登録情報</dt>
                                                    <dd>
                                                        <p>DUNS登録情報とSSLの申請情報が一致しない場合、証明書の発行ができません。<br>
                                                           下記3項目が正しく登録されているかを必ずご確認ください。<br>
                                                           登録情報が現在の情報と異なる場合は、DUNS登録情報を変更したうえでSSLの取得申請を行ってください。<br>
                                                           (登録情報が古い、ローマ字表記の会社名が異なるなど)</p>
                                                        <p class="note">※DUNS登録情報とSSLの申請情報に相違があると、取得申請の手続き中にSSL発行元よりお客様宛に確認メールが届く場合があります。</p>
                                                        <table class="table mb5">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w45per">会社名</th>
                                                                <td>DUNSに登録されている英語会社名</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="w45per">所在地</th>
                                                                <td>DUNSに登録されている英語住所</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="w45per">電話番号</th>
                                                                <td>DUNSに登録されている電話番号</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php#link-c">DUNS登録情報の確認方法</a></li>
                                                        </ul>
                                                    </dd>

                                                    <dt><i class="ico ico_square-fill"></i>【ローマ字商号の記載がなされている定款】、または【弁護士意見書】</dt>
                                                    <dd>
                                                        <p>申請内容に記載の組織名と一致するか確認するために利用されます。</p>
                                                        <p>なお、定款でご提出の場合、定款にローマ字商号の記載がなければ定款に記載を加える必要があります。
                                                            登記事項には該当しないため、公証人による認証や、変更登記の手続きは不要です。</p>
                                                        <p>また、定款の最終項目に代表取締役名義での原本証明が必要です。
                                                            下記をご参考に合わせてご準備お願いいたします。</p>

                                                        <aside class="msg">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle"></i>原本証明の記載例</h6>
                                                            <div class="msg_body">
                                                                <p>この定款の写しは、原本と相違ないことを証明します。<br>
                                                                    2018年**月**日 （原本証明作成日 ： 3ヶ月以内）<br>
                                                                    東京都****区****** （登記上の住所）<br>
                                                                    株式会社****** （登記上の組織・会社名）</p>
                                                            </div>
                                                        </aside>
                                                        <p>定款の変更手続きや弁護士意見書の取得方法は下記をご参照ください。</p>
                                                        <ul class="ul">
                                                            <li><a href="https://ssl.cloudsecure.ne.jp/manual/articles_flow.php" target="_blank">クラウドセキュア「定款の変更手続きについて」</a> <i class="ico ico_new-window base-color"></i></li>
                                                            <li><a href="https://ssl.cloudsecure.ne.jp/manual/lawyer_flow.php" target="_blank">クラウドセキュア「弁護士意見書の取得方法について」</a> <i class="ico ico_new-window base-color"></i></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.取得申請を開始します。</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、お申し込みいただいたSSL証明書の「<em class="font-bold">取得申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_6.png" alt="取得申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.コモンネーム・CSR情報を入力してください。</h5>
                                            <div class="box_body">
                                                <p>取得申請フォームが表示されますので、以下の内容を入力し「<em class="font-bold">登録者情報入力画面へ進む</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_7.png" alt="コモンネーム及びCSR情報を入力します"></p>
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

                                                <table class="table table_use-caption">
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
                                            <h6 class="box_ttl" id="link-previous-a04">4.SSL証明書登録担当者情報を入力してください。</h6>
                                            <div class="box_body">
                                                <p>フォームに沿って、以下の情報を入力してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_12.png" alt="登録者情報を入力します"></p>

                                                <table class="table mb5">
                                                    <caption>SSLご登録担当者情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">組織名</th>
                                                            <td>運営組織名を正式英文名称でご入力ください。<br>
                                                                DUNS登録情報の「会社名」と一致している必要があります。</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">DUNSナンバー</th>
                                                            <td>9桁の数字をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>氏名</th>
                                                            <td>お名前をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>役職</th>
                                                            <td>役職をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>郵便番号</th>
                                                            <td>郵便番号をご入力ください。※ハイフンは不要です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>国コード</th>
                                                            <td>国コードを選択してください。日本の場合は「JP」です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>都道府県</th>
                                                            <td>運営組織のある都道府県名を選択してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>市区町村</th>
                                                            <td>運営組織のある市区町村名をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>住所</th>
                                                            <td>運営組織の詳しい住所をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>電話番号</th>
                                                            <td>電話番号をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>FAX番号</th>
                                                            <td>FAX番号をご入力ください。※無い場合は、ご入力不要です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールアドレス</th>
                                                            <td>メールアドレスをご入力ください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table">
                                                    <caption>認証方法</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>承認用メールアドレス(※)</th>
                                                            <td>各SSL発行元より送られる承認メールを受信するためのメールアドレスを選択してください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="note">※ 事前に、受信可能なメールアドレスをご用意いただく必要があります。</p>
                                                <p>全てご入力いただけましたら、<em class="font-bold">「確認画面へ進む」</em>をクリックしてください。進んだ画面にて、ご入力いただいた情報をご確認の上、<em class="font-bold">「取得申請をする」</em>をクリックしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a05">5. 認証作業</h5>

                                            <div class="box_body">

                                                <ul class="ul mb30">
                                                    <li><a href="#previous-secure-1">クラウドセキュア EV SSL の場合</a></li>
                                                    <li><a href="#previous-digicert-1">デジサート セキュア・サーバID EV の場合</a></li>
                                                </ul>

                                                <p class="font-bold mt20" id="previous-secure-1">クラウドセキュア EV SSL の場合</p>

                                                <section class="box">
                                                    <h6 class="box_ttl">5-1. オンライン認証</h6>
                                                    <div class="box_body">
                                                        <p>クラウドセキュア社より英文の承認確認メールが送付されます。<br>
                                                            受信したメール本文内にあるURLへアクセスし、入力欄に承認確認メールに記載されている「verification code」をご入力ください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_1.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>上位の認証機関であるセクティゴ社（旧コモド社）より「利用契約同意確認メール」が送付されます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-2. 利用契約の同意と申請責任者確認書の提出</h5>
                                                    <div class="box_body">

                                                        <p>受信した「利用契約同意確認メール」に記載の内容をご確認の上、「verification code」をコピーし、メールに記載されているURLをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_10.png" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>アクセスしたページにて先ほどコピーした「verification code」を入力し、「Next」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_11.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>下記の項目を入力し、「I ACCEPT」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_12.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>

                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>FirstName</th>
                                                                <td>申請責任者の名前をアルファベットでご入力ください。<br>例)Taro</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surname</th>
                                                                <td>申請責任者の苗字をアルファベットでご入力ください。<br>例)Yamada</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>(あらかじめ入力済みです)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Contact Phone No</th>
                                                                <td>DUNSナンバーの登録に利用した電話番号をご入力ください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Job Title</th>
                                                                <td>申請責任者の役職をアルファベットでご入力ください。<br>例)President</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-3. 申請組織を確認できる書類を提出</h5>
                                                    <div class="box_body">
                                                        <p>「5-2. 利用契約の同意と申請責任者確認書の提出」でご準備いただいた定款や弁護士意見書をPDFなど電子化(スキャン)した状態で、「evdocs@cloudsecure.co.jp」へと送信することで、SSL証明書の発行代理店であるクラウドセキュア社にて内容を確認の上、セクティゴ社（旧コモド社）へ提出いたします。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご提出時のメールの件名・ファイル名について</h6>
                                                            <div class="msg_body">
                                                                <p>ご提出の際、お手数ですがメールの件名と、添付していただくファイル名については下記のようにお願いいたします。</p>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">メールの件名</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款の場合</th>
                                                                        <td>【会社名】定款の送付　Order #*******</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書の場合</th>
                                                                        <td>【会社名】弁護士意見書の送付　Order #*******</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">添付ファイルの名称</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款</th>
                                                                        <td>Articlesofincorporation*******.pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書</th>
                                                                        <td>lawyersopinion*******.pdf</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>※「*******」の部分については、ご登録のメールアドレス宛に届いている英文メールの件名に記載されている数字が入ります。</p>
                                                            </div>
                                                        </aside>

                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-4. 電話での確認</h5>
                                                    <div class="box_body">
                                                        <p>申請責任者のお名前をお伝えし、電話の転送を依頼します。
                                                            転送が不可能な場合は、申請責任者の電話番号を伺い改めて連絡します。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>電話確認の内容について</h6>
                                                            <div class="msg_body">
                                                                <ul class="ul">
                                                                    <li>SSL証明書の申請意思確認（コモンネーム・追加ドメイン・申請SSLサーバ証明書名）</li>
                                                                    <li>申請企業の確認<br>英語表記会社名と所在地（申請情報と同じである必要があります）</li>
                                                                    <li>申請責任者の正社員確認役職<br>（申請情報と同じである必要があります）</li>
                                                                    <li>技術担当者の会社名・メールアドレスの確認（確認されないこともあります）</li>
                                                                    <li>
                                                                        <p class="mb5">利用規約同意書への署名確認</p>
                                                                        <p class="note mb0">
                                                                            英語による電話確認が行われる場合があります。その場合、日本語希望とお伝えください。<br>
                                                                            例）I would like to call me from Japanese staff.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body">

                                                <p class="font-bold" id="previous-digicert-1">デジサート セキュア・サーバID EV の場合</p>

                                                <section class="box">
                                                    <h6 class="box_ttl">5-1.メールによる承認作業</h6>
                                                    <div class="box_body">
                                                        <p>取得申請完了後、SSL発行元より「承認メール」が送付されます。
                                                            受信した承認メール本文内にある承認用URLへとアクセスし、承認作業を行ってください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5-2.電話による本人確認</h6>
                                                    <div class="box_body">
                                                        <p>審査が進むと、SSL発行元からSSLご登録担当者様に対して申請内容確認のための電話が入ります。</p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body pt0">
                                                <aside class="msg msg_notice">
                                                    <div class="msg_body">
                                                        <p>
                                                            SSL証明書申請団体（組織）の認証については下記をご参照ください。
                                                        </p>
                                                        <ul class="ul">
                                                            <li><a href="https://knowledge.digicert.com/jp/solution/ev-ssl-organization-validation" target="_blank">EV SSL証明書申請団体（組織）の認証について</a><i class="ico ico--newWindow"></i></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a06">6. 新規取得手続き完了</h5>
                                            <div class="box_body">
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。
                                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                                <p>※既に同一のコモンネームで今回のお申し込みと異なるプランでご利用されていた場合は、発行から72時間以内でのご利用開始となります。</p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「独自IPアドレスあり」のSSLご契約にて、 「www.」を付けたコモンネームでお申し込みの方(例：www.example.com)</h6>
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
                                                            <li>※SSL用のIPアドレスについては、サーバーパネル上の「SSL設定 &gt; SSL設定の一覧」に記載がありますのでご確認ください。</li>
                                                            <li>※DNSレコードの設定方法については、「<a href="man_domain_dns_setting.php">DNSレコードの編集</a>」をご参照ください。</li>
                                                        </ul>
                                                    </div>
                                                </aside>

                                                <aside class="msg msg_caution mb0">
                                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
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
                                            <h5 class="box_ttl" id="link-previous-b01">1.更新申請の前に認証作業の準備</h5>
                                            <div class="box_body">
                                                <p>審査する際に下記が必ず必要となりますので事前にご準備お願いいたします。</p>

                                                <div class="block_body">
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)ナンバー</dt>
                                                        <dd>
                                                            <p>企業が実在することを審査する際にDUNS(ダンズ)ナンバーを利用するため、事前にDUNSナンバーの取得を行ってください。
                                                                取得方法については下記をご参照ください。</p>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php">DUNSナンバーの取得方法</a></li>
                                                            </ul>
                                                        </dd>

                                                        <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)登録情報</dt>
                                                        <dd>
                                                            <p>DUNS登録情報とSSLの申請情報が一致しない場合、証明書の発行ができません。<br>
                                                               下記3項目が正しく登録されているかを必ずご確認ください。<br>
                                                               登録情報が現在の情報と異なる場合は、DUNS登録情報を変更したうえでSSLの取得申請を行ってください。<br>
                                                               (登録情報が古い、ローマ字表記の会社名が異なるなど)</p>
                                                            <p class="note">※DUNS登録情報とSSLの申請情報に相違があると、取得申請の手続き中にSSL発行元よりお客様宛に確認メールが届く場合があります。</p>
                                                            <table class="table mb5">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w45per">会社名</th>
                                                                    <td>DUNSに登録されている英語会社名</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">所在地</th>
                                                                    <td>DUNSに登録されている英語住所</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">電話番号</th>
                                                                    <td>DUNSに登録されている電話番号</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php#link-c">DUNS登録情報の確認方法</a></li>
                                                            </ul>
                                                        </dd>

                                                        <dt><i class="ico ico_square-fill"></i>【ローマ字商号の記載がなされている定款】、または【弁護士意見書】</dt>
                                                        <dd>
                                                            <p>申請内容に記載の組織名と一致するか確認するために利用されます。</p>
                                                            <p>なお、定款でご提出の場合、定款にローマ字商号の記載がなければ定款に記載を加える必要があります。
                                                                登記事項には該当しないため、公証人による認証や、変更登記の手続きは不要です。</p>
                                                            <p>また、定款の最終項目に代表取締役名義での原本証明が必要です。
                                                                下記をご参考に合わせてご準備お願いいたします。</p>

                                                            <aside class="msg">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>原本証明の記載例</h6>
                                                                <div class="msg_body">
                                                                    <p>この定款の写しは、原本と相違ないことを証明します。<br>
                                                                        2018年**月**日 （原本証明作成日 ： 3ヶ月以内）<br>
                                                                        東京都****区****** （登記上の住所）<br>
                                                                        株式会社****** （登記上の組織・会社名）</p>
                                                                </div>
                                                            </aside>
                                                            <p>定款の変更手続きや弁護士意見書の取得方法は下記をご参照ください。</p>
                                                            <ul class="ul">
                                                                <li><a href="https://ssl.cloudsecure.ne.jp/manual/articles_flow.php" target="_blank">クラウドセキュア「定款の変更手続きについて」</a> <i class="ico ico_new-window base-color"></i></li>
                                                                <li><a href="https://ssl.cloudsecure.ne.jp/manual/lawyer_flow.php" target="_blank">クラウドセキュア「弁護士意見書の取得方法について」</a> <i class="ico ico_new-window base-color"></i></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.更新申請を開始します。</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、お申し込みいただいたSSL証明書の「<em class="font-bold">更新申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_8.png" alt="EV SSLの取得・更新申請手順"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3. 申請情報を入力してください。</h5>
                                            <div class="box_body">
                                                <p class="mb0">新規取得時と同様に、「<em class="font-bold">CSR情報</em>」を入力します。</p>
                                                <p class="note">※コモンネームを変更することは出来ません。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_9.png?date=230331" alt="コモンネーム及びCSR情報を入力します"></p>
                                                <p class="mb0">続いて「<em class="font-bold">SSL証明書登録担当者情報</em>」をご入力の上、「<em class="font-bold">確認画面へ進む</em>」をクリックしてください。<br>
                                                   進んだ画面にて、ご入力いただいた情報をご確認の上、「<em class="font-bold">更新申請をする</em>」をクリックしてください。</p>
                                                <p class="note">※組織名はDUNS登録情報の「会社名」と一致している必要があります。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_ssl_ov_12.png" alt="登録者情報を入力します"></p>
                                            </div>
                                        </section>

                                        <section class="box">

                                            <h5 class="box_ttl" id="link-previous-b04">4. 認証作業</h5>
                                            <div class="box_body">

                                                <ul class="ul mb30">
                                                    <li><a href="#previous-secure-2">クラウドセキュア EV SSL の場合</a></li>
                                                    <li><a href="#previous-digicert-2">デジサート セキュア・サーバID EV の場合</a></li>
                                                </ul>

                                                <p class="font-bold mt20" id="previous-secure-2">クラウドセキュア EV SSL の場合</p>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-1. オンライン認証</h5>
                                                    <div class="box_body">
                                                        <p>クラウドセキュア社より英文の承認確認メールが送付されます。<br>
                                                            受信したメール本文内にあるURLへアクセスし、入力欄に承認確認メールに記載されている「verification code」をご入力ください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_1.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>上位の認証機関であるセクティゴ社（旧コモド社）より「利用契約同意確認メール」が送付されます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-3. 利用契約の同意と申請責任者確認書の提出</h5>
                                                    <div class="box_body">

                                                        <p>受信した「利用契約同意確認メール」に記載の内容をご確認の上、「verification code」をコピーし、メールに記載されているURLをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_10.png" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>アクセスしたページにて先ほどコピーした「verification code」を入力し、「Next」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_11.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>下記の項目を入力し、「I ACCEPT」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_ssl_ev_12.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>

                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>FirstName</th>
                                                                <td>申請責任者の名前をアルファベットでご入力ください。<br>例)Taro</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surname</th>
                                                                <td>申請責任者の苗字をアルファベットでご入力ください。<br>例)Yamada</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>(あらかじめ入力済みです)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Contact Phone No</th>
                                                                <td>DUNSナンバーの登録に利用した電話番号をご入力ください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Job Title</th>
                                                                <td>申請責任者の役職をアルファベットでご入力ください。<br>例)President</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-3. 申請組織を確認できる書類を提出</h5>
                                                    <div class="box_body">
                                                        <p>「4-2. 利用契約の同意と申請責任者確認書の提出」でご準備いただいた定款や弁護士意見書をPDFなど電子化(スキャン)した状態で、「evdocs@cloudsecure.co.jp」へと送信することで、SSL証明書の発行代理店であるクラウドセキュア社にて内容を確認の上、セクティゴ社（旧コモド社）へ提出いたします。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご提出時のメールの件名・ファイル名について</h6>
                                                            <div class="msg_body">
                                                                <p>ご提出の際、お手数ですがメールの件名と、添付していただくファイル名については下記のようにお願いいたします。</p>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">メールの件名</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款の場合</th>
                                                                        <td>【会社名】定款の送付　Order #*******</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書の場合</th>
                                                                        <td>【会社名】弁護士意見書の送付　Order #*******</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">添付ファイルの名称</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款</th>
                                                                        <td>Articlesofincorporation*******.pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書</th>
                                                                        <td>lawyersopinion*******.pdf</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>※「*******」の部分については、ご登録のメールアドレス宛に届いている英文メールの件名に記載されている数字が入ります。</p>
                                                            </div>
                                                        </aside>

                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-4. 電話での確認</h5>
                                                    <div class="box_body">
                                                        <p>申請責任者のお名前をお伝えし、電話の転送を依頼します。
                                                            転送が不可能な場合は、申請責任者の電話番号を伺い改めて連絡します。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>電話確認の内容について</h6>
                                                            <div class="msg_body">
                                                                <ul class="ul">
                                                                    <li>SSL証明書の申請意思確認（コモンネーム・追加ドメイン・申請SSLサーバ証明書名）</li>
                                                                    <li>申請企業の確認<br>英語表記会社名と所在地（申請情報と同じである必要があります）</li>
                                                                    <li>申請責任者の正社員確認役職<br>（申請情報と同じである必要があります）</li>
                                                                    <li>技術担当者の会社名・メールアドレスの確認（確認されないこともあります）</li>
                                                                    <li>
                                                                        <p class="mb5">利用規約同意書への署名確認</p>
                                                                        <p class="note mb0">
                                                                            英語による電話確認が行われる場合があります。その場合、日本語希望とお伝えください。<br>
                                                                            例）I would like to call me from Japanese staff.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </aside>

                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body">

                                                <p class="font-bold" id="previous-digicert-2">デジサート セキュア・サーバID EV の場合</p>

                                                <section class="box">
                                                    <h6 class="box_ttl">4-1.メールによる承認作業</h6>
                                                    <div class="box_body">
                                                        <p>更新申請完了後、SSL発行元より「承認メール」が送付されます。
                                                            受信した承認メール本文内にある承認用URLへとアクセスし、承認作業を行ってください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4-2.電話による本人確認</h6>
                                                    <div class="box_body">
                                                        <p>審査が進むと、SSL発行元からSSLご登録担当者様に対して申請内容確認のための電話が入ります。</p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body pt0">
                                                <aside class="msg msg_notice">
                                                    <div class="msg_body">
                                                        <p>
                                                            SSL証明書申請団体（組織）の認証については下記をご参照ください。
                                                        </p>
                                                        <ul class="ul">
                                                            <li><a href="https://knowledge.digicert.com/jp/solution/ev-ssl-organization-validation" target="_blank">EV SSL証明書申請団体（組織）の認証について</a><i class="ico ico--newWindow"></i></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b05">5. 更新手続き完了</h5>
                                            <div class="box_body">
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。<br>
                                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
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

                            <div class="toc-list mt20">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">取得申請の手順</a>
                                        <ol>
                                            <li><a href="#link-a01">1.取得申請の前に認証作業の準備</a></li>
                                            <li><a href="#link-a02">2.取得申請を開始します。</a></li>
                                            <li><a href="#link-a03">3.コモンネーム・CSR情報を入力してください。</a></li>
                                            <li><a href="#link-a04">4.SSL証明書登録担当者情報を入力してください。</a></li>
                                            <li><a href="#link-a05">5.認証作業</a></li>
                                            <li><a href="#link-a06">6.新規取得手続き完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">更新申請の手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.更新申請の前に認証作業の準備</a></li>
                                            <li><a href="#link-b02">2.更新申請を開始します。</a></li>
                                            <li><a href="#link-b03">3.申請情報を入力してください。</a></li>
                                            <li><a href="#link-b04">4.認証作業</a></li>
                                            <li><a href="#link-b05">5.更新手続き完了</a></li>
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
                                            <h5 class="box_ttl" id="link-a01">1.取得申請の前に認証作業の準備</h5>
                                            <div class="box_body">
                                                <p>審査する際に下記が必ず必要となりますので事前にご準備お願いいたします。</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)ナンバー</dt>
                                                    <dd>
                                                        <p>企業が実在することを審査する際にDUNS(ダンズ)ナンバーを利用するため、事前にDUNSナンバーの取得を行ってください。
                                                            取得方法については下記をご参照ください。</p>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php">DUNSナンバーの取得方法</a></li>
                                                        </ul>
                                                    </dd>

                                                    <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)登録情報</dt>
                                                    <dd>
                                                        <p>DUNS登録情報とSSLの申請情報が一致しない場合、証明書の発行ができません。<br>
                                                           下記3項目が正しく登録されているかを必ずご確認ください。<br>
                                                           登録情報が現在の情報と異なる場合は、DUNS登録情報を変更したうえでSSLの取得申請を行ってください。<br>
                                                           (登録情報が古い、ローマ字表記の会社名が異なるなど)</p>
                                                        <p class="note">※DUNS登録情報とSSLの申請情報に相違があると、取得申請の手続き中にSSL発行元よりお客様宛に確認メールが届く場合があります。</p>
                                                        <table class="table mb5">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w45per">会社名</th>
                                                                    <td>DUNSに登録されている英語会社名</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">所在地</th>
                                                                    <td>DUNSに登録されている英語住所</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">電話番号</th>
                                                                    <td>DUNSに登録されている電話番号</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <ul class="ul">
                                                            <li><a href="man_order_ssl_duns.php#link-c">DUNS登録情報の確認方法</a></li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>【ローマ字商号の記載がなされている定款】、または【弁護士意見書】</dt>
                                                    <dd>
                                                        <p>申請内容に記載の組織名と一致するか確認するために利用されます。</p>
                                                        <p>なお、定款でご提出の場合、定款にローマ字商号の記載がなければ定款に記載を加える必要があります。
                                                            登記事項には該当しないため、公証人による認証や、変更登記の手続きは不要です。</p>
                                                        <p>また、定款の最終項目に代表取締役名義での原本証明が必要です。
                                                            下記をご参考に合わせてご準備お願いいたします。</p>

                                                        <aside class="msg">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle"></i>原本証明の記載例</h6>
                                                            <div class="msg_body">
                                                                <p>この定款の写しは、原本と相違ないことを証明します。<br>
                                                                    2018年**月**日 （原本証明作成日 ： 3ヶ月以内）<br>
                                                                    東京都****区****** （登記上の住所）<br>
                                                                    株式会社****** （登記上の組織・会社名）</p>
                                                            </div>
                                                        </aside>
                                                        <p>定款の変更手続きや弁護士意見書の取得方法は下記をご参照ください。</p>
                                                        <ul class="ul">
                                                            <li><a href="https://ssl.cloudsecure.ne.jp/manual/articles_flow.php" target="_blank">クラウドセキュア「定款の変更手続きについて」</a> <i class="ico ico_new-window base-color"></i></li>
                                                            <li><a href="https://ssl.cloudsecure.ne.jp/manual/lawyer_flow.php" target="_blank">クラウドセキュア「弁護士意見書の取得方法について」</a> <i class="ico ico_new-window base-color"></i></li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2.取得申請を開始します。</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、お申し込みいただいたSSL証明書の「<em class="font-bold">取得申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_6.png?date=2410" alt="取得申請を開始します"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a03">3.コモンネーム・CSR情報を入力してください。</h5>
                                            <div class="box_body">
                                                <p>取得申請フォームが表示されますので、以下の内容を入力し「<em class="font-bold">登録者情報入力画面へ進む</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_7.png?date=2410" alt="コモンネーム及びCSR情報を入力します"></p>
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

                                                <table class="table table_use-caption">
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
                                            <h5 class="box_ttl" id="link-a04">4.SSL証明書登録担当者情報を入力してください。</h5>
                                            <div class="box_body">
                                                <p>フォームに沿って、以下の情報を入力してください。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_12.png?date=2410" alt="登録者情報を入力します"></p>

                                                <table class="table mb5">
                                                    <caption>SSLご登録担当者情報</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">組織名</th>
                                                            <td>運営組織名を正式英文名称でご入力ください。<br>
                                                                DUNS登録情報の「会社名」と一致している必要があります。</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w30per">DUNSナンバー</th>
                                                            <td>9桁の数字をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>氏名</th>
                                                            <td>お名前をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>役職</th>
                                                            <td>役職をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>郵便番号</th>
                                                            <td>郵便番号をご入力ください。※ハイフンは不要です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>国コード</th>
                                                            <td>国コードを選択してください。日本の場合は「JP」です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>都道府県</th>
                                                            <td>運営組織のある都道府県名を選択してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>市区町村</th>
                                                            <td>運営組織のある市区町村名をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>住所</th>
                                                            <td>運営組織の詳しい住所をアルファベットでご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>電話番号</th>
                                                            <td>電話番号をご入力ください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>FAX番号</th>
                                                            <td>FAX番号をご入力ください。※無い場合は、ご入力不要です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールアドレス</th>
                                                            <td>メールアドレスをご入力ください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table mb5">
                                                    <caption>認証方法</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>承認用メールアドレス(※)</th>
                                                            <td>各SSL発行元より送られる承認メールを受信するためのメールアドレスを選択してください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="note">※ 事前に、受信可能なメールアドレスをご用意いただく必要があります。</p>
                                                <p>全てご入力いただけましたら、<em class="font-bold">「確認画面へ進む」</em>をクリックしてください。進んだ画面にて、ご入力いただいた情報をご確認の上、<em class="font-bold">「取得申請をする」</em>をクリックしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a05">5. 認証作業</h5>
                                            <div class="box_body">

                                                <ul class="ul mb30">
                                                    <li><a href="#previous-secure-3">クラウドセキュア EV SSL の場合</a></li>
                                                    <li><a href="#previous-digicert-3">デジサート セキュア・サーバID EV の場合</a></li>
                                                </ul>

                                                <p class="font-bold mt20" id="previous-secure-3">クラウドセキュア EV SSL の場合</p>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-1. オンライン認証</h5>
                                                    <div class="box_body">
                                                        <p>クラウドセキュア社より英文の承認確認メールが送付されます。<br>
                                                            受信したメール本文内にあるURLへアクセスし、入力欄に承認確認メールに記載されている「verification code」をご入力ください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_1.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>上位の認証機関であるセクティゴ社（旧コモド社）より「利用契約同意確認メール」が送付されます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-2. 利用契約の同意と申請責任者確認書の提出</h5>
                                                    <div class="box_body">

                                                        <p>受信した「利用契約同意確認メール」に記載の内容をご確認の上、「verification code」をコピーし、メールに記載されているURLをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_10.png?date=2410" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>アクセスしたページにて先ほどコピーした「verification code」を入力し、「Next」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_11.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>下記の項目を入力し、「I ACCEPT」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_12.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>

                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>FirstName</th>
                                                                <td>申請責任者の名前をアルファベットでご入力ください。<br>例)Taro</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surname</th>
                                                                <td>申請責任者の苗字をアルファベットでご入力ください。<br>例)Yamada</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>(あらかじめ入力済みです)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Contact Phone No</th>
                                                                <td>DUNSナンバーの登録に利用した電話番号をご入力ください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Job Title</th>
                                                                <td>申請責任者の役職をアルファベットでご入力ください。<br>例)President</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </section>


                                                <section class="box">
                                                    <h5 class="box_ttl">5-3. 申請組織を確認できる書類を提出</h5>
                                                    <div class="box_body">
                                                        <p>「5-2. 利用契約の同意と申請責任者確認書の提出」でご準備いただいた定款や弁護士意見書をPDFなど電子化(スキャン)した状態で、「evdocs@cloudsecure.co.jp」へと送信することで、SSL証明書の発行代理店であるクラウドセキュア社にて内容を確認の上、セクティゴ社（旧コモド社）へ提出いたします。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご提出時のメールの件名・ファイル名について</h6>
                                                            <div class="msg_body">
                                                                <p>ご提出の際、お手数ですがメールの件名と、添付していただくファイル名については下記のようにお願いいたします。</p>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">メールの件名</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款の場合</th>
                                                                        <td>【会社名】定款の送付　Order #*******</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書の場合</th>
                                                                        <td>【会社名】弁護士意見書の送付　Order #*******</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">添付ファイルの名称</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款</th>
                                                                        <td>Articlesofincorporation*******.pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書</th>
                                                                        <td>lawyersopinion*******.pdf</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>※「*******」の部分については、ご登録のメールアドレス宛に届いている英文メールの件名に記載されている数字が入ります。</p>

                                                            </div>
                                                        </aside>

                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">5-4. 電話での確認</h5>
                                                    <div class="box_body">
                                                        <p>申請責任者のお名前をお伝えし、電話の転送を依頼します。
                                                            転送が不可能な場合は、申請責任者の電話番号を伺い改めて連絡します。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>電話確認の内容について</h6>
                                                            <div class="msg_body">
                                                                <ul class="ul">
                                                                    <li>SSL証明書の申請意思確認（コモンネーム・追加ドメイン・申請SSLサーバ証明書名）</li>
                                                                    <li>申請企業の確認<br>英語表記会社名と所在地（申請情報と同じである必要があります）</li>
                                                                    <li>申請責任者の正社員確認役職<br>（申請情報と同じである必要があります）</li>
                                                                    <li>技術担当者の会社名・メールアドレスの確認（確認されないこともあります）</li>
                                                                    <li>
                                                                        <p class="mb5">利用規約同意書への署名確認</p>
                                                                        <p class="note mb0">
                                                                            英語による電話確認が行われる場合があります。その場合、日本語希望とお伝えください。<br>
                                                                            例）I would like to call me from Japanese staff.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body">

                                                <p class="font-bold" id="previous-digicert-3">デジサート セキュア・サーバID EV の場合</p>

                                                <section class="box">
                                                    <h6 class="box_ttl">5-1.メールによる承認作業</h6>
                                                    <div class="box_body">
                                                        <p>取得申請完了後、SSL発行元より「承認メール」が送付されます。
                                                            受信した承認メール本文内にある承認用URLへとアクセスし、承認作業を行ってください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5-2.電話による本人確認</h6>
                                                    <div class="box_body">
                                                        <p>審査が進むと、SSL発行元からSSLご登録担当者様に対して申請内容確認のための電話が入ります。</p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body pt0">
                                                <aside class="msg msg_notice">
                                                    <div class="msg_body">
                                                        <p>
                                                            SSL証明書申請団体（組織）の認証については下記をご参照ください。
                                                        </p>
                                                        <ul class="ul">
                                                            <li><a href="https://knowledge.digicert.com/jp/solution/ev-ssl-organization-validation" target="_blank">EV SSL証明書申請団体（組織）の認証について</a><i class="ico ico--newWindow"></i></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a06">6. 新規取得手続き完了</h5>
                                            <div class="box_body">
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。
                                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                                <p>※既に同一のコモンネームで今回のお申し込みと異なるプランでご利用されていた場合は、発行から72時間以内でのご利用開始となります。</p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「独自IPアドレスあり」のSSLご契約にて、 「www.」を付けたコモンネームでお申し込みの方(例：www.example.com)</h6>
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
                                                            <li>※SSL用のIPアドレスについては、サーバーパネル上の「SSL設定 &gt; SSL設定の一覧」に記載がありますのでご確認ください。</li>
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
                                            <h5 class="box_ttl" id="link-b01">1.更新申請の前に認証作業の準備</h5>
                                            <div class="box_body">
                                                <p>審査する際に下記が必ず必要となりますので事前にご準備お願いいたします。</p>

                                                <div class="block_body">
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)ナンバー</dt>
                                                        <dd>
                                                            <p>企業が実在することを審査する際にDUNS(ダンズ)ナンバーを利用するため、事前にDUNSナンバーの取得を行ってください。
                                                                取得方法については下記をご参照ください。</p>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php">DUNSナンバーの取得方法</a></li>
                                                            </ul>
                                                        </dd>

                                                        <dt><i class="ico ico_square-fill"></i>DUNS(ダンズ)登録情報</dt>
                                                        <dd>
                                                            <p>DUNS登録情報とSSLの申請情報が一致しない場合、証明書の発行ができません。<br>
                                                               下記3項目が正しく登録されているかを必ずご確認ください。<br>
                                                               登録情報が現在の情報と異なる場合は、DUNS登録情報を変更したうえでSSLの取得申請を行ってください。<br>
                                                               (登録情報が古い、ローマ字表記の会社名が異なるなど)</p>
                                                            <p class="note">※DUNS登録情報とSSLの申請情報に相違があると、取得申請の手続き中にSSL発行元よりお客様宛に確認メールが届く場合があります。</p>
                                                            <table class="table mb5">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w45per">会社名</th>
                                                                    <td>DUNSに登録されている英語会社名</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">所在地</th>
                                                                    <td>DUNSに登録されている英語住所</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w45per">電話番号</th>
                                                                    <td>DUNSに登録されている電話番号</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <ul class="ul">
                                                                <li><a href="man_order_ssl_duns.php#link-c">DUNS登録情報の確認方法</a></li>
                                                            </ul>
                                                        </dd>

                                                        <dt><i class="ico ico_square-fill"></i>【ローマ字商号の記載がなされている定款】、または【弁護士意見書】</dt>
                                                        <dd>
                                                            <p>申請内容に記載の組織名と一致するか確認するために利用されます。</p>
                                                            <p>なお、定款でご提出の場合、定款にローマ字商号の記載がなければ定款に記載を加える必要があります。
                                                                登記事項には該当しないため、公証人による認証や、変更登記の手続きは不要です。</p>
                                                            <p>また、定款の最終項目に代表取締役名義での原本証明が必要です。
                                                                下記をご参考に合わせてご準備お願いいたします。</p>

                                                            <aside class="msg">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>原本証明の記載例</h6>
                                                                <div class="msg_body">
                                                                    <p>この定款の写しは、原本と相違ないことを証明します。<br>
                                                                        2018年**月**日 （原本証明作成日 ： 3ヶ月以内）<br>
                                                                        東京都****区****** （登記上の住所）<br>
                                                                        株式会社****** （登記上の組織・会社名）</p>
                                                                </div>
                                                            </aside>
                                                            <p>定款の変更手続きや弁護士意見書の取得方法は下記をご参照ください。</p>
                                                            <ul class="ul">
                                                                <li><a href="https://ssl.cloudsecure.ne.jp/manual/articles_flow.php" target="_blank">クラウドセキュア「定款の変更手続きについて」</a> <i class="ico ico_new-window base-color"></i></li>
                                                                <li><a href="https://ssl.cloudsecure.ne.jp/manual/lawyer_flow.php" target="_blank">クラウドセキュア「弁護士意見書の取得方法について」</a> <i class="ico ico_new-window base-color"></i></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.更新申請を開始します。</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、お申し込みいただいたSSL証明書の「<em class="font-bold">更新申請</em>」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_8.png?date=2410" alt="EV SSLの取得・更新申請手順"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3. 申請情報を入力してください。</h5>
                                            <div class="box_body">
                                                <p class="mb0">新規取得時と同様に、「<em class="font-bold">CSR情報</em>」を入力します。</p>
                                                <p class="note">※コモンネームを変更することは出来ません。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ev_9.png?date=2410" alt="コモンネーム及びCSR情報を入力します"></p>

                                                <p class="mb0">続いて「<em class="font-bold">SSL証明書登録担当者情報</em>」をご入力の上、「<em class="font-bold">確認画面へ進む</em>」をクリックしてください。<br>
                                                   進んだ画面にて、ご入力いただいた情報をご確認の上、「<em class="font-bold">更新申請をする</em>」をクリックしてください。</p>
                                                <p class="note">※組織名はDUNS登録情報の「会社名」と一致している必要があります。</p>
                                                <p><img class="img" src="../img/manual/man_order_ssl_ov_12.png?date=2410" alt="登録者情報を入力します"></p>


                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b04">4. 認証作業</h5>

                                            <div class="box_body">

                                                <ul class="ul mb30">
                                                    <li><a href="#previous-secure-4">クラウドセキュア EV SSL の場合</a></li>
                                                    <li><a href="#previous-digicert-4">デジサート セキュア・サーバID EV の場合</a></li>
                                                </ul>

                                                <p class="font-bold mt20" id="previous-secure-4">クラウドセキュア EV SSL の場合</p>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-1. オンライン認証</h5>
                                                    <div class="box_body">
                                                        <p>クラウドセキュア社より英文の承認確認メールが送付されます。<br>
                                                            受信したメール本文内にあるURLへアクセスし、入力欄に承認確認メールに記載されている「verification code」をご入力ください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_1.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>上位の認証機関であるセクティゴ社（旧コモド社）より「利用契約同意確認メール」が送付されます。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-2. 利用契約の同意と申請責任者確認書の提出</h5>
                                                    <div class="box_body">
                                                        <p>受信した「利用契約同意確認メール」に記載の内容をご確認の上、「verification code」をコピーし、メールに記載されているURLをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_10.png?date=2410" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>アクセスしたページにて先ほどコピーした「verification code」を入力し、「Next」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_11.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>
                                                        <p>下記の項目を入力し、「I ACCEPT」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_order_ssl_ev_12.png?date=20250626" alt="EV SSLの取得・更新申請手順"></p>

                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>FirstName</th>
                                                                <td>申請責任者の名前をアルファベットでご入力ください。<br>例)Taro</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surname</th>
                                                                <td>申請責任者の苗字をアルファベットでご入力ください。<br>例)Yamada</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>(あらかじめ入力済みです)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Contact Phone No</th>
                                                                <td>DUNSナンバーの登録に利用した電話番号をご入力ください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Job Title</th>
                                                                <td>申請責任者の役職をアルファベットでご入力ください。<br>例)President</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-3. 申請組織を確認できる書類を提出</h5>
                                                    <div class="box_body">
                                                        <p>「4-2. 利用契約の同意と申請責任者確認書の提出」でご準備いただいた定款や弁護士意見書をPDFなど電子化(スキャン)した状態で、「evdocs@cloudsecure.co.jp」へと送信することで、SSL証明書の発行代理店であるクラウドセキュア社にて内容を確認の上、セクティゴ社（旧コモド社）へ提出いたします。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご提出時のメールの件名・ファイル名について</h6>
                                                            <div class="msg_body">
                                                                <p>ご提出の際、お手数ですがメールの件名と、添付していただくファイル名については下記のようにお願いいたします。</p>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">メールの件名</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款の場合</th>
                                                                        <td>【会社名】定款の送付　Order #*******</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書の場合</th>
                                                                        <td>【会社名】弁護士意見書の送付　Order #*******</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table mb5">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2">添付ファイルの名称</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>定款</th>
                                                                        <td>Articlesofincorporation*******.pdf</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>弁護士意見書</th>
                                                                        <td>lawyersopinion*******.pdf</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>※「*******」の部分については、ご登録のメールアドレス宛に届いている英文メールの件名に記載されている数字が入ります。</p>
                                                            </div>
                                                        </aside>

                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl">4-4. 電話での確認</h5>
                                                    <div class="box_body">
                                                        <p>申請責任者のお名前をお伝えし、電話の転送を依頼します。
                                                            転送が不可能な場合は、申請責任者の電話番号を伺い改めて連絡します。</p>

                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>電話確認の内容について</h6>
                                                            <div class="msg_body">
                                                                <ul class="ul">
                                                                    <li>SSL証明書の申請意思確認（コモンネーム・追加ドメイン・申請SSLサーバ証明書名）</li>
                                                                    <li>申請企業の確認<br>英語表記会社名と所在地（申請情報と同じである必要があります）</li>
                                                                    <li>申請責任者の正社員確認役職<br>（申請情報と同じである必要があります）</li>
                                                                    <li>技術担当者の会社名・メールアドレスの確認（確認されないこともあります）</li>
                                                                    <li>
                                                                        <p class="mb5">利用規約同意書への署名確認</p>
                                                                        <p class="note mb0">
                                                                            英語による電話確認が行われる場合があります。その場合、日本語希望とお伝えください。<br>
                                                                            例）I would like to call me from Japanese staff.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body">

                                                <p class="font-bold" id="previous-digicert-4">デジサート セキュア・サーバID EV の場合</p>

                                                <section class="box">
                                                    <h6 class="box_ttl">4-1.メールによる承認作業</h6>
                                                    <div class="box_body">
                                                        <p>更新申請完了後、SSL発行元より「承認メール」が送付されます。
                                                            受信した承認メール本文内にある承認用URLへとアクセスし、承認作業を行ってください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4-2.電話による本人確認</h6>
                                                    <div class="box_body">
                                                        <p>審査が進むと、SSL発行元からSSLご登録担当者様に対して申請内容確認のための電話が入ります。</p>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="box_body pt0">
                                                <aside class="msg msg_notice">
                                                    <div class="msg_body">
                                                        <p>
                                                            SSL証明書申請団体（組織）の認証については下記をご参照ください。
                                                        </p>
                                                        <ul class="ul">
                                                            <li><a href="https://knowledge.digicert.com/jp/solution/ev-ssl-organization-validation" target="_blank">EV SSL証明書申請団体（組織）の認証について</a><i class="ico ico--newWindow"></i></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b05">5. 更新手続き完了</h5>
                                            <div class="box_body">
                                                <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。<br>
                                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
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