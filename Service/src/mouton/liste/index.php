<?php 

	include "../../accesseur/PenseeDAO.php";
	$penseeDAO = new PenseeDAO();
	//print_r($penseeDAO);
	$listePensees = $penseeDAO->listerPensees();
	//print_r($listePensees);
?><?php 

header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<pensees>
<?php
foreach($listePensees as $pensee)
{
	//print_r($pensee);
	?>
	<pensee>
	</pensee>
	<?php	
}
?>
</pensees>