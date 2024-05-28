<?php
$title = "Alumini Conclave";
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
      list-style: none;
      margin: 10px 0px 10px 0px;
  }

  p.tz-p b {
      color: #84012a;
      font-weight: 600;
      font-size: 16px;
  }

  ol li::marker {
      color:#8e2c3d;
      font-weight:bold;
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
              <a href="alumni-conclave" class="w3-bar-item w3-button active">Alumini Conclave</a>
              <a href="alumni-testimonial" class="w3-bar-item w3-button">Testimonials</a>
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
            <h1>Alumini Conclave</h1>

            <div class="row">
              <ol start="1" id="div_content">
                <li>No Data Found !!</li>
              </ol>
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

<script>

$(function() {
    getData();
});

function getData() {
    var json = new Object();
    json.URLCategoryID = '23';

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
            loadData( rc.return_data);
            break;
            default:
            alert(rc.Page_key);
        }
    } 
    else {
        alert(rc.return_data);
    }
}

function loadData(data){
    var div_content='';
    data.forEach(function (params) {
        div_content += '<li><a href="'+params['URL']+'" target="_blank" title="CLICK TO SEE CONTENT">'+params['Title']+'</a></li>';
    });
    $('#div_content').empty();
    $('#div_content').append(div_content);
}

</script>