<?php


namespace App\Controller\Service;


class HelperUtility
{
    public $status;

    public function prepararStatus($code, $msg, $data = array())
    {
        $this->status = array(
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        );
    }


    //format date
    public function is_Date($str){

        $str = str_replace('/', '-', $str);
        $stamp = strtotime($str);
        if (is_numeric($stamp)){

            $month = date( 'm', $stamp );
            $day   = date( 'd', $stamp );
            $year  = date( 'Y', $stamp );

            if(checkdate($month, $day, $year)){
                return $year. '-'.$month.'-'.$day;
            }

        }
        return false;
    }
}