<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>旧WEBメール利用方法 | <?php print $SITE_TITLE; ?></title>
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
            
                <h3 class="sub-ttl">旧WEBメール</h3>

				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">WEBメールとは</a></li>
					<li><a href="#link-b">ログイン方法</a></li>
                    <li><a href="#link-c">各種機能と利用方法</a></li>
                    <li><a href="#link-d">電子メール画面</a></li>
                    <li><a href="#link-e">アドレス帳画面</a></li>
                    <li><a href="#link-f">設定画面</a>
                        <ul>
                            <li><a href="#link-f01">識別情報</a></li>
                            <li><a href="#link-f02">受信箱</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-g">ユーザーインターフェイス画面</a></li>


				</ul>
				</div>

				<aside class="msg">
					<h6 class="msg_ttl"><i class="ico ico_circle"></i>スマートフォン・タブレットなどの携帯端末でWEBメールをご利用の場合</h6>
					<div class="msg_body">
						<p>「WEBメール」は、ご利用の端末に合わせて最適化した表示へ自動的に切り替わります。<br>
							スマートフォン・タブレットなどの携帯端末でWEBメールをご利用の場合は、以下のマニュアルをご参照ください。</p>
						<p class="mb0">マニュアル「<a href="man_tool_mail_sp.php">WEBメール(スマートフォン・タブレット)</a>」</p>
					</div>
				</aside>
    
                <section class="section">
                	<a id="whats" name="whats"></a>
                    <h4 class="section_ttl" id="link-a">WEBメールとは</h4>
                    <div class="section_body">
                        <p>WEBメールはブラウザを使用してメール送受信などを行うシステムです。</p>
                    </div>
                </section>
                
                <section class="section">
                	<a id="login" name="login"></a>
                    <h4 class="section_ttl" id="link-b">ログイン方法</h4>
                    <div class="section_body">
                        <p>ログイン時に使用する情報は以下です。</p>
                        <p>・メールアドレス<br>
                        ・メールアドレス作成時に設定したメールパスワード</p>

                        <p>※WEBメールはメールアドレス単位でログインが可能です。<br>
                        　サーバーアカウントやドメイン単位のログインはできません。</p>
                        <p>WEBメールのログインフォームよりログインしてください。</p>
                        <p> ■WEBメール ログインURL<br>
                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank"><?php print $SECURE_URL; ?>xapanel/login/xserver/mail/</a></p>
                    </div>
                </section>

                <section class="section">
                	<a id="webmail" name="webmail"></a>
                    <h4 class="section_ttl" id="link-c">各種機能と利用方法</h4>
                    <div class="border border--gray mt30">
                        <p class="link mb0"><a href="man_tool_mail.php">新WEBメールをお使いの方はこちら</a><i class="ico ico_chevron-right"></i></p>
                    </div>
                    <div class="section_body">
                        
                    <p>ログインすると、下記画面が表示されます。</p>
						<p><img class="img" src="../img/manual/man_tool_mail_panel_1.png?date=250331" alt="WEBメールのスクリーンショット"></p>
                        <aside class="msg msg_caution">
                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「WEBメール」をクリック後「ホスト接続に失敗しました」と表示されてしまう場合</h4>
                                <div class="msg__body">
                                    <p>ログインを試しているメールアドレスが、当サーバーを参照していない可能性があります。<br>
                                        詳細については以下をご確認ください。</p>
                                    <p>よくある質問：<span class="link"><a href="../support/faq/tool_mail_access_error.php">「ホスト接続に失敗しました」、「接続エラーが発生しました」と表示され、WEBメールへログインできません。</a></span></p>
                                </div>
                            </aside>
                        <p>「WEBメールにログインする」をクリックすると、受信箱が表示されます。</p>
                    </div>
                        <p><img class="img" src="../img/manual/man_tool_mail_4.png" alt="WEBメール画面" /></p>
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
                                    <th>5.　インターフェイスオプション</th>
                                    <td>WEBメールのデザインや言語設定の変更が可能です。</td>
                                </tr>
                                <tr>
                                    <th>6.　ログアウト</th>
                                    <td>WEBメールを終了する際にクリックしてください。</td>
                                </tr>
                            </tbody>
                        </table>
                </section>

                <section class="section">
                    <a id="mail" name="mail"></a>
                    <h4 class="section_ttl" id="link-d">電子メール画面</h4>

                    <div class="section_body">
                            <p>電子メール画面では、メールに関する各種操作を行うことができます。</p>
                            <p><img class="img" src="../img/manual/man_tool_mail_5.png" alt="電子メール画面" /></p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th class="w30per">1.　メール操作メニュー</th>
                                    <td><p>メールメニューです。</p>
                                        <ul class="ul">
                                            <li>再読込み　・・・　サーバーに届いた新着メールを確認します。</li>
                                            <li>新規作成　・・・　新しくメールを作成します。</li>
                                            <li>返信　　　・・・　選択したメールに対して、返信します。</li>
                                            <li>全員に返信・・・　選択したメールに対して、送信者を含む、CCやBCCで指定されたメールアドレス全てに対して、返信します。 </li>
                                            <li>転送　　　・・・　選択したメールを転送します。</li>
                                            <li>削除　　　・・・　選択したメールを「ごみ箱」フォルダに移動します。</li>
                                            <li>マーク　　・・・　選択したメールに対して、既読を未読にしたり、目立つようにフラグを付けることができます。</li>
                                            <li>続く　　　・・・　選択したメールの「印刷」や、「ヘッダー情報」を確認できます。 </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>2.　フィルター</th>
                                    <td>検索キーワードや様々な条件によって、表示するメールにフィルターをかけることができます。</td>
                                </tr>
                                <tr>
                                    <th>3.　フォルダ一覧</th>
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
                                <tr>
                                    <th>4.　フォルダー操作メニュー</th>
                                    <td>選択したフォルダに対して、「圧縮」や「メッセージをインポート」などの操作を行うことができます。</td>
                                </tr>
                                <tr>
                                    <th>5.　ディスク使用量</th>
                                    <td>メールアカウントに割り当てたディスク容量と、その使用量が表示されます。</td>
                                </tr>
                                <tr>
                                    <th>6.　メール一覧</th>
                                    <td><p>選択したフォルダ内のメールの一覧が表示されます。</p>
                                        <ul class="ul">
                                            <li>フォルダの移動 ・・・ メールを各フォルダへドラッグ＆ドロップすることにより、フォルダの移動を行うことができます。</li>
                                            <li>複数のメールを選択 ・・・ 最初に一つメールを選択しておいて、次のメールを「Ctrl」ボタンを押しながら選択すると、メールを2つ以上選択することができます。<br />
                                                また、次のメールを「Shift」ボタンを押しながら選択すると、1つ目と2つ目の間のメール全てを選択することができます。</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>7.　プレビュー</th>
                                    <td>選択したメールのプレビューです。</td>
                                </tr>
                                </tbody>
                            </table>

                            <p><i class="ico ico_square-fill">メール一覧</i></p>
                            <p><img class="img" src="../img/manual/man_tool_mail_6.png" alt="メール一覧画面" /></p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th class="w30per">8.　並び順・表示する列の変更</th>
                                    <td>メール一覧の並び順・表示する列を変更できます。</td>
                                </tr>
                                <tr>
                                    <th>9.　メール一覧のヘッダ</th>
                                    <td>項目をクリックすると、その項目でメールを並び替えます。</td>
                                </tr>
                                <tr>
                                    <th>10.　一覧/スレッドの切替</th>
                                    <td>メールの表示形式を「一覧」または「スレッド」のいずれかに切り替えます。</td>
                                </tr>
                                <tr>
                                    <th>11.　選択</th>
                                    <td>複数メールを選択状態にします。</td>
                                </tr>
                                <tr>
                                    <th>12.　スレッド</th>
                                    <td>スレッドの「展開」や「折りたたみ」の操作ができます。</td>
                                </tr>
                                <tr>
                                    <th>13.　ページ切り替え</th>
                                    <td>ページを切り替えます。一ページに表示できるメール件数は、個人設定で変更できます。</td>
                                </tr>
                                <tr>
                                    <th>14.　プレビュー表示切替</th>
                                    <td>メールのプレビューの表示/非表示を切り替えます。</td>
                                </tr>
                                </tbody>
                            </table>

                            <p><i class="ico ico_square-fill">プレビュー</i></p>
                            <p><img class="img" src="../img/manual/man_tool_mail_7.png" alt="プレビュー画面" /></p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th class="w30per">15.　宛先の表示/非表示切替</th>
                                    <td>宛先の表示/非表示を切り替えます。</td>
                                </tr>
                                <tr>
                                    <th>16.　アドレス帳に追加</th>
                                    <td>送信者 / 受信者のメールアドレスを、アドレス帳に追加します。</td>
                                </tr>
                                <tr>
                                    <th>17.　メール操作メニュー</th>
                                    <td><p>メールメニューです。</p>
                                        <ul class="ul">
                                            <li>返信　・・・　選択したメールに対して、返信します。</li>
                                            <li>全員に返信　・・・　選択したメールに対して、送信者を含む、CCやBCCで指定されたメールアドレス全てに対して、返信します。</li>
                                            <li>転送　・・・　選択したメールを転送します。</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>18.　新しいウィンドウで開く</th>
                                    <td>表示中のメールを新しいウィンドウで開きます。</td>
                                </tr>
                                <tr>
                                    <th>19.　メールのヘッダーを表示</th>
                                    <td>メールヘッダーを表示します。</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                </section>

                <section class="section">
                    <a id="address" name="address"></a>
                    <h4 class="section_ttl" id="link-e">アドレス帳画面</h4>
                        <p>アドレス帳画面では、よく使うメールアドレスを連絡先として登録しておくことができます。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_8.png" alt="アドレス帳画面" /></p>
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
                                <th>2.　グループ一覧</th>
                                <td>登録したグループの一覧が表示されます。</td>
                            </tr>
                            <tr>
                                <th>3.　グループ操作メニュー</th>
                                <td><p>グループ設定を行えます。</p>
                                    <ul class="ul">
                                        <li>新規作成　・・・　新しいグループを登録します。</li>
                                        <li>その他　　・・・　「グループ名の変更」や「グループの削除」などが行えます。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>4.　連絡先一覧</th>
                                <td>登録した連絡先の一覧が表示されます。</td>
                            </tr>
                            <tr>
                                <th>5.　連絡先操作メニュー</th>
                                <td><p>連絡先メニューです。</p>
                                    <ul class="ul">
                                        <li>新規追加　・・・ 新しく連絡先を登録します。</li>
                                        <li>削除　　　・・・ 選択した連絡先を削除します。</li>
                                        <li>グループから削除　・・・ 選択した連絡先をグループから削除します。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>6.　詳細画面</th>
                                <td>選択した連絡先の詳細が表示されます。</td>
                            </tr>
                            <tr>
                                <th>7.　フィルター</th>
                                <td>検索キーワードによって、表示する連絡先にフィルターをかけることができます。</td>
                            </tr>
                            </tbody>
                        </table>
                </section>

                <section class="section">
                    <a id="setting" name="setting"></a>
                    <h4 class="section_ttl" id="link-f">設定画面</h4>
                    <div class="section_body">
                    <p>設定画面では、WEBメールの各種設定を編集することが可能です。</p>
                    <p><img class="img" src="../img/manual/man_tool_mail_9.png" alt="設定画面" /></p>
                    </div>
                    <div class="section_body">
                    <h3 class="block_ttl" id="link-f01">識別情報</h3>
                        <p>識別情報画面では、表示名や署名等の識別情報を設定することが可能です。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_11.png" alt="アドレス帳画面" /></p>
                        <p><img class="img" src="../img/manual/man_tool_mail_12.png" alt="アドレス帳画面" /></p>
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
                    <h3 class="block_ttl" id="link-f02">受信箱</h3>
                        <p>受信箱では、1ページあたりの表示件数等の受信箱に関する設定を行うことが可能です。</p>
                        <p><img class="img" src="../img/manual/man_tool_mail_13.png" alt="アドレス帳画面" /></p>
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
                    <h4 class="section_ttl" id="link-g">ユーザーインターフェイス画面</h4>
                    <p>ユーザーインターフェイス画面では、言語設定やWEBメールのデザインなどを変更することが可能です。</p>
                    <p><img class="img" src="../img/manual/man_tool_mail_10.png" alt="アドレス帳画面" /></p>
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