<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>�ե�����ޥ͡�����������ˡ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="��󥿥륵���С��֥��å��������С��פΤ����ѥޥ˥奢��å֥饦������ե��������Ԥ���֥ե�����ޥ͡�����פ��󶡤��뵡ǽ�ΰ�����������ˡ�˴ؤ��뤴����Ǥ���">

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
            
                <h3 class="sub-ttl">�ե�����ޥ͡�����</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">�ܼ�</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">�ե�����ޥ͡������WebFTP�ˤȤ�</a></li>
					<li><a href="#link-b">��������ˡ</a>
						<ul>
							<li><a href="#link-b01">����ǧ�ڡ�reCAPTCHAǧ�ڡˤˤĤ���</a></li>
							<li><a href="#link-b02">�֥����󤹤�ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</a></li>
						</ul>
					</li>
					<li><a href="#link-c">��ǽ����</a></li>
					<li><a href="#link-d">��Ū������</a>
						<ul>
							<li><a href="#link-d01">�ե����/�ե�������ư������</a></li>
							<li><a href="#link-d02">�ե�����򥢥åץ��ɤ�����</a></li>
							<li><a href="#link-d03">�ե�������������ɤ�����</a></li>
							<li><a href="#link-d04">�ե����/�ե�����򿷤�����ꤿ��</a></li>
                            <li><a href="#link-d05">���̤�����</a></li>
                            <li><a href="#link-d06">Ÿ��������</a></li>
						</ul>
					</li>
				</ul>
				</div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">�ե�����ޥ͡������WebFTP�ˤȤ�</h4>
                    <div class="section_body">
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">�ե�����ޥ͡�����</a>�ϡ��֥饦������Ѥ��ƥե�����Υ��åץ��ɡ��������Ԥ�����Υ����ƥ�Ǥ���</p>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">��������ˡ</h4>
                    <div class="section_body">
                        <p>����URL���ե�����ޥ͡�����ؤΥ����󤬲�ǽ�Ǥ���<br>
                            FTP�桼����̾��FTP�ѥ���ɤǥ�����򤪻����������</p>
                        <p><i class="ico ico_square-fill"></i>�ե�����ޥ͡����� ������URL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/</a></p>
                        <p>�ޤ���<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServer���������</a>�إ����󤷡��ڡ��������֤�������� > �����С��פΡ֥ե���������פ���⥢����������ǽ�Ǥ���</p>
					</div>
					<h5 id="link-b01" class="block_ttl">����ǧ�ڡ�reCAPTCHAǧ�ڡˤˤĤ���</h5>
					<div class="section_body">
						<p>
							���Ȥ��δĶ��䥢�������������ˤ�äơ�����ǧ�ڡ�reCAPTCHAǧ�ڡˤ�ɽ��������礬����ޤ���<br>
							������ɽ�����줿���ϡ����̾�����ɽ�������������ƤˤĤ��Ƥ������򤪴ꤤ�������ޤ���
						</p>
						<p>����ǧ��(reCAPTCHAǧ��)������</p>
						<p><img class="img" src="../img/manual/man_tool_server_2.png" alt="reCAPTCHA���̤���"></p>
					</div>

					<h5 id="link-b02" class="block_ttl">�֥����󤹤�ץܥ���򲡤��Ƥ���̤��ڤ��ؤ��ʤ����</h5>
					<div class="section_body">
						<p>
							�ʲ��Υ����Ȥ��Ф���JavaScript��̵���ˤʤäƤ����硢�����󤬤Ǥ��ޤ���</br>
							https://*.xserver.ne.jp</br>
							https://www.google.com</br>
							https://www.gstatic.com</br>
							</br>
							JavaScript��ͭ���ʾ��֤ˤ��Ƥ�����٥ڡ������ɤ߹��ߡ�������򤪻����������
						</p>
					</div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">��ǽ����</h4>
                    <div class="section_body">
                        <p>�����󤹤�ȡ��������̤�ɽ������ޤ���</p>
                        <p><img class="img" src="../img/manual/man_tool_file_1.png?date=200827" alt="�ե�����ޥ͡�����Υ����꡼�󥷥�å�"></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>1.�����ե�����</th>
                                    <td>�������ե�����κ������Ǥ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>2.�����ե����</th>
                                    <td>�������ե�����κ������Ǥ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>3.���ԡ�</th>
                                    <td>�ե�������ե���������򤷡����ԡ�������Ǥ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>4.�Խ�</th>
                                    <td>�ե�������Խ����Ǥ��ޤ���<br>
                                        ɽ������ե�����̾��ʸ�������ɤ��ѹ����뤳�Ȥ��Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>5.���åץ���</th>
                                    <td>���Ȥ���PC��Υե���������򤷡����åץ��ɤ��Ԥ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>6.���������</th>
                                    <td>�ե�����ޥ͡������Υե���������򤷡���������ɤ��Ԥ��ޤ���</td>
                                </tr>
                                <tr>
                                    <th>7.����</th>
                                    <td>�ե�����ޥ͡������Υե�������ե���������򤷡����̥ե����������Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>8.Ÿ��</th>
                                    <td>���̥ե���������򤷡��ե�������ե������Ÿ���Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>9.���</th>
                                    <td>�ե�������ե�����κ�����Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>10.̾���ѹ�</th>
                                    <td>�ե�������ե�����̾���ѹ����Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>11.�ѡ��ߥå�����ѹ�</th>
                                    <td>�ѡ��ߥå������ѹ����Ǥ��ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>12.���ߤΥѥ�</th>
                                    <td>����ɽ������Ƥ���ǥ��쥯�ȥ�Υѥ���ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>13.���ߤΥե��������</th>
                                    <td>�������򤵤�Ƥ���ǥ��쥯�ȥ�Υե����������ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>14.�ĥ꡼</th>
                                    <td>���ƤΥǥ��쥯�ȥ곬�ؤ�ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>15.����</th>
                                    <td>�ѡ��ߥå����ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>16.��������</th>
                                    <td>�������줿������ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>17.������</th>
                                    <td>�ե���������̤�ɽ������ޤ���
                                    </td>
                                </tr>
                                <tr>
                                    <th>18.����</th>
                                    <td>�ե�����μ��बɽ������ޤ���
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">��Ū������</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-d01">�ե����/�ե�������ư������</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">��13.���ߤΥե���������פ�ɽ������Ƥ���ե����/�ե������ɥ�å�������ư�������ե������ǥɥ�åפ��Ƥ���������</p></li>
                                    <li><p class="mb5">�ե����/�ե����뤬�ɥ�åפ����ե�����˰�ư���ޤ���</p></li>
                                </ol>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d02">�ե�����򥢥åץ��ɤ�����</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">��5.���åץ��ɡפ򥯥�å�����ɽ�����줿�ΰ�˥��åץ��ɤ������ե������ɥ�åפ��Ƥ���������</p></li>
                                    <li><p class="mb5">���åץ��ɤ���ե������оݤ����꤬�ʤ���С��֥��åץ��ɡפ򥯥�å����Ƥ���������</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d03">�ե�������������ɤ�����</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">��������ɤ������ե�����򥯥�å�����������֤ˤ��Ƥ���������</p></li>
                                    <li><p class="mb5">��6.��������ɡפ򥯥�å�������������ɤ�¹Ԥ��Ƥ���������</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d04">�ե����/�ե�����򿷤�����ꤿ��</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">��1.�����ե�����ס�2.�����ե�����פ򥯥�å����Ƥ���������</p></li>
                                    <li><p class="mb5">��������ե����/�ե�����̾�����Ϥ����ֺ����פ򥯥�å����Ƥ���������</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d05">���̤�����</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">���̤������ե����/�ե�����򥯥�å���������֤ˤ��Ƥ���������</p></li>
                                    <li><p class="mb5">��7.���̡פ򥯥�å����Ƥ���������</p></li>
                                    <li><p class="mb5">���̸�γ�ĥ�Ҥ����򤷡��ְ��̡פ򥯥�å����Ƥ���������</p></li>
                                </ol>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d06">Ÿ��������</h5>
                            <div class="block_body">
                                <ol class="ol">
                                    <li><p class="mb5">Ÿ�����������̥ե�����򥯥�å���������֤ˤ��Ƥ���������</p></li>
                                    <li><p class="mb5">��8.Ÿ���פ򥯥�å����Ƥ���������</p></li>
                                </ol>
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