<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>外部のメールアドレスからメーリングリストへメールを配信する方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メーリングリストの「メールの配信前確認」を有効にすると、外部のメールアドレスからもメーリングリストへメール配信ができるようになります。当機能を有効にすると、メーリングリストアドレスへ送信されたメールは直接メンバーへは配信されず、まずは...">

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
            
                <h3 class="sub-ttl">外部のメールアドレスからメーリングリストへメールを配信する方法を教えてください。</h3>

                <p>メーリングリストの「メールの配信前確認」を有効にすると、外部のメールアドレスからもメーリングリストへメール配信ができるようになります。</p>
                <p>当機能を有効にすると、メーリングリストアドレスへ送信されたメールは直接メンバーへは配信されず、まずは管理者メールアドレス宛に承認メールが届きます。</p>
                <p>管理者にて承認をおこなうことでメンバーへメールが配信されます。</p>
                <p class="note font-s">※当機能を有効にすると、メーリングリストへメールを配信される際に、管理者にて都度承認が必要となります。ご注意ください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>管理ツールでの設定</dt>
                    <dd>
                        <ol class="ol ol--margin mb0">
                            <li>メーリングリストの管理ツールへアクセスし、「環境設定」をクリックする</li>
                            <li>「管理者メールアドレス」に、ご希望のメールアドレスを入力する</li>
                            <li>「メールの配信前確認」を【確認する】へ変更する</li>
                            <li>「設定を保存する」をクリックし設定を完了する</li>
                        </ol>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メール配信と承認手順</dt>
                    <dd>
                        <ol class="ol mb0">
                            <li>外部のメールアドレスより配信したいメールをメーリングリストアドレスへ送信する</li>
                            <li>管理者メールアドレス宛に、件名「submission to moderators」の承認メールが届く</li>
                            <li>
                                管理者にて承認メールの内容を確認し問題なければ、メールに記載されている「承認コードの送信先アドレス」に「承認コード」を記載したメールを送信する
                                <ul class="note-list">
                                    <li class="note font-s">※件名は空欄にし、「承認コード」のみメール本文に記載して送信してください。</li>
                                    <li class="note font-s">※配信を許可しない場合、承認コードの送信は不要です。</li>
                                </ul>
                            </li>
                            <li>
                                メーリングリストメンバーへメールが配信される
                                <p class="note font-s">※管理者には、件名「moderated article ***」の配信完了通知メールが届きます。</p>
                            </li>
                        </ol>
                    </dd>
                </dl>

                <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_mailinglist.php">メーリングリストについて</a></p>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailinglist.php" class="btn btn_gray">「メーリングリスト機能」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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