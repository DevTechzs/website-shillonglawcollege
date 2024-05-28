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
              <h4>Alumni</h4>
              <!-- <a href="alumni-member" class="w3-bar-item w3-button">Members of the Alumini</a> -->
              <a href="alumni-advisory" class="w3-bar-item w3-button active">SLCAA Committee</a>
              <a href="alumni-conclave" class="w3-bar-item w3-button">Alumini Conclave</a>
              <a href="alumni-testimonial" class="w3-bar-item w3-button">Testimonials</a>
              <a href="file?type=documents&name=al_directory.pdf" target="_blank" title="CLICK TO SEE CONTENT" class="w3-bar-item w3-button">Alumini Directory</a>
              <a href="https://forms.gle/CTDe4qeEEi5mupPp7" target="_blank" class="w3-bar-item w3-button">Registration</a>
              <a href="https://forms.gle/zAE6SJMTWxa7bhfR6" target="_blank" class="w3-bar-item w3-button">Feedback</a>
              <a href="alumni-gallery" class="w3-bar-item w3-button active">Alumni Gallery</a>
              <a href="alumni-contact" class="w3-bar-item w3-button">Contact Us</a>
              <br />
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="gallery">
            <a target="_blank" href="file?type=alumni&name=Alumni-1.jpeg">
              <img src="file?type=alumni&name=Alumni-1.jpeg" alt="Cinque Terre" width="600" height="400">
            </a>
            <!-- <div class="desc">Add a description of the image here</div> -->
          </div>
          <div class="gallery">
            <a target="_blank" href="file?type=alumni&name=Alumni-2.jpeg">
              <img src="file?type=alumni&name=Alumni-2.jpeg" alt="Forest" width="600" height="400">
            </a>
            <!-- <div class="desc">Add a description of the image here</div> -->
          </div>
          <div class="gallery">
            <a target="_blank" href="file?type=alumni&name=Alumni-3.jpeg">
              <img src="file?type=alumni&name=Alumni-3.jpeg" alt="Northern Lights" width="600" height="400">
            </a>
            <!-- <div class="desc">Add a description of the image here</div> -->
          </div>
          <div class="gallery">
            <a target="_blank" href="file?type=alumni&name=Alumni-4.jpeg">
              <img src="file?type=alumni&name=Alumni-4.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <!-- <div class="desc">Add a description of the image here</div> -->
          </div>
          <div class="gallery">
            <a target="_blank" href="file?type=alumni&name=Alumni-5.jpeg">
              <img src="file?type=alumni&name=Alumni-5.jpeg" alt="Mountains" width="600" height="400">
            </a>
            <!-- <div class="desc">Add a description of the image here</div> -->
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