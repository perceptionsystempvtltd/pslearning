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
$THEME->name = 'pslearning';
$THEME->parents = array('base');
$THEME->sheets = array('base', 'general','header','admin','blocks','calender','content','footer','forum','frontpage','login','mform','sideblock','user','style','pages','slider','slidercarousel','uikit','uikit.min','jquery.circliful','aboutuspage','academics','athletics','contacts','staff','student','innerpage');

$THEME->parents_exclude_sheets = array('base'=>array('pagelayout')); 
$THEME->editor_sheets = array('editor');
$THEME->javascripts = array('jquery.min','jquery-ui.min','jquery-scrolltofixed-min','jquery.circliful.min','jquery.openCarousel','uikit','uikit.min','jquery-1.9.1.min','jquery-1.10.2.min');

$THEME->layouts = array(
    // Most pages - if we encounter an unknown or a missing page type, this one is used.
    'base' => array(
        'file' => 'innerpage.php',
        'regions' => array()
    ),
    'standard' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
       
    ),
    // Course page
    'course' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
      
    ),
    // Course page
    'coursecategory' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
      
    ),
    'incourse' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        
    ),
    'frontpage' => array(
        'file' => 'general.php',
        'regions' => array( 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),

    ),
    'admin' => array(
         'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
  
    ),
    'mydashboard' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    
    ),
    'mypublic' => array(
        'file' => 'innerpage.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',	    
    ),
	'signup_form' => array(
        'file' => 'innerpage.php',
        'regions' => array('footer-left', 'footer-middle', 'footer-right', 'hidden-dock'),
        'defaultregion' => 'footer-right',
        
    ),

	'login' => array(
        'file' => 'innerpage.php',
        'regions' => array('footer-left', 'footer-middle', 'footer-right', 'hidden-dock'),
        'defaultregion' => 'footer-right',
        
    ),
	
    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter', 'noblocks'=>true),
    ),
    // Embeded pages, like iframe embeded in moodleform
    'embedded' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true,'nocustommenu'=>true),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>false, 'noblocks'=>true),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    // The pagelayout used for reports
    'report' => array(
        'file' => 'innerpage.php',
        'regions' => array(),
		'options' => array(),
    ),
);
 
$THEME->enable_dock = true;
 

$THEME->csspostprocess = 'pslearning_process_css'; 


