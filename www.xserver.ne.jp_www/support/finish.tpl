<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���䤤��碌 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��ؤ����á����䤤��碌�ե����फ�餪�䤤��碌�򤹤뤿�����ˡ��ˤĤ��Ƶ��ܤ��Ƥ��ޤ������䤤��碌�ե�������������֥ڡ����ˤ�����Ƥ��ޤ���">

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
            
<?php if ($err) { ?>
                <p class="red">
                    ����礻�μ��դ��Ǥ��ޤ���Ǥ�����<br>
                    ������Ǥ������֤�����Ƥ⤦���٤���礻����������
                </p>
<?php } else { ?>
                <p>
                    ���䤤��碌������դ��ޤ�����<br /><br />
                    
                    ���䤤��碌���������ޤ������Ƥ��ǧ�ξ塢<br />
                    24���ְ���������������Ƥ���ޤ���<br /><br />
                    
                    �����Ф餯���Ԥ����������ޤ��褦���ꤤ�������ޤ���<br /><br /><br />
                    
                    
                    �ޤ������ֿ���᡼�륢�ɥ쥹��<br />
                    �ʲ��Υ᡼����������Ƥ���ޤ��ΤǤ���ǧ����������<br /><br />
                    
                    �ݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡ�<br />
                    ��������support@xserver.ne.jp<br />
                    ��̾�����ڥ��å��������С��ۤ��䤤��碌������դ��ޤ���<br />
                    �ݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡݡ�<br /><br />
                    
                    �����Υ᡼�뤬���긵���Ϥ��Ƥ��ʤ��Ȥ�����硢<br />
                    �ʲ��β�ǽ�����������ޤ��Τǡ����Τ��᤯�������ޤ��Ǥ��礦����<br /><br />
                    
                    �����ֿ���Ȥ��ƻ��ꤵ��Ƥ���᡼�륢�ɥ쥹��ͭ���ǤϤʤ�<br />
                    ���������ӥ�����Υ᡼�뤬���ǥ᡼��Ȥ��ƺ���ޤ��ϳ�Υ����Ƥ���<br /><br />
                    
                    ���ֿ���Ȥ��ƻ��ꤵ��Ƥ���᡼�륢�ɥ쥹��ͭ���ǤϤʤ����ʤ�<br />
                    �᡼�뤬���긵���Ϥ��Ƥ��ʤ��褦�Ǥ����顢������ǤϤ������ޤ�����<br />
                    �̤�ͭ���ʥ᡼�륢�ɥ쥹�ǲ���Ƥ��䤤��碌�򤪴ꤤ�������ޤ���<br /><br />
                </p>
<?php } ?>
                
                <p><a class="btn btn_gray" href="index.php">���䤤��碌�ե���������<i class="ico ico_refresh"></i></a></p>  
            
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