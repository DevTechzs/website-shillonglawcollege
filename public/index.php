<?php
ob_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
//error_reporting(E_ALL);
session_start();
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin:  https://shillonglawcollege.in:443');

header("Accept: text/html; charset=UTF-8");
header("Content-type: text/html; charset=UTF-8");

header('Cache-Control: max-age=86400');
header('HTTP/2 200 Success');
header("Status: 200");
header("Server: MAC_OS_X");
header("X-Powered-By: Python");
header("Developer: Iewduh Techz Private Limited");
//date_default_timezone_set('Asia/Kolkata');

// set to the user defined error handler
$old_error_handler = set_error_handler("myErrorHandler");

$_SESSION['root'] = $_SERVER['DOCUMENT_ROOT'] . '/';
$_SESSION['header'] = '../app/views/website/inc/header.php'; //$_SERVER['DOCUMENT_ROOT'].
$_SESSION['footer'] = '../app/views/website/inc/footer.php'; //$_SERVER['DOCUMENT_ROOT'].
$_SESSION['login_assets'] = $_SERVER['DOCUMENT_ROOT'] . '/assets/login';

if (isset($_SERVER["HTTP_COOKIE"])) {
    header("HTTP_COOKIE: " . $_SERVER["HTTP_COOKIE"]);
}
if (isset($_SERVER["Cookie"])) {
    header("Cookie: " . $_SERVER["Cookie"]);
}

if (isset($_SESSION["UserTypeID"]) && $_SESSION["UserTypeID"] == 1) {
    define("VIEWPATH", "../app/views/admin");
} else {
    define("LOGINPATH", "../app/views");
    // define("VIEWPATH", "../app/views/website",true);
    define("VIEWPATH", "../app/views/website");
}

$data = json_decode(file_get_contents("php://input"), true);
parse_str($_SERVER["QUERY_STRING"], $query_array);

require_once("../vendor/autoload.php");

use app\modules\auth\AuthenticationController;
use app\modules\events\EventController;
use app\modules\filemanager\FileController;
use app\misc\MSC;
use app\misc\IPLogger;
use app\database\DBController;
use app\modules\committee\CommitteeController;
use app\modules\settings\SettingsController;

use app\modules\url\UrlController;
use app\modules\admin\AdminController;



if (!isset($data["JSON"])) {
    $data["JSON"] = "";
}
if (!isset($data["Page_key"])) {
    $data["Page_key"] = "";
}


// IPLogger::logIP($data);

if (isset($data["Module"]) && isset($data["Page_key"]) && isset($data["JSON"])) {

    header('HTTP/1.1 200 Success');
    header("Status: 200");

    $result = array("return_code" => false);

    // $msc = MSC::getMSC();

    // if (!(MSC::isValidMSC($data["MSC"]))) {
    //     $result = array("return_code" => false, "return_data" => array("Invalid Request"));

    //     header('HTTP/1.1 403 Forbidden');
    //     header("Status: 403");

    //     echo json_encode($result);
    //     exit();
    // }

    if (AuthenticationController::isValidSession($data)) {


        switch ($data["Module"]) {

            case "Settings":
                $result = (new SettingController())->Route($data);
                break;
            case "Url":
                $result = (new UrlController())->Route($data);
                break;
            case "Admin":
                $result = (new AdminController())->Route($data);
                break;

            default:
                $result = array("return_code" => false, "return_data" => array("Module key not found"));
                session_destroy();
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                break;
        }

        $result['Module'] = $data["Module"];
        $result['Page_key'] = $data["Page_key"];
    } else {
        switch ($data["Module"]) {
            case "Auth":
                $result = (new AuthenticationController())->Route($data);
                break;

            case "Admin":
                $result = (new AdminController())->Route($data);
                break;
            default:
                //  $result = (new AuthenticationController)->Route($data);
                break;
        }

        $result['Module'] = $data["Module"];
        $result['Page_key'] = $data["Page_key"];
    }

    DBController::CloseDB();

    echo json_encode($result);
    exit();
} else if (isset($query_array['path']) && AuthenticationController::isValidSession($data)) {
    // pages 
    $page = explode("-", $query_array["path"]);

    load(VIEWPATH . "/template.php");

    $template = ob_get_clean();
    # Replacement
    ob_start();


    switch ($page[0]) {

        case "":
        case "dashboard":
            load(VIEWPATH . "/dashboard.php");
            break;
        case "url":
            UrlController::Views($page);
            break;
        case "admin":
            AdminController::Views($page);
            break;
        case "file":
            FileController::File();
            break;

        case "cc_program_add":
            load(VIEWPATH . "/committee/add_program.php");
            break;

        case "logout":
            (new AuthenticationController())->Route($data);
            session_destroy();
            header('Location: login');
            echo "<script>window.location.href='login';</script>";
            ob_end_flush();
            exit;
            break;

        default:
            ob_end_flush();
            define("VIEWPATH", "../app/views/website");
            publicRequest($query_array);
            exit;
    }

    $replacement = ob_get_clean();
    $res = str_replace('{{content}}', $replacement, $template);
    echo $res;
} else if (AuthenticationController::isValidSession($data)) {

    header('Location: dashboard');
    ob_end_flush();
    /* Make sure that code below does not get executed when we redirect. */
    exit;
} else if (isset($query_array['path'])) {
    publicRequest($query_array);
} else {

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        header("Content-type: */*;");
        header('HTTP/1.1 404 Not Found'); //This may be put inside 404.php instead
        echo json_encode(array("ERROR" => 404));
    } else {
        header("Content-type: text/html;");
        header('Location: home');
        echo "<script>window.location.href='home';</script>";
        ob_end_flush();
        exit;
    }
} //Do not do any more work in this script.

function publicRequest($query_array)
{
    try {
        $link = pathinfo((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

        switch ($query_array['path']) {
            case 'login':
                load(LOGINPATH . "/login.php");
                break;
            case '':
            case 'home':
                load(VIEWPATH . "/index.php");
                break;
            case 'llb':
                load(VIEWPATH . "/home/admission/llb.php");
                break;
            case 'ballb':
                load(VIEWPATH . "/home/admission/ballb.php");
                break;
            case 'admission':
                load(VIEWPATH . "/home/admission.php");
                break;
            case 'library':
                load(VIEWPATH . "/home/campus/library.php");
                break;
            case 'computer-lab':
                load(VIEWPATH . "/home/campus/computer-lab.php");
                break;
            case 'moot-court':
                load(VIEWPATH . "/home/campus/moot-court.php");
                break;
            case 'legal-service-aid':
                load(VIEWPATH . "/home/campus/legal-service-aid.php");
                break;
            case 'common-room':
                load(VIEWPATH . "/home/campus/common-room.php");
                break;
            case 'faculties-chamber':
                load(VIEWPATH . "/home/campus/faculties-chamber.php");
                break;
            case 'ugc-career-council':
                load(VIEWPATH . "/home/campus/ugc-career-council.php");
                break;
            case 'nss':
                load(VIEWPATH . "/home/nss.php");
                break;

            case 'internship':
                load(VIEWPATH . "/home/internship.php");
                break;
            case 'principal-message':
                load(VIEWPATH . "/about/principal-message.php");
                break;
            case 'founders':
                load(VIEWPATH . "/about/founders.php");
                break;
            case 'history':
                load(VIEWPATH . "/about/history.php");
                break;
            case 'management':
                load(VIEWPATH . "/about/management.php");
                break;
            case 'college-profile':
                load(VIEWPATH . "/about/college-profile.php");
                break;
            case 'vision':
                load(VIEWPATH . "/about/vision.php");
                break;
            case 'anthemflagemblem':
                load(VIEWPATH . "/about/anthemflagemblem.php");
                break;
            case 'governing-body':
                load(VIEWPATH . "/administration/governing-body.php");
                break;
            case 'principals':
                load(VIEWPATH . "/administration/principals.php");
                break;
            case 'teachingstafflaw':
                load(VIEWPATH . "/administration/staff/teachingstafflaw.php");
                break;
            case 'teachingstaffnonlaw':
                load(VIEWPATH . "/administration/staff/teachingstaffnonlaw.php");
                break;
            case 'nonteachingstaff':
                load(VIEWPATH . "/administration/staff/nonteachingstaff.php");
                break;
            case 'publications':
                load(VIEWPATH . "/research/publications.php");
                break;
            case 'conferences':
                load(VIEWPATH . "/research/conferences.php");
                break;
            case 'journals':
                load(VIEWPATH . "/research/journals.php");
                break;
            case 'magazines':
                load(VIEWPATH . "/research/magazines.php");
                break;
            case 'iqac-emblem':
                load(VIEWPATH . "/iqac/emblem.php");
                break;
            case 'iqac-genesis':
                load(VIEWPATH . "/iqac/genesis.php");
                break;
            case 'iqac-committee':
                load(VIEWPATH . "/iqac/committee.php");
                break;
            case 'iqac-meeting':
                load(VIEWPATH . "/iqac/meeting.php");
                break;
            case 'iqac-report':
                load(VIEWPATH . "/iqac/report.php");
                break;
            case 'iqac-ssr':
                load(VIEWPATH . "/iqac/ssr.php");
                break;
            case 'iqac-aqar':
                load(VIEWPATH . "/iqac/aqar.php");
                break;
            case 'iqac-activities':
                load(VIEWPATH . "/iqac/activities.php");
                break;
            case 'iqac-contact':
                load(VIEWPATH . "/iqac/contact.php");
                break;
            case 'iqac-naacvisit2022':
                load(VIEWPATH . "/iqac/naacvisit2022.php");
                break;

            case 'academic-committee':
                load(VIEWPATH . "/committee_cell/academic-committee.php");
                break;
            case 'alumini-committee':
                load(VIEWPATH . "/committee_cell/alumini-committee.php");
                break;
            case 'anti-ragging-cell':
                load(VIEWPATH . "/committee_cell/anti-ragging-cell.php");
                break;
            case 'cultural-committee':
                load(VIEWPATH . "/committee_cell/cultural-committee.php");
                break;
            case 'environmental-committee':
                load(VIEWPATH . "/committee_cell/environmental-committee.php");
                break;
            case 'equal-opportunity-cell':
                load(VIEWPATH . "/committee_cell/equal-opportunity-cell.php");
                break;
            case 'greviance-redressal-cell':
                load(VIEWPATH . "/committee_cell/greviance-redressal-cell.php");
                break;
            case 'red-cross-committee':
                load(VIEWPATH . "/committee_cell/red-cross-committee.php");
                break;
            case 'research-publication-seminar-cell':
                load(VIEWPATH . "/committee_cell/research-publication-seminar-cell.php");
                break;
            case 'sexual-harassment-prevention-cell':
                load(VIEWPATH . "/committee_cell/sexual-harassment-prevention-cell.php");
                break;
            case 'sports-committee':
                load(VIEWPATH . "/committee_cell/sports-committee.php");
                break;
            case 'students-counselling-cell':
                load(VIEWPATH . "/committee_cell/students-counselling-cell.php");
                break;
            case 'women-cell':
                load(VIEWPATH . "/committee_cell/women-cell.php");
                break;
            case 'student-batchwise':
                load(VIEWPATH . "/student/batchwise.php");
                break;
            case 'student-results':
                load(VIEWPATH . "/student/result.php");
                break;
            case 'alumni-member':
                load(VIEWPATH . "/alumni/member.php");
                break;
            case 'alumni-advisory':
                load(VIEWPATH . "/alumni/advisory.php");
                break;
            case 'alumni-conclave':
                load(VIEWPATH . "/alumni/conclave.php");
                break;
            case 'alumni-testimonial':
                load(VIEWPATH . "/alumni/testimonial.php");
                break;
            case 'alumni-directory':
                load(VIEWPATH . "/alumni/directory.php");
                break;
            case 'alumni-gallery':
                load(VIEWPATH . "/alumni/gallery.php");
                break;
            case 'alumni-contact':
                load(VIEWPATH . "/alumni/contact.php");
                break;
            case 'legal-care-support-centre':
                load(VIEWPATH . "/legal-care-support-centre.php");
                break;
            case 'contact-us':
                load(VIEWPATH . "/contact-us.php");
                break;
            case 'student-bar-association':
                load(VIEWPATH . "/sba.php");
                break;
            case 'sba':
                load(VIEWPATH . "/sba.php");
                break;
            case 'mooc':
                load(VIEWPATH . "/mooc.php");
                break;

            case 'scholarship':
                load(VIEWPATH . "/scholarship.php");
                break;
            case 'faculty':
                load(VIEWPATH . "/faculty.php");
                break;
            case 'ncs':
                load(VIEWPATH . "/ncs.php");
                break;
            case 'nadd':
                load(VIEWPATH . "/nadd.php");
                break;
            case 'gallery-gallery':
                load(VIEWPATH . "/gallery/gallery.php");
                break;

            case 'gallery-details':
                load(VIEWPATH . "/gallery/details.php");
                break;


            case "file":
                FileController::File();
                break;
            case "test":
                load(VIEWPATH . "/test.php");
                break;
            default:
                header("Content-type: text/html;");
                header('HTTP/2 404 Not Found'); //This may be put inside 404.php instead
                include '404.php';
        }
    } catch (Exception $e) {
        include '../500.php';
        exit;
    }
}

function load($path)
{
    try {
        if (!@include_once($path)) // @ - to suppress warnings, 
            // you can also use error_reporting function for the same purpose which may be a better option
            throw new Exception($path . ' does not exist');
        // or 
        if (!file_exists($path))
            throw new Exception($path . ' does not exist');
        else
            require_once($path);
    } catch (Exception $e) {
        echo "Message : " . $e->getMessage();
        echo "Code : " . $e->getCode();
        include '404.php';
    }
}

// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler
        return false;
    }

    // $errstr may need to be escaped:
    $errstr = htmlspecialchars($errstr);

    $errormessage = "";

    switch ($errno) {
        case E_USER_ERROR:
            $errormessage .= "<b>My ERROR</b> [$errno] $errstr<br />\n";
            echo "  Fatal error on line $errline in file $errfile";
            echo "Aborting...<br />\n";
            DBController::logs($errormessage);
            exit(1);

        case E_USER_WARNING:
            $errormessage .=  "<b>My WARNING</b> [$errno] $errstr<br />\n";
            break;

        case E_USER_NOTICE:
            $errormessage .=  "<b>My NOTICE</b> [$errno] $errstr<br />\n";
            break;
        case E_ERROR:
            $errormessage .=  "<b>File missing</b> [$errno] $errstr<br />\n";
            break;

        default:
            $errormessage .=  "Unknown error type: [$errno] $errstr<br />\n";

            DBController::logs($errormessage);
            exit(1);
            break;
    }

    DBController::logs($errormessage);
    /* Don't execute PHP internal error handler */
    return true;
}
