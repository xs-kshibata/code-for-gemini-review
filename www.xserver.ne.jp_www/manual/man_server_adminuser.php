<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>管理者ユーザー設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜管理者ユーザーには特定のドメインだけの操作権限を付与するなど、業務内容に応じた権限を設定することができます。">

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
            
                <h3 class="sub-ttl">管理者ユーザー設定</h3>

                <div class="targetPlan">
                    <div class="targetPlan_wrap">
                        <p class="targetPlan_ttl">対象</p>
                        <div class="targetPlan_body">ビジネスプラン</div>
                    </div>
                </div>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">管理者ユーザー設定とは</a></li>
                                    <li><a href="#link-previous-b">利用可能機能一覧</a></li>
                                    <li><a href="#link-previous-c">管理者ユーザーの追加</a></li>
                                    <li><a href="#link-previous-d">「管理者ユーザー」でのサーバーパネルログイン</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">管理者ユーザー設定とは</h4>
                                <div class="section_body">
                                    <p>
                                        管理者ユーザーを作成することにより、複数人でサーバーを管理することが可能となります。<br>
                                        管理者ユーザーには、以下のいずれかの権限を付与することができます。
                                    </p>
                                    <table class="table table_use-caption">
                                        <caption>権限の種類と利用可能な機能</caption>
                                        <tbody>
                                            <tr>
                                                <th class="w30per">管理者</th>
                                                <td>サーバーパネルの全ての機能</td>
                                            </tr>
                                            <tr>
                                                <th>サイト管理者</th>
                                                <td>サーバーパネルの「ホームページ」・「データベース」など、サイト運用に関する機能</td>
                                            </tr>
                                            <tr>
                                                <th>メール管理者</th>
                                                <td>サーバーパネルの「メール」関連の機能</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>また、「サイト管理者」および「メール管理者」に対しては、ドメイン名ごとに操作を許可するかどうかの設定が可能です。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">利用可能機能一覧</h4>
                                <div class="section_body">
                                    <p>権限に応じた利用可能な機能は、以下の通りです。</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">機能</th>
                                                <th rowspan="2">サーバー<br>契約者</th>
                                                <th colspan="3">管理者ユーザー</th>
                                            </tr>
                                            <tr>
                                                <th>管理者</th>
                                                <th>サイト管理者</th>
                                                <th>メール管理者</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th class="w30per">アカウント</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>ホームページ</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※1</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>WordPress</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※2</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>メール</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                            <td class="tac">○<span class="font-xs">※6</span></td>
                                        </tr>
                                        <tr>
                                            <th>FTP</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※3</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>データベース</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※4</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>PHP</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>ドメイン</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※5</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>アクセス解析</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>高速化</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>セキュリティ</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                    </table>

                                    <ul class="note-list note-list_x2">
                                        <li>※1 簡単インストール機能において、作成済みのデータベースを利用することはできません。</li>
                                        <li>※2 WordPress簡単インストール機能において、作成済みのデータベースを利用することはできません。</li>
                                        <li>※3 サブFTPアカウント一覧には、操作許可されたドメイン名に紐づくアカウントのみ表示されます。<br>
                                            接続先ディレクトリにサブFTPアカウントのドメイン名以下が設定されていない場合は、WebFTPへログインするためのリンクが表示されません。<br>
                                            サブFTPアカウントを追加・変更する際、接続先ディレクトリにはサブFTPアカウントのドメイン名以下を設定する必要があります。<br>
                                            FTP制限設定で、設定対象に「サーバーアカウント全体」は選択できません。</li>
                                        <li>※4 MySQL一覧には、操作許可されたドメイン名に紐づくデータベース(簡単インストール機能で自動生成されたデータベース)のみ表示されます。<br>
                                            表示されているデータベースに対してのみ、バックアップおよび復元を実行することができます。<br>
                                            MySQLの新規追加はできません。
                                        </li>
                                        <li>※5 ドメイン設定一覧には、操作許可されているドメイン名のみ表示されます。<br>
                                            ドメイン名の新規追加、および、作成済みドメイン名の削除はできません。<br>
                                            動作確認URL設定一覧には、操作許可されているドメイン名のサイトのみ表示されます。
                                        </li>
                                        <li>※6 メールアカウント一覧には、操作許可されているドメイン名に紐づくアカウントのみ表示されます。</li>
                                    </ul>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">管理者ユーザーの追加</h4>
                                <div class="section_body">
                                    <ul class="list list_arrow-down">
                                        <li><a href="#link-previous-i1">1.「管理者ユーザー設定」をクリック</a></li>
                                        <li><a href="#link-previous-i2">2.「管理者ユーザー追加」をクリック</a></li>
                                        <li><a href="#link-previous-i3">3.必要事項を入力</a></li>
                                        <li><a href="#link-previous-i4">4.入力内容を確認し、「追加する」をクリック</a></li>
                                    </ul>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 id="link-previous-i1" class="box_ttl">1. 「管理者ユーザー設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「管理者ユーザー設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_adminuser_1.png" alt="「管理者ユーザー設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 id="link-previous-i2" class="box_ttl">2. 「管理者ユーザー追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「管理者ユーザー追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_adminuser_2.png" alt="「管理者ユーザー追加」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 id="link-previous-i3" class="box_ttl">3. 必要事項を入力</h5>
                                            <div class="box_body">
                                                <p>ユーザーID・パスワード・設定権限・対象ドメイン名・二段階認証・コメントを入力し「確認画面へ進む」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_adminuser_3.png" alt="必要事項を入力"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「対象ドメイン名」について</h6>
                                                    <div class="msg_body">
                                                        <ul class="ul">
                                                            <li>「設定権限」 に 「サイト管理者」 もしくは 「メール管理者」 が選択されている場合に表示されます。</li>
                                                            <li>チェックをつけたドメイン名に対する操作が可能となります。</li>
                                                        </ul>
                                                    </div>
                                                </aside>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「二段階認証」について</h6>
                                                    <div class="msg_body">
                                                        <p>二段階認証を「利用する」に設定した場合、管理者ユーザーがサーバーパネルに初めてログインした時に、二段階認証の設定画面へ遷移します。<br>
                                                            詳しい設定方法は、「<a href="man_order_twostepauth.php" target="_blank">二段階認証設定</a>」のマニュアルをご参照ください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 id="link-previous-i4" class="box_ttl">4. 入力内容を確認し、「追加する」をクリック</h5>
                                            <div class="box_body">
                                                <p>入力内容を確認し、「追加する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_adminuser_4.png" alt="入力内容を確認し、「追加する」をクリック"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">「管理者ユーザー」でのサーバーパネルログイン</h4>
                                <div class="section_body">
                                    <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/serveradminuser/" target="_blank">管理者ユーザー専用ログインフォーム</a>」より、以下の情報を入力してログインします。</p>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>管理者ユーザーID</th>
                                                <td>管理者ユーザーID（@以降の初期ドメイン名を含んだもの）</td>
                                            </tr>
                                            <tr>
                                                <th>管理者ユーザーパスワード</th>
                                                <td>管理者ユーザー追加時に設定したパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>パスワードを忘れてしまった場合</h6>
                                        <div class="msg_body">
                                            <p>「サイト管理者」および「メール管理者」自身でパスワードを再設定することはできません。サーバー契約時に発行されたアカウント、または「管理者」の権限を設定している管理者ユーザーでサーバーパネルにログイン後、対象の管理者ユーザーのパスワード変更を実施してください。</p>
                                        </div>
                                    </aside>

                                    <p>管理者ユーザーに設定した権限に応じて、トップページ および サイドメニュー の内容が異なります。利用可能な機能については「<a href="#link-previous-b">利用可能機能一覧</a>」をご参照ください。
                                    </p>
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
                                    <li><a href="#link-a">管理者ユーザー設定とは</a></li>
                                    <li><a href="#link-b">利用可能機能一覧</a></li>
                                    <li><a href="#link-c">管理者ユーザーを追加</a></li>
                                    <li><a href="#link-d">「管理者ユーザー」でのサーバーパネルログイン</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">管理者ユーザー設定とは</h4>
                                <div class="section_body">
                                    <p>
                                        管理者ユーザーを作成することにより、複数人でサーバーを管理することが可能となります。<br>
                                        管理者ユーザーには、以下のいずれかの権限を付与することができます。
                                    </p>
                                    <table class="table table_use-caption">
                                        <caption>権限の種類と利用可能な機能</caption>
                                        <tbody>
                                        <tr>
                                            <th class="w30per">管理者</th>
                                            <td>サーバーパネルの全ての機能</td>
                                        </tr>
                                        <tr>
                                            <th>サイト管理者</th>
                                            <td>サーバーパネルの「ホームページ」・「データベース」など、サイト運用に関する機能</td>
                                        </tr>
                                        <tr>
                                            <th>メール管理者</th>
                                            <td>サーバーパネルの「メール」関連の機能</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p>また、「サイト管理者」および「メール管理者」に対しては、ドメイン名ごとに操作を許可するかどうかの設定が可能です。</p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">利用可能機能一覧</h4>
                                <div class="section_body">
                                    <p>権限に応じた利用可能な機能は、以下の通りです。</p>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th rowspan="2">機能</th>
                                            <th rowspan="2">サーバー<br>契約者</th>
                                            <th colspan="3">管理者ユーザー</th>
                                        </tr>
                                        <tr>
                                            <th>管理者</th>
                                            <th>サイト管理者</th>
                                            <th>メール管理者</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <th class="w30per">アカウント</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>ホームページ</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※1</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>WordPress</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※2</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>メール</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                            <td class="tac">○<span class="font-xs">※6</span></td>
                                        </tr>
                                        <tr>
                                            <th>FTP</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※3</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>データベース</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※4</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>PHP</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>ドメイン</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○<span class="font-xs">※5</span></td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>アクセス解析</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>高速化</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                        <tr>
                                            <th>セキュリティ</th>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">○</td>
                                            <td class="tac">‐</td>
                                        </tr>
                                    </table>

                                    <ul class="note-list note-list_x2">
                                        <li>※1 簡単インストール機能において、作成済みのデータベースを利用することはできません。</li>
                                        <li>※2 WordPress簡単インストール機能において、作成済みのデータベースを利用することはできません。</li>
                                        <li>※3 FTPアカウント一覧には、操作許可されたドメイン名に紐づくアカウントのみ表示されます。<br>
                                            接続先ディレクトリにFTPアカウントのドメイン名以下が設定されていない場合は、WebFTPへログインするためのリンクが表示されません。<br>
                                            FTPアカウントを追加・変更する際、接続先ディレクトリには追加したFTPアカウントのドメイン名以下を設定する必要があります。<br>
                                            FTP制限設定で、設定対象に「サーバーアカウント全体」は選択できません。</li>
                                        <li>※4 MySQL一覧には、操作許可されたドメイン名に紐づくデータベース(簡単インストール機能で自動生成されたデータベース)のみ表示されます。<br>
                                            表示されているデータベースに対してのみ、バックアップおよび復元を実行することができます。<br>
                                            MySQLの新規追加はできません。
                                        </li>
                                        <li>※5 ドメイン設定一覧には、操作許可されているドメイン名のみ表示されます。<br>
                                            ドメイン名の新規追加、および、作成済みドメイン名の削除はできません。<br>
                                            動作確認URL設定一覧には、操作許可されているドメイン名のサイトのみ表示されます。
                                        </li>
                                        <li>※6 メールアカウント一覧には、操作許可されているドメイン名に紐づくアカウントのみ表示されます。</li>
                                    </ul>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">管理者ユーザーを追加</h4>
                                <div class="section_body">
                                    <ul class="list list_arrow-down">
                                        <li><a href="#i1">1.「管理者ユーザー設定」をクリック</a></li>
                                        <li><a href="#i2">2.「管理者ユーザーを追加」をクリック</a></li>
                                        <li><a href="#i3">3.必要事項を入力し、「追加する」をクリック</a></li>
                                    </ul>

                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 id="i1" class="box_ttl">1. 「管理者ユーザー設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「管理者ユーザー設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_adminuser_1.png?date=2410" alt="「管理者ユーザー設定」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 id="i2" class="box_ttl">2. 「管理者ユーザーを追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「管理者ユーザーを追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_adminuser_2.png?date=2410" alt="「管理者ユーザーを追加」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 id="i3" class="box_ttl">3. 必要事項を入力し、「追加する」をクリック</h5>
                                            <div class="box_body">
                                                <p>ユーザーID・パスワード・設定権限・対象ドメイン・二段階認証・メモを入力し「追加する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_adminuser_3.png?date=2410" alt="必要事項を入力"></p>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「対象ドメイン」について</h6>
                                                    <div class="msg_body">
                                                        <ul class="ul">
                                                            <li>「設定権限」 に 「サイト管理者」 もしくは 「メール管理者」 が選択されている場合に表示されます。</li>
                                                            <li>チェックをつけたドメイン名に対する操作が可能となります。</li>
                                                        </ul>
                                                    </div>
                                                </aside>

                                                <aside class="msg msg_notice">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「二段階認証」について</h6>
                                                    <div class="msg_body">
                                                        <p>二段階認証を「利用する」に設定した場合、管理者ユーザーがサーバーパネルに初めてログインした時に、二段階認証の設定画面へ遷移します。<br>
                                                            詳しい設定方法は、「<a href="man_order_twostepauth.php" target="_blank">二段階認証設定</a>」のマニュアルをご参照ください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-d">「管理者ユーザー」でのサーバーパネルログイン</h4>
                                <div class="section_body">
                                    <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/serveradminuser/" target="_blank">管理者ユーザー専用ログインフォーム</a>」より、以下の情報を入力してログインします。</p>

                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>管理者ユーザーID</th>
                                            <td>管理者ユーザーID（@以降の初期ドメイン名を含んだもの）</td>
                                        </tr>
                                        <tr>
                                            <th>管理者ユーザーパスワード</th>
                                            <td>管理者ユーザーを追加時に設定したパスワード</td>
                                        </tr>
                                        </tbody>
                                    </table>


                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>パスワードを忘れてしまった場合</h6>
                                        <div class="msg_body">
                                            <p>「サイト管理者」および「メール管理者」自身でパスワードを再設定することはできません。サーバー契約時に発行されたアカウント、または「管理者」の権限を設定している管理者ユーザーでサーバーパネルにログイン後、対象の管理者ユーザーのパスワード変更を実施してください。</p>
                                        </div>
                                    </aside>

                                    <p>管理者ユーザーに設定した権限に応じて、トップページ および サイドメニュー の内容が異なります。利用可能な機能については「<a href="#link-b">利用可能機能一覧</a>」をご参照ください。
                                    </p>
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