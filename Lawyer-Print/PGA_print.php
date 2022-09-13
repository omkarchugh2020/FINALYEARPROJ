<?php 
require('../assets/database/print_sql.php');
$ID = secure($_GET['ID']);
 $sql = "SELECT * FROM `pga`where ID='$ID'";
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
    <title> PAYING GUEST</title>
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

<input type="button" onclick="window.location.href = '../Approval/PGA/decline pga.php?ID=<?php echo $row['ID']; ?>'" value="Decline"></input> 
<input type="button"  onclick="window.location.href = '../Approval/PGA/approve pga.php?ID=<?php echo $row['ID']; ?>'"value="Approve"></input>
<span id="printcontent">
       
       <pre>
       
   
                                             PAYING GUEST
   
                                       FOR RESIDENTIAL USE ONLY
   
   
   
       THIS PAYING GUEST is made, executed and entered into by and between the parties hereto at the place and on the day herein below mentioned.
   
   
                                               B E T W E E N
   
   
   
   <b><span id="firstPartyName">MR.NISAR AMIR GHATTE</span></b> adult, Indian inhabitant, having address at <span id="firstPartyAddress">Flat No. 1002, 10th Floor, Al-Aziz Palace, 4, 6, 8/10 Dongri Cross Lane, Jail Road (South), Dongri, Mumbai: 400 009</span>, hereinafter referred to as “The Licensor” (Which expression shall unless it is repugnant to the context or meaning thereof be deemed to mean and include his heirs, legal representatives, executors and administrators) of the First Part.
   
                                                   A N D
                                  
   <span id="secondPartyName">MR. SHADAB MOHAMMED RAFIQ KATE</span>, adult, Indian inhabitant, having address at <span id="secondPartyAddress">Room No. 8, First Floor, 13/17 Sadaqat Manzil, M. E. Sarang Marg, Dongri, Mumbai:400 009</span>, hereinafter referred to as “The Licensee” (Which expression shall unless it is repugnant to the context or meaning thereof be deemed to mean and include his heirs, legal representatives, executor and administrator) of the Second part. 	
   
       WHEREAS the Licensor is seized, possessed of or otherwise well and sufficiently entitled to the residential premises being <span id="firstPartyAddress1">Flat No. 1002, 10th Floor, Al-Aziz Palace, 4, 6, 8/10 Dongri Cross Lane, Jail Road (South), Dongri, Mumbai: 400 009</span> and more particularly mentioned in the Schedule hereto, hereinafter referred to as “the said Premises” for the sake of brevity.
   
   AND WHEREAS the Licensee approached the Licensor and represented that the Licensee is in need of residential premises for a temporary period for the residence of the Licensee along with family members and with all fairness and sincerity fully assured that the Licensee would strictly abide by and observe all the terms and conditions of this agreement and under this circumstances the Licensor has agreed to grant licence in respect of the said Premises for use and occupation of Licensee with family members for a temporary specified period and strictly in accordance with
   
   the provisions of the Maharashtra Rent Control Act 1999 and the Licensee will have no any other legal right, title claim, interest of any nature whatsoever and the Licensee along with family members will vacate the said Premises on termination of this agreement whether by efflux of its period or premature termination in lawful manner provided herein after without any hindrance, objection or excuse, failing which the Licensor shall have right to evict the Licensee as per the provisions laid down u/s. 24 of the Maharashtra Rent Control Act 1999 and/or the law applicable and time being in force.
   
        AND WHEREAS both the parties hereto mutually executed this agreement whereby the Licensor hereby has granted the said Premises for use, occupation and enjoyment of the Licensee along with family members for residential use only under LEAVE AND LICENCE AGREEMENT and strictly in accordance with the terms and conditions herein incorporated and mutually agreed between the parties hereto. 
   
   <b>NOW IT IS HEREBY MUTUALLY AGREED BY AND BETWEEN THE PARTIES HERETO AS FOLLOWS: -</b>
   
   1.	<b>PERIOD: This agreement shall be for a temporary fixed period of <span id="noOfMonths">ELEVEN</span> MONTHS only commencing/deemed to have commenced from <span id="startDate">___</span> day of July 2020 to ending on <span id="endDate">___</span>day of June 2021 (Both days inclusive).
   
   2.	<b>CHARGES: The Licensee will pay to the Licensor a sum of Rs. <span id="rent"> 10,000 </span>/-(Rupees Ten Thousand only) each and every month as and by way of licence fees and/or monthly charges and/or compensation and it shall be paid within first week of next agreement month. In the event of successive two defaults the Licensor will have right to cancel this agreement or impose reasonable penalty for default. 
   
   3.	<b>SECURITY DEPOSIT: The Licensee has paid to the Licensor and the Licensor has received from the Licensee on or before the date of this agreement in all a sum of Rs. <span id="deposit">50,000</span>/- (Rupees Fifty Thousand only) as and by way of Security Deposit amount, which amount shall be INTEREST FREE deposit amount refundable by the Licensor to the Licensee on termination of this agreement but subject to adjustment of legitimate dues and unpaid charges if any. The receipt whereof the Licensor doth hereby admit and acknowledge separately. 
   
   4.	<b>THE OBLIGATIONS & DUTIES OF LICENSOR- The Licensor shall:-
   
   (i)	Clear of all the outstanding dues, taxes and liability if any existing at the time of commencement of this agreement in respect of the said premises or reimburse to the Licensee if the Licensee required to clear of the same. 
   
   (ii)	Pay punctually monthly rent/maintenance/outgoings in respect of the said premises to the landlord/builder/society of the building and settle all legal objections or actions if any raised or initiated by the landlord/builder/society at the risk, costs and consequences of the Licensor and fully protect and safeguard the interest of the Licensee under this agreement.
   
   (iii)	Repay or refund the Security Deposit amount and/or settle the account of Licensee forthwith on termination of this agreement before or at the time the Licensee vacates the said premises, failing which the Licensor shall be liable to pay liquidated damage at the rate of 18% per annum or the Licensee shall not be liable to pay monthly charges for such delayed period caused by the Licensor. The Licensee shall not vacate the said premises unless and until the Licensor repays the Security Deposit amount.
   
   5.	      <b>THE OBLIGATIONS & DUTIES OF LICENSEE - The Licensee shall:- 
     
   a)	Pay “Electricity Charges” as per consumption of units shown in the electric meter, if any action is initiated by the Electric Department for tampering of electric meter or theft of electricity pertaining to this agreement period, then it shall be sole liability of the Licensee to pay amendment bills and for all risks, costs and consequences thereof and keep Licensor safe, harmless and indemnified.
   
   b)	Preserve the condition of the said premises along with all the walls colour, articles, electric appliances, gadgets and things attached to the said premises in reasonably good condition of human use and return in the same condition of entrustment at the time of execution of this agreement, natural wear and tear is excepted but in the event of loss or damage caused due to negligence or overt act of the of the Licensee or family members, then in that case the Licensee shall compensate or reimburse to the Licensor all such loss or damage.
   
   6.	    <b> GENERAL CONDITIONS:-
   
   A.	The Licensor personally or through authorized agent will have right without any hindrance or obstruction from the Licensee to take inspection of the said premises during day time after giving prior intimation to the Licensee. The Licensee shall fully cooperate the Licensor.
   
   B.	Both the parties are at liberty to revoke this agreement during this agreement period by giving at least ONE-MONTH prior notice in writing to the other side but the party exercising this option shall be liable for re-imbursement of brokerage of other side and other legitimate liquidated damages. That on efflux of its period this agreement shall automatically come to an end and no notice will be required.
   
   
   C.	That after expiry of this agreement if it is found that the said premises has been locked and the whereabouts of the Licensee is not known for a period of one month or more in spite of due and diligent searches made by the Licensor, then in that event the Licensee hereby authorizes the Licensor to open or break open the lock and enter upon the said premises and the Licensor shall not be liable for any criminal offence or damages caused to the Licensee. However the Licensor shall be liable to settle the account forthwith thereafter
   
   on demand made by the Licensee as and when the Licensee approaches the Licensor. 
   
               SCHEDULE OF THE PREMISES
       All piece and parcel of the residential premises being and bearing <span id="firstPartyAddress2">Flat No. 1002, 10th Floor, Al-Aziz Palace, 4, 6, 8/10 Dongri Cross Lane, Jail Road (South), Dongri, Mumbai: 400 009</span>, within the limits of “B” Ward Office of the Municipal Corporation for Greater Mumbai, bearing Cadastral Survey No. 1812 of Mandvi division, in the Registration District and Sub-District of Mumbai City.
   
   
            IN WITNESS WHEREOF the parties hereto have hereunto set and subscribed their respective hands to this writing on the day, month and year herein below mentioned.
   
   Place: MUMBAI 
   
   Date: <span id="startDate1">_____</span> day of July 2020
   
   SIGNED AND DELIVERED by the 		)
   Within named the Licensor			)
   <span id="firstPartyName1">MR.NISAR AMIR GHATTE</span>		)
   In the presence of ……….                   	)                      	SIGNATURE
   
   SIGNED AND DELIVERED by the 		)
   Within named the Licensee			)
   <span id="secondPartyName1">MR. SHADAB MOHAMMED RAFIQ KATE</span>)
   In the presence of ……..			)		  SIGNATURE
   
   
    
                       R E C E I P T
   Deposit<span id ="deposit1">Rs. 50,000</span>/-
   
   RECEIVED of and from the Licensee M<span id="secondPartyName2">R. SHADAB MOHAMMED RAFIQ KATE</span> in all a sum of Rs.  <span id ="deposit2">50,000</span>/-(Rupees Fifty Thousand only) as and by way of Security Deposit amount, which shall be interest free amount refundable on termination of this agreement but always subject to adjustment of legitimate dues if any, as mentioned in clause No. 3 of this agreement. The receipt whereof the Licensor MR. NISAR AMIR GHATTE do hereby admit and acknowledge separately. 
   
                              I   SAY RECEIVED 
   
   
   
   
   
                                                                                                     MR. NISAR AMIR GHATTE
                                   SIGNATURE
   WITNESSES:
   Sr. No. 		Name					Signatures
   
   
   1.	
   
   
   2.	
    
   *****************************
                                   B E T W E E N
                             
                       
      <span id="firstPartyName2"> MR. NISAR AMIR GHATTE </span>
   
                                                          …THE LICENSOR
   
                                   A N D
   
   
   
   <span id="secondPartyName3">MR. SHADAB MOHAMMED RAFIQ KATE</span>
   
                   …THE LICENSEE
   
   
   
   
   
   
   
   
   
   
   
   
       ---------------------------------------------
                                    LEAVE    AND    LICENCE
                                 AGREEMENT
                           --------------------------------------------
                               This <span id="startDate2">  _____ </span>
   
   
   
   
   
   
   
   
   
   
   
                                                    DRAFTED/SCRIBE BY:
   
                   N.	A.   G H A T T E
                   B. Com. LL. M.
                           Advocate High Court
                   Office No. 2, Surmawala Bldg.,		2/18 Imamwada Rd. & Jail Rd (W),
                   Behind Children Home, Mumbai-9
                   (Ph: 23700050-23717441)
                   (No execution responsibility)
                   (L&L-RD-5)		                         	******************************
       </pre>
   </span>
   <script>

  function printDiv() {
 
                <?php  $firstPartyName=$row['firstPartyName']; ?>
                <?php  $firstPartyAddress=$row['firstPartyAddress']; ?>
                <?php  $secondPartyName= $row['secondPartyName']; ?>
                <?php  $secondPartyAddress =$row['secondPartyAddress']; ?>
                <?php  $noOfMonths =$row['noOfMonths']; ?>
                <?php  $startDate =$row['startDate']; ?>
                <?php  $endDate =$row['endDate']; ?>
                <?php  $rent=$row['rent']; ?>
                <?php  $rentxmonths =$row['rentxmonths']; ?>
                <?php  $deposit =$row['deposit']; ?>
                <?php  $total =$row['total']; ?>


               var firstPartyName = "<?php echo $firstPartyName ?>";
               var firstPartyAddress = "<?php echo $firstPartyAddress ?>";
               var secondPartyName = "<?php echo $secondPartyName ?>";
               var secondPartyAddress = "<?php echo $secondPartyAddress ?>";
               var noOfMonths = "<?php echo $noOfMonths ?>";
               var startDate = "<?php echo $startDate ?>";
               var rent = "<?php echo $rent ?>";
               var endDate = "<?php echo $endDate ?>";
               var rentxmonths = "<?php echo $rentxmonths ?>";
               var deposit = "<?php echo $deposit ?>";
               var total = "<?php echo $total ?>";
   
               document.getElementById("firstPartyName").innerHTML = firstPartyName;
               document.getElementById("firstPartyName1").innerHTML = firstPartyName;
               document.getElementById("firstPartyName2").innerHTML = firstPartyName;

               document.getElementById("firstPartyAddress").innerHTML = firstPartyAddress;
               document.getElementById("firstPartyAddress1").innerHTML = firstPartyAddress;
               document.getElementById("firstPartyAddress2").innerHTML = firstPartyAddress;

               document.getElementById("secondPartyName").innerHTML = secondPartyName;
               document.getElementById("secondPartyName1").innerHTML = secondPartyName;
               document.getElementById("secondPartyName2").innerHTML = secondPartyName;
               document.getElementById("secondPartyName3").innerHTML = secondPartyName;
               
               document.getElementById("secondPartyAddress").innerHTML = secondPartyAddress;
               //document.getElementById("secondPartyAddress1").innerHTML = secondPartyAddress;

               document.getElementById("noOfMonths").innerHTML = noOfMonths;

               document.getElementById("startDate").innerHTML = startDate;
               document.getElementById("startDate1").innerHTML = startDate;
               document.getElementById("startDate2").innerHTML = startDate;

               document.getElementById("endDate").innerHTML = endDate;
        
               document.getElementById("rent").innerHTML = rent;

               //document.getElementById("rentxmonths").innerHTML = rentxmonths;

               document.getElementById("deposit").innerHTML = deposit;
               document.getElementById("deposit1").innerHTML = deposit;
               document.getElementById("deposit2").innerHTML = deposit;

               //document.getElementById("total").innerHTML = total;

                //printFunction()
               
           }
           </script>
</body>
</html>