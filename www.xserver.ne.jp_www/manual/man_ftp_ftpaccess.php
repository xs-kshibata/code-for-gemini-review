<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>.ftpaccessについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ディレクトリ単位でFTP接続のアクセス可否を変更できる「.ftpaccess」ファイルに関するご案内です。">

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
            
                <h3 class="sub-ttl">.ftpaccess</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">.ftpaccess</a></li>
					<li><a href="#link-b">.ftpaccessとは</a></li>
					<li><a href="#link-c">記述について</a>
						<ul>
							<li><a href="#link-c01">説明</a></li>
						</ul>
					</li>
					<li><a href="#link-d">「.ftpaccess」ファイルが影響するフォルダについて</a></li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">.ftpaccess</h4>
                    <div class="section_body">
                        <p>エックスサーバーでは、「.ftpaccess」ファイルを設置することができます。<br>
                        「.ftpaccess」を使用し、IPアドレスの指定等を行うことで、サーバーへのFTP接続を制限することできます。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">.ftpaccessとは</h4>
                    <div class="section_body">
                        <p>フォルダ単位で、FTPに関する設定を行うことが出来る設定ファイルです。<br>
                        「.ftpaccess」という名前のファイル名に指定の記述をすることにより、FTP接続元の制限などを 行うことができます。</p>
                        <p>例えば、自分のIPアドレスを指定し、そのIPアドレス以外からのFTP接続を拒否する、といった設定を行うことが可能です。<br>
                        「.ftpaccess」は、設置フォルダ以下の領域にその影響が及びます。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">記述について</h4>
                    <div class="section_body">
                        <p>特定のIPアドレスからのFTP接続のみを許可する記述例</p>
                        <pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.0
&lt;/Limit&gt;</pre>
                        <p>上記設定により、特定の接続元(IPアドレスが「192.0.2.0」)からのみFTP接続を許可することが可能となります。<br>
                        (他のIPアドレスの場合はFTP接続自体ができません。)</p>
                        <p class="note">※記述例のIPアドレス(192.0.2.0)は例として記載しています。</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">説明</h5>
                            <div class="block_body">
                                <div class="border border_gray">
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Order Allow,Deny</p>
                                    <p>許可、拒否の優先順位を指定しています。</p>
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Deny from all</p>
                                    <p>「all」を指定し全てのFTP接続を拒否します。</p>
                                    <p class="mb5 font-bold"><i class="ico ico_circle base-color mr5"></i>Allow from 192.0.2.0</p>
                                    <p class="mb0">指定IPアドレスからの接続を許可します。</p>
                                </div>
                                <p>つまり、一度全てのFTPアクセスを拒否した上で、指定IPからの接続のみ許可する、という処理となっています。</p>
                                <p>「Allow from」の記述を追加することで、接続元を許可するIPアドレスを追加することもできます。</p>
                                <pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.0
Allow from ***.*.*.*
Allow from ***.*.*.*
Allow from ***.*.*.*
&lt;/Limit&gt;</pre>
                                <p>4ブロック目の数字を記載せず、3ブロックまでのIPアドレスを記述することで、指定部分が一致するIPアドレスをまとめて指定することもできます。
(最後は「.」(ドット)で終わっています。)</p>
<pre class="code">&lt;Limit ALL&gt;
Order Allow, Deny
Deny from all
Allow from 192.0.2.
&lt;/Limit&gt;</pre>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">「.ftpaccess」ファイルが影響するフォルダについて</h4>
                    <div class="section_body">
                        <p>「.ftpaccess」は、設置されたフォルダ以下にその影響が及びます。</p>
                        <p>例えば、ホームディレクトリ「/home/サーバーID/」に設置した場合は、サーバーアカウント全体に「.ftpaccess」での設定が影響します。</p>
                        <p>また、下記のようなドキュメントルート(公開フォルダ)に設置した場合は、public_html以下に「.ftpaccess」の影響が及びます。</p>
                        <div class="border border_gray font-bold">
                            /home/サーバーID/ドメイン名/public_html/.ftpaccess
                        </div>
                        <p>このようにフォルダを指定して「.ftpaccess」を設置し、FTP制限の影響が及ぶ範囲を使い分ける、といったことが可能です。</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>追加FTPアカウントに対する制限方法とご注意</dt>
                            <dd>
                                <p>追加FTPアカウントの「ディレクトリ」設定でFTPへのログインディレクトリを設定されている場合、該当するディレクトリに「.ftpaccess」を設置する必要があります。</p>
                                <p>「<em class="font-bold">/home/サーバーID/ドメイン名/</em>」というように、ディレクトリを個別に指定されている場合、「.ftpaccess」を同一ディレクトリへと設置してください。</p>
                                <p>例えば、「<em class="font-bold">/home/xsample/example.com/</em>」を「ディレクトリ」に指定されている場合に、.ftpaccessを適用するためには以下のように設置する必要があります。</p>
                                <p><img class="flex" src="../img/manual/man_ftp_ftpaccess_1.png" alt=".ftpaccesを同一ディレクトリに設置してください"></p>
                            </dd>
                        </dl>
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>設置の際のご注意</h6>
                            <div class="msg_body">
                                <p>誤った記述で「.ftpaccess」の設置を行われますと、FTP接続自体ができなくなる場合があります。<br>
                                そのため、必ず「.ftpaccess」の仕様や記述内容を理解した上で、お客様の責任で設置するようにしてください。</p>
                                <p>「.ftpaccess」の記述方法の精査についてはサポート対象外とさせていただいております。</p>
                                <p>IPアドレスを指定する際は、そのIPアドレスが固定IPアドレスかどうかをご確認ください。<br>
                                お客様のご利用のプロバイダによってはIPアドレスが変動する場合があります。<br>
                                その場合、固定のIPアドレスを指定することで、接続自体が出来なくなってしまうケースがあります。</p>
                                <p>どうしても「.ftpaccess」を無効にすることが出来ない場合は、サポートまでお問い合わせください。</p>
                            </div>
                        </aside>
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