<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>お問い合わせ内容の確認 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="お問い合わせフォームからお問い合わせをご送付いただく際の確認ページです。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <section class="section">
        	<h3 class="section_ttl">お問い合わせ</h3>
        	<div class="section_body">
                <h4>メールでのお問い合わせ</h4>
                <p>
<?php if (is_null($err)) { ?>
                    下記の情報で送信いたします。<br>
                    よろしければ、送信するボタンをクリックしてください。
<?php } ?>
                </p>
                
<?php if ($err) {　/*エラー有りで表示する部分*/ ?>
                <div class="msg msg_caution red">
                    <div class="msg_body">
                        <ul class="note-list">
    <?php foreach ($err as $f) { ?>
                        <li><i class="ico ico_exclamation-fill"></i><?php s_print($f); ?></li>
    <?php } ?>
                        </ul>
                    </div>
                </div>
<?php } else { /*エラー無しで表示する部分*/ ?>
                
                <form class="form" method="post" action="finish.php">
                    <input type="hidden" name="trans_id" value="<?php s_print($_SESSION['trans_id']); ?>">
                    <input type="hidden" name="user_id" value="<?php s_print($_POST['user_id']); ?>">
                    <input type="hidden" name="flag" value="<?php s_print($_POST['flag']); ?>">
                    <input type="hidden" name="name" value="<?php s_print($_POST['name']); ?>">
                    <input type="hidden" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>">
                    <input type="hidden" name="mailaddress2" value="<?php s_print($_POST['mailaddress2']); ?>">
                    <input type="hidden" name="title" value="<?php s_print($_POST['title']); ?>">
                    <input type="hidden" name="url" value="<?php s_print($_POST['url']); ?>">
                    <input type="hidden" name="content" value="<?php s_print($_POST['content']); ?>">
                    
                    <table class="form_table table table_responsive mb20">
                        <caption>お問い合わせ内容をご確認ください。</caption>
                        <tr>
                            <th>XserverアカウントID</th>
                            <td><?php s_print($_POST['user_id']); ?></td>
                        </tr>
                        <tr>
                            <th>アカウント</th>
                            <td><?php s_print($_POST['flag']); ?></td>
                        </tr>
                        <tr>
                            <th>お名前</th>
                            <td><?php s_print($_POST['name']); ?></td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td><?php s_print($_POST['mailaddress']); ?></td>
                        </tr>
                        <tr>
                            <th>メールアドレス確認</th>
                            <td><?php s_print($_POST['mailaddress2']); ?></td>
                        </tr>
                        <tr>
                            <th>件名</th>
                            <td><?php s_print($_POST['title']); ?></td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><?php s_print($_POST['url']); ?></td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td><?php print nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, $charset = "EUC-JP")); ?></td>
                        </tr>
                    </table>
                    <!-- /.form_table -->
                    
                    <p class="tac">
                        <input class="btn btn_gray-l" type="submit" name="" value="送信する">
                    </p>
                         
                </form>
                <!-- /.form -->
                
<?php } ?>
                
                <div class="tac">
                    <form method="post" action="support.php" style="display : inline ; color: red;">
                        <input type="hidden" name="trans_id" value="<?php s_print($_SESSION['trans_id']); ?>" />
                        <input type="hidden" name="user_id" value="<?php s_print($_POST['user_id']); ?>" />
                        <input type="hidden" name="flag" value="<?php s_print($_POST['flag']); ?>"/>
                        <input type="hidden" name="name" value="<?php s_print($_POST['name']); ?>" />
                        <input type="hidden" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>" />
                        <input type="hidden" name="mailaddress2" value="<?php s_print($_POST['mailaddress2']); ?>" />
                        <input type="hidden" name="title" value="<?php s_print($_POST['title']); ?>" />
                        <input type="hidden" name="url" value="<?php s_print($_POST['url']); ?>" />
                        <input type="hidden" name="content" value="<?php s_print($_POST['content']); ?>" />
                        <input class="btn btn_gray-l" type="submit" name="" value="内容を修正する">
                    </form>
                </div>
                
            </div>
        </section>
        <!-- /.section -->
        
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