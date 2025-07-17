<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>mod_pagespeed���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢���Google�Ҥˤ�곫ȯ���줿��ĥ�⥸�塼���mod_pagespeed�פ���Ѥ��ơ�Web�����Ȥ�ɽ��®�٤���夵�����mod_pagespeed����׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">mod_pagespeed����ˤĤ���</h3>

                <aside class="msg msg_notice">
                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>mod_pagespeed�ο������դϽ�λ���ޤ�����</h6>
                    <div class="msg_body">
                        <p>
                            Ʊ��ǽ�򤹤Ǥ�ͭ�������Ƥ��륵���Ȥϡ�����³�������Ѥ��������ޤ���
                        </p>
                    </div>
                </aside>
                
                <div class="toc-list">
                <p class="toc-list--head">�ܼ�</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">mod_pagespeed����Ȥ�</a></li>
                    <li><a href="#link-b">mod_pagespeed������ڤ��ؤ����</a>
                        <ol>
                            <li><a href="#link-b01">1.������塢��mod_pagespeed����פ򥯥�å����Ƥ���������</a></li>
                            <li><a href="#link-b02">2.�����ѹ��ܥ���򥯥�å�</a></li>
                            <li><a href="#link-b03">3.���괰λ</a></li>
                        </ol>
                    </li>
                </ul>
                </div>               
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">mod_pagespeed����Ȥ�</h4>
                    <div class="section_body">
                        <p>Google�Ҥˤ�곫ȯ���줿��ĥ�⥸�塼���mod_pagespeed�פ���Ѥ��ơ�Web�����Ȥ�ɽ��®�٤���夵���뵡ǽ�Ǥ���<br>
                        ��mod_pagespeed����פ�ͭ���ˤ���ȡ��ե�����򰵽̤��ƥǡ���ž���̤�︺���롢Ʊ��Υե�������ޤȤ�ˤ���̵�̤��̿���︺����ʤɤκ�Ŭ��������»ܤ��ޤ���<br>
                        ���κ�Ŭ�������ˤ�ꡢWeb�����Ȥ˥������������֥饦���ϥǡ���ž���̤����������ޤ����ڡ����Υ��ɻ��֤�û�̤Ǥ��뤿�ᡢWeb�����Ȥ�ɽ��®�ٲ�������Ԥ��뤳�Ȥ��Ǥ��ޤ���</p>
                        <p><img class="flex" src="../img/manual/man_server_mod_pagespeed_1.png" alt="mod_pagespeed�������᡼��"></p>
                        
                        <p>�ܵ�ǽ��ͭ���ˤ��뤳�Ȥǰʲ��Τ褦�ʺ�Ŭ���������»ܤ���ޤ���</p>
                            <ul class="ul">
                                <li>CSS�ե����롢JavaScript�ե�����ʤɤΰ���</li>
                                <li>��Ŭ�ʲ��������פؤ��Ѵ������̲�</li>
                                <li>Ʊ��Υե�����(������CSS��JavaScript�ե�����ʤ�)���ĤˤޤȤᡢ�����С��ȥ��饤����ȴ֤�̵�̤��̿�(�ꥯ������)��︺</li>
                                <li>CSS�ե����롢JavaScript�ե����롢�����ե�����Υ���å���ͭ�����֤α�Ĺ</li>
                                <li>�����ʥե����륵������CSS��JavaScript��HTML���������</li>
                            </ul>
                        <p>�ʤɡ�</p>

                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�����ѻ�����ջ���</h6>
                            <div class="msg_body">
                                <p>��mod_pagespeed����פ�ͭ���ˤ���ȡ���Ŭ�������αƶ��ǥ�������̤�CPU��٤��㴳�徺�����ꡢ���������ե�����β�����㲼�����礬����ޤ���<br>
                                    �ޤ����֥饦���䥵���С�����ƥ�Ĥ����Ƥˤ�äƤϡ��ܵ�ǽ��ͭ���Ȥ����ݤ�Web�����Ȥ�ɽ���������ʤɡ� �ۤʤ�ư��Ȥʤ��礬���ˤ���ޤ������ξ�硢�ܵ�ǽ��̵�������ꤷ�Ƥ���������</p>
                                <p>�ʤ�����Ŭ����ȼ������å�������αƶ��ˤ��CSS�ե����롢JavaScript�ե����롢�����ե�����ι�����ȿ�Ǥ����ޤǻ��֤��������礬����ޤ���</p>
                            </div>
                        </aside>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">mod_pagespeed������ڤ��ؤ����</h4>
                    <div class="section_body">
                    
                        <p>mod_pagespeed����ϡ������μ����ѹ����뤳�Ȥ���ǽ�Ǥ���</p>
                    
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.������塢��mod_pagespeed����פ򥯥�å����Ƥ���������</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷤Ƥ�����������®�����ƥ�����Ρ�mod_pagespeed����פ򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_2.png?date=20220418" alt="mod_pagespeed����򥯥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.�����ѹ��ܥ���򥯥�å�</h6>
                                <div class="box_body">
                                    <p>�����Ԥ��оݥɥᥤ��ȡ����ߤ�����򤴳�ǧ�ξ塢�����ѹ��ܥ���(ON�ˤ���/OFF�ˤ���)�򥯥�å����Ƥ���������</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_3.png?date=20220418" alt="�����ѹ��ܥ���򥯥�å�"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.���괰λ</h6>
                                <div class="box_body">
                                    <p>���괰λ���̤�ɽ�������С����괰λ�Ǥ���</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_4.png?date=20220418" alt="�����ѹ���λ"></p>
                                    <p>������̤ؤ����ȡ����꤬�ѹ�����Ƥ��ޤ��Τǡ�����ǧ����������</p>
                                    <p><img class="img" src="../img/manual/man_server_mod_pagespeed_5.png?date=20220418" alt="�������Ƥ��ѹ�����Ƥ��ޤ�"></p>
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