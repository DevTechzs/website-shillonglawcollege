<?php
$title = "The Legal Care & Support Centre";
include_once($_SESSION['header']);
?>

<style>
    body {
        counter-reset: Serial;
        /* Set the Serial counter to 0 */
    }

    tr td:first-child:before {
        counter-increment: Serial;
        /* Increment the Serial counter */
        content: counter(Serial) ".";
        /* Display the counter */
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
</style>

<div id="wrapper" class="container">

    <div id="content">

        <div class="space"></div>

        <!--Welcome Part Start-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="cont-right-rig-event-link">
                        <h4>Programmes and activities the Centre has undertaken</h4>
                        <div style=" overflow:hidden;" id="prgms">
                            <span class="p-3">No Data Found !!</span>
                        </div>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="welcome">
                        <h1 style="text-align:center; font-weight:normal !important; font-family:Verdana, Geneva, Tahoma, sans-serif !important;">The Legal Care & Support Centre</h1>

                        <div class="space"></div>
                        <div class="mx-3">
                            <p class="tz-p">
                                “Access to justice is basic to human rights and directive principles of State Policy become ropes of sand,
                                teasing illusion and promise of unreality, unless there is effective means for the common people to reach the Court,
                                seek remedy and enjoy the fruits of law and justice.”<br>
                                <b style="float: right; padding: 2px"><i>Justice V. Krishna Iyer</i></b>
                            </p>
                        </div>
                        <div class="space"></div>

                        <div class="row">


                            <h1>Establishment</h1>
                            <p>
                                The Legal Care & Support Centre (hereinafter called the ‘Centre’) Shillong Law College,
                                was established by the Meghalaya State Legal Services Authority (MSLSA) in 2013,
                                under the prompt initiative by the Hon’ble Member Secretary, Shri. W. Diengdoh.
                                The Centre was inaugurated by the Hon’ble Mr. Justice Madan B. Lokur,
                                Judge Supreme Court of India, on the 16th November, 2013 in the presence of Hon’ble
                                Mr. Justice Prafulla C. Pant, (then) Chief Justice, High Court of Meghalaya and
                                Patron-in-Chief, the Meghalaya State Legal Services Authority (MSLSA), Hon’ble
                                Mr. Justice T.N.K. Singh (then) Judge, High Court of Meghalaya and Executive Chairman,
                                MSLSA, and Hon’ble Mr Justice S.R. Sen, Judge, High Court of Meghalaya.
                                Mr. Rowell Lyngdoh, (then) Honb’le Deputy Chief Minister of Meghalaya was also
                                present during the inauguration of the Centre.
                            </p>
                            <h1>Vision & Objectives</h1>
                            <p>
                                Access to justice is recognized as a Fundamental Right under Article 14 and Article 21 of
                                the Constitution of India. In Anita Kushwaha v. Pushap Sudan, [(2016) 8 SCC 509] the
                                Supreme Court categorically asserts:
                            </p>
                            <p>
                                “We have, therefore, no hesitation in holding that access to justice is indeed a facet
                                of right to life guaranteed under Article 21 of the Constitution. We need only add that
                                access to justice may as well be the facet of the right guaranteed under Article 14 of
                                the Constitution, which guarantees equality before law and equal protection of laws.”
                            </p>
                            <p>
                                Through their legal education, law students become efficient participants in this quest
                                for access to justice for all, which is an endeavour to materialize the ideals set out
                                by the Preamble and the obligation of the State under Article 39A of the Constitution
                                of India. The Legal Care & Support Centre (Legal Aid Clinic), Shillong Law College
                                (the Centre), shares this Constitutional vision and has become a humble part of this endeavour.
                            </p>
                            <p>
                                The Centre aims at achieving the objectives laid down by the provision of section 4(k)
                                of the Legal Services Authorities Act, 1987, i.e., to improve the clinical skills of
                                the students and to encourage them to provide free and competent legal services to the
                                poor and indigent who are eligible under section 12 of the Act.
                            </p>
                            <p>
                                To achieve these objectives, the Centre, under the aegis of the Meghalaya State Legal
                                Services Authority (MSLSA) and the District Authority (DLSA, East Khasi Hills), has been
                                involving the students of the College in organising various related activities and programmes
                                as outlined in the NALSA (Legal Services Clinics in Universities, Law Colleges and other Institutions)
                                Scheme, 2013 and the National Legal Services Authority (Legal Aid Clinics) Scheme, 2010.
                            </p>
                            <ol class="members">
                                <h1> Target Groups</h1>
                                <li>Students of the Shillong Law College</li>
                                <li>Women & Children</li>
                                <li>Scheduled Castes (SCs) & Scheduled Tribes (STs)</li>
                                <li>Beneficiaries eligible under section 12 of the Legal Services Authorities Act, 1987</li>
                                <li>The Intended Beneficiaries under the various NALSA Schemes.</li>
                            </ol>
                            <br />

                            <div class="row" style="overflow:auto !important;">
                                <div class="col-sm-12">
                                    <h1>Members</h1>
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
                                                <td>Shri. Dr. Sharif Uddin, (Principal) Associate Professor</td>
                                                <td>Patron</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Shri. Deba K. N. Kharshiing, (Vice–Principal) Assistant Professor</td>
                                                <td>Chief Staff Advisor</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Shri. Celestine Ksoo, Assistant Professor</td>
                                                <td>Faculty In-charge</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <strong class="text-danger">* Working Hours : Wednesday & Saturday (2:00 pm &ndash; 5:00 pm)</strong>
                                </div>
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

<script>
    $(function() {
        getData();
    });

    function getData() {
        var json = new Object();
        json.URLCategoryID = '24';
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
                        console.log(rc.return_data);
                    break;
                default:
                    alert(rc.Page_key);
            }
        } else {
            alert(rc.return_data);
        }
    }

    function loaddata(data) {
        //console.log(data);
        var div_prgm;

        div_prgm = '<marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">';
        div_prgm += '<ul class="columns">';
        data.forEach(function(params) {
            div_prgm += '<li>';
            div_prgm += '<a href="' + params['URL'] + '" target="_blank"> <span id="homeright_rptupcomingevents_Label3_0">' + params['Title'] + '</span></a>';
            div_prgm += '</li>';
        });
        div_prgm += '</ul>';
        div_prgm += '</marquee>';

        $('#prgms').empty();
        $('#prgms').append(div_prgm);
    }
</script>