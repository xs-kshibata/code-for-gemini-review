<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPress サイトコピー手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜WordPressサイトコピー機能で「WordPress 日本語版」を設置するための手順を記載しています。エックスサーバーでは簡単な操作で「WordPress」をコピーできる「サイトコピー」機能を提供しています。">

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

                <h3 class="sub-ttl">WordPressのサイトコピーについて</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">WordPressのサイトコピー はじめに</a></li>
                                <li><a href="#link-previous-b">サイトコピー手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「コピー」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.WordPressのサイトコピー設定画面</a></li>
                                        <li><a href="#link-previous-b03">3.確認し間違いがなければ「コピーする」をクリック</a></li>
                                        <li><a href="#link-previous-b04">4.完了画面が表示されればコピー完了です</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <h4 class="section_ttl" id="link-previous-a">WordPressのサイトコピー はじめに</h4>
                            <p>本機能は、動作確認用のテストサイトや短時間での新規サイト作成など、さまざまな場面でご活用いただけます。</p>
                            <p>
                                なお、一部のバックアップ関連プラグインによって生成されたデータは、コピーの対象外となります。<br>
                                一部のファイルにおいてはURLの置換がされない場合があります。その場合は手動で置換、またはコピーをお願いします。
                            </p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">サイトコピー手順</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/previous/man_install_copy_word_1.png" alt="簡単インストールにフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「コピー」をクリック</h6>
                                            <div class="box_body">
                                                <p>「コピー」をクリックしてください</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_2.png" alt="「コピー」ボタンのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.WordPressのサイトコピー設定画面</h6>
                                            <div class="box_body">
                                                <p>各項目を入力し、最後に「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_3.png" alt="サイトコピー入力画面"></p>

                                                <table class="table table_use-caption break-word">
                                                    <caption>WordPressのサイトコピー設定</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>コピー対象</th>
                                                            <td>
                                                                <p>コピー対象を選択します。</p>
                                                                <ul class="ul">
                                                                    <li>
                                                                        全て<br>
                                                                        全てのデータをコピーします。
                                                                    </li>
                                                                    <li>
                                                                        テンプレートのみ<br>
                                                                        画像、記事を含まないテンプレートのみコピーします。
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="w20per w30per-s">コピー先URL</th>
                                                            <td><p class="mb5">お客様のドメイン名/wp</p>
                                                                <div class="border border_gray">
                                                                    [http://お客様のドメイン名]にて、お客様のWordPressにアクセスを希望する場合は[wp]の部分を空欄としてください。
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.確認し間違いがなければ「コピーする」をクリック</h6>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.完了画面が表示されればコピー完了です</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_install_copy_word_4.png" alt="インストール完了画面のスクリーンショット"></p>
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
                                    <li><a href="#link-a">WordPressのサイトコピー はじめに</a></li>
                                    <li><a href="#link-b">サイトコピー手順</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「詳細」をクリック</a></li>
                                            <li><a href="#link-b2">2.「コピー」をクリック</a></li>
                                            <li><a href="#link-b3">3.WordPressのサイトコピー設定画面</a></li>
                                            <li><a href="#link-b4">4.完了メッセージが表示されればコピー完了です</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">WordPressのサイトコピー はじめに</h4>
                                <div class="section_body">
                                    <p>本機能は、動作確認用のテストサイトや短時間での新規サイト作成など、さまざまな場面でご活用いただけます。</p>
                                    <p>
                                        なお、一部のバックアップ関連プラグインによって生成されたデータは、コピーの対象外となります。<br>
                                        一部のファイルにおいてはURLの置換がされない場合があります。その場合は手動で置換、またはコピーをお願いします。
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h4 class="section_ttl">サイトコピー手順</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より「WordPress簡単インストール」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_word_0.png?date=2410" alt="簡単インストールにフォーカスしたスクリーンショット"></p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b1">1.「詳細」をクリック</h5>
                                            <div class="box_body">
                                                <p>「詳細」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_1.png?date=2410" alt="「詳細」ボタンのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b2">2.「コピー」をクリック</h5>
                                            <div class="box_body">
                                                <p>「コピー」をクリックしてください</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_2.png?date=2410" alt="「コピー」ボタンのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b3">3.WordPressのサイトコピー設定画面</h5>
                                            <div class="box_body">
                                                <p>各項目を入力し、最後に「コピーする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_install_copy_word_3.png?date=2410" alt="サイトコピー入力画面"></p>

                                                <table class="table table--responsive">
                                                    <caption>WordPressのサイトコピー設定</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th>コピー対象</th>
                                                        <td>
                                                            <p>コピー対象を選択します。</p>
                                                            <ul class="ul">
                                                                <li>
                                                                    全て<br>
                                                                    全てのデータをコピーします。
                                                                </li>
                                                                <li>
                                                                    テンプレートのみ<br>
                                                                    画像、記事を含まないテンプレートのみコピーします。
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="w20per w30per-s">コピー先URL</th>
                                                        <td><p class="mb5">お客様のドメイン名/wp</p>
                                                            <div class="border border_gray">
                                                                [http://お客様のドメイン名]にて、お客様のWordPressにアクセスを希望する場合は[wp]の部分を空欄としてください。
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b4">4.完了メッセージが表示されればコピー完了です</h5>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/man_install_copy_word_4.png?date=2410" alt="コピー完了のスクリーンショット"></p>
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
