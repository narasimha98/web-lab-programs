<?php
session_start();
if(isSet($_SESSION['Views']))
{
$_SESSION['Views']=$_SESSION['Views']+1;
}
else
{
$_SESSION['Views']=1;
}
echo "This web page view count is:".$_SESSION['Views'];
?>

