<?php
        include('../../assets/database/sql.php');
        $ID=secure($_GET['ID']);
        $Reason= secure($_GET['Reason']);
     
        $sql="UPDATE leave_and_license_agreement  SET approval='Declined', Reason='".$Reason."'   WHERE ID='$ID'";
        
        $mysqli->query($sql);  

        // $sql = "UPDATE `alumnidata` SET `contact`=$contact,`dipcollege`='".$dipcollege."',`branch`='".$branch."',`dippassout`=$dippassout,`degrcollege`='".$degrcollege."',`companyworking`='".$companyworking."', `identitycard`= '".$folder."' WHERE `email`='".$email."'";

        header("location:../lawyer_approval.php");
    ?>
</body>
</html>