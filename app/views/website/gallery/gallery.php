<?php
$title = "Alumni Gallery";
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

  div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 420px;
  }

  div.gallery:hover {
    border: 1px solid #777;
  }

  div.gallery img {
    width: 100%;
    height: 200px;
  }

  div.desc {
    padding: 15px;
    text-align: center;
  }

  .thumbnail {
    margin-bottom: 6px;
  }

  .carousel-control.left,
  .carousel-control.right {
    background-image: none;
    margin-top: 10%;
    width: 5%;
  }

  /* Style for the gallery item */
  .gallery {
    position: relative;
    /* Position relative for absolute positioning of card title */
    border-radius: 20px;
    /* Curved edges */
    overflow: hidden;
    /* Hide overflow for curved edges */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Box shadow */
    margin: 20px;
    /* Add margin */
  }

  /* Style for the card title */
  /* Style for the card title */
  .card-title {
    position: absolute;
    /* Position absolute for overlay */
    top: 20px;
    /* Align 20px from the top */
    left: 50%;
    /* Align from left */
    transform: translateX(-50%);
    /* Center horizontally */
    width: 100%;
    /* Full width */
    text-align: center;
    /* Center text */
    font-size: 24px;
    /* Increase font size */
    color: white;
    /* Set text color to white */
    z-index: 1;
    /* Ensure title is above the image */
  }

  .card {
    position: relative;
    padding: 20px;
    margin: 10px 0;
    height: 200px;
    /* Adjust height as needed */
  }

  .title {
    color: white;
    text-align: center;
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    font-size: 2em;
    padding: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .card.purple {
    background: #77B0AA;
  }

  .card.yellow {
    background: #AD88C6;
  }

  .card.blue {
    background: #A3D8FF;
  }

  .card.green {
    background: #9DDE8B;
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
              <a class="w3-bar-item w3-button" href="principal-message"> Principal Message </a>
              <a class="w3-bar-item w3-button" href="founders"> Founders </a>
              <a class="w3-bar-item w3-button" href="history"> History </a>
              <a class="w3-bar-item w3-button" href="https://drive.google.com/file/d/1ORjooJBIAzljFwTBngPChqLw2B0oCgHN/view?usp=share_link"> Management </a>
              <a class="w3-bar-item w3-button" href="college-profile"> Profile of the College </a>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-6">
              <div class="card purple">
                <a target="_blank" href="#" onclick="redirect(1)">
                  <h1 class="title">Workshop</h1>
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card green">
                <a target="_blank" href="#" onclick="redirect(2)">
                  <h1 class="title">Seminar</h1>
                </a>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <div class="card yellow">
                <a target="_blank" href="#" onclick="redirect(3)">
                  <h1 class="title">Conference National & International</h1>
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card blue">
                <a target="_blank" href="#" onclick="redirect(4)">
                  <h1 class="title">Extra-Curriculum Activities</h1>
                </a>
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

<script type="text/javascript">
  function redirect(id) {
    window.location = "gallery-details?id=" + btoa(id);
  }
</script>