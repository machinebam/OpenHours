<?php
//Timezone
date_default_timezone_set('Australia/Perth'); // Perth
//Todays Date
$date = date("d/m/y", time());
//$date = date("d/m/y", time());
//One day 
$oneday = 86400;
$theday = date("l");
//School Holidays
$s_date = strtotime("27 September 2014");
$e_date = strtotime("12 October 2014");
//Get the date in strtotime convert it to days
$todayDate = date(strtotime("current"));
$convert = str_replace('-', '/', $todayDate);
$plus0 = date('D',strtotime($convert . "+0 days"));
$plus1 = date('D',strtotime($convert . "+1 days"));
$plus2 = date('D',strtotime($convert . "+2 days"));
$plus3 = date('D',strtotime($convert . "+3 days"));
$plus4 = date('D',strtotime($convert . "+4 days"));
$plus5 = date('D',strtotime($convert . "+5 days"));
$plus6 = date('D',strtotime($convert . "+6 days"));
?>

<div class="row text-center white-text">
<div class="medium-6 columns">
<h2>Open today
<?php echo $theday . "<br />";
if (date(strtotime("+0 Days")) > $s_date && date(strtotime("+0 Days")) < $e_date) 
{ if ($plus1 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus1== "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($theday == "Saturday") {echo "10.00am - 5.00pm";} elseif ($theday == "Sunday") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}
}?>
</h2>
</div>
<div class="medium-6 columns">
<ul class="small-block-grid-2 medium-block-grid-3">
<li>
<p>
<?php echo date("D", time() + ($oneday * 1)) . "<br />";
if (date(strtotime("+1 Days")) > $s_date && date(strtotime("+1 Days")) < $e_date) 
{ if ($plus1 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus1== "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($plus1 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus1 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}

}?>
</p>
</li>
<li>
<p>
<?php echo date("D", time() + ($oneday * 2)) . "<br />";  
if (date(strtotime("+2 Days")) > $s_date && date(strtotime("+2 Days")) < $e_date) 
{ if ($plus2 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus2== "Sat") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}
}
else 
{ if ($plus2 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus2 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
?>
</p>
</li>
<li>
<p>
<?php echo date("D", time() + ($oneday * 3)) . "<br />";  
if (date(strtotime("+3 Days")) > $s_date && date(strtotime("+3 Days")) < $e_date) 
{ if ($plus3 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus3== "Sat") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($plus3 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus3 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}

}?>
</p>
</li>
<li>
<p>
<?php echo date("D", time() + ($oneday * 4)) . "<br />";  
if (date(strtotime("+4 Days")) > $s_date && date(strtotime("+4 Days")) < $e_date) 
{ if ($plus4 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus4== "Sat") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($plus4 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus4 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
?>
</p>
</li>
<li>
<p>
<?php echo date("D", time() + ($oneday * 5)) . "<br />";  
if (date(strtotime("+5 Days")) > $s_date && date(strtotime("+5 Days")) < $e_date) 
{ if ($plus5 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus5== "Sat") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($plus5 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus5 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
?>
</p>
</li>
<li>
<p>
<?php echo date("D", time() + ($oneday * 6)) . "<br />";  
if (date(strtotime("+6 Days")) > $s_date && date(strtotime("+6 Days")) < $e_date) 
{ if ($plus6 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus6== "Sat") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}}
else 
{ if ($plus6 == "Sat") {echo "10.00am - 5.00pm";} elseif ($plus6 == "Sun") {echo "10.00am - 5.00pm";}else {echo "10.00am - 5.00pm";}

}?>
</p>
</li>

</ul>
</div>
</div>