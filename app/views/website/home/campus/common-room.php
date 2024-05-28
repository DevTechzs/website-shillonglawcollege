<?php
$title = "Men and Women Common Room";
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
        width: inherit;
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

        /*.clab {
    display: flex;
    justify-content: center;
    align-items: center;
}*/
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
                            <!-- <a href="legal-service-aid" class="w3-bar-item w3-button">Legal Service Aid</a> -->
                            <a href="common-room" class="w3-bar-item w3-button active">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties’ Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>


                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">Boys' & Girls' Common Room</h1>

                        <div class="clab row">

                            <div class="col-sm-5">
                                <p>The Students Common Room are the place, where the needy student have the opportunity to reveal all his academic cares and shade fears of the examinations. Here they are the masters of their own and can take the whole care of themselves. College Common Rooms are known for their special utility. During the break time reloads the overburden brain, refreshes the tired mind . Often it is the Common Room where the best long and ever lasting friendship blosem among our students. Here also the funniest and the most memorable moments usually take place. Here is where the students completely forget all the "regrets" of the college life and look forward to great and living future of their careers.
                                </p>
                            </div>

                            <div class="col-sm-7">
                                <img src="assets/images/proj/boyscomm.jpg" alt="">
                                <br><br>
                                <img src="assets/images/proj/girlscomm.jpg" alt="">
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

<?php include_once($_SESSION['footer']); ?>