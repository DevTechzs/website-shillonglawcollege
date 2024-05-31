<!-- summernote -->
<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">


<style>
    .input-validation-error~.select2 {
        border: 1px solid red;
        border-radius: 5px;
    }
</style>

<div class="content-wrapper" id="maincontent">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-title">
                                <strong>News</strong>
                            </div>
                            <span class="float-right">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#mdlAdd"><i class="fa fa-plus"></i>&nbsp;<strong>ADD</strong></button>
                            </span>

                            <div class="modal fade" id="mdlAdd">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">Add News</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmAdd">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row ml-5 mr-5 mb-5">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="required" for="type">Type</label>
                                                                <select id="type" name="type" class="form-control select2" data-placeholder="-Select Type-" style="width: 100%;" required></select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="required" for="title">Title</label>
                                                                <input id="title" name="title" class="form-control" type="text" maxlength="999" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="required" for="sdate">Start Date</label>
                                                                <input type="text" id="sdate" class="form-control" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="required" for="edate">End Date</label>
                                                                <input type="text" id="edate" class="form-control" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="display:none">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label>Add File(s)</label>
                                                                <input class="form-control bootstrapToggle" id="add_files" type="checkbox" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="light" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="div_files" style="display:none;">
                                                        <div class="col-sm-12 col-md-12 col-lg-12" id="div_allocate_papers_table">
                                                            <div class="row">
                                                                <div class="col-sm-12" style="text-align:right">
                                                                    <a onclick="deleteRowFiles()" title="Delete Selected File(s)" style="font-size:25px; color:red;"><i class="fas fa-trash-alt"></i></a>
                                                                    <a onclick="addRowFiles()" title="Add New File" style="font-size:25px; color:green; cursor:pointer"><i class="fas fa-plus-circle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="height:auto; overflow:auto">
                                                                <table id="tblFiles" class="table table-bordered table-hover" style="width:100%; text-align:left;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="vertical-align:middle; width:10%; text-align:center;">Select</th>
                                                                            <th style="vertical-align:middle; width:40%;">Title<b style="color:red;">*</b></th>
                                                                            <th style="vertical-align:middle; width:50%;">File<b style="color:red;">*</b></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="vertical-align:middle; width:10%; text-align:center;"><input type="checkbox" /></td>
                                                                            <td style="vertical-align:middle; width:40%;"><input type="text" id="file_title1" class="form-control file_title" placeholder="Eg. ACADEMIC CALENDAR" maxlength="99" autocomplete="off" /></td>
                                                                            <td style="vertical-align:middle; width:50%;"><input type="file" id="file1" accept="image/*,.pdf,.doc,.docx,.ppt,.pptx,.xls,.xlsx" class="dropify file" data-height="100" /></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label>Add Link(s)</label>
                                                                <input class="form-control bootstrapToggle" id="add_links" type="checkbox" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="light" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="div_links" style="display:none;">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-sm-12" style="text-align:right">
                                                                    <a onclick="deleteRowLinks()" title="Delete Selected Link(s)" style="font-size:25px; color:red;"><i class="fas fa-trash-alt"></i></a>
                                                                    <a onclick="addRowLinks()" title="Add New Link" style="font-size:25px; color:green; cursor:pointer"><i class="fas fa-plus-circle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="height:auto; overflow:auto">
                                                                <table id="tblLinks" class="table table-bordered table-hover" style="width:100%; text-align:left;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="vertical-align:middle; width:10%; text-align:center;">Select</th>
                                                                            <th style="vertical-align:middle; width:40%;">Link Title<b style="color:red;">*</b></th>
                                                                            <th style="vertical-align:middle; width:50%;">Link<b style="color:red;">*</b></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="vertical-align:middle; width:10%; text-align:center;"><input type="checkbox" /></td>
                                                                            <td style="vertical-align:middle; width:40%;"><input type="text" id="link_title1" class="form-control link_title" placeholder="Eg. COLLEGE WEBSITE" maxlength="99" autocomplete="off" /></td>
                                                                            <td style="vertical-align:middle; width:50%;"><input type="text" id="link1" class="form-control link" placeholder="Eg. http://shillonglawcollege.in/" maxlength="99" autocomplete="off" /></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="mdlView">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">News Details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmEdit">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="type1">Type</label>
                                                                <input id="type1" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title1">Title</label>
                                                                <input id="title1" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="sdate1">Start Date</label>
                                                                <input id="sdate1" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="edate1">End Date</label>
                                                                <input id="edate1" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="overflow:auto; width:100%">
                                                        <table id="tblNewsDetails" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Type</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div style="overflow:auto; width:100%">
                                <table id="tblData" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">File(s)/ Link(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Summernote -->
<script src="assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    var news_id, title, sdate, edate, type;

    var add_files = add_links = 0;

    // $("#datepicker").datepicker({ minDate: "-3M -15D", maxDate: "+3M +15D",changeMonth:true,changeYear:true });
    $("#sdate, #sdate1, #edate, #edate1").datepicker({
        minDate: "-0D",
        maxDate: "+1Y",
        changeMonth: true,
        changeYear: true
    });
    $('.dropify').dropify();
    $('.bootstrapToggle').bootstrapToggle();

    $(function() {
        loadData();
        loadFormData();
    });

    $("#sdate").on('change', function() {
        $('#edate').datepicker('option', 'minDate', new Date($("#sdate").val()));
    });
    $("#sdate1").on('change', function() {
        $('#edate1').datepicker('option', 'minDate', new Date($("#sdate1").val()));
    });
    $('#add_files').on('change', function() {
        if ($('#add_files').prop('checked')) {
            add_files = 1;
            $('.file_title').val('');
            $('.dropify-clear').click();
            $('#div_files').show();
        } else {
            add_files = 0;
            $('#div_files').hide();
        }
    });
    $('#add_links').on('change', function() {
        if ($('#add_links').prop('checked')) {
            add_links = 1;
            $('.link_title').val('');
            $('.link').val('');
            $('#div_links').show();
        } else {
            add_links = 0;
            $('#div_links').hide();
        }
    });
    $('#frmAdd').submit(function() {
        saveAddFormData();
        return false;
    });
    $('#frmEdit').submit(function() {
        saveEditFormData();
        return false;
    });
    $('#mdlAdd, #mdlEdit').on('hidden.bs.modal', async function() {
        $("input").val("");
        $('.select2').val(null).trigger('change');
        $('.dropify-clear').click();
    });
    $('#tblData').on('click', 'tbody tr td button', function() {
        news_id = $(this).attr('data-news_id');
        title = $(this).attr('data-title');
        sdate = $(this).attr('data-sdate');
        edate = $(this).attr('data-edate');
        type = $(this).attr('data-type');

        $("#title1").val(title);
        $("#sdate1").val(sdate);
        $("#edate1").val(edate);
        $("#type1").val(type);

        let obj = {};
        let json = {};

        obj.Module = "Admin";
        obj.Page_key = "getNewsDetails";

        json.NewsID = news_id;

        obj.JSON = json;

        console.log(obj);
        TransportCall(obj);

        // $("#mdlView").modal("show");
    });

    function addRowFiles() {
        if ($('#tblFiles tbody tr').length < 5) {
            $("#tblFiles").append($('#tblFiles tbody tr:last').clone());
            $('#tblFiles tbody tr:last').each(function(row, tr) {
                $(tr).find('td').eq(1).prop('innerHTML', '');
                $(tr).find('td').eq(1).append('<input type="text" id="file_title' + $('#tblFiles tbody tr').length + '" class="form-control file_title" placeholder="Example: ACADEMIC CALENDAR" maxlength="99" autocomplete="off"/>');
                $(tr).find('td').eq(2).prop('innerHTML', '');
                $(tr).find('td').eq(2).append('<input type="file" id="file' + $('#tblFiles tbody tr').length + '" accept="image/*,.pdf,.doc,.docx,.ppt,.pptx,.xls,.xlsx" class="dropify file" data-height="100"/>');
                $('.dropify').dropify();
            });
        } else {
            toastr.info('Only 5 Files can be attached !!');
        }
    }

    function deleteRowFiles() {
        try {

            var table = document.getElementById('tblFiles');
            var rowCount = table.rows.length;
            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null != chkbox && true == chkbox.checked) {
                    if (rowCount <= 2) {
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
    }

    function addRowLinks() {
        if ($('#tblLinks tbody tr').length < 5) {
            $("#tblLinks").append($('#tblLinks tbody tr:last').clone());
            $('#tblLinks tbody tr:last').each(function(row, tr) {
                $(tr).find('td').eq(1).prop('innerHTML', '');
                $(tr).find('td').eq(1).append('<input type="text" id="link_title' + $('#tblLinks tbody tr').length + '" class="form-control link_title" placeholder="Eg. COLLEGE WEBSITE" maxlength="99" autocomplete="off"/>');
                $(tr).find('td').eq(2).prop('innerHTML', '');
                $(tr).find('td').eq(2).append('<input type="text" id="link' + $('#tblLinks tbody tr').length + '" class="form-control link" placeholder="Eg. http://shillonglawcollege.in/" maxlength="99" autocomplete="off"/>');
                $('.dropify').dropify();
            });
        } else {
            toastr.info('Only 5 Links can be attached !!');
        }
    }

    function deleteRowLinks() {
        try {

            var table = document.getElementById('tblLinks');
            var rowCount = table.rows.length;
            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null != chkbox && true == chkbox.checked) {
                    if (rowCount <= 2) {
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        } catch (e) {
            alert(e);
        }
    }

    function loadData() {
        let obj = {};
        obj.Module = "Admin";
        obj.Page_key = "getNews";
        obj.JSON = {};
        TransportCall(obj);
    }

    function loadFormData() {
        let obj = {};
        obj.Module = "Admin";
        obj.Page_key = "getNewsType";
        obj.JSON = {};
        TransportCall(obj);
    }

    async function saveAddFormData() {
        let obj = {};
        let json = {};

        var fileData = {};
        var totalFileSize = 0;
        for (var j = 1; j <= $('#tblFiles tbody tr').length; j++) {
            var files = $('#file' + j)[0].files;
            var file_title = $('#file_title' + j).val();

            for (var i = 0; i < files.length; i++) {
                const fsize = files[i].size;
                const file = Math.round((fsize / 1024));
                totalFileSize += file;
                if (file > (1024 * 20)) {
                    toastr.error("Attached Document at Row-" + j + " is more than 20 MB !!");
                    return false;
                }
                await getBase64(files[i]).then(
                    data => fileData[j] = {
                        filedata: data,
                        filename: files[i]['name'],
                        file_title: file_title
                    });
            }
        }

        var linkData = {};
        if ($('#add_links').prop('checked')) {
            for (var j = 1; j <= $('#tblLinks tbody tr').length; j++) {
                var link_title = $('#link_title' + j).val();
                var link = $('#link' + j).val();

                linkData[j] = {
                    link_title: link_title,
                    link: link
                }
            }
        }

        obj.Module = "Admin";
        obj.Page_key = "addNews";

        json.Type = $("#type").val();
        json.Title = $("#title").val();
        json.SDate = $("#sdate").val();
        json.EDate = $("#edate").val();
        json.File = fileData;
        json.Link = linkData;

        obj.JSON = json;

        //console.log(obj);
        TransportCall(obj);
    }

    function saveEditFormData() {
        let obj = {};
        let json = {};

        obj.Module = "Admin";
        obj.Page_key = "editURLLink";

        json.URLCategoryID = url_category_id;
        json.ModuleID = $("#module1").val();
        json.Category = $("#category1").val();

        obj.JSON = json;
        TransportCall(obj);
    }

    function onSuccess(rc) {

        if (rc.return_code) {
            switch (rc.Page_key) {

                case "getNews":
                    loaddata(rc.return_data);
                    break;
                case "getNewsDetails":
                    if (rc.return_data.length > 0)
                        loaddata1(rc.return_data);
                    else
                        $('#tblNewsDetails').hide();
                    break;
                case "getNewsType":
                    var newstype_list = rc.return_data;
                    if (newstype_list.length > 0) {
                        $('#type, #type1').find('option').remove();
                        $('#type, #type1').append($("<option></option>").attr("value", ""));
                        newstype_list.forEach(function(item) {
                            $('#type, #type1')
                                .append($("<option></option>")
                                    .attr("value", item['NewsTypeID'])
                                    .text(item['NewsType'])
                                );
                        });
                    } else {
                        toastr.warning('No Module found !!');
                    }
                    break;
                case "addNews":
                    toastr.success('Added Successfully');
                    $("#mdlAdd").modal("hide");
                    loadData();
                    break;
                case "editURLLink":
                    toastr.success('Edited Successfully');
                    $("#mdlEdit").modal("hide");
                    loadData();
                    break;
                case "deleteNews":
                    toastr.success('Deleted Successfully');
                    $("#mdlEdit").modal("hide");
                    loadData();
                    break;


                default:
                    alert(rc.Page_key);
            }
        } else {
            toastr.error(rc.return_data);
        }
    }

    function loaddata(data) {

        var table = $("#tblData");

        try {
            if ($.fn.DataTable.isDataTable($(table))) {
                $(table).DataTable().destroy();
            }
        } catch (ex) {}

        var text = ""
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                text += '<tr>';
                text += '<td>' + data[i].Title + '</td>';
                text += '<td>' + data[i].StartDate + '</td>';
                text += '<td>' + data[i].EndDate + '</td>';
                text += '<td>' + data[i].NewsType + '</td>';
                text += '<td><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#mdlView" data-news_id="' + data[i].NewsID + '" data-title="' + data[i].Title + '" data-sdate="' + data[i].StartDate + '" data-edate="' + data[i].EndDate + '" data-type="' + data[i].NewsType + '"><i class="fa fa-eye"></i>&nbsp;<strong>VIEW</strong></button>&nbsp;';
                text += '<button class="btn btn-xs btn-danger"  title="Delete News"  onclick="onDelete(\'' + escape(JSON.stringify(data[i])) + '\')"> <i class="fas fa-trash-alt"> </i> </button></td>';
                text += '</tr >';
            }
        }
        $("#tblData tbody").html(text);

        $(table).DataTable({
            responsive: true,
            "order": [],
            dom: 'Bfrtip',
            "bInfo": true,
            exportOptions: {
                columns: ':not(.hidden-col)'
            },
            "deferRender": true,
            "pageLength": 10,
            buttons: [{
                    exportOptions: {
                        columns: ':not(.hidden-col)'
                    },
                    extend: 'excel',
                    orientation: 'landscape',
                    title: document.title,
                    pageSize: 'A4'
                },
                {
                    exportOptions: {
                        columns: ':not(.hidden-col)'
                    },
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'A4'
                },
                {
                    exportOptions: {
                        columns: ':not(.hidden-col)'
                    },
                    extend: 'print',
                    orientation: 'landscape',
                    pageSize: 'A4'
                }
            ]
        });
    }


    function onDelete(data) {
        data = JSON.parse(unescape(data));
        var NewsID = data.NewsID;
        if (confirm("Are you sure to delete this news?")) {
            var obj = {};
            obj.Module = "Admin";
            obj.Page_key = "deleteNews";
            var json = {};
            json.NewsID = NewsID;
            obj.JSON = json;
            TransportCall(obj);
        }
    }


    function loaddata1(data) {
        $('#tblNewsDetails').show();
        var table = $("#tblNewsDetails");

        try {
            if ($.fn.DataTable.isDataTable($(table))) {
                $(table).DataTable().destroy();
            }
        } catch (ex) {}

        var text = ""
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                var url;
                var lnk;

                text += '<tr>';

                if (data[i].TypeID == "1") {
                    text += '<td><strong>File</strong></td>';
                    text += '<td>' + data[i].Title + '</td>';
                    text += '<td><a href=' + data[i].FileLink + ' target="_blank">View/Download</a></td>';
                } else {
                    if (data[i].FileLink.substring(0, 8) == 'https://') {
                        lnk = data[i].FileLink.split('https://');
                        url = lnk[1];
                    } else if (data[i].FileLink.substring(0, 7) == 'http://') {
                        lnk = data[i].FileLink.split('http://');
                        url = lnk[1];
                    } else {
                        url = data[i].FileLink;
                    }
                    text += '<td><strong>Link</strong></td>';
                    text += '<td>' + data[i].Title + '</td>';
                    text += '<td><a href="//' + url + '" target="_blank">Open Link</a></td>';
                }

                text += '</tr >';
            }
        }
        $("#tblNewsDetails tbody").html(text);
    }
</script>