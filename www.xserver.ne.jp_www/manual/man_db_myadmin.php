<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>phpMyAdmin | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「phpMyAdmin」の利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">phpMyAdmin</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">phpMyAdmin</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">phpMyAdmin</h4>
                                <div class="section_body">
                                    <p>phpMyAdminを利用することで、簡単にデータベースの管理を行うことができます。</p>
                                    <p class="note">※利用する前に、<a href="man_db_setting.php">MySQLの設定</a>でデータベースが作成済みである必要があります。</p>
                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_1.png" alt="phpMyAdminにフォーカスしたスクリーンショット"></p>
                                    <p>データベースに設定したユーザー名とパスワードでログインします。</p>

                                    <table class="table">
                                        <caption>Basic認証設定画面</caption>
                                        <tbody>
                                            <tr>
                                                <th>ユーザー名</th>
                                                <td>MySQLユーザー名<br>例）xsample_user</td>
                                            </tr>
                                            <tr>
                                                <th>パスワード</th>
                                                <td>MySQLユーザー名のパスワード</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※ユーザー名はサーバーIDだけではないのでお気をつけください。</p>

                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_2.png" alt="phpMyAdminにログインする際のBasic認証画面"></p>
                                    <p><img class="img" src="../img/manual/previous/man_db_myadmin_3.png" alt="phpMyAdminのトップページ"></p>

                                    <p class="note">※パスワードを忘れた場合は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「MySQL設定」→「MySQLユーザの一覧」から変更できます。</p>

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
                                    <li><a href="#link-a">phpMyAdmin</a></li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">phpMyAdmin</h4>
                                <div class="section_body">

                                    <p>phpMyAdminを利用することで、簡単にデータベースの管理を行うことができます。</p>
                                    <p class="note">※利用する前に、<a href="man_db_setting.php">MySQLの設定</a>でデータベースが作成済みである必要があります。</p>
                                    <p><img class="img" src="../img/manual/man_db_myadmin_1.png?date=2410" alt="phpMyAdminにフォーカスしたスクリーンショット"></p>
                                    <p>データベースに設定したユーザー名とパスワードでログインします。</p>

                                    <table class="table">
                                        <caption>Basic認証設定画面</caption>
                                        <tbody>
                                        <tr>
                                            <th>ユーザー名</th>
                                            <td>MySQLユーザー名<br>例)xsample_user</td>
                                        </tr>
                                        <tr>
                                            <th>パスワード</th>
                                            <td>MySQLユーザー名のパスワード</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※ユーザー名はサーバーIDだけではないのでお気をつけください。</p>

                                    <p><img class="img" src="../img/manual/man_db_myadmin_2.png?date=2410" alt="phpMyAdminにログインする際のBasic認証画面"></p>
                                    <p><img class="img" src="../img/manual/man_db_myadmin_3.png?date=2410" alt="phpMyAdminのトップページ"></p>

                                    <p class="note">※パスワードを忘れた場合は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「MySQL設定」→「MySQLユーザーの一覧」から変更できます。</p>

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