<?php
$title = "Members of the Alumini";
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

  table{
    width:100% !important;
  }
  table thead tr th:nth-child(1), table tbody tr td:nth-child(1){
    vertical-align:middle !important; 
    width:7% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(2), table tbody tr td:nth-child(2){
    vertical-align:middle !important; 
    width:13% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(3), table tbody tr td:nth-child(3){
    vertical-align:middle !important; 
    width:25% !important; 
    text-align:left !important;
  }
  table thead tr th:nth-child(4), table tbody tr td:nth-child(4){
    vertical-align:middle !important; 
    width:20% !important; 
    text-align:left !important;
  }
  table thead tr th:nth-child(5), table tbody tr td:nth-child(5){
    vertical-align:middle !important; 
    width:15% !important; 
    text-align:center !important;
  }
  table thead tr th:nth-child(6), table tbody tr td:nth-child(6){
    vertical-align:middle !important; 
    width:20% !important; 
    text-align:left !important;
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
              <!-- <a href="alumni-member" class="w3-bar-item w3-button active">Members of the Alumini</a> -->
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
            <h1 style="text-align:center;">Members of the Alumini</h1>

            <div class="space"></div>

            <div class="row" style="overflow:auto;">
              <div class="col-sm-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sl. No.</th>
                      <th>Batch</th>
                      <th>Name</th>
                      <th>Present Occupation</th>
                      <th>Contact Number</th>
                      <th>Email ID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td></td><td>1997</td><td>Deba K N Kharshiing</td><td>Vice Principal, Shillong Law College</td><td>+919774067663</td><td>dknkharshhing@gmail.com</td></tr>
                    <tr><td></td><td>1999</td><td>Mrinalini Kharshiing</td><td>Vice Principal, Shillong Law College</td><td>+919436700392</td><td>mrinalinikharshiing@gmail.com</td></tr>
                    <tr><td></td><td>2001</td><td>Evalarisha Rynjah</td><td>Advocate (Special Public Prosecutor POSCO East Khas Hills, Shillong)</td><td>+918132004875</td><td>evalarisharynjah@gmail.com</td></tr>
                    <tr><td></td><td>2001</td><td>Kamal Kumar Gupta</td><td>Advocate</td><td>+917085921167</td><td>kamalkumargupta837@gmail.com</td></tr>
                    <tr><td></td><td>2003</td><td>Eusebia Kurbah</td><td>Practising Advocate</td><td>+918974281354</td><td>eusebiakurbah@gmail.com</td></tr>
                    <tr><td></td><td>2003</td><td>Samta Jain</td><td>Home Maker</td><td>+919740069859</td><td>samtajain5@gmail.com</td></tr>
                    <tr><td></td><td>2003</td><td>Sudeep Rana</td><td>Lawyer</td><td>+917005092971</td><td>sudeeprana101281@gmail.com</td></tr>
                    <tr><td></td><td>2004</td><td>Zarine Wankhar</td><td>Practising Advocate</td><td>+918014816880</td><td>zwankhar11@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Darishisha Jyrwa</td><td>Assistant Professor</td><td>+918794235585</td><td>darishishanoel09@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Anil Sharma</td><td>Advocate</td><td>+919383307567</td><td>ayanbabz14@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Miss Wanrishisha Dkhar</td><td>Teacher, Assistant Professor</td><td>+918794009656</td><td>wanri02@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Philip Khrawbok Shati</td><td>Advocate</td><td>+919856381773</td><td>philip.shati@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Parveen Choudhury Ahmed</td><td>Advocate</td><td>+919774491524</td><td>parveenahmed12@gmail.com</td></tr>
                    <tr><td></td><td>2006</td><td>Shankar Pandey</td><td>Lawyer</td><td>+919612136127</td><td>shankarpandey007@gmail.com</td></tr>
                    <tr><td></td><td>2007</td><td>Karen Jane Dohling</td><td>Advocate</td><td>+918731833510</td><td>karendohling785@gmail.com</td></tr>
                    <tr><td></td><td>2008</td><td>Brightstarwell Marbaniang</td><td>Assistant Professor</td><td>+917005685069</td><td>brightaca1980@gmail.com</td></tr>
                    <tr><td></td><td>2009</td><td>Miss. Teirirupa Kharnarry</td><td>Practicing Lawyer</td><td>+919863737045</td><td>kharnarry.teiri @gmail.com</td></tr>
                    <tr><td></td><td>2009</td><td>Anna Patricia Kharsahnoh</td><td>Practising Lawyer</td><td>+917005018042</td><td>annapatricia333@gmail.com</td></tr>
                    <tr><td></td><td>2009</td><td>Iaishahlang Kongwang</td><td>Advocate</td><td>+919863233565</td><td>sanshah5665@gmail.com</td></tr>
                    <tr><td></td><td>2009</td><td>Aiom S Kharbuli</td><td>Advocate</td><td>+919402502474</td><td>aiombhakharbuli@gmail.com</td></tr>
                    <tr><td></td><td>2010</td><td>Mary Rose Gashnga</td><td>Practising</td><td>+918731838982</td><td>marylamin38@gmail.com</td></tr>
                    <tr><td></td><td>2011</td><td>Manju Monica Kharkongor</td><td>Practising Advocate</td><td>+919862245277</td><td>monicakharkongoro4@gmail.com</td></tr>
                    <tr><td></td><td>2011</td><td>Ilawanda Shisha Lyngdoh</td><td>Legal Practitioner</td><td>+919774658937</td><td>ila.lyngdoh05@gmail.com</td></tr>
                    <tr><td></td><td>2011</td><td>Sutopa Achsrjee</td><td>Advocate</td><td>+917005365833</td><td>sutopaacharjee@gmail.com</td></tr>
                    <tr><td></td><td>2012</td><td>Doreen Jarain</td><td>Lawyer</td><td>+919378184842</td><td>jaraindoreen@gmail.com</td></tr>
                    <tr><td></td><td>2012</td><td>Poujiabthai Gangmeih</td><td>Visiting Faculty, MIT University, Shillong</td><td>+919774401142</td><td>ziab.thai@gmail.com</td></tr>
                    <tr><td></td><td>2012</td><td>Taja Garam</td><td>Advocate</td><td>+919612101588</td><td>tajagram @gmail.com</td></tr>
                    <tr><td></td><td>2012</td><td>Debo Goswami Pyngrope</td><td>Advocate</td><td>+918575555719</td><td>debo.pyngrope@gmail.com</td></tr>
                    <tr><td></td><td>2013</td><td>Pynshailang Lyngdoh</td><td>Advocate</td><td>+918575236679</td><td>pyn23lyngdoh@gmail.com</td></tr>
                    <tr><td></td><td>2013</td><td>Lasandor Jury Lyngdoh Nongpiur</td><td>Practicing Advocate</td><td>+919774177952</td><td>nongpiurlasandor3@gmail.com</td></tr>
                    <tr><td></td><td>2013</td><td>Sunil Thapa</td><td>Lawyer</td><td>+918794543634</td><td>neilthapa01@gmail.com</td></tr>
                    <tr><td></td><td>2013</td><td>Rahabul Hoque Alice</td><td>Lawyer</td><td>+919485170902</td><td>rahabul123@gmail.com</td></tr>
                    <tr><td></td><td>2013</td><td>Benjamin Zirthansanga</td><td>Advocate</td><td>+919774861451</td><td>benjaminboitlung726@gmail.com</td></tr>
                    <tr><td></td><td>2014</td><td>Sdang I Daka Laloo</td><td>Lawyer</td><td>+919436797378</td><td>sdangdakalaloo@gmail.com</td></tr>
                    <tr><td></td><td>2014</td><td>Iwanbanroi Warjri</td><td>Advocate</td><td>+917085138739</td><td>iwanwarjri@gmail.com</td></tr>
                    <tr><td></td><td>2014</td><td>Karinia Syiem Thangkhiew</td><td>Advocate</td><td>+916033091574</td><td>karinia.ts@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Ibadondor Vanessa Synnah</td><td>Advocate</td><td>+919774191194</td><td>ibadondor.v.synnah@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Philisita Tariang</td><td>Practicing Lawyer</td><td>+918259843239</td><td>philisitatariang18081994@gmail</td></tr>
                    <tr><td></td><td>2015</td><td>Angelina Dkhar</td><td>Advocate</td><td>+918258824570</td><td>angelinadkhar94@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Melyndis Marwein</td><td>Practising Advocate</td><td>+918794017053</td><td>melyndismarwein@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Miss. Mebadari Bina</td><td>Advocate</td><td>+918794208351</td><td>mebadaribina22@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Evageane M Lamare</td><td>Practitioner</td><td>+917005598874</td><td>emelamare@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Ebiangmidaka Slong</td><td>Advocate</td><td>+919774668088</td><td>ebiangmidakaslong7229@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Cassandra L. Thabah</td><td>Advocate</td><td>+916909908211</td><td>cassandramanda16@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Anthiya Pertin</td><td>Practice</td><td>+919362786487</td><td>tintepertin@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Eusebius Khongthohrem</td><td>Advocate</td><td>+919366675924</td><td>eusebiuskhongthohrem163@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Vaishali Sunar</td><td>Advocate</td><td>+918974054635</td><td>vaishalisunar0301@gmail.com</td></tr>
                    <tr><td></td><td>2015</td><td>Garnet Sutnga</td><td>Social Worker</td><td>+918787805219</td><td>garnetsutnga6@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Eric Sohtun</td><td>Self Employed</td><td>+919366473100</td><td>ericshotun.1988@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Thangthiankham</td><td>Advocate</td><td>+918575632306</td><td>khamarish@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Kajol Gurung</td><td>Practicing Advocate</td><td>+918794680384</td><td>kaajolgurung24@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Dawanskem Shylla</td><td>No</td><td>+917008388610</td><td>wankemshylla@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Polan Rymbai</td><td>Lummarboh Nongrah Shillong, East Khasi Hills District Meghalaya</td><td>+919774308142</td><td>polanrymbai3@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Hitlar Miah</td><td>Advocate</td><td>+919678044319</td><td>hitlarsarder14@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>P Lalbiaksiama</td><td>Practising</td><td>+919612702965</td><td>biaka0013@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Ankit Choudhary</td><td>Advocate</td><td>+917308678126</td><td>coolstar1099@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Silvester Lyngdoh</td><td>School</td><td>+918730997985</td><td>silvesterlyngdoh@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Karishma Thapa</td><td>Lawyer</td><td>+919485398734</td><td>lilsthapa42@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Dabiangky Dkhar Fancon</td><td>Advocate</td><td>+919362689649</td><td>dapzfancon15@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Seiminlal Haokip</td><td>Advocate</td><td>+919089520822</td><td>haokipminlal05@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Luke Gangmeih</td><td>SSB</td><td>+918794688979</td><td>lgangmeih@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Sumarlin Malngiang</td><td>Advocate</td><td>+918258038506</td><td>sumarlin8258038506@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Grangchira Ch Marak</td><td>Advocate</td><td>+918794657039</td><td>grangchira@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Adaiah Jachra G Momin</td><td>Lawyer</td><td>+917308776757</td><td>gabiladaiah@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Bomge Hai</td><td>Social Worker</td><td>+919582372441</td><td>haibomge@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Jingjang Ch Marak</td><td>Practicing In Tura Bar Association</td><td>+917399220408</td><td>chmarak1994@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>R Ivancecil L Nonglait</td><td>Advocate</td><td>+918575137438</td><td>ivancecil.lnonglait@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Albert Jala</td><td>Advocate</td><td>+919366978597</td><td>albertjala15@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Chimchim N Marak</td><td>DTP Operator Cum Translator At Shillong Times Office</td><td>+919615180031</td><td>chimsnmarak@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Christopher D Sangma</td><td>Lawyer</td><td>+919863422630</td><td>chrizz.chronicle93@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Sengan Tangrak D Sangma</td><td>Advocate</td><td>+919366818598</td><td>sengantangrak@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Thejanguno Pusa</td><td>Practicing</td><td>+918729990300</td><td>thejapusa@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Chenamia Sangma</td><td>Practicing Advocate</td><td>+917630821106</td><td>sangmachenamia@gmail.com</td></tr>
                    <tr><td></td><td>2016</td><td>Monica Thakuri</td><td>Student</td><td>+919862628476</td><td>monicathakuri18@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Bansaralin Marngar</td><td>Practicing Lawyer</td><td>+917640934217</td><td>saralinmarngar33463@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sengrand T Sangma</td><td>Practising Lawyer</td><td>+917005196066</td><td>sengrandsangma220@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Stefinia Marboh</td><td>Practice</td><td>+917638941822</td><td>stefimarboh123@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Silre R Marak</td><td>Practicing Lawyer</td><td>+919077059685</td><td>silrerangsa@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Heimonmitre Pasi</td><td>Student</td><td>+917005139744</td><td>hpazzy220@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sunny Verma</td><td>Advocate</td><td>+917640056469</td><td>verma24sunny@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sumar Selon Ki Lamin Khonglah</td><td>Advocate</td><td>+918794178094</td><td>selon97.146@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sushmita Rana</td><td>Practicing</td><td>+918974885668</td><td>sushmitarana19940@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Nogame R Marak</td><td>Unemployed</td><td>+919383016619</td><td>nogamemarak41@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Vanlalruata Sailo</td><td>Advocate</td><td>+919774276942</td><td>vlrsailo14@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Kindiacheang Ch Marak</td><td>At Present No Job In Hand</td><td>+918131003160</td><td>chiangmarak321@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Usha Klein</td><td>Advocate</td><td>+919612610239</td><td>ushaklein28021996@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Risuk Shidalin Maiong</td><td>Practising Lawyer</td><td>+918787610645</td><td>risukmaiong@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Neeraj Thapa</td><td>Advocate</td><td>+919856411520</td><td>guyman433@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Joseph Nongkynrih</td><td>Practising</td><td>+919774276190</td><td>josephnongkynrih06@gmail</td></tr>
                    <tr><td></td><td>2017</td><td>Larihun Kharbyngar</td><td>Student</td><td>+917085921865</td><td>larihunkharbyngar123@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Laridame Nongrem</td><td>Housewife</td><td>+919101390184</td><td>larinongrem@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Kyntulang I Laloo</td><td>Lawyer</td><td>+917005670085</td><td>kyntudeslaloo87@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Wanpyntngen Mary Lyngdoh Nongbri</td><td>Lawyer</td><td>+918729949148</td><td>wanpyntngen15@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Chengku Ch Marak</td><td>N/A</td><td>+918837221151</td><td>chengkumarak96@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Leolee Koch</td><td>Advocate</td><td>+918131961577</td><td>kotchlee@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Jencyna Lhuid</td><td>Advocate</td><td>+919856181899</td><td>lhuidjencyna@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Daphishisha Janong</td><td>Advocate</td><td>+918794431048</td><td>daphijanong@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Yoowanphi Lamin</td><td>Practicing Lawyer</td><td>+918837341026</td><td>yoowanphilamin6@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Tanya A Sangma</td><td>Advocate</td><td>+917629893796</td><td>tanyasangma7@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Tomglesbi K Sangma</td><td>Advocat</td><td>+918731842156</td><td>tomglesbisangma@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Fullmoon Hahshah</td><td>Self-Employed</td><td>+917005724678</td><td>hahshahfllmn@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Jiwalo Apon</td><td>Advocate</td><td>+917628870189</td><td>jiwaloaponforever@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Priyanka Sylliang</td><td>Lawyer</td><td>+918258809040</td><td>sylliangpriyanka@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>F.Lalengmawii</td><td>Lawyer/Advocate</td><td>+917642928782</td><td>arizigneam22@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Wadladkyrpang Lyngdoh Langrin</td><td>Advocate</td><td>+919366513464</td><td>wadladlangrin@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Bakmenlang Laso</td><td>Lawyer</td><td>+916909213710</td><td>bakmenlanglaso@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Baniarisa Kharshiing</td><td>None</td><td>+917005511473</td><td>baniarisakharshiing@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Banraplang Mawtyllup</td><td>Government Services</td><td>+919362780989</td><td>banrapmawtyllup@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Blessme Gashnga</td><td>Lawyer</td><td>+918256942876</td><td>laminblessme@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Baiengskhem S Lyngdoh</td><td>Business</td><td>+919436103965</td><td>bslyngdoh@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Rainibala R Marak</td><td>Lawyer</td><td>+919615929127</td><td>rainimarak2016@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Ibapynhunshisha Nongrem</td><td>Practice</td><td>+919402367621</td><td>ibapynhunshishanongrem170996@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Gamatchi Ch Marak</td><td>Advocate</td><td>+918256922642</td><td>gamuuchimarak65@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sp Thaongaolou</td><td>Internship At Imphal High Court Manipur</td><td>+919366397073</td><td>thaoprincenew@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Tengchina Ch Sangma</td><td>Advocate</td><td>+918794706955</td><td>sangmatengchinach@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Merina S Malsom</td><td>None</td><td>+918258025279</td><td>mareenasunar1@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Angela Indira Hrangkhawl</td><td>Advocate</td><td>+918730933528</td><td>angelahrangkhawl19@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Taw Nega</td><td>Practicing Lawyer</td><td>+917085915476</td><td>tawnega5@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Ferrybert Dolloi</td><td>Practicing Advocate</td><td>+917642943842</td><td>dolloiferrybert@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Banrisuk Nongrum</td><td>Practising</td><td>+918794818784</td><td>banrisuknongrum@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Premlata Yadav</td><td>Advocate</td><td>+919077360256</td><td>premchoti1994@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Ranjit Gupta</td><td>Practicing As Junior</td><td>+918794159305</td><td>guptaranjit96@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Lanadupha Kharkogor</td><td>Advocate</td><td>+916033185769</td><td>lanakharkongor4@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Baiengskhem S Lyngdoh</td><td>Student</td><td>+919436103965</td><td>skhemslyngdoh@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Larihun Marbaniang</td><td>Lawyer</td><td>+918798181845</td><td>larimarbaniang5@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Sabnam Mattu</td><td>Not Applicable</td><td>+918974204430</td><td>sabnammattu@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Pynhunlang Kharbuli</td><td>Self Employed</td><td>+919612427613</td><td>kpynhunlang@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Babethunlang Wankhar</td><td>Practicing Lawyer</td><td>+918415045838</td><td>babetwankhar123@gmail.com</td></tr>
                    <tr><td></td><td>2017</td><td>Ialamdapha War</td><td>Lawyer</td><td>+919615421962</td><td>yalam.war1995@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Trilok Raj Gheavring</td><td>None</td><td>+919774247669</td><td>tri.gheavring@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Lakyntiew Paliar</td><td>Practicing Law</td><td>+918014367087</td><td>lpaliar24@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Ajay Singhi</td><td>Advocate</td><td>+919402460472</td><td>jsinghi526@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Sreejit Purkayastha</td><td>Lawyer</td><td>+916009002152</td><td>sree.purkayastha7@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Ardentson Syngkon</td><td>Self-Employed</td><td>+919612290000</td><td>syngkonardent7@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Evansius Swer</td><td>Self Occupation</td><td>+919615886842</td><td>evansius2552@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Arlambud Papang</td><td>Practicing Law</td><td>+919436486838</td><td>arlambud@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Vishal Kumar</td><td>Practicing Lawyer</td><td>+918197966240</td><td>vishalkumar1994.vk@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Elysha Nongbet</td><td>Lawyer</td><td>+919378189929</td><td>elyshanongbet18@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Elpinash S Marak</td><td>Lawyer</td><td>+916009338763</td><td>elpinashsmarak1250@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Rasima Begum</td><td>Practicing Lawyer</td><td>+917640943693</td><td>rasimabegum506@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Mr. Mawshanbor Ryntathiang</td><td>Lawyer/Advocate</td><td>+918787726277</td><td>mawshanbor.aimit16.074@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Silbani R Marak</td><td>Advocate</td><td>+917085715967</td><td>maraksilbani@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Cecillia M Sangma</td><td>Polo Club</td><td>+918787754171</td><td>ellongsangma@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Ibanylla Nongtdu</td><td>Nothing</td><td>+919077371555</td><td>ibanylla</td></tr>
                    <tr><td></td><td>2018</td><td>Raynold Nongdhar</td><td>Advocate</td><td>+919402348351</td><td>raynoldnongdhar456@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Preety Karki Thapa</td><td>Lawyer</td><td>+917005183446</td><td>preetykarkithapa@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Ibahunlang Pyrtuh</td><td>Self Employed</td><td>+919366181720</td><td>pyrtuhrymbai@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Sanimanbha Siangshai</td><td>Practising</td><td>+919856391996</td><td>sanimanbhasiangshai284@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Preciousful Lyngdoh</td><td>Nil</td><td>+918794813514</td><td>preciousful83@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Darikupar Pathaw</td><td>Advocate</td><td>+916909114369</td><td>darikuparpathaw122@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Poisalan Shylla</td><td>Nil</td><td>+917085553194</td><td>poisalanshylla@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Baniarap Snaitang</td><td>Advocate</td><td>+919615302632</td><td>bansnaitang@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Lubsentbirth N Arengh</td><td>Student</td><td>+918257984565</td><td>lubsentbirth05@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Sengchira D Sangma</td><td>Practicing Advocate</td><td>+918974293631</td><td>sengchira.dio@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Debora Jarain</td><td>Lawyer</td><td>+919862753141</td><td>deborajarain828@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Soumi Saha(Dey)</td><td>Housewife</td><td>+919615823479</td><td>soumis005@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Lashaibansuk.Nonglang</td><td>Advocate</td><td>+919366917811</td><td>lashaibansuknonglang4@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Nehminthang Haokip</td><td>Llm</td><td>+917005260940</td><td>nehminthanghaokip90@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Takum Mibang</td><td>Practice</td><td>+917085465922</td><td>takummibang8258860042@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Jordan Kennedy Pariat</td><td>Advocate</td><td>+918413032044</td><td>jpariat09@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Pynshlurbaitki Thubru</td><td>Lawyer/Advocate</td><td>+918731096345</td><td>pynshlurt@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Peacefully Mawaiuh</td><td>Student</td><td>+919774586290</td><td>peacefully.mawniuh@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Prerana Dey</td><td>Lawyer</td><td>+919366359941</td><td>preranadey1@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Baltina Rymbai</td><td>Practising As An Advocate</td><td>+918258096102</td><td>baltinarymbai16@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Dada Pangu</td><td>Practising Lawyer</td><td>+917629897185</td><td>dadapangu17@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Ilawanpynshai Muktieh</td><td>Practice</td><td>+916009541958</td><td>muktiehreechell@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Nabalaaisbunshisha Khyriem</td><td>Lawyer</td><td>+918240695549</td><td>nabalaaikhyriem@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Deinisir Nongtdu</td><td>Business</td><td>+918259858217</td><td>deinisirn@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Queency Jana</td><td>Advocate</td><td>+918794346488</td><td>janaqueen1397@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Baphinshngain Lamare</td><td>Advocate</td><td>+919366544102</td><td>baphinshngain20lamare@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Sylvia Lalrinmawii</td><td>Unemployed</td><td>+916033203086</td><td>shmar28097@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Olik Pabin</td><td>Practising In Meghalaya High Court</td><td>+919774212404</td><td>shillongs111@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Mayuca N. Maiong</td><td>Advocate</td><td>+918794364335</td><td>mayucamaiong5@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Balalumbor Shangrit</td><td>Junior Advocate</td><td>+917085452875</td><td>balalumborshangrit@gmail.com</td></tr>
                    <tr><td></td><td>2018</td><td>Mebankyntiew Khriam</td><td>Unemployed</td><td>+918258084727</td><td>mmebankyntiewkhriam@gmail.com</td></tr>

                  </tbody>
                </table>
              </div>
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