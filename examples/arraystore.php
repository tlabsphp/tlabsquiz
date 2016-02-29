<html>
<head></head>
<body>
  <form action="arraystore.php" method="post">
   <input type="checkbox" name="value[]" value="value1">Value1
   <input type="checkbox" name="value[]" value="value2">Value2
   <input type="checkbox" name="value[]" value="value3">Value3
   <input type="checkbox" name="value[]" value="value4">Value4
   <input type="checkbox" name="value[]" value="value5">Value5
   <input type="submit" name="submit" value="submit"/>
</form>

</body>
</html>
<?php
  if(isset($_POST['value'])){
    $data=$_POST['value'];
    $values= serialize($data);
    //code for database connection
    $con=mysqli_connect("localhost","root","","cre_db");
    $id=6;
    $sal=400;
    $insert_query = "INSERT INTO emp(eid,ename,salary) VALUES('$id','$values','$sal')";
    $result_insert = mysqli_query($con,$insert_query) or die("message");
  
  
  $query = "SELECT ename FROM emp WHERE eid=6";
 
  $result = mysqli_query($con,$query);
   
  while($values = mysqli_fetch_array($result))
  {    
    $uvalues= unserialize($values['ename']);        
    foreach($uvalues as $value)    {
           //code to play with $value      
              echo $value;
            
                }
           
        }
           
  }
  

  
?>
