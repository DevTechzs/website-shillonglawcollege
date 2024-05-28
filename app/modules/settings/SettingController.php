<?php

namespace app\modules\settings;

use app\core\Controller;
use app\modules\settings\classes\Dashboard;
use app\modules\settings\classes\Department;
use app\modules\settings\classes\JobType;
use app\modules\settings\classes\Party;
use app\modules\settings\classes\Process;
use app\modules\settings\classes\State;
use app\modules\settings\classes\Unit;

class SettingController implements Controller
{
    /**
     * @param $data
     * @return array
     */
    function Route($data)
    {

        $jsondata = $data["JSON"];

        switch ($data["Page_key"]) {
           
            case 'getAdminDashboard':
                return (new Dashboard())->getAdminDashboard($jsondata);
           
            default:
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                session_destroy();
                return array("return_code" => false, "return_data" => array("Page Key not found"));
        }
    }

    static function Views($page)
    {

        $viewpath = "../app/modules/settings/views/";

        switch ($page[1]) {

            case 'process':
                load($viewpath . "process.php");
                break;
            case 'typeofjob':
                load($viewpath . "typeofjob.php");
                break;
            default:
                // session_destroy();
                include '404.php';
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                break;
        }
    }
}
