<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>オプション独自SSLのお申し込み手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」でオプション独自SSLをご利用いただくための手順のご案内です。エックスサーバーでは有料の「オプション独自SSL」のほか、無料・無制限に利用可能な「無料独自SSL」も取り扱っています。">


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
            
                <h3 class="sub-ttl">オプション独自SSLのお申し込み</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">独自SSLとは</a></li>
                    <li><a href="#link-b">新規取得お申し込み手順</a>
                        <ol>
                            <li><a href="#link-b00">オプション独自SSLお申し込みの前に</a></li>
                            <li><a href="#link-b01">1.「SSL証明書」の「+追加申し込み」をクリック</a></li>
                            <li><a href="#link-b02">2.お申し込みいただく内容を入力してください。</a></li>
                            <li><a href="#link-b03">3.料金のお支払い手続きを行ってください。</a></li>
                            <li><a href="#link-b04">4.取得申請の前に認証作業の準備を行います。</a></li>
                            <li><a href="#link-b05">5.取得申請を開始します。</a></li>
                            <li><a href="#link-b06">6.コモンネーム設定・CSR情報を入力してください。</a></li>
                            <li><a href="#link-b07">7.SSL証明書登録担当者情報を入力してください。</a></li>
                            <li><a href="#link-b08">8.メールによる承認作業</a></li>
                            <li><a href="#link-b09">9.新規取得手続き完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">更新お申し込み手順</a>
                        <ol>
                            <li><a href="#link-c01">1.「料金支払い」へお進みください。</a></li>
                            <li><a href="#link-c02">2.更新するSSLを選択し、料金のお支払い手続きへとお進みください。</a></li>
                            <li><a href="#link-c03">3.お支払い方法を選択してください。</a></li>
                            <li><a href="#link-c04">4.更新申請を開始します。</a></li>
                            <li><a href="#link-c05">5.申請情報を入力してください。</a></li>
                            <li><a href="#link-c06">6.メールによる承認作業</a></li>
                            <li><a href="#link-c07">7.更新手続き完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">「2Way利用」について</a></li>
                     <li><a href="#link-e">「クラウドセキュアのセキュリティ診断サービス」について</a></li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">独自SSLとは</h4>
                    <div class="section_body">
                        <p>SSLとは、インターネット上でやり取りされる情報を暗号化したり、該当するWebサイトの安全性を証明するセキュリティ機能のことです。<br>
                        また、独自SSLとは、他のユーザーと共に利用する共有SSLとは異なり、ご自身でお持ちの独自ドメインやサブドメインを用いて暗号化通信などを行うものを差します。</p>
                        
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">無料・無制限で独自SSLが利用可能な「無料独自SSL」のご利用方法は、以下のマニュアルをご参照ください。</p>
                                <ul class="list list_arrow-right mb0">
                                    <li>マニュアル「<a href="man_server_ssl.php">サーバーについて ＞ SSL設定</a>」</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">新規取得お申し込み手順</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b00">オプション独自SSLお申し込みの前に</h6>
                                <div class="box_body">
                                    <p>各SSL発行元より送られる承認メールを受信するためのメールアドレスが必要となります。事前にサーバーパネルで「admin＠ドメイン名」(例：admin@example.com) 等のメールアドレスを追加しておいてください。</p>
                                    
                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>参考：<a href="man_mail_add.php">「メールアカウントの追加」マニュアル</a><i class="ico ico_chevron-right"></i></p>
                                    </div>
                                    
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「SSL証明書」の「+追加申し込み」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、「<em class="font-bold">+追加申し込み</em>」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_1.png?date=20210610" alt="SSL証明書の+追加申し込みをクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.お申し込みいただく内容を入力してください。</h6>
                                <div class="box_body">
                                    <p>オプション独自SSLのお申し込みフォームが表示されますので、以下の内容をご入力ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_3.png?date=20250626" alt="コモンネーム及びSSLブランドの申し込みをします"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SSLブランドを選択</th>
                                                <td>お申し込みいただくSSL証明書を選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>プランを選択</th>
                                                <td>以下のプランより選択してください。<br>
                                                「IPアドレスベース」・・・・・・　IPアドレスに紐付くSSL証明書<br>
                                                「SNI SSL(ネームベース)」 ・・・　ホスト名に紐付くSSL証明書</td>
                                            </tr>
                                            <tr>
                                                <th>対象サーバーアカウント</th>
                                                <td>コモンネームとするドメインが設定されているサーバーIDを選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>コモンネーム</th>
                                                <td>
                                                    <p>ご利用になる独自ドメイン、またはサブドメインをご選択ください。</p>
                                                    <p class="note">※事前に、ご利用予定の独自ドメインまたはサブドメインの設定を行っておく必要があります。</p>
                                                    <p class="note">※64文字以上のコモンネームはお申し込みできません。</p>
                                                    <aside class="msg msg_notice mb0">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>コモンネームに関して</h6>
                                                        <div class="msg_body">
                                                            <p>「www.」あり/なし両方のURLでSSL接続を利用したい場合に関しては、<a href="#link-d">SSL証明書の「2Way利用」について</a>をご参照ください。</p>                                                            
                                                        </div>
                                                    </aside>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p>全てご入力いただきましたら、「<em class="font-bold">お申し込み内容の確認とお支払いへ進む</em>」をクリックしてお進みください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.料金のお支払い手続きを行ってください。</h6>
                                <div class="box_body">
                                    <p>ご利用料金のお支払い方法を、「クレジットカード」「コンビニエンスストア」「銀行振込」「ペイジー」「翌月後払い（コンビニ／銀行）」の中からお選びいただき、手続きをお進めください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20201022" alt="料金のお支払い方法を選択"></p>
                                    <p><em class="font-bold">取得申請に関するご案内</em>のメールを、ご登録メールアドレス宛にお送り致しますので、ご確認ください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.取得申請の前に認証作業の準備を行います。</h6>
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
                                <h6 class="box_ttl" id="link-b05">5.取得申請を開始します。</h6>
                                <div class="box_body">
                                    <p>「SSL証明書」より、お申し込みいただいたSSL証明書の「<em class="font-bold">取得申請</em>」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_4.png?date=20201022" alt="取得申請を開始します"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b06">6.コモンネーム設定・CSR情報を入力してください。</h6>
                                <div class="box_body">
                                    <p>取得申請フォームが表示されますので、以下の内容をご入力ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_5.png?date=20201022" alt="コモンネーム及びCSR情報を入力します"></p>
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
                                                            <p>「www.」あり/なし両方のURLでSSL接続を利用したい場合に関しては、<a href="#link-d">SSL証明書の「2Way利用」について</a>をご参照ください。</p>                                                           
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
                                    <p>ご入力後、<em class="font-bold">「登録者情報入力画面へ進む」</em>をクリックしてください。</p>
                                    
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b07">7.SSL証明書登録担当者情報を入力してください。</h6>
                                <div class="box_body">
                                    <p>フォームに沿って、以下の情報を入力してください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_6.png?date=20201210" alt="登録者情報を入力します"></p>
                                    
                                    <table class="table mb5">
                                    	<caption>SSLご登録担当者情報</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">組織名</th>
                                                <td>運営組織名を正式英文名称でご入力ください。</td>
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
                                    	<caption>認証方法(※1)</caption>
                                        <tbody>
                                            <tr>
                                                <th>承認用メールアドレス(※2)</th>
                                                <td>各SSL発行元より送られる承認メールを受信するためのメールアドレスを選択してください。</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※1 お申し込みのブランドが「クラウドSSL」「クラウドセキュア・スピード認証SSL」「ジオトラスト クイックSSLプレミアム」「ラピッドSSL」で、「DNS認証」が可能な場合は入力不要のため表示されません。</p>
                                    <p class="note">※2 事前に、受信可能なメールアドレスをご用意いただく必要があります。</p>
                                    <p>全てご入力いただけましたら、<em class="font-bold">「確認画面へ進む」</em>をクリックしてください。進んだ画面にて、ご入力いただいた情報をご確認の上、<em class="font-bold">「取得申請をする」</em>をクリックしてください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b08">8.メールによる承認作業</h6>
                                <div class="box_body">
                                    <p>取得申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                    受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                    <ul class="note-list mb15">
                                        <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                        <li>※承認メールがうまく受信できなかった場合は、Xアカウント内、ページ下部の「SSL証明書」より「承認メール再送」のお手続きが可能です。</li>
                                        <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。 <br>
                                        その際は、当社より「【XServer】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                    </ul>
                                </div>
                            </section>
                            
                            <section id="s10" class="box">
                                <h6 class="box_ttl" id="link-b09">9.新規取得手続き完了</h6>
                                <div class="box_body">
                                    <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                    (審査には数日程度お時間要する場合がございます。あらかじめご了承ください。)</p>
                                    <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。<br>
                                    インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                    <p class="note">※既に同一のコモンネームで今回のお申し込みと異なるプランでご利用されていた場合は、発行から72時間以内でのご利用開始となります。</p>
                                    <aside id="twoway" class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「IPアドレスベース」プランのSSLご契約にて、
「www.」を付けたコモンネームでお申し込みの方(例：www.example.com)</h6>
                                        <div class="msg_body">
                                            <p>「www.」を付けたコモンネームでお申し込みいただくことで、「www.」が付加されたURL(https://www.example.com/)、付加されていないURL(https://example.com/)、どちらでもSSL接続を行うことが可能になります。</p>
                                            <p>設定が完了した時点では、「www.」ありの状態でのみSSL接続が可能です。<br>IPアドレスベースでSSLを取得された場合、「www.」なしの状態でも利用するためには、サーバーパネル上のDNSレコード設定より、SSL用のIPアドレスを設定していただく必要があります。</p>
                                            <p>SSL証明書の設定完了時点では、DNSレコード設定は下記の状態となっています。<br>ホスト名がドメイン名そのもので、種別がAとなっているレコードを下記の通り変更してください。</p>
                                            <p class="note">※SNI SSL(ネームベース)のでSSLを取得された場合は、DNSレコードの変更は不要です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>変更前</dt>
                                                <dd>
                                                    <p class="note">※レコードの順序は前後している場合がありますのでご注意ください。</p>
                                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_12.png?date=20201022" alt="DNSレコード設定画面"></p>
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
                                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_13.png?date=20201022" alt="DNSレコード設定画面"></p>
                                                    
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
                    <h4 class="section_ttl" id="link-c">更新お申し込み手順</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「料金支払い」へお進みください。</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>へログインへログインし、上部メニューの「料金支払い」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png" alt="料金支払いに進みます"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.更新するSSLを選択し、料金のお支払い手続きへとお進みください。</h6>
                                <div class="box_body">
                                    <p>ページ下部にある<em class="font-bold">「SSL証明書」</em>より、更新を行うSSL証明書にチェックを入れ、「支払方法を選択する」をクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_8.png?date=20201022" alt="支払い方法を選択するをクリックしているスクリーンショット"></p>
                                    <aside class="msg msg_notice">
                                        <div class="msg_body">
                                            <p>当サービスでは、2015年9月16日よりオプション独自SSLのサービス拡張をいたしました。<br>
                                            詳細は、<a href="../price/price_ssl.php">公式サイト &gt; 料金 &gt; オプション独自SSL</a>をご参照ください。</p>
                                            <p>なお、現在ご利用のSSL証明書について、更新のお手続き時点で以下の変更をご希望の場合は、本画面からの更新手続きを行わず<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>内、トップページ下部の「SSL証明書」の「+追加申し込み」より、同一のコモンネームでお手続きを行ってください。</p>
                                            <ul class="ul mb0">
                                                <li>SSLブランドを変更する場合</li>
                                                <li>SSLブランドは変更せず、SSLプランのみ変更する場合</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.お支払い方法を選択してください。</h6>
                                <div class="box_body">
                                    <p>更新料金のお支払い方法を、「クレジットカード」「翌月後払い（コンビニ／銀行）」「コンビニエンスストア」「銀行振込」「ペイジー」の中からお選びいただき、手続きをお進めください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20210122" alt="更新料金のお支払い方法を選択"></p>
                                    <p><em class="font-bold">更新手続きに関するご案内</em>をメールにてお送り致しますので、ご確認ください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c04">4.更新申請を開始します。</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>へログインし、ページ下部の<em class="font-bold">「SSL証明書」</em>より、お申し込みいただいたSSL証明書の<em class="font-bold">「更新申請」</em>をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_10.png?date=20201022" alt="更新申請を開始します"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c05">5.申請情報を入力してください。</h6>
                                <div class="box_body">
                                    <p class="mb0">新規取得時と同様に、「CSR情報」「SSL登録者情報」ご入力の上、申請作業を完了させてください。</p>
                                    <p class="note">※コモンネームを変更することは出来ません。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_11.png?date=20201022" alt="CSR情報の入力"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c06">6.メールによる承認作業</h6>
                                <div class="box_body">
                                    <p>更新申請完了後、各SSL発行元より<em class="font-bold">「承認メール」</em>が送付されます。<br>
                                    受信した承認メール本文内にある<em class="font-bold">承認用URLへとアクセス</em>し、承認作業を行ってください。</p>
                                    <ul class="note-list mb15">
                                        <li>※前項において「認証方法」の項目が表示されない場合は「DNS認証」が適用されるため、本作業を省略することが出来ます。</li>
                                        <li>※承認メールがうまく受信できなかった場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/">XServerアカウント</a>内、ページ下部の「ご契約一覧 &gt; SSL証明書」より「承認メール再送」のお手続きが可能です。</li>
                                        <li>※取得申請完了後、一定期間内に承認手続きを行われなかった場合、各SSL発行元より当該申請を無効とする「自動キャンセル」の手続きが実施されます。<br>
                                        その際は、当社より「【XServer】承認作業が未完了のSSL証明書に関する自動キャンセルのご連絡」という件名のメールが送信されます。</li>
                                    </ul>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c07">7.更新手続き完了</h6>
                                <div class="box_body">
                                    <p>お客様での承認作業後、SSL発行元において審査を行います。<br>
                                    (審査には数日程度お時間要する場合がございます。あらかじめご了承ください。)</p>
                                    <p>SSL発行元での審査が完了し、SSL証明書が発行されましたら、弊社にてサーバーへのインストール作業を行います。インストール作業の完了次第、お客様のご登録メールアドレス宛へご連絡しますので、しばらくお待ちくださいますようお願いいたします。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">「2Way利用」について</h4>
                    <div class="section_body">
                        
                        <p>オプション独自SSLは、Subject Alternative Names(SANs)によるコモンネーム(CN)の別名機能を利用した、「wwwあり/なし」いずれのURLでもSSL通信が可能な「2Way利用」に対応しています。</p>
                        <p>SSL証明書のコモンネームを「www.ドメイン名」とする場合に限り、ドメイン(FQDN)のURLに加え、「wwwなし」URLであってもSSL通信が行えます。</p>
                        
                        <table class="table primary-table-l mb5">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>wwwあり(例:www.example.com)でお申し込みの場合</th>
                                    <th>wwwなし(例:example.com)でお申し込みの場合</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>https://www.example.comでの接続</th>
                                    <td class="tac">○</td>
                                    <td class="tac">×</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th>https://example.comでの接続</th>
                                    <td class="tac">○</td>
                                    <td class="tac">○</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="note">※一部のSSL証明書ブランドにてご利用可能なWebサイト上へのサイトシールの表示は、コモンネームに指定したドメイン(FQDN)のURLのみに限ります。</p>
                        <p class="note">※64文字以上のコモンネームはお申し込みできません。</p>
                        
                        <p>また、いずれのSSL証明書においても、 一部を除くほとんどの携帯電話(フィーチャーフォン)やWebブラウザの旧バージョン、 ごく一部のスマートフォンは、SANsによるコモンネームの別名機能に対応していないことから、「2Way利用」によるコモンネームと異なるURLでのSSL通信は行えません。</p>
                        <p>以上の端末においてSSL通信を行う場合は、 SSL証明書に設定された「コモンネーム」のみをURLにしてご利用ください。</p>
                        <p>なお、各端末、WebブラウザにおけるSSL証明書でのSANs機能への対応状況については、 携帯電話会社やメーカーへお問い合わせください。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">「クラウドセキュアのセキュリティ診断サービス」について</h4>
						<div class="section_body">
							<p>クラウドセキュアブランドのSSL証明書をお申し込みいただいた方のみがご利用できるサービスで、SSL証明書に使用されるホスト名に存在するお客様のWebサイトを毎日自動巡回・診断し、フィッシングURLやマルウェアなどが確認されたときは、すぐにメール通知を行います。</p>
							<p>安全性を確認したWebサイトには、診断日付が記載したセキュアシールを発行し、サイト上に掲載することで、訪問者に安全性の配慮をアピールすることができます。</p>
							<p>機能の詳細については、下記をご参照ください。</p>

							<section class="block">
								<h5 class="block_ttl">診断方法・診断結果について</h5>
								<div class="block_body">
									<dl class="dl">
										<dt><i class="ico ico_square-fill"></i>診断方法について</dt>
										<dd>
											<ul class="ul">
												<li>
													<p>診断開始URLと検知時の通知先メールアドレスは下記の通りです。</p>
													<table class="table mb5">
														<tbody>
															<tr>
																<th class="w45per">診断開始URL</th>
																<td>https://コモンネーム/</td>
															</tr>
															<tr>
																<th class="w45per">検知時の通知先メールアドレス</th>
																<td>契約情報から設定した通知先メールアドレス</td>
															</tr>
														</tbody>
													</table>
													<p class="note">※診断開始URLは「<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">セキュリティ診断管理画面</a><i class="ico ico_new-window base-color"></i>」から変更可能です。</p>
												</li>
												<li>1日1回、診断開始URLからリンクをたどり、30ページ分のWebページを診断します。</li>
												<li>SSL証明書を解約した場合、診断結果が削除されます。</li>
											</ul>
										</dd>

										<dt><i class="ico ico_square-fill"></i>診断結果について</dt>
										<dd>
											<ul class="ul">
												<li>マルウェア、フィッシングサイトを検知した場合、「検知時の通知先メールアドレス」にメールでご案内します。</li>
												<li>検知時の通知先メールアドレスを設定しない場合、診断結果は通知されません。</li>
												<li>診断結果の詳細は「<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">セキュリティ診断管理画面</a><i class="ico ico_new-window base-color"></i>」からご確認ください。<br>（「SSL証明書のコモンネーム」と「パスワード」でログインできます。）</li>
											</ul>
										</dd>
									</dl>
								</div>
							</section>
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