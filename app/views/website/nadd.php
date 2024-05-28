<?php
$title = "National Academic Depository (NAD)";
include_once('inc/header.php');
?>

<style>
    ol li {
        list-style: decimal;
        margin: 10px 0px 10px 20px;
    }

    p {
        text-align: justify;
    }

    .managementimg img,
    p {
        margin: 10px auto;
        display: block;
        width: 50%;
        height: auto;
        border-radius: 5px;
        border: 0px solid !important;
    }

    .managementimg p {
        color: #716f6f;
        text-align: justify;
        font-size: 14px;
    }


    .clab img {
        width: auto;
        height: auto;
        margin: 0 auto;
        display: block;
    }

    .btn-success {
        color: #fff;
        background-color: #89012c;
        border-color: #88012b;
        margin: 0 auto;
        display: block !important;
        width: fit-content;
    }

    .cont-right-rig-event-link h4 {
        font-size: 15px;
        padding-top: 0px;
        text-transform: uppercase;
        color: #570802;
        padding-bottom: 10px;
        line-height: 20px;
        border-bottom: #570802 solid 1px;
        margin-bottom: 10px;
    }

    .cont-right-rig-event-link h4 {
        color: #570802;
        background-image: url(../images/h1-bg.gif);
        background-repeat: repeat-x;
        line-height: 18px;
        padding: 20px 0px;
        font-size: 15px;
        color: #580902;
        font-weight: bold;
        border-bottom: #cbc1a8 solid 1px;
        text-align: center;
        margin: 0px;
    }

    @media only screen and (min-width:992px) {}
</style>

<div id="wrapper" class="container">

    <div id="content">

        <!--Welcome Part Start-->
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="row">
                        <h1 style="text-align:center;">National Academic Depository (NAD)</h1>

                        <div class="managementimg row">
                            <img src="data:image/png;base64,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" alt="">
                            <br />
                            <br />
                            <p>
                                DigiLocker web/mobile application acts as the student facing interface of National Academic Depository. Students can access their digital academic certificates hosted on NAD through their account on DigiLocker.
                            </p>
                            <p>
                                Students who are entering into employment or pursuing higher studies require a credible, authentic and convenient mechanism for access, retrieval and validation of such academic awards. Academic records maintained in paper form are susceptible to hazards such as spoilage and forgery. Students often face difficulties in obtaining copies of their certificates/mark-sheets whenever they are lost or destroyed. Maintaining academic awards in a digital depository would enable educational institutions, students and employer’s online access/retrieval/verification of digitised academic awards and shall eliminate fraudulent practices such as forging of certificates and mark-sheets. Academic awards maintained in an electronic depository would provide benefit to educational institutions, students and employers by enabling online access of academic awards.
                            </p>

                            <h1>NAD - North-Eastern Hill University</h1>
                            <p>
                                The University shall provide the templates of Academic Awards, master data, student identity details etc. to Digi Locker NAD. It Shall review and confirm the master data, Award Images and Award data lodged on NAD portal and ensure the accuracy of the data of academic awards and student’s identity.
                            </p>
                            <p>
                                Students are the beneficiaries of this scheme who can view, access and share their digital academic awards with other Academic Institution or potential employers.
                            </p>
                            <p>
                                Students are advised to open Digi Locker accounts (if not already done) or read username before registering:
                                ( <a href="https://img1.digitallocker.gov.in/nad/assets/user_manual/NationalAcademicDepository_User_Manual_V3.pdf ">READ MANUAL</a>)
                            </p>
                            <h1 class="text-center">How To Get Your Awards</h1>
                            <img src="assets/images/proj/digi-locker.jpg" alt="" style="width: 100%;">
                            <div class="text-center mt-3">
                                <a class="btn btn-primary" href="https://www.digilocker.gov.in/" target="_blank">Create Your Own Digi Locker</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--column End-->
            </div>
        </div>
        <!--Welcome Part End-->

        <div class="space"></div>


    </div>
    <!--Content End-->

</div>
<!-- Wraper End -->

<?php
include_once('inc/footer.php');
?>