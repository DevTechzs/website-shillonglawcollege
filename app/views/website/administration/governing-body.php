<?php
$title = "Governing Body";
include_once($_SESSION['header']);
?>

<style>
    .pmimg {
        float: left;
        padding-right: 15px;
    }

    .pmimg img {
        height: auto;
    }

    .pmimg p {
        background: #86012b;
        color: #fff;
        text-align: center;
        padding: 5px 5px;
    }

    a.w3-bar-item.w3-button.active {
        color: #fff;
        background: goldenrod;
    }

    .tbl-founders tr td:nth-child(3) {
        color: #cc202e;
    }

    ol li {
        list-style: decimal;
        margin: 10px 0px 10px 20px;
    }

    .managementimg img,
    p {
        margin: 10px auto;
        display: block;
        width: 100%;
        height: auto;
        border-radius: 5px;
        border: 0px solid !important;
    }

    .managementimg p {
        color: #716f6f;
        text-align: justify;
        font-size: 14px;
    }

    .row.ntstaff img {
        height: 220px;
        width: 190px;
        margin: 0 auto;
        display: block;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 50%);
        transition: 0.3s;
        padding: 15px 15px;
        text-align: center;
    }

    a.btn.btn-warning {
        margin: 9px 0;
    }

    #more {
        display: none;
    }

    button#myBtn {
        display: block;
        margin: 10px auto;
        background: #84012a;
        color: #fff;
        border-color: #84012a;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .custom-a {
        display: block !important;
        margin: 10px auto !important;
        background: #84012a !important;
        color: #fff !important;
        border-color: #84012a !important;
        padding: 5px 10px !important;
        border-radius: 5px !important;
        text-align: center !important;
    }

    .card li {
        list-style: square;
        margin: 0 0px 0 15px;
    }

    @media only screen and (max-width:767px) {
        .col-md-4.card {
            margin: 15px 1%;
        }
    }

    @media only screen and (min-width:1024px) {
        .row.ntstaff img {
            height: 220px;
            width: 190px;
            margin: 0 auto;
            display: block;
        }

        .col-md-4.card {
            margin: 15px 1%;
            width: 31.33333333%;
        }
    }

    @media only screen and (min-width:768px) and (max-width:1023px) {
        .col-md-4.card {
            margin: 15px 1%;
            width: 31.33333333%;
        }

        .row {
            margin-right: 0px !important;
            margin-left: 0px !important;
        }

        .row.ntstaff img {
            height: auto;
            width: 100%;
            margin: 0 auto;
            display: block;
        }
    }
</style>

<div id="wrapper" class="container">

    <div id="content">

        <div class="space"></div>

        <div class="">
            <div class="row">

                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Administration</h4>
                            <a href="governing-body" class="w3-bar-item w3-button active">Governing Body </a>
                            <a href="principals" class="w3-bar-item w3-button">Principals</a>
                            <div class="w3-dropdown-hover">
                                <button class="w3-button">Staff
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="w3-dropdown-content w3-bar-block">
                                    <a href="teachingstafflaw" class="w3-bar-item w3-button">Teaching Staff (Law)</a>
                                    <a href="teachingstaffnonlaw" class="w3-bar-item w3-button">Teaching Staff (Non-Law)</a>
                                    <a href="nonteachingstaff" class="w3-bar-item w3-button">Non-Teaching Staff</a>
                                </div>
                            </div>
                            <br />
                            <a href="file?type=documents&name=ad_constitution.pdf" target="_blank" title="THE CONSTITUTION OF THE SHILLONG LAW COLLEGE" class="w3-bar-item w3-button">Constitution</a>
                            <a href="file?type=documents&name=ad_ews.pdf" target="_blank" title="SHILLONG LAW COLLEGE EMPLOYEES' WELFARE SCHEME, 2009" class="w3-bar-item w3-button">Employees Welfare Scheme</a>
                            <a href="file?type=documents&name=ad_delegation.pdf" target="_blank" title="Delegation of Administrative, Executive Powers and Financial Powers, 2009" class="w3-bar-item w3-button">Delegation 2009</a>
                            <div class="w3-dropdown-hover">
                                <button class="w3-button">Service Rules 2009
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="w3-dropdown-content w3-bar-block">
                                    <a href="file?type=documents&name=ad_srts.pdf" target="_blank" title="Shillong Law College Employees' (Teaching Faculties) Service Rules, 2009" class="w3-bar-item w3-button">Teaching Staff</a>
                                    <a href="file?type=documents&name=ad_srnts.pdf" target="_blank" title="Shillong Law College Employees' (Non-Teaching Staff) Service Rules, 2009" class="w3-bar-item w3-button">Non-Teaching Staff</a>
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">

                    <!-- <div class="welcome">
                        <h1 style="text-align:center; font-weight:normal !important; font-family:Verdana, Geneva, Tahoma, sans-serif !important;">Members of the Governing Body</h1>
                        
                        <div class="managementimg row">
                            <img src="assets/images/management1.jpg" width="241" height="119" alt="(L-R): D.K.N Kharshiing (Vice-Principal), Dr. Ms. M. Kharshiing(Asst. Prof), Dr. Sharif Uddin (Principal), Mrs. Tshering Yangi, Shri G.S. Massar(President), Dr. M.P.R. Lyngdoh, Prof. O.P Singh, Shri D.B. Gurung (Secretary), Shri L. Jyrwa and Shri S.S. Majaw. Members not present in the picture are Shri H.S. Thankkhiew, Prof P.M. Passah, Prof. Dr. C. Rout and Shri T.J. Ahmed." />
                            <p>(L-R): D.K.N Kharshiing (Vice-Principal), Dr. Ms. M. Kharshiing(Asst. Prof), Dr. Sharif Uddin (Principal), Mrs. Tshering Yangi, Shri G.S. Massar(President), Dr. M.P.R. Lyngdoh, Prof. O.P Singh, Shri D.B. Gurung (Secretary), Shri L. Jyrwa and Shri S.S. Majaw. <br /> Members not present in the picture are Shri H.S. Thankkhiew, Prof P.M. Passah, Prof. Dr. C. Rout and Shri T.J. Ahmed.</p>
                        </div>
                    </div>

                    <div class="space"></div> -->

                    <div class="welcome">
                        <h1 style="text-align:center; font-weight:normal !important; font-family:Verdana, Geneva, Tahoma, sans-serif !important;">THE SHILLONG LAW COLLEGE</h1>
                        <h1 style="text-align:center; font-weight:normal !important; font-family:Verdana, Geneva, Tahoma, sans-serif !important;">Members of the Governing Body (2019-2022)</h1>

                        <div class="row ntstaff">
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/WHK.jpg" alt="Member Photo"><br>
                                <b>Shri. W. H Khyllep</b> <br>
                                <b style="color:#a50133;">President, GB</b><br>
                                <i>Former IAS, Govt. of Meghalaya</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/DBG.jpg" alt="Member Photo"><br>
                                <b>Shri. D. B. Gurung</b> <br>
                                <b style="color:#a50133;">Secretary, GB</b><br>
                                <i>Former Director of Accounts &amp; Treasuries, Govt. of Meghalaya</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/SU.jpg" alt="Member Photo"><br>
                                <b>Dr. Sharif Uddin</b> <br>
                                <b style="color:#a50133;">Joint Secretary, GB</b><br>
                                <i>Principal</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/MK.jpg" alt="Member Photo"><br>
                                <b>Dr. (Ms.) M. Kharshiing </b> <br>
                                <b style="color:#a50133;">Assistant Secretary, GB & Teacher Representative</b><br>
                                <i>Vice-Principal</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/MPRL.jpg" alt="Member Photo"><br>
                                <b>Dr. (Mrs.) M. P. R. Lyngdoh</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Former Principal, Shillong College</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/PMP.jpg" alt="Member Photo"><br>
                                <b>Prof. P. M. Passah</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Former Professor of Economics Dept., North Eastern Hill University</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/TY.jpg" alt="Member Photo"><br>
                                <b>Mrs. Tshering Yangi</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Advocate, High Court of Meghalaya</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/SSM.jpg" alt="Member Photo"><br>
                                <b>Shri. S. S. Majaw</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Former Vice-Principal, Synod College</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/SPM.jpg" alt="Member Photo"><br>
                                <b>Shri. S. P. Mahanta</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Sr. Advocate President, Meghalaya High Court Bar Association</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/BST.jpg" alt="Member Photo"><br>
                                <b>Shri. B.S. Thangkhiew</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Chief Architect, PWD (Building), Govt. of Meghalaya</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/DL.jpg" alt="Member Photo"><br>
                                <b>Shri. D. Lyngdoh</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Deputy Secretary to the Govt. of Meghalaya, Education Department</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/LAL.jpg" alt="Member Photo"><br>
                                <b>Smti. L.A. Lyndem</b> <br>
                                <b style="color:#a50133;">Member, GB</b><br>
                                <i>Deputy Secretary to the Govt. of Meghalaya, Law Department</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/JJM.jpg" alt="Member Photo"><br>
                                <b>Prof. Joyti J. Mozika</b> <br>
                                <b style="color:#a50133;">NEHU Representative, GB</b><br>
                                <i>Professor of Law Dept.</i><br>
                                <!-- <a class="custom-a" href="file?type=documents&name=tsl_UD.pdf" target="_blank" title="View Profile">Profile</a> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div class="space"></div>
                    <div class="space"></div>

                    <div class="welcome">
                        <h1 style="text-align:center;">Members of the Governing Body (2016-2019)</h1>

                        <div class="row ntstaff">
                            <div class="col-md-4 card">
                                <img src="assets/images/no-img.jpeg" alt="Member Photo"><br>
                                <b>Shri. G. S. Massar</b> <br>
                                <b style="color:#a50133;">President</b><br>
                                <i>Sr. Advocate, High Court of Meghalaya</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/DBG.jpg" alt="Member Photo"><br>
                                <b>Shri. D. B. Gurung</b> <br>
                                <b style="color:#a50133;">Secretary</b><br>
                                <i>Former Director of Accounts &amp; Treasuries, Govt. Meghalaya</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/SU.jpg" alt="Member Photo"><br>
                                <b>Dr. Sharif Uddin</b> <br>
                                <b style="color:#a50133;">Joint Secretary</b><br>
                                <i>Principal</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/DKNK.jpg" alt="Member Photo"><br>
                                <b>Shri. D. K. N. Kharshiing</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Vice–Principal</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/MPRL.jpg" alt="Member Photo"><br>
                                <b>Dr. (Mrs.) M. P. R. Lyngdoh</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Former Principal, Shillong College</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/PMP.jpg" alt="Member Photo"><br>
                                <b>Prof. P. M. Passah</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Former Professor of Economics, North Eastern Hill University</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/no-img.jpeg" alt="Member Photo"><br>
                                <b>Shri. H. S. Thangkhiew</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Sr. Advocate, High Court of Meghalaya</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/TY.jpg" alt="Member Photo"><br>
                                <b>Mrs. Tshering Yangi</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Advocate, High Court of Meghalaya</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/gb/SSM.jpg" alt="Member Photo"><br>
                                <b>Shri. S. S. Majaw</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Former Vice-Principal, Synod College</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/no-img.jpeg" alt="Member Photo"><br>
                                <b>Shri. L. Jyrwa</b> <br>
                                <b style="color:#a50133;">Member</b><br>
                                <i>Former Law Secretary, Govt. of Meghalaya</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/no-img.jpeg" alt="Member Photo"><br>
                                <b>Prof. Dr. C. Rout</b> <br>
                                <b style="color:#a50133;">NEHU Representative</b><br>
                                <i>Dept. of Law, North Eastern Hill University</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/no-img.jpeg" alt="Member Photo"><br>
                                <b>Prof. O. P. Singh</b> <br>
                                <b style="color:#a50133;">NEHU Representative</b><br>
                                <i>Dept. of Environmental Studies, North Eastern Hill University</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/MK.jpg" alt="Member Photo"><br>
                                <b>Dr. (Ms.) M. Kharshiing</b> <br>
                                <b style="color:#a50133;">Teachers Representative</b><br>
                                <i>Assistant Professor</i><br>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsl/TJA.jpg" alt="Member Photo"><br>
                                <b>Shri. Tabris Jalal Ahmed </b> <br>
                                <b style="color:#a50133;">Teachers Representative</b><br>
                                <i>Guest Faculty</i><br>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="space"></div>
    </div>
</div>

<?php include_once($_SESSION['footer']); ?>