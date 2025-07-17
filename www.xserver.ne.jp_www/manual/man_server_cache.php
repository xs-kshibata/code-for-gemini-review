<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サーバーキャッシュ設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Webサイト上のすべてのファイルをキャッシュして、高速化と同時アクセス数の拡張を行う「サーバーキャッシュ設定」のご案内です。">

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
            
                <h3 class="sub-ttl">サーバーキャッシュ設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">サーバーキャッシュ設定とは</a></li>
                                    <li><a href="#link-previous-b">サーバーキャッシュ設定の切り替え設定手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「サーバーキャッシュ設定」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.設定内容を選択する</a></li>
                                            <li><a href="#link-previous-b03">3.設定を確定する</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">キャッシュ削除</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">サーバーキャッシュ設定とは</h4>
                                <div class="section_body">
                                    <p>サーバーキャッシュ設定を有効にすることで、サーバー上でファイルのキャッシュが作成され、Webサイトの表示速度・同時アクセス数を大幅に向上させることができます。</p>
                                    <p class="note">※サーバーキャッシュ設定を有効にすることでXアクセラレータが有効になります。Xアクセラレータの詳細については「<a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a>」をご参照ください。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b"><a id="edit" name="edit"></a>サーバーキャッシュ設定の切り替え設定手順</h4>
                                <div class="section_body">
                                    <p>サーバーキャッシュの設定を変更される場合は、以下の手順で操作します。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1. 「サーバーキャッシュ設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「サーバーキャッシュ設定」メニューをクリックし、対象のドメインを選択してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_1.png" alt="サーバーパネルでドメインを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2. 設定内容を選択する</h5>
                                            <div class="box_body">
                                                <p>「ONにする」または「OFFにする」を選択し「確認画面へ進む」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_2.png" alt="設定を選択して「確認画面へ進む」をクリックしているスクリーンショット"></p>
                                                <p>サーバーキャッシュ設定を有効にすることで、以下の通りファイルがキャッシュされるようになります。</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>キャッシュの保存期間</dt>
                                                    <dd>
                                                        <p>以下ファイル(拡張子)は2分間キャッシュされます。</p>
                                                        <p class="border border_blue break-all">.css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        <p>上記以外のファイルは1分間キャッシュされます。</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>レスポンスヘッダに以下を含むコンテンツはキャッシュしません。</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Controlに「no-cache」「no-store」「private」「must-validate」のいずれかを含む場合</li>
                                                            <li>Set-Cookieを含む場合</li>
                                                            <!--<li>Basic認証を含む場合</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>下記レスポンスコード以外はキャッシュしません。</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>200</li>
                                                            <li>404</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>以下単語が含まれるcookieを利用したアクセスはキャッシュしません。</dt>
                                                    <dd>
                                                        <p>(「[a-f0-9]+」は英字a~fもしくは数字を1文字以上含む)</p>
                                                        <ul class="ul">
                                                            <li>wp-postpass</li>
                                                            <li>wordpress_logged_in</li>
                                                            <li>comment_author</li>
                                                            <li>wordpress_no_cache</li>
                                                            <li>wordpress_[a-f0-9]+</li>
                                                            <li>wordpress_test_cookie</li>
                                                            <li>woocommerce_items_in_cart</li>
                                                            <li>woocommerce_cart_hash</li>
                                                            <li>w3tc_logged_out</li>
                                                            <li>wptouch_switch_toggle=normal</li>
                                                            <li>wptouch-pro-view=desktop</li>
                                                            <li>usces_cookie</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>以下URIへのアクセスはキャッシュしません。</dt>
                                                    <dd>
                                                        <p>(「*」は任意の文字列)</p>
                                                        <ul class="ul">
                                                            <li>/wp-admin/</li>
                                                            <li>/wp-json/</li>
                                                            <li>/wp-*.php</li>
                                                            <li>/xmlrpc.php</li>
                                                            <li>/feed/</li>
                                                            <li>sitemap.xml</li>
                                                            <li>sitemap_index.xml</li>
                                                            <li>/wp-content/plugins/siteguard</li>
                                                            <li>/login_*</li>
                                                            <li>/store/</li>
                                                            <li>/cart/</li>
                                                            <li>/my-account/</li>
                                                            <li>/checkout/</li>
                                                            <li>/addons/</li>
                                                            <li>?wptouch_switch=mobile</li>
                                                            <li>?wptouch_switch=desktop</li>
                                                            <li>/usces-cart/</li>
                                                            <li>/usces-member/</li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                <aside class="msg msg_caution mt20">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>ウェブサーバー上に、特定のユーザーや特定の環境のみに公開を制限しているコンテンツデータ等がある場合、本来広く公開されていないはずのデータがリバースプロキシ上にキャッシュされ、意図しないユーザーがそれらのデータへアクセス可能となってしまうことがありますので、ご注意ください。</p>
                                                        <p class="note note_x2">
                                                            例：.htaccessを用いて、特定のIPアドレスからのアクセスを拒否する<br>
                                                            .htaccessを用いて、ブラウザごとに表示するコンテンツの振り分けを行う　等。
                                                        </p>
                                                    </div>
                                                </aside>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3. 設定を確定する</h5>
                                            <div class="box_body">
                                                <p>「変更する」をクリックし、変更内容を確定してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_cache_3.png" alt="「変更する」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                       <p class="note mt15">※当機能をご利用いただくことで、サーバー上の選択したドメインのディレクトリ直下に設置されている「.htaccess」への変更が行われます。心当たりがない記述であっても不用意に削除されないようご注意ください。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">キャッシュ削除</h4>
                                <div class="section_body">
                                    <p>「キャッシュ削除」の「削除する」をクリックすると、選択したドメインのキャッシュを削除することができます。</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_cache_4.png" alt="「キャッシュを削除」の「削除する」をクリックしているスクリーンショット"></p>
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
                                    <li><a href="#link-a">サーバーキャッシュ設定とは</a></li>
                                    <li><a href="#link-b">サーバーキャッシュ設定の切り替え設定手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「サーバーキャッシュ設定」をクリック</a></li>
                                            <li><a href="#link-b02">2.設定内容を変更する</a></li>
                                            <li><a href="#link-b03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">キャッシュ削除</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">サーバーキャッシュ設定とは</h4>
                                <div class="section_body">
                                    <p>サーバーキャッシュ設定を有効にすることで、サーバー上でファイルのキャッシュが作成され、Webサイトの表示速度・同時アクセス数を大幅に向上させることができます。</p>
                                    <p class="note">※サーバーキャッシュ設定を有効にすることでXアクセラレータが有効になります。Xアクセラレータの詳細については「<a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a>」をご参照ください。</p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h4 class="section_ttl">サーバーキャッシュ設定の切り替え設定手順</h4>
                                <div class="section_body">
                                    <p>サーバーキャッシュの設定を変更される場合は、以下の手順で操作します。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1.「サーバーキャッシュ設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「サーバーキャッシュ設定」メニューをクリックし、対象のドメインを選択してください。</p>
                                                <p><img alt="サーバーパネルでドメインを選択しているスクリーンショット" class="img" src="../img/manual/man_server_cache_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. 設定内容を変更する</h5>
                                            <div class="box_body">
                                                <p>変更ボタンをクリックすると表示される注意事項を確認したのち、「ONにする」をクリックしてください。</p>
                                                <p><img alt="設定を選択して「確認画面へ進む」をクリックしているスクリーンショット" class="img" src="../img/manual/man_server_cache_2.png?date=2410"></p>
                                                <p>サーバーキャッシュ設定を有効にすることで、以下の通りファイルがキャッシュされるようになります。</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>キャッシュの保存期間</dt>
                                                    <dd>
                                                        <p>以下ファイル(拡張子)は2分間キャッシュされます。</p>
                                                        <p class="border border_blue break-all">.css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        <p>上記以外のファイルは1分間キャッシュされます。</p>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>レスポンスヘッダに以下を含むコンテンツはキャッシュしません。</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Controlに「no-cache」「no-store」「private」「must-validate」のいずれかを含む場合</li>
                                                            <li>Set-Cookieを含む場合</li>
                                                            <!--<li>Basic認証を含む場合</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>レスポンスヘッダに以下を含むコンテンツはキャッシュしません。</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>Cache-Controlに「no-cache」「no-store」「private」「must-validate」のいずれかを含む場合</li>
                                                            <li>Set-Cookieを含む場合</li>
                                                            <!--<li>Basic認証を含む場合</li>-->
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>下記レスポンスコード以外はキャッシュしません。</dt>
                                                    <dd>
                                                        <ul class="ul">
                                                            <li>200</li>
                                                            <li>404</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>以下単語が含まれるcookieを利用したアクセスはキャッシュしません。</dt>
                                                    <dd>
                                                        <p>(「[a-f0-9]+」は英字a~fもしくは数字を1文字以上含む)</p>
                                                        <ul class="ul">
                                                            <li>wp-postpass</li>
                                                            <li>wordpress_logged_in</li>
                                                            <li>comment_author</li>
                                                            <li>wordpress_no_cache</li>
                                                            <li>wordpress_[a-f0-9]+</li>
                                                            <li>wordpress_test_cookie</li>
                                                            <li>woocommerce_items_in_cart</li>
                                                            <li>woocommerce_cart_hash</li>
                                                            <li>w3tc_logged_out</li>
                                                            <li>wptouch_switch_toggle=normal</li>
                                                            <li>wptouch-pro-view=desktop</li>
                                                            <li>usces_cookie</li>
                                                        </ul>
                                                    </dd>
                                                    <dt><i class="ico ico_square-fill"></i>以下URIへのアクセスはキャッシュしません。</dt>
                                                    <dd>
                                                        <p>(「*」は任意の文字列)</p>
                                                        <ul class="ul">
                                                            <li>/wp-admin/</li>
                                                            <li>/wp-json/</li>
                                                            <li>/wp-*.php</li>
                                                            <li>/xmlrpc.php</li>
                                                            <li>/feed/</li>
                                                            <li>sitemap.xml</li>
                                                            <li>sitemap_index.xml</li>
                                                            <li>/wp-content/plugins/siteguard</li>
                                                            <li>/login_*</li>
                                                            <li>/store/</li>
                                                            <li>/cart/</li>
                                                            <li>/my-account/</li>
                                                            <li>/checkout/</li>
                                                            <li>/addons/</li>
                                                            <li>?wptouch_switch=mobile</li>
                                                            <li>?wptouch_switch=desktop</li>
                                                            <li>/usces-cart/</li>
                                                            <li>/usces-member/</li>
                                                        </ul>
                                                    </dd>
                                                </dl>

                                                <aside class="msg msg_caution mt20">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>ウェブサーバー上に、特定のユーザーや特定の環境のみに公開を制限しているコンテンツデータ等がある場合、本来広く公開されていないはずのデータがリバースプロキシ上にキャッシュされ、意図しないユーザーがそれらのデータへアクセス可能となってしまうことがありますので、ご注意ください。</p>
                                                        <p class="note note--x2">
                                                            例：.htaccessを用いて、特定のIPアドレスからのアクセスを拒否する<br>
                                                            .htaccessを用いて、ブラウザごとに表示するコンテンツの振り分けを行う　等。
                                                        </p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3.設定完了</h5>
                                            <div class="box_body">
                                                <p>設定状況が「ON」に変更されていたら設定完了です。</p>
                                                <p><img alt="「変更する」をクリックしているスクリーンショット" class="img" src="../img/manual/man_server_cache_3.png?date=2410"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mt20">
                                        <p class="note">※当機能をご利用いただくことで、サーバー上の選択したドメインのディレクトリ直下に設置されている「.htaccess」への変更が行われます。心当たりがない記述であっても不用意に削除されないようご注意ください。</p>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-c" class="section">
                                <h4 class="section_ttl">キャッシュ削除</h4>
                                <div class="section_body">
                                    <p>「キャッシュ削除」をクリックすると、選択したドメインのキャッシュを削除することができます。</p>
                                    <p><img alt="「キャッシュを削除」の「削除する」をクリックしているスクリーンショット" class="img" src="../img/manual/man_server_cache_4.png?date=2410"></p>
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