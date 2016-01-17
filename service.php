<?php
require_once 'rest.php';

class service extends rest
{

    static $secret_key = '12345';
    public function __construct()
    {
        $this->cocokkankey();
    }
    private function cocokkankey(){
        if(!empty($_POST['secret_key'])){
            if($_POST['secret_key'] == self::$secret_key){
                $this->responses(self::$status_ok, 'sukses', array('nama' => 'Alfian'));
            }else{
                $this->responses(self::$status_not_authorized, 'gagal', 'secret key salah');
            }
        }else{
            $this->responses(self::$status_not_found, 'not found', 'harus parsing parameter secret_key');
        }
    }
}
$obj = new service;
