<?php
class Email extends CI_Controller {

    public function sendmail($id,$name,$loc) {
        $res=$this -> uri -> segment(2);
        echo $res;
     //  echo $id.' '.$name.' '.$loc;
    }

}
