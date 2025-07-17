<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>.htaccess編集 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ディレクトリ単位でWebサーバーの挙動を変更できる「.htaccess」ファイルをサーバーパネルから手軽に編集できる「.htaccess編集」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">.htaccess</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">.htaccessとは</a></li>
                                <li><a href="#link-previous-b">「.htaccess編集」機能の概要</a></li>
                                <li><a href="#link-previous-c">「.htaccess編集」のご利用手順</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1..htaccess編集をクリック</a></li>
                                        <li><a href="#link-previous-c02">2..htaccess編集画面を表示</a></li>
                                        <li><a href="#link-previous-c03">3.設定内容の追加</a></li>
                                        <li><a href="#link-previous-c04">4.確認・確定</a></li>
                                        <li><a href="#link-previous-c05">5.完了</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">.htaccessとは</h4>
                                <div class="section_body">
                                    <p>.htaccess（エイチティーアクセス）とは、Webサーバーの挙動を決定する設定ファイルです。</p>
                                    <p>ディレクトリ単位で、アクセス制限やユーザー認証などを設定することができます。</p>

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>nginx環境下での.htaccessのご利用について</dt>
                                        <dd>
                                            エックスサーバーではnginx環境下においても、Apache環境下で設定された「.htaccess」ファイルをそのままご利用いただくことが可能です。<br>
                                            詳細はマニュアル「<a href="man_server_nginx.php">nginxについて</a>」をご参照ください。
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b"><a id="edit" name="edit"></a>「.htaccess編集」機能の概要</h4>
                                <div class="section_body">
                                    <ul class="ul">
                                        <li>サーバーパネルにて、ドメイン単位で.htaccessの編集が可能な「.htaccess編集」機能を提供しています。</li>
                                        <li>本機能は、「(設定対象ドメイン名)/public_html/.htaccess」ファイルを編集することができます。編集対象のファイルが存在しない場合は、編集内容を確定する時点で自動的に生成します。</li>
                                        <li>本機能を利用した場合は文字コードが「EUC-JP」として保存されます。</li>
                                        <li>その他のフォルダに設置する.htaccessファイルの編集をすることができません。ファイルマネージャやFTPソフトウェアによる編集、設置を行ってください。<br>
                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャログインフォーム</a><br>
                                            <a href="man_ftp_setting.php">マニュアル > FTPについて > FTPソフトの設定</a>
                                        </li>
                                        <li>詳しい設定方法や機能については、Webサーバー(Apache)に関する書籍やインターネット上の資料をご参照ください。</li>
                                    </ul>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                        <div class="msg_body">
                                            <p>.htaccessには、本サーバーパネルで提供している一部機能の設定に関する記述や、WordPressなどのプログラムによる記述が自動的に行われている場合があります。<br>
                                            心当たりがない記述であっても不用意に削除なされないようにご注意ください。<br>
                                            また、編集後はWebサイトが正常に表示されるかを必ずご確認ください。</p>
                                        </div>
                                    </aside>

                                    <div class="serial-box mt50">

                                        <h4 class="section_ttl" id="link-previous-c"><a id="edit" name="edit"></a>「.htaccess編集」のご利用手順</h4>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1. .htaccess編集をクリック</h6>
                                            <div class="box_body">
                                                 <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「.htaccess編集」メニューをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_1.png" alt="サーバーパネル・.htaccess編集のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2. .htaccess編集画面を表示</h6>
                                            <div class="box_body">
                                                <p>「.htaccess編集」タブをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_2.png" alt="「.htaccess編集」タブをクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>


                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3. 設定内容の追加</h6>
                                            <div class="box_body">
                                                <p>設定したい内容を画面に入力し、「確認画面へ進む」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_3.png" alt=".htaccessに追加する内容を入力しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c04">4. 確認・確定</h6>
                                            <div class="box_body">
                                                <p>設定内容を確認し、間違いがなければ「実行する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_4.png" alt="設定内容の確認画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c05">5. 完了</h6>
                                            <div class="box_body">
                                                <p>設定した内容が.htaccessファイルに反映していることを確認します。<br />あわせて、Webサイトが正しく表示されることをご確認ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_htaccess_5.png" alt="追加した内容が反映されているか確認しているスクリーンショット"></p>
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
                                    <li><a href="#link-a">.htaccessとは</a></li>
                                    <li><a href="#link-b">.htaccessの編集</a>
                                        <ol>
                                            <li><a href="#link-b01">1..htaccess編集をクリック</a></li>
                                            <li><a href="#link-b02">2.ペンのアイコンをクリック</a></li>
                                            <li><a href="#link-b03">3.設定内容の追加</a></li>
                                            <li><a href="#link-b04">4.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">.htaccessとは</h4>
                                        <div class="section_body">
                                            <p>.htaccess（エイチティーアクセス）とは、Webサーバーの挙動を決定する設定ファイルです。</p>
                                            <p>ディレクトリ単位で、アクセス制限やユーザー認証などを設定することができます。</p>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>nginx環境下での.htaccessのご利用について</dt>
                                                <dd>
                                                    エックスサーバーではnginx環境下においても、Apache環境下で設定された「.htaccess」ファイルをそのままご利用いただくことが可能です。
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 id="link-b" class="section_ttl">.htaccessの編集</h4>
                                        <div class="section_body">

                                            <p>サーバーパネルにて、ドメイン単位で.htaccessの編集が可能な「.htaccess編集」機能を提供しています。</p>
                                            <aside class="msg msg_caution">
                                                <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                                                <div class="msg_body">
                                                    <p>.htaccessには、本サーバーパネルで提供している一部機能の設定に関する記述や、WordPressなどのプログラムによる記述が自動的に行われている場合があります。<br>
                                                        心当たりがない記述であっても不用意に削除なされないようにご注意ください。<br>
                                                        また、編集後はWebサイトが正常に表示されるかを必ずご確認ください。</p>
                                                </div>
                                            </aside>
                                            <aside class="msg msg_info">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「.htaccess編集」機能について</h5>
                                                <div class="msg_body">
                                                    <ul class="ul">
                                                        <li>本機能は、「(設定対象ドメイン名)/public_html/.htaccess」ファイルを編集することができます。</li>
                                                        <li>編集対象のファイルが存在しない場合は、編集内容を確定する時点で自動的に生成します。</li>
                                                        <li>本機能を利用した場合は文字コードが「EUC-JP」として保存されます。</li>
                                                        <li>その他のフォルダに設置する.htaccessファイルの編集をすることができません。ファイルマネージャやFTPソフトウェアによる編集、設置を行ってください。<br>
                                                            <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャログインフォーム</a><br>
                                                            <a href="man_ftp_setting.php">マニュアル > FTPについて > FTPソフトの設定</a>
                                                        </li>
                                                        <li>詳しい設定方法や機能については、Webサーバー(Apache)に関する書籍やインターネット上の資料をご参照ください。</li>
                                                    </ul>
                                                </div>
                                            </aside>
                                            <div class="serial-box mt50">

                                                <section class="box" id="link-b01">
                                                    <h5 class="box_ttl">1. .htaccess編集をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「.htaccess編集」メニューをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_1.png?date=2410" alt="サーバーパネル・.htaccess編集のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b02">
                                                    <h5 class="box_ttl">2. ペンのアイコンをクリック</h5>
                                                    <div class="box_body">
                                                        <p>サーバー一覧より、編集対象の列右端にあるペンのアイコンをクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_2.png?date=2410" alt="サーバー一覧のスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b03">
                                                    <h5 class="box_ttl">3. 設定内容の追加</h5>
                                                    <div class="box_body">
                                                        <p>設定したい内容を画面に入力し、「設定する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_3.png?date=2410" alt=".htaccessに追加する内容を入力しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box" id="link-b04">
                                                    <h5 class="box_ttl">4. 完了</h5>
                                                    <div class="box_body">
                                                        <p>設定した内容が.htaccessファイルに反映していることを確認します。<br />あわせて、Webサイトが正しく表示されることをご確認ください。</p>
                                                        <p><img class="img" src="../img/manual/man_server_htaccess_4.png?date=2410" alt="追加した内容が反映されているか確認しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

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