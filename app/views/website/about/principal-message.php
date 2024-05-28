<?php
$title = "Principal Message";
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
              <a href="principal-message" class="w3-bar-item w3-button active">Principal Message </a>
              <a href="founders" class="w3-bar-item w3-button">Founders</a>
              <a href="history" class="w3-bar-item w3-button">History</a>
              <a href="governing-body" class="w3-bar-item w3-button">Management</a>
              <a href="college-profile" class="w3-bar-item w3-button">Profile of the College</a>
              <a href="vision" class="w3-bar-item w3-button">Vision, Mission and Goals</a>
              <a href="anthemflagemblem" class="w3-bar-item w3-button">College Anthem, Emblem and Flag</a>
            </div>
          </div>

          <br>
          <br>

        </div>

        <div class="col-sm-9">

          <div class="welcome">
            <h1 style="text-align:center;">Principal Message</h1>

            <div class="space"></div>

            <div class="pmimg"><img src="assets/images/Dr. Sharif Uddin.jpg" width="241" height="119" alt="" class="" />
              <p>Dr. Sharif Uddin</p>
            </div>
            <p>A very warm welcome to all concerned on behalf of the Shillong Law College fraternity. At the very outset, I would like to thank you for accessing our College Website. Here I would like to pay my homage to those Great Souls whose peerless efforts brought this College into existence. The Shillong Law College is one of the oldest and renowned Law Colleges of the North-East India. It has already crossed 50 years of glorious journey keeping its imprint on the wings of time. The College has been able to keep pace with the changing time of globalization and environment. The College has now become a hub for Higher Education for the students coming from Seven Sisters of the North-East. Being the oldest Law College, it has been serving the students community for last five decades bring out many responsible and dignified citizens of the country. The College is proud of its glorious past and hopeful of offering dedicated services to the society in times to come. We are confident that this College will reach its zenith and will sprinkle the ray of knowledge to the society fulfilling the hopes and aspirations of the student’s communities for time to come.
            </p>
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