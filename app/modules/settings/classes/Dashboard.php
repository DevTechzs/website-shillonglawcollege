<?php


namespace app\modules\settings\classes;


use app\database\DBController;

class Dashboard
{
    function getDepartmentalDashboard($data)
    {
        $param = [
            [":departmentID", $_SESSION["DepartmentID"]]
        ];
        $query = "call p_DepartmentalDashboard(:departmentID);";
        $res = DBController::sendData($query, $param);

        $query = "SELECT month(OrderDate) as MonthName,   SUM(CASE WHEN IFNULL(isOrderConfirmed,0)=1 THEN 1 ELSE 0 END) Confirmed   , SUM(CASE WHEN IFNULL(isOrderProcessed,0)=1 and   DATE_FORMAT(ProcessedDate ,'%Y-%m-01') = DATE_FORMAT(OrderDate,'%Y-%m-01')  THEN 1 ELSE 0 END) OrderProcessed , SUM(CASE WHEN IFNULL(isItemTaken,0)=1 and   DATE_FORMAT(TakenDate ,'%Y-%m-01') = DATE_FORMAT(OrderDate,'%Y-%m-01')  THEN 1 ELSE 0 END) Delivered  FROM `Ordering` where  DepartmentID = :departmentID and year(OrderDate)=year(CURRENT_DATE()) GROUP by month(OrderDate)";
        $stat = DBController::getDataSet($query, $param);
        return array("return_code" => true, "return_data" => $res,  "statistics" => $stat);
    }
    function getCashCounterDashboard($data)
    {
        $query = "call p_CashCounterDashboard();";
        $res = DBController::sendData($query);
        $query = "select day(PaidDate) as Day,sum(GrossAmount) as Amount  from Bills where IFNULL(isPaid,0)=1 and month(PaidDate)=month(CURRENT_DATE) 
          group by  day(PaidDate);";
        $month = DBController::getDataSet($query);

        return array("return_code" => true, "return_data" => $res, "daywise" => $month);
    }

    function getAdminDashboard($data)
    {
        $query = "call p_AdminDashboard();";
        $res = DBController::sendData($query);
        return array("return_code" => true, "return_data" => $res);
    }
}
