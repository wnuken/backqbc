<?php
/**
 * @author: brisan
 */

 require_once './classes.php';
 require_once QBC_ROUTE;

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
    }

    public function run()
    {
        $result = array();
        if(isset($this->params[1]) && isset($this->params[2])){
            Mage::helper('qbc_sci/sell')->execute(new Varien_Object(array('order_id' => $this->params[1])));

            try{
                $QbcSciSellQuery = QbcSciSellQuery::create()->findByOrderId($this->params[2]);
                if(empty($QbcSciSellQuery)){
                    $arrayResult = array(
                        'status' => 'error',
                        'message' => 'El pedido '.$this->params[2].' no se encuenta'
                    );
                    $result = json_encode($arrayResult);
                    return $result;
                }
            }catch (Exception $e){
                $arrayResult = array(
                    'status' => 'error',
                    'message' => $this->exception .  $e->getMessage(). "\n"
                );
                $result = json_encode($arrayResult);
                return $result;
            }

            foreach($QbcSciSellQuery as $key => $QbcSciSell){
                $petitionId[] = $QbcSciSell->getPetitionId();
            }

            $arrayResult = array(
                'status' => 'OK', 
                'message' => 'Se proceso el pedido: ' . $this->params[2] . ' con orden: ' . $this->params[1],
                'pedido' => $this->params[2],
                'peticion' => $petitionId
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