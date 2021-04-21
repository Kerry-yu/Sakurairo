<?php
function font_end_js_control() { ?>
<script>
/*Initial Variables*/
const mashiro_option = {
    NProgressON : <?php echo iro_opt('nprogress_on') ? 'true' : 'false';?>,
    audio : <?php echo iro_opt('note_effects') ? 'true' : 'false';?>,
    darkmode :<?php echo iro_opt('theme_darkmode_auto') ? 'true' : 'false';?>,
    <?php if ( iro_opt('theme_darkmode_auto') ):echo 'dm_strategy:"'.iro_opt('theme_darkmode_strategy','time').'",'.PHP_EOL;endif; ?>

    email_domain : "<?php echo iro_opt('email_domain', ''); ?>",
    email_name : "<?php echo iro_opt('email_name', ''); ?>",
    cookie_version_control : "<?php echo iro_opt('cookie_version', ''); ?>",
    qzone_autocomplete : false,
    site_name : "<?php echo iro_opt('site_name', ''); ?>",
    author_name : "<?php echo iro_opt('author_name', ''); ?>",
    template_url : "<?php echo get_template_directory_uri(); ?>",
    site_url : "<?php echo site_url(); ?>",
    qq_api_url : "<?php echo rest_url('sakura/v1/qqinfo/json'); ?>",
    // qq_avatar_api_url : "https://api.2heng.xin/qqinfo/",
    live_search : <?php echo iro_opt('live_search') ? 'true' : 'false'?>,
    <?php $reception_background = iro_opt('reception_background'); ?>
    <?php if(isset($reception_background['img1'])){ $bg_arry=explode(",", $reception_background['img1']);?>
    skin_bg0 : "<?php echo $bg_arry[0] ?>",
    <?php }else {?>
    skin_bg0 : "none",
    <?php } ?>

    <?php if(isset($reception_background['img2'])){ $bg_arry=explode(",", $reception_background['img2']);?>
    skin_bg1 : "<?php echo $bg_arry[0] ?>",
    <?php }else {?>
    skin_bg1 : "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg1.png",
    <?php } ?>

    <?php if(isset($reception_background['img3'])){ $bg_arry=explode(",", $reception_background['img3']);?>
    skin_bg2 : "<?php echo $bg_arry[0] ?>",
    <?php }else {?>
    skin_bg2 : "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg2.png",
    <?php } ?>

    <?php if(isset($reception_background['img4'])){ $bg_arry=explode(",", $reception_background['img4']);?>
    skin_bg3 : "<?php echo $bg_arry[0] ?>",
    <?php }else {?>
    skin_bg3 : "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg3.png",
    <?php } ?>

    <?php if(isset($reception_background['img5'])){ $bg_arry=explode(",", $reception_background['img5']);?>
    skin_bg4 : "<?php echo $bg_arry[0] ?>",
    <?php }else {?>
    skin_bg4 : "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg4.png",
    <?php } ?>
    land_at_home : <?php echo is_home() ? 'true' : 'false'; ?>,
    baguetteBoxON : <?php echo iro_opt('image_viewer') == "0" ? 'false' : 'true' ?>,
    clipboardCopyright : <?php echo iro_opt('clipboard_copyright') == "0" ? 'false' : 'true' ?>,

    <?php if(iro_opt('entry_content_style') == "sakurairo"){ ?>
    entry_content_style_src : "<?php echo get_template_directory_uri() ?>/cdn/theme/sakura.css?<?php echo SAKURA_VERSION.iro_opt('cookie_version', ''); ?>",
    <?php }elseif(iro_opt('entry_content_style') == "github") {?>
    entry_content_style_src : "<?php echo get_template_directory_uri() ?>/cdn/theme/github.css?<?php echo SAKURA_VERSION.iro_opt('cookie_version', ''); ?>",
    <?php } ?>
    entry_content_style : "<?php echo iro_opt('entry_content_style'); ?>",

    <?php if(iro_opt('local_global_library')){ ?>
    jsdelivr_css_src : "<?php echo get_template_directory_uri() ?>/cdn/css/lib.css?<?php echo SAKURA_VERSION.iro_opt('cookie_version', ''); ?>",
    <?php } else { ?>
    jsdelivr_css_src : "https://cdn.jsdelivr.net/gh/mirai-mamori/Sakurairo@<?php echo SAKURA_VERSION; ?>/cdn/css/lib.min.css",
    <?php } ?>
    <?php if (iro_opt('aplayer_server') != 'off'): ?>
    float_player_on : true,
    meting_api_url : "<?php echo rest_url('sakura/v1/meting/aplayer'); ?>",
    <?php endif; ?>

    cover_api : "<?php echo rest_url('sakura/v1/image/cover'); ?>",
    random_graphs_mts : <?php echo iro_opt('random_graphs_mts' ) ? 'true' : 'false'?>,
    windowheight : 'auto'
};
const mashiro_global = {};

/*End of Initial Variables*/
</script>
<?php }
add_action('wp_head', 'font_end_js_control');
