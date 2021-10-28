<!DOCTYPE html>
<html lang="en">
    
	<head>
		<title>bdtourist.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet"  href="link/style.css">
        <link href='link/link.css' rel='stylesheet'>
         <link href='link/img.css' rel='stylesheet'>
		
	</head>
	
	<body>
       
   
            
            <html>


    <h2>Khulna</h2>
    
    <?php

       $con=mysqli_connect("localhost","root","");
    
if(!$con){
	echo "Localhost is not connected .<br>";
}
else{
	 "Localhost is  connected .<br>";
}
                
   $dbSelect=mysqli_select_db($con,"bangladesh");             
 if(!$dbSelect){
     echo "DB is not selected.<br>";
 }
   
                         
                
                
   $sql="Select * from khulna";
    
      $result=mysqli_query($con,$sql);
    while($var=mysqli_fetch_array($result))
    {
        echo $var['Emergency Number']."<br>";
    }
    
     ?>
    
 
</html>
            
            
            
             
        
            
            
            
            
            	
            
      
        
	</body>
</html>