<?php
if (function_exists('current_user_can'))
    if (!current_user_can('manage_options')) {
        die('Access Denied');
    }
if (!function_exists('current_user_can')) {
    die('Access Denied');
}

function	html_showStyles($param_values, $op_type)
{
?>	
<script>
jQuery(document).ready(function () {
	var strliID=$(location).attr('hash');
	jQuery('#portfolio-view-tabs li').removeClass('active');
	if(jQuery('#portfolio-view-tabs li a[href="'+strliID+'"]').length>0){
		jQuery('#portfolio-view-tabs li a[href="'+strliID+'"]').parent().addClass('active');
	}else {
		jQuery('#portfolio-view-tabs li a[href="#portfolio-view-options-0"]').parent().addClass('active');
	}
	jQuery('#portfolio-view-tabs-contents li').removeClass('active');
	strliID=strliID;
	if(jQuery(strliID).length>0){
		jQuery(strliID).addClass('active');
	}else {
		jQuery('#portfolio-view-options-0').addClass('active');
	}
	$('input[data-slider="true"]').bind("slider:changed", function (event, data) {
		 $(this).parent().find('span').html(parseInt(data.value)+"%");
		 $(this).val(parseInt(data.value));
	});	
});
</script>
<div class="wrap">

<?php 
	$path_site2 = plugins_url("../images", __FILE__);
	$path_site = plugins_url("Front_images", __FILE__); 
?>
<style>
		/* banner */
.free_version_banner {
    position:relative;
    display:block;
    background-image:url(<?php echo $path_site2; ?>/wp_banner_bg.jpg);
    background-position:top left;
    background-repeat:repeat;
    overflow:hidden;
}

.free_version_banner .manual_icon {
    position:absolute;
    display:block;
    top:15px;
    left:15px;
}

.free_version_banner .usermanual_text {
    font-weight: bold !important;
    display:block;
    float:left;
    width:270px;
    margin-left:75px;
    font-family:'Open Sans',sans-serif;
    font-size:12px;
    font-weight:300;
    font-style:italic;
    color:#ffffff;
    line-height:10px;
    margin-top: 0;
    padding-top: 15px;
}

.free_version_banner .usermanual_text a,
.free_version_banner .usermanual_text a:link,
.free_version_banner .usermanual_text a:visited {
    display:inline-block;
    font-family:'Open Sans',sans-serif;
    font-size:17px;
    font-weight:600;
    font-style:italic;
    color:#ffffff;
    line-height:30.5px;
    text-decoration:underline;
}

.free_version_banner .usermanual_text a:hover,
.free_version_banner .usermanual_text a:focus,
.free_version_banner .usermanual_text a:active {
    text-decoration:underline;
}

.free_version_banner .get_full_version,
.free_version_banner .get_full_version:link,
.free_version_banner .get_full_version:visited {
    padding-left: 60px;
    padding-right: 4px;
    display: inline-block;
    position: absolute;
    top: 15px;
    right: calc(50% - 167px);
    height: 38px;
    width: 268px;
    border: 1px solid rgba(255,255,255,.6);
    font-family: 'Open Sans',sans-serif;
    font-size: 23px;
    color: #ffffff;
    line-height: 43px;
    text-decoration: none;
    border-radius: 2px;
    transition:background .15s linear,color .15s linear;
}

.free_version_banner .get_full_version:hover {
    background:#ffffff;
    color:#bf1e2e;
    text-decoration:none;
    outline:none;
}

.free_version_banner .get_full_version:focus,
.free_version_banner .get_full_version:active {

}

.free_version_banner .get_full_version:before {
    content:'';
    display:block;
    position:absolute;
    width:33px;
    height:23px;
    left:25px;
    top:9px;
    background-image:url(<?php echo $path_site2; ?>/wp_shop.png);
    background-position:0px 0px;
    background-repeat;
}

.free_version_banner .get_full_version:hover:before {
    background-position:0px -27px;
}

.free_version_banner .gotohuge {
    float:right;
    margin:15px 15px;
}

.free_version_banner .description_text {
    padding:0 0 13px 0;
    position:relative;
    display:block;
    width:100%;
    text-align:center;
    float:left;
    font-family:'Open Sans',sans-serif;
    color:#fffefe;
    line-height:inherit;
}
.free_version_banner .description_text p{
    margin:0;
    padding:0;
    font-size: 14px;
}

@media screen and (max-width: 1300px){
    .free_version_banner .usermanual_text {
        width: calc(100% - 210px);
    }

    .free_version_banner .get_full_version,
    .free_version_banner .get_full_version:link,
    .free_version_banner .get_full_version:visited {
        top: 60px;
    }

    .free_version_banner .description_text {
        margin-top: 40px;
    }
}
		</style>
    <div class="free_version_banner">
		<img class="manual_icon" src="<?php echo $path_site2; ?>/icon-user-manual.png" alt="user manual" />
		<p class="usermanual_text">If you have any difficulties in using the options, Follow the link to <a href="http://huge-it.com/wordpress-portfolio-gallery-user-manual/" target="_blank">User Manual</a></p>
		<a class="get_full_version" href="http://huge-it.com/portfolio-gallery/" target="_blank">GET THE FULL VERSION</a>
		<a href="http://huge-it.com" class="gotohuge" target="_blank"><img class="huge_it_logo" src="<?php echo $path_site2; ?>/Huge-It-logo.png"/></a>
		<div style="clear: both;"></div>
		<div  class="description_text"><p>This is the LITE version of the plugin. Click "GET THE FULL VERSION" for more advanced options.   We appreciate every customer.</p></div>
	</div>
	<div style="clear:both;"></div>
	<div style="color: #a00;" >Dear user. Thank you for your interest in our product.
	Please be known, that this page is for commercial users, and in order to use options from there, you should have pro license.
	We please you to be understanding. The money we get for pro license is expended on constantly improvements of our plugins, making them more professional useful and effective, as well as for keeping fast support for every user.</div>
	<div style="clear: both;"></div>
	<div style="clear:both;"></div>
	<div style="margin-left: -20px;" id="poststuff">
		<div id="post-body-content" class="portfolio-options">
			<img style="width: 100%;" src="<?php echo $path_site2; ?>/portfolio_options.jpg">
		</div>
	</div>
</div>
<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>
<?php
}