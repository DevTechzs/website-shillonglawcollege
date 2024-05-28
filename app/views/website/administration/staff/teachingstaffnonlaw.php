<?php
$title = "Teaching Staff (Non-Law)";
include_once($_SESSION['header']);
?>

<style>
.pmimg img {
    height: auto;
}

.pmimg {
    float: left;
    padding-right: 15px;
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

.managementimg img, p {
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
    text-align:center;
}

a.btn.btn-warning {
    margin: 9px 0;
}

#more {display: none;}

button#myBtn {
    display: block;
    margin: 10px auto;
    background: #84012a;
    color: #fff;
    border-color: #84012a;
    padding: 5px 10px;
    border-radius: 5px;
}

.custom-a{
    display: block !important;
    margin: 10px auto !important;
    background: #84012a !important;
    color: #fff !important;
    border-color: #84012a !important;
    padding: 5px 10px !important;
    border-radius: 5px !important;
    text-align:center !important;
}

.card li {
    list-style: square;
    margin: 0 0px 0 15px;
}

@media only screen and (max-width:767px){
    .col-md-4.card {
        margin: 15px 1%;
    }
}

@media only screen and (min-width:1024px){
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

@media only screen and (min-width:768px) and (max-width:1023px){
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
                            <a href="governing-body" class="w3-bar-item w3-button">Governing Body </a>
                            <a href="principals" class="w3-bar-item w3-button">Principals</a>
                            <div class="w3-dropdown-hover">
                                <button class="w3-button">Staff
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="w3-dropdown-content w3-bar-block">
                                <a href="teachingstafflaw" class="w3-bar-item w3-button">Teaching Staff (Law)</a>
                                <a href="teachingstaffnonlaw" class="w3-bar-item w3-button active">Teaching Staff (Non-Law)</a>
                                <a href="nonteachingstaff" class="w3-bar-item w3-button">Non-Teaching Staff</a>
                                </div>
                            </div> 
                            <br/>
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
                            <br/>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">

                    <div class="welcome">
                        <h1 style="text-align:center;">TEACHING FACULTY MEMBERS (NON-LAW)</h1>
                        <div class="space"></div>
                        
                        <div class="row ntstaff">
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsnl/EM.jpg" alt="Staff Photo"><br>
                                <b>Smti. Eleane Marbaniang</b> <br>
                                <i>Assistant Professor</i><br>
                                <a class="custom-a" href="file?type=documents&name=tsnl_EM.pdf" target="_blank" title="View Profile">Profile</a>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsnl/DK.jpg" alt="Staff Photo"><br>
                                <b>Smti. Deiphisha Kurbah</b> <br>
                                <i>Assistant Professor</i><br>
                                <a class="custom-a" href="file?type=documents&name=tsnl_DK.pdf" target="_blank" title="View Profile">Profile</a>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsnl/LD.jpg" alt="Staff Photo"><br>
                                <b>Smti. Leeza Dkhar</b> <br>
                                <i>Assistant Professor</i><br>
                                <a class="custom-a" href="file?type=documents&name=tsnl_LD.pdf" target="_blank" title="View Profile">Profile</a>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsnl/LHN.jpg" alt="Staff Photo"><br>
                                <b>Smti. Lalengzami H. Nongbri</b> <br>
                                <i>Assistant Professor</i><br>
                                <a class="custom-a" href="file?type=documents&name=tsnl_LHN.pdf" target="_blank" title="View Profile">Profile</a>
                            </div>
                            <div class="col-md-4 card">
                                <img src="assets/images/staff/tsnl/CCF.jpg" alt="Staff Photo"><br>
                                <b>Smti. Claireen Cynthia Fancon</b> <br>
                                <i>Assistant Professor</i><br>
                                <a class="custom-a" href="file?type=documents&name=tsnl_CCF.pdf" target="_blank" title="View Profile">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="space"></div>

    </div>
</div>

<?php include_once($_SESSION['footer']); ?>