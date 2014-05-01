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
function pslearning_process_css($css, $theme) {

    // Set the background image for the logo
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = pslearning_set_logo($css, $logo, $theme);

	// Set the background image for the page.
    $setting = 'pagebackground';
    $pagebackground = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_pagebackground($css, $pagebackground, $setting);
    
    // Set the icon for the Upcoming Course .
    $setting = 'upcourseseparatoricon';
    $upcourseseparatoricon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_upcourseseparatoricon($css, $upcourseseparatoricon, $setting);
    
    // Set the icon image for the Testimonial.
    $setting = 'testimonialseparatoricon';
    $testimonialseparatoricon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_testimonialseparatoricon($css, $testimonialseparatoricon, $setting);
   
   // Set the line image for the Testimonial.
    $setting = 'testimonialseparatorline';
    $testimonialseparatorline = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_testimonialseparatorline($css, $testimonialseparatorline, $setting);
    
     // Set the background image for the Testimonial.
    $setting = 'testimonialbackground';
    $testimonialbackground = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_testimonialbackground($css, $testimonialbackground, $setting);
    
    // Set the Social Networks icons.
    $setting = 'gmailicon';
    $gmailicon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_gmailicon($css, $gmailicon, $setting);
    
    $setting = 'facebookicon';
    $facebookicon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_facebookicon($css, $facebookicon, $setting);
    
    $setting = 'twittericon';
    $twittericon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_twittericon($css, $twittericon, $setting);
    
    $setting = 'skypeicon';
    $skypeicon = $theme->setting_file_url($setting, $setting);
    $css = pslearning_set_twittericon($css, $skypeicon, $setting);
    
    
    // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = pslearning_set_customcss($css, $customcss);

    return $css;
}

function pslearning_set_logo($css, $logo, $theme) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $theme->pix_url('images/logo','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
function pslearning_set_pagebackground($css, $pagebackground, $setting) {
    global $OUTPUT;
    $tag = '[[setting:pagebackground]]';
    $replacement = $pagebackground;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_upcourseseparatoricon($css, $upcourseseparatoricon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:upcourseseparatoricon]]';
    $replacement = $upcourseseparatoricon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_testimonialseparatoricon($css, $testimonialseparatoricon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:testimonialseparatoricon]]';
    $replacement = $testimonialseparatoricon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_testimonialseparatorline($css, $testimonialseparatorline, $setting) {
    global $OUTPUT;
    $tag = '[[setting:testimonialseparatorline]]';
    $replacement = $testimonialseparatorline;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_testimonialbackground($css, $testimonialbackground, $setting) {
    global $OUTPUT;
    $tag = '[[setting:testimonialbackground]]';
    $replacement = $testimonialbackground;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function pslearning_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
function pslearning_set_gmailicon($css, $gmailicon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:gmailicon]]';
    $replacement = $gmailicon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_facebookicon($css, $facebookicon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:facebookicon]]';
    $replacement = $facebookicon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_twittericon($css, $twittericon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:twittericon]]';
    $replacement = $twittericon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function pslearning_set_skypeicon($css, $skypeicon, $setting) {
    global $OUTPUT;
    $tag = '[[setting:skypeicon]]';
    $replacement = $gmailicon;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('bg/body', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pslearning_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('pslearning');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ($filearea === 'pagebackground') {
            return $theme->setting_file_serve('pagebackground', $args, $forcedownload, $options);
        }
        else if ($filearea === 'upcourseseparatoricon') {
            return $theme->setting_file_serve('upcourseseparatoricon', $args, $forcedownload, $options);
        }
         else if ($filearea === 'testimonialseparatoricon') {
            return $theme->setting_file_serve('testimonialseparatoricon', $args, $forcedownload, $options);
        }
        else if ($filearea === 'testimonialseparatorline') {
            return $theme->setting_file_serve('testimonialseparatorline', $args, $forcedownload, $options);
        } 
        else if ($filearea === 'testimonialbackground') {
            return $theme->setting_file_serve('testimonialbackground', $args, $forcedownload, $options);
        } 
        else if ($filearea === 'gmailicon') {
            return $theme->setting_file_serve('gmailicon', $args, $forcedownload, $options);
        } 
        else if ($filearea === 'facebookicon') {
            return $theme->setting_file_serve('facebookicon', $args, $forcedownload, $options);
        } 
        else if ($filearea === 'twittericon') {
            return $theme->setting_file_serve('twittericon', $args, $forcedownload, $options);
        } 
        else if ($filearea === 'skypeicon') {
            return $theme->setting_file_serve('skypeicon', $args, $forcedownload, $options);
        } 
        else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}
