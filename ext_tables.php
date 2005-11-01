<?php
/* $Id$ */
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

t3lib_extMgm::addService($_EXTKEY,  'staticUpload' /* sv type */,  'tx_dkdstaticuploadscp_sv1' /* sv key */,
		array(

			'title' => 'staticUpload: SCP',
			'description' => 'Uses SCP.',

			'subtype' => 'scp',

			'available' => TRUE,
			'priority' => 50,
			'quality' => 50,

			'os' => 'unix',
			'exec' => 'scp',

			'classFile' => t3lib_extMgm::extPath($_EXTKEY).'sv1/class.tx_dkdstaticuploadscp_sv1.php',
			'className' => 'tx_dkdstaticuploadscp_sv1',
		)
	);
?>