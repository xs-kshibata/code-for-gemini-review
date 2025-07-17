<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SSH設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーではSSH接続機能を提供しています。当マニュアルではお客様のサーバーアカウントへSSHで接続するための手順を記載しています。">

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
            
                <h3 class="sub-ttl">SSH設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">SSHとは</a></li>
                                <li><a href="#link-previous-b">SSH接続機能について</a></li>
                                <li><a href="#link-previous-c">国外IPアドレスからのアクセス制限について</a></li>
                                <li><a href="#link-previous-d">SSH接続の有効化・無効化</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.ログイン後、「SSH設定」をクリック</a></li>
                                        <li><a href="#link-previous-d02">2.「ON[国内からのアクセスのみ許可]」または「ON[すべてのアクセスを許可]」を選択し、「設定する」ボタンをクリック</a></li>
                                        <li><a href="#link-previous-d03">3.設定完了</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">公開鍵認証用鍵ペアの生成、公開鍵の登録</a>
                                    <ul>
                                        <li><a href="#link-previous-e01">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</a></li>
                                        <li><a href="#link-previous-e02">お客さまにて作成の公開鍵を登録する場合</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">SSHとは</h4>
                                <p>
                                    SSH(Secure Shell)とは、ネットワークを介してサーバーにログインしたり、ログインしたマシンでコマンドを実行する手段の一つです。<br>
                                    本機能をご利用いただく事で、コピーや削除といったサーバー上のファイル操作、設定ファイル等のテキスト編集を行うことが可能です。<br>
                                    SSHでの接続の場合、ネットワーク上を流れるデータはパスワード情報等を含めて全てのデータが暗号化されるため、操作を安全に行うことができます。
                                </p>

                                <h4 class="section_ttl mt50" id="link-previous-b">SSH接続機能について</h4>
                                <ul class="ul mb0">
                                    <li>本機能を利用して実際に操作を行うには、UNIXの知識や、利用するコマンドに関する知識が必要です。</li>
                                    <li>本機能にてSSH接続を行われる場合、パスワード認証は利用できません。</li>
                                    <li>本機能をご利用いただくには、サーバーパネルの「SSH設定」にて設定を【ON(有効)】にする必要があります。</li>
                                    <li>SSHで接続を行うには、ご利用のパソコン上にSSHクライアントソフトが必要です。</li>
                                </ul>

                                <aside class="msg msg_caution mt30">
                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                    <div class="msg_body">
                                        誤った操作を行うと、お客さまサーバー領域上のファイルが削除されたり、正常なWebの表示、メールの送受信が行えなくなる可能性があります。ご利用の際は十分に注意してください。
                                    </div>
                                </aside>

                                <table class="table table_use-caption mt30">
                                    <caption>SSHアカウント情報</caption>
                                    <tbody>
                                    <tr>
                                        <th>サーバー（ホスト名）</th>
                                        <td>
                                            サーバーID.xsrv.jp（お客様の初期ドメイン）
                                            <p class="note">※ホスト名（sv***.xserver.jp）でも設定が可能です。</p>
                                            <p>例：xsample.xsrv.jp</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ユーザー名</th>
                                        <td>サーバーID<br>例：xsample</td>
                                    </tr>
                                    <tr>
                                        <th>認証方式</th>
                                        <td>公開鍵認証<br>※パスワード認証は利用できません。</td>
                                    </tr>
                                    <tr>
                                        <th>接続ポート</th>
                                        <td>10022</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">国外IPアドレスからのアクセス制限について</h4>
                                <div class="section_body">
                                    <p>
                                        サーバーパネルの「SSH設定」にて設定を「ON[国内からのアクセスのみ許可]」にすることで、
                                        国外IPアドレスからのアクセスを制限できます。<br>
                                        国外IPアドレスからのアクセスを制限することにより、
                                        不正なアクセスに対するセキュリティを強化させることができます。
                                    </p>

                                    <aside class="msg msg_caution mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">

                                            <ul class="ul mb0">
                                                <li>
                                                    国外に在住の方など、国外IPアドレスからのアクセスが必要な方は、
                                                    「ON[すべてのアクセスを許可]」を選択のうえ設定をお願いいたします。<br>
                                                </li>
                                                <li>
                                                    AWSやAzureなどで海外拠点に設置されているサーバーからアクセスをされる場合、<br>
                                                    「ON[すべてのアクセスを許可]」を選択のうえ設定をお願いいたします。<br>
                                                </li>
                                                <li>
                                                    国内IPアドレスからのアクセスの場合でも、<br>
                                                    稀に国外IPアドレスからの接続とシステム上誤認され、制限がされる場合がございます。<br>
                                                    このような場合は「ON[すべてのアクセスを許可]」を選択のうえ設定をお願いいたします。<br>
                                                </li>
                                            </ul>

                                        </div>
                                    </aside>

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">SSH接続の有効化・無効化</h4>
                                <div class="section_body">

                                    <p>お客様サーバーアカウントへSSHで接続される際は、SSH接続の有効化が必要となります。<br>
                                    下記手順にてSSH接続の有効化(ON)を行ってください。<br>
                                    また接続を行わない際は、SSH接続を無効(OFF)にしてください。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.ログイン後、「SSH設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SSH設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssh_1.png" alt="サーバーパネル SSH設定メニューをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.「ON[国内からのアクセスのみ許可]」または「ON[すべてのアクセスを許可]」を選択し、「設定する」ボタンをクリック</h6>
                                            <div class="box_body">
                                                <p>SSH設定画面が表示されますので、「ON[国内からのアクセスのみ許可]」または「ON[すべてのアクセスを許可]」を選択し、「設定する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ssh_2.png" alt="「ON[国内からのアクセスのみ許可]」または「ON[すべてのアクセスを許可]」を選択し、「設定する」ボタンをクリック"></p>

                                                <p>本機能では、下記の2つの項目においてSSHのONを設定することが可能です。</p>

                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>ON[国内からのアクセスのみ許可]</th>
                                                        <td>SSH接続が有効化され、国内からのアクセスのみ許可されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ON[すべてのアクセスを許可] ※非推奨</th>
                                                        <td>SSH接続が有効化され、すべてのアクセスが許可されます。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.設定完了</h6>
                                            <div class="box_body">
                                                <p>こちらで接続の有効化(ON)設定は完了です。</p>
                                                <p>無効化する場合は、「OFF」を選択し、「設定する」ボタンをクリックしてください。<br>
                                                    「状態」が【OFF】になれば、接続の無効化は完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">公開鍵認証用鍵ペアの生成、公開鍵の登録</h4>
                                <div class="section_body">

                                    <p class="mb0">エックスサーバーのSSH接続では「公開鍵認証」にのみ対応しています。</p>
                                    <p class="note">※パスワード認証には対応していません。</p>
                                    <p class="mb0">そのため、SSHで接続する為にはサーバーに公開鍵の登録を行う必要があります。<br>
                                    お客様にて生成の公開鍵を登録していただく方法と、サーバー上で公開鍵認証用鍵ペアを生成し秘密鍵をダウンロードしていただく方法がありますので、下記をご参照の上、生成または登録を行ってください。</p>
                                    <p class="note">※登録が行える公開鍵は「OpenSSH形式」のみです。</p>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-e01">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</h5>
                                        <div class="block_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1.ログイン後、「公開鍵認証用鍵ペアの生成」へ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SSH設定」から「公開鍵認証用鍵ペアの生成」へ進みます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_4.png" alt="公開鍵認証用鍵ペアの生成 入力画面"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.「パスフレーズ」を入力し、「確認画面へ進む」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>公開鍵認証設定画面が表示されましたら「パスフレーズ」の入力を行い、「確認画面へ進む」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_5.png" alt="確認画面へ進む"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.「生成する」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>確認画面が表示されますので「生成する」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_6.png" alt="生成する"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.秘密鍵をPC上の任意の場所に保存</h6>
                                                    <div class="box_body">
                                                        <p>「公開鍵認証用の鍵ペア生成処理を実行しました」画面が表示され、自動的に秘密鍵のダウンロードが始まりますので、PC上の任意の場所に保存します。<br>
                                                        （ファイル名：[サーバーID].key）</p>
                                                        <p>保存された秘密鍵を利用してSSHクライアントからの接続を行ってください。(例：<a href="man_server_ssh_connect_tera.php">Tera Termでの接続方法</a>)</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_7.png" alt="公開鍵認証用の鍵ペア生成完了画面"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-e02">お客さまにて作成の公開鍵を登録する場合</h5>
                                        <div class="block_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1.ログイン後、「公開鍵登録・更新」へ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SSH設定」から「公開鍵登録・更新」へ進みます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_8.png" alt="公開鍵入力画面"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.公開鍵を入力し、「確認画面へ進む」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>公開鍵登録・更新画面が表示されましたら「公開鍵」欄にお手持ちの公開鍵を入力し、「確認画面へ進む」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_9.png" alt="「確認画面へ進む」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.「登録する」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>確認画面が表示されますので「登録する」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_10.png" alt="「登録する」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.登録完了</h6>
                                                    <div class="box_body">
                                                        <p>「公開鍵の登録を完了しました。」と表示されましたら、登録完了です。<br>
                                                        SSHクライアントからの接続を行ってください。(例：<a href="man_server_ssh_connect_tera.php">Tera Termでの接続方法</a>)</p>
                                                        <p><img class="img" src="../img/manual/previous/man_server_ssh_11.png" alt="公開鍵の登録完了画面"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>関連：<a href="man_server_ssh_connect_tera.php">SSHソフトの設定(Tera Term)</a><i class="ico ico_chevron-right"></i></p>
                                    </div>

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
                                    <li><a href="#link-a">SSH接続機能について</a></li>
                                    <li><a href="#link-b">国外IPアドレスからのアクセス制限について</a></li>
                                    <li><a href="#link-c">SSH接続の有効化・無効化</a>
                                        <ol>
                                            <li><a href="#link-c01">1.ログイン後、「SSH設定」をクリック</a></li>
                                            <li><a href="#link-c02">2.変更ボタンをクリックして「ON」にする</a></li>
                                            <li><a href="#link-c03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">国外アクセス制限の無効化・有効化</a>
                                        <ul>
                                            <li><a href="#link-d01">ログイン後、「SSH設定」をクリック</a></li>
                                            <li><a href="#link-d02">変更ボタンをクリックして「OFF」にする</a></li>
                                            <li><a href="#link-d03">設定完了</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#link-e">公開鍵認証用鍵ペアの生成、公開鍵の登録</a>
                                        <ul>
                                            <li><a href="#link-e01">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</a></li>
                                            <li><a href="#link-e02">お客さまにて作成の公開鍵を登録する場合</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">SSH接続機能について</h4>
                                    <p>
                                        SSH(Secure Shell)とは、ネットワークを介してサーバーにログインしたり、ログインしたマシンでコマンドを実行する手段の一つです。<br>
                                        本機能をご利用いただく事で、コピーや削除といったサーバー上のファイル操作、設定ファイル等のテキスト編集を行うことが可能です。<br>
                                        SSHでの接続の場合、ネットワーク上を流れるデータはパスワード情報等を含めて全てのデータが暗号化されるため、操作を安全に行うことができます。
                                    </p>
                                    <aside class="msg msg_caution mt30">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>本機能を利用して実際に操作を行うには、UNIXの知識や、利用するコマンドに関する知識が必要です。</li>
                                                <li>本機能にてSSH接続を行われる場合、パスワード認証は利用できません。</li>
                                                <li>本機能をご利用いただくには、サーバーパネルの「SSH設定」にて設定を【ON(有効)】にする必要があります。</li>
                                                <li>SSHで接続を行うには、ご利用のパソコン上にSSHクライアントソフトが必要です。</li>
                                                <li>誤った操作を行うと、お客さまサーバー領域上のファイルの削除が行われたり、正常なWebの表示、メールの送受信が行えなくなる可能性がありますので、ご利用の際は十分に注意してください。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <table class="table table_use-caption mt30">
                                        <caption>SSHアカウント情報</caption>
                                        <tbody>
                                        <tr>
                                            <th>サーバー（ホスト名）</th>
                                            <td>
                                                サーバーID.xsrv.jp（お客様の初期ドメイン）
                                                <p class="note">※ホスト名（sv***.xserver.jp）でも設定が可能です。</p>
                                                <p>例：xsample.xsrv.jp</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ユーザー名</th>
                                            <td>サーバーID<br>例：xsample</td>
                                        </tr>
                                        <tr>
                                            <th>認証方式</th>
                                            <td>公開鍵認証<br>※パスワード認証は利用できません。</td>
                                        </tr>
                                        <tr>
                                            <th>接続ポート</th>
                                            <td>10022</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <h4 id="link-b" class="section_ttl">国外IPアドレスからのアクセス制限について</h4>
                                <div class="section_body">
                                    <p>
                                        「SSH設定」の国外アクセス制限を有効化(ON)にすることで、
                                        国外IPアドレスからのアクセスを制限できます。<br>
                                        国外IPアドレスからのアクセスを制限することにより、
                                        不正なアクセスに対するセキュリティを強化させることができます。
                                    </p>
                                    <aside class="msg msg_caution mt30">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>
                                                    国外に在住の方など、国外IPアドレスからのアクセスが必要な方は、
                                                    国外アクセス制限の設定を無効(OFF)にしてください。<br>
                                                </li>
                                                <li>
                                                    AWSやAzureなどで海外拠点に設置されているサーバーからアクセスをされる場合、<br>
                                                    国外アクセス制限の設定を無効(OFF)にしてください。<br>
                                                </li>
                                                <li>
                                                    国内IPアドレスからのアクセスの場合でも、<br>
                                                    稀に国外IPアドレスからの接続とシステム上誤認され、制限がされる場合がございます。<br>
                                                    このような場合は、国外アクセス制限の設定を無効(OFF)にしてください。<br>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">SSH接続の有効化・無効化</h4>

                                    <p>
                                        お客様サーバーアカウントへSSHで接続される際は、SSH接続の有効化が必要となります。<br>
                                        下記手順にてSSH接続の有効化(ON)を行ってください。<br>
                                        また接続を行わない際は、SSH接続を無効(OFF)にしてください。
                                    </p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c01">1. ログイン後、「SSH設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SSH設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_1.png?date=2410" alt="サーバーパネル SSH設定メニューをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c02">2.変更ボタンをクリックして「ON」にする</h5>
                                            <div class="box_body">
                                                <p>SSH設定画面が表示されますので、変更ボタンをクリックして「ON」にしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_2.png?date=2410" alt="変更ボタンをクリックして「ON」にする"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c03">3. 設定完了</h5>
                                            <div class="box_body">
                                                <p>こちらで接続の有効化設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_3.png?date=2410" alt="SSH設定「ON」"></p>
                                                <p>無効化する場合は、再度変更ボタンをクリックしてください。<br>
                                                    設定状況が【OFF】になれば、接続の無効化は完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-d" class="section_ttl">国外アクセス制限の無効化・有効化</h4>

                                    <p>
                                        国外アクセス制限の無効化・有効化の切り替えは、SSH接続の有効化(ON)が行われている必要があります。<br>
                                    </p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d01">1. ログイン後、「SSH設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SSH設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_1.png?date=2410" alt="サーバーパネル SSH設定メニューをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d02">2.変更ボタンをクリックして「OFF」にする</h5>
                                            <div class="box_body">
                                                <p>国外アクセス制限を設定する画面が表示されますので、変更ボタンをクリックして「OFF」にしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_11.png?date=2410" alt="変更ボタンをクリックして「OFF」にする"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d03">3. 設定完了</h5>
                                            <div class="box_body">
                                                <p>こちらで国外アクセス制限の無効化設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_ssh_12.png?date=2410" alt="国外アクセス制限「OFF」"></p>
                                                <p>有効化する場合は、再度変更ボタンをクリックしてください。<br>
                                                    設定状況が【ON】になれば、国外アクセス制限の有効化は完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-e" class="section_ttl">公開鍵認証用鍵ペアの生成、公開鍵の登録</h4>

                                    <p class="mb0">エックスサーバーのSSH接続では「公開鍵認証」にのみ対応しています。</p>
                                    <p class="note">※パスワード認証には対応していません。</p>
                                    <p class="mb0">そのため、SSHで接続する為にはサーバーに公開鍵の登録を行う必要があります。<br>
                                        お客様にて生成の公開鍵を登録していただく方法と、サーバー上で公開鍵認証用鍵ペアを生成し秘密鍵をダウンロードしていただく方法がありますので、下記をご参照の上、生成または登録を行ってください。</p>
                                    <p class="note">※登録が行える公開鍵は「OpenSSH形式」のみです。</p>
                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#keygen">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</a></li>
                                        <li><a href="#keyadd">お客さまにて作成の公開鍵を登録する場合</a></li>
                                    </ul>

                                    <section id="keygen" class="block">
                                        <h5 class="block_ttl" id="link-e01">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</h5>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1. ログイン後、SSH設定画面を表示へ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログイン後「SSH設定」をクリックし、SSH設定画面を表示します。</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_4.png?date=2410" alt="サーバーパネル SSH設定"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2. 「登録して秘密鍵をダウンロードする」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>公開鍵の登録・更新が表示されましたら、「登録して秘密鍵をダウンロードする」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_5.png?date=2410" alt="登録して秘密鍵をダウンロードする"></p>
                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>パスフレーズを設定する場合</dt>
                                                            <dd>
                                                                <p>
                                                                    秘密鍵にパスフレーズを設定する場合は、「パスフレーズを設定する」を選択し、パスフレーズを入力してください。
                                                                </p>
                                                                <p><img class="img" src="../img/manual/man_server_ssh_6.png?date=2410" alt="パスフレーズを設定する場合"></p>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3. 秘密鍵をPC上の任意の場所に保存</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            「公開鍵を登録しました。」画面が表示され、自動的に秘密鍵のダウンロードが始まりますので、PC上の任意の場所に保存します。<br>
                                                            （ファイル名：[サーバーID].key）
                                                        </p>
                                                        <p>保存された秘密鍵を利用してSSHクライアントからの接続を行ってください。(例：<a href="man_server_ssh_connect_tera.php">Tera Termでの接続方法</a>)</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_7.png?date=2410" alt="公開鍵を登録しました画面"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section id="keyadd" class="block">
                                        <h5 class="block_ttl" id="link-e02">お客さまにて作成の公開鍵を登録する場合</h5>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h6 class="box_ttl">1. ログイン後、「手動による登録・更新」へ</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログイン後「SSH設定」をクリックし、SSH設定画面を表示します。<br>
                                                            SSH設定画面下部の「手動による登録・更新」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_8.png?date=2410" alt="「手動による登録・更新」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2. 公開鍵を入力し、「確認画面へ進む」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>公開鍵登録・更新画面が表示されましたら「公開鍵」欄にお手持ちの公開鍵を入力し、「登録する」ボタンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_9.png?date=2410" alt="「登録する」ボタンをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3. 登録完了</h6>
                                                    <div class="box_body">
                                                        <p>
                                                            「公開鍵を登録しました。」と表示されましたら、登録完了です。<br>
                                                            SSHクライアントからの接続を行ってください。(例：<a href="man_server_ssh_connect_tera.php">Tera Termでの接続方法</a>)
                                                        </p>
                                                        <p><img class="img" src="../img/manual/man_server_ssh_10.png?date=2410" alt="公開鍵の登録完了画面"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <div class="border border_gray mt-24">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>関連：<a href="man_server_ssh_connect_tera.php">SSHソフトの設定(Tera Term)</a></p>
                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div><!-- 新パネル終わり-->
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