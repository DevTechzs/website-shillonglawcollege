<?php
$title = "Library";
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

  @media only screen and (max-width:767px) {
    .row.reverse {
      display: flex;
      flex-flow: column-reverse;
    }
  }

  /*@media only screen and (max-width:767px){
.col-sm-3 {padding:0px !important;}

.col-sm-9 {padding:0px !important;}
}*/
</style>

<div id="wrapper" class="container">

  <div id="content">

    <!--Welcome Part Start-->
    <div class="">
      <div class="row">

        <!--Welcome Start-->
        <div class="col-md-3">
          <div id="side-menu">
            <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
              <h4 class="text-center">Campus</h4>
              <a href="library" class="w3-bar-item w3-button active">Library</a>
              <a href="computer-lab" class="w3-bar-item w3-button">Computer Lab</a>
              <a href="moot-court" class="w3-bar-item w3-button">Moot Court</a>
              <!-- <a href="legal-service-aid" class="w3-bar-item w3-button">Legal Service Aid</a> -->
              <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
              <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties’ Chamber</a>
              <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>


            </div>
          </div>

          <br />

        </div>

        <div class="col-md-9">
          <br />
          <br />
          <div class="libraryimg">
            <div class="row align-items-center reverse">
              <h1 style="text-align:center;">Library</h1>
              <br>
              <div class="col-sm-7">
                <p>The Shillong Law College Library has the Books and Publications collection of approximately 12225 in its Accession including Journals, Magazines and Articles. The Library caters to the needs and requirements of the Students and Teaching Faculties.
                  It also provides facilities for scholars who may utilize the Library with prior permission from the Management.
                  <br />
                  <br />
                  The Main objective of the Shillong Law College Library is to collect, collate, organize, retrieve, update and disseminate information effectively and efficiently to keep pace with changing in time.
                </p>
              </div>

              <div class="col-sm-5">
                <img src="assets/images/proj/library1.jpg" alt="Library">
                <br /><br />
              </div>

            </div>
          </div>
          <br />

          <div class="row">

            <div class="libraryimg">
              <h1 style="text-align:center;">LEGAL DATABASE:</h1>

              <p>Legal -Online Law Library is the leading next-generation legal research database that puts a comprehensive national law library and smarter and more powerful searching, sorting, and visualization tools at your fingertips. With Legal Online Law Library you have access to the following:
                <br />
                <br />
              </p>
            </div>
          </div>

          <div class="libraryimg">
            <div class="row align-items-center reverse">
              <h1>LEGAL ONLINE JOURNALS</h1>
              <br>
              <div class="col-sm-7">
                <ol>
                  <li>AIR SUPREME COURT 1950-2012 (INCLUDING AIR SCW)</li>
                  <li>AIR HIGHCOURT 1950-2012 </li>
                  <li>CRIMINAL LAW JOURNALS 1950-2012</li>
                  <li>AIR PRIVY COUNCIL 1914 – 1950</li>
                  <li>SUPREME COURT &amp; ALL HIGHCOURT JUDGEMENT</li>
                  <li>NORTH EASTERN LOCAL LAWS</li>
                  <li>CENTRAL ACTS &amp; RULES</li>
                  <li>SCC ONLINE</li>
                </ol>

              </div>

              <div class="col-sm-5">
                <img src="assets/images/proj/library2.jpg" alt="Library">
                <br /><br />
              </div>

            </div>
          </div>


          <div class="row">

            <div class="col-sm-6">
              <h1>ONLINE LEGAL DATABASE</h1>
              <ol>
                <li> <a href="https://www.scconline.com" target="_blank" title="CLICK TO SEE CONTENT">SCC Online</a></li>
                <li> A.I.R Online Institutional Version</li>
                <li> North Eastern Local Act.</li>
              </ol>
            </div>

            <div class="col-sm-6">
              <h1>E-Gate (Library Entry & Exit)</h1>
              
              <br>
              Monday &ndash; Friday (10:00 am &ndash; 10:00pm)<br>
              Saturday (10:00 am - 1:30 pm)

            </div>


          </div>

          <br>

          <div class="row">
            <div class="col-sm-4">

              <h1>Offline Legal Database </h1>
              <ol>
                <li>A.I.R Privy Council </li>
                <li>A.I.R InfoTech</li>
                <li>Legal Eagle</li>
              </ol>


            </div>

            <div class="col-sm-4">

              <h1>News Papers / Magazines</h1>


              <ol>
                <li>The Shillong Times</li>
                <li>The Telegraph</li>
                <li>The Hindu</li>
              </ol>

            </div>

            <div class="col-sm-4">

              <h1>Magazines</h1>
              <ol>
                <li>India Today</li>
                <li>Competition Success</li>
                <li>Outlook</li>
                <li>Frontline</li>
              </ol>

            </div>



          </div>

          <br />

          <div class="row">
            <div class="col-sm-6">
              <a href="publications" class="btn btn-home" target="_blank" title="CLICK TO SEE CONTENT">PUBLICATIONS OF THE FACULTY</a>
            </div>
            <div class="col-sm-6">
              <a href="journals" class="btn btn-home" target="_blank" title="CLICK TO SEE CONTENT">JOURNALS OF THE FACULTY</a>
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