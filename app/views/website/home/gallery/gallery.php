<?php
$title = "Gallery - Workshop";
include_once($_SESSION['header']);
?>

<div id="wrapper" class="container">
  <div id="content">

    <div class="row">

      <h1 style="text-align:center;">Gallery - Workshop</h1>

      <div class="col-sm-12" style="margin-left:22px;">
        <div id="gallery">
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
          <a href="assets/images/1.jpg" role="tooltip" data-microtip-position="bottom" aria-label="Latitude: -NA-  Longitude: -NA-">
            <img alt="img1" src="assets/images/1.jpg" />
          </a>
          <a href="assets/images/2.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img2">
            <img alt="img2" src="assets/images/2.jpg" />
          </a>
          <a href="assets/images/3.jpg" role="tooltip" data-microtip-position="bottom" aria-label="img3">
            <img alt="img2" src="assets/images/3.jpg" />
          </a>
        </div>
      </div>

    </div>

    <div class="space"></div>

  </div>
</div>

<?php include_once($_SESSION['footer']); ?>

<script>

  lightGallery(document.getElementById('gallery'),
  {
    plugins: [lgThumbnail],
    licenseKey: 'your_license_key',
    speed: 222,
  });

  // $('#lightgallery').lightGallery(
  // {
  //     loop: false,
  //     thumbnail: true,
  //     controls: true,
  //     rotateLeft: false,
  //     rotateRight: true,
  //     flipHorizontal: true,
  //     flipVertical: true,
  //     share: false,
  //     zoom: true,
  //     fullScreen: true,
  //     autoplayControls: true,
  //     autoplay: false,
  //     download: true,
  //     closable: true
  // });

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
        div_gallery+='<div class="welcome"><div class="btn-welcm"><a href="#" target="_blank">View Images</a></div></div>';
        div_gallery+='<h6 style="color: #a50133;">'+item['Title']+'</h6>';
        div_gallery+='</div>';
    });

    $('#div_gallery').empty();
    $('#div_gallery').append(div_gallery);
  }
</script>