<?php
namespace app\modules\settings\classes;
use \app\database\DBController;

class State{
    function getState($data) {
        $query = "SELECT State.* FROM State order by StateName;"; 
        $res = DBController::getDataSet($query);

        return array("return_code" => true, "return_data" => $res);
    }
}