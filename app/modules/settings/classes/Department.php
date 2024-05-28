<?php


namespace app\modules\settings\classes;


use app\database\DBController;

class Department
{
    function getDepartments($data) {
        if ($_SESSION["UserTypeID"]==2){
            $param=[
                [":DepartmentID",$_SESSION["DepartmentID"]]
            ];
            $query = "SELECT * FROM Department WHERE DepartmentID=:DepartmentID;";
        }else{
            $param=[];
            $query = "SELECT * FROM Department;";
        }

        $res = DBController::getDataSet($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

        function getDepartmentsWithoutCashCounter($data) { 
            $param=[];
            $query = "SELECT * FROM Department where DepartmentID<5;"; 
             $res = DBController::getDataSet($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

}