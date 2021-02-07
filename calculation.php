<?php
if(isset($_REQUEST['submit'])){
$dob=$_REQUEST['bdate'];
$diff = date_diff(date_create($dob),date_create("today"));
echo " <H1 align='center'> now you are : $diff->y years $diff->m month $diff->d days</H1>";
}
?>