<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DMARC設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜対象ドメインのなりすましやその他の不正なメールの送信を制限できる「DMARC設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">DMARC設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">DMARC設定について</a></li>
                                    <li><a href="#link-previous-b">DMARC設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「DMARC設定」を選択</a></li>
                                            <li><a href="#link-previous-b02">2.各項目の設定内容を選択する</a></li>
                                            <li><a href="#link-previous-b03">3.設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">DMARC設定について</h4>
                                <div class="section_body">
                                    <p>
                                        「DMARC」とは、送信ドメイン認証のためのSPFやDKIMの認証が失敗した場合の対応策を定めたもので、
                                        メールの受け手側に、認証に失敗したメールの対応方法を指定することが出来ます。<br>
                                        DMARC設定を利用することで、対象ドメインのなりすましやその他の不正なメールの送信を制限することができます。<br>
                                        <br>
                                        こちらの機能では以下の送信側DMARC設定を行うことができます。<br>
                                        ・送信側ポリシー設定<br>
                                        ・認証結果等のレポート受信設定
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_mail_dmarc_4.png" alt="総務省DMARC概要図"></p>
                                    <p class="note">出典：総務省 "受信側における送信ドメイン認証技術導入に関する法的な留意点"(<a href="https://www.soumu.go.jp/main_content/000499986.pdf" target="_blank" rel="nofollow">https://www.soumu.go.jp/main_content/000499986.pdf</a><i class="ico ico_new-window color-gray"></i>)を加工して作成　</p>
                                </div>

                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>受信側DMARC設定について</dt>
                                    <dd>
                                        <p>受信側DMARC設定については<a href="../manual/man_mail_spam_setting.php#link-previous-a05">迷惑メールフィルタ設定</a>よりご確認いただけます。</p>
                                    </dd>
                                </dl>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">DMARC設定の設定方法</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1. 「DMARC設定」を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、DMARC設定を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_1.png" alt="DMARC設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. 各項目の設定内容を選択する</h6>
                                            <div class="box_body">
                                                <p>各項目の設定内容を設定し、「設定する」をクリックします。</p>

                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_2.png" alt="各項目の設定内容を選択する"></p>



                                                <!-- 各項目の説明 -->
                                                <!-- DMARCポリシーの説明 -->
                                                <dl class="dl">
                                                    <!-- 各項目の説明 -->
                                                    <!-- DMARCポリシーの説明 -->
                                                    <dt><i class="ico ico_square-fill"></i>DMARCポリシー</dt>
                                                    <dd>
                                                        <p class="mb0">
                                                            メールの差出人として対象ドメインが第三者に利用された場合に、受け手側の対応方法を指定することが出来ます。<br>
                                                            ※メールの受信側のDMARC設定状況によっては、指定されたポリシーに従われない可能性があります。
                                                        </p>
                                                    </dd>

                                                    <table class="table table_use-caption">
                                                        <caption>DMARCポリシーの項目説明</caption>
                                                        <tbody>
                                                        <tr>
                                                            <th class="w30per">何もしない</th>
                                                            <td>
                                                                <p>なりすましなどのメール検知状況にかかわらず、通常通りメールを配送するように指示します。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>迷惑メールとして配送する</th>
                                                            <td>なりすましなどのメールを検知した際、配送先にて迷惑メールとして扱うように指示します。</td>
                                                        </tr>
                                                        <tr>
                                                            <th>メールを配送しない</th>
                                                            <td>なりすましなどのメールを検知した際、配送先にて受け取らないように指示します。</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <aside class="msg msg_notice">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                DMARCポリシー設定は段階的な導入を推奨します。 <br>
                                                                DMARCポリシー設定を開始する際は「何もしない」を選択し、レポート設定を「ON」にして通知メールアドレスを指定してください。 送付されたレポートに認証成功・失敗数が通知されるので、その内容をもとに段階的に「迷惑メールとして配送する」、最終的に「メールを配送しない」に変更してください。
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dl>


                                                <dl class="dl">
                                                    <!-- レポート通知先 -->
                                                    <dt><i class="ico ico_square-fill"></i>レポート通知先設定</dt>
                                                    <dd>
                                                        <p class="mb0">
                                                            メールの受け手側になりすましメール等が届いて認証が失敗したことを通知する「DMARCレポート」を受け取ることが出来ます。<br>
                                                            認証の問題や不正なメールのパターンを把握することができ、セキュリティ対策に活用することができます。
                                                        </p>
                                                    </dd>

                                                    <!-- レポート通知先の注意 -->
                                                    <aside class="msg msg_caution">
                                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                レポート通知先のメールアドレスはDNSレコードに記載されるため、外部からの参照が可能となります。
                                                                メールアドレスは外部から参照されても問題ないものを設定してください。
                                                            </p>
                                                        </div>
                                                    </aside>
                                                </dl>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. 設定完了</h6>
                                            <div class="box_body">
                                                <p>追加後、「DMARC設定」より設定内容の確認が可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_dmarc_3.png" alt="設定完了"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">DMARC設定について</a></li>
                                    <li><a href="#link-b">DMARC設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「DMARC設定」をクリック</a></li>
                                            <li><a href="#link-b2">2.各項目の設定内容を選択する</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">DMARC設定について</h4>
                                        <div class="section_body mb40">
                                            <p>
                                                「DMARC」とは、送信ドメイン認証のためのSPFやDKIMの認証が失敗した場合の対応策を定めたもので、
                                                メールの受け手側に、認証に失敗したメールの対応方法を指定することが出来ます。<br>
                                                DMARC設定を利用することで、対象ドメインのなりすましやその他の不正なメールの送信を制限することができます。<br>
                                                <br>
                                                こちらの機能では以下の送信側DMARC設定を行うことができます。<br>
                                                ・送信側ポリシー設定<br>
                                                ・認証結果等のレポート受信設定
                                            </p>
                                            <p><img class="img" src="../img/manual/man_mail_dmarc_4.png?date=2410" alt="総務省DMARC概要図"></p>
                                            <p class="note">出典：総務省 "受信側における送信ドメイン認証技術導入に関する法的な留意点"(<a href="https://www.soumu.go.jp/main_content/000499986.pdf" target="_blank" rel="nofollow">https://www.soumu.go.jp/main_content/000499986.pdf</a><i class="ico ico_new-window"></i>)を加工して作成　</p>
                                        </div>

                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>受信側DMARC設定について</dt>
                                            <dd>
                                                <p>受信側DMARC設定については<a href="../manual/man_mail_spam_setting.php#link-a4">迷惑メールフィルタ設定</a>よりご確認いただけます。</p>
                                            </dd>
                                        </dl>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">DMARC設定の設定方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. 「DMARC設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、DMARC設定をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dmarc_1.png?date=2410" alt="DMARC設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. 各項目の設定内容を選択する</h5>
                                                    <div class="box_body">
                                                        <p>設定をしたいドメインの右端にある編集ボタンをクリックします。各項目を設定し、「設定する」をクリックすると設定が反映されます。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_dmarc_2.png?date=2410" alt="DMARC設定の各項目の設定画面"></p>

                                                        <!-- 各項目の説明 -->
                                                        <!-- DMARCポリシーの説明 -->
                                                        <dl class="dl">
                                                            <!-- 各項目の説明 -->
                                                            <!-- DMARCポリシーの説明 -->
                                                            <dt><i class="ico ico_square-fill"></i>DMARCポリシー</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    メールの差出人として対象ドメインが第三者に利用された場合に、受け手側の対応方法を指定することが出来ます。<br>
                                                                    ※メールの受信側のDMARC設定状況によっては、指定されたポリシーに従われない可能性があります。
                                                                </p>
                                                            </dd>

                                                            <table class="table table__use-caption">
                                                                <caption>DMARCポリシーの項目説明</caption>
                                                                <tbody>
                                                                <tr>
                                                                    <th class="w30per">何もしない</th>
                                                                    <td>
                                                                        <p>なりすましなどのメール検知状況にかかわらず、通常通りメールを配送するように指示します。</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>迷惑メールとして配送する</th>
                                                                    <td>なりすましなどのメールを検知した際、配送先にて迷惑メールとして扱うように指示します。</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>メールを配送しない</th>
                                                                    <td>なりすましなどのメールを検知した際、配送先にて受け取らないように指示します。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <aside class="msg msg_notice">
                                                                <div class="msg_body">
                                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
                                                                    <p>
                                                                        DMARCポリシー設定は段階的な導入を推奨します。 <br>
                                                                        DMARCポリシー設定を開始する際は「何もしない」を選択し、レポート設定を「ON」にして通知メールアドレスを指定してください。 送付されたレポートに認証成功・失敗数が通知されるので、その内容をもとに段階的に「迷惑メールとして配送する」、最終的に「メールを配送しない」に変更してください。
                                                                    </p>
                                                                </div>
                                                            </aside>
                                                        </dl>


                                                        <dl class="dl">
                                                            <!-- レポート通知先 -->
                                                            <dt><i class="ico ico_square-fill"></i>レポート通知先設定</dt>
                                                            <dd>
                                                                <p class="mb0">
                                                                    メールの受け手側になりすましメール等が届いて認証が失敗したことを通知する「DMARCレポート」を受け取ることが出来ます。<br>
                                                                    認証の問題や不正なメールのパターンを把握することができ、セキュリティ対策に活用することができます。
                                                                </p>
                                                            </dd>

                                                            <!-- レポート通知先の注意 -->
                                                            <aside class="msg msg_caution">
                                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                <div class="msg_body">
                                                                    <p>
                                                                        レポート通知先のメールアドレスはDNSレコードに記載されるため、外部からの参照が可能となります。
                                                                        メールアドレスは外部から参照されても問題ないものを設定してください。
                                                                    </p>
                                                                </div>
                                                            </aside>
                                                        </dl>
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
                        <!-- /新パネル -->

                    </div>
                </div>


                <!-- /.section -->
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