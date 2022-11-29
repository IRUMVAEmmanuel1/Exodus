<?php

include '../db/connection.php';
$id=$_GET['id'];

$query="DELETE fROM destination WHERE id=$id";
$delete= $conn->query($query);

if($delete){
    ?> 
	<script type="text/javascript">
		alert("The file' has been uploaded successfully.");
		location.href='destList.php';
	</script>
	
	<?php   
}

?>