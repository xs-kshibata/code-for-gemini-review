<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>自動バックアップからのデータ復元| <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「自動バックアップ」機能でバックアップされているデータの復元手順について記載しています。">

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
            
                <h3 class="sub-ttl">自動バックアップからのデータ復元</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">自動バックアップからのサーバー領域のWeb・メールデータ復元</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「バックアップ」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.「自動バックアップデータから復元」を選択</a></li>
                                            <li><a href="#link-previous-a03">3.対象となるバックアップデータと復元方法を選択</a></li>
                                            <li><a href="#link-previous-a04">4.注意事項を確認のうえ、「復元を開始(確認)」をクリック</a></li>
                                            <li><a href="#link-previous-a05">5.復元情報を確認のうえ、「復元を開始(確定)」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <p class="mt50">「自動バックアップからの復元」機能では、全プラン標準で提供している「<a href="../functions/service_backup.php">自動バックアップ</a>」機能によって保持しているバックアップデータを用いて、サーバー領域のWeb・メールデータを復元することが可能です。</p>
                            <p>復元可能なデータは以下のとおりです。</p>

                            <dl class="dl">
                                <dt><i class="ico ico_square-fill"></i>sv12301.xserver.jp 以降のサーバー</dt>
                                <dd>
                                    <p>
                                        過去14日間
                                    </p>
                                </dd>
                                <dt><i class="ico ico_square-fill"></i>sv12300.xserver.jp 以前のサーバーおよび sv1~sv20.xtwo.ne.jpサーバー</dt>
                                <dd>
                                    <p>
                                        過去7日間（※）
                                    </p>
                                    <p class="note">
                                        過去14日間への拡大を予定しており、提供の準備ができ次第ご案内いたします。
                                    </p>
                                </dd>
                                <dt><i class="ico ico_square-fill"></i>sv2000〜sv2399.xserver.jpサーバー</dt>
                                <dd>
                                    <p>
                                        過去14日間
                                    </p>
                                </dd>
                            </dl>

                            <p>データサイズやファイル数、サーバーの負荷状況によっては復元処理に時間がかかる場合があります。</p>

                            <aside class="msg msg_caution">
                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                <div class="msg_body">
                                    <ul class="ul">
                                        <li>復元を実行すると、対象のディレクトリ・ファイルはすべてバックアップデータの内容に上書きされます。バックアップデータに存在しない、バックアップ日以降に作成されたファイル・ディレクトリはすべて削除されます。</li>
                                        <li style="margin:8px 0;">十分なディスク空き領域があることを確認したうえで、実行してください。バックアップデータのサイズ分の空き容量がないと、完全なバックアップデータの復元に失敗する場合があります。</li>
                                    </ul>

                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">自動バックアップからのサーバー領域のWeb・メールデータ復元</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「バックアップ」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「バックアップ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_restore_1.png" alt="自動バックアップデータ復元申請"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「自動バックアップデータから復元」を選択</h6>
                                            <div class="box_body">
                                                <p>「自動バックアップデータ取得・復元」メニューにおいて、 「自動バックアップデータから復元」を選択してください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_restore_2.png" alt="自動バックアップデータ復元申請"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.対象となるバックアップデータと復元方法を選択</h6>

                                            <div class="box_body">
                                                <p>復元元となるバックアップデータと復元方法を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_restore_3.png" alt="自動バックアップデータ復元申請"></p>

                                                <p>なお、復元方法として「対象を指定して復元」を選択した場合は、復元の対象をドメイン・ディレクトリごとに指定することができます。
                                                    対象ディレクトリとして選択できる項目は以下の通りです。</p>
                                                <table class="table mb5">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30per">Web領域</th>
                                                        <td>対象ドメインの「public_html」ディレクトリのデータ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Web用設定ファイル</th>
                                                        <td>対象ドメインの「public_html」「mail」ディレクトリ以外のデータ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>メール領域</th>
                                                        <td>対象ドメインの「mail」ディレクトリのデータ</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a04">4.注意事項を確認のうえ、「復元を開始(確認)」をクリック</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、 「復元を開始(確認)」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_restore_4.png" alt="自動バックアップデータ復元申請"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a05">5.復元情報を確認のうえ、「復元を開始(確定)」をクリック</h6>
                                            <div class="box_body">
                                                <p>確認画面で復元情報を確認し、最後に「復元を開始(確定)」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_restore_5.png" alt="自動バックアップデータ復元申請"></p>
                                                <p>以上で復元の開始手続きは完了です。</p>
                                                <p class="note">※バックアップデータの容量によっては復元完了までに時間がかかる場合があります。<br>
                                                    「自動バックアップ取得・復元履歴」から復元状況をご確認いただくことができます。</p>
                                                <p class="note">※復元の一部工程においてサーバーのディスク容量が一時的に拡大されることがあります。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

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
                                    <li><a href="#link-a">自動バックアップからのデータ復元について</a></li>
                                    <li><a href="#link-b">自動バックアップからのサーバー領域のWeb・メールデータ復元</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「自動バックアップの取得・復元」をクリック</a></li>
                                            <li><a href="#link-b02">2.「自動バックアップデータから復元」を選択</a></li>
                                            <li><a href="#link-b03">3.対象となるバックアップデータと取得方法を選択</a></li>
                                            <li><a href="#link-b04">4.「実行する」をクリック</a></li>
                                            <li><a href="#link-b05">5.注意事項を確認のうえ、「注意事項を確認した上で実行する」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <h3 class="section_ttl">自動バックアップからのデータ復元について</h3>
                                <div class="section_body">

                                    <p>「自動バックアップからの復元」機能では、全プラン標準で提供している「<a href="../functions/service_backup.php">自動バックアップ</a>」機能によって保持しているバックアップデータを用いて、サーバー領域のWeb・メールデータを復元することが可能です。</p>
                                    <p>復元可能なデータは以下のとおりです。</p>

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>sv12301.xserver.jp 以降のサーバー</dt>
                                        <dd>
                                            <p>
                                                過去14日間
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>sv12300.xserver.jp 以前のサーバーおよび sv1~sv20.xtwo.ne.jpサーバー</dt>
                                        <dd>
                                            <p>
                                                過去7日間（※）
                                            </p>
                                            <p class="note">
                                                過去14日間への拡大を予定しており、提供の準備ができ次第ご案内いたします。
                                            </p>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>sv2000〜sv2399.xserver.jpサーバー</dt>
                                        <dd>
                                            <p>
                                                過去14日間
                                            </p>
                                        </dd>
                                    </dl>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>復元を実行すると、対象のディレクトリ・ファイルはすべてバックアップデータの内容に上書きされます。バックアップデータに存在しない、バックアップ日以降に作成されたファイル・ディレクトリはすべて削除されます。</li>
                                                <li>十分なディスク空き領域があることを確認したうえで、実行してください。バックアップデータのサイズ分の空き容量がないと、完全なバックアップデータの復元に失敗する場合があります。</li>
                                                <li>データサイズやファイル数、サーバーの負荷状況によっては復元処理に時間がかかる場合があります。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h3 class="section_ttl">自動バックアップからのサーバー領域のWeb・メールデータ復元</h3>
                                <div class="section_body">

                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1.「自動バックアップの取得・復元」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「自動バックアップの取得・復元」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_restore_1.png?date=2410" alt="自動バックアップからのサーバー領域のWeb・メールデータ復元"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.「自動バックアップデータから復元」を選択</h5>
                                            <div class="box_body">
                                                <p>「自動バックアップデータの取得と復元」メニューにおいて、 「自動バックアップデータから復元」を選択してください。</p>
                                                <p><img class="img" src="../img/manual/man_server_restore_2.png?date=2410" alt="自動バックアップからのサーバー領域のWeb・メールデータ復元"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3.対象となるバックアップデータと取得方法を選択</h5>
                                            <div class="box_body">
                                                <p>対象となるバックアップデータと復元方法を選択します。</p>
                                                <p><img class="img" src="../img/manual/man_server_restore_3.png?date=2410" alt="自動バックアップからのサーバー領域のWeb・メールデータ復元"></p>
                                                <p>なお、復元方法として「対象を指定して復元」を選択した場合は、復元の対象をドメイン・ディレクトリごとに指定することができます。 対象ディレクトリとして選択できる項目は以下の通りです。</p>
                                                <table class="table w100per">
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30perL">Web領域</th>
                                                        <td>
                                                            <p class="mb0">対象ドメインの「public_html」ディレクトリのデータ</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Web用設定ファイル</th>
                                                        <td>
                                                            <p class="mb0">対象ドメインの「public_html」ディレクトリ以外のデータ</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>メール領域</th>
                                                        <td>
                                                            <p>対象ドメインの「mail」ディレクトリのデータ</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b04">4.「実行する」をクリック</h5>
                                            <div class="box_body">
                                                <p>復元情報を確認し、「実行する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_restore_4.png?date=2410" alt="自動バックアップからのサーバー領域のWeb・メールデータ復元"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b05">5.注意事項を確認のうえ、「注意事項を確認した上で実行する」をクリック</h5>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「注意事項を確認した上で実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_restore_5.png?date=2410" alt="自動バックアップからのサーバー領域のWeb・メールデータ復元"></p>
                                                <p>以上で復元の開始手続きは完了です。</p>
                                                <p class="note">※バックアップデータの容量によっては復元完了までに時間がかかる場合があります。<br>
                                                    「履歴」から復元状況をご確認いただくことができます。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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