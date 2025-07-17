<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ブラウザキャッシュ設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ブラウザキャッシュ設定を使用することにより、各ブラウザが過去に取得したデータ（キャッシュ）を再利用することで表示速度の向上、および転送量の軽減を図る「ブラウザキャッシュ設定」のご案内です。">

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
            
                <h3 class="sub-ttl">ブラウザキャッシュ設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">ブラウザキャッシュ設定とは</a></li>
                                    <li><a href="#link-previous-b">ブラウザキャッシュ設定の切り替え手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「ブラウザキャッシュ設定」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.キャッシュ設定を選択</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">.htaccessにてExpiresヘッダを設定されている場合</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">ブラウザキャッシュ設定とは</h4>
                                <div class="section_body">
                                    <p>ブラウザ側でのキャッシュ利用を指示するレスポンスヘッダ(Expires, Cache-Controlヘッダ)の出力を付加します。同一ファイルへの再アクセス時にはブラウザ側のキャッシュファイルが利用され、表示速度の向上や転送量の軽減を行うことができます。</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>本機能の利用において、下記のような点にご注意ください。</p>
                                            <ul class="ul">
                                                <li>キャッシュしたデータを読み込むため、CSSファイル、JavaScriptファイル、画像ファイルなど対象データの更新がすぐに反映されない可能性があります。<br>
                                                    その場合は、ブラウザ上のキャッシュデータを削除してご確認ください。</li>
                                                <li>ブラウザ上のキャッシュデータを利用する性質上、サーバーへのアクセス回数が減るため、アクセス解析などにおいてヒット数が減少する可能性があります。</li>
                                                <li>ブラウザやサーバーコンテンツの内容によっては、Webサイトの表示が崩れるなど、異なる動作となる場合が稀にあります。</li>
                                                <li>設定の変更からサーバーに設定が反映されるまで最大15分程度かかります。</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <dl class="dl">
                                        <dt>本設定によって付与されるヘッダについて</dt>
                                        <dd>
                                            <p>付与されるヘッダは下記の通りです。</p>
                                            <ul class="ul">
                                                <li>Expiresヘッダ</li>
                                                <li>Cache-Controlヘッダ（max-age）</li>
                                            </ul>
                                            <p>各項目について最大7日間保持するように値が指定されます。</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->
				
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">ブラウザキャッシュ設定の切り替え手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">
                                        <section class="box">
                                                <h6 class="box_ttl" id="link-previous-b01">1.「ブラウザキャッシュ設定」をクリック</h6>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「ブラウザキャッシュ設定」をクリックします。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_server_expires_1.png" alt="ブラウザキャッシュ設定メニューをクリック"></p>
                                                </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.キャッシュ設定を選択</h6>
                                            <div class="box_body">
                                                <p>キャッシュ設定するドメインを選択し、「変更後の設定」を選択してください。選択後、「変更」をクリックしてください。</p>

                                                <p><img class="img" src="../img/manual/previous/man_server_expires_2.png" alt="「変更後の設定」を選択"></p>

                                                <p>本機能では、下記の3つの項目においてキャッシュのON/OFFを設定することが可能です。</p>


                                                <table class="table table_responsive">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-m w30per-l">ON[全ての静的ファイル] <br>※推奨設定</th>
                                                            <td>
                                                                <p>CSS/JavaScriptを含む全ての静的ファイルに対してブラウザキャッシュ設定が有効になります。</p>
                                                                <p class="border border_blue break-all">
                                                                    <b>対象ファイル(拡張子)</b><br>
                                                                    .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>ON[CSS/JavaScript以外]</th>
                                                            <td>CSS(.css)、JavaScript(.js)を除く静的ファイルに対してブラウザキャッシュ設定が有効になります。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>OFF</th>
                                                            <td>全てファイルに対してブラウザキャッシュ設定が無効になります。</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">.htaccessにてExpiresヘッダを設定されている場合</h4>
                                <div class="section_body">
                                    <p style="margin-bottom:0.3em;">.htaccessにて下記の設定をされている場合はそちらが優先されます。</p>
                                        <ul class="ul" style="margin-left:2em;">
                                        <li>Cache-Control</li>
                                        <li>Expires</li>
                                        <li>Pragma</li>
                                        <li>Set-Cookie</li>
                                        </ul>
                                    <p>上記の設定をされている状態で、本機能の設定を行っていただいても、特に支障等はありません。<br>しかし、すでにキャッシュをご利用いただいているため、本機能によるWEBサイトの表示速度が向上しない場合があります。</p>
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
                                    <li><a href="#link-a">ブラウザキャッシュ設定とは</a></li>
                                    <li><a href="#link-b">ブラウザキャッシュ設定の切り替え手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「ブラウザキャッシュ設定」をクリック</a></li>
                                            <li><a href="#link-b02">2.キャッシュ設定を選択</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">.htaccessにてExpiresヘッダを設定されている場合</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">ブラウザキャッシュ設定とは</h4>
                                    <p>ブラウザ側でのキャッシュ利用を指示するレスポンスヘッダ(Expires, Cache-Controlヘッダ)の出力を付加します。同一ファイルへの再アクセス時にはブラウザ側のキャッシュファイルが利用され、表示速度の向上や転送量の軽減を行うことができます。</p>
                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <p>本機能の利用において、下記のような点にご注意ください。</p>
                                            <ul class="ul">
                                                <li>キャッシュしたデータを読み込むため、CSSファイル、JavaScriptファイル、画像ファイルなど対象データの更新がすぐに反映されない可能性があります。<br>
                                                    その場合は、ブラウザ上のキャッシュデータを削除してご確認ください。</li>
                                                <li>ブラウザ上のキャッシュデータを利用する性質上、サーバーへのアクセス回数が減るため、アクセス解析などにおいてヒット数が減少する可能性があります。</li>
                                                <li>ブラウザやサーバーコンテンツの内容によっては、Webサイトの表示が崩れるなど、 異なる動作となる場合が稀にあります。</li>
                                                <li>設定の変更からサーバーに設定が反映されるまで最大15分程度かかります。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <dl class="dl">
                                        <dt>本設定によって付与されるヘッダについて</dt>
                                        <dd>
                                            <p>付与されるヘッダは下記の通りです。</p>
                                            <ul class="ul">
                                                <li>Expiresヘッダ</li>
                                                <li>Cache-Controlヘッダ（max-age）</li>
                                            </ul>
                                            <p>各項目について最大7日間保持するように値が指定されます。</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">ブラウザキャッシュ設定の切り替え手順</h4>
                                    <p>ブラウザキャッシュ設定は、下記の手順で変更することが可能です。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. 「ブラウザキャッシュ設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「ブラウザキャッシュ設定」をクリックします。</p>
                                                <p><img alt="ブラウザキャッシュ設定をクリック" class="img" src="../img/manual/man_server_expires_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. キャッシュ設定を選択</h5>
                                            <div class="box_body">
                                                <p>キャッシュ設定するドメインの「編集」をクリックし、「ブラウザキャッシュ設定」を選択してください。選択後、「設定する」をクリックしてください。</p>
                                                <p><img alt="「設定する」ボタンをクリック" class="img" src="../img/manual/man_server_expires_2.png?date=2410"></p>
                                                <p>本機能では、下記の3つの項目においてキャッシュのON/OFFを設定することが可能です。</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>ON（全ての静的ファイル）<br>
                                                            ※推奨</th>
                                                        <td>
                                                            <p>CSS/JavaScriptを含む全ての静的ファイルに対してブラウザキャッシュ設定が有効になります。</p>
                                                            <p class="border border_blue break-all"><b>対象ファイル(拡張子)</b><br>
                                                                .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>ON（CSS/JavaScript以外）</th>
                                                        <td>CSS(.css)、JavaScript(.js)を除く静的ファイルに対してブラウザキャッシュ設定が有効になります。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>OFF</th>
                                                        <td>全てファイルに対してブラウザキャッシュ設定が無効になります。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section><!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">.htaccessにてExpiresヘッダを設定されている場合</h4>
                                    <p>.htaccessにて下記の設定をされている場合はそちらが優先されます。</p>
                                    <ul class="ul">
                                        <li>Cache-Control</li>
                                        <li>Expires</li>
                                        <li>Pragma</li>
                                        <li>Set-Cookie</li>
                                    </ul>
                                    <p>上記の設定をされている状態で、本機能の設定を行っていただいても、特に支障等はありません。 しかし、すでにキャッシュをご利用いただいているため、本機能によるWEBサイトの表示速度が向上しない場合があります。</p>
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