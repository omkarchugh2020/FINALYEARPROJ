<?php  
    require('../assets/database/sql.php');
    $ID = secure($_GET['ID']);
    $sql = "SELECT * FROM `ca`where ID='$ID'";
    $result = $mysqli->query($sql);
    $i=0;
    $row = $result->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conducting Agreement</title>
</head>
<body onload="printDiv()">
<span id="printcontent">
    <pre>
DATE: <span id="startDate"></span>
To,

The Sr. Inspector of Police
Mumbai


SUB: LETTING OUT BUSINESS WITH COMMERCIAL
<span id="premises"></span> PREMISES ON CONDUCTING BASIS

Sir,
Under instructions from <span id="firstPartyName"></span> my client  <span id="secondPartyName"></span> adult, residing at <span id="secondPartyAddress"></span> party named and having business carried on 
in the name and style at <span id="premises1"></span> , I have to address you as follows: -

1.That my client has temporarily let out above mentioned business with commercial premises <span id="terms"> </span>i. e. premises address, situated within your jurisdiction 
to   <span id="secondPartyName1"></span>, adult, Indian inhabitant of <span id="secondPartyAddress1"></span>  for a temporary period of <span id="noOfMonths"></span>  MONTHS only deemed to have commenced from 
<span id="startDate2"></span> to ending on <span id="endDate"></span> (Both days inclusive).
2.The parties have executed necessary legal document “Conducting Agreement” and duly attested by the Notary Public on startdate . A Xerox copy of the said agreement is enclosed herewith for your
kind perusal and record purpose.
3.This is for your kind information, knowledge and for necessary action purpose.
Encl: Xerox copy of agreement

Thanking you,

Yours truly,



(N. A. GHATTE)
<pre>
<span>
<script>

function printDiv() {
// 
// $email =$_SESSION['email'];
//  $sql = "SELECT * FROM `ca` where ID='$ID'";
//  $result = $mysqli->query($sql);
//  $i=0;
//  $row = $result->fetch_assoc()
 
// 
              <?php  $firstPartyName=$row['firstPartyName']; ?>
              <?php  $firstPartyAddress=$row['firstPartyAddress']; ?>
              <?php  $secondPartyName= $row['secondPartyName']; ?>
              <?php  $secondPartyAddress =$row['secondPartyAddress']; ?>
              <?php  $noOfMonths =$row['noOfMonths']; ?>
              <?php  $startDate =$row['startDate']; ?>
              <?php  $endDate =$row['endDate']; ?>
              <?php  $premises=$row['premises']; ?>
              <?php  $terms =$row['terms']; ?>

             var firstPartyName = "<?php echo $firstPartyName ?>";
             var firstPartyAddress = "<?php echo $firstPartyAddress ?>";
             var secondPartyName = "<?php echo $secondPartyName ?>";
             var secondPartyAddress = "<?php echo $secondPartyAddress ?>";
             var noOfMonths = "<?php echo $noOfMonths ?>";
             var startDate = "<?php echo $startDate ?>";
             var endDate = "<?php echo $endDate ?>";
             var premises = "<?php echo $premises ?>";
             var terms = "<?php echo $terms ?>";
          
 
             document.getElementById("firstPartyName").innerHTML = firstPartyName;

            //  document.getElementById("firstPartyAddress").innerHTML = firstPartyAddress;
         
             document.getElementById("secondPartyName").innerHTML = secondPartyName;
             document.getElementById("secondPartyName1").innerHTML = secondPartyName;
             
             document.getElementById("secondPartyAddress").innerHTML = secondPartyAddress;
             document.getElementById("secondPartyAddress1").innerHTML = secondPartyAddress;
            

             document.getElementById("noOfMonths").innerHTML = noOfMonths;

             document.getElementById("startDate").innerHTML = startDate;
             document.getElementById("startDate2").innerHTML = startDate;
            //  document.getElementById("startDate2").innerHTML = startDate;

             document.getElementById("endDate").innerHTML = endDate;
      
             document.getElementById("premises").innerHTML = premises;
             document.getElementById("premises1").innerHTML = premises;

             //document.getElementById("rentxmonths").innerHTML = rentxmonths;

            
             document.getElementById("terms").innerHTML = terms;
          
             //document.getElementById("total").innerHTML = total;

              //printFunction()
              var printContents = document.getElementById('printcontent').innerHTML;
              var originalContents = document.body.innerHTML;
 
              document.body.innerHTML = printContents;
 
              window.print();
 
              document.body.innerHTML = originalContents;
         }
         </script>
</body>
</html>