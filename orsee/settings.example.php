<?php
// part of orsee. see orsee.org

// SERVER SETTINGS
// Web server document root, e.g. /srv/www/htdocs
// no trailing slash!
$settings__root_to_server = "/orsee";

// Experiment system root relative to server root, e.g. /orsee
// begins always with "/" if in a subdirectory
// no trailing slash!
$settings__root_directory = "";

// url to web server document root (IP or domain name)
// without trailing slash and the http://!
//$settings__server_url="www.orsee.org";
$settings__server_url = "127.0.0.1";

// servr protocol (either "http://" or "https://"
$settings__server_protocol = "http://";

// Double-check your entries above! The URL to your ORSEE installation will be:
// settings__server_protocol + settings__server_url + settings__root_directory

// DATABASE CONFIGURATION
// Don't forget to create the database
$site__database_host           = "database";
$site__database_database       = "orsee";
$site__database_admin_username = "orsee";
$site__database_admin_password = "123456";
$site__database_type           = "mysql";
$site__database_table_prefix   = "or_";

// SSL mysql connection. Works with PHP >=5.3.9.
// Use only if your database is located on a different server
// and you want to connect via SSL encrypted connection to it
$site__database_use_ssl = false;
// path name of client private key file
$site__database_ssl_key = '/etc/mysql/ssl/client-key.pem';
// path name of  client public key certificate file
$site__database_ssl_cert = '/etc/mysql/ssl/client-cert.pem';
// path name of Certificate Authority (CA) certificate file.
// if used, must be the same on client and server
$site__database_ssl_ca = '/etc/mysql/ssl/ca-cert.pem';

// TIMEZOME SETTING
// PHP >= 5.1.0 requires the timezone to be explicitely set.
// If you have not set it in php.ini, then set it here. (Otherwise, you can uncomment.)
// List of timezones: http://php.net/manual/en/timezones.php
date_default_timezone_set("Europe/Berlin");

// EMAIL MODULE
// These settings are only needed when you plan to enable the email module
// to retrieve emails from an external email account and process them in ORSEE
$settings__email_server_type = "pop3"; // either pop3 or imap
$settings__email_server_name = "mail.foobar.edu";
$settings__email_server_port = ""; // if empty or not set, port is automatically determined by type
$settings__email_username    = "orsee@foobar.edu";
$settings__email_password    = "orseefoorbar_pw";
$settings__email_ssl         = false; // whether to use SSL to connect to IMAP/POP3 server (for gmail, use TRUE!)
// E.g. for gmail, use TRUE for ssl setting. You may have to allow
// "Access for less secure apps" in your google account settings.

// STOP SITE, TRACKING, DEBUGGING
// If below is set to "y", the admin part of ORSEE won't be reachable for anybody
// This is useful for example when running some procedures directly in the database
$settings__stop_admin_site = "n";

// To stop tracking set to "y"
$settings__disable_orsee_tracking = "y";

// Enable/disable debugging information output at the bottom fo each page.
// Do NOT ENABLE on a live ORSEE system - reveals a lot of information.
$settings__time_debugging_enabled  = "n";
$settings__query_debugging_enabled = "n";

// Include path for tagsets. Leave as is, only change when you know what you are doing.
ini_set("include_path", ini_get("include_path").":./tagsets:./../tagsets:./../../tagsets");
