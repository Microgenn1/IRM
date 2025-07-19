<?php

$sql = "select * from Mas_Color";
$res = $this->db->query($sql);
foreach($res->result_array() as $rowk)
{
	$maincolor = $rowk['Color'];
	$secondarycolor = $rowk['DColor'];
}
?>
<style>
:root {
  --main-bg-color: <?php echo $maincolor ?>; 
  --secondary-bg-color: <?php echo $secondarycolor ?>;
}
</style>