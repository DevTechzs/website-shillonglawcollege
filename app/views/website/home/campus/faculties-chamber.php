<?php
$title = "Faculties’ Chamber";
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

    p {
        text-align: justify;
    }

    .managementimg p {
        color: #716f6f;
        text-align: justify;
        font-size: 14px;
    }


    .clab img {
        width: 100%;
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


    @media only screen and (min-width:992px) {

        .clab {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<div id="wrapper">

    <div id="content">

        <!--Welcome Part Start-->
        <div class="container">
            <div class="row">

                <!--Welcome Start-->
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Campus</h4>
                            <a href="library" class="w3-bar-item w3-button">Library</a>
                            <a href="computer-lab" class="w3-bar-item w3-button">Computer Lab</a>
                            <a href="moot-court" class="w3-bar-item w3-button">Moot Court</a>
                            <!-- <a href="legal-service-aid" class="w3-bar-item w3-button">Legal Service Aid</a> -->
                            <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button active">Faculties’ Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>


                        </div>
                    </div>

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">FACULTIES’ CHAMBER</h1>

                        <div class="clab row">

                            <div class="col-sm-6">
                                <img src="assets/images/proj/FacultiesChamber.jpg" alt="">
                            </div>

                            <div class="col-sm-6">
                                <p>The Faculty Chamber is a private room where the students would meet with the concerned teachers in resolving educational matters. Beside the required office furniture, internet facilities and stationary are made available.
                                </p>
                            </div>

                        </div>

                    </div>

                    <br>
                    <br>
                    <br><br><br>

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

<?php include_once($_SESSION['footer']); ?>