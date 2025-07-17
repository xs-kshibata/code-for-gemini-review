<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ネームサーバーの設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ネームサーバーとは、ドメインの運用サーバーを決定する仕組みとお考えください。エックスサーバーで独自ドメインを使用するには、ネームサーバーをエックスサーバー指定のものへご変更ください。">

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
            
                <h3 class="sub-ttl">ネームサーバーの設定</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ネームサーバーについて</a></li>
                    <li><a href="#link-b">ネームサーバーの変更</a>
                        <ol>
                            <li><a href="#link-b01">1.ネームサーバーを設定したいドメイン名をクリック</a></li>
                            <li><a href="#link-b02">2.「設定変更」をクリック</a></li>
							<li><a href="#link-b03">3.「確認画面へ進む」をクリック</a></li>
                            <li><a href="#link-b04">4.「設定を変更する」をクリック</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">ネームサーバーについて</h4>
                    <div class="section_body">
                    
                        <p>ネームサーバーとは、対象のドメインをどのサーバーで使用するか決定するためのアドレス、とお考えください。</p>
                        <p>エックスサーバーで独自ドメインを使用するためには、ドメインのネームサーバーをエックスサーバー指定のものに変更していただく必要があります。</p>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ネームサーバー1</th>
                                    <td>ns1.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ネームサーバー2</th>
                                    <td>ns2.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ネームサーバー3</th>
                                    <td>ns3.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ネームサーバー4</th>
                                    <td>ns4.xserver.jp</td>
                                </tr>
                                <tr>
                                    <th>ネームサーバー5</th>
                                    <td>ns5.xserver.jp</td>
                                </tr>
                            </tbody>
                        </table>
                        <aside class="msg msg_notice">
                            <h6 class="msg_ttl font-m">
                                <i class="ico ico_circle-arrow-right"></i>
                                【X2サービス統合メンテナンス(2019年8月28日実施)】の対象アカウントについて
                            </h6>
                            <div class="msg_body pl30">
                                <p>
                                    上記メンテナンスの対象アカウントについては、<br>
                                    ネームサーバーを以下に指定してください。
                                </p>
                                <dl class="dl">
                                    <dd>
                                        <ul class="ul">
                                            <li>ネームサーバー1: ns1.xtwo.ne.jp</li>
                                            <li>ネームサーバー2: ns2.xtwo.ne.jp</li>
                                            <li>ネームサーバー3: ns3.xtwo.ne.jp</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ネームサーバーの変更</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.ネームサーバーを設定したいドメイン名をクリック</h6>
                                <div class="box_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「ドメイン」より、ネームサーバーを設定したいドメイン名をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_nameserver_setting_1.png?date=20220216" alt="ネームサーバーを設定したいドメイン名をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「設定変更」をクリック</h6>
                                <div class="box_body">
                                    <p>ネームサーバー設定の「設定変更」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_nameserver_setting_2.png?date=20210609" alt="ネームサーバー設定の設定変更をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.「確認画面へ進む」をクリック</h6>
                                <div class="box_body">
                                    <p>設定をご希望のネームサーバーを選択し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_nameserver_setting_3.png?date=20210609" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                    <ul class="note-list">
                                        <li>※エックスサーバーのネームサーバーへ変更を希望の場合は「XSERVER」を選択してください。</li>
                                        <li>※ネームサーバーの変更が完全に反映されるまでには一定時間必要となります。数時間〜24時間程度を目安としてお待ちください。</li>
                                    </ul>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.「設定を変更する」をクリック</h6>
                                <div class="box_body">
                                    <p>内容を確認の上、「設定を変更する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_domain_nameserver_setting_4.png?date=20210609" alt="設定を変更するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                <section class="section">
                    <div class="pickupFaq">
                        <div class="pickupFaq__title">よくある質問</div>
                        <ul class="pickupFaq__list">
                            <li><a href="../support/faq/transfer_server_name_how_long.php">サーバー移転の際に、ネームサーバーを変更すると、どれくらいで反映しますか？</a></li>
                            <li><a href="../support/faq/domain_multi_setting_which_nameserver.php">他社管理会社でエックスサーバーのネームサーバーを設定したいです。1~5のうち、どのネームサーバーを設定すればいいですか？</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->

                
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