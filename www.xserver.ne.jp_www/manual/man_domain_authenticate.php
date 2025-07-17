<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>ドメイン認証 | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜一部の機能では「ドメイン認証」が必要となります。当ページではドメインの認証方法についてご案内いたします。">

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

                        <h3 class="sub-ttl">ドメインの認証について</h3>

                        <div class="supportTabArea">
                            <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                                <!-- 旧パネル -->
                                <div class="supportTabContents">

                                    <div class="toc-list">
                                        <p class="toc-list--head">目次</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">ドメイン認証</a></li>
                                            <li><a href="#link-previous-b">Web認証</a>
                                                <ol>
                                                    <li><a href="#link-previous-b01">1.ファイルをダウンロード</a></li>
                                                    <li><a href="#link-previous-b02">2.「設置URL」で参照できるよう、ダウンロードした「webauth.html」をアップロードする</a></li>
                                                    <li><a href="#link-previous-b03">3.「認証して確認画面へ進む」をクリック</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-c">メール認証</a>
                                                <ol>
                                                    <li><a href="#link-previous-c01">1.メールアドレスの作成</a></li>
                                                    <li><a href="#link-previous-c02">2.認証メール送信</a></li>
                                                    <li><a href="#link-previous-c03">3.「認証ID」を入力し確認画面へ進む</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">ドメイン認証</h4>
                                        <div class="section_body">
                                            <p>一部の機能をご利用いただくためにドメイン認証が必要となる場合があります。ドメイン認証の画面が表示された場合は画面の案内に従い、認証作業を実施してください。</p>
                                            <p class="mb5">以下の条件に当てはまる場合、ドメイン認証が必要となる可能性があります。</p>
                                            <div class="border border_gray mb5">
                                                <ul class="ul mb0">
                                                    <li>当社サービス「XServerドメイン」で取得したドメイン名ではない場合</li>
                                                    <li>エックスサーバー以外でドメイン名をご利用中の場合</li>
                                                </ul>
                                            </div>
                                            <br/>
                                            <p class="mb5">ドメインの認証方法については以下のいずれかより選択可能です。</p>
                                            <div class="border border_gray mb5">
                                                <ul class="ul mb0">
                                                    <li><a href="#link-previous-b">Web認証</a>（ダウンロードしたファイルを、指定したURLで参照できるようにアップロードする方法）</li>
                                                    <li><a href="#link-previous-c">メール認証</a>（指定のメールアドレスに送信されたメールに記載の「認証ID」を入力欄に記載する方法）</li>
                                                </ul>
                                            </div>

                                            <section class="block">
                                                <h5 class="block_ttl mt50">ドメイン認証が必要となる機能一覧</h5>
                                                <div class="block_body">
                                                    <table class="table break-word">
                                                        <thead>
                                                        <tr>
                                                            <th>メニュー</th>
                                                            <th>機能</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th rowspan="2">メールアカウント設定</th>
                                                            <td>メールアカウント追加</td>
                                                        </tr>
                                                        <tr>
                                                            <td>メールアカウント一括登録</td>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">メーリングリスト・メールマガジン</th>
                                                            <td>メーリングリスト追加</td>
                                                        </tr>
                                                        <tr>
                                                            <td>メールマガジン追加</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-b">Web認証</h4>
                                        <div class="section_body">
                                            <p>※エックスサーバー以外で対象ドメイン名のホームページを公開していて、現在ご利用のサーバーへhtmlファイルをアップロードできる場合にご利用いただけます。</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b01">1.ファイルをダウンロード</h6>
                                                    <div class="box_body">
                                                        <p>「Web認証」を選択すると表示される、「ファイルダウンロード」ボタンをクリックし、「webauth.html」をダウンロードしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_1.png" alt="認証用ファイルをダウンロードするスクリーンショット"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b02">2.「設置URL」で参照できるよう、ダウンロードした「webauth.html」をアップロードする</h6>
                                                    <div class="box_body">
                                                        <p>ダウンロードした「webauth.html」を「設置URL（http://認証するドメイン名/webauth.html）」で参照できるよう、FTPソフト等でアップロードしてください。</p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-b03">3.「認証して確認画面へ進む」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>「認証して確認画面へ進む」をクリックしてください。
                                                            設置URLに認証用ファイルが設置されていることが確認できれば、認証作業は完了となります。</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-c">メール認証</h4>
                                        <div class="section_body">
                                            <p>※エックスサーバー以外で対象ドメイン名を利用していて、メールアドレスの作成が行える場合にご利用いただけます。</p>
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c01">1.メールアドレスの作成</h6>
                                                    <div class="box_body">
                                                        <p>現在ご利用中のサービスにて、下記いずれかのメールアドレスを作成してください。</p>
                                                        <div class="border border_blue mb5">
                                                            <ul class="ul mb0">
                                                                <li>admin@認証するドメイン名</li>
                                                                <li>webmaster@認証するドメイン名</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c02">2.認証メール送信</h6>
                                                    <div class="box_body">
                                                        <p>「メール認証」を選択してください。1.で作成したメールアドレスを選択し、「認証メール送信」ボタンをクリックしてください。
                                                            選択したメールアドレス宛に「【XServer】メール認証のご案内」という件名で、認証IDが記載されたメールが送信されます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_2.png" alt="「認証メール送信」ボタンをクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl" id="link-previous-c03">3.「認証ID」を入力し確認画面へ進む</h6>
                                                    <div class="box_body">
                                                        <p>2.の手順で送信されたメールに記載の「認証ID」を入力してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_authenticate_3.png" alt="認証IDを入力し、「認証して確認画面へ進む」をクリック"></p>
                                                        <p>以上でメール認証は完了となります。</p>
                                                    </div>
                                                </section>
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
                                            <li><a href="#link-a">ドメインの認証について</a></li>
                                            <li><a href="#link-b">Web認証</a>
                                                <ol>
                                                    <li><a href="#link-b01">1.ファイルをダウンロード</a></li>
                                                    <li><a href="#link-b02">2.「設置URL」で参照できるよう、ダウンロードした「webauth.html」をアップロード</a></li>
                                                    <li><a href="#link-b03">3.「認証する」をクリック</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-c">メール認証</a>
                                                <ol>
                                                    <li><a href="#link-c01">1.メールアドレスの作成</a></li>
                                                    <li><a href="#link-c02">2.認証メール送信</a></li>
                                                    <li><a href="#link-c03">3.「認証ID」を入力し確認画面へ進む</a></li>
                                                </ol>
                                            </li>
                                        </ul>
                                    </div>

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">ドメインの認証について</h4>
                                        <div class="section_body">
                                            <p>一部の機能をご利用いただくためにドメイン認証が必要となる場合があります。ドメイン認証の画面が表示された場合は画面の案内に従い、認証作業を実施してください。</p>
                                            <p>以下の条件に当てはまる場合、ドメイン認証が必要となる可能性があります。</p>
                                            <div class="border border_gray">
                                                <ul class="ul ul_man_margin mb0">
                                                    <li>当社サービス「XServerドメイン」で取得したドメイン名ではない場合</li>
                                                    <li>エックスサーバー以外でドメイン名をご利用中の場合</li>
                                                </ul>
                                            </div>
                                            <p>ドメインの認証方法については以下のいずれかより選択可能です。</p>
                                            <div class="border border_gray">
                                                <ul class="ul ul_man_margin mb0">
                                                    <li><a href="#link-b">Web認証</a>（ダウンロードしたファイルを、指定したURLで参照できるようにアップロードする方法）</li>
                                                    <li><a href="#link-c">メール認証</a>（指定のメールアドレスに送信されたメールに記載の「認証ID」を入力欄に記載する方法）</li>
                                                </ul>
                                            </div>

                                            <div class="msg">
                                                <h5 class="msg_ttl"><i class="ico ico_circle"></i>認証済みのドメイン名について</h5>
                                                <div class="msg_body">
                                                    <p>一度ドメインの認証が完了すると、次回以降は同じドメイン名に対して認証を求められることはありません。通常どおりサーバーパネルの機能をご利用いただくことが可能です。</p>
                                                </div>
                                            </div>
                                            <section class="block mt50">
                                                <h5 class="block_ttl">ドメイン認証が必要となる機能一覧</h5>
                                                <div class="block_body">
                                                    <table class="table break-all">
                                                        <thead>
                                                        <tr>
                                                            <th>メニュー</th>
                                                            <th>機能</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th rowspan="2">メールアカウント設定</th>
                                                            <td>メールアカウント追加</td>
                                                        </tr>
                                                        <tr>
                                                            <td>メールアカウント一括登録</td>
                                                        </tr>

                                                        <tr>
                                                            <th>メーリングリスト</th>
                                                            <td>メーリングリスト追加</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールマガジン</th>
                                                            <td>メールマガジン追加</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section  id="link-b" class="section">
                                        <h4 class="section_ttl">Web認証</h4>
                                        <p>※エックスサーバー以外で対象ドメイン名のホームページを公開していて、現在ご利用のサーバーへhtmlファイルをアップロードできる場合にご利用いただけます。</p>
                                        <div class="serial-box">
                                            <section class="box">
                                                <h5 id="link-b01" class="box_ttl">1.ファイルをダウンロード</h5>
                                                <div class="box_body">
                                                    <p>「Web認証」を選択すると表示される、「ダウンロードする」ボタンをクリックし、「webauth.html」をダウンロードしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_1.png?date=2410" alt="認証用ファイルをダウンロードするスクリーンショット"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-b02" class="box_ttl">2.「設置URL」で参照できるよう、ダウンロードした「webauth.html」をアップロード</h5>
                                                <div class="box_body">
                                                    <p>ダウンロードした「webauth.html」を「設置URL（http://認証するドメイン名/webauth.html）」で参照できるよう、FTPソフト等でアップロードしてください。</p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-b03" class="box_ttl">3.「認証する」をクリック</h5>
                                                <div class="box_body">
                                                    <p>「認証する」をクリックしてください。設置URLに認証用ファイルが設置されていることが確認できれば、認証作業は完了となります。</p>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- /.serial-box -->
                                    </section>

                                    <section id="link-c" class="section">
                                        <h4 class="section_ttl">メール認証</h4>
                                        <p>※エックスサーバー以外で対象ドメイン名を利用していて、メールアドレスの作成が行える場合にご利用いただけます。</p>
                                        <div class="serial-box">
                                            <section class="box">
                                                <h4 id="link-c01" class="box_ttl">1.メールアドレスの作成</h4>
                                                <div class="box_body">
                                                    <p>現在ご利用中のサービスにて、下記いずれかのメールアドレスを作成してください。</p>
                                                    <ul class="ul">
                                                        <li>admin@認証するドメイン名</li>
                                                        <li>webmaster@認証するドメイン名</li>
                                                    </ul>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-c02" class="box_ttl">2.認証メール送信</h5>
                                                <div class="box_body">
                                                    <p>「メール認証」を選択してください。1.で作成したメールアドレスを選択し、「認証メール送信」ボタンをクリックしてください。選択したメールアドレス宛に「【XServer】メール認証のご案内」という件名で、認証IDが記載されたメールが送信されます。</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_2.png?date=2410" alt="「認証メール送信」ボタンをクリック"></p>
                                                </div>
                                            </section>

                                            <section class="box">
                                                <h5 id="link-c03" class="box_ttl">3.「認証ID」を入力し確認画面へ進む。</h5>
                                                <div class="box_body">
                                                    <p>2.の手順で送信されたメールに記載の「認証ID」を入力してください。</p>
                                                    <p>以上でメール認証は完了となります。</p>
                                                    <p><img class="img" src="../img/manual/man_domain_authenticate_3.png?date=2410" alt="認証IDを入力し、認証して確認画面へ進むをクリック"></p>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- /.serial-box -->
                                    </section>

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