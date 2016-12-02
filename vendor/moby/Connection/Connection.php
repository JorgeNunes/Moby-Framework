<?php 

namespace Connection;

use \PDO;
use Exception\RenderException;
use Connection\Interfaces\InterfaceConnection;

/**
 * Class responsible for connetion with database
 * This class is extends for class Model and class Console/CreateModels
 */
class Connection implements InterfaceConnection
{
    /**
     * Function responsible for accomplish the connection with database
     * 
	 * @return object PDO
     */	
	public function connect()
	{
		$host		= $GLOBALS['HOST'];
		$user		= $GLOBALS['USER'];
		$pass		= $GLOBALS['PASS'];
		$charset	= $GLOBALS['CHARSET'];
		$database	= $GLOBALS['DATABASE'];
		$dns		= $GLOBALS['DNS'];
		
		switch ($dns) {
			case 'mysql':
				
				try {
				    $con = new PDO("$dns:host=$host;dbname=$database; charset=$charset", $user, $pass);
				    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
				
				break;
				
			case 'oracle':
				
				$tns = " (DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP) (HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA = (SID = ".$database.")))";
			
				try {
				    $con =  new PDO("oci:dbname=".$tns, $user, $pass);
				    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
				
				break;
				
			case 'sqlserver':
				
				try {
				    $con = new PDO( "sqlsrv:server=$host; Database=$database", $user, $pass);  
				    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
				
				break;
		}
		
		return isset($con) ? $con : '';
	}
	
	
    /**
     * Function reponsible for unset the connection with database
     * 
	 * @param  object  PDO
	 * @return bool
     */	
	public function disconnect($con)
	{
		$con = null;
		return true;
	}
}