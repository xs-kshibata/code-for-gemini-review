<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メーリングリストについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「メーリングリスト」の利用手順に関するご案内です。エックスサーバーでは管理ツールからの簡単な操作でメーリングリストを設置することが可能です。">

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
            
                <h3 class="sub-ttl">メーリングリストについて</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メーリングリストについて</a>
                                        <ul>
                                            <li><a href="#link-previous-a01">メーリングリストとは</a></li>
                                            <li><a href="#link-previous-a03">「メーリングリスト」機能について</a></li>
                                            <li><a href="#link-previous-a02">メーリングリストのご利用手順</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-b">1.メーリングリストの作成</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.メーリングリストメニューへ</a></li>
                                            <li><a href="#link-previous-b02">2.追加メニューへ</a></li>
                                            <li><a href="#link-previous-b03">3.メーリングリストの作成</a></li>
                                            <li><a href="#link-previous-b04">4.作成完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">2.ログイン</a>
                                        <ul>
                                            <li><a href="#link-previous-c01">メーリングリスト管理画面へ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-d">3.環境設定</a>
                                        <ul>
                                            <li><a href="#link-previous-d01">メーリングリストの環境設定</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-e">4.システムメール</a>
                                        <ul>
                                            <li><a href="#link-previous-e01">システムメールの設定</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-f">5.メンバー登録</a>
                                        <ul>
                                            <li><a href="#link-previous-f01">管理画面からメールアドレスを指定して追加する方法</a></li>
                                            <li><a href="#link-previous-f02">公開ページに設置した入会用フォームを利用する方法</a></li>
                                            <li><a href="#link-previous-f03">空メール自動入会用メールアドレスを利用する方法</a></li>
                                            <li><a href="#link-previous-f04">任意のWebページにて入会窓口を設置する方法</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-g">6.メンバー管理</a>
                                        <ul>
                                            <li><a href="#link-previous-g01">メンバーの権限を変更する方法</a></li>
                                            <li><a href="#link-previous-g02">メンバーを削除する方法</a></li>
                                            <li><a href="#link-previous-g03">メンバーの一覧表示</a></li>
                                            <li><a href="#link-previous-g04">メンバーの一括削除</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-h">7.メールの配信前確認</a>
                                        <ul>
                                            <li><a href="#link-previous-h01">承認方法詳細</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-i">8.過去に配信されたメールの確認</a></li>
                                    <li><a href="#link-previous-j">9.配信エラー管理</a>
                                        <ul>
                                            <li><a href="#link-previous-j01">自動削除</a></li>
                                            <li><a href="#link-previous-j02">削除済みメールアドレス</a></li>
                                            <li><a href="#link-previous-j03">エラーメール集計</a></li>
                                            <li><a href="#link-previous-j04">エラーメール詳細</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-k">10.SSLの利用</a></li>
                                    <li><a href="#link-previous-l">11.ご利用環境について</a></li>
                                </ul>
                            </div>



                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_mailinglist.php">メーリングリスト機能に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メーリングリストについて</h4>
                                <div class="section_body">

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a01">メーリングリストとは</h5>
                                        <div class="block_body">
                                            <p>メーリングリストとは、複数の相手に同じ内容のメールを送信するサービスです。<br>
                                            メールで複数の相手に同じ内容のメールを送るためには、送信者が全員のメールアドレスを記入したメールを送信する必要がありますが、メーリングリストであれば、送信者がメーリングリストの専用アドレス宛にメールを送信するだけで、登録されているすべてのメールアドレスに配信できます。</p>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_1.png" alt="「メール」を起動し『その他』をタップ"></p>
                                            <p>メーリングリストを使えば、共通の趣味や目的を持つメンバー内で、簡単に情報を共有できます。</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a03">「メーリングリスト」機能について</h5>
                                        <div class="block_body">
                                            <p>
                                                メーリングリストは、メーリングリストの作成後に、メンバー登録を行うだけでご利用いただけます。<br>
                                                ご利用の際は、メーリングリストアドレスをメンバーに公開し、そのアドレス宛にメールを送るようメンバーに通知してください。
                                            </p>
                                            <p>
                                                初期状態では、メーリングリストに登録されているメンバーのみが、メーリングリストを利用してメールを配信できます。<br>
                                                メンバー以外からも配信する場合は、追加で「<a href="#ml07">メールの配信前確認</a>」を設定してください。
                                            </p>
                                            <p>
                                                メーリングリストの送信数が一定の件数を超過すると、利用を制限する場合があります。<br>
                                                送信件数の目安は、「<a href="man_mail_spec.php">送受信制限</a>」をご参照ください。<br>
                                                なお、10人のメンバーに1通のメールを配信した場合は、10通とカウントします。
                                            </p>
                                            <p>
                                                メーリングリストは、プランごとに作成できる数が異なります。
                                            </p>

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>プラン</th>
                                                    <th>作成件数</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>スタンダードプラン</td>
                                                    <td>20件</td>
                                                </tr>
                                                <tr>
                                                    <td>プレミアムプラン</td>
                                                    <td>30件</td>
                                                </tr>
                                                <tr>
                                                    <td>ビジネスプラン</td>
                                                    <td>40件</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>また、各メーリングリストには、500件のメールアドレスをメンバーとして登録できます。</p>

                                            <aside class="msg msg_notice mt30">
                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>試用期間中のサーバーアカウントでは、メーリングリストはご利用になれません。</li>
                                                        <li>携帯電話各社のメールアドレスで「なりすましメール対策」を設定されていると、メーリングリストから配信されるメールを受信できない場合があります。その際は、メーリングリストのメールアドレスを受信できるよう、受信側で許可の設定を行ってください。</li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a02">メーリングリストのご利用手順</h5>
                                        <div class="block_body">
                                            <p>メーリングリストは、<a href="#ml01">メーリングリストの作成</a>後に、<a href="#ml05">メンバー登録</a>を行うだけでご利用いただけます。<br>
                                            ご利用の際は、メーリングリストアドレスをメンバーに公開し、そのアドレス宛にメールを送るようメンバーに通知してください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-b">
                                <h4 id="ml01" class="section_ttl">1.メーリングリストの作成</h4>
                                <div class="section_body">

                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.メーリングリストメニューへ</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「メーリングリスト・メールマガジン」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_2.png" alt="「メーリングリスト・メールマガジン」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.追加メニューへ</h5>
                                            <div class="box_body">
                                                <p>「メーリングリスト追加」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_3.png" alt="「メーリングリストの追加」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.メーリングリストの作成</h5>
                                            <div class="box_body">
                                                <p>作成用のフォームが表示されるので、各項目を設定してください。</p>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per">メーリングリスト名</th>
                                                            <td>メーリングリストの名前を入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メーリングリストアドレス</th>
                                                            <td><p>メーリングリストのアドレスを半角英数字で入力してください。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>メーリングリストアドレスについて</dt>
                                                                    <dd>メーリングリストのメンバーへのメール配信に使用されるメールアドレスです。<br>
                                                                    メーリングリストの管理者、または[メール受信+メール配信]権限を持つメンバーは、メーリングリストで指定したアドレス宛にメールを送信することで、メンバー全員にそのメールを配信できます。 <br>なお、作成済みのメールアドレスは使用できません。</dd>
                                                                </dl></td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理ツール パスワード</th>
                                                            <td>メーリングリスト管理ツールのログインパスワードです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メモ</th>
                                                            <td>メーリングリストの利用用途などをご記入ください。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>各項目の設定が完了すれば、「確認画面へ進む」ボタンをクリックしてください。<br>
                                                そして、次に表示される確認画面で入力内容を再度確認し、「追加する」ボタンをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_4.png" alt="「追加する」ボタンをクリック"></p>
                                                <section class="msg">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h6>
                                                    <div class="msg_body">
                                                        <p>
                                                            「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                            詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                                        </p>
                                                    </div>
                                                </section>

                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4.作成完了</h5>
                                            <div class="box_body">
                                                <p>以上で完了です。</p>
                                                <p>「メーリングリスト・メールマガジン一覧」から、「管理ツールURL」のリンクをクリックしてメーリングリストの管理画面に遷移することが可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_5.png" alt="「管理ツールURL」のリンクをクリック"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-c">
                                <h4 id="ml02" class="section_ttl">2.ログイン</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c01">メーリングリスト管理画面へ</h5>
                                        <div class="block_body">
                                            <p>「メーリングリスト・メールマガジン一覧」から、作成したメールマガジンの「ログイン」をクリックし、ログインを完了してください。<br>
                                            ログイン状態は、管理画面右上の「ログアウト」ボタンをクリックすることで、解除されます。<br>
                                            ログアウトした場合は、ログアウト後に表示される下記ログイン画面か、再度「メーリングリスト・メールマガジン一覧」画面からログインしてください。</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th class="w30per">メーリングリストアドレス</th>
                                                        <td>「メーリングリスト・メールマガジンの一覧」に表示されている『メーリングリストアドレス』を入力してください。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>パスワード</th>
                                                        <td>
                                                            <p>メーリングリストを作成する際に指定した「管理ツール パスワード」を入力してください。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>パスワードが不明な場合</dt>
                                                                <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の 「メーリングリスト・メールマガジン一覧」に表示されている当該メーリングリストの『変更』メニューにて、新たなパスワードを設定することが可能です。</dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_6.png" alt="「ログイン」をクリック"></p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-d">
                                <h4 id="ml03" class="section_ttl">3.環境設定</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-d01">メーリングリストの環境設定</h5>
                                        <div class="block_body">
                                            <p>メーリングリストの管理画面内で、「環境設定」メニューへと進み、環境設定を行ってください。</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th class="w20per">メーリングリスト名</th>
                                                        <td>メーリングリストの名前を設定します。<br>
                                                        メーリングリスト作成時に設定したメーリングリスト名を変更できます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>メーリングリストアドレス</th>
                                                        <td>メーリングリストの配信に使用しているメールアドレスです。<br>
                                                                メーリングリストの管理者と[メール受信＋メール配信]権限を持つメンバーが、当該アドレスにメールを送信することで、メンバー全員にそのメールが配信されます。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>管理者メールアドレス</th>
                                                        <td><p>管理者が使用するメールアドレスを設定します。<br>
                                                                設定を行うことで、当該メールアドレスに、メンバー登録の完了通知やシステム・エラーメールが送信されるようにできます。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>登録できないメールアドレスについて</dt>
                                                                <dd>
                                                                    <p>メーリングリスト設定ドメインを用いたメールアドレスで、「@」（アットマーク）より前が以下のものは登録不可としています。</p>
                                                                    <div class="border border_gray">
                                                                        <p>root / postmaster / MAILER-DAEMON / msgs / nobody / majordomo / listserv / listproc</p>
                                                                        <p>メーリングリストアドレスのアカウント名（※）-help<br>
                                                                           メーリングリストアドレスのアカウント名（※）-subscribe<br>
                                                                           メーリングリストアドレスのアカウント名（※）-unsubscribe</p>
                                                                        <p class="note note_x2 mb0">（※）メーリングリストアドレスが「test@example.com」の場合、test-help@、test-subscribe@、test-unsubscribe@となります。</p>
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>配信アドレスの設定</th>
                                                        <td>
                                                            <p>
                                                                [アドレスを統一する]場合、メンバーそれぞれの配信メールの差出人(From部分)が、"差出人名&lt;メーリングリストアドレス&gt;"へと置き換わります。<br>
                                                            </p>
                                                            <aside class="msg msg_caution mb0">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="note">
                                                                        &emsp;通常は[アドレスを統一する]を有効にしていただくことを推奨いたします。<br><br>
                                                                        [アドレスを統一する]が無効な場合、Gmail宛・米Yahoo！メール宛の送信メールが届かなくなることや、迷惑メールとして処理されることがあります。
                                                                    </p>
                                                                </div>
                                                            </aside>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>件名の編集</th>
                                                        <td><p>メーリングリストで配信するメールの件名の書式を設定します。</p>
                                                            <p>選択できる形式と例は次のとおりです。<br>
                                                               ここでは、タイトルを「sample」、配信されたメールの累計を「1234」通、配信するメールの件名を「メールの件名」とした場合のサンプルを表示しています。<br>
                                                               なお、タイトルには当該項目内のタイトルに入力した文字が使用されます。</p>
                                                            <table class="table table_use-caption">
                                                                <caption>選択できる書式と配信されるメールの件名例</caption>
                                                                <thead>
                                                                    <tr>
                                                                        <th>形式</th>
                                                                        <th>メールの件名例</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>件名</td>
                                                                        <td>メールの件名(件名に手を加えません。)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル] 件名</td>
                                                                        <td>[sample] メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル) 件名</td>
                                                                        <td>(sample) メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[通し番号] 件名</td>
                                                                        <td>[01234]メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(通し番号) 件名</td>
                                                                        <td>(01234)メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル:通し番号] 件名</td>
                                                                        <td>[sample:01234]メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル:通し番号) 件名</td>
                                                                        <td>(sample:01234)メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル,通し番号] 件名</td>
                                                                        <td>[sample,01234]メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル,通し番号) 件名</td>
                                                                        <td>(sample,01234)メールの件名</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>ヘッダーの設定</th>
                                                        <td>配信するメール本文の文頭に挿入される文章を設定します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>フッターの設定</th>
                                                        <td>配信するメール本文の文末に挿入される文章を設定します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>メールの配信前確認</th>
                                                        <td>メール配信前に、メーリングリスト管理者がメールの内容を確認する機能です。<br>
                                                                そのメールを配信することに対する承認・非承認の選択は、「管理者メールアドレス」で設定したメールアドレス宛に届くメールを用いて行います。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>メールの返信先設定</th>
                                                        <td>配信されたメールに返信した場合の返信先を、「そのメールの送信者」、または「メンバー全員」から選択します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>メールの容量制限</th>
                                                        <td><p>メーリングリストにて配信可能なメールサイズの上限を設定します。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>設定例</dt>
                                                                <dd>
                                                                    設定値とそれによって設定される上限値は下記の通りです。
                                                                    <ul class="ul">
                                                                        <li><em class="font-bold">〜500KB</em> … 500KBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜1MB</em> … 1MBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜3MB</em> … 3MBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜10MB</em> … 10MBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜15MB</em> … 15MBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜20MB</em> … 20MBを超えるメールは配信されません。</li>
                                                                        <li><em class="font-bold">〜30MB</em> … 30MBを超えるメールは配信されません。</li>
                                                                    </ul>
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>HTMLメール設定</th>
                                                        <td><p>配信メールでのHTMLメールの使用を許可するかどうかを設定します。</p>
                                                            <p> 【許可する】に設定した場合、HTML形式でメールの配信ができます。</p>
                                                            <p> 【許可しない】に設定した場合、HTML部分は除去されテキストのみの形式でメール配信されます。</p></td>
                                                    </tr>
                                                    <tr>
                                                        <th>ファイル添付設定</th>
                                                        <td><p>配信メールでファイルの添付を許可するかどうかを設定します。</p>
                                                            <p>【許可する】に設定した場合、ファイル添付があるメールの配信ができます。</p>
                                                            <p>【許可しない】に設定した場合、ファイル添付があるメールは配信できません。<br>
                                                               （ファイル添付があるメールは、送信者にエラーメールが届きます。）</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>自動入会メンバーの権限設定</th>
                                                        <td>公開ページや入会用フォームを介して登録されたメンバーに付与する権限を設定します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>システム・エラーメール<br>
                                                            受信設定</th>
                                                        <td><p> システム・エラーメールの受け取りに関する情報を設定できます。【受信する】に設定した場合、メーリングリスト配信時に発生したシステム・エラーの内容が管理者メールアドレス宛に送信されます。 </p>
                                                            <p>例のようなメールを受信した場合は、本文内に記載されているメールアドレスが存在しないため、配信エラーとなっています。<br>
                                                                その場合は該当メールアドレスをメンバー一覧から削除してください。</p>
                                                            <div class="border border_blue font-s">
                                                            例）<br>
                                                                件名： Undelivered Mail Returned to Sender<br>
                                                                差出人： Mail Delivery System &lt;MAILER-DAEMON@*****.***.jp&gt;<br>
                                                                メール本文：<br>
                                                                &lt;sample@example.jp&gt;:host example.jp[***.***.***.***] said: *** *.*.*<br>
                                                                &lt;sample@example.jp&gt;... User unknown (in reply to RCPT TO command)
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_7.png" alt="環境設定"></p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-e">
                                <h4 id="ml04" class="section_ttl">4.システムメール</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-e01">システムメールの設定</h5>
                                        <div class="block_body">
                                            <p>「システムメール」より、メーリングリストのシステムが送信するメールについて設定を行ってください。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>入会確認のメール</dt>
                                                <dd>
                                                    <p>公開ページや入会用フォームを介して、メーリングリストへの入会申請があった場合に、その申請者宛に返送される入会確認のメールです。</p>
                                                    <p>メーリングリストの概要などを記載してください。</p>

                                                    <aside class="msg msg_notice mt30">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <p class="mb5 font-bold">###認証URL###</p>
                                                        <p>
                                                            この文字列には、メーリングリストへの入会を完了させるためのURLが挿入されます。<br>
                                                            誤って削除しないよう、ご注意ください。
                                                        </p>
                                                        <p>
                                                            申請者は、このURLをクリックすることで、入会することができます。<br>
                                                            そのため、「###認証URL###」をクリックを促す文章と共に記載することが推奨されます。
                                                        </p>
                                                    </aside>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_8.png" alt="入会確認のメール画面"></p>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>退会確認のメール</dt>
                                                <dd>
                                                    <p>公開ページや退会用フォームを介して、メーリングリストからの退会申請があった場合に、申請者宛に返送される退会確認のメールです。</p>
                                                    <p>メーリングリストから退会する際の注意事項等を記載してください。</p>

                                                    <aside class="msg msg_notice mt30">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <p class="mb5 font-bold">###認証URL###</p>
                                                        <p>
                                                            この文字列には、メーリングリストへの退会を完了させるためのURLが挿入されます。<br>
                                                            誤って削除しないよう、ご注意ください。
                                                        </p>
                                                        <p>
                                                            申請者は、このURLをクリックすることで、退会することができます。<br>
                                                            そのため、「###認証URL###」をクリックを促す文章と共に記載することが推奨されます。
                                                        </p>
                                                    </aside>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_9.png" alt="退会確認のメール画面"></p>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>入会完了のメール</dt>
                                                <dd>
                                                    <p>メーリングリストへの入会が完了したユーザーに送信される入会完了のメールです。<br>
                                                    メーリングリストの利用に関する注意事項などを記載してください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_10.png" alt="入会完了のメール画面"></p>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>退会完了のメール</dt>
                                                <dd>
                                                    <p>メーリングリストからの退会が完了したユーザーに送信される退会完了のメールです。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_11.png" alt="退会完了のメール画面"></p>
                                                </dd>
                                            </dl>

                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-f">
                                <h4 id="ml05" class="section_ttl">5.メンバー登録</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 id="link-previous-f01" class="block_ttl">管理画面からメールアドレスを指定して追加する方法</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li>
                                                    <p>メーリングリスト管理画面にログインしてください。</p>
                                                </li>
                                                <li>
                                                    <p>メンバーを1件ずつ登録する場合、［メンバーの管理］メニューにある「メンバーの登録・入会確認」にて、登録するメンバーのメールアドレスを入力し、『メーリングリストに登録する』をクリックしてください。</p>
                                                    <p>複数のメンバーを一括で登録する場合、［メンバーの管理］メニューの画面下部にある「メンバーの一括登録はこちら」に進み、改行区切りで複数のメールアドレスを入力し、『メーリングリストに登録する』をクリックしてください。
                                                    </p>
                                                    <p>
                                                        その際、これから登録するユーザーに配信権限を与えるかどうかを選択できます。<br>
                                                        メールアドレスの入力欄横にあるセレクトボックスから任意の権限を選択してください。
                                                    </p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>登録できないメールアドレスについて</dt>
                                                        <dd>
                                                            <p>メーリングリスト設定ドメインを用いたメールアドレスで、「@」（アットマーク）より前が以下のものは登録不可としています。</p>
                                                            <div class="border border_gray">
                                                                <p>root / postmaster / MAILER-DAEMON / msgs / nobody / majordomo / listserv / listproc</p>
                                                                <p>メーリングリストアドレスのアカウント名（※）-help<br>
                                                                    メーリングリストアドレスのアカウント名（※）-subscribe<br>
                                                                    メーリングリストアドレスのアカウント名（※）-unsubscribe</p>
                                                                <p class="note note_x2">（※）メーリングリストアドレスが「test@example.com」の場合、test-help@、test-subscribe@、test-unsubscribe@となります。</p>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th class="w20per">メールアドレス</th>
                                                                <td>登録されるユーザーのメールアドレスを入力します。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メモ</th>
                                                                <td><p>入力した内容は、「メンバー一覧」のリストにのみ表示されます。<br>
                                                                       登録するユーザーのメモ（名前・備考等）にご利用ください。</p>
                                                                    <p class="note">※公開ページに設置した入会用フォームからの登録と、任意のWebページに設置した入会用フォームからの登録の場合、メモは設定できません。<br>
                                                                       登録完了後に設定変更より変更してください。</p></td>
                                                            </tr>
                                                            <tr>
                                                                <th>権限</th>
                                                                <td>登録するユーザーの権限を指定してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>登録方法</th>
                                                                <td><p>登録方法を選択します。<br>
                                                                        選択できる形式と処理内容は次のとおりです。</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信する</dt>
                                                                        <dd> 登録されるユーザーに入会確認を行わずに登録します。入力したメールアドレス宛に登録完了の通知をメールで送信します。 </dd>
                                                                        <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信しない</dt>
                                                                        <dd> 登録されるユーザーに入会確認を行わずに登録します。入力したメールアドレスへの登録完了の通知は行われません。 </dd>
                                                                        <dt><i class="ico ico_square-fill"></i>入会確認用URLを送信をする</dt>
                                                                        <dd> 登録されるユーザーに入会確認を行って登録します。入力したメールアドレス宛に入会確認メールが送信されます。<br>
                                                                            ユーザは、メールに記載された入会用ＵＲＬをクリックすることで、メーリングリストへの登録を完了させます。 </dd>
                                                                    </dl>
                                                                    <p>登録方法の選択に関わらず、管理者メールアドレス宛の登録完了の通知は送信されます。</p></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_12.png" alt="メンバーの登録・入会確認"></p>
                                                </li>
                                            </ol>
                                        </div>
                                    </section>
                                    <section class="block">
                                        <h5 id="link-previous-f02" class="block_ttl">公開ページに設置した入会用フォームを利用する方法</h5>
                                        <div class="block_body">
                                            <p>ここでは公開ページに関する設定を行います。<br>
                                            公開ページは、過去ログの閲覧機能や、メーリングリストの入会・退会を申し込む機能を提供するページです。<br>
                                            過去ログ閲覧機能は、過去に配信されたメールを閲覧する機能を提供します。<br>
                                            入会・退会を申し込む機能は、入会・退会用フォームを介して、入退会を行わせる機能を提供します。</p>
                                            <ol class="ol">
                                                <li>
                                                    <p>メーリングリスト管理画面にログインしてください。</p>
                                                </li>
                                                <li>
                                                    <p>［公開設定］メニューから公開ページの公開設定を行ってください。</p>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th class="w20per">ページの公開</th>
                                                                <td>「公開」としてください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>公開ページのページのURL</th>
                                                                <td>公開ページのURLを表示します。<br>
                                                                このURLにアクセスすると、公開ページに遷移します。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>過去ログの閲覧機能</th>
                                                                <td><p>メーリングリストの公開ページ内で、過去に配信したメールの内容を閲覧するための機能を設置するかどうかを設定します。</p>
                                                                    <p class="note">※メール配信時に添付したファイルの閲覧はできません。</p>
                                                                    <p>閲覧できるユーザーを制限する場合は、次の「過去ログ保護パスワード」を設定してください。</p></td>
                                                            </tr>
                                                            <tr>
                                                                <th>過去ログの保護パスワード</th>
                                                                <td><p>過去ログの閲覧機能の利用を制限するためのパスワードを設定します。<br>
                                                                       初期状態では、保護パスワードを使用しません。「保護パスワードを設定する」にチェックを入れた後に、保護パスワードを設定します。 </p>
                                                                    <aside class="msg msg_caution mb0">
                                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                        <div class="msg_body">
                                                                            <p class="note">「過去ログの閲覧機能」が「あり」で、かつ「過去ログの保護パスワード」を設定しない場合は、メーリングリストのメンバー以外の第三者でも、過去配信の閲覧が可能となりますので、ご注意ください。</p>
                                                                        </div>
                                                                    </aside>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>入会用フォーム</th>
                                                                <td>「あり」としてください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>退会用フォーム</th>
                                                                <td>メーリングリストの公開ページに、メーリングリストからの退会用フォームを設置するかどうかを設定します。</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_13.png" alt="詳細設定"></p>

                                                </li>
                                                <li>
                                                    <p>公開ページを公開する場合は、「公開ページのURL」項目に記載されているURLをメーリングリストのメンバに通知してください。</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>メーリングリストに入会するユーザーによる作業の手順</dt>
                                                        <dd>
                                                            <ol class="ol">
                                                                <li>メーリングリストへの入会を希望する人は、メーリングリストの公開ページに設置されている入会用フォームにメールアドレスを入力し、メーリングリストの入会申請を行ってください。</li>
                                                                <li>「1」で入力したメールアドレス宛に、メーリングリストへの入会に関するメールが送信されます。<br>
                                                                    送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして入会処理を完了させてください。</li>
                                                            </ol>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ol>
                                        </div>
                                    </section>
                                    <section class="block">
                                        <h5 id="link-previous-f03" class="block_ttl">空メール自動入会用メールアドレスを利用する方法</h5>
                                        <div class="block_body">
                                            <p>自動入会用のメールアドレスにメンバーが空メールを送信することでメンバー登録をする方法です。<br>
                                                空メール自動入会用メールアドレスはメーリングリストアドレスの「@」(アットマーク)より前の部分に「-apply」を付加したメールアドレスとなります。</p>
                                            <p class="font-bold">例：mailinglist-apply@example.com</p>
                                            <ol class="ol mt30">
                                                <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                <li>
                                                    <p>［自動入会機能］にある「空メール自動入会用メールアドレス」の「自動入会を有効にする」を選択し、「設定を保存する」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_19.png" alt="空メール自動入会の設定"></p>
                                                </li>
                                                <li><p>「空メール自動入会用メールアドレス」をメールもしくはX(旧Twitter)などのソーシャルメディアなどの任意の方法で周知してください。</p></li>
                                                <li>
                                                    <p>空メール自動入会用メールアドレスがメールを受信すると送信元のメールアドレスを自動登録します。</p>
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>メーリングリスト作成前に既に本機能用メールアドレスと同一のメールアドレスが存在する場合は、利用できません。<br>
                                                                その場合はメーリングリスト管理画面の［自動入会機能］にてエラーメッセージが表示されます。</p>
                                                        </div>
                                                    </aside>
                                                </li>
                                            </ol>
                                        </div>
                                    </section>
                                    <section class="block">
                                        <h5 id="link-previous-f04" class="block_ttl">任意のWebページにて入会窓口を設置する方法</h5>
                                        <div class="block_body">

                                            <p>
                                                任意のWebページに入会用フォームを貼り付け、入会用フォームからメンバーを登録する方法です。<br>
                                                各フォームの利用はWebサイト1ページにつき1つまで可能です。
                                            </p>

                                            <ol class="ol mt30">
                                                <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                <li>
                                                    <p>［自動入会］にある入会用フォームを任意のWEBページに貼り付けてください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_14.png" alt="入会・退会用フォーム"></p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>メーリングリストに入会する人の手順</dt>
                                                        <dd>
                                                            <ol class="ol">
                                                                <li>メーリングリストへの入会を希望する人は、入会用フォームタグが設置されているWEBページの入会用フォームにメールアドレスを入力し、メーリングリストの入会申請を行ってください。</li>
                                                                <li>「1」で入力したメールアドレス宛に、メーリングリストへの入会に関するメールが送信されます。<br>
                                                                送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして入会処理を完了させてください。</li>
                                                            </ol>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ol>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-g">
                                <h4 id="ml06" class="section_ttl">6.メンバー管理</h4>
                                <div class="section_body">

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-g01">メンバーの権限を変更する方法</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                <li><p>［メンバーの管理］メニューに表示されているメンバー一覧から、権限を変更したいユーザーの[設定変更]をクリックしてください。</p></li>
                                                <li><p>「権限」で任意の権限を選択し、「設定を保存する」をクリックしてください。</p></li>
                                            </ol>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-g02">メンバーを削除する方法</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                <li><p>［メンバーの管理］メニューに表示されているメンバー一覧から、削除したいメンバーの[削除]をクリックしてください。</p></li>
                                            </ol>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-g03">メンバーの一覧表示</h5>
                                        <div class="block_body">
                                            <p>メンバーの一覧表示画面で、現在登録しているメンバーのメールアドレスを一覧で確認することができます。<br>
                                            画面に表示されたアドレスをコピーするなどしてバックアップ保管用にご利用ください。</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-g04">メンバーの一括削除</h5>
                                        <div class="block_body">
                                            <p>現在登録されているメンバーを一括で削除することができます。<br>
                                            (メール配信時にその都度配信メンバーを変更したい場合などに、[メンバーの一括登録]機能と併せてご利用するなどしてご活用ください。)</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-h">
                                <h4 id="ml07" class="section_ttl">7.メールの配信前確認</h4>
                                <div class="section_body">
                                    <p>メールの配信前確認機能は、メーリングリストに送信されたメールを、管理者の承認後に配信する機能です。<br>
                                    また、当機能を有効にすると、メンバー以外（外部のメールアドレス）からもメーリングリストへのメール配信が可能となります。</p>
                                    <p>当機能を有効にする場合は、「環境設定」より「メールの配信前確認」を【確認する】に設定し、併せて承認メールの送信先となる「管理者メールアドレス」の確認や設定を行ってください。</p>
                                    <p>当機能を有効にすることで、メーリングリストアドレスに送信されたメールは、まずは管理者メールアドレス宛に届きます。<br>
                                    管理者にて届いたメールを確認し、承認を行うことで、メンバーへメールを配信することが可能です。<br>
                                    これにより、迷惑メールが配信されることを防止できます。</p>

                                    <aside class="msg msg_notice mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能を利用する場合、必ずテスト配信を行ってください</h6>
                                        <p>
                                            一部メールクライアントで、承認後にメール配信が完了しない場合があります。<br>
                                            本機能をご利用の前に、テスト配信を行ってください。
                                        </p>
                                    </aside>

                                    <section class="block">
                                        <h5 class="block_ttl mt50" id="link-previous-h01">承認方法詳細</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li><p>管理者メールアドレス宛に、件名が「submission to moderators」のメールが届きます。</p></li>
                                                <li><p>添付されているメールを参照し、当該メールの配信を承認するかどうかを判断してください。</p></li>
                                                <li>
                                                    <p>配信を承認する場合は、メールに記載されている「承認コードの送信先」に「承認のコード」を送信します。</p>
                                                    <p class="note">※その際、件名は空欄とし、「承認コード」はメール本文に記載してください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_15.png" alt="「承認のコード」を送信"></p>
                                                    <p>配信を許可しない場合、特に操作は不要です。</p>
                                                </li>
                                                <li><p>承認後、管理者メールアドレス宛に、タイトルが「moderated article[****.......]」の配信完了通知が届きます。<br>
                                                承認後は配信完了通知を必ずご確認ください。</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-i">
                                <h4 id="ml08" class="section_ttl">8.過去に配信されたメールの確認</h4>
                                <div class="section_body">

                                    <ol class="ol">
                                        <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                        <li>
                                            <p>［配信済みメール］メニューから過去に配信されたメールの内容が確認できます。</p>
                                            <p class="note">※メール配信時に添付したファイルの確認はできません。</p>
                                        </li>
                                    </ol>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-j">
                                <h4 id="ml09" class="section_ttl">9.配信エラー管理</h4>
                                <div class="section_body">

                                    <p>
                                        メールの配信がエラーとなったメールアドレスを集計し、エラーが一定回数に達したメールアドレスをメンバーから削除することが可能です。
                                    </p>

                                    <aside class="msg msg_notice mt30">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                        <p>
                                            携帯電話各社によっては、受信不可となったアドレスが1件でも存在すると、エラーが発生しなかったメールアドレスもすべて「エラー回数」として集計される場合があります。
                                        </p>
                                    </aside>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-j01">自動削除</h5>
                                        <div class="block_body">
                                            <p>メーリングリストを配信できなかったメンバーに対する各種設定を行うことができます。</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>自動削除の有効化</th>
                                                        <td>初期設定は【自動削除を有効にする】となっています。<br>
                                                        本機能を無効にすることで配信できないメールアドレス宛てにメール送信を試みる頻度が増加し他のお客様にも甚大な影響を及ぼす可能性が高くなります。<br>
                                                        メーリングリストの管理者様におかれましては、「エラーメール集計」にてメール送信に失敗した宛先を注視いただき、複数回に渡り送信出来なかったメールアドレスをメンバーから除外いただくなどの別途対応が必要となります。
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>自動削除を実行するエラー回数</th>
                                                        <td>メールアドレスに対する配信エラーの累計数を設定できます。<br>
                                                        一週間の内に設定した回数を超えて配信エラーとなったメールアドレスはメンバーから自動削除されます。
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>メール通知</th>
                                                        <td>メンバーから自動削除されたメールアドレスを、管理者メールアドレス宛に通知を行うかどうか設定できます。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_16.png" alt="自動削除設定"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-j02">削除済みメールアドレス</h5>
                                        <div class="block_body">
                                            <p>自動削除されたメンバーの確認と再登録を行うことができます。</p>
                                            <ol class="ol">
                                                <li><p>一覧をクリアする場合、【削除履歴のクリア】ボタンをクリックしてください。</p></li>
                                                <li><p>【選択したアドレスを再登録する】場合、一覧から再登録を行うメールアドレスを選択してください。</p></li>
                                                <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                            </ol>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_17.png" alt="削除済みメールアドレス"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-j03">エラーメール集計</h5>
                                        <div class="block_body">
                                            <p>エラーとなったメールアドレス毎の集計と、詳細を確認することができます。</p>
                                            <ol class="ol">
                                                <li><p>配信エラーの内容を確認することができます。</p></li>
                                                <li><p>配信エラーとなっているメールアドレスをメンバーから削除することができます。</p></li>
                                                <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                            </ol>
                                            <p><img class="img" src="../img/manual/previous/man_mail_mailinglist_18.png" alt="エラーメール集計"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-j04">エラーメール詳細</h5>
                                        <div class="block_body">
                                            <p>エラー戻りメールの発生頻度を確認することができます。</p>
                                            <p>
                                                なお、本機能では、エラーメールの詳細を確認することはできません。<br>
                                                エラーメールの詳細を確認したい場合は、環境設定の[システム・エラーメール受信設定]を【受信する】にし、【管理者メールアドレス】にて確認してください。
                                            </p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-k">
                                <h4 id="ml10" class="section_ttl">10.SSLの利用</h4>
                                <div class="section_body">

                                    <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メーリングリスト」の利用が可能です。<br>
                                    設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                    <ul class="list list_arrow-right">
                                        <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                        <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                    </ul>
                                    <p>独自SSLが利用可能になりましたら、下記のURLを、必要に応じてメンバーに通知してください。</p>
                                    <div class="border border_gray">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>管理ツールのアドレス</p>
                                        <p class="mb0">https://ドメイン名/xmailinglist/メーリングリスト名/admin</p>
                                    </div>
                                    <div class="border border_gray">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>メンバー向け公開ページ</p>
                                        <p class="mb0">https://ドメイン名/xmailinglist/メーリングリスト名/</p>
                                    </div>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                        <p>
                                            SSLをご利用の場合であっても、「公開設定」の[公開ページのURL]は変更されません。<br>
                                            上記URLのルールを参照してください。
                                        </p>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-l">
                                <h4 id="ml11" class="section_ttl">11.ご利用環境について</h4>
                                <div class="section_body">
                                    <p>一部のメールクライアントにて特定の条件に合致する場合、正常にメール配信が行われない場合がございます。</p>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">Macメール<br>（Apple Mail）</th>
                                                <td>HTML形式でファイルを添付した際のメール送信、<br>
                                                PDFファイルを圧縮せずに直接ファイル添付した際のメール送信</td>
                                            </tr>
                                            <tr>
                                                <th>Becky!Internet Mail</th>
                                                <td>HTML形式でファイルを添付した際のメール送信</td>
                                            </tr>
                                            <tr>
                                                <th>Outlook.com<br>（Microsoft社提供の無料WEBメールサービス）</th>
                                                <td>メールの配信前確認機能を利用したメール配信</td>
                                            </tr>
                                            <tr>
                                                <th>LotusNotes</th>
                                                <td>ファイルを添付した際のメール送信</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                    <li><a href="#link-a">メーリングリストについて</a>
                                        <ul>
                                            <li><a href="#link-a1">メーリングリストとは</a></li>
                                            <li><a href="#link-a2">「メーリングリスト」機能について</a></li>
                                            <li><a href="#link-a3">メーリングリストのご利用手順</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">1.メーリングリストの作成</a>
                                        <ol>
                                            <li><a href="#link-b1">1.メーリングリストメニューへ</a></li>
                                            <li><a href="#link-b2">2.追加メニューへ</a></li>
                                            <li><a href="#link-b3">3.メーリングリストの作成</a></li>
                                            <li><a href="#link-b4">4.作成完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">2.ログイン</a>
                                        <ul>
                                            <li><a href="#link-c1">メーリングリスト管理画面へ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-d">3.環境設定</a>
                                        <ul>
                                            <li><a href="#link-d1">メーリングリストの環境設定</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-e">4.システムメール</a>
                                        <ul>
                                            <li><a href="#link-e1">システムメールの設定</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-f">5.メンバー登録</a>
                                        <ul>
                                            <li><a href="#link-f1">管理画面からメールアドレスを指定して追加する方法</a></li>
                                            <li><a href="#link-f2">公開ページに設置した入会用フォームを利用する方法</a></li>
                                            <li><a href="#link-f3">空メール自動入会用メールアドレスを利用する方法</a></li>
                                            <li><a href="#link-f4">任意のWebページにて入会窓口を設置する方法</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-g">6.メンバー管理</a>
                                        <ul>
                                            <li><a href="#link-g1">メンバーの権限を変更する方法</a></li>
                                            <li><a href="#link-g2">メンバーを削除する方法</a></li>
                                            <li><a href="#link-g3">メンバーの一覧表示</a></li>
                                            <li><a href="#link-g4">メンバーの一括削除</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-h">7.メールの配信前確認</a>
                                        <ul>
                                            <li><a href="#link-h1">承認方法詳細</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-i">8.過去に配信されたメールの確認</a></li>
                                    <li><a href="#link-j">9.配信エラー管理</a>
                                        <ul>
                                            <li><a href="#link-j1">自動削除</a></li>
                                            <li><a href="#link-j2">削除済みメールアドレス</a></li>
                                            <li><a href="#link-j3">エラーメール集計</a></li>
                                            <li><a href="#link-j4">エラーメール詳細</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-k">10.SSLの利用</a></li>
                                    <li><a href="#link-l">11.ご利用環境について</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_mailinglist.php">メーリングリスト機能に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">メーリングリストについて</h4>
                                        <div class="section_body">

                                            <section class="block">
                                                <h5 id="link-a1" class="block_ttl">メーリングリストとは</h5>
                                                <div class="block_body">
                                                    <p>メーリングリストとは、複数の相手に同じ内容のメールを送信するサービスです。<br>
                                                        メールで複数の相手に同じ内容のメールを送るためには、送信者が全員のメールアドレスを記入したメールを送信する必要がありますが、メーリングリストであれば、送信者がメーリングリストの専用アドレス宛にメールを送信するだけで、登録されているすべてのメールアドレスに配信できます。</p>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_1.png?date=2410" alt="「メール」を起動し『その他』をタップ"></p>
                                                    <p>メーリングリストを使えば、共通の趣味や目的を持つメンバー内で、簡単に情報を共有できます。</p>

                                                </div>
                                            </section>
                                            <section class="block">
                                                <h5 id="link-a2" class="block_ttl">「メーリングリスト」機能について</h5>
                                                <div class="block_body">
                                                    <p>
                                                        メーリングリストは、メーリングリストの作成後に、メンバー登録を行うだけでご利用いただけます。<br>
                                                        ご利用の際は、メーリングリストアドレスをメンバーに公開し、そのアドレス宛にメールを送るようメンバーに通知してください。
                                                    </p>
                                                    <p>
                                                        初期状態では、メーリングリストに登録されているメンバーのみが、メーリングリストを利用してメールを配信できます。<br>
                                                        メンバー以外からも配信する場合は、追加で「<a href="#link-h">メールの配信前確認</a>」を設定してください。
                                                    </p>
                                                    <p>
                                                        メーリングリストの送信数が一定の件数を超過すると、利用を制限する場合があります。<br>
                                                        送信件数の目安は、「<a href="man_mail_spec.php">送受信制限</a>」をご参照ください。<br>
                                                        なお、10人のメンバーに1通のメールを配信した場合は、10通とカウントします。
                                                    </p>
                                                    <p>
                                                        メーリングリストは、プランごとに作成できる数が異なります。
                                                    </p>
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>プラン</th>
                                                            <th>作成件数</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>スタンダードプラン</td>
                                                            <td>20件</td>
                                                        </tr>
                                                        <tr>
                                                            <td>プレミアムプラン</td>
                                                            <td>30件</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ビジネスプラン</td>
                                                            <td>40件</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>また、各メーリングリストには、500件のメールアドレスをメンバーとして登録できます。</p>

                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-a3" class="block_ttl">メーリングリストのご利用手順</h5>
                                                <div class="block_body">
                                                    <p>メーリングリストは、<a href="#link-b">メーリングリストの作成</a>後に、<a href="#link-f">メンバー登録</a>を行うだけでご利用いただけます。<br>
                                                        ご利用の際は、メーリングリストアドレスをメンバーに公開し、そのアドレス宛にメールを送るようメンバーに通知してください。</p>
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>試用期間中のサーバーアカウントでは、メーリングリストはご利用になれません。</p>
                                                            <p>携帯電話各社のメールアドレスで「なりすましメール対策」を設定されていると、メーリングリストから配信されるメールを受信できない場合があります。その際は、メーリングリストのメールアドレスを受信できるよう、受信側で許可の設定を行ってください。</p>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">1.メーリングリストの作成</h4>

                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. メーリングリストメニューへ</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「メーリングリスト」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailinglist_2.png?date=2410" alt="「メーリングリスト」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. 追加メニューへ</h5>
                                                    <div class="box_body">
                                                        <p>「メーリングリストを追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailinglist_3.png?date=2410" alt="「メーリングリストを追加」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3. メーリングリストの作成</h5>
                                                    <div class="box_body">
                                                        <p>作成用のフォームが表示されるので、各項目を設定してください。<br>
                                                            各項目の設定完了後、「追加する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailinglist_4.png?date=2410" alt="作成画面"></p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per">メーリングリスト名</th>
                                                                <td>メーリングリストの名前を入力してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メーリングリストアドレス</th>
                                                                <td>
                                                                    <p>メーリングリストのアドレスを半角英数字で入力してください。</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>メーリングリストアドレスについて</dt>
                                                                        <dd>メーリングリストのメンバーへのメール配信に使用されるメールアドレスです。<br>
                                                                            メーリングリストの管理者、または[メール受信+メール配信]権限を持つメンバーは、メーリングリストで指定したアドレス宛にメールを送信することで、メンバー全員にそのメールを配信できます。
                                                                            <br>なお、作成済みのメールアドレスは使用できません。</dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>管理画面パスワード</th>
                                                                <td>メーリングリスト管理ツールのログインパスワードです。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メモ</th>
                                                                <td>メーリングリストの利用用途などをご記入ください。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <section class="msg">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h6>
                                                            <div class="msg_body">
                                                                <p>
                                                                    「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                                    詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                                                </p>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b4" class="box_ttl">4. 作成完了</h5>
                                                    <div class="box_body">
                                                        <p>以上で完了です。</p>
                                                        <p>「メーリングリスト」の一覧から、[管理]のボタンをクリックしてメーリングリストの管理画面に遷移することが可能です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailinglist_5.png?date=2410" alt="[管理]のボタンをクリック"></p>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用制限について</h6>
                                                            <div class="msg_body">
                                                                <p>メーリングリストは、プランごとに作成できる数が異なります。</p>
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>プラン</th>
                                                                        <th>作成件数</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>スタンダードプラン</td>
                                                                        <td>20件</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>プレミアムプラン</td>
                                                                        <td>30件</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ビジネスプラン</td>
                                                                        <td>40件</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>また、各メーリングリストには、500件のメールアドレスをメンバーとして登録できます。</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                    <section id="link-c" class="section">
                                        <h4 class="section_ttl">2.ログイン</h4>

                                        <div class="section_body">
                                            <section class="block">
                                                <h5 id="link-c1" class="block_ttl">メーリングリスト管理画面へ</h5>
                                                <div class="block_body">
                                                    <p>「メーリングリスト」の一覧から、作成したメールマガジンの「ログイン」をクリックし、ログインを完了してください。<br>
                                                        ログイン状態は、管理画面右上の「ログアウト」ボタンをクリックすることで、解除されます。<br>
                                                        ログアウトした場合は、ログアウト後に表示される下記ログイン画面か、再度「メーリングリスト」の一覧画面からログインしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_6.png?date=2410" alt="「ログイン」をクリック"></p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th class="w30per">メーリングリストアドレス</th>
                                                            <td>「メーリングリストの一覧」に表示されている『メーリングリストアドレス』を入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>パスワード</th>
                                                            <td>
                                                                <p>メーリングリストを作成する際に指定した「管理画面パスワード」を入力してください。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>パスワードが不明な場合</dt>
                                                                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の 「メーリングリスト一覧」に表示されている当該メーリングリストの『変更』メニューにて、新たなパスワードを設定することが可能です。</dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section id="link-d" class="section">
                                        <h4 class="section_ttl">3.環境設定</h4>

                                        <div class="section_body">
                                            <section class="block">
                                                <h5 id="link-d1" class="block_ttl">メーリングリストの環境設定</h5>
                                                <div class="block_body">
                                                    <p>メーリングリストの管理画面内で、「環境設定」メニューへと進み、環境設定を行ってください。</p>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_7.png?date=2410" alt="環境設定"></p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th class="w20per">メーリングリスト名</th>
                                                            <td>メーリングリストの名前を設定します。<br>
                                                                メーリングリスト作成時に設定したメーリングリスト名を変更できます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メーリングリストアドレス</th>
                                                            <td>メーリングリストの配信に使用しているメールアドレスです。<br>
                                                                メーリングリストの管理者と[メール受信＋メール配信]権限を持つメンバーが、当該アドレスにメールを送信することで、メンバー全員にそのメールが配信されます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理者メールアドレス</th>
                                                            <td><p>管理者が使用するメールアドレスを設定します。<br>
                                                                    設定を行うことで、当該メールアドレスに、メンバー登録の完了通知やシステム・エラーメールが送信されるようにできます。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>登録できないメールアドレスについて</dt>
                                                                    <dd>
                                                                        <p>メーリングリスト設定ドメインを用いたメールアドレスで、「@」（アットマーク）より前が以下のものは登録不可としています。</p>
                                                                        <div class="border border_gray">
                                                                            <p>root / postmaster / MAILER-DAEMON / msgs / nobody / majordomo / listserv / listproc</p>
                                                                            <p>メーリングリストアドレスのアカウント名（※）-help<br>
                                                                                メーリングリストアドレスのアカウント名（※）-subscribe<br>
                                                                                メーリングリストアドレスのアカウント名（※）-unsubscribe</p>
                                                                            <p class="note note_x2 mb0">（※）メーリングリストアドレスが「test@example.com」の場合、test-help@、test-subscribe@、test-unsubscribe@となります。</p>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>配信アドレスの設定</th>
                                                            <td>
                                                                <p>
                                                                    [アドレスを統一する]場合、メンバーそれぞれの配信メールの差出人(From部分)が、"差出人名&lt;メーリングリストアドレス&gt;"へと置き換わります。<br>
                                                                </p>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                    <div class="msg_body">
                                                                        <p class="mb5">
                                                                            通常は[アドレスを統一する]を有効にしていただくことを推奨いたします。<br><br>
                                                                            [アドレスを統一する]が無効な場合、Gmail宛・米Yahoo！メール宛の送信メールが届かなくなることや、迷惑メールとして処理されることがあります。
                                                                        </p>
                                                                    </div>
                                                                </aside>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>件名の編集</th>
                                                            <td><p>メーリングリストで配信するメールの件名の書式を設定します。</p>
                                                                <p>選択できる形式と例は次のとおりです。<br>
                                                                    ここでは、タイトルを「sample」、配信されたメールの累計を「1234」通、配信するメールの件名を「メールの件名」とした場合のサンプルを表示しています。<br>
                                                                    なお、タイトルには当該項目内のタイトルに入力した文字が使用されます。</p>
                                                                <table class="table table_use-caption">
                                                                    <caption>選択できる書式と配信されるメールの件名例</caption>
                                                                    <thead>
                                                                    <tr>
                                                                        <th>形式</th>
                                                                        <th>メールの件名例</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>件名</td>
                                                                        <td>メールの件名(件名に手を加えません。)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル] 件名</td>
                                                                        <td>[sample] メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル) 件名</td>
                                                                        <td>(sample) メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[通し番号] 件名</td>
                                                                        <td>[1234] メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(通し番号) 件名</td>
                                                                        <td>(1234) メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル:通し番号] 件名</td>
                                                                        <td>[sample:1234] メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル:通し番号) 件名</td>
                                                                        <td>(sample:1234) メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>[タイトル,通し番号] 件名</td>
                                                                        <td>[sample,1234] メールの件名</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(タイトル,通し番号) 件名</td>
                                                                        <td>(sample,1234) メールの件名</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>ヘッダーの設定</th>
                                                            <td>配信するメール本文の文頭に挿入される文章を設定します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>フッターの設定</th>
                                                            <td>配信するメール本文の文末に挿入される文章を設定します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールの配信前確認</th>
                                                            <td>メール配信前に、メーリングリスト管理者がメールの内容を確認する機能です。<br>
                                                                そのメールを配信することに対する承認・非承認の選択は、「管理者メールアドレス」で設定したメールアドレス宛に届くメールを用いて行います。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールの返信先設定</th>
                                                            <td>配信されたメールに返信した場合の返信先を、「そのメールの送信者」、または「メンバー全員」から選択します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールの容量制限</th>
                                                            <td><p>メーリングリストにて配信可能なメールサイズの上限を設定します。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>設定例</dt>
                                                                    <dd>
                                                                        設定値とそれによって設定される上限値は下記の通りです。
                                                                        <ul class="ul">
                                                                            <li><em class="font-bold">〜500KB</em> … 500KBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜1MB</em> … 1MBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜3MB</em> … 3MBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜10MB</em> … 10MBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜15MB</em> … 15MBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜20MB</em> … 20MBを超えるメールは配信されません。</li>
                                                                            <li><em class="font-bold">〜30MB</em> … 30MBを超えるメールは配信されません。</li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>HTMLメール設定</th>
                                                            <td><p>配信メールでのHTMLメールの使用を許可するかどうかを設定します。</p>
                                                                <p> 【許可する】に設定した場合、HTML形式でメールの配信ができます。</p>
                                                                <p> 【許可しない】に設定した場合、HTML部分は除去されテキストのみの形式でメール配信されます。</p></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ファイル添付設定</th>
                                                            <td><p>配信メールでファイルの添付を許可するかどうかを設定します。</p>
                                                                <p>【許可する】に設定した場合、ファイル添付があるメールの配信ができます。</p>
                                                                <p>【許可しない】に設定した場合、ファイル添付があるメールは配信できません。<br>
                                                                    （ファイル添付があるメールは、送信者にエラーメールが届きます。）</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>自動入会メンバーの権限設定</th>
                                                            <td>公開ページや入会用フォームを介して登録されたメンバーに付与する権限を設定します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>システム・エラーメール<br>
                                                                受信設定</th>
                                                            <td><p> システム・エラーメールの受け取りに関する情報を設定できます。【受信する】に設定した場合、メーリングリスト配信時に発生したシステム・エラーの内容が管理者メールアドレス宛に送信されます。 </p>
                                                                <p>例のようなメールを受信した場合は、本文内に記載されているメールアドレスが存在しないため、配信エラーとなっています。<br>
                                                                    その場合は該当メールアドレスをメンバー一覧から削除してください。</p>
                                                                <div class="border border_blue font10">
                                                                    例）<br>
                                                                    件名： Undelivered Mail Returned to Sender<br>
                                                                    差出人： Mail Delivery System &lt;MAILER-DAEMON@*****.***.jp&gt;<br>
                                                                    メール本文：<br>
                                                                    &lt;sample@example.jp&gt;:host example.jp[***.***.***.***] said: *** *.*.*<br>
                                                                    &lt;sample@example.jp&gt;... User unknown (in reply to RCPT TO command)
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section id="link-e" class="section">
                                        <h4 class="section_ttl">4.システムメール</h4>

                                        <div class="section_body">
                                            <section class="block">
                                                <h5 id="link-e1" class="block_ttl">システムメールの設定</h5>
                                                <div class="block_body">
                                                    <p>「システムメール」より、メーリングリストのシステムが送信するメールについて設定を行ってください。</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>入会確認のメール</dt>
                                                        <dd>
                                                            <p>公開ページや入会用フォームを介して、メーリングリストへの入会申請があった場合に、その申請者宛に返送される入会確認のメールです。</p>
                                                            <p>メーリングリストの概要などを記載してください。</p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="mb5 font-bold">###認証URL###</p>
                                                                    <p>この文字列は、メーリングリストへの入会を完了させるためのURLが挿入される部分を示します。<br>
                                                                        申請者は、このURLをクリックすることで、入会することができます。<br>
                                                                        そのため、「###認証URL###」をクリックを促す文章と共に記載することが推奨されます。</p>
                                                                </div>
                                                            </aside>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_8.png?date=2410" alt="入会確認のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>退会確認のメール</dt>
                                                        <dd>
                                                            <p>公開ページや退会用フォームを介して、メーリングリストからの退会申請があった場合に、申請者宛に返送される退会確認のメールです。</p>
                                                            <p>メーリングリストから退会する際の注意事項等を記載してください。</p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="mb5 font-bold">###認証URL###</p>
                                                                    <p>この文字列は、メーリングリストへの退会を完了させるためのURLが挿入される部分を示します。<br>
                                                                        申請者は、このURLをクリックすることで、退会することができます。<br>
                                                                        そのため、「###認証URL###」をクリックを促す文章と共に記載することが推奨されます。</p>
                                                                </div>
                                                            </aside>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_9.png?date=2410" alt="退会確認のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>入会完了のメール</dt>
                                                        <dd>
                                                            <p>メーリングリストへの入会が完了したユーザーに送信される入会完了のメールです。<br>
                                                                メーリングリストの利用に関する注意事項などを記載してください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_10.png?date=2410" alt="入会完了のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>退会完了のメール</dt>
                                                        <dd>
                                                            <p>メーリングリストからの退会が完了したユーザーに送信される退会完了のメールです。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_11.png?date=2410" alt="退会完了のメール画面"></p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                    </section>

                                    <section id="link-f" class="section">
                                        <h4 class="section_ttl">5.メンバー登録</h4>

                                        <div class="section_body">

                                            <p>メーリングリストへのメンバー登録方法は大きく分けて4通りの方法があります。</p>
                                            <ul class="list list_arrow-down mb30">
                                                <li><a href="#link-f1">管理画面からメールアドレスを指定して追加する方法</a></li>
                                                <li><a href="#link-f2">公開ページに設置した入会用フォームを利用する方法</a></li>
                                                <li><a href="#link-f3">空メール自動入会用メールアドレスを利用する方法</a></li>
                                                <li><a href="#link-f4">任意のWebページにて入会窓口を設置する方法</a></li>
                                            </ul>

                                            <section class="block">
                                                <h5 id="link-f1" class="block_ttl">管理画面からメールアドレスを指定して追加する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>メーリングリスト管理画面にログインしてください。</p>
                                                        </li>
                                                        <li>
                                                            <p>［メンバーの管理］メニューにある「メンバーの登録・入会確認」にて、登録するメンバーのメールアドレスを入力し、『メーリングリストに登録する』をクリックしてください。</p>
                                                            <p>その際、これから登録するユーザーに配信権限を与えるかどうかを選択できます。<br>
                                                                メールアドレスの入力欄横にあるセレクトボックスから任意の権限を選択してください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_12.png?date=2410" alt="メンバーの登録・入会確認"></p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>登録できないメールアドレスについて</dt>
                                                                <dd>
                                                                    <p>メーリングリスト設定ドメインを用いたメールアドレスで、「@」（アットマーク）より前が以下のものは登録不可としています。</p>
                                                                    <div class="border border_gray">
                                                                        <p>root / postmaster / MAILER-DAEMON / msgs / nobody / majordomo / listserv / listproc</p>
                                                                        <p>メーリングリストアドレスのアカウント名（※）-help<br>
                                                                            メーリングリストアドレスのアカウント名（※）-subscribe<br>
                                                                            メーリングリストアドレスのアカウント名（※）-unsubscribe</p>
                                                                        <p class="note note_x2">（※）メーリングリストアドレスが「test@example.com」の場合、test-help@、test-subscribe@、test-unsubscribe@となります。</p>
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                            <aside class="msg msg_notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>複数のメンバーを一括で登録する場合</h6>
                                                                <div class="msg_body">
                                                                    <p>［メンバーの管理］メニューの画面下部にある「メンバーの一括登録はこちら」に進み、改行区切りで複数のメールアドレスを入力し、『メーリングリストに登録する』をクリックしてください。</p>
                                                                </div>
                                                            </aside>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w20per">メールアドレス</th>
                                                                    <td>登録されるユーザーのメールアドレスを入力します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>メモ</th>
                                                                    <td><p>入力した内容は、「メンバー一覧」のリストにのみ表示されます。<br>
                                                                            登録するユーザーのメモ（名前・備考等）にご利用ください。</p>
                                                                        <p class="note">※公開ページに設置した入会用フォームからの登録と、任意のWebページに設置した入会用フォームからの登録の場合、メモは設定できません。<br>
                                                                            登録完了後に設定変更より変更してください。</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>権限</th>
                                                                    <td>登録するユーザーの権限を指定してください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>登録方法</th>
                                                                    <td><p>登録方法を選択します。<br>
                                                                            選択できる形式と処理内容は次のとおりです。</p>
                                                                        <dl class="dl">
                                                                            <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信する</dt>
                                                                            <dd> 登録されるユーザーに入会確認を行わずに登録します。入力したメールアドレス宛に登録完了の通知をメールで送信します。 </dd>
                                                                            <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信しない</dt>
                                                                            <dd> 登録されるユーザーに入会確認を行わずに登録します。入力したメールアドレスへの登録完了の通知は行われません。 </dd>
                                                                            <dt><i class="ico ico_square-fill"></i>入会確認用URLを送信をする</dt>
                                                                            <dd> 登録されるユーザーに入会確認を行って登録します。入力したメールアドレス宛に入会確認メールが送信されます。<br>
                                                                                ユーザは、メールに記載された入会用ＵＲＬをクリックすることで、メーリングリストへの登録を完了させます。 </dd>
                                                                        </dl>
                                                                        <p>登録方法の選択に関わらず、管理者メールアドレス宛の登録完了の通知は送信されます。</p></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-f2" class="block_ttl">公開ページに設置した入会用フォームを利用する方法</h5>
                                                <div class="block_body">
                                                    <p>ここでは公開ページに関する設定を行います。<br>
                                                        公開ページは、過去ログの閲覧機能や、メーリングリストの入会・退会を申し込む機能を提供するページです。<br>
                                                        過去ログ閲覧機能は、過去に配信されたメールを閲覧する機能を提供します。<br>
                                                        入会・退会を申し込む機能は、入会・退会用フォームを介して、入退会を行わせる機能を提供します。</p>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>メーリングリスト管理画面にログインしてください。</p>
                                                        </li>
                                                        <li>
                                                            <p>［公開設定］メニューから公開ページの公開設定を行ってください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_13.png?date=2410" alt="詳細設定"></p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>「ページの公開」が『非公開』になっていたり、「入会用フォーム」が『なし』になっていると、この方法でのメンバー登録が行えません。</p>
                                                                </div>
                                                            </aside>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w20per">ページの公開</th>
                                                                    <td>「公開」としてください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>公開ページのページのURL</th>
                                                                    <td>公開ページのURLを表示します。<br>
                                                                        このURLにアクセスすると、公開ページに遷移します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>過去ログの閲覧機能</th>
                                                                    <td><p>メーリングリストの公開ページ内で、過去に配信したメールの内容を閲覧するための機能を設置するかどうかを設定します。</p>
                                                                        <p class="note">※メール配信時に添付したファイルの閲覧はできません。</p>
                                                                        <p>閲覧できるユーザーを制限する場合は、次の「過去ログ保護パスワード」を設定してください。</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>過去ログの保護パスワード</th>
                                                                    <td><p>過去ログの閲覧機能の利用を制限するためのパスワードを設定します。<br>
                                                                            初期状態では、保護パスワードを使用しません。「保護パスワードを設定する」にチェックを入れた後に、保護パスワードを設定します。 </p>
                                                                        <aside class="msg msg_caution mb0">
                                                                            <div class="msg_body">
                                                                                <p class="note">※「過去ログの閲覧機能」が「あり」で、かつ「過去ログの保護パスワード」を設定しない場合は、メーリングリストのメンバー以外の第三者でも、過去配信の閲覧が可能となりますので、ご注意ください。</p>
                                                                            </div>
                                                                        </aside>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>入会用フォーム</th>
                                                                    <td>「あり」としてください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>退会用フォーム</th>
                                                                    <td>メーリングリストの公開ページに、メーリングリストからの退会用フォームを設置するかどうかを設定します。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>


                                                        </li>
                                                        <li>
                                                            <p>公開ページを公開する場合は、「公開ページのURL」項目に記載されているURLをメーリングリストのメンバに通知してください。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>メーリングリストに入会するユーザーによる作業の手順</dt>
                                                                <dd>
                                                                    <ol class="ol">
                                                                        <li>メーリングリストへの入会を希望する人は、メーリングリストの公開ページに設置されている入会用フォームにメールアドレスを入力し、メーリングリストの入会申請を行ってください。</li>
                                                                        <li>「1」で入力したメールアドレス宛に、メーリングリストへの入会に関するメールが送信されます。<br>
                                                                            送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして入会処理を完了させてください。</li>
                                                                    </ol>
                                                                </dd>
                                                            </dl>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-f3" class="block_ttl">空メール自動入会用メールアドレスを利用する方法</h5>
                                                <div class="block_body">
                                                    <p>自動入会用のメールアドレスにメンバーが空メールを送信することでメンバー登録をする方法です。<br>
                                                        空メール自動入会用メールアドレスはメーリングリストアドレスの「@」(アットマーク)より前の部分に「-apply」を付加したメールアドレスとなります。</p>
                                                    <p class="font-bold">例：mailinglist-apply@example.com</p>
                                                    <ol class="ol mt30">
                                                        <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                        <li>
                                                            <p>［自動入会機能］にある「空メール自動入会用メールアドレス」の「自動入会を有効にする」を選択し、「設定を保存する」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_19.png" alt="空メール自動入会の設定"></p>
                                                        </li>
                                                        <li><p>「空メール自動入会用メールアドレス」をメールもしくはX(旧Twitter)などのソーシャルメディアなどの任意の方法で周知してください。</p></li>
                                                        <li>
                                                            <p>空メール自動入会用メールアドレスがメールを受信すると送信元のメールアドレスを自動登録します。</p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>メーリングリスト作成前に既に本機能用メールアドレスと同一のメールアドレスが存在する場合は、利用できません。<br>
                                                                        その場合はメーリングリスト管理画面の［自動入会機能］にてエラーメッセージが表示されます。</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-f4" class="block_ttl">任意のWebページにて入会窓口を設置する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                        <li>
                                                            <p>［自動入会］にある入会用フォームを任意のWEBページに貼り付けてください。</p>
                                                            <aside class="msg msg_notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>入会用フォームの貼り付けについて</h6>
                                                                <div class="msg_body">
                                                                    <p>各フォームの利用はWebサイト1ページにつき1つまで可能です。</p>
                                                                </div>
                                                            </aside>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_14.png?date=2410" alt="入会・退会用フォーム"></p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>メーリングリストに入会する人の手順</dt>
                                                                <dd>
                                                                    <ol class="ol">
                                                                        <li>メーリングリストへの入会を希望する人は、入会用フォームタグが設置されているWEBページの入会用フォームにメールアドレスを入力し、メーリングリストの入会申請を行ってください。</li>
                                                                        <li>「1」で入力したメールアドレス宛に、メーリングリストへの入会に関するメールが送信されます。<br>
                                                                            送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして入会処理を完了させてください。</li>
                                                                    </ol>
                                                                </dd>
                                                            </dl>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-g" class="section">
                                        <h4 class="section_ttl">6.メンバー管理</h4>

                                        <div class="section_body">

                                            <section class="block">
                                                <h5 id="link-g1" class="block_ttl">メンバーの権限を変更する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                        <li><p>［メンバーの管理］メニューに表示されているメンバー一覧から、権限を変更したいユーザーの[設定変更]をクリックしてください。</p></li>
                                                        <li><p>「権限」で任意の権限を選択し、「設定を保存する」をクリックしてください。</p></li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-g2" class="block_ttl">メンバーを削除する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                        <li><p>［メンバーの管理］メニューに表示されているメンバー一覧から、削除したいメンバーの[削除]をクリックしてください。</p></li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-g3" class="block_ttl">メンバーの一覧表示</h5>
                                                <div class="block_body">
                                                    <p>メンバーの一覧表示画面で、現在登録しているメンバーのメールアドレスを一覧で確認することができます。<br>
                                                        画面に表示されたアドレスをコピーするなどしてバックアップ保管用にご利用ください。</p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-g4" class="block_ttl">メンバーの一括削除</h5>
                                                <div class="block_body">
                                                    <p>現在登録されているメンバーを一括で削除することができます。<br>
                                                        (メール配信時にその都度配信メンバーを変更したい場合などに、[メンバーの一括登録]機能と併せてご利用するなどしてご活用ください。)</p>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-h" class="section">
                                        <h4 class="section_ttl">7.メールの配信前確認</h4>

                                        <div class="section_body">

                                            <p>メールの配信前確認機能は、メーリングリストに送信されたメールを、管理者の承認後に配信する機能です。<br>
                                                また、当機能を有効にすると、メンバー以外（外部のメールアドレス）からもメーリングリストへのメール配信が可能となります。</p>
                                            <p>当機能を有効にする場合は、「環境設定」より「メールの配信前確認」を【確認する】に設定し、併せて承認メールの送信先となる「管理者メールアドレス」の確認や設定を行ってください。</p>
                                            <p>当機能を有効にすることで、メーリングリストアドレスに送信されたメールは、まずは管理者メールアドレス宛に届きます。<br>
                                                管理者にて届いたメールを確認し、承認を行うことで、メンバーへメールを配信することが可能です。<br>
                                                これにより、迷惑メールが配信されることを防止できます。</p>

                                            <section class="block">
                                                <h5 id="link-h1" class="block_ttl">承認方法詳細</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>管理者メールアドレス宛に、件名が「submission to moderators」のメールが届きます。</p></li>
                                                        <li><p>添付されているメールを参照し、当該メールの配信を承認するかどうかを判断してください。</p></li>
                                                        <li>
                                                            <p>配信を承認する場合は、メールに記載されている「承認コードの送信先」に「承認のコード」を送信します。</p>
                                                            <p class="note">※その際、件名は空欄とし、「承認コード」はメール本文に記載してください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailinglist_15.png?date=2410" alt="「承認のコード」を送信"></p>
                                                            <p>配信を許可しない場合、特に操作は不要です。</p>
                                                        </li>
                                                        <li><p>承認後、管理者メールアドレス宛に、タイトルが「moderated article[****.......]」の配信完了通知が届きます。<br>
                                                                承認後は配信完了通知を必ずご確認ください。</p>
                                                            <aside class="msg msg_caution">
                                                                <div class="msg_body">
                                                                    <p class="note">※一部メールクライアントで、承認後にメール配信が完了しない場合があります。<br>
                                                                        本機能をご利用の前に、テスト配信の実施をお願い致します。</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-i" class="section">
                                        <h4 class="section_ttl">8.過去に配信されたメールの確認</h4>

                                        <div class="section_body">

                                            <ol class="ol">
                                                <li><p>メーリングリスト管理画面にログインしてください。</p></li>
                                                <li>
                                                    <p>［配信済みメール］メニューから過去に配信されたメールの内容が確認できます。</p>
                                                    <p class="note">※メール配信時に添付したファイルの確認はできません。</p>
                                                </li>
                                            </ol>

                                        </div>
                                    </section>

                                    <section id="link-j" class="section">
                                        <h4 class="section_ttl">9.配信エラー管理</h4>

                                        <div class="section_body">

                                            <section class="block">
                                                <h5 id="link-j1" class="block_ttl">自動削除</h5>
                                                <div class="block_body">
                                                    <p>メーリングリストを配信できなかったメンバーに対する各種設定を行うことができます。</p>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_16.png?date=2410" alt="自動削除設定"></p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th>自動削除の有効化</th>
                                                            <td>初期設定は【自動削除を有効にする】となっています。<br>
                                                                本機能を無効にすることで配信できないメールアドレス宛てにメール送信を試みる頻度が増加し他のお客様にも甚大な影響を及ぼす可能性が高くなります。<br>
                                                                メーリングリストの管理者様におかれましては、「エラーメール集計」にてメール送信に失敗した宛先を注視いただき、複数回に渡り送信出来なかったメールアドレスをメンバーから除外いただくなどの別途対応が必要となります。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>自動削除を実行するエラー回数</th>
                                                            <td>メールアドレスに対する配信エラーの累計数を設定できます。<br>
                                                                一週間の内に設定した回数を超えて配信エラーとなったメールアドレスはメンバーから自動削除されます。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>メール通知</th>
                                                            <td>メンバーから自動削除されたメールアドレスを、管理者メールアドレス宛に通知を行うかどうか設定できます。</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-j2" class="block_ttl">削除済みメールアドレス</h5>
                                                <div class="block_body">
                                                    <p>自動削除されたメンバーの確認と再登録を行うことができます。</p>
                                                    <ol class="ol">
                                                        <li><p>一覧をクリアする場合、【削除履歴のクリア】ボタンをクリックしてください。</p></li>
                                                        <li><p>【選択したアドレスを再登録する】場合、一覧から再登録を行うメールアドレスを選択してください。</p></li>
                                                        <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                                【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                                    </ol>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_17.png?date=2410" alt="削除済みメールアドレス"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-j3" class="block_ttl">エラーメール集計</h5>
                                                <div class="block_body">
                                                    <p>エラーとなったメールアドレス毎の集計と、詳細を確認することができます。</p>
                                                    <ol class="ol">
                                                        <li><p>配信エラーの内容を確認することができます。</p></li>
                                                        <li><p>配信エラーとなっているメールアドレスをメンバーから削除することができます。</p></li>
                                                        <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                                【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                                    </ol>
                                                    <p><img class="img" src="../img/manual/man_mail_mailinglist_18.png?date=2410" alt="エラーメール集計"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 id="link-j4" class="block_ttl">エラーメール詳細</h5>
                                                <div class="block_body">
                                                    <p>エラー戻りメールの発生頻度を確認することができます。</p>
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p class="note">※エラーメールの内容を本ツールから確認することはできません。<br>
                                                                エラーメールの詳細を確認されたい場合は、<a href="#link-d">環境設定</a>の[システム・エラーメール受信設定]を【受信する】にして【管理者メールアドレス】にて確認を行ってください。</p>
                                                            <p class="note">※携帯電話各社のメールアドレスによっては、受信不可となったアドレスが１件でも存在すると、エラー内容に受信可能なメールアドレスも含まれる場合があります。<br>
                                                                その際、エラーメールに含まれる受信可能なメールアドレスも全て「エラー回数」として集計されます。</p>
                                                        </div>
                                                    </aside>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-k" class="section">
                                        <h4 class="section_ttl">10.SSLの利用</h4>

                                        <div class="section_body">
                                            <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メーリングリスト」の利用が可能です。<br>
                                                設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                            </ul>
                                            <p>独自SSLが利用可能になりましたら、下記のURLを、必要に応じてメンバーに通知してください。</p>
                                            <div class="border border_gray">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>管理ツールのアドレス</p>
                                                <p class="mb0">https://ドメイン名/xmailinglist/メーリングリスト名/admin</p>
                                            </div>
                                            <div class="border border_gray">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>メンバー向け公開ページ</p>
                                                <p class="mb0">https://ドメイン名/xmailinglist/メーリングリスト名/</p>
                                            </div>

                                            <aside class="msg msg_caution">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                <div class="msg_body">
                                                    <p>SSLをご利用の場合であっても、「公開設定」の[公開ページのURL]は変更されません。<br>
                                                        上記URLのルールを参照してください。</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section id="link-l" class="section">
                                        <h4 class="section_ttl">11.ご利用環境について</h4>

                                        <div class="section_body">
                                            <p>一部のメールクライアントにて特定の条件に合致する場合、正常にメール配信が行われない場合があります。</p>
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th class="w30per">Macメール<br>（Apple Mail）</th>
                                                    <td>HTML形式でファイルを添付した際のメール送信、<br>
                                                        PDFファイルを圧縮せずに直接ファイル添付した際のメール送信</td>
                                                </tr>
                                                <tr>
                                                    <th>Becky!Internet Mail</th>
                                                    <td>HTML形式でファイルを添付した際のメール送信</td>
                                                </tr>
                                                <tr>
                                                    <th>Outlook.com<br>（Microsoft社提供の無料WEBメールサービス）</th>
                                                    <td>メールの配信前確認機能を利用したメール配信</td>
                                                </tr>
                                                <tr>
                                                    <th>LotusNotes</th>
                                                    <td>ファイルを添付した際のメール送信</td>
                                                </tr>
                                                </tbody>
                                            </table>
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