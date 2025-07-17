<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQLの設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜MySQLデータベースの作成方法やMySQLデータベースのバックアップを取る手順について案内しています。">

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
            
                <h3 class="sub-ttl">MySQLの設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">MySQLの設定</a>
                                    <ul>
                                        <li><a href="#link-previous-a01">MySQL（データベース）の追加</a></li>
                                        <li><a href="#link-previous-a02">MySQLユーザの追加</a></li>
                                        <li><a href="#link-previous-a03">MySQLアクセス権の設定</a></li>
                                        <li><a href="#link-previous-a04">MySQLユーザのパスワード変更</a></li>
                                        <li><a href="#link-previous-a05">データベースの削除手順</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>

                            <p>エックスサーバーではデータベース環境としてMySQLを提供しております。MySQLは世界中で広く使われておりオープンソースのデータベースシステムとしては世界で最も普及しており、「性能」や「安定性」に定評があります。</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">MySQLの設定</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「MySQL設定」より、簡単にデータベースやユーザの作成・管理、アクセス権の設定を行うことができます。</p>
                                    <p><img class="img" src="../img/manual/previous/man_db_setting_1.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                    <p>行える設定は以下のとおりです。</p>
                                    <ul class="list list_arrow-down mb30">
                                        <li><a href="#link-previous-a01">MySQL（データベース）の追加</a></li>
                                        <li><a href="#link-previous-a02">MySQLユーザの追加</a></li>
                                        <li><a href="#link-previous-a03">MySQLアクセス権の設定</a></li>
                                        <li><a href="#link-previous-a04">MySQLユーザのパスワード変更</a></li>
                                        <li><a href="#link-previous-a05">データベースの削除手順</a></li>
                                    </ul>

                                    <section class="block">
                                        <h5 id="link-previous-a01" class="block_ttl">MySQL（データベース）の追加</h5>
                                        <div class="block_body">
                                            <p>「MySQL追加」より、利用したいデータベース名を入力し、「確認画面へ進む」をクリックします。データベース名は、「お客様のサーバーID_データベース名」になります。</p>
                                            <p class="note mb30">※文字コードはサーバープログラムをインストールする場合などで、ご利用のスクリプトに合わせる必要がある際に変更してください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_2.png?date=2412" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                            <p>「追加する」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_3.png?date=2412" alt="MySQLデータベースの追加にフォーカスしたスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a02" class="block_ttl">MySQLユーザの追加</h5>
                                        <div class="block_body">
                                            <p>データベースにユーザーを追加します。「MySQLユーザ追加」をクリックしたのち、表示された画面で「MySQLユーザID」と「パスワード」を入力し、「確認画面へ進む」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_4.png" alt="MySQLユーザ追加にフォーカスしたスクリーンショット"></p>
                                            <p class="note">※MySQL 5.0.xデータベース用のユーザを追加したい場合は、「MySQLユーザ設定(MySQL5.0)」をクリックしてください。</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>MySQLユーザID</th>
                                                        <td>お客様のサーバーIDが自動的に付加されます。例：xsample_</td>
                                                    </tr>
                                                    <tr>
                                                        <th>パスワード</th>
                                                        <td>MySQLユーザのパスワードを入力してください。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>確認画面で内容を確認し、問題がなければ「追加する」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_5.png" alt="MySQLユーザ追加にフォーカスしたスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a03" class="block_ttl">MySQLアクセス権の設定</h5>
                                        <div class="block_body">
                                            <p>「MySQL一覧」から、作成したデータベースへのアクセス権所有ユーザーの設定が行えます。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_6.png" alt="MySQLの一覧にフォーカスしたスクリーンショット"></p>
                                            <p>アクセス権未所有ユーザーの中から、希望するデータベースへのアクセス権に追加したいユーザを選択し、追加ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_7.png" alt="MySQLユーザ追加にフォーカスしたスクリーンショット"></p>
                                            <p>アクセス権所有ユーザーとなり、データベースへのアクセスが可能となります。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_8.png" alt="アクセス権所有ユーザーにフォーカスしたスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a04" class="block_ttl">MySQLユーザのパスワード変更</h5>
                                        <div class="block_body">
                                            <p>「MySQLユーザ一覧」から、MySQLユーザのパスワード変更が行えます。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_9.png" alt="MySQLユーザ変更にフォーカスしたスクリーンショット"></p>

                                            <p>パスワードを変更したいMySQLユーザの「変更」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_10.png" alt="パスワードの変更にフォーカスしたスクリーンショット"></p>

                                            <p>遷移後の画面にて、変更後の新しいパスワードを入力し、「確認画面へ進む」をクリックしてください。</p>

                                            <p><img class="img" src="../img/manual/previous/man_db_setting_11.png" alt="MySQLユーザの編集（確認）にフォーカスしたスクリーンショット"></p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>パスワード</th>
                                                        <td>変更後のMySQLユーザのパスワードを入力してください。</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p>情報を確認の上、「変更する」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_15.png" alt="パスワード変更確認画面のスクリーンショット"></p>
                                            <p>確認画面には、MySQLユーザのパスワード変更に伴い、あわせて修正される「DB接続設定ファイル」の一覧も表示されます。<br>
                                            「DB接続設定ファイル」とは、<a href="./man_install_auto.php">簡単インストール機能</a>によって追加したプログラムにおいて、データベースへの接続情報を設定しているファイルのことです。
                                            <br>対象がない場合は、表示されません。</p>
                                            <p>「MySQLユーザの編集を完了しました。」が表示されましたら、パスワードの変更は完了です。<br>DB接続設定ファイルを修正した場合、その結果も一覧で表示します。</p>
                                            <p><img class="img" src="../img/manual/previous/man_db_setting_16.png" alt="パスワード変更結果画面のスクリーンショット"></p>

                                            <p class="mt30">「結果」が「失敗」になる場合、『DB接続設定ファイル』のファイルパスを参考に、お客様にて設定ファイルを修正してください。</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-previous-a05" class="block_ttl">データベースの削除手順</h5>
                                        <div class="section_body">
                                            <div class="serial-box mb10">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.MySQL設定メニューへ</h6>
                                                    <div class="box_body">
                                                        <p>サーバーパネルにログインし、「MySQL設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_1.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2.削除したいデータベースを選択</h6>
                                                    <div class="box_body">
                                                        <p>削除したいデータベース名を確認し「削除」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_17.png" alt="データベースの削除にフォーカスしたスクリーンショット"></p>
                                                        <aside class="msg msg_notice">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「WordPress利用中」と表示されているデータベースについて</h6>
                                                            <p>WordPress簡単インストールにて利用中のデータベースには「WordPress利用中」のアイコンが表示されます。 アイコンをマウスオーバーすると利用しているWordPressのURLをご確認いただけます。</p>
                                                            <p><img class="img" src="../img/manual/previous/man_db_setting_18.png" alt="WordPressのURLを確認するスクリーンショット"></p>
                                                        </aside>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">3.内容を確認し、「削除する」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>内容を確認し、問題なければ「削除する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_19.png" alt="データベースを削除する直前のスクリーンショット"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">4.完了</h6>
                                                    <div class="box_body">
                                                        <p>完了画面が表示されれば、削除は完了です。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_db_setting_20.png" alt="データベースを削除した直後のスクリーンショット"></p>
                                                    </div>
                                                </section>
                                            </div>
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
                                    <li><a href="#link-a">MySQLの設定</a>
                                        <ol>
                                            <li><a href="#link-a1">MySQL(データベース)の追加</a></li>
                                            <li><a href="#link-a2">MySQLユーザーの追加</a></li>
                                            <li><a href="#link-a3">MySQLアクセス権の設定</a></li>
                                            <li><a href="#link-a4">MySQLユーザーのパスワード変更</a></li>
                                            <li><a href="#link-a5">データベースの削除手順</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>


                            <section class="section">
                                <div class="sectionBody">

                                    <p>エックスサーバーではデータベース環境としてMySQLを提供しております。MySQLは世界中で広く使われておりオープンソースのデータベースシステムとしては世界で最も普及しており、「性能」や「安定性」に定評があります。</p>

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">MySQLの設定</h4>
                                        <div class="inner">
                                            <section class="section">
                                                <div class="section_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「MySQL設定」より、簡単にデータベースやユーザーの作成・管理、アクセス権の設定、バックアップを行うことができます。</p>
                                                    <p><img class="img" src="../img/manual/man_db_setting_1.png?date=2410" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                                    <p>行える設定は以下のとおりです。</p>
                                                    <ul class="list list_arrow-down mb30">
                                                        <li><a href="#link-a1">MySQL(データベース)の追加</a></li>
                                                        <li><a href="#link-a2">MySQLユーザーの追加</a></li>
                                                        <li><a href="#link-a3">MySQLアクセス権の設定</a></li>
                                                        <li><a href="#link-a4">MySQLユーザーのパスワード変更</a></li>
                                                        <li><a href="#link-a5">データベースの削除手順</a></li>
                                                    </ul>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a1">MySQL(データベース)の追加</h5>
                                                        <div class="block_body">
                                                            <p>「データベースを追加」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_2.png?date=2410" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                                            <p>利用したいデータベース名を入力し、「追加する」ボタンをクリックしてください。データベース名は、「お客様のサーバーID_データベース名」になります。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_3.png?date=2412" alt="MySQLデータベースの追加にフォーカスしたスクリーンショット"></p>

                                                            <aside class="msg msg_notice">
                                                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>文字コード設定について</h6>
                                                                <div class="msg_body">
                                                                    <p class="font14">データーベース作成時に、そのデータベースで扱う文字コードを設定できます。サーバープログラムをインストールする場合などで、スクリプトに合わせた文字コードに設定する必要がある場合にお使いください。</p>
                                                                </div>
                                                            </aside>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a2">MySQLユーザーの追加</h5>
                                                        <div class="block_body">

                                                            <p>データベースにユーザーを追加します。「MySQLユーザー設定」をクリックしたのち、表示された画面で「ユーザーを追加」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_4.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th>MySQLユーザーID</th>
                                                                    <td>お客様のサーバーIDが自動的に付加されます。例：xsample_</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>パスワード</th>
                                                                    <td>MySQLユーザーのパスワードを入力してください。</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <p>内容を入力し、「追加する」ボタンをクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_5.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a3">MySQLアクセス権の設定</h5>
                                                        <div class="block_body">
                                                            <p>「MySQLデータベース設定」から、作成したデータベースへのアクセス権所有ユーザーの設定が行えます。「ユーザー設定」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_6.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                                            <p>アクセス権所有ユーザー一覧が表示されます。追加する場合は「ユーザーを追加」をクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_7.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                                            <p>希望するデータベースへのアクセス権に追加したいユーザーを選択し、「追加する」ボタンをクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_8.png?date=2410" alt="MySQLユーザー追加にフォーカスしたスクリーンショット"></p>
                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a4">MySQLユーザーのパスワード変更</h5>
                                                        <div class="block_body">
                                                            <p>「MySQLユーザー一覧」から、MySQLユーザーのパスワード変更が行えます。</p>
                                                            <p>パスワードを変更したいMySQLユーザーの「詳細」ボタンをクリックします。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_9.png?date=2410" alt="パスワードの変更にフォーカスしたスクリーンショット"></p>

                                                            <p>遷移後の画面にて、変更後の新しいパスワードを入力し、「変更する」ボタンをクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_db_setting_10.png?date=2410" alt="MySQLユーザーの編集にフォーカスしたスクリーンショット"></p>

                                                        </div>
                                                    </section>

                                                    <section class="block">
                                                        <h5 class="block_ttl" id="link-a5">データベースの削除手順</h5>
                                                        <div class="section_body">
                                                            <div class="serial-box mb10">
                                                                <section class="box">
                                                                    <h6 class="box_ttl">1.MySQL設定メニューへ</h6>
                                                                    <div class="box_body">
                                                                        <p>サーバーパネルにログインし、「MySQL設定」をクリックしてください。</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_1.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                                                                    </div>
                                                                </section>
                                                                <section class="box">
                                                                    <h6 class="box_ttl">2.削除したいデータベースを選択</h6>
                                                                    <div class="box_body">
                                                                        <p>削除したいデータベース名を確認し「削除」をクリックしてください。</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_18.png" alt="データベースの削除にフォーカスしたスクリーンショット"></p>
                                                                        <aside class="msg msg_notice">
                                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「WordPress利用中」と表示されているデータベースについて</h6>
                                                                            <p>WordPress簡単インストールにて利用中のデータベースには「WordPress利用中」のアイコンが表示されます。 アイコンをマウスオーバーすると利用しているWordPressのURLをご確認いただけます。</p>
                                                                            <p><img class="img" src="../img/manual/man_db_setting_19.png" alt="WordPressのURLを確認するスクリーンショット"></p>
                                                                        </aside>
                                                                    </div>
                                                                </section>
                                                                <section class="box">
                                                                    <h6 class="box_ttl">3.選択されたデータベース名を確認し、「削除する」をクリック</h6>
                                                                    <div class="box_body">
                                                                        <p>選択されたデータベース名を確認し、問題なければ「削除する」をクリックしてください。</p>
                                                                        <p><img class="img" src="../img/manual/man_db_setting_20.png" alt="データベースを削除する直前のスクリーンショット"></p>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>
                                            <!-- /.section -->
                                        </div><!-- /inner -->
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