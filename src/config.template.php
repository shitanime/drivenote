<?php
/**********************************************\
* Copyright (c) 2014 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

// Application Credentials
define('SCHOOL_NAME', 'School'); // Appears on the title and h1 tags of the main page
define('APP_NAME', 'Drivenote'); // The application name
define('DESCRIPTION', 'The Google Drive permission management system for the students of School');
define('DOMAIN', 'school.edu');
define('HTTPS', true);
define('ACADEMIC_EMAIL_FORMAT', '/^student[0-9]{5,7}@school\.edu$/'); // Regex that describes an academic email address, it's used for validation
define('ACADEMIC_EMAIL_EXAMPLE', 'student@school.edu'); // It is used as a placeholder for the academic_email textbox
define('GOOGLE_ANALYTICS_ID', false); // The Google Analytics ID e.g. 'UA-98765432-1'. If it is false Google Analytics is disabled.

// Google Service Account Credentials
define('SERVICE_CLIENT_ID', ''); // Client ID of service account
define('SERVICE_ACCOUNT_NAME', ''); // Email Address of service account
define('SERVICE_KEY_FILENAME', '../keys/key.p12'); // Path to service account key file
define('SERVICE_KEY_SECRET', 'notasecret'); // notasecret is the default passphrase of all p12 keys generated by google
define('SERVICE_API_SCOPE', 'https://www.googleapis.com/auth/drive'); // We want to access the google drive api
define('DIRECTORY_ID', ''); // ID of the directory to get shared

// Google Web Application Credentials
define('WEBAPP_CLIENT_ID', ''); // Client ID of web application
define('WEBAPP_ACCOUNT_NAME', ''); // Email Address of web application
define('WEBAPP_SECRET', ''); // Secret of web application
define('WEBAPP_REDIRECT_URI', 'https://<domain>/oauth2callback.php'); // Callback URL of web application
define('WEBAPP_API_SCOPE', 'email'); // We just want the user's email

// Database Credentials
define('DB_DRIVER', 'mysql');
define('DB_CHARSET', 'utf8');
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWD', '');

// SMTP Server Credentials
define('SMTP_USER', '');
define('SMTP_PASSWD', '');
define('SMTP_HOST', '');
define('SMTP_CHARSET', 'UTF-8');
define('SMTP_PORT', '');
define('SMTP_AUTH', true); // Enable SMTP authentication
define('SMTP_ENCRYPTION', 'tls'); // 'ssl' also accepted
