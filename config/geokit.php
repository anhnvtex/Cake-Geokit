<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$config['Geokit']['default_units'] = 'miles';
$config['Geokit']['default_formula'] = 'sphere';

	// This is the timeout value in seconds to be used for calls to the geocoder web
	// services.  For no timeout at all, comment out the setting.  The timeout unit
	// is in seconds.
$config['Geokit']['Geocoders']['request_timeout'] = '3';

	// These settings are used if web service calls must be routed through a proxy.
	// These setting can be nil if not needed, otherwise, addr and port must be
	// filled in at a minimum.  If the proxy requires authentication, the username
	// and password can be provided as well.
$config['Geokit']['Geocoders']['proxy_addr'] = NULL;
$config['Geokit']['Geocoders']['proxy_port'] = NULL;
$config['Geokit']['Geocoders']['proxy_user'] = NULL;
$config['Geokit']['Geocoders']['proxy_pass'] = NULL;

	// This is your yahoo application key for the Yahoo Geocoder.
	// See http://developer.yahoo.com/faq/index.html//appid
	// and http://developer.yahoo.com/maps/rest/V1/geocode.html
$config['Geokit']['Geocoders']['yahoo'] = 'REPLACE_WITH_YOUR_YAHOO_KEY';

	// This is your Google Maps geocoder key.
	// See http://www.google.com/apis/maps/signup.html
	// and http://www.google.com/apis/maps/documentation///Geocoding_Examples
$config['Geokit']['Geocoders']['google'] = 'REPLACE_WITH_YOUR_GOOGLE_KEY';

	// This is your username and password for geocoder.us.
	// To use the free service, the value can be set to nil or false.  For
	// usage tied to an account, the value should be set to username:password.
	// See http://geocoder.us
	// and http://geocoder.us/user/signup
$config['Geokit']['Geocoders']['geocoder_us'] = false;

	// This is your authorization key for geocoder.ca.
	// To use the free service, the value can be set to nil or false.  For
	// usage tied to an account, set the value to the key obtained from
	// Geocoder.ca.
	// See http://geocoder.ca
	// and http://geocoder.ca/?register=1
$config['Geokit']['Geocoders']['geocoder_ca'] = false;

	// Uncomment to use a username with the Geonames geocoder
	//$config['Geokit']['Geocoders']['geonames']="REPLACE_WITH_YOUR_GEONAMES_USERNAME";

	// This is the order in which the geocoders are called in a failover scenario
	// If you only want to use a single geocoder, put a single symbol in the array.
	// Valid symbols are :google, :yahoo, :us, and :ca.
	// Be aware that there are Terms of Use restrictions on how you can use the
	// various geocoders.  Make sure you read up on relevant Terms of Use for each
	// geocoder you are going to use.
$config['Geokit']['Geocoders']['provider_order'] = array('google','us');

	// The IP provider order. Valid symbols are :ip,:geo_plugin.
	// As before, make sure you read up on relevant Terms of Use for each
	// $config['Geokit']['Geocoders']['ip_provider_order'] = array('geo_plugin','ip');

?>