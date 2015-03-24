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
            }
        }
        return $result;
    }

    public function & mysqliConection(&$params){
        $result = false;
        $mysqli = new mysqli($params['server'], $params['user'], $params['pass'], $params['bd']);

        if($mysqli->connect_errno){
            $result = false;
            return $result;
        }else{
            return $mysqli;
        }
    }

}