<?php
$title = "Moot Court";
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
        <div class="containers">
            <div class="row">

                <!--Welcome Start-->
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Campus</h4>
                            <a href="library" class="w3-bar-item w3-button">Library</a>
                            <a href="computer-lab" class="w3-bar-item w3-button">Computer Lab</a>
                            <a href="moot-court" class="w3-bar-item w3-button active">Moot Court</a>
                            <!-- <a href="legal-service-aid" class="w3-bar-item w3-button">Legal Service Aid</a> -->
                            <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties’ Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>


                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">Moot Court</h1>

                        <div class="clab row">

                            <div class="col-sm-7">
                                <img src="assets/images/proj/mootcourt.jpg" alt="Library">
                                <br />
                            </div>

                            <div class="col-sm-5">
                                <p>A method of teaching law and legal skills that requires students to analyze and argue both sides of a hypothetical legal issue using procedures modelled after those employed in state and federal appellate courts.
                                </p>
                            </div>

                        </div>

                        <div class="clab row">

                            <div class="col-sm-12">
                                <br>
                                The Shillong Law College offer a series of moot court opportunities for students of differing skill levels and legal interests. The activity is competitive by nature, and students vie for honors within their College life and in regional and national moot court competitions featuring teams of students from several law schools. With the Moot court room it helps students learn to analyze legal issues to teach students the practical side of practicing law. Typically, law students are given a detailed hypothetical fact scenario that raises one or more legal issues. Often these fact patterns are based on real situation. Students choose or are assigned the position on the issue to be argued. They then conduct legal research, finding statutes, regulations, and case law that both support their position and detract from it. An important part of the moot court process is to teach students to overcome legal authority (statutes, regulations, and cases) that cuts against their position.
                                <br>
                                <br>
                                Students then draft appellate briefs, which are formal legal papers combining a recital of the facts of the case with analysis and argument of the legal issues raised. As with real appellate courts, moot courts generally dictate many specific requirements for a brief, including the size of the paper, the width of the margins, and the maximum number of pages. Citations to legal authority must also be listed in a uniform style.
                                <br>
                                <br>
                                Once the briefs are written, students prepare for the second phase of moot court advocacy: oral argument. Oral argument demands preparation, organization, and the ability to think quickly and respond convincingly when questioned. The student appears before a panel of judges (typically law professors, actual judges, or other students) and presents her or his position on the legal issue. Each student has a time limit, normally five to ten minutes, to convince the panel. As with real appellate courts, judges on the panel are free to interrupt the student advocate frequently and at any time to ask questions about the facts of the case, legal authority for or against the student's position, or the student's thoughts and opinions about the cases out-come. Students learn to anticipate difficult questions about their legal position and respond intelligently and persuasively. Following oral argument, the moot court panel often will review the student's performance.

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