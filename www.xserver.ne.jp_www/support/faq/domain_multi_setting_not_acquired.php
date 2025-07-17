<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーパネルにドメイン設定をしましたが、「未取得」と表示されてしまいます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン設定をした際に「未取得」と表示される場合、以下に該当しないかご確認ください。ネームサーバーが「XServer Domainになっている…">

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
            
                <h3 class="sub-ttl">サーバーパネルにドメイン設定をしましたが、「未取得」と表示されてしまいます。</h3>
                
                <p>ドメイン設定をした際に「未取得」と表示される場合、以下に該当しないかご確認ください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ネームサーバーが「XServer Domain」になっている</dt>
                    <dd>ネームサーバーをエックスサーバー指定のものへ変更してください。<br>
                        ネームサーバーの変更方法は、下記マニュアルをご参照ください。<br>
                        マニュアル：<a href="https://www.xserver.ne.jp/manual/man_domain_namesever_setting.php">ネームサーバーの設定</a>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネルに設定をしたのみで、ドメインの取得をしていない</dt>
                    <dd>サーバーパネルにドメイン設定をしたのみでは、ドメインの取得はできません。<br>
                        「XServerアカウント」より新規取得してください。
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>設定したドメイン名が失効している</dt>
                    <dd>ドメイン管理会社にて、ドメイン名のご契約状況についてご確認ください。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>実際に取得しているドメイン名と設定したドメイン名の綴りなどが相違している</dt>
                    <dd>改めて正しいドメイン名にてドメイン設定をしてください</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>設定したドメイン名が取得されたばかりである</dt>
                    <dd>ドメイン名を取得されたばかりの場合は、DNSが反映していないため、「未取得」と表示されます。<br>
                        DNSが反映されると表示は消えますので、そのまま作業を進めていただいて問題ありません。</dd>
                </dl>


                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i><a href="https://lookup.icann.org/en" target="_blank">InterNIC Whois</a>ないし各ドメイン管理会社様が提供するWhois検索ページにてStatus（ステータス）欄に「clientHold」と記載されている</dt>
                    <dd>ドメイン管理会社の判断によりドメインの利用が凍結されています。<br>
                        詳細はドメイン管理会社へご確認ください。</dd>
                </dl>






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