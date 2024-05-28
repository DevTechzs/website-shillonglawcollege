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
                                <strong>Gallery</strong>
                            </div>
                            <span class="float-right">
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#mdlAdd"><i class="fa fa-plus"></i>&nbsp;<strong>ADD</strong></button>
                            </span>

                            <div class="modal fade" id="mdlAdd">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">Add Images</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="frmAdd">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="required" for="type">Type</label>
                                                        <select id="type" name="type" class="form-control select2" data-placeholder="-Select Type-" style="width: 100%;" required>
                                                            <option selected="selected" value=""></option>
                                                            <option value="1">Workshop</option>
                                                            <option value="2">Seminar</option>
                                                            <option value="3">Conference (National & Internation)</option>
                                                            <option value="4">Extra-Curriculum Activities</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="title">Title</label>
                                                        <input id="title" type="text" class="form-control" maxlength="249" autocomplete="off" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="file">Image(s)</label>
                                                        <input id="file" type="file" class="dropify" data-height="80" data-max-file-size="20M" data-allowed-file-extensions="png jpg jpeg gif tiff" multiple required/>
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

                        </div>
                        <div class="card-body">
                            <div style="overflow:auto; width:100%">
                                <table id="tblData" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Image(s)</th>
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
    var url_category_id, module_id, category;

    $('.dropify').dropify();
    
    $(function() {
        loadData();
    });

    $('#frmAdd').submit(function()
    {
        saveAddFormData();
        return false;
    });
    $('#mdlAdd').on('hidden.bs.modal', async function() 
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
        obj.Page_key = "getImages";
        obj.JSON = {};
        TransportCall(obj);
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
        obj.Page_key = "addImages";

        json.Type = $("#type").val();
        json.Title = $("#title").val();
        json.File = fileData;

        obj.JSON = json;

        console.log(obj);
        TransportCall(obj);
    }
    
    function onSuccess(rc) {

        if (rc.return_code) {
            switch (rc.Page_key) {
                 
                case "getImages":
                    loaddata(rc.return_data);
                    break;
                case "addImages":
                    toastr.success('Added Successfully');
                    $("#mdlAdd").modal("hide");
                    loadData();
                    break;
                default:
                    alert(rc.Page_key);
            }
        } else {
            toastr.error(rc.return_data);
        }
    }

    function loaddata(data) 
    {
        var table = $("#tblData");

        try {
            if ($.fn.DataTable.isDataTable($(table))) {
                $(table).DataTable().destroy();
            }
        } catch (ex) {}

        var text = "";
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) 
            {
                var type = "";
                if(data[i].TypeID=='1')
                    type="Workshop";
                else if(data[i].TypeID=='2')
                    type="Seminar";
                else if(data[i].TypeID=='3')
                    type="Conference (National & Internation)";
                else if(data[i].TypeID=='4')
                    type="Extra-Curriculum Activities";
                else
                    type="-NA-";

                var images=data[i].DocumentFilename.split(',');
                var image_content='';
                images.forEach(function(item){
                    image_content += '<a href=file?type=documents&name=' + item + ' target="_blank"><i class="fas fa-image"></i>&nbsp;</a>';
                });

                text += '<tr>'; 
                text += '<td>' + data[i].Title + '</td>';
                text += '<td>' + type + '</td>';
                text += '<td>'+image_content+'</td>';
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