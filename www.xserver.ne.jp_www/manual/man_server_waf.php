<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>WAF���� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å����С���WAF�˴ؤ�������򵭺ܤ��Ƥ��ޤ���">

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
            
                <h3 class="sub-ttl">WAF����</h3>

                <div class="supportTabArea">
                    <p>�ܥޥ˥奢��Ͽ����쥵���С��ѥͥ�˹�碌��2���ऴ�Ѱդ��Ƥ��ޤ���</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>�쥵���С��ѥͥ�</label>
                        <!-- ��ѥͥ� -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">�ܼ�</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">WAF����ˤĤ���</a></li>
                                <li><a href="#link-previous-b">��������ܤˤĤ���</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">XSS��(���������ȥ�����ץƥ���)</a></li>
                                        <li><a href="#link-previous-b02">SQL��(SQL���󥸥��������)</a></li>
                                        <li><a href="#link-previous-b03">�ե����롡(�ե�����������������)</a></li>
                                        <li><a href="#link-previous-b04">�᡼�롡(�᡼�����������)</a></li>
                                        <li><a href="#link-previous-b05">���ޥ�ɡ�(���ޥ�ɥ����������¹�)</a></li>
                                        <li><a href="#link-previous-b06">PHP��(PHP�ؿ����ȼ���)</a></li>
                                    </ol>

                                </li>
                            </ul>
                            </div>
                
                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">WAF����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>WAF��Web���ץꥱ�������ե�������������ˤϡ�Web���ץꥱ���������ȼ������Ѥ������⤫��Web�����Ȥ��ݸ�뤳�Ȥ���ǽ�Ǥ���</p>
                                    <p>���������������饵���Ȥ��ݸ��WordPress�ʤɤ�Web���ץꥱ�������ΰ��������ñ������Ǹ��夹�뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p>
                                        �����С��ѥͥ��������̤�ꡢ�к���ɬ�פʹ��ܤ����ꤹ�뤳�Ȥ���ǽ�Ǥ���<br>
                                        ��WAF������ɲá��ѹ��塢ȿ�ǤޤǺ���1�������٤������礬����ޤ���
                                    </p>
                                    <p><img class="img" src="../img/manual/previous/man_server_waf_1.png" alt=""></p>

                                    <aside class="msg msg_caution mt20">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>��������ɬ�����ɤߤ�������</h5>
                                        <div class="msg_body">
                                            <p>
                                                WAF����Ǥϡ�ͭ���ʲ�ǽ���Τ��륢���������Τ��뵡ǽ���󶡤��ޤ�������ˤ����������������100%������뤳�Ȥ��ݾڤ����ΤǤϤ���ޤ���
                                            </p>
                                            <p>
                                                �����ޤ�Web���ץꥱ�������λ����ȼ������Ф����������������ؤκ���¤�ͽ�ɺ��Ȥʤ�ޤ���<br>
                                                �ȼ������Ф����������������ؤκ���Ū�б��Ȥ��ơ�����ǿ��С������Υ��ץꥱ�����������Ѥ䥻�����ƥ��б���ɬ��ɬ�פȤʤ�ޤ��Τǡ�����ǧ�ξ头���Ѥ���������
                                            </p>
                                        </div>
                                    </aside>

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>���λ���ư��ˤĤ���</h6>
                                        <div class="msg_body">
                                            <p>���Τ��줿���ˤϡ��������������ݤ��쥨�顼�ڡ�����ɽ������ޤ���</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">��������ܤˤĤ���</h4>
                                <div class="section_body">
                                    <p>�ʲ��ι��ܤؤ��к��������ǽ�Ǥ���</p>

                                    <table class="table" id="link-previous-b01">
                                        <thead>
                                            <tr><th colspan="2">XSS��(���������ȥ�����ץƥ���)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>javascript�ʤɤΥ�����ץȥ����������ޤ줿���������ˤĤ��Ƹ��Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���å������ͤ������˼��������ꤷ���å����ϥ�����å���Ԥ�</li>
                                                        <li>CSRF(���������ȥꥯ�����ȥե���������)��Ƨ����Ȥ���</li>
                                                        <li>URL�����������ѼԤ�ե��å��󥰥����Ȥ�ͶƳ����</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th id="man_server_spec_default_document">�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�Ǽ���</li>
                                                        <li>�֥������ƥ�</li>
                                                        <li>¾���軰�Ԥ����Ϥ��������ɽ�����륢�ץꥱ�����������</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b02">
                                        <thead>
                                            <tr><th colspan="2">SQL��(SQL���󥸥��������)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>SQL��ʸ�˳�������ʸ�����������줿���������ˤĤ��Ƹ��Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>SQL��ʸ�����Ѥ���������ʸ������ղä��տޤ��ʤ�SQLʸ��ȯ�Ԥ���</li>
                                                        <li>�ǡ����١��������ϳ�̤��ߤ�</li>
                                                        <li>�ǡ����١����ξ���ν񤭴������˲����ߤ�</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�ǡ����١�����Ͽ��Ԥ������������</li>
                                                        <li>�ǡ����١��������Ѥ������ץꥱ�����������</li>
                                                    </ul>
                                                    <p class="note">�����ѼԤ����Ϥ������Ƥ���SQLʸ���������륢�ץꥱ����������������������оݤȤʤ�ޤ���</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b03">
                                        <thead>
                                            <tr><th colspan="2">�ե����롡(�ե�����������������)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>.htpasswd .htaccess httpd.conf���������С��˴�Ϣ��������ե����뤬�ޤޤ줿�����������Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�ѥ���ɤε��Ҥ��줿�ե�������񤭤�ǧ�ڤγݤ��ä��ڡ�������������������Ԥ�</li>
                                                        <li>�����С�������ե������񤭴����뤳�Ȥǵ�ư�ξ�ü�꤬�Ԥ���</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�������åץ��ɵ�ǽ�դ��Ǽ���</li>
                                                        <li>�ե��������Ԥ��륢�ץꥱ�������</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b04">
                                        <thead>
                                            <tr><th colspan="2">�᡼�롡(�᡼�����������)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>to��cc��bcc���Υ᡼��إå����˴ط�����ʸ�����ޤ�������������Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <p>�᡼�뤬���������ե���������Ѥ����軰�Ԥؤ����̥᡼���������Ԥ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>�᡼����������뵡ǽ�����������ץꥱ�������</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                     <table class="table" id="link-previous-b05">
                                        <thead>
                                            <tr><th colspan="2">���ޥ�ɡ�(���ޥ�ɥ����������¹�)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>kill��ftp��mail��ping��ls�������ޥ�ɤ˴�Ϣ����ʸ���󤬴ޤޤ줿�����������Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���ޥ�ɤ�¹ԤǤ��륹����ץȸ���(PHP,Perl��)���̤��ƥ��ޥ�ɤ������¹Ԥ�����</li>
                                                        <li>�����С��˴ؤ�����פʾ������߸��䡢Ƨ����Ȥ������Ѥ���</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>PHP��Perl���Ǻ������쥳�ޥ�ɼ¹Ԥ����Ѥ��륢�ץꥱ�������</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table" id="link-previous-b06">
                                        <thead>
                                            <tr><th colspan="2">PHP��(PHP�ؿ����ȼ���)</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>
                                                    <p>session���ե��������˴�Ϣ����ؿ��Τۤ��ȼ������ˤʤ��ǽ���ι⤤�ؿ��δޤޤ줿�����������Τ��ޤ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���å�����񤭴���������ڡ����ؤΥ�������������Ը��¤ξ�ü��</li>
                                                        <li>�����ե�����Υ��åץ��ɤ�Ƨ����˥����С��ξ�ü��</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>PHP���Ѥ������ץꥱ�����������</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                    <li><a href="#link-a">WAF����ˤĤ���</a></li>
                                    <li><a href="#link-b">��������ܤˤĤ���</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">�����С��˴ؤ���֤褯��������</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">WAF����ˤĤ���</h4>
                                <div class="section_body">
                                    <p>WAF��Web���ץꥱ�������ե�������������ˤϡ�Web���ץꥱ���������ȼ������Ѥ������⤫��Web�����Ȥ��ݸ�뤳�Ȥ���ǽ�Ǥ���</p>
                                    <p>���������������饵���Ȥ��ݸ��WordPress�ʤɤ�Web���ץꥱ�������ΰ��������ñ������Ǹ��夹�뤳�Ȥ��Ǥ��ޤ���</p>
                                    <p>�����С��ѥͥ��������̤�ꡢ�к���ɬ�פʹ��ܤ����ꤹ�뤳�Ȥ���ǽ�Ǥ���</p>
                                    <p><img alt="WAF����" class="img" src="../img/manual/man_server_waf_1.png?date=2410"></p>
                                    <aside class="msg msg_caution">
                                        <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>��������ɬ�����ɤߤ�������</h5>
                                        <div class="msg_body">
                                            <p>WAF����Ǥϡ�ͭ���ʲ�ǽ���Τ��륢���������Τ��뵡ǽ���󶡤��ޤ�������ˤ����������������100%������뤳�Ȥ��ݾڤ����ΤǤϤ���ޤ���</p>
                                            <p>�����ޤ�Web���ץꥱ�������λ����ȼ������Ф����������������ؤκ���¤�ͽ�ɺ��Ȥʤ�ޤ���<br>
                                                �ȼ������Ф����������������ؤκ���Ū�б��Ȥ��ơ�����ǿ��С������Υ��ץꥱ�����������Ѥ䥻�����ƥ��б���ɬ��ɬ�פȤʤ�ޤ��Τǡ�����ǧ�ξ头���Ѥ���������</p>
                                            <p>��WAF������ɲá��ѹ��塢ȿ�ǤޤǺ���30ʬ���٤������礬����ޤ��ΤǤ��餫���ᤴλ������������</p>
                                        </div>
                                    </aside>
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>���λ���ư��ˤĤ���</h6>
                                        <div class="msg_body">
                                            <p>���Τ��줿���ˤϡ��������������ݤ��쥨�顼�ڡ�����ɽ������ޤ���</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section id="link-b" class="section">
                                <h4 class="section_ttl">��������ܤˤĤ���</h4>
                                <div class="section_body">
                                    <p>�ʲ��ι��ܤؤ��к��������ǽ�Ǥ���</p>
                                    <div class="serial-box">
                                        <table class="table table_use-caption">
                                            <caption>XSS��(���������ȥ�����ץƥ���)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>javascript�ʤɤΥ�����ץȥ����������ޤ줿���������ˤĤ��Ƹ��Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���å������ͤ������˼��������ꤷ���å����ϥ�����å���Ԥ�</li>
                                                        <li>CSRF(���������ȥꥯ�����ȥե���������)��Ƨ����Ȥ���</li>
                                                        <li>URL�����������ѼԤ�ե��å��󥰥����Ȥ�ͶƳ����</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�Ǽ���</li>
                                                        <li>�֥������ƥ�</li>
                                                        <li>¾���軰�Ԥ����Ϥ��������ɽ�����륢�ץꥱ�����������</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>SQL��(SQL���󥸥��������)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>SQL��ʸ�˳�������ʸ�����������줿���������ˤĤ��Ƹ��Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>SQL��ʸ�����Ѥ���������ʸ������ղä��տޤ��ʤ�SQLʸ��ȯ�Ԥ���</li>
                                                        <li>�ǡ����١��������ϳ�̤��ߤ�</li>
                                                        <li>�ǡ����١����ξ���ν񤭴������˲����ߤ�</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�ǡ����١�����Ͽ��Ԥ������������</li>
                                                        <li>�ǡ����١��������Ѥ������ץꥱ�����������</li>
                                                    </ul>
                                                    <p class="note">
                                                        �����ѼԤ����Ϥ������Ƥ���SQLʸ���������륢�ץꥱ����������������������оݤȤʤ�ޤ���</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>�ե����롡(�ե�����������������)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>.htpasswd .htaccess httpd.conf���������С��˴�Ϣ��������ե����뤬�ޤޤ줿�����������Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�ѥ���ɤε��Ҥ��줿�ե�������񤭤�ǧ�ڤγݤ��ä��ڡ�������������������Ԥ�</li>
                                                        <li>���С�������ե������񤭴����뤳�Ȥǵ�ư�ξ�ü�꤬�Ԥ���</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>�������åץ��ɵ�ǽ�դ��Ǽ���</li>
                                                        <li>�ե��������Ԥ��륢�ץꥱ�������</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>�᡼�롡(�᡼�����������)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>to��cc��bcc���Υ᡼��إå����˴ط�����ʸ�����ޤ�������������Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <p>�᡼�뤬���������ե���������Ѥ����軰�Ԥؤ����̥᡼���������Ԥ���</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>�᡼����������뵡ǽ�����������ץꥱ�������</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>���ޥ�ɡ�(���ޥ�ɥ����������¹�)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>kill��ftp��mail��ping��ls�������ޥ�ɤ˴�Ϣ����ʸ���󤬴ޤޤ줿�����������Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���ޥ�ɤ�¹ԤǤ��륹����ץȸ���(PHP,Perl��)���̤��ƥ��ޥ�ɤ������¹Ԥ�����</li>
                                                        <li>�����С��˴ؤ�����פʾ������߸��䡢Ƨ����Ȥ������Ѥ���</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>PHP��Perl���Ǻ������쥳�ޥ�ɼ¹Ԥ����Ѥ��륢�ץꥱ�������</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table_use-caption">
                                            <caption>PHP��(PHP�ؿ����ȼ���)</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">�к�����</th>
                                                <td>session���ե��������˴�Ϣ����ؿ��Τۤ��ȼ������ˤʤ��ǽ���ι⤤�ؿ��δޤޤ줿�����������Τ��ޤ���</td>
                                            </tr>
                                            <tr>
                                                <th>��������������</th>
                                                <td>
                                                    <ul class="ul">
                                                        <li>���å�����񤭴���������ڡ����ؤΥ�������������Ը��¤ξ�ü��</li>
                                                        <li>�����ե�����Υ��åץ��ɤ�Ƨ����˥����С��ξ�ü��</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>�������å�</th>
                                                <td>
                                                    <p>PHP���Ѥ������ץꥱ�����������</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- ���ѥͥ뽪���-->
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