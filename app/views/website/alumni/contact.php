<?php
$title = "Alumni Contact Us";
include_once($_SESSION['header']);
?>

<style>
    a.w3-bar-item.w3-button.active {
        color: #fff;
        background: goldenrod;
    }

    @media only screen and (min-width:992px) {
        .address {
            align-items: center;
            padding: 25px 80px;
        }
    }
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
                            <h4>Alumni</h4>
                            <!-- <a href="alumni-member" class="w3-bar-item w3-button">Members of the Alumini</a> -->
                            <a href="alumni-advisory" class="w3-bar-item w3-button active">SLCAA Committee</a>
                            <a href="alumni-conclave" class="w3-bar-item w3-button">Alumini Conclave</a>
                            <a href="alumni-testimonial" class="w3-bar-item w3-button">Testimonials</a>
                            <a href="file?type=documents&name=al_directory.pdf" target="_blank" title="CLICK TO SEE CONTENT" class="w3-bar-item w3-button">Alumini Directory</a>
                            <a href="https://forms.gle/CTDe4qeEEi5mupPp7" target="_blank" class="w3-bar-item w3-button">Registration</a>
                            <a href="https://forms.gle/zAE6SJMTWxa7bhfR6" target="_blank" class="w3-bar-item w3-button">Feedback</a>
                            <a href="alumni-gallery" class="w3-bar-item w3-button">Alumni Gallery</a>
                            <a href="alumni-contact" class="w3-bar-item w3-button active">Contact Us</a>
                            <br />
                        </div>
                    </div>

                </div>

                <div class="col-md-9">
                    <h1 style="text-align:center;">Alumni Contact Us</h1>


                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Shri. Tabris Jalal Ahmed, Assistant Professor (Guest Faculty)</td>
                                <td>Convener</td>
                                <td>tabrisjalalahmed15@gmail.com</td>
                                <td>9436118186</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>(Dr.) Smti. Mrinalini Kharshiing, (Vice-Principal) Assistant Professor </td>
                                <td>Member</td>
                                <td>mrinalinikharshiing@gmail.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Shri. Deba K. N. Kharshiing, (Vice–Principal) Assistant Professor</td>
                                <td>Member</td>
                                <td>dknkharshiing@gmail.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Smti. Wanrishisha Dkhar, Assistant Professor (Guest Faculty)</td>
                                <td>Member</td>
                                <td>wanri02@gmail.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Smti. Darishisha Jyrwa, Assistant Professor</td>
                                <td>Member</td>
                                <td>darishishanoel09@gmail.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Smti. Lakyntiew N. Khyriem, Assistant Professor (Ad-hoc)</td>
                                <td>Member</td>
                                <td>kyntiew83@gmail.com</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Welcome Part End-->


</div>
<!--Content End-->

</div>
<!-- Wraper End -->

<?php include_once($_SESSION['footer']); ?>