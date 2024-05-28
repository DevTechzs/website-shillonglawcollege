<?php
$title = "Gallery - Workshop";
include_once($_SESSION['header']);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

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

    .clab img {
        width: inherit;
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


    @media only screen and (min-width:992px) {

        /*.clab {
            display: flex;
            justify-content: center;
            align-items: center;
        }*/
    }

    .clab img{
        width: 100% !important;
        margin-bottom:13px !important;
    }
</style>

<div id="wrapper" class="container">

    <div id="content">

        <div class="">

            <div class="row">

                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Gallery</h4>
                            <a href="gallery-workshop" class="w3-bar-item w3-button active">Workshop</a>
                            <a href="gallery-seminar" class="w3-bar-item w3-button">Seminar</a>
                            <a href="gallery-conference" class="w3-bar-item w3-button">Conference (National & International)</a>
                            <a href="gallery-eca" class="w3-bar-item w3-button">Extra-Curriculum Activities</a>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-sm-9">

                    <div class="row">
                        <h1 style="text-align:center;">Gallery - Workshop</h1>

                        <div class="clab row" id="div_gallery">
                            <div class="col-sm-2">
                                <a href="assets/images/proj/boyscomm.jpg" target="_blank"><img src="assets/images/proj/boyscomm.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-4 mb-5">
                                <div class="welcome"><div class="btn-welcm"><a href="gallery-images" target="_blank">View Images</a></div></div>
                                <h6 style="color: #a50133;">College Week 2022</h6>
                            </div>
                            <div class="col-sm-2">
                                <a href="assets/images/proj/boyscomm.jpg" target="_blank"><img src="assets/images/proj/boyscomm.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-4 mb-5">
                                <div class="welcome"><div class="btn-welcm"><a href="gallery-images" target="_blank">View Images</a></div></div>
                                <h6 style="color: #a50133;">College Week 2022</h6>
                            </div>
                            <div class="col-sm-2">
                                <a href="assets/images/proj/boyscomm.jpg" target="gallery-images"><img src="assets/images/proj/boyscomm.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-4 mb-5">
                                <div class="welcome"><div class="btn-welcm"><a href="gallery-images" target="_blank">View Images</a></div></div>
                                <h6 style="color: #a50133;">College Week 2022</h6>
                            </div>
                            <div class="col-sm-2">
                                <a href="assets/images/proj/boyscomm.jpg" target="_blank"><img src="assets/images/proj/boyscomm.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-4 mb-5">
                                <div class="welcome"><div class="btn-welcm"><a href="gallery-images" target="_blank">View Images</a></div></div>
                                <h6 style="color: #a50133;">College Week 2022</h6>
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
    json.TypeID = '1';

    let obj = {};
    obj.Module = "Admin";
    obj.Page_key = "getTypeImages";
    obj.JSON = json;
    TransportCall(obj);
  }

  function onSuccess(rc) 
  {
    //console.log(rc);

    if (rc.return_code) {
      switch (rc.Page_key) {
        case "getTypeImages":
          var data = rc.return_data;
          if(data.length>0)
            loaddata(data);
          break;
          default:
            alert(rc.Page_key);
      }
    } 
    else {
      alert(rc.return_data);
    }
  }

  function loaddata(data)
  {
    console.log(data);
    var div_gallery='';
    data.forEach(function (item) {
        div_gallery+='<div class="col-sm-2">';
        div_gallery+='<a href="assets/images/proj/boyscomm.jpg" target="_blank"><img src="../app/data/documents/'+item['Image']+'" alt=""></a>';
        div_gallery+='</div>';
        div_gallery+='<div class="col-sm-4 mb-5">';
        div_gallery+='<div class="welcome"><div class="btn-welcm"><a href="gallery-images" target="_blank">View Images</a></div></div>';
        div_gallery+='<h6 style="color: #a50133;">'+item['Title']+'</h6>';
        div_gallery+='</div>';
    });

    $('#div_gallery').empty();
    $('#div_gallery').append(div_gallery);
  }
</script>