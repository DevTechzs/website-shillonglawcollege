-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 12:13 PM
-- Server version: 8.0.20-0ubuntu0.20.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tz_ShillongLawCollege_Web`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_year_dates` ()  BEGIN 
    SET @t_current = STR_TO_DATE("02/21/2022", '%m/%d/%Y') ; 
    SET @t_end =  STR_TO_DATE("12/31/2022", '%m/%d/%Y'); 
    SET @day = 0;
    SET @group = 0;
    SET @isHoliday = 0;
    SET @HolidayDescription = '';
    
    /*DATE_ADD(NOW(), INTERVAL 1 YEAR); */
    WHILE(@t_current< @t_end) DO 
    
      IF Date_format(@t_current,"%w") IN (6,0)    THEN
        	SET @isHoliday = 1;
            SET @HolidayDescription =  Date_format( @t_current,"%a") ; 
        ELSE
      		SET @isHoliday = 0;
            SET @HolidayDescription = '';
            if @group=1 THEN
              	 SET @group=2;
           		 /*SET @day=if(@day<5,@day+1,1); */
              ELSE 
              	  SET @group=1;
          		  SET @day=if(@day<5,@day+1,1);
            END IF;
          
        END IF;
        
        INSERT INTO Academics_EventCalendar (CalendarDate,isHoliday,HolidayDescription,DayCode, GroupCode) 
        VALUES (@t_current,@isHoliday,@HolidayDescription,@day,@group); 
       
        SET @t_current = DATE_ADD(@t_current, INTERVAL 1 DAY); 


    END WHILE; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Dashboard` ()  BEGIN
DECLARE NoOfTeachers INT;
DECLARE NoOfStudents INT;
DECLARE NoOfAppUsers INT;
DECLARE NoOfNotices INT;
DECLARE NoOfCourses INT;
DECLARE NoOfCoursesJoined INT;
DECLARE NoOfActiveAssessment INT;
DECLARE NoOfClasses INT;
    SELECT COUNT(Staff.StaffID) INTO NoOfTeachers FROM Staff WHERE IFNULL(Staff.isRemoved,0)=0;
  SELECT COUNT(Academics_Info.AcademicID) INTO NoOfStudents FROM Academics_Info INNER JOIN Academics_Session ON Academics_Session.AcademicsSessionID=Academics_Info.SessionID AND Academics_Session.isCurrent=1 ;
  SELECT COUNT(Academics_Info.AcademicID) INTO NoOfAppUsers FROM Academics_Info INNER JOIN Academics_Session ON Academics_Session.AcademicsSessionID=Academics_Info.SessionID AND Academics_Session.isCurrent=1 INNER JOIN Users ON Users.StudentID=Academics_Info.StudentID ;
  SELECT Count(*) INTO NoOfNotices FROM SchoolNotice WHERE SchoolNotice.isDeleted=0 AND SchoolNotice.VisibleDateTime< NOW();
  SELECT Count(*) INTO NoOfCourses FROM eLearning_Course;
  SELECT COUNT(Academics_Info.AcademicID) INTO NoOfCoursesJoined FROM Academics_Info INNER JOIN Academics_Session ON Academics_Session.AcademicsSessionID=Academics_Info.SessionID AND Academics_Session.isCurrent=1 INNER JOIN Users ON Users.StudentID=Academics_Info.StudentID INNER JOIN Academics_Paper ON FIND_IN_SET(Academics_Paper.AcademicSubjectID,Academics_Info.AcademicSubjectsIDs) INNER JOIN eLearning_Course ON eLearning_Course.AcademicPaperID=Academics_Paper.AcademicsPaperID;
  SELECT Count(*) INTO NoOfActiveAssessment FROM IExaminationAllotment WHERE IExaminationAllotment.StartDateTime<NOW() AND IExaminationAllotment.EndDateTime>NOW();
  SELECT Count(*) INTO NoOfClasses FROM Academics_Class INNER JOIN Academics_ClassSection ON Academics_Class.ClassID=Academics_ClassSection.ClassID INNER JOIN Academics_Session ON Academics_Session.AcademicsSessionID=Academics_ClassSection.SessionID AND Academics_Session.isCurrent=1; 
 
SELECT NoOfTeachers, NoOfStudents, NoOfAppUsers, NoOfNotices, NoOfCourses, NoOfCoursesJoined, NoOfActiveAssessment, NoOfClasses;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Examination` (IN `UserID` INT, IN `ExaminationAllotmentID` INT, IN `ExaminationID` INT)  NO SQL
BEGIN 	
	DECLARE QUESTIONS TEXT; 
    DECLARE count_prim INT;
    DECLARE Duration INT;
    DECLARE AssesmentID INT Default 1;
     /*
		select count(ie.ExaminationID) INTO  count_prim from IExamination ie inner join IExaminationAllotment iea on iea.ExaminationID = ie.ExaminationID and find_in_set(UserID,iea.UserIDs)
		where iea.ExaminationAllotmentID in (select IAssessment.ExaminationAllotmentID from IAssessment where IAssessment.isFailed is NULL and IAssessment.ExaminationAllotmentID=iea.ExaminationAllotmentID and IAssessment.UserID=UserID);
	*/
    /* CHECKING IF THE ASSESSMENT IS INSERTED OR NOT */
     select count(IAssessment.AssessmentID) INTO  count_prim from IAssessment 
         inner join IExaminationAllotment on IExaminationAllotment.ExaminationAllotmentID=IAssessment.ExaminationAllotmentID 
      		   and find_in_set(UserID,IExaminationAllotment.UserIDs)  
				and IExaminationAllotment.ExaminationID= ExaminationID and (IAssessment.isFailed is null OR IAssessment.ScoredMarks is null); 
                
    
	if (count_prim = 0) then
		INSERT INTO IAssessment(ExaminationAllotmentID, UserID, ExamStartDateTime, ExamEndDateTime) 
        VALUES (ExaminationAllotmentID, UserID, NOW(), NOW() + INTERVAL Duration MINUTE);

		SELECT LAST_INSERT_ID() INTO AssesmentID;
		SET @rank=0;
		INSERT INTO IAssessmentDetails (RowNumber, AssessmentID, ExaminationDetailsID) SELECT @rank:=@rank+1 AS RowNumber,AssesmentID,temp.ExaminationDetailsID FROM (SELECT * FROM IExaminationDetails ied WHERE ied.ExaminationID=ExaminationID ORDER BY RAND()) AS temp;
	end if;
    
    SELECT IFNULL(JSON_OBJECT(
    "AssessmentID",ia.AssessmentID,
    "isEligible",ia.isFailed,
    "ExaminationID",ie.ExaminationID,
    "ExaminationName", ie.ExaminationName,
    "GraceTime", ie.GraceTime,
    "Instruction", ie.Instruction,
    "Duration", ie.Duration,
    "isMultipleAttempt", IF(ie.isMultipleAttempt, 1, 0),
    "isOneway", IF(ie.isOneway, 1, 0),
    "TotalQuestions", ie.TotalQuestions,
    "isNegativeMarking", IF(ie.isNegativeMarking, 1, 0),
    "isNegativeMarkingPercentage", IF(ie.isNegativeMarkingPercentage, 1, 0),
    "NegativeMarkingValue", ie.NegativeMarkingValue,
    "PassMarks", ie.PassMarks,
    "TotalMarks", ie.TotalMarks,
    "isApprovalRequied", IF(ie.isApprovalRequied, 1, 0),
    "ApprovalMessage", ie.ApprovalMessage,
    "EntryDateTime", ie.EntryDateTime,
    "StartDateTime", iea.StartDateTime,
    "EndDateTime", iea.EndDateTime,
    "ExamStartDateTime", ia.ExamStartDateTime,
    "ExamEndDateTime", ia.ExamEndDateTime,
    "Questions",(
        SELECT IFNULL(JSON_ARRAYAGG(JSON_OBJECT(
            "AssessmentDetailsID", iad.AssessmentDetailsID,
            "ExaminationDetailsID", ied.ExaminationDetailsID,
            "Question", ied.Question,
            "Options", ied.Options,
            "Marks", ied.Marks,
            "QuestionTypeID", ied.QuestionTypeID,
            "Randomize", IF(ied.Randomize, 1, 0),
            "AnswerKey", iad.AnswerKeySubmitted,
            "isReview", IF(iad.isReview, 1, 0)
        )),JSON_ARRAY()) FROM IExaminationDetails ied 
        INNER JOIN IAssessmentDetails iad ON iad.ExaminationDetailsID = ied.ExaminationDetailsID AND ia.AssessmentID=iad.AssessmentID
        WHERE ied.ExaminationID=ie.ExaminationID ORDER BY iad.RowNumber ASC
    )),JSON_ARRAY()) INTO QUESTIONS FROM IExamination ie 
INNER JOIN IExaminationAllotment iea ON ie.ExaminationID=iea.ExaminationID AND FIND_IN_SET(UserID,iea.UserIDs) AND ie.ExaminationID=ExaminationID AND iea.isActive=1 AND ie.isActive=1 
INNER JOIN IAssessment ia ON ia.ExaminationAllotmentID=iea.ExaminationAllotmentID AND ia.UserID=UserID AND ia.isFailed is NULL;
    SELECT QUESTIONS;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_ExaminationAssessment` (IN `AssessmentID` INT)  NO SQL
SELECT IFNULL(JSON_OBJECT(
    "UserID",ia.UserID,
    "Name",Users.Name,
    "AssessmentID",ia.AssessmentID,
    "ExaminationID",ie.ExaminationID,
    "ExaminationName", ie.ExaminationName,
    "GraceTime", ie.GraceTime,
    "Instruction", ie.Instruction,
    "Duration", ie.Duration,
    "isMultipleAttempt", IF(ie.isMultipleAttempt, 1, 0),
    "isOneway", IF(ie.isOneway, 1, 0),
    "TotalQuestions", ie.TotalQuestions,
    "isNegativeMarking", IF(ie.isNegativeMarking, 1, 0),
    "isNegativeMarkingPercentage", IF(ie.isNegativeMarkingPercentage, 1, 0),
    "NegativeMarkingValue", ie.NegativeMarkingValue,
    "PassMarks", ie.PassMarks,
    "TotalMarks", ie.TotalMarks,
    "isApprovalRequied", IF(ie.isApprovalRequied, 1, 0),
    "ApprovalMessage", ie.ApprovalMessage,
    "EntryDateTime", ie.EntryDateTime,
    "StartDateTime", iea.StartDateTime,
    "EndDateTime", iea.EndDateTime,
    "ExamStartDateTime", ia.ExamStartDateTime,
    "ExamEndDateTime", ia.ExamEndDateTime,
    "ScoredMarks", ia.ScoredMarks,
    "Questions",(
        SELECT IFNULL(JSON_ARRAYAGG(JSON_OBJECT(
            "AssessmentDetailsID", iad.AssessmentDetailsID,
            "ExaminationDetailsID", ied.ExaminationDetailsID,
            "Question", ied.Question,
            "QuestionTypeID", ied.QuestionTypeID,
            "Options", ied.Options,
            "Marks", ied.Marks,
            "AnswerKey", ied.AnswerKey,
            "AnswerKeySubmitted", iad.AnswerKeySubmitted
        )),JSON_ARRAY()) FROM IExaminationDetails ied 
        INNER JOIN IAssessmentDetails iad ON iad.ExaminationDetailsID = ied.ExaminationDetailsID AND ia.AssessmentID=iad.AssessmentID
        WHERE ied.ExaminationID=ie.ExaminationID ORDER BY iad.RowNumber ASC
    )),JSON_ARRAY()) AS QUESTIONS FROM IExamination ie 
INNER JOIN IExaminationAllotment iea ON ie.ExaminationID=iea.ExaminationID AND iea.isActive=1 AND ie.isActive=1 
INNER JOIN IAssessment ia ON ia.ExaminationAllotmentID=iea.ExaminationAllotmentID AND ia.AssessmentID=AssessmentID
INNER JOIN Users ON Users.UserID=ia.UserID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_GenerateCode` (IN `TableName` VARCHAR(50), IN `ColumnName` VARCHAR(50), IN `Prefix` VARCHAR(20), IN `CodeLength` INT)  NO SQL
BEGIN



SET @sql :=CONCAT('select IFNULL(CONCAT("',Prefix,'",LPAD((MAX(IFNULL(right(',ColumnName,',',CodeLength,' - LENGTH("',Prefix,'")),0)) +1 ), ',CodeLength ,'- LENGTH("',Prefix,'"),"0")),
 
CONCAT("',Prefix,'", LPAD("1", ',CodeLength,' - LENGTH("',Prefix,'") , "0")  )
) AS RESULTCODE  
from ', TableName,'  where ',ColumnName,' Like  "',Prefix,'%"',';');


#SELECT @sql;
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_MonthlyFilesDownloaded` ()  NO SQL
SELECT MONTH(AccessTime) AS Month,MONTHNAME(AccessTime) AS MonthName,COUNT(*) AS FileDownloaded FROM IPLogging WHERE URL LIKE "%/file?%" AND YEAR(AccessTime)=YEAR(NOW()) GROUP BY MONTHNAME(AccessTime)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_StudentCourseSyncData` (IN `UserID` INT)  NO SQL
BEGIN 
	DECLARE COURSES TEXT; 
    
    SELECT JSON_ARRAYAGG(JSON_OBJECT("CourseID",eLearning_Course.CourseID,
                                 "CourseNo", eLearning_Course.CourseNo,
                                 "CourseName", eLearning_Course.CourseName,
                                 "CourseDescription", eLearning_Course.CourseDescription,
                                 "DurationInDays", eLearning_Course.DurationInDays,
                                 "Thumbnail", eLearning_Course.Thumbnail,
                                 "CreatedDateTime", eLearning_Course.CreatedDateTime,
                                 "PaperName", Academics_Paper.PaperName,
                                 "Teacher", (
                                     SELECT IFNULL(
                                         JSON_ARRAYAGG(
                                             JSON_OBJECT(
                                                 "UserID",Users.UserID,
                                                 "Name",Users.Name
                                             )
                                         ),JSON_ARRAY()
                                     ) FROM  Users  WHERE Users.UserID=eLearning_Course.CreatedBy),
								 "Topic",(
                                    SELECT IFNULL(JSON_ARRAYAGG(JSON_OBJECT("TopicID",t.TopicID,
                                 			"TopicName", t.TopicName,
                                 			"TopicOrder", t.TopicOrder,
											"Resourse",(
                                    		SELECT IFNULL(JSON_ARRAYAGG(JSON_OBJECT("ResourceID", r.ResourceID,
                                 				"Filename", r.Filename,
                                 				"ResourseTypeID", r.ResourseTypeID,
                                 				"ResourseOrder", r.ResourseOrder,
                                 				"ResourseTypeName", eLearning_ResourceType.ResourseTypeName,
                                 				"ResourseName", r.ResourseName,
                                 				"CreatedDateTime", r.CreatedDateTime )),JSON_ARRAY()) FROM eLearning_Resource r INNER JOIN eLearning_ResourceType ON eLearning_ResourceType.ResourseTypeID=r.ResourseTypeID where 														r.TopicID=t.TopicID
                                			)
                                    )),JSON_ARRAY()) FROM eLearning_Topic t WHERE t.CourseID=eLearning_Course.CourseID 
                                  ))) INTO COURSES FROM eLearning_Course 
                                  INNER JOIN Academics_Paper ON Academics_Paper.AcademicsPaperID=eLearning_Course.AcademicPaperID 
                                  INNER JOIN Academics_Subjects ON Academics_Subjects.AcademicSubjectID=Academics_Paper.AcademicSubjectID
                                  inner join Academics_ClassSection on Academics_ClassSection.ClassID=Academics_Subjects.ClassID 
                                  INNER JOIN Academics_Info ON Academics_Info.ClassSectionID=Academics_ClassSection.ClassSectionID 
                                  INNER JOIN Users ON Users.StudentID=Academics_Info.StudentID AND Users.UserID=UserID;
    
    SELECT COURSES;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateHoliday` (IN `hdate` DATE, IN `Description` VARCHAR(200))  BEGIN 
    SET @group=1;
    SET @day=1;
 	SET @HolidayDescription = Description ;
    SET @t_current = hdate; 
	UPDATE Academics_EventCalendar  set isHoliday=1, HolidayDescription =  @HolidayDescription WHERE DATE_FORMAT(CalendarDate, '%Y/%m/%d')  =DATE_FORMAT( @t_current, '%Y/%m/%d') ; 
    
     SELECT DayCode into @day FROM Academics_EventCalendar  WHERE DATE_FORMAT(CalendarDate, '%Y/%m/%d')  =DATE_FORMAT( @t_current, '%Y/%m/%d') ; 
      SELECT GroupCode INTO  @group  FROM Academics_EventCalendar  WHERE DATE_FORMAT(CalendarDate, '%Y/%m/%d')  =DATE_FORMAT( @t_current, '%Y/%m/%d') ; 
    
    SET @t_current = DATE_ADD(@t_current, INTERVAL 1 DAY); 
    SET @t_end =  STR_TO_DATE("12/31/2022", '%m/%d/%Y'); 
    
    IF Date_format(@t_current,"%w") IN (6,0)    THEN
        	SET @isHoliday = 1;
            SET @HolidayDescription =  Date_format( @t_current,"%a") ; 
   END IF;
    
    
    /*DATE_ADD(NOW(), INTERVAL 1 YEAR); */
    WHILE(@t_current< @t_end) DO 
    
     
        
        UPDATE Academics_EventCalendar
        	 SET isHoliday =@isHoliday ,  HolidayDescription =  @HolidayDescription ,
             	DayCode= @day , GroupCode =@group wHERE DATE_FORMAT(CalendarDate, '%Y/%m/%d')  =DATE_FORMAT( @t_current, '%Y/%m/%d') ;    
        	 
        
        
        SET @t_current = DATE_ADD(@t_current, INTERVAL 1 DAY); 
        
         IF Date_format(@t_current,"%w") IN (6,0)    THEN
        	SET @isHoliday = 1;
            SET @HolidayDescription =  Date_format( @t_current,"%a") ; 
        ELSE
      		SET @isHoliday = 0;
            SET @HolidayDescription = '';
            if @group=1 THEN
              	 SET @group=2;
           		 /*SET @day=if(@day<5,@day+1,1); */
              ELSE 
              	  SET @group=1;
          		  SET @day=if(@day<5,@day+1,1);
            END IF;          
        END IF;
    END WHILE; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GalleryID` int NOT NULL,
  `TypeID` int NOT NULL COMMENT '1 for Workshop; 2 for Seminar; 3 for Conference; 4 for Extra-Curriculum Activities',
  `Title` varchar(250) NOT NULL,
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`GalleryID`, `TypeID`, `Title`, `AddedBy`, `AddedOn`) VALUES
(1, 4, 'College Week 2022', 1, '2022-07-25 23:10:03'),
(2, 1, 'College Week 2022', 1, '2022-07-25 23:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `LoginDetails`
--

CREATE TABLE `LoginDetails` (
  `LoginDetailsID` bigint NOT NULL,
  `UserID` int NOT NULL,
  `SessionKey` varchar(50) NOT NULL,
  `SessionExpiryDateTime` datetime NOT NULL,
  `IPAddress` varchar(20) NOT NULL,
  `LoginDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isSuccessfull` bit(1) NOT NULL DEFAULT b'0',
  `isActive` bit(1) NOT NULL DEFAULT b'0',
  `SessionID` tinyint DEFAULT NULL,
  `DeviceInformation` varchar(450) DEFAULT NULL,
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `LoginDetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempt`
--

CREATE TABLE `login_attempt` (
  `AttemptID` int NOT NULL,
  `IPAddress` varchar(45) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int NOT NULL,
  `NewsTypeID` int NOT NULL COMMENT '1 for Campus News; 2 for Upcoming Events; 3 for Announcements',
  `Title` varchar(1000) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1',
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_details`
--

CREATE TABLE `news_details` (
  `NewsDetailID` int NOT NULL,
  `NewsID` int NOT NULL COMMENT '1 for Campus News; 2 for Upcoming Events; 3 for Announcements',
  `TypeID` int NOT NULL COMMENT '1 for File; 2 for Link',
  `Title` varchar(100) NOT NULL,
  `FileLink` varchar(100) NOT NULL,
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `news_details`
--

INSERT INTO `news_details` (`NewsDetailID`, `NewsID`, `TypeID`, `Title`, `FileLink`, `AddedOn`) VALUES
(1, 1, 2, 'Library Timing', 'https://drive.google.com/file/d/1amRCOuzV4knGg_QnTNIdHH_CDAzWi5qz', '2022-11-10 19:36:23'),
(2, 2, 2, 'THIS IS FOR INFORMATION THAT THE ADMISSION FOR 3 YEAR LL.B IS CLOSED FOR THE ACADEMIC SESSION 22-23', '', '2022-11-10 19:44:39'),
(3, 3, 2, 'OFFICE ORDER: Entry /Exit College Car Pass', 'https://drive.google.com/file/d/1A9MZVO-uXGNRSn3SinrzIue2c0UILwAh/view?usp=share_link', '2022-11-10 19:46:39'),
(4, 4, 2, 'Click to download the list of Advisers, Officials and Member of the various Sub-Committees 2022-23', 'https://drive.google.com/file/d/16J3x9SGn40QTmKYweYtW5tsfWRnNNByo/view', '2022-11-10 19:57:25'),
(5, 5, 2, 'NAAC PEER TEAM VISIT CYCLE - 1  dated : 14th & 15th November,2022', 'https://drive.google.com/file/d/1dyuW_B-ek6IbyuGXJIBweGdNo-jG9Mgl/view?usp=share_link', '2022-11-15 14:18:17'),
(6, 6, 2, 'List of unsuccessful candidates for recruitment to the post of LDA/LDA-cum-Record Keeper', 'https://drive.google.com/file/d/1V8GUf3TQDFU55tucpfsxRicPoPRbFQjw/view?usp=share_link', '2022-11-17 15:10:44'),
(7, 7, 2, 'Result of the Personal Interview for the post of LDA/LDA-cum-Record Keeper dt: 26-10-2022', 'Result of the Personal Interview for the post of LDA/LDA-cum-Record Keeper dt: 26-10-2022', '2022-11-18 14:24:18'),
(8, 8, 2, 'Result of the Personal Interview for the post of LDA/LDA-cum-Record Keeper dt: 26-10-2022', 'https://drive.google.com/file/d/1S3OlPfebzDNw54lMhgKGLBIdUH_SF3xi/view?usp=share_link', '2022-11-24 12:45:53'),
(9, 9, 2, 'NIQ/NIT for supply/making of Benches & Desks. Last date : 13th January 2023', 'https://drive.google.com/file/d/1AuKwlTwi516ODEtkAseWFnLF-B29vq5L/view?usp=share_link', '2022-12-22 12:13:02'),
(10, 10, 2, 'NIQ/NIT for supply/making of Benches & Desks. Last date : 13th January 2023', 'https://drive.google.com/file/d/1AuKwlTwi516ODEtkAseWFnLF-B29vq5L/view?usp=share_link', '2022-12-22 12:20:02'),
(11, 11, 2, '3 YEAR LLB ADMISSION 2023 DT: 19TH APRIL 2023 ', 'https://drive.google.com/file/d/1ikQJdPpucx6oU0OaQL2r7Hz_nJPldK_S/view?usp=share_link', '2023-04-19 15:33:00'),
(12, 12, 2, '5 YEAR BALLB ADMISSION 2023 DT: 19TH APRIL 2023', 'https://drive.google.com/file/d/1GpVD5tlLam5binmLJ_Ipmf6gu4K8wnde/view?usp=share_link', '2023-04-19 15:35:10'),
(13, 13, 2, 'LATEST 5 YEAR BALLB ADMISSION 2023 DT: 27TH APRIL 2023', 'https://drive.google.com/file/d/1n7pZIq7WdjO9UVGHrvYlhz8JCni5YPqZ/view?usp=share_link', '2023-04-27 14:06:48'),
(14, 14, 2, 'LATEST 3 YEAR LLB ADMISSION 2023 DT: 27TH APRIL 2023', 'https://drive.google.com/file/d/1obNWLP3mnTt-008dpHeCIaM6EHhbxSfE/view?usp=share_link', '2023-04-27 14:07:49'),
(15, 15, 2, '5 YEAR BALLB ADMISSION 2023 UPDATES DT : 03-05-2023', 'https://drive.google.com/file/d/1kOkitY3zfsnRxXHMYYYBVBkRCmHVYMru/view?usp=share_link', '2023-05-18 12:29:29'),
(16, 16, 2, 'PREVIOUS SAMPLE QUESTION PAPER - BALLB ENTRANCE TEST ', 'https://drive.google.com/file/d/1dvZLmGzpePMRLCiFUmfFaZjpxyGpYOLm/view?usp=share_link', '2023-05-18 13:22:03'),
(17, 17, 2, 'NOTICE : ADMIT CARD & DATE OF ENTRANCE TEST 5 YR BALLB DT: 22-05-2023', 'https://drive.google.com/file/d/1nAd_lwLvtPkxiPHJQcysfZrszGTRyb_g/view?usp=share_link', '2023-05-22 13:14:39'),
(18, 18, 2, ' \"Notification dt 22-05-23 The results of the Personal Interview for the post of Asstt Prof(Law)', 'https://drive.google.com/file/d/1xIXNtFCsArcHiSJd7Iu8NEusIwPvUt4F/view?usp=sharing', '2023-06-05 14:09:25'),
(19, 19, 2, 'NOTICE- 3 YEAR  LLB ADMISSION 2023 CLOSED dt 6-6-23', 'https://drive.google.com/file/d/1ttKnaCqz43pzB6BxUqxKWW622vUCa8cO/view?usp=sharing', '2023-06-06 14:00:54'),
(20, 20, 2, 'COLLECTION OF ADMIT CARD FOR ENTRANCE - TEST 5 YEAR BALLB ON 14TH JUNE 2023  ', 'https://drive.google.com/file/d/15jQerbTbDvnap4n6FXdyE0zmzJDBeHTX/view?usp=sharing', '2023-06-12 12:18:55'),
(21, 21, 2, 'CLICK TO DOWNLOAD THE ENTRANCE RESULTS', 'https://drive.google.com/file/d/1tG-sxLwzIzDqFzlEyQKolgy5MNhuh4M0/view?usp=sharing', '2023-06-28 19:12:19'),
(22, 22, 2, 'VIEW UGC-GUIDELINES', 'https://drive.google.com/file/d/1nX2dJZFZ43Pwl8wwbQtK59reeC7woJCa/view?usp=drive_link', '2023-07-05 14:48:08'),
(23, 23, 2, 'CLICK TO VIEW WAITING-LIST ', 'https://drive.google.com/file/d/1AdWuk5Mo5PiqR0-VjVaffvwmR1uhCjOC/view?usp=sharing', '2023-07-10 13:04:45'),
(24, 24, 2, 'Notice Inviting Quotation dt 3rd Nov 2023 ', 'https://drive.google.com/file/d/15ye47UnsaB1sPcLCevAVBXbKebgpHmmX/view?usp=sharing', '2023-11-07 11:48:23'),
(25, 25, 2, 'Academic Calendar 2024 & Holiday List ', 'https://drive.google.com/file/d/1cLmiDzlc-GVVbQznpEi-ih9BNboOtiTK/view?usp=sharing', '2024-01-22 15:06:03'),
(26, 26, 2, 'NIQ/NIT for Hydraulic stools ', 'https://drive.google.com/file/d/1Ndm8rQ59KAJdPDT5wPOAP0pZIpN8Z1AU/view?usp=sharing', '2024-01-29 15:36:36'),
(27, 27, 2, 'NIQ/NIT for supply of CCTV cameras', 'https://drive.google.com/file/d/1wWHQau5X_LTZ3fx75JohbGHSl1VdOiz1/view?usp=drive_link', '2024-01-29 15:38:01'),
(28, 28, 2, 'NIQ/NIT for supply of computer with accessories ', 'https://drive.google.com/file/d/1Ko97iPtBgIuUsP91EvRmhpqocpJRwhGm/view?usp=sharing', '2024-01-29 15:39:11'),
(29, 29, 2, 'Notice dt 16-02-2023 on CUET', 'https://drive.google.com/file/d/1IDA68ztxCYhc7aLOhojDIoFQDHInONre/view?usp=drive_link', '2024-02-19 14:02:08'),
(30, 30, 2, 'Public - Notice dt 26th March,2024 - Extension of CUET registration ', 'https://drive.google.com/file/d/1i3fURk6zjl4HbTubnBejG7-WZZufWtbk/view?usp=drive_link', '2024-03-30 11:22:39'),
(31, 31, 2, 'Office Orders Dt 4th April,2024 Res Agenda Item No 7 : Faculty Empowerment Strategies ', 'https://drive.google.com/file/d/1PQTam3s_fczLaeqRk22BladmZjgdJlCp/view?usp=drive_link', '2024-04-09 11:56:57'),
(32, 32, 2, 'One Day Workshop on Research Paper Writing', 'https://drive.google.com/file/d/1h41X6wDAW2cJhMjmMXRtfcfyFiVLTjCS/view?usp=drivesdk', '2024-04-25 17:25:40'),
(33, 33, 2, 'ADMISSION NOTICE Dt : 14th May 2024 ', 'https://drive.google.com/file/d/1qMzNCpdJ9d3Z1oayxG9wJzSdKG-o3NKp/view?usp=sharing', '2024-05-14 13:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings_alldocuments`
--

CREATE TABLE `settings_alldocuments` (
  `DocumentID` int NOT NULL,
  `ReferenceID` int NOT NULL,
  `DocumentLink` varchar(145) NOT NULL,
  `DocumentPath` varchar(255) NOT NULL,
  `DocumentFilename` varchar(345) NOT NULL,
  `ThumbnailPath` varchar(255) DEFAULT NULL,
  `ThumbnailFilename` varchar(45) DEFAULT NULL,
  `OrgiginalFilename` varchar(250) DEFAULT NULL,
  `Latitude` varchar(255) DEFAULT NULL,
  `Longitude` varchar(255) DEFAULT NULL,
  `isDeleted` tinyint DEFAULT NULL,
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `settings_alldocuments`
--

INSERT INTO `settings_alldocuments` (`DocumentID`, `ReferenceID`, `DocumentLink`, `DocumentPath`, `DocumentFilename`, `ThumbnailPath`, `ThumbnailFilename`, `OrgiginalFilename`, `Latitude`, `Longitude`, `isDeleted`, `AddedBy`, `AddedOn`) VALUES
(1, 1, 'file?type=documents&name=g_4_08PwskVJBe.jpg', '/ShillongLawCollege/app/data/documents/', 'g_4_08PwskVJBe.jpg', '/ShillongLawCollege/app/data/documents/', 'g_4_08PwskVJBe_TN.jpg', 'J7ECy13.jpg', '25.570861805556', '91.890174861111', NULL, 1, '2022-07-25 23:10:04'),
(2, 1, 'file?type=documents&name=g_4_zedKw8RVaa.jpg', '/ShillongLawCollege/app/data/documents/', 'g_4_zedKw8RVaa.jpg', '/ShillongLawCollege/app/data/documents/', 'g_4_zedKw8RVaa_TN.jpg', 'NooSKJr.jpg', '25.570180888889', '91.889160138889', NULL, 1, '2022-07-25 23:10:05'),
(3, 1, 'file?type=documents&name=g_4_I4KoTgPtJ3.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_4_I4KoTgPtJ3.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_4_I4KoTgPtJ3_TN.jpeg', 'WhatsApp Image 2022-04-23 at 1.16.33 PM(1).jpeg', NULL, NULL, NULL, 1, '2022-07-25 23:10:05'),
(4, 1, 'file?type=documents&name=g_4_gRwxQeTSt5.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_4_gRwxQeTSt5.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_4_gRwxQeTSt5_TN.jpeg', 'WhatsApp Image 2022-04-23 at 1.16.33 PM.jpeg', NULL, NULL, NULL, 1, '2022-07-25 23:10:05'),
(5, 2, 'file?type=documents&name=g_1_ML5gWSirPR.jpg', '/ShillongLawCollege/app/data/documents/', 'g_1_ML5gWSirPR.jpg', '/ShillongLawCollege/app/data/documents/', 'g_1_ML5gWSirPR_TN.jpg', 'NooSKJr.jpg', '25.570180888889', '91.889160138889', NULL, 1, '2022-07-25 23:10:25'),
(6, 2, 'file?type=documents&name=g_1_oHejgODY1k.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_1_oHejgODY1k.jpeg', '/ShillongLawCollege/app/data/documents/', 'g_1_oHejgODY1k_TN.jpeg', 'WhatsApp Image 2022-04-23 at 1.16.35 PM.jpeg', NULL, NULL, NULL, 1, '2022-07-25 23:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings_modules`
--

CREATE TABLE `settings_modules` (
  `ModuleID` int NOT NULL,
  `Module` varchar(100) NOT NULL,
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `settings_modules`
--

INSERT INTO `settings_modules` (`ModuleID`, `Module`, `AddedBy`, `AddedOn`) VALUES
(1, 'Home', 1, '2022-07-24 11:21:43'),
(2, 'About', 1, '2022-07-24 11:21:43'),
(3, 'Administration', 1, '2022-07-24 11:21:43'),
(4, 'Research', 1, '2022-07-24 11:21:43'),
(5, 'IQAC', 1, '2022-07-24 11:21:43'),
(6, 'Committee/Cell', 1, '2022-07-24 11:21:43'),
(7, 'Student', 1, '2022-07-24 11:21:43'),
(8, 'Alumni', 1, '2022-07-24 11:21:43'),
(9, 'Legal Care & Support Centre', 1, '2022-07-24 11:21:43'),
(10, 'Scholarship', 1, '2022-11-09 16:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_newstype`
--

CREATE TABLE `settings_newstype` (
  `NewsTypeID` int NOT NULL,
  `NewsType` varchar(100) NOT NULL,
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `settings_newstype`
--

INSERT INTO `settings_newstype` (`NewsTypeID`, `NewsType`, `AddedBy`, `AddedOn`) VALUES
(1, 'Campus News', 1, '2022-07-24 17:00:49'),
(2, 'Upcoming Events', 1, '2022-07-24 17:00:49'),
(3, 'Announcements', 1, '2022-07-24 17:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `settings_urlcategory`
--

CREATE TABLE `settings_urlcategory` (
  `URLCategoryID` int NOT NULL,
  `ModuleID` int NOT NULL,
  `Category` varchar(250) NOT NULL,
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `settings_urlcategory`
--

INSERT INTO `settings_urlcategory` (`URLCategoryID`, `ModuleID`, `Category`, `AddedBy`, `AddedOn`) VALUES
(1, 6, 'Academic Committee - Programmes', 1, '2022-07-24 11:22:10'),
(2, 6, 'Alumini Committee - Programmes', 1, '2022-07-24 11:22:10'),
(3, 6, 'Anti-Raging Cell - Programmes', 1, '2022-07-24 11:22:10'),
(4, 6, 'Cultural Committee - Programmes', 1, '2022-07-24 11:22:10'),
(5, 6, 'Environmental Committee - Programmes', 1, '2022-07-24 11:22:10'),
(6, 6, 'Equal Opportunity Cell - Programmes', 1, '2022-07-24 11:22:10'),
(7, 6, 'Greviance Redressal Cell - Programmes', 1, '2022-07-24 11:22:10'),
(8, 6, 'Red Cross Committee - Programmes', 1, '2022-07-24 11:22:10'),
(9, 6, 'Research, Publication and Seminar Cell - Programmes', 1, '2022-07-24 11:22:10'),
(10, 6, 'Sexual Harassment and Prevention Cell - Programmes', 1, '2022-07-24 11:22:10'),
(11, 6, 'Sports Committee - Programmes', 1, '2022-07-24 11:22:10'),
(12, 6, 'Women Cell - Programmes', 1, '2022-07-24 11:22:10'),
(13, 7, 'Student Data - Batchwise - 3 Year', 1, '2022-07-24 11:22:10'),
(14, 7, 'Student Data - Batchwise - 5 Year', 1, '2022-07-24 11:22:10'),
(15, 7, 'Student Data - Results', 1, '2022-07-24 11:22:10'),
(16, 5, 'IQAC - Meetings & Proceedings', 1, '2022-07-24 11:22:10'),
(17, 5, 'IQAC - Annual Report', 1, '2022-07-24 11:22:10'),
(18, 5, 'IQAC - Activities', 1, '2022-07-24 11:22:10'),
(19, 4, 'Research - Publications', 1, '2022-07-24 11:22:10'),
(20, 4, 'Research - Conferences & Proceedings', 1, '2022-07-24 11:22:10'),
(21, 4, 'Research - Journals', 1, '2022-07-24 11:22:10'),
(22, 4, 'Research - Magazines', 1, '2022-07-24 11:22:10'),
(23, 8, 'Alumni - Conclave', 1, '2022-07-24 11:22:10'),
(24, 9, 'Legal Care & Support Centre - Programmes & Actiities', 1, '2022-07-24 11:22:10'),
(25, 1, 'NSS Programmes', 1, '2022-07-24 11:22:10'),
(26, 6, 'Students Counselling Cell - Programmes', 1, '2022-07-24 11:22:10'),
(27, 10, 'Scholarship-Certificates', 1, '2022-11-09 16:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `url_links`
--

CREATE TABLE `url_links` (
  `URLLinkID` int NOT NULL,
  `URLCategoryID` int NOT NULL,
  `Title` text NOT NULL,
  `Date` date DEFAULT NULL,
  `URL` varchar(450) NOT NULL,
  `isDeleted` bit(1) NOT NULL DEFAULT b'0',
  `AddedBy` int NOT NULL DEFAULT '1',
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `url_links`
--

INSERT INTO `url_links` (`URLLinkID`, `URLCategoryID`, `Title`, `Date`, `URL`, `isDeleted`, `AddedBy`, `AddedOn`) VALUES
(1, 13, '2021 Batch', '2021-01-01', 'file?type=documents&name=13_2021.pdf', b'0', 1, '2022-07-24 11:22:34'),
(2, 13, '2020 Batch', '2020-01-01', 'file?type=documents&name=13_2020.pdf', b'0', 1, '2022-07-24 11:22:34'),
(3, 13, '2019 Batch', '2019-01-01', 'file?type=documents&name=13_2019.pdf', b'0', 1, '2022-07-24 11:22:34'),
(4, 13, '2018 Batch', '2018-01-01', 'file?type=documents&name=13_2018.pdf', b'0', 1, '2022-07-24 11:22:34'),
(5, 13, '2017 Batch', '2017-01-01', 'file?type=documents&name=13_2017.pdf', b'0', 1, '2022-07-24 11:22:34'),
(6, 13, '2016 Batch', '2016-01-01', 'file?type=documents&name=13_2016.pdf', b'0', 1, '2022-07-24 11:22:34'),
(7, 13, '2014 Batch', '2014-01-01', 'file?type=documents&name=13_2014.pdf', b'1', 1, '2022-07-24 11:22:34'),
(8, 14, '2021 Batch', '2021-01-01', 'file?type=documents&name=14_2021.pdf', b'0', 1, '2022-07-24 11:22:34'),
(9, 14, '2020 Batch', '2020-01-01', 'file?type=documents&name=14_2020.pdf', b'0', 1, '2022-07-24 11:22:34'),
(10, 14, '2019 Batch', '2019-01-01', 'file?type=documents&name=14_2019.pdf', b'0', 1, '2022-07-24 11:22:34'),
(11, 15, 'L.L.B. 2018 Batch - 6th Semester Regular Results', '2018-01-01', 'file?type=documents&name=15_2018-6SemRegular.pdf', b'0', 1, '2022-07-24 11:22:34'),
(12, 15, 'L.L.B. 2017 Batch - 6th Semester Regular Results', '2017-01-01', 'file?type=documents&name=15_2017-6SemRegular.pdf', b'0', 1, '2022-07-24 11:22:34'),
(13, 15, 'L.L.B. 2016 Batch - 6th Semester Regular Results', '2016-01-01', 'file?type=documents&name=15_2016-6SemRegular.pdf', b'0', 1, '2022-07-24 11:22:34'),
(14, 15, 'L.L.B. 2015 Batch - 6th Semester Regular Results', '2015-01-01', 'file?type=documents&name=15_2015-6SemRegular.pdf', b'0', 1, '2022-07-24 11:22:34'),
(15, 15, 'L.L.B. 2014 Batch - 6th Semester Regular Results', '2014-01-01', 'file?type=documents&name=15_2014-6SemRegular.pdf', b'0', 1, '2022-07-24 11:22:34'),
(16, 16, 'Proceedings of the 1<sup>st</sup> meeting of the IQAC Committee (2020-22) of the Shillong Law College held on the 6<sup>th</sup> November 2021 (Saturday) at 11 A.M. in the College Meeting Room, Brook Haven, Dhankheti, Shillong-1.', '2021-11-06', 'file?type=documents&name=16_20211106.pdf', b'0', 1, '2022-07-24 11:22:34'),
(17, 16, 'Proceedings of the 2<sup>nd</sup> IQAC Committee Meeting (2020-22) of the Shillong Law College held on 27<sup>th</sup> November 2021 (Saturday) at 11 A.M in the College Meeting Room, Brook Haven, Dhankheti, Shillong-1.', '2021-11-27', 'file?type=documents&name=16_20211127.pdf', b'0', 1, '2022-07-24 11:22:34'),
(18, 17, '2021-2022', '2021-01-01', 'file?type=documents&name=17_2021-2022.pdf', b'0', 1, '2022-07-24 11:22:34'),
(19, 17, '2020-2021', '2020-01-01', 'file?type=documents&name=17_2020-2021.pdf', b'0', 1, '2022-07-24 11:22:34'),
(20, 17, '2019-2020', '2019-01-01', 'file?type=documents&name=17_2019-2020.pdf', b'0', 1, '2022-07-24 11:22:34'),
(21, 18, 'Faculty Development Programme 2021 &mdash; 1<sup>st</sup> - 7<sup>th</sup> November, 2O21', '2021-11-01', 'file?type=documents&name=18_20211101.pdf', b'0', 1, '2022-07-24 11:22:34'),
(22, 19, 'Publications of the faculty 2021', '2021-01-01', 'file?type=documents&name=19_2021.pdf', b'0', 1, '2022-07-24 11:22:34'),
(23, 19, 'Publications of the faculty 2020', '2020-01-01', 'file?type=documents&name=19_2020.pdf', b'0', 1, '2022-07-24 11:22:34'),
(24, 23, 'Alumni Conclave Meet 2022', '2022-01-01', 'file?type=documents&name=23_2022.pdf', b'0', 1, '2022-07-24 11:22:34'),
(25, 24, 'Activities/Nature of Services Provided during 2016', '2016-01-01', '', b'0', 1, '2022-07-24 11:22:34'),
(26, 24, 'Activities/Nature of Services Provided during 2015', '2015-01-01', '', b'0', 1, '2022-07-24 11:22:34'),
(27, 24, 'Activities/Nature of Services Provided during 2014', '2014-01-01', '', b'0', 1, '2022-07-24 11:22:34'),
(28, 24, 'Highlight of Programmes and activities since 2014', '2014-01-01', '', b'0', 1, '2022-07-24 11:22:34'),
(29, 25, 'Street Awareness Programme at Smit Market', '2019-03-17', '', b'0', 1, '2022-07-24 11:22:34'),
(30, 25, 'Health Camp', '2018-11-10', '', b'0', 1, '2022-07-24 11:22:34'),
(31, 25, 'Swatchhta Pakwada', '2018-08-10', '', b'0', 1, '2022-07-24 11:22:34'),
(32, 25, 'Special Camp', '2018-07-16', '', b'0', 1, '2022-07-24 11:22:34'),
(33, 25, 'The Shillong Law College NSS Unit adopted a village at Marbisu', '2018-06-29', '', b'0', 1, '2022-07-24 11:22:34'),
(34, 25, 'Celebration of International Women’s Day', '2018-03-08', '', b'0', 1, '2022-07-24 11:22:34'),
(35, 25, 'Legal Awareness Programme at Mawber, Smit', '2017-11-11', '', b'0', 1, '2022-07-24 11:22:34'),
(36, 20, 'Two Days Virtual International Conference on \"Emerging Environmental Issues and Challenges\" &mdash; (11<sup>th</sup>&ndash;12<sup>th</sup> February 2022)', '2022-11-02', 'file?type=documents&name=20_T4dNkPAwn3.pdf', b'0', 1, '2022-11-03 11:26:45'),
(37, 20, 'International Virtual Conference on \'Multidisciplinary Socio-Economic and Cultural Studies\' - (1<sup>st</sup>&ndash;3<sup>rd</sup> July 2021)', '2021-07-01', 'file?type=documents&name=20_wckvprgap7.pdf', b'0', 1, '2022-11-03 11:41:47'),
(38, 15, 'L.L.B. 2019 Batch - 6th Semester Regular Results', '2022-08-30', 'file?type=documents&name=15_pmYuoaM0wb.pdf', b'0', 1, '2022-11-03 11:51:50'),
(39, 13, '2022 Batch ', '2023-04-27', 'file?type=documents&name=13_7meAFWF80q.pdf', b'0', 1, '2023-04-27 14:13:46'),
(40, 14, '2022 Batch', '2023-04-27', 'file?type=documents&name=14_XYNx924Wck.pdf', b'0', 1, '2023-04-27 14:14:34'),
(41, 16, 'Proceedings of the 3rd IQAC Committee Meeting (2020-22) of The Shillong Law College held on 24th June, 2022 (friday) at 4:00pm in the College Meeting Room, Brook haven, Dhankheti, Shillong - 1 ', '2023-04-27', 'file?type=documents&name=16_dlAJ29ouj9.pdf', b'0', 1, '2023-04-27 14:20:45'),
(42, 16, 'Proceedings of the 4th IQAC Committee Meeting (2020-22) of The Shillong Law College held on 20th October, 2022 (Thrusday) at 4:00pm in the College Meeting Room, Brook haven, Dhankheti, Shillong - 1 ', '2023-04-27', 'file?type=documents&name=16_bCKzWtK924.pdf', b'0', 1, '2023-04-27 14:22:30'),
(43, 16, 'Proceedings of the 5th IQAC Committee Meeting (2020-22) of The Shillong Law College held on 10th December, 2022 (Saturday) at 3:00pm in the College Meeting Room, Brook haven, Dhankheti, Shillong - 1 ', '2023-04-27', 'file?type=documents&name=16_wmadvUBSgr.pdf', b'0', 1, '2023-04-27 14:25:36'),
(44, 3, 'Awareness Programme on Anti-Ragging Theme : Impact of Ragging on Mental Health ', '2023-10-13', 'file?type=documents&name=3_KaLCEytBsC.pdf', b'0', 1, '2023-10-20 12:52:22'),
(45, 25, 'Awareness Programme on Anti-Ragging  in collaboration with the NSS. Theme : Impact of Ragging on Mental Health ', '2023-10-13', 'file?type=documents&name=25_UoL07nUimd.pdf', b'0', 1, '2023-10-20 12:57:09'),
(46, 16, 'Constitution of the Sub-Committees under AQAR 2023', '2023-10-16', 'file?type=documents&name=16_cVc7sUWxGh.pdf', b'0', 1, '2023-10-20 13:41:29'),
(47, 16, 'Proceedings of the 1st Meeting of the IQAC Sub-Committee 2023 of The Shillong Law College held on the 9th October 2023 at 3 pm in the College Meeting Room, Brook Haven, Dhankheti, Shillong 793001', '2023-10-09', 'file?type=documents&name=16_a6Ikc5NqzG.pdf', b'0', 1, '2023-10-20 13:54:02'),
(48, 18, 'ACTIVITIES 2022-2023', '2023-12-05', 'file?type=documents&name=18_tnf0kMEMcm.pdf', b'0', 1, '2023-12-05 13:55:40'),
(49, 18, 'Capacity  development and skills enhancement ', '2023-12-11', 'file?type=documents&name=18_ENtzB2kAzU.pdf', b'0', 1, '2023-12-11 15:33:01'),
(50, 18, 'BEST PRACTICES - 2022-23 ', '2023-12-13', 'file?type=documents&name=18_QtKS8nrkGI.pdf', b'0', 1, '2023-12-13 17:19:13'),
(51, 14, '2023 Batch', '2024-02-13', 'file?type=documents&name=14_Xj62RpD2YK.pdf', b'0', 1, '2024-02-13 13:17:39'),
(52, 13, '2023 Batch', '2024-02-13', 'file?type=documents&name=13_VAoyVAxJZc.pdf', b'0', 1, '2024-02-13 13:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` mediumint NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `UserTypeID` tinyint NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '0',
  `CreatedDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FCMToken` text,
  `SessionID` tinyint DEFAULT NULL,
  `AddedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `Name`, `Username`, `Password`, `EmailID`, `ContactNo`, `UserTypeID`, `isActive`, `CreatedDateTime`, `FCMToken`, `SessionID`, `AddedOn`) VALUES
(1, 'admin', 'admin', 'fc3f89cbadfb2f3caf610d99bb9dc92f107bdff59ef770d2bbcde88e1a80a9b3', 'admin@anthonys.ac.in', '1231231231', 1, 1, '2022-06-30 09:33:26', NULL, 1, '2022-07-24 11:26:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GalleryID`);

--
-- Indexes for table `LoginDetails`
--
ALTER TABLE `LoginDetails`
  ADD PRIMARY KEY (`LoginDetailsID`);

--
-- Indexes for table `login_attempt`
--
ALTER TABLE `login_attempt`
  ADD PRIMARY KEY (`AttemptID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `news_details`
--
ALTER TABLE `news_details`
  ADD PRIMARY KEY (`NewsDetailID`);

--
-- Indexes for table `settings_alldocuments`
--
ALTER TABLE `settings_alldocuments`
  ADD PRIMARY KEY (`DocumentID`),
  ADD KEY `profile_studentdocuments_fk0_idx` (`AddedBy`);

--
-- Indexes for table `settings_modules`
--
ALTER TABLE `settings_modules`
  ADD PRIMARY KEY (`ModuleID`);

--
-- Indexes for table `settings_newstype`
--
ALTER TABLE `settings_newstype`
  ADD PRIMARY KEY (`NewsTypeID`);

--
-- Indexes for table `settings_urlcategory`
--
ALTER TABLE `settings_urlcategory`
  ADD PRIMARY KEY (`URLCategoryID`);

--
-- Indexes for table `url_links`
--
ALTER TABLE `url_links`
  ADD PRIMARY KEY (`URLLinkID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GalleryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `LoginDetails`
--
ALTER TABLE `LoginDetails`
  MODIFY `LoginDetailsID` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `login_attempt`
--
ALTER TABLE `login_attempt`
  MODIFY `AttemptID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `news_details`
--
ALTER TABLE `news_details`
  MODIFY `NewsDetailID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `settings_alldocuments`
--
ALTER TABLE `settings_alldocuments`
  MODIFY `DocumentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings_modules`
--
ALTER TABLE `settings_modules`
  MODIFY `ModuleID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings_newstype`
--
ALTER TABLE `settings_newstype`
  MODIFY `NewsTypeID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings_urlcategory`
--
ALTER TABLE `settings_urlcategory`
  MODIFY `URLCategoryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `url_links`
--
ALTER TABLE `url_links`
  MODIFY `URLLinkID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
