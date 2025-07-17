<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールフォーム設置手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜お問い合わせフォームなどに利用可能な「メールフォーム」を設置する手順です。エックスサーバーでは管理ツールからワンクリックでメールフォームを設置することが可能です。">

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
            
                <h3 class="sub-ttl">メールフォーム</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">メールフォーム概要</a></li>
                                <li><a href="#link-previous-b">メールフォームのインストール</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.サーバーパネル 「CGIツール」を選択します。</a></li>
                                        <li><a href="#link-previous-b02">2.「メールフォーム」欄の、「一覧・インストール」をクリックしてください。</a></li>
                                        <li><a href="#link-previous-b03">3.上部のメニューから「メールフォームインストール」をクリックしてください。</a></li>
                                        <li><a href="#link-previous-b04">4.入力画面では以下の項目を入力します。</a></li>
                                        <li><a href="#link-previous-b05">5.設置完了</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-c">メールフォームの基本設定</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.「設定画面URL」のアドレスにアクセス</a></li>
                                        <li><a href="#link-previous-c02">2.フォームの基本設定</a></li>
                                        <li><a href="#link-previous-c03">3.メールフォーム項目の設定</a></li>
                                        <li><a href="#link-previous-c04">4.設定を保存する</a></li>
                                        <li><a href="#link-previous-c05">5.確定</a></li>
                                        <li><a href="#link-previous-c06">6.設定完了</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">メールフォームのデザイン設定</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.スキンを選択</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-e">メールフォームの自動返信設定</a>
                                    <ol>
                                        <li><a href="#link-previous-e01">1.自動返信の有無</a></li>
                                        <li><a href="#link-previous-e02">2.設定を保存する</a></li>
                                        <li><a href="#link-previous-e03">3.確定</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-f">メールフォームへのリンク設置</a>
                                    <ul>
                                        <li><a href="#link-previous-f01">独自SSLの利用</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-g">メールフォームのアップグレード</a>
                                    <ul>
                                        <li><a href="#link-previous-g01">1.サーバーパネル 「CGIツール」を選択します。</a></li>
                                        <li><a href="#link-previous-g02">2.「メールフォーム」欄の、「一覧・インストール」をクリックしてください。</a></li>
                                        <li><a href="#link-previous-g03">3.対象となるメールフォームの「バージョン」欄にある「アップデート」をクリックしてください。</a></li>
                                        <li><a href="#link-previous-g04">4.「アップグレードする」をクリックしてください。</a></li>
                                        <li><a href="#link-previous-g02">5.アップグレード完了</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールフォーム概要</h4>
                                <div class="section_body">
                                    <p>サーバーパネルの「CGIツール」メニューから、お問い合わせの受付などにご利用可能なメールフォームをワンクリックで設置することができます。</p>
                                    <p>設置後、専用の設定画面でメールフォームの各種設定を変更することが可能です。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_1.png" alt="エックスサーバー・メールフォーム"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">メールフォームのインストール</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.サーバーパネル 「CGIツール」を選択します。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_2.png" alt="サーバーパネル上でCGIツールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「メールフォーム」欄の、「一覧・インストール」をクリックしてください。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_3.png" alt="メールフォームのインストールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.上部のメニューから「メールフォームインストール」をクリックしてください。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_4.png" alt="メールフォームのインストールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.入力画面では以下の項目を入力します。</h6>
                                            <div class="box_body">

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>メールフォームURL</th>
                                                            <td>インストール先のフォルダ名を任意で入力します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理ツールログインID（ユーザーID）</th>
                                                            <td>メールフォームの設定画面にログインするユーザー名です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>管理ツールパスワード</th>
                                                            <td>メールフォームの設定画面にログインする際のパスワードです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>受信メールアドレス</th>
                                                            <td>お問い合わせの内容を受信するメールアドレスです。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_5.png" alt="メールフォームのインストールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b05">5.設置完了</h6>
                                            <div class="box_body">
                                                <p>以上でメールフォームの設置が完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_6.png" alt="メールフォーム設置完了"></p>
                                                <p>設置完了画面に表示されている「メールフォームURL」のアドレスにアクセスすると、現在のメールフォームを確認することが出来ます。<br>
                                                メールフォームの設定を編集する場合、「設定画面URL」のアドレスへアクセスしてください。</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>独自SSLの利用</dt>
                                                    <dd>
                                                        <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを利用した「設定画面」へのログインが可能です。<br>
                                                        設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                                        <ul class="list list_arrow-right">
                                                            <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                            <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                                        </ul>
                                                        <p>独自SSLが利用可能になりましたら、下記にアクセスすることで、「設定画面」にログインすることが出来ます。</p>
                                                        <div class="border border_gray">
                                                            <em class="font-bold">https://ドメイン名/script/mailform/フォルダ名/admin/</em>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">メールフォームの基本設定</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.「設定画面URL」のアドレスにアクセス</h6>
                                            <div class="box_body">
                                                <p>メールフォーム設置完了画面に記載のある「設定画面URL」のアドレスにアクセスしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.フォームの基本設定</h6>
                                            <div class="box_body">
                                                <p>設定画面が表示されましたら、まずはフォームの「基本設定」を行います。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_7.png" alt="メールフォームの基本設定画面"></p>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>ページのタイトル</th>
                                                            <td>メールフォームページに表示されるタイトルです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールフォームの名前</th>
                                                            <td>メールフォーム上に表示される見出しです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>サイトへの戻りURL</th>
                                                            <td>「サイトへ戻る」リンクをクリックした際の、遷移先URLです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>受信するメールアドレス</th>
                                                            <td>メールフォームからのお問い合わせ内容を受信するメールアドレスです。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>受信するメールの件名</th>
                                                            <td>お問い合わせ内容を載せたメールの件名です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールの連続送信を制限する時間</th>
                                                            <td>メールの連続送信を行えないようにする時間を指定します。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>それぞれ入力できたら、次に「メールフォーム項目の設定」へと進みます。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.メールフォーム項目の設定</h6>
                                            <div class="box_body">
                                                <p>続いて、ページを下へと進めると、「メールフォーム項目の設定」を行うことが出来ます。<br>
                                                ここでは、フォームに使用する項目と、それらの細かな設定が可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_8.png" alt="メールフォーム項目の設定"></p>
                                                <p>使用する項目は、ページ右側の一覧より「<em class="font-bold">追加</em>」をクリックして追加してください。<br>
                                                また、使用しない項目は、ページ左側の一覧より「<em class="font-bold">除外</em>」をクリックしてください。</p>
                                                <p>使用する項目には、それぞれ下記のような項目が設定可能です。</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>並べ替え</dt>
                                                    <dd>
                                                    フォーム項目の表示する順序を変更します。<br>
                                                    変更を行う項目の「▲」もしくは「▼」で、表示順を並べ替えることが可能です。
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>表示名</dt>
                                                    <dd>実際にフォームとして表示される際の、項目名を設定することが可能です。
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>入力必須</dt>
                                                    <dd>チェックすることで、入力必須の項目とすることが可能です。
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>オプション</dt>
                                                    <dd>項目によっては、オプションの設定が可能なものがあります。<br>
                                                    上記以外の補助的な設定項目は、こちらから設定が可能です。
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4.設定を保存する</h6>
                                            <div class="box_body">
                                                <p>フォームに使用する項目の設定が完了したら、ページ下部の「設定を保存する」をクリックしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c05">5.確定</h6>
                                            <div class="box_body">
                                                <p>それぞれ設定した情報が表示されますので、ご確認の上、問題が無ければ「確定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_9.png" alt="プレビュー表示"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c06">6.設定完了</h6>
                                            <div class="box_body">
                                                <p>以上、メールフォームの設定が完了です。<br>
                                                メールフォームが設置されているアドレスにアクセスして、設定が反映されていることを確認してください。</p>
                                                <p class="note">※設定を変更したい場合は、何度でもこの設定画面から変更を行うことができます。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-d" class="section_ttl">メールフォームのデザイン設定</h4>
                                <div class="section_body">

                                    <p>初期設定のままでもお使いいただくことは可能ですが、サイトや用途に合わせて、お好みのデザインを設定することが出来ます。<br>
                                    設定を行う際は、メールフォームの設定画面の上部メニューより「デザインの設定」をクリックしてください。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.スキンを選択</h6>
                                            <div class="box_body">
                                                <p>設定画面では、まずメールフォームの「スキン」を選択します。<br>
                                                「<em class="font-bold">定型スキン</em>」と「<em class="font-bold">自作スキン</em>」の2種より選択が可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_10.png" alt="フォームデザイン用スキンの選択"></p>
                                                <p>選択したスキンに応じて、デザイン設定を施します。</p>

                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>定型スキンの場合</dt>
                                                    <dd>
                                                        <p>エックスサーバーでの初期設定のデザインを用いて、パーツ毎のカラーやメッセージなど、簡易的なデザイン設定を施すことが出来ます。<br>
                                                        簡単に導入を行いたい方などにおすすめです。</p>
                                                        <p class="font-bold">まずは、「サイズの設定」を行います。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_11.png" alt="フォームサイズの設定"></p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">サイズの設定</em><br>
                                                            メールフォームの横幅を、ピクセル(px)単位で設定します。
                                                        </div>
                                                        <p>続いて、各パーツのカラーを設定します。<br>
                                                        「<em class="font-bold">色見本</em>」から選択すれば簡単に設定も出来ますが、「RGBカラーコード(16進数)」を入力することでも指定が可能です。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_12.png" alt="フォーム各所のカラー設定"></p>
                                                        <p>設定可能な項目は下記の通りです。</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w20per w30per-s">タイトル</th>
                                                                    <td>フォームのタイトル(見出し)部分のカラーを設定します。<br>
                                                                        「お問合せフォーム」と記載されている部分の文字および付随する線のカラーです。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>説明文</th>
                                                                    <td>タイトルの下に記載される、説明文の文字色を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>背景色</th>
                                                                    <td>画面全体の背景色を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>枠線</th>
                                                                    <td>フォーム入力部の表に使用する枠線の色を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>項目背景</th>
                                                                    <td>フォーム入力部の項目見出し部分に使用する背景色を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>項目文字</th>
                                                                    <td>フォーム入力部の項目を表示する文字色を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>エラー表示</th>
                                                                    <td>エラーが表示された際の文字色を設定します。</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>また、メールフォームの各画面において、表示される文章の設定を行うことが出来ます。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_13.png" alt="表示される文章の設定"></p>
                                                        <p>設定できるのは、下記の3画面で表示される文章です。</p>
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="w30per-s">入力画面</th>
                                                                    <td>メールフォームの入力画面において表示される文章を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>確認画面</th>
                                                                    <td>入力内容の確認を行う画面で表示される文章を設定します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>完了画面</th>
                                                                    <td>メールフォームからの送信が完了した際に表示される文章を設定します。</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>設定作業が終わったら、ページ下部にある「設定を保存する」をクリックしてください。<br>
                                                        内容を確認した後、確定ボタンをクリックすることでデザインが反映されます。</p>
                                                    </dd>
                                                </dl>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>自作スキン</dt>
                                                    <dd>
                                                        <p>HTMLテンプレートやスタイルシートを直接編集し、自由自在にデザインを変更することが出来ます。<br>
                                                        こだわったデザインにしたい方などにおすすめです。</p>
                                                        <aside class="msg msg_caution">
                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                            <div class="msg_body">
                                                                <p>編集内容によっては、フォームの動作などに影響を及ぼすことがありますので、取り扱いにはご注意ください。</p>
                                                            </div>
                                                        </aside>
                                                        <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_14.png" alt="自作スキン設定画面"></p>
                                                        <p>編集が行える箇所は下記の通りです。</p>
                                                        <ul class="ul">
                                                            <li>入力画面テンプレート(HTML)</li>
                                                            <li>確認画面テンプレート(HTML)</li>
                                                            <li>完了画面テンプレート(HTML)</li>
                                                            <li>スタイルシート(CSS)</li>
                                                        </ul>
                                                        <p>編集画面の右側にあるボタンでは下記のような操作が行えます。</p>
                                                        <ul class="ul">
                                                            <li>保存する … 現在の状態を保存します。</li>
                                                            <li>リセット … 前回保存した時点での状態まで戻します。</li>
                                                            <li>プレビュー … 現在の状態でのフォームを確認することが出来ます。</li>
                                                        </ul>
                                                        <p>それぞれ保存を行った時点で、実際のフォームに編集が反映されます。</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 id="link-previous-e" class="section_ttl">メールフォームの自動返信設定</h4>
                                <div class="section_body">
                                    <p>お問い合わせに対してメールの自動返信を設定することが出来ます。<br>
                                    設定を行う際は、メールフォームの設定画面の上部メニューより「自動返信メールの設定」をクリックしてください。</p>
                                    <p>※メールの自動返信を使用するには、フォームに「ご連絡先メールアドレス」の項目を設定する必要があります。「ご連絡先メールアドレス」が未設定の場合は、自動返信メールは送信されません。</p>
                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.自動返信の有無</h6>
                                            <div class="box_body">
                                                <p>設定画面では、まずメールの自動返信を行うかを選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_15.png" alt="自動返信メールの設定"></p>
                                                <p>使用する場合は、下の項目を入力します。</p>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>メールの件名</th>
                                                            <td>自動返信を行うメールの件名です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールの本文</th>
                                                            <td>自動返信を行うメールの本文です。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>差出人のアドレス</th>
                                                            <td>自動返信を行うメールの差出人(from)のメールアドレスです。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.設定を保存する</h6>
                                            <div class="box_body">
                                                <p>フォームに使用する項目の設定が完了したら、ページ下部の「設定を保存する」をクリックしてください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.確定</h6>
                                            <div class="box_body">
                                                <p>それぞれ設定した情報が表示されますので、ご確認の上、問題が無ければ「確定」をクリックしてください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <p>以上、メールの自動返信設定が完了です。</p>

                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-f" class="section_ttl">メールフォームへのリンク設置</h4>
                                <div class="section_body">

                                    <p>メールフォームの上部メニューより「<em class="font-bold">設置用のHTMLタグ</em>」をクリックしてください。<br>
                                    HTMLページ内に設置するための、下記のようなコードが表示されますので、ご確認ください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_16.png" alt="設置用HTMLコード"></p>
                                    <p>テキストエリア内にあるコードをコピーし、お客様のサイト上で表示したい箇所に貼り付けてください。<br>
                                    表示されたリンクをクリックすることで、設置したメールフォームへとアクセスすることが出来ます。</p>
                                    <section class="block">
                                        <h3 class="block_ttl" id="link-previous-f01">独自SSLの利用</h3>
                                        <div class="block_body">
                                            <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メールフォーム」の利用が可能です。<br>
                                            設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                            </ul>
                                            <p>独自SSLが利用可能になりましたら、下記のようなURLへのリンクをお客様のサイト上に追加してください。</p>
                                            <div class="border border_gray">
                                                <em class="font-bold">https://ドメイン名/script/mailform/フォルダ名/</em>
                                            </div>
                                        </div>
                                    </section>


                                </div>
                            </section>
                            <!-- /.section -->


                            <section class="section">
                                <h4 id="link-previous-g" class="section_ttl">メールフォームのアップグレード</h4>
                                <div class="section_body">
                                    <p>古いバージョンをお使いの方は、新しいバージョンがリリースされた際にメールフォームをアップグレードすることができます。</p>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>アップグレードを行う場合の注意</h6>
                                        <div class="msg_body">
                                            <p>予期せぬ問題によってデータが消失する可能性があります。必ず事前にバックアップを行ってからアップグレードを行ってください。</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.サーバーパネル 「CGIツール」を選択します。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_2.png" alt="サーバーパネル上でCGIツールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.「メールフォーム」欄の、「一覧・インストール」をクリックしてください。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_3.png" alt="メールフォームのインストールを選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.対象となるメールフォームの「バージョン」欄にある「アップデート」をクリックしてください。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_17.png" alt="「アップデート」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g04">4.「アップグレードする」をクリックしてください。</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_cgi_mailform_18.png" alt="「アップグレードする」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g05">5.アップグレード完了</h6>
                                            <div class="box_body">
                                                <p>以上でアップグレードが完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

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
                                    <li><a href="#link-a">メールフォーム概要</a></li>
                                    <li><a href="#link-b">メールフォームのインストール</a>
                                        <ol>
                                            <li><a href="#link-b1">1.サーバーパネル 「メールフォーム(CGIツール)」をクリックします。</a></li>
                                            <li><a href="#link-b2">2.「新規インストール」をクリックしてください。</a></li>
                                            <li><a href="#link-b3">3.入力画面で以下の項目を入力し、「インストールする」をクリックします。</a></li>
                                            <li><a href="#link-b4">4.設置完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">メールフォームの基本設定</a>
                                        <ol>
                                            <li><a href="#link-c1">1.「メールフォームURL」のアドレスにアクセス</a></li>
                                            <li><a href="#link-c2">2.フォームの基本設定</a></li>
                                            <li><a href="#link-c3">3.メールフォーム項目の設定</a></li>
                                            <li><a href="#link-c4">4.設定を保存する</a></li>
                                            <li><a href="#link-c5">5.確定</a></li>
                                            <li><a href="#link-c6">6.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">メールフォームのデザイン設定</a>
                                        <ol>
                                            <li><a href="#link-d1">1.スキンを選択</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">メールフォームの自動返信設定</a>
                                        <ol>
                                            <li><a href="#link-e1">1.自動返信の有無</a></li>
                                            <li><a href="#link-e2">2.設定を保存する</a></li>
                                            <li><a href="#link-e3">3.確定</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">メールフォームへのリンク設置</a>
                                        <ul>
                                            <li><a href="#link-f1">独自SSLの利用</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-g">メールフォームのアップグレード</a>
                                        <ul>
                                            <li><a href="#link-g1">1.サーバーパネル 「メールフォーム(CGIツール)」をクリックします。</a></li>
                                            <li><a href="#link-g2">2.対象となるメールフォームの「バージョン」欄にある「アップグレード」をクリックしてください。</a></li>
                                            <li><a href="#link-g3">3.「アップグレードする」をクリックしてください。</a></li>
                                            <li><a href="#link-g4">4.アップグレード完了</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <div class="section_body">

                                            <section id="link-a" class="section">
                                                <h3 class="section_ttl">メールフォーム概要</h3>
                                                <div class="section_body">
                                                    <p>サーバーパネルの「メールフォーム(CGIツール)」メニューから、お問い合わせの受付などにご利用可能なメールフォームをワンクリックで設置することができます。</p>
                                                    <p>設置後、専用の設定画面でメールフォームの各種設定を変更することが可能です。</p>
                                                    <p><img class="img" src="../img/manual/man_install_cgi_mailform_1.png?date=2410" alt="エックスサーバー・メールフォーム"></p>
                                                </div>
                                            </section>

                                            <section id="link-b" class="section">
                                                <h3 class="section_ttl">メールフォームのインストール</h3>
                                                <div class="section_body">


                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h4 class="box_ttl" id="link-b1">1. サーバーパネル 「メールフォーム(CGIツール)」をクリックします。</h4>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_2.png?date=2410" alt="サーバーパネル上でCGIツールを選択"></p>
                                                            </div>

                                                        </section>


                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b2">2.「新規インストール」をクリックしてください。</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_3.png?date=2410" alt="メールフォームのインストールを選択"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b3">3.入力画面で以下の項目を入力し、「インストールする」をクリックします。</h6>
                                                            <div class="box_body">

                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>メールフォームURL</th>
                                                                        <td>インストール先のフォルダ名を任意で入力します。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>管理画面ログインID（ユーザーID）</th>
                                                                        <td>メールフォームの設定画面にログインするユーザー名です。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>管理画面パスワード</th>
                                                                        <td>メールフォームの設定画面にログインする際のパスワードです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>受信メールアドレス</th>
                                                                        <td>お問い合わせの内容を受信するメールアドレスです。</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_5.png?date=2410" alt="メールフォームのインストールを選択"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-b4">4.設置完了</h6>
                                                            <div class="box_body">
                                                                <p>以上でメールフォームの設置が完了です。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_6.png?date=2410" alt="メールフォーム設置完了"></p>
                                                                <p>一覧に表示されている「メールフォームURL」のアドレスにアクセスすると、現在のメールフォームを確認することが出来ます。<br>
                                                                    メールフォームの設定を編集する場合、「管理」のアドレスへアクセスしてください。</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>独自SSLの利用</dt>
                                                                    <dd>
                                                                        <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを利用した「設定画面」へのログインが可能です。<br>
                                                                            設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                                                        <ul class="list list_arrow-right">
                                                                            <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                                            <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                                                        </ul>
                                                                        <p>独自SSLが利用可能になりましたら、下記にアクセスすることで、「設定画面」にログインすることが出来ます。</p>
                                                                        <div class="border border_gray">
                                                                            <em class="font-bold">https://ドメイン名/script/mailform/フォルダ名/admin/</em>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->

                                                </div>
                                            </section>

                                            <section id="link-c" class="section">
                                                <h3 class="section_ttl">メールフォームの基本設定</h3>
                                                <div class="section_body">

                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c1">1.「メールフォームURL」のアドレスにアクセス</h6>
                                                            <div class="box_body">
                                                                <p>メールフォームの一覧画面に記載のある「メールフォームURL」のアドレスにアクセスしてください。</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c2">2.フォームの基本設定</h6>
                                                            <div class="box_body">
                                                                <p>設定画面が表示されましたら、まずはフォームの「基本設定」を行います。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_7.png?date=2410" alt="メールフォームの基本設定画面"></p>
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>ページのタイトル</th>
                                                                        <td>メールフォームページに表示されるタイトルです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>メールフォームの名前</th>
                                                                        <td>メールフォーム上に表示される見出しです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>サイトへの戻りURL</th>
                                                                        <td>「サイトへ戻る」リンクをクリックした際の、遷移先URLです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>受信するメールアドレス</th>
                                                                        <td>メールフォームからのお問い合わせ内容を受信するメールアドレスです。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>受信するメールの件名</th>
                                                                        <td>お問い合わせ内容を載せたメールの件名です。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>メールの連続送信を制限する時間</th>
                                                                        <td>メールの連続送信を行えないようにする時間を指定します。</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>それぞれ入力できたら、次に「メールフォーム項目の設定」へと進みます。</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c3">3.メールフォーム項目の設定</h6>
                                                            <div class="box_body">
                                                                <p>続いて、ページを下へと進めると、「メールフォーム項目の設定」を行うことが出来ます。<br>
                                                                    ここでは、フォームに使用する項目と、それらの細かな設定が可能です。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_8.png?date=2410" alt="メールフォーム項目の設定"></p>
                                                                <p>使用する項目は、ページ右側の一覧より「<em class="font-bold">追加</em>」をクリックして追加してください。<br>
                                                                    また、使用しない項目は、ページ左側の一覧より「<em class="font-bold">除外</em>」をクリックしてください。</p>
                                                                <p>使用する項目には、それぞれ下記のような項目が設定可能です。</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>並べ替え</dt>
                                                                    <dd>
                                                                        フォーム項目の表示する順序を変更します。<br>
                                                                        変更を行う項目の「▲」もしくは「▼」で、表示順を並べ替えることが可能です。
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>表示名</dt>
                                                                    <dd>実際にフォームとして表示される際の、項目名を設定することが可能です。
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>入力必須</dt>
                                                                    <dd>チェックすることで、入力必須の項目とすることが可能です。
                                                                    </dd>
                                                                    <dt><i class="ico ico_square-fill"></i>オプション</dt>
                                                                    <dd>項目によっては、オプションの設定が可能なものがあります。<br>
                                                                        上記以外の補助的な設定項目は、こちらから設定が可能です。
                                                                    </dd>
                                                                </dl>

                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c4">4.設定を保存する</h6>
                                                            <div class="box_body">
                                                                <p>フォームに使用する項目の設定が完了したら、ページ下部の「設定を保存する」をクリックしてください。</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c5">5.確定</h6>
                                                            <div class="box_body">
                                                                <p>それぞれ設定した情報が表示されますので、ご確認の上、問題が無ければ「確定」をクリックしてください。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_9.png?date=2410" alt="プレビュー表示"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-c6">6.設定完了</h6>
                                                            <div class="box_body">
                                                                <p>以上、メールフォームの設定が完了です。<br>
                                                                    メールフォームが設置されているアドレスにアクセスして、設定が反映されていることを確認してください。</p>
                                                                <p class="note">※設定を変更したい場合は、何度でもこの設定画面から変更を行うことができます。</p>
                                                            </div>
                                                        </section>
                                                    </div><!--serial-box-->
                                                </div>
                                            </section>


                                            <section id="link-d" class="section">
                                                <h3 class="section_ttl">メールフォームのデザイン設定</h3>
                                                <div class="section_body">
                                                    <p>初期設定のままでもお使いいただくことは可能ですが、サイトや用途に合わせて、お好みのデザインを設定することが出来ます。<br>
                                                        設定を行う際は、メールフォームの設定画面の上部メニューより「デザインの設定」をクリックしてください。</p>

                                                    <div class="serial-box">
                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-d1">1.スキンを選択</h6>
                                                            <div class="box_body">
                                                                <p>設定画面では、まずメールフォームの「スキン」を選択します。<br>
                                                                    「<em class="font-bold">定型スキン</em>」と「<em class="font-bold">自作スキン</em>」の2種より選択が可能です。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_10.png?date=2410" alt="フォームデザイン用スキンの選択"></p>
                                                                <p>選択したスキンに応じて、デザイン設定を施します。</p>

                                                                <dl class="dl">
                                                                    <dt><i class="ico ico_square-fill"></i>定型スキンの場合</dt>
                                                                    <dd>
                                                                        <p>エックスサーバーでの初期設定のデザインを用いて、パーツ毎のカラーやメッセージなど、簡易的なデザイン設定を施すことが出来ます。<br>
                                                                            簡単に導入を行いたい方などにおすすめです。</p>
                                                                        <p class="font-bold">まずは、「サイズの設定」を行います。</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_11.png?date=2410" alt="フォームサイズの設定"></p>
                                                                        <div class="border border_gray">
                                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">サイズの設定</em><br>
                                                                            メールフォームの横幅を、ピクセル(px)単位で設定します。
                                                                        </div>
                                                                        <p>続いて、各パーツのカラーを設定します。<br>
                                                                            「<em class="font-bold">色見本</em>」から選択すれば簡単に設定も出来ますが、「RGBカラーコード(16進数)」を入力することでも指定が可能です。</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_12.png?date=2410" alt="フォーム各所のカラー設定"></p>
                                                                        <p>設定可能な項目は下記の通りです。</p>
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th class="w20per w30per-s">タイトル</th>
                                                                                <td>フォームのタイトル(見出し)部分のカラーを設定します。<br>
                                                                                    「お問合せフォーム」と記載されている部分の文字および付随する線のカラーです。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>説明文</th>
                                                                                <td>タイトルの下に記載される、説明文の文字色を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>背景色</th>
                                                                                <td>画面全体の背景色を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>枠線</th>
                                                                                <td>フォーム入力部の表に使用する枠線の色を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>項目背景</th>
                                                                                <td>フォーム入力部の項目見出し部分に使用する背景色を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>項目文字</th>
                                                                                <td>フォーム入力部の項目を表示する文字色を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>エラー表示</th>
                                                                                <td>エラーが表示された際の文字色を設定します。</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <p>また、メールフォームの各画面において、表示される文章の設定を行うことが出来ます。</p>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_13.png?date=2410" alt="表示される文章の設定"></p>
                                                                        <p>設定できるのは、下記の3画面で表示される文章です。</p>
                                                                        <table class="table">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th class="w30per-s">入力画面</th>
                                                                                <td>メールフォームの入力画面において表示される文章を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>確認画面</th>
                                                                                <td>入力内容の確認を行う画面で表示される文章を設定します。</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>完了画面</th>
                                                                                <td>メールフォームからの送信が完了した際に表示される文章を設定します。</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <p>設定作業が終わったら、ページ下部にある「設定を保存する」をクリックしてください。<br>
                                                                            内容を確認した後、確定ボタンをクリックすることでデザインが反映されます。</p>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="dl mb0">
                                                                    <dt><i class="ico ico_square-fill"></i>自作スキン</dt>
                                                                    <dd>
                                                                        <p>HTMLテンプレートやスタイルシートを直接編集し、自由自在にデザインを変更することが出来ます。<br>
                                                                            こだわったデザインにしたい方などにおすすめです。</p>
                                                                        <aside class="msg msg_caution">
                                                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                            <div class="msg_body">
                                                                                <p>編集内容によっては、フォームの動作などに影響を及ぼすことがありますので、取り扱いにはご注意ください。</p>
                                                                            </div>
                                                                        </aside>
                                                                        <p><img class="img" src="../img/manual/man_install_cgi_mailform_14.png?date=2410" alt="自作スキン設定画面"></p>
                                                                        <p>編集が行える箇所は下記の通りです。</p>
                                                                        <ul class="ul">
                                                                            <li>入力画面テンプレート(HTML)</li>
                                                                            <li>確認画面テンプレート(HTML)</li>
                                                                            <li>完了画面テンプレート(HTML)</li>
                                                                            <li>スタイルシート(CSS)</li>
                                                                        </ul>
                                                                        <p>編集画面の右側にあるボタンでは下記のような操作が行えます。</p>
                                                                        <ul class="ul">
                                                                            <li>保存する … 現在の状態を保存します。</li>
                                                                            <li>リセット … 前回保存した時点での状態まで戻します。</li>
                                                                            <li>プレビュー … 現在の状態でのフォームを確認することが出来ます。</li>
                                                                        </ul>
                                                                        <p>それぞれ保存を行った時点で、実際のフォームに編集が反映されます。</p>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->
                                                </div>
                                            </section>

                                            <section id="link-e" class="section">
                                                <h3 class="section_ttl">メールフォームの自動返信設定</h3>
                                                <div class="section_body">
                                                    <p>お問い合わせに対してメールの自動返信を設定することが出来ます。<br>
                                                        設定を行う際は、メールフォームの設定画面の上部メニューより「自動返信メールの設定」をクリックしてください。</p>
                                                    <p>※メールの自動返信を使用するには、フォームに「ご連絡先メールアドレス」の項目を設定する必要があります。「ご連絡先メールアドレス」が未設定の場合は、自動返信メールは送信されません。</p>
                                                    <div class="serial-box mb10">

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e1">1.自動返信の有無</h6>
                                                            <div class="box_body">
                                                                <p>設定画面では、まずメールの自動返信を行うかを選択します。</p>
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_15.png?date=2410" alt="自動返信メールの設定"></p>
                                                                <p>使用する場合は、下の項目を入力します。</p>
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>メールの件名</th>
                                                                        <td>自動返信を行うメールの件名です。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>メールの本文</th>
                                                                        <td>自動返信を行うメールの本文です。</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>差出人のアドレス</th>
                                                                        <td>自動返信を行うメールの差出人(from)のメールアドレスです。</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e2">2.設定を保存する</h6>
                                                            <div class="box_body">
                                                                <p>フォームに使用する項目の設定が完了したら、ページ下部の「設定を保存する」をクリックしてください。</p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-e3">3.確定</h6>
                                                            <div class="box_body">
                                                                <p>それぞれ設定した情報が表示されますので、ご確認の上、問題が無ければ「確定」をクリックしてください。</p>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->
                                                    <p>以上、メールの自動返信設定が完了です。</p>
                                                </div>
                                            </section>


                                            <section id="link-f" class="section">
                                                <h3 class="section_ttl">メールフォームへのリンク設置</h3>
                                                <div class="section_body">

                                                    <p>メールフォームの上部メニューより「<em class="font-bold">設置用のHTMLタグ</em>」をクリックしてください。<br>
                                                        HTMLページ内に設置するための、下記のようなコードが表示されますので、ご確認ください。</p>
                                                    <p><img class="img" src="../img/manual/man_install_cgi_mailform_16.png?date=2410" alt="設置用HTMLコード"></p>
                                                    <p>テキストエリア内にあるコードをコピーし、お客様のサイト上で表示したい箇所に貼り付けてください。<br>
                                                        表示されたリンクをクリックすることで、設置したメールフォームへとアクセスすることが出来ます。</p>
                                                    <section class="block">
                                                        <h3 class="block_ttl" id="link-f1">独自SSLの利用</h3>
                                                        <div class="block_body">
                                                            <p>無料独自SSLを設定いただくか、もしくはオプション独自SSLのご契約を行っていただくことで、独自SSLを使用した「メールフォーム」の利用が可能です。<br>
                                                                設定・お申し込みの方法はそれぞれ下記のページをご覧ください。</p>
                                                            <ul class="list list_arrow-right">
                                                                <li><a href="man_server_ssl.php">無料独自SSLの設定方法</a></li>
                                                                <li><a href="man_order_ssl.php">オプション独自SSLのお申し込み方法</a></li>
                                                            </ul>
                                                            <p>独自SSLが利用可能になりましたら、下記のようなURLへのリンクをお客様のサイト上に追加してください。</p>
                                                            <div class="border border_gray">
                                                                <em class="font-bold">https://ドメイン名/script/mailform/フォルダ名/</em>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>

                                            <section id="link-g" class="section">
                                                <h3 class="section_ttl">メールフォームのアップグレード</h3>
                                                <div class="section_body">

                                                    <p>古いバージョンをお使いの方は、新しいバージョンがリリースされた際にメールフォームをアップグレードすることができます。</p>
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>アップグレードを行う場合の注意</h6>
                                                        <div class="msg_body">
                                                            <p>予期せぬ問題によってデータが消失する可能性があります。必ず事前にバックアップを行ってからアップグレードを行ってください。</p>
                                                        </div>
                                                    </aside>

                                                    <div class="serial-box">

                                                        <section class="box">
                                                            <h4 class="box_ttl" id="link-g1">1. サーバーパネル 「メールフォーム(CGIツール)」をクリックします。</h4>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_2.png?date=2410" alt="サーバーパネル上でCGIツールを選択"></p>
                                                            </div>

                                                        </section>


                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g2">2.対象となるメールフォームの「バージョン」欄にある「アップグレード」をクリックしてください。</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_17.png?date=2410" alt="メールフォームの「バージョン」欄にある「アップグレード」をクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g3">3.「アップグレードする」をクリックしてください。。</h6>
                                                            <div class="box_body">
                                                                <p><img class="img" src="../img/manual/man_install_cgi_mailform_18.png?date=2410" alt="「アップデートする」をクリック"></p>
                                                            </div>
                                                        </section>

                                                        <section class="box">
                                                            <h6 class="box_ttl" id="link-g4">4.アップグレード完了</h6>
                                                            <div class="box_body">
                                                                <p>以上でアップグレードが完了です。</p>
                                                            </div>
                                                        </section>

                                                    </div><!--serial-box-->

                                                </div>

                                            </section>

                                        </div><!--section_body-->
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