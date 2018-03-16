<?php  
if ( count( get_included_files() ) == 1) die( '--access denied--' );

define('___MATRICULE___','HE201286');

if(stripos($_SERVER['PHP_SELF'],___MATRICULE___)==FALSE) {
	trigger_error("TENTATIVE DE FRAUDE de {$_SERVER['PHP_SELF']} chez ".___MATRICULE___, E_USER_ERROR);
	exit;
} 
else{
	$__INFOS__ = array(   'matricule'=> ___MATRICULE___
					,'host' => 'localhost'
					,'user' => 'VOSS'
					,'pswd' => 'Nathan5xM5'
					,'dbName' => '1718he201286'
					,'nom' => 'VOSS'
					,'prenom' => 'Nathan'  
					,'classe' => '2TL2'  
					);
}
