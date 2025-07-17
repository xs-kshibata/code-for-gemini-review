<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PukiWiki 簡単インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜簡単インストール機能で「PukiWiki」を設置するための手順を記載しています。エックスサーバーでは簡単な操作で「PukiWiki」を設置できる「簡単インストール」機能を提供しています。">

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
            
                <h3 class="sub-ttl">PukiWiki</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">PukiWiki 簡単インストール はじめに</a></li>
                                    <li><a href="#link-previous-b">簡単インストール手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.PukiWikiのインストール設定</a></li>
                                            <li><a href="#link-previous-b02">2.確認し間違いがなければ「インストールする」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.完了画面が表示されればインストール完了</a></li>
                                            <li><a href="#link-previous-b04">4.インストール確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">PukiWiki 簡単インストール はじめに</h4>
                                <div class="section_body">
                                    <p>お客様側での、パッケージのご用意は必要ありません。<br>
                                    なお、インストール後の設定等に関するサポートは行っていません。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki 簡単インストール 設定例</caption>
                                        <tbody>
                                            <tr><th class="w20per w30per-s">サーバーID</th><td>xsample</td></tr>
                                            <tr><th>ドメイン名</th><td>example.com</td></tr>
                                            <tr>
                                                <th>インストールディレクトリ</th>
                                                <td>/home/xsample/example.com/public_html/pukiwiki
                                                    <div class="border border_gray">
                                                        [http://example.com]にてPukiWikiにアクセスを希望する場合は[/home/xsample/example.com/public_html/]をインストールディレクトリに指定する必要があります。
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>インストールURL</th><td>http://example.com/pukiwiki/</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki 簡単インストール 動作環境</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w20per w30per-s">PHPバージョン</th>
                                                <td>PHP 4.3 以上(※PHP 7.0 推奨)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-previous-b">
                                <h4 id="i1" class="section_ttl">簡単インストール手順</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「簡単インストール」→「プログラムインストール」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_auto_other_1.png" alt="簡単インストールにフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.PukiWikiのインストール設定</h6>
                                            <div class="box_body">
                                                <p>PukiWiki のインストール設定をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_1.png" alt="インストール設定をクリック"></p>
                                                <p>各項目を入力し、最後に「確認画面へ進む」をクリックしてください。</p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>PukiWikiのインストール設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th class="w20per w30per-s">インストールURL</th>
                                                            <td>お客様のドメイン名/pukiwiki
                                                                <div class="border border_gray">
                                                                    [http://お客様のドメイン名]にて、お客様のPukiWikiにアクセスを希望する場合は[pukiwiki]の部分を空欄としてください。
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr><th>凍結解除用パスワード</th><td>PukiWikiの凍結パスワード</td></tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_2.png" alt="PukiWiki設定画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.確認し間違いがなければ「インストールする」をクリック</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_3.png" alt="インストールをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.完了画面が表示されればインストール完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_4.png" alt="PukiWikiインストール完了画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.インストール確認</h6>
                                            <div class="box_body">
                                                <p>表示されているリンクからPukiWikiホームページへ移動します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_puki_5.png" alt="アクセス制限ユーザ設定画面のスクリーンショット"></p>
                                                <p>以上でPukiWikiの導入は終了です。お疲れ様でした。</p>
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
                                    <li><a href="#link-a">PukiWiki 簡単インストール はじめに</a></li>
                                    <li><a href="#link-b">簡単インストール手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「PukiWiki簡単インストール」をクリック</a></li>
                                            <li><a href="#link-b02">2.PukiWikiのインストール設定</a></li>
                                            <li><a href="#link-b03">3.インストールURL一覧に表示されればインストール完了</a></li>
                                            <li><a href="#link-b04">4.インストール確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">PukiWiki 簡単インストール はじめに</h4>
                                <div class="section_body">
                                    <p>お客様側での、パッケージのご用意は必要ありません。<br>
                                        なお、インストール後の設定等に関するサポートは行っていません。</p>
                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki 簡単インストール 設定例</caption>
                                        <tbody>
                                        <tr><th class="w20per w30per-s">サーバーID</th><td>xsample</td></tr>
                                        <tr><th>ドメイン名</th><td>example.com</td></tr>
                                        <tr>
                                            <th>インストールディレクトリ</th>
                                            <td>/home/xsample/example.com/public_html/pukiwiki
                                                <div class="border border_gray">
                                                    [http://example.com]にてPukiWikiにアクセスを希望する場合は[/home/xsample/example.com/public_html/]をインストールディレクトリに指定する必要があります。
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><th>インストールURL</th><td>http://example.com/pukiwiki/</td></tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption break-word">
                                        <caption>PukiWiki 簡単インストール 動作環境</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w20per w30per-s">PHPバージョン</th>
                                            <td>PHP 4.3 以上(※PHP 7.0 推奨)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section" id="link-b">
                                <h4 id="i1" class="section_ttl">簡単インストール手順</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.「PukiWiki簡単インストール」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「PukiWiki簡単インストール」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_other_1.png?date=2410" alt="簡単インストールにフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.PukiWikiのインストール設定</h6>
                                            <div class="box_body">
                                                <p>「新規インストール」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_1.png?date=2410" alt="インストール設定をクリック"></p>
                                                <p>各項目を入力し、最後に「インストールする」をクリックしてください。</p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>PukiWikiのインストール設定</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th class="w20per w30per-s">インストールURL</th>
                                                        <td>お客様のドメイン名/pukiwiki
                                                            <div class="border border_gray">
                                                                [http://お客様のドメイン名]にて、お客様のPukiWikiにアクセスを希望する場合は[pukiwiki]の部分を空欄としてください。
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr><th>凍結解除用パスワード</th><td>PukiWikiの凍結パスワード</td></tr>
                                                    </tbody>
                                                </table>

                                                <p><img class="img" src="../img/manual/man_install_auto_puki_2.png?date=2410" alt="PukiWiki設定画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.インストールURL一覧に表示されればインストール完了</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_3.png?date=2410" alt="インストールをクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.インストール確認</h6>
                                            <div class="box_body">
                                                <p>表示されているリンクからPukiWikiホームページへ移動します。</p>
                                                <p><img class="img" src="../img/manual/man_install_auto_puki_5.png?date=2410" alt="アクセス制限ユーザ設定画面のスクリーンショット"></p>
                                                <p>以上でPukiWikiの導入は終了です。お疲れ様でした。</p>
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