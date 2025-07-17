<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>̵���ȼ�SSL - �ȼ�SSL | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="̵���ȼ�SSL�λ��;ܺ٤Ȥ���������˴ؤ��뤴����Ǥ���">

</head>

<body id="pid-functions">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>��ǽ</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>
        
        <div class="ssl-brand">
            <div class="ssl-brand-header clearfix">
                <div class="ssl-brand-header_r">
                    <img src="../../img/functions/img_logo_letsencrypt.png" alt="Let's Encrypt">
                </div>
                <div class="ssl-brand-header_l">
                    <h3 class="ssl-brand-header_ttl">̵���ȼ�SSL</h3>
                    <div class="ssl-brand-header_auth">
                        <div class="ssl-brand-header_auth_ttl">ǧ�ڥ�����</div>
                        <div class="ssl-brand-header_auth_body"><img src="../../img/functions/img_auth_level_1.png" alt="1">�ɥᥤ��ǧ��</div>
                    </div>
                    <p>̵����̵����(��)�����ѤǤ����ȼ�SSL�Ǥ���<br>
                        ���ݤʼ�³����ʤ���Web���ï�Ǥ��ñ�����Ѥ��Ƥ��������ޤ���</p>
                    <p>����������SSL�����С�����������Ҥ��б������ӥ��ǤΤ������ǽ�Ǥ����ޤ������Ҥ��б������ӥ��ʳ��Ǽ�������������Ϥ����Ѥ��������ޤ���</p>
                </div>
            </div>
            
        </div>

        <section class="section">
            <a id="spec" name="spec"></a>
            <h3 class="section_ttl">���Ͱ���</h3>
            <div class="section_body">

                <table class="table">
                    <tr>
                        <th class="w30per">�б������ӥ�</th>
                        <td>���å��������С���XServer�ӥ��ͥ���XServer����å�</td>
                    </tr>
                    <tr>
                        <th>�б������С��ץ��</th>
                        <td>���ץ���б�</td>
                    </tr>
                    <tr>
                        <th>�֥���̾</th>
                        <td>Let's Encrypt</td>
                    </tr>
                    <tr>
                        <th>��ͭ�Գ�ǧ��ˡ</th>
                        <td>��ưǧ��(DNSǧ�ڡ�Webǧ��)</td>
                    </tr>
                    <tr>
                        <th>ǧ�ڥ�����</th>
                        <td>�ɥᥤ��ǧ�ڷ�</td>
                    </tr>
                    <tr>
                        <th>��ȼº߾���</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>ȯ�Ԥ��פ�������</th>
                        <td>¨����1��</td>
                    </tr>
                    <tr>
                        <th>ͭ������</th>
                        <td>90�� ����ư����</td>
                    </tr>
                    <tr>
                        <th>�������ƥ�����</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>�����ȥ�����</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>��www.�פ���/�ʤ� 2Way����</th>
                        <td colspan="5">
                        <i class="imgico imgico_2way mb10"></i>
                        <b>��www.�פ���/�ʤ����ɤ����URL�Ǥ�SSL��³����ǽ�Ǥ���</b><br>
                        <span class="font-normal">���������ߤκݤξܤ������ϡ������򤴻��Ȥ���������</span>
                        <p class="mt5"><a class="btn btn_white btn_white_border" href="#2way">2way���ѤˤĤ���<i class="ico ico_chevron-right"></i></a></p>
                        </td>
                    </tr>
                    <tr>
                        <th>�б��֥饦�������ޡ��ȥե���</th>
                        <td>
                        Internet Explorer��Windows��<br>
                        Microsoft Edge��Windows10��<br>
                        Google Chrome��Windows��Mac OS X��Linux��Android��iOS��<br>
                        Mozilla Firefox��Windows��Mac OS X��Linux��Android��iOS��<br>
                        Apple Safari��Mac OS X��iOS��<br>
                        </td>
                    </tr>
                </table>
                <!-- /.ssl-table -->
                
                <p class="note mb0">����������SSL�����С�����������Ҥ��б������ӥ��ǤΤ������ǽ�Ǥ����ޤ������Ҥ��б������ӥ��ʳ��Ǽ�������������Ϥ����Ѥ��������ޤ���</p>
                <p class="note mb30">���֥饦����OS���б������ϡ����ߤ����Τʾ����Ȥϰۤʤ��ǽ��������ޤ��Τǡ��ܺ٤��󶡸��Υ����Ȥ򤴳�ǧ����������</p>
                
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">
            <h4 id="2way" class="section_ttl">��2Way���ѡפˤĤ���</h4>
            <div class="section_body">
                <p>̵���ȼ�SSL��Subject Alternative Names(SANs)�ˤ�륳���͡���(CN)����̾��ǽ�����Ѥ�������www����/�ʤ��פ������URL�Ǥ�SSL�̿�����ǽ�ʡ�2Way���ѡפ��б����Ƥ��ޤ���</p>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="caution">
            <h3 class="caution_ttl"><i class="ico ico_exclamation-fill"></i>��������������ɬ�����ɤߤ���������</h3>
            <div class="caution_body">
                <section class="caution_item">
                    <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>�����Ѥ��ϰ�</h4>
                    <div class="caution_item_body">
                        <p>
                            �ܥ����ӥ��ϡ����ѼԤ��������С��Ǳ��Ѥ��Ƥ����ȼ��ɥᥤ��䡢���֥ɥᥤ������Ѥ���SSL��³���󶡤����ΤǤ���<br>
                            �������С��ʳ��γ��������С��ǤϤ����Ѥ����������Ȥ��Ǥ��ޤ���
                        </p>
                        <ul class="note-list font-s">
                            <li>���ܥ����ӥ��ʳ��Ǽ������줿SSL�����С�������ϡ��������С��ˤƤ����Ѥ�����������(�����롢SSL�����С�������λ��������б�)�ϤǤ��ޤ���</li>
                            <li>��64ʸ���ʾ�Υ����͡���Ϥ��������ߤǤ��ޤ���</li>
                        </ul>
                    </div>
                </section>
                <!-- /.caution_item -->

                <section class="caution_item">
                    <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>ͭ�����¤ˤĤ���</h4>
                    <div class="caution_item_body">
                        <p>����SSL������ȯ�Ԥ��줿����ꡢ90���֤��в᤹��ޤǤ�ͭ�����¤Ȥʤ�ޤ���<br>
                        �ʤ����������ͭ�����¤���30�����˼�ư�����򤷤ޤ���</p>
                    </div>
                </section>
                <!-- /.caution_item -->
            </div>
        </section>
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub --> 
    
</div>
<!-- /.contents -->
    
<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper --> 

<?php include("../../bottom.php"); ?>