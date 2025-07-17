<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DNSレコードの編集 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで運用中のドメイン名は、サーバーパネルの「DNSレコード設定」よりDNSレコードを編集することが可能です。当ページでは変更可能なレコードの種類等についてご案内しています。">

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
            
                <h3 class="sub-ttl">DNSレコードの編集</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DNSレコードについて</a>
                                        <ul>
                                            <li><a href="#link-previous-a01">DNSレコードの種類</a></li>
                                            <li><a href="#link-previous-a02">各レコードのデフォルト設定値</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-b">DNSレコードの編集</a></li>
                                    <li><a href="#link-previous-c">DNSレコードへのSPF設定</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.DNSレコードの追加</a></li>
                                            <li><a href="#link-previous-c02">2.DNSレコードの設定</a></li>
                                            <li><a href="#link-previous-c03">3.確認・確定</a></li>
                                            <li><a href="#link-previous-c04">4.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DNSレコードについて</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a01">DNSレコードの種類</h5>
                                        <div class="block_body">
                                            <p>当サービスにて設定可能なDNSレコードには、以下のようなものがあります。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Aレコード</dt>
                                                <dd>内容に「IP アドレス」を入力してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>AAAAレコード</dt>
                                                <dd>内容に「IPv6 アドレス」を入力してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>CNAMEレコード</dt>
                                                <dd>内容に「ホスト名」を指定してください。IP アドレスは登録できません。<br>
                                                    「ホスト名」と同一名のコンテンツを設定することはできません。<br>
                                                    同一「ホスト名」にCNAMEレコードとAレコード、AAAAレコード、MXレコードは併せて登録できません。</dd>
                                                <dt><i class="ico ico_square-fill"></i>MXレコード(優先度もあわせて設定)</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>内容に「ホスト名」を指定してください。IPアドレスは登録できません。</li>
                                                        <li>優先度は値が小さいほど優先順位が高くなります。</li>
                                                        <li>登録されているMX レコードと【同じホスト名・同じ優先度】のレコードは追加できません。<br>
                                                        どちらかが異なれば追加できます。</li>
                                                    </ul>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>TXTレコード</dt>
                                                <dd>TXT（Text）レコードは、ホストの情報を記述するためのテキストを指定します。<br>
                                                    「"(ダブルクォート)」が前後に存在する場合は、登録時に自動的に削除いたします。</dd>
                                                <dt><i class="ico ico_square-fill"></i>NSレコード</dt>
                                                <dd>内容に「ネームサーバー」を指定してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>SRVレコード</dt>
                                                <dd>内容に「重さ ポート ターゲット」を入力してください。</dd>
                                            </dl>
                                            <ul class="list list_check">
                                                <li><em class="font-bold">A(Address)レコード</em>では、ホスト名をどのようにIPv4アドレスへ変換するかを指定します。</li>
                                                <li><em class="font-bold">AAAAレコード</em>では、ホスト名をどのようにIPv6アドレスへ変換するかを指定します。</li>
                                                <li><em class="font-bold">CNAME（Canonical NAME）レコード</em>は、ホストに別名（エイリアス）を付ける際に利用されます。<br>
                                                正規ホスト名に対する別名を指定してください。別のサーバーに転送する時などに利用します。</li>
                                                <li><em class="font-bold">MX（Mail eXchanger）レコード</em>はメールサーバーを指定します。<br>
                                                優先順位を付けることで、複数のメールサーバーを指定することができます。</li>
                                                <li><em class="font-bold">TXT（Text）レコード</em>は、ホストの情報を記述するために使われます。<br>
                                                電子メールの送信元認証技術であるSPFやDomainKeysなどに利用されます。</li>
                                                <li><em class="font-bold">NSレコード</em>では、ドメインのゾーン情報を管理するネームサーバーを指定します。</li>
                                                <li><em class="font-bold">SRVレコード</em>では、ドメインに対するサービスの場所を指定します。</li>
                                            </ul>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a02">各レコードのデフォルト設定値</h5>
                                        <div class="block_body">
                                            <p>ドメイン設定追加時のDNSレコード初期値は以下となります。</p>
                                            <table class="table break-word">
                                                <thead>
                                                    <tr>
                                                        <th class="w25per">ホスト名</th>
                                                        <th class="w10per">種別</th>
                                                        <th>内容</th>
                                                        <th class="w10per">TTL</th>
                                                        <th class="w15per">優先度</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>www.example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>MX</td>
                                                        <td>example.com</td>
                                                        <td>3600</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>*.example.com</th>
                                                        <td>A</td>
                                                        <td>***.***.***.***</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>TXT</td>
                                                        <td>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</td>
                                                        <td>3600</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>example.com</th>
                                                        <td>NS</td>
                                                        <td>ns1.xserver.jp<br>
                                                            ns2.xserver.jp<br>
                                                            ns3.xserver.jp<br>
                                                            ns4.xserver.jp<br>
                                                            ns5.xserver.jp<br>
                                                        </td>
                                                        <td>3600</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="note-list">
                                                <li>※ドメイン名はサンプルです。</li>
                                                <li>※<em class="font-bold">***.***.***.***</em>はお客様がご利用のサーバーのIPアドレスです。<br>
                                                    IPアドレスは、サーバーパネル「サーバー情報」で確認可能です。</li>
                                                <li>※<em class="font-bold">sv***.xserver.jp</em>はお客様がご利用のサーバーのホスト名です。<br>
                                                    ホスト名は、サーバーパネル「サーバー情報」で確認可能です。</li>
                                            </ul>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DNSレコードの編集</h4>
                                <div class="section_body">
                                    <p>まずは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「DNSレコード設定」へと進んでください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_1.png" alt="XServerアカウント・DNSレコード設定のスクリーンショット"></p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>本機能は上級者様向けの機能です。<br>
                                            本機能にてサブドメインのみ他社サービスを使用したり、メールサーバのみ他社サーバーを使用するなど、ドメイン割り当ての詳細機能が利用可能ですが、設定内容に誤りがある場合、【ドメインが正常にご利用いただけなくなり】Web表示やメール受信に影響が及ぶ可能性があります。</p>
                                            <p class="note">※レコード編集自体に関する詳細につきましては、お客様ご自身でご確認されますようお願いします。</p>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">DNSレコードへのSPF設定</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">
                                        <p>SPF(Sender Policy Framework)とは、電子メールの送信元ドメインが詐称されていないかを検査する仕組みです。<br>
                                        当サービスでは、以下の手順でSPFを設定することが可能です。</p>

                                        <aside class="msg msg_notice">
                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>SPF設定をされる前に</h6>
                                            <div class="msg_body">
                                                <p>
                                                    当社サーバーでドメイン名をご利用の場合はドメイン設定追加時にSPFレコードを自動的に追加いたしますので、お客様ご自身でSPFレコードを登録していただく必要はありません。
                                                </p>
                                                <p>
                                                    また、ひとつのドメイン名に対して複数のSPFレコードを登録している場合、正しく機能しない可能性がありますので、ご注意ください。
                                                </p>
                                            </div>
                                        </aside>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.DNSレコードの追加</h6>
                                            <div class="box_body">
                                                <p>「DNSレコード追加」を選択してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_2.png" alt="DNSレコード設定からDNSレコード追加へ進むスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.DNSレコードの設定</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_3.png" alt="DNSレコードの追加設定画面のスクリーンショット"></p>
                                                <p>上のような画面が表示されますので、以下のように設定してください。</p>

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w15per">ホスト</th>
                                                            <td>通常は空白で問題ありません。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>種別</th>
                                                            <td>TXT</td>
                                                        </tr>
                                                        <tr>
                                                            <th>内容</th>
                                                            <td>v=spf1 +a:<em class="red">sv***.xserver.jp</em> +a:<em class="red">example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                        </tr>
                                                        <tr>
                                                            <th>TTL</th>
                                                            <td>変更の必要はありません。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>優先度</th>
                                                            <td>変更の必要はありません。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p>サブドメインの場合は以下となります。</p>

                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">ホスト</th>
                                                        <td>サブドメイン名</td>
                                                    </tr>
                                                    <tr>
                                                        <th>種別</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>内容</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.xserver.jp</em> +a:<em class="red">abc.example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>優先度</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>「内容」について</dt>
                                                    <dd>「<em class="red">sv***.xserver.jp</em>」の部分は、お客様がご利用のサーバーのホスト名を記入してください。</dd>
                                                    <dd>「<em class="red">example.com</em>」「<em class="red">abc.example.com</em>」の部分は、お客様のドメイン名を記入してください。</dd>
                                                    <dt><i class="ico ico_square-fill"></i>ホスト名の確認方法</dt>
                                                    <dd>サーバーパネル内「サーバー情報」より、お客様がご利用のサーバーのホスト名の確認が可能です。</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.確認・確定</h6>
                                            <div class="box_body">
                                                <p>設定項目を入力後、「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_4.png" alt="DNSレコード追加の設定確認画面のスクリーンショット"></p>
                                                <p>設定内容をご確認の上、間違いがなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_5.png" alt="DNSレコード追加完了画面"></p>
                                                <p>DNSレコードが追加されました。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.完了</h6>
                                            <div class="box_body">
                                                <p>DNSレコード一覧に新たに追加されていることを確認してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_dns_setting_6.png" alt="DNSレコード一覧に追加されています"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>DNSレコード設定例</h6>
                                        <div class="msg_body">
                                            <p>以下もあわせて、ご参照ください。</p>
                                            <ul class="list list_chevron-right">
                                                <li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(旧G Suite)をお使いの場合</a></li>
                                                <li><a href="man_domain_dns_setting_mail_server.php">外部メールサーバーをお使いの場合</a></li>
                                                <li><a href="man_domain_dns_setting_blog.php">livedoorなどの外部ブログを設定する場合</a></li>
                                            </ul>
                                        </div>
                                    </aside>
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
                                    <li><a href="#link-a">DNSレコードについて</a>
                                        <ul>
                                            <li><a href="#link-a01">DNSレコードの種類</a></li>
                                            <li><a href="#link-a02">各レコードのデフォルト設定値</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">DNSレコードの編集</a></li>
                                    <li><a href="#link-c">DNSレコードへのSPF設定</a>
                                        <ol>
                                            <li><a href="#link-c01">1.DNSレコードを追加</a></li>
                                            <li><a href="#link-c02">2.DNSレコードの設定</a></li>
                                            <li><a href="#link-c03">3.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h3 id="link-a" class="section_ttl">DNSレコードについて</h3>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-a01">DNSレコードの種類</h5>
                                        <div class="block_body">
                                            <p>当サービスにて設定可能なDNSレコードには、以下のようなものがあります。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Aレコード</dt>
                                                <dd>内容に「IP アドレス」を入力してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>AAAAレコード</dt>
                                                <dd>内容に「IPv6 アドレス」を入力してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>CNAMEレコード</dt>
                                                <dd>内容に「ホスト名」を指定してください。IP アドレスは登録できません。</dd>
                                                <dt><i class="ico ico_square-fill"></i>MXレコード(優先度もあわせて設定)</dt>
                                                <dd>
                                                    <ul class="ul">
                                                        <li>内容に「ホスト名」を指定してください。IPアドレスは登録できません。</li>
                                                        <li>優先度は値が小さいほど優先順位が高くなります。</li>
                                                        <li>登録されているMX レコードと【同じホスト名・同じ優先度】のレコードは追加できません。<br>
                                                            どちらかが異なれば追加できます。</li>
                                                    </ul>
                                                </dd>
                                                <dt><i class="ico ico_square-fill"></i>TXTレコード</dt>
                                                <dd>TXT（Text）レコードは、ホストの情報を記述するためのテキストを指定します。</dd>
                                                <dt><i class="ico ico_square-fill"></i>NSレコード</dt>
                                                <dd>内容に「ネームサーバー」を指定してください。</dd>
                                                <dt><i class="ico ico_square-fill"></i>SRVレコード</dt>
                                                <dd>内容に「重さ ポート ターゲット」を入力してください。</dd>
                                            </dl>
                                            <ul class="list list_check">
                                                <li><em class="font-bold">A(Address)レコード</em>では、ホスト名をどのようにIPv4アドレスへ変換するかを指定します。</li>
                                                <li><em class="font-bold">AAAAレコード</em>では、ホスト名をどのようにIPv6アドレスへ変換するかを指定します。</li>
                                                <li><em class="font-bold">CNAME（Canonical NAME）レコード</em>は、ホストに別名（エイリアス）を付ける際に利用されます。<br>
                                                    正規ホスト名に対する別名を指定してください。別のサーバーに転送する時などに利用します。</li>
                                                <li><em class="font-bold">MX（Mail eXchanger）レコード</em>はメールサーバーを指定します。<br>
                                                    優先順位を付けることで、複数のメールサーバーを指定することができます。</li>
                                                <li><em class="font-bold">TXT（Text）レコード</em>は、ホストの情報を記述するために使われます。<br>
                                                    電子メールの送信元認証技術であるSPFやDomainKeysなどに利用されます。</li>
                                                <li><em class="font-bold">NSレコード</em>では、ドメインのゾーン情報を管理するネームサーバーを指定します。</li>
                                                <li><em class="font-bold">SRVレコード</em>では、ドメインに対するサービスの場所を指定します。</li>
                                            </ul>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-a02">各レコードのデフォルト設定値</h5>
                                        <div class="block_body">
                                            <p>ドメイン設定追加時のDNSレコード初期値は以下となります。</p>
                                            <table class="table break-all">
                                                <thead>
                                                <tr>
                                                    <th class="w25per">ホスト名</th>
                                                    <th class="w10per">種別</th>
                                                    <th>内容</th>
                                                    <th class="w10per">TTL</th>
                                                    <th class="w15per">優先度</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>www.example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>MX</td>
                                                    <td>example.com</td>
                                                    <td>3600</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th>*.example.com</th>
                                                    <td>A</td>
                                                    <td>***.***.***.***</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>TXT</td>
                                                    <td>v=spf1 +a:sv***.xserver.jp +a:example.com +mx include:spf.sender.xserver.jp ~all</td>
                                                    <td>3600</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>example.com</th>
                                                    <td>NS</td>
                                                    <td>ns1.xserver.jp<br>
                                                        ns2.xserver.jp<br>
                                                        ns3.xserver.jp<br>
                                                        ns4.xserver.jp<br>
                                                        ns5.xserver.jp
                                                    </td>
                                                    <td>3600</td>
                                                    <td>0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <ul class="note-list">
                                                <li>※ドメイン名はサンプルです。</li>
                                                <li>※<em class="font-bold">***.***.***.***</em>はお客様がご利用のサーバーのIPアドレスです。<br>
                                                    IPアドレスは、サーバーパネル「サーバー情報」で確認可能です。</li>
                                                <li>※<em class="font-bold">sv***.xserver.jp</em>はお客様がご利用のサーバーのホスト名です。<br>
                                                    ホスト名は、サーバーパネル「サーバー情報」で確認可能です。</li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                            </section><!-- /section -->

                            <div class="section">
                                <h3 id="link-b" class="section_ttl">DNSレコードの編集</h3>
                                <div class="section_body">
                                    <p>まずは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「DNSレコード設定」へと進んでください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_dns_setting_1.png?date=2410" alt="DNSレコード設定のスクリーンショット"></p>
                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <p>本機能は上級者様向けの機能です。<br>
                                                本機能にてサブドメインのみ他社サービスを使用したり、メールサーバのみ他社サーバーを使用するなど、ドメイン割り当ての詳細機能が利用可能ですが、設定内容に誤りがある場合、【ドメインが正常にご利用いただけなくなり】Web表示やメール受信に影響が及ぶ可能性があります。</p>
                                            <p class="note">※レコード編集自体に関する詳細につきましては、お客様ご自身でご確認されますようお願いします。</p>
                                        </div>
                                    </aside>
                                </div>

                            </div><!-- /section -->

                            <h3 id="link-c" class="section_ttl">DNSレコードへのSPF設定</h3>
                            <div class="section">
                                <div class="section_body">
                                    <p>
                                        SPF(Sender Policy Framework)とは、電子メールの送信元ドメインが詐称されていないかを検査する仕組みです。<br>
                                        当サービスでは、以下の手順でSPFを設定することが可能です。
                                    </p>

                                    <div class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>SPF設定をされる前に</h5>
                                        <div class="msg_body">
                                            <p>
                                                当社サーバーでドメイン名をご利用の場合はドメイン設定追加時にSPFレコードを自動的に追加いたしますので、お客様ご自身でSPFレコードを登録していただく必要はありません。
                                            </p>
                                            <p>
                                                また、ひとつのドメイン名に対して複数のSPFレコードを登録している場合、正しく機能しない可能性がありますので、ご注意ください。
                                            </p>
                                        </div>
                                    </div>

                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c01">1.DNSレコードを追加</h4>
                                            <div class="box_body">
                                                <p>「DNSレコード設定を追加」を選択してください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_2.png?date=2410" alt="DNSレコード設定を追加するスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c02">2.DNSレコードの設定</h4>
                                            <div class="box_body">
                                                <p>設定項目を入力後、「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_3.png?date=2410" alt="DNSレコード追加設定画面のスクリーンショット"></p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">ホスト</th>
                                                        <td>通常は空白で問題ありません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>種別</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>内容</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.wpx.ne.jp</em> +a:<em class="red">example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>優先度</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>サブドメインの場合は以下となります。</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w15per">ホスト</th>
                                                        <td>サブドメイン名</td>
                                                    </tr>
                                                    <tr>
                                                        <th>種別</th>
                                                        <td>TXT</td>
                                                    </tr>
                                                    <tr>
                                                        <th>内容</th>
                                                        <td>v=spf1 +a:<em class="red">sv***.wpx.ne.jp</em> +a:<em class="red">abc.example.com</em> +mx include:spf.sender.xserver.jp ~all</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>優先度</th>
                                                        <td>変更の必要はありません。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>「内容」について</dt>
                                                    <dd>「<em class="red">sv***.xserver.jp</em>」の部分は、お客様がご利用のサーバーのホスト名を記入してください。</dd>
                                                    <dd>「<em class="red">example.com</em>」「<em class="red">abc.example.com</em>」の部分は、お客様のドメイン名を記入してください。</dd>
                                                    <dt><i class="ico ico_square-fill"></i>ホスト名の確認方法</dt>
                                                    <dd>サーバーパネル内「サーバー情報」より、お客様がご利用のサーバーのホスト名の確認が可能です。</dd>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-c03">3.完了</h4>
                                            <div class="box_body">
                                                <p>DNSレコード一覧に新たに追加されていることを確認してください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_dns_setting_6.png?date=2410" alt="DNSレコード一覧に追加されています"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>DNSレコード設定例</h6>
                                        <div class="msg_body">
                                            <p>以下もあわせて、ご参照ください。</p>
                                            <ul class="list list_chevron-right">
                                                <li><a href="man_domain_dns_setting_google_apps.php">Google Workspace(旧G Suite)をお使いの場合</a></li>
                                                <li><a href="man_domain_dns_setting_blog.php">livedoorなどの外部ブログを設定する場合</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>

                            </div><!-- /section -->


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