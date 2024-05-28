<?php
$title = "Legal Service Aid";
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


    img {
        width: auto;
        height: auto;
    }

    .btn-success {
        color: #fff;
        background-color: #89012c;
        border-color: #88012b;
        margin: 0 auto;
        display: block !important;
        width: fit-content;
    }

    .legal-logo img {
        margin: 0 auto;
        display: block;
    }


    @media only screen and (min-width:992px) {

        .clab {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<div id="wrapper" class="container">

    <div id="content">

        <!--Welcome Part Start-->
        <div class="">
            <div class="row">

                <!--Welcome Start-->
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Campus</h4>
                            <a href="library" class="w3-bar-item w3-button">Library</a>
                            <a href="computer-lab" class="w3-bar-item w3-button">Computer Lab</a>
                            <a href="moot-court" class="w3-bar-item w3-button">Moot Court</a>
                            <!-- <a href="legal-service-aid" class="w3-bar-item w3-button active">Legal Service Aid</a> -->
                            <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties’ Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>


                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">The Legal Care & Support Centre, Shillong Law College</h1>

                        <div class="row">

                            <div class="legal-logo">
                                <img src="assets/images/proj/legalserviceaid.png" alt="Library" class="mx-auto">
                            </div>
                            <br>
                            <br>
                            <p>
                                The Legal Care & Support Centre, Shillong Law College, established in collaboration with the Meghalaya State Legal Services Authority (MSLSA) in November, 2013 was formally inaugurated by the Hon’ble Mr. Justice Madan B. Lokur, Supreme Court of India, on the 16th November, 2013 in the presence of Hon’ble Mr. Justice Prafulla C. Pant, Chief Justice, High Court of Meghalaya and Patron-in-Chief, the Meghalaya State Legal Services Authority (MSLSA), Hon’ble Mr. Justice T.N.K. Singh, High Court of Meghalaya and Executive Chairman, MSLSA, and Hon’ble Mr Justice S.R. Sen, High Court of Meghalaya. Mr. Rowell Lyngdoh, Honb’le Deputy Chief Minister of Meghalaya was also present during the inauguration of the Centre.
                                <br>
                                <br>
                                The Centre endeavors to improve the clinical skills of the students and to encourage them to render free and competent legal aid and services to the poor and indigent who are eligible under section 12 of the Legal Services Authorities Act, 1987. The Centre, under the aegis of the Meghalaya State Legal Services Authority (MSLSA) and the District Legal Services Authority (DLSA, East Khasi Hills), has been involving the students of the College in various programmes and activities in urban and rural areas. These activities help in sensitizing and making the students aware of the various problems (legal or otherwise) faced by the marginalized and underprivileged sections of the society; hence, inculcating in them the spirit of service to the community.
                            </p>
                            <br>
                            <br>

                            <p class="">
                                <b>Working days/hours: </b><br>
                                Wednesday and Saturday from 2.00 pm to 5.00 pm.

                            </p>
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

<?php include_once($_SESSION['footer']); ?>