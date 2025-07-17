<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���䤤��碌���Ƥγ�ǧ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���䤤��碌�ե����फ�餪�䤤��碌�����դ��������ݤγ�ǧ�ڡ����Ǥ���">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>���ݡ���</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <section class="section">
        	<h3 class="section_ttl">���䤤��碌</h3>
        	<div class="section_body">
                <h4>�᡼��ǤΤ��䤤��碌</h4>
                <p>
<?php if (is_null($err)) { ?>
                    �����ξ���������������ޤ���<br>
                    �������С���������ܥ���򥯥�å����Ƥ���������
<?php } ?>
                </p>
                
<?php if ($err) {��/*���顼ͭ���ɽ��������ʬ*/ ?>
                <div class="msg msg_caution red">
                    <div class="msg_body">
                        <ul class="note-list">
    <?php foreach ($err as $f) { ?>
                        <li><i class="ico ico_exclamation-fill"></i><?php s_print($f); ?></li>
    <?php } ?>
                        </ul>
                    </div>
                </div>
<?php } else { /*���顼̵����ɽ��������ʬ*/ ?>
                
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
                        <caption>���䤤��碌���Ƥ򤴳�ǧ����������</caption>
                        <tr>
                            <th>Xserver���������ID</th>
                            <td><?php s_print($_POST['user_id']); ?></td>
                        </tr>
                        <tr>
                            <th>���������</th>
                            <td><?php s_print($_POST['flag']); ?></td>
                        </tr>
                        <tr>
                            <th>��̾��</th>
                            <td><?php s_print($_POST['name']); ?></td>
                        </tr>
                        <tr>
                            <th>�᡼�륢�ɥ쥹</th>
                            <td><?php s_print($_POST['mailaddress']); ?></td>
                        </tr>
                        <tr>
                            <th>�᡼�륢�ɥ쥹��ǧ</th>
                            <td><?php s_print($_POST['mailaddress2']); ?></td>
                        </tr>
                        <tr>
                            <th>��̾</th>
                            <td><?php s_print($_POST['title']); ?></td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><?php s_print($_POST['url']); ?></td>
                        </tr>
                        <tr>
                            <th>����</th>
                            <td><?php print nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, $charset = "EUC-JP")); ?></td>
                        </tr>
                    </table>
                    <!-- /.form_table -->
                    
                    <p class="tac">
                        <input class="btn btn_gray-l" type="submit" name="" value="��������">
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
                        <input class="btn btn_gray-l" type="submit" name="" value="���Ƥ�������">
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