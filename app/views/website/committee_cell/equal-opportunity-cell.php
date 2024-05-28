<?php
$title = "Equal Opportunity Cell";
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
              <a href="equal-opportunity-cell" class="w3-bar-item w3-button active">Equal Opportunity Cell</a>
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
            <h1 style="text-align:center;">Equal Opportunity Cell</h1>
            <div class="space"></div>
            <p><i>The Shillong Law College Equal Opportunity Cell is to oversee the effective implementation of policies and programmes for disadvantaged groups, to provide guidance and counselling with respect to academic, financial, social and other matters and to enhance the diversity within the campus. To ensure equity and equal opportunity to the community at large in the college and bring about social inclusion. To enhance the diversity among the students, teaching and non-teaching staff population and at the same time eliminate the perception of discrimination. To help individuals or a group of students belonging to the disadvantaged section of society to contain the problems related to discrimination. To look into the grievances of the weaker section of society and suggest amicable solution to their problems.</i></p>
          </div>

          <div class="space"></div>

          <div class="row" style="overflow:auto !important;">
            <div class="col-sm-12">
              <h4 style="text-align:center;">Equal Opportunity Cell Members</h4>
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
                    <td>Smti. Eleane Marbaniang, Assistant Professor</td>
                    <td>Convener</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Daiahunlin Mawlong, Assistant Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Deiphisha Kurbah, Assistant Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Smti. Claireen C. Fancon, Assistant Professor</td>
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
    json.URLCategoryID = '6';

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
