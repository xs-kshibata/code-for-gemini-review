<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メールアカウントのパスワードクラックについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜メールアカウントのパスワードクラックの対応方法を記載しています。">

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
            
                <h3 class="sub-ttl">メールアカウントのパスワードクラックについて</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">メールアカウントのパスワードクラックとは</a></li>
                                    <li><a href="#link-previous-b">メールアカウントがパスワードクラックされた際の対処方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">セキュリティチェック</a></li>
                                            <li><a href="#link-previous-b02">メールアカウントのパスワードの変更／削除</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">メールアカウントのパスワードクラックに対する予防策</a>
                                        <ol>
                                            <li><a href="#link-previous-c01">SMTP認証の国外アクセス制限設定</a></li>
                                            <li><a href="#link-previous-c03">ソフトウェア更新</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">メールアカウントのパスワードクラックとは</h4>
                                <div class="section_body">
                                    <p>パスワードクラックとは、アカウントなどに設定されているパスワードを不正に割りだす行為を指します。<br>
                                        メールアカウントのパスワードが流出すると、スパムメールの送信などに利用されてしまう恐れがあります。<br>
                                        また、スパムメールが送信されるとブロックリストサービスに登録されてしまう可能性が高くなり、それにより通常のメール送信であっても宛先へ正しく届かなくなることがあります。
                                    </p>

                                    <p>なお、パスワードクラックの経緯には以下の3通りがあります。</p>
                                    <ul class="ul">
                                        <li>パスワードを推測される</li>
                                        <li>パスワードを盗み見られる
                                            <ul>
                                                <li>- パスワードを取り扱っているところを盗み見られる</li>
                                                <li>- メモしたパスワードを盗み見られる</li>
                                            </ul>
                                        </li>
                                        <li>漏洩したパスワードが利用される
                                            <ul>
                                                <li>- フィッシングやマルウェアによる漏洩</li>
                                                <li>- パスワードの使い回しによる漏洩</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p><img class="img" src="../img/manual/previous/man_malicious_password_crack_1.png" alt="パスワードクラックの経緯イメージ"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">メールアカウントがパスワードクラックされた際の対処方法</h4>
                                <div class="section_body">
                                    <p>メールアカウントがパスワードクラックされ、不正に利用されてしまった場合、被害の拡大を防ぐため早急に以下をご対応ください。</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b01">セキュリティチェック</h5>
                                        <div class="block_body">
                                            <p>セキュリティソフトやOS搭載のセキュリティ機能（Windows Defenderなど）にて、ご利用中の端末が危険なウイルスに感染していないか確認してください。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-b02">メールアカウントのパスワードの変更／削除</h5>
                                        <div class="block_body">
                                            <p>スパムメールの送信に利用されたメールアカウントのパスワード変更または削除をしてください。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1. 「メールアカウント設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「メールアカウント設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_password_crack_2.png" alt="「メールアカウント設定」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2. 該当ドメインの「選択する」をクリック</h6>
                                                    <div class="box_body">
                                                        <p>該当ドメインの「選択する」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_password_crack_3.png" alt="該当ドメインの「選択する」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">3. 該当メールアカウントのパスワードの変更またはメールアカウントの削除をする</h6>
                                                    <div class="box_body">
                                                        <p>該当メールアカウントの「変更」、「削除」より、パスワードの変更またはメールアカウントの削除を実施してください。</p>
                                                        <p class="note">※メールアカウントのメモ欄にパスワードを記載している場合は削除してください。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_malicious_password_crack_4.png" alt="メールアカウント一覧画面"></p>
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
                                            <div class="msg msg_notice mt30">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>メールソフトをご利用中のお客様</h4>
                                                <div class="msg_body">
                                                    <p>変更した新しいパスワードを、メールソフトに再設定してください。<br>
                                                    ◇<a href="man_mail_setting.php">マニュアル - メールソフトの設定</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">メールアカウントのパスワードクラックに対する予防策</h4>
                                <div class="section_body">
                                    <p>メールアカウントのパスワードクラックを防止するため、以下予防策の実施をご検討ください。</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c01">SMTP認証の国外アクセス制限設定</h5>
                                        <div class="block_body">
                                            <p>国外からの不正なメール送信を制限する機能です。不正ログインの多くは国外から行われるため、設定することでセキュリティ強化を図れます。詳しくは以下サポートページをご覧ください。</p>
                                            <p>◇<a href="man_mail_jpcheck.php">マニュアル - SMTP認証の国外アクセス制限</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-previous-c03">ソフトウェア更新</h5>
                                        <div class="block_body">
                                            <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。OSを含めソフトウェアは常に最新の状態を保つよう、アップデートをしてください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!--/旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">メールアカウントのパスワードクラックとは</a></li>
                                    <li><a href="#link-b">メールアカウントがパスワードクラックされた際の対処方法</a>
                                        <ol>
                                            <li><a href="#link-b01">セキュリティチェック</a></li>
                                            <li><a href="#link-b02">メールアカウントのパスワードの変更／削除</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">メールアカウントのパスワードクラックに対する予防策</a>
                                        <ol>
                                            <li><a href="#link-c01">SMTP認証の国外アクセス制限設定</a></li>
                                            <li><a href="#link-c03">ソフトウェア更新</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">メールアカウントのパスワードクラックとは</h4>
                                <div class="section_body">
                                    <p>パスワードクラックとは、アカウントなどに設定されているパスワードを不正に割りだす行為を指します。<br>
                                        メールアカウントのパスワードが流出すると、スパムメールの送信などに利用されてしまう恐れがあります。<br>
                                        また、スパムメールが送信されるとブロックリストサービスに登録されてしまう可能性が高くなり、それにより通常のメール送信であっても宛先へ正しく届かなくなることがあります。
                                    </p>

                                    <p>なお、パスワードクラックの経緯には以下の3通りがあります。</p>
                                    <ul class="ul">
                                        <li>パスワードを推測される</li>
                                        <li>パスワードを盗み見られる
                                            <ul>
                                                <li>- パスワードを取り扱っているところを盗み見られる</li>
                                                <li>- メモしたパスワードを盗み見られる</li>
                                            </ul>
                                        </li>
                                        <li>漏洩したパスワードが利用される
                                            <ul>
                                                <li>- フィッシングやマルウェアによる漏洩</li>
                                                <li>- パスワードの使い回しによる漏洩</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p><img class="img" src="../img/manual/man_malicious_password_crack_1.png?date=2410" alt="パスワードクラックの経緯イメージ"></p>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-b">メールアカウントがパスワードクラックされた際の対処方法</h4>
                                <div class="section_body">
                                    <p>メールアカウントがパスワードクラックされ、不正に利用されてしまった場合、被害の拡大を防ぐため早急に以下をご対応ください。</p>


                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b01">セキュリティチェック</h5>
                                        <div class="block_body">
                                            <p>セキュリティソフトやOS搭載のセキュリティ機能（Windows Defenderなど）にて、ご利用中の端末が危険なウイルスに感染していないか確認してください。</p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-b02">メールアカウントのパスワードの変更／削除</h5>
                                        <div class="block_body">
                                            <p>スパムメールの送信に利用されたメールアカウントのパスワード変更または削除をしてください。</p>

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1. 「メールアカウント設定」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a><i class="ico ico_new-window color-gray"></i>にログインし、「メールアカウント設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_password_crack_2.png?date=2410" alt="「メールアカウント設定」をクリック"></p>
                                                    </div>
                                                </section>
                                                <section class="box">
                                                    <h6 class="box_ttl">2. 該当メールアカウントのパスワードの変更またはメールアカウントの削除をする</h6>
                                                    <div class="box_body">
                                                        <p>該当メールアカウントの「編集」、「削除」より、パスワードの変更またはメールアカウントの削除を実施してください。</p>
                                                        <p class="note">※メールアカウントのメモ欄にパスワードを記載している場合は削除してください。</p>
                                                        <p><img class="img" src="../img/manual/man_malicious_password_crack_4.png?date=2410" alt="メールアカウント一覧画面"></p>
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
                                            <div class="msg msg_notice mt30">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>メールソフトをご利用中のお客様</h4>
                                                <div class="msg_body">
                                                    <p>変更した新しいパスワードを、メールソフトに再設定してください。<br>
                                                        ◇<a href="man_mail_setting.php">マニュアル - メールソフトの設定</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-c">メールアカウントのパスワードクラックに対する予防策</h4>
                                <div class="section_body">
                                    <p>メールアカウントのパスワードクラックを防止するため、以下予防策の実施をご検討ください。</p>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c01">SMTP認証の国外アクセス制限設定</h5>
                                        <div class="block_body">
                                            <p>国外からの不正なメール送信を制限する機能です。不正ログインの多くは国外から行われるため、設定することでセキュリティ強化を図れます。詳しくは以下サポートページをご覧ください。</p>
                                            <p>◇<a href="man_mail_jpcheck.php">マニュアル - SMTP認証の国外アクセス制限</a></p>
                                        </div>
                                    </section>

                                    <section class="block mt50">
                                        <h5 class="block_ttl" id="link-c03">ソフトウェア更新</h5>
                                        <div class="block_body">
                                            <p>古いバージョンのプログラムを使用し続けることで不正アクセスの対象として狙われるリスクが高くなります。OSを含めソフトウェアは常に最新の状態を保つよう、アップデートをしてください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->
                        </div>
                        <!--/新パネル-->

                    </div>
                </div>

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