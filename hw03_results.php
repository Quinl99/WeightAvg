<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw03.css"> 
  <!-- ----------------------------------
            BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
    
    
   

      <section id="io">
   
<?    
//input 
$name =$_POST['name'];

$Exam1 =$_POST['Exam1'];
$Exam2 =$_POST['Exam2'];
$Exam3 =$_POST['Exam3'];

$HW1 =$_POST['HW1'];
$HW2 =$_POST['HW2'];
$HW3 =$_POST['HW3'];
$HW4 =$_POST['HW4'];
$HW5 =$_POST['HW5'];



 
print " <h2> Homework 3 - Grade report for $name </h2>";
    

  
//process
$examavg = ($Exam1 + $Exam2 + $Exam3) / 3;
$hwavg = ($HW1 + $HW2 + $HW3 + $HW4 + $HW5) / 5;

$new_avg =($examavg *.85) + ($hwavg * .15);

//add in interest, for month interest divide
//annual rate by 12.
//$new_balance += $new_balance *.15 /12;
//$min_payment = $new_balance * 0.02;

//output
  //print "Your new balance is $".number_format($new_balance,2)." and
  //your minimum payment is $".number_format($min_payment,2);
  
 

  print "<h3>Your final average is: ".number_format($new_avg,2)."</h3>";
  print "Exam average: ".number_format($examavg,2); 
  print "<br /><br /> Homework average: ".number_format($hwavg,2);
  //print "<h2>Exam average: ".number_format($examavg,2)."</h2>"; 
  
 // print " Homework average: ".number_format($hwavg,2);
 // print "<br /><br />Your final average is: ".number_format($new_avg,2);
  
?>
  
  
  </section>

    

</body>
</html>