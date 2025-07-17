<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ネームサーバーとは何ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ネームサーバーとは、対象のドメインをどのサーバーで使用するか決定するためのアドレス、とお考えください。エックスサーバーで独自ドメインを使用するためには、ドメインのネームサーバーをエックスサーバー指定のものに変更する…">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">ネームサーバーとは何ですか？</h3>
                
                <p>ネームサーバーとは、対象のドメインをどのサーバーで使用するか決定するためのアドレス、とお考えください。<br>
                エックスサーバーで独自ドメインを使用するためには、ドメインのネームサーバーをエックスサーバー指定のものに変更する必要があります。</p>
                
                <table class="table table_use-caption">
                    <caption>エックスサーバーのネームサーバー</caption>
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
                <p><strong class="yellow">参考：</strong><a href="../../manual/man_domain_namesever_setting.php">ネームサーバーの設定</a></p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi_setting.php" class="btn btn_gray">「ドメイン設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

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