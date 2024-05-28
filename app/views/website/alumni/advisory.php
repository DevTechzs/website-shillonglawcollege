<?php
$title = "Advisory Committee";
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
              <a href="alumni-conclave" class="w3-bar-item w3-button">Alumini Conclave</a>
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
            <h1 style="text-align:center;">SLCAA Committee</h1>

            <div class="space"></div>

            <p><i>
                The Shillong Law College Alumni Committee shall consist of Law graduates or, more broadly,
                of former students (alumni). The main purposes of the Shillong Law College Alumni Association
                are to support a network of former law graduate who will in turn, help to raise the profile of
                the College. Its main aims to promote,maintained and preserved friendship among all alumni who
                had successfully completed their LL. B degree from the Shillong Law College. It also aims to
                arrange periodic get together of its members with a view to promote social, cultural and sports
                activities among them. It shall also render assistance to students of the Shillong Law College
                through scholarships and awards.
              </i></p>

               Patron – in – chief : <b> Ex- Justice Shri. S.R. Sen </b> <br />
               <h5>Advisory Committees</h5> 
            <table class="table"> 
              <tbody>
              
                <tr>
                  <td></td>
                  <td>Shri. Subashish Chakraworty</td>
                  <td>President</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Smti. Anuradha Paul </td>
                  <td>Vice – President </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Shri. M. Farid Quareshi</td>
                  <td>Secretary</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Shri. Lary K. Swet</td>
                  <td>Joint Secretary</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Shri. Keith Kharmawphlang</td>
                  <td>Cultural Secretary</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Smti. Tshering Yangi </td>
                  <td>Treasurer</td>
                </tr>
              </tbody>
            </table>
            <br />

           <h5> General Executive Members  </h5>
              <ol type="1">
              <li>1. Shri. Heletson Nongkhlaw</li> 
                  <li>2. Shri. H. R. Nath </li> 
                  <li>3. Shri. T.J. Ahmed</li> 
                  <li>4. Shri. C. Ksoo</li>  
                  <li>5. Shri. R. Singh</li>  
                  <li>6. Smti. Nelson Kharbani </li> 
                  <li>7. Shri. D.K. Acharjee</li> 
                  <li>8. Shri. P.K. Bora (Nominated) </li>  
                  <li>9. Shri. R. Nath(Nominated)</li> 
              </ol> 

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