<?php
$title = "Grievance Redressal Cell";
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
  
  .tbl-founders tr td:nth-child(3) {
    color: #cc202e;
  }
  .table th, .table td {
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
              <!-- <a href="greviance-redressal-cell" class="w3-bar-item w3-button active">Grievance Redressal Cell</a> -->
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
            <h1 style="text-align:center;">Grievance Redressal Cell</h1>
            <div class="space"></div>
            <p><i>The Shillong Law College Grievance Redressal Cell aims to provide a mechanism for Redressal of student’s grievances and ensure the transparency. The function of the Cell is to look into the complaint lodged by any student, and judge its merit as per requirement. The student can state their grievance regarding any academic and non-academic matter within the campus through the online and grievance/suggestion box. The institution aims at solving the grievances of the students within stipulated time.</i></p>
            <b>Goals and Objectives: -</b>
            <ul class="ragging-li" style="margin-left: 50px;">
              <li>The main objective of the Grievance Redressal Cell is to develop a responsible and receptive attitude among all the student so that a harmonious educational atmosphere is maintained in the college.</li>
              <li>The Grievance Redressal Cell is constituted for the redressed of the problem reported by the learners of the college with the aim and objective of keeping the self-esteem of the College by ensuring strife free atmosphere in the college through encouraging cordial Student teacher relationship and Student-Student relationship, etc.</li>
              <li>To encourage the students to express their problem/grievance frankly and freely without any fear of being victimized.</li>
              <li>The student can state their grievance regarding any academic and non-academic matter within the campus through the online and grievance/suggestion box is  installed in the ground floor of the college premises in which the students, who wants to remain anonymous put in writing their grievance and their suggestion for improving the Academics/ Administrative in the college.</li>
            </ul>
          </div>
          
          <div class="adm-bx mt-3">
            <a class="btn-home" href="https://forms.gle/VsBK2WhJSYUG4b356" target='_blank'>POST YOUR GRIEVANCES</a>
          </div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Grievance Redressal Cell Members</h4>
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
                    <td>Smti. Darishisha Jyrwa, Assistant Professor</td>
                    <td>Convener</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Ilasara D. Kharkongor, Assistant Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Daiahunlin Mawlong, Assistant Professor</td>
                    <td>Member</td>
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
    json.URLCategoryID = '7';

    let obj = {};
    obj.Module = "Admin";
    obj.Page_key = "getURLLinkData";
    obj.JSON = json;
    TransportCall(obj);
  }

  function onSuccess(rc) 
  {
    //console.log(rc);

    if (rc.return_code) {
      switch (rc.Page_key) {
        case "getURLLinkData":
          var data = rc.return_data;
          if(data.length>0)
            loaddata( rc.return_data);
          break;
          default:
            alert(rc.Page_key);
      }
    } 
    else {
      alert(rc.return_data);
    }
  }

  function loaddata(data){
    //console.log(data);
    var div_prgm;

    div_prgm = '<marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">';
    div_prgm += '<ul class="columns">';
    data.forEach(function (params) {
      var dt = new Date(params['Date']);
      dt = (dt.getDate() + '/' + (dt.getMonth() + 1) + '/' + dt.getFullYear());


      div_prgm += '<li>';
      div_prgm += '<a href="'+params['URL']+'" target="_blank"> <span id="homeright_rptupcomingevents_Label3_0">'+params['Title']+' &mdash; '+dt+'</span></a>';
      div_prgm += '</li>';
    });
    div_prgm += '</ul>';
    div_prgm += '</marquee>';

    $('#prgms').empty();
    $('#prgms').append(div_prgm);
  }
</script>
