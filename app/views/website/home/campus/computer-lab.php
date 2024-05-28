<?php
$title = "Computer Lab";
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


  img {
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
    <div class="">
      <div class="row">

        <!--Welcome Start-->
        <div class="col-sm-3">
          <div id="side-menu">
            <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
              <h4>Campus</h4>
              <a href="library" class="w3-bar-item w3-button">Library</a>
              <a href="computer-lab" class="w3-bar-item w3-button active">Computer Lab</a>
              <a href="moot-court" class="w3-bar-item w3-button">Moot Court</a>
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
            <h1 style="text-align:center;">Computer Lab</h1>

            <div class="clab row">

              <div class="col-sm-7">
                <img src="assets/images/proj/comlab1.jpg" alt="Library">
              </div>

              <div class="col-sm-5">
                <p>The Shillong Law College Computer Lab offer the campus community access to computing resources and a variety of software in support of learning, scholarship and creative endeavour at the College.
                </p>
              </div>

            </div>

            <div class="clab row">

              <div class="col-sm-12">
                <br>
                <h1>Computer Lab Rules & Regulations</h1>
                <p>These policies are designed to keep the computer labs running efficiently and in a safe environment. Please follow these policies while in the Computer Labs.</p>

                <ol>

                  <li>Do not save important information on these computers. All information is erased when the computer is rebooted. Please save data to a disk or memory device. </li>
                  <li>Please be careful with any liquids and foods near the computers.</li>
                  <li>Please be courteous with cell phones. Turn off the ringer or set your phone to vibrate while working in the lab. It is also polite to leave the area to speak on the phone as to not disturb the people around you. Staff members may ask you to leave the area if you are too loud or disturbing others.</li>
                  <li>Downloading of copyrighted material is prohibited, including games, music and movies. Installation of file sharing or peer-to-peer (P2P) applications is prohibited. Staff members will ask you to leave if they are aware of network abuse.</li>
                  <li>Viewing of sexually explicit material is prohibited, and you will be asked to leave the computer lab.</li>
                  <li>During certain busy times during the day, we ask that you limit your computer use if you are not working on academic material. If there are people waiting to use the computers, please be courteous to those who need to work on study related things.</li>
                  <li>Personal files are your responsibility. The staff cannot be held accountable for files that do not open or print, or for disks or memory sticks that do not work. If you seek assistance from a staff member to open or work with a file, that staff member assumes no responsibility for that disk or file. You should back-up your work regularly in multiple places. Instead of saving files on a floppy disk, use a USB Memory Stick, or your personal space in the Student Portal. For assistance saving files in any of these locations, please ask a staff member. </li>
                  <li>You are requested to switch on and switch off as for utilization of any PC in the Computer Lab.</li>
                  <li>For accessing the Offline Software the dongles have to reserve a day before.</li>
                  <li>For Accessing the Online Software, you are directed to login only with your Email ID as the Username. </li>
                </ol>
              </div>

            </div>

            <br>
            <br>

            <div class="row">

              <div class="col-sm-12">
                <img src="assets/images/proj/complab2.jpg" alt="Library">
              </div>

              <div class="col-sm-12">
                <h1>Softwares available in the Computer Lab</h1>
                <h4>Online Legal Database</h4>
                <ol>
                  <li>SccOnline.com</li>
                  <li>A.I.R Online Institutional Version</li>
                  <li>N-List</li>
                  <li>North Eastern Region  Local Acts & Rules</li>
                  <li>Central Acts & Rules</li>

                </ol>

                <h4>Offline Legal Database</h4>
                <ol start="4">
                  <li>A.I.R Privy Council </li>
                  <li>A.I.R InfoTech</li>
                  <li>Legal Eagle</li>
                  <li>North Eastern Local Act.</li>
                  &emsp;
                </ol>

                <h4>Eligibility</h4>
                Faculty &amp; Staff<br>
                Undergraduate Students <br>

                <h4>Lab Hours</h4>
                Monday &ndash; Friday 10:00 am to 4:00pm<br>
                Saturday 10:00 am to 1:30 pm<br>
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