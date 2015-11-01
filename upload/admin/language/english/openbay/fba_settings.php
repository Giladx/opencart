<?php
// Headings
$_['heading_title']        		= 'Settings';
$_['text_openbay']              = 'OpenBay Pro';
$_['text_fba']                  = 'Fulfillment by Amazon';

// Text
$_['text_success']     			= 'Your settings have been saved';
$_['text_status']         		= 'Status';
$_['text_account_ok']  			= 'Connection to Fulfillment by Amazon OK';
$_['text_api_other']            = 'Links';
$_['text_token_register']       = 'Register';
$_['text_api_ok']       		= 'API connection OK';
$_['text_api_status']           = 'API connection';
$_['text_edit']           		= 'Edit Fulfillment by Amazon settings';
$_['text_standard']           	= 'Standard';
$_['text_expedited']           	= 'Expedited';
$_['text_priority']           	= 'Priority';
$_['text_fillorkill']           = 'Fill or Kill';
$_['text_fillall']           	= 'Fill All';
$_['text_fillallavailable']     = 'Fill All Available';

// Entry
$_['entry_api_key']            	= 'API key';
$_['entry_account_id']          = 'Account ID';
$_['entry_send_orders']         = 'Send orders automatically';
$_['entry_fulfill_policy']      = 'Fulfillment policy';
$_['entry_shipping_speed']      = 'Default shipping speed';
$_['entry_debug_log']           = 'Enable debug logging';

// Help
$_['help_api_key']            	= 'This is your API key, obtain this from your OpenBay Pro account area';
$_['help_account_id']           = 'This is the account ID that matches the registered Amazon account for OpenBay Pro, obtain this from your OpenBay Pro account area';
$_['help_send_orders']  		= 'Orders containing matching Fulfillment by Amazon products will be send to Amazon automatically';
$_['help_fulfill_policy']  		= 'The default fulfillment policy (FillAll - All fulfillable items in the fulfillment order are shipped. The fulfillment order remains in a processing state until all items are either shipped by Amazon or cancelled by the seller. FillAllAvailable - All fulfillable items in the fulfillment order are shipped. All unfulfillable items in the order are cancelled by Amazon.FillOrKill - If an item in a fulfillment order is determined to be unfulfillable before any shipment in the order moves to the Pending status (the process of picking units from inventory has begun), then the entire order is considered unfulfillable. However, if an item in a fulfillment order is determined to be unfulfillable after a shipment in the order moves to the Pending status, Amazon cancels as much of the fulfillment order as possible.)';
$_['help_shipping_speed']  		= 'This is the default shipping speed category to apply to new orders, different service levels may incurr different costs';
$_['help_debug_log']  		    = 'Debug logs will record information to a log file about actions the module does. This should be left enabled to help find the cause of any problems.';

// Error
$_['error_api_connect']         = 'Failed to connect to the API';
$_['error_account_info']    	= 'Unable to verify API connection to Fulfillment by Amazon ';

// Tabs
$_['tab_api_info']            	= 'API details';