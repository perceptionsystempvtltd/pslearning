<?php 
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    Theme
 * @subpackage pslearning
 * @copyright 2014 onwards Perception System Pvt.Ltd.  (http://www.perceptionsystem.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null; 

defined('MOODLE_INTERNAL') || die; 


	$ADMIN->add('themes', new admin_category('theme_pslearning', 'PS-learning')); 

	// "geneicsettings" settingpage 
	$temp = new admin_settingpage('theme_pslearning_generic',  get_string('geneicsettings', 'theme_pslearning')); 
	 
	 // Logo file setting
    $name = 'theme_pslearning/logo';
    $title = get_string('logo','theme_pslearning');
    $description = get_string('logodesc', 'theme_pslearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Title  setting
    $name = 'theme_pslearning/headertexttitle';
    $title = get_string('headertexttitle','theme_pslearning');
    $description = get_string('headertextdesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Header Details  setting
    $name = 'theme_pslearning/headertextdetail';
    $title = get_string('headertextdetail','theme_pslearning');
    $description = get_string('headertextdetaildesc', 'theme_pslearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    $ADMIN->add('theme_pslearning', $temp);
    
    
    // "Welcome page" setting 
	$temp = new admin_settingpage('theme_pslearning_welcome',  get_string('welcomepage', 'theme_pslearning'));	
 
     // Welcome page Title  setting
    $name = 'theme_pslearning/welcometitle';
    $title = get_string('welcometitle','theme_pslearning');
    $description = get_string('welcometitledesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page Sub Title  setting
    $name = 'theme_pslearning/welcomesubtitle';
    $title = get_string('welcomesubtitle','theme_pslearning');
    $description = get_string('welcomesubtitledesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page  Content setting
    $name = 'theme_pslearning/welcomecontent';
    $title = get_string('welcomecontent','theme_pslearning');
    $description = get_string('welcomecontentdesc', 'theme_pslearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);   
    
    // Welcome page  BG Image setting
    $name = 'theme_pslearning/pagebackground';
    $title = get_string('pagebackground','theme_pslearning');
    $description = get_string('welcomebgimagedesc', 'theme_pslearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    // Welcome page  buttontext setting
    $name = 'theme_pslearning/welcomebuttontext';
    $title = get_string('welcomebuttontext','theme_pslearning');
    $description = get_string('welcomebuttontextdesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Welcome page buttonurl   setting
    $name = 'theme_pslearning/welcomebuttonurl';
    $title = get_string('welcomebuttonurl','theme_pslearning');
    $description = get_string('welcomebuttonurldesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     $ADMIN->add('theme_pslearning', $temp);
     
     // "Upcoming Course page" setting 	 	
	$temp = new admin_settingpage('theme_pslearning_upcourse', get_string('upcourse', 'theme_pslearning'));
	
	// Upcoming Coursel page Separator Icon  setting
    $name = 'theme_pslearning/upcourseseparatoricon';
    $title = get_string('upcourseseparatoricon','theme_pslearning');
    $description = get_string('upcoursesepicondesc', 'theme_pslearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'upcourseseparatoricon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
	
	// Upcoming Course page Title  setting
    $name = 'theme_pslearning/upcoursetitle';
    $title = get_string('upcoursetitle','theme_pslearning');
    $description = get_string('upcoursetitledesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Content.
    $name = 'theme_pslearning/upcoursecontent';
    $title = get_string('upcoursecontent', 'theme_pslearning');
    $description = get_string('upcoursecontentdesc', 'theme_pslearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);     
    
	$ADMIN->add('theme_pslearning', $temp);


     // "Testimonial page" setting 	 
     	
	$temp = new admin_settingpage('theme_pslearning_Testimonial', get_string('testimonial', 'theme_pslearning'));
	
	// Testimonial page Title  setting
    $name = 'theme_pslearning/testimonialtitle';
    $title = get_string('testimonialtitle','theme_pslearning');
    $description = get_string('testimonialtitledesc', 'theme_pslearning');  
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Testimonial page Separator Icon  setting
    $name = 'theme_pslearning/testimonialseparatoricon';
    $title = get_string('testimonialseparatoricon','theme_pslearning');
    $description = get_string('testimonialsicondesc', 'theme_pslearning');   
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialseparatoricon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);      
    
    // Testimonial page SeparatorLine setting
    $name = 'theme_pslearning/testimonialseparatorline';
    $title = get_string('testimonialseparatorline','theme_pslearning');
    $description = get_string('testimonialslinedesc', 'theme_pslearning'); 
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialseparatorline');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    // Testimonial page  BG Image setting
    $name = 'theme_pslearning/testimonialbackground';
    $title = get_string('testimonialbackground','theme_pslearning');
    $description = get_string('testimonialbgdesc', 'theme_pslearning'); 
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonialbackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
	/*
     * Testimonial 1
     */
     
    //This is the descriptor for Testimonial 1
    $name = 'theme_pslearning/testimonial1info';
    $heading = get_string('testimonial1', 'theme_pslearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_pslearning/testimonialcontent1';
    $title = get_string('testimonialcontent', 'theme_pslearning');
    $description = get_string('testimonialcontentdesc', 'theme_pslearning'); 
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_pslearning/testimonialname1';
    $title = get_string('testimonialname', 'theme_pslearning');
    $description = get_string('testimonialnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_pslearning/testimonialcompanyname1';
    $title = get_string('testimonialcompanyname', 'theme_pslearning');
    $description = get_string('testimonialcnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /*
     * Testimonial 2
     */
     
    //This is the descriptor for Testimonial 2
    $name = 'theme_pslearning/testimonial2info';
    $heading = get_string('testimonial2', 'theme_pslearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_pslearning/testimonialcontent2';
    $title = get_string('testimonialcontent', 'theme_pslearning');
    $description = get_string('testimonialcontentdesc', 'theme_pslearning'); 
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_pslearning/testimonialname2';
    $title = get_string('testimonialname', 'theme_pslearning');
	$description = get_string('testimonialnamedesc', 'theme_pslearning'); 
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_pslearning/testimonialcompanyname2';
    $title = get_string('testimonialcompanyname', 'theme_pslearning');
    $description = get_string('testimonialcnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /*
     * Testimonial 3
     */
     
    //This is the descriptor for Testimonial 3
    $name = 'theme_pslearning/testimonial3info';
    $heading = get_string('testimonial3', 'theme_pslearning');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_pslearning/testimonialcontent3';
    $title = get_string('testimonialcontent', 'theme_pslearning');
    $description = get_string('testimonialcontentdesc', 'theme_pslearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_pslearning/testimonialname3';
    $title = get_string('testimonialname', 'theme_pslearning');
    $description = get_string('testimonialnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_pslearning/testimonialcompanyname3';
    $title = get_string('testimonialcompanyname', 'theme_pslearning');
    $description = get_string('testimonialcnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	
     /*
     * Testimonial 4
     */
     
    //This is the descriptor for Testimonial 4
    $name = 'theme_pslearning/testimonial4info';
    $heading = get_string('testimonial4', 'theme_pslearning');    
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Content.
    $name = 'theme_pslearning/testimonialcontent4';
    $title = get_string('testimonialcontent', 'theme_pslearning');
    $description = get_string('testimonialcontentdesc', 'theme_pslearning');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Name.
    $name = 'theme_pslearning/testimonialname4';
    $title = get_string('testimonialname', 'theme_pslearning');
    $description = get_string('testimonialnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');   
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Company Name.
    $name = 'theme_pslearning/testimonialcompanyname4';
    $title = get_string('testimonialcompanyname', 'theme_pslearning');
    $description = get_string('testimonialcnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
	 $ADMIN->add('theme_pslearning', $temp);
    
     // "Purchase theme page" setting 	 	
	$temp = new admin_settingpage('theme_pslearning_purchase', get_string('purchase', 'theme_pslearning'));
	
	// Purchase theme Heading  setting
    $name = 'theme_pslearning/purchaseheading';
    $title = get_string('purchaseheading','theme_pslearning');
    $description = get_string('purchaseheadingdesc', 'theme_pslearning');    
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
	// Purchase theme  buttontext setting
    $name = 'theme_pslearning/purchasebtntext';
    $title = get_string('purchasebtntext','theme_pslearning');
    $description = get_string('purchasebtndesc', 'theme_pslearning');     
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Purchase theme buttonurl   setting
    $name = 'theme_pslearning/purchasebtnurl';
    $title = get_string('purchasebtnurl','theme_pslearning');
    $description = get_string('purchasebtnurldesc', 'theme_pslearning');  
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     $ADMIN->add('theme_pslearning', $temp);
     
	// Social Networking 
		$temp = new admin_settingpage('theme_pslearning_social', get_string('socialheading', 'theme_pslearning'));
		
	// Social gmail +  URL setting
	// Custom or standard layout.
    $name = 'theme_pslearning/gmail';
    $title = get_string('gmail', 'theme_pslearning');
    $description = get_string('gmailaddesc', 'theme_pslearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	
	$name = 'theme_pslearning/gmailurl';
    $title = get_string('gmailurl','theme_pslearning');
    $description = get_string('gmailurldesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Gmail  setting
    $name = 'theme_pslearning/gmailicon';
    $title = get_string('gmailicon','theme_pslearning');
    $description = get_string('gmailicondesc', 'theme_pslearning');   
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gmailicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Facebook URL setting
    $name = 'theme_pslearning/facebook';
    $title = get_string('facebook', 'theme_pslearning');
    $description = get_string('facebookaddesc', 'theme_pslearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pslearning/facebookurl';
    $title = get_string('facebookurl','theme_pslearning');
    $description = get_string('facebookurldesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Facebook Icon  setting
    $name = 'theme_pslearning/facebookicon';
    $title = get_string('facebookicon','theme_pslearning');
    $description = get_string('facebookicondesc', 'theme_pslearning');  
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'facebookicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Twitter URL setting
    $name = 'theme_pslearning/twitter';
    $title = get_string('twitter', 'theme_pslearning');
    $description = get_string('twitteraddesc', 'theme_pslearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title,$description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pslearning/twitterurl';
    $title = get_string('twitterurl','theme_pslearning');
    $description = get_string('twitterurldesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Twitter Icon  setting
    $name = 'theme_pslearning/twittericon';
    $title = get_string('twittericon','theme_pslearning');
    $description = get_string('twittericondesc', 'theme_pslearning');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'twittericon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Social Skype URL setting
    $name = 'theme_pslearning/skype';
    $title = get_string('skype', 'theme_pslearning');
    $description = get_string('skypeaddesc', 'theme_pslearning');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pslearning/skypeurl';
    $title = get_string('skypeurl','theme_pslearning');
    $description = get_string('skypeurldesc', 'theme_pslearning');    
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Skype Icon  setting
    $name = 'theme_pslearning/skypeicon';
    $title = get_string('skypeicon','theme_pslearning');
    $description = get_string('skypeicondesc', 'theme_pslearning');    
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'skypeicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
	
	$ADMIN->add('theme_pslearning', $temp);
	
	//Footer Conents
	$temp = new admin_settingpage('theme_pslearning_footer', get_string('footer', 'theme_pslearning'));
		
	// Project name setting
    $name = 'theme_pslearning/projectname';
    $title = get_string('projectname','theme_pslearning');
    $description = get_string('projectnamedesc', 'theme_pslearning');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Project name setting
    $name = 'theme_pslearning/projectname';
    $title = get_string('projectname','theme_pslearning');
    $description = get_string('projectnamedesc', 'theme_pslearning'); 
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project URL setting
    $name = 'theme_pslearning/projecturl';
    $title = get_string('projecturl','theme_pslearning');
    $description = get_string('projecturldesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project copyrights setting
    $name = 'theme_pslearning/copyrights';
    $title = get_string('copyrights','theme_pslearning');
    $description = get_string('copyrightsdesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Project privacy policy setting
    $name = 'theme_pslearning/privacypolicyurl';
    $title = get_string('privacypolicyurl','theme_pslearning');
    $description = get_string('privacyurldesc', 'theme_pslearning');   
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$ADMIN->add('theme_pslearning', $temp);
	
