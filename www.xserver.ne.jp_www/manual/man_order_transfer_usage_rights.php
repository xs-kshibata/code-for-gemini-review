<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>第三者にご契約を譲渡する場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="利用権限譲渡とは、XServerアカウントIDに紐づくすべてのご契約を第三者に譲渡する手続きです。…">

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
            
                <h3 class="sub-ttl">第三者にご契約を譲渡する場合</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">利用権限譲渡とは</a></li>
                    <li><a href="#link-b">利用権限譲渡の必要書類</a></li>
                    <li><a href="#link-c">利用権限譲渡完了までの流れ</a></li>
                    <li><a href="#link-d">利用権限譲渡の手順</a>
                        <ol>
                            <li><a href="#link-d01">1.「利用権限譲渡申込書」のダウンロード</a></li>
                            <li><a href="#link-d02">2.必要書類の用意</a></li>
                            <li><a href="#link-d03">3.画像ファイルへ変換</a></li>
                            <li><a href="#link-d04">4.メールの本文に申請内容を記載し、必要書類を添付して送信</a></li>
                            <li><a href="#link-d05">5.当サポートでメールを確認</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-e">自動更新設定の解除について</a></li>
					<li><a href="#link-f">プリペイド残高について</a></li>
                </ul>
                </div>
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">利用権限譲渡とは</h4>
                    <div class="section_body">
                        <p>利用権限譲渡とは、XServerアカウントIDに紐づくすべてのご契約を第三者に譲渡する手続きです。</p>
                        <p class="note">※サーバーアカウント単位での譲渡はできません。</p>

                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>利用権限譲渡に該当する例</dt>
                            <dd>
                                <p>
                                    【例1】 Aさん(個人)の名義を、Bさん(別の個人)名義に変更する場合<br>
                                    【例2】 Cさん(個人)の名義を、株式会社D名義に変更する場合<br>
                                    【例3】 株式会社E名義を、株式会社F名義に変更する場合<br>
                                    【例4】 株式会社G名義を、Hさん(個人)名義に変更する場合<br>
                                </p>
                            </dd>
                        </dl>

                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">利用権限譲渡の必要書類</h4>
                    <div class="section_body">
                        <table class="table mb5">
                            <thead>
                            <tr>
                                <th>現在の区分</th>
                                <th>変更後の区分</th>
                                <th>必要書類</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tac w15per">法人</td>
                                <td class="tac w15per">法人</td>
                                <td rowspan="4">
                                    <span class="font-bold">1. 利用権限譲渡申込書</span><br>
                                    <p>※<a href="https://www.xserver.ne.jp/dl/toc.pdf">https://www.xserver.ne.jp/dl/toc.pdf</a> よりダウンロードしてください。</p>
                                    <span class="font-bold">2. 現在のご契約者様の印鑑証明書(発行から3ヵ月以内)</span><br>
                                    <p>※現在のご契約名義と印鑑証明書に記載されている商号や氏名は完全一致している必要があります。<br>
                                    ※利用権限譲渡申込書の捺印と印影が一致していることをご確認ください。</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="tac">法人</td>
                                <td class="tac">個人</td>
                            </tr>
                            <tr>
                                <td class="tac">個人</td>
                                <td class="tac">法人</td>
                            </tr>
                            <tr>
                                <td class="tac">個人</td>
                                <td class="tac">個人</td>
                            </tr>
                            </tbody>
                        </table>

                        <p class="mt20">上記の書類の用意が難しい場合は「<a href="../support/">サポート</a>」へお問い合わせください。</p>


                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">利用権限譲渡手続き完了までの流れ</h4>
                    <div class="section_body">

                        <dl class="dl">
                            <dt>1. メールの本文に申請内容を記載の上、必要書類を添付して送付</dt>
                            <dd><p>必要事項を記載し、必要書類を添付したメールを当サポート宛にご送付ください。</p></dd>
                            <dt>2. 内容の確認</dt>
                            <dd><p>当サポートがメールおよび書類の内容を確認します。<br>
                                    依頼内容に問題がない場合、手続きを開始します。</p></dd>
                            <dt>3. 手続き完了</dt>
                            <dd><p>必要な書類や情報が揃ってから、2営業日から4営業日ほどで手続きが完了します。<br>
                                    その後、当サポートより手続き完了のメールを送信します。</p></dd>
                        </dl>
                        
                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-d">利用権限譲渡の手順</h4>
                    <div class="section_body">

                        <div class="serial-box">

                            <section class="box">
                                <h6 class="box_ttl" id="link-d01">1.「利用権限譲渡申込書」のダウンロード</h6>
                                <div class="box_body">
                                    <p>申込書を印刷後、変更内容を記入し、捺印をお願いします。(法人の場合は代表取締役印もしくは社印)</p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d02">2.必要書類の用意</h6>
                                <div class="box_body">
                                    <p>「<a href="#link-b">利用権限譲渡の必要書類</a>」をご確認いただき、書類をご用意ください。</p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d03">3.画像ファイルへ変換</h6>
                                <div class="box_body">
                                    <p>用意した書類を画像ファイルへ変換してください。</p>
                                    <aside class="msg msg_notice">
                                        <div class="msg_body">
                                            <p>※対応するファイル種別はgif、png、jpeg、webpです。<br>
                                                ※zipファイルなどの圧縮ファイルやpdfは、当サポートにて確認ができません。<br>
                                                ※画像ファイルは複数添付可能ですが、すべて合わせた容量は6MBです。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d04">4.メールの本文に申請内容を記載し、必要書類を添付して送信</h6>
                                <div class="box_body">
                                    <p>メールに下記申請用テンプレートの情報を記載の上、画像ファイルに変換した書類を添付して「support@xserver.ne.jp」に送付します。</p>
                                    <div class="border border_gray">
                                        件名：ご利用権限譲渡を伴う名義変更手続き依頼
                                    </div>

                                    <p>ご契約区分によりテンプレートが異なります。<br>
                                        各項目をクリックすると、情報を開閉できます。</p>

                                    <div class="mb5">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">法人→法人<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
<pre class="p25">
■利用権限譲渡　依頼フォーム<br>
XServerアカウントID：<br>
　　【現在のご契約者様】
　　　　　ご契約法人名：
　　　　　　〃（カナ）：
　　　　　ご担当者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：<br>
　【変更後のご契約者様】
　　　　　ご契約法人名：
　　　　　　〃（カナ）：
　　　　　ご担当者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：
</pre>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="mb5">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">法人→個人<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
<pre class="p25">
■利用権限譲渡　依頼フォーム<br>
　XServerアカウントID：<br>
　　【現在のご契約者様】
　　　　　ご契約法人名：
　　　　　　〃（カナ）：
　　　　　ご担当者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：<br>
　【変更後のご契約者様】
　　　　　ご契約者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：
</pre>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="mb5">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">個人→法人<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
<pre class="p25">
■利用権限譲渡　依頼フォーム<br>
XServerアカウントID：<br>
　　【現在のご契約者様】
　　　　　ご契約者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：<br>
　【変更後のご契約者様】
　　　　　ご契約法人名：
　　　　　　〃（カナ）：
　　　　　ご担当者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：
</pre>
                                            </div>
                                        </section>
                                    </div>

                                    <div>
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">個人→個人<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
<pre class="p25">
■利用権限譲渡　依頼フォーム<br>
　XServerアカウントID：<br>
　　【現在のご契約者様】
　　　　　ご契約者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：<br>
　【変更後のご契約者様】
　　　　　ご契約者様名：
　　　　　　〃（カナ）：
　ご登録メールアドレス：
</pre>
                                            </div>
                                        </section>
                                    </div>


                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d05">5.当サポートでメールを確認</h6>
                                <div class="box_body">
                                    <p>添付いただいた書類やメールの内容を確認し、当サポートより受領のご連絡をいたします。 その後、特に問題がなければ、お手続きを開始します。</p>
                                    <p>お手続き完了までには、提出書類など手続きに必要な情報が当社に到着してから、 通常は2営業日から4営業日ほどで完了します。</p>
                                    <p>また、確認事項が生じた場合や、手続きが完了した際には改めてメールにてご連絡差し上げます。</p>
                                    <p class="note">※いただいた情報に不備が見つかった場合、通常よりもお日にちをいただく可能性があります。</p>
                                </div>
                            </section>

                        </div>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h3 class="section_ttl" id="link-e">自動更新設定の解除について</h3>
                    <div class="section_body">
                        <p>ご登録クレジットカードによる自動更新設定を有効にしている場合は、必要書類や変更内容をメールで送信していただく前に、
                            「自動更新設定の解除」と「クレジットカード情報の削除」を行ってください。</p>
                        <p>解除方法については、「<a href="man_order_pay_method_autopay.php">自動更新設定</a>」のマニュアルをご確認ください。</p>
                        <p class="note">※自動更新設定を解除されていない場合には当サポートにて解除いたします。</p>
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h3 class="section_ttl" id="link-f">プリペイド残高について</h3>
                    <div class="section_body">
						<p>プリペイドが残った状態でアカウントが譲渡されます。</p>
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