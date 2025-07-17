<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Xアクセラレータ(エックスアクセラレータ) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Xアクセラレータ(エックスアクセラレータ)に関する仕様の一覧を記載しています。">

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
            
                <h3 class="sub-ttl">Xアクセラレータ(エックスアクセラレータ)</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">Xアクセラレータについて</a></li>
                                    <li><a href="#link-previous-b">Xアクセラレータの設定手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.Xアクセラレータ設定メニューへ</a></li>
                                            <li><a href="#link-previous-b02">2.設定内容を選択する</a></li>
                                            <li><a href="#link-previous-b03">3.設定を確定する</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">Xアクセラレータについて</h4>
                                <div class="section_body">
                                    <p>「Xアクセラレータ」はWebサイトを高速・安定化させるための機能です。<br>
                                    設定は以下のいずれかからお選びいただけます。</p>

                                    <ul class="ul ml40">
                                        <li><em>Xアクセラレータ Ver.1</em> … 静的ファイルの高速化(キャッシュ)</li>
                                        <li><em>Xアクセラレータ Ver.2</em> … 静的ファイルの高速化(キャッシュ)＋PHPプログラムの高速化</li>
                                    </ul>

                                    <p>「静的ファイルの高速化(キャッシュ)」「PHPプログラムの高速化」の仕様に関しては下記をご参照ください。</p>

                                    <table class="table">
                                        <thead>
                                            <tr><th colspan="2">静的ファイルの高速化(キャッシュ)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">内容</th>
                                                <td>
                                                    静的ファイルのキャッシュをサーバーに保持することで、サイトの高速化と同時アクセス数の拡張が行われます。
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">キャッシュ対象ファイル（拡張子）</th>
                                                <td>
                                                    .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">キャッシュの保存期間</th>
                                                <td>
                                                    <p>
                                                        2分間
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">キャッシュが保存されないケース</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>レスポンスヘッダのCache-Controlに「no-cache」「no-store」「private」「must-validate」のいずれかを含む場合</li>
                                                        <li>レスポンスヘッダにSet-Cookieを含む場合</li>
                                                        <li>レスポンスコード「200」「404」以外の場合</li>
                                                        <li>以下単語が含まれるcookieを利用したアクセスの場合<br>
                                                            (「[a-f0-9]+」は英字a~fもしくは数字を1文字以上含む)<br>
                                                            wp-postpass
                                                            wordpress_logged_in
                                                            comment_author
                                                            wordpress_no_cache
                                                            wordpress_[a-f0-9]+
                                                            wordpress_test_cookie
                                                            woocommerce_items_in_cart
                                                            woocommerce_cart_hash
                                                            w3tc_logged_out
                                                            wptouch_switch_toggle=normal
                                                            wptouch-pro-view=desktop
                                                            usces_cookie
                                                        </li>
                                                        <li>以下URIへのアクセスをする場合<br>
                                                            (「*」は任意の文字列)<br>
                                                            /wp-admin/
                                                            /wp-json/
                                                            /wp-*.php
                                                            /xmlrpc.php
                                                            /feed/
                                                            sitemap.xml
                                                            sitemap_index.xml
                                                            /wp-content/plugins/siteguard
                                                            /login_*
                                                            /store/
                                                            /cart/
                                                            /my-account/
                                                            /checkout/
                                                            /addons/
                                                            ?wptouch_switch=mobile
                                                            ?wptouch_switch=desktop
                                                            /usces-cart/
                                                            /usces-member/
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">注意事項</th>
                                                <td>
                                                    <p>訪問者ごとに表示内容が異なるようなページ(会員制サイトやショッピングサイト)等では、当機能による高速化や負荷軽減の効果が出づらい場合があります。</p>
                                                    <p>ウェブサーバー上に、特定のユーザーや特定の環境のみに公開を制限しているコンテンツデータ等がある場合、本来広く公開されていないはずのデータがリバースプロキシ上にキャッシュされ、意図しないユーザーがそれらのデータへアクセス可能となってしまうことがあります。</p>
                                                    <p class="note note_x2">
                                                        例：.htaccessを用いて、特定のIPアドレスからのアクセスを拒否する<br>
                                                        .htaccessを用いて、ブラウザごとに表示するコンテンツの振り分けを行う　等。
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead>
                                            <tr><th colspan="2">PHPプログラムの高速化</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">内容</th>
                                                <td>
                                                    <p>PHPプログラムの処理速度を最大20倍(※)まで向上させます。</p>
                                                    <p class="note">※エックスサーバー内の同一構成サーバーに対する、Apache Benchコマンドのパフォーマンス比較によるもの</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">対象PHPバージョン</th>
                                                <td>
                                                    <p>
                                                        本機能を利用される場合、事前に以下のPHPバージョンを設定していただく必要があります。<br>
                                                        PHPバージョンの切り替え方法は「<a href="man_program_php_ver.php">PHPのバージョンについて</a>」をご参照ください。<br>
                                                    </p>
                                                    <ul class="ul">
                                                        <li>PHP 8.3.x</li>
                                                        <li>PHP 8.2.x</li>
                                                        <li>PHP 8.1.x</li>
                                                        <li>PHP 8.0.x</li>
                                                        <li>PHP 7.4.x</li>
                                                        <li>PHP 7.3.x</li>
                                                        <li>PHP 7.2.x</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">php.ini設定について</th>
                                                <td>
                                                    <p>
                                                        本機能利用中は、対象ドメインのフォルダ内の「.user.ini」というファイルがphp.iniファイルとして機能します。
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="w20per">注意事項</th>
                                                <td>
                                                    <p>
                                                        本機能利用中は、php.iniの一部項目が無効となります。<br>
                                                        無効となる項目は「<a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a>」をご参照ください。<br>
                                                        また、本機能利用中はphp.iniの設定変更反映まで最大5分程度かかる可能性があります。
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">Xアクセラレータの設定手順</h4>
                                <div class="section_body">
                                    <p>Xアクセラレータの設定を変更される場合は、以下の手順で操作します。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. Xアクセラレータ設定メニューへ</h6>
                                            <div class="box_body">
                                                 <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Xアクセラレータ」メニューをクリックし、対象のドメインを選択してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_1.png" alt="サーバーパネルでドメインを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. 設定内容を選択する</h6>
                                            <div class="box_body">
                                                <p>対象ドメインに適用する設定を選択し「確認画面へ進む」をクリックして、変更内容の確認を行います。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_2.png" alt="設定を選択して「確認画面へ進む」をクリックしているスクリーンショット"></p>

                                                <table class="table w100per">
                                                    <tbody>
                                                        <tr>
                                                            <th>OFF</th>
                                                            <td>
                                                                <p>Xアクセラレータが無効になります。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Xアクセラレータ Ver.1</th>
                                                            <td>
                                                                <p>静的ファイルの高速化と同時アクセス数の拡張が行われます。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Xアクセラレータ Ver.2</th>
                                                            <td>
                                                                <p>「Ver.1」の特徴に加えて、PHPプログラムが高速化されます。</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. 設定を確定する</h6>
                                            <div class="box_body">
                                                <p>「変更する」をクリックし、変更内容を確定してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xaccelerator_3.png" alt="「変更する」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                       <p class="note mt15">※当機能をご利用いただくことで、サーバー上の選択したドメインのディレクトリ直下に設置されている「.htaccess」への変更が行われます。心当たりがない記述であっても不用意に削除されないようご注意ください。</p>

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
                                    <li><a href="#link-a">Xアクセラレータについて</a></li>
                                    <li><a href="#link-b">Xアクセラレータの設定手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.Xアクセラレータ設定メニューへ</a></li>
                                            <li><a href="#link-b02">2.設定内容を選択し、確定する</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">Xアクセラレータについて</h4>
                                <div class="section_body">
                                    <p>「Xアクセラレータ」はWebサイトを高速・安定化させるための機能です。<br>
                                        設定は以下のいずれかからお選びいただけます。</p>
                                    <dl class="dl">
                                        <dt>Xアクセラレータ Ver.1</dt>
                                        <dd>静的ファイルの高速化(キャッシュ)</dd>
                                        <dt>Xアクセラレータ Ver.2</dt>
                                        <dd>静的ファイルの高速化(キャッシュ)＋PHPプログラムの高速化</dd>
                                    </dl>
                                    <p>「静的ファイルの高速化(キャッシュ)」「PHPプログラムの高速化」の仕様に関しては下記をご参照ください。</p>


                                    <table class="table">
                                        <thead>
                                        <tr><th colspan="2">静的ファイルの高速化(キャッシュ)</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="w20per">内容</th>
                                            <td>
                                                静的ファイルのキャッシュをサーバーに保持することで、サイトの高速化と同時アクセス数の拡張が行われます。
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">キャッシュ対象ファイル（拡張子）</th>
                                            <td>
                                                .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">キャッシュの保存期間</th>
                                            <td>
                                                <p>
                                                    2分間
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">キャッシュが保存されないケース</th>
                                            <td>
                                                <ul class="ul">
                                                    <li>レスポンスヘッダのCache-Controlに「no-cache」「no-store」「private」「must-validate」のいずれかを含む場合</li>
                                                    <li>レスポンスヘッダにSet-Cookieを含む場合</li>
                                                    <li>レスポンスコード「200」「404」以外の場合</li>
                                                    <li>以下単語が含まれるcookieを利用したアクセスの場合<br>
                                                        (「[a-f0-9]+」は英字a~fもしくは数字を1文字以上含む)<br>
                                                        wp-postpass
                                                        wordpress_logged_in
                                                        comment_author
                                                        wordpress_no_cache
                                                        wordpress_[a-f0-9]+
                                                        wordpress_test_cookie
                                                        woocommerce_items_in_cart
                                                        woocommerce_cart_hash
                                                        w3tc_logged_out
                                                        wptouch_switch_toggle=normal
                                                        wptouch-pro-view=desktop
                                                        usces_cookie
                                                    </li>
                                                    <li>以下URIへのアクセスをする場合<br>
                                                        (「*」は任意の文字列)<br>
                                                        /wp-admin/
                                                        /wp-json/
                                                        /wp-*.php
                                                        /xmlrpc.php
                                                        /feed/
                                                        sitemap.xml
                                                        sitemap_index.xml
                                                        /wp-content/plugins/siteguard
                                                        /login_*
                                                        /store/
                                                        /cart/
                                                        /my-account/
                                                        /checkout/
                                                        /addons/
                                                        ?wptouch_switch=mobile
                                                        ?wptouch_switch=desktop
                                                        /usces-cart/
                                                        /usces-member/
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">注意事項</th>
                                            <td>
                                                <p>訪問者ごとに表示内容が異なるようなページ(会員制サイトやショッピングサイト)等では、当機能による高速化や負荷軽減の効果が出づらい場合があります。</p>
                                                <p>ウェブサーバー上に、特定のユーザーや特定の環境のみに公開を制限しているコンテンツデータ等がある場合、本来広く公開されていないはずのデータがリバースプロキシ上にキャッシュされ、意図しないユーザーがそれらのデータへアクセス可能となってしまうことがあります。</p>
                                                <p class="note note--x2">
                                                    例：.htaccessを用いて、特定のIPアドレスからのアクセスを拒否する<br>
                                                    .htaccessを用いて、ブラウザごとに表示するコンテンツの振り分けを行う等。
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead>
                                        <tr><th colspan="2">PHPプログラムの高速化</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="w20per">内容</th>
                                            <td>
                                                <p>PHPプログラムの処理速度を最大20倍(※)まで向上させます。</p>
                                                <p class="note">※エックスサーバー内の同一構成サーバーに対する、Apache Benchコマンドのパフォーマンス比較によるもの</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">対象PHPバージョン</th>
                                            <td>
                                                <p>
                                                    本機能を利用される場合、事前に以下のPHPバージョンを設定していただく必要があります。<br>
                                                    PHPバージョンの切り替え方法は「<a href="man_program_php_ver.php">PHPのバージョンについて</a>」をご参照ください。<br>
                                                </p>
                                                <ul class="ul">
                                                    <li>PHP 8.3.x</li>
                                                    <li>PHP 8.2.x</li>
                                                    <li>PHP 8.1.x</li>
                                                    <li>PHP 8.0.x</li>
                                                    <li>PHP 7.4.x</li>
                                                    <li>PHP 7.3.x</li>
                                                    <li>PHP 7.2.x</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">php.ini設定について</th>
                                            <td>
                                                <p>
                                                    本機能利用中は、対象ドメインのフォルダ内の「.user.ini」というファイルがphp.iniファイルとして機能します。
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="w20per">注意事項</th>
                                            <td>
                                                <p>
                                                    本機能利用中は、php.iniの一部項目が無効となります。<br>
                                                    無効となる項目は「<a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a>」をご参照ください。<br>
                                                    また、本機能利用中はphp.iniの設定変更反映まで最大5分程度かかる可能性があります。
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section><!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">Xアクセラレータの設定手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. Xアクセラレータ設定メニューへ</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「Xアクセラレータ」メニューをクリックし、対象のドメインのペンアイコンをクリックしてください。</p>
                                                <p><img alt="対象のドメインのペンアイコンをクリックしているスクリーンショット" class="img" src="../img/manual/man_server_xaccelerator_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.設定内容を選択し、確定する</h5>
                                            <div class="box_body">
                                                <p>対象ドメインに適用する設定を選択し「設定する」をクリックして、変更内容を確定してください。</p>
                                                <p><img alt="設定を選択して「設定する」をクリックしているスクリーンショット" class="img" src="../img/manual/man_server_xaccelerator_2.png?date=2410"></p>
                                                <table class="table w100per">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30perL">OFF</th>
                                                        <td>
                                                            <p>Xアクセラレータが無効になります。</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Xアクセラレータ Ver.1</th>
                                                        <td>
                                                            <p>静的ファイルの高速化と同時アクセス数の拡張が行われます。</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Xアクセラレータ Ver.2</th>
                                                        <td>
                                                            <p>「Ver.1」の特徴に加えて、PHPプログラムが高速化されます。</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mt20">
                                        <p class="note">※当機能をご利用いただくことで、サーバー上の選択したドメインのディレクトリ直下に設置されている「.htaccess」への変更が行われます。心当たりがない記述であっても不用意に削除されないようご注意ください。</p>
                                    </div>
                                </div>
                            </section><!-- /.section -->


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