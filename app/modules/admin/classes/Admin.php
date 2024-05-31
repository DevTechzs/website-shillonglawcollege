<?php

namespace app\modules\admin\classes;

use \app\database\DBController;
use \app\database\Helper;

const IMAGE_HANDLERS = [
    IMAGETYPE_JPEG => [
        'load' => 'imagecreatefromjpeg',
        'save' => 'imagejpeg',
        'quality' => 100
    ],
    IMAGETYPE_PNG => [
        'load' => 'imagecreatefrompng',
        'save' => 'imagepng',
        'quality' => 0
    ],
    IMAGETYPE_GIF => [
        'load' => 'imagecreatefromgif',
        'save' => 'imagegif'
    ]
];

class Admin
{

    function getURLLinkData($data)
    {
        $query = "SELECT * FROM  `url_links` WHERE `URLCategoryID`=:URLCategoryID AND IFNULL(`isDeleted`,0)=0;";
        $prm = array(array(":URLCategoryID", $data["URLCategoryID"]));
        $res = DBController::getDataSet($query, $prm);
        return array("return_code" => true, "return_data" => $res);
    }
    function getModules($data)
    {
        $query = "SELECT * FROM  `settings_modules`;";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
    function getURLCategories($data)
    {
        $query = "SELECT * FROM  `settings_urlcategory` `sc` INNER JOIN  `settings_modules` `sm` ON `sc`.`ModuleID`=`sm`.`ModuleID` ORDER BY `sc`.`ModuleID` ASC;";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
    function getURLLinks($data)
    {
        $query = "SELECT * FROM  `url_links` `ul` 
                    INNER JOIN  `settings_urlcategory` `sc` ON `ul`.`URLCategoryID`=`sc`.`URLCategoryID`  
	                INNER JOIN  `settings_modules` `sm` ON `sc`.`ModuleID`=`sm`.`ModuleID` 
                    WHERE IFNULL(`ul`.`isDeleted`,0)=0 
                    ORDER BY `sc`.`ModuleID` ASC;";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
    function getNewsType($data)
    {
        $query = "SELECT * FROM  `settings_newstype`;";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
    function getNews($data)
    {
        $query = "SELECT * FROM  `news` `n` INNER JOIN  `settings_newstype` `t` ON `n`.`NewsTypeID`=`t`.`NewsTypeID`;";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }
    function getNewsDetails($data)
    {
        $query = "SELECT * FROM  `news_details` WHERE `NewsID`=:NewsID;";
        $prm = array(array(":NewsID", $data["NewsID"]));
        $res = DBController::getDataSet($query, $prm);
        return array("return_code" => true, "return_data" => $res);
    }
    function getAllNews($data)
    {
        $query1 = "SELECT *,CASE WHEN (DATEDIFF(CURDATE(), `n`.`StartDate`))<4 THEN '1' ELSE '0' END AS 'IsNew' FROM  `news` `n` INNER JOIN  `settings_newstype` `t` ON `n`.`NewsTypeID`=`t`.`NewsTypeID` WHERE CURDATE() BETWEEN `n`.`StartDate` AND `n`.`EndDate`;";
        $res1 = DBController::getDataSet($query1);

        $query2 = "SELECT * FROM  `news_details`;";
        $res2 = DBController::getDataSet($query2);

        $res['news'] = $res1;
        $res['news_details'] = $res2;

        return array("return_code" => true, "return_data" => $res);
    }
    function getImages()
    {
        $query = "SELECT 
    `g`.`GalleryID`, 
    `g`.`TypeID`, 
    `g`.`Title`,
    `g`.`DocumentURL_ID`, 
    (SELECT GROUP_CONCAT(`d`.`DocumentFilename`) 
     FROM `settings_alldocuments` `d` 
     WHERE `d`.`ReferenceID` = `g`.`GalleryID`
    ) AS 'DocumentFilename',
    MAX(`d`.`GalleryURL`) AS 'GalleryURL' -- Use an aggregate function for GalleryURL
FROM  
    `gallery` `g`
LEFT JOIN
    `settings_alldocuments` `d` ON `d`.`ReferenceID` = `g`.`GalleryID`
GROUP BY 
    `g`.`GalleryID`, 
    `g`.`TypeID`, 
    `g`.`Title`, 
    `g`.`DocumentURL_ID`";
        $res = DBController::getDataSet($query);
        return array("return_code" => true, "return_data" => $res);
    }

    function addURLCategory($data)
    {
        $q = "SELECT * FROM  `settings_urlcategory` WHERE `ModuleID`=:ModuleID AND `Category`=:Category;";
        $p = array(array(":ModuleID", $data["ModuleID"]), array(":Category", $data["Category"]));
        $r = DBController::getDataSet($q, $p);
        if (count($r) > 0) {
            return array("return_code" => false, "return_data" => "Data Already Exists");
        } else {
            $query = "INSERT INTO  `settings_urlcategory` (`ModuleID`, `Category`) VALUES (:ModuleID, :Category);";
            $param = [
                [":ModuleID", $data["ModuleID"]],
                [":Category", $data["Category"]]
            ];
            $res = DBController::ExecuteSQL($query, $param);
            if ($res)
                return array("return_code" => true, "return_data" => $res);
            else
                return array("return_code" => false, "return_data" => "Something went wrong..");
        }
    }
    function editURLCategory($data)
    {
        $q = "SELECT * FROM  `settings_urlcategory` WHERE `ModuleID`=:ModuleID AND `Category`=:Category;";
        $p = array(array(":ModuleID", $data["ModuleID"]), array(":Category", $data["Category"]));
        $r = DBController::getDataSet($q, $p);
        if (count($r) > 0) {
            return array("return_code" => false, "return_data" => "Data Already Exists");
        } else {
            $query = "UPDATE  `settings_urlcategory` SET `ModuleID`=:ModuleID, `Category`=:Category WHERE `URLCategoryID`=:URLCategoryID;";
            $param = [
                [":ModuleID", $data["ModuleID"]],
                [":Category", $data["Category"]],
                [":URLCategoryID", $data["URLCategoryID"]]
            ];
            $res = DBController::ExecuteSQL($query, $param);
            if ($res)
                return array("return_code" => true, "return_data" => $res);
            else
                return array("return_code" => false, "return_data" => "Something went wrong..");
        }
    }
    function addURLLink($data)
    {
        $date = explode("/", $data["Date"]);
        $date = $date[2] . "-" . $date[0] . "-" . $date[1];

        $q = "SELECT * FROM  `url_links` WHERE `URLCategoryID`=:URLCategoryID AND `Title`=:Title AND `Date`=:Dte;";
        $p = array(array(":URLCategoryID", $data["Category"]), array(":Title", $data["Title"]), array(":Dte", $date));
        $r = DBController::getDataSet($q, $p);
        if (count($r) > 0) {
            return array("return_code" => false, "return_data" => "Data Already Exists");
        } else {
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/ShillongLawCollege/app/data/documents/"))
                mkdir("../app/data/documents/", 0777, TRUE);
            ini_set('memory_limit', '-1');

            $ext = pathinfo($data["File"][0]['filename'], PATHINFO_EXTENSION);
            $filedata = file_get_contents($data["File"][0]['filedata']);
            do {
                $newfilename = $data["Category"] . "_" . Helper::generate_string(10) . "." . $ext;
            } while (file_exists("../app/data/documents/" . $newfilename));

            if (file_put_contents(("../app/data/documents/" . $newfilename), $filedata)) {
                $url = "file?type=documents&name=" . $newfilename;
                $query = "INSERT INTO  `url_links` (`URLCategoryID`, `Title`, `Date`, `URL`) VALUES (:URLCategoryID, :Title, :Dte, :URLLink);";
                $param = [
                    [":URLCategoryID", $data["Category"]],
                    [":Title", $data["Title"]],
                    [":Dte", $date],
                    [":URLLink", $url]
                ];
                $res = DBController::ExecuteSQL($query, $param);
                if ($res)
                    return array("return_code" => true, "return_data" => $res);
                else
                    return array("return_code" => false, "return_data" => "Something went wrong..");
            } else {
                return array("return_code" => false, "return_data" => "File not saved !!");
            }
        }
        return array("return_code" => false, "return_data" => "Something went wrong !!");
    }
    function addNews($data)
    {
        $sdate = explode("/", $data["SDate"]);
        $sdate = $sdate[2] . "-" . $sdate[0] . "-" . $sdate[1];
        $edate = explode("/", $data["EDate"]);
        $edate = $edate[2] . "-" . $edate[0] . "-" . $edate[1];

        $q = "SELECT * FROM  `news` WHERE `NewsTypeID`=:NewsTypeID AND `Title`=:Title AND `StartDate`=:SDate;";
        $p = array(array(":NewsTypeID", $data["Type"]), array(":Title", $data["Title"]), array(":SDate", $sdate));
        $r = DBController::getDataSet($q, $p);
        if (count($r) > 0) {
            return array("return_code" => false, "return_data" => "Data Already Exists");
        } else {
            $query = "INSERT INTO  `news` (`NewsTypeID`, `Title`, `StartDate`, `EndDate`) VALUES (:NewsTypeID, :Title, :SDate, :EDate);";
            $param = [
                [":NewsTypeID", $data["Type"]],
                [":Title", $data["Title"]],
                [":SDate", $sdate],
                [":EDate", $edate]
            ];
            $res = DBController::ExecuteSQL($query, $param);
            if ($res) {
                $q1 = "SELECT `NewsID` AS 'NewsID' FROM  `news` ORDER BY `NewsID` DESC LIMIT 1;";
                $r1 = DBController::getDataSet($q1);

                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/ShillongLawCollege/app/data/documents/"))
                    mkdir($_SERVER['DOCUMENT_ROOT'] . "/ShillongLawCollege/app/data/documents/", 0777, TRUE);
                ini_set('memory_limit', '-1');

                foreach ($data["File"] as $file) {
                    $ext = pathinfo($file['filename'], PATHINFO_EXTENSION);
                    $filedata = file_get_contents($file['filedata']);
                    do {
                        $newfilename = "n_" . $data["Type"] . "_" . Helper::generate_string(10) . "." . $ext;
                    } while (file_exists("../app/data/documents/" . $newfilename));

                    if (file_put_contents(("../app/data/documents/" . $newfilename), $filedata)) {
                        $url = "file?type=documents&name=" . $newfilename;
                        $query = "INSERT INTO  `news_details` (`NewsID`, `TypeID`, `Title`, `FileLink`) VALUES (:NewsID, :TypeID, :Title, :FileLink);";
                        $param = [
                            [":NewsID", $r1[0]["NewsID"]],
                            [":TypeID", "1"],
                            [":Title", $file['file_title']],
                            [":FileLink", $url]
                        ];
                        $res = DBController::ExecuteSQL($query, $param);
                        if (!$res)
                            return array("return_code" => false, "return_data" => "Something went wrong..");
                    } else {
                        return array("return_code" => false, "return_data" => "File not saved !!");
                    }
                }
                foreach ($data["Link"] as $link) {
                    $query = "INSERT INTO  `news_details` (`NewsID`, `TypeID`, `Title`, `FileLink`) VALUES (:NewsID, :TypeID, :Title, :FileLink);";
                    $param = [
                        [":NewsID", $r1[0]["NewsID"]],
                        [":TypeID", "2"],
                        [":Title", $link['link_title']],
                        [":FileLink", $link['link']]
                    ];
                    $res = DBController::ExecuteSQL($query, $param);
                    if (!$res)
                        return array("return_code" => false, "return_data" => "Something went wrong..");
                }
                return array("return_code" => true, "return_data" => $res);
            } else
                return array("return_code" => false, "return_data" => "Something went wrong..");
        }
        return array("return_code" => false, "return_data" => "Something went wrong !!");
    }
    function addImages($data)
    {
        $q = "SELECT * FROM `gallery` WHERE `TypeID` = :TypeID AND `Title` = :Title;";
        $p = array(
            array(":TypeID", $data["Type"]),
            array(":Title", $data["Title"])
        );
        $r = DBController::getDataSet($q, $p);
        if (count($r) > 0) {
            return array("return_code" => false, "return_data" => "Data Already Exists");
        } else {
            $query = "INSERT INTO `gallery` (`TypeID`, `Title`) VALUES (:TypeID, :Title);";
            $param = array(
                array(":TypeID", $data["Type"]),
                array(":Title", $data["Title"])
            );

            $res = DBController::ExecuteSQL($query, $param);
            if ($res) {
                $q1 = "SELECT `GalleryID` FROM `gallery` ORDER BY `GalleryID` DESC LIMIT 1;";
                $r1 = DBController::getDataSet($q1);


                // Handle image uploads
                if (isset($data["Image"]) && !empty($data["Image"])) {
                    $imagePath = "../app/data/documents/";
                    if (!file_exists($imagePath)) {
                        mkdir($imagePath, 0777, true);
                    }
                    ini_set('memory_limit', '-1');
                    foreach ($data["Image"] as $image) {
                        // Process image upload (same as PDF)
                        $ext = pathinfo($image['filename'], PATHINFO_EXTENSION);
                        $filedata = file_get_contents($image['imgdata']);
                        do {
                            $newfilename = "n_" . Helper::generate_string(10) . "." . $ext;
                        } while (file_exists($imagePath . $newfilename));

                        $fp = fopen($imagePath . $newfilename, "w+");
                        if (fwrite($fp, $filedata)) {
                            fclose($fp);
                            $url = "file?type=documents&name=" . $newfilename;
                            $query = "INSERT INTO `settings_alldocuments` (`ReferenceID`, `DocumentLink`, `DocumentPath`, `DocumentFilename`, `ThumbnailPath`, `ThumbnailFilename`, `OrgiginalFilename`) VALUES (:ReferenceID, :DocumentLink, :DocumentPath, :DocumentFilename, :ThumbnailPath, :ThumbnailFilename, :OrgiginalFilename);";
                            $param = array(
                                array(":ReferenceID", $r1[0]['GalleryID']),
                                array(":DocumentLink", $url),
                                array(":DocumentPath", $imagePath),
                                array(":DocumentFilename", $newfilename),
                                array(":ThumbnailPath", $imagePath),
                                array(":ThumbnailFilename", $newfilename),
                                array(":OrgiginalFilename", $image['filename'])
                            );
                            $res = DBController::ExecuteSQL($query, $param);
                            if ($res) {
                                $q1 = "SELECT `DocumentID` FROM `settings_alldocuments` ORDER BY `DocumentID` DESC LIMIT 1;";
                                $d1 = DBController::getDataSet($q1);
                                $u = "UPDATE `gallery` SET ImageID = :ImageID  WHERE GalleryID =:GalleryID";
                                $p = array(
                                    array(":ImageID", $d1[0]['DocumentID']),
                                    array(":GalleryID", $r1[0]['GalleryID'])
                                );
                                $res1 = DBController::ExecuteSQL($u, $p);
                                if (!$res1) {
                                    return array("return_code" => false, "return_data" => "Data Not  saved ");
                                }
                                // return array("return_code" => false, "return_data" => "Image not saved !!");
                            }
                        } else {
                            return array("return_code" => false, "return_data" => "Image not saved !!");
                        }
                    }
                }
                // Handle file uploads (PDF)
                if (isset($data["File"]) && !empty($data["File"])) {
                    $documentPath = "../app/data/documents/";
                    if (!file_exists($documentPath)) {
                        mkdir($documentPath, 0777, true);
                    }
                    ini_set('memory_limit', '-1');
                    foreach ($data["File"] as $file) {
                        // Process file upload
                        $ext = pathinfo($file['filename'], PATHINFO_EXTENSION);
                        $filedata = file_get_contents($file['filedata']);
                        do {
                            $newfilename = "n_" . Helper::generate_string(10) . "." . $ext;
                        } while (file_exists($documentPath . $newfilename));

                        $fp = fopen($documentPath . $newfilename, "w+");
                        if (fwrite($fp, $filedata)) {
                            fclose($fp);
                            $url = "file?type=documents&name=" . $newfilename;
                            $query = "INSERT INTO `settings_alldocuments` (`ReferenceID`, `DocumentLink`, `DocumentPath`, `DocumentFilename`, `ThumbnailPath`, `ThumbnailFilename`, `OrgiginalFilename`) VALUES (:ReferenceID, :DocumentLink, :DocumentPath, :DocumentFilename, :ThumbnailPath, :ThumbnailFilename, :OrgiginalFilename);";
                            $param = array(
                                array(":ReferenceID", $r1[0]['GalleryID']),
                                array(":DocumentLink", $url),
                                array(":DocumentPath", $documentPath),
                                array(":DocumentFilename", $newfilename),
                                array(":ThumbnailPath", $documentPath),
                                array(":ThumbnailFilename", $newfilename),
                                array(":OrgiginalFilename", $file['filename'])
                            );
                            $res = DBController::ExecuteSQL($query, $param);
                            if ($res) {
                                $q1 = "SELECT `DocumentID` FROM `settings_alldocuments` ORDER BY `DocumentID` DESC LIMIT 1;";
                                $d1 = DBController::getDataSet($q1);
                                $u = "UPDATE `gallery` SET DocumentURL_ID = :DocumentURL_ID  WHERE GalleryID =:GalleryID";
                                $p = array(
                                    array(":DocumentURL_ID", $d1[0]['DocumentID']),
                                    array(":GalleryID", $r1[0]['GalleryID'])
                                );
                                $res1 = DBController::ExecuteSQL($u, $p);
                                if (!$res1) {
                                    return array("return_code" => false, "return_data" => "Data   Not saved ");
                                }

                                // return array("return_code" => false, "return_data" => "File not saved !!");
                            }
                        } else {
                            return array("return_code" => false, "return_data" => "File not saved !!");
                        }
                    }
                }





                if (isset($data["URL"]) && !empty($data["URL"])) {
                    $query = "UPDATE `settings_alldocuments` SET GalleryURL=:GalleryURL WHERE ReferenceID=:ReferenceID";
                    $param = array(
                        array(":ReferenceID", $r1[0]['GalleryID']),
                        array(":GalleryURL", $data["URL"])
                    );
                    $res = DBController::ExecuteSQL($query, $param);
                    if (!$res) {
                        return array("return_code" => false, "return_data" => "File not saved !!");
                    }
                }

                return array("return_code" => true, "return_data" => "Data saved successfully");
            } else {
                return array("return_code" => false, "return_data" => "Something went wrong..");
            }
        }
    }



    static function createThumbnail($src, $dest, $targetWidth, $targetHeight = null)
    {
        $type = exif_imagetype($src);
        if (!$type || !IMAGE_HANDLERS[$type]) {
            return null;
        }
        $image = call_user_func(IMAGE_HANDLERS[$type]['load'], $src);

        if (!$image) {
            return null;
        }
        $width = imagesx($image);
        $height = imagesy($image);
        if ($targetHeight == null) {
            $ratio = $width / $height;
            if ($width > $height) {
                $targetHeight = floor($targetWidth / $ratio);
            } else {
                $targetHeight = $targetWidth;
                $targetWidth = floor($targetWidth * $ratio);
            }
        }
        $thumbnail = imagecreatetruecolor($targetWidth, $targetHeight);
        if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_PNG) {
            imagecolortransparent(
                $thumbnail,
                imagecolorallocate($thumbnail, 0, 0, 0)
            );
            if ($type == IMAGETYPE_PNG) {
                imagealphablending($thumbnail, false);
                imagesavealpha($thumbnail, true);
            }
        }
        imagecopyresampled(
            $thumbnail,
            $image,
            0,
            0,
            0,
            0,
            $targetWidth,
            $targetHeight,
            $width,
            $height
        );
        return call_user_func(
            IMAGE_HANDLERS[$type]['save'],
            $thumbnail,
            $dest,
            IMAGE_HANDLERS[$type]['quality']
        );
    }

    static function read_gps_location($file)
    {
        $info = exif_read_data($file);
        if (
            isset($info['GPSLatitude']) &&
            isset($info['GPSLongitude']) &&
            isset($info['GPSLatitudeRef']) &&
            isset($info['GPSLongitudeRef']) &&
            in_array($info['GPSLatitudeRef'], array('E', 'W', 'N', 'S')) &&
            in_array($info['GPSLongitudeRef'], array('E', 'W', 'N', 'S'))
        ) {
            $GPSLatitudeRef  = strtolower(trim($info['GPSLatitudeRef']));
            $GPSLongitudeRef = strtolower(trim($info['GPSLongitudeRef']));

            $lat_degrees_a = explode('/', $info['GPSLatitude'][0]);
            $lat_minutes_a = explode('/', $info['GPSLatitude'][1]);
            $lat_seconds_a = explode('/', $info['GPSLatitude'][2]);
            $lng_degrees_a = explode('/', $info['GPSLongitude'][0]);
            $lng_minutes_a = explode('/', $info['GPSLongitude'][1]);
            $lng_seconds_a = explode('/', $info['GPSLongitude'][2]);

            $lat_degrees = $lat_degrees_a[0] / $lat_degrees_a[1];
            $lat_minutes = $lat_minutes_a[0] / $lat_minutes_a[1];
            $lat_seconds = $lat_seconds_a[0] / $lat_seconds_a[1];
            $lng_degrees = $lng_degrees_a[0] / $lng_degrees_a[1];
            $lng_minutes = $lng_minutes_a[0] / $lng_minutes_a[1];
            $lng_seconds = $lng_seconds_a[0] / $lng_seconds_a[1];

            $lat = (float) $lat_degrees + ((($lat_minutes * 60) + ($lat_seconds)) / 3600);
            $lng = (float) $lng_degrees + ((($lng_minutes * 60) + ($lng_seconds)) / 3600);

            //If the latitude is South, make it negative. 
            //If the longitude is West, make it negative
            $GPSLatitudeRef  == 's' ? $lat *= -1 : '';
            $GPSLongitudeRef == 'w' ? $lng *= -1 : '';

            return array(
                'Latitude' => $lat,
                'Longitude' => $lng
            );
        } else {
            return array(
                'Latitude' => null,
                'Longitude' => null
            );
        }
    }

    static function SaveFile($document_type_id = 1, $all_files)
    {
        $ret = array();
        $doc_ids = array();

        if (!file_exists("../app/data/mycustomfolder/"))
            mkdir("../app/data/mycustomfolder/", 0777, TRUE);
        ini_set('memory_limit', '-1');

        foreach ($all_files as $file) {
            $ext = pathinfo($file['filename'], PATHINFO_EXTENSION);
            $filedata = file_get_contents($file['filedata']);
            do {
                $savedfilename = $document_type_id . "_" . Helper::generate_string(10);
                $savedfilename .= "." . $ext;
                $savePath = "/" . $savedfilename;
            } while (file_exists("../app/data/mycustomfolder/" . $savePath));

            if (file_put_contents(("../app/data/mycustomfolder/" . $savePath), $filedata)) {
                $dq = "INSERT INTO  `settings_alldocuments`
                        (
                        `DocumentTypeID`,
                        `DocumentPath`,
                        `DocumentFilename`,
                        `OrgiginalFilename`
                        )
                        VALUES
                        (
                        :DocumentTypeID,
                        :DocumentPath,
                        :DocumentFilename,
                        :OrgiginalFilename
                    );";
                $dp = [
                    [":DocumentTypeID", "1"],
                    [":DocumentPath", "aaa"],
                    [":DocumentFilename", "aaaa"],
                    [":OrgiginalFilename", "url.."]
                ];
                $dr = DBController::ExecuteSQL($dq, $dp);
                if ($dr)
                    return array("return_code" => true, "return_data" => $dr);
                else
                    return array("return_code" => false, "return_data" => "Something went wrong..");

                // $rdq=DBCON::runQuery($dq,$param);
                // if($rdq['status'])
                // {
                //     $ret['status'] = true;
                //     array_push($doc_ids, $rdq['lastinsertid']);
                //     $ret['DocumentIds'] = $doc_ids;
                // }
                // else
                // {
                //     $ret['status'] = false;
                //     $ret['adwd'] = $rdq;
                //     $ret['message'] = $rdq['result'];
                // }
            } else {
                $ret['status'] = false;
                $ret['message'] = "File could not be saved !!";
            }
        }
        return $ret;
    }

    function getGalleriesForWebsite($data) //added by dev on 29/05/2024
    {
        $param = array(
            [":TypeID", $data['TypeID']],

        );
        $query = "SELECT 
        g.TypeID,
        g.Title,
        g.DocumentURL_ID,
        GROUP_CONCAT(sa.DocumentLink SEPARATOR ',') AS DocumentPDFLinks,
        sa.GalleryURL 
    FROM 
        gallery g
    INNER JOIN 
        settings_alldocuments sa 
    ON 
        sa.ReferenceID = g.GalleryID WHERE g.TypeID=:TypeID 
    GROUP BY 
        g.TypeID, g.Title, g.DocumentURL_ID, g.ImageID, sa.GalleryURL;";
        $res = DBController::getDataSet($query, $param);
        if ($res) {
            return array("return_code" => true, "return_data" => $res);
        } else {
            return array("return_code" => false, "return_data" => "No Gallery Found");
        }
    }

    function deleteNews($data)
    {
        // Ensure NewsID is set to 0 if not provided
        $NewsID = $data['NewsID'] ?? 0;

        // Prepare the parameter for the SQL query
        $param = array(
            [":NewsID", $NewsID],
        );

        // Define the SQL query
        $query = "DELETE FROM news WHERE NewsID=:NewsID;";
        // Execute the query
        $res = DBController::ExecuteSQL($query, $param);

        // Return the result
        if ($res) {
            return array("return_code" => true, "return_data" => $res);
        } else {
            return array("return_code" => false, "return_data" => "No News Found");
        }
    }
}
