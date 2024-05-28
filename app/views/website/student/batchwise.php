<?php
$title = "Student Batch-Wise";
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
                            <h4>Student Data</h4>
                            <a href="student-batchwise" class="w3-bar-item w3-button active">Student Batch-Wise</a>
                            <a href="student-results" class="w3-bar-item w3-button">Student Results</a>
                            <a href="https://forms.gle/GzuQbaqJ5RUcMtbGA" target="_blank" title="CLICK TO FILL THE FEEDBACK FORM" class="w3-bar-item w3-button">Feedback</a>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-sm-9">

                    <div class="welcome row">
                        <h1>Student Batch-Wise</h1>

                        <div class="row">
                            <div class="col-sm-6">
                                <b>3-YEAR</b>
                                <ol start="1" id="div_3year">
                                    <li>No Data Found !!</li>
                                    <!-- <li><a href="file?type=student_batchwise_3year&name=2021.pdf" target="_blank" title="CLICK TO SEE CONTENT">2021 BATCH</a></li> -->
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <b>5-YEAR</b>
                                <ol start="1" id="div_5year">
                                    <li>No Data Found !!</li>
                                </ol>
                            </div>
                            
                        </div>
                    </div>

                    <div class="space"></div>

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
    get3YearData();
    get5YearData();
});

function get3YearData() {
    var json = new Object();
    json.URLCategoryID = '13';

    let obj = {};
    obj.Module = "Admin";
    obj.Page_key = "getURLLinkData";
    obj.JSON = json;
    TransportCall(obj);
}

function get5YearData() {
    var json = new Object();
    json.URLCategoryID = '14';

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
    if(data[0]['URLCategoryID']==13){
        $('#div_3year').empty();
        $('#div_3year').append(div_content);
    }
    else{
        $('#div_5year').empty();
        $('#div_5year').append(div_content);
    }
}

</script>