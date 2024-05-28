<?php
$title = "Students Counselling Cell";
include_once($_SESSION['header']);
?>

<style>
  body {
    counter-reset: Serial;
    /* Set the Serial counter to 0 */
  }

  tr td:first-child:before {
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
              <a href="anti-ragging-cell" class="w3-bar-item w3-button">Anti-Ragging Cell</a>
              <a href="cultural-committee" class="w3-bar-item w3-button">Cultural Committee</a>
              <a href="environmental-committee" class="w3-bar-item w3-button">Environmental Committee</a>
              <a href="equal-opportunity-cell" class="w3-bar-item w3-button">Equal Opportunity Cell</a>
              <!-- <a href="greviance-redressal-cell" class="w3-bar-item w3-button">Grievance Redressal Cell</a> -->
              <a href="red-cross-committee" class="w3-bar-item w3-button">Red Cross Committee</a>
              <a href="research-publication-seminar-cell" class="w3-bar-item w3-button">Research, Publication and Seminar Cell</a>
              <a href="sexual-harassment-prevention-cell" class="w3-bar-item w3-button">Sexual Harassment and Prevention Cell</a>
              <a href="sports-committee" class="w3-bar-item w3-button">Sports Committee</a>
              <a href="students-counselling-cell" class="w3-bar-item w3-button active">Students Counselling Cell</a>
              <a href="women-cell" class="w3-bar-item w3-button">Women Cell</a>
              <br />
            </div>
          </div><br>
        </div>

        <div class="col-sm-9">

          <div class="welcome">
            <h1 style="text-align:center; font-weight:normal !important; font-family:Verdana, Geneva, Tahoma, sans-serif !important;">Students Counselling Cell</h1>
            <p>Professional counselling is a <i>“professional relationship that empowers diverse individuals, families, and groups to accomplish mental health, wellness, education, and career goals.” It is a “collaborative effort between the counsellor and client”, in which “professional counsellors help clients identify goals and potential solutions to problems which cause emotional turmoil; seek to improve communication and coping skills; strengthen self-esteem; and promote behaviour change and optimal mental health.”</i><b style="float: right; padding: 2px"><i>[American Counselling Association (ACA): counseling.org]</i></b></p>

            <div class="space"></div>

            <p>Students Counselling Cells in colleges are constituted to effectively manage the problems and challenges of students and address their anxiety, stress, and worries. Teachers should learn to be ‘supportive’ and ‘listen’ to their students who approach them with anxieties and troubles. Trained ‘teacher-counsellors’ would cater to the emotional and intellectual needs of the students. Nonetheless, whether or not teachers have been formally trained as professional counsellors, the one <i>“qualification…remains unchanged in this greatly changed universe for all counsellors: common sense and understanding of the human condition are inseparable elements of true helping.”</i><b style="float: right; padding: 2px"><i>[Eugene Kennedy & Sara C. Charles, On Becoming a Counsellor: A Basic Guide for Nonprofessional Counsellors and Other Helpers, Better Yourself Books Pub., 2007]</i></b></p>

            <div class="space"></div>
            <div class="space"></div>

            <p>The UGC <i>“Guidelines on Safety of Students on and Off Campuses of Higher Educational Institutions” mandates that “HEIs should mandatorily put in place a broad-based ‘Students Counselling System’ for the effective management of problems and challenges faced by students. It should be a unique, interactive and target-oriented system, involving students, teachers and parents, who resolve to address common student concerns ranging from anxiety, stress, fear of change and failure to homesickness and a slew of academic worries. It should bridge the formal as well as communicative gaps between the students and the institution at large. Teacher counsellors, trained to act as the guardians of students at the college level, should remain in close touch with the students allotted to them (batch of 25 students) throughout the year, cater to their emotional and intellectual needs and convey their growth report and feedback on attendance, examination results etc to their parents at regular interval of time.”</i></p>
            <p>According to Para. 15 of the UGC <i>“Guidelines for General Development Assistance to Central, Deemed and State Universities during XI Plan”</i>, the <i>“Career and Counselling Cell” </i> addresses the academic and the career concerns, job and placement opportunities of students. It supports the students in the development of soft skills and communication ability to challenge the severity of competitive tests and on-job-training in add-on or vocational courses. The Cell would help the students with appropriate guidance to establish linkages with the world of work and locate career opportunities vis-à-vis the realities and job profiles in the context of highly competitive emerging occupational patterns. The gaps in perception about the market demands and individual expectations could be bridged through psychological and confidence building measures. The career and counselling support that an institution offers to its students makes them confident to perform better. Counselling addresses both the academic and the career concerns and opportunities.</p>
            <p>Thus, the functions of the Students Counselling Cell include gathering of information on job avenues and placements in different institutions and concerns related to the subjects that the college offers. The Cell also organizes programmes and guidance workshops for informing students about the emerging professional trends and events, job profiles, leadership roles, entrepreneurship, market needs and risks and implementation of national socio-economic policies and to impart training in soft skills.</p>
            <p>It aims at promoting discipline, healthy outlook and positive attitudes towards national integration and removal of narrow provincial preferences and prejudices.</p>
            <p>The Students Counselling Cell in the Shillong Law College could well become a system to accommodate both the mandate of the UGC <i>“Guidelines on Safety of Students On and Off Campuses of Higher Educational Institutions”</i> as well as the objective of the Scheme under the UGC <i>“Guidelines for General Development Assistance to Central, Deemed and State Universities during XI Plan”</i></p>
          </div>

          <div class="row">
            <div class="adm-bx mt-3">
              <a class="btn-home" href="https://forms.gle/zGRzd7FrUS1ApWHd8" target="_blank" title="CLICK TO SEE CONTENT">POST YOUR QUERIES FOR COUNSELLING</a>
            </div>
          </div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Teacher Counsellors</h4>
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
                    <td></td>
                    <td>Smt. Leeza Dkhar</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shri. Tabris Jalal Ahmed</td>
                    <td>Guest Faculty</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shri. Celestine Ksoo</td>
                    <td>Assistant Professor</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <strong class="text-danger">* The Students Counselling Cell opens every working day from 4:00 pm to 5:00 pm.</strong>
          </div>

          <div class="space"></div>
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
    json.URLCategoryID = '26';

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