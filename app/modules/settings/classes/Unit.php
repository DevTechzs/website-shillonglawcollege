<?php
namespace app\modules\settings\classes;
use \app\database\DBController;

class Unit{
    function getUnits() {
        $query = "SELECT * FROM Settings_MeasurementUnit"; 
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
}