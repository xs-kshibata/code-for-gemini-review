<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>メールマガジンについて | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「メールマガジン」の利用手順に関するご案内です。エックスサーバーでは管理ツールからの簡単な操作でメールマガジンを設置することが可能です。">

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

                        <h3 class="sub-ttl">メールマガジンについて</h3>

                        <div class="supportTabArea">
                            <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                            <div class="supportTabWrap">
                                <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                                <!-- 旧パネル -->
                                <div class="supportTabContents">

                                    <div class="toc-list">
                                        <p class="toc-list--head">目次</p>
                                        <ul class="toc-list--body">
                                            <li><a href="#link-previous-a">「メールマガジン」機能について</a></li>
                                            <li><a href="#link-previous-b">1.メールマガジンの作成</a>
                                                <ol>
                                                    <li><a href="#link-previous-b01">1.メールマガジンメニューへ</a></li>
                                                    <li><a href="#link-previous-b02">2.追加メニューへ</a></li>
                                                    <li><a href="#link-previous-b03">3.メールマガジンの新規作成</a></li>
                                                    <li><a href="#link-previous-b04">4.作成完了</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-previous-c">2.ログイン</a>
                                                <ul>
                                                    <li><a href="#link-previous-c01">メールマガジン管理画面へ</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-d">3.環境設定</a>
                                                <ul>
                                                    <li><a href="#link-previous-d01">メールマガジンの環境設定</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-e">4.システムメール</a>
                                                <ul>
                                                    <li><a href="#link-previous-e01">システムメールの設定</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-f">5.ユーザー登録</a>
                                                <ul>
                                                    <li><a href="#link-previous-f01">管理画面からメールアドレスを指定して追加する方法</a></li>
                                                    <li><a href="#link-previous-f02">空メール自動登録用メールアドレスを利用する方法</a></li>
                                                    <li><a href="#link-previous-f03">任意のWebページにて登録窓口を設置する方法</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-g">6.ユーザー管理</a>
                                                <ul>
                                                    <li><a href="#link-previous-g01">ユーザーのメモを変更する方法</a></li>
                                                    <li><a href="#link-previous-g02">ユーザーを削除する方法</a></li>
                                                    <li><a href="#link-previous-g03">ユーザーの一覧表示</a></li>
                                                    <li><a href="#link-previous-g04">ユーザーの一括削除</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-h">7.メールマガジンの配信</a></li>
                                            <li><a href="#link-previous-i">8.過去に配信したメールマガジンの確認</a></li>
                                            <li><a href="#link-previous-j">9.配信エラー管理</a>
                                                <ul>
                                                    <li><a href="#link-previous-j01">自動削除</a></li>
                                                    <li><a href="#link-previous-j02">削除済みメールアドレス</a></li>
                                                    <li><a href="#link-previous-j03">エラーメール集計</a></li>
                                                    <li><a href="#link-previous-j04">エラーメール詳細</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-previous-k">10.SSLの利用</a></li>
                                        </ul>
                                    </div>


                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_mailmagazine.php">メールマガジン機能に関する「よくある質問」</a></li>
                                    </ul>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-a">「メールマガジン」機能について</h4>
                                        <div class="section_body">


                                            <section class="block">
                                                <div class="block_body">

                                                    <p>
                                                        メールマガジンとは、新聞や雑誌のような情報発信をメールで行うサービスです。<br>
                                                        メールマガジンは、個人・団体を問わず、どなたでもご利用いただけます。
                                                    </p>

                                                    <p>
                                                        メールマガジンは、プランごとに作成できる数が異なります。
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
                                                            <td>10件</td>
                                                        </tr>
                                                        <tr>
                                                            <td>プレミアムプラン</td>
                                                            <td>15件</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ビジネスプラン</td>
                                                            <td>20件</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>
                                                        また、各メールマガジンには、1000件のメールアドレスをユーザーとして登録できます。
                                                    </p>

                                                    <p>
                                                        メールマガジンの送信数が一定の件数を超過すると、利用を制限する場合があります。<br>
                                                        送信件数の目安は、「<a href="man_mail_spec.php">送受信制限</a>」をご参照ください。<br>
                                                        なお、10人のユーザーに1通のメールを配信した場合は、10通とカウントします。
                                                    </p>

                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <ul class="ul">
                                                                <li>試用期間中のサーバーアカウントでは、メールマガジンはご利用になれません。</li>
                                                                <li>携帯電話各社のメールアドレスで「なりすましメール対策」を設定されていると、メールマガジンから配信されるメールを受信できない場合があります。その際は、メールマガジンのメールアドレスを受信できるよう、受信側でメールの受信を許可してください。</li>
                                                            </ul>
                                                        </div>
                                                    </aside>

                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-b">1.メールマガジンの作成</h4>
                                        <div class="section_body">
                                            <div class="serial-box">
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-previous-b01">1.メールマガジンメニューへ</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「メーリングリスト・メールマガジン」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_1.png" alt="「メーリングリスト・メールマガジン」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-previous-b02">2.追加メニューへ</h5>
                                                    <div class="box_body">
                                                        <p>「メールマガジン追加」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_2.png" alt="「メールマガジンの追加」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-previous-b03">3.メールマガジンの新規作成</h5>
                                                    <div class="box_body">
                                                        <p>作成用のフォームが表示されるので、各項目を設定してください。</p>
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th class="w30per">メールマガジン名</th>
                                                                <td>メールマガジンの名前を入力してください。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メールマガジンアドレス</th>
                                                                <td><p>メールマガジンのアドレスを半角英数字で入力してください。</p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>メールマガジンアドレスについて</dt>
                                                                        <dd>メールマガジン配信に使用されるメールアドレスです。<br>
                                                                            作成済みのメールアドレスは使用できません。</dd>
                                                                    </dl>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>管理ツール パスワード</th>
                                                                <td>メールマガジン管理ツールのログインパスワードです。</td>
                                                            </tr>
                                                            <tr>
                                                                <th>メモ</th>
                                                                <td>メールマガジンの利用用途などをご記入ください。</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>各項目の設定が完了すれば、「確認画面へ進む」ボタンをクリックしてください。<br>
                                                            そして、次に表示される確認画面で入力内容を再度確認し、「追加する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_3.png" alt="「追加する」ボタンをクリック"></p>


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
                                                        <p>「メーリングリスト・メールマガジン一覧」から、「管理ツールURL」のリンクをクリックして、メールマガジンの管理画面に遷移することが可能です。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_4.png" alt="「管理ツールURL」のリンクをクリック"></p>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-c">2.ログイン</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-c01">メールマガジン管理画面へ</h5>
                                                <div class="block_body">
                                                    <p>「メーリングリスト・メールマガジン一覧」から、作成したメールマガジンの「ログイン」をクリックし、ログインを完了してください。<br>
                                                        ログイン状態は、管理画面右上の「ログアウト」ボタンをクリックすることで、解除されます。<br>
                                                        ログアウトした場合は、ログアウト後に表示される下記ログイン画面か、再度「メーリングリスト・メールマガジン一覧」画面からログインしてください。</p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th class="w30per">メールマガジンアドレス</th>
                                                            <td>「メーリングリスト・メールマガジンの一覧」に表示されている『メールマガジンアドレス』を入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>パスワード</th>
                                                            <td>
                                                                <p>メールマガジンを作成する際に指定した「管理ツール パスワード」を入力してください。</p>
                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>パスワードが不明な場合</dt>
                                                                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の 「メーリングリスト・メールマガジン一覧」に表示されている当該メールマガジンの『変更』メニューにて、新たなパスワードを設定することが可能です。</dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_5.png" alt="「ログイン」画面"></p>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-d">3.環境設定</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-d01">メールマガジンの環境設定</h5>
                                                <div class="block_body">
                                                    <p>メールマガジンの管理画面内で、「環境設定」メニューへと進み、環境設定を行ってください。</p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th class="w20per">メールマガジン名</th>
                                                            <td>メールマガジンの名前を設定します。<br>
                                                                メールマガジン作成時に設定したメールマガジン名を変更できます。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>送信者名</th>
                                                            <td>メールマガジンの送信者名を入力してください。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>配信ナンバーの設定</th>
                                                            <td><p>メールマガジンの配信ナンバーを設定できます。<br>
                                                                    [メールマガジンの件名]に当該機能の雛形を設定することで、自動採番された配信ナンバーが挿入されます。</p>
                                                                <div class="border border_blue">例）<br>
                                                                    メールマガジンの件名：『サンプルメルマガvol{auto_number}』⇒『サンプルメルマガvol1』</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールマガジンの件名</th>
                                                            <td>配信するメールマガジンメールの件名の初期値を入力してください。</td>
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
                                                            <th>メールマガジンの返信先</th>
                                                            <td>
                                                                <p>メールマガジンに返信時、宛先に使用されるメールアドレスを設定します。初期状態では「メールマガジンの返信先」は設定されておらず、返信メールを受け取ることはできません。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>システム・エラーメール受信設定</th>
                                                            <td>
                                                                <p>システム・エラーメールの受け取りに関する情報を設定できます。<br>
                                                                    【受信する】に設定した場合、メールマガジン配信時に発生したシステム・エラーの内容がここで設定する【メールアドレス】宛に送信されます。</p>
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
                                                        <tr>
                                                            <th>管理ツール以外からの配信設定</th>
                                                            <td>
                                                                <p>送信用メールアドレスから配信用メールアドレスへメールを送信することで、管理ツール以外からもメールマガジンを配信することができます。<br>
                                                                    その後、送信用メールアドレス宛に届いた配信確認用メールを承認することでメールマガジンの配信が完了となります。</p>
                                                                <p class="note">※普段使い慣れているメールクライアントからHTML形式でメールを作成したり、添付ファイルつきのメールを配信することも可能です。</p>
                                                                <div class="border border_gray">
                                                                    <p class="mb0">
                                                                        管理ツール以外のメールクライアントで配信メールを作成<br>
                                                                        <i class="ico ico_arrow-down ml30"></i><br>
                                                                        配信用メールアドレスへメール送信<br>
                                                                        <i class="ico ico_arrow-down ml30"></i><br>
                                                                        送信用メールアドレスに届いた配信確認メールを承認<br>
                                                                        <i class="ico ico_arrow-down ml30"></i><br>
                                                                        ユーザーへメールマガジンが配信される（配信完了）
                                                                    </p>
                                                                </div>
                                                                <aside class="msg msg_notice mt30">
                                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能を利用する場合、必ずテスト配信を行ってください</h6>
                                                                    <div class="msg_body">
                                                                        <p>
                                                                            一部メールクライアントで、承認後にメール配信が完了しない場合があります。<br>
                                                                            本機能をご利用の前に、テスト配信を行ってください。
                                                                        </p>
                                                                        <p>
                                                                            配信が完了した場合は、送信用メールアドレスに「moderated article[****.......]」という件名のメールが届きます。
                                                                        </p>
                                                                    </div>
                                                                </aside>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_6.png" alt="環境設定"></p>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-e">4.システムメール</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-e01">システムメールの設定</h5>
                                                <div class="block_body">
                                                    <p>「システムメール」より、メールマガジンのシステムが配信するメールについて設定を行ってください。</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>登録確認メール</dt>
                                                        <dd>
                                                            <p>登録用フォームを介して、メールマガジンへの登録申し込みがあった場合に、その申請者宛に返送される登録確認のメールです。</p>
                                                            <p>メールマガジンの概要などを記載してください。</p>

                                                            <aside class="msg msg_notice mt30">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="mb5 font-bold">
                                                                        ###認証URL###
                                                                    </p>
                                                                    <p>
                                                                        この文字列には、メールマガジンへの登録申し込みを完了させるためのURLが挿入されます。<br>
                                                                        誤って削除しないよう、ご注意ください。
                                                                    </p>
                                                                    <p>
                                                                        申請者は、このURLをクリックすることでメールマガジンに登録することができます。<br>
                                                                        そのため、クリックを促す文章とともに記載することが推奨されます。
                                                                    </p>
                                                                </div>
                                                            </aside>

                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>退会確認のメール</dt>
                                                        <dd>
                                                            <p>退会用フォームを介して、メールマガジンからの退会申し込みがあった場合に、その申請者宛に返送される退会確認のメールです。</p>
                                                            <p>メールマガジンから退会する際の注意事項等を記載してください。</p>

                                                            <aside class="msg msg_notice mt30">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="mb5 font-bold">
                                                                        ###認証URL###
                                                                    </p>
                                                                    <p>
                                                                        この文字列には、メールマガジンへの退会申し込みを完了させるためのURLが挿入されます。<br>
                                                                        誤って削除しないよう、ご注意ください。
                                                                    </p>
                                                                    <p>
                                                                        申請者は、このURLをクリックすることでメールマガジンから退会することができます。<br>
                                                                        そのため、クリックを促す文章とともに記載することが推奨されます。
                                                                    </p>
                                                                </div>
                                                            </aside>

                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_8.png" alt="退会確認のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>登録受付完了のメール</dt>
                                                        <dd>
                                                            <p>メールマガジンへの登録手続きが完了したユーザーに送信される登録受付完了のメールです。<br>
                                                                メールマガジンの利用に関する注意事項などを記載してください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_9.png" alt="登録受付完了のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>退会申し込み完了のメール</dt>
                                                        <dd>
                                                            <p>メールマガジンからの退会申し込みが完了したユーザーに送信される退会申し込み完了のメールです。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_10.png" alt="退会申し込み完了のメール画面"></p>
                                                        </dd>
                                                    </dl>

                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-f">5.ユーザー登録</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <h5 id="link-previous-f01" class="block_ttl">管理画面からメールアドレスを指定して追加する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li>
                                                            <p>メールマガジン管理画面にログインしてください。</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                ［ユーザーの管理］メニューにある「ユーザーの登録」にて、手続きを行ってください。
                                                            </p>
                                                            <p>
                                                                複数のユーザーを一括で登録する場合、［ユーザーの管理］メニューの画面下部にある「ユーザーの一括登録はこちら」に進み、改行区切りで複数のメールアドレスを入力し、『メールマガジンに登録する』をクリックしてください。
                                                            </p>

                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w20per">メールアドレス</th>
                                                                    <td>登録されるユーザーのメールアドレスを入力してください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>メモ</th>
                                                                    <td><p>入力した内容は、「ユーザー一覧」のリストにのみ表示されます。<br>
                                                                            登録するユーザーのメモ（名前・備考等）にご利用ください。</p>
                                                                        <p class="note">※任意のWebページに作成した登録用フォームからの登録の場合、メモの設定はできません。<br>
                                                                            登録完了後に設定変更より変更してください。</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>登録方法</th>
                                                                    <td><p>登録方法を選択します。<br>
                                                                            選択できる形式と処理内容は次のとおりです。</p>
                                                                        <dl class="dl">
                                                                            <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信する</dt>
                                                                            <dd>登録されるユーザーに登録確認を行わずに登録します。入力したメールアドレス宛に登録完了の通知をメールで送信します。</dd>
                                                                            <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信しない</dt>
                                                                            <dd>登録されるユーザーに登録確認を行わずに登録します。入力したメールアドレスへの登録完了の通知は行われません。</dd>
                                                                            <dt><i class="ico ico_square-fill"></i>登録用URLを送信をする</dt>
                                                                            <dd>登録されるユーザーに登録確認を行って登録します。入力したメールアドレス宛に登録確認メールが送信され、ユーザは、メールに記載された認証用ＵＲＬをクリックすることで、メールマガジンへの登録を完了させます。 </dd>
                                                                        </dl>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_11.png" alt="ユーザーの登録"></p>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>
                                            <section class="block">
                                                <h5 id="link-previous-f02" class="block_ttl">空メール自動登録用メールアドレスを利用する方法</h5>
                                                <div class="block_body">
                                                    <p>自動登録用のメールアドレスに空メールを送付することでメールマガジンに登録する方法です。<br>
                                                        空メール自動登録用メールアドレスはメールマガジンアドレスの「@」(アットマーク)より前の部分に「-apply」を付加したメールアドレスとなります。</p>
                                                    <p class="font-bold">例：mailmagazine-apply@example.com</p>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>メールマガジン管理画面にログインしてください。</p>
                                                        </li>
                                                        <li>
                                                            <p>［自動登録機能］にある「空メール自動登録用メールアドレス」の「自動登録を有効にする」を選択し、「設定を保存する」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_16.png" alt="空メール自動登録の設定"></p>
                                                        </li>
                                                        <li>
                                                            <p>「空メール自動登録用メールアドレス」をメールもしくはX(旧Twitter)などのソーシャルメディアなどの任意の方法で周知してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>空メール自動登録用メールアドレスがメールを受信すると送信元のメールアドレスを自動登録します。</p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>メールマガジン作成前に既に本機能用メールアドレスと同一のメールアドレスが存在する場合は、利用できません。<br>
                                                                        その場合は、メールマガジン管理画面の［自動登録機能］にてエラーメッセージが表示されます。</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </section>
                                            <section class="block">
                                                <h5 id="link-previous-f03" class="block_ttl">任意のWebページにて登録窓口を設置する方法</h5>
                                                <div class="block_body">
                                                    <p>
                                                        任意のWebページに登録フォームを貼り付け、登録フォームからメンバーを登録する方法です。<br>
                                                        各フォームの利用はWebサイト1ページにつき1つまで可能です。
                                                    </p>

                                                    <ol class="ol">
                                                        <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                        <li><p>［自動登録機能］にある各フォームのを任意のWEBページに貼り付けてください。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_12.png" alt="購読・購読解除用フォーム"></p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>メールマガジンを登録する人の手順</dt>
                                                                <dd>
                                                                    <ol class="ol">
                                                                        <li>メールマガジンの登録を希望する人は、登録用フォームタグが作成されているWEBページの登録用フォームにメールアドレスを入力し、メールマガジンの登録申し込みを行ってください。</li>
                                                                        <li>「1」で入力したメールアドレス宛に、メールマガジンの登録に関するメールが送信されます。<br>
                                                                            送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして登録処理を完了させてください。</li>
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

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-g">6.ユーザー管理</h4>
                                        <div class="section_body">

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-g01">ユーザーのメモを変更する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                        <li><p>[ユーザー管理］メニューに表示されているユーザー一覧から、メモを変更したいユーザーの[設定変更]をクリックしてください。</p></li>
                                                        <li><p>「メモ」で任意の文字を入力し、「設定を保存する」をクリックしてください。</p></li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-g02">ユーザーを削除する方法</h5>
                                                <div class="block_body">
                                                    <ol class="ol">
                                                        <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                        <li><p>[ユーザー管理］メニューに表示されているユーザー一覧から、削除したいユーザーの[削除]をクリックしてください。</p></li>
                                                    </ol>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-g03">ユーザーの一覧表示</h5>
                                                <div class="block_body">
                                                    <p>ユーザーの一覧取得画面で、現在登録しているメンバーのメールアドレスを一覧で確認することができます。<br>
                                                        画面に表示されたアドレスをコピーするなどしてしてバックアップ保管用にご利用ください。</p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-g04">ユーザーの一括削除</h5>
                                                <div class="block_body">
                                                    <p>現在登録されているメンバーを一括で削除することができます。<br>
                                                        （メール配信時にその都度配信メンバーを変更したい場合などに、[メンバーの一括登録]機能と併せてご利用するなどしてご活用ください。</p>
                                                </div>
                                            </section>

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-h">7.メールマガジンの配信</h4>
                                        <div class="section_body">
                                            <p>メールマガジン配信の手順は以下の通りです。</p>
                                            <ol class="ol">
                                                <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                <li><p>[メールの配信]で必要事項を入力し『確認』をクリックし、配信内容を確認してください。</p></li>
                                                <li><p>内容に問題なければ『メールを送信する』をクリックしてください。</p></li>
                                            </ol>
                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-i">8.過去に配信したメールマガジンの確認</h4>
                                        <div class="section_body">

                                            <ol class="ol">
                                                <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                <li>
                                                    <p>［配信済みの情報］メニューから過去に配信されたメールマガジンの内容が確認できます。</p>
                                                    <p class="note">※メール配信時に添付したファイルの確認はできません。</p>
                                                </li>
                                            </ol>

                                        </div>
                                    </section>
                                    <!-- /.section -->

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-previous-j">9.配信エラー管理</h4>
                                        <div class="section_body">
                                            <section class="block">
                                                <p>
                                                    メールの配信がエラーとなったメールアドレスを集計し、エラーが一定回数に達したメールアドレスを配信対象から削除することが可能です。
                                                </p>

                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        携帯電話各社によっては、受信不可となったアドレスが1件でも存在すると、エラーが発生しなかったメールアドレスもすべて「エラー回数」として集計される場合があります。
                                                    </div>
                                                </aside>

                                                <h5 class="block_ttl" id="link-previous-j01">自動削除</h5>
                                                <div class="block_body">
                                                    <p>配信エラーとなるユーザーに対して各種設定を行うことができます。</p>
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th>自動削除の有効化</th>
                                                            <td>初期設定は【自動削除を有効にする】となっています。<br>
                                                                本機能を無効にすることで配信できないメールアドレス宛てにメール送信を試みる頻度が増加し、他のお客様にも甚大な影響を及ぼす可能性が高くなります。<br>
                                                                メールマガジンの管理者様におかれましては、「エラーメール集計」にてメール送信に失敗した宛先を注視いただき、複数回に渡り送信出来なかったメールアドレスをメンバーから除外いただくなどの別途対応が必要となります。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>自動削除を実行するエラー回数</th>
                                                            <td>メールアドレスに対する配信エラーの累計数を設定できます。<br>
                                                                一週間の内に設定した回数を超えて配信エラーとなったメールアドレスはユーザーから自動削除されます。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>メール通知</th>
                                                            <td>ユーザーから自動削除されたメールアドレスを、管理者メールアドレス宛に通知を行うかどうか設定できます。</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_13.png" alt="自動削除設定"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-previous-j02">削除済みメールアドレス</h5>
                                                <div class="block_body">
                                                    <p>自動削除されたユーザーの確認と再登録を行うことができます。</p>
                                                    <ol class="ol">
                                                        <li><p>一覧をクリアする場合、【削除履歴のクリア】ボタンをクリックしてください。</p></li>
                                                        <li><p>【選択したアドレスを再登録する】場合、一覧から再登録を行うメールアドレスを選択してください。</p></li>
                                                        <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                                【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                                    </ol>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_14.png" alt="削除済みメールアドレス"></p>
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
                                                    <p><img class="img" src="../img/manual/previous/man_mail_mailmagazine_15.png" alt="エラーメール集計"></p>
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

                                    <section class="section">
                                        <h4  id="link-previous-k" class="section_ttl">10.SSLの利用</h4>
                                        <div class="section_body">

                                            <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メールマガジン」の利用が可能です。<br>
                                                設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                            </ul>
                                            <p>独自SSLが利用可能になりましたら、下記のようなURLへのリンクをお客様のサイト上に追加してください。</p>
                                            <div class="border border_gray">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>管理ツールのアドレス</p>
                                                <p class="mb0">https://ドメイン名/xmailinglist/メールマガジン名/admin</p>
                                            </div>
                                            <div class="border border_gray">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>退会用URL</p>
                                                <p class="mb0">https://ドメイン名/xmailinglist/メールマガジン名/</p>
                                            </div>

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
                                            <li><a href="#link-a">メールマガジンについて</a></li>
                                            <li><a href="#link-b">1.メールマガジンの作成</a>
                                                <ol>
                                                    <li><a href="#link-b1">1.メールマガジンメニューへ</a></li>
                                                    <li><a href="#link-b2">2.追加メニューへ</a></li>
                                                    <li><a href="#link-b3">3.メールマガジンの新規作成</a></li>
                                                    <li><a href="#link-b4">4.作成完了</a></li>
                                                </ol>
                                            </li>
                                            <li><a href="#link-c">2.ログイン</a>
                                                <ul>
                                                    <li><a href="#link-c1">メールマガジン管理画面へ</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-d">3.環境設定</a>
                                                <ul>
                                                    <li><a href="#link-d1">メールマガジンの環境設定</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-e">4.システムメール</a>
                                                <ul>
                                                    <li><a href="#link-e1">システムメールの設定</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-f">5.ユーザー登録</a>
                                                <ul>
                                                    <li><a href="#link-f1">管理画面からメールアドレスを指定して追加する方法</a></li>
                                                    <li><a href="#link-f2">空メール自動登録用メールアドレスを利用する方法</a></li>
                                                    <li><a href="#link-f3">任意のWebページにて登録窓口を設置する方法</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-g">6.メンバー管理</a>
                                                <ul>
                                                    <li><a href="#link-g1">ユーザーのメモを変更する方法</a></li>
                                                    <li><a href="#link-g2">ユーザーを削除する方法</a></li>
                                                    <li><a href="#link-g3">ユーザーの一覧表示</a></li>
                                                    <li><a href="#link-g4">ユーザーの一括削除</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-h">7.メールマガジンの配信</a></li>
                                            <li><a href="#link-i">8.過去に配信したメールマガジンの確認</a></li>
                                            <li><a href="#link-j">9.配信エラー管理</a>
                                                <ul>
                                                    <li><a href="#link-j1">自動削除</a></li>
                                                    <li><a href="#link-j2">削除済みメールアドレス</a></li>
                                                    <li><a href="#link-j3">エラーメール集計</a></li>
                                                    <li><a href="#link-j4">エラーメール詳細</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#link-k">10.SSLの利用</a></li>
                                        </ul>
                                    </div>

                                    <ul class="link-box">
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                                        <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_mailmagazine.php">メールマガジン機能に関する「よくある質問」</a></li>
                                    </ul>

                                    <section class="section">
                                        <div class="sectionBody">

                                            <section id="link-a" class="section">
                                                <h4 class="section_ttl">メールマガジンについて</h4>
                                                <div class="section_body">

                                                    <section class="block">
                                                        <h5 class="block_ttl">メールマガジンとは</h5>
                                                        <div class="block_body">
                                                            <p>メールマガジンとは、新聞や雑誌のような情報発信をメールで行うサービスです。<br>
                                                                メールマガジンは、個人・団体を問わず、どなたでもご利用いただけます。</p>

                                                            <aside class="msg msg_notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用に関しての補足</h6>
                                                                <div class="msg_body">
                                                                    <p class="note">※利用に際しては、法令等に違反しないようにご注意いただくとともに、当サービスを悪用するような利用はご遠慮ください。</p>
                                                                    <p class="note">※メールマガジンの送信数が一定の件数を超過すると、利用を制限させていただく場合があります。<br>
                                                                        送信件数の目安は、「<a href="man_mail_spec.php">メールについて &gt; 仕様一覧 &gt; 送受信制限</a>」をご参照ください。<br>
                                                                        なお、10人のユーザーに１通のメールを配信した場合は、10通とカウントしております。</p>
                                                                </div>
                                                            </aside>

                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>試用期間中のサーバーアカウントでは、メールマガジンはご利用になれません。</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>

                                            <section id="link-b" class="section">
                                                <h4 class="section_ttl">1.メールマガジンの作成</h4>

                                                <div class="section_body">

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h5 id="link-b1" class="box_ttl">1. メールマガジンメニューへ</h5>
                                                            <div class="box_body">
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「メールマガジン」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailmagazine_1.png?date=2410" alt="「メールマガジン」をクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-b2" class="box_ttl">2. 追加メニューへ</h5>
                                                            <div class="box_body">
                                                                <p>「メールマガジンを追加」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailmagazine_2.png?date=2410" alt="「メールマガジンの追加」をクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h5 id="link-b3" class="box_ttl">3. メールマガジンの新規作成</h5>
                                                            <div class="box_body">
                                                                <p>作成用のフォームが表示されるので、各項目を設定してください。<br>
                                                                    各項目の設定完了後、「追加する」ボタンをクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailmagazine_3.png?date=2410" alt="メールマガジン設定画面"></p>
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="w30per">メールマガジン名</th>
                                                                        <td>メールマガジンの名前を入力してください。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>メールマガジンアドレス</th>
                                                                        <td><p>メールマガジンのアドレスを半角英数字で入力してください。</p>
                                                                            <dl class="dl">
                                                                                <dt><i class="ico ico_square-fill"></i>メールマガジンアドレスについて</dt>
                                                                                <dd>メールマガジン配信に使用されるメールアドレスです。<br>
                                                                                    作成済みのメールアドレスは使用できません。</dd>
                                                                            </dl></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>管理画面パスワード</th>
                                                                        <td>メールマガジン管理ツールのログインパスワードです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>メモ</th>
                                                                        <td>メールマガジンの利用用途などをご記入ください。</td>
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
                                                                <p>「メールマガジン」の一覧から、[管理]のリンクをクリックして、メールマガジンの管理画面に遷移することが可能です。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailmagazine_4.png?date=2410" alt="[管理]のリンクをクリック"></p>
                                                                <aside class="msg msg_notice">
                                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用制限について</h6>
                                                                    <div class="msg_body">
                                                                        <p>メールマガジンは、プランごとに作成できる数が異なります。</p>
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
                                                                                <td>10件</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>プレミアムプラン</td>
                                                                                <td>15件</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ビジネスプラン</td>
                                                                                <td>20件</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <p>また、各メールマガジンには、1000件のメールアドレスをユーザーとして登録できます。</p>
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
                                                        <h5 id="link-c1" class="block_ttl">メールマガジン管理画面へ</h5>
                                                        <div class="block_body">
                                                            <p>「メールマガジン」の一覧から、作成したメールマガジンの「ログイン」をクリックし、ログインを完了してください。<br>
                                                                ログイン状態は、管理画面右上の「ログアウト」ボタンをクリックすることで、解除されます。<br>
                                                                ログアウトした場合は、ログアウト後に表示される下記ログイン画面か、再度「メールマガジン」の一覧画面からログインしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailmagazine_5.png?date=2410" alt="「ログイン」画面"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w30per">メールマガジンアドレス</th>
                                                                    <td>「メールマガジン」の一覧に表示されている『メールマガジンアドレス』を入力してください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>パスワード</th>
                                                                    <td>
                                                                        <p>メールマガジンを作成する際に指定した「管理画面パスワード」を入力してください。</p>
                                                                        <dl class="dl">
                                                                            <dt><i class="ico ico_square-fill"></i>パスワードが不明な場合</dt>
                                                                            <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の 「メールマガジン」の一覧に表示されている当該メールマガジンの[編集]ボタンクリック後の画面にて、新たなパスワードを設定することが可能です。</dd>
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
                                                        <h5 id="link-d1" class="block_ttl">メールマガジンの環境設定</h5>
                                                        <div class="block_body">
                                                            <p>メールマガジンの管理画面内で、「環境設定」メニューへと進み、環境設定を行ってください。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailmagazine_6.png?date=2410" alt="環境設定"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w20per">メールマガジン名</th>
                                                                    <td>メールマガジンの名前を設定します。<br>
                                                                        メールマガジン作成時に設定したメールマガジン名を変更できます。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>送信者名</th>
                                                                    <td>メールマガジンの送信者名を入力してください。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>配信ナンバーの設定</th>
                                                                    <td><p>メールマガジンの配信ナンバーを設定できます。<br>
                                                                            [メールマガジンの件名]に当該機能の雛形を設定することで、自動採番された配信ナンバーが挿入されます。</p>
                                                                        <div class="border border_blue">例）<br>
                                                                            メールマガジンの件名：『サンプルメルマガvol{auto_number}』⇒『サンプルメルマガvol1』</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>メールマガジンの件名</th>
                                                                    <td>配信するメールマガジンメールの件名の初期値を入力してください。</td>
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
                                                                    <th>メールマガジンの返信先</th>
                                                                    <td>
                                                                        <p>メールマガジンに返信時、宛先に使用されるメールアドレスを設定します。 初期状態では「メールマガジンの返信先」は設定されていません。</p>
                                                                        <aside class="msg msg_caution">
                                                                            <div class="msg_body">
                                                                                <p class="note">※「メールマガジンの返信先」の設定がない状態では、返信メールを受け取ることができません。ご注意ください。</p>
                                                                            </div>
                                                                        </aside>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>システム・エラーメール受信設定</th>
                                                                    <td>
                                                                        <p>システム・エラーメールの受け取りに関する情報を設定できます。<br>
                                                                            【受信する】に設定した場合、メールマガジン配信時に発生したシステム・エラーの内容がここで設定する【メールアドレス】宛に送信されます。</p>
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
                                                                <tr>
                                                                    <th>管理ツール以外からの配信設定</th>
                                                                    <td>
                                                                        <p>送信用メールアドレスから配信用メールアドレスへメールを送信することで、管理ツール以外からもメールマガジンを配信することができます。<br>
                                                                            その後、送信用メールアドレス宛に届いた配信確認用メールを承認することでメールマガジンの配信が完了となります。</p>
                                                                        <p class="note">※普段使い慣れているメールクライアントからHTML形式でメールを作成したり、添付ファイルつきのメールを配信することも可能です。</p>
                                                                        <div class="border border_gray">
                                                                            <p class="mb0">
                                                                                管理ツール以外のメールクライアントで配信メールを作成<br>
                                                                                <i class="ico ico_arrow-down ml30"></i><br>
                                                                                配信用メールアドレスへメール送信<br>
                                                                                <i class="ico ico_arrow-down ml30"></i><br>
                                                                                送信用メールアドレスに届いた配信確認メールを承認<br>
                                                                                <i class="ico ico_arrow-down ml30"></i><br>
                                                                                ユーザーへメールマガジンが配信される（配信完了）
                                                                            </p>
                                                                        </div>
                                                                        <aside class="msg msg_caution">
                                                                            <div class="msg_body">
                                                                                <p class="note">※一部メールクライアントで、承認後にメール配信が完了しない場合があります。<br>
                                                                                    配信時には必ず、配信が完了したかどうかを確認してください。<br>
                                                                                    配信が完了した場合は、送信用メールアドレスに件名が「moderated article[****.......]の配信完了通知として届きます。<br>
                                                                                    本機能をご利用の前に、テスト配信の実施をお願い致します。</p>
                                                                            </div>
                                                                        </aside>
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
                                                            <p>「システムメール」より、メールマガジンのシステムが配信するメールについて設定を行ってください。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>登録確認メール</dt>
                                                                <dd>
                                                                    <p>登録用フォームを介して、メールマガジンへの登録申し込みがあった場合に、その申請者宛に返送される登録確認のメールです。</p>
                                                                    <p>メールマガジンの概要などを記載してください。</p>
                                                                    <aside class="msg msg_caution">
                                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                        <div class="msg_body">
                                                                            <p class="mb5 font-bold">###認証URL###</p>
                                                                            <p>この文字列は、メールマガジンへの登録申し込みを完了させるためのURLが挿入される部分を示します。 申請者は、このURLをクリックすることでメールマガジンに登録することができます。 そのため、クリックを促す文章と共に記載することが推奨されます。</p>
                                                                        </div>
                                                                    </aside>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_7.png?date=2410" alt="登録確認メール画面"></p>
                                                                </dd>
                                                            </dl>

                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>退会確認のメール</dt>
                                                                <dd>
                                                                    <p>退会用フォームを介して、メールマガジンからの退会申し込みがあった場合に、その申請者宛に返送される退会確認のメールです。</p>
                                                                    <p>メールマガジンから退会する際の注意事項等を記載してください。</p>
                                                                    <aside class="msg msg_caution">
                                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                        <div class="msg_body">
                                                                            <p class="mb5 font-bold">###認証URL###</p>
                                                                            <p>この文字列は、メールマガジンへの退会申し込みを完了させるためのURLが挿入される部分を示します。 申請者は、このURLをクリックすることでメールマガジンから退会することができます。 そのため、クリックを促す文章と共に記載することが推奨されます。</p>
                                                                        </div>
                                                                    </aside>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_8.png?date=2410" alt="退会確認のメール画面"></p>
                                                                </dd>
                                                            </dl>

                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>登録受付完了のメール</dt>
                                                                <dd>
                                                                    <p>メールマガジンへの登録手続きが完了したユーザーに送信される登録受付完了のメールです。<br>
                                                                        メールマガジンの利用に関する注意事項などを記載してください。</p>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_9.png?date=2410" alt="登録受付完了のメール画面"></p>
                                                                </dd>
                                                            </dl>

                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>退会申し込み完了のメール</dt>
                                                                <dd>
                                                                    <p>メールマガジンからの退会申し込みが完了したユーザーに送信される退会申し込み完了のメールです。</p>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_10.png?date=2410" alt="退会申し込み完了のメール画面"></p>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>

                                            <section id="link-f" class="section">
                                                <h4 class="section_ttl">5.ユーザー登録</h4>

                                                <div class="section_body">

                                                    <aside class="msg msg_caution">
                                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                        <div class="msg_body">
                                                            <p>携帯電話各社のメールアドレスで「なりすましメール対策」を設定されていると、メールマガジンから配信されるメールを受信できない場合があります。 その際は、メールマガジンのメールアドレスを受信できるよう、受信側で許可の設定を行ってください。</p>
                                                        </div>
                                                    </aside>
                                                    <p>メールマガジンへのユーザー登録方法は大きく分けて3通りの方法があります。</p>
                                                    <ul class="list list_arrow-down mb30">
                                                        <li><a href="#link-f1">管理画面からメールアドレスを指定して追加する方法</a></li>
                                                        <li><a href="#link-f2">空メール自動登録用メールアドレスを利用する方法</a></li>
                                                        <li><a href="#link-f3">任意のWebページにて登録窓口を設置する方法</a></li>
                                                    </ul>

                                                    <section class="block">
                                                        <h5 id="link-f1" class="block_ttl">管理画面からメールアドレスを指定して追加する方法</h5>
                                                        <div class="block_body">
                                                            <ol class="ol">
                                                                <li>
                                                                    <p>メールマガジン管理画面にログインしてください。</p>
                                                                </li>
                                                                <li>
                                                                    <p>［ユーザーの管理］メニューにある「ユーザーの登録」にて、手続きを行ってください。</p>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_11.png?date=2410" alt="ユーザーの登録"></p>

                                                                    <aside class="msg msg_notice">
                                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>複数のユーザーを一括で登録する場合</h6>
                                                                        <div class="msg_body">
                                                                            <p>［ユーザーの管理］メニューの画面下部にある「ユーザーの一括登録はこちら」に進み、改行区切りで複数のメールアドレスを入力し、『メールマガジンに登録する』をクリックしてください。</p>
                                                                        </div>
                                                                    </aside>

                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="w20per">メールアドレス</th>
                                                                            <td>登録されるユーザーのメールアドレスを入力してください。</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>メモ</th>
                                                                            <td><p>入力した内容は、「ユーザー一覧」のリストにのみ表示されます。<br>
                                                                                    登録するユーザーのメモ（名前・備考等）にご利用ください。</p>
                                                                                <p class="note">※任意のWebページに作成した登録用フォームからの登録の場合、メモの設定はできません。<br>
                                                                                    登録完了後に設定変更より変更してください。</p></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>登録方法</th>
                                                                            <td><p>登録方法を選択します。<br>
                                                                                    選択できる形式と処理内容は次のとおりです。</p>
                                                                                <dl class="dl">
                                                                                    <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信する</dt>
                                                                                    <dd>登録されるユーザーに登録確認を行わずに登録します。入力したメールアドレス宛に登録完了の通知をメールで送信します。</dd>
                                                                                    <dt><i class="ico ico_square-fill"></i>今すぐ登録して登録完了通知を送信しない</dt>
                                                                                    <dd>登録されるユーザーに登録確認を行わずに登録します。入力したメールアドレスへの登録完了の通知は行われません。</dd>
                                                                                    <dt><i class="ico ico_square-fill"></i>登録用URLを送信をする</dt>
                                                                                    <dd>登録されるユーザーに登録確認を行って登録します。入力したメールアドレス宛に登録確認メールが送信され、ユーザは、メールに記載された認証用ＵＲＬをクリックすることで、メールマガジンへの登録を完了させます。 </dd>
                                                                                </dl>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-f2" class="block_ttl">空メール自動登録用メールアドレスを利用する方法</h5>
                                                        <div class="block_body">
                                                            <p>自動登録用のメールアドレスに空メールを送付することでメールマガジンに登録する方法です。<br>
                                                                空メール自動登録用メールアドレスはメールマガジンアドレスの「@」(アットマーク)より前の部分に「-apply」を付加したメールアドレスとなります。</p>
                                                            <p class="font-bold">例：mailmagazine-apply@example.com</p>
                                                            <ol class="ol">
                                                                <li>
                                                                    <p>メールマガジン管理画面にログインしてください。</p>
                                                                </li>
                                                                <li>
                                                                    <p>［自動登録機能］にある「空メール自動登録用メールアドレス」の「自動登録を有効にする」を選択し、「設定を保存する」をクリックしてください。</p>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_16.png" alt="空メール自動登録の設定"></p>
                                                                </li>
                                                                <li>
                                                                    <p>「空メール自動登録用メールアドレス」をメールもしくはX(旧Twitter)などのソーシャルメディアなどの任意の方法で周知してください。</p>
                                                                </li>
                                                                <li>
                                                                    <p>空メール自動登録用メールアドレスがメールを受信すると送信元のメールアドレスを自動登録します。</p>
                                                                    <aside class="msg msg_caution">
                                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                        <div class="msg_body">
                                                                            <p>メールマガジン作成前に既に本機能用メールアドレスと同一のメールアドレスが存在する場合は、利用できません。<br>
                                                                                その場合は、メールマガジン管理画面の［自動登録機能］にてエラーメッセージが表示されます。</p>
                                                                        </div>
                                                                    </aside>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-f3" class="block_ttl">任意のWebページにて登録窓口を設置する方法</h5>
                                                        <div class="block_body">
                                                            <ol class="ol">
                                                                <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                                <li><p>［自動登録機能］にある各フォームのを任意のWEBページに貼り付けてください。</p>

                                                                    <aside class="msg msg_notice">
                                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>登録フォームの貼り付けについて</h6>
                                                                        <div class="msg_body">
                                                                            <p>各フォームの利用はWebサイト1ページにつき1つまで可能です。</p>
                                                                        </div>
                                                                    </aside>
                                                                    <p><img class="img" src="../img/manual/man_mail_mailmagazine_12.png?date=2410" alt="購読・購読解除用フォーム"></p>
                                                                    <dl class="dl">
                                                                        <dt><i class="ico ico_square-fill"></i>メールマガジンを登録する人の手順</dt>
                                                                        <dd>
                                                                            <ol class="ol">
                                                                                <li>メールマガジンの登録を希望する人は、登録用フォームタグが作成されているWEBページの登録用フォームにメールアドレスを入力し、メールマガジンの登録申し込みを行ってください。</li>
                                                                                <li>「1」で入力したメールアドレス宛に、メールマガジンの登録に関するメールが送信されます。<br>
                                                                                    送られてきたメールの内容を確認した後、メール内に書かれたURLをクリックして登録処理を完了させてください。</li>
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
                                                        <h5 id="link-g1" class="block_ttl">ユーザーのメモを変更する方法</h5>
                                                        <div class="block_body">
                                                            <ol class="ol">
                                                                <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                                <li><p>[ユーザー管理］メニューに表示されているユーザー一覧から、メモを変更したいユーザーの[設定変更]をクリックしてください。</p></li>
                                                                <li><p>「メモ」で任意の文字を入力し、「設定を保存する」をクリックしてください。</p></li>
                                                            </ol>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-g2" class="block_ttl">ユーザーを削除する方法</h5>
                                                        <div class="block_body">
                                                            <ol class="ol">
                                                                <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                                <li><p>[ユーザー管理］メニューに表示されているユーザー一覧から、削除したいユーザーの[削除]をクリックしてください。</p></li>
                                                            </ol>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-g3" class="block_ttl">ユーザーの一覧表示</h5>
                                                        <div class="block_body">
                                                            <p>ユーザーの一覧取得画面で、現在登録しているメンバーのメールアドレスを一覧で確認することができます。<br>
                                                                画面に表示されたアドレスをコピーするなどしてしてバックアップ保管用にご利用ください。</p>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-g4" class="block_ttl">ユーザーの一括削除</h5>
                                                        <div class="block_body">
                                                            <p>現在登録されているメンバーを一括で削除することができます。<br>
                                                                （メール配信時にその都度配信メンバーを変更したい場合などに、[メンバーの一括登録]機能と併せてご利用するなどしてご活用ください。</p>
                                                        </div>
                                                    </section>

                                                </div>
                                            </section>

                                            <section id="link-h" class="section">
                                                <h4 class="section_ttl">7.メールマガジンの配信</h4>

                                                <div class="section_body">

                                                    <p>メールマガジン配信の手順は以下の通りです。</p>
                                                    <ol class="ol">
                                                        <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                        <li><p>[メールの配信]で必要事項を入力し『確認』をクリックし、配信内容を確認してください。</p></li>
                                                        <li><p>内容に問題なければ『メールを送信する』をクリックしてください。</p></li>
                                                    </ol>

                                                </div>
                                            </section>

                                            <section id="link-i" class="section">
                                                <h4 class="section_ttl">8.過去に配信したメールマガジンの確認</h4>

                                                <div class="section_body">

                                                    <ol class="ol">
                                                        <li><p>メールマガジン管理画面にログインしてください。</p></li>
                                                        <li>
                                                            <p>［配信済みの情報］メニューから過去に配信されたメールマガジンの内容が確認できます。</p>
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
                                                            <p>配信エラーとなるユーザーに対して各種設定を行うことができます。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_mailmagazine_13.png?date=2410" alt="自動削除設定"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>自動削除の有効化</th>
                                                                    <td>初期設定は【自動削除を有効にする】となっています。<br>
                                                                        本機能を無効にすることで配信できないメールアドレス宛てにメール送信を試みる頻度が増加し、他のお客様にも甚大な影響を及ぼす可能性が高くなります。<br>
                                                                        メールマガジンの管理者様におかれましては、「エラーメール集計」にてメール送信に失敗した宛先を注視いただき、複数回に渡り送信出来なかったメールアドレスをメンバーから除外いただくなどの別途対応が必要となります。                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>自動削除を実行するエラー回数</th>
                                                                    <td>メールアドレスに対する配信エラーの累計数を設定できます。<br>
                                                                        一週間の内に設定した回数を超えて配信エラーとなったメールアドレスはユーザーから自動削除されます。
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>メール通知</th>
                                                                    <td>ユーザーから自動削除されたメールアドレスを、管理者メールアドレス宛に通知を行うかどうか設定できます。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-j2" class="block_ttl">削除済みメールアドレス</h5>
                                                        <div class="block_body">
                                                            <p>自動削除されたユーザーの確認と再登録を行うことができます。</p>
                                                            <ol class="ol">
                                                                <li><p>一覧をクリアする場合、【削除履歴のクリア】ボタンをクリックしてください。</p></li>
                                                                <li><p>【選択したアドレスを再登録する】場合、一覧から再登録を行うメールアドレスを選択してください。</p></li>
                                                                <li><p>【全選択】で一覧に表示されている全てのメールアドレスの選択が可能です。<br>
                                                                        【全解除】は全てのメールアドレスを未選択の状態に戻します。</p></li>
                                                            </ol>
                                                            <p><img class="img" src="../img/manual/man_mail_mailmagazine_14.png?date=2410" alt="削除済みメールアドレス"></p>
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
                                                            <p><img class="img" src="../img/manual/man_mail_mailmagazine_15.png?date=2410" alt="エラーメール集計"></p>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 id="link-j4" class="block_ttl">エラーメール詳細</h5>
                                                        <div class="block_body">
                                                            <p>エラー戻りメールの発生頻度を確認することができます。</p>
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p class="note">※エラーメールの内容を本ツールから確認することはできません。
                                                                        エラーメールの詳細を確認されたい場合は、<a href="#link-d">環境設定</a>の[システム・エラーメール受信設定]を
                                                                        【受信する】にして【管理者メールアドレス】にて確認を行ってください。</p>
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
                                                    <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メールマガジン」の利用が可能です。<br>
                                                        設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                                    <ul class="list list_arrow-right">
                                                        <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                        <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                                    </ul>
                                                    <p>独自SSLが利用可能になりましたら、下記のようなURLへのリンクをお客様のサイト上に追加してください。</p>
                                                    <div class="border border_gray">
                                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>管理ツールのアドレス</p>
                                                        <p class="mb0">https://ドメイン名/xmailinglist/メールマガジン名/admin</p>
                                                    </div>
                                                    <div class="border border_gray">
                                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>退会用URL</p>
                                                        <p class="mb0">https://ドメイン名/xmailinglist/メールマガジン名/</p>
                                                    </div>
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