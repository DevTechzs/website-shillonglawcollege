<!-- summernote -->
<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">

<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">
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
                                <strong>URL Categories</strong>
                            </div>
                            <span class="float-right">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#mdlAdd"><i class="fa fa-plus"></i>&nbsp;<strong>ADD</strong></button>
                            </span>

                            <div class="modal fade" id="mdlAdd">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">Add URL Category</h4>
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
                                                        <input id="category" name="category" class="form-control" type="text" maxlength="249" autocomplete="off" required>
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
                                            <h4 class="modal-title d-flex justify-content-center">Edit URL Category</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmEdit">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                <div class="form-group">
                                                        <label class="required" for="module1">Module</label>
                                                        <select id="module1" name="module1" class="form-control select2" data-placeholder="-Select Module-" style="width: 100%;" required></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="category1">Category</label>
                                                        <input id="category1" name="category" class="form-control" type="text" maxlength="249" autocomplete="off" required>
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
                                            <th scope="col">URL Category</th>
                                            <th scope="col">Module</th>
                                            <th scope="col">Action</th>
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

<script>
    var url_category_id, module_id, category;

    $(function() {
        loadData();
        loadFormData();
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
    $('#mdlAdd, #mdlEdit').on('hidden.bs.modal', function() 
    {
        $("input").val("");
        $('.select2').val(null).trigger('change');
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
        obj.Page_key = "getURLCategories";
        obj.JSON = {};
        TransportCall(obj);
    }
    function loadFormData() {
        let obj = {};
        obj.Module = "Admin";
        obj.Page_key = "getModules";
        obj.JSON = {};
        TransportCall(obj);
    }
    function saveAddFormData() {
        let obj = {};
        let json = {};

        obj.Module = "Admin";
        obj.Page_key = "addURLCategory";

        json.ModuleID = $("#module").val();
        json.Category = $("#category").val();

        obj.JSON = json;
        TransportCall(obj);
    }
    function saveEditFormData() {
        let obj = {};
        let json = {};

        obj.Module = "Admin";
        obj.Page_key = "editURLCategory";

        json.URLCategoryID = url_category_id;
        json.ModuleID = $("#module1").val();
        json.Category = $("#category1").val();

        obj.JSON = json;
        TransportCall(obj);
    }
    function onSuccess(rc) {

        if (rc.return_code) {
            switch (rc.Page_key) {
                 
                case "getURLCategories":
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
                case "addURLCategory":
                    toastr.success('Added Successfully');
                    $("#mdlAdd").modal("hide");
                    loadData();
                    break;
                case "editURLCategory":
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
                text += '<td>' + data[i].Category + '</td>';
                text += '<td>' + data[i].Module + '</td>';
                text += '<td><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#mdlEdit" data-url_category_id="'+data[i].URLCategoryID+'" data-module_id="'+data[i].ModuleID+'" data-category="'+data[i].Category+'"><i class="fa fa-plus"></i>&nbsp;<strong>EDIT</strong></button></td>';
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