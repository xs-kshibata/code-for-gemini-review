<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>無料独自SSL設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜無料・無制限に利用可能な独自SSL「無料独自SSL」の設定手順に関するご案内です。">

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
            
                <h3 class="sub-ttl">無料独自SSL設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-d">無料独自SSLについて</a></li>
                                    <li><a href="#link-previous-a">無料独自SSLの設定方法</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「SSL設定」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.「変更」をクリック</a></li>
                                            <li><a href="#link-previous-a03">3.「ONにする」をクリック</a></li>
                                            <li><a href="#link-previous-a04">4.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">他社サーバーでWeb認証する場合</a></li>
                                            <li><a href="#link-previous-b02">他社ネームサーバーでDNS認証する場合</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-c">証明書の自動更新について</a>
                                        <ul>
                                            <li><a href="#link-previous-c01">自動更新が繰り返し失敗してしまう原因と対処方法</a></li>
                                            <li><a href="#link-previous-c02">更新手順</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl.php">SSL仕様に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">無料独自SSLについて</h4>
                                <div class="section_body">
                                    <p>無料独自SSLは、当サーバーで運営中のドメインに対して、無料・無制限で設置可能な独自SSLです。<br>短時間で証明書の発行が可能で、簡単・手軽にセキュリティの強化ができます。</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DNSレコードをカスタマイズされている場合</dt>
                                        <dd class="mb0">無料独自SSLを設定する場合は、対象ドメインの「wwwあり/なし」両方のAレコードが当サービスのご契約サーバーを参照している必要があります。</dd>
                                    </dl>
                                    <div class="msg msg_info">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>より信頼性の高い「オプション独自SSL」のご案内</h4>
                                        <div class="msg_body">
                                            <p>サイトシールに対応した著名ブランドの証明書が利用可能な「オプション独自SSL」については、マニュアル「<a href="../manual/man_order_ssl.php">オプション独自SSLのお申し込み</a>」をご参照ください。</p>
                                        </div>
                                    </div>
                                    <div class="manual-youtube-box">
                                        <p>動画でも設定方法について説明しておりますので、こちらでもご確認いただけます。<br>
                                            ※動画マニュアルは2022年12月時点の設定画面でご案内しています。</p>
                                        <div class="manual-youtube">
                                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/03gBUz2xkcY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="default_ssl" class="section">
                                <h4 class="section_ttl" id="link-previous-a">無料独自SSLの設定方法</h4>
                                <div class="section_body">

                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.「SSL設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="SSL設定をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.「変更」をクリック</h5>
                                            <div class="box_body">
                                                <p>設定するドメインまたはサブドメインを選択し、「変更」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="変更をクリック"></p>
                                                <p class="note">※独自SSLは追加後、サーバーに設定が反映されるまで最大1時間程度かかります。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.「ONにする」をクリック</h5>
                                            <div class="box_body">
                                                <p>内容を確認し、「ONにする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_5.png" alt="「ONにする」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.設定完了</h5>
                                            <div class="box_body">
                                                <p>一覧画面に設定したドメインが表示されていれば設定完了です。<br>最大1時間程度で反映いたします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssl_7.png" alt="追加完了"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>独自SSLの設定が完了した時点では、「http://〜」から「https://〜」のURLへ自動的に転送されることはありません。<br>
                                                            Webサイトにおけるすべての表示を常時SSL化する場合は、マニュアル「<a href="man_server_fullssl.php">Webサイトの常時SSL化</a>」をご参照ください。
                                                        </p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する</h4>
                                <div class="section_body">

                                    <p>他社サーバーですでに運用中のサイトに対しても、エックスサーバー側で無料独自SSLを事前に設定することが可能です。<br>
                                    HTTPS化されたサイトをエックスサーバーに移転する際などにご利用ください。</p>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ネームサーバーの変更に関するご注意</h5>
                                        <div class="msg_body">
                                            <p>無料独自SSLの設定およびサーバーデータの移行作業が完了するまでは、移行するドメイン名のネームサーバーを変更しないようにご注意ください。<br>
                                            SSL設定やサーバーデータの移行作業が完了する前にネームサーバーを変更すると、一時的にサイトが見られなくなる可能性があります。</p>
                                        </div>
                                    </aside>

                                    <p>「無料独自SSL」を事前に設定するには、「他社サーバーでのWeb認証」を行う方法と、「他社ネームサーバーでのDNS設定」を行う方法の2通りがあります。</p>
                                    <p class="mb50">サーバーパネル「<a href="man_domain_setting.php">ドメイン設定</a>」より移行するドメイン名を追加したうえで、以下のいずれかの作業で無料独自SSLを設定してください。</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">他社サーバーでWeb認証を行う場合</h5>
                                         <div class="block_body">
                                             <div class="serial-box mb30">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.「SSL設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="「SSL設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.「変更」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>SSL設定を追加するドメインまたはサブドメインを選択し、「変更」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="「変更」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.「他社サーバーでのWeb認証」を選択</h6>
                                                    <div class="box_body">
                                                        <p>「他社サーバーでのWeb認証」を選択して、表示されたトークンファイル項目の「ダウンロード」ボタンをクリックしてください。トークンファイルのダウンロードが始まりますので、PC上の任意の場所に保存してください。</p>
                                                        <p class="mb30"><img class="img" src="../img/manual/previous/man_server_ssl_8.png" alt="「他社サーバーでのWeb認証」を選択"></p>
                                                        <p>トークンファイルが２つ表示された場合は、両方のファイルに対してダウンロードおよび後述の「4.移行元サーバーにトークンファイルを設置」を実施してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_9.png" alt="「他社サーバーでWeb認証を行う」でトークンファイルが２つ表示された場合"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.移行元サーバーにトークンファイルを設置</h6>
                                                    <div class="box_body">
                                                        <p>ダウンロードしたトークンファイルを、「設置URL」に記述されているURLで参照できるように、移行元サーバーに設置してください。</p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.「ONにする」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>「ONにする」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_10.png" alt="「ONにする」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">6.「ONにする」をクリックする</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            内容を確認し、「ONにする」をクリックしてください。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_12.png" alt="「ONにする」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">7.SSL設定完了</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            完了画面にSSL設定を追加したドメインが表示されていれば設定完了です。<br />
                                                            最大1時間程度で反映されます。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_13.png" alt="SSL設定完了"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">「トークン設置URLにアクセスできませんでした。」というエラーが出る場合</h6>
                                                    <div class="box_body">
                                                        <p>トークンファイルが正しく設置できていない可能性があります。</p>
                                                        <p>
                                                            また移転元のWebサイトで常時SSL化（全てのアクセスを「https://~」で表示する設定）を設定されている場合、設置URLにアクセスができず、Web認証ができません。<br>
                                                            その場合は一時的に常時SSL化の設定を解除してからWeb認証をお試しください。
                                                        </p>
                                                        <p>正しく設定できているにも関わらずエラーとなる場合は、DNS認証をお試しください。</p>
                                                        <p>
                                                            <img class="img" src="../img/manual/previous/man_server_ssl_11.png" alt="トークン設置URLにアクセスできませんでした">
                                                        </p>
                                                    </div>
                                                </section>
                                            </div>
                                         </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b02">他社ネームサーバーでDNS認証を行う場合</h5>
                                         <div class="block_body">
                                             <div class="serial-box mb30">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.「SSL設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="「SSL設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.「独自SSL設定追加」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>設定するドメインまたはサブドメインを選択し、「確認画面へ進む」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_2.png" alt="「独自SSL設定追加」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.「他社ネームサーバーでのDNS認証」を選択</h6>
                                                    <div class="box_body">
                                                        <p>「他社ネームサーバーでのDNS認証」を選択してください。他社ネームサーバーに登録するDNSレコードが表示されます。</p>
                                                        <p class="mb30"><img class="img" src="../img/manual/previous/man_server_ssl_14.png" alt="「他社ネームサーバーでのDNS認証」を選択"></p>
                                                        <p>DNSレコードが２つ表示された場合は、両方のレコードに対して後述の「4.移行元ネームサーバーにDNSレコードを追加」を実施してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_15.png" alt="「他社ネームサーバーでのDNS認証」でDNSファイルが２つ表示された場合"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.移行元ネームサーバーにDNSレコードを追加</h6>
                                                    <div class="box_body">
                                                        <p>表示されたDNSレコードを、移行元ネームサーバーに追加してください。</p>
                                                        <p class="note">※移行元ネームサーバーにおけるDNSレコードの追加方法がご不明の場合は、当サービスのサポートではなく、移行元へお問い合わせくださいますようお願いいたします。
                                                        </p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.「ONにする」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>「ONにする」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_16.png" alt="「ONにする」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">6.「追加する」をクリックする</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            内容を確認し、「追加する」をクリックしてください。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_18.png" alt="「追加する」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">7.SSL設定完了</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            完了画面にSSL設定を追加したドメインが表示されていれば設定完了です。<br />
                                                            最大1時間程度で反映されます。
                                                        </p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_13.png" alt="SSL設定完了"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">「トークンのDNSレコードが見つかりませんでした。」というエラーが出る場合</h6>
                                                    <div class="box_body">
                                                        <p>DNSレコードが正しく追加できているかを確認してください。<br>
                                                            正しく追加できている場合は、DNSレコードの反映に時間がかかっている恐れがあります。<br>
                                                            しばらく時間を空けたうえで再度DNS認証をお試しください。
                                                        </p>
                                                        <p>反映に要する時間については、他社ネームサーバーにお問い合わせください。</p>
                                                        <p>正しく追加できており、時間を空けたうえでもエラーとなる場合は、Web認証をお試しください。</p>
                                                        <p>
                                                            <img class="img" src="../img/manual/previous/man_server_ssl_17.png" alt="トークンのDNSレコードが見つかりませんでした">
                                                        </p>
                                                    </div>
                                                </section>
                                            </div>
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">証明書の自動更新について</h4>
                                <div class="section_body">
                                    <p>無料独自SSLで使用するSSLサーバー証明書の有効期限は、発行日から90日間です。<br>
                                    当サポートにて、有効期限から30日前・25日前・20日前にそれぞれ自動更新を行い、有効期限を延長いたします。</p>
                                    <p class="mb50">当サポートによる自動更新が失敗した場合、メールで更新未完了のご連絡をいたします。<br>
                                    25日前・20日前にもそれぞれ再度更新が行われますが、下記に該当する場合は自動更新ができませんので、<br>お客様にて手動で更新の手続きをしてください。</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c01">自動更新が繰り返し失敗してしまう原因と対処方法</h5>
                                         <div class="block_body">
                                            <dl class="dl">
                                                <dt>（1）設定ドメインのネームサーバーもしくはDNSレコードがエックスサーバーを参照していない</dt>
                                                <dd>
                                                    <p>設定ドメインが当サービスのご契約サーバーを参照するように修正してください。</p>
                                                    <ul class="ul">
                                                    <li>マニュアル「<a href="man_domain_namesever_setting.php">ネームサーバーの設定</a>」</li>
                                                    </ul>
                                                </dd>
                                                <dt>（2）設定ドメインに対して、リダイレクト設定をされている</dt>
                                                <dd>
                                                    <p>更新完了までの間、一時的に無効にしてください。</p>
                                                    <ul class="ul">
                                                        <li>マニュアル「<a href="man_server_htaccess.php">.htaccess</a>」</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c02">更新手順</h5>
                                         <div class="block_body">
                                           <p>上記（1）（2）いずれかの対応確認後、サーバーパネルより手動で更新をすることができます。</p>
                                             <div class="serial-box mb40">
                                                <section class="box">
                                                    <a id="i1" name="i1"></a>
                                                    <h6 class="box_ttl">1.「SSL設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_1.png" alt="SSL設定をクリック"></p>
                                                    </div>
                                                </section>

                                                <section id="i3" class="box">
                                                    <h6 class="box_ttl">2.「更新」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>設定しているドメインを選択し、「更新」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssl_19.png" alt="「更新」をクリック"></p>
                                                        <p class="note red">※「更新」ボタンが表示されていない場合は、既に自動更新が完了しているためお客様での更新作業は不要です。</p>
                                                    </div>
                                                </section>
                                            </div><!-- /.serial-box -->
                                         </div><!-- /.block_body -->
                                    </section><!-- /.block -->
                                </div>
                            </section>
                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-d">無料独自SSLについて</a></li>
                                    <li><a href="#link-a">無料独自SSLの設定方法</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「SSL設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.変更ボタンを「ON」にする</a></li>
                                            <li><a href="#link-a03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する</a>
                                        <ul>
                                            <li><a href="#link-b01">他社サーバーでWeb認証を行う場合</a></li>
                                            <li><a href="#link-b02">他社ネームサーバーでDNS認証を行う場合</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-c">証明書の自動更新について</a>
                                        <ul>
                                            <li><a href="#link-c01">自動更新が繰り返し失敗してしまう原因と対処方法</a></li>
                                            <li><a href="#link-c02">更新手順</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl.php">SSL仕様に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-d" class="section">
                                <h4 class="section_ttl">無料独自SSLについて</h4>
                                <div class="section_body">
                                    <p>無料独自SSLは、当サーバーで運営中のドメインに対して、無料・無制限で設置可能な独自SSLです。<br>短時間で証明書の発行が可能で、簡単・手軽にセキュリティの強化ができます。</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>DNSレコードをカスタマイズされている場合</dt>
                                        <dd class="mb0">無料独自SSLを設定する場合は、対象ドメインの「wwwあり/なし」両方のAレコードが当サービスのご契約サーバーを参照している必要があります。</dd>
                                    </dl>
                                    <div class="msg msg_info">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>より信頼性の高い「オプション独自SSL」のご案内</h6>
                                        <div class="msg_body">
                                            <p>サイトシールに対応した著名ブランドの証明書が利用可能な「オプション独自SSL」については、マニュアル「<a href="man_order_ssl.php">オプション独自SSLのお申し込み</a>」をご参照ください。</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">無料独自SSLの設定方法</h4>
                                <div class="section_body">
                                    <div class="serial-box mb40">
                                        <div class="box_wrap">
                                            <section id="link-a01" class="box">
                                                <h5 class="box_ttl">1. 「SSL設定」をクリック</h5>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL設定をクリック"></p>
                                                </div>
                                            </section>

                                            <section id="link-a02" class="box">
                                                <h5 class="box_ttl">2. 変更ボタンを「ON」にする</h5>
                                                <div class="box_body">
                                                    <p>設定するドメインまたはサブドメインの右側にある変更ボタンをクリックして「ON」にしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_2.png?date=2410" alt="変更をクリック"></p>
                                                    <p class="note">※独自SSLは追加後、サーバーに設定が反映されるまで最大1時間程度かかります。</p>
                                                </div>
                                            </section>

                                            <section id="link-a03" class="box">
                                                <h5 class="box_ttl">3. 設定完了</h5>
                                                <div class="box_body">
                                                    <p>一覧画面に設定したドメインが表示されていれば設定完了です。<br>最大1時間程度で反映いたします。</p>
                                                    <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="追加完了"></p>

                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>独自SSLの設定が完了した時点では、「http://~」から「https://~」のURLへ自動的に転送されることはありません。<br>
                                                                Webサイトにおけるすべての表示を常時SSL化する場合は、マニュアル「<a href="man_server_fullssl.php">Webサイトの常時SSL化</a>」をご参照ください。</p>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>

                            <section id="link-b" class="block">
                                <h4 class="section_ttl">他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する</h4>
                                <div class="section_body">

                                    <p>他社サーバーですでに運用中のサイトに対しても、エックスサーバー側で無料独自SSLを事前に設定することが可能です。<br>
                                        HTTPS化されたサイトをエックスサーバーに移転する際などにご利用ください。</p>

                                    <aside class="msg msg_info">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SSL設定をする前に、ドメイン設定を追加してください</h6>
                                        <div class="msg_body">
                                            <p>無料独自SSLの設定をする前に、サーバーパネル「<a href="man_domain_setting.php">ドメイン設定</a>」より、移行するドメイン名を追加してください。</p>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ネームサーバーの変更に関するご注意</h6>
                                        <div class="msg_body">
                                            <p>無料独自SSLの設定およびサーバーデータの移行作業が完了するまでは、移行するドメイン名のネームサーバーを変更しないようにご注意ください。<br>
                                                SSL設定やサーバーデータの移行作業が完了する前にネームサーバーを変更すると、一時的にサイトが見られなくなる可能性があります。</p>
                                        </div>
                                    </aside>

                                    <p class="mb40">「無料独自SSL」を事前に設定するには、「他社サーバーでのWeb認証」を行う方法と、「他社ネームサーバーでのDNS設定」を行う方法の2通りがあります。</p>

                                    <section id="link-b01" class="block">
                                        <h5 class="block_ttl">他社サーバーでWeb認証を行う場合</h5>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. 「SSL設定」をクリック</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL設定をクリック"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2.「OFF」をクリック</h5>
                                                        <div class="box_body">
                                                            <p>SSL設定を追加するドメインまたはサブドメインの右側にある「OFF」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_2.png?date=2410" alt="「OFF」をクリック"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">3.「他社サーバーでのWeb認証」を選択</h5>
                                                        <div class="box_body">
                                                            <p>「他社サーバーでのWeb認証」を選択して、表示されたトークンファイル項目の「ダウンロード」ボタンをクリックしてください。トークンファイルのダウンロードが始まりますので、PC上の任意の場所に保存してください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_8.png?date=2410" alt="「他社サーバーでのWeb認証」を選択"></p>

                                                            <aside class="msg msg-notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>トークンファイルが２つ表示された場合</h6>
                                                                <div class="msg_body">
                                                                    <p>トークンファイルが２つ表示された場合は、両方のファイルに対してダウンロードおよび後述の「4.移行元サーバーにトークンファイルを設置」を実施してください。</p>

                                                                    <p><img class="img" src="../img/manual/man_server_ssl_9.png?date=2410" alt="「他社サーバーでWeb認証を行う」でトークンファイルが２つ表示された場合"></p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">4.移行元サーバーにトークンファイルを設置</h5>
                                                        <div class="box_body">
                                                            <p class="mb0">ダウンロードしたトークンファイルを、「設置URL」に記述されているURLで参照できるように、移行元サーバーに設置してください。</p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">5.「ONにする」をクリック</h5>
                                                        <div class="box_body">
                                                            <p>「ONにする」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_10.png?date=2410" alt="「ONにする」をクリック"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「トークン設置URLにアクセスできませんでした。」というエラーが出る場合</h6>
                                                                <div class="msg_body">
                                                                    <p>トークンファイルが正しく設置できているかを確認してください。<br>
                                                                        正しく設置できているにも関わらずエラーとなる場合は、DNS認証をお試しください。</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">6.SSL設定完了</h5>
                                                        <div class="box_body">
                                                            <p>SSL設定を追加したドメインのSSL設定状況が「ON」になっていれば設定完了です。<br>
                                                                最大1時間程度で反映されます。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="SSL設定完了"></p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-b02" class="block">
                                        <h5 class="block_ttl">他社ネームサーバーでDNS認証を行う場合</h5>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. 「SSL設定」をクリック</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL設定をクリック"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2.「変更」をクリック</h5>
                                                        <div class="box_body">
                                                            <p>「他社ネームサーバーでのDNS認証」を選択してください。他社ネームサーバーに登録するDNSレコードが表示されます。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_14.png?date=2410" alt="「他社サーバーでのWeb認証」を選択"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>DNSレコードが２つ表示された場合</h6>
                                                                <div class="msg_body">
                                                                    <p>DNSレコードが２つ表示された場合は、両方のレコードに対して後述の「4.移行元ネームサーバーにDNSレコードを追加」を実施してください。</p>

                                                                    <p><img class="img" src="../img/manual/man_server_ssl_15.png?date=2410" alt="「他社ネームサーバーでのDNS認証」でDNSファイルが２つ表示された場合"></p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">4.移行元ネームサーバーにDNSレコードを追加</h5>
                                                        <div class="box_body">
                                                            <p>表示されたDNSレコードを、移行元ネームサーバーに追加してください。</p>
                                                            <p class="note">※移行元ネームサーバーにおけるDNSレコードの追加方法がご不明の場合は、当サービスのサポートではなく、移行元へお問い合わせくださいますようお願いいたします。
                                                            </p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">5.「ONにする」をクリック</h5>
                                                        <div class="box_body">
                                                            <p>「ONにする」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_16.png?date=2410" alt="「ONにする」をクリック"></p>

                                                            <aside class="msg msg_info">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「トークンのDNSレコードが見つかりませんでした。」というエラーが出る場合</h6>
                                                                <div class="msg_body">
                                                                    <p>DNSレコードが正しく追加できているか確認してください。<br>
                                                                        正しく追加できている場合は、DNSレコードの反映に時間がかかっている恐れがあります。<br>
                                                                        しばらく時間を空けたうえで再度DNS認証をお試しください。
                                                                    </p>
                                                                    <p>反映に要する時間については、他社ネームサーバーにお問い合わせください。</p>
                                                                    <p>正しく追加できており、時間を空けたうえでもエラーとなる場合は、Web認証をお試しください。</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">6.SSL設定完了</h5>
                                                        <div class="box_body">
                                                            <p>SSL設定を追加したドメインのSSL設定状況が「ON」になっていれば設定完了です。<br>
                                                                最大1時間程度で反映されます。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_7.png?date=2410" alt="SSL設定完了"></p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                </div>
                            </section>

                            <section id="link-c" class="section">
                                <h4 class="section_ttl">証明書の自動更新について</h4>
                                <div class="section_body">
                                    <p>
                                        無料独自SSLで使用するSSLサーバー証明書の有効期限は、発行日から90日間です。<br>
                                        当サポートにて、有効期限から30日前・25日前・20日前にそれぞれ自動更新を行い、有効期限を延長いたします。
                                    </p>
                                    <p class="mb50">
                                        当サポートによる自動更新が失敗した場合、メールで更新未完了のご連絡をいたします。<br>
                                        25日前・20日前にもそれぞれ再度更新が行われますが、下記に該当する場合は自動更新ができませんので、お客様にて手動で更新の手続きをしてください。
                                    </p>

                                    <section id="link-c01" class="block">
                                        <h5 class="block_ttl">自動更新が繰り返し失敗してしまう原因と対処方法</h5>
                                        <div class="section_body">
                                            <dl class="dl">
                                                <dt>（1）設定ドメインのネームサーバーもしくはDNSレコードがエックスサーバーを参照していない</dt>
                                                <dd>
                                                    <p>設定ドメインが当サービスのご契約サーバーを参照するように修正してください。</p>
                                                    <ul class="ul">
                                                        <li>マニュアル「<a href="man_domain_namesever_setting.php">ネームサーバーの設定</a>」</li>
                                                    </ul>
                                                </dd>
                                                <dt>（2）設定ドメインに対して、リダイレクト設定をされている</dt>
                                                <dd>
                                                    <p>更新完了までの間、一時的に無効にしてください。</p>
                                                    <ul class="ul">
                                                        <li>マニュアル「<a href="man_server_htaccess.php">.htaccess</a>」</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section id="link-c02" class="block">
                                        <h5 class="block_ttl">更新手順</h5>
                                        <div class="block_body">
                                            <p>上記（1）（2）いずれかの対応確認後、サーバーパネルより手動で更新をすることができます。</p>

                                            <div class="serial-box">
                                                <div class="box_wrap">
                                                    <section class="box">
                                                        <h5 class="box_ttl">1. 「SSL設定」をクリック</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「SSL設定」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_1.png?date=2410" alt="SSL設定をクリック"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl">2. 「更新」をクリック</h5>
                                                        <div class="box_body">
                                                            <p>設定しているドメインを選択し、「更新」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_server_ssl_19.png?date=2410" alt="「更新」をクリック"></p>
                                                            <p class="note red">※「更新」ボタンが表示されていない場合は、既に自動更新が完了しているためお客様での更新作業は不要です。</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>
                                </div>
                            </section>

                        </div>
                        <!--/ 新パネル-->
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