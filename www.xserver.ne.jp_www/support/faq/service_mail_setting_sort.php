<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メール振り分け設定について詳しく教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールの振り分け設定では、様々な条件を指定して、メールの転送や破棄などを行うことができます。例えば、件名に特定の文字列が含まれるメールを削除したい場合は…">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">メール振り分け設定について詳しく教えてください。</h3>

                <p>メールの振り分け設定では、様々な条件を指定して、メールの転送や破棄などを行うことができます。</p>
                <p>例えば、件名に特定の文字列が含まれるメールを削除したい場合は、</p>
                <table class="table table_use-caption" summary="メール振り分け設定例">
                    <caption>メール振り分け設定例</caption>
                    <tbody>
                        <tr>
                            <th>条件1（キーワード）</th>
                            <td>拒否したい特定の文字列</td>
                        </tr>
                        <tr>
                            <th>条件1（場所）</th>
                            <td>件名</td>
                        </tr>
                        <tr>
                            <th>条件1（一致）</th>
                            <td>内容を含む</td>
                        </tr>
                        <tr>
                            <th>処理方法（宛先）</th>
                            <td>削除</td>
                        </tr>
                        <tr>
                            <th>処理方法（配送方法）</th>
                            <td>転送</td>
                        </tr>
                    </tbody>
                </table>
                
                <p>と設定していただければ、自動的に破棄されるようになります。</p>
                <p class="note"><strong>※当社の迷惑メール検知プログラムにて検知された迷惑メールの振り分けに関しては、<a href="../../manual/man_mail_spam_setting.php">迷惑メールフィルタ設定</a>にて設定してください。</strong></p>
                <p>尚、処理方法（宛先）で使用できるものは以下のとおりです。</p>
                <table class="table table_use-caption" summary="処理方法（宛先）で使用できる宛先">
                    <caption>処理方法（宛先）で使用できる宛先</caption>
                    <thead>
                        <tr>
                            <th class="w40per">宛先名</th>
                            <th>動作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>迷惑メールフォルダ</th>
                            <td>メールが「迷惑メール」フォルダに転送される</td>
                        </tr>
                        <tr>
                            <th>ゴミ箱</th>
                            <td>メールが「ゴミ箱」フォルダに転送される</td>
                        </tr>
                        <tr>
                            <th>削除</th>
                            <td>メールが削除される</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>指定アドレスへ転送</td>
                        </tr>
                        <tr>
                            <th>| コマンドパス</th>
                            <td>コマンドへメールを渡す</td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table table_use-caption primary-table-ml" summary="処理方法（宛先）の設定例">
                    <caption>処理方法（宛先）の設定例</caption>
                    <thead>
                        <tr>
                            <th class="w15per"></th>
                            <th>処理方法<span class="disp-ib font-s">（宛先）</span></th>
                            <th>動作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>設定例1</th>
                            <td>test@example.com</td>
                            <td>test@example.comへメールを転送又はコピー転送</td>
                        </tr>
                        <tr>
                            <th>設定例2</th>
                            <td>PHP 7.2.x で実行する場合<br>
                                | /usr/bin/php7.2 /home/hoge/trigger.php</td>
                            <td>/home/hoge/trigger.php へメールを渡します(PHP 7.2.x )。</td>
                        </tr>
                        <tr>
                            <th>設定例3</th>
                            <td>PHP 5.6.x で実行する場合<br>
                                | /usr/bin/php5.6 /home/hoge/trigger.php</td>
                            <td>/home/hoge/trigger.php へメールを渡します(PHP 5.6.x )。</td>
                        </tr>
                    </tbody>
                </table>
                            
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">「メールの設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>