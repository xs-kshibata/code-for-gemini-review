<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�֥饦������å������� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å֥饦������å����������Ѥ��뤳�Ȥˤ�ꡢ�ƥ֥饦�������˼��������ǡ����ʥ���å���ˤ�����Ѥ��뤳�Ȥ�ɽ��®�٤θ��塢�����ž���̤ηڸ���ޤ�֥֥饦������å�������פΤ�����Ǥ���">

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
            
                <h3 class="sub-ttl">�֥饦������å�������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">�֥饦������å�������Ȥ�</a></li>
                                    <li><a href="#link-previous-b">�֥饦������å���������ڤ��ؤ����</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.�֥֥饦������å�������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-b02">2.����å������������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">.htaccess�ˤ�Expires�إå������ꤵ��Ƥ�����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">�֥饦������å�������Ȥ�</h4>
                                <div class="section_body">
                                    <p>�֥饦��¦�ǤΥ���å������Ѥ�ؼ�����쥹�ݥ󥹥إå�(Expires, Cache-Control�إå�)�ν��Ϥ��ղä��ޤ���Ʊ��ե�����ؤκƥ����������ˤϥ֥饦��¦�Υ���å���ե����뤬���Ѥ��졢ɽ��®�٤θ����ž���̤ηڸ���Ԥ����Ȥ��Ǥ��ޤ���</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h6>
                                        <div class="msg_body">
                                            <p>�ܵ�ǽ�����Ѥˤ����ơ������Τ褦�����ˤ���դ���������</p>
                                            <ul class="ul">
                                                <li>����å��夷���ǡ������ɤ߹��ि�ᡢCSS�ե����롢JavaScript�ե����롢�����ե�����ʤ��оݥǡ����ι�����������ȿ�Ǥ���ʤ���ǽ��������ޤ���<br>
                                                    ���ξ��ϡ��֥饦����Υ���å���ǡ����������Ƥ���ǧ����������</li>
                                                <li>�֥饦����Υ���å���ǡ��������Ѥ��������塢�����С��ؤΥ���������������뤿�ᡢ�����������Ϥʤɤˤ����ƥҥåȿ������������ǽ��������ޤ���</li>
                                                <li>�֥饦���䥵���С�����ƥ�Ĥ����Ƥˤ�äƤϡ�Web�����Ȥ�ɽ���������ʤɡ��ۤʤ�ư��Ȥʤ��礬���ˤ���ޤ���</li>
                                                <li>������ѹ����饵���С������꤬ȿ�Ǥ����ޤǺ���15ʬ���٤�����ޤ���</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <dl class="dl">
                                        <dt>������ˤ�ä���Ϳ�����إå��ˤĤ���</dt>
                                        <dd>
                                            <p>��Ϳ�����إå��ϲ������̤�Ǥ���</p>
                                            <ul class="ul">
                                                <li>Expires�إå�</li>
                                                <li>Cache-Control�إå���max-age��</li>
                                            </ul>
                                            <p>�ƹ��ܤˤĤ��ƺ���7�����ݻ�����褦���ͤ����ꤵ��ޤ���</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->
				
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">�֥饦������å���������ڤ��ؤ����</h4>
                                <div class="section_body">
                                    <div class="serial-box mb10">
                                        <section class="box">
                                                <h6 class="box_ttl" id="link-previous-b01">1.�֥֥饦������å�������פ򥯥�å�</h6>
                                                <div class="box_body">
                                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥֥饦������å�������פ򥯥�å����ޤ���</p>
                                                    <p><img class="img" src="../img/manual/previous/man_server_expires_1.png" alt="�֥饦������å��������˥塼�򥯥�å�"></p>
                                                </div>
                                        </section>
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.����å������������</h6>
                                            <div class="box_body">
                                                <p>����å������ꤹ��ɥᥤ������򤷡����ѹ��������פ����򤷤Ƥ�������������塢���ѹ��פ򥯥�å����Ƥ���������</p>

                                                <p><img class="img" src="../img/manual/previous/man_server_expires_2.png" alt="���ѹ��������פ�����"></p>

                                                <p>�ܵ�ǽ�Ǥϡ�������3�Ĥι��ܤˤ����ƥ���å����ON/OFF�����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>


                                                <table class="table table_responsive">
                                                    <tbody>
                                                        <tr>
                                                            <th class="w30per-m w30per-l">ON[���Ƥ���Ū�ե�����] <br>���侩����</th>
                                                            <td>
                                                                <p>CSS/JavaScript��ޤ����Ƥ���Ū�ե�������Ф��ƥ֥饦������å������꤬ͭ���ˤʤ�ޤ���</p>
                                                                <p class="border border_blue break-all">
                                                                    <b>�оݥե�����(��ĥ��)</b><br>
                                                                    .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>ON[CSS/JavaScript�ʳ�]</th>
                                                            <td>CSS(.css)��JavaScript(.js)�������Ū�ե�������Ф��ƥ֥饦������å������꤬ͭ���ˤʤ�ޤ���</td>
                                                        </tr>
                                                        <tr>
                                                            <th>OFF</th>
                                                            <td>���ƥե�������Ф��ƥ֥饦������å������̵꤬���ˤʤ�ޤ���</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">.htaccess�ˤ�Expires�إå������ꤵ��Ƥ�����</h4>
                                <div class="section_body">
                                    <p style="margin-bottom:0.3em;">.htaccess�ˤƲ���������򤵤�Ƥ�����Ϥ����餬ͥ�褵��ޤ���</p>
                                        <ul class="ul" style="margin-left:2em;">
                                        <li>Cache-Control</li>
                                        <li>Expires</li>
                                        <li>Pragma</li>
                                        <li>Set-Cookie</li>
                                        </ul>
                                    <p>�嵭������򤵤�Ƥ�����֤ǡ��ܵ�ǽ�������ԤäƤ��������Ƥ⡢�ä˻پ����Ϥ���ޤ���<br>�����������Ǥ˥���å�������Ѥ��������Ƥ��뤿�ᡢ�ܵ�ǽ�ˤ��WEB�����Ȥ�ɽ��®�٤����夷�ʤ���礬����ޤ���</p>
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
                                    <li><a href="#link-a">�֥饦������å�������Ȥ�</a></li>
                                    <li><a href="#link-b">�֥饦������å���������ڤ��ؤ����</a>
                                        <ol>
                                            <li><a href="#link-b01">1.�֥֥饦������å�������פ򥯥�å�</a></li>
                                            <li><a href="#link-b02">2.����å������������</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">.htaccess�ˤ�Expires�إå������ꤵ��Ƥ�����</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">�֥饦������å�������Ȥ�</h4>
                                    <p>�֥饦��¦�ǤΥ���å������Ѥ�ؼ�����쥹�ݥ󥹥إå�(Expires, Cache-Control�إå�)�ν��Ϥ��ղä��ޤ���Ʊ��ե�����ؤκƥ����������ˤϥ֥饦��¦�Υ���å���ե����뤬���Ѥ��졢ɽ��®�٤θ����ž���̤ηڸ���Ԥ����Ȥ��Ǥ��ޤ���</p>
                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>����դ�������</h5>
                                        <div class="msg_body">
                                            <p>�ܵ�ǽ�����Ѥˤ����ơ������Τ褦�����ˤ���դ���������</p>
                                            <ul class="ul">
                                                <li>����å��夷���ǡ������ɤ߹��ि�ᡢCSS�ե����롢JavaScript�ե����롢�����ե�����ʤ��оݥǡ����ι�����������ȿ�Ǥ���ʤ���ǽ��������ޤ���<br>
                                                    ���ξ��ϡ��֥饦����Υ���å���ǡ����������Ƥ���ǧ����������</li>
                                                <li>�֥饦����Υ���å���ǡ��������Ѥ��������塢�����С��ؤΥ���������������뤿�ᡢ�����������Ϥʤɤˤ����ƥҥåȿ������������ǽ��������ޤ���</li>
                                                <li>�֥饦���䥵���С�����ƥ�Ĥ����Ƥˤ�äƤϡ�Web�����Ȥ�ɽ���������ʤɡ� �ۤʤ�ư��Ȥʤ��礬���ˤ���ޤ���</li>
                                                <li>������ѹ����饵���С������꤬ȿ�Ǥ����ޤǺ���15ʬ���٤�����ޤ���</li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <dl class="dl">
                                        <dt>������ˤ�ä���Ϳ�����إå��ˤĤ���</dt>
                                        <dd>
                                            <p>��Ϳ�����إå��ϲ������̤�Ǥ���</p>
                                            <ul class="ul">
                                                <li>Expires�إå�</li>
                                                <li>Cache-Control�إå���max-age��</li>
                                            </ul>
                                            <p>�ƹ��ܤˤĤ��ƺ���7�����ݻ�����褦���ͤ����ꤵ��ޤ���</p>
                                        </dd>
                                    </dl>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">�֥饦������å���������ڤ��ؤ����</h4>
                                    <p>�֥饦������å�������ϡ������μ����ѹ����뤳�Ȥ���ǽ�Ǥ���</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. �֥֥饦������å�������פ򥯥�å�</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�˥����󤷡��֥֥饦������å�������פ򥯥�å����ޤ���</p>
                                                <p><img alt="�֥饦������å�������򥯥�å�" class="img" src="../img/manual/man_server_expires_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. ����å������������</h5>
                                            <div class="box_body">
                                                <p>����å������ꤹ��ɥᥤ��Ρ��Խ��פ򥯥�å������֥֥饦������å�������פ����򤷤Ƥ�������������塢�����ꤹ��פ򥯥�å����Ƥ���������</p>
                                                <p><img alt="�����ꤹ��ץܥ���򥯥�å�" class="img" src="../img/manual/man_server_expires_2.png?date=2410"></p>
                                                <p>�ܵ�ǽ�Ǥϡ�������3�Ĥι��ܤˤ����ƥ���å����ON/OFF�����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>ON�����Ƥ���Ū�ե������<br>
                                                            ���侩</th>
                                                        <td>
                                                            <p>CSS/JavaScript��ޤ����Ƥ���Ū�ե�������Ф��ƥ֥饦������å������꤬ͭ���ˤʤ�ޤ���</p>
                                                            <p class="border border_blue break-all"><b>�оݥե�����(��ĥ��)</b><br>
                                                                .css .js .jpeg .jpg .gif .png .svg .svgz .wbmp .webp .ico .jng .bmp .3gpp .3gp .ts .mp4 .mpeg .mpg .mov .webm .flv .m4v .mng .asx .asf .wmv .avi .mid .midi .kar .mp3 .ogg .m4a .ra .woff .woff2 .ttf .otf .eot</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>ON��CSS/JavaScript�ʳ���</th>
                                                        <td>CSS(.css)��JavaScript(.js)�������Ū�ե�������Ф��ƥ֥饦������å������꤬ͭ���ˤʤ�ޤ���</td>
                                                    </tr>
                                                    <tr>
                                                        <th>OFF</th>
                                                        <td>���ƥե�������Ф��ƥ֥饦������å������̵꤬���ˤʤ�ޤ���</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section><!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">.htaccess�ˤ�Expires�إå������ꤵ��Ƥ�����</h4>
                                    <p>.htaccess�ˤƲ���������򤵤�Ƥ�����Ϥ����餬ͥ�褵��ޤ���</p>
                                    <ul class="ul">
                                        <li>Cache-Control</li>
                                        <li>Expires</li>
                                        <li>Pragma</li>
                                        <li>Set-Cookie</li>
                                    </ul>
                                    <p>�嵭������򤵤�Ƥ�����֤ǡ��ܵ�ǽ�������ԤäƤ��������Ƥ⡢�ä˻پ����Ϥ���ޤ��� �����������Ǥ˥���å�������Ѥ��������Ƥ��뤿�ᡢ�ܵ�ǽ�ˤ��WEB�����Ȥ�ɽ��®�٤����夷�ʤ���礬����ޤ���</p>
                                </div>
                            </section><!-- /.section -->

                        </div>
                        <!-- /���ѥͥ�-->
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