<?php
// リリース延期のためリダイレクト
header('Location: https://www.xserver.ne.jp/manual/');
?>

<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

    <title>高性能メールフィルタの有料オプション | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜高性能メールフィルタの有料オプションについて、手続きが可能な期間や手順をご案内しています。">

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

                            <h3 class="sub-ttl">高性能メールフィルタの有料オプション</h3>

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">高性能メールフィルタ（Cloudmark）とは</a></li>
                                    <li><a href="#link-b">新規契約お申し込み手順</a></li>
                                    <li><a href="#link-c">更新について</a></li>
                                    <li><a href="#link-d">ライセンス数変更お申し込み手順</a></li>
                                    <li><a href="#link-e">更新停止（解約）について</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">高性能メールフィルタ（Cloudmark）とは</h4>
                                <div class="section_body">
                                    <p>高性能メールフィルタ（Cloudmark）とは、世界最高水準の信頼性と高い検知精度を誇るCloudmark社のスパムフィルタです。<br>
                                        1ライセンスにつき1メールアドレスに適用できます。<br>
                                        有料オプションとして100個／月額1,100円（税込み）~でライセンス数を追加することができます。</p>

                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">高性能メールフィルタ（Cloudmark）のご利用方法は、以下のマニュアルをご参照ください。</p>
                                            <ul class="list list_arrow-right mb0">
                                                <li>マニュアル「<a href="man_mail_spam_setting.php">メール ＞ 迷惑メールフィルタ設定</a>」</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>

                                <aside class="msg msg-caution">
                                    <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                                    <div class="msg_body">
                                        <p>下記の場合、本有料オプションの新規契約、ライセンス変更、解約を含めたすべての申請ができません。</p>
                                        <dl class="dl mb0">
                                            <dt><i class="ico ico_square-fill"></i>サーバー試用期間中の場合</dt>
                                            <dd>本契約後（サーバー料金支払い後）に申請を行ってください。</dd>
                                            <dt><i class="ico ico_square-fill"></i>サーバー期限切れの場合</dt>
                                            <dd>サーバー料金支払い後に申請を行ってください。</dd>
                                            <dt><i class="ico ico_square-fill"></i>20日以降の申請かつ、自動更新設定が行われている場合</dt>
                                            <dd>自動更新設定を「解除」した後、申請を行ってください。</dd>
                                            <dt><i class="ico ico_square-fill"></i>サーバー更新手続き済み（請求情報が発行されている）の場合</dt>
                                            <dd>XServerアカウント内、上部メニューの「料金支払い」より、料金のお支払い手続きを取り消し後、申請を行ってください。</dd>
                                            <dt><i class="ico ico_square-fill"></i>サーバー解約済の場合</dt>
                                            <dd>有料オプションの操作はできません。（本有料オプションの契約中だった場合、自動的に解約申請中となります）</dd>
                                        </dl>
                                    </div>
                                </aside>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">新規契約お申し込み手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">

                                        <aside class="msg msg-notice">
                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用料金の起算について</h6>
                                            <div class="msg_body">
                                                <p>本有料オプションの初回契約時は、ご利用料金はお申し込み日の翌月1日から起算いたします。<br>
                                                    （例）7/15ご利用開始　→　8/1が料金の起算日となります<br>
                                                    <br>
                                                    契約終了後に再度本有料オプションを契約する際は、ご利用開始日より起算いたします。
                                                </p>
                                            </div>
                                        </aside>

                                        <section class="box">
                                            <h6 class="box_ttl">1.「契約情報」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、高性能メールフィルタ（Cloudmark）有料オプションを希望するサーバの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
                                                <img src="../img/manual/man_order_cloudmark_1.png?date=20220221" alt="「契約情報」をクリック">
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2.「申し込む」をクリック</h6>
                                            <div class="box_body">
                                                <p>[有料オプション「高性能メールフィルタ（Cloudmark）」の契約状況] 内に表示されている「申し込む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_2.png?date=20220221" alt="「申し込む」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">3.お申し込みいただく内容を入力</h6>
                                            <div class="box_body">
                                                <p>高性能メールフィルタ有料オプションのお申し込みフォームが表示されますので、ライセンス数を選択して「お申し込み内容の確認へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_3.png?date=20220221" alt="お申し込みいただく内容を入力してください"></p>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">更新について</h4>
                                <div class="section_body">
                                    <p>高性能メールフィルタ（Cloudmark）有料オプションは、オプション契約をしているサーバーの更新時に合わせて更新されます。<br>
                                        そのため、本有料オプションについて更新作業をしていただく必要はありません。</p>
                                    <aside class="msg">
                                        <div class="msg_body">
                                            <p class="font-bold">サーバーの更新方法は、以下のマニュアルをご参照ください。</p>
                                            <ul class="list list_arrow-right mb0">
                                                <li>マニュアル「<a href="man_order_pay_etc.php">お申し込み ＞ 料金のお支払い</a>」</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">ライセンス数変更お申し込み手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">

                                        <p>ライセンス数の変更適用タイミングは、以下の通りです。</p>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th class="w30per">ライセンス数増加</th>
                                                <td>即時適用</td>
                                            </tr>
                                            <tr>
                                                <th>ライセンス数削減</th>
                                                <td>現在の有料オプション利用期間終了後</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <aside class="msg msg-caution">
                                            <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                                            <div class="msg_body">
                                                <p>下記の場合、ライセンス数変更およびライセンス数変更のキャンセル申請はできません。</p>
                                                <dl class="dl mb0">
                                                    <dt><i class="ico ico_square-fill"></i>本有料オプション解約時</dt>
                                                    <dd>本有料オプション解約を「キャンセル」した後、ライセンス数変更の申請を行ってください。</dd>
                                                    <dt><i class="ico ico_square-fill"></i>指定期間以外でのライセンス数削減</dt>
                                                    <dd>ライセンス数削減は、ご利用期限月の1日~20日のみ可能です。指定期間内での申請を行ってください。</dd>
                                                </dl>
                                            </div>
                                        </aside>

                                        <section class="box">
                                            <h6 class="box_ttl">1.「契約情報」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、高性能メールフィルタ（Cloudmark）有料オプションを希望するサーバの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
                                                <img src="../img/manual/man_order_cloudmark_1.png?date=20220221" alt="「契約情報」をクリック">
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2.「変更する」をクリック</h6>
                                            <div class="box_body">
                                                <p>[有料オプション「高性能メールフィルタ（Cloudmark）」の契約状況]内 に表示されている「変更する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_4.png?date=20220221" alt="「変更する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">3.お申し込みいただく内容を入力</h6>
                                            <div class="box_body">
                                                <p>高性能メールフィルタ（Cloudmark）有料オプションのライセンス数変更フォームが表示されますので、ライセンス数を選択して「お申し込み内容の確認へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_5.png?date=20220221" alt="お申し込みいただく内容を入力"></p>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- /.serial-box -->
                                </div>
                            </section>


                            <section class="block">
                                <aside class="msg msg-notice">
                                    <h6 class="msg_ttl"><i class="ico ico_circleArrow-right"></i>ライセンス数削減の注意点について</h6>
                                    <div class="msg_body">
                                        <ul class="ul">
                                            <li>ライセンス数削減の申請を行いましても、ご利用期限日までは引き続き変更前のライセンス数をご利用可能です。</li>
                                            <li>ライセンス数削減の申請は、ご利用期限日までキャンセルが可能です。ただし、ライセンス数削減の申請後に有料オプション対象サーバーを更新した場合はキャンセルできません。</li>
                                            <li>ライセンス数削減の際、一旦支払われた利用料は返却できませんのでご了承ください。</li>
                                        </ul>
                                    </div>
                                </aside>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl">ライセンス数削減をキャンセルする</h4>
                                <div class="section_body">
                                    <p>ライセンス数削減の申請をキャンセルすることができます。<br>
                                        キャンセルすると、次回サーバー更新以降も引き続き現行ライセンス数でご利用いただけます。</p>
                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl">1.「キャンセル」をクリック</h6>
                                            <div class="box_body">
                                                <p>「キャンセル」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_6.png?date=20220221" alt="「キャンセル」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2.「変更をキャンセルする」をクリック</h6>
                                            <div class="box_body">
                                                <p>確認画面が表示されます。内容を確認のうえ、「変更をキャンセルする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_7.png?date=20220221" alt="「変更をキャンセルする」をクリック"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-e">更新停止（解約）について</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">
                                        <p>高性能メールフィルタ（Cloudmark）有料オプションの更新停止を希望される場合は、オプションの解約を行う必要があります。</p>

                                        <section class="box">
                                            <h6 class="box_ttl">1.「契約情報」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、高性能メールフィルタ（Cloudmark）有料オプションを希望するサーバの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
                                                <img src="../img/manual/man_order_cloudmark_1.png?date=20220221" alt="「契約情報」をクリック">
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2.「解約する」をクリック</h6>
                                            <div class="box_body">
                                                <p>[有料オプション「高性能メールフィルタ（Cloudmark）」の契約状況]内 に表示されている「解約する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_8.png?date=20220221" alt="「解約する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">3.「解約申請をする」をクリック</h6>
                                            <div class="box_body">
                                                <p>高性能メールフィルタ（Cloudmark）有料オプションの解約フォームが表示されますので、内容を確認の上「解約申請をする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_9.png?date=20220221" alt="「解約申請をする」をクリック"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="block">
                                <aside class="msg msg-notice">
                                    <h6 class="msg_ttl"><i class="ico ico_circleArrow-right"></i>解約の注意点について</h6>
                                    <div class="msg_body">
                                        <ul class="ul">
                                            <li>解約申請を行いましても、ご利用期限日までは引き続きご利用可能です。</li>
                                            <li>解約申請は、ご利用期限日までキャンセルが可能です。ただし、解約申請後に有料オプション対象サーバーを更新した場合はキャンセルできません。</li>
                                            <li>解約の際、一旦支払われた利用料は返却できませんのでご了承ください。</li>
                                        </ul>
                                    </div>
                                </aside>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl">解約をキャンセルする</h4>
                                <div class="section_body">
                                    <p>本有料オプション解約をキャンセルすることができます。<br>
                                        キャンセルすると、次回サーバー更新以降も引き続き本有料オプションをご利用いただけます。</p>
                                    <div class="serial-box mb10">
                                        <section class="box">
                                            <h6 class="box_ttl">1.「キャンセル」をクリック</h6>
                                            <div class="box_body">
                                                <p>「キャンセル」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_10.png?date=20220221" alt="「キャンセル」をクリックする"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl">2.「解約申請をキャンセルする」をクリック</h6>
                                            <div class="box_body">
                                                <p>確認画面が表示されます。内容を確認のうえ、「解約申請をキャンセルする」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_cloudmark_11.png?date=20220221" alt="「解約申請をキャンセルする」をクリックする"></p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
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