<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メール仕様一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜メールに関する仕様の一覧です。「メールボックスの容量上限」や「認証方法」「送信数の上限」について記載しています。">

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
						<li><a href="#link-a">メール関連の仕様一覧</a></li>
					</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">メール関連の仕様一覧</h4>
                    <div class="section_body">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="w30per">機能</th>
                                    <th>仕様</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>メールサーバー</th>
                                    <td>Postfix</td>
                                </tr>
                                <tr>
                                    <th>対応プロトコル</th>
                                    <td>SMTP / POP3 / IMAP がご利用いただけます。また、over SSL にも対応しております。</td>
                                </tr>
                                <tr>
                                    <th>メールアカウント数</th>
                                    <td>
                                        <p>無制限</p>
                                        <p class="note">※一定数を超えるとメールアカウントの追加に制限がかかる場合があります。<br>
                                            詳しくは「<a href="../support/faq/service_mail_setting_upper_limit.php">よくある質問</a>」をご確認ください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールボックスの容量</th>
                                    <td>
                                        <p>
                                            メールアカウントごとに設定が可能です。<br>
                                            メールボックスの容量は1〜20,000MBの範囲で設定することができます。
                                        </p>
                                        <p class="note">※メールボックスの使用量はディスク容量に含まれます。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールサイズの制限</th>
                                    <td>送信可能なメールサイズの目安は1通あたり100MBです。受信について制限はありません。ただし、メールボックスの容量を超えるメールの送受信は行えません。</td>
                                </tr>
                                <tr>
                                    <th>送受信制限</th>
                                    <td><p>全プラン共通の数値となっております。数値は目安のため、多少のオーバーについては許容範囲です。</p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>メール送信数の目安</dt>
                                            <dd>1,500通/時間<br>
                                                15,000通/日</dd>
                                        </dl>
                                        <p class="note">※迷惑メールなどの配信が行われた際は、上記範囲であっても制限をいたします。</p>
                                        <p class="note">※受信数の制限は特に設けていません。<br>
                                        ただし、短時間で大量のメール受信によりサーバーへ影響が出る場合などは制限をいたします。</p></td>
                                </tr>
                                <tr>
                                    <th>送信時の認証方式</th>
                                    <td>
                                        <p>SMTP AUTH</p>
                                        <p class="note">※国内ネットワークからの接続のみ利用可能。SMTP認証の国外アクセス制限を無効にすることで、国外ネットワークからも利用が可能です。</p>
                                        <p class="note">※sv1999までのサーバーでは、国内ネットワークからの接続に限り「POP before SMTP」にも対応しています。</p>
                                        <p class="note">※サーバー番号の確認方法は<a href="../support/faq/service_server_number.php">こちら</a>をご参照ください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ウィルスチェック</th>
                                    <td><p>エックスサーバーで作成したメールアドレスは全て自動的にウィルスチェックが受信時に行われます（※）。ウィルス駆除ソフトには、国際的にも高評価を受けているWithSecure社のプログラムを採用。高確率でウィルスを自動的に駆除することが可能です。</p>
                                        <p class="note">※ウィルスが検知された場合は、自動的にウィルスは削除され、送信者に対してウィルス検知を記載した旨のメールを送信します。</p></td>
                                </tr>
                                <tr>
                                    <th>サブミッションポート</th>
                                    <td>迷惑メール対策「25番ポートブロック」を行っているプロバイダーをご利用の場合に、「ポート25」の代替として「ポート587」を利用することができます。</td>
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