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
}