
<?php
include("dbcon.php"); 

$sub=array("$_POST[Bangla]","$_POST[English]","$_POST[Math]","$_POST[Science]","$_POST[Religion]");
$i=0;$gp=0;



$n=$_POST['Name'] ;
$r=$_POST['Roll'] ;


if(!$n )
{ echo(" The Student Name was either empty or invalid. please try again. ");
header( "refresh:2;url=add_data.html" );
}  
else if(!$r )
{ echo(" The Student Roll wass either incomplete or not valid. please try again ");
header( "refresh:2;url=add_data.html" );
}  
else
{
while($i<5)
{
  
    if($sub[$i]>79)
        $gpa=5;
    else if($sub[$i]>69)
        $gpa=4;
    else if($sub[$i]>59)
        $gpa=3.5;
    else if($sub[$i]>49)
        $gpa=3;
    else if($sub[$i]>39)
        $gpa=2.5;
    else if ($sub[$i]>32)
        $gpa=2;
    else
    {
       $gp=0;
         break;
    }
        
        
    
    $gp=$gp+$gpa;
    $i++;
    
}
$gp=$gp/5;

 echo(" 1 data added. Redirecting to Result Panel");
header( "refresh:2;url=teacher.php" );



$sql="INSERT INTO semister ( Roll,Name, Bangla, English, Math, Science, Religion,GPA)
VALUES
('$_POST[Roll]','$_POST[Name]','$_POST[Bangla]','$_POST[English]','$_POST[Math]','$_POST[Science]','$_POST[Religion]',$gp)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}

 
mysql_close($con)
?>