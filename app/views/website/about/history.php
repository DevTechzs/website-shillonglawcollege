<?php
$title = "History";
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
              <a href="history" class="w3-bar-item w3-button active">History</a>
              <a href="governing-body" class="w3-bar-item w3-button">Management</a>
              <a href="college-profile" class="w3-bar-item w3-button">Profile of the College</a>
              <a href="vision" class="w3-bar-item w3-button">Vision, Mission and Goals</a>
              <a href="anthemflagemblem" class="w3-bar-item w3-button">College Anthem, Emblem and Flag</a>


            </div>
          </div>

          <br>

        </div>

        <div class="col-sm-9">

          <div class="welcome">
            <h1 style="text-align:center;">Brief Introduction of The Shillong Law College</h1>

            <div class="space"></div>

            <p>The Shillong Law College was established in the year 1964 as an Evening College. It was the outcome of the efforts made by the then eminent persons of the city like Late Lokeshwar Sharma, a scholar administrator and a remarkable educationist; Late Bhobesh Chandra Barua, the then Advocate General of Assam; Late Suresh Chandra Rajkhowa, the then Director of Public Instruction, Assam; Late Maham Singh, Advocate and former Minister, Assam; Late Aron Alley, Advocate and former Assam Minister, Late Dhirendra Nath Dutta, Advocate; Late J.N Deb Choudhury, Advocate ; Late Shri Hasibuddin Ahmed, Advocate; Late Nripendra Mohan Palit, Advocate and Late Prabin Kumar Choudhury, the Editor of the then The Frontier Times.
              <br>
              <br>

              The Present premises of The Shillong Law College at Dhanketi, Shillong was purchased from Shri Birendra Chandra Dutta on 14th February, 1969, and moved in to the present site in the year 1973. In the year 2000 the College was converted from Evening College to a Day College and Teaching Faculties were appointed based on the Bar Council of India and the University Rules/ Regulations.
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