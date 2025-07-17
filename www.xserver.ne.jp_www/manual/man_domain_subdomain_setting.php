<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サブドメイン設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでサブドメインを利用する際に必要となるサーバーパネルの「サブドメイン設定」機能に関するご案内です。エックスサーバーではサブドメインを無制限に追加することが可能です。">

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
            
                <h3 class="sub-ttl">サブドメイン設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">

                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">サブドメイン設定</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「サブドメイン設定」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.「サブドメイン設定追加」をクリック</a></li>
                                            <li><a href="#link-previous-a03">3.入力内容を確認し、「追加する」をクリック</a></li>
                                            <li><a href="#link-previous-a04">4.サブドメイン設定の追加完了</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-previous-a05">無料独自SSLが利用できない場合</a></li>
                                            <li><a href="#link-previous-a06">ファイルのアップロード先について</a></li>
                                            <li><a href="#link-previous-a07">サブドメインのアクセスのみを許可して、ドメインでのアクセスを禁止する方法</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                            </ul>
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">サブドメイン設定</h4>
                                <div class="section_body">
                                    <p>ドメイン設定で追加済みの独自ドメイン名に対して、サブドメインを設定することが可能です。<br>
                                        ※初期ドメイン名（サーバーID.xsrv.jp）にはサブドメインは追加できません。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「サブドメイン設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「サブドメイン設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_1.png" alt="サブドメイン設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「サブドメイン設定追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定を追加したいサブドメインを入力し、ドキュメントルート選択して、「確認画面へ進む」をクリックしてください。</p>
                                                <p>ドキュメントルートとはファイルのアップロード先のことです。<br>
                                                    詳細は、「<a href="#upload_dir">ファイルのアップロード先について</a>」をご参照ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_2.png" alt="サブドメイン設定追加のスクリーンショット"></p>
                                                <p>
                                                    無料独自SSL設定の追加が不要な場合は、「無料独自SSLを利用する」のチェックを外してください。
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.入力内容を確認し、「追加する」をクリック</h6>
                                            <div class="box_body">
                                                <p>
                                                    お手続きの内容を確認します。<br>
                                                    「追加する」ボタンをクリックすることにより、サブドメイン設定と、無料独自SSLの設定が追加されます。
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_3.png" alt="設定内容を確認する画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.サブドメイン設定の追加完了</h5>
                                            <div class="box_body">
                                                <p>「サブドメイン設定の追加を完了しました。」が表示されましたら、ドメイン設定の追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_4.png" alt="設定完了画面のスクリーンショット"></p>
                                                <p>
                                                    サーバーアカウント内に追加設定したドメイン専用のフォルダを作成します。<br>
                                                    詳細は、「<a href="#upload_dir">ファイルのアップロード先について</a>」をご参照ください。
                                                </p>
                                                <p>なお、ご利用サーバーにサブドメイン設定が反映されるまでには最大で1時間程度かかります。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a05">無料独自SSLが利用できない場合</h5>
                                        <div class="block_body">
                                            <p>
                                                設定を追加する対象ドメインの運用状況により、無料独自SSLが利用できないことがあります。<br>
                                                この場合、ドメイン設定は追加完了したものの、無料独自SSL設定が追加できなかった旨のメッセージを表示します。
                                            </p>
                                            <p>
                                                なお、サーバーパネル内「SSL設定」にて、無料独自SSLの設定を追加することができます。<br>
                                                詳細は、マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」をご参照ください。
                                            </p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section id="upload_dir" class="block">
                                        <h5 class="block_ttl" id="link-previous-a06">ファイルのアップロード先について</h5>
                                        <div class="block_body">
                                            <p>サブドメイン設定の追加を行うと、FTPサーバー上の「public_html」フォルダ以下にサブドメイン名のフォルダが作成されます。<br>
                                            サブドメインで公開されるサイトデータは下記を参考のうえ、ファイルのアップロードをお試しください。</p>

                                            <table class="table break-word">
                                                <thead>
                                                    <tr>
                                                        <th>サブドメイン</th>
                                                        <th>アップロード先</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>abc.example.com</th>
                                                        <td>/example.com/public_html/abc.example.com<br>
                                                            （/example.com/public_html/abc）</td>
                                                    </tr>
                                                    <tr>
                                                        <th>www.abc.example.com</th>
                                                        <td>/example.com/public_html/www.abc</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a07">サブドメインのアクセスのみを許可して、ドメインでのアクセスを禁止する方法</h5>
                                        <div class="block_body">
                                            <p>http://abc.example.jp/ の場合、通常 http://example.jp/abc.example.jp/（http://example.jp/abc/）でもアクセスが可能となります。</p>
                                            <p>.htaccess に下記の「記述内容」を記載し、サブドメインフォルダ内（abc.example.comまたはabcフォルダ）に設置することにより、http://example.jp/abc.example.jp/（http://example.jp/abc/）でのアクセスを拒否することも可能です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>.htaccessファイルの設置先</dt>
                                                <dd>/example.jp/public_html/abc.example.com/（/example.jp/public_html/abc/）</dd>
                                                <dt><i class="ico ico_square-fill"></i>記述内容（下記は abc.example.jp でのアクセスのみ許可する、という内容です。）</dt>
                                                <dd>
                                                    <pre class="code">
SetEnvIf Host "^abc.example.jp$" host
order deny,allow
deny from all
allow from env=host</pre>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->
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
                                    <li><a href="#link-a">サブドメイン設定</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「サブドメイン設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.「サブドメインを追加」をクリック</a></li>
                                            <li><a href="#link-a03">3.内容を入力し、「追加する」をクリック</a></li>
                                            <li><a href="#link-a04">4.サブドメイン設定の追加完了</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-b">無料独自SSLが利用できない場合</a></li>
                                            <li><a href="#link-c">ファイルのアップロード先について</a></li>
                                            <li><a href="#link-d">サブドメインのアクセスのみを許可して、ドメインでのアクセスを禁止する方法</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">サブドメイン設定</h4>

                                <div class="section__body">
                                    <p>ドメイン設定で追加済みの独自ドメイン名に対して、サブドメインを設定することが可能です。<br>
                                        ※初期ドメイン名(サーバーID.xsrv.jp)にはサブドメインは追加できません。</p>
                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a01">1.「サブドメイン設定」をクリック</h4>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「サブドメイン設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_1.png?date=2410" alt="サブドメイン設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a02">2.「サブドメインを追加」をクリック</h4>
                                            <div class="box_body">
                                                <p>「サブドメインを追加」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_2.png?date=2410" alt="サブドメイン設定追加のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a03">3.内容を入力し、「追加する」をクリック</h4>
                                            <div class="box_body">
                                                <p>設定を追加したいサブドメインを入力し、ドキュメントルート選択して、「追加する」をクリックしてください。</p>
                                                <p>ドキュメントルートとはファイルのアップロード先のことです。<br>
                                                    詳細は、「<a href="#link-c">ファイルのアップロード先について</a>」をご参照ください。</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_3.png?date=2410" alt="サブドメイン設定追加のスクリーンショット"></p>
                                                <p>無料独自SSL設定の追加が不要な場合は、「無料独自SSLを利用する」のチェックを外してください。</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a04">4.サブドメイン設定の追加完了</h4>
                                            <div class="box_body">
                                                <p>以上でドメイン設定の追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_4.png?date=2410" alt="設定完了画面のスクリーンショット"></p>
                                                <p>
                                                    サーバーアカウント内に追加設定したドメイン専用のフォルダを作成します。<br>
                                                    詳細は、「<a href="#link-c">ファイルのアップロード先について</a>」をご参照ください。
                                                </p>
                                                <p>なお、ご利用サーバーにサブドメイン設定が反映されるまで半日程度かかる場合があります。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-b">無料独自SSLが利用できない場合</h5>
                                        <div class="block_body">
                                            <p>
                                                設定を追加する対象ドメインの運用状況により、無料独自SSLが利用できないことがあります。<br>
                                                この場合、ドメイン設定は追加完了したものの、無料独自SSL設定が追加できなかった旨のメッセージを表示します。
                                            </p>
                                            <p>
                                                なお、サーバーパネル内「SSL設定」にて、無料独自SSLの設定を追加することができます。<br>
                                                詳細は、マニュアル「<a href="man_server_ssl.php">無料独自SSL設定</a>」をご参照ください。
                                            </p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-c" class="block_ttl">ファイルのアップロード先について</h5>
                                        <div class="block_body">
                                            <p>
                                                サブドメイン設定の追加を行うと、FTPサーバー上の「public_html」フォルダ以下にサブドメイン名のフォルダが作成されます。<br>
                                                サブドメインで公開されるサイトデータは下記を参考のうえ、ファイルのアップロードをお試しください。
                                            </p>

                                            <table class="table break-word">
                                                <thead>
                                                <tr>
                                                    <th>サブドメイン</th>
                                                    <th>アップロード先</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>abc.example.com</th>
                                                    <td>/example.com/public_html/abc.example.com<br>
                                                        (/example.com/public_html/abc)</td>
                                                </tr>
                                                <tr>
                                                    <th>www.abc.example.com</th>
                                                    <td>/example.com/public_html/www.abc</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-d">サブドメインのアクセスのみを許可して、ドメインでのアクセスを禁止する方法</h5>
                                        <div class="block_body">
                                            <p>http://abc.example.jp/ の場合、通常 http://example.jp/abc.example.jp/(http://example.jp/abc/)でもアクセスが可能となります。</p>
                                            <p>.htaccess に下記の「記述内容」を記載し、サブドメインフォルダ内(abcフォルダ)に設置することにより、http://example.jp/abc/ でのアクセスを拒否することも可能です。</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>.htaccessファイルの設置先</dt>
                                                <dd>/example.jp/public_html/abc/</dd>
                                                <dt><i class="ico ico_square-fill"></i>記述内容(下記は abc.example.jp でのアクセスのみ許可する、という内容です。)</dt>
                                                <dd>
                                                <pre class="code">SetEnvIf Host "^abc.example.jp$" host
order deny,allow
deny from all
allow from env=host</pre>
                                                </dd>
                                            </dl>
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