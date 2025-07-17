<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメイン仕様一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ドメイン契約に関する仕様の一覧です。">

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
            
                <h3 class="sub-ttl">仕様一覧</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">ドメイン関連の仕様一覧</a></li>
                    </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">ドメイン関連の仕様一覧</h4>
                    <div class="section_body">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="w20per">機能</th>
                                    <th>仕様</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>マルチドメイン</th>
                                    <td>お客様が所有されているドメインを、１つのサーバーに複数設定できます。<br>
                                    当サービスではサーバー1つに対して無制限に設定が可能です。</td>
                                </tr>
                                <tr>
                                    <th>サブドメイン</th>
                                    <td>exapmle.co.jp というドメインに対し、 test.example.co.jp といったサブドメインを利用できます。</td>
                                </tr>
                                <tr>
                                    <th>Whois情報</th>
                                    <td>インターネットから誰でも参照できる、ドメイン所有者の情報です。<br>
                                    <a href="../support/faq/faq_domain_whois.php">Whoisに関する「よくある質問」</a>
                                    <dl class="dl mt10">
                                        <dt>メールアドレスの有効性確認について</dt>
                                        <dd>ICANNのWhois正確性プログラムに基づき、上位レジストラにて、Whois情報に登録されているメールアドレスが送受信可能かの確認を行います。</dd>
                                    </dl></td>
                                </tr>
                                <tr>
                                    <th>ネームサーバー</th>
                                    <td>
                                        <dl class="dl">
                                            <dt>エックスサーバーのネームサーバー</dt>
                                            <dd>
                                                <ul class="ul mb0">
                                                    <li><em class="font-bold">ネームサーバー1：</em>ns1.xserver.jp</li>
                                                    <li><em class="font-bold">ネームサーバー2：</em>ns2.xserver.jp</li>
                                                    <li><em class="font-bold">ネームサーバー3：</em>ns3.xserver.jp</li>
                                                    <li><em class="font-bold">ネームサーバー4：</em>ns4.xserver.jp</li>
                                                    <li><em class="font-bold">ネームサーバー5：</em>ns5.xserver.jp</li>
                                                </ul>
                                            </dd>
                                        </dl>
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
                                        <p class="note mb0">※当サービスで取得したドメインは、エックスサーバーのネームサーバーが設定された状態です。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>レジストラロック</th>
                                    <td>不正なレジストラ変更を阻止するために、ドメイン管理業者でロックをかけ、レジストラ変更を行わせない対策です。</td>
                                </tr>
                                <tr>
                                    <th>日本語ドメイン</th>
                                    <td>日本語.jp / 日本語.com / 日本語.netなど、日本語でアクセスできるドメイン名です。<br>
                                    当サービスで使用可能です。</td>
                                </tr>
                            </tbody>
                        </table>
                        
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