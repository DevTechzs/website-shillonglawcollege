<?php
$title = "THE SHILLONG LAW COLLEGE - SCHOLARSHIPS";
include_once('inc/header.php');
?>

<style>
    ol li {
        list-style: decimal;
        margin: 10px 0px 10px 20px;
    }

    p {
        text-align: justify;
    }

    .managementimg img,
    p {
        margin: 10px auto;
        display: block;
        width: 70%;
        height: auto;
        border-radius: 5px;
        border: 0px solid !important;
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
        <div class="container">
            <div class="row">
 <!--Welcome Start-->
 <div class="col-sm-3">
          <div id="side-menu">
            <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
              
            </div>
          </div>

          <br>

        </div>
                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">THE SHILLONG LAW COLLEGE - SCHOLARSHIPS</h1>

                        <div class="managementimg row">
                        <img src="assets/images/scholarship.png" alt="" height="70px;" />
                            <br />
                            <h3>TYPES OF SCHOLARSHIP</h3>
                            <ol>
                           <li>Umbrella Scheme Scholarship</li>
                           <li>Merit Scholarship</li>
                           <li>	Ishan Uday Scholarship</li>
                           <li>	Border area scholarship</li>
                           <li>	Book Grant Scholarship</li>
                           <li>	Minority Scholarships</li>
                            </ol> 

                            <p>
                           <b> How to Apply?</b> <br />
Students applying for scholarship for the first time (Fresh Students) need to "Register" on the NSP portal as fresh applicant by providing accurate and authenticated information as printed on their documents in the "Student Registration Form". Existing Students needs to apply as renewal with the current year. Before initiating registration process, students / Parents / guardian is advised to keep the following documents handy:
                            </p>
                            <p>
                                <ol>
                                <li>Student's Bank account number and IFSC code of the bank branch</li>
                                <li>	ST/SC Certificate	</li>
                                <li>Aadhaar number of the Student</li>
                                <li>	Bonafide Certificate from the Institute duly sealed and signed by the authority.</li>
                                <li>College SBI fee e- receipt</li>
                                <li>	Marksheet of previous semester (only for renewal applicant)</li>

                                </ol>
                            </p>
                            <div class="row">
                                <div class="cont-right-rig-event-link">
                                <h4 style="text-align:center;">Certificates </h4>
                                <div style=" overflow:hidden;" id="prgms">
                                    <span class="p-3">No Data Found !!</span>
                                </div>
                                </div>
                            </div>
                            Note: Apart from the above scholarships’ students are advised to view the different schemes available in the NSP portal (nsp.gov.in). 

                            <a class="btn btn-success" href="https://scholarships.gov.in/fresh/loginPage"> &nbsp;  &nbsp; &nbsp; APPLY  &nbsp;  </a>
                        
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

<?php
include_once('inc/footer.php');
?>


<script>
  $(function() {
    getData();
  });

  function getData() {
    var json = new Object();
    json.URLCategoryID = '27';

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
  </script>