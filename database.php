<?php 
require_once("functions.php");
session_start();
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'conjura'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

if(!empty($_POST['fullName']) && !empty($_POST['college']) && !empty($_POST['email']) && !empty($_POST['phone']))
{
  $fullName = cleanup($_POST['fullName']); 
  $college = cleanup($_POST['college']); 
  $email = cleanup($_POST['email']); 
  $phone = cleanup($_POST['phone']); 
  $events = cleanup($_POST['events']);
  if(!empty($_POST['events']))
  {
    if(strcmp($_POST['events'],"Hackathon") == 0)
    {  
      if(!empty($_POST['hackathon']) && !empty($_POST['indiorteam']))
      {
        $hackathon = cleanup($_POST['hackathon']);
        $indiorteam = cleanup($_POST['indiorteam']);
        if(strcmp($_POST['indiorteam'],"individual") == 0)
        {
            $queryhack = "INSERT INTO hack (fullName,college,email,phone,events,hackathon,indiorteam) VALUES ('$fullName','$college','$email','$phone','$events','$hackathon','$indiorteam')"; 
            $datahack = mysql_query ($queryhack)or die(mysql_error()); 
            if($datahack)
            {  
              $_SESSION['MESSAGE']="Registration Successfull.!";
            }  
            else
            {  
              $_SESSION['ERROR']="Please try again.!";
            }  
            header("location:index.php");
        }
        else
        {
          if(!empty($_POST['fullNamehack']) && !empty($_POST['emailhack']) && !empty($_POST['phonehack']) && !empty($_POST['fullNamehack1']) && !empty($_POST['emailhack1']) && !empty($_POST['phonehack1']))
          {  
            $fullNamehack = cleanup($_POST['fullNamehack']); 
            $emailhack = cleanup($_POST['emailhack']); 
            $phonehack = cleanup($_POST['phonehack']);
            $fullNamehack1 = cleanup($_POST['fullNamehack1']); 
            $emailhack1 = cleanup($_POST['emailhack1']); 
            $phonehack1 = cleanup($_POST['phonehack1']);
            $fullNamehack2 = cleanup($_POST['fullNamehack2']); 
            $emailhack2 = cleanup($_POST['emailhack2']); 
            $phonehack2 = cleanup($_POST['phonehack2']);
            $fullNamehack3 = cleanup($_POST['fullNamehack3']); 
            $emailhack3 = cleanup($_POST['emailhack3']); 
            $phonehack3 = cleanup($_POST['phonehack3']);
            $queryhack = "INSERT INTO hack (fullName,college,email,phone,events,hackathon,indiorteam,fullNamehack,emailhack,phonehack,fullNamehack1,emailhack1,phonehack1,fullNamehack2,emailhack2,phonehack2,fullNamehack3,emailhack3,phonehack3) VALUES ('$fullName','$college','$email','$phone','$events','$hackathon','$indiorteam','$fullNamehack','$emailhack','$phonehack','$fullNamehack1','$emailhack1','$phonehack1','$fullNamehack2','$emailhack2','$phonehack2','$fullNamehack3','$emailhack3','$phonehack3')"; 
            $datahack = mysql_query ($queryhack)or die(mysql_error()); 
            if($datahack)
            {  
              $_SESSION['MESSAGE']="Registration Successfull.!";
            }  
            else
            {  
              $_SESSION['ERROR']="Please try again.!";
            }  
            header("location:index.php");
          }
          else
          {
            $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
            header("location:index.php");
          }
        }
      }
      else
      {
        $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
        header("location:index.php");
      } 
    }
    else if(strcmp($_POST['events'],"SkillRace") == 0)
    {  
      if(!empty($_POST['skilltrack']))
      {
        $skilltrack = cleanup($_POST['skilltrack']);
        $querysr = "INSERT INTO sr (fullName,college,email,phone,events,skilltrack) VALUES ('$fullName','$college','$email','$phone','$events','$skilltrack')"; 
        $datasr = mysql_query ($querysr)or die(mysql_error()); 
        if($datasr)
        {  
          $_SESSION['MESSAGE']="Registration Successfull.!";
        }  
        else
        {  
          $_SESSION['ERROR']="Please try again.!";
        }  
        header("location:index.php");
      }
      else
      {
        $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
        header("location:index.php");
      }
    }
    else if(strcmp($_POST['events'],"UltimateEngineer") == 0)
    {  
      if(!empty($_POST['indiorteamul']))
      {
        $indiorteamul = cleanup($_POST['indiorteamul']);
        if(strcmp($_POST['indiorteamul'],"individualul") == 0)
        {
            $queryue = "INSERT INTO ue (fullName,college,email,phone,events,indiorteamul) VALUES ('$fullName','$college','$email','$phone','$events','$indiorteamul')";
            $dataue = mysql_query ($queryue)or die(mysql_error()); 
            if($dataue)
            {  
              $_SESSION['MESSAGE']="Registration Successfull.!";
            }  
            else
            {  
              $_SESSION['ERROR']="Please try again.!";
            }  
            header("location:index.php");
        }
        else
        {  
          if(!empty($_POST['fullNameUltEng']) && !empty($_POST['emailUltEng']) && !empty($_POST['phoneUltEng']))
          {  
            $fullNameUltEng = cleanup($_POST['fullNameUltEng']); 
            $emailUltEng = cleanup($_POST['emailUltEng']); 
            $phoneUltEng = cleanup($_POST['phoneUltEng']);
            $fullNameUltEng1 = cleanup($_POST['fullNameUltEng1']); 
            $emailUltEng1 = cleanup($_POST['emailUltEng1']); 
            $phoneUltEng1 = cleanup($_POST['phoneUltEng1']);
            $fullNameUltEng2 = cleanup($_POST['fullNameUltEng2']); 
            $emailUltEng2 = cleanup($_POST['emailUltEng2']); 
            $phoneUltEng2 = cleanup($_POST['phoneUltEng2']);
            $queryue = "INSERT INTO ue (fullName,college,email,phone,events,indiorteamul,fullNameUltEng,emailUltEng,phoneUltEng,fullNameUltEng1,emailUltEng1,phoneUltEng1,fullNameUltEng2,emailUltEng2,phoneUltEng2) VALUES ('$fullName','$college','$email','$phone','$events','$indiorteamul','$fullNameUltEng','$emailUltEng','$phoneUltEng','$fullNameUltEng1','$emailUltEng1','$phoneUltEng1','$fullNameUltEng2','$emailUltEng2','$phoneUltEng2')";
            $dataue = mysql_query ($queryue)or die(mysql_error()); 
            if($dataue)
            {  
              $_SESSION['MESSAGE']="Registration Successfull.!";
            }  
            else
            {  
              $_SESSION['ERROR']="Please try again.!";
            }  
            header("location:index.php");
          }
          else
          {
            $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
            header("location:index.php");
          }  
        }   
      }
      else
      {
        $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
        header("location:index.php");
      }
    }
    else
    {  
      $querybe = "INSERT INTO be (fullName,college,email,phone,events) VALUES ('$fullName','$college','$email','$phone','$events')"; 
      $databe = mysql_query ($querybe)or die(mysql_error()); 
      if($databe)
      {  
        $_SESSION['MESSAGE']="Registration Successfull.!";
      }  
      else
      {  
        $_SESSION['ERROR']="Please try again.!";
      }  
      header("location:index.php");
    }
  }
  else
  {
    $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
    header("location:index.php");
  }
}
else
{
  $_SESSION['ERROR']="*&nbsp;Fill all mandatory fields.!";
  header("location:index.php");
} 
?>
