<?php 
 require('../assets/database/sql.php');
 $ID = secure($_GET['ID']);
 $sql = "SELECT * FROM `promisory_note`where ID='$ID'";
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
    <title>PROMISSORY NOTE</title>
    <style>
        input[type=button] {
    background-color: #eb6363;
    float:right;
    margin: 10px;
    padding: 10px ;
    border: none;
    
    cursor: pointer;
  }
        </style>
</head>
<body onload="printDiv()">
<input type="button" onclick="window.location.href = '../Approval/PN/decline pn.php?ID=<?php echo $row['ID']; ?>'" value="Decline"></input> 
<input type="button"  onclick="window.location.href = '../Approval/PN/approve pn.php?ID=<?php echo $row['ID']; ?>'"value="Approve"></input>
<span id="printcontent">
       
       <pre>
       PROMISSORY NOTE

 Rs. <span id="rupees"></span> of <span id="firstPartyName2"> </span>                                                                                                        DATE:<span id="startDate"></span>

ON DEMAND after <span id="endDate"></span> I <span id="secondPartyName"></span> , adult,citizen of India, having address at <span id="secondPartyAddress"></span> do hereby "PROMISE TO 
PAY" <span id="rupees1"></span> to <span id="firstPartyName"></span> adult, citizen of India, having address at<span id="firstPartyAddress"></span>a sum of Rs.<span id="withinterset"></span> /- with 
interest there on at the rate of 18% per annum for value received.
 








                                                                                                      
                                                                                                        SIGNATURE








WITNESSES:
Sr. No.	Name	


1.<span id="witness_name"></span>

               
       </pre>
   </span>
   
   <script>
  function printDiv() { 
 <?php
 
   $sql = "SELECT * FROM `promisory_note` where ID='$ID'";
   $result = $mysqli->query($sql);
   $i=0;
   $row = $result->fetch_assoc()
   
?>
                <?php  $firstPartyName=$row['firstPartyName']; ?>
                <?php  $firstPartyAddress=$row['firstPartyAddress']; ?>
                <?php  $secondPartyName= $row['secondPartyName']; ?>
                <?php  $secondPartyAddress =$row['secondPartyAddress']; ?>
                <?php  $noOfMonths =$row['noOfMonths']; ?>
                <?php  $startDate =$row['startDate']; ?>
                <?php  $endDate =$row['endDate']; ?>
                <?php  $rupees=$row['rupees']; ?>
                <?php  $withinterset=$row['withinterset']; ?>
                <?php  $witness_name =$row['witness_name']; ?>


               var firstPartyName = "<?php echo $firstPartyName ?>";
               var firstPartyAddress = "<?php echo $firstPartyAddress ?>";
               var secondPartyName = "<?php echo $secondPartyName ?>";
               var secondPartyAddress = "<?php echo $secondPartyAddress ?>";
               var noOfMonths = "<?php echo $noOfMonths ?>";
               var startDate = "<?php echo $startDate ?>";
               var endDate = "<?php echo $endDate ?>";
               var rupees = "<?php echo $rupees ?>";
               var withinterset = "<?php echo $withinterset ?>";
               var witness_name = "<?php echo $witness_name ?>";
              
   
               document.getElementById("firstPartyName").innerHTML = firstPartyName;
               document.getElementById("firstPartyName2").innerHTML = firstPartyName;
              
               document.getElementById("firstPartyAddress").innerHTML = firstPartyAddress;
              
               document.getElementById("secondPartyName").innerHTML = secondPartyName;
                           
               document.getElementById("secondPartyAddress").innerHTML = secondPartyAddress;
            
               document.getElementById("startDate").innerHTML = startDate;

               document.getElementById("endDate").innerHTML = endDate;
        
               document.getElementById("rupees").innerHTML = rupees;
               document.getElementById("rupees1").innerHTML = rupees;

               document.getElementById("withinterset").innerHTML = withinterset;

               document.getElementById("witness_name").innerHTML = witness_name;
               
              
        
           }
           </script>
</body>
</html>