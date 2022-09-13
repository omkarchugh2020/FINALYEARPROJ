<?php
        include('../../assets/database/sql.php');
        $ID=secure($_GET['ID']);
        $sql="UPDATE promisory_note	SET approval='Declined' WHERE ID='$ID'";
        $mysqli->query($sql);     
        header("location:../lawyer_approval.php");
    ?>
</body>
</html>