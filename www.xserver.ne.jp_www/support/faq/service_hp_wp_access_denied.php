<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「WordPress管理画面へのアクセスが拒否されました」と表示されました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「WordPressセキュリティ設定」により、WordPress管理画面へのログインが制限されている状態です。エラー内容に合わせて、必要な手順をご確認ください。■「短時間に連続したログイン処理が確認されたことが原因として考えられます」と表示された…">

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
            
                <h3 class="sub-ttl">「WordPress管理画面へのアクセスが拒否されました」と表示されました。</h3>

                <p>「WordPressセキュリティ設定」により、WordPress管理画面へのログインが制限されている状態です。<br>
                   エラー内容に合わせて、必要な手順をご確認ください。</p>

                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>「短時間に連続したログイン処理が確認されたことが原因として考えられます」と表示された</dt>
                    <dd>ログイン情報が一致しておらず、複数回ログインを試された場合に表示されるエラーです。<br>
                    ログイン制限は、制限されてから24時間後に自動で解除されます。</dd>
                    <dd>お急ぎの場合は、サーバーパネルの「WordPressセキュリティ設定」より、以下の設定を行ったうえで、WordPress管理画面へのログインをお試しください。</dd>
                    <dd>
                        <ul class="ul mb0">
                            <li><strong>「ログイン試行回数制限設定」を一時的に【OFF】する</strong></li>
                        </ul>
                    </dd>
                    <dd>※ログインができましたら設定を【ON】に戻していただくことをお勧めします。</dd>
                </dl>
                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>「一部のご利用環境からWordPress管理画面へのアクセスが制限されています」と表示された</dt>
                    <dd>日本国外よりWordPress管理画面へログインされた際に表示されるエラーです。<br>
                    セキュリティ強化のため、国外からのWordPress管理画面へのアクセスは、初期状態で制限されています。<br>
                    また、国内からのアクセスであっても、ご利用のインターネット回線などによっては、同様の制限がかかる場合があります。</dd>
                    <dd>こちらが表示された場合は、サーバーパネルの「WordPressセキュリティ設定」より、以下のいずれかの設定を行ったうえで、WordPress管理画面へのログインをお試しください。</dd>
                    <dd>
                        <ul class="ul mb0">
                            <li><strong>「国外アクセス制限設定 > ダッシュボード アクセス制限」にて「ホワイトリスト」を設定する</strong></li>
                            <li><strong>「国外アクセス制限設定 > ダッシュボード アクセス制限」を【OFF】にする</strong></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>上記で解決ができない場合</dt>
                    <dd>WordPressセキュリティ設定を変更しても状況が変わらない場合は、「<a href="../../support/support.php">サポート</a>」のメールのお問い合わせフォームよりお問い合わせください。</dd>
                </dl>
                
                <aside class="msg msg_notice mt30">
                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>サーバーのご契約者様ではない場合</h6>
                    <div class="msg_body">
                        <p>WordPressセキュリティ設定は、サーバーの管理画面である「サーバーパネル」より設定の変更が必要です。<br>
                           サーバーのご契約者様でない場合は、ご契約者様へ設定をご依頼ください。
                        </p>
                    </div>
                </aside>

                <p class="m0">
                    <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_server_wpsecurity.php">WordPressセキュリティ設定</a>
                </p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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