<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントの一括登録 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバーパネルから複数のメールアカウント（メールアドレス）を一度に追加する「メールアカウント一括登録」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">メールアカウントの一括登録</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントの一括登録について</a></li>
                                    <li><a href="#link-previous-b">メールアカウントの一括登録方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">テキスト入力による一括登録</a></li>
                                            <li><a href="#link-previous-b02">CSVインポートによる一括登録</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントの一括登録について</h4>
                                <p>新規のメールアカウントを一括登録することができます。<br>
                                サーバーパネルにてテキスト入力、またはCSVインポートによる登録が可能です。</p>
                                <p class="note">※試用期間中は、メールアカウントの一括登録は行えません。</p>

                                <div class="msg msg_notice">
                                    <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>注意事項</h4>
                                    <div class="msg_body">
                                        <ul class="ul font-m">
                                            <li>メールアドレスのユーザー名(@より前の部分)は半角64文字以内で入力してください。</li>
                                            <li>半角英小文字、半角数字の他に「-」「_」「.」が使用できます。</li>
                                            <li>「.」は2つ以上の連続、先頭、@マークの直前での使用ができません。</li>
                                            <li>「,(カンマ)」で区切ることによりパスワード、容量(MB単位)、メモを任意のものに設定することも可能です。<br>
                                                例）admin@aaasdf.com,password,1000,管理者用</li>
                                            <li>「数字のみ」などの推測されやすいパスワードは登録できません。英字や記号を組み合わせたパスワードを半角8文字以上、45文字以下で指定してください。</li>
                                            <li>半角英数字と次の記号が利用できます。<br>
                                                ! # $ % = ~ ^ | : _ [ ] { } . + - * /</li>
                                            <li>容量は半角数字（1〜20000）で入力してください。入力しない場合は2,000MBで設定されます。</li>
                                            <li>メモは全角500文字まで入力可能です。</li>
                                            <li>CSVインポートによる登録数の上限は100件です。</li>
                                        </ul>
                                    </div>
                                </div>

                                <h4 class="section_ttl" id="link-previous-b">メールアカウントの一括登録方法</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 id="link-previous-b01" class="block_ttl">テキスト入力による一括登録</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li>
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、「メールアカウント設定」を選択します。</p>
                                                </li>
                                                <li><p>「一括登録」のタブをクリックし、登録方法で「テキスト入力」を選択します。</p></li>
                                                <li>
                                                    <p>テキストエリア内に1行に1メールアドレスずつ入力し、「確認画面へ進む」をクリックします。一度に最大100件まで登録が可能です。</p>
                                                    <div class="border border_blue">
                                                        (入力例)<br>
                                                        admin@example.com<br>
                                                        info@example.com
                                                    </div>
                                                    <p>メールパスワードは自動生成のランダムな文字列、容量は2000MB、コメントは省略された状態で設定されます。<br></p>

                                                    <p>メールパスワード・容量・コメントなど各項目を個別に設定したい場合は「,(カンマ)」で区切って設定値を追加入力することで、各アドレスごとに設定できます。<br></p>

                                                    <div class="border border_blue">
                                                        <p>[メールアドレス],[メールパスワード],[容量(MB)],[コメント]</p>
                                                        <p class="mb0">(入力例)<br>
                                                            admin@example.com,password,1000,管理者用<br>
                                                            info@example.com,password,1000,インフォメーション用</p>
                                                    </div>

                                                    <p><img class="img" src="../img/manual/previous/man_mail_bulkadd_4.png" alt="テキスト入力を選択しているスクリーンショット"></p>

                                                    <section class="msg">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h6>
                                                        <div class="msg_body">
                                                            <p>
                                                                「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                                詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                                            </p>
                                                        </div>
                                                    </section>
                                                </li>
                                                <li><p>設定内容を確認後「追加する」をクリックすると、一括登録は完了です。</p></li>
                                            </ol>
                                        </div>
                                    </section>
                                </div>

                                <div class="section_body">
                                    <section class="block">
                                        <h5 id="link-previous-b02" class="block_ttl">CSVインポートによる一括登録</h5>
                                        <div class="block_body">
                                            <ol class="ol">
                                                <li>
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、「メールアカウント設定」を選択します。</p>
                                                </li>
                                                <li>
                                                    <p>「一括登録」のタブをクリックし、登録方法で「CSVインポート」を選択します。</p>
                                                      <p class="note"> ※「サンプルCSVダウンロード」をクリックするとCSVファイルのサンプルをダウンロードできます。</p>
                                                </li>
                                                <li>
                                                    <p>アップロードファイルよりインポートするCSVファイルを選択し、「確認画面へ進む」をクリックします。一度に最大100件まで登録が可能です。</p>
                                                    <p><img class="img" src="../img/manual/previous/man_mail_bulkadd_5.png" alt="CSVファイルを選択しているスクリーンショット"></p>

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
                                                                パスワードを入力します。
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
                                                                単位は「MB」です。<br>
                                                                入力しない場合は2,000MBで設定されます。
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

                                                </li>
                                                <li><p>設定内容を確認後「追加する」をクリックすると、一括登録は完了です。</p></li>
                                            </ol>
                                        </div>
                                    </section>
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
                                    <li><a href="#link-a">メールアカウントの一括登録について</a></li>
                                    <li><a href="#link-b">メールアカウントの一括登録方法</a>
                                        <ol>
                                            <li><a href="#link-b1">テキスト入力による一括登録</a></li>
                                            <li><a href="#link-b2">CSVインポートによる一括登録</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl mt30">メールアカウントの一括登録について</h4>
                                        <div class="section_body">
                                            <p>新規のメールアカウントを一括登録することができます。<br>
                                                サーバーパネルにてテキスト入力、またはCSVインポートによる登録が可能です。</p>
                                            <p class="note">※試用期間中は、メールアカウントの一括登録は行えません。</p>
                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>注意事項</h5>
                                                <div class="msg_body">
                                                    <ul class="ul font-m">
                                                        <li>メールアドレスのユーザー名(@より前の部分)は半角64文字以内で入力してください。</li>
                                                        <li>半角英小文字、半角数字の他に「-」「_」「.」が使用できます。</li>
                                                        <li>「.」は2つ以上の連続、先頭、@マークの直前での使用ができません。</li>
                                                        <li>「,(カンマ)」で区切ることによりパスワード、容量(MB単位)、メモを任意のものに設定することも可能です。<br>
                                                            例）admin@example.com,password,1000,管理者用</li>
                                                        <li>「数字のみ」などの推測されやすいパスワードは登録できません。英字や記号を組み合わせたパスワードを半角8文字以上、32文字以下で指定してください。</li>
                                                        <li>半角英数字と次の記号が利用できます。<br>
                                                            ! # $ % = ~ ^ | : _ [ ] { } . + - * /</li>
                                                        <li>容量は半角数字（1〜20000）で入力してください。入力しない場合は2,000MBで設定されます。</li>
                                                        <li>メモは全角500文字まで入力可能です。</li>
                                                        <li>CSVインポートによる登録数の上限は100件です。</li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl mt30">メールアカウントの一括登録方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">
                                                <h5 id="link-b1" class="block_ttl">テキスト入力による一括登録</h5>
                                                <ol class="ol">
                                                    <li>
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>「メールアカウントを追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_2.png?date=2410" alt="「メールアカウントを追加」を選択しているスクリーンショット"></p>
                                                    </li>
                                                    <li>
                                                        <p>[登録方式]で「一括」を選択し、[メールアドレス]のテキストエリア内に1行に1メールアドレスずつ入力し、「追加する」をクリックすると一括登録完了です。<br>
                                                            一度に最大100件まで登録が可能です。</p>

                                                        <p><img class="img" src="../img/manual/man_mail_bulkadd_4.png?date=2410" alt="テキスト入力を選択しているスクリーンショット"></p>

                                                        <div class="border border_blue">
                                                            (入力例)<br>
                                                            admin@example.com<br>
                                                            info@example.com
                                                        </div>

                                                        <p>メールパスワードは自動生成のランダムな文字列、容量は2,000MB、コメントは省略された状態で設定されます。<br></p>

                                                        <p>メールパスワード・容量・コメントなど各項目を個別に設定したい場合は「,(カンマ)」で区切って設定値を追加入力することで、各アドレスごとに設定できます。<br></p>

                                                        <div class="border border_blue">
                                                            <p>[メールアドレス],[メールパスワード],[容量(MB)],[コメント]</p>
                                                            <p class="mb0">(入力例)<br>
                                                                admin@example.com,password,1000,管理者用<br>
                                                                info@example.com,password,1000,インフォメーション用</p>
                                                        </div>

                                                        <section class="msg">
                                                            <h4 class="msg_ttl"><i class="ico ico_circle"></i>「ドメイン認証」画面が表示される場合</h4>
                                                            <div class="msg_body">
                                                                <p>
                                                                    「ドメイン認証」画面が表示される場合、画面の案内に従いドメイン認証を行ってください。
                                                                    詳細は「<a href="./man_domain_authenticate.php">ドメイン認証</a>」をご参照ください。
                                                                </p>
                                                            </div>
                                                        </section>

                                                    </li>
                                                </ol>
                                            </div>
                                            <!-- /.serial-box -->

                                            <div class="serial-box">
                                                <h5 id="link-b2" class="block_ttl">CSVインポートによる一括登録</h5>
                                                    <ol class="ol">
                                                        <li>
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、「メールアカウント設定」を選択します。</p>
                                                        </li>
                                                        <li>
                                                            <p>設定対象ドメインのメールアカウント一覧が表示されます。ページ上部の「CSV一括操作」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_account_csv_1.png?date=2410" alt="「一括操作」をクリックしているスクリーンショット"></p>
                                                        </li>
                                                        <li>
                                                            <p>「CSV一括追加」を選択し、アップロードファイルの「ファイルを選択」をクリックし、一括追加するCSVファイルを選択します。<br>
                                                                選択後、「一括追加する」をクリックします。 一度に最大100件まで登録が可能です。</p>
                                                            <p class="note"> ※「サンプルCSVダウンロード」をクリックするとCSVファイルのサンプルをダウンロードできます。</p>
                                                            <p><img class="img" src="../img/manual/man_mail_bulkadd_5.png?date=2410" alt="CSVファイルを選択しているスクリーンショット"></p>

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
                                                                        パスワードを入力します。
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
                                                                        単位は「MB」です。<br>
                                                                        入力しない場合は2,000MBで設定されます。
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

                                                    </li>
                                                    <li><p>設定内容を確認後「追加する」をクリックすると、一括登録は完了です。</p></li>
                                                </ol>
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