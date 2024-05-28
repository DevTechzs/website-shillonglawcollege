<?php

namespace app\modules\filemanager;
use app\misc\VideoStream;

class FileController
{
    static function File()
    {
        $imagetypes = array("asdfe2esd","jpeg", "jpg", "png", "svg", "tiff");
                $documenttypes=array("asfasdfdd","doc","docx","pdf","html","xls","xlsx","txt"); 

        $path = "../app/data/";
        $filetype = strtolower($_GET['type']);
        switch ($_GET['type']) 
        {
            
            case 'documents':
                $file = $path . "documents/" . $_GET['name'];
                if (file_exists($file)) {
                    header('HTTP/1.0 200 OK');
                    header('Content-Type: ' . mime_content_type($file));
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($file));
                    readfile($file);
                    exit;
                } else {
                    include
                        header("HTTP/1.0 404 Not Found");
                }
                break;

            case 'alumni':
                $file = $path . $filetype."/" . $_GET['name'];
                if (file_exists($file)) {
                    header('HTTP/1.0 200 OK');
                    header('Content-Description: Document transfer');
                    $extension= pathinfo($file, PATHINFO_EXTENSION);
                    if( array_search($extension,$imagetypes)!=false && array_search($extension,$imagetypes)>=0){
                        header('Content-Type: image/' . strtolower(substr(strrchr(basename($file), "."), 1))); 
                    
                        }
                    else if(array_search($extension,$documenttypes)!=false && array_search($extension,$documenttypes)>=0){
                        if($extension== "xlsx"){  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); }
                        else if ($extension== "xls"){  header('Content-Type: application/vnd.ms-excel'); }
                        else header('Content-Type: application/' . strtolower(substr(strrchr(basename($file), "."), 1))); 
                        }
                    else
                    {
                         header('Content-Type: ' . mime_content_type($file)); 
                    }

                    // header('Content-Disposition: attachment; filename="' . preg_replace("/\.[^.]+$/", "", basename($file)) . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($file));
                    readfile($file);
                    exit;
                } else {
                    header("HTTP/1.0 404 Not Found");
                }
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
