<?php
$title = "Faculty";
include_once('inc/header.php');
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
        list-style: decimal;
        margin: 10px 0px 10px 20px;
    }

    .managementimg img,
    p {
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

    .row.ntstaff img {
        height: 220px;
        width: 190px;
        margin: 0 auto;
        display: block;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 50%);
        transition: 0.3s;
        padding: 15px 15px;
        text-align: center;
        background: #fff;
        color: #000;
    }

    a.btn.btn-warning {
        margin: 9px 0;
    }

    #more {
        display: none;
    }


    button#myBtn {
        display: block;
        margin: 10px auto;
        background: #84012a;
        color: #fff;
        border-color: #84012a;
        padding: 5px 10px;
        border-radius: 5px;
    }

    @media only screen and (max-width:991px) {
        .col-sm-4.card {
            margin: 15px 1%;
        }
    }

    @media only screen and (min-width:992px) {
        .col-sm-4.card {
            margin: 15px 1%;
            max-width: 31.333333%;
        }

        /*.row.ntstaff img {
    width: 100%;
    height: 200px;
    margin: 15px 0;
}*/

        .row {
            margin-right: 0px !important;
            margin-left: 0px !important;
        }
    }
</style>

<div id="wrapper" class="container">

    <div id="content">

        <div class="space"></div>

        <!--Welcome Part Start-->
        <div class="container">
            <div class="row">

                <!--Welcome Start-->
                <!--<div class="col-sm-3">
                   <div id="side-menu">
                     <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                           <h4>Administration</h4>
                           <a href="https://shillong.mitdevelop.com/governing-body" class="w3-bar-item w3-button">Governing Body </a>
                           <a href="https://shillong.mitdevelop.com/principals" class="w3-bar-item w3-button">Principal</a>
                           <div class="w3-dropdown-hover">
                            <button class="w3-button">Staff
                               <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="w3-dropdown-content w3-bar-block">
                              <a href="https://shillong.mitdevelop.com/teachingstafflaw" class="w3-bar-item w3-button active">Teaching Staff (Law)</a>
                              <a href="https://shillong.mitdevelop.com/teachingstaffnonlaw" class="w3-bar-item w3-button">Teaching Staff (Non-Law)</a>
                              
                              <a href="https://shillong.mitdevelop.com/nonteachingstaff" class="w3-bar-item w3-button">Administrative Staff</a>
                            </div>
                          </div> 
                           
 
                   </div>
                  </div>

                </div>-->

                <div class="col-sm-12">

                    <div class="welcome">
                        <h1 style="text-align:center;">TEACHING FACULTY OF THE COLLEGE</h1>

                        <div class="space"></div>

                        <div class="row ntstaff">
                            <div class="col-sm-4 card" data-city="one">
                                <img src="assets/images/Tstaff/Sharif.jpg" alt=""><br>
                                <b>Dr. Sharif Uddin</b><br>
                                <i>Associate Professor</i><br><br>
                                <b>Qualification</b><br>
                                LL.M, Aligarh Muslim University; PhD North Bengal University.<br>
                                <b>Area of Interest</b><br>
                                Environmental Law.<br>
                                <b>Teaching Experience </b><br>
                                17 years<br>

                                <span id="dots"></span>
                                <span id="more" style="display: none;">
                                    <b>Credential currently held/ trained </b><br>
                                    Workshop on Environmental Law Teaching and Research, National University of Juridical Science Kolkata; Regional Workshop on The Functioning of Parliamentary Democracy in North Eastern region, Shillong; State Level Workshop on Customary Laws of Khasis of Meghalaya, Guahati High Court, Guahati; Trained Programme on Intellectual Property Rights Education, Aligarh Muslim University, Aligarh; National Seminar on Micro- Finance Revolution, Dept of Management, NEHU;
                                    <br>
                                    <b>Paper Presented /Published</b>
                                    Books on Water Pollution and Law; Human Rights to Environment in India; Meghalaya Land and Revenue Regulations with Allied Laws; Research Papers :- 6; Book chapters :- 4 ; Seminar proceedings :- 2
                                </span>

                                <button onclick="readMore('one')" id="myBtn">Read more</button>


                            </div>

                            <div class="col-sm-4 card">
                                <img src="assets/images/Tstaff/Deba.jpg" alt=""><br>
                                <b>Deba K. N. Kharshiing</b><br>
                                <i>Asst. Professor </i><br><br>
                                <b>Qualification</b><br>
                                LL.M, Pune University.<br>
                                <b>Area of Interest</b><br>
                                Commercial Law<br>
                                <b>Teaching Experience </b><br>
                                19 years<br>
                                <b>Credential currently held/ trained </b><br>
                                Workshop on Humanitarian and Refugee Law, I.C.R.C.

                                <br>
                            </div>

                            <div class="col-sm-4 card" data-city="three">
                                <img src="assets/images/Tstaff/Kharshiing.jpg" alt=""><br>
                                <b>Dr. M. Kharshiing</b> <br>
                                <i>Asst. Professor</i> <br><br>
                                <b>Qualification </b><br>
                                LL.M, PhD Guahati Unversity.<br>
                                <b>Area of Interest</b><br>
                                Constitutional Law, Administrative Law.<br>
                                <b>Teaching Experience </b><br>
                                11 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Mediator training, Refresher Course, Orientation Course UDHR, Summer School in Research Methodology NEHU, Stress management NEHU, Human Rights NEPA. Human Rights &amp; Refugee Law, NEPA; Refugee Laws UNHCR.
                                    <br>
                                    <b>Publication / Paper Presented</b><br>
                                    Published Book Chapter on Comparative Public Law – S. Rajkhowa &amp; S. Deka- Open Government 7 Accountability in RTI Regime; 5 nos of presentation in Meghalaya Judicial Academy.
                                </span>

                                <button onclick="readMore('three')" id="myBtn">Read more</button>
                                <br>
                            </div>

                        </div>



                        <div class="row ntstaff">
                            <div class="col-sm-4 card" data-city="four">
                                <img src="assets/images/Tstaff/Daiahunlin.jpg" alt=""><br>
                                <b>Daiahunlin Mawlong</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification </b><br>
                                LL.M Symbiosis Law School, PhD (Pursuing) NEHU.
                                <br>
                                <b>Area of Interest</b><br>
                                Civil; Criminal and Business Law.<br>
                                <b>Teaching Experience </b><br>
                                8 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Mediator, Research Methodology NEHU, Stress management NEHU, Human Rights NEPA, UDHR NEPA. Human Rights &amp; Refugee Law, NEPA; Refugee Laws UNHCR.<br>
                                    <b>Publication / Paper Presented</b><br>
                                    Women’s Right; Consumer Rights; Atrocities of SC/ST Rights; Cyber Crime and its issue. A legal study of slum within Shillong; Agglomeration in context of sustainable development.
                                </span>
                                <br>
                                <button onclick="readMore('four')" id="myBtn">Read more</button>

                            </div>
                            <div class="col-sm-4 card" data-city="five">
                                <img src="assets/images/Tstaff/Celestine.jpg" alt=""><br>
                                <b>Celestine Ksoo</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification</b><br>
                                LL.M Indian Law Institute, New Delhi, NET qualified.<br>
                                <b>Area of Interest</b><br>
                                Criminal Law, Constitutional Law, Environmental Law, Mediation (ADR).<br>
                                <b>Teaching Experience </b><br>
                                5 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Orientation Programme by HRDC NEHU, Faculty in charge of Legal Care and Support Centre, Trained as Mediator by Mediation &amp; Conciliation Project Committee of Supreme Court of India for Mediation Centre of the Meghalaya State Legal Services Authority, Counselling Skills for Street Educators Dept of Social Welfare Govt. of Meghalaya.
                                </span>

                                <button onclick="readMore('five')" id="myBtn">Read more</button>

                            </div>
                            <div class="col-sm-4 card" data-city="six">
                                <img src="assets/images/Tstaff/Darishisha.jpg" alt=""><br>
                                <b>Darishisha Jyrwa</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification</b><br>
                                LL.M, Guahati University.<br>
                                <b>Area of Interest</b><br>
                                Corporate Law.<br>
                                <b>Teaching Experience </b><br>
                                5 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Counselling Skills for streets educators, Short term course in Research Methodology, Programme on Mediation and Concilation, Orientation Programme.
                                </span>
                                <br><br>
                                <button onclick="readMore('six')" id="myBtn">Read more</button>
                            </div>


                        </div>


                        <div class="row ntstaff">
                            <div class="col-sm-4 card" data-city="seven">
                                <img src="assets/images/Tstaff/Ilasara.jpg" alt=""><br>
                                <b>Ilasara D. Kharkongor</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification</b><br>
                                LL.M Amity University, Noida UP.<br>
                                <b>Area of Interest</b><br>
                                Human Rights, International Law, IPC.<br>
                                <b>Teaching Experience </b><br>
                                7 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    IPR in India in collaboration with COLKS, Legal Awareness , Laitrynew Shillong, Consumer Rights making digital marketing fairer.
                                </span>

                                <button onclick="readMore('seven')" id="myBtn">Read more</button><br>
                            </div>

                            <div class="col-sm-4 card">
                                <img src="assets/images/Tstaff/Lakyntiew.jpg" alt=""><br>
                                <b>Lakyntiew N. Khyriem</b><br>
                                <i>Asst. Professor (Contractual)</i><br><br>
                                <b>Qualification</b><br>
                                LL.M Karnataka State Law University.<br>
                                <b>Area of Interest</b><br>
                                Environmental Law, Copyright Law (IPR).<br>
                                <b>Teaching Experience </b><br>
                                5 years<br>
                                <br><br><br>
                            </div>


                            <div class="col-sm-4 card" data-city="nine">
                                <img src="assets/images/Tstaff/Tabris.jpg" alt=""><br>
                                <b>Tabris Jalal Ahmed</b><br>
                                <i>Asst. Professor (Part Time)</i><br><br>
                                <b>Qualification</b><br>
                                MSc. LL.B. North Eastern Hill University<br>
                                <b>Area of Interest</b><br>
                                Muslim Law, Drafting Pleading and Conveyance<br>
                                <b>Teaching Experience </b><br>
                                8 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Practicing Lawyer at the High Court of Meghalaya &amp; District &amp; Sessions Judge for the last 21 years.
                                </span>

                                <button onclick="readMore('nine')" id="myBtn">Read more</button>
                            </div>



                        </div>


                        <div class="row ntstaff">
                            <div class="col-sm-4 card">
                                <img src="assets/images/Tstaff/Lahunlang.jpg" alt=""><br>
                                <b>Lahunlang Kurbah</b><br>
                                <i>Asst. Professor (Part Time)</i><br><br>
                                <b>Qualification</b><br>
                                LL.M (Business Law) Bharati Vidyapeeth Deemed University, Pune.<br>
                                <b>Area of Interest</b><br>
                                Business Law<br>
                                <b>Teaching Experience </b><br>
                                5 years<br>
                                <br><br><br><br>
                            </div>


                            <div class="col-sm-4 card" data-city="eleven">
                                <img src="assets/images/Tstaff/wanrishisha.jpg" alt=""><br>
                                <b>Wanrishisha Dkhar</b><br>
                                <i>Asst. Professor (Part Time)</i><br><br>
                                <b>Qualification</b><br>
                                LLM, Pursuing Ph.D (North Eastern Hill University)<br>
                                <b>Area of Interest</b><br>
                                Criminal Law, Law of Evidence, Women Laws and Rights<br>
                                <b>Teaching Experience </b><br>
                                4 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b> Publication/ Paper presented </b> <br>
                                    <ul style="list-style:none;">
                                        <li>Amendment in Code of Criminal Procedure ( North Eastern Police Academy).</li>
                                        <li>FIR, Arrest and Bail -Para Legal Volunteer (PLV) Meghalaya State Legal Services Authority Shillong.</li>
                                        <li>FIR, Arrest and Bail Doordarshan Kendra- Meghalaya State Legal Services Authority.</li>
                                        <li>Child Marriage and Domestic Violence. <br></li>
                                    </ul>
                                </span>

                                <button onclick="readMore('eleven')" id="myBtn">Read more</button>

                            </div>


                            <div class="col-sm-4 card" data-city="twelve">
                                <img src="assets/images/Tstaff/UD.jpg" alt=""><br>
                                <b> Dr. Umeshwari Dkhar</b><br>
                                <i>Asst. Professor </i><br><br>
                                <b>Qualification</b><br>
                                PhD, North Eastern Hill University, LLM, National Law University Delhi, Net Qualified.<br>
                                <b>Area of Interest</b><br>
                                Constitution law, Criminal Law, Human Rights and Business Law<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b> Credential currently held/trained </b> <br>
                                    Resource Person at various Training Programs, Seminars and Workshop, Teaching Assistant” in MOOCS course on “Access to Justice”, Research Supervisor in the project of Tihar Jail under the guidance of Assistant Professor Bharti Yadav, NLUD.
                                    <br />
                                    <a href="staff/profile/UD.pdf" target="_blank" class="btn btn-warning">Read More</a>
                                    <br />
                                </span>

                                <button onclick="readMore('twelve')" id="myBtn">Read more</button>
                                <br>
                            </div>

                        </div>


                        <div class="row ntstaff">


                            <div class="col-sm-4 card">
                                <img src="assets/images/Tstaff/Luciana.jpg" alt=""><br>
                                <b>Luciana Malngiang</b><br>
                                <i>Librarian</i><br><br>
                                <b>Qualification</b><br>
                                M.Lib, LL.B.<br>

                                <b>Experience </b><br>
                                18 years<br>
                                <br>
                                <br>
                                <br><br><br>
                            </div>

                            <div class="col-sm-4 card">
                                <img src="assets/images/Tstaff/Kharmujai.jpg" alt=""><br>
                                <b>E. Kharmujai</b><br>
                                <i>Asst. Librarian</i><br><br>
                                <b>Qualification</b><br>
                                M.Lib.<br>

                                <b>Experience </b><br>
                                4 years<br>
                                <br>
                                <br>
                                <br><br><br>
                            </div>

                            <div class="col-sm-4 card" data-city="n-one">
                                <img src="assets/images/Tstaff/032020/LD.jpeg" alt=""><br>
                                <b>Leeza Dkhar</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification</b><br>
                                M.A. Sociology, NEHU, NET<br>
                                <b>Area of Interest</b><br>
                                Sociology of Religion<br>
                                <b>Teaching Experience </b><br>
                                5 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Entrepreneurship and Skill Development
                                </span>

                                <button onclick="readMore('n-one')" id="myBtn">Read more</button>

                            </div>

                        </div>

                        <div class="row ntstaff">

                            <div class="col-sm-4 card" data-city="n-two">
                                <img src="assets/images/Tstaff/032020/DK.jpeg" alt=""><br>
                                <b>Deiphisha Kurbah</b><br>
                                <i>Asst. Professor </i><br><br>
                                <b>Qualification</b><br>
                                M.A. Economics, NEHU, NET<br>
                                <b>Area of Interest</b><br>
                                Micro Economics, Monetary Policies<br>
                                <b>Teaching Experience </b><br>
                                3 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>
                                    Seminar on Dr. B.R. Ambedkar on the Rights of Minorities and Social Justice: Contemporary Challenges.
                                </span>

                                <button onclick="readMore('n-two')" id="myBtn">Read more</button>

                            </div>

                            <div class="col-sm-4 card" data-city="n-three">
                                <img src="assets/images/Tstaff/032020/EM.jpg" alt=""><br>
                                <b>Eleane Marbaniang</b> <br>
                                <i>Asst. Professor</i> <br><br>
                                <b>Qualification </b><br>
                                M.A. Political Science, NEHU, NET<br>
                                <b>Area of Interest</b><br>
                                Liberal Political Theory, Indian Political System, Comparative Politics, Globalisation,

                                <span id="dots"></span>
                                <span id="more">
                                    International Relations.<br>

                                    <b>Teaching Experience </b><br>
                                    3 years<br>

                                    <b>Credential currently held/ trained </b><br>
                                    Seminar on Dr. B.R. Ambedkar on the Rights of Minorities and Social Justice: Contemporary Challenges.
                                </span>

                                <button onclick="readMore('n-three')" id="myBtn">Read more</button>
                            </div>

                            <div class="col-sm-4 card" data-city="n-four">
                                <img src="assets/images/Tstaff/032020/LHN.jpeg" alt=""><br>
                                <b>Lalengzami H Nongbri</b><br>
                                <i>Asst. Professor</i><br><br>
                                <b>Qualification </b><br>
                                M.A. English, NEHU, NET
                                <br>
                                <b>Area of Interest</b><br>
                                Women’s Writing.<br>
                                <b>Teaching Experience </b><br>
                                4 years<br>

                                <span id="dots"></span>
                                <span id="more">
                                    <b>Credential currently held/ trained </b><br>

                                    <ul style="text-align: left;">
                                        <li style="padding-bottom: 10px;"> Resourse person in Certificate Course on Career and Personality Develpoment conducted by Department of Education, St. Mary’s College, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> Proof-read group research project for 3rd year B.Sc Nursing Students of College of Nursing, NEIGRIHMS, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> A Theatre Workshop on The Body Speaks, St. Mary’s College, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> International Seminar on Social Interactions and Cultural Milieu, Lady Keane College, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> National Seminar on Innovative Strategies. A Roadmap for upliftment of Teaching, Learning and Evaluation in Higher Education, St. Mary’s College, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> Workshop on Communication Skills in English, Lady Keane College in collaboration with EFLU, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> Regional Workshop on Gender Justice: Legal Awareness, Preventive and Redressal Measures on Crime Against Women, St. Mary’s College, Shillong.</li>
                                        <li style="padding-bottom: 10px;"> Seminar on Dr. B.R. Ambedkar on the Rights of Minorities and Social Justice: Contemporary Challenges, Shillong Law College.</li>
                                        <li style="padding-bottom: 10px;"> “ITM at Campus”, Indigenous Terra Madre, Shillong, NESFAS.</li>


                                    </ul>
                                </span>

                                <button onclick="readMore('n-four')" id="myBtn">Read more</button>

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

<?php
include_once('inc/footer.php');
?>