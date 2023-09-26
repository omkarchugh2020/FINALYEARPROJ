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
 <style>
        input[type=button], input[type=submit] {
    background-color: #eb6363;
    float:right;
    margin: 10px;
    padding: 10px ;
    border: none;
    
    cursor: pointer;
  }
  input[type=text]{
    
    margin-left:1130px;
    margin-top:10px;
    padding: 10px ;
  }
 
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conducting Agreement</title>
    <link rel="icon" type="image/png" href="../assets/logo.png"/>

</head>
<body onload="printDiv()">
<form method="post" >

<input type="text" placeholder="Reason to Decline" name="Reason" id="r1">

<input type="submit"  value="Decline" ></input>
<input type="button"  onclick="window.location.href = '../Approval/CA/approve ca.php?ID=<?php echo $row['ID']; ?>'" value="Approve"></input></form>
<?php
if(!empty($_POST['Reason']))
{
 
  $ID=secure($_GET['ID']);
  $Reason= secure($_POST['Reason']);
  $sql="UPDATE ca  SET approval='Declined', Reason='$Reason '   WHERE ID='$ID'";
        
        $mysqli->query($sql);  
        

}


?>
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
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
       <?php
   
	$sql="SELECT `photo` from `ca` where ID='$ID' ";
    $data=$mysqli->query($sql);
    $result=mysqli_fetch_assoc($data);
    $im="../".$result['photo'];
               
         echo '<center><div class="image">';
        echo "<img src='".$im."' '><br>";
		echo '</div></center>';
                    
                       
                    
                
            ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>    
       <?php
   
	$sql="SELECT `document` from `ca` where ID='$ID' ";
    $data=$mysqli->query($sql);
    $result=mysqli_fetch_assoc($data);
    $im="../".$result['document'];
               
         echo '<center><div class="image1">';
        echo "<img src='".$im."' '><br>";
		echo '</div></center>';
                    
                       
                    
                
            ?>
<script>

function printDiv() {

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

             document.getElementById("secondPartyName").innerHTML = secondPartyName;
             document.getElementById("secondPartyName1").innerHTML = secondPartyName;
             
             document.getElementById("secondPartyAddress").innerHTML = secondPartyAddress;
             document.getElementById("secondPartyAddress1").innerHTML = secondPartyAddress;         

             document.getElementById("noOfMonths").innerHTML = noOfMonths;

             document.getElementById("startDate").innerHTML = startDate;
             document.getElementById("startDate2").innerHTML = startDate;           

             document.getElementById("endDate").innerHTML = endDate;
      
             document.getElementById("premises").innerHTML = premises;
             document.getElementById("premises1").innerHTML = premises;

             document.getElementById("terms").innerHTML = terms;
          
             
              
         }
         </script>
</body>
</html>