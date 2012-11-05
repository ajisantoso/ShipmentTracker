<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];
if($username && $password)
{

$dbhost= 'localhost';
$dbname = 'tracker';
$dbuser = 'btjackso';
$dbpass = 'BTJ1987$';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$query = "SELECT * FROM users WHERE userName ='$username'";
$result = mysql_query($query);

$numrows = mysql_num_rows($result);


if($numrows != 0)
{
    for($j = 0; $j < $numrows ; ++$j);
    {
        $row = mysql_fetch_row($result);
        
    
    }
    if( $password == $row[4])
    {
        
        echo "youre in. click <a href='../test.php'> here</a> to enter the member page.";
        
    }
    else
        die ("incorrect password");
    
}
else
    die("that user doesn't exist");
}
else
    die("please enter username/password");
    

?>