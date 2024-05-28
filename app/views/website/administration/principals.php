<?php
$title = "Principals";
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

    .principals-img img {
        width: 100%;
        height: auto;
    }

    .principals-img .col-sm-4 {
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>

<div id="wrapper" class="container">

    <div id="content">

        <div class="space"></div>

        <!--Welcome Part Start-->
        <div class="">
            <div class="row">

                <!--Welcome Start-->
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Administration</h4>
                            <a href="governing-body" class="w3-bar-item w3-button">Governing Body </a>
                            <a href="principals" class="w3-bar-item w3-button active">Principals</a>
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
                        <h1 style="text-align:center;">Principals</h1>

                        <div class="space"></div>


                        <div class="row principals-img">
                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/1.jpg" alt="Principal 1">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/2.jpg" alt="Principal 2">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/3.jpg" alt="Principal 3">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/4.jpg" alt="Principal 4">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/5.jpg" alt="Principal 5">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/6.jpg" alt="Principal 6">
                            </div>

                            <div class="col-sm-4">
                                <img class="img" src="assets/images/principals/7.jpg" alt="Principal 7">
                            </div>
                        </div>
                    </div>



                </div>
                <!--Welcome End-->



            </div>
        </div>
        <!--Welcome Part End-->

        <div class="space"></div>


    </div>
    <!--Content End-->

</div>
<!-- Wraper End -->

<?php include_once($_SESSION['footer']); ?>