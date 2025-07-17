<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XアクセラレータVer.2利用時に無効となるphp.ini設定について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜XアクセラレータVer.2利用時に無効となるphp.ini設定についてのご案内です。">

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
            
                <h3 class="sub-ttl">XアクセラレータVer.2利用時に無効となるphp.ini設定について</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">XアクセラレータVer.2利用時に無効となるphp.ini設定</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XアクセラレータVer.2利用時に無効となるphp.ini設定</h4>
                    <div class="section_body">
                        <p>高速・安定化機能「Xアクセラレータ Ver.2」を利用している場合、対象ドメインのフォルダに「.user.ini」というファイルが生成され、当該ファイルがphp.iniの役割を担うようになります。</p>
                        <p>「Xアクセラレータ Ver.2」利用中は、以下のphp.ini設定については「.user.ini」ファイルの内容に関わらず、サーバーの初期値が適用されます。ご注意ください。</p>
                        <p>Xアクセラレータの詳細については「<a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a>」をご参照ください。</p>
                        
                        <section class="block">
                            <div class="block_body">
                            
                                <table class="table table_striped mb5 break-word">
                                    <thead>
                                        <tr>
                                            <th>設定</th>
                                            <th>初期値</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><th>allow_url_fopen</th><td>On</td></tr>
                                        <tr><th>allow_url_include</th><td>Off</td></tr>
                                        <tr><th>apc.coredump_unmap</th><td>Off</td></tr>
                                        <tr><th>apc.enable_cli</th><td>Off</td></tr>
                                        <tr><th>apc.enabled</th><td>On</td></tr>
                                        <tr><th>apc.gc_ttl</th><td>3600</td></tr>
                                        <tr><th>apc.mmap_file_mask</th><td>no value</td></tr>
                                        <tr><th>apc.shm_segments</th><td>1</td></tr>
                                        <tr><th>apc.shm_size</th><td>64M</td></tr>
                                        <tr><th>apc.slam_defense</th><td>Off</td></tr>
                                        <tr><th>apc.ttl</th><td>3600</td></tr>
                                        <tr><th>apc.user_entries_hint</th><td>4096</td></tr>
                                        <tr><th>browscap</th><td>no value</td></tr>
                                        <tr><th>cgi.discard_path</th><td>0</td></tr>
                                        <tr><th>cgi.fix_pathinfo</th><td>1</td></tr>
                                        <tr><th>cgi.force_redirect</th><td>1</td></tr>
                                        <tr><th>cgi.redirect_status_env</th><td>no value</td></tr>
                                        <tr><th>disable_classes</th><td>no value</td></tr>
                                        <tr><th>disable_functions</th><td>no value</td></tr>
                                        <tr><th>doc_root</th><td>no value</td></tr>
                                        <tr><th>enable_dl</th><td>On</td></tr>
                                        <tr><th>expose_php</th><td>Off</td></tr>
                                        <tr><th>extension_dir</th><td>no value</td></tr>
                                        <tr><th>fastcgi.logging</th><td>1</td></tr>
                                        <tr><th>file_uploads</th><td>On</td></tr>
                                        <tr><th>hard_timeout</th><td>2</td></tr>
                                        <tr><th>imagick.progress_monitor</th><td>0</td></tr>
                                        <tr><th>imagick.skip_version_check</th><td>0</td></tr>
                                        <tr><th>ldap.max_links</th><td>Unlimited</td></tr>
                                        <tr><th>mail.force_extra_parameters</th><td>no value</td></tr>
                                        <tr><th>max_file_uploads</th><td>20</td></tr>
                                        <tr><th>mbstring.func_overload</th><td>0</td></tr>
                                        <tr><th>mysqli.allow_local_infile</th><td>On</td></tr>
                                        <tr><th>mysqli.allow_persistent</th><td>On</td></tr>
                                        <tr><th>mysqli.max_links</th><td>Unlimited</td></tr>
                                        <tr><th>mysqli.max_persistent</th><td>Unlimited</td></tr>
                                        <tr><th>mysqli.reconnect</th><td>Off</td></tr>
                                        <tr><th>mysqli.rollback_on_cached_plink</th><td>On</td></tr>
                                        <tr><th>opcache.blacklist_filename</th><td>no value</td></tr>
                                        <tr><th>opcache.enable_cli</th><td>Off</td></tr>
                                        <tr><th>opcache.enable_file_override</th><td>Off</td></tr>
                                        <tr><th>opcache.enable</th><td>On</td></tr>
                                        <tr><th>opcache.error_log</th><td>no value</td></tr>
                                        <tr><th>opcache.file_cache_consistency_checks</th><td>1</td></tr>
                                        <tr><th>opcache.file_cache_only</th><td>0</td></tr>
                                        <tr><th>opcache.file_cache</th><td>no value</td></tr>
                                        <tr><th>opcache.force_restart_timeout</th><td>180</td></tr>
                                        <tr><th>opcache.huge_code_pages</th><td>Off</td></tr>
                                        <tr><th>opcache.inherited_hack</th><td>On</td></tr>
                                        <tr><th>opcache.interned_strings_buffer</th><td>8</td></tr>
                                        <tr><th>opcache.lockfile_path</th><td>/tmp</td></tr>
                                        <tr><th>opcache.log_verbosity_level</th><td>1</td></tr>
                                        <tr><th>opcache.max_accelerated_files</th><td>10000</td></tr>
                                        <tr><th>opcache.max_file_size</th><td>0</td></tr>
                                        <tr><th>opcache.max_wasted_percentage</th><td>5</td></tr>
                                        <tr><th>opcache.memory_consumption</th><td>128</td></tr>
                                        <tr><th>opcache.opt_debug_level</th><td>0</td></tr>
                                        <tr><th>opcache.optimization_level</th><td>0x7FFFBFFF</td></tr>
                                        <tr><th>opcache.preferred_memory_model</th><td>no value</td></tr>
                                        <tr><th>opcache.protect_memory</th><td>0</td></tr>
                                        <tr><th>opcache.restrict_api</th><td>no value</td></tr>
                                        <tr><th>opcache.save_comments</th><td>1</td></tr>
                                        <tr><th>opcache.use_cwd</th><td>On</td></tr>
                                        <tr><th>opcache.validate_permission</th><td>Off</td></tr>
                                        <tr><th>opcache.validate_root</th><td>Off</td></tr>
                                        <tr><th>pdo_mysql.default_socket</th><td>/var/lib/mysql/mysql.sock</td></tr>
                                        <tr><th>pgsql.allow_persistent</th><td>On</td></tr>
                                        <tr><th>pgsql.auto_reset_persistent</th><td>Off</td></tr>
                                        <tr><th>pgsql.max_links</th><td>Unlimited</td></tr>
                                        <tr><th>pgsql.max_persistent</th><td>Unlimited</td></tr>
                                        <tr><th>phar.cache_list</th><td>no value</td></tr>
                                        <tr><th>realpath_cache_size</th><td>4096K</td></tr>
                                        <tr><th>realpath_cache_ttl</th><td>120</td></tr>
                                        <tr><th>sendmail_path</th><td>/usr/sbin/sendmail -t -i</td></tr>
                                        <tr><th>sqlite3.extension_dir</th><td>no value</td></tr>
                                        <tr><th>sys_temp_dir</th><td>no value</td></tr>
                                        <tr><th>upload_tmp_dir</th><td>no value</td></tr>
                                        <tr><th>user_dir</th><td>no value</td></tr>
                                        <tr><th>user_ini.cache_ttl</th><td>300</td></tr>
                                        <tr><th>user_ini.filename</th><td>.user.ini</td></tr>
                                        <tr><th>xmlrpc_errors</th><td>Off</td></tr>
                                        <tr><th>zend.signal_check</th><td>Off</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
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