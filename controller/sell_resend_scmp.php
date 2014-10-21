<?php
/**
 * @author: brisan
 */

// require_once __DIR__.'/../abstract.php';
//require_once '/data01/www/quebuenacompradocs/qbc/shell/abstract.php';
require_once '../classes.php';
require_once '/data02/www/quebuenacompradocs/qa/qbc/shell/abstract.php';

class Qbc_Shell_Sell_Scmp extends Mage_Shell_Abstract
{
    var $params;
    protected $_argname = array();
    public function __construct() {
        parent::__construct();
        // Time limit to infinity
        set_time_limit(0);

    }
    
    public function varSell($params){
	$this->params = $params;
     // var_dump($params);
    }

    public function run()
    {
        $result = array();
        if(isset($this->params[1]) && isset($this->params[2])){
    	  Mage::helper('qbc_sci/sell')->execute(new Varien_Object(array('order_id' => $this->params[1])));
          $QbcSciSellQuery = QbcSciSellQuery::create()->findOneByOrderId($this->params[2]);
    	  $arrayResult = array(
            'status' => 'OK', 
            'message' => 'Se proceso el pedido: ' . $this->params[2] . ' con orden: ' . $this->params[1],
            'id' => $QbcSciSellQuery->getId(),
            'pedido' => $this->params[2],
            'peticion' => $QbcSciSellQuery->getPetitionId()
            );
    	  $result = json_encode($arrayResult);
    	}else{
    	  $arrayResult = array('status' => 'error', 'message' => 'No hay parametros');
    	  $result = json_encode($arrayResult);
    	}
        return $result;
    }
}

$shell = new Qbc_Shell_Sell_Scmp();
$shell->varSell($argv);
$result = $shell->run();
print $result;