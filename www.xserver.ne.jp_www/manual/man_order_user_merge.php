<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>��������ȡ���������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���ʣ����XServer��������Ȥ򣱤Ĥ�XServer��������ȤȤ������礹���³���μ����������Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">��������ȡ����������</h3>

                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li>
                        <a href="#link-a">��������ȡ����������Ȥ�</a>
                    </li>
                    <li>
                        <a href="#link-b">���礬��ǽ�ʥ��������</a>
                        <ul>
                            <li><a href="#link-b01">����Ǥ��ʤ���������Ȥ��н���ˡ</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-c">������</a>
                        <ol>
                            <li><a href="#link-c01">1.�֥�������Ȥ�����פ򥯥�å�</a></li>
                            <li><a href="#link-c02">2.���礹�륢������Ȥξ��������</a></li>
                            <li><a href="#link-c03">3.���細λ</a></li>
                        </ol>
                    </li>
                </ul>
                </div>
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">��������ȡ����������Ȥ�</h4>
                    <div class="section_body">
                        <p>XServer��������ȡ�XServer�ɥᥤ�󤫤���������礷��ID��ޤ�ˤ�Ʊ������̾���������ʬ���̡���ʣ���������ξ�硢�����줫�Υ�������Ȥ����礹�뤳�Ȥ���ǽ�Ǥ���</p>
                        <p class="tac"><img class="fluid-sm" src="../img/manual/order_user_merge01.png?date=20250217" alt="���祤�᡼��"></p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">���礬��ǽ�ʥ��������</h4>
                    <div class="section_body">
                        <p>
                           ��������XServer��������ȤˤĤ��Ʋ����Τ���Ͽ���󤬰��פ��Ƥ�����˸¤ꡢ�ܵ�ǽ�ˤ����礹�뤳�Ȥ���ǽ�Ǥ���
                        </p>
                        <ul class="ul">
                            <li>�����ʬ��ˡ��/�Ŀ͡�</li>
                            <li>����̾��</li>
                            <li>����̾���ʥ��ʡ�</li>
                        </ul>

                        <h5 id="link-b01" class="block_ttl mt50">����Ǥ��ʤ���������Ȥ��н���ˡ</h5>
                        <p>�ʲ��ˤ������硢�ܵ�ǽ�ˤ�륢������Ȥ�����ϤǤ��ޤ���</p>
                        <dl class="dl mb0">
                            <dt><i class="ico ico_square-fill"></i>̤ʧ�����������¸�ߤ�����</dt>
                            <dd>
                                <p>���������������������뤳�Ȥǥ�������Ȥ����礬��ǽ�Ǥ���</p>
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>���������ѵ����Ʊ�դ��Ƥ��ʤ�����xd�פ���Ϥޤ�XServer���������ID�������оݤξ��</dt>
                            <dd>
                                <p>2018ǯ������XServer�ɥᥤ���ȯ�Ԥ��줿��xd�פ���Ϥޤ�XServer���������ID�����礹���硢����ID��XServer��������Ȥ˥����󤹤����˵���Ʊ�ղ��̤�ɽ������ޤ��������Ʊ�դ��Ƥ����������Ȥǥ�������Ȥ����礹�뤳�Ȥ���ǽ�ˤʤ�ޤ���</p>
                            </dd>

                            <dt><i class="ico ico_square-fill"></i>ͭ�������̵ͭ�ˤ�����餺���ܹԸ��Υ�������Ȥ˰ʲ������ӥ��η��󤬤�����</dt>
                            <dd>
                                �ʲ������ӥ��η��󤬤���XServer��������Ȥ�ְܹ���פˤ��Ƥ����������Ȥǡ����礬��ǽ�Ǥ���<br>
                                �ܹԸ����ܹ��褽�줾��˰ʲ������ӥ��η��󤬤�����ϡ����礹�뤳�Ȥ��Ǥ��ޤ���
                                <ul class="ul">
                                    <li>XServer VPS</li>
                                    <li>XServer VPS for Game</li>
                                    <li>XServer ���饦��PC</li>
                                    <li>XServer SNS</li>
                                    <li>XServer GAMEs</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">������</h4>
                    <div class="section_body">
                        
                        <aside class="msg msg_caution">
                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����Υ���󥻥�ϤǤ��ޤ���</h5>
                            <div class="msg_body">
                                <p>
                                    ����塢�������ξ��֤��᤹���ȤϤǤ��ޤ������Ƥ�褯������ξ�����礷�Ƥ���������
                                </p>
                            </div>
                        </aside>
                        
                        <p>
                            �ܵ�ǽ�ˤ�겼�������礵��ޤ���
                        </p>
                        
                        <dl class="dl">
                            <dt>�����󥢥������</dt>
                            <dd>
                                <ul class="ul">
                                    <li>�����С�</li>
                                    <li>�ȼ��ɥᥤ��</li>
                                    <li>SSL������</li>
                                </ul>
                            </dd>
                            <dt>����ʧ������</dt>
                            <dd>
                                <p>
                                    ����ޤǤ���ʧ����������������
                                </p>
                            </dd>
                            <dt>�ץ�ڥ���</dt>
                            <dd>
                                <p>
                                    �ץ�ڥ��ɤλĹ�
                                </p>
                            </dd>
                            <dt>Whois��Ͽ��������</dt>
                            <dd>
                                <p>
                                    ��Whois���������ץ�˥塼����Ͽ���Ƥ������ơ�<br>
                                    ���縵������������ξ������Ͽ����Ƥ����硢���������Ͽ����Ƥ������Ƥ�ͥ�褷��Ŭ�Ѥ���ޤ���
                                </p>
                            </dd>
                            <dt>WordPress�ơ���</dt>
                            <dd>
                                <p>�����Ѥ�WordPress�ơ���</p>
                            </dd>
                            <dt>��ͧã�Ҳ�ץ����</dt>
                            <dd>
                                <p>��ͧã�Ҳ�ץ������󽷤���ӾҲ�����</p>
                            </dd>
                        </dl>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.�֥�������Ȥ�����פ򥯥�å�</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡�������˥塼��ü��XServer��������ȥ�˥塼����֥�������Ȥ�����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/order_user_merge02.png?date=20250217" alt="�֥�������Ȥ����礹��ץܥ���򥯥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.���礹�륢������Ⱦ��������</h6>
                                <div class="box_body">
                                    <p>���礹��XServer���������ID���ѥ���ɤ����Ϥ���������ˡ�����򤷤ޤ���</p>
                                    <p><img class="img" src="../img/manual/order_user_merge03.png?date=20201022" alt="���礹����Ͽ���������"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.���細λ</h6>
                                <div class="box_body">
                                    <p>�������Ƥˤ��ְ㤤���ʤ���С֥�������Ȥ����礹��פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/order_user_merge04.png?date=20220216" alt="�֥�������Ȥ����礹��פ򥯥�å�"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
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