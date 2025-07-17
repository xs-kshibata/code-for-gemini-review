<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>二段階認証設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜通常のログインパスワード認証に加えて、認証コード生成アプリに表示されるワンタイムパスワードを入力することで、アカウントの安全性を強化することが可能な「二段階認証」を設定するための手順について記載しています。">

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
            
                <h3 class="sub-ttl">二段階認証設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">二段階認証について</a>
                                    <ul>
                                        <li><a href="#link-previous-c01">ご利用時の注意事項</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-b">二段階認証設定手順</a>
                                    <ul>
                                        <li><a href="#link-previous-b01">1.二段階認証設定画面を開く</a>
                                            <ul>
                                                <li><a href="#link-previous-a01">XServerアカウントの二段階認証を設定する場合</a></li>
                                                <li><a href="#link-previous-a02">サーバーパネルの二段階認証を設定する場合</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#link-previous-b02">2.「設定する」を選択する</a></li>
                                        <li><a href="#link-previous-b03">3.「QRコードを表示」ボタンをクリック</a></li>
                                        <li><a href="#link-previous-b04">4.認証コード生成アプリに登録</a></li>
                                        <li><a href="#link-previous-b05">5.認証コードを入力して「認証」ボタンをクリック</a></li>
                                        <li><a href="#link-previous-b06">6.バックアップコードを保管</a></li>
                                        <li><a href="#link-previous-c02">サーバーパネルログイン時に適用される設定</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">認証コード生成アプリが使えなくなった場合</a></li>
                            </ul>
                            </div>
				
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">二段階認証について</h4>
                                <div class="section_body">
                                    <p>
                                        二段階認証はXServerアカウント、サーバーパネルへのログイン時に通常のログインパスワード認証に加えて、認証コード生成アプリに表示されるワンタイムパスワードを入力することで、アカウントの安全性を強化することが可能です。
                                    </p>

                                    <h5 id="link-previous-c01" class="block_ttl mt50">ご利用時の注意事項</h5>
                                    <ul class="ul">
                                        <li>
                                            二段階認証にはスマートフォンの「認証コード生成アプリ」を使用します。<br>
                                            スマートフォンのアプリストアで「認証アプリ」等のキーワードで検索すると、対象アプリ（Google Authenticatorなど）が表示されますので、アプリを持っていない場合はダウンロードしてください。
                                        </li>
                                        <li>
                                            認証コード生成アプリをインストールした端末の機種変更を行うと、登録した認証コードが消える場合があります。<br>
                                            機種変更前に二段階認証の設定を「設定しない」に変更することをおすすめします。
                                        </li>
                                        <li>
                                            認証コード生成アプリに登録した認証コードを削除する場合は、二段階認証の設定を「設定しない」に変更してから削除してください。
                                        </li>
                                        <li>
                                            二段階認証の認証コードが取得できず、ログインできなくなった場合、<a href="#link-previous-c">認証コード生成アプリが使えなくなった場合</a>をご参照ください。
                                        </li>
                                    </ul>

                                </div>
                            </section>

                           <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">二段階認証設定手順</h4>
                                <div class="section_body">

                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.二段階認証設定画面を開く</h5>
                                            <div class="box_body">
                                                <dl class="dl">
                                                    <dt id="link-previous-a01"><i class="ico ico_square-fill"></i>XServerアカウントの二段階認証を設定する場合</dt>
                                                    <dd>
                                                        <ol class="ol">
                                                            <li>
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックします</p>
                                                                <p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集をクリックしているスクリーンショット"></p>
                                                            </li>
                                                            <li>
                                                                <p>登録情報下部の「二段階認証」にある「設定変更」ボタンをクリックします。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_2.png" alt="「二段階認証」の「設定変更」をクリックしているスクリーンショット"></p>
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl class="dl">
                                                    <dt id="link-previous-a02"><i class="ico ico_square-fill"></i>サーバーパネルの二段階認証を設定する場合</dt>
                                                    <dd>
                                                        <ol class="ol">
                                                            <li>
                                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「アカウント」カテゴリーの「二段階認証設定」をクリックします。</p>
                                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_3.png" alt="サーバーパネルで二段階認証設定を選択しているスクリーンショット"></p>
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>

                                            </div>
                                        </section>


                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.「設定する」を選択する</h5>
                                            <div class="box_body">
                                                <p>「設定する」を選択し、「設定を変更する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_4.png" alt="設定するを選択して「設定を変更する」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.「QRコードを表示」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>「QRコードを表示」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_5.png" alt="「QRコードを表示」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4.認証コード生成アプリに登録</h5>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                         <p>QRコードが表示されます。</p>
                                                         <p><img class="img" src="../img/manual/previous/man_order_twostepauth_6.png" alt="QRコードのスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>表示されたQRコードを認証コード生成アプリで読み取るか、シークレットキーを手動入力して登録します。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_order_twostepauth_7.png" alt="QRコードを認証コード生成アプリで読み取っているスクリーンショット"></p>
                                                    </li>
                                                </ol>
                                                <h6 class="block_ttl">シークレットキー手動入力例</h6>
                                                <table class="table break-word">
                                                    <thead>
                                                        <tr>
                                                            <th class="w20per">入力項目</th>
                                                            <th>XServerアカウント</th>
                                                            <th>サーバーパネル</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>アカウント</th>
                                                            <td>ログインするXServerアカウントID/メールアドレスいずれかを入力します。<br>例：pxx00000</td>
                                                            <td>ログインするサーバーIDを入力します。<br>例：xserver</td>
                                                        </tr>
                                                        <tr>
                                                            <th>キー</th>
                                                            <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                            <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b05">5.認証コードを入力して「認証」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>認証コード生成アプリに表示された6桁の認証コードを入力し、「認証」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_8.png" alt="「認証」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b06">6.バックアップコードを保管</h5>
                                            <div class="box_body">
                                                <p>表示されたバックアップコードを必ず保管してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_9.png" alt="「バックアップコード」のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <h5 id="link-previous-c02" class="block_ttl mt50">サーバーパネルログイン時に適用される設定</h5>
                                    <p>
                                        XServerアカウントIDを使用してサーバーパネルにログインする場合は、XServerアカウントの二段階認証設定が適用されます。<br>
                                        サーバーパネルで設定した二段階認証の設定内容は、サーバーIDを使用してサーバーパネルにログインする場合に適用されます。
                                    </p>


                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">認証コード生成アプリが使えなくなった場合</h4>
                                <div class="section_body">
                                    <p>紛失や機種変更など、何らかの原因で認証コードが取得できない場合は、二段階認証の設定時に保管したバックアップコードを入力して、二段階認証を強制的に解除することが可能です。</p>
                                    <p>バックアップコードを利用してログインを行った場合、二段階認証の設定は削除されます。二段階認証を引き続きご利用になる場合は、もう一度設定を行ってください。</p>
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">1.バックアップコード入力画面を開く</h5>
                                            <div class="box_body">
                                                <p>二段階認証入力画面の下部「認証アプリが使用できない場合はこちら」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_10.png" alt="「認証アプリが使用できない場合はこちら」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.バックアップコードを入力して「ログイン」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>二段階認証の設定時に保管したバックアップコードを入力します。「ログイン」ボタンをクリックすると、二段階認証の設定を強制的に解除してログインします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_twostepauth_11.png" alt="「ログイン」をクリックしているスクリーンショット"></p>

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
                                    <li><a href="#link-a">二段階認証について</a>
                                        <ul>
                                            <li><a href="#link-c01">ご利用時の注意事項</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">XServerアカウントの二段階認証設定手順</a>
                                        <ul>
                                            <li><a href="#link-b01">1.二段階認証設定画面を開く</a></li>
                                            <li><a href="#link-b02">2.「設定する」を選択する</a></li>
                                            <li><a href="#link-b03">3.「QRコードを表示」ボタンをクリック</a></li>
                                            <li><a href="#link-b04">4.認証コード生成アプリに登録</a></li>
                                            <li><a href="#link-b05">5.認証コードを入力して「認証」ボタンをクリック</a></li>
                                            <li><a href="#link-b06">6.バックアップコードを保管</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-d">サーバーパネルの二段階認証設定手順</a>
                                        <ul>
                                            <li><a href="#link-d01">1.二段階認証設定画面を開く</a></li>
                                            <li><a href="#link-d02">2.「QRコードを表示」ボタンをクリック</a></li>
                                            <li><a href="#link-d03">3.認証コード生成アプリに登録</a></li>
                                            <li><a href="#link-d04">4.認証コードを入力して「認証して設定する」ボタンをクリック</a></li>
                                            <li><a href="#link-d05">5.バックアップコードを保管</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-c">認証コード生成アプリが使えなくなった場合</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">二段階認証について</h4>
                                <div class="section_body">
                                    <p>
                                        二段階認証はXServerアカウント、サーバーパネルへのログイン時に通常のログインパスワード認証に加えて、認証コード生成アプリに表示されるワンタイムパスワードを入力することで、アカウントの安全性を強化することが可能です。
                                    </p>

                                    <h5 id="link-c01" class="block_ttl mt50">ご利用時の注意事項</h5>
                                    <ul class="ul">
                                        <li>
                                            二段階認証にはスマートフォンの「認証コード生成アプリ」を使用します。<br>
                                            スマートフォンのアプリストアで「認証アプリ」等のキーワードで検索すると、対象アプリ（Google Authenticatorなど）が表示されますので、アプリを持っていない場合はダウンロードしてください。
                                        </li>
                                        <li>
                                            認証コード生成アプリをインストールした端末の機種変更を行うと、登録した認証コードが消える場合があります。<br>
                                            機種変更前に二段階認証の設定を「設定しない」に変更することをおすすめします。
                                        </li>
                                        <li>
                                            認証コード生成アプリに登録した認証コードを削除する場合は、二段階認証の設定を「設定しない」に変更してから削除してください。
                                        </li>
                                        <li>
                                            二段階認証の認証コードが取得できず、ログインできなくなった場合、<a href="#link-c">認証コード生成アプリが使えなくなった場合</a>をご参照ください。
                                        </li>
                                    </ul>

                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">XServerアカウントの二段階認証設定手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1.二段階認証設定画面を開く</h5>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックします。</p>
                                                        <p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集をクリックしているスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>「二段階認証」の「設定変更」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_order_twostepauth_1.png?date=2411" alt="「二段階認証設定」の「設定変更」をクリックしているスクリーンショット"></p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>


                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.「設定する」を選択する</h5>
                                            <div class="box_body">
                                                <p>「設定する」を選択し、「設定を変更する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_3.png?date=2411" alt="設定するを選択して「設定を変更する」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3.「QRコードを表示」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>「QRコードを表示」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_4.png?date=2411" alt="「QRコードを表示」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b04">4.認証コード生成アプリに登録</h5>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                        <p>QRコードが表示されます。</p>
                                                        <p><img class="img" src="../img/manual/man_order_twostepauth_5.png?date=2411" alt="QRコードのスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>表示されたQRコードを認証コード生成アプリで読み取るか、シークレットキーを手動入力して登録します。</p>
                                                        <p><img class="img" src="../img/manual/man_order_twostepauth_6.png?date=2411" alt="QRコードを認証コード生成アプリで読み取っているスクリーンショット"></p>
                                                    </li>
                                                </ol>
                                                <h6 class="block_ttl">シークレットキー手動入力例</h6>
                                                <table class="table break-word">
                                                    <thead>
                                                    <tr>
                                                        <th class="w20per">入力項目</th>
                                                        <th>XServerアカウント</th>
                                                        <th>サーバーパネル</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>アカウント</th>
                                                        <td>ログインするXServerアカウントID/メールアドレスいずれかを入力します。<br>例：pxx00000</td>
                                                        <td>ログインするサーバーIDを入力します。<br>例：xserver</td>
                                                    </tr>
                                                    <tr>
                                                        <th>キー</th>
                                                        <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                        <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b05">5.認証コードを入力して「認証」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>認証コード生成アプリに表示された6桁の認証コードを入力し、「認証」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_7.png?date=2411" alt="「認証」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b06">6.バックアップコードを保管</h5>
                                            <div class="box_body">
                                                <p>表示されたバックアップコードを必ず保管してください。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_8.png?date=2411" alt="「バックアップコード」のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">サーバーパネルの二段階認証設定手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d01">1.二段階認証設定画面を開く</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server" target="_blank">サーバーパネル</a>へログインし、「二段階認証設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_2.png?date=2411" alt="サーバーパネルで二段階認証設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>


                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d02">2.「QRコードを表示」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>「QRコードを表示」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_11.png?date=2411" alt="「QRコードを表示」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d03">3.認証コード生成アプリに登録</h5>
                                            <div class="box_body">
                                                <ol class="ol">
                                                    <li>
                                                        <p>QRコードが表示されます。</p>
                                                        <p><img class="img" src="../img/manual/man_order_twostepauth_12.png?date=2411" alt="QRコードのスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>表示されたQRコードを認証コード生成アプリで読み取るか、シークレットキーを手動入力して登録します。</p>
                                                        <p><img class="img" src="../img/manual/man_order_twostepauth_13.png?date=2411" alt="QRコードのスクリーンショット"></p>
                                                    </li>
                                                </ol>
                                                <h6 class="block_ttl">シークレットキー手動入力例</h6>
                                                <table class="table break-word">
                                                    <thead>
                                                    <tr>
                                                        <th class="w20per">入力項目</th>
                                                        <th>XServerアカウント</th>
                                                        <th>サーバーパネル</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>アカウント</th>
                                                        <td>ログインするXServerアカウントID/メールアドレスいずれかを入力します。<br>例：pxx00000</td>
                                                        <td>ログインするサーバーIDを入力します。<br>例：xserver</td>
                                                    </tr>
                                                    <tr>
                                                        <th>キー</th>
                                                        <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                        <td>表示されているシークレットキーを入力します。<br>例：ABCDEFGHIJKLMNOP</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d04">4.認証コードを入力して「認証して設定する」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>認証コード生成アプリに表示された6桁の認証コードを入力し、「認証して設定する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_14.png?date=2411" alt="「認証して設定する」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d05">5.バックアップコードを保管</h5>
                                            <div class="box_body">
                                                <p>表示されたバックアップコードを必ず保管してください。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_15.png?date=2411" alt="「バックアップコード」のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">認証コード生成アプリが使えなくなった場合</h4>
                                <div class="section_body">
                                    <p>紛失や機種変更など、何らかの原因で認証コードが取得できない場合は、二段階認証の設定時に保管したバックアップコードを入力して、二段階認証を強制的に解除することが可能です。</p>
                                    <p>バックアップコードを利用してログインを行った場合、二段階認証の設定は削除されます。二段階認証を引き続きご利用になる場合は、もう一度設定を行ってください。</p>
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">1.バックアップコード入力画面を開く</h5>
                                            <div class="box_body">
                                                <p>二段階認証入力画面の下部「認証アプリが使用できない場合はこちら」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_9.png?date=2411" alt="「認証アプリが使用できない場合はこちら」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.バックアップコードを入力して「ログイン」ボタンをクリック</h5>
                                            <div class="box_body">
                                                <p>二段階認証の設定時に保管したバックアップコードを入力します。「ログイン」ボタンをクリックすると、二段階認証の設定を強制的に解除してログインします。</p>
                                                <p><img class="img" src="../img/manual/man_order_twostepauth_10.png?date=2411" alt="「ログイン」をクリックしているスクリーンショット"></p>

                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

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