<?php
$title = "Anti-Ragging Cell";
include_once($_SESSION['header']);
?>

<style>
  body {
    counter-reset: Serial;
    /* Set the Serial counter to 0 */
  }

  #tbl1 tr td:first-child:before {
    counter-increment: Serial;
    /* Increment the Serial counter */
    content: counter(Serial) ".";
    /* Display the counter */
  }

  .tbl-founders tr td:nth-child(3) {
    color: #cc202e;
  }

  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #444;
    color: #000;
  }

  a.w3-bar-item.w3-button.active {
    color: #fff;
    background: goldenrod;
  }

  .ragging-li li {
    list-style: disc;
  }
</style>

<div id="wrapper" class="container">

  <div id="content">

    <div class="space"></div>

    <div class="">
      <div class="row">

        <div class="col-sm-3">
          <div id="side-menu">
            <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
              <h4>Committees/cells</h4>
              <a href="academic-committee" class="w3-bar-item w3-button">Academic Committee</a>
              <a href="alumini-committee" class="w3-bar-item w3-button">Alumini Committee</a>
              <a href="anti-ragging-cell" class="w3-bar-item w3-button active">Anti-Ragging Cell</a>
              <a href="cultural-committee" class="w3-bar-item w3-button">Cultural Committee</a>
              <a href="environmental-committee" class="w3-bar-item w3-button">Environmental Committee</a>
              <a href="equal-opportunity-cell" class="w3-bar-item w3-button">Equal Opportunity Cell</a>
              <!-- <a href="greviance-redressal-cell" class="w3-bar-item w3-button">Grievance Redressal Cell</a> -->
              <a href="red-cross-committee" class="w3-bar-item w3-button">Red Cross Committee</a>
              <a href="research-publication-seminar-cell" class="w3-bar-item w3-button">Research, Publication and Seminar Cell</a>
              <a href="sexual-harassment-prevention-cell" class="w3-bar-item w3-button">Sexual Harassment and Prevention Cell</a>
              <a href="sports-committee" class="w3-bar-item w3-button">Sports Committee</a>
              <a href="students-counselling-cell" class="w3-bar-item w3-button">Students Counselling Cell</a>
              <a href="women-cell" class="w3-bar-item w3-button">Women Cell</a>
              <br />
            </div>
          </div><br>
        </div>

        <div class="col-sm-9">

          <div class="welcome">
            <h1 style="text-align:center;">Anti-Ragging Cell</h1>
            <div class="space"></div>
            <p><i>The Shillong Law College Anti-Ragging Cell aims to eliminate ragging in all forms within the College campus. The Cell shall take regular measures for prevention of ragging (such as by words spoken or written or by an act which effect teasing, treating or handling with rudeness, indulging in undisciplined activities which causes annoyance, hardship or psychological harm or raise fear among juniors or to perform any act which causes embarrassment and overall affects the psyche of a fresher or a junior students). The Cell shall advertise, awareness programme, orientation and counselling sessions about the Anti-Ragging during the time of admissions, on admission and at the end of every academic year. The Anti-Ragging Cell shall have an Anti-Ragging Squad who shall have vigil, oversight and patrolling functions; it shall be kept mobile, alert and active at all times and shall be empowered to insect places within the college campus. The squad shall investigate incidents of ragging from time to time and make recommendations to the Anti-Ragging Committee. There shall be an undertaking by the Students of every semester to be aware of the law regarding the prohibition of ragging.</i></p>
            <div style="display:inline-flex">
              <a class="btn btn-warning" href="https://antiragging.in/assets/pdf/information/english/SUMMARY_OF_UGC_REGULATIONS.pdf"> ABSTRACT OF UGC REGULATIONS ON RAGGING </a>
              <a class="btn btn-warning" href="file?type=documents&name=summary_of_the_Supreme_court_Judgment.pdf"> THE JUDGMENT OF THE HON.SUPREME COURT </a>

            </div>
            <br>
            <br>
            <div style="display:inline-flex">
              <a class="btn btn-warning" style="font-size:15px;" href="https://antiragging.in/affidavit_affiliated_form.php">REVISED PROCEDURE OF ANTI RAGGING UNDERTAKING & COMPLIANCE SUBMISSION.</a>
              <a class="btn btn-warning" href="file?type=documents&name=student undertaking.pdf">PROCEDURE OF ANTI RAGGING UNDERTAKING & COMPLIANCE SUBMISSION</a>

            </div>

            <br /> <br />
            <b>Punishable ingredients of Ragging: -</b>
            <ul class="ragging-li" style="margin-left: 50px;">
              <li>Abetment to ragging</li>
              <li>Criminal conspiracy to rag</li>
              <li>Unlawful assembly and rioting while ragging</li>
              <li>Public nuisance created during ragging</li>
              <li>Violation of decency and morals through ragging</li>
              <li>Injury to body, causing hurt or grievous hurt</li>
              <li>Wrongful restraint</li>
              <li>Wrongful confinement</li>
              <li>Use of criminal force</li>
              <li>Assault as well as sexual offences or unnatural offences</li>
              <li>Extortion</li>
              <li>Criminal trespass</li>
              <li>Offences against property</li>
              <li>Criminal intimidation</li>
              <li>Attempts to commit any or all of the above-mentioned offences against the victim(s)</li>
              <li>Physical or psychological humiliation</li>
              <li>All other offences following from the definition of “Ragging"</li>
            </ul>
            <small class="text-danger">* Students who have faced ragging by any of your classmates, senior or junior may post their complaints.</small>
          </div>

          <div class="adm-bx mt-3">
            <a class="btn-home" href="https://forms.gle/rSF3HUV3RXQNWNYa9" target="_blank" title="CLICK TO SEE CONTENT">POST YOUR COMPLAINT RELATED WITH RAGGING</a>
          </div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Anti-Ragging Committee</h4>
              <table id="tbl1" class="table tbl-founders">
                <!-- <thead>
                  <tr>
                    <th>Sl. No.</td>
                    <th>Name</td>
                    <th>Designation</td>
                  </tr>
                </thead> -->
                <tbody>
                  <tr>
                    <td></td>
                    <td>(Dr.) Shri. Sharif Uddin (Principal) Associate Professor</td>
                    <td>Head of the Institute, Chair–person</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Darishisha Jyrwa, Assistant Professor</td>
                    <td>Teacher Counsellor</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shri. Deba K. N. Kharshiing</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>(Dr.) Smti. Mrinalini Kharshiing</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Ilasara D. Kharkongor</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shri. Celestine Ksoo</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Sophia Parkordor Kharbudon</td>
                    <td>Administrative Staff - Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shri. Debu. Lyngdoh</td>
                    <td>Parents, Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Tania Sangma </td>
                    <td>Students, Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Bapyntngen Mashli</td>
                    <td>Students, Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="space"></div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Monitoring Cell</h4>
              <table class="table tbl-founders">
                <!-- <thead>
                  <tr>
                    <th>Sl. No.</td>
                    <th>Name</td>
                    <th>Designation</td>
                  </tr>
                </thead> -->
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Smti. Daiahunlang Mawlong</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Smti. Eleane Marbaniang</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Smti. Deiphisha Kurbah</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Dr. Umeshwari Dkhar</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Smti. Claireen Cynthia Fancon</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Smti. Fredalynn Kyndiah</td>
                    <td>Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="space"></div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Anti-Ragging Squad</h4>
              <table class="table tbl-founders">
                <!-- <thead>
                  <tr>
                    <th>Sl. No.</td>
                    <th>Name</td>
                    <th>Designation</td>
                  </tr>
                </thead> -->
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Smti. Lakyntiew N. Khyriem</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Smti. Lalengzami H. Nongbri</td>
                    <td>Faculty - Member</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Shri. Vordinal Lyngdoh</td>
                    <td>Administrative Staff - Member</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Shri. Binod Kumar Thapa</td>
                    <td>Administrative Staff - Member</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Shri. Silvester Chyne</td>
                    <td>Group-D Administrative Staff - Member</td>
                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Shri. Gregory Swer</td>
                    <td>Group-D Administrative Staff - Member</td>
                  </tr>
                  <tr>
                    <td>7.</td>
                    <td>Ebenzer Stone Syiem</td>
                    <td>6<sup>th</sup> Sem LLB Student, Member</td>
                  </tr>
                  <tr>
                    <td>8.</td>
                    <td>Moranthyel Saka</td>
                    <td>4<sup>th</sup> Sem LLB Student, Member</td>
                  </tr>
                  <tr>
                    <td>9.</td>
                    <td>Shagun Agarwal</td>
                    <td>2<sup>nd</sup> Sem LLB Student, Member</td>
                  </tr>
                  <tr>
                    <td>10.</td>
                    <td>Meban P. Syiem</td>
                    <td>6<sup>th</sup> Sem BALLB Student, Member</td>
                  </tr>
                  <tr>
                    <td>11.</td>
                    <td>Josephine Hnaihly</td>
                    <td>4<sup>th</sup> Sem BALLB Student, Member</td>
                  </tr>
                  <tr>
                    <td>12.</td>
                    <td>Zeenat Khatoon</td>
                    <td>2<sup>nd</sup> Sem BALLB Student, Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="space"></div>

          <div class="row" style="display:none">
            <div class="cont-right-rig-event-link">
              <h4 style="text-align:center;">Programme Conducted</h4>
              <div style=" overflow:hidden;" id="prgms">
                <span class="p-3">No Data Found !!</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="space"></div>

  </div>
</div>

<?php include_once($_SESSION['footer']); ?>

<script>
  $(function() {
    getData();
  });

  function getData() {

    var json = new Object();
    json.URLCategoryID = '3';

    let obj = {};
    obj.Module = "Admin";
    obj.Page_key = "getURLLinkData";
    obj.JSON = json;
    TransportCall(obj);
  }

  function onSuccess(rc) {
    //console.log(rc);

    if (rc.return_code) {
      switch (rc.Page_key) {
        case "getURLLinkData":
          var data = rc.return_data;
          if (data.length > 0)
            loaddata(rc.return_data);
          break;
        default:
          alert(rc.Page_key);
      }
    } else {
      alert(rc.return_data);
    }
  }

  function loaddata(data) {
    //console.log(data);
    var div_prgm;

    div_prgm = '<marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">';
    div_prgm += '<ul class="columns">';
    data.forEach(function(params) {
      var dt = new Date(params['Date']);
      dt = (dt.getDate() + '/' + (dt.getMonth() + 1) + '/' + dt.getFullYear());


      div_prgm += '<li>';
      div_prgm += '<a href="' + params['URL'] + '" target="_blank"> <span id="homeright_rptupcomingevents_Label3_0">' + params['Title'] + ' &mdash; ' + dt + '</span></a>';
      div_prgm += '</li>';
    });
    div_prgm += '</ul>';
    div_prgm += '</marquee>';

    $('#prgms').empty();
    $('#prgms').append(div_prgm);
  }
</script>