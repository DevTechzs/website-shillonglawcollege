<?php
$title = "Management";
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
        width: 70%;
        height: auto;
        border-radius: 5px;
        border: 0px solid !important;
    }

    .managementimg p {
        color: #716f6f;
        text-align: justify;
        font-size: 14px;
    }

    b {
        padding: 0px !important;
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
                            <h4>About Us</h4>
                            <a href="principal-message" class="w3-bar-item w3-button">Principal Message </a>
                            <a href="founders" class="w3-bar-item w3-button">Founders</a>
                            <a href="history" class="w3-bar-item w3-button">History</a>
                            <a href="governing-body" class="w3-bar-item w3-button active">Management</a>
                            <a href="college-profile" class="w3-bar-item w3-button">Profile of the College</a>
                            <a href="vision" class="w3-bar-item w3-button">Vision, Mission and Goals</a>
                            <a href="anthemflagemblem" class="w3-bar-item w3-button">College Anthem, Emblem and Flag</a>


                        </div>
                    </div>

                    <br>

                </div>

                <div class="col-sm-9">

                    <div class="welcome">
                        <h1 style="text-align:center;">Members of the Governing Body</h1>

                        <div class="space"></div>

                        <div class="managementimg row"><img src="assets/images/management1.jpg" width="241" height="119" alt="(L-R): D.K.N Kharshiing (Vice-Principal), Dr. Ms. M. Kharshiing(Asst. Prof), Dr. Sharif Uddin (Principal), Mrs. Tshering Yangi, Shri G.S. Massar(President), Dr. M.P.R. Lyngdoh, Prof. O.P Singh, Shri D.B. Gurung (Secretary), Shri L. Jyrwa and Shri S.S. Majaw.
Members not present in the picture are Shri H.S. Thankkhiew, Prof P.M. Passah, Prof. Dr. C. Rout and Shri T.J. Ahmed." class="" />
                            <p>(L-R): D.K.N Kharshiing (Vice-Principal), Dr. Ms. M. Kharshiing(Asst. Prof), Dr. Sharif Uddin (Principal), Mrs. Tshering Yangi, Shri G.S. Massar(President), Dr. M.P.R. Lyngdoh, Prof. O.P Singh, Shri D.B. Gurung (Secretary), Shri L. Jyrwa and Shri S.S. Majaw.
                                Members not present in the picture are Shri H.S. Thankkhiew, Prof P.M. Passah, Prof. Dr. C. Rout and Shri T.J. Ahmed.</p>
                        </div>

                        <div class="space"></div>

                        <div class="space"></div>

                        <div class="row">
                            <b>Members of the Governing Body (2016-2019)</b>

                            <ol class="members">
                                <li>Shri. G.S. Massar, Sr. Advocate, High Court of Meghalaya. <i>President</i></li>
                                <li>Shri. D. B. Gurung, Former Director of Accounts &amp; Treasuries, Govt. Meghalaya. <i>Secretary</i></li>
                                <li>Dr. Sharif Uddin, Principal, <i>Joint Secretary</i></li>
                            </ol>
                            <br />
                            <b>Members</b>
                            <ol start="4">
                                <li>Shri. D.K.N. Kharshiing, Vice – Principal </li>
                                <li>Dr. M.P.R. Lyngdoh, Former Principal Shillong College</li>
                                <li>Prof. P.M. Passah, Former Professor of Economics, NEHU</li>
                                <li>Shri H.S. Thangkhiew, Sr. Advocate, High Court of Meghalaya</li>
                                <li>Mrs. Tshering Yangi, Advocate, High Court of Meghalaya</li>
                                <li>Shri. S.S. Majaw, Former Vice Principal Synod College</li>
                                <li>Shri. L. Jyrwa, Former Law Secretary Govt. of Meghalaya.</li>
                            </ol>
                            </br>
                            <b>NEHU Representatives</b>
                            <ol start="11">
                                <li>Prof.Dr. C. Rout, Dept. of Law, North Eastern Hill University.</li>
                                <li>Prof. O.P. Singh, Dept.of Environmental Studies. North Eastern Hill University</li>
                            </ol>
                            </br>
                            <b>Teachers Representatives</b>
                            <ol start="13">
                                <li>Dr. (Ms.). M. Kharshiing, Asst. Professor </li>
                                <li>Shri. T.J. Ahmed, Guest Faculty </li>
                            </ol>

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