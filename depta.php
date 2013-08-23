<?php
     $connect = mysql_connect("localhost","root","") or die("Couldn't connect to the sql");
        mysql_select_db("company") or die("could not connect to the database");
	 
    $sql = mysql_query("SELECT * FROM dept ORDER BY id");
    $productCount = mysql_num_rows($sql); // count the output amount
     if ($productCount > 0)
     {
      	 
	  while($row = mysql_fetch_array($sql++))
	    {  
		    
			   
             $id = $row["id"];
			 $dfirst = $row["name"];
			 echo $dfirst.'<br />';
						 
        }
	 }
	echo '<p>NAME OF DEPT TO BE ADDED</p>';
	echo '<form action="da.php" method="post"><input type="text" name="dept" /><input type="submit" /></p>';

?>
