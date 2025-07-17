<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP情報確認手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜FTPホスト名やアカウント名を確認するための手順について記載しています。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">FTP情報確認手順</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">FTP情報確認手順</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.サブFTPアカウント設定を選択</a></li>
                                        <li><a href="#link-previous-a02">2.ドメイン選択</a></li>
                                        <li><a href="#link-previous-a03">3.FTPソフト設定のタブを選択</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <p>下記の手順でFTPソフト設定時に必要なFTP情報を確認できます。</p>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">FTP情報確認手順</h4>
                                <div class="section_body">
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.サブFTPアカウント設定を選択</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「サブFTPアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_add_1.png" alt="サブFTPアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.ドメイン選択</h5>
                                            <div class="box_body">
                                                <p>ドメイン選択画面で[選択する]をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_info_check_2.png" alt="サブFTPアカウントのドメインを選択しているスクリーンショット"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a03">3.FTPソフト設定のタブを選択</h5>
                                            <div class="box_body">
                                                <p>「FTPソフト設定」のタブから、FTPサーバー（ホスト）名とユーザー（アカウント）名の確認ができます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_info_check_3.png" alt="FTPサーバー（ホスト）名とユーザー（アカウント）名を確認しているスクリーンショット"></p>
                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>FTPパスワードについて</h6>
                                                    <div class="msg_body">
                                                        <p class="mb0">FTPパスワードは<em class="font-bold">「サーバーパスワード」と共通</em>ですが、<em class="font-bold">「XServerアカウントのパスワード」とは異なります。</em><br>サーバーパスワードを忘れた場合は、<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">「サーバーパスワード再設定フォーム 」</a>より再設定してください。</p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">FTP情報確認手順</a>
                                        <ol>
                                            <li><a href="#link-a1">1.FTPアカウント設定を選択</a></li>
                                            <li><a href="#link-a2">2.FTPソフト設定のタブを選択</a></li>
                                            <li><a href="#link-a3">3.FTPアカウント情報を確認</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <p>下記の手順でFTPソフト設定時に必要なFTP情報を確認できます。</p>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">FTP情報確認手順</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a1">1.FTPアカウント設定を選択</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「FTPアカウント設定」を選択します。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_1.png?date=2410" alt="FTPアカウント設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a2">2.FTPソフト設定のタブを選択</h5>
                                                    <div class="box_body">
                                                        <p>「FTPソフト設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_2.png?date=2410" alt="FTPアカウントのドメインを選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 class="box_ttl" id="link-a3">3.FTPアカウント情報を確認</h5>
                                                    <div class="box_body">
                                                        <p>FTPサーバー(ホスト)名とユーザー(アカウント)名の確認ができます。</p>
                                                        <p><img class="img" src="../img/manual/man_ftp_info_check_3.png?date=2410" alt="FTPサーバー(ホスト)名とユーザー(アカウント)名を確認しているスクリーンショット"></p>
                                                        <aside class="msg msg_notice mt30">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>FTPパスワードについて</h6>
                                                            <div class="msg_body">
                                                                <p class="mb0">FTPパスワードは<em class="font-bold">「サーバーパスワード」と共通</em>ですが、<em class="font-bold">「XServerアカウントのパスワード」とは異なります。</em><br>サーバーパスワードを忘れた場合は、<a href="https://secure.xserver.ne.jp/xinfo/?action_reissue_server_index=true" target="_blank">「サーバーパスワード再設定フォーム 」</a>より再設定してください。</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!-- /新パネル -->

                    </div>
                </div>

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