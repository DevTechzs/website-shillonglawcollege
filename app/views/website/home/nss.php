<?php
$title = "National Service Scheme (NSS)";
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


    .clab img {
        width: auto;
        height: auto;
        margin: 0 auto;
        display: block;
    }

    .btn-success {
        color: #fff;
        background-color: #89012c;
        border-color: #88012b;
        margin: 0 auto;
        display: block !important;
        width: fit-content;
    }

    .cont-right-rig-event-link h4 {
        font-size: 15px;
        padding-top: 0px;
        text-transform: uppercase;
        color: #570802;
        padding-bottom: 10px;
        line-height: 20px;
        border-bottom: #570802 solid 1px;
        margin-bottom: 10px;
    }

    .cont-right-rig-event-link h4 {
        color: #570802;
        background-image: url(../images/h1-bg.gif);
        background-repeat: repeat-x;
        line-height: 18px;
        padding: 20px 0px;
        font-size: 15px;
        color: #580902;
        font-weight: bold;
        border-bottom: #cbc1a8 solid 1px;
        text-align: center;
        margin: 0px;
    }

    @media only screen and (min-width:992px) {}
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
                            <a href="computer-lab" class="w3-bar-item w3-button">Computer Lab</a>
                            <a href="moot-court" class="w3-bar-item w3-button">Moot Court</a>
                            <!-- <a href="legal-service-aid" class="w3-bar-item w3-button">Legal Service Aid</a> -->
                            <a href="common-room" class="w3-bar-item w3-button">Boys' & Girls' Common Room</a>
                            <a href="faculties-chamber" class="w3-bar-item w3-button">Faculties Chamber</a>
                            <a href="ugc-career-council" class="w3-bar-item w3-button">UGC Career Council</a>
                            <!-- <a href="nss" class="w3-bar-item w3-button active">National Service Scheme (NSS)</a> -->

                        </div>
                    </div>

                    <br />

                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">National Service Scheme (NSS)</h1>

                        <div class="clab row">

                            <div class="row">
                                <img src="assets/images/proj/nss.jpg" alt="">
                                <br />
                                <br />
                                <p>
                                    National Service Scheme aims at arousing social consciousness of the youth with an overall objective of personality development of the students through community service. The primary objective is to provide opportunity to the students for community works. This helps in understanding the problems of real life and utilizing their skills and knowledge in resolving problems. This would enrich their experience and would have a tremendous value for career development.
                                </p>
                                <p>
                                    NSS gives opportunity to make a significant contribution in field of literacy, disaster management, health and family welfare and environment, NSS is working for integrated development of adopted villages and slums through its regular and special camping programmes. This will develop youth to bring in a change for the betterment of weaker sections of the society.
                                </p>
                                <p>
                                    The Shillong Law College NSS was setup on the 3rd November, 2017. The NSS unit aims at the involvement mainly of undergraduate students on a voluntary basis in various activities of social service. The students of our college have represented the College in various camps. Special campaigns were launched on Aids Awareness, Social evils, Legal awareness, Rights and status of women, child welfare and Tree plantation. The Orientation Programme was conducted by the NSS Programme Coordinator Dr L. Kma in the presence of 124 (One Twenty Four) Students.
                                </p>
                            </div>

                        </div>



                    </div>

                    <div class="row" style="overflow:auto !important;">
                        <div class="col-sm-12">
                        <h4 style="text-align:center;">Members</h4>
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
                                    <td>Smti. Daiahunlin Mawlong, Assistant Professor</td>
                                    <td>Programme Officer</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Dr. Umeshwari Dkhar, Assistant Professor</td>
                                    <td>Programme Officer</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <div class="space"></div>

                    <div class="row">
                        <div class="cont-right-rig-event-link">
                        <h4 style="text-align:center;">Programme Conducted</h4>
                        <div style=" overflow:hidden;" id="prgms">
                            <span class="p-3">No Data Found !!</span>
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

<script>

  $(function() {
    getData(); 
  });

  function getData() {
    var json = new Object();
    json.URLCategoryID = '25';

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