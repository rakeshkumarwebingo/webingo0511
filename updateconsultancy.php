<?php
include'dbconn.php';
$update="UPDATE followup SET consult_rate='".$_GET['option']."',
                             WHERE id='".$_GET['id']."'";
                             $data = mysqli_query($conn, $sql);
if($data==true)
{
    ?>
    <script>
        alert("Thanks for your feedback");
    </script>
    <?php
    include("index.php");
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			exit;
}
?>