<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>エックスサーバーでブログを始めよう！初心者でもわかるWordPressブログの始め方 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「とにかくブログを始めたいかた」や「エックスサーバーでWordPressブログを始めようと思ったけれど、手順がよくわからなかったかた」などを対象に、WordPressブログを公開するまでの手順をご案内しています。">


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
        
            <section class="col-single">
            
                <h3 class="sub-ttl">エックスサーバーでブログを始めよう！初心者でもわかるWordPressブログの始め方</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">エックスサーバーでブログを始めよう！初心者でもわかるWordPressブログの始め方</a>
                            <ul>
                                <li><a href="#link-quick">ご利用の流れ1 ー クイックスタートを利用して、短時間で確実に作成する</a></li>
                                <li><a href="#link-trial">ご利用の流れ2 ー 10日間のお試し期間を利用しながら、従来の方法で作成する</a>
                                    <ul>
                                        <li><a href="#link-b">【手順1】エックスサーバー「スタンダードプラン」を申し込もう</a>
                                            <ol>
                                                <li><a href="#link-b01">まずはレンタルサーバーの契約が必要</a></li>
                                                <li><a href="#link-b02">エックスサーバーの申し込み手順</a>
                                                    <ol>
                                                        <li><a href="#link-a01">サーバーIDとは</a></li>
                                                        <li><a href="#link-a02">プランの違いとは</a></li>
                                                    </ol>
                                                </li>
                                                <li><a href="#link-b03">無料お試し期間（10日間）開始！</a></li>
                                                <li><a href="#link-b04">本契約手続きをする</a></li>
                                            </ol>
                                        </li>
                                        <li><a href="#link-c">【手順2】独自ドメインを取得しよう</a>
                                            <ol>
                                                <li><a href="#link-c01">独自ドメインとは</a></li>
                                                <li><a href="#link-c02">独自ドメインと初期ドメイン名の違い</a></li>
                                                <li><a href="#link-c03">独自ドメインの取得手順</a></li>
                                            </ol>
                                        </li>
                                        <li><a href="#link-d">【手順3】独自ドメインを使うための設定をサーバーに追加しよう</a>
                                            <ol>
                                                <li><a href="#link-d01">独自ドメインを使うための設定手順</a></li>
                                            </ol>
                                        </li>
                                        <li><a href="#link-e">【手順4】WordPressを設置しよう</a>
                                            <ol>
                                                <li><a href="#link-e01">WordPressの設置手順</a></li>
                                            </ol>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">エックスサーバーでブログを始めよう！初心者でもわかるWordPressブログの始め方</h4>
                    <div class="section_body">

                        <div class="face-icon face-icon_operator">
                            <div>
                                <p>このページでは、実際の画面の流れに沿って、エックスサーバーでWordPressブログを始めるための手順をご案内します。<br>以下のようなかたにとって、特に役に立つ内容となっています。</p>
                            </div>
                        </div>

                        <div class="face-icon face-icon_user-men1">
                            <div>
                                <p>とにかく今すぐにでも、WordPressブログを始めたいんだけど…<br>
                                    <img class="flex mt10" src="../img/manual/img_blog_example.png?date=20201022" alt="ブログのイメージ">
                                </p>
                            </div>
                        </div>

                        <div class="face-icon face-icon_operator">
                            <div>
                                <p>おまかせください！<br>このページの手順に沿って作業をすれば、WordPressブログがすぐに始められます！</p>
                            </div>
                        </div>

                        <div class="face-icon face-icon_user-women1">
                            <div>
                                <p>WordPressブログを始めるにはエックスサーバーがオススメと紹介されたけれど、なんだか難しくて…</p>
                            </div>
                        </div>

                        <div class="face-icon face-icon_operator border-none pt10">
                            <div>
                                <p>
                                    おまかせください！<br>
                                    作業手順をすべて画像付きで説明します！また、作業途中に出やすいエラーと解決方法もご案内しています！<br>
                                    それでは実際にWordPressブログを作成してみましょう！
                                </p>
                            </div>
                        </div>

                        <aside class="msg msg_notice mb50 mt30">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>お申し込みからWordPressブログを作成するまでの流れは２つ！</h5>
                            <div class="msg_body pl30">
                                <ol class="ol">
                                    <li class="mb10"><a href="#link-quick">クイックスタートを利用して、短時間で確実に作成する</a></li>
                                    <li><a href="#link-trial">10日間のお試し期間を利用しながら、従来の方法で作成する</a></li>
                                </ol>
                            </div>
                        </aside>
                    </div>
                </section>

                <section class="section pt20">
                    <h3 class="section_ttl_border" id="link-quick">１．クイックスタートを利用して、短時間で確実に作成する</h3>
                    <div class="section_body">

                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>より簡単にWordPressサイトが公開できる！「WordPressクイックスタート」について</h5>
                            <div class="msg_body pl30">
                                <p>エックスサーバーでは、より簡単にWordPressサイトが公開できる「WordPressクイックスタート」を提供しています。</p>
                                <p class="reference-example"><img class="flex" src="../img/manual/img_quick_start.png?date=220907" alt="WordPressクイックスタートのイメージ"></p>
                                <p class="reference-example_sp"><img class="flex" src="../img/manual/img_quick_start_sp.png?date=220907" alt="WordPressクイックスタートのイメージ"></p>
                                <p>
                                    サーバーアカウントのお申し込み画面で運用を予定しているWordPressブログの情報を入力することで、「サーバーアカウントのお申し込み」「独自ドメインの取得」「WordPressブログの設置」「WordPressのHTTPS化（SSLサイト化）」などがすべて自動的に完了します。<br>
                                    また、「テーマ」でインストールしたいWordPressテーマを選択することで、WordPressのインストールと同時にテーマをインストールすることができます。
                                </p>
                                <p>より簡単に、より早くWordPressブログが設置できる「WordPressクイックスタート」をぜひご活用ください。</p>
                                <div class="quick-start-use cf">
                                    <div class="quick-start-use_box">
                                        <div class="quick-start-use_txt">
                                            <h6 class="quick-start-use_ttl">利用方法</h6>
                                            <p>お申し込み画面より「<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank" rel="noopener">新規お申し込み</a>」へ進み、<b>WordPressクイックスタートの「利用する」をチェック</b>の上、お手続きを進めてください。<br>
                                                なお、クイックスタートを利用して申し込んだ場合、「10日間無料のお試し期間」はありません。<br>
                                                お申し込みと同時にお支払いが発生しますので、以降の手順はスキップしてください。</p>
                                        </div>
                                        <p class="quick-start-use_img"><img src="../img/manual/quick_start_use_img.png?date=20201022" alt="クイックスタートで一括お申し込みを選択しているスクリーンショット"></p>
                                    </div>
                                </div>
                                <p>クイックスタートを利用すれば「<span class="font-bold red">必要な作業時間は10分</span>」「スマホからでもOK」「迷わず確実に」WordPressブログを始められます！</p>
                                <p>詳しい操作手順は、以下よりご確認いただけます。<br>
                                    <a href="https://www.xserver.ne.jp/blog/xserver-wordpress-quickstart/#link-wp" target="_blank">●オウンドメディア「クイックスタートを使ったWordPressブログの始め方手順」</a>
                                </p>
                            </div>
                    </div>
                </section>
                <!-- /.section -->

                <section class="section pt10">
                    <h3 class="section_ttl_border mb50 mt50" id="link-trial">２．10日間のお試し期間を利用しながら、従来の方法で作成する</h3>
                    <h4 class="section_ttl" id="link-b">【手順1】エックスサーバー「スタンダードプラン」を申し込もう</h4>
                    <div class="section_body">

                        <div class="face-icon face-icon_operator border-none">
                            <div>
                                <p>WordPressブログを運営するための<em class="font-bold">ステップその1は、「レンタルサーバー」の契約</em>です。</p>
                            </div>
                        </div>

                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">まずはレンタルサーバーの契約が必要</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator">
                                    <div>
                                        <em class="font-bold">「レンタルサーバー」とはウェブサイトの公開やメールアドレスの運用に必要なサーバーをレンタルするサービス</em>です。<br><br>
                                        技術的には、みなさんが自宅で使用している「インターネットに接続できるPC」でも、WordPressブログを作ることが可能です。<br>しかし、自宅のPCでWordPressブログを運営しようとすると、非常に多くの知識が必要となります。
                                        <dl class="dl mt15">
                                            <dt><i class="ico ico_square-fill"></i>自宅のPCでWordPressブログを作る際に必要となる知識の例</dt>
                                            <dd>
                                                <p class="reference-example"><img class="flex" src="../img/manual/img_create_wpblog_knowledge.png?date=20201022" alt="自宅のPCでWordPressブログを作る際に必要となる知識の例"></p>
                                                <p class="reference-example_sp"><img class="flex" src="../img/manual/img_create_wpblog_knowledge_sp.png?date=20201022" alt="自宅のPCでWordPressブログを作る際に必要となる知識の例"></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="face-icon face-icon_user-men2">
                                    <div>
                                        <p>こんないろいろなことを覚えるのは無理だよ！<br>そんなことはいいから、WordPressブログをいますぐ立ち上げたいんだ！</p>
                                    </div>
                                </div>

                                <div class="face-icon face-icon_operator border-none pt10">
                                    <div>
                                        <p>それならまずは「レンタルサーバー」を契約しましょう。<br>レンタルサーバーと契約することで、このような<em class="font-bold">複雑なサーバー管理を業者に任せつつ、より高速かつ安定した環境でウェブサイトを公開することが可能</em>です。</p>
                                        <p>ここではレンタルサーバー「エックスサーバー」のお申し込み手順をご案内します。</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">エックスサーバーの申し込み手順</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator border-none">
                                    <div>
                                        <p>それではエックスサーバーのお申し込み手順を見ていきましょう。</p>
                                    </div>
                                </div>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl">1.「お申し込みページに進む」ボタンをクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator mb0 border-none">
                                                <div>
                                                    <p class="mb10">まずはこちらの<em class="font-bold">「お申し込みはこちら」</em>ボタンをクリックします。</p>
                                                    <p class="red font-bold mb5">＼こちらをクリック！／</p>
                                                    <a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" class="btn btn_orange-l mt0" target="_blank" rel="noopener">
                                                    <span class="label label_btn-apply-sub">お申し込みはこちら<i class="ico ico_new-window"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">2.「10日間無料お試し 新規お申し込み」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p class="mb0"><em class="font-bold">「10日間無料お試し 新規お申し込み」</em>ボタンをクリックします。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_1.png?date=20210609" alt="10日間無料お試し 新規お申し込みをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">3.サーバーのご契約内容を選択</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>ご契約プランを選択してください。<br>
                                                    <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_42.png?date=20211126" alt="お申し込みフォームのスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice mb30">
                                                <p class="msg_ttl" id="link-a01"><i class="ico ico_circle-arrow-right"></i>サーバーIDとは</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator pt0">
                                                        <div>
                                                            <em class="font-bold">「サーバーID」はお客様のご契約を管理するためのID</em>です。<br>
                                                            さらには、WordPressブログを公開するためのアドレス（https://サーバーID.xsrv.jp/）として利用することも可能です。<br>この、「サーバーID.xsrv.jp」の文字列を<em class="font-bold">「初期ドメイン名」</em>と呼んでいます。
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>サーバーIDとは・・・</dt>
                                                                <dd>
                                                                    <ul class="ul">
                                                                        <li>ご契約を管理するためのID</li>
                                                                        <li>「https://サーバーID.xsrv.jp/」というアドレス（初期ドメイン名）でホームページを公開することも可能（初期ドメイン名を使用しないことも可能）
                                                                        </li>
                                                                    </ul>
                                                                </dd>
                                                            </dl>
                                                            なお、「独自ドメイン」でWordPressブログを公開する場合、ブログ訪問者に対してサーバーIDが表示されることはありません。<br>
                                                            そのため、サーバーIDをあとから変更することはできませんが、気軽に決めてしまって問題ありません。<br><br>
                                                            初期ドメイン名でWordPressブログを公開する場合、サーバーIDは慎重に検討してください。
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_user-women2 border-none pt10 mb0">
                                                        <div>
                                                            <p><em class="font-bold">「https://www.example.com/」みたいな「独自ドメイン」でWordPressブログを公開する場合、サーバーIDは特にはこだわらなくもいい</em>のね...!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                            <aside class="msg msg_notice mb30">
                                                <p class="msg_ttl" id="link-a02"><i class="ico ico_circle-arrow-right"></i>プランの違いとは</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator border-none">
                                                        <div>
                                                            エックスサーバーでは「ディスクスペース」などに違いがある、複数のプランを提供しています。
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>プラン間の違い（一例）</dt>
                                                                <dd>
                                                                    <table class="primary-table-ml table table_striped mb5">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="w25per"></th>
                                                                            <th>スタンダードプラン</th>
                                                                            <th>プレミアムプラン</th>
                                                                            <th>ビジネスプラン</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="tac" scope="row">月額<span class="font-xs">(税込)</span></th>
                                                                            <?php
                                                                                //20%OFF計算式
                                                                                function off20($base_price) {
                                                                                    echo number_format(floor($base_price - $base_price * 0.2));
                                                                                }

                                                                                //25%OFF計算式
                                                                                function off25($base_price) {
                                                                                    echo number_format(floor($base_price - $base_price * 0.25));
                                                                                }

                                                                                //31%OFF計算式
                                                                                function off30($base_price) {
                                                                                    echo number_format(floor($base_price - $base_price * 0.30));
                                                                                }

                                                                                //35%OFF計算式
                                                                                function off35($base_price) {
                                                                                    echo number_format(floor($base_price - $base_price * 0.35));
                                                                                }
                                                                            ?>
                                                                            <td class="tac">990円〜<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="hidden-s">【実質495円〜】</span></td>
                                                                            <td class="tac">1,980円〜<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="hidden-s">【実質990円〜】</span></td>
                                                                            <td class="tac">3,960円〜<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="hidden-s">【実質1,980円〜】</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="tac" scope="row">ディスクスペース</th>
                                                                            <td class="tac">500GB</td>
                                                                            <td class="tac">600GB</td>
                                                                            <td class="tac">700GB</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p class="font-s">※<span class="font-bold red">9/4まで利用料金が実質半額</span>になるキャンペーン特典が適用されています。</p>
                                                                </dd>
                                                            </dl>
                                                            プランは契約後に変更することも可能です。<br>大量の画像を掲載する予定などがない限り、<em class="font-bold">WordPressブログを始める時点では「スタンダードプラン」で十分</em>です。
                                                        </div>
                                                    </div>
                                                    </div>
                                            </aside>

                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">4.「XServerアカウントの登録へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                        <em class="font-bold">「XServerアカウントの登録へ進む」</em>ボタンをクリックしてください。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_44.png?date=20211126" alt="XServerアカウントの登録へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">5.お客様情報を入力</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>続けてフォームの<em class="font-bold">「必須」</em>となっている情報を入力していきます。<br>
                                                        <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_43.png?date=20210609" alt="お申し込みフォームのスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>メールアドレスを入力したときに「入力されたメールアドレスは登録済みのためご利用いただけません。」と表示された場合</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator mb0 border-none">
                                                        <div>
                                                            <p>「入力されたメールアドレスは登録済みのためご利用いただけません。」というエラーは、過去にエックスサーバーを利用したことがあり、そのときに今回入力したメールアドレスを使用していた場合に表示されます。<br>
                                                                この場合、「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」にログインし、ログイン後の画面からエックスサーバーをお申し込みください。<br>
                                                                <img class="img mt10" src="../img/manual/man_start_wpblog_3.png?date=20201022" alt="「入力されたメールアドレスは登録済みのためご利用いただけません。」_エラー画面のスクリーンショット">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">6.「次へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                        必要な情報をすべて入力すれば、<em class="font-bold">「次へ進む」</em>ボタンがクリックできるようになります。<br><em class="font-bold">「次へ進む」</em>ボタンをクリックしてください。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_4.png?date=20210426" alt="お申し込み内容の確認へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">7.メール認証</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                        表示されているメールアドレス宛に6桁の数字のみ記載されたメールが当社より届きますので、そちらを「確認コード」欄に入力してください<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_45.png?date=20210609" alt="認証コード入力画面のスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">8.「次へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                        6桁の数字を入力すると<em class="font-bold">「次へ進む」</em>ボタンがクリックできるようになります。<br>
                                                        <em class="font-bold">「次へ進む」</em>ボタンをクリックしてください。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_46.png?date=20210609" alt="認証コード入力画面のスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">9.「この内容で申込みする」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                    入力した内容を確認し、問題がなければ<em class="font-bold">「この内容で申込みする」</em>をクリックします。<br>
                                                    <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_5.png?date=20201022" alt="この内容で申込みするをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「SMS・電話認証へ進む」というボタンが表示された場合</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_user-men5">
                                                        <div>
                                                            <p>「この内容で申込みする」じゃなく、<em class="font-bold">「SMS・電話認証へ進む」</em>が表示されたんだけど…</p>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_operator border-none pt10 mb0">
                                                        <div>
                                                            <p>はい、お申し込みの際に、SMS認証もしくは電話認証が必要になる場合があります。<br>
                                                            この場合、<em class="font-bold">「SMS・電話認証へ進む」</em>をクリックしてください。<br>
                                                            <img class="img mt10" src="../img/manual/man_start_wpblog_6.png?date=20201022" alt="SMS・電話認証へ進むをクリックしているスクリーンショット">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">10.（SMS・電話認証）「認証コードを取得する」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>「認証コードを取得するお電話番号」を入力し、「取得方法」を選択したうえで、<em class="font-bold">「認証コードを取得する」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_7.png?date=20201022" alt="認証コードを取得するをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">11.（SMS・電話認証）「認証して申し込みを完了する」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                    指定した受信方法で、入力したお電話番号あてに認証コードが届きます。認証コードを入力し、<em class="font-bold">「認証して申し込みを完了する」</em>をクリックしてください。<br>
                                                    <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_8.png?date=20201022" alt="認証して申し込みを完了するをクリックしているスクリーンショット"><br>
                                                    以上でSMS・電話認証は完了です。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">12.「サーバー設定完了のお知らせ」という件名のメールが届く</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>お申し込みは以上で完了です。<br>通常、「<em class="font-bold red">数分以内</em>」に、<em class="font-bold">「サーバー設定完了のお知らせ」</em>という件名のメールが入力したメールアドレスに届きます。</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-men4">
                                                <div>
                                                    <p>えっ、数分待つだけでいいの？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator border-none pt10">
                                                <div>
                                                    <p>はい！<br>ごくまれに「数時間程度」お待たせする場合もありますが、ほとんどの場合は「<em class="font-bold red">数分以内</em>」に「サーバー設定完了のお知らせ」メールが届きます！</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b03">無料お試し期間（10日間）開始！</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator border-none">
                                    <div>
                                        <p>「サーバー設定完了のお知らせ」メールが届けば、無料お試し期間（10日間）の開始です！</p>
                                        <ul class="ul">
                                            <li>管理ツールからWordPressブログの設置が簡単にできるか</li>
                                        </ul>
                                        <p>など、お試し期間中に確認しましょう！</p>
                                    </div>
                                </div>
                                <aside class="msg msg_notice mb30">
                                    <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>お試し期間中に独自ドメインの動作を確認したい場合</p>
                                    <div class="msg_body pl30">
                                        <div class="face-icon face-icon_user-men5">
                                            <div>
                                                <p>お試し期間中に、独自ドメインでも動作を確認できるのかなぁ？</p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_operator">
                                            <div>
                                                <p>
                                                    はい、あとの手順で案内している「ドメイン設定の追加」など、独自ドメインの動作を確認することも可能です。
                                                </p>
                                                <p>
                                                    ただし、独自ドメインの取得は、本契約手続き（お試し期間を終了させ、サーバーのご利用料金をお支払いいただくこと）後にご利用が可能となります。
                                                </p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_user-men6">
                                            <div>
                                                <p>じゃあ、あとあと独自ドメインでWordPressブログを作る予定なら、お試し期間中は初期ドメイン名（サーバーID.xsrv.jp）を使って、「自分でもブログの設置ができそうか」なんかの確認に徹したほうがいいってことか。</p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_operator border-none pt10 mb0">
                                            <div>
                                                <p>はい、初期ドメイン名（サーバーID.xsrv.jp）から独自ドメインにWordPressブログを移動させることも可能ですが、余分な作業が発生してしまいます。<br>そのため、初期ドメイン名（サーバーID.xsrv.jp）側でWordPressブログをどんどん作りこむよりも、まずは「動作確認」に徹することをお勧めします。</p>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b04">本契約手続きをする</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator border-none">
                                    <div>
                                        <p>無料お試し期間中に動作を確認して問題がなければ、本契約手続きをしましょう！</p>
                                    </div>
                                </div>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl">1.「XServerアカウント」にログインする</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p class="mb10"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント ログインページ</a>にアクセスし、「メールアドレス」と「XServerアカウントパスワード」を入力してログインします。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_9.png?date=20201022" alt="ログインをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>XServerアカウントパスワードの確認方法</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator border-none mb0">
                                                        <div>
                                                            <p><em class="font-bold">「XServerアカウントパスワード」</em>は<em class="font-bold">「サーバー設定完了のお知らせ」</em>の<em class="font-bold">「【2】管理ツールのログイン情報」</em>に記載されています。<br>
                                                                <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_10.png?date=20201022" alt="管理ツールのログイン情報のスクリーンショット">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">2.「料金支払い」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                    上部メニューの<em class="font-bold">「料金支払い」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_11.png?date=20230131" alt="料金支払いをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">3.表の左端にチェックを入れ、契約期間を選択し、「支払方法を選択する」ボタンをクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>
                                                    本契約をするサーバーアカウントにチェックを入れ、契約期間を選択します。<br>その後、<em class="font-bold">「支払方法を選択する」</em>ボタンをクリックします。<br>
                                                    <img class="img mt10 mb15" src="../img/manual/man_start_wpblog_12.png?date=20230131" alt="支払方法を選択するをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl" id="link-a01"><i class="ico ico_circle-arrow-right"></i>長期契約ほどお得になります！</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator border-none mb0">
                                                        <div>
                                                            契約期間は「3ヶ月」「6ヶ月」「12ヶ月」「24ヶ月」「36ヶ月」から選択できますが、<em class="font-bold">より長い期間を選択するほど、月々の料金が安くなります。</em><br>
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>スタンダードプランのご利用料金の場合</dt>
                                                                <dd>
                                                                    <p class="font-s fr mb0">(税込)</p>
                                                                    <table class="primary-table-ml table table_striped mb5">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>契約期間</th>
                                                                            <th>初期設定費用</th>
                                                                            <th>月々のご利用料金</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="tac" scope="row">3ヶ月</th>
                                                                            <td class="tac">0円</td>
                                                                            <td class="tac">1,320円</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="tac" scope="row">6ヶ月</th>
                                                                            <td class="tac">0円</td>
                                                                            <td class="tac">1,210円</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="tac" scope="row">12ヶ月</th>
                                                                            <td class="tac">0円</td>
                                                                            <td class="tac">1,100円 <br><span class="font-bold red">キャッシュバックで<br class="hidden-s">【実質550円】</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="tac" scope="row">24ヶ月</th>
                                                                            <td class="tac">0円</td>
                                                                            <td class="tac">1,045円 <br><span class="font-bold red">キャッシュバックで<br class="hidden-s">【実質522円】</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="tac" scope="row">36ヶ月</th>
                                                                            <td class="tac">0円</td>
                                                                            <td class="tac">990円 <br><span class="font-bold red">キャッシュバックで<br class="hidden-s">【実質495円】</span></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p class="font-s mb0">※<span class="font-bold red">9/4まで利用料金が実質半額</span>になるキャンペーン特典が適用されています。</p>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">4.希望する支払い方法を選択</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>希望する支払い方法を選択します。ここでは「クレジットカード」で案内します。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_13.png?date=20230131" alt="クレジットカード決済画面へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">5.（クレジットカードの場合）カード番号、有効期限、セキュリティコードを入力し、「確認画面へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>カード番号、有効期限、セキュリティコードをそれぞれ入力、選択し、<em class="font-bold">「確認画面へ進む」</em>ボタンをクリックします。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_14.png?date=20210609" alt="確認画面へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">6.「支払いをする」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>入力内容を確認し、問題がなければ<em class="font-bold">「支払いをする」</em>ボタンをクリックします。<br>以上でお支払いは完了です。<br>クレジットカードの場合は支払処理が即時完了し、ご契約が即座に本契約に移行します。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_15.png?date=20210609" alt="カードでのお支払い(確定)をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>クレジットカード以外の場合の、お支払いが反映されるまでの目安</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator">
                                                        <div>
                                                            銀行振込、コンビニ決済、ペイジー決済、あと払い（ペイディ）、プリペイドを利用した場合のお支払いの反映時間の目安は以下のとおりです。<br>
                                                            <div class="border border_gray mt10">
                                                                <ul class="ul ul_list_margin mb0">
                                                                    <li>銀行振込・・・お振込み日〜最大2銀行営業日程度で反映</li>
                                                                    <li>コンビニ決済・・・コンビニ窓口でのお支払い後、数時間程度で反映</li>
                                                                    <li>ペイジー決済・・・決済後、数時間程度で反映</li>
                                                                    <li>あと払い（ペイディ）・・・決済後、即時完了</li>
                                                                    <li>プリペイド・・・決済後、即時完了</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_user-women2 border-none pt10 mb0">
                                                        <div>
                                                            <p>「銀行振込」は余裕を持ってしないとダメなのね。</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 class="section_ttl" id="link-c">【手順2】独自ドメインを取得しよう</h4>
                    <div class="section_body">
                        <div class="face-icon face-icon_operator border-none">
                            <div>
                                <p>WordPressブログを運営するための<em class="font-bold">ステップその2は、「独自ドメイン」の契約</em>です。</p>
                            </div>
                        </div>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">独自ドメインとは</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator border-none">
                                    <div>
                                        <em class="font-bold">「独自ドメイン」とは、「WordPressブログ」を作るための、「アドレス」を独占的に利用するための仕組み</em>です。<br>「独自ドメイン」を取得することにより、WordPressブログに自分だけのアドレスをつけることが可能です。<br><br>
                                        独自ドメインはWordPressブログのアドレスのほかにも、「メールアドレス」の「@」よりうしろなどに使うことも可能です。
                                        <dl class="dl mt15">
                                            <dt>例：example.comドメインを取得する</dt>
                                            <dd>
                                                <p class="reference-example"><img class="flex" src="../img/manual/img_original_domain.png?date=20201022" alt="独自ドメインのメリット"></p>
                                                <p class="reference-example_sp"><img class="flex" src="../img/manual/img_original_domain_sp.png?date=20201022" alt="独自ドメインのメリット"></p>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c02">独自ドメインと初期ドメイン名の違い</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_user-men5">
                                    <div>
                                        <p>「独自ドメイン」とエックスサーバーの申し込み時にもらえた「初期ドメイン名」は何が違うの？</p>
                                    </div>
                                </div>
                                <div class="face-icon face-icon_operator border-none pt10">
                                    <div>
                                        <p>「初期ドメイン名」も「独自ドメイン」と同じように、WordPressブログの公開やメールアドレスの作成などに利用することが可能です。<br>しかし、細かいところで以下のような違いがあります。</p>
                                    </div>
                                </div>
                                <dl class="dl">
                                    <dt>
                                        <i class="ico ico_square-fill"></i>「初期ドメイン名」＝サーバー契約についてくる無料のサービス<br>
                                        　「独自ドメイン」＝基本的に有料サービス、ただしエックスサーバーでは「独自ドメイン永久無料特典」あり
                                    </dt>
                                    <dd>
                                        <div class="face-icon face-icon_operator">
                                            <div>
                                                <p>
                                                    初期ドメイン名はエックスサーバーのお申し込みとともに自動的に割り当てられた、「無料」のアドレスです。<br>
                                                    <em class="font-bold">初期ドメイン名の利用に際して、サーバーご利用料金以外の特別な料金は必要ありません。</em>
                                                </p>
                                                <p>
                                                    また、独自ドメインは一般的に有料のサービスですが、エックスサーバーでは「独自ドメイン永久無料特典（プラン特典）」をご利用いただくことで、無料で独自ドメインのご利用が可能です。
                                                </p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_user-men7">
                                            <div>
                                                <p>
                                                    初期ドメイン名アドレスに「xsrv」が絶対についてしまうんだね。<br>
                                                   独自ドメインも「独自ドメイン永久無料特典」を使えば無料、と…
                                                </p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_operator border-none pt10">
                                            <div>
                                                <p>
                                                    アドレスに「xsrv」という文字列が含まれてしまうことが気になる方は「独自ドメイン永久無料特典をご利用ください。<br>
                                                    独自ドメインなら、誰も取得していない文字列であれば、好きなドメイン名を登録することができます。
                                                </p>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>現在のところ、初期ドメイン名ではGoogle AdSenseが利用できません</dt>
                                    <dd>
                                        <div class="face-icon face-icon_operator">
                                            <div>
                                                <p>Google AdSenseの利用には「独自ドメイン」の所有権確認（お客様ご自身がドメイン名を所有していることの証明）が必要になります。<br>しかし、「初期ドメイン名」は厳密には「独自ドメイン」ではなく「独自ドメインのサブドメイン形式」にあたるため、Google AdSenseが求める所有権確認ができません。<br>そのため、<em class="font-bold">現在のところ、「初期ドメイン名」ではGoogle AdSenseは利用できません。</em></p>
                                            </div>
                                        </div>
                                        <div class="face-icon face-icon_user-men4 pt10 border-none">
                                            <div>
                                                <p>将来的に「Google AdSense」で収益を得ようとおもったら、「独自ドメイン」でWordPressブログを作る必要があるのか。</p>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </section>

                        <section class="block">
                            <h5 class="block_ttl" id="link-c03">独自ドメインの取得手順</h5>
                            <div class="block_body">
                                <aside class="msg msg_notice">
                                    <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>【手順1】において「初期ドメイン名」でWordPressブログを公開することにした場合</p>
                                    <div class="msg_body pl30">
                                        <p>独自ドメインの取得は不要です。<br>そのまま「<a href="#link-e">【手順4】WordPressを設置しよう</a>」に進んでください。</p>
                                    </div>
                                </aside>

                                <aside class="msg mb30">
                                    <h5 class="msg_ttl"><i class="ico ico_circle-right"></i>契約特典の「独自ドメイン永久無料特典」を利用しよう！</h5>
                                    <div class="msg_body">
                                        <div class="face-icon face-icon_operator">
                                            <div>
                                                <em class="font-bold">エックスサーバでは、すべてのプランで「独自ドメイン永久無料特典」を提供しています。</em><br>
                                                サーバー本契約後、.comや.net、.blogといった独自ドメインが無料で利用できるご契約特典です！<br>
                                                Webサイトやメールの運用に欠かせない独自ドメインが、対象のサーバー契約が続く限り永久に無料で利用できます！
                                                <p class="mt10">
                                                    <a href="man_order_present_domain.php" class="mr5 btn btn_white-borderd">参考：独自ドメイン永久無料特典のお申し込み手順<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="msg_ttl"><i class="ico ico_circle-right"></i>契約特典の「独自ドメイン1年無料特典」を利用しよう！</h5>
                                    <div class="msg_body">
                                        <div class="face-icon face-icon_operator">
                                            <div>
                                                <em class="font-bold">エックスサーバーでは、全てのプランで「独自ドメイン1年無料特典」を提供しています。</em><br>
                                                サーバー本契約後、.siteや.onlineといった16種類のドメインを全て1年間無料で利用できます！<br>
                                                ドメインの種類ごとに1つずつ取得ができるので、複数のサイトを運営したい場合にも便利です！
                                                <p class="mt10">
                                                    <a href="man_order_oneyear_domain.php#link-b" class="mr5 btn btn_white-borderd">参考：独自ドメイン1年無料特典のお申し込み手順<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face-icon face-icon_user-men6 border-none pt10">
                                        <div>
                                            <p>無料でドメインが利用できるのは魅力的だなあ！</p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </section>

                                <div class="face-icon face-icon_operator border-none">
                                    <div>
                                        <p>それでは独自ドメインの取得手順をご案内します。<br>独自ドメインは「XServerアカウント」からのお申し込みになります。</p>
                                    </div>
                                </div>

                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl">1.「XServerアカウント」にログインする</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p class="mb10"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント ログインページ</a>にアクセスし、「メールアドレス」と「XServerアカウントパスワード」を入力してログインします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_9.png?date=20201022" alt="ログインをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">2.「+ドメイン取得」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>トップページ下部の「ドメイン」より、<em class="font-bold">「+ドメイン取得」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_16.png?date=20230131" alt="+ドメイン取得をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">3.WordPressサイトのアドレスにしたい文字列を入力し、「検索する」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>WordPressサイトのアドレスにしたい文字列を入力フォームに入力し、<em class="font-bold">「検索する」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_19.png?date=20240426" alt="「検索する」をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-women1">
                                                <div>
                                                    <p>「com」「net」などは何にすればいいの？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator border-none pt10">
                                                <div>
                                                    いずれも<em class="font-bold">ドメインとしての機能にかわりはないため、お好きなものにすれば問題ありません</em>が、なかなか決められない場合はこんなルールで選ぶとよいかもしれません。
                                                    <dl class="dl mt15">
                                                        <dt><i class="ico ico_square-fill"></i>自分が作りたいWordPressブログの雰囲気にあうものがある場合、それにする</dt>
                                                        <dd><p>例：写真集のサイトを作りたい　→　「photo」「pics」「design」などにする</p></dd>
                                                        <dt><i class="ico ico_square-fill"></i>とにかく安いドメインにする</dt>
                                                        <dd>
                                                            <p class="m0">
                                                                <a href="../domain/" class="mr5 btn btn_white-borderd">参考：ドメイン料金一覧<i class="ico ico_chevron-right"></i></a>
                                                            </p>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>特にこだわりはない場合</dt>
                                                        <dd><p>メジャーな「com」「net」にする</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">4.「お申し込み内容の確認とお支払いへ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>チェックしたドメイン名が利用可能か表示されます。<br>チェックボックスがチェックされていれば、そのドメイン名を取得することが可能です。</p>
                                                    <p>取得可能なドメイン名にチェックを入れ、「利用規約」および「個人情報に関する公表事項」を確認し、「利用規約」「個人情報に関する公表事項」に同意する にチェックを入れます。<br>
                                                    <em class="font-bold">「お申し込み内容の確認とお支払いへ進む」</em>をクリックしてください。</p>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_21.png?date=20210426" alt="お申し込み内容の確認・料金のお支払いをクリックしているスクリーンショット">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">5.ドメイン取得料金を支払う</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>サーバー本契約のときにも表示された、「お支払い画面」が表示されます。<br>ご希望の方法で、ドメイン取得料金を支払ってください。<br>
                                                        <img class="img mt10" src="../img/manual/man_start_wpblog_22.png?date=20210122" alt="お支払い画面のスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">6.料金の支払いが反映されれば、ドメイン名の取得は完了！</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>ドメイン取得料金のお支払いが完了すれば、ドメイン名の取得は完了です。<br>トップページ下部の「ドメイン」に、取得したドメイン名が表示されるようになります。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_23.png?date=20230131" alt="ご契約一覧のドメインのスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">【手順3】独自ドメインを使うための設定をサーバーに追加しよう</h4>
                    <div class="section_body">
                        <div class="face-icon face-icon_operator border-none">
                            <div>
                                <p>ここまでの作業で、レンタルサーバーの申し込みとドメインの取得が完了しました。<br>引き続き、契約したエックスサーバーにWordPressブログを設置していきましょう。</p>
                            </div>
                        </div>
                        <section class="block">
                            <h5 class="block_ttl" id="link-d01">独自ドメインを使うための設定手順</h5>
                            <div class="block_body">
                                <div class="face-icon face-icon_operator">
                                    <div>
                                        <p><em class="font-bold">エックスサーバーで独自ドメインを用いたWordPressブログを公開するためには、「独自ドメインを使うための設定」が必要</em>になります。</p>
                                    </div>
                                </div>
                                <div class="face-icon face-icon_user-men1">
                                    <div>
                                        <p>えっ、むずかしいの？</p>
                                    </div>
                                </div>
                                <div class="face-icon face-icon_operator border-none pt10">
                                    <div>
                                        <p>いいえ、作業はとっても簡単です。</p>
                                    </div>
                                </div>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl">1.「サーバーパネル」にログインする</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>トップページ内、サーバー契約の右側にある、<em class="font-bold">「サーバー管理」</em>をクリックします。<br>以上でサーバーパネルにログインできます。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_24.png?date=20230131" alt="サーバー管理をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-men5">
                                                <div>
                                                    <p>あれっ？設定完了メールに「サーバーパスワード」なんかが書かれていたと思うけれど…</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>はい、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル ログインページ</a>からサーバーID、サーバーパスワードを入力してサーバーパネルにログインすることも可能です。<br>しかし、<em class="font-bold">複数のログインページやたくさんのIDを覚えようとすると複雑になってしまうので、「XServerアカウント」から「サーバーパネル」にログインすることをお勧めしています。</em></p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-men4 border-none pt10">
                                                <div>
                                                    <p>あ、そっか。それならXServerアカウントのログイン情報だけ覚えていればいいもんね。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">2.「ドメイン設定」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>サーバーパネルのトップページに並んでいるメニューのなかから、<em class="font-bold">「ドメイン設定」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_25.png?date=220907" alt="ドメイン設定をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">3.「ドメイン設定追加」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p><em class="font-bold">「ドメイン設定追加」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_26.png?date=220907" alt="ドメイン設定追加をクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">4.「確認画面へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>取得したドメイン名を「.com」「.net」などまで入力し、<em class="font-bold">「確認画面へ進む」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_27.png?date=220907" alt="確認画面へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">5.「追加する」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>入力したドメイン名を確認し、間違いがなければ、<em class="font-bold">「追加する」</em>をクリックします。<br>
                                                    <img class="img mt10 mb10" src="../img/manual/man_start_wpblog_28.png?date=220907" alt="追加するをクリックしているスクリーンショット"><br>
                                                    以上で独自ドメインを使うための設定は完了です。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_29.png?date=220907" alt="ドメイン設定追加の完了画面のスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「入力されたドメイン「●●●●●●」は既に設定されています。」と表示された場合</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_user-women1 pt0">
                                                        <div>
                                                            「入力されたドメイン「●●●●●●」は既に設定されています。」と表示されて、独自ドメインが追加できなかったんだけど…<br>
                                                            <img class="img mt10" src="../img/manual/man_start_wpblog_30.png?date=220907" alt="サポートに依頼するをクリックしているスクリーンショット">
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_operator border-none mb0 pt10">
                                                        <div>
                                                            <p>そのエラーが出た場合、エラーメッセージに記載されているとおり、<em class="font-bold">「サポートに依頼する」</em>ボタンをクリックしましょう。<br>最大1日程度でエラーが出ないようになりますので、再度設定の追加を試してみてください。</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">【手順4】WordPressを設置しよう</h4>
                    <div class="section_body">
                        <div class="face-icon face-icon_operator border-none">
                            <div>
                                <p>最後はWordPressの設置です。WordPressブログの設置まであと一歩、がんばりましょう。</p>
                            </div>
                        </div>
                        <section class="block">
                            <h5 class="block_ttl" id="link-e01">WordPressの設置手順</h5>
                            <div class="block_body">
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl">1.サーバーパネルの「WordPress簡単インストール」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>引き続きサーバーパネルから、<em class="font-bold">「WordPress簡単インストール」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_31.png?date=220907" alt="WordPress簡単インストールをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">2.ドメイン名を選択</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>「ドメイン選択画面」が表示されたら、先ほど追加したドメイン名の右にある<em class="font-bold">「選択する」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_32.png?date=220907" alt="選択するをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">3.「WordPressインストール」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p><em class="font-bold">「WordPressインストール」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_33.png?date=220907" alt="WordPressインストールをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl">4.ブログ名などの必要な情報を入力し、「確認画面へ進む」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>「サイトURL」を選択・入力します。<br>その後、「ブログ名」「ユーザー名」「パスワード」「メールアドレス」を入力し、<em class="font-bold">「確認画面へ進む」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_34.png?date=230322" alt="確認画面へ進むをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-women3">
                                                <div>
                                                    <p><em class="font-bold">「サイトURL」</em>の選択肢・入力フォームはどうしたらいいの？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator pt10">
                                                <div>
                                                    <em class="font-bold">WordPressをどのURLで運用したいかによって、選択、入力する内容が異なります。</em>
                                                    <dl class="dl mt15">
                                                        <dt><i class="ico ico_square-fill"></i>選択肢のプルダウン</dt>
                                                        <dd><p>WordPressブログのアドレスの、「http://<em class="font-bold">【この部分】</em>/」になります。<br>「http://www.ドメイン名/」で運用したい場合は「www.ドメイン名」を、「http://ドメイン名/」で運用したい場合は、「ドメイン名」を選択します。</p></dd>
                                                        <dt><i class="ico ico_square-fill"></i>入力フォーム</dt>
                                                        <dd>
                                                            <p>WordPressブログのアドレスの、「http://ドメイン名/<em class="font-bold">【この部分】</em>」になります。<br>「http://ドメイン名/」といったURL（ドメイン直下）で運用したい場合は入力フォームには何も入力しません。<br>「http://ドメイン名/wp/」といったURL（サブディレクトリ）で運用したい場合、入力フォームには「wp」を入力します。</p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-women3">
                                                <div>
                                                    <p><em class="font-bold">「キャッシュ自動削除」</em>と<em class="font-bold">「データベース」</em>は？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator pt10">
                                                <div>
                                                    <p>それぞれ初期状態の、<em class="font-bold">「ONにする」</em>と<em class="font-bold">「自動でデータベースを生成する」</em>を選択したままとしてください。</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-women3">
                                                <div>
                                                    <p><em class="font-bold">「テーマ」</em>は？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator pt10">
                                                <div>
                                                    <p>インストールしたいWordPressテーマを選択することで、WordPressのインストールと同時にテーマをインストールすることができます。</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-women3">
                                                <div>
                                                    <p><em class="font-bold">「テーマオプション」</em>は？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator border-none pt10">
                                                <div>
                                                    <p>選択したWordPressテーマに子テーマ・プラグインの提供がある場合、それらを同時にインストールするか選択できます。</p>
                                                    <dl class="dl">
                                                        <dt><i class="ico ico_square-fill"></i>子テーマの提供があるテーマ</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>Cocoon</li>
                                                                <li>Lightning</li>
                                                                <li>XWRITE</li>
                                                                <li>SWELL</li>
                                                            </ul>
                                                        </dd>
                                                        <dt><i class="ico ico_square-fill"></i>プラグインの提供があるテーマ</dt>
                                                        <dd>
                                                            <ul class="ul">
                                                                <li>Snow Monkey</li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl">5.「インストールする」をクリック</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator">
                                                <div>
                                                    <p>確認画面が表示されますので、入力した内容を確認し、問題がなければ<em class="font-bold">「インストールする」</em>をクリックします。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_35.png?date=221215" alt="インストールするをクリックしているスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_user-men5">
                                                <div>
                                                    <p><em class="font-bold">「インストールを行うと、インストール先ディレクトリ内の「index.html」が削除されます。ご注意ください。」</em>と表示されたんだけど、大丈夫なの？</p>
                                                </div>
                                            </div>
                                            <div class="face-icon face-icon_operator border-none pt10">
                                                <div>
                                                    <p>はい、今回追加したドメイン名ではまだ何もサイトを運用していないため、このメッセージは無視して問題ありません！</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl">6.設置完了！</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>完了画面が表示されます。<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_36.png?date=220907" alt="WordPressインストールの完了画面のスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="box">
                                        <h6 class="box_ttl">7.WordPressブログに実際にアクセスしてみましょう</h6>
                                        <div class="box_body">
                                            <div class="face-icon face-icon_operator border-none">
                                                <div>
                                                    <p>設置したWordPressブログに実際にアクセスしてみましょう。<br>WordPressの初期ページが表示されれば、WordPressブログの設置は完了です！<br>
                                                    <img class="img mt10" src="../img/manual/man_start_wpblog_37.png?date=20201022" alt="WordPressの初期ページのスクリーンショット">
                                                    </p>
                                                </div>
                                            </div>
                                            <aside class="msg msg_notice mb30">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「無効なURLです」というページが表示された場合</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_user-men3">
                                                        <div>
                                                            <p><em class="font-bold">「無効なURLです」</em>ってページが表示されて、ブログが表示されないんだけど…<br>
                                                                <img class="img mt10" src="../img/manual/man_start_wpblog_38.png?date=20201022" alt="無効なURLですのスクリーンショット">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_operator">
                                                        <div>
                                                            <p>ドメイン設定を追加してからの経過時間が短い場合に一時的に表示されるエラーです。<br>
                                                                <img class="img mt10 mb10" src="../img/manual/man_start_wpblog_39.png?date=220907" alt="反映待ちのスクリーンショット"><br>
                                                                <em class="font-bold">この「反映待ち」は最大1時間程度で解消されます</em>ので、1時間程度待ったうえで再度アクセスしてみてください。
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_user-men1">
                                                        <div>
                                                            <p>もう1日以上待っているけど、やっぱり表示されるみたいだ…</p>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_operator">
                                                        <div>
                                                            「ドメイン設定」メニューの「反映待ち」が消えても依然として「無効なURLです」が表示される場合、<em class="font-bold">ブラウザの「スーパーリロード」</em>をしてみてください。
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>スーパーリロードとは・・・</dt>
                                                                <dd>
                                                                    <p>ブラウザに残ったキャッシュをクリアして、サイトにアクセスしなおす方法です。<br><em class="font-bold">Windowsの多くのブラウザでは「Ctrl＋F5」</em>を、<em class="font-bold">Macの多くのブラウザでは「Command＋Shift＋R」</em>を押すことで、通常の更新ではなく、スーパーリロードとなります。<br>ブラウザごとの詳細なスーパーリロードの方法は各ブラウザのマニュアルでご確認ください。</p>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="face-icon face-icon_user-men6 border-none pt10">
                                                        <div>
                                                            <p>あ！ブログが表示された！</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <p class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「このサイトにアクセスできません（Google Chrome）」などのエラーが表示される場合</p>
                                                <div class="msg_body pl30">
                                                    <div class="face-icon face-icon_operator border-none">
                                                        <div>
                                                            今回ご案内した手順では表示されることはありませんが、「エックスサーバー以外で独自ドメインを取得した場合」にこのようなエラーが表示されることがあります。
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>GoogleChromeの場合<span class="font-s">（このサイトにアクセスできません　●●●● のサーバーの IPアドレスが見つかりませんでした。）</span></dt>
                                                                <dd>
                                                                    <p><img class="flex" src="../img/manual/man_start_wpblog_40.png?date=20201022" alt="このサイトにアクセスできません　●●●● のサーバーの IPアドレスが見つかりませんでした。のスクリーンショット"></p>
                                                                </dd>
                                                            </dl>
                                                            <dl class="dl mt15">
                                                                <dt><i class="ico ico_square-fill"></i>Microsoft Edgeの場合<span class="font-s">（このページを表示できません）</span></dt>
                                                                <dd>
                                                                    <p><img class="flex" src="../img/manual/man_start_wpblog_41.png?date=20201022" alt="このページを表示できませんのスクリーンショット"></p>
                                                                </dd>
                                                            </dl>
                                                            <div class="border border_gray">
                                                                <ul class="ul">
                                                                    <li>取得した独自ドメインのネームサーバーがエックスサーバー指定のものになっているか<br>
                                                                        <a href="man_domain_namesever_setting.php#link-a">マニュアル &gt; ネームサーバーについて</a>
                                                                    </li>
                                                                    <li>ネームサーバーを変更したのち、24時間経過しているか</li>
                                                                    <li>ドメインが利用可能な状態か<br>
                                                                        <a href="../support/faq/service_hp_trouble_suddenly_use.php">よくある質問 &gt; ホームページ &gt; トラブル &gt; 有効期限に問題のないドメインが突然使えなくなりました。</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            などを参考に、独自ドメインを取得したドメイン管理会社の管理ツールから、独自ドメインの状態をご確認ください。
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
            </section>
            <!-- /.col-single -->
        
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