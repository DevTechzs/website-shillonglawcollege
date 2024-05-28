<?php
$title = "Conferences & Proceedings";
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

    .card li {
        list-style: square;
        margin: 0 0px 0 15px;
    }

    @media only screen and (max-width:991px) {
        .col-md-4.card {
            margin: 15px 1%;
        }
    }

    @media only screen and (min-width:992px) {
        .col-md-4.card {
            margin: 15px 1%;
            width: 31.33333333%;
        }

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
        <div class="">
            <div class="row">

                <!--Welcome Start-->
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <h4>Research</h4>
                            <a href="publications" class="w3-bar-item w3-button">Publications</a>
                            <a href="conferences" class="w3-bar-item w3-button active">Conferences & Proceedings</a>
                            <a href="journals" class="w3-bar-item w3-button">Journals</a>
                            <a href="magazines" class="w3-bar-item w3-button">Magazines</a>
                        </div>
                    </div>

                </div>
                
                <div class="col-sm-9">

                    <div class="welcome row">
                        <h1 style="text-align:left;">Conferences & Proceedings</h1>

                        <div class="row">
                            <ol start="1" id="div_content">
                                <li>Page Under process ....</li>
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
    json.URLCategoryID = '20';

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