<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>旧WEBメール(スマートフォン・タブレット) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ブラウザからメールの送受信が行える「WEBメール」で提供する機能の一覧と利用方法に関するご案内です。">

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
            
                <h3 class="sub-ttl">旧WEBメール(スマートフォン・タブレット)</h3>
                
                <p>「WEBメール」は、ご利用になる端末に合わせて最適化された表示に切り替わります。<br>
                Windows PCやMacなどのパソコン端末でWEBメールをご利用の場合は、マニュアル「<a href="man_tool_mail.php">WEBメール</a>」をご参照ください。</p>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">ログイン方法</a>
						<ul>
							<li><a href="#link-a01">「ホスト接続に失敗しました」と表示されてしまう場合</a></li>
						</ul>
                    </li>
					<li><a href="#link-b">各種機能と利用方法</a></li>
                    <li><a href="#link-c">電子メール画面</a></li>
                    <li><a href="#link-d">アドレス帳画面</a></li>
                    <li><a href="#link-e">設定画面</a>
                    <ul>
                        <li><a href="#link-e01">識別情報</a></li>
                        <li><a href="#link-e02">受信箱</a></li>
                    </ul>
                    </li>
                    <li><a href="#link-f">ユーザーインターフェイス画面</a></li>
				</ul>
				</div>
                <div class="border border--gray mt30">
                    <p class="link mb0"><a href="man_tool_mail_sp.php">新WEBメールをお使いの方はこちら</a><i class="ico ico_chevron-right"></i></p>
                </div>
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-a">ログイン方法</h4>
                    <div class="section_body">
						<p>
							下記URLよりメールパネルへのログインが可能です。<br>
							メールアドレスとメールアドレス作成時にお決めいただいたパスワードでログインをお試しください。
						</p>
						<p>
							<i class="ico ico--squareFill"></i>メールパネル ログインURL<br>
							<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a>
						</p>
                        <p>ログインすると、下記画面が表示されます。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_3.png?date=250331" alt="WEBメールのスクリーンショット"></p>
                                                
                        <p>「WEBメールにログインする」をタップすると、受信箱が表示されます。</p>
					</div>

					<h3 class="block_ttl" id="link-a01">「ホスト接続に失敗しました」と表示されてしまう場合</h3>
					<div class="section_body">
						<p>
							ログインを試しているメールアドレスが、当サーバーを参照していない可能性があります。<br>
							詳細については以下をご確認ください。
						</p>
						<p>よくある質問：<span class="link"><a href="../support/faq/tool_mail_access_error.php">「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</a></span></p>
					</div>

                </section>
                <!-- /.section -->

                <section class="section">
                    <a id="howto" name="howto"></a>
                    <h4 class="section_ttl" id="link-b">各種機能と利用方法</h4>
                    <div class="section_body">
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_2.png" alt="WEBメール画面" /></p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_3.png" alt="メインメニュー" /></p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="w30per">1.　電子メール</th>
                                <td>電子メール画面（ログイン直後の画面です）に切り替えます。</td>
                            </tr>
                            <tr>
                                <th>2.　アドレス帳</th>
                                <td>メールアドレスを管理する、アドレス帳に切り替えます。</td>
                            </tr>
                            <tr>
                                <th>3.　設定</th>
                                <td>設定画面に切り替えます。</td>
                            </tr>
                            <tr>
                                <th>4.　Apps</th>
                                <td>表示言語やWEBメールのデザインを変更する、ユーザーインターフェイス画面に切り替えます。</td>
                            </tr>
                            <tr>
                                <th>5.　ログアウト</th>
                                <td>WEBメールを終了する際にクリックしてください。</td>
                            </tr>
                            <tr>
                                <th>6.　インターフェイスオプション</th>
                                <td>WEBメールのデザインや言語設定の変更が可能です。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </section>

                <section class="section">
                    <a id="mail" name="mail"></a>
                    <h4 class="section_ttl" id="link-c">電子メール画面</h4>
                    <div class="section_body">
                        <p>電子メール画面では、メールに関する各種操作を行うことができます。</p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_4.png" alt="電子メール画面" /></p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="w30per">1.　メール新規作成</th>
                                <td>新しくメールを作成します。</td>
                            </tr>
                            <tr>
                                <th>2.　メール操作メニュー</th>
                                <td><p>メールメニューです。</p>
                                    <ul class="ul">
                                        <li>再読込み　・・・　サーバーに届いた新着メールを確認します。</li>
                                        <li>返信　　　・・・　選択したメールに対して返信します。 </li>
                                        <li>全員に返信・・・　選択したメールに対して、送信者を含む、CCやBCCで指定されたメールアドレス全てに対して、返信します。 </li>
                                        <li>転送　　　・・・　選択したメールを転送します。</li>
                                        <li>削除　　　・・・　選択したメールを「ごみ箱」フォルダに移動します。</li>
                                        <li>マーク　　・・・　選択したメールに対して、既読を未読にしたり、目立つようにフラグを付けることができます。</li>
                                        <li>続く　　　・・・　選択したメールの「印刷」や、「ヘッダー情報」を確認できます。 </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>3.　オプション</th>
                                <td><p>オプションメニューです。</p>
                                    <ul class="ul">
                                        <li>フィルター　・・・　表示条件を絞って表示することが可能です。</li>
                                        <li>高速検索　・・・　キーワードや条件をつけて検索することが可能です。</li>
                                        <li>選択　・・・　複数メールを選択状態にします。</li>
                                        <li>フォルダーの操作　・・・　選択したフォルダに対して、「圧縮」や「メッセージをインポート」などの操作を行うことができます。</li>
                                        <li>メッセージの一覧の表示と並べ替えのオプション　・・・　メール一覧の並び順・表示する列を変更できます。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>4.　フォルダ一覧</th>
                                <td><p>各メールが格納されているフォルダです。<br />初期状態では以下のフォルダが表示された状態となります。</p>
                                    <ul class="ul">
                                        <li>受信箱　　・・・　受信したメールが入ってくるフォルダです。</li>
                                        <li>下書き　　・・・　送信する前の下書きメールを保存しておくフォルダです。</li>
                                        <li>送信済み　・・・　送信済みのメールを保存しておくフォルダです。</li>
                                        <li>迷惑メール・・・　迷惑メールを保存しておくフォルダです。 </li>
                                        <li>ごみ箱　　・・・　削除するメールが入ったフォルダです。<br />
                                            ごみ箱に移動したメールは7日後に自動的に削除されます。</li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p><i class="ico ico_square-fill">メール一覧</i></p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_5.png" alt="メール一覧画面" /></p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="w30per">5.　メール操作メニュー</th>
                                <td>返信や転送など各種メールメニューを表示します。</td>
                            </tr>
                            <tr>
                                <th>6.　マーク</th>
                                <td>選択したメールに対して、既読を未読にしたり、目立つようにフラグを付けることができます。</td>
                            </tr>
                            <tr>
                                <th>7.　削除</th>
                                <td>選択したメールを「ごみ箱」フォルダに移動します。</td>
                            </tr>
                            <tr>
                                <th>8.　ページ切り替え</th>
                                <td>ページを切り替えます。一ページに表示できるメール件数は、個人設定で変更できます。</td>
                            </tr>
                            </tbody>
                        </table>

                        <p><i class="ico ico_square-fill">プレビュー</i></p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_6.png" alt="プレビュー画面" /></p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="w30per">9.　メール一覧に戻る</th>
                                <td>メール一覧画面に戻ります。</td>
                            </tr>
                            <tr>
                                <th>10.　メール操作メニュー</th>
                                <td>返信や転送など各種メールメニューを表示します。</td>
                            </tr>
                            <tr>
                                <th>11.　メッセージオプション</th>
                                <td>テキスト形式、またはHTML形式に変更できます。</td>
                            </tr>
                            <tr>
                                <th>12.　メールの返信</th>
                                <td>返信画面に移動します。</td>
                            </tr>
                            <tr>
                                <th>13.　前後のメールに移動</th>
                                <td>前後のメールに移動します。</td>
                            </tr>
                            <tr>
                                <th>14.　メールのヘッダーを表示</th>
                                <td>メールヘッダーを表示します。</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </section>
                <section class="section">
                    <a id="address" name="address"></a>
                    <h4 class="section_ttl" id="link-d">アドレス帳画面</h4>
                    <div class="section_body">
                        <p>アドレス帳画面では、よく使うメールアドレスを連絡先として登録しておくことができます。</p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_7.png" alt="アドレス帳画面" /></p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="w30per">1.　アドレス帳操作メニュー</th>
                                <td><p>アドレス帳メニューです。</p>
                                    <ul class="ul">
                                        <li>インポート　・・・　vCard 形式のファイルをローカルから読み込みます。</li>
                                        <li>エクスポート・・・　vCard 形式でローカルのファイルに書き込みます。</li>
                                        <li>新規作成　　・・・　新しく連絡先を登録します。</li>
                                        <li>印刷　　　　・・・　選択した連絡先の印刷を行います。</li>
                                        <li>高度　　　　・・・　様々な条件を用いた、高度な検索を行います。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>2.　グループ操作メニュー</th>
                                <td><p>グループ設定を行えます。</p>
                                    <ul class="ul">
                                        <li>新規作成　・・・　新しいグループを登録します。</li>
                                        <li>その他　　・・・　「グループ名の変更」や「グループの削除」などが行えます。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>3.　グループ一覧</th>
                                <td>登録したグループの一覧が表示されます。</td>
                            </tr>
                            <tr>
                                <th>4.　連絡先操作メニュー</th>
                                <td><p>連絡先メニューです。</p>
                                    <ul class="ul">
                                        <li>新規追加　・・・ 新しく連絡先を登録します。</li>
                                        <li>削除　　　・・・ 選択した連絡先を削除します。</li>
                                        <li>グループから削除　・・・ 選択した連絡先をグループから削除します。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>5.　連絡先一覧</th>
                                <td>登録した連絡先の一覧が表示されます。</td>
                            </tr>

                            <tr>
                                <th>6.　詳細画面</th>
                                <td>選択した連絡先の詳細が表示されます。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </section>

                <section class="section">
                    <a id="setting" name="setting"></a>
                    <h4 class="section_ttl" id="link-e">設定画面</h4>
                    <div class="section_body">
                        <p>設定画面では、WEBメールの各種設定を編集することが可能です。</p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_8.png" alt="設定画面" /></p>
                    </div>
                    <div class="section_body">
                        <h3 class="block_ttl" id="link-e01">識別情報</h3>
                            <p>識別情報画面では、表示名や署名等の識別情報を設定することが可能です。</p>
                            <p><img class="img" src="../img/manual/man_tool_sp_mail_10.png" alt="識別情報" /></p>
                            <p><img class="img" src="../img/manual/man_tool_sp_mail_11.png" alt="識別情報" /></p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th class="w30per">1.　表示名</th>
                                    <td><p>From欄に表示される送信者名（差出人）です。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">2.　電子メール</th>
                                    <td><p>From欄に表示されるメールアドレスです。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">3.　企業名</th>
                                    <td><p>一部メールソフトではこの情報を使用/表示する場合があります。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">4.　返信先</th>
                                    <td><p>返信先のメールアドレスを任意のアドレスに設定することができます。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">5.　隠した写し(Bcc)</th>
                                    <td><p>任意のアドレスを登録することで、メールのコピーを自動的にBccで送信することが可能です。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">6.　署名</th>
                                    <td><p>最下部に挿入する署名を設定する事が出来ます。HTML形式での設定も可能です。</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    <div class="section_body">
                        <h3 class="block_ttl" id="link-e02">受信箱</h3>

                            <p>受信箱では、1ページあたりの表示件数等の受信箱に関する設定を行うことが可能です。</p>
                            <p><img class="img" src="../img/manual/man_tool_sp_mail_12.png" alt="受信箱" /></p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th class="w30per">プレビュー枠の表示</th>
                                    <td><p>メール一覧にプレビュー枠を表示したい場合はチェックを入れてください。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">プレビューしたメッセージを既読に設定</th>
                                    <td><p>プレビューしたメールが既読になるまでの時間を設定することができます。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">開封確認の要求の処理</th>
                                    <td><p>開封確認設定されたメールの処理方法を設定することができます。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">メッセージのスレッドを展開</th>
                                    <td><p>スレッド展開時の表示形式を設定することができます。</p></td>
                                </tr>
                                <tr>
                                    <th class="w30per">1ページの表示件数</th>
                                    <td><p>1ページあたりの表示件数を設定することができます。</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                </section>

                <section class="section">
                    <a id="interface" name="interface"></a>
                    <h4 class="section_ttl" id="link-f">ユーザーインターフェイス画面</h4>
                    <div class="section_body">
                        <p>ユーザーインターフェイス画面では、言語設定やWEBメールのデザインなどを変更することが可能です。</p>
                        <p><img class="img" src="../img/manual/man_tool_sp_mail_9.png" alt="ユーザーインターフェイス" /></p>
                    </div>

                </section>


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