<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではドメインごとにホームページ公開フォルダが異なっており、これを変更することはできません。そのため、WordPressの運用ドメイン名を変更する場合は…">

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
            
                <h3 class="sub-ttl">エックスサーバー間でWordPressのドメイン名を変更する方法を教えてください。</h3>

                <p>エックスサーバーではドメインごとにホームページ公開フォルダが異なっており、これを変更することはできません。</p>
                <p>そのため、WordPressの運用ドメイン名を変更する場合は、以下の内容に沿って作業が必要です。</p>
                <dl class="border border_gray">


                    <dt class="mb10"><i class="ico ico_square-fill"></i>同じサーバー内でドメイン名を変更したい場合</dt>
                    <dd>
                        <p>サーバーパネルの「WordPress簡単インストール」よりサイトをコピーできます。<br>
                        詳細はマニュアル「<a href="../../manual/man_install_copy_word.php">WordPressのサイトコピーについて</a>」をご確認ください。</p>
                    </dd>

                    <dt class="mt30 mb10"><i class="ico ico_square-fill"></i>異なるエックスサーバー同士でドメイン名を変更したい場合</dt>
                    <dd>
                        <p>サーバーパネルの「WordPress簡単移行」よりサイトを移行できます。<br>
                            詳細はマニュアル「<a href="../../manual/man_install_transfer_wp.php">WordPress簡単移行</a>」をご確認ください。</p>

                        <p>なお、ご利用のプログラムにより「WordPress簡単移行」を使用できない場合があります。 <br>
                        その際は以下の手順をお試しください。</p>
                    </dd>


                    <dt class="mt30 mb10"><i class="ico ico_square-fill"></i>WordPressの独自ドメインへの移行手順</dt>
                                <dd>
                        <ol class="ol">
                            <li class="mb20">
                                <p>FTPソフトを利用し、WordPressのプログラム本体をPC上へ保存します。</p>
                                <img class="mb5 img" src="../../img/faq/faq_service_hp_wp_1.png" alt="FTPソフトでWordPressのファイルをダウンロードしているスクリーンショット">
                                <p class="font-s note"> ※「サーバーid.xsrv.jp」フォルダ内の「public_html」フォルダがドメイン直下のフォルダにあたります。<br>
                                ドメイン直下にWordPressを設置している場合、こちらのフォルダにWordPressの構成ファイルがあります。</p>
                            </li>
                            <li class="mb20">
                               <p>PC上へ保存したWordPressのプログラムファイルのうち、「.htaccess」以外のファイルを移行先のフォルダへアップロードします。</p>
                                <p class="font-s note">（例）http://example.comにインストールしたい場合は<br>「example.com」フォルダ内の「public_html」にデータをアップロードします。</p>
                            </li>
                            <li class="mb20">
                                <p>(2)完了後、移行先の独自ドメインへアクセスし、表示される内容をご確認ください。<br>WordPressのトップページのみ適切に表示され、下層ページへのリンク先が「初期ドメインのアドレス」となっていれば、ここまでの作業は正常に完了しています。</p>
                                <p class="font-s note">※トップページが表示されない場合<br>移行先のフォルダに以下に挙げるデフォルトドキュメントのファイルがある場合は削除が必要です。<br>「index.html」「index.htm」「index.shtml」「index.cgi」</p>
                            </li>
                            <li class="mb20">
                                <p>初期ドメインのWordPressにおいてダッシュボードへログインし、設定メニューより「WordPressアドレス(URL)」と「サイトアドレス(URL)」をそれぞれ移行後のドメイン名のものへ変更してください。</p>
                            </li>
                            <li>
                                <p>独自ドメインへアクセスし、表示される内容をご確認ください。<br>
                                下層ページまで正常に表示されれば、移行作業は完了です。</p>
                                <p class="font-s note mb0">※下層ページが「404 Not Found」エラーになる場合、ダッシュボードより「パーマリンク設定」を改めて行ってください。</p>
                            </li>
                        </ol>
                    </dd>
                </dl>
                <p>なお、当作業はWordPressのカスタマイズにあたり、サポート対象外事項です。<br>
                当移行作業に伴いエラーが発生した場合にも技術的なサポートはいたしかねますので、ご了承ください。</p>
                <p>初期ドメインのWordPressにおいてほとんど記事を投稿していない場合、独自ドメインに対してWordPressを新規にインストールし改めて記事を投稿しなおすことで比較的簡単にWordPressを移行できますので、併せてご参考ください。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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