<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServerアカウント・サーバーパネルへの不正ログインについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜XServerアカウント・サーバーパネルへの不正ログインの対応方法を記載しています。">

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
            
                <h3 class="sub-ttl">XServerアカウント・サーバーパネルへの不正ログインについて</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
					<ul class="toc-list--body">
						<li><a href="#link-a">不正ログインとは</a></li>
                        <li><a href="#link-b">不正ログインされた際の対処方法</a>
							<ol>
								<li><a href="#link-b01">セキュリティチェック</a></li>
                                <li><a href="#link-b02">管理パスワードの変更</a></li>
							</ol>
						</li>
                        <li><a href="#link-c">不正ログインの予防策</a>
                            <ol>
                                <li><a href="#link-c01">二段階認証の設定</a></li>
                                <li><a href="#link-c02">不審なログイン時の認証／通知</a></li>
                                <li><a href="#link-c04">ソフトウェア更新</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-d">関連ページ</a></li>
					</ul>
				</div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">不正ログインとは</h4>
                    <div class="section_body">
                        <p>不正ログインとは、悪意を持った人物が他人のログイン情報（ID、パスワードなど）を不正に取得し、正規ユーザーになりすましてアカウントにアクセスする行為を指します。<br>
                            XServerアカウント・サーバーパネルのログイン情報が流出すると、お客様ご自身の個人情報が流出してしまうと同時に、スパムメールの送信やWebサイトの改ざんなどといったさらなる攻撃への踏み台として利用されてしまう恐れがあります。</p>

                        <p>なお、ログイン情報が流出する経緯には以下の3通りがあります。</p>

                        <ul class="ul">

                            <li>ID・パスワードを推測される</li>
                            <li>ID・パスワードを盗み見られる
                                <ul>
                                    <li>- ID・パスワードを取り扱っているところを盗み見られる</li>
                                    <li>- メモしたID・パスワードを盗み見られる</li>
                                </ul>
                            </li>
                            <li>漏洩したID・パスワードが利用される
                                <ul>
                                    <li>- フィッシングやマルウェアによる漏洩</li>
                                    <li>- パスワードの使い回しによる漏洩</li>
                                </ul>
                            </li>
                        </ul>

                        <p><img class="img" src="../img/manual/man_malicious_login_1.png" alt="不正ログインの流れ"></p>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">不正ログインされた際の対処方法</h4>
                    <div class="section_body">
                        <p>XServerアカウント・サーバーパネルに不正ログインされてしまった場合、被害の拡大を防ぐため早急に以下をご対応ください。</p>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">セキュリティチェック</h5>
                            <div class="block_body">
                                <p>セキュリティソフトやOS搭載のセキュリティ機能（Windows Defenderなど）にて、ご利用中の端末が危険なウイルスに感染していないか確認してください。</p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b02">管理パスワードの変更</h5>
                            <div class="block_body">
                                <p>XServerアカウント・サーバーパネルのログインパスワードを再設定してください。<br>
                                    また、複数のサーバーIDや当社の他サービスをご契約されている方はすべてのアカウントについてパスワード変更していただくことを強く推奨しています。</p>
                                <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank">XServerアカウント パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>
                                <p>◇<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_server_index=true" target="_blank">サーバーパネル パスワード再設定フォーム</a><i class="ico ico_new-window base-color"></i></p>

                                <aside class="msg msg_caution">
                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>パスワード設定における注意事項</h5>
                                    <div class="msg_body">
                                        <p>以下のようなパスワードは第三者による推測が容易となるため避けてください。</p>
                                        <ul class="ul">
                                            <li>IDやメールドレスと同じ文字列<br>
                                                　例: メールアドレスが「info@example.jp」でパスワードが「infoexample」</li>
                                            <li>数字のみや英字のみ<br>
                                                　例: 38984、aaabbb</li>
                                            <li>単純な文字列と数字の組み合わせ<br>
                                                　例: abc123</li>
                                            <li>辞書に載っている単語<br>
                                                　例: get</li>
                                            <li>よく使われるパスワード<br>
                                                　例: password、admin、qwerty</li>
                                            <li>過去に設定したものと同じパスワード</li>
                                            <li>他システムで使用しているものと同じパスワード</li>
                                        </ul>
                                        <p>以下の条件を満たす強固なパスワードを設定してください。</p>
                                        <ul class="ul">
                                            <li>できるだけ長い文字列（最低8文字以上）</li>
                                            <li>英字（大文字、小文字）、数字を織り交ぜた完全ランダムな文字列</li>
                                            <li>記号「-(ハイフン)」、「.(ドット)」などを含む</li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-c">不正ログインの予防策</h4>
                    <div class="section_body">

                        <p>XServerアカウント・サーバーパネルへの不正ログインを防止するため、以下予防策の実施をご検討ください。</p>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c01">二段階認証の設定</h5>
                            <div class="block_body">
                                <p>二段階認証とは、管理ツールなどへのログインの際に通常のパスワード認証に加え、ワンタイムパスワードを生成する認証コード生成アプリ（Google Authenticatorなど）のような第二の認証方法を設け、セキュリティを強化する仕組みです。二段階認証設定をしていただくことで通常のパスワード認証に比べ、不正アクセスを抑止できる可能性が高くなります。詳しくは以下サポートページをご覧ください。</p>
                                <p>◇<a href="man_order_twostepauth.php">マニュアル - 二段階認証設定</a></p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c02">不審なログイン時の認証／通知</h5>
                            <div class="block_body">
                                <p>不審なログイン時の認証とは、XServerアカウントへのログイン時にこれまでと異なるIPアドレスや端末からのログインなど、不審なログインを確認した場合に認証コードの入力を求める画面が表示される機能です。登録メールアドレス宛に送信される認証コードを入力いただくことで、ログインが可能となります。なお、二段階認証が設定済みの場合は「不審なログイン時の認証」は行われません。詳しくは以下サポートページをご覧ください。</p>
                                <p>◇<a href="man_order_loginsecurity.php">マニュアル - 不審なログイン時の認証</a></p>
                            </div>
                        </section>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-c04">ソフトウェア更新</h5>
                            <div class="block_body">
                                <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。OSを含めソフトウェアは常に最新の状態を保つよう、アップデートをしてください。</p>
                            </div>
                        </section>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-d">関連ページ</h4>
                    <div class="section_body">

                        <p>◇<a href="man_malicious_password_crack.php">マニュアル - メールアカウントのパスワードクラックについて</a></p>
                        <p>◇<a href="man_malicious_access.php">マニュアル - 不正アクセス（ファイルの改ざん、不正なファイル設置）について</a></p>

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