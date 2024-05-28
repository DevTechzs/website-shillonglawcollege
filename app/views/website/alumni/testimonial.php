<?php
$title = "Testimonials";
include_once($_SESSION['header']);
?>

<style>
  body
  {
    counter-reset: Serial; /* Set the Serial counter to 0 */
  }
  tr td:first-child:before
  {
    counter-increment: Serial; /* Increment the Serial counter */
    content: counter(Serial) "."; /* Display the counter */
  }

  table{
    width:100% !important;
  }
  table thead tr th:nth-child(1), table tbody tr td:nth-child(1){
    vertical-align:middle !important; 
    width:7% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(2), table tbody tr td:nth-child(2){
    vertical-align:middle !important; 
    width:13% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(3), table tbody tr td:nth-child(3){
    vertical-align:middle !important; 
    width:25% !important; 
    text-align:left !important;
  }
  table thead tr th:nth-child(4), table tbody tr td:nth-child(4){
    vertical-align:middle !important; 
    width:20% !important; 
    text-align:left !important;
  }
  table thead tr th:nth-child(5), table tbody tr td:nth-child(5){
    vertical-align:middle !important; 
    width:15% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(6), table tbody tr td:nth-child(6){
    vertical-align:middle !important; 
    width:20% !important; 
    text-align:left !important;
  }

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
              <h4>Alumni</h4>
              <!-- <a href="alumni-member" class="w3-bar-item w3-button">Members of the Alumini</a> -->
              <a href="alumni-advisory" class="w3-bar-item w3-button active">SLCAA Committee</a>
              <a href="alumni-conclave" class="w3-bar-item w3-button">Alumini Conclave</a>
              <a href="alumni-testimonial" class="w3-bar-item w3-button active">Testimonials</a>
              <a href="file?type=documents&name=al_directory.pdf" target="_blank" title="CLICK TO SEE CONTENT" class="w3-bar-item w3-button">Alumini Directory</a>
              <a href="https://forms.gle/CTDe4qeEEi5mupPp7" target="_blank" class="w3-bar-item w3-button">Registration</a>
              <a href="https://forms.gle/zAE6SJMTWxa7bhfR6" target="_blank" class="w3-bar-item w3-button">Feedback</a>
              <a href="alumni-gallery" class="w3-bar-item w3-button">Alumni Gallery</a>
              <a href="alumni-contact" class="w3-bar-item w3-button">Contact Us</a>
              <br />
            </div>
          </div>

          <br>

        </div>

        <div class="col-sm-9">

          <div class="welcome">
            <h1 style="text-align:center;">Testimonials</h1>

            <div class="space"></div> 
            <div class="row">
              <div class="col-sm-12"> 
              <ul class="list">
                <li> <a href="https://test.techz.in/file?type=documents&name=testimonial1.pdf" > Testimonial of SLCAA </a></li>
               <br />
                <!-- <li> <a href="https://test.techz.in/file?type=documents&name=testimonial2.pdf" > Testimonial 2 </a></li> -->
              </ul>
              
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