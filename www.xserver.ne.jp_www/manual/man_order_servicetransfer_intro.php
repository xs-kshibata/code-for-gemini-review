<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServer�ӥ��ͥ��ؤ��ѹ� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С�����XServer�ӥ��ͥ��ؤΥ����ӥ��ѹ��˴ؤ��뤴����Ǥ���">

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
        
            <section class="col-main">
            
                <h3 class="sub-ttl">XServer�ӥ��ͥ��ؤ��ѹ�</h3>

                <div class="toc-list">
                    <p class="toc-list--head">�ܼ�</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">XServer�ӥ��ͥ��ؤ��ѹ��ˤĤ���</a>
                            <ol>
                                <li><a href="#link-a01">STEP1 �ǡ������ԡ�</a></li>
                                <li><a href="#link-a02">STEP2 ư���ǧ</a></li>
                                <li><a href="#link-a03">STEP3 �ڤ��ؤ�</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-b">�����ӥ��ѹ��β�ǽ�����ˤĤ���</a>
                            <ol>
                                <li><a href="#link-b01">���Ѵ�����Υ����ӥ��ѹ�</a></li>
                                <li><a href="#link-b02">�ܷ����Υ����ӥ��ѹ�</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-c">XServer�ӥ��ͥ��ؤ��ѹ���ˡ</a></li>
                        <li><a href="#link-d">XServer�ӥ��ͥ��ؤ��ѹ��ǰܹԤ����ǡ���������</a></li>
                        <li><a href="#link-e">XServer�ӥ��ͥ��ؤ��ѹ���ȼ�������</a>
                            <ul>
                                <li><a href="#link-e01">�����ӥ��ѹ��ε�ǽ���¤ˤĤ���</a></li>
                                <li><a href="#link-e02">�֥����С��ڤ��ؤ��״�λ����24�������١��ܹԸ������С��إ᡼�뤬�Ϥ���礬����ޤ�</a></li>
                                <li><a href="#link-e03">�ץ��������Ѥξ�硢�֥����С��ڤ��ؤ��״�λ����24�������١��ܹԸ������С��إǡ������񤭹��ޤ���礬����ޤ�</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>

                <section class="section">
                    <h4 id="link-a" class="section_ttl">XServer�ӥ��ͥ��ؤ��ѹ��ˤĤ���</h4>
                    <div class="section_body">
                        <p>
                            ��������Ρ֥��å��������С��פΥ����С������֥ǡ������ԡ��ס�ư���ǧ�ס��ڤ��ؤ��פ�3���ƥåפΤߤǡ���XServer�ӥ��ͥ��פ˥����ӥ����ѹ��Ǥ��ޤ���
                        </p>
                        <p>��XServer�ӥ��ͥ��פؤΰܹԵ�ǽ�����Ѥ����������Ȥǡ�
                            ���ߤ�������Ρ֥��å��������С��פη�����֤�
                            �����С����Web�����Ȥ�᡼��ʤɤΥǡ���������Ѥ����ޤ�
                            ��XServer�ӥ��ͥ��פΥ����С��Ķ��ذܹԤ��뤳�Ȥ��Ǥ��ޤ���</p>

                        <p>�����С��Ķ����ڤ��ؤ�������
                            �����ͤ����Ȥǿ������С���ư���ǧ��Ԥ����Ȥ��Ǥ��ޤ��Τ�
                            ������Υ����Ȥ���ߤ����뤳�Ȥʤ��������˰ܹԤ��뤳�Ȥ���ǽ�Ǥ���
                        </p>
                        <p class="tac mb30"><img class="flex" src="../img/manual/man_order_servicetransfer_intro_1.png?date=20250314" alt="�֥ǡ������ԡ��ס�ư���ǧ�ס��ڤ��ؤ��פ�3���ƥåץ��᡼��"></p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">STEP1 �ǡ������ԡ�</h5>
                            <div class="block_body">
                                <p class="mb0">�֥ǡ������ԡ������פ�ԤäƤ����������Ȥǡ����ߤ����ѤΥ����С���Υǡ����������������С��Ķ��˥��ԡ�����ޤ���</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">STEP2 ư���ǧ</h5>
                            <div class="block_body">
                                <p>�ǡ������ԡ�����λ����ȡ��ܹ��襵���С��˥����������뤳�Ȥ��Ǥ��ޤ���<br>
                                hosts�ե�������Խ������ܹ��襵���С���Web�����Ȥ�����ʤ�ɽ������뤫��ư����ǧ���Ƥ���������<br>
                                ư���ǧ�ξܺ٤ʼ��ϡ��ޥ˥奢���<a href="man_domain_checkproxy.php#link-b">ư���ǧ�ˤĤ��� �� WordPress�ʤɤΥץ�����Ȥä������Ȥ�ư����ǧ������ˡ</a>�פ򤴻��Ȥ���������</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">STEP3 �ڤ��ؤ�</h5>
                            <div class="block_body">
                                <p class="mb0">�ܹ��襵���С���ư���ǧ��Ԥ�������������򤪻�ʧ�������������Ȥǡ������ӥ����ڤ��ؤ�����λ���ޤ���</p>
                            </div>
                        </section>
                        <aside class="msg msg_notice mb30">
                            <p class="msg_ttl" id="link-a01"><i class="ico ico_circle-arrow-right"></i>XServer�ӥ��ͥ��Ȥ�</p>
                            <div class="msg_body">
                                    <div>
                                        ��XServer�ӥ��ͥ��פϡ�ˡ�͡�����͸������͡��ʵ�ǽ�䥵���ӥ����󶡤����󥿥륵���С��Ǥ���<br>
                                        �ӥ��ͥ��ε���»�����ɤ����ꡦ��Ŭ�Υ����С��Ķ��ȡ��Ƽ������̵����Ԥ�Ϥ���Ȥ���¿��Υ����ӥ�����ǽ�Ǥ����ͤΥӥ��ͥ��򶯤����ݡ��Ȥ��ޤ���
                                        <ul class="list list_arrow-right mt10">
                                            <li><a href="https://business.xserver.ne.jp/">ˡ�͡�����ͤΥˡ������ò�������󥿥륵���С���XServer�ӥ��ͥ���</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </aside>

                   
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-b" class="section_ttl">�����ӥ��ѹ��β�ǽ�����ˤĤ���</h4>
                    <div class="section_body">
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">���Ѵ�����Υ����ӥ��ѹ�</h5>
                            <div class="block_body">
                                <p>���Ѵ�����ϡ����ĤǤ⥵���ӥ��ѹ��ο�������ǽ�Ǥ���<br>
                                    ���Ѵ��֤Ϥ��Τޤ޷�³����ޤ���</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">�ܷ����Υ����ӥ��ѹ�</h5>
                            <div class="block_body">
                                <p>���ĤǤ⿽������ǽ�Ǥ���<br>
                                    ��³���κݤˡ����������������Ѵ������ޤǤκ�������򤪻�ʧ������������</p>
                                <p class="note">����Կ�����ߤʤ�¨����Ѱʳ��λ�ʧ����ˡ�Ǽ�³���򤵤줿���ϡ���ʧ����ȿ�Ǥ����ޤǤϥ����С��ڤ��ؤ����Ǥ��ޤ���</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-c" class="section_ttl">XServer�ӥ��ͥ��ؤ��ѹ���ˡ</h4>
                    <div class="section_body">
                        <p>XServer�����������֥ץ�󡦥����ӥ��ѹ��פ�ꤴ���Ѥ���������</p>
                        <p>�ܺ٤ϥޥ˥奢���<a href="man_order_servicetransfer_flow.php">XServer�ӥ��ͥ��ؤ��ѹ� �����Ѽ��</a>�פ򤴻��Ȥ���������</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">XServer�ӥ��ͥ��ؤ��ѹ��ǰܹԤ����ǡ���������</h4>
                    <div class="section_body">
                        <p>�ǡ������ԡ���������������ޤ᤿�����С���������Ȥ����Ƥ������������С��Ķ��˰ܹԤ���ޤ���</p>
                        <p>�ʤ����ʲ�������Ͽ����������С��Ķ��ˤϰܹԤ���ޤ���</p>
                        <div class="border border_gray">
                            <ul class="ul">
                                <li>���������������顼��</li>
                                <li>��ư�Хå����å׽����Ǽ��������Хå����åץǡ���</li>
                                <li>���å��������С��ν���ɥᥤ��ʥ����С�ID.xsrv.jp����Υǡ���</li>
                            </ul>
                        </div>
                        <p>�ǡ������ԡ��˴ؤ�����ͤξܺ٤ϡ��ޥ˥奢���<a href="man_order_servicetransfer_detail.php">XServer�ӥ��ͥ��ؤ��ѹ� ���;ܺ�</a>�פ򤴻��Ȥ���������</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">XServer�ӥ��ͥ��ؤ��ѹ���ȼ�������</h4>
                    <div class="section_body">                        
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e01">�����ӥ��ѹ��ε�ǽ���¤ˤĤ���</h5>
                            <div class="block_body">
                                <p>�֥ǡ������ԡ������פ�Ԥ��ȡ��֥����С��ڤ��ؤ��פ�Ԥ��ޤǡ��ʲ��Τ���³�����Ǥ��ޤ���</p>
                                <div class="border border_gray">
                                    <ul class="ul">
                                        <li>�оݥ����С��Υץ����ѹ�</li>
                                        <li>�оݥ����С��ؤΥ��ץ�����ȼ�SSL�ο����ɲá�����</li>
                                        <li>�оݥ����С��β���</li>
                                        <li>�оݥ����С����ɲä��Ƥ����ȼ��ɥᥤ��β���</li>
                                        <li>�оݥ����С����ɲä��Ƥ��륪�ץ�����ȼ�SSL�β���</li>
                                        <li>�����С��ѥͥ�γƼ���������</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e02">�֥����С��ڤ��ؤ��״�λ����24�������١��ܹԸ������С��إ᡼�뤬�Ϥ���礬����ޤ�</h5>
                            <div class="block_body">
                                <p>�ͥåȥ����ȿ�Ǿ����ˤ�ꡢ�֥����С��ڤ��ؤ��״�λ����24�������١��ܹԸ������С��إ᡼�뤬�Ϥ���礬����ޤ���</p>
                                <p>�ܹԸ������С����Ϥ����᡼��ϡ������ѤΥ᡼�륽�եȾ�ǡ���POP�����С�̾�ʥۥ���̾�ˡפ�ܹԸ������С�̾(sv***.xserver.jp)���ѹ����Ƥ���ǧ��������ɬ�פ�����ޤ���</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e03">�ץ��������Ѥξ�硢�֥����С��ڤ��ؤ��״�λ����24�������١��ܹԸ������С��إǡ������񤭹��ޤ���礬����ޤ�</h5>
                            <div class="block_body">
                                <p>CGI��PHP��MySQL�ʤɤΡ��ץ���ࡦ�ǡ����١��������ˤ����ơ��ǡ����ν񤭹��ߡʹ����ˤ�����Ԥ��Ƥ���褦�ʥץ���ब��ư���Ƥ����硢�֥����С��ڤ��ؤ��פ������24�������١��ܹԸ������С�¦�˾��󤬽񤭹��ޤ���������ޤ���</p>
                                <p>�ܹԸ������С��˽񤭹��ޤ줿�ǡ����ϰܹ��襵���С��ؤ�ȿ�Ǥ���ޤ���</p>
                                <p>̤ȿ�ǥǡ����ΰܹ��襵���С��ؤ�ȿ�Ǥʤɤϡ������ͤ����ȤǹԤäƤ�������ɬ�פ�����ޤ���</p>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
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