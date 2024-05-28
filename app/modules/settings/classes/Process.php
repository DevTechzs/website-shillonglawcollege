<?php

namespace app\modules\settings\classes;

use app\database\DBController;

class Process
{
    public function getProcesses($data)
    {
        if ($_SESSION['UserTypeID'] == 1) {
            $param = [];
            $query = "SELECT * FROM Process";
        } else {
            $param = [
                [":DepartmentID", $_SESSION["DepartmentID"]]
            ];
            $query = "SELECT * FROM Process WHERE DepartmentID=:DepartmentID";
        }

        $res = DBController::getDataSet($query, $param);

        return array("return_code" => true, "return_data" => $res);
    }

    public function addProcess($data)
    {
        if (isset($data["ProcessID"])) {
            $param = [
                [":ProcessName", $data["Name"]],
                [":DefaultValue", $data["DefaultValue"]],
                [":Rate", (isset($data["Rate"]) && $data["Rate"] != "") ? $data["Rate"] : NULL],
                [":IsService", $data["IsService"]],
                [":ProcessID", $data["ProcessID"]]
            ];
            $query = "UPDATE Process SET ProcessName=:ProcessName, DefaultValue=:DefaultValue, Rate=:Rate, IsService=:IsService WHERE ProcessID=:ProcessID";
        } else {
            $param = [
                [":ProcessName", $data["Name"]],
                [":DefaultValue", $data["DefaultValue"]],
                [":Rate", (isset($data["Rate"]) && $data["Rate"] != "") ? $data["Rate"] : NULL],
                [":IsService", $data["IsService"]],
                [":DepartmentID", $_SESSION["DepartmentID"]]
            ];
            $query = "INSERT INTO Process(ProcessName, DefaultValue, Rate, IsService, DepartmentID) VALUES (:ProcessName, :DefaultValue, :Rate, :IsService, :DepartmentID)";
        }
        $res = DBController::ExecuteSQL($query, $param);

        return array("return_code" => true, "return_data" => $res);
    }
}
