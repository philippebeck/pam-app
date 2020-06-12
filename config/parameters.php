<?php
/* You need to replace the host value (localhost here) with the database host
 And the dbname value (pam-app) with your database name */
define("DB_DSN", "mysql:host=localhost;dbname=pam_app");

/* You need to replace root with the user name of the database */
define("DB_USER", "root");

/* You need to add the user password of the database
WARNING : Add this file name to.gitignore file before adding the password */
define("DB_PASS", "");

/* You don"t need to change anything here : this array is for PDO options */
define("DB_OPTIONS", array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// You need to replace mail.domain.ext with your mail host
define("MAIL_HOST", "mail.domain.ext");

// You need to replace 000 with your mail port
define("MAIL_PORT", 000);

// You need to replace mailfrom@domain.ext with the email address for sending
define("MAIL_FROM", "mailfrom@domain.ext");

// You need to replace mailpass with your email address password for sending
define("MAIL_PASSWORD", "mailpass");

// You need to replace mailto@domain.ext with your email address for receiving
define("MAIL_TO", "mailto@domain.ext");

// You need to replace mailusername with your name
define("MAIL_USERNAME", "mailusername");

// You need to replace your-backend-site-key with your Google ReCaptcha backend site key
define("RECAPTCHA_TOKEN", "your-backend-site-key");

// WARNING : Then uncomment "parameters.php" in the .gitignore file when you start using the template
