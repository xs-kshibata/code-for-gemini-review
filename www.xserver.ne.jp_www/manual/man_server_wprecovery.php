<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WordPressリカバリー | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「WordPressリカバリー」機能でリカバリーする手順について記載しています。">

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
            
                <h3 class="sub-ttl">WordPressリカバリー</h3>
                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">WordPressリカバリーとは</a></li>
                                    <li><a href="#link-previous-b">WordPressリカバリーの実施手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.WordPressリカバリーメニューへ</a></li>
                                            <li><a href="#link-previous-b02">2.復旧に進む</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">正しく表示されなくなったWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">1.「正しく表示されなくなったWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-previous-c02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-previous-c03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-d">不正アクセスを受けたWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-previous-d01">1.「不正アクセスを受けたWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-previous-d02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-previous-d03">3.ステータスが100％になるのを確認し、完了画面へ</a></li>
                                            <li><a href="#link-previous-d04">4.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-e">ログインできなくなったWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-previous-e01">1.「ログインできなくなったWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-previous-e02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-previous-e03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-f">ログインパスワードのリセット</a>
                                        <ol>
                                            <li><a href="#link-previous-f01">1.「ログインパスワードのリセット」を選択</a></li>
                                            <li><a href="#link-previous-f02">2.パスワードをリセット</a></li>
                                            <li><a href="#link-previous-f03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-g">WordPress本体のリセット</a>
                                        <ol>
                                            <li><a href="#link-previous-g01">1.「WordPress本体のリセット」を選択</a></li>
                                            <li><a href="#link-previous-g02">2.引き継ぎたいデータを選択</a></li>
                                            <li><a href="#link-previous-g03">3.内容を確認して、リセットを開始</a></li>
                                            <li><a href="#link-previous-g04">4.ステータスが100％になるのを確認し、完了画面へ</a></li>
                                            <li><a href="#link-previous-g05">5.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WordPressリカバリーとは</h4>
                                <div class="section_body">

                                    <p>「WordPressリカバリー」とは WordPressで起こった問題に対し、復旧やリセットを行うことができます。</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご確認ください</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>本復旧機能は、サイトを完全に復旧することを保障するものではありません。</li>
                                                <li>補正処理実行後はウェブサイトが正常に表示されるかの確認を必ず行ってください。</li>
                                                <li>データサイズ、ファイル数、およびサーバーの負荷状況によっては、処理に時間がかかる場合があります。</li>
                                                <li>リカバリー補正処理実行前に「/home/サーバーID/ドメイン名/wp_recovery_backup」にバックアップデータが作成されます。<br>
                                                例）/home/sample/sample.xsrv.jp/wp_recovery_backup</li>
                                                <li>以下の場合は、WordPressリカバリー機能をご利用いただけません。<br>
                                                    ・WordPress5.0より前のパージョンを使用している場合<br>
                                                    ・WordPressマルチサイト機能を使用している場合</li>
                                            </ul>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">WordPressリカバリーの実施手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.WordPressリカバリーメニューへ</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし「WordPressリカバリー」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_1.png" alt="WordPressリカバリーの実施手順"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.復旧に進む</h6>
                                            <div class="box_body">
                                                <p>復旧したいWordPressの「復旧に進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_2.png" alt="WordPressリカバリーの実施手順"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <p>復旧やリセットを行える項目は以下のとおりです。</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">正しく表示されなくなったWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c01">1.「正しく表示されなくなったWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「正しく表示されなくなったWordPressの復旧」を選択して「次へ進む」をクリックしてください</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_3.png" alt="WordPressリカバリーの実施手順"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「補正処理を実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_4.png" alt="正しく表示されなくなったWordPressの復旧"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>データベース選択画面について</h6>
                                                    <p>wp-config.phpに設定されているデータベース名が正しくない場合に、WordPressのデータベース選択画面が表示されます。</p>
                                                    <p>プルダウンメニューからデータベースを選択のうえ「確認する」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_5.png" alt="正しく表示されなくなったWordPressの復旧"></p>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-c03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPressの復旧対応が完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_6.png" alt="正しく表示されなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">不正アクセスを受けたWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d01">1.「不正アクセスを受けたWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「不正アクセスを受けたWordPressの復旧」を選択して、「次へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_7.png" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                            <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「復旧を開始する」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_8.png" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d03">3.ステータスが100％になるのを確認し、完了画面へ</h6>
                                            <div class="box_body">
                                                <p>「ステータス」が100％になると「完了画面に進む」ボタンが表示されますので、クリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_9.png" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-d04">4.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPressの復旧対応が完了しました。」が表示されたら完了です。新しいパスワードとログインする際のIDが表示されますのでご確認ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_10.png" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-e">ログインできなくなったWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e01">1.「ログインできなくなったWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「ログインできなくなったWordPressの復旧」を選択して、「次へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_11.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「補正処理を実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_12.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-e03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPressの復旧対応が完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_13.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-f">ログインパスワードのリセット</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f01">1.「ログインパスワードのリセット」を選択</h6>
                                            <div class="box_body">
                                                <p>「ログインパスワードのリセット」を選択して、「次を進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_14.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f02">2.パスワードをリセット</h6>
                                            <div class="box_body">
                                                <p>「パスワードをリセットする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_15.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-f03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「パスワードのリセットが完了しました。」が表示されたら完了です。新しいパスワードとログインする際のIDが表示されますのでご確認ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_16.png" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-g">WordPress本体のリセット</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g01">1.「WordPress本体のリセット」を選択</h6>
                                            <div class="box_body">
                                                <p>「WordPress本体のリセット」を選択して、「次を進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_17.png" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g02">2.引き継ぎたいデータを選択</h6>
                                            <div class="box_body">
                                                <p>「引き継ぐデータ」から引き継ぎたいデータを選択して、「確認画面へ進む」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_18.png" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g03">3.内容を確認して、リセットを開始</h6>
                                            <div class="box_body">
                                                <p>引き継ぐデータに間違いがないかを今一度確認の上、「リセットを開始する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_19.png" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g04">4.ステータスが100％になるのを確認し、完了画面へ</h6>
                                            <div class="box_body">
                                                <p>「ステータス」が100％になると「完了画面に進む」ボタンが表示されますのでクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_20.png" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-g05">5.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPress本体のリセットが完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_wp_recovery_21.png" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                    </div>
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
                                    <li><a href="#link-a">WordPressリカバリーとは</a></li>
                                    <li><a href="#link-b">WordPressリカバリーの実施手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.WordPressリカバリーメニューへ</a></li>
                                            <li><a href="#link-b02">2.「復旧」をクリック</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">正しく表示されなくなったWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-c01">1.「正しく表示されなくなったWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-c02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-c03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">不正アクセスを受けたWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-d01">1.「不正アクセスを受けたWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-d02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-d03">3.ステータスが100％になるのを確認し、完了画面へ</a></li>
                                            <li><a href="#link-d04">4.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-e">ログインできなくなったWordPressの復旧</a>
                                        <ol>
                                            <li><a href="#link-e01">1.「ログインできなくなったWordPressの復旧」を選択</a></li>
                                            <li><a href="#link-e02">2.注意事項を確認し、補正処理を実行</a></li>
                                            <li><a href="#link-e03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-f">ログインパスワードのリセット</a>
                                        <ol>
                                            <li><a href="#link-f01">1.「ログインパスワードのリセット」を選択</a></li>
                                            <li><a href="#link-f02">2.パスワードをリセット</a></li>
                                            <li><a href="#link-f03">3.完了</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-g">WordPress本体のリセット</a>
                                        <ol>
                                            <li><a href="#link-g01">1.「WordPress本体のリセット」を選択</a></li>
                                            <li><a href="#link-g02">2.引き継ぎたいデータを選択</a></li>
                                            <li><a href="#link-g03">3.ステータスが100％になるのを確認し、完了画面へ</a></li>
                                            <li><a href="#link-g04">4.完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">WordPressリカバリーとは</h4>
                                <div class="section_body">

                                    <p>「WordPressリカバリー」とは WordPressで起こった問題に対し、復旧やリセットを行うことができます。</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご確認ください</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>本復旧機能は、サイトを完全に復旧することを保障するものではありません。</li>
                                                <li>補正処理実行後はウェブサイトが正常に表示されるかの確認を必ず行ってください。</li>
                                                <li>データサイズ、ファイル数、およびサーバーの負荷状況によっては、処理に時間がかかる場合があります。</li>
                                                <li>リカバリー補正処理実行前に「/home/サーバーID/ドメイン名/wp_recovery_backup」にバックアップデータが作成されます。<br>
                                                    例）/home/sample/sample.xsrv.jp/wp_recovery_backup</li>
                                                <li>以下の場合は、WordPressリカバリー機能をご利用いただけません。<br>
                                                    ・WordPress5.0より前のパージョンを使用している場合<br>
                                                    ・WordPressマルチサイト機能を使用している場合</li>
                                            </ul>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">WordPressリカバリーの実施手順</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.WordPressリカバリーメニューへ</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし「WordPressリカバリー」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_1.png?date=2410" alt="WordPressリカバリーの実施手順"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.「復旧」をクリック</h6>
                                            <div class="box_body">
                                                <p>復旧したいWordPressの「復旧」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_2.png?date=2410" alt="「復旧」をクリック"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <p>復旧やリセットを行える項目は以下のとおりです。</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">正しく表示されなくなったWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c01">1.「正しく表示されなくなったWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「正しく表示されなくなったWordPressの復旧」を選択して「次へ」をクリックしてください</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_3.png?date=2410" alt="WordPressリカバリーの実施手順"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_4.png?date=2410" alt="正しく表示されなくなったWordPressの復旧"></p>
                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>データベース選択画面について</h6>
                                                    <p>wp-config.phpに設定されているデータベース名が正しくない場合に、WordPressのデータベース選択画面が表示されます。</p>
                                                    <p>プルダウンメニューからデータベースを選択のうえ「実行する」をクリックしてください。</p>
                                                    <p><img class="img" src="../img/manual/man_server_wp_recovery_5.png?date=2410" alt="正しく表示されなくなったWordPressの復旧"></p>
                                                </aside>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-c03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPressの復旧対応が完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_6.png?date=2410" alt="正しく表示されなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">不正アクセスを受けたWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d01">1.「不正アクセスを受けたWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「不正アクセスを受けたWordPressの復旧」を選択して、「次へ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_7.png?date=2410" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_8.png?date=2410" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d03">3.ステータスが100％になるのを確認し、完了画面へ</h6>
                                            <div class="box_body">
                                                <p>「ステータス」が100％になると「完了画面へ」ボタンが表示されますので、クリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_9.png?date=2410" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d04">4.完了</h6>
                                            <div class="box_body">
                                                <p>「不正ファイルの除去を行い、WordPress本体をリセットしました。」が表示されたら完了です。新しいパスワードとログインする際のIDが表示されますのでご確認ください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_10.png?date=2410" alt="不正アクセスを受けたWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-e">ログインできなくなったWordPressの復旧</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e01">1.「ログインできなくなったWordPressの復旧」を選択</h6>
                                            <div class="box_body">
                                                <p>「ログインできなくなったWordPressの復旧」を選択して、「次へ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_11.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e02">2.注意事項を確認し、補正処理を実行</h6>
                                            <div class="box_body">
                                                <p>画面上の注意事項を確認し「上記の注意事項を理解した上で処理を行います。」をチェックしたうえで、「実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_12.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-e03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPressの復旧対応が完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_13.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-f">ログインパスワードのリセット</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f01">1.「ログインパスワードのリセット」を選択</h6>
                                            <div class="box_body">
                                                <p>「ログインパスワードのリセット」を選択して、「次へ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_14.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f02">2.パスワードをリセット</h6>
                                            <div class="box_body">
                                                <p>「実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_15.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-f03">3.完了</h6>
                                            <div class="box_body">
                                                <p>「パスワードのリセットが完了しました。」が表示されたら完了です。新しいパスワードとログインする際のIDが表示されますのでご確認ください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_16.png?date=2410" alt="ログインできなくなったWordPressの復旧"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-g">WordPress本体のリセット</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g01">1.「WordPress本体のリセット」を選択</h6>
                                            <div class="box_body">
                                                <p>「WordPress本体のリセット」を選択して、「次へ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_17.png?date=2410" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g02">2.引き継ぎたいデータを選択</h6>
                                            <div class="box_body">
                                                <p>「引き継ぐデータ」から引き継ぎたいデータを選択して、「実行する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_18.png?date=2410" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g03">3.ステータスが100％になるのを確認し、完了画面へ</h6>
                                            <div class="box_body">
                                                <p>「ステータス」が100％になると「完了画面へ」ボタンが表示されますのでクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_19.png?date=2410" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-g04">4.完了</h6>
                                            <div class="box_body">
                                                <p>「WordPress本体のリセットが完了しました。」が表示されたら完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_wp_recovery_20.png?date=2410" alt="WordPress本体のリセット"></p>
                                            </div>
                                        </section>
                                    </div>
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
