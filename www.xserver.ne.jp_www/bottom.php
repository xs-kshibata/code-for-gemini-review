<?php
// 「secure.x」と「マニュアル/よくある質問検索結果」を除く全ページの最下部でincludeしているPHPファイルです。
if(
    $FILE_PATH !== 'cons_tax_2014.php' &&
    $FILE_PATH !== 'revice_ssl.php' &&
    $FILE_PATH !== 'sha2.php' &&
    $FILE_PATH !== 'spec.php' &&
    $FILE_PATH !== 'spec_sv16001.php' &&
    $FILE_PATH !== 'spec_sv_replace.php'
){ ?>
<script>var SITE_URL = '<?php print $SITE_URL; ?>'</script>
<?php  if (!$jqueryLoaded) { ?>
    <script src="<?php print_fileURL("js/jquery-1.12.4.min.js"); ?>"></script>
<?php } ?>
<script src="<?php print_fileURL("js/libs.js"); ?>"></script>
    <?php if($FILE_PATH === 'support/index.php'){ ?>
<!--[if gt IE 7]><!--><script src="../js/masonry.pkgd.min.js"></script><!--<![endif]-->
    <?php } ?>
<script src="<?php print_fileURL("js/main.js"); ?>"></script>
<script src="<?php print_fileURL("js/jquery.colorbox-min.js"); ?>"></script>

<?php } ?>

<!-- Yahoo Code for your Target List -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
    ytag({
        "type":"yss_retargeting",
        "config": {
            "yahoo_ss_retargeting_id": "1000024944",
            "yahoo_sstag_custom_params": {
            }
        }
    });
</script>
<!-- Yahoo Code for your Target List -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
    ytag({
        "type":"yjad_retargeting",
        "config":{
            "yahoo_retargeting_id": "DKA25PHMA5",
            "yahoo_retargeting_label": "",
            "yahoo_external_transmission_optout": true,
            "yahoo_retargeting_page_type": "",
            "yahoo_retargeting_items":[
                {item_id: '', category_id: '', price: '', quantity: ''}
            ]
        }
    });
</script>

<?php if(
    $now_page['manual'] ||
    $now_page['support1'] ||
    $now_page['support2']
) { ?>

<!-- チャットボット -->
<script>(function(){
var w=window,d=document;
var s="https://app.chatplus.jp/cp.js";
d["__cp_d"]="https://app.chatplus.jp";
d["__cp_c"]="43510994_1";
var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
a.async=true,a.src=s,m.parentNode.insertBefore(a,m);})();</script>

<?php } ?>

</body>
</html>
