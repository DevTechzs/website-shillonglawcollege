<?php


namespace app\modules\settings\classes;


use app\database\DBController;

class JobType
{
    function getJobTypes($data) {
        $param=[
            [":DepartmentID",$_SESSION["DepartmentID"]]
        ];
        $query = "SELECT * FROM JobType WHERE DepartmentID=:DepartmentID;";

        $res = DBController::getDataSet($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

    function getReadyMadeJobTypes($data) {
        $param=[
            [":DepartmentID",$_SESSION["DepartmentID"]]
        ];
        $query = "SELECT * FROM JobType WHERE isReadyMadeJob=1 AND DepartmentID=:DepartmentID;";

        $res = DBController::getDataSet($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

    public function addJobType($data)
    {
        if (isset($data["JobTypeID"])){
            $param=[
                [":JobTypeName",$data["Name"]],
                [":isReadyMadeJob",$data["IsReadyMade"]],
                [":Rate",isset($data["Rate"])?$data["Rate"]:NULL],
                [":JobTypeID",$data["JobTypeID"]]
            ];
            $query = "UPDATE JobType SET JobTypeName=:JobTypeName, isReadyMadeJob=:isReadyMadeJob, Rate=:Rate WHERE JobTypeID=:JobTypeID";

        }else{
            $param=[
                [":JobTypeName",$data["Name"]],
                [":isReadyMadeJob",$data["IsReadyMade"]],
                [":Rate",isset($data["Rate"])?$data["Rate"]:NULL],
                [":DepartmentID",$_SESSION["DepartmentID"]]
            ];
            $query = "INSERT INTO JobType(JobTypeName, isReadyMadeJob, Rate, DepartmentID) VALUES (:JobTypeName, :isReadyMadeJob, :Rate, :DepartmentID)";

        }
        $res = DBController::ExecuteSQL($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

}