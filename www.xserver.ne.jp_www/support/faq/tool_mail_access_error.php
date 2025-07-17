<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールサーバーが当サービスを参照していない場合に表示されるエラーです。以下についてご確認ください。■直近でネームサーバーまたはDNSレコードの設定を変更した。他社サービスからのサーバー移転などで、DNSの設定を変更された場合、反映には数時間から最…">

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
            
                <h3 class="sub-ttl">「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</h3>

                <p>メールサーバーが当サービスを参照していない場合に表示されるエラーです。<br>
                    以下についてご確認ください。
                </p>

				<dl class="dl">
                	<dt><i class="ico ico_square-fill"></i>直近でネームサーバーまたはDNSレコードの設定を変更した</dt>
                    <dd>
                        他社サービスからのサーバー移転などで、DNSの設定を変更された場合、反映には数時間から最大24時間程度かかります。<br>
                        ネームサーバーやDNSレコードの変更直後の場合は、1日程度様子をみたうえで、WEBメールへログインをお試しください。
                    </dd>
                </dl>
				<dl class="dl">
                	<dt><i class="ico ico_square-fill"></i>ネームサーバーまたはDNSレコードの設定に問題がないかを確認する</dt>
                    <dd>
                        <p>
                            当サービスのネームサーバーを設定されている場合は、ネームサーバー情報に相違がないかをご確認ください。<br>
                            Webサイトは他社サービス、メールのみ当サービスで運用されている場合は、MXレコードの設定に誤りがないかをご確認ください。<br>
                            ご利用サーバーのネームサーバーやホスト名などの情報は、サーバーパネルの「サーバー情報」よりご確認が可能です。
                        </p>
                        <p class="note">※ネームサーバーはドメインの管理会社、DNSレコードはネームサーバーの参照先にて確認や変更が必要です。</p>
                    </dd>
                </dl>
				<dl class="dl">
                	<dt><i class="ico ico_square-fill"></i>他社サービスでメールを運用中の場合</dt>
                    <dd>
                        現在、他社サービスでメールを運用されている場合、当サービスではメールの利用はできません。<br>
                        サーバーパネルにてメールアカウントを追加されていても、WEBメールへログインはできません。<br>
                        他社サービスからのサーバー移転などで、DNS変更前に事前設定を行われている場合は、サーバー移転完了後にWEBメールをご利用ください。
                    </dd>
                </dl>

                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_domain_namesever_setting.php">ネームサーバーの設定</a><br>
                <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_domain_dns_setting.php">DNSレコードの編集</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_mail.php" class="btn btn_gray">「WEBメール」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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