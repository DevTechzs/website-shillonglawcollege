<?php
$title = "UGC Career Counselling";
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
                            <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties’ Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button active">UGC Career Council</a>


                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">UGC CAREER AND COUNSELLING CELL</h1>

                        <div class="clab row">

                            <div class="col-sm-6">
                                <img src="assets/images/proj/ugccareer.jpg" alt="">
                                <br />
                            </div>

                            <div class="col-sm-6">
                                <p>The Career and Counselling Cell support the students in skill development and communication ability and meet the challenge of competitive tests and on-job- training in add-on or vocational courses. It also gathers information on job avenues and placements in different institutions and concerns related to the courses that the College offers. It analyse information in the local, regional and national contexts to explore its relevance and utility for the students on-job training. It also promote discipline, healthy outlook and positive attitudes towards rational integration and removal of narrow preferences and prejudices.
                                </p>
                            </div>

                        </div>
                        <br><br>
                        <div class="clab row">
                            <div class="col-sm-12">
                                <h1 style="text-align:center;">UGC REMEDIAL COACHING CLASS</h1>

                                <p>The Remedial Coaching Class is organised for the Undergraduate / Postgraduate level with view to improve academic skills and proficiency of the students in various subjects as well raising their level of comprehension of basic subjects to provide a strong foundation for further academic work. It helps strengthen their knowledge skills and attitudes in such subjects where quantitative and qualitative techniques and laboratory activities are involved so that proper guidance and training provided under the programme may enable the students to come up to the level necessary for pursuing higher studies efficiently.</p>

                                <br>
                                <br>

                                <h1 style="text-align:center;">UGC COACHING CLASS FOR ENTRY INTO SERVICES</h1>

                                <p>The basic objective of the coaching class is to prepare students belonging to SC/ST/OBC (non creamy layer) and Minority communities to get gainful employment in Group ‘A’,’B’ or ‘C’ Central services, State services or equivalent positions in the private and public.
                                    <br><br>
                                    The Coaching programthe is oriented keeping in view all the basic enterprises Services, State Public Services, Banking Services, Staff Selection Commission etc.
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