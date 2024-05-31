<?php

namespace app\modules\admin;

use app\core\Controller;
use \app\database\DBController;
use app\modules\admin\classes\Admin;


class AdminController implements Controller
{
    function Route($data)
    {
        $jsondata = $data["JSON"];
        switch ($data["Page_key"]) {
            case 'getURLLinkData':
                $result = (new Admin())->getURLLinkData($jsondata);
                break;
            case 'getModules':
                $result = (new Admin())->getModules($jsondata);
                break;
            case 'getURLCategories':
                $result = (new Admin())->getURLCategories($jsondata);
                break;
            case 'getURLLinks':
                $result = (new Admin())->getURLLinks($jsondata);
                break;
            case 'getNewsType':
                $result = (new Admin())->getNewsType($jsondata);
                break;
            case 'getNews':
                $result = (new Admin())->getNews($jsondata);
                break;
            case 'getNewsDetails':
                $result = (new Admin())->getNewsDetails($jsondata);
                break;
            case 'getAllNews':
                $result = (new Admin())->getAllNews($jsondata);
                break;
            case 'getImages':
                $result = (new Admin())->getImages();
                break;
            case 'addURLCategory':
                $result = (new Admin())->addURLCategory($jsondata);
                break;
            case 'editURLCategory':
                $result = (new Admin())->editURLCategory($jsondata);
                break;
            case 'addURLLink':
                $result = (new Admin())->addURLLink($jsondata);
                break;
            case 'addNews':
                $result = (new Admin())->addNews($jsondata);
                break;
            case 'addImages':
                $result = (new Admin())->addImages($jsondata);
                break;
            case 'getGalleriesForWebsite':
                $result = (new Admin())->getGalleriesForWebsite($jsondata);
                break;

            case 'deleteNews':
                $result = (new Admin())->deleteNews($jsondata);
                break;
            default:
                $result = array("return_code" => false, "return_data" => array("Page Key not found"));
                session_destroy();
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                break;
        }
        return $result;
    }

    public static function Views($page)
    {
        // TODO: Implement Views() method.
        $viewpath = "../app/modules/admin/views/";

        switch ($page[1]) {

            case 'url_category':
                load($viewpath . "url_category.php");
                break;
            case 'url_category_links':
                load($viewpath . "url_category_links.php");
                break;
            case 'news':
                load($viewpath . "news.php");
                break;
            case 'gallery':
                load($viewpath . "gallery.php");
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
