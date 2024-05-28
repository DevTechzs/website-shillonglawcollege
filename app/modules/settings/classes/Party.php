<?php


namespace app\modules\settings\classes;


use app\database\DBController;

class Party
{

    function addParty($data) {
        $param=[
            [":PartyName",$data["PartyName"]],
            [":ContactNo",$data["ContactNo"]],
            [":GSTIN",$data["GSTIN"]],
            [":PurchasePlace",$data["PurchasePlace"]],
            [":Address",$data["Address"]]
        ];
        $query = "INSERT INTO Party(PartyName, ContactNo, Address, GSTIN,
        PurchasePlace) VALUES (:PartyName, :ContactNo, :Address, :GSTIN, :PurchasePlace);";

        $res = DBController::ExecuteSQL($query,$param);

        return array("return_code" => true, "return_data" => $res);
    }

    function getParty($data) {
        $query = "SELECT * FROM Party;";

        $res = DBController::getDataSet($query);

        return array("return_code" => true, "return_data" => $res);
    }
}