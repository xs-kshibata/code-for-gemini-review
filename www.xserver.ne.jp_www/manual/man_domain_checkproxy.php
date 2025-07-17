<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>動作確認について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバー移転作業に際して、ネームサーバーの変更前に動作・表示を確認できる「動作確認URL」機能とhostsファイルの編集方法のご案内です。">

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
            
                <h3 class="sub-ttl">動作確認について</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">動作確認について</a></li>
                                    <li><a href="#link-previous-b">静的サイトの動作を確認する方法</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">動作確認URLとは</a></li>
                                            <li><a href="#link-previous-b02">動作確認URLの設定手順</a></li>
                                            <li><a href="#link-previous-b03">動作確認URLを利用した表示確認方法</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-previous-c">WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>
                                        <ul>
                                            <li><a href="#link-previous-c01">hostsファイルとは</a></li>
                                            <li><a href="#link-previous-c02">hostsファイルの編集方法</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_server.php">サーバーの移転に関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 id="link-previous-a" class="section_ttl">動作確認について</h4>
                                <div class="section_body">
                                    <p>他社からのサーバー移転の際、ネームサーバーを切り替える前に当サーバーでの動作を確認することができます。</p>
                                    <p>動作確認には、サーバーパネルの「動作確認URL」機能を使用する方法と、お客様のPCの「hosts」ファイルを使用する方法があります。
                                        任意の方法で動作をご確認ください。</p>
                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>WordPressサイト等の動作を確認する場合</h5>
                                        <div class="msg_body">
                                            <p>
                                                「動作確認URL」機能では、WordPress等の一部のプログラム（※）では正常に確認できない場合があります。<br>
                                                この場合は、<a href="#link-previous-c">hostsファイルを編集</a>して確認してください。
                                            </p>
                                            <p class="note">※設定URLにてリンクを生成する動的サイトや、設定ドメインへのリダイレクトを行うCMSプログラム等</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="section">
                                <h4 id="link-previous-b" class="section_ttl">静的サイトの動作を確認する方法</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">動作確認URLとは</h5>
                                        <div class="block_body">
                                            <p>
                                                本機能は、サーバーに設定された独自ドメインに対して、動作（表示）を確認するためのURLを追加する機能です。<br>
                                                こちらの機能を利用することにより、サーバー移転時のネームサーバー切り替え前に、該当ドメイン領域にアップロードしたホームページの表示を確認することができます。
                                            </p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-b02" class="block_ttl">動作確認URLの設定手順</h5>
                                        <div class="block_body">

                                            <div class="serial-box">
                                                <section class="box">
                                                    <h6 class="box_ttl">1.「動作確認URL」をクリック</h6>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>ログイン後、「動作確認URL」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_1.png" alt="動作確認URLをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">2.動作確認URL設定の追加</h6>
                                                    <div class="box_body">
                                                        <p>「動作確認URL設定追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_2.png" alt="動作確認URL設定の追加をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">3.設定の追加</h6>
                                                    <div class="box_body">
                                                        <p>「サイト」のプルダウンメニューから、動作を確認したいドメインを選択し、「追加する」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_3.png" alt="動作を確認したいドメインを選択して動作確認URL設定の追加(確定)をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">4.設定URLの確認</h6>
                                                    <div class="box_body">
                                                        <p>追加設定完了の画面が表示されますので、「動作確認URL設定一覧」をクリックし、追加したサイト（ドメイン）の「動作確認アドレス」を確認します。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_4.png" alt="追加設定完了画面"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h6 class="box_ttl">5.設定完了</h6>
                                                    <div class="box_body">
                                                        <p>以上で動作確認URLの設定は完了です。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_domain_checkproxy_5.png" alt="動作確認URL設定の追加をクリック"></p>
                                                        <p>設定された動作確認URLにアクセスして、表示および動作確認を行ってください。<br>
                                                            動作確認URLを削除する場合は、「削除」を選択してください。
                                                        </p>
                                                        <p class="note">※動作確認URLの設定後、反映までに1時間程度かかります。</p>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h5 id="link-previous-b03" class="block_ttl">動作確認URLを利用した表示確認方法</h5>
                                        <div class="block_body">
                                            <p>上記の手順で設定された動作確認URLにアクセスすることで、サーバー上の独自ドメインの領域にあるコンテンツを表示することが可能です。</p>
                                            <p>例：「<em class="font-bold">example.com</em>」という独自ドメインに対し、「<em class="font-bold">http://example-com.check-xserver.jp/</em>」という動作確認URLが生成された場合</p>
                                            <table class="table break-word">
                                                <thead>
                                                <tr>
                                                    <th>アップロードしたファイル</th>
                                                    <th>動作確認URLでのアクセス方法</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com/public_html/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/</p>
                                                        <p class="note mb0">※http://example.com/でアクセスした場合と同じコンテンツを表示します。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>example.com/public_html/test/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/test/index.html</p>
                                                        <p class="note mb0">※http://example.com/test/でアクセスした場合と同じコンテンツを表示します。</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>X2からサービス統合されたアカウントの場合</h5>
                                                <div class="msg_body">
                                                    <p>2019年8月28日にX2からサービス統合されたアカウントの場合、「<em class="font-bold">example.com</em>」という独自ドメインに対して生成される動作確認用URLは「<em class="font-bold">http://example-com.xtwo-check.jp/</em>」となります。</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </section>

                            <section class="section">
                                <h4 id="link-previous-c" class="section_ttl">WordPressなどのプログラムを使ったサイトの動作を確認する方法</h4>
                                <div class="section_body">
                                    <section class="block">
                                        <h4 id="link-previous-c01" class="block_ttl">hostsファイルとは</h4>
                                        <div class="section_body">
                                            <p>「hosts」ファイルとは、PCのシステムファイルのひとつで、IPアドレスとそれに対応するホスト名(ドメイン名)の一覧が記載されているファイルです。</p>
                                            <p>お使いのパソコンの「hosts」ファイルにご利用サーバー(エックスサーバー)のIPアドレスとご利用のホスト名を合わせて記述することで、ネームサーバーの変更前にお使いのパソコンから当該Webサイトへアクセスすることが可能になります。</p>
                                            <p>なお、「hosts」ファイルはお使いのパソコン上での設定になります。<br>複数のパソコンから動作確認を行う場合は、アクセスするすべてのパソコンの「hosts」ファイルを編集する必要があります。</p>
                                        </div>
                                    </section>
                                    <!-- /.block -->

                                    <section class="block">
                                        <h4 id="link-previous-c02" class="block_ttl">hostsファイルの編集方法</h4>
                                        <div class="block_body">
                                            <p>「hosts」ファイルの場所は下記の通りです。</p>
                                            <table class="table table_use-caption break-word">
                                                <caption>「hosts」ファイルの場所</caption>
                                                <tbody>
                                                    <tr>
                                                        <th>Windows 10 / 8 / 7 /</th>
                                                        <td>C:\WINDOWS\system32\drivers\etc\hosts</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mac OS X</th>
                                                        <td>/private/etc/hosts　もしくは　/etc/hosts</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Windowsの設定方法</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「hosts」ファイルをメモ帳などのテキストエディタで開きます。</p>
                                                        </li>
                                                        <li>
                                                            <p>最下部に新しい行を追加し、「サーバーIPアドレス + (半角スペース) + ご利用ドメイン名（もしくはサブドメイン）」と入力をして、上書き保存してください。</p>
                                                            <table class="table mb5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>サイトアドレス</th>
                                                                        <th>hostファイルへの追記内容</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>test.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">※「<span class="red"><strong>***.***.***.***</strong></span>」の部分には「ご利用サーバーのIPアドレス」を入力してください。<br>サーバーのIPアドレスは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「サーバー情報」にて確認が可能です。</p>
                                                            <p>変更を保存する際に管理者へのアクセス許可を求めるダイアログが表示される場合、「hosts」ファイルを開く前にテキストエディタのアイコンを右クリックしたうえで、「管理者として実行(A)...」から起動したテキストエディタを利用し、hostsファイルを編集してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>設定をしたPCからのみ、エックスサーバーにアップロードしたWebサイトのデータにアクセスすることが可能になります。</p>
                                                            <p class="note">※実際のWebサイトのURLでアクセスし、表示を確認してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>hostsファイルの編集はネームサーバー変更前の一時的な動作確認方法です。<br>
                                                            確認と移転作業の終了後は必ず追記した項目を削除し、元の設定に戻してください。</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Macの設定方法</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「hosts」ファイルをデスクトップ上に移動し、テキストエディットなどのテキストエディタで開きます。</p>
                                                        </li>
                                                        <li>
                                                            <p>最下部に新しい行を追加し、「サーバーIPアドレス + (半角スペース) + ご利用ドメイン名（もしくはサブドメイン）」と入力をして、「/etc」に戻してください。</p>
                                                            <table class="table mb5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>サイトアドレス</th>
                                                                        <th>hostファイルへの追記内容</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>www.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>test.example.com</th>
                                                                        <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">※「<span class="red"><strong>***.***.***.***</strong></span>」の部分には「ご利用サーバーのIPアドレス」を入力してください。<br>サーバーのIPアドレスは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「サーバー情報」にて確認が可能です。</p>
                                                            <p>編集したhostsファイルを「/etc」に移動する際に、管理者権限を求められる場合、「認証」に進み、管理者情報を入力してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>設定をしたPCからのみ、エックスサーバーにアップロードしたWebサイトのデータにアクセスすることが可能になります。</p>
                                                            <p class="note">※実際のWebサイトのURLでアクセスし、表示を確認してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>hostsファイルの編集はネームサーバー変更前の一時的な動作確認方法です。<br>
                                                            確認と移転作業の終了後は必ず追記した項目を削除し、元の設定に戻してください。</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                    <!-- /.block -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->

                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">静的サイトの動作を確認する方法</a>
                                        <ul>
                                            <li><a href="#link-a01">動作確認URLとは</a></li>
                                            <li><a href="#link-a02">動作確認URLの設定手順</a></li>
                                            <li><a href="#link-a03">動作確認URLを利用した表示確認方法</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#link-b">WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>
                                        <ul>
                                            <li><a href="#link-b01">hostsファイルとは</a></li>
                                            <li><a href="#link-b02">hostsファイルの編集方法</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_server.php">サーバーの移転に関する「よくある質問」</a></li>
                            </ul>

                            <p>他社からのサーバー移転の際、以下の方法でネームサーバーを切り替える前に当サーバーでの動作確認をすることができます。</p>

                            <section id="link-a" class="section">
                                <h3 class="section_ttl">静的サイトの動作を確認する方法</h3>
                                <div class="section_body">

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a01">動作確認URLとは</h4>
                                        <div class="block_body">
                                            <p>
                                                本機能は、サーバーに設定された独自ドメインに対して、動作（表示）を確認するためのURLを追加する機能です。<br>
                                                こちらの機能を利用することにより、サーバー移転時のネームサーバー切り替え前に、該当ドメイン領域にアップロードしたホームページの表示を確認することができます。
                                            </p>

                                            <aside class="msg msg-caution">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>Wordpress等の一部プログラムの動作確認に関するご注意</h5>
                                                <div class="msg_body">
                                                    <p>動作確認URLの機能では、WordPress等の一部プログラム（※）では正常に確認できない場合があります。<br>
                                                        CMSご利用の場合は、<em class="font-bold"><a href="#link-b02">hostsファイルを編集</a></em>して確認してください。</p>
                                                    <p class="note">※設定URLにてリンクを生成する動的サイトや、設定ドメインへのリダイレクトを行うCMSプログラム等</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a02">動作確認URLの設定手順</h4>
                                        <div class="block_body">
                                            <div class="serial-box">

                                                <section class="box">
                                                    <h4 class="box_ttl">1.「動作確認URL」をクリック</h4>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>ログイン後、「動作確認URL」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_1.png?date=2410" alt="動作確認URLをクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">2.変更ボタンを「ON」にする</h4>
                                                    <div class="box_body">
                                                        <p>動作を確認したいサイト（ドメイン）の変更ボタンをクリックして「ON」にしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_2.png?date=2410" alt="変更ボタンを「ON」にする"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h4 class="box_ttl">3.設定完了</h4>
                                                    <div class="box_body">
                                                        <p>以上で動作確認URLの設定は完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_domain_checkproxy_3.png?date=2410" alt="設定完了"></p>
                                                        <p>設定された動作確認URLにアクセスして、表示および動作確認を行ってください。<br>
                                                            動作確認URLを削除する場合は、変更ボタンをクリックして「OFF」にしてください。</p>
                                                        <p class="note">※動作確認URLの設定後、反映までに1時間程度かかります。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-a03">動作確認URLを利用した表示確認方法</h4>
                                        <div class="block_body">
                                            <p>上記の手順で設定された動作確認URLにアクセスすることで、サーバー上の独自ドメインの領域にあるコンテンツを表示することが可能です。</p>
                                            <p>例：「<em class="font-bold">example.com</em>」という独自ドメインに対し、「<em class="font-bold">http://example-com.check-xserver.jp/</em>」という動作確認URLが生成された場合</p>

                                            <table class="table break-all">
                                                <thead>
                                                <tr>
                                                    <th>アップロードしたファイル</th>
                                                    <th>動作確認URLでのアクセス方法</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>example.com/public_html/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/</p>
                                                        <p class="note mb0">※http://example.com/でアクセスした場合と同じコンテンツを表示します。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>example.com/public_html/test/index.html</th>
                                                    <td>
                                                        <p class="mb0">http://example-com.check-xserver.jp/test/index.html</p>
                                                        <p class="note mb0">※http://example.com/test/でアクセスした場合と同じコンテンツを表示します。</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>X2からサービス統合されたアカウントの場合</h5>
                                                <div class="msg_body">
                                                    <p>2019年8月28日にX2からサービス統合されたアカウントの場合、「<em class="font-bold">example.com</em>」という独自ドメインに対して生成される動作確認用URLは「<em class="font-bold">http://example-com.xtwo-check.jp/</em>」となります。</p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </section>

                            <section id="link-b" class="section">
                                <h3 class="section_ttl">WordPressなどのプログラムを使ったサイトの動作を確認する方法</h3>
                                <div class="section_body">

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-b01">hostsファイルとは</h4>
                                        <div class="block_body">
                                            <p>「hosts」ファイルとは、PCのシステムファイルのひとつで、IPアドレスとそれに対応するホスト名(ドメイン名)の一覧が記載されているファイルです。</p>
                                            <p>
                                                お使いのパソコンの「hosts」ファイルにご利用サーバー(エックスサーバー)のIPアドレスとご利用のホスト名を合わせて記述することで、ネームサーバーの変更前にお使いのパソコンから当該Webサイトへアクセスすることが可能になります。
                                            </p>
                                            <p>
                                                なお、「hosts」ファイルはお使いのパソコン上での設定になります。<br>
                                                複数のパソコンから動作確認を行う場合は、アクセスするすべてのパソコンの「hosts」ファイルを編集する必要があります。
                                            </p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-b02">hostsファイルの編集方法</h4>
                                        <div class="block_body">
                                            <p>「hosts」ファイルの場所は下記の通りです。</p>
                                            <table class="table break-all">
                                                <caption>「hosts」ファイルの場所</caption>
                                                <tbody>
                                                <tr>
                                                    <th>Windows 10 / 8 / 7</th>
                                                    <td>C:\WINDOWS\system32\drivers\etc\hosts</td>
                                                </tr>
                                                <tr>
                                                    <th>Mac OS X</th>
                                                    <td>/private/etc/hosts　もしくは　/etc/hosts</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Windowsの設定方法</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「hosts」ファイルをメモ帳などのテキストエディタで開きます。</p>
                                                        </li>
                                                        <li>
                                                            <p>最下部に新しい行を追加し、「サーバーIPアドレス + (半角スペース) + ご利用ドメイン名（もしくはサブドメイン）」と入力をして、上書き保存してください。</p>
                                                            <table class="table break-all">
                                                                <thead>
                                                                <tr>
                                                                    <th>サイトアドレス</th>
                                                                    <th>hostファイルへの追記内容</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>www.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>test.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">※「<span class="red"><strong>***.***.***.***</strong></span>」の部分には「ご利用サーバーのIPアドレス」を入力してください。<br>サーバーのIPアドレスは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「サーバー情報」にて確認が可能です。</p>

                                                            <aside class="msg msg_notice">
                                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>変更を保存する際に管理者へのアクセス許可を求めるダイアログが表示される場合</h5>
                                                                <div class="msg_body">
                                                                    <p>「hosts」ファイルを開く前にテキストエディタのアイコンを右クリックし、「管理者として実行(A)...」から起動したテキストエディタを利用し、hostsファイルを編集/保存してください。</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                        <li>
                                                            <p>設定をしたPCからのみ、エックスサーバーにアップロードしたWebサイトのデータにアクセスすることが可能になります。</p>
                                                            <p class="note">※実際のWebサイトのURLでアクセスし、表示を確認してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>hostsファイルの編集はネームサーバー変更前の一時的な動作確認方法です。<br>
                                                                確認と移転作業の終了後は必ず追記した項目を削除し、元の設定に戻してください。</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>

                                            <dl class="dl">
                                                <dt><i class="ico ico_square-fill"></i>Macの設定方法</dt>
                                                <dd>
                                                    <ol class="ol">
                                                        <li>
                                                            <p>「hosts」ファイルをデスクトップ上に移動し、テキストエディットなどのテキストエディタで開きます。</p>
                                                        </li>
                                                        <li>
                                                            <p>最下部に新しい行を追加し、「サーバーIPアドレス + (半角スペース) + ご利用ドメイン名（もしくはサブドメイン）」と入力をして、「/etc」に戻してください。</p>
                                                            <table class="table break-all">
                                                                <thead>
                                                                <tr>
                                                                    <th>サイトアドレス</th>
                                                                    <th>hostファイルへの追記内容</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>www.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> www.example.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>test.example.com</th>
                                                                    <td><span class="red"><strong>***.***.***.***</strong></span> test.example.com</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <p class="note">※「<span class="red"><strong>***.***.***.***</strong></span>」の部分には「ご利用サーバーのIPアドレス」を入力してください。<br>サーバーのIPアドレスは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「サーバー情報」にて確認が可能です。</p>

                                                            <aside class="msg msg_notice">
                                                                <h5 class="msg_ttl font-m"><i class="ico ico_circle-arrow-right"></i>編集したhostsファイルを「/etc」に移動する際に、管理者権限を求められる場合</h5>
                                                                <div class="msg_body">
                                                                    <p>「認証」に進み、 管理者情報を入力してください</p>
                                                                </div>
                                                            </aside>
                                                        </li>
                                                        <li>
                                                            <p>設定をしたPCからのみ、エックスサーバーにアップロードしたWebサイトのデータにアクセスすることが可能になります。</p>
                                                            <p class="note">※実際のWebサイトのURLでアクセスし、表示を確認してください。</p>
                                                        </li>
                                                        <li>
                                                            <p>hostsファイルの編集はネームサーバー変更前の一時的な動作確認方法です。<br>
                                                                確認と移転作業の終了後は必ず追記した項目を削除し、元の設定に戻してください。</p>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル-->

                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->




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