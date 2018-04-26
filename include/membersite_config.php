<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('https://satyaregis-satyav1.azurewebsites.net/');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('rajit88@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'satyadbserver.database.windows.net',
                      /*username*/'satyadbserver',
                      /*password*/'Asdf12345678',
                      /*database name*/'satyadb',
                      /*table name*/'satyauser37');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>
