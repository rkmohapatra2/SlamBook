<?php
 session_start();
   $eid= $_POST['user'];
   $Password= $_POST['pwd'];
    if($eid&&$Password)
      {
        $connect = mysql_connect("localhost","root","") or die("Couldn't connect to the sql");
        mysql_select_db("company") or die("could not connect to the database");
        $query=mysql_query("SELECT * FROM  admin WHERE user='$eid' AND pwd='$Password'");
        $numrows= mysql_num_rows($query);
		 if($numrows!=0)
        {
          while($row=mysql_fetch_assoc($query))
          {
            $dbeid=$row['user'];
            $dbpwd=$row['pwd'];
			$dbid=$row['id'];
          }
         if($dbeid==$eid&&$dbpwd==$Password)
         {
			
          
		   
		   header("location: login.html");
			 
         }
         else
           echo "Incorrect Password";


        }
        else
          die("That username dosenot exist");

      }
      else
         die("Please enter the name values");
		
?>