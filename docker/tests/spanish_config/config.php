<?php
/*
 * Basic settings
 */

// masterPath: externally visible URL
$masterPath = "http://localhost/";

// fromAddr: "From:" address for outgoing e-mails
$fromAddr = "ticket service Dockerised <nobody@example.com>";

// spoolDir: spool directory for uploaded files, ticket and user databases
$spoolDir = "/var/spool/dl";

// defLocale: default locale (the charset is always UTF-8)
$defLocale = "es_ES";

// defTimezone: default timezone for ticket listings (use the system's default)
// To avoid PHP warnings about using system default
$defTimezone = "Europe/Madrid";


/*
 * Ticket/grant defaults
 */

// Ticket defaults
$defaultTicketTotalDays = 365;
$defaultTicketLastDlDays = 30;
$defaultTicketMaxDl = 0;

// Grant defaults
$defaultGrantTotalDays = 365;


/*
 * Advanced settings (defaults commented)
 */

// cfgVersion: configuration file version
$cfgVersion = "0.15";

// logFile: set this if you want new tickets, downloads and purges logged to a
//          file. If the setting contains no slashes, it will be used as a tag
//          and the message will go to syslog. By default, log to the web
//          server's standard error.
//$logFile = "/var/log/dl/ticket.log"; // log to file
$logFile = "dl_ticket"; // log via syslog

// style: default skin style
$style = "default";

// phpExt: external PHP extension
//         you can use "" to hide PHP exposure if you enable apache's
//         MultiViews option or use an URL rewriting mechanism
//$phpExt = ".php";

// maxSize: maximum upload filesize (defaulting to PHP's setting)
//          note that changing maxSize does *not* enforce upload_max_filesize
$maxSize = ini_get('upload_max_filesize');

// dateFmtShort: Date format as used in the listings.
//               See http://it2.php.net/manual/en/function.date.php for the
//               format specification. Useful choices are:
//               - "d/m/Y": day/month/year
//               - "d/m/Y T": day/month/year timezone
$dateFmtShort = "Y-m-d";

// dateFmtFull: Full date/time format as used in ticket/grant details.
//               See http://it2.php.net/manual/en/function.date.php for the
//               format specification.
$dateFmtFull = "Y-m-d H:m:s T";

// authRealm: Enables HTTP authentication
//            When using HTTP authentication, you should set authRealm to the
//            realm name as used on your web server.
//$authRealm = "Restricted Area";

// dsn: set the DSN of your database (read the installation manual)
$dsn = $_ENV['DSN'] ? $_ENV['DSN'] : "sqlite:$spoolDir/data.sdb";
$dbUser = $_ENV['DATABASE_USERNAME'] ? $_ENV['DATABASE_USERNAME'] : "username";
$dbPassword = $_ENV['DATABASE_PASSWORD'] ? $_ENV['DATABASE_PASSWORD'] : "password";

// gcInternal: Sets the ticket expiration method. If "true", tickets are expired
//             automatically by DL itself, at some page request (controlled by
//             gcProbability). If "false", ticket expiration should be performed
//             manually by calling the extenal "scripts/expire.php" utility.
//$gcInternal = true;

// gcProbability: Probability that, when using the internal expiration
//                method, a page request triggers the automatic expiration
//		  of old tickets. A number ranging from 0 to 1, where 1 means
//                that any request will purge old tickets. Ignored when using
//                the external expiration method.
//$gcProbability = 1.;

// gcLimit: Maximum number of tickets to remove at every expiration.
//          If 0 is used, all expired tickets are removed at once.
//$gcLimit = 0;
?>
