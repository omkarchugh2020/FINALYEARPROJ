<?php
        include('../../assets/database/sql.php');
        $ID=secure($_GET['ID']);
        $sql="UPDATE leave_and_license_agreement SET approval='Approved' WHERE ID='$ID'";
        $mysqli->query($sql);     
        header("location:../lawyer_approval.php");

    ?>
</body>
</html>