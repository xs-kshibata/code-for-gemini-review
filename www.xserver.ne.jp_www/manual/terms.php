<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>用語集 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜レンタルサーバーのご利用に際して登場する専門用語やエックスサーバー固有の管理ツール名などに関する用語集です。">

</head>

<body id="pid-faq">

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
            
                <h3 class="sub-ttl">用語集</h3>
                
                <div class="faq">
                    <dl id="01" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>XServerアカウント</dt>
                        <dd class="faq_unit_body">
                            <p>XServerアカウントは、エックスサーバーを含むXServer関連サービスの管理に共通して使用できるアカウントです。<br>アクセスすることで、お客様のご登録情報の確認や変更、自動更新設定などを行うことができます。</p>
                       		<p>下記URLからログインを行い、上部メニュー右端のXServerアカウントメニューからアクセスすることができます。</p>
                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>
                            <p>詳しくは、<a href="man_tool_info.php">マニュアル</a>をご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->

                    <dl id="02" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>エックスサーバー契約管理</dt>
                        <dd class="faq_unit_body">
                            <p>「エックスサーバー契約管理」ページは、サーバやドメイン、SSL証明書の各種設定など、サーバ運営に必要な各種作業を行う管理画面です。<br>ログインすることで、ご契約中のサーバー・ドメイン・SSLのプランや利用期限など、契約情報の確認や料金のお支払いなどを行うことができます。</p>
                       		<p>下記URLからログインすることでアクセスが可能です。メールアドレス（XServerアカウントIDでも可）とパスワードでログインをお試しください。</p>
                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/</a></p>
                            <p>詳しくは、<a href="man_tool_xserver.php">マニュアル</a>をご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="03" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>サーバーパネル</dt>
                        <dd class="faq_unit_body">
                            <p>サーバーの各種設定（メールアカウントの発行・ドメインの設定など）を行うための管理パネルです。</p>
                            <p>
                                下記URLよりサーバーパネルへのログインが可能です。<br>
                                XServerアカウントID（ご登録メールアドレス）/XServerアカウントパスワードでログインをお試しください。</p>
                            <p class="note">※メインFTPアカウントのユーザー名とパスワード（サーバーIDとサーバーパスワード）でもログインすることが可能です。</p>
                            <p><i class="ico ico_square-fill"></i>サーバーパネル ログインURL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/server/</a></p>
                            <p>詳細は<a href="man_tool_server.php">マニュアル</a>もご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="04" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>自動バックアップ</dt>
                        <dd class="faq_unit_body">
                            <p>当サービスで行っている、サーバ設備の故障やその他トラブル等に備えて、サーバー上のデータをバックアップするサービスのことです。<br>
                            サーバー上のデータを毎日1回バックアップ専用のハードディスクへとコピーし、サーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持することで、データ消失の可能性を大幅に減らしています。<br>
                            また、お客様へのバックアップデータの提供も行っています。</p>
                            <aside class="msg msg_notice">
                                <h6 class="msg_ttl">
                                    <i class="ico ico_circle-arrow-right"></i>
                                    sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp をご利用のお客様について
                                </h6>
                                <div class="msg_body">
                                    <p>
                                        sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。<br>
                                        順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。
                                    </p>
                                </div>
                            </aside>
                            <p>詳細は<a href="../functions/service_backup.php">こちら</a>もご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="05" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>マルチドメイン</dt>
                        <dd class="faq_unit_body">
                            <p>マルチドメインとは、一つのサーバーご契約で複数の独自ドメインが利用可能なサービスのことです。<br>
                            ドメインごとに異なるホームページを作成したり、異なるメールアカウントを作成することも可能です。</p>
                            <p>例えばお客様が example.com と example.jp をお持ちの場合、http://www.example.com と http://www.example.jp 、それぞれで異なったコンテンツを表示させることが可能です。</p>
                            <p>また、 info@example.com と info@example.jp を別々のメールアカウントとして利用することも可能です。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="06" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>サブドメイン</dt>
                        <dd class="faq_unit_body">
                            <p>サブドメインとは、利用しているドメインの前に、お好きな文字列をつけたドメインのことです。<br>
                            用途別にサブドメインを利用するなど、ドメインを幅広く活用することができます。</p>
                            <p>例) example.comのサブドメイン<br>
                            ブログ用：blog.example.com<br>
                            ショップサイト用：shop.example.com</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="07" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>ネームサーバー</dt>
                        <dd class="faq_unit_body">
                            <p>ドメインとIPアドレスとを結びつける役割を担うサーバーのことで、リクエストのあったドメイン(例:<?php print $SITE_URL; ?>)に対応するIPアドレス(例：120.136.8.250)を返します。<br>
                            DNSサーバーとも呼ばれ、ドメインを利用する際は、必ずこのサーバーを指定する必要があります。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="08" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>Whois情報</dt>
                        <dd class="faq_unit_body">
                            <p>ネットワークの安定した運用を目的としてインターネット上で公開されている、「ドメイン登録者」や「担当者名」「IPアドレス」といったドメインに関する情報のことです。<br>
                            上記に加え、「登録年月日」「有効期限」などの情報も参照することができます。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="09" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>Whois情報の代理公開</dt>
                        <dd class="faq_unit_body">
                            <p>独自ドメインをご利用の際に、Whois情報として登録されている個人情報を第三者に公開しないように、ドメイン管理会社の情報に置き換えて公開するサービスのことです。</p>
                            <p>当サービスにおいても、CO.JPやNE.JPなどの属性JPを除き、代理公開に対応しています。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="10" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>FTP</dt>
                        <dd class="faq_unit_body">
                            <p>FTPとは、File Transfer Protocolの略で、ネットワーク上のコンピュータ間でファイル転送を行うための通信方法のことです。<br>
                            FTPを用いて、ファイルをサーバー上にアップロードすることで、ホームページを公開したりすることもできます。<br>
                            また、個別にFTPでファイル転送のできる場所を指定する設定を「FTPアカウント」と呼びます。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="11" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>ファイルマネージャ</dt>
                        <dd class="faq_unit_body">
                            <p>ブラウザを使用してファイルのアップロード・削除等を行うためのシステムです。</p>
                            <p>下記URLよりファイルマネージャへのログインが可能です。<br>
                            FTPユーザー名とFTPパスワードでログインをお試しください。</p>
                            <p><i class="ico ico_square-fill"></i>ファイルマネージャ ログインURL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/</a></p>
                            <p>また、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部「サーバー」の「ファイル管理」からもアクセスが可能です。</p>
                            <p>詳細は<a href="man_tool_file.php">マニュアル</a>もご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="12" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>WEBメール</dt>
                        <dd class="faq_unit_body">
                            <p>WEBメールはブラウザを使用してメール送受信などを行うシステムです。</p>
                            <p>下記URLよりWEBメールへのログインが可能です。<br>
                            メールアドレスとメールアドレス作成時にお決めいただいたパスワードでログインをお試しください。</p>
                            <p><i class="ico ico_square-fill"></i>WEBメール ログインURL<br>
                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                            <p>詳細は<a href="man_tool_mail.php">マニュアル</a>もご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="13" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>IPアドレス</dt>
                        <dd class="faq_unit_body">
                            <p>IPとは、Internet Protocolの略で、IPアドレスとはネットワーク上のコンピュータを識別するために割り振られた番号のことを指し、ネットワーク上での住所のような役割を果たすものです。</p>
                            <p>例)192.168.0.1</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="14" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>SSL</dt>
                        <dd class="faq_unit_body">
                            <p>インターネット上でのデータの通信を暗号化するセキュリティ機能のことであり、Secure Sockets Layerの頭文字を取って略されたものです。<br>
                            また、そういった情報の暗号化通信だけではなく、該当のWebサイトが信頼できるものとして証明する機能も備えています。<br>
                            個人情報を取り扱うサイトにおいては特に、ユーザーに安心してサイトを利用してもらうために、SSL証明書による安全性のアピールが必須と言われています。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="15" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>.htaccess(ドットエイチティーアクセス)</dt>
                        <dd class="faq_unit_body">
                            <p>.htaccess（ドットエイチティーアクセス）とは、ディレクトリ単位で、アクセス制限やユーザー認証などを設定できる特殊なファイルです。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="16" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>データベース</dt>
                        <dd class="faq_unit_body">
                            <p>データベースとは、多数のデータを蓄積したデータの集合のこと、もしくはその管理システムのことです。</p>
                            <p>データベースとしては、データの集まりを表形式で表現する"リレーショナルデータベース"というものが主流で、エックスサーバーにおいても「MySQL」が利用可能です。<br>
                            ブログやCMSを使う際など利用します。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="17" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>バックボーン</dt>
                        <dd class="faq_unit_body">
                            <p>サーバー機器が接続されているネットワークの基幹部分にあたる通信回線のことです。<br>
                            容量が大きいほど多くのデータ送受信が可能です。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="18" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>CGI</dt>
                        <dd class="faq_unit_body">
                            <p>CGIとは、Common Gateway Interfaceの略で、Webページ上で動的な変化を組み込む仕組みのことです。<br>
                            CGIはどのような開発言語でも使用することができますが、Perl等がよく使われています。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="19" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>転送量</dt>
                        <dd class="faq_unit_body">
                            <p>転送量とは、サイトページにアクセスがあった際、サーバーから閲覧者のブラウザへ送信されたデータ(htmlや画像など)の総容量のことです。<br>
                            アクセスが多いページほど、転送量が多いことになります。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                
                    <dl id="20" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-question"></i>パーミッション</dt>
                        <dd class="faq_unit_body">
                            <p>フォルダやファイルに対するユーザーのアクセス権限のことです。</p>
                            <p>設定する際は「755」など、3桁の数字を用いて設定をします。<br>
                            左から、ファイル/ディレクトリの「Owner(所有者)」、同じマシンを利用できる「Group(グループ)」、その他全ての「Other(その他)」のそれぞれ対して、「読み込み」「書き込み」「実行」の権限を与える設定ができます。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    
                    
                </div>
                <!-- /.faq -->
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