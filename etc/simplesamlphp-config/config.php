<?php
/*
 * Configuration of simpleSAMLphp for Feide.
 *
 * $Id$
 */

$secretSalt = $_ENV['SSP_SALT'];
$adminPassword = $_ENV['ADMINPASSWD'];

$config = array (

	/**
	 * This option configures the base directory for this simpleSAMLphp
	 * installation. Under most circumstances this option is optional,
	 * and can be left unset.
	 *
	 * Example:
	 *  'basedir' => '/var/simplesamlphp/',
	 */
	'basedir' => NULL,

	/**
	 * Setup the following parameters to match the directory of your installation.
	 * See the user manual for more details.
	 */
	'baseurlpath'           => $_ENV['HTTPS'] . '://' . $_ENV['HOST'] . '/simplesaml/',
	'templatedir'           => 'templates/',

	/**
	 *
	 * metadatadir will be redefined in config.php to give two separate directories
	 * for test and prod.
	 *
	 */
	'metadatadir'         => 'metadata/',
	'attributenamemapdir' => 'attributemap/',
	'certdir'             => '/app/certs/',
	'dictionarydir'       => 'dictionaries/',
	'loggingdir'          => 'log/',
	'libextinc'           => 'libextinc/',

	'version'             => 'trunk',

	'debug'               => true,
	'showerrors'          => TRUE,

	/**
	 * This password must be kept secret, and modified from the default value 123.
	 * This password will give access to the installation page of simpleSAMLphp with
	 * metadata listing and diagnostics pages.
	 */
	'auth.adminpassword'		=> &$adminPassword,
	'admin.protectindexpage'	=> false,
	'admin.protectmetadata'		=> false,
	'admin.checkforupdates'     => false,

	/**
	 * This is a secret salt used by simpleSAMLphp when it needs to generate a secure hash
	 * of a value. It must be changed from its default value to a secret value. The value of
	 * 'secretsalt' can be any valid string of any length.
	 *
	 * A possible way to generate a random salt is by running the following command from a unix shell:
	 * tr -c -d '0123456789abcdefghijklmnopqrstuvwxyz' </dev/urandom | dd bs=32 count=1 2>/dev/null;echo
	 */
	'secretsalt' => &$secretSalt,
	// Included in password file...

	/*
	 * Some information about the technical persons running this installation.
	 * The email address will be used as the recipient address for error reports, and
	 * also as the technical contact in generated metadata.
	 */
	'technicalcontact_name'     => 'Admin',
	'technicalcontact_email'    => getenv('SERVER_ADMIN'),

	/*
	 * Logging.
	 *
	 * define the minimum log level to log
	 *		LOG_ERR				No statistics, only errors
	 *		LOG_WARNING			No statistics, only warnings/errors
	 *		LOG_NOTICE			Statistics and errors
	 *		LOG_INFO			Verbose logs
	 *		LOG_DEBUG			Full debug logs - not reccomended for production
	 *
	 * Choose logging handler.
	 *
	 * Options: [syslog,file,errorlog]
	 *
	 */
//logging.level is also defined in config.php. Giving LOG_DEBUG on idp-test.feide.no
	'logging.level'         => LOG_NOTICE,
	'logging.handler'       => 'errorlog',
	'logging.processname'   => 'simplesamlphp-sp',
	'logging.format'        => '%date{%b %d %H:%M:%S} %process %level %stat[%trackid] [%srcip] %msg',

	/*
	 * Choose which facility should be used when logging with syslog.
	 *
	 * These can be used for filtering the syslog output from simpleSAMLphp into its
	 * own file by configuring the syslog daemon.
	 *
	 * See the documentation for openlog (http://php.net/manual/en/function.openlog.php) for available
	 * facilities. Note that only LOG_USER is valid on windows.
	 *
	 * The default is to use LOG_LOCAL5 if available, and fall back to LOG_USER if not.
	 */
	'logging.facility' => defined('LOG_LOCAL5') ? constant('LOG_LOCAL5') : LOG_USER,

	/* Logging: file - Logfilename in the loggingdir from above.
	 */
	'logging.logfile'		=> 'simplesamlphp.log',


	/* (New) statistics output configuration.
	 *
	 * This is an array of outputs. Each output has at least a 'class' option, which
	 * selects the output.
	 */
	'statistics.out' => array(
		// Log statistics to files in a directory. One file per day.
		array(
			'class' => 'core:File',
			'directory' => '/www/var/data/simplesamlphp/newstats',
		),
		array(
			'class' => 'livelog:Livelog',
			'destination' => 'livelog.feide.no:16478',
		),
	),


	/*
	 * Enable
	 *
	 * Which functionality in simpleSAMLphp do you want to enable. Normally you would enable only
	 * one of the functionalities below, but in some cases you could run multiple functionalities.
	 * In example when you are setting up a federation bridge.
	 */
	'enable.saml20-sp'       => FALSE,
	'enable.saml20-idp'      => FALSE,
	'enable.shib13-sp'       => FALSE,
	'enable.shib13-idp'      => FALSE,
	'enable.wsfed-sp'        => FALSE,
	'enable.openid-provider' => FALSE,
	'enable.authmemcookie'   => FALSE,

	/*
	 * This value is the duration of the session in seconds. Make sure that the time duration of
	 * cookies both at the SP and the IdP exceeds this duration.
	 */
	'session.duration'      =>  8 * (60*60), // 8 hours.
	'session.requestcache'  =>  4 * (60*60), // 4 hours

	/*
	 * Sets the duration, in seconds, data should be stored in the datastore. As the datastore is used for
	 * login and logout requests, thid option will control the maximum time these operations can take.
	 * The default is 4 hours (4*60*60) seconds, which should be more than enough for these operations.
	 */
	'session.datastore.timeout' => (4*60*60), // 4 hours

	/*
	 * Set the secure flag in the cookie.
	 *
	 * Set this to TRUE if the user only accesses your service
	 * through https. If the user can access the service through
	 * both http and https, this must be set to FALSE.
	 */
	'session.cookie.secure' => false,

	/*
	 * Options to override the default settings for php sessions.
	 */
	'session.phpsession.cookiename'  => null,
	'session.phpsession.limitedpath' => false,
	'session.phpsession.savepath'    => null,

	/*
	 * Languages available and what language is default
	 */
//	'language.available'	=> array('en', 'no', 'nn', 'se', 'fi', 'da', 'sv', 'de', 'es', 'fr', 'nl', 'lb', 'hr', 'hu', 'sl'),
	'language.available' => array('en', 'no', 'nn', 'se'),
	'language.default'   => 'no',

	/*
	 * Extra dictionary for attribute names.
	 * This can be used to define local attributes.
	 *
	 * The format of the parameter is a string with <module>:<dictionary>.
	 *
	 * Specifying this option will cause us to look for modules/<module>/dictionaries/<dictionary>.definition.json
	 * The dictionary should look something like:
	 *
	 * {
	 *     "firstattribute": {
	 *         "en": "English name",
	 *         "no": "Norwegian name"
	 *     },
	 *     "secondattribute": {
	 *         "en": "English name",
	 *         "no": "Norwegian name"
	 *     }
	 * }
	 *
	 * Note that all attribute names in the dictionary must in lowercase.
	 *
	 * Example: 'attributes.extradictionary' => 'ourmodule:ourattributes',
	 */
	'attributes.extradictionary' => 'feide:feideattributes',

	/*
	 * Which theme directory should be used? The base is fallback (leave it to default).
	 */
	'theme.use'  => 'default',
	'theme.base' => 'default',


	/*
	 * Default IdPs. If you do not enter an idpentityid in the SSO initialization endpoints,
	 * the default IdP configured here will be used.
	 *
	 * To enable the SAML 2.0 IdP Discovery service for a SAML 2.0 SP, you need to set the
	 * default-saml20-idp to be null, like this:
	 *
	 * 		'default-saml20-idp' => NULL,
	 *
	 */
// Fra config.php:	'default-saml20-idp' => 'idp-test.feide.no',
	'default-shib13-idp' => NULL,
	'default-wsfed-idp'	 => 'urn:federation:pingfederate:localhost',

	/*
	 * Default IdP discovery service urls.
	 * This option sets the default IdP discovery service URLs for the SPs in this installation. These
	 * URLs can be overridden on a per SP basis by setting this option in the metadata for the SP.
	 *
	 * By default simpleSAMLphp will use its builtin IdP discovery service.
	 */
	'idpdisco.url.shib13' => NULL,
	'idpdisco.url.saml20' => NULL,

	/*
	 * Whether the discovery service should allow the user to save his choice of IdP.
	 */
	'idpdisco.enableremember' => TRUE,

	// Disco service only accepts entities it knows.
	'idpdisco.validate' => TRUE,

	'idpdisco.extDiscoveryStorage' => NULL, //'http://rnd.feide.no',

	/*
	 * IdP Discovery service look configuration.
	 * Wether to display a list of idp or to display a dropdown box. For many IdP' a dropdown box
	 * gives the best use experience.
	 *
	 * When using dropdown box a cookie is used to highlight the previously chosen IdP in the dropdown.
	 * This makes it easier for the user to choose the IdP
	 *
	 * Options: [links,dropdown]
	 *
	 */
	'idpdisco.layout' => 'links',

	/*
	 * Whether simpleSAMLphp should sign the response or the assertion in SAML 2.0 authentication
	 * responses.
	 *
	 * The default is to sign the assertion element, but that can be overridden by setting this
	 * option to TRUE. It can also be overridden on a pr. SP basis by adding an option with the
	 * same name to the metadata of the SP.
	 */
	'saml20.signresponse' => FALSE,
	'shib13.signresponse' => TRUE,


	/*
	 * Authentication processing filters that will be executed for all IdPs
	 * Both Shibboleth and SAML 2.0
	 */
	'authproc.idp' => array(

	),




	/*
	 * This option configures the metadata sources. The metadata sources is given as an array with
	 * different metadata sources. When searching for metadata, simpleSAMPphp will search through
	 * the array from start to end.
	 *
	 * Each element in the array is an associative array which configures the metadata source.
	 * The type of the metadata source is given by the 'type' element. For each type we have
	 * different configuration options.
	 *
	 * Flat file metadata handler:
	 * - 'type': This is always 'flatfile'.
	 * - 'directory': The directory we will load the metadata files from. The default value for
	 *                this option is the value of the 'metadatadir' configuration option, or
	 *                'metadata/' if that option is unset.
	 *
	 * XML metadata handler:
	 * This metadata handler parses an XML file with either an EntityDescriptor element or an
	 * EntitiesDescriptor element. The XML file may be stored locally, or (for debugging) on a remote
	 * web server.
	 * The XML hetadata handler defines the following options:
	 * - 'type': This is always 'xml'.
	 * - 'file': Path to the XML file with the metadata.
	 * - 'url': The url to fetch metadata from. THIS IS ONLY FOR DEBUGGING - THERE IS NO CACHING OF THE RESPONSE.
	 *
	 *
	 * Examples:
	 *
	 * This example defines two flatfile sources. One is the default metadata directory, the other
	 * is a metadata directory with autogenerated metadata files.
	 *
	 * 'metadata.sources' => array(
	 *     array('type' => 'flatfile'),
	 *     array('type' => 'flatfile', 'directory' => 'metadata-generated'),
	 *     ),
	 *
	 * This example defines a flatfile source and an XML source.
	 * 'metadata.sources' => array(
	 *     array('type' => 'flatfile'),
	 *     array('type' => 'xml', 'file' => 'idp.example.org-idpMeta.xml'),
	 *     ),
	 *
	 *
	 * Default:
	 * 'metadata.sources' => array(
	 *     array('type' => 'flatfile')
	 *     ),
	 */

	// Overridden in config.[prod/test].php
	'metadata.sources' => array(
		array('type' => 'flatfile'),
	),


	/*
	 * Add the list of trusted domains where we will allow to redirect. Domains included in the ACS
	 * if an entity in the metadata don't need to be specified here.
	 */
	'trusted.url.domains' => &$trustedDomains,


	/*
	 * Radius authentication. This is only relevant if you use the Radius authentication plugin.
	 * user attributes are expected to be stored in a Vendor-Specific RADIUS string attribute and have
	 * the form aai-attribute=value
	 * vendor and vendor-attr below indicate in which RADIUS attribute the AAI attributes are in.
	 * multiple occurences of that RADIUS attribute are supported
	 */
	'auth.radius.hostname'        => 'radius.example.org',
	'auth.radius.port'            => '1812',
	'auth.radius.secret'          => 'topsecret',
	'auth.radius.URNForUsername'  => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
	'auth.radius.vendor'          => '23735',
	'auth.radius.vendor-attr'     => '4',


	/*
	 * These parameters are only relevant if you setup an OpenID Provider.
	 */
	'openid.userid_attributename' => 'eduPersonPrincipalName',
	'openid.delegation_prefix'    => 'https://openid.feide.no/',
	'openid.filestore'            => '/tmp/openidstore',


	/*
	 * This configuration option allows you to select which session handler
	 * SimpleSAMLPHP should use to store the session information. Currently
	 * we have two session handlers:
	 * - 'phpsession': The default PHP session handler.
	 * - 'memcache': Stores the session information in one or more
	 *   memcache servers by using the MemcacheStore class.
	 *
	 * The default session handler is 'phpsession'.
	 */
	'session.handler'       => 'phpsession',


	/*
	 * Configuration for the MemcacheStore class. This allows you to store
	 * multiple redudant copies of sessions on different memcache servers.
	 *
	 * 'memcache_store.servers' is an array of server groups. Every data
	 * item will be mirrored in every server group.
	 *
	 * Each server group is an array of servers. The data items will be
	 * load-balanced between all servers in each server group.
	 *
	 * Each server is an array of parameters for the server. The following
	 * options are available:
	 *  - 'hostname': This is the hostname or ip address where the
	 *    memcache server runs. This is the only required option.
	 *  - 'port': This is the port number of the memcache server. If this
	 *    option isn't set, then we will use the 'memcache.default_port'
	 *    ini setting. This is 11211 by default.
	 *  - 'weight': This sets the weight of this server in this server
	 *    group. http://php.net/manual/en/function.Memcache-addServer.php
	 *    contains more information about the weight option.
	 *  - 'timeout': The timeout for this server. By default, the timeout
	 *    is 3 seconds.
	 *
	 * Example of redudant configuration with load balancing:
	 * This configuration makes it possible to lose both servers in the
	 * a-group or both servers in the b-group without losing any sessions.
	 * Note that sessions will be lost if one server is lost from both the
	 * a-group and the b-group.
	 *
	 * 'memcache_store.servers' => array(
	 *     array(
	 *         array('hostname' => 'mc_a1'),
	 *         array('hostname' => 'mc_a2'),
	 *     ),
	 *     array(
	 *         array('hostname' => 'mc_b1'),
	 *         array('hostname' => 'mc_b2'),
	 *     ),
	 * ),
	 *
	 * Example of simple configuration with only one memcache server,
	 * running on the same computer as the web server:
	 * Note that all sessions will be lost if the memcache server crashes.
	 *
	 * 'memcache_store.servers' => array(
	 *     array(
	 *         array('hostname' => 'localhost'),
	 *     ),
	 * ),
	 *
	 */
	'memcache_store.servers' => array(
		array(
			array('hostname' => 'localhost'),
		),
	),


	/*
	 * This value is the duration data should be stored in memcache. Data
	 * will be dropped from the memcache servers when this time expires.
	 * The time will be reset every time the data is written to the
	 * memcache servers.
	 *
	 * This value should always be larger than the 'session.duration'
	 * option. Not doing this may result in the session being deleted from
	 * the memcache servers while it is still in use.
	 *
	 * Set this value to 0 if you don't want data to expire.
	 *
	 * Note: The oldest data will always be deleted if the memcache server
	 * runs out of storage space.
	 */
	'memcache_store.expires' =>  36 * (60*60), // 36 hours.


	/*
	 * Should signing of generated metadata be enabled by default.
	 *
	 * Metadata signing can also be enabled for a individual SP or IdP by setting the
	 * same option in the metadata for the SP or IdP.
	 */
	'metadata.sign.enable' => FALSE,

	/*
	 * The default key & certificate which should be used to sign generated metadata. These
	 * are files stored in the cert dir.
	 * These values can be overridden by the options with the same names in the SP or
	 * IdP metadata.
	 *
	 * If these aren't specified here or in the metadata for the SP or IdP, then
	 * the 'certificate' and 'privatekey' option in the metadata will be used.
	 * if those aren't set, signing of metadata will fail.
	 */
	'metadata.sign.privatekey' => NULL,
	'metadata.sign.privatekey_pass' => NULL,
	'metadata.sign.certificate' => NULL,

	/*
	 * This is the default URL to a MetaShare service where a SAML 2.0 IdP can register its metadata.
	 * This is a highly experimentar feature.
	 */
	'metashare.publishurl' => NULL,

);
