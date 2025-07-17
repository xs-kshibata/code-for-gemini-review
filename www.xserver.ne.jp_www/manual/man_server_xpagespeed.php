<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XPageSpeed���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��á�XPageSpeed����׵�ǽ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">XPageSpeed����ˤĤ���</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">XPageSpeed����Ȥ�</a></li>
                                <li><a href="#link-previous-b">XPageSpeed������ڤ��ؤ����</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.��XPageSpeed����פ򥯥�å�</a></li>
                                        <li><a href="#link-previous-b02">2.�����ѹ��ܥ���򥯥�å�</a></li>
                                        <li><a href="#link-previous-b03">3.�������ꤹ��</a></li>
                                        <li><a href="#link-previous-b04">4.���괰λ</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">XPageSpeed����Ȥ�</h4>
                                <div class="section_body">
                                    <p>��XPageSpeed�פϡ�Google�Ҥˤ�곫ȯ���줿��ĥ�⥸�塼���PageSpeed Module�פ��Ȥˡ����å��������С�����ȯ����Web�����Ⱥ�Ŭ����ǽ�Ǥ���<br>
                                    ��XPageSpeed����פ�ͭ���ˤ���ȡ��ե�����򰵽̤��ƥǡ���ž���̤�︺���롢Ʊ��Υե�������ޤȤ�ˤ���̵�̤��̿���︺����ʤɤκ�Ŭ��������»ܤ��ޤ���<br>
                                    ���κ�Ŭ�������ˤ�ꡢ�֥饦���ȥ����С��֤�ž���̤����������ڡ����Υ��ɻ��֤�û�̤Ǥ��뤿�ᡢWeb�����Ȥ��ɤ߹���®�ٲ�������Ԥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p><img class="flex" src="../img/manual/previous/man_server_xpagespeed_1.png" alt="XPageSpeed�������᡼��"></p>

                                    <p>�ܵ�ǽ��ͭ���ˤ��뤳�Ȥǰʲ��Τ褦�ʺ�Ŭ���������»ܤ���ޤ���</p>
                                        <ul class="ul">
                                            <li>CSS�ե����롢JavaScript�ե�����ʤɤΰ���</li>
                                            <li>��Ŭ�ʲ��������פؤ��Ѵ������̲�</li>
                                            <li>Ʊ��Υե�����(������CSS��JavaScript�ե�����ʤ�)���ĤˤޤȤᡢ�����С��ȥ��饤����ȴ֤�̵�̤��̿�(�ꥯ������)��︺</li>
                                            <li>CSS�ե����롢JavaScript�ե����롢�����ե�����Υ���å���ͭ�����֤α�Ĺ</li>
                                            <li>�����ʥե����륵������CSS��JavaScript��HTML���������</li>
                                        </ul>
                                    <p>�ʤɡ�</p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����ѻ�����ջ���</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>��XPageSpeed����פ�ͭ���ˤ���ȡ���Ŭ�������αƶ��ǥ�������̤�CPU��٤��㴳�徺�����ꡢ���������ե�����β�����㲼�����礬����ޤ���</li>
                                                <li> �֥饦���䥵���С�����ƥ�Ĥ����Ƥˤ�äƤϡ��ܵ�ǽ��ͭ���Ȥ����ݤ�Web�����Ȥ�ɽ���������ʤɡ� �ۤʤ�ư��Ȥʤ��礬���ˤ���ޤ������ξ��ϡ��ܵ�ǽ��̵�������ꤷ�Ƥ���������</li>
                                                <li> ��Ŭ����ȼ������å�������αƶ��ˤ��CSS�ե����롢JavaScript�ե����롢�����ե�����ι�����ȿ�Ǥ����ޤǻ��֤��������礬����ޤ���</li>
                                                <li> �����С��˹���٤�ȯ�����Ƥ���ݤϡ����Ū�˺�Ŭ��������̵����������礬����ޤ���</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>�оݥ����С��ˤĤ���</h6>
                                        <div class="msg_body">
                                            <table class="table table_responsive">
                                                <tbody>
                                                <tr>
                                                    <th>�оݥ����С�</th>
                                                    <td>sv10001.xserver.jp �ʹߤΥ����С�</td>
                                                </tr>
                                            </table>
                                            <p class="note">�������ͤ���������Υ����С��ˤĤ��Ƥϡ�<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��֥����С��׹����⤫�������С��ѥͥ�Ρ֥����С�����ע��֥����С��ֹ�פ��餴��ǧ����������</p>
                                            <p class="note">��sv10000.xserver.jp �����Υ����С��ǤΡ�XPageSpeed�׵�ǽ���󶡤ˤĤ��ƤϽ缡�б�ͽ��Ǥ���<br>
                                                sv10000.xserver.jp �����Υ����С������Ѥ����ǡ��ܵ�ǽ�����Ѥ򤪵ޤ��ξ��ϡ�̵���Ǻǿ������С��Ķ��ذܹԤǤ���ֿ������С���ñ�ܹԡפΤ����Ѥ򤴸�Ƥ����������<br>
                                                �ܤ����ϡ��ޥ˥奢���<a href="https://www.xserver.ne.jp/manual/man_order_servertransfer_flow.php">�������С���ñ�ܹ� �����Ѽ��</a>�פ򤴻��Ȥ���������</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">XPageSpeed������ڤ��ؤ����</h4>
                                <div class="section_body">

                                    <p>XPageSpeed����ϡ������μ����ѹ����뤳�Ȥ���ǽ�Ǥ���</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.��XPageSpeed����פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷤Ƥ�����������XPageSpeed����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_2.png" alt="XPageSpeed����򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2. �����ѹ��ܥ���򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>�����Ԥ��оݥɥᥤ��ȡ����ߤ�����򤴳�ǧ�ξ塢�����ѹ��ܥ���(ON/OFF)�˥����å��򤤤졢�ֳ�ǧ���̤ؿʤ�ץܥ���򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_3.png" alt="�����ѹ��ܥ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3. �������ꤹ��</h6>
                                            <div class="box_body">
                                                <p>���ѹ�����פ򥯥�å������ѹ����Ƥ���ꤷ�Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_4.png" alt="�ѹ�����ܥ���򥯥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b04">4. ���괰λ</h6>
                                            <div class="box_body">
                                                <p>���괰λ���̤�ɽ�������С����괰λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_5.png" alt="�����ѹ���λ"></p>
                                                <p>������̤ؤ����ȡ����꤬�ѹ�����Ƥ��ޤ��Τǡ�����ǧ����������</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_xpagespeed_6.png" alt="�������Ƥ��ѹ�����Ƥ��ޤ�"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /��ѥͥ�-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>�������С��ѥͥ�</label>
                        <!-- ���ѥͥ� -->

                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">XPageSpeed����Ȥ�</a></li>
                                    <li><a href="#link-b">XPageSpeed������ڤ��ؤ����</a>
                                        <ol>
                                            <li><a href="#link-b01">1.��XPageSpeed����פ򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.�ѹ��ܥ�����ON�פˤ���</a></li>
                                            <li><a href="#link-b03">3.���괰λ</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">XPageSpeed����Ȥ�</h4>
                                <div class="section_body">
                                    <p>��XPageSpeed�פϡ�Google�Ҥˤ�곫ȯ���줿��ĥ�⥸�塼���PageSpeed Module�פ��Ȥˡ����å��������С�����ȯ����Web�����Ⱥ�Ŭ����ǽ�Ǥ���<br>
                                        ��XPageSpeed����פ�ͭ���ˤ���ȡ��ե�����򰵽̤��ƥǡ���ž���̤�︺���롢Ʊ��Υե�������ޤȤ�ˤ���̵�̤��̿���︺����ʤɤκ�Ŭ��������»ܤ��ޤ���<br>
                                        ���κ�Ŭ�������ˤ�ꡢWeb�����Ȥ˥������������֥饦���ϥǡ���ž���̤����������ޤ����ڡ����Υ��ɻ��֤�û�̤Ǥ��뤿�ᡢWeb�����Ȥ��ɤ߹���®�ٲ�������Ԥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p><img class="flex" src="../img/manual/man_server_xpagespeed_1.png?date=2410" alt="XPageSpeed�������᡼��"></p>
                                    <p>�ܵ�ǽ��ͭ���ˤ��뤳�Ȥǰʲ��Τ褦�ʺ�Ŭ���������»ܤ���ޤ���</p>
                                    <ul class="ul">
                                        <li>CSS�ե����롢JavaScript�ե�����ʤɤΰ���</li>
                                        <li>��Ŭ�ʲ��������פؤ��Ѵ������̲�</li>
                                        <li>Ʊ��Υե�����(������CSS��JavaScript�ե�����ʤ�)���ĤˤޤȤᡢ�����С��ȥ��饤����ȴ֤�̵�̤��̿�(�ꥯ������)��︺</li>
                                        <li>CSS�ե����롢JavaScript�ե����롢�����ե�����Υ���å���ͭ�����֤α�Ĺ</li>
                                        <li>�����ʥե����륵������CSS��JavaScript��HTML���������</li>
                                    </ul>
                                    <p>�ʤɡ�</p>

                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>�����ѻ�����ջ���</h5>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>��XPageSpeed����פ�ͭ���ˤ���ȡ���Ŭ�������αƶ��ǥ�������̤�CPU��٤��㴳�徺�����ꡢ���������ե�����β�����㲼�����礬����ޤ���</li>
                                                <li> �֥饦���䥵���С�����ƥ�Ĥ����Ƥˤ�äƤϡ��ܵ�ǽ��ͭ���Ȥ����ݤ�Web�����Ȥ�ɽ���������ʤɡ� �ۤʤ�ư��Ȥʤ��礬���ˤ���ޤ������ξ��ϡ��ܵ�ǽ��̵�������ꤷ�Ƥ���������</li>
                                                <li> ��Ŭ����ȼ������å�������αƶ��ˤ��CSS�ե����롢JavaScript�ե����롢�����ե�����ι�����ȿ�Ǥ����ޤǻ��֤��������礬����ޤ���</li>
                                                <li> �����С��˹���٤�ȯ�����Ƥ���ݤϡ����Ū�˺�Ŭ��������̵����������礬����ޤ���</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">XPageSpeed������ڤ��ؤ����</h4>
                                <div class="section_body">
                                    <p>XPageSpeed����ϡ������μ����ѹ����뤳�Ȥ���ǽ�Ǥ���</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. ��XPageSpeed����פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡���XPageSpeed����ץ�˥塼�򥯥�å����Ƥ���������</p>
                                                <p><img alt="��XPageSpeed����פ򥯥�å�" class="img" src="../img/manual/man_server_xpagespeed_2.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. �ѹ��ܥ�����ON�פˤ���</h5>
                                            <div class="box_body">
                                                <p>�����Ԥ��оݥɥᥤ��ȡ����ߤ�����򤴳�ǧ�ξ塢�ѹ��ܥ���򥯥�å����ơ�ON�פˤ��Ƥ���������</p>
                                                <p><img alt="�ѹ��ܥ�����ON�פˤ���" class="img" src="../img/manual/man_server_xpagespeed_3.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3. ���괰λ</h5>
                                            <div class="box_body">
                                                <p>�����������ON�פ��ѹ�����Ƥ���С����괰λ�Ǥ���</p>
                                                <p><img alt="���괰λ" class="img" src="../img/manual/man_server_xpagespeed_4.png?date=2410"></p>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </section><!-- /.section -->


                        </div><!-- ���ѥͥ뽪���-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->



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