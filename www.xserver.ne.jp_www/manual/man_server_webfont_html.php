<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Webフォント設定について(HTML記述形式) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜HTML上に直接書体を指定してWebフォントを設定する「HTML記述形式」の手順を紹介しています。">

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
            
                <h3 class="sub-ttl">HTML記述形式でのご利用</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-a">Webフォントの設定手順</a>
                                    <ol>
                                        <li><a href="#link-a01">1.「Webフォント設定」をクリック</a></li>
                                        <li><a href="#link-a02">2.設定するドメインを選択</a></li>
                                        <li><a href="#link-a03">3.HTMLを編集</a></li>
                                        <li><a href="#link-a04">4.CSSを編集</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-a011">Webフォントの適用を解除する方法について</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-b">各WebフォントのCSS指定用コード</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Webフォントに関する「よくある質問」</a></li>
                            </ul>

                            <ul class="list list_arrow-right">
                                <li>機能の仕様などについては、「<a href="../functions/service_webfont.php">機能 > Webフォント</a>」をご参照ください。</li>
                                <li>WordPressでご利用の場合は、「<a href="man_server_webfont_wp.php">マニュアル > Webフォント設定について > WordPressプラグインでのご利用</a>」をご参照ください。</li>
                            </ul>

                            <div class="msg msg_notice">
                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能のご利用に関して</h4>
                                <div class="msg_body">
                                    <ul class="ul">
                                        <li>33書体を月間7.5万PVまでご利用いただけます。<br>また、月間7.5万PVを超える場合、Webフォントの適用は外れますが、ブラウザ標準でのフォント表示に戻る為、表示内容に影響はありません。</li>
                                        <li>利用可能な書体以外を指定することはできません。</li>
                                        <li>お客様が編集されたプログラム等に関する技術的内容のお問い合わせについてはサポート対象外です。<br>また、サイトの状況によってご利用いただけない場合もあります。</li>
                                    </ul>
                                </div>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">Webフォントの設定手順</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a01">1.「Webフォント設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont1.png" alt="設定対象ドメインを確認して、「Webフォント設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2.設定するドメインを選択</h5>
                                            <div class="box_body">
                                                <p>「Webフォント設定の追加」のプルダウンメニューより設定するドメインを選択し「設定する」ボタンクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_webfont2.png" alt="Webフォントを設定するドメインを選択し、「設定」ボタンをクリック"></p>
                                                <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                <div class="msg msg_notice">
                                                    <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                    <div class="msg_body">
                                                        <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                        <p class="mb0">また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a03">3.HTMLを編集</h5>
                                            <div class="box_body">
                                                <p>以下のコードをWebフォントで表示したいページのHEADタグ(&lt;head&gt;〜&lt;/head&gt;)内に記述してください。<br>
                                                なお、下記のコードは&lt;/head&gt;タグの直前に記述することが推奨されています。</p>

                                                <i class="ico ico_square-fill"></i>HTML
                                                <pre class="code">
&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a04">4.CSSを編集</h5>
                                            <div class="box_body">
                                                <p>Webフォントを適用したいタグにご希望の書体（font-family）を設定してください。<br>
                                                各フォントのfont-familyについては「<a href="#i2">各WebフォントのCSS指定用コード</a>」をご参照ください。</p>

                                                <i class="ico ico_square-fill"></i>HTML
                                                <pre class="code">
&lt;h1&gt;Webフォント活用サイト&lt;/h1&gt;</pre>

                                                <i class="ico ico_square-fill"></i>CSS
                                                <pre class="code">
h1{ font-family: "新ゴ R"; }</pre>
                                                <p>編集したCSSファイルと手順3で編集したHTMLファイルをサーバーにアップロードし、ブラウザ上で「更新」をクリックするとWebフォントが反映されます。</p>

                                                <p>また、上記で指定したWebフォントの適用が外れる、または何らかの理由で適用できない際、続けて代替として表示される標準フォントを指定することが可能です。必要に応じて下記の例のように,(半角コンマ)区切りで代替フォントを指定してください。</p>

                                                <i class="ico ico_square-fill"></i>CSS
                                                <pre class="code mb20">
h1{ font-family: "新ゴ R"<span class="base-color font-bold"> , "メイリオ" , Meiryo , "ヒラギノ角ゴPro W3" , "Hiragino Kaku Gothic Pro" , "ＭＳ Ｐゴシック" , sans-serif;</span> }</pre>
                                                <div class="msg msg_notice">
                                                    <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>Webフォントを太字にする方法について</h4>
                                                    <div class="msg_body">
                                                        <p>Webフォントはフォント本来の太さで表示する関係上、Bタグやfont-weightなどの太字設定は無効となります。<br>
                                                        太字を適用したい場合は太字にしたい範囲を別のタグで囲み、現在のフォントよりも太いWebフォントを適用してください。</p>

                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">
&lt;p&gt;Webフォントは<span class="base-color font-bold">&lt;b&gt;美しい！&lt;/b&gt;</span>&lt;/p&gt;</pre>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code">
p{ font-family: "新ゴ R"; }
<span class="base-color font-bold">b{ font-family: "新ゴ B"; }</span></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <section id="i1" class="block">
                                        <h5 class="block_ttl" id="link-a011">Webフォントの適用を解除する方法について</h5>
                                        <div class="block_body">
                                            <p>Webフォントの適用を解除するには、以下の作業を順に行ってください。</p>
                                            <ol class="ol ol_margin">
                                                <li>HTMLファイルとCSSファイルよりWebフォントの適用時に追加した記述を削除します。<br>
                                                その際、HTMLファイルより下記のJavaScriptファイルの記述も必ず削除してください。<br>
                                                <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre></li>

                                                <li>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>」⇒「Webフォント設定」よりドメインの登録を解除してください。</li>
                                            </ol>
                                            <p>以上の作業を行った後、Webフォントの適用が外れているかご確認ください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-b">
                                <h4 id="i2" class="section_ttl">各WebフォントのCSS指定用コード</h4>
                                <div class="section_body">
                                    <p>下記を参考にWebフォントの設定を行ってください。<br>また、日本語で指定する場合は""(ダブルクォート)で囲む必要があります。</p>
                                    <p class="mb5">下記は「リュウミン R-KL」を適用した場合の例です。</p>
                                    <pre class="code">
/* 日本語で指定する場合 */
p{ font-family: "リュウミン R-KL"; }

/* 英語で指定する場合 */
p{ font-family: Ryumin Regular KL; }</pre>

                                   <p>それぞれのfont-family(Webフォントを指定するスタイル)は下記の通りです。<br>書体の見本を確認したい場合は「<a href="../functions/service_webfont_shotai.php" target="_blank">書体見本一覧</a>」をご参照ください。</p>
                                    <p class="note">※下記表の「日本語で記述」または「英語で記述」どちらか一方をcssファイルに記述してください。</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>日本語で記述</th>
                                                <th>英語で記述</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>リュウミン R-KL</td>
                                                <td>Ryumin Regular KL</td>
                                            </tr>
                                            <tr>
                                                <td>リュウミン B-KL</td>
                                                <td>Ryumin Bold KL</td>
                                            </tr>
                                            <tr>
                                                <td>黎ミン M</td>
                                                <td>Reimin Medium</td>
                                            </tr>
                                            <tr>
                                                <td>A1明朝</td>
                                                <td>A1 Mincho</td>
                                            </tr>
                                            <tr>
                                                <td>しまなみ</td>
                                                <td>Shimanami</td>
                                            </tr>
                                            <tr>
                                                <td>新ゴ R</td>
                                                <td>Shin Go Regular</td>
                                            </tr>
                                            <tr>
                                                <td>新ゴ B</td>
                                                <td>Shin Go Bold</td>
                                            </tr>
                                            <tr>
                                                <td>ゴシックMB101 B</td>
                                                <td>Gothic MB101</td>
                                            </tr>
                                            <tr>
                                                <td>見出しゴMB31</td>
                                                <td>Midashi Go MB31</td>
                                            </tr>
                                            <tr>
                                                <td>中ゴシックBBB</td>
                                                <td>Gothic Medium BBB</td>
                                            </tr>
                                            <tr>
                                                <td>じゅん 201</td>
                                                <td>Jun 201</td>
                                            </tr>
                                            <tr>
                                                <td>じゅん 501</td>
                                                <td>Jun 501</td>
                                            </tr>
                                            <tr>
                                                <td>新丸ゴ R</td>
                                                <td>Shin Maru Go Regular</td>
                                            </tr>
                                            <tr>
                                                <td>秀英にじみ丸ゴシック B</td>
                                                <td>Shuei NijimiMGo B</td>
                                            </tr>
                                            <tr>
                                                <td>丸フォーク M</td>
                                                <td>Maru Folk Medium</td>
                                            </tr>
                                            <tr>
                                                <td>フォーク M</td>
                                                <td>Folk Medium</td>
                                            </tr>
                                            <tr>
                                                <td>シネマレター</td>
                                                <td>Cinema Letter</td>
                                            </tr>
                                            <tr>
                                                <td>はるひ学園</td>
                                                <td>Haruhi Gakuen</td>
                                            </tr>
                                            <tr>
                                                <td>G2サンセリフ-B</td>
                                                <td>GSanSerif-B</td>
                                            </tr>
                                            <tr>
                                                <td>那欽</td>
                                                <td>Nachin</td>
                                            </tr>
                                            <tr>
                                                <td>竹 B</td>
                                                <td>Take Bold</td>
                                            </tr>
                                            <tr>
                                                <td>新ゴ シャドウ</td>
                                                <td>Shin Go Shadow</td>
                                            </tr>
                                            <tr>
                                                <td>ぶらっしゅ</td>
                                                <td>Brush-U</td>
                                            </tr>
                                            <tr>
                                                <td>トーキング</td>
                                                <td>Talking</td>
                                            </tr>
                                            <tr>
                                                <td>すずむし</td>
                                                <td>Suzumushi</td>
                                            </tr>
                                            <tr>
                                                <td>教科書ICA M</td>
                                                <td>Kyoukasho ICA Medium</td>
                                            </tr>
                                            <tr>
                                                <td>陸隷</td>
                                                <td>Likurei</td>
                                            </tr>
                                            <tr>
                                                <td>TB古印体</td>
                                                <td>Kointai-M</td>
                                            </tr>
                                            <tr>
                                                <td>さくらぎ蛍雪</td>
                                                <td>SakuraKeisetsu</td>
                                            </tr>
                                            <tr>
                                                <td>TBUDゴシック R</td>
                                                <td>TBUDGothic R</td>
                                            </tr>
                                            <tr>
                                                <td>TBUDゴシック E</td>
                                                <td>TBUDGothic E</td>
                                            </tr>
                                            <tr>
                                                <td>UD新ゴ コンデンス90 L</td>
                                                <td>UD Shin Go Conde90 L</td>
                                            </tr>
                                            <tr>
                                                <td>UD新ゴ コンデンス90 M</td>
                                                <td>UD Shin Go Conde90 M</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                    <li><a href="#link-aa">Webフォントの設定手順</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「Webフォント設定」をクリック</a></li>
                                            <li><a href="#link-a2">2.設定するドメインを選択</a></li>
                                            <li><a href="#link-a3">3.HTMLを編集</a></li>
                                            <li><a href="#link-a4">4.CSSを編集</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-a5">Webフォントの適用を解除する方法について</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-bb">各WebフォントのCSS指定用コード</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_hp_webfont.php">Webフォントに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <ul class="list list_arrow-right">
                                        <li>機能の仕様などについては、「<a href="../functions/service_webfont.php" target="_blank">Webフォント</a><i class="ico ico--newWindow"></i>」をご参照ください。</li>
                                        <li>WordPressでご利用の場合は、「<a href="man_server_webfont_wp.php">WordPressプラグインでのご利用</a>」をご参照ください。</li>
                                    </ul>

                                    <div class="msg msg_notice">
                                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能のご利用に関して</h4>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>33書体を月間7.5万PVまでご利用いただけます。<br>また、月間7.5万PVを超える場合、Webフォントの適用は外れますが、ブラウザ標準でのフォント表示に戻る為、表示内容に影響はありません。</li>
                                                <li>利用可能な書体以外を指定することはできません。</li>
                                                <li>お客様が編集されたプログラム等に関する技術的内容のお問い合わせについてはサポート対象外です。<br>また、サイトの状況によってご利用いただけない場合もあります。</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-aa">Webフォントの設定手順</h4>
                                        <div class="section_body">

                                            <aside class="msg">
                                                <div class="msg_body">
                                                    <p class="font-bold">Webフォントの適用が解除されない場合は下記をご参照ください。</p>
                                                    <ul class="list list_arrow-down mb0">
                                                        <li><a href="#link-a5">Webフォントの適用を解除する方法について</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <div class="serial-box mb30">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a1">1.「Webフォント設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「Webフォント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont1.png" alt="設定対象ドメインを確認して、「Webフォント設定」をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a2">2.設定するドメインを選択</h5>
                                                    <div class="box_body">
                                                        <p>「Webフォント設定を追加」をクリックし、「サイト」のプルダウンメニューより設定するドメインを選択し「追加する」ボタンをクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_webfont2.png" alt="「追加する」ボタンをクリック"></p>
                                                        <p>「Webフォント設定」画面に先ほど設定したドメインが表示されていれば設定完了です。</p>

                                                        <div class="msg msg_notice">
                                                            <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>ドメインの設定について</h6>
                                                            <div class="msg_body">
                                                                <p>Webフォントを設定できるドメインは初期ドメイン、独自ドメインの中から3つまでです。</p>
                                                                <p class="mb0">また、画面上の「削除する」ボタンをクリックすると、Webフォント設定が解除され、順次ブラウザ標準のフォント表示に戻ります。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a3">3.HTMLを編集</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            以下のコードをWebフォントで表示したいページのHEADタグ(&lt;head&gt;〜&lt;/head&gt;)内に記述してください。<br>
                                                            なお、下記のコードは&lt;/head&gt;タグの直前に記述することが推奨されています。
                                                        </p>
                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a4">4.CSSを編集</h5>
                                                    <div class="box_body">
                                                        <p>
                                                            Webフォントを適用したいタグにご希望の書体（font-family）を設定してください。<br>
                                                            各フォントのfont-familyについては「<a href="#link-bb">各WebフォントのCSS指定用コード</a>」をご参照ください。
                                                        </p>

                                                        <i class="ico ico_square-fill"></i>HTML
                                                        <pre class="code">&lt;h1&gt;Webフォント活用サイト&lt;/h1&gt;</pre>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code">h1{ font-family: "新ゴ R"; }</pre>
                                                        <p>編集したCSSファイルと手順3で編集したHTMLファイルをサーバーにアップロードし、ブラウザ上で「更新」をクリックするとWebフォントが反映されます。</p>

                                                        <p>
                                                            また、上記で指定したWebフォントの適用が外れる、または何らかの理由で適用できない際、続けて代替として表示される標準フォントを指定することが可能です。必要に応じて下記の例のように,(半角コンマ)区切りで代替フォントを指定してください。
                                                        </p>

                                                        <i class="ico ico_square-fill"></i>CSS
                                                        <pre class="code mb20">h1{ font-family: "新ゴ R"<span class="colorBase font-bold"> , "メイリオ" , Meiryo , "ヒラギノ角ゴPro W3" , "Hiragino Kaku Gothic Pro" , "ＭＳ Ｐゴシック" , sans-serif;</span> }</pre>

                                                        <div class="msg msg_notice">
                                                            <h4 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>Webフォントを太字にする方法について</h4>
                                                            <div class="msg_body">
                                                                <p>Webフォントはフォント本来の太さで表示する関係上、Bタグやfont-weightなどの太字設定は無効となります。<br>
                                                                    太字を適用したい場合は太字にしたい範囲を別のタグで囲み、現在のフォントよりも太いWebフォントを適用してください。</p>

                                                                <i class="ico ico_square-fill"></i>HTML
                                                                <pre class="code">&lt;p&gt;Webフォントは<span class="base-color font-bold">&lt;b&gt;美しい！&lt;/b&gt;</span>&lt;/p&gt;</pre>

                                                                <i class="ico ico_square-fill"></i>CSS
                                                                <pre class="code">p{ font-family: "新ゴ R"; }
<span class="base-color font-bold">b{ font-family: "新ゴ B"; }</span></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                            <section id="link-a5" class="block">
                                                <h4 class="block_ttl">Webフォントの適用を解除する方法について</h4>
                                                <div class="block_body">
                                                    <p>Webフォントの適用を解除するには、以下の作業を順に行ってください。</p>
                                                    <ol class="ol ol_margin">
                                                        <li>HTMLファイルとCSSファイルよりWebフォントの適用時に追加した記述を削除します。<br>
                                                            その際、HTMLファイルより下記のJavaScriptファイルの記述も必ず削除してください。<br>
                                                            <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre></li>

                                                        <li>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>」⇒「Webフォント設定」よりドメインの登録を解除してください。</li>
                                                    </ol>
                                                    <p>以上の作業を行った後、Webフォントの適用が外れているかご確認ください。</p>
                                                </div>
                                            </section>

                                        </div>
                                    </section>

                                    <section id="link-bb" class="section">
                                        <h4 class="section_ttl">各WebフォントのCSS指定用コード</h4>
                                        <div class="section_body">

                                            <p>下記を参考にWebフォントの設定を行ってください。<br>また、日本語で指定する場合は""(ダブルクォート)で囲む必要があります。</p>
                                            <p class="mb5">下記は「リュウミン R-KL」を適用した場合の例です。</p>
                                            <pre class="code">
/* 日本語で指定する場合 */
p{ font-family: "リュウミン R-KL"; }

/* 英語で指定する場合 */
p{ font-family: Ryumin Regular KL; }</pre>

                                            <p>それぞれのfont-family(Webフォントを指定するスタイル)は下記の通りです。<br>書体の見本を確認したい場合は「<a href="../functions/service_webfont_shotai.php" target="_blank">書体見本一覧</a>」をご参照下さい。</p>
                                            <p class="note">※下記表の「日本語で記述」または「英語で記述」どちらか一方をcssファイルに記述して下さい。</p>
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>日本語で記述</th>
                                                    <th>英語で記述</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>リュウミン R-KL</td>
                                                    <td>Ryumin Regular KL</td>
                                                </tr>
                                                <tr>
                                                    <td>リュウミン B-KL</td>
                                                    <td>Ryumin Bold KL</td>
                                                </tr>
                                                <tr>
                                                    <td>黎ミン M</td>
                                                    <td>Reimin Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>A1明朝</td>
                                                    <td>A1 Mincho</td>
                                                </tr>
                                                <tr>
                                                    <td>しまなみ</td>
                                                    <td>Shimanami</td>
                                                </tr>
                                                <tr>
                                                    <td>新ゴ R</td>
                                                    <td>Shin Go Regular</td>
                                                </tr>
                                                <tr>
                                                    <td>新ゴ B</td>
                                                    <td>Shin Go Bold</td>
                                                </tr>
                                                <tr>
                                                    <td>ゴシックMB101 B</td>
                                                    <td>Gothic MB101</td>
                                                </tr>
                                                <tr>
                                                    <td>見出しゴMB31</td>
                                                    <td>Midashi Go MB31</td>
                                                </tr>
                                                <tr>
                                                    <td>中ゴシックBBB</td>
                                                    <td>Gothic Medium BBB</td>
                                                </tr>
                                                <tr>
                                                    <td>じゅん 201</td>
                                                    <td>Jun 201</td>
                                                </tr>
                                                <tr>
                                                    <td>じゅん 501</td>
                                                    <td>Jun 501</td>
                                                </tr>
                                                <tr>
                                                    <td>新丸ゴ R</td>
                                                    <td>Shin Maru Go Regular</td>
                                                </tr>
                                                <tr>
                                                    <td>秀英にじみ丸ゴシック B</td>
                                                    <td>Shuei NijimiMGo B</td>
                                                </tr>
                                                <tr>
                                                    <td>丸フォーク M</td>
                                                    <td>Maru Folk Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>フォーク M</td>
                                                    <td>Folk Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>シネマレター</td>
                                                    <td>Cinema Letter</td>
                                                </tr>
                                                <tr>
                                                    <td>はるひ学園</td>
                                                    <td>Haruhi Gakuen</td>
                                                </tr>
                                                <tr>
                                                    <td>G2サンセリフ-B</td>
                                                    <td>GSanSerif-B</td>
                                                </tr>
                                                <tr>
                                                    <td>那欽</td>
                                                    <td>Nachin</td>
                                                </tr>
                                                <tr>
                                                    <td>竹 B</td>
                                                    <td>Take Bold</td>
                                                </tr>
                                                <tr>
                                                    <td>新ゴ シャドウ</td>
                                                    <td>Shin Go Shadow</td>
                                                </tr>
                                                <tr>
                                                    <td>ぶらっしゅ</td>
                                                    <td>Brush-U</td>
                                                </tr>
                                                <tr>
                                                    <td>トーキング</td>
                                                    <td>Talking</td>
                                                </tr>
                                                <tr>
                                                    <td>すずむし</td>
                                                    <td>Suzumushi</td>
                                                </tr>
                                                <tr>
                                                    <td>教科書ICA M</td>
                                                    <td>Kyoukasho ICA Medium</td>
                                                </tr>
                                                <tr>
                                                    <td>陸隷</td>
                                                    <td>Likurei</td>
                                                </tr>
                                                <tr>
                                                    <td>TB古印体</td>
                                                    <td>Kointai-M</td>
                                                </tr>
                                                <tr>
                                                    <td>さくらぎ蛍雪</td>
                                                    <td>SakuraKeisetsu</td>
                                                </tr>
                                                <tr>
                                                    <td>TBUDゴシック R</td>
                                                    <td>TBUDGothic R</td>
                                                </tr>
                                                <tr>
                                                    <td>TBUDゴシック E</td>
                                                    <td>TBUDGothic E</td>
                                                </tr>
                                                <tr>
                                                    <td>UD新ゴ コンデンス90 L</td>
                                                    <td>UD Shin Go Conde90 L</td>
                                                </tr>
                                                <tr>
                                                    <td>UD新ゴ コンデンス90 M</td>
                                                    <td>UD Shin Go Conde90 M</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </section>


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