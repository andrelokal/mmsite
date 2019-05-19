<?php
 /****************************************************************
 * MAGAZINEMANAGER - Ponto de Venda Inteligente	 
 * Arquivo de configuracoes gerais
 *****************************************************************/
    error_reporting(E_ALL & ~E_NOTICE);        date_default_timezone_set('America/Sao_Paulo');

	try {		 				if (!@include_once("_db/params.ini.php"))		  throw new Exception("Erro ao inicializar o sistema!");		else{		  require_once "_db/params.ini.php";		}  	}catch(Exception $e){            die($e->getMessage());	}		$arrContextOptions=array(			"ssl"=>array(					"verify_peer"=>false,					"verify_peer_name"=>false,			),	);	
    spl_autoload_register(function ($class_name) {    	require_once $_SERVER["DOCUMENT_ROOT"]."/_includes/_classes/".$class_name.".class.php";    });