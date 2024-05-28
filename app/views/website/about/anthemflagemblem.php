<?php
$title = "College Anthem, Emblem and Flag";
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
                            <h4>About Us</h4>
                            <a href="principal-message" class="w3-bar-item w3-button">Principal Message </a>
                            <a href="founders" class="w3-bar-item w3-button">Founders</a>
                            <a href="history" class="w3-bar-item w3-button">History</a>
                            <a href="governing-body" class="w3-bar-item w3-button">Management</a>
                            <a href="college-profile" class="w3-bar-item w3-button">Profile of the College</a>
                            <a href="vision" class="w3-bar-item w3-button">Vision, Mission and Goals</a>
                            <a href="anthemflagemblem" class="w3-bar-item w3-button active">College Anthem, Emblem and Flag</a>
                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="welcome row">
                        <h1 style="text-align:center;">College Anthem</h1>

                        <div class="space"></div>

                        <div class="row text-center">
                            <span>Shillong Law College is leading the way, </span>
                            <span>With Lawyers and Judges of our future days, </span>
                            <span>As Students who strive to learn without rest, </span>
                            <span>Guided by teachers who are at their best, </span>
                            <span>Seekers of truth, keepers of rights, </span>
                            <span>Builders of hope with all of our might. </span>
                            <span>This is true in our deepest soul, </span>
                            <span>We must strive to seek our goal, </span>
                            <span>To find the truth with every lie, </span>
                            <span>And not to yield.</span>
                        </div>
                    </div>

                    <div class="space"></div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="polaroid">
                                <img src="assets/images/Shillong_Logo.png" alt="Shillong Logo" style="width:60%; margin: 0 auto;display: block;">
                                <div class="polaroid container">
                                    <h4>College Emblem</h4>
                                    <p>The College Emblem may be used for official purposes only including documents of the College and the letter head of the College. Copyright Reserve.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="polaroid">
                                <img src="assets/images/college-flag.jpg" alt="College Flag" style="width:100%">
                                <div class="polaroid container">
                                    <h4>College Flag</h4>
                                    <p>The purposes of the College Flag is that it may be used during various occasions and events of the Colleges and within the College premises or elsewhere for specific purposes like sports and meet etc.</p>
                                </div>
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