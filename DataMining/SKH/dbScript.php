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
$MRNumbers=mysql_query("Select DISTINCT MRNO FROM skh_old_db");
if (!$MRNumbers) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
echo "Distinct Records ".mysql_num_rows($MRNumbers);

 while($row= mysql_fetch_array($MRNumbers))
 {
 $mrno=$row["MRNO"];
 $Patients_records=mysql_query("Select * from skh_old_db Where MRNO=$mrno"); 
 $num_rows=mysql_num_rows($Patients_records);
echo "Total records".$num_rows;
 /*****************NEW COLUMNS******************/
 $Relation2="NULL";
 $Relation3="NULL";
 $Relation4="NULL";
   $Family_History_ICD2="NULL";
   $Family_History_ICD3="NULL";
    $Family_History_ICD4="";
	  $Family_History_ICD_DESC2="NULL";
   $Family_History_ICD_DESC3="NULL";
    $Family_History_ICD_DESC4="NULL";
	$Addiction2="NULL";
	$Addiction3="NULL";
	$Addiction4="NULL";
	$valid_basis_of_diagnosis1="NULL";$valid_basis_of_diagnosis2="NULL";$valid_basis_of_diagnosis3="NULL";$valid_basis_of_diagnosis4="NULL";
 /**********************************************/
 $rowcount=1; 
 $relation_count=0;
 $family_ICD_count=0;
 $family_ICD_Desc_count=0;
 $addiction_count=$valid_basis_diagnosis_count=0;
while($record=mysql_fetch_array($Patients_records))
{
 $tempRelation=$record["RELATION"];
   $tempFamily_History_ICD=$record["FAMILY_HISTORY_ICD"];
  $tempFamily_History_ICD_DESC=$record["FAMILY_HISTORY_ICD_DESC"];
  $tempAddiction=$record["ADDICTION"];
  $tempsubsite=$record["SUBSITE"];
  $tempvalidbasis=$record["VALID_BASIS_OF_DIAGNOSIS"];
  $age=$record["AGE_AT_PRESENTATION"];
  $sex=$record["SEX"];
  $tehsil=$record["TEHSIL"];
  $district=$record["DISTRICT"];
  $province=$record["PROVINCE"];
  $country=$record["COUNTRY"];
   $occupation=$record["OCCUPATION"];
   if(empty($age))
   $age="NULL";
   if(empty($sex))
   $sex="NULL";
   if(empty($tehsil))
   $tehsil="NULL";
   if(empty($district))
   $district="NULL";
   if(empty($province))
   $province="NULL";
   if(empty($country))
   $country="NULL";
   if(empty($occupation))
   $occupation="NULL";
   $A_death_cause=$record["A_DEATH_CAUSE"];
   if(empty($A_death_cause))
   $A_death_cause="NULL";
   $pathological_stage=$record["PATHOLOGICAL_STAGE"];
   if(empty($pathological_stage))
   $pathological_stage="NULL";
   $clinical_stage=$record["CLINICAL_STAGE"];
   if(empty($clinical_stage))
   $clinical_stage="NULL";
   $morphology=$record["MORPHOLOGY"];
   if(empty($morphology))
   $morphology="NULL";
   $seer_summary_stage=$record["SEER_SUMMARY_STAGE"];
 if(empty($seer_summary_stage))
 $seer_summary_stage="NULL";
  if($rowcount==1)
  {
   $Relation1=$record["RELATION"];
   if(empty($Relation1))
   $Relation1="NULL";
  $Family_History_ICD1=$record["FAMILY_HISTORY_ICD"];
  if(empty($Family_History_ICD1))
  $Family_History_ICD1="NULL";
  $Family_History_ICD_DESC1=$record["FAMILY_HISTORY_ICD_DESC"];
  if(empty($Family_History_ICD_DESC1))
  $Family_History_ICD_DESC1="NULL";
  $Addiction1=$record["ADDICTION"];
  if(empty($Addiction1))
  $Addiction1="NULL";
  $subsite=$record["SUBSITE"];
  if(empty($subsite))
  $subsite="NULL";
  $valid_basis_of_diagnosis1=$record["VALID_BASIS_OF_DIAGNOSIS"];  
 if(empty($valid_basis_of_diagnosis1))
 $valid_basis_of_diagnosis1="NULL";

   $relation_count=1;
 $family_ICD_count=1;
 $family_ICD_Desc_count=1;
 $valid_basis_diagnosis_count=1;
 $addiction_count=$valid_basis_diagnosis_count=1;

  }
  else if($rowcount>1)
  {
 //  echo "current Subsite".$tempsubsite; && $rowcount<$num_rows
   if($subsite!= $tempsubsite )
  {
  
$query="insert into  skh_patients(`MRNO`,`AGE_AT_PRESENTATION`,`SEX`,`TEHSIL`,`DISTRICT`,`PROVINCE`,`COUNTRY`,`OCCUPATION`,`RELATION1`,`RELATION2`,`RELATION3`,`RELATION4`,`FAMILY_HISTORY_ICD1`,`FAMILY_HISTORY_ICD2`,`FAMILY_HISTORY_ICD3`,`FAMILY_HISTORY_ICD4`,`FAMILY_HISTORY_ICD_DESC1`,`FAMILY_HISTORY_ICD_DESC2`,`FAMILY_HISTORY_ICD_DESC4`,`FAMILY_HISTORY_ICD_DESC3`,`ADDICTION1`,`ADDICTION2`,`ADDICTION3`,`VALID_BASIS_OF_DIAGNOSIS1`,`VALID_BASIS_OF_DIAGNOSIS2`,`VALID_BASIS_OF_DIAGNOSIS3`,`VALID_BASIS_OF_DIAGNOSIS4` ,`DIAGNOSIS_AT_SKM`,`DEFINITIVE_DIAGNOSIS_INSTITUTE`,`ORGAN`,`SUBSITE`,`MORPHOLOGY`,`GRADE`,`CLINICAL_STAGE`,`PATHOLOGICAL_STAGE`,`SEER_SUMMARY_STAGE`,`A_DEATH_CAUSE`) values ($mrno,$age,$sex,$tehsil,$district,$province,$country,$occupation,$Relation1,$Relation2,$Relation3,$Relation4,$family_history_icd1,$Family_History_ICD2,$Family_History_ICD3,$Family_History_ICD4,$family_history_icd_desc1,$family_history_icd_desc2,$family_history_icd_desc4,$family_history_icd_desc3,$addiction1,$addiction2,$addiction3,$valid_basis_of_diagnosis1,$valid_basis_of_diagnosis2,$valid_basis_of_diagnosis3,$valid_basis_of_diagnosis4,$diagnose_at_SKM,$definitive_diagnosis_institute,$organ,$subsite,$morphology,$grade,$clinical_stage,$pathological_stage,$seer_summary_stage,$A_death_cause)";
$res=mysql_query($query);
//  echo "query inserted done".$res;
$subsite=$tempsubsite;		
  }
  else if($subsite == $tempsubsite )
  {
  $display=0;
     if($relation_count==1)
	 {
	 if(!empty($tempRelation))
	 {
 	if($tempRelation != $Relation1)
		{
		$Relation2 = $tempRelation;
		++$relation_count;
		
		}
	}
	else if($relation_count==2)
	{
	if($tempRelation != $Relation2 and $tempRelation != $Relation1 )
		{
		$Relation3 = $tempRelation;
		++$relation_count;
		//echo "relation2 check".$Relation2;
		}
	}
	else if($relation_count==3)
	{
		if($tempRelation != $Relation2 and $tempRelation != $Relation1 and $tempRelation!= $Relation3)
		{
		$Relation4 = $tempRelation;
		++$relation_count;
		}
	}
	}
	if($family_ICD_count==1)
	{
	if ($tempFamily_History_ICD != $Family_History_ICD1 )
		{
		$Family_History_ICD2 = $tempFamily_History_ICD;
		++$family_ICD_count;
		}
	}
	else if($family_ICD_count==2)
	{
	if ($tempFamily_History_ICD != $Family_History_ICD2 and $tempFamily_History_ICD != $Family_History_ICD1 )
		{
		$Family_History_ICD3 = $tempFamily_History_ICD;
		++$family_ICD_count;
		}
	}
	else if($family_ICD_count==3)
	{
	if ($tempFamily_History_ICD != $Family_History_ICD2 and $tempFamily_History_ICD != $Family_History_ICD1 and $tempFamily_History_ICD != $Family_History_ICD3 )
		{
		$Family_History_ICD4 = $tempFamily_History_ICD;
		++$family_ICD_count;
		}
	}
	if( $family_ICD_Desc_count==1)
	{
	if ($tempFamily_History_ICD_DESC != $Family_History_ICD_DESC1 )
	   {
		$Family_History_ICD_DESC2 = $tempFamily_History_ICD_DESC;
		++$family_ICD_Desc_count;
	   }
	}
  else if($family_ICD_Desc_count==2)
   {
   	if ($tempFamily_History_ICD_DESC != $Family_History_ICD_DESC1 and $tempFamily_History_ICD_DESC != $Family_History_ICD_DESC2 )
	{
		$Family_History_ICD_DESC3 = $tempFamily_History_ICD_DESC;
		++$family_ICD_Desc_count;
	 }
   }
    else if($family_ICD_Desc_count==3)
   {
   	if($tempFamily_History_ICD_DESC != $Family_History_ICD_DESC1 and $tempFamily_History_ICD_DESC != $Family_History_ICD_DESC2 and $tempFamily_History_ICD_DESC != $Family_History_ICD_DESC3)
		{
		$Family_History_ICD_DESC4 = $tempFamily_History_ICD_DESC;
		++$family_ICD_Desc_count;
		}
    }
	
	if($addiction_count==1)
	{
	if($tempAddiction != $Addiction1)
	{
		$Addiction2=$tempAddiction;
		$addiction_count++;
	}
	}
	else if($addiction_count==2)
	{
	if($tempAddiction != $Addiction1 and $tempAddiction != $Addiction2)
		{$Addiction3=$tempAddiction;
		$addiction_count++;}
	}
	if($valid_basis_diagnosis_count==1)
	{
	if($tempvalidbasis!= $valid_basis_diagnosis1)
	    {
		 $valid_basis_of_diagnosis2=$tempvalidbasis;
		$$valid_basis_diagnosis_count++;
		}
	}
	else if($valid_basis_diagnosis_count==2)
	{
	if($tempvalidbasis!= $valid_basis_diagnosis1 and $tempvalidbasis!= $valid_basis_diagnosis2 )
		{ $valid_basis_diagnosis3=$tempvalidbasis;
		 $valid_basis_diagnosis_count++;}
	}	
	else if($valid_basis_diagnosis_count==3)
	{
		if($tempvalidbasis!= $valid_basis_diagnosis1 and $tempvalidbasis!= $valid_basis_diagnosis2 and $tempvalidbasis!= $valid_basis_diagnosis3 )
		{ 
		$valid_basis_of_diagnosis4=$tempvalidbasis;
		 $valid_basis_diagnosis_count++;
		 }
	}	
			 
   }// end if (same subsite)
   
 }    
	//if($count>1)
//	echo "New insertion for patient ".$count;


if($rowcount==$num_rows)
	{
	
/*	echo "insertion of duplicate record of ".$mrno."Relation1 ".$Relation1."Relation2 ".$Relation2."Relation3\t ".$Relation3."Relation4 ".$Relation4."Family History ICD1 ".$Family_History_ICD1."Family History ICD2 ".$Family_History_ICD2."Family History ICD3 ".$Family_History_ICD3."Family History ICD4 ".$Family_History_ICD4."Family history ICD Desc1".$Family_History_ICD_DESC1."Family History ICD Desc2\t".$Family_History_ICD_DESC2."Family history ICD Desc3".$Family_History_ICD_DESC3."Family history ICD Desc4 ".$Family_History_ICD_DESC4."valid basis of diagnosis1..".$valid_basis_of_diagnosis1."valid basis of diagnosis2..".$valid_basis_of_diagnosis2."valid basis of diagnosis3..".$valid_basis_of_diagnosis3."\n"; 
	*/
	//echo "Occupation".$occupation."  AGE  ".$age;
	
	$inquery="INSERT INTO  SKH_PATIENTS(`MRNO`,`AGE_AT_PRESENTATION`,`SEX`,`TEHSIL`,`DISTRICT`,`PROVINCE`,`COUNTRY`,`OCCUPATION`,`RELATION1`,`RELATION2`,`RELATION3`,`RELATION4`,`FAMILY_HISTORY_ICD1`,`FAMILY_HISTORY_ICD2`,`FAMILY_HISTORY_ICD3`,`FAMILY_HISTORY_ICD4`,`FAMILY_HISTORY_ICD_DESC1`,`FAMILY_HISTORY_ICD_DESC2`,`FAMILY_HISTORY_ICD_DESC4`,`FAMILY_HISTORY_ICD_DESC3`,`ADDICTION1`,`ADDICTION2`,`ADDICTION3`,`VALID_BASIS_OF_DIAGNOSIS1`,`VALID_BASIS_OF_DIAGNOSIS2`,`VALID_BASIS_OF_DIAGNOSIS3`,`VALID_BASIS_OF_DIAGNOSIS4` ,`DIAGNOSIS_AT_SKM`,`DEFINITIVE_DIAGNOSIS_INSTITUTE`,`ORGAN`,`SUBSITE`,`MORPHOLOGY`,`GRADE`,`CLINICAL_STAGE`,`PATHOLOGICAL_STAGE`,`SEER_SUMMARY_STAGE`,`A_DEATH_CAUSE`) values ($mrno,$age,$sex,$tehsil,$district,$province,$country,$occupation,$Relation1,$Relation2,$Relation3,$Relation4,$Family_History_ICD1,$Family_History_ICD2,$Family_History_ICD3,$Family_History_ICD4,$Family_History_ICD_DESC1,$Family_History_ICD_DESC2,$Family_History_ICD_DESC4,$Family_History_ICD_DESC3,$addiction1,$addiction2,$addiction3,$valid_basis_of_diagnosis1,$valid_basis_of_diagnosis2,$valid_basis_of_diagnosis3,$valid_basis_of_diagnosis4,$diagnose_at_SKM,$definitive_diagnosis_institute,$organ,$subsite,$morphology,$grade,$clinical_stage,$pathological_stage,$seer_summary_stage,$A_death_cause)";
	$res=mysql_query($inquery)or die(mysql_error());	
	echo "query inserted done for"; echo mysql_insert_id();
	}
	$rowcount++;
	
  }
 


 }
mysql_close();
?>