<?php
        include('../../assets/database/sql.php');
        $ID=secure($_GET['ID']);
        $sql="UPDATE promisory_note	SET approval='Approved' WHERE ID='$ID'";
        $mysqli->query($sql);     
        header("location:../lawyer_approval.php");
    
    ?>
</body>
</html>