<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>XServerアカウントIDを確認したい。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="■XServerアカウントIDとは。XServerアカウントIDは、お客様ごとに発行されているアルファベットと数字を組み合わせたIDです。各種ご契約や登録情報を管理しているXServerアカウントに紐づく情報で、XServerアカウントへのログインや、サポートへのお問い合わせ時に必要となります…">

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
            
                <h3 class="sub-ttl">XServerアカウントIDを確認したい。</h3>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>XServerアカウントIDとは</dt>
                    <dd>
                        <P>
                            XServerアカウントIDは、お客様ごとに発行されているアルファベットと数字を組み合わせたIDです。<br>
                            各種ご契約や登録情報を管理しているXServerアカウントに紐づく情報で、XServerアカウントへのログインや、サポートへのお問い合わせ時に必要となります。
                        </p>

                        <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【XServerアカウントIDの例】</strong>
                                <p>
                                    アルファベット「c」や「p」などから始まる8桁または10桁の文字列。<br>
                                    (例)cfgo123456 / phai123456
                                </p>
                                <p class="note font-s mb0">
                                    ※旧「会員ID」と同一です。
                                </p>
                                <p class="note font-s">
                                    ※ご契約によっては「sa」「xd」などから始まる場合もあります。
                                </p>
                            </li>
                            <li>
                                <strong>【XServerアカウントIDではない情報の例】</strong>
                                <p class="mb0">
                                    「xs*****」のような文字列や、お客様にて指定された文字列(サーバーID)<br>
                                    「sv*****」のような文字列(サーバー番号 / ホスト名)<br>
                                    「@ドメイン名」が含まれる文字列(メールアドレス)
                                </p>
                            </li>
                        </ul>
                    </dd>
                </dl>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>XServerアカウントIDの確認方法</dt>
                    <dd>
                        <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【サポートから届いているメールを確認する】</strong>
                                <p>
                                    当サービスのサポートからお送りしているご契約やお支払いになど関するメールには、XServerアカウントIDが記載されています。<br>
                                    新規お申し込みや、ご契約更新などの際に届いているメールをご確認ください。<br>
                                    送信元のアドレスは「support@xserver.ne.jp」です。
                                </p>
                            </li>
                            <li>
                                <strong>【XServerアカウントへログインをして確認する】</strong>
                                <p>
                                    「<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/">XServerアカウント</a>」へログインし、画面右上のご契約名義をクリックし、「登録情報確認・編集」より確認してください。<br>
                                    XServerアカウントは登録メールアドレスを使用してログインが可能です。
                                </p>
                                <p>
                                    <img class="img" src="../../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集をクリックしているスクリーンショット">
                                </p>
                            </li>
                        </ul>
                    </dd>
                </dl>

                <dl class="dl">
                    <dt><i class="ico ico_square-fill"></i>上記で解決ができない場合</dt>
                    <dd>
                        <p>
                            XServerアカウントへログインができない、登録メールアドレスが分からない、登録メールアドレス宛のメールが確認ができないなどの状況で、XServerアカウントIDの確認が困難な場合は、サポートにて登録情報をお調べいたします。<br>
                            「<a href="../../support/support.php">サポート</a>」のメールのお問い合わせフォーム「新規の方・ログイン情報が不明の方」よりお問い合わせください。
                        </p>
                    </dd>
                </dl>

                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_order_about_id.php">各種IDについて</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_info.php" class="btn btn_gray">「XServerアカウント」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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