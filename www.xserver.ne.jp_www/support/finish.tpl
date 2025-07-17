<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>お問い合わせ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーへお電話・お問い合わせフォームからお問い合わせをするための方法やについて記載しています。お問い合わせフォームも当ウェブページにも受けています。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>
        
        <section class="section">
        	<h3 class="section_ttl">お問い合わせ</h3>
        	<div class="section_body">
            
<?php if ($err) { ?>
                <p class="red">
                    お問合せの受付ができませんでした。<br>
                    お手数ですが時間を空けてもう一度お問合せください。
                </p>
<?php } else { ?>
                <p>
                    お問い合わせを受け付けました。<br /><br />
                    
                    お問い合わせくださいました内容を確認の上、<br />
                    24時間以内に返答いたしております。<br /><br />
                    
                    今しばらくお待ちくださいますようお願いいたします。<br /><br /><br />
                    
                    
                    また、ご返信先メールアドレスへ<br />
                    以下のメールを送信しておりますのでご確認ください。<br /><br />
                    
                    −−−−−−−−−−−−−−−−−−−<br />
                    送信元：support@xserver.ne.jp<br />
                    件名　：【エックスサーバー】お問い合わせを受け付けました<br />
                    −−−−−−−−−−−−−−−−−−−<br /><br />
                    
                    該当のメールがお手元に届いていないという場合、<br />
                    以下の可能性がございますので、お確かめくださいますでしょうか。<br /><br />
                    
                    ・ご返信先として指定されているメールアドレスが有効ではない<br />
                    ・当サービスからのメールが迷惑メールとして削除または隔離されている<br /><br />
                    
                    ご返信先として指定されているメールアドレスが有効ではない場合など<br />
                    メールがお手元に届いていないようでしたら、お手数ではございますが、<br />
                    別の有効なメールアドレスで改めてお問い合わせをお願いいたします。<br /><br />
                </p>
<?php } ?>
                
                <p><a class="btn btn_gray" href="index.php">お問い合わせフォームに戻る<i class="ico ico_refresh"></i></a></p>  
            
            </div>
        </section>
        <!-- /.section -->
        
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