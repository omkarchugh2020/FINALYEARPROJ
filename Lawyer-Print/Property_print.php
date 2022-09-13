<?php 
    require('../assets/database/print_sql.php');

  $ID = secure($_GET['ID']);
  $sql = "SELECT * FROM `property_transfer`where ID='$ID'";
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
    <link rel="icon" type="image/png" href="../assets/logo.png"/>

    <title> Property Transfer</title>
    <style>

@page {
  size: A3;
  margin: 0;
}

    </style>
    <style>
        input[type=button] {
    background-color: #eb6363;
    float:right;
    margin: 10px;
    padding: 10px ;
    border: none;
    
    cursor: pointer;
  }
  /* input[type=text]{
    
    float:right;
    margin-top: 28px;
    padding: 10px ;
  } */
        </style>
</head>
<body onload="printDiv()">
<form method="get" >
<!-- <input type="text" name="Reason" placeholder="Reason to Decline" ondblclick="window.location.href = '../Approval/LL/decline.php?Reason='"></input> </form><br>  -->
<input type="button" onclick="window.location.href = '../Approval/property/decline property.php?ID=<?php echo $row['ID']; ?>'" value="Decline"></input>
<input type="button"  onclick="window.location.href = '../Approval/property/approve property.php?ID=<?php echo $row['ID']; ?>'"value="Approve"></input>
</form>
<span id="printcontent">
       
       <pre>
       
                                                                                       <b> Property Transfer </b>

This Agreement to Sale is executed on this  <span id="selling_date"></span> between <span id="firstPartyName"></span>  having address <span id="firstPartyAddress"></span>at hereinafter called the Party No.1.

AND

<span id="secondPartyName"></span> having address at <span id="secondPartyAddress"></span>  hereinafter called the Party No.2.

The expression of the party No.1 & 2, wherever they occur in the body of this agreement shall mean and include their respective heirs, legal representatives, successors, administrators, executors, and assignees.

Whereas Party No.1 is the bonafide allottee/owner in possession of property of his bonafide needs and requirements, has agreed to sell the aforesaid flat having area of <span id="area"></span> for a sum of 

Rs.  <span id="total"></span> and Party No.2 has agreed to purchase the said flat from Party No.1.

AND WHEREAS Party No.1 admits that the said amount of Rs. <span id="total1"></span> if the full and final payment in respect of the said property. The Party No.1 has represented to party No.2 that the said flat is 

self acquired flat of party No.1 in which her heirs successors, family members or anyone else have no right, title, interest or concern of any nature whatsoever and as such Party No.1 is fully competent to enter

into this agreement and transfer his all the rights in favour of Party No.2 on the terms and conditions agreed between the parties and are mentioned hereunder:-

NOW THIS AGREEMENT TO SALE WITNESSETH AS UNDER: -

1. That the total and entire sale consideration amount of Rs. <span id="total2"></span> of the flat has been received by party No.1 from Party No.2 vide separate legal receipt as per given details:

Dated <span id="selling_date1"></span> issued in the name of Party No. 1  And on the receipt of the said amount the Party No.1 admits that nothing remains due from Party No.2.However, all the statutory dues and expenses will be 

borne by Party No.2 including the Stamp duty on the registration of Conveyance Deed. Party No.1 will hand over the vacant possession of the aforesaid flat to Party No.2.immediately thereafter.

2. That Party No.1 assures Party No.2 that the aforesaid flat is free from all sorts of encumbrances such as prior sale, gifts, mortgage, litigation, disputes, stay orders, attachments, notifications,

acquisitions,charges, liens, sureties, securities, HUF, Benami, ownership or any other registered or unregistered encumbrances and if this fact is found otherwise as a result of which a part or whole of the 

aforesaid flat goes out from the hands of Party No.2 then Party No.1 will indemnify the loss thus suffered by Party No.2.

3. That party No.1 has undertaken and agreed not to create any disputes or encumbrances in respect of possession or ownership of the said flat in future.

4. That Party No.1 has also executed an irrevocable General Power of Attorney and Special Attorneys in respect of the said flat in favour of Party No.2 and all these attorney Deeds shall remain irrevocable

in future, Party No.1 has also executed various other court documents in favour of Party No.2 and all these documents namely, Will, Receipt, Indemnity Bond etc. shall also remain irrevocable under all

circumstances.

5. That Party No.1 admits its liability that in case of any encumbrances or in case the allotment gets cancelled then Party No.1 admits its liability to pay the amount of Rs. <span id="total3"></span> apart from 

interest and damages to Party No.2 and also apart from the refund of the amount of Rs. <span id="total4"></span> being paid under this agreement to sale.

8. That the Party No.1 has agreed to communicate the Party No.2, the necessary requirements required to be compiled for execution and Registration of conveyance Deed as well as handing over the possession etc.

9. That Party No.1 will have no objection if Party No.2 transfer all rights vested in her vide this Agreement to anyone else or gets the sale effected in her name or in the name of her nominee.

10. That Party No.1 shall not violate any of the terms and conditions of this agreement in future failing which Party No.2 will have a right to enforce this agreement through a competent court by a suit for

specific performance or otherwise at the costs, risks and consequences of Party No.1.

11. That the Party No.1 admits that he has been left with no rights, titles, interest or concern of any nature whatever in the aforesaid flat.

12. That Party No.1 has also executed a General Power of Attorney in respect of the said flat so as to conclude the sale after the registration of Conveyance Deed of the said flat in her favour or in favour of

her nominee.

13. That in fact after receiving the entire sale consideration of Rs. <span id="total5"></span> from Party No.2 and after Party No.2 has paid/deposited the entire balance consideration amount the Party No.2 has not to 

do any other act except the same if conveyed by the Party No.1 as such Party No.2 shall be entitled to get the conveyance Deed executed either from Party No.1 or if permissible at any point of time and period of 

limitation shall not be applicable in the transaction.

14. That the Party No.1 admits that this agreement to sale shall remain irrevocable and Party No.1 shall not revoke or cancel the same in future in any circumstances.

IN WITNESS WHEREOF both the parties have signed this agreement in the presence of the following witnesses:

WITNESSES:

1. <span id="firstPartyName1"></span>

2. <span id="secondPartyName1"></span>


       </pre>
   </span>

   <script>

  function printDiv() {
 
           <?php  
            $firstPartyName = $row['firstPartyName'];
            $firstPartyAddress = $row['firstPartyAddress'];
            $secondPartyName =$row['secondPartyName'];
            $secondPartyAddress = $row['secondPartyAddress'];
            $selling_date = $row['selling_date'];
           
            $area = $row['area'];
            $cost = $row['cost'];
            $stampduty = $row['stampduty'];
            $total = $row['total']; 
            ?>


               var firstPartyName = "<?php echo $firstPartyName ?>";
               var firstPartyAddress = "<?php echo $firstPartyAddress ?>";
               var secondPartyName = "<?php echo $secondPartyName ?>";
               var secondPartyAddress = "<?php echo $secondPartyAddress ?>";
               var selling_date = "<?php echo $selling_date ?>";
               var area = "<?php echo $area ?>";                            
               var total = "<?php echo $total ?>";
   
               document.getElementById("firstPartyName").innerHTML = firstPartyName;
               document.getElementById("firstPartyName1").innerHTML = firstPartyName;
               
               document.getElementById("firstPartyAddress").innerHTML = firstPartyAddress;
               

               document.getElementById("secondPartyName").innerHTML = secondPartyName;
               document.getElementById("secondPartyName1").innerHTML = secondPartyName;
              
               
               document.getElementById("secondPartyAddress").innerHTML = secondPartyAddress;
               

               document.getElementById("selling_date").innerHTML = selling_date;
               document.getElementById("selling_date1").innerHTML = selling_date;            

               document.getElementById("area").innerHTML = area;
        
               
               document.getElementById("total").innerHTML = total;
               document.getElementById("total1").innerHTML = total;
               document.getElementById("total2").innerHTML = total;
               document.getElementById("total3").innerHTML = total;
               document.getElementById("total4").innerHTML = total;
               document.getElementById("total5").innerHTML = total;
               

            

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