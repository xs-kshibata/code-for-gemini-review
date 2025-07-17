<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/order_branch.css"); ?>" rel="stylesheet">

<title>�������������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פο������������ߥڡ��������å��������С���������Ѥ��뤫�������ڡ������餪�������ߥե�����ء����Ǥ˥��å��������С���������Τ�����XServer��������Ȥ�ꤪ�������ߤ���������">

</head>

<body id="pid-order-branch">

<?php include("../top.php"); ?>

<div class="holder-sml">

    <section class="order">
        
        <header class="order_header">
            <p class="order_logo"><img src="../img/common/img_logo.png" alt="���å��������С�"></p>
            <h1 class="order_ttl"><span class="label label_ttl-order-form">�����ӥ��Τ���������</span></h1>
        </header>
        <!-- /.order_header -->
        
        <?php include("../topicpath.php"); ?>
        
        <div class="order_body">
            <p class="mb30">���Ƥ����Ѥ��������ѥե����फ�顢���Ǥˤ������������XServer��������Ȥإ����󤷤Ƥ����Ѳ�������</p>
            
            <div class="clearfix">
                <section class="branch branch_left">
                    <h2 class="branch_ttl"><span class="label label_order-blanch label_order-blanch_ttl_beginner">���ƤΤ����ѡ��������������ߤ���</span></h2>
                    <p class="branch_text">���󥨥å��������С��Τ����Ѥ����Ƥ����ϡ�<br class="visible-l">�ʲ����餪�������߼�³����ʤ�Ʋ�������</p>
                    <p class="branch_btn"><a class="btn btn_blue" href="https://secure.xserver.ne.jp/xinfo/?action_register_index=on"><span class="label label_order-blanch label_order-blanch_btn_order">��������������</span></a></p>
                </section>
                <section class="branch branch_right">
                    <h2 class="branch_ttl"><span class="label label_order-blanch label_order-blanch_ttl_user">���Ǥ˥��å��������С������������</span></h2>
                    <p class="branch_text">XServer��������Ȥ���Ͽ�����Ѥߤ����ϡ�XServer��������Ȥإ�����ξ塢<br class="visible-l">���ɲäΤ��������ߡפ��餴���Ѳ�������</p>
                    <p class="branch_btn"><a class="btn btn_blue" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/"><span class="label label_order-blanch label_order-blanch_btn_login">������</span></a></p>
                </section>
            </div>
        </div>
        <!-- /.order_body -->
        
        <footer class="order_footer">
            <p><small>&copy; 2013-<?php print date("Y", time()); ?> XServer Inc.</small></p>
        </footer>
        <!-- /.order_footer -->
        
    </section>
    <!-- /.order -->

</div>
<!-- /.holder-sml -->

<?php include("../bottom.php"); ?>