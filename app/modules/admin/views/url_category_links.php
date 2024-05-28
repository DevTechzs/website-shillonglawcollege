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
                                <strong>URL Links</strong>
                            </div>
                            <span class="float-right">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#mdlAdd"><i class="fa fa-plus"></i>&nbsp;<strong>ADD</strong></button>
                            </span>

                            <div class="modal fade" id="mdlAdd">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">Add URL Link</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmAdd">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="required" for="module">Module</label>
                                                        <select id="module" name="module" class="form-control select2" data-placeholder="-Select Module-" style="width: 100%;" required></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="category">Category</label>
                                                        <select id="category" name="category" class="form-control select2" data-placeholder="-Select Category-" style="width: 100%;" required></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="title">Title</label>
                                                        <input id="title" name="title" class="form-control" type="text" maxlength="349" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="date">Date</label>
                                                        <input type="text" id="date" class="form-control" autocomplete="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="file">File</label>
                                                        <input id="file" type="file" class="dropify" data-height="80" data-max-file-size="20M" data-allowed-file-extensions="pdf doc docx xls xlsx ppt pptx png jpg jpeg gif tiff psd" required/>
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

                            <div class="modal fade" id="mdlEdit">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">Edit URL Link</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmEdit">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="required" for="module1">Module</label>
                                                        <select id="module1" name="module" class="form-control select2" data-placeholder="-Select Module-" style="width: 100%;" required></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="category1">Category</label>
                                                        <select id="category1" name="category1" class="form-control select2" data-placeholder="-Select Category-" style="width: 100%;" required></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="title1">Title</label>
                                                        <input id="title1" name="title1" class="form-control" type="text" maxlength="349" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="date1">Date</label>
                                                        <input type="text" id="date1" class="form-control" autocomplete="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="file1">File</label>
                                                        <input id="file1" type="file" class="dropify" data-height="80" data-max-file-size="20M" data-allowed-file-extensions="pdf doc docx xls xlsx ppt pptx png jpg jpeg gif tiff psd" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info">Submit</button>
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
                                            <th scope="col">URL Category</th>
                                            <th scope="col">Module</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">File</th>
                                            <!-- <th scope="col">Action</th> -->
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
    var url_category_list, url_category_id, module_id, category;

    // $("#datepicker").datepicker({ minDate: "-3M -15D", maxDate: "+3M +15D",changeMonth:true,changeYear:true });
    $("#date, #date1").datepicker({ maxDate: "+3M +15D", changeMonth:true, changeYear:true });
    $('.dropify').dropify();
    
    $(function() {
        loadData();
        loadFormData();
    });

    $('#module').on('change', function()
    {
        var module = $('#module').val();
        
        $('#category, #category1').find('option').remove();
        $('#category, #category1').append($("<option></option>").attr("value", ""));
        url_category_list.forEach(function (item)
        {
            if (item['ModuleID'] == module) 
            {
                $('#category')
                    .append($("<option></option>")
                        .attr("value", item['URLCategoryID'])
                        .text(item['Category'])
                        .addClass(item['ModuleID'])
                    );
            }
            
        });
    });
    $('#module1').on('change', function()
    {
        var module = $('#module1').val();
        
        $('#category1').find('option').remove();
        $('#category1').append($("<option></option>").attr("value", ""));
        url_category_list.forEach(function (item)
        {
            if (item['ModuleID'] == module) 
            {
                $('#category1')
                    .append($("<option></option>")
                        .attr("value", item['URLCategoryID'])
                        .text(item['Category'])
                        .addClass(item['ModuleID'])
                    );
            }
            
        });
    });
    $('#frmAdd').submit(function()
    {
        saveAddFormData();
        return false;
    });
    $('#frmEdit').submit(function()
    {
        saveEditFormData();
        return false;
    });
    $('#mdlAdd, #mdlEdit').on('hidden.bs.modal', async function() 
    {
        $("input").val("");
        $('.select2').val(null).trigger('change');
        $('.dropify-clear').click();
    });
    $('#tblData').on('click', 'tbody tr td button', function ()
    {
        url_category_id = $(this).attr('data-url_category_id');
        module_id = $(this).attr('data-module_id');
        category = $(this).attr('data-category');

        $("#module1").select2().val(module_id).trigger("change");
        $("#category1").val(category);
        $("#mdlEdit").modal("show");
    });

    function loadData() {
        let obj = {};
        obj.Module = "Admin";
        obj.Page_key = "getURLLinks";
        obj.JSON = {};
        TransportCall(obj);
    }
    function loadFormData() {
        let obj = {};
        obj.Module = "Admin";
        obj.Page_key = "getModules";
        obj.JSON = {};
        TransportCall(obj);

        let obj1 = {};
        obj1.Module = "Admin";
        obj1.Page_key = "getURLCategories";
        obj1.JSON = {};
        TransportCall(obj1);
    }

    async function saveAddFormData() {
        let obj = {};
        let json = {};

        var files = $('#file')[0].files;
        var fileData = {};
        if (files.length > 0)
        {
            for(var i=0; i<files.length; i++)
            {
                await getBase64(files[i]).then(
                    data => fileData[i] = {
                        filedata: data,
                        filename: files[i]['name']
                    }
                );
            }
        }
        else{
            fileData = null;
        }

        obj.Module = "Admin";
        obj.Page_key = "addURLLink";

        json.Category = $("#category").val();
        json.Title = $("#title").val();
        json.Date = $("#date").val();
        json.File = fileData;

        obj.JSON = json;

        console.log(obj);
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
                 
                case "getURLLinks":
                    loaddata(rc.return_data);
                    break;
                case "getModules":
                    var module_list = rc.return_data;
                    if (module_list.length > 0) 
                    {
                        $('#module, #module1').find('option').remove();
                        $('#module, #module1').append($("<option></option>").attr("value", ""));
                        module_list.forEach(function (item)
                        {
                            $('#module, #module1')
                            .append($("<option></option>")
                                .attr("value", item['ModuleID'])
                                .text(item['Module'])
                            );
                        });
                    }
                    else {
                        toastr.warning('No Module found !!');
                    }
                    break;
                case "getURLCategories":
                    url_category_list = rc.return_data;
                    if (url_category_list.length > 0) 
                    {
                        $('#category, #category1').find('option').remove();
                        $('#category, #category1').append($("<option></option>").attr("value", ""));
                        url_category_list.forEach(function (item)
                        {
                            $('#category, #category1')
                            .append($("<option></option>")
                                .attr("value", item['URLCategoryID'])
                                .text(item['Category'])
                                .addClass(item['ModuleID'])
                            );
                        });
                    }
                    else {
                        toastr.warning('No Category found !!');
                    }
                    break;
                case "addURLLink":
                    toastr.success('Added Successfully');
                    $("#mdlAdd").modal("hide");
                    loadData();
                    break;
                case "editURLLink":
                    toastr.success('Edited Successfully');
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
                text += '<td>' + data[i].Category + '</td>';
                text += '<td>' + data[i].Module + '</td>';
                text += '<td>' + data[i].Date + '</td>';
                text += '<td><a href=' + data[i].URL + ' target="_blank">View/Download</a></td>';
                //text += '<td><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#mdlEdit" data-url_category_id="'+data[i].URLCategoryID+'" data-module_id="'+data[i].ModuleID+'" data-category="'+data[i].Category+'"><i class="fa fa-plus"></i>&nbsp;<strong>EDIT</strong></button></td>';
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
</script>