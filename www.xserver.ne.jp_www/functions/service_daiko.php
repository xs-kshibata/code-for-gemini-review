<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

    <link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

    <title>������ԥ����ӥ� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="���å��������С��Ǥϡ����ҤΥ��󥸥˥������åդˤ���������ԥ����ӥ��פ��󶡤��Ƥ��ޤ���">
    <meta property="og:title" content="������ԥ����ӥ��ڥ��å��������С���">
    <meta property="og:description" content="���å��������С��Ǥϡ����ҤΥ��󥸥˥������åդˤ���������ԥ����ӥ��פ��󶡤��Ƥ��ޤ���">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php print $SITE_URL; ?>functions/service_daiko.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/common/ogp.png">
    <meta property="og:site_name" content="������ԥ����ӥ��ڥ��å��������С���">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">

    </head>

    <body id="pid-functions">

<?php include("../top.php"); ?>

    <div id="wrapper">

        <?php include("../header2.php"); ?>

        <div id="toggle-target">

            <div class="contents">
                <section class="main holder-sml" role="main">

                    <header class="main-header">
                        <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>��ǽ</span></h2>
                        <?php include("subnav.php"); ?>
                    </header>
                    <!-- /.main-header -->

                    <?php include("../topicpath.php"); ?>

                    <p class="ttl"><span class="label">�������</span></p>

                    <section class="section">
                        <h3 class="section_ttl">������ԥ����ӥ�</h3>
                        <div class="section_body">
                            <div class="lede media">
                                <p class="media_image media_image_rev"><img src="../img/functions/img_transfer_server_agency.png?date=190620" alt="�����С���ž��ԥ����ӥ�"></p>
                                <p class="media_body">���ҤΥ��󥸥˥������åդ���Ȥ���Ԥ���<br class="visible-l">��������ԥ����ӥ���</p>
                            </div>
                            <p>
                                ���å��������С��Ǥϡ����ҤΥ��󥸥˥������åդˤ���������ԥ����ӥ��פ򥪥ץ���󥵡��ӥ��Ȥ����󶡤��Ƥ��ޤ���<br>
                                Web�����ȡ�WordPress�ΰ�ž��Ƽﵡǽ��������б����Ƥ��ꡢ ��󥿥륵���С������Ƥ����ˤ�¿����Ƥ����Ѥ��������ޤ���
                            </p>

                        </div>

                    </section>
                    <!-- /.section -->

                    <section class="section">
                        <h3 class="section_ttl" id="daiko_list">��Բ�ǽ�ʺ�Ȱ���</h3>
                        <div class="section_body">
                            <?php /*<aside class="msg msg_notice clearfix w65per mb10">
                                <div class="tips-desc">
                                    <div class="msg_body">
                                        <p><img src="../img/functions/cp_ico_ttl.png"><strong>�ڤ������ᡪ��</strong>�ޤȤ�ƽ�����ꡡ<s><strong>30,000��</strong></s> �� <span class="font-bold bright-yellow font-xl">15,000<span class="font-m">��</span></span><span class="font-xs"> <strong>[��ȴ�������ڡ������]</strong></span></p>
                                    </div>
                                </div>
                            </aside>*/ ?>



                            <table class="table table_striped primary-table-ml mt20">
                                <thead>
                                <tr>
                                    <th class="w20per">����</th>
                                    <th>�������</th>
                                    <th class="w15per">��������</th>
                                    <th class="w20per">����<span class="font-s">(�ǹ�)</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><span class="daiko_osusume">�ڥ������ᡪ�� </span><br>
                                        �ޤȤ�ƽ������</th>
                                    <td>�ʲ���ޤȤ�Ƽ»ܤ��ޤ�
                                        <ul class="ul">
                                            <li>CMS���󥹥ȡ���(���10��ޤ�)</li>
                                            <li>�᡼�륢�ɥ쥹����(100��������Ȥޤ�)</li>
                                            <li>�ȼ��ɥᥤ������(10�ɥᥤ��ޤ�)</li>
                                            <li>���֥ɥᥤ������(20�ɥᥤ��ޤ�)</li>
                                        </ul>
                                    </td>
                                    <td>2�Ķ���</td>
                                    <td class="font-bold">
                                        33,000��
                                    </td>
                                </tr>
                                <tr>
                                    <th>CMS���󥹥ȡ���</th>
                                    <td>WordPress/EC-CUBE/Pukiwiki�Υ��󥹥ȡ���<br>��1��ޤǡ�</td>
                                    <td>2�Ķ���</td>
                                    <td class="font-bold">
                                        5,500��
                                    </td>
                                </tr>
                                <tr>
                                    <th>�᡼�륢�ɥ쥹����</th>
                                    <td>�᡼�륢�������������ɲä��ޤ�<br>��100��������Ȥޤǡ�</td>
                                    <td>2�Ķ���</td>
                                    <td class="font-bold">
                                        5,500��
                                    </td>
                                </tr>
                                <tr>
                                    <th>�ȼ��ɥᥤ������</th>
                                    <td>�ȼ��ɥᥤ��������ɲä��ޤ�<br>��10�ɥᥤ��ޤǡ�</td>
                                    <td>2�Ķ���</td>
                                    <td class="font-bold">
                                        5,500��
                                    </td>
                                </tr>
                                <tr>
                                    <th>���֥ɥᥤ������</th>
                                    <td>���֥ɥᥤ��������ɲä��ޤ�<br>��20�ɥᥤ��ޤǡ�</td>
                                    <td>2�Ķ���</td>
                                    <td class="font-bold">
                                        5,500��
                                    </td>
                                </tr>
                                <tr>
                                    <th>�����С��Υǡ������</th>
                                    <td>���ꤷ���ǥ��쥯�ȥ��۲��Υǡ����������ޤ�</td>
                                    <td>3�Ķ���</td>
                                    <td class="font-bold">
                                        11,000��
                                    </td>
                                </tr>
                                <tr>
                                    <th>�����С���ž</th>
                                    <td>Web�����Ȥ�WordPress�ʤɤΥ����С���ž����ǽ�Ǥ�<br>(1��ޤ�)</td>
                                    <td>5�Ķ���</td>
                                    <td class="font-bold">
                                        33,000��<br>
                                        <span class="font-xs font-normal">
                                            ����ž���륵����1�濫����<br>
                                            <a href="#joken">��Ŭ�Ѿ�濫��</a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>����¾�����С��ѥͥ��������</th>
                                    <td>�����С��ѥͥ���󶡤���Ƶ�ǽ�����������Ԥ��ޤ�</td>
                                    <td>���Ӥ����Ѥ�</td>
                                    <td>���Ӥ����Ѥ�</td>
                                </tr>
                                </tbody>
                            </table>
                            <ul id="joken" class="note-list mb0 font-s">
                                <li>�������ͤ������Ķ��ˤ�äƤϡ�������򾵤뤳�Ȥ��Ǥ��ʤ���礬�������ޤ���</li>
                                <li>�����������ߤ����椷����硢��������Ȥˤ����֤򤤤�������礬�������ޤ���</li>
                            </ul>

                            <p class="tac mt30">
                                <a href="<?php print $XBIZ_URL; ?>" target="_blank" class="btn"><img src="../img/functions/daiko_xbiz_banner.png" class="fluid-sm" alt="ˡ�͸�����󥿥륵���С���XServer�ӥ��ͥ���"></a>
                            </p>

                        </div>

                    </section>
                    <!-- /.section -->


                    <section class="section">
                        <h3 class="section_ttl">������ˡ�ˤĤ���</h3>
                        <div class="section_body">
                            <p>XServer��������ȤΡ�������ԥ����ӥ��ץ�˥塼��ꤴ���Ѥ���������<br>
                                �������ˡ�䡢�����С��ѥͥ��ⵡǽ�Ǥ��б��β��ݤ򤴰��⤤�����ޤ���<br>
                                �ܺ٤ʤ�������ˡ�ˤĤ��Ƥϡ��ޥ˥奢���<a href="../manual/man_order_daiko.php">������ԥ����ӥ��Τ���������</a>�פ򤴻��Ȥ���������</p>
                            <p>�ޤ���������ԥ����ӥ��ˤĤ��Ƥ����������ϥ��ݡ��ȤؤȤ��䤤��碌����������<br>
                                ����Τ�Ϣ����ϡ�<a href="../support/index.php">���䤤��碌</a>�פ򤴻��Ȥ���������</p>
                            <p>�����԰¤򴶤����ݤϡ����ҥ��󥸥˥������åդˤ��μ¤��б�����ǽ�ʡ�������ԥ����ӥ��פ򤼤Ҥ����Ѥ���������</p>
                        </div>
                    </section>
                    <!-- /.section -->

                    <!-- /.caution -->

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