<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<style>
    #post-social-5{
		background: url('<?php echo WPSM_UC_PLUGIN_URL.'assets/img/bg.jpg'; ?>') no-repeat fixed;
		background-position: 50% 0 !important;
	}
	
</style>
<style>
		.wpsm_ac_h_i{
			background:url('<?php echo WPSM_UC_PLUGIN_URL.'assets/img/bg.jpg'; ?>') 50% 0 repeat fixed;
			font-family: Myriad Pro ;
			cursor: pointer;
			text-align: center;
			margin-bottom:0px;
			border-top: 5px solid #000;
			margin-right: 20px;
			margin-top: 20px;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b{
			color: white;
			font-size: 30px;
			font-weight: bolder;
			padding: 0 0 15px 0;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b .dashicons{
			font-size: 40px;
			position: absolute;
			margin-left: -45px;
			margin-top: -10px;
		}
		 .wpsm_ac_h_small{
			font-weight: bolder;
			color: white;
			font-size: 18px;
			padding: 0 0 15px 15px;
		}
		.wpsm_ac_h_i a{
			text-decoration: none;
		}
		@media screen and ( max-width: 600px ) {
			.wpsm_ac_h_i{ padding-top: 60px; margin-bottom: 0px; }
			.wpsm_ac_h_i .WlTSmall { display: none; }
		}
		.texture-layer {
			background: rgba(239,39,39,0.9);
			padding-top: 0px;
			padding: 27px 0 23px 0;
		}
		.wpsm_ac_h_i  li {
			color:#fff;
			font-size: 20px;
			line-height: 1.3;
			font-weight: 600;
			
		}
		.wpsm_ac_h_i .btn-danger{
			font-size: 29px;
			background-color: #464646;
			border-radius:1px;
			margin-right:10px;
				 
		 }
		.wpsm_ac_h_i .btn-success{
			font-size: 29px;
			border-radius:1px;
			background-color: #f3f3f3;
			color:#444;
		}
		.wpsm_ac_h_i ul{ text-align: left;
			padding-left: 50px
		}
		.wpsm_ac_h_i ul li i{
			margin-right:10px;
		}
		#wrapper{
			margin-top:20px;
		}
		
.wpsm_buy_tab .wpsm_buy_nav-tabs{
       /* background: #dde2e0; */
    /* padding: 5px 0; */
    text-align: center;
	margin-bottom:10px;
	overflow:hidden;
	display:block;
}
.wpsm_buy_tab .wpsm_buy_nav-tabs li{
        margin-bottom: 0;
    margin-right: 0;
    width: 33.33%;
    border: 0px;
        float: left;
	display: inline-block;
}
.wpsm_buy_tab .wpsm_buy_nav-tabs li a{
        font-size: 23px;
    color: #fff;
    background: #d64747;
    margin-right: 0px;
    padding: 20px 25px;
    border-radius: 0;
    /* text-transform: uppercase; */
    margin: 0px;
    width: 100%!important;
    margin: 0px !important;
    float: left;
    /* border: 0px; */
    border:4px solid #d64747;
}

.wpsm_buy_tab .wpsm_buy_nav-tabs li a:hover{
    color: #fff;
    border-color: transparent;
}
.wpsm_buy_tab .wpsm_buy_nav-tabs li a i{
     font-size: 52px;
    margin-right: 18px;
    width: 100px;
    height: 100px;
    background: #353535;
    border-radius: 50%;
    line-height: 1.6;
    vertical-align: middle;
    border: 6px solid #ffffff;
}
.wpsm_buy_tab .wpsm_buy_nav-tabs li.active a,
.wpsm_buy_tab .wpsm_buy_nav-tabs li.active a:hover{
    background: #00779c;
    color: #fff;
    border: 1px solid transparent;
}
.wpsm_buy_tab .wpsm_buy_tab-content{
    font-size: 14px;
    color: #00779c;
    line-height: 30px;
    background: #e7ecea;
    padding: 20px 85px;
}
@media only screen and (max-width: 990px){
    .wpsm_buy_tab .wpsm_buy_nav-tabs li a{ padding: 15px 10px; }
    .wpsm_buy_tab .wpsm_buy_tab-content{ padding: 20px 25px; }
	.wpsm_buy_tab .wpsm_buy_nav-tabs li{
	width:100%;
	display:none;
	}
}
@media only screen and (max-width: 767px){
    .wpsm_buy_tab .wpsm_buy_nav-tabs li a{ padding: 15px 5px; 
	
	}
}
@media only screen and (max-width: 480px){
    .wpsm_buy_tab .wpsm_buy_nav-tabs li{ width:100%; }
}
		</style>
		<div id="load"></div>
		
<div id="wrapper">
<div class="wpsm_buy_tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="wpsm_buy_nav wpsm_buy_nav-tabs" role="tablist">
                    <li ><a target="_blank" href="https://wordpress.org/support/plugin/under-construction-site" ><i class="fa fa-question"></i>Need Help</a></li>
                    <li ><a style="background: #8920d4;border-color: #8920d4;" target="_blank" href="https://wpshopmart.com/plugins/coming-soon-pro/" ><i class="fa fa-shopping-cart"></i>Upgrade To Pro</a></li>
                    <li ><a style="background: #ffb400;border-color: #ffb400;" target="_blank" href="https://wpshopmart.com/coming-soon-pro-demo-page/" ><i class="fa fa-laptop"></i>Try Before Buy</a></li>
                  
                </ul>
			</div >	
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
			</button>
			<a class="sidebar-toggle hidden-xs" href="javascript:void(0);"><i class="fa fa-bars fa-2x"></i></a>
			
		</div>
		
		<!-- navbar-top-links -->
		<ul class="nav navbar-top-links navbar-right coming-soon-top">
			
		
			<li>
				<a  href="<?php echo home_url(); ?>?wpsm_uc_preview=true&number=6&TB_iframe=true&width=900&height=80" class="thickbox" id="toggle-right-sidebar" href="#" style="background:#27d63c;font-weight:600;margin-right:10px;margin-bottom:10px;color:#fff;box-shadow: 0 0 26px rgba(0, 0, 0, 0.2);" title="<?php _e('Under Construction  Preview Window','WPSM_UC_TEXT_DOMAIN'); ?>">
					<?php _e('Live Preview','WPSM_UC_TEXT_DOMAIN'); ?>
				</a>
			</li>
			<li style="margin-left:2px;"> <a target="_blank" style="background:#31a3dd;color:#fff;margin-right:10px;margin-bottom:10px;vertical-align:middle;font-weight:700;box-shadow: 0 0 26px rgba(0, 0, 0, 0.2);" href="https://wordpress.org/plugins/under-construction-site/"><span class="dashicons dashicons-star-filled"></span>
								<span class="dashicons dashicons-star-filled"></span>
								<span class="dashicons dashicons-star-filled"></span>
								<span class="dashicons dashicons-star-filled"></span>
								<span class="dashicons dashicons-star-filled"></span>  Rate Us</a></li>
		
			<li>
			
			
		</ul>
		<!-- /navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<input type="hidden" value="1" id="store_menu_id" />
				<ul class="nav " id="side-menu">
					                         
					<li>
						<a  class="active" href="#Dashboard"  id="ui-id-1" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-dashboard fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Dashboard','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#Templates"  id="ui-id-2" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-table fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Templates','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#" id="3" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"><?php _e('Settings','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#Home"  id="ui-id-3" ><?php _e('Home Page Settings','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Header" id="ui-id-4" ><?php _e('Header Settings','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Countdown" id="ui-id-5" ><?php _e('Countdown Settings','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							
						</ul>
					</li>
					
					<li>
						<a href="#Social"  id="ui-id-9" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Social Profile','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#About"  id="ui-id-10" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-home fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('About Us Section','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#Contact"  id="ui-id-11" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Contact Info','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#Service"  id="ui-id-15" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-gears fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Service Section','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					
					<li>
						<a href="#Design" id="6" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"> <?php _e('Design','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#Background" id="ui-id-6" ><?php _e('Background','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Text" id="ui-id-7" ><?php _e('Text And Colour ','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Custom" id="ui-id-8" ><?php _e('Custom Css Codes','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="#Newsletter" id="12" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"><?php _e('Newsletter & Subscriber Settings','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#Newsletter" id="ui-id-12" ><?php _e('Newsletter Settings','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Subscription" id="ui-id-13" ><?php _e('Subscription Field Settings ','WPSM_UC_TEXT_DOMAIN'); ?></a>
							</li>
						   
						</ul>
					</li>
					
					<li>
						<a href="#Help"  id="ui-id-14">
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-question fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Help Docs & Support','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					
					<li>
						<a href="#"  id="ui-id-17">
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Pro Plugin Features','WPSM_UC_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<?php  
	$inc =1;
	$files = array("0"=>array('dashboard','dashboard.php'),"1"=>array('templates','templates.php'),"2"=>array( 'settings','page-settings.php'),"3"=>array('settings','header-settings.php'),"4"=>array('settings','countdown.php'),"5"=>array('design','background.php'),"6"=>array('design','text_and_color.php'),"7"=>array('design','custom_codes.php'),"8"=>array('social','social.php'),"9"=>array('about-us','about-us.php'),"10"=>array('contact-us','contact-us.php'),"11"=>array('newsletter','newsletter.php'),"12"=>array('newsletter','subscription-field.php'),"13"=>array('help','help.php'),"14"=>array('services','services.php'),"16"=>array('settings','access.php'),"17"=>array('pro','pro.php'));
	foreach($files as $folder => $file_name) {
	?>
		<div class="page-wrapper ui-tabs-panel <?php if($inc==1){ echo "active" ; } else{ echo "deactive"; } ?>" id="option-ui-id-<?php echo $inc; ?>">	
		  <?php require_once($file_name[0]."/".$file_name[1]); ?>
		</div>	
	<?php 
	$inc++;
	}  ?> 				
	 
</div>
<a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">	
				<img src="<?php echo WPSM_UC_PLUGIN_URL.'assets/images/temp.jpg'; ?>" style="width:100%;height:auto"  />
				</a>	
<div class="wpsm_settings_loding" id="wpsm_loding_general_image"></div>
				
<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
	<div class="dialog__overlay"></div>
	<div class="dialog__content">
		<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
			<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
				<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
			</svg>
		</div>
		<div class="dialog-inner">
			<h2><strong></strong><?php _e('Setting Saved Successfully','WPSM_UC_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','');?></button></div>
		</div>
	</div>
</div>

<?php require_once('fs.php'); ?>
