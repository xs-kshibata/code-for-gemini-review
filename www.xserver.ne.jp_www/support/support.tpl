<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>���䤤��碌 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��ؤ����á����䤤��碌�ե����फ�餪�䤤��碌�򤹤뤿�����ˡ�ˤĤ��Ƶ��ܤ��Ƥ��ޤ������䤤��碌�ե�������������֥ڡ������ߤ��Ƥ��ޤ���">

</head>

<script>(function(){
        var w=window,d=document;
        var s="https://app.chatplus.jp/cp.js";
        d["__cp_d"]="https://app.chatplus.jp";
        d["__cp_c"]="43510994_1";
        var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
        a.async=true,a.src=s,m.parentNode.insertBefore(a,m);})();</script>

<body id="pid-support" class="support-contact">

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
            <h3 id="support-before" class="section_ttl">���䤤��碌������</h3>
            <div class="section_body">
                <p>
                    ��������Υɥᥤ�󡢥����Ȥ˴ؤ���ȥ�֥�ξ�硢<br>
                    ���䤤��碌���ˡ�Web�����ȥȥ�֥���Ǥ����Ѥ���������<br>
                    <br>
                    ������URL �ޤ��� �ɥᥤ��̾�����Ϥ�������ǡ���褹�뤿��ο��Ƿ�̤������ޤ���<br>
                    <br>
                    ���꤬��褷�ʤ����ϡ����η�̤��䤤��碌���ˤ����ܤ��������ȡ�<br>
                    ������Τʥ��ݡ��Ȥ���ǽ�ˤʤ�ޤ���
                </p>
                <p class="support-infoSec"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/?request_page=xserver%2Fwebsitetrouble%2Finput" class="btn btn_blue-l">Web�����ȥȥ�֥����</a></p>

            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 id="support-chat" class="section_ttl">����åȤǤΤ��䤤��碌</h3>
            <div class="section_body">
                <p class="mb20">
                    ����������Τ����̡���������Υȥ�֥�ʤɡ�������ꤪ���ڤ˥���åȤǤ��䤤��碌����������<br>
                    ���䤤��碌�κݤˤϡ�<span class="link disp-i"><a href="support_privacy.php" target="_blank">�Ŀ;���μ�갷���ˤĤ���</a><i class="ico ico_new-window"></i></span>�פ��ɤߤ���������ͽ��Ʊ�դξ塢���䤤��碌����������
                </p>

                <div class="chatbtn_box">

                    <!--���ڥ졼��������å�-->
                    <div class="chatbtn">
                        <button class="btn btn_chat_1 support-chat-trigger">���ڥ졼�����˥���åȤ�����</button>
                        <p class="font-s">���ջ��֡�ʿ��10:00���18:00</p>

                        <?php
                        //IE�Τ�ɽ��
                        $ua = $_SERVER['HTTP_USER_AGENT'];
                        if (strstr($ua,'Trident') || strstr($ua,'MSIE')) {
                            echo '<p class="font-s red">�����ߤ��Ȥ��Υ֥饦����Internet Explorer�ˤǤϤ����Ѥ��������ޤ���<br>�ʲ��֥饦���κǿ��ǤǤΤ����Ѥ�侩�������ޤ���<br>��Google Chrome�ס�Microsoft Edge�ס�Mozilla Firefox�ס�Safari��</p>';
                        }
                        ?>

                        <script type="text/javascript">
                            window.zESettings = {
                                analytics: false
                            };
                        </script>

                        <!-- Start of x-support Zendesk Widget script -->
                        <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=fbcf2ffc-9bb7-4ab1-87f7-80644ff6d5a7"> </script>
                        <!-- End of x-support Zendesk Widget script -->
                        <script src="../js/zendesk_chat.js?date=<?php echo time(); ?>"></script>
                    </div>
                    <!--/���ڥ졼��������å�-->

                    <!--����åȥܥå�-->
                    <div class="chatbtn">
                        <a href="javascript:void(0)" onclick="ChatplusScript.openChat()"><button class="btn btn_chat_2">����åȥܥå�<span class="font-s">(��ư���������ӥ�)</span></button></a>
                        <p class="font-s">���ջ��֡�24����365��</p>
                    </div>
                    <!--/����åȥܥå�-->

                </div>

            </div>
        </section>
        <!-- /.section -->

        <section class="section">
            <h3 id="support-mail" class="section_ttl">�᡼��ǤΤ��䤤��碌</h3>

            <div class="section_body">
                <p class="mb20">
                    ����������Τ����̡���������Υȥ�֥�ʤɤˤĤ��ơ��᡼��ǤΥ��ݡ��Ȥ򤴴�˾�����ϡ��ʲ����餪�䤤��碌����������
                </p>

                <div class="chatbtn_box">
                    <div class="chatbtn">
                        <a class="btn btn_blue-xl" href="<?php print $SECURE_URL; ?>xapanel/xserver/contact/input" >XServer��������Ȥ򤪻�������</a>
                    </div>
                    <div class="chatbtn">
                        <a class="btn btn_blue-xl" href="<?php print $SECURE_URL; ?>xapanel/guest/contact/input?service=xserver">���������������������������</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section -->

        <section class="section">
        <h3 id="support-tel" class="section_ttl">�����äǤΤ��䤤��碌</h3>
        <div class="section_body">
            <p>
                ����������Τ����̡���������Υȥ�֥�ʤɡ������ֹ�ޤǤ����ڤˤ��䤤��碌����������<br>
                XServer��������Ȥ򤪻����Τ����ͤϡ����餫�����XServer���������ID�פ򤪼긵�ˤ��Ѱդ���������<br>
                ���䤤��碌�κݤˤϡ�<span class="link disp-i"><a href="support_privacy.php" target="_blank">�Ŀ;���μ�갷���ˤĤ���</a><i class="ico ico_new-window"></i></span>�פ��ɤߤ���������ͽ��Ʊ�դξ塢���䤤��碌����������
            </p>

            <p><strong>�����������������</strong></p>
            <div class="table_window_box js_scrolltip">
            <table class="table_window">
                <thead>
                <tr>
                    <th>������</th>
                    <th>10��</th>
                    <th>11��</th>
                    <th>12��</th>
                    <th>13��</th>
                    <th>14��</th>
                    <th>15��</th>
                    <th>16��</th>
                    <th>17��</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>������</td>
                    <td data-label="10��">��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                </tr>
                <tr>
                    <td>������</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                </tr>
                <tr>
                    <td>������</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                </tr>
                <tr>
                    <td>������</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                </tr>
                <tr>
                    <td>������</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                    <td>��</td>
                </tr>
                </tbody>
            </table>
                <div class="scrollHint">
                    <div class="scrollHint_icon">
                        <i class="ico ico_arrow-right"></i>
                        <span>��������Ǥ��ޤ�</span>
                    </div>
                </div>
            </div>
            <p>
                �������Ū�Ҥ���䤹�������ӡ���<span class="br-sp"></span>���Ĥ�亮�߹礦�����ӡ���<span class="br-sp"></span>���ĺ��߹礦������
            </p>
            <p>
                �����ޤǤ��ܰ¤Ǥ��Τǡ��Ҥ���䤹�������ӤǤ⡢�����ˤ�äƤϷҤ���ʤ����⤢��ޤ���ͽ�ᤴλ������������<br>
                �����ä��Ҥ���ˤ������ϡ������Ǥ򤪤����������ޤ��������֤��֤��Ƥ�����ľ������������������åȤ�᡼��ǤΤ��䤤��碌�����Ѥ���������
            </p>

            <aside class="msg msg_notice">
                <h6 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>���ޡ��ȥե�������å��ץ꤫�餪�䤤��碌�������������ͤ�</h6>
                <p>
                    2024ǯ1��ܤ�ꡢ<br>
                    ���ޡ��ȥե���ˤ�������������å��ץ꤫�餪�䤤��碌�������������ˡ�<br>
                    �����ä��Ĥʤ���ʤ����ޤ��ϲ����������󥹤�������ڤ�Ƥ��ޤ����ݤ��ǧ���Ƥ���ޤ���
                    </p>
                <p>
                    �����������ӥ��Ǥ⸶����Ĵ����Ǥ����������ﲼ�Τߤ�ȯ�����Ƥ�����ݤǤ��Τ�<br>
                    ����������Τ�����ϡ��ۤʤ����å��ץ�����Ѥ����������������������Τ���礻�򤪻����������
                </p>
                <p>
                    �����ؤ򤪤������ޤ�������������ꤤ�������ޤ���
                </p>
            </aside>

            <div class="border border_blue">
                <address class="support-tel-contents mb20">
                    <span class="support-tel-category">����������˴ؤ����������</span>
                    <div class="mt5">
                        <i class="ico ico_phone light-blue"></i>0120-183-002<br class="visible-s">
                        &nbsp;<span class="font-s">���ջ��� ʿ��10:00���18:00</span>
                    </div>
                </address>

                <address class="support-tel-contents">
                    <span class="support-tel-category">��������Τ����ͤϤ�����</span>
                    <div class="mt5">
                        <i class="ico ico_phone light-blue"></i>06-6147-2580<br class="visible-s">
                        &nbsp;<span class="font-s">���ջ��� ʿ��10:00���18:00</span>
                    </div>
                </address>

                <div class="border border_gray mb10">
                    ��������˽��äơ��ޤ��Ϥ��䤤��碌���оݤȤʤ륵���ӥ����ֹ�����򤷤Ƥ���������<br>
                    ���θ塢���䤤��碌���Ƥ��ֹ�����򤷤Ƥ���������
                    <ul class="guide-number mt10">
                        <li><span class="guide-number_ico">1</span><span class="guide-number_space">������</span>��󥿥륵���С����ɥᥤ�󥵡��ӥ�
                            <ul class="guide-sub-number">
                                <li><span class="guide-number_ico">1</span><span class="guide-number_space">������</span>����ʧ���������ӥ�����</li>
                                <li><span class="guide-number_ico">2</span><span class="guide-number_space">������</span>�����С���ž���ɥᥤ��ܴ�</li>
                                <li><span class="guide-number_ico">3</span><span class="guide-number_space">������</span>web�����ȡ�SSL������FTP�������ȥ�֥�</li>
                                <li><span class="guide-number_ico">4</span><span class="guide-number_space">������</span>�᡼��������ȥ�֥�</li>
                                <li><span class="guide-number_ico">5</span><span class="guide-number_space">������</span>����̾��������ץ����ѹ���³��</li>
                                <li><span class="guide-number_ico">6</span><span class="guide-number_space">������</span>XServer�����ȥ������ƥ�������¾��sixcore��������硦sixcore���ѥ����С�</li>
                            </ul>
                        </li>
                        <li><span class="guide-number_ico">2</span><span class="guide-number_space">������</span>XServer VPS��XServer�ɥ饤�֤ʤɡ�����¾�����ӥ�

                            <ul class="guide-sub-number ">
                                <li><span class="guide-number_ico">1</span><span class="guide-number_space">������</span>XServer VPS</li>
                                <li><span class="guide-number_ico">2</span><span class="guide-number_space">������</span>XServer GAMEs</li>
                                <li><span class="guide-number_ico">3</span><span class="guide-number_space">������</span>XServer SNS</li>
                                <li><span class="guide-number_ico">4</span><span class="guide-number_space">������</span>XServer ���饦��PC</li>
                                <li><span class="guide-number_ico">5</span><span class="guide-number_space">������</span>XServer�ɥ饤��</li>
                                <li><span class="guide-number_ico">6</span><span class="guide-number_space">������</span>����¾</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <p class="note font-s mb5">���������������餪�䤤��碌�ξ�硢�ֹ�����򤹤����ˡ֡���(�ư�)���⤷���ϡ֥ȡ���פ򲡤��Ƥ���������</p>
                <p class="note font-s mb5">�����������Ǥ�ܥ������ˤ�����򤬲�ǽ�Ǥ���</p>
                <p class="note font-s mb5">�����䤤��碌�����椷����硢�����ä��Ĥʤ���ˤ����ʤ뤳�Ȥ�����ޤ���<br>���֤ˤ��Ĥʤ��������ޤ��Τǡ����Τޤޤ��Ԥ��ˤʤ뤫�����Ф餯���äƤ��餪����ľ�����������ޤ��褦���ꤤ�������ޤ���</p>
                <p class="note font-s mb0">������Ū��¨�����������ͤ���ϡ��᡼��ǤΤ��䤤��碌�򤪴ꤤ�����礬�������ޤ����ܺ٤ϡ��褯��������<a href="faq/faq_support.php">���ݡ��ȤˤĤ���</a>�פ򤴻��Ȥ���������</p>
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
