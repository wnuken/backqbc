<?php
/*
* author: Brisan
* app: backQBC
*/

class Settings {
	public function & logintwofish(&$param){

		$text = '19790603/Ab';
		$key = '171d02c12592f4967ef5a4dd1522e69b';

		$td = mcrypt_module_open('twofish', '', 'ecb', '');

		$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		$key = substr($param['key'], 0, mcrypt_enc_get_key_size($td));
		mcrypt_generic_init($td, $key, $iv); 

		$encrypted_data = mcrypt_generic($td, $param['text']);

		$desencrypted_data = mdecrypt_generic($td, $encrypted_data); 

		mcrypt_generic_deinit($td);
		mcrypt_module_close($td); 

		print $encrypted_data;
		print "\n";
		print $desencrypted_data;
	}
}