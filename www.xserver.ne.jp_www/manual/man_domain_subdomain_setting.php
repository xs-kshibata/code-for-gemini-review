<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>���֥ɥᥤ������ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å��å��������С��ǥ��֥ɥᥤ������Ѥ���ݤ�ɬ�פȤʤ륵���С��ѥͥ�Ρ֥��֥ɥᥤ������׵�ǽ�˴ؤ��뤴����Ǥ������å��������С��Ǥϥ��֥ɥᥤ���̵���¤��ɲä��뤳�Ȥ���ǽ�Ǥ���">

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
            
                <h3 class="sub-ttl">���֥ɥᥤ������</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">

                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">�ܼ�</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">���֥ɥᥤ������</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.�֥��֥ɥᥤ������פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a02">2.�֥��֥ɥᥤ�������ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a03">3.�������Ƥ��ǧ�������ɲä���פ򥯥�å�</a></li>
                                            <li><a href="#link-previous-a04">4.���֥ɥᥤ��������ɲô�λ</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-previous-a05">̵���ȼ�SSL�����ѤǤ��ʤ����</a></li>
                                            <li><a href="#link-previous-a06">�ե�����Υ��åץ�����ˤĤ���</a></li>
                                            <li><a href="#link-previous-a07">���֥ɥᥤ��Υ��������Τߤ���Ĥ��ơ��ɥᥤ��ǤΥ���������ػߤ�����ˡ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">�ɥᥤ��˴ؤ���֤褯��������</a></li>
                            </ul>
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">���֥ɥᥤ������</h4>
                                <div class="section_body">
                                    <p>�ɥᥤ��������ɲúѤߤ��ȼ��ɥᥤ��̾���Ф��ơ����֥ɥᥤ������ꤹ�뤳�Ȥ���ǽ�Ǥ���<br>
                                        ������ɥᥤ��̾�ʥ����С�ID.xsrv.jp�ˤˤϥ��֥ɥᥤ����ɲäǤ��ޤ���</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.�֥��֥ɥᥤ������פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥��֥ɥᥤ������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_1.png" alt="���֥ɥᥤ��������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.�֥��֥ɥᥤ�������ɲáפ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>������ɲä��������֥ɥᥤ������Ϥ����ɥ�����ȥ롼�����򤷤ơ��ֳ�ǧ���̤ؿʤ�פ򥯥�å����Ƥ���������</p>
                                                <p>�ɥ�����ȥ롼�ȤȤϥե�����Υ��åץ�����Τ��ȤǤ���<br>
                                                    �ܺ٤ϡ���<a href="#upload_dir">�ե�����Υ��åץ�����ˤĤ���</a>�פ򤴻��Ȥ���������</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_2.png" alt="���֥ɥᥤ�������ɲäΥ����꡼�󥷥�å�"></p>
                                                <p>
                                                    ̵���ȼ�SSL������ɲä����פʾ��ϡ���̵���ȼ�SSL�����Ѥ���פΥ����å��򳰤��Ƥ���������
                                                </p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a03">3.�������Ƥ��ǧ�������ɲä���פ򥯥�å�</h6>
                                            <div class="box_body">
                                                <p>
                                                    ����³�������Ƥ��ǧ���ޤ���<br>
                                                    ���ɲä���ץܥ���򥯥�å����뤳�Ȥˤ�ꡢ���֥ɥᥤ������ȡ�̵���ȼ�SSL�����꤬�ɲä���ޤ���
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_3.png" alt="�������Ƥ��ǧ������̤Υ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a04">4.���֥ɥᥤ��������ɲô�λ</h5>
                                            <div class="box_body">
                                                <p>�֥��֥ɥᥤ��������ɲä�λ���ޤ������פ�ɽ������ޤ����顢�ɥᥤ��������ɲäϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/previous/man_domain_subdomain_setting_4.png" alt="���괰λ���̤Υ����꡼�󥷥�å�"></p>
                                                <p>
                                                    �����С��������������ɲ����ꤷ���ɥᥤ�����ѤΥե������������ޤ���<br>
                                                    �ܺ٤ϡ���<a href="#upload_dir">�ե�����Υ��åץ�����ˤĤ���</a>�פ򤴻��Ȥ���������
                                                </p>
                                                <p>�ʤ��������ѥ����С��˥��֥ɥᥤ�����꤬ȿ�Ǥ����ޤǤˤϺ����1�������٤�����ޤ���</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a05">̵���ȼ�SSL�����ѤǤ��ʤ����</h5>
                                        <div class="block_body">
                                            <p>
                                                ������ɲä����оݥɥᥤ��α��Ѿ����ˤ�ꡢ̵���ȼ�SSL�����ѤǤ��ʤ����Ȥ�����ޤ���<br>
                                                ���ξ�硢�ɥᥤ��������ɲô�λ������ΤΡ�̵���ȼ�SSL���꤬�ɲäǤ��ʤ��ä��ݤΥ�å�������ɽ�����ޤ���
                                            </p>
                                            <p>
                                                �ʤ��������С��ѥͥ����SSL����פˤơ�̵���ȼ�SSL��������ɲä��뤳�Ȥ��Ǥ��ޤ���<br>
                                                �ܺ٤ϡ��ޥ˥奢���<a href="man_server_ssl.php">̵���ȼ�SSL����</a>�פ򤴻��Ȥ���������
                                            </p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section id="upload_dir" class="block">
                                        <h5 class="block_ttl" id="link-previous-a06">�ե�����Υ��åץ�����ˤĤ���</h5>
                                        <div class="block_body">
                                            <p>���֥ɥᥤ��������ɲä�Ԥ��ȡ�FTP�����С���Ρ�public_html�ץե�����ʲ��˥��֥ɥᥤ��̾�Υե��������������ޤ���<br>
                                            ���֥ɥᥤ��Ǹ�������륵���ȥǡ����ϲ����򻲹ͤΤ������ե�����Υ��åץ��ɤ򤪻����������</p>

                                            <table class="table break-word">
                                                <thead>
                                                    <tr>
                                                        <th>���֥ɥᥤ��</th>
                                                        <th>���åץ�����</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>abc.example.com</th>
                                                        <td>/example.com/public_html/abc.example.com<br>
                                                            ��/example.com/public_html/abc��</td>
                                                    </tr>
                                                    <tr>
                                                        <th>www.abc.example.com</th>
                                                        <td>/example.com/public_html/www.abc</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-a07">���֥ɥᥤ��Υ��������Τߤ���Ĥ��ơ��ɥᥤ��ǤΥ���������ػߤ�����ˡ</h5>
                                        <div class="block_body">
                                            <p>http://abc.example.jp/ �ξ�硢�̾� http://example.jp/abc.example.jp/��http://example.jp/abc/�ˤǤ⥢����������ǽ�Ȥʤ�ޤ���</p>
                                            <p>.htaccess �˲����Ρֵ������ơפ򵭺ܤ������֥ɥᥤ��ե�������abc.example.com�ޤ���abc�ե�����ˤ����֤��뤳�Ȥˤ�ꡢhttp://example.jp/abc.example.jp/��http://example.jp/abc/�ˤǤΥ�����������ݤ��뤳�Ȥ��ǽ�Ǥ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>.htaccess�ե������������</dt>
                                                <dd>/example.jp/public_html/abc.example.com/��/example.jp/public_html/abc/��</dd>
                                                <dt><i class="ico ico_square-fill"></i>�������ơʲ����� abc.example.jp �ǤΥ��������Τߵ��Ĥ��롢�Ȥ������ƤǤ�����</dt>
                                                <dd>
                                                    <pre class="code">
SetEnvIf Host "^abc.example.jp$" host
order deny,allow
deny from all
allow from env=host</pre>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->
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
                                    <li><a href="#link-a">���֥ɥᥤ������</a>
                                        <ol>
                                            <li><a href="#link-a01">1.�֥��֥ɥᥤ������פ򥯥�å�</a></li>
                                            <li><a href="#link-a02">2.�֥��֥ɥᥤ����ɲáפ򥯥�å�</a></li>
                                            <li><a href="#link-a03">3.���Ƥ����Ϥ������ɲä���פ򥯥�å�</a></li>
                                            <li><a href="#link-a04">4.���֥ɥᥤ��������ɲô�λ</a></li>
                                        </ol>
                                        <ul>
                                            <li><a href="#link-b">̵���ȼ�SSL�����ѤǤ��ʤ����</a></li>
                                            <li><a href="#link-c">�ե�����Υ��åץ�����ˤĤ���</a></li>
                                            <li><a href="#link-d">���֥ɥᥤ��Υ��������Τߤ���Ĥ��ơ��ɥᥤ��ǤΥ���������ػߤ�����ˡ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">���֥ɥᥤ������</h4>

                                <div class="section__body">
                                    <p>�ɥᥤ��������ɲúѤߤ��ȼ��ɥᥤ��̾���Ф��ơ����֥ɥᥤ������ꤹ�뤳�Ȥ���ǽ�Ǥ���<br>
                                        ������ɥᥤ��̾(�����С�ID.xsrv.jp)�ˤϥ��֥ɥᥤ����ɲäǤ��ޤ���</p>
                                    <div class="serial-box mb40">
                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a01">1.�֥��֥ɥᥤ������פ򥯥�å�</h4>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">�����С��ѥͥ�</a>�إ����󤷡��֥��֥ɥᥤ������פ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_1.png?date=2410" alt="���֥ɥᥤ��������̤�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a02">2.�֥��֥ɥᥤ����ɲáפ򥯥�å�</h4>
                                            <div class="box_body">
                                                <p>�֥��֥ɥᥤ����ɲáפ򥯥�å����Ƥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_2.png?date=2410" alt="���֥ɥᥤ�������ɲäΥ����꡼�󥷥�å�"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a03">3.���Ƥ����Ϥ������ɲä���פ򥯥�å�</h4>
                                            <div class="box_body">
                                                <p>������ɲä��������֥ɥᥤ������Ϥ����ɥ�����ȥ롼�����򤷤ơ����ɲä���פ򥯥�å����Ƥ���������</p>
                                                <p>�ɥ�����ȥ롼�ȤȤϥե�����Υ��åץ�����Τ��ȤǤ���<br>
                                                    �ܺ٤ϡ���<a href="#link-c">�ե�����Υ��åץ�����ˤĤ���</a>�פ򤴻��Ȥ���������</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_3.png?date=2410" alt="���֥ɥᥤ�������ɲäΥ����꡼�󥷥�å�"></p>
                                                <p>̵���ȼ�SSL������ɲä����פʾ��ϡ���̵���ȼ�SSL�����Ѥ���פΥ����å��򳰤��Ƥ���������</p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h4 class="box_ttl" id="link-a04">4.���֥ɥᥤ��������ɲô�λ</h4>
                                            <div class="box_body">
                                                <p>�ʾ�ǥɥᥤ��������ɲäϴ�λ�Ǥ���</p>
                                                <p><img class="img" src="../img/manual/man_domain_subdomain_setting_4.png?date=2410" alt="���괰λ���̤Υ����꡼�󥷥�å�"></p>
                                                <p>
                                                    �����С��������������ɲ����ꤷ���ɥᥤ�����ѤΥե������������ޤ���<br>
                                                    �ܺ٤ϡ���<a href="#link-c">�ե�����Υ��åץ�����ˤĤ���</a>�פ򤴻��Ȥ���������
                                                </p>
                                                <p>�ʤ��������ѥ����С��˥��֥ɥᥤ�����꤬ȿ�Ǥ����ޤ�Ⱦ�����٤������礬����ޤ���</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-b">̵���ȼ�SSL�����ѤǤ��ʤ����</h5>
                                        <div class="block_body">
                                            <p>
                                                ������ɲä����оݥɥᥤ��α��Ѿ����ˤ�ꡢ̵���ȼ�SSL�����ѤǤ��ʤ����Ȥ�����ޤ���<br>
                                                ���ξ�硢�ɥᥤ��������ɲô�λ������ΤΡ�̵���ȼ�SSL���꤬�ɲäǤ��ʤ��ä��ݤΥ�å�������ɽ�����ޤ���
                                            </p>
                                            <p>
                                                �ʤ��������С��ѥͥ����SSL����פˤơ�̵���ȼ�SSL��������ɲä��뤳�Ȥ��Ǥ��ޤ���<br>
                                                �ܺ٤ϡ��ޥ˥奢���<a href="man_server_ssl.php">̵���ȼ�SSL����</a>�פ򤴻��Ȥ���������
                                            </p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 id="link-c" class="block_ttl">�ե�����Υ��åץ�����ˤĤ���</h5>
                                        <div class="block_body">
                                            <p>
                                                ���֥ɥᥤ��������ɲä�Ԥ��ȡ�FTP�����С���Ρ�public_html�ץե�����ʲ��˥��֥ɥᥤ��̾�Υե��������������ޤ���<br>
                                                ���֥ɥᥤ��Ǹ�������륵���ȥǡ����ϲ����򻲹ͤΤ������ե�����Υ��åץ��ɤ򤪻����������
                                            </p>

                                            <table class="table break-word">
                                                <thead>
                                                <tr>
                                                    <th>���֥ɥᥤ��</th>
                                                    <th>���åץ�����</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>abc.example.com</th>
                                                    <td>/example.com/public_html/abc.example.com<br>
                                                        (/example.com/public_html/abc)</td>
                                                </tr>
                                                <tr>
                                                    <th>www.abc.example.com</th>
                                                    <td>/example.com/public_html/www.abc</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-d">���֥ɥᥤ��Υ��������Τߤ���Ĥ��ơ��ɥᥤ��ǤΥ���������ػߤ�����ˡ</h5>
                                        <div class="block_body">
                                            <p>http://abc.example.jp/ �ξ�硢�̾� http://example.jp/abc.example.jp/(http://example.jp/abc/)�Ǥ⥢����������ǽ�Ȥʤ�ޤ���</p>
                                            <p>.htaccess �˲����Ρֵ������ơפ򵭺ܤ������֥ɥᥤ��ե������(abc�ե����)�����֤��뤳�Ȥˤ�ꡢhttp://example.jp/abc/ �ǤΥ�����������ݤ��뤳�Ȥ��ǽ�Ǥ���</p>
                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>.htaccess�ե������������</dt>
                                                <dd>/example.jp/public_html/abc/</dd>
                                                <dt><i class="ico ico_square-fill"></i>��������(������ abc.example.jp �ǤΥ��������Τߵ��Ĥ��롢�Ȥ������ƤǤ���)</dt>
                                                <dd>
                                                <pre class="code">SetEnvIf Host "^abc.example.jp$" host
order deny,allow
deny from all
allow from env=host</pre>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

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