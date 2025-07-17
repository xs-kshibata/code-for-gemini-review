<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントの一括変更 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜メールアカウントを一括で変更できる「メールアカウントの一括変更」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">メールアカウントの一括変更</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントの一括変更について</a></li>
                                    <li><a href="#link-previous-b">メールアカウントの一括変更方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-previous-b02">2.「一括変更」をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.アップロードするファイルを選択</a></li>
                                            <li><a href="#link-previous-b04">4.アップロード完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントの一括変更について</h4>
                                <p>既存のメールアカウントをCSVファイルにて一括変更できます。</p>
                                <p class="note">※試用期間中は、メールアカウントの一括変更は行えません。</p>

                                <section class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>メールアカウントの一覧画面よりCSVファイルのダウンロードが可能です</h6>
                                    <div class="msg_body">
                                        <p>
                                            設定対象ドメインのメールアカウント一覧画面にて「CSV出力」をクリックすると、CSVファイルをダウンロードできます。
                                        </p>
                                        <p><img class="img" src="../img/manual/previous/man_mail_account_csv_1.png" alt="「CSV出力」をクリックしているスクリーンショット"></p>

                                        <p>詳細は「<a href="man_mail_account_csv.php">メールアカウントのCSVダウンロード</a>」をご確認ください。</p>
                                    </div>
                                </section>

                                <p>なお、CSVファイルの書式は以下の通りです。</p>

                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th class="w30per">メールアカウント</th>
                                        <td>
                                            メールアカウントを入力します。<br>
                                            (例)　user@example.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">パスワード</th>
                                        <td>
                                            パスワードを入力します。<br>
                                            空欄の場合はパスワードは変更されません。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">使用容量</th>
                                        <td>
                                            一括登録・一括変更では使用しません。<br>
                                            数値を入力してアップロードしても反映はされません。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">最大容量</th>
                                        <td>
                                            容量を入力します。<br>
                                            単位は「MB」です。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">メモ</th>
                                        <td>
                                            メモを入力します。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">転送先アドレス</th>
                                        <td>
                                            受信メールを転送する場合は転送先アドレスを入力してください。<br>
                                            複数のメールアドレスへ転送する場合は「|」で区切って入力してください。<br>
                                            (例)　user1@example.com|user2@example.com|user3@example.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">転送後のメール削除</th>
                                        <td>
                                            転送後にサーバーからメールを削除するかどうかを入力します。<br>
                                            削除する場合は「1」、削除しない場合は「0」を入力してください。<br>
                                            「転送先アドレス」が設定されていない状態で、転送後にメールを削除する設定にした場合、メールがどこにも転送されずに消失しますので、ご注意ください。
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">メールアカウントの一括変更方法</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.「一括変更」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定対象ドメインのメールアカウント一覧が表示されます。ページ上部の「一括変更」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_bulk_change_1.png" alt="「一括変更」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.アップロードするファイルを選択</h6>
                                            <div class="box_body">
                                                <p>アップロードファイルの「ファイルを選択」をクリックし、一括変更するCSVファイルを選択します。<br>
                                                選択後、「確認画面へ進む」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_bulk_change_2.png" alt="ファイルを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4.アップロード完了</h6>
                                            <div class="box_body">
                                                <p>正常にアップロードができたら、一括変更完了です。</p>
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
                                    <li><a href="#link-a">メールアカウントの一括変更について</a></li>
                                    <li><a href="#link-b">メールアカウントの一括変更方法</a>
                                        <ol>
                                            <li><a href="#link-b01">1.メールアカウント設定を選択</a></li>
                                            <li><a href="#link-b02">2.「CSV一括操作」をクリック</a></li>
                                            <li><a href="#link-b03">3.アップロードするファイルを選択</a></li>
                                            <li><a href="#link-b04">4.アップロード完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">メールアカウントの一括変更について</h4>
                                <p>既存のメールアカウントをCSVファイルにて一括変更できます。</p>
                                <p class="note">※試用期間中は、メールアカウントの一括変更は行えません。</p>

                                <section class="msg">
                                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>メールアカウントの一覧画面よりCSVファイルのダウンロードが可能です</h6>
                                    <div class="msg_body">
                                        <p>メールアカウント一覧画面にて「CSV一括操作 > CSVダウンロード」をクリックすると、CSVファイルをダウンロードできます。</p>
                                        <p><img class="img" src="../img/manual/man_mail_account_csv_2.png?date=2410" alt="「CSVダウンロード」をクリックしているスクリーンショット"></p>

                                        <p>詳細は「<a href="man_mail_account_csv.php">メールアカウントのCSVダウンロード</a>」をご確認ください。</p>
                                    </div>
                                </section>

                                <p>なお、CSVファイルの書式は以下の通りです。</p>

                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th class="w30per">メールアカウント</th>
                                        <td>
                                            メールアカウントを入力します。<br>
                                            (例)　user@example.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">パスワード</th>
                                        <td>
                                            パスワードを入力します。<br>
                                            空欄の場合はパスワードは変更されません。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">使用容量</th>
                                        <td>
                                            一括登録・一括変更では使用しません。<br>
                                            数値を入力してアップロードしても反映はされません。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">最大容量</th>
                                        <td>
                                            容量を入力します。<br>
                                            単位は「MB」です。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">メモ</th>
                                        <td>
                                            メモを入力します。
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">転送先アドレス</th>
                                        <td>
                                            受信メールを転送する場合は転送先アドレスを入力してください。<br>
                                            複数のメールアドレスへ転送する場合は「|」で区切って入力してください。<br>
                                            (例)　user1@example.com|user2@example.com|user3@example.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w30per">転送後のメール削除</th>
                                        <td>
                                            転送後にサーバーからメールを削除するかどうかを入力します。<br>
                                            削除する場合は「1」、削除しない場合は「0」を入力してください。<br>
                                            「転送先アドレス」が設定されていない状態で、転送後にメールを削除する設定にした場合、メールがどこにも転送されずに消失しますので、ご注意ください。
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">メールアカウントの一括変更方法</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b01">1.メールアカウント設定を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_add_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b02">2.「CSV一括操作」をクリック</h6>
                                            <div class="box_body">
                                                <p>ページ上部の「CSV一括操作」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_account_csv_1.png?date=2410" alt="「CSV一括操作」をクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b03">3.アップロードするファイルを選択</h6>
                                            <div class="box_body">
                                                <p>「CSV一括編集」を選択し、アップロードファイルの「ファイルを選択」をクリックし、一括編集するCSVファイルを選択します。<br>
                                                    選択後、「一括編集する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_mail_bulk_change_1.png" alt="ファイルを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-b04">4.アップロード完了</h6>
                                            <div class="box_body">
                                                <p>正常にアップロードができたら、一括編集完了です。</p>
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