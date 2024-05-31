<?php
$title = "Alumni Gallery";
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

    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: calc(33.33% - 10px);
        /* Adjusted width for three cards in a row with margin */
        box-sizing: border-box;
        /* Include padding and border in the element's total width and height */
    }

    div.gallery img {
        width: 100%;
        height: 200px;
    }


    div.desc {
        padding: 15px;
        text-align: center;
    }

    .thumbnail {
        margin-bottom: 6px;
    }

    .carousel-control.left,
    .carousel-control.right {
        background-image: none;
        margin-top: 10%;
        width: 5%;
    }

    /* Style for the gallery item */
    .gallery {
        position: relative;
        /* Position relative for absolute positioning of card title */
        border-radius: 20px;
        /* Curved edges */
        overflow: hidden;
        /* Hide overflow for curved edges */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow */
        margin: 20px;
        /* Add margin */
    }

    /* Style for the card title */
    .card-title {
        position: absolute;
        /* Position absolute for overlay */
        bottom: 0;
        /* Align 0px from the bottom */
        left: 50%;
        /* Align from left */
        transform: translateX(-50%);
        /* Center horizontally */
        width: 100%;
        /* Full width */
        text-align: center;
        /* Center text */
        font-size: 14px;
        /* Increase font size */
        color: white;
        /* Set text color */
        /* Ensure title is above the image */
    }
</style>

<div id="wrapper" class="container">
    <div id="content">
        <div class="space"></div>
        <!--Welcome Part Start-->
        <div class="">
            <div class="row">
                <div class="col-sm-3">
                    <div id="side-menu">
                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
                            <a class="w3-bar-item w3-button" href="principal-message"> Principal Message </a>
                            <a class="w3-bar-item w3-button" href="founders"> Founders </a>
                            <a class="w3-bar-item w3-button" href="history"> History </a>
                            <a class="w3-bar-item w3-button" href="https://drive.google.com/file/d/1ORjooJBIAzljFwTBngPChqLw2B0oCgHN/view?usp=share_link"> Management </a>
                            <a class="w3-bar-item w3-button" href="college-profile"> Profile of the College </a>
                        </div>
                    </div>
                </div>
                <!--Welcome Start-->
                <div class="col-sm-9" id="card-container">
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
    let url = new URL(window.location.href);
    var TypeID = atob(url.searchParams.get("id"));
    $(function() {
        getGalleriesForWebsite();

    });

    function getGalleriesForWebsite() {
        var obj = new Object();
        obj.Module = "Admin";
        obj.Page_key = "getGalleriesForWebsite";
        var json = new Object();
        json.TypeID = TypeID;
        obj.JSON = json;
        TransportCall(obj);
    }

    function onSuccess(rc) {
        if (rc.return_code) {
            switch (rc.Page_key) {
                case "getGalleriesForWebsite":
                    loaddata(rc.return_data);
                    break;
                default:
                    notify("warning", rc.Page_key);
            }
        } else {
            notify("error", rc.return_data);

        }

    }

    function loaddata(data) {
        var container = $("#card-container");
        container.empty();
        if (data.length === 0) {
            container.append("No Gallery Found");
        } else {
            for (let i = 0; i < data.length; i++) {
                let documentLinks = data[i].DocumentPDFLinks.split(',');
                let backgroundImage = documentLinks.length > 0 ? documentLinks[0] : '';
                let secondaryLink = documentLinks.length > 1 ? documentLinks[1] : '';
                let linkToUse = data[i].GalleryURL ? data[i].GalleryURL : `${secondaryLink}`;

                // Ensure the GalleryURL link starts with http:// or https://
                if (data[i].GalleryURL && !data[i].GalleryURL.startsWith('http://') && !data[i].GalleryURL.startsWith('https://')) {
                    linkToUse = 'http://' + data[i].GalleryURL;
                }

                // Create the gallery div
                var galleryDiv = $('<div class="gallery" style="position: relative;"></div>'); // Added relative position to parent

                // Create the anchor tag
                var anchorTag = $(`<a target="_blank" href="#" onclick="redirect(${i})"></a>`);
                anchorTag.attr('href', linkToUse); // Set the href attribute

                // Create the image tag
                var imageTag = $('<img>');
                imageTag.attr('src', `${backgroundImage}`); // Set the src attribute
                imageTag.attr('alt', 'Gallery Image'); // Set the alt attribute
                imageTag.attr('width', '100%'); // Set the width attribute to fill the entire width of the gallery div
                imageTag.attr('height', '200px'); // Set the height attribute
                anchorTag.append(imageTag); // Append the image tag to the anchor tag

                // Create the card title div
                var cardTitleDiv = $(`<div class="card-title">${data[i].Title}</div>`);
                // Append the anchor tag and card title div to the gallery div
                galleryDiv.append(anchorTag);
                galleryDiv.append(cardTitleDiv);

                // Append the gallery div to the container
                container.append(galleryDiv);
            }
        }
    }
</script>