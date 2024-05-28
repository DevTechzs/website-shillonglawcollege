<?php
$title = "IQAC Committe";
include_once($_SESSION['header']);
?>

<style>

    body
    {
        counter-reset: Serial; /* Set the Serial counter to 0 */
    }
    tr td:first-child:before
    {
        counter-increment: Serial; /* Increment the Serial counter */
        content: counter(Serial) "."; /* Display the counter */
    }

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
                            <a href="iqac-committee" class="w3-bar-item w3-button active">IQAC Committee</a>
                            <a href="iqac-meeting" class="w3-bar-item w3-button">Meeting & Proceedings</a>
                            <a href="iqac-report" class="w3-bar-item w3-button">Annual Report</a>
                            <a href="iqac-ssr" class="w3-bar-item w3-button">SSR</a>
                            <a href="iqac-aqar" class="w3-bar-item w3-button">AQAR</a>
                            <a href="iqac-activities" class="w3-bar-item w3-button">Activities</a>
                            <a href="iqac-contact" class="w3-bar-item w3-button">Contact Us</a>
                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="welcome row">
                        <h1 style="text-align:center;">IQAC Committe</h1>

                        <div class="space"></div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table tbl-founders">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Shri. D. B. Gurung</td>
                                            <td>Secretary GB, Administrative Officer</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dr. Sharif Uddin</td>
                                            <td>Principal, Chairman</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dr. (Smt.) M. Kharshiing</td>
                                            <td>Vice Principal, Coordinator</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dr. (Mrs.) M. P. R. Lyngdoh</td>
                                            <td>Member GB, Members from the Management</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Shri. B. S. Thangkhiew</td>
                                            <td>Member GB, Shillong Law College, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Shri. M. Dkhar Tmar</td>
                                            <td>Local Society, Dhankheti, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dr. (Mrs.) E. Kharkongor</td>
                                            <td>Principal, Shillong College, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Prof. M. N. Bhattacharjee</td>
                                            <td>Retd. HOD, Chemistry, Shillong College, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dr. Donbor Roy Thangkhiew</td>
                                            <td>Retd. Vice Principal, St. Edmund's College, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Shri. S. C. Chakraborty</td>
                                            <td>President, Alumni Association, Shillong Law College, Shillong</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Shri. Sanjeev Chanda</td>
                                            <td>Advocate , Alumni Association</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Mrs. Daiahunlin Mawlong</td>
                                            <td>Asstt. Professor</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Ms. Ilasara D. Kharkongor</td>
                                            <td>Asstt. Professor</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Mrs. Darishisha Jyrwa</td>
                                            <td>Asstt. Professor</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Mrs. Lakyntiew N. Khyriem</td>
                                            <td>Asstt. Professor</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Shri. Vordinal Lyngdoh</td>
                                            <td>Head Assistant</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>President</td>
                                            <td>Students' Bar Association, Shillong Law College</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Secretary</td>
                                            <td>Students' Bar Association, Shillong Law College</td>
                                        </tr>
                                    </tbody>
                                </table>
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