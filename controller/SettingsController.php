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

        //$params['name'] = 'admin';
        $Querys = new Querys();

        $userValues = $Querys->AdminUserByUsername($params);

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

        /* $logins = array(
            0 => array(
                'user' => 'admin',
                'pass' => '6e2b131b4ca3b2ff6aa3cbb7bf6711582766c7cb',
                'rol' => '0'
            ),
            1 => array(
                'user' => 'newloe',
                'pass' => '6e2b131b4ca3b2ff6aa3cbb7bf6711582766c7cb',
                'rol' => '200'
            ),
            2 => array(
                'user' => 'other',
                'pass' => '6e2b131b4ca3b2ff6aa3cbb7bf6711582766c7cb',
                'rol' => '300'
            ),
            3 => array(
                'user' => 'camsua',
                'pass' => '6a8fea5f1fa661184f1d5d1956ee85978a1ebb06', // 6grFt56
                'rol' => '200'
            )
        );

        foreach($logins as $values){
            $users[] = $values['user'];
        }

        $key = array_search($params['user'], $users);

        if($key !== false && sha1($params['pass']) == $logins[$key]['pass']){
            $result['validate'] = true;
            $result['rol'] = $logins[$key]['rol'];
        }else{
            $result['validate'] = false;
        } */

        return $result;


    }

}