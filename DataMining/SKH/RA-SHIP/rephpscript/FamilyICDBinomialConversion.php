<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>SKH SCRIPT</title>
</head>
<body>
</body>
</html>
<?php
$dbname="skh_db";
$chandle = mysql_connect("localhost", "root", "")  or die("Connection Failure to Database");
$db_selected=mysql_select_db($dbname, $chandle) or die ($dbname . " Database not found. ");
if(!$db_selected)
 die ('Can\'t open skh_db : ' . mysql_error());
 
 
$addiction_data=mysql_query("Select * FROM  familyicd");
if (!$addiction_data) 
{
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$total=mysql_num_rows($addiction_data);
echo $total;
$true=1;
$false=0;
 $row_count=-1;
 while($row= mysql_fetch_array($addiction_data))
 {   
$row_count=$row_count+1;
   for($i=1;$i<=4;$i++)
   {
   if($i==1)
  $relation=$row["RELATION1"];
   else if($i==2)
   $relation=$row["RELATION2"];
   else if($i==3)
   $relation=$row["RELATION3"];
   else if($i=4)
   $relation=$row["RELATION4"];
    switch($relation)
    {
	case "AUNT":	
	$query="update familyicdbinomial set AUNT='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "BROTHER":
	$query="update familyicdbinomial set BROTHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "BOTHER IN LAW":
	$query="update familyicdbinomial set BOTHER_IN_LAW ='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "COUSIN":
	$query="update familyicdbinomial set COUSIN='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "DAUGHTER":
	$query="update familyicdbinomial set DAUGHTER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "FATHER":
	$query="update familyicdbinomial set FATHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "FATHER IN LAW":
	$query="update familyicdbinomial set FATHER_IN_LAW='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "GRAND DAUGHTER":
	$query="update familyicdbinomial set GRAND_DAUGHTER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "GRAND FATHER":
	$query="update familyicdbinomial set GRAND_FATHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "GRAND MOTHER":
	$query="update familyicdbinomial set GRAND_MOTHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "GRAND SON":
	$query="update familyicdbinomial set GRAND_SON='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "HUSBAND":
	$query="update familyicdbinomial set HUSBAND='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "MATERNAL GRAND FATHER":
	$query="update familyicdbinomial set MATERNAL_GRAND_FATHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "MATERNAL GRAND MOTHER":
	$query="update familyicdbinomial set MATERNAL_GRAND_MOTHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "MOTHER":
	$query="update familyicdbinomial set MOTHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "MOTHER IN LAW":
	$query="update familyicdbinomial set MOTHER_IN_LAW='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "NEPHEW":
	$query="update familyicdbinomial set NEPHEW='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "NIECE":
	$query="update familyicdbinomial set NIECE='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "PATERNAL GRAND FATHER":
	$query="update familyicdbinomial set PATERNAL_GRAND_FATHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "PATERNAL GRAND FATHER":
	$query="update familyicdbinomial set PATERNAL_GRAND_FATHER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "RELATIVE":
	$query="update familyicdbinomial set RELATIVE='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "SISTER":
	$query="update familyicdbinomial set SISTER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "SISTER IN LAW":
	$query="update familyicdbinomial set SISTER_IN_LAW='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "SON":
	$query="update familyicdbinomial set SON='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "STEP SISTER":
	$query="update familyicdbinomial set STEP_SISTER='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "UNCLE":
	$query="update familyicdbinomial set UNCLE='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	case "WIFE":
	$query="update familyicdbinomial set WIFE='1' where id = '$row_count' "; 
	$res=mysql_query($query);
	break;
	
	
	}
   }
  }
   
 
mysql_close();
?>
re id = '$row_count' "; 
	$res=mysql_quer