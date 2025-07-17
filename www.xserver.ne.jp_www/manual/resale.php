<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���ΤˤĤ��� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��Ǥϡ�ͭ����̵������鷺��������̾���ʳ����軰�Ԥˡ������С��꥽�����ΰ�������Ϳ����԰٤�ֺ��Ρפ������������ξ����������������ˤΤߺ��Τ���Ĥ��Ƥ��ޤ���">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>�ޥ˥奢��</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
            
            <h3 class="sub-ttl">���ΤˤĤ���</h3>
            
            <p class="mb40">���å��������С��Ǥϡ��������������ͤʤɡ���������Ͱʳ��Υǡ����򰷤�ɬ�פ�������Ǥ⡢����ñ���Ľ���˥����ӥ��򤪻Ȥ�������������ˡ����Τ˴ؤ��ƥ롼����ߤ��Ƥ��ޤ���</p>

            <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">���ΤˤĤ���</a></li>
                    <li><a href="#link-b">���Τ˴ؤ���ɬ�׾��</a></li>
                    <li><a href="#link-c">����</a>
                        <ul>
                            <li><a href="#link-c01">���Τ���ǽ�ʻ���</a></li>
                            <li><a href="#link-c02">���Τ��Ԥ��ʤ�����</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <section class="section">
                <h4 class="section_ttl" id="link-a">���ΤˤĤ���</h4>
                <div class="section_body">
                    <p>�������ӥ��Ǥϡ�ͭ����̵������鷺��������̾���ʳ����軰�Ԥˡ������С��꥽�����ΰ�������Ϳ����԰٤�ֺ��Ρפ����������§�Ȥ��ƶػߤ��Ƥ��ޤ���<br>
                    �������������ξ����������������ˤΤߺ��Τ�Ԥ����Ȥ���ǽ�Ǥ���</p>
                </div>
            </section>
            
            <section class="section">
                <h4 class="section_ttl" id="link-b">���Τ˴ؤ���ɬ�׾��</h4>
                <div class="section_body">
                    <ul class="ul">
                        <li>�������ӥ��η���ԤȺ�����Ȥϡ�ľ��Ϣ����ǽ�ʾ��֤Ǥ��뤳��</li>
                        <li>����������������Ȥ��ʤ�����</li>
                        <li>������ϡ���ˡ�ͤޤ��ϰ�Ŀ͡��ޤ��ϲ�²�䥵������ʤɤ�����ΰ����Τ򤽤줾��1�桼�����Ȥ�����5�桼�����ޤǤȤ��뤳��</li>
                        <li>����Ԥϡ���������Ф��ơ��ػ߻���ʤ��������ӥ��ˤ��������ѵ��������������餵���뤳��
                            <p class="mt5"><a href="../rule/rule.php" class="btn btn_gray">���å��������С����ѵ���<i class="ico ico_chevron-right"></i></a></p>
                        </li>
                        <li>������ؤΥ����ӥ���Υ��ݡ��Ȥϡ�����Լ��Ȥ��Ԥ�����</li>
                        <li>�����С���¿�����٤򤫤��ʤ�����</li>
                    </ul>
                </div>
            </section>
            
            <section class="section">
                <h4 class="section_ttl" id="link-c">����</h4>
                <div class="section_body clearfix">
                    <section class="block">
                        <h5 id="link-c01" class="block_ttl">���Τ���ǽ�ʻ���</h5>
                        <div class="block_body">
                            <ul class="ul">
                                <li>������������Զ�̳�ˤ����ơ��ܵҥ����Ȥ򥵡��С���˹��ۤ���</li>
                                <li>��²���ͧ��Ʊ�ΤΥ���������ʤɤǡ������Ⱥ�����᡼�륢�ɥ쥹���ѤΤ���˥����С���Ʊ�����Ѥ���</li>
                            </ul>
                        </div>
                    </section>
                    <section class="block">
                        <h5 id="link-c02" class="block_ttl">���Τ��Ԥ��ʤ�����</h5>
                        <div class="block_body">
                            <ul class="ul">
                                <li>������¿���ظ����ơ��֥���SNS�������󥿡�CGI�ʤɤΥ�󥿥륵���ӥ����󶡤���</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>
        
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