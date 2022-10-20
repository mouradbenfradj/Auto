<?php

namespace Antihacker\WP\Settings;
// $mypage = new Page('Anti Hacker', array('type' => 'menu'));
$mypage = new Page('Anti Hacker', array('type' => 'submenu', 'parent_slug' => 'anti_hacker_plugin'));
$settings = array();
$myip = ahfindip();
require_once(ANTIHACKERPATH . "guide/guide.php");
$settings['Startup Guide']['Startup Guide'] = array('info' => $ah_help);
$fields = array();
$settings['Startup Guide']['Startup Guide']['fields'] = $fields;
$msg2 = __('Just check yes or not. After that, click SAVE changes. ', "antihacker");
$msg2 .= '<b>';
$msg2 .= __('We suggest click Yes for all. ', "antihacker");
$msg2 .= '</b>';
$msg2 .= '<br />';
$msg2 .= __('Please, visit our Faq page for more details (button at Startup Guide Tab).', "antihacker");
$msg2 .= '<br />';
$settings['General Settings']['settings'] = array('info' => $msg2);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'my_radio_xml_rpc',
	'label' => __('Disable xml-rpc API. Look our FAQ page (at our site) for more details.', "antihacker"),
	'radio_options' => array(
		array('value' => 'Yes', 'label' => __('Yes, disable All', "antihacker")),
		array('value' => 'Pingback', 'label' => __('Yes, disable only Ping Back', "antihacker")),
		//	array('value'=>'Autentic', 'label' => __('Yes, disable only Call with Authentication Request (wp.getUsersBlogs)', "antihacker")),		
		array('value' => 'No', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_rest_api',
	'label' => __("Disable Json WordPress Rest API (also new WordPress 4.7 Rest API). Take a look our faq page (at our site) for details. Don't disable if you want to use Contact 7 Form Plugin.", "antihacker"),
	'radio_options' => array(
		array('value' => 'Yes', 'label' => __('Yes, disable', "antihacker")),
		array('value' => 'No', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_automatic_plugins',
	'label' => __('Sets WordPress to automatically download and install plugin updates.', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_automatic_themes',
	'label' => __('Sets WordPress to automatically download and install themes updates.', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_replace_login_error_msg',
	'label' => __('Sets WordPress to replace the login error message to Wrong Username or Password', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_disallow_file_edit',
	'label' => __('Disable file editing within the WordPress dashboard', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_debug_is_true',
	'label' => __('Enable dashboard warning message when Debug is true', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_firewall',
	'label' => __('Enable Firewall? (Block Malicious Requests, Queries, User Agents and URLS. 100% Plug-n-play, no configuration required.)', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_hide_wp',
	'label' => __('Hide WordPress Version to improve security?', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_enumeration',
	'label' => __('Block User enumeration to improve security?', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_all_feeds',
	'label' => __('Block All Feeds to avoid bots exploit.', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_media_comments',
	'label' => __('Block Comments in Media Pages.', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);





$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_new_user_subscriber',
	'label' => __('Create All New Users always as Subscriber. Protect you from flaws in plugins and themes and don\'t allow hackers include new Administrator.', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);



$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_falsegoogle',
	'label' => __('Block False Googlebot, Msnbot & Bingbot? (Premium Version Only)', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_search_plugins',
	'label' => __('Block Search For Plugin Vulnerabilities? (Premium Version Only)', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_search_themes',
	'label' => __('Block Search For Theme Vulnerabilities? (Premium Version Only)', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)

);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_tor',
	'label' => __('Block all traffic from Tor? - The Onion Router -  (Premium Version Only)', 'antihacker'),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker"))
	)

);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_blank_ua',
	'label' => __('Block all with Blank User Agent? -  (Premium Version Only)', 'antihacker'),
	'radio_options' => array(
		array('value'=>'yes', 'label' => __('yes')),
		array('value'=>'no', 'label' => __('no'))
		)			
	);


// For example, to completely disable Application Passwords add the following 
// code snippet to your site.

	$fields[] = array(
		'type' 	=> 'radio',
		'name' 	=> 'antihacker_application_password',
		'label' => __('Disable Application Passwords (WordPress version 5.6 allows external applications to request permission to connect to a site and generate a password)', 'antihacker'),
		'radio_options' => array(
			array('value'=>'yes', 'label' => __('yes')),
			array('value'=>'no', 'label' => __('no'))
			)			
		);



$settings['General Settings']['settings']['fields'] = $fields;



//
$msg2 = '<br />'; 
$msg2 .= '<b>'.__('This page works only in Premium Version.','antihacker').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('Bots and Hackers can make a lot of visits in a short time period.','antihacker');

$msg2 .= '<br />'; 
$msg2 .= __('We can limit a number of visits, just choose the options below.','antihacker').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('You can also whitelist Ips, look the Whitelist tab.','antihacker').'</b>';
$msg2 .= '<br />';
$msg2 .= __('Search engine crawlers has unlimited access.','antihacker').'</b>';
$msg2 .= '<br />';
$msg2 .= __('IP will be blocked by one hour.','antihacker').'</b>';
$msg2 .= '<br />';

$settings['Limit Visits'][__('Instructions')] = array('info' => $msg2);


$fields = array();

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_radio_limit_visits',
	'label' => __('Enable the Rate Limiting?','antihacker'),
	'radio_options' => array(
		array('value'=>'yes', 'label' => __('yes', "antihacker")),
		array('value'=>'no', 'label' => __('no', "antihacker"))
		)			
);



// Select List
$fields[] = array(
	'type' 	=> 'select',
	'name' 	=> 'antihacker_rate_limiting',
	'label' => __('If requests exceed','antihacker'),
	'id' => 'rate_limiting', // (optional, will default to name)
	'value' => 'red', // (optional, will default to '')
	'select_options' => array(
		array('value'=>'unlimited', 'label' => __('Unlimited', "antihacker")),
		array('value'=>'5', 'label' => __('5 per minute', "antihacker")),
		array('value'=>'6', 'label' => __('6 per minute', "antihacker")),
		array('value'=>'7', 'label' => __('7 per minute', "antihacker")),
		array('value'=>'8', 'label' => __('8 per minute', "antihacker")),
		array('value'=>'9', 'label' => __('9 per minute', "antihacker")),
		array('value'=>'10', 'label' => __('10 per minute', "antihacker")),
		array('value'=>'15', 'label' => __('15 per minute', "antihacker")),
		array('value'=>'20', 'label' => __('30 per minute', "antihacker")),
		array('value'=>'30', 'label' => __('40 per minute', "antihacker")),
		array('value'=>'50', 'label' => __('50 per minute', "antihacker")),
		)			
	);

	$fields[] = array(
		'type' 	=> 'select',
		'name' 	=> 'antihacker_rate_limiting_day',
		'label' => __('if requests exceed','antihacker'),
		'id' => 'rate_limiting_day', // (optional, will default to name)
		'value' => 'red', // (optional, will default to '')
		'select_options' => array(
			array('value'=>'unlimited', 'label' => __('Unlimited', "antihacker")),
			array('value'=>'1', 'label' => __('5 per hour', "antihacker")),
			array('value'=>'2', 'label' => __('10 per hour', "antihacker")),
			array('value'=>'3', 'label' => __('20 per hour', "antihacker")),
			array('value'=>'4', 'label' => __('50 per hour', "antihacker")),
			array('value'=>'5', 'label' => __('100 per hour', "antihacker")),
			array('value'=>'6', 'label' => __('200 per hour', "antihacker")),
			array('value'=>'7', 'label' => __('500 per hour', "antihacker"))
	
			)			
		);

/*
	$fields[] = array(
		'type' 	=> 'select',
		'name' 	=> 'antihacker_rate_penalty',
		'label' => __('How long is an IP address blocked when it breaks a rule','antihacker'),
		'id' => 'my_select', // (optional, will default to name)
		'value' => 'red', // (optional, will default to '')
		'select_options' => array(
			array('value'=>'2', 'label' => __('5 minutes', "antihacker")),
			array('value'=>'3', 'label' => __('30 minutes', "antihacker")),
			array('value'=>'4', 'label' => __('1 Hour', "antihacker")),
			array('value'=>'5', 'label' => __('2 Hours', "antihacker")),
			array('value'=>'6', 'label' => __('6 Hours', "antihacker")),
			array('value'=>'7', 'label' => __('24 Hours', "antihacker"))
	
			)			
		);

*/

$fields[] = array(
	'type' 	=> 'select',
	'name' 	=> 'antihacker_rate404_limiting',
	'label' => __('If made only 404 requests exceed','antihacker'),
	'id' => 'rate404_limiting', // (optional, will default to name)
	'value' => 'red', // (optional, will default to '')
	'select_options' => array(
		array('value'=>'unlimited', 'label' => __('Unlimited', "antihacker")),
		array('value'=>'5', 'label' => __('five 404 pages', "antihacker")),
		array('value'=>'10', 'label' => __('ten 404 pages', "antihacker")),
		array('value'=>'15', 'label' => __('fifteen 404 pages', "antihacker")),
		array('value'=>'20', 'label' => __('twenty 404 pages', "antihacker")),
		array('value'=>'50', 'label' => __('fifty 404 pages', "antihacker")),
		)			
	);

$settings['Limit Visits']['']['fields'] = $fields;



//
$msg2 = '<br />'; 
$msg2 .= '<b>'.__('This page works only in Premium Version.','antihacker').'</b>';
$msg2 .= '<br />'; 
$msg2 .= '<b>'.__('HTTP Tools are tools to do HTTP request, used for not humans.','antihacker').'</b>';

$msg2 .= '<br />'; 
$msg2 .= __('To Block HTTP Tools, just add one for each line.','antihacker').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('To Manage, you can also remove one or more lines. Then, click Save Changes.','antihacker').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('Activate eMail notification for some days and manage the Whitelist tables.','antihacker').'</b>';
$msg2 .= '<br />'; 

$settings['Block HTTP Tools'][__('Instructions about to block HTTP tools (Only Premium)')] = array('info' => $msg2);

$fields = array();

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_block_http_tools',
	'label' => __('Block HTTP tools?','antihacker'),
	'radio_options' => array(
		array('value'=>'yes', 'label' => __('yes', "antihacker")),
		array('value'=>'no', 'label' => __('no', "antihacker"))
		)			
);	



$fields[] = array(
	'type' 	=> 'textarea',
	'name' 	=> 'antihacker_http_tools',
	'label' => 'HTTP tools to block:'
);



$settings['Block HTTP Tools']['']['fields'] = $fields;

//



$msg2 = __('Add your current ip to your whitelist, then click SAVE CHANGES.', "antihacker");
$msg2 .= '<br />';
$msg2 .= __('If necessary add more than one, use only one ip by line.', "antihacker");
$msg2 .= '<br />';
$msg2 .= __('You can also add IPs from the Blocked Visitors Log Table page.', "antihacker");
$msg2 .= '<br />';
$msg2 .=  '<b>';
$msg2 .=  __('Your current ip is: ', "antihacker");
$msg2 .= $myip;
$msg2 .=  '</b>';
$settings['Whitelist']['whitelist'] = array('info' => $msg2);
$fields = array();
$fields[] = array(
	'type' 	=> 'textarea',
	'name' 	=> 'my_whitelist',
	'label' => 'whitelist'
);
$settings['Whitelist']['whitelist']['fields'] = $fields;
$admin_email_wp = get_option('admin_email');
$msg_email = __('Fill out the email address to send messages.', "antihacker");
$msg_email .= '<br />';
$msg_email = __('Left Blank to use your default Wordpress email.', "antihacker");
$msg_email .= '<br />';
$msg_email .= __('Then, click save changes.', "antihacker");
$settings['Email Settings']['email'] = array('info' => $msg_email);
$fields = array();
$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'my_email_to',
	'label' => 'email'
);
$settings['Email Settings']['email']['fields'] = $fields;
//$admin_email = get_option( 'admin_email' ); 
$notificatin_msg = __('Do you want receive alerts? ', "antihacker");
$settings['Notifications Settings']['Notifications'] = array('info' => $notificatin_msg);
$fields = array();
$fields[] = array(
	'type' 	=> 'checkbox',
	'name' 	=> 'my_checkbox_all_failed',
	'label' => __('Alert me all Failed Login Attempts', "antihacker")
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'my_radio_all_logins',
	'label' => __('Alert me All Logins', "antihacker"),
	'radio_options' => array(
		array('value' => 'Yes', 'label' => __('Yes, All', "antihacker")),
		array('value' => 'No', 'label' => __('No, Alert me Only Not White listed', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_Blocked_Firewall',
	'label' => __('Alert me All Times Firewall Block Something.', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'antihacker_Blocked_Else',
	'label' => __('Alert me All Times Plugin Blocks Something Else?', "antihacker"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "antihacker")),
		array('value' => 'no', 'label' => __('No', "antihacker")),
	)
);
$settings['Notifications Settings']['Notifications']['fields'] = $fields;


$fields = array();  

$msg = '<big>';

$msg .= __('Remember: Bots can slow down your server.' , 'antihacker');
$msg .= '<br />';
$msg .= __('Do you want also Bad Bot free protection?' , 'antihacker');
$msg .= '<br />';
$msg .= __('Just install this free plugin: ', "antihacker");
$msg .= '&nbsp;<a href="https://wordpress.org/plugins/stopbadbots/" target="_self">';
$msg .= 'Stop Bad Bots Plugin</a>';
$msg .= '<br />';

$msg .= __('You can block IPs.' , 'antihacker');
$msg .= '<br />';
$msg .= __('You can to block User Agent.' , 'antihacker');
$msg .= '<br />';
$msg .= __('You can limit the bot rating.' , 'antihacker');
$msg .= '<br />';
$msg .= __('You can to block blank User Agent.' , 'antihacker');
$msg .= '<br />';
$msg .= __('You can block bad referrals.' , 'antihacker');
$msg .= '<br />';
$msg .= __('And a lot more tools.' , 'antihacker');
$msg .= '<br />';



$msg .= __('No DNS or cloud traffic redirection. No slow down your site. No Google penalties.' , 'antihacker');


$msg .= '</big>';


$settings['Stop Bad Bots Tools']['Stop Bad Bots Tools'] = array('info' => $msg );
$fields = array();
$settings['Stop Bad Bots Tools']['Stop Bad Bots Tools']['fields'] = $fields;



$fields = array();   
//$settings['Memory Checkup'][__('Memory Checkup')]['fields'] = $fields;
//
$gopro = '<span style="font-size: 24pt; color: #CC3300;">Premium Features<font color="#000000">';
$gopro .= '<br />';
$gopro .= '<font size="4">';

$gopro .= __('Visit our Premium Page for more details.', 'antihacker');
$gopro .= '<br />';
$gopro .= '<a href="http://antihackerplugin.com/premium" class="button button-primary">'.__("Premium Page","antihacker").'</a>';
$gopro .= '<br />';
$gopro .= '<br />';
$gopro .=  __('Paste below the Item Purchase Code received by email from us when you bought the premium version.', 'antihacker');
$gopro .= '<br />';
$gopro .=  __("You don't need reinstall the plugin.", "antihacker");
$gopro .=  '  '.__("After that, click SAVE CHANGES Button.", "antihacker");
// Form
$settings['Go Pro']['Go Pro'] = array('info' => $gopro );
// $fields = array();
$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'antihacker_checkversion',
	'label' => 'Purchase Code:',
	);   
$settings['Go Pro']['Go Pro']['fields'] = $fields;


new OptionPageBuilderTabbed($mypage, $settings);
function ahfindip()
{
	$ip = '';
	$headers = array(
		'HTTP_CLIENT_IP',        // Bill
		'HTTP_X_REAL_IP',        // Bill
		'HTTP_X_FORWARDED',      // Bill
		'HTTP_FORWARDED_FOR',    // Bill 
		'HTTP_FORWARDED',        // Bill
		'HTTP_X_CLUSTER_CLIENT_IP', //Bill
		'HTTP_CF_CONNECTING_IP', // CloudFlare
		'HTTP_X_FORWARDED_FOR',  // Squid and most other forward and reverse proxies
		'REMOTE_ADDR',           // Default source of remote IP
	);
	for ($x = 0; $x < 8; $x++) {
		foreach ($headers as $header) {
			if (!isset($_SERVER[$header])) {
				continue;
			}
			$ip = trim(sanitize_text_field($_SERVER[$header]));
			if (empty($ip)) {
				continue;
			}
			if (false !== ($comma_index = strpos(sanitize_text_field($_SERVER[$header]), ','))) {
				$ip = substr($ip, 0, $comma_index);
			}
			// First run through. Only accept an IP not in the reserved or private range.
			if ($ip == '127.0.0.1') {
				$ip = '';
				continue;
			}
			if (0 === $x) {
				$ip = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE | FILTER_FLAG_NO_PRIV_RANGE);
			} else {
				$ip = filter_var($ip, FILTER_VALIDATE_IP);
			}
			if (!empty($ip)) {
				break;
			}
		}
		if (!empty($ip)) {
			break;
		}
	}
	if (!empty($ip))
		return $ip;
	else
		return 'unknow';
}
