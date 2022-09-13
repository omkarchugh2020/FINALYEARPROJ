<?php
        include('../../assets/database/sql.php');
        $ID=secure($_GET['ID']);
        $Reason=secure($_GET['Reason']);

        $sql="UPDATE leave_and_license_agreement SET approval='Declined', Reason='$Reason'  WHERE ID='$ID'";
        $mysqli->query($sql);  

        
        header("location:../lawyer_approval.php");
    ?>
</body>
</html>