<?php
/*
* author: Brisan
* app: backQBC
*/

class Settings {

    public function & encryptTwofish(&$param){
        $param['text'] = '19790603/Ab';
        $param['key'] = SERVER_KEY;
        $td = mcrypt_module_open('twofish', '', 'ecb', '');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $key = substr($param['key'], 0, mcrypt_enc_get_key_size($td));
        mcrypt_generic_init($td, $key, $iv); 
        $encrypted_data = mcrypt_generic($td, $param['text']);
        $desencrypted_data = mdecrypt_generic($td, $encrypted_data); 
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td); 
        return $encrypted_data;

    }

    public function & decryptTwofish(&$param){
        $param['encrypted_data'] = '%$&%FGF#$W#DFERWER$$GG%#$TGR%$$$';
        $param['key'] = SERVER_KEY;
        $td = mcrypt_module_open('twofish', '', 'ecb', '');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $key = substr($param['key'], 0, mcrypt_enc_get_key_size($td));
        mcrypt_generic_init($td, $key, $iv); 
        $desencrypted_data = mdecrypt_generic($td, $param['encrypted_data']); 
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td); 
        return $desencrypted_data;
    }

    public function & loginRolValidate($params){
        $Querys = new Querys();
        $userValues = $Querys->AdminUserByUsername($params);

        if(is_array($userValues) && $userValues['status'] === false){
            $result['validate'] = false;
            $result['rol'] = false;
        }else{
            $passBd = $userValues->getPassword();
            $salt = explode(':', $passBd);
            $pass = $params['pass'];
            $passGen = hash('sha256',$salt[1]. $pass);
            if($salt[0] == $passGen){
                $result['validate'] = true;
                $paramsRoleId['id'] = $userValues->getUserId();
                $RoleQuery = $Querys->AdminRoleQueryByUserId($paramsRoleId);
                $result['rol'] = $RoleQuery->getParentId();
            }else{
                $result['validate'] = false;
                $result['rol'] = false;
            }
        }
        return $result;
    }

    public function mysqliConection($params){
        $result = false;
        $mysqli = new mysqli($params['server'], $params['user'], $params['password'], $params['database']);

        if($mysqli->connect_errno){
            $result = false;
            return $result;
        }else{
            $result = true;
            return $mysqli;
        }
    }

    // *** to mysqli conexion *** //
    public function processList($params){
        $result = false;
        if($params !== false){
            $queryProcces = $params->query("show processlist");
            $result['numberProcess'] = $queryProcces->num_rows;

            $key = 0; 
            while($row = $queryProcces->fetch_assoc()){
                $result[$key]  = array(
                    'Id' => $row['Id'],
                    'User' => $row['User'],
                    'Host' => $row['Host'],
                    'db'=> $row['db'],
                    'Command' => $row['Command'],
                    'Time' => $row['Time'],
                    'State' => $row['State'],
                    'Info' => $row['Info']
                    );
                $key++;
            }
            $queryProcces->close();
        }else{
            $result = $params;
        }
        return $result;
    }

    // *** to mysqli conexion *** //
    public function showMasterStatus($params){
        $result = false;
        if($params !== false){
            $queryMasterStatus = $params->query("show master status");
            $key = 0;
            while($row = $queryMasterStatus->fetch_assoc()){
                $result[$key] = array(
                    'File' => $row['File'], 
                    'Position' => $row['Position'],
                    'Binlog_Do_DB' => $row['Binlog_Do_DB'],
                    'Binlog_Ignore_DB' => $row['Binlog_Ignore_DB']
                    );
                $key++;
            }
            $queryMasterStatus->close();
        }else{
            $result = $params;
        }
        return $result;
    }

    // *** to mysqli conexion *** //
    public function showSlaveStatus($params){
        $result = false;
        if($params !== false){
            $querySlaveStatus = $params->query("show slave status");
            $key = 0;
            while($row = $querySlaveStatus->fetch_assoc()){
                $result[$key] = array(
                    'Master_Log_File' => $row['Master_Log_File'], 
                    'Slave_IO_Running' => $row['Slave_IO_Running'],
                    'Slave_SQL_Running' => $row['Slave_SQL_Running'],
                    'Last_Errno' => $row['Last_Errno']
                    );
                $key++;
            }
            $querySlaveStatus->close();
        }else{
            $result = $params;
        }
        return $result;
    }


    public function showTotalSell($params){
        setlocale(LC_MONETARY, 'es_CO');

        $paramsSlave  = array(
                'server' => SERVER_DB_QBC_SLAVE,
                'user' => USER_DB_QBC_SLAVE,
                'password' => PASS_DB_QBC_SLAVE,
                'database' => DB_QBC_SLAVE
                );

        $mysqliConectionSlave = $this->mysqliConection($paramsSlave);

        $result = false;
        //$params  = "2015-04-08";
        if($mysqliConectionSlave !== false){
            $query = "select (sum(fo.grand_total) - sum(oi.discount_amount)) as total " .
                "from sales_flat_order as fo join sales_flat_order_item as oi on fo.entity_id = oi.order_id and fo.status IN(".
                "'STATUS_PAID','STATUS_PAID_FOR_RETURN','STATUS_SCMP_PENDING_NOT_REDEEMED','STATUS_SCMP_PENDING_REDEEMED',".
                "'STATUS_SCMP_PENDING_IN_REDEMPTION','STATUS_SCMP_PENDING_SENT','STATUS_INVOICED_NOT_REDEEMED',".
                "'STATUS_INVOICED_IN_REDEMPTION','STATUS_INVOICED_REDEEMED','STATUS_SCMP_PENDING_SENT_IN_REDEMPTION') ".
                "and fo.increment_id and oi.product_type != 'bundle' and oi.product_type != 'configurable' and oi.product_type != 'multideal' ".
                "and date(fo.created_at) = '$params'";

                if ($resultQuery = $mysqliConectionSlave->query($query)) {
                    while ($row = $resultQuery->fetch_assoc()) {
                        $result = money_format('%(#10n', $row["total"]);
                    }
                    $resultQuery->free();
                }
        }

        $mysqliConectionSlave->close();

        return $result;
    }

    public function getIdPeticion(){
        $actualTime = strtotime('now');
        $md5 = md5($actualTime);
        $result = substr($md5, 0 ,24);
        return $result;
    }


}