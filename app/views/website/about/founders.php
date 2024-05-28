<?php
$title = "Founders";
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

.pmimg img 
{
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

.managementimg img, p {
  margin: 10px auto;
  display: block;
  width: 100%;
  height: auto;
  border-radius: 5px;
  border: 0px solid !important;
}

.managementimg p {
  color: #716f6f;
  text-align: justify;
  font-size: 14px;
}

a.w3-bar-item.w3-button.active {
  color: #fff;
  background: goldenrod;
}

</style>

<div id="wrapper" class="container">
  <div id="content">
    
    <div class="space"></div>

    <div class="">
      <div class="row">

        <div class="col-sm-3">
          <div class="row">

            <div class="col-sm-12">
              <div id="side-menu">
                <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                  <h4>About Us</h4>
                  <a href="principal-message" class="w3-bar-item w3-button">Principal Message </a>
                  <a href="founders" class="w3-bar-item w3-button active">Founders</a>
                  <a href="history" class="w3-bar-item w3-button">History</a>
                  <a href="governing-body" class="w3-bar-item w3-button">Management</a>
                  <a href="college-profile" class="w3-bar-item w3-button">Profile of the College</a>
                  <a href="vision" class="w3-bar-item w3-button">Vision, Mission and Goals</a>
                  <a href="anthemflagemblem" class="w3-bar-item w3-button">College Anthem, Emblem and Flag</a>
                </div>
              </div>
              <br>
            </div>

            <div class="col-sm-12">
              <img src="assets/images/founders.jpg" width="241" height="119" />
            </div>

          </div>
        </div>

        <div class="col-sm-9">
          <div class="row">  
            <div class="col-sm-12">
              <div class="welcome">
                <h1 style="text-align:center;">Founders</h1>
                
                <div class="adm-bx mt-3">
                  <a class="btn-home" href="file?type=documents&name=ab_ma.pdf" target="_blank" title="CLICK TO SEE CONTENT">Memorandum & Articles of College Association</a>
                </div>
                
                
                <table class="table tbl-founders">
                  <tbody>
                    <tr>
                      <td></td>
                      <td> Late Lokeshwar Sharma</td>
                      <td> a scholar, an able administrator and educationist </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Late Bhobesh Chandra Barua</td>
                      <td>the then Advocate General of Assam</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Late Suresh Chandra Rajkhowa</td>
                      <td> the then D.P.I of Assam </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> Late Maham Singh</td>
                      <td> Advocate and former Minister, Assam </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> Late Aron Alley</td>
                      <td> Advocate and former Minister of Assam </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Late Dhirendra Nath Dutta</td>
                      <td> Advocate and latter Principal </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Late J.N.Deb Choudhury</td>
                      <td> Advocate </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> Late Hasibuddin Ahmed</td>
                      <td> Advocate and latter Principal</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> Late Nripendra Mohan Palit</td>
                      <td> Advocate</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> Late Prabin Kumar Choudhury</td>
                      <td> Editor of the then The Frontier Times</td>
                    </tr>
                  </tbody>
                </table>
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