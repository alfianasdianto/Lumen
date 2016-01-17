<?php

class rest
{
    static $status_ok = 200;
    static $status_not_authorized = 401;
    static $status_not_found = 404;

    // function responses($code, $status, $data=array()){
    //     $arr = array();
    //     $arr['code'] = $code;
    //     $arr['status'] = $status;
    //     $arr['data'] = $data;
    //     header('Content-type:application/json');
    //     echo json_encode($arr);

    // }

    public function responses($code, $status, $data=array()){
        $arr = array();
        $arr['code'] = $code;
        $arr['status'] = $status;
        $arr['data'] = $data;
        header('Content-type:application/json');
        echo json_encode($arr);

    }
}

/**
*
*/
