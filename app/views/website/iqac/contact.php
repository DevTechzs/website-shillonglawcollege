<?php
$title = "IQAC Contact Us";
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

    p.tz-p b {
        color: #84012a;
        font-weight: 600;
        font-size: 16px;
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
                            <h4>IQAC</h4>
                            <a href="iqac-emblem" class="w3-bar-item w3-button">Emblem</a>
                            <a href="iqac-genesis" class="w3-bar-item w3-button">Genesis</a>
                            <a href="iqac-committee" class="w3-bar-item w3-button">IQAC Committee</a>
                            <a href="iqac-meeting" class="w3-bar-item w3-button">Meeting & Proceedings</a>
                            <a href="iqac-report" class="w3-bar-item w3-button">Annual Report</a>
                            <a href="iqac-ssr" class="w3-bar-item w3-button">SSR</a>
                            <a href="iqac-aqar" class="w3-bar-item w3-button">AQAR</a>
                            <a href="iqac-activities" class="w3-bar-item w3-button">Activities</a>
                            <a href="iqac-contact" class="w3-bar-item w3-button active">Contact Us</a>
                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="welcome row">

                        <div class="row">
                            <div class="col-sm-12" id="contact-us">
                                <h2>IQAC Contact Us</h2>
                                <i class="fas fa-user"></i>&nbsp;&nbsp;<b>IQAC Coordinator</b> : Dr. Mrinalini Kharshiing<br /><br />
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;+919436700392<br /><br />
                                <i class="fas fa-envelope"></i>&nbsp;&nbsp;mrinalinikharshiing@gmail.com<br /><br />
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