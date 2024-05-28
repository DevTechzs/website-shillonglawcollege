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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="maincontent">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Processes
                            </div>
                            <span class="float-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-lg"> <i class="fa fa-circle-thin"> <i class="fa fa-plus"></i> </i>Add Process</button>
                            </span>

                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title d-flex justify-content-center">New Process</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="form-process">
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="Name">Name</label>
                                                        <input type="text" class="form-control" name="Name" id="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="DefaultValue">Default Value</label>
                                                        <input type="text" class="form-control" name="DefaultValue" id="DefaultValue">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Rate">Rate</label>
                                                        <input type="number" class="form-control" name="Rate" id="Rate">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="IsService">IsService</label>
                                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                            <input type="checkbox" class="custom-control-input" id="IsService" />
                                                            <label class="custom-control-label" for="IsService"></label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Department">Department</label>
                                                        <select class="form-control select2" name="Department" id="Department" multiple="multiple" data-placeholder="Select Departments" style="width: 100%;"></select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Default Value</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">IsService</th>
                                        <th scope="col"></th>
                                    </tr>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Summernote -->
<script src="assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>

<script>
    $(function() {
        getDepartments();
        getProcess();
    });

    $.validator.addMethod("selectOption", function(value, element, arg) {
        return value !== '-1';
    }, "Please select one option.");

    $.validator.setDefaults({
        errorElement: 'span',
        errorClass: 'invalid-feedback',
        highlight: function(element) {
            $(element)
                .closest('.form-control')
                .addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-control')
                .removeClass('is-invalid');
        },
        errorPlacement: function(error, element) {
            if (element.is('select') && element.hasClass('select2')) {
                element.addClass('input-validation-error');
                error.insertAfter(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });

    let processValidator = $("#form-process").validate({
        rules: {
            Name: {
                required: true,
            },
            DefaultValue: {
                required: true,
                digits: true,
            },
            Rate: {
                required: true,
                digits: true,
            },
            Department: {
                required: true,
                selectOption: true,
            }
        },
        messages: {},
        submitHandler: function(form) {
            if ($("#form-process").valid()) {
                saveProcess();
            } else {
                notify("error", "PLEASE FILL ALL THE MANDATORY FIELDS!!");
            }
        }
    });

    function getDepartments() {
        let obj = {};
        obj.Module = "Settings";
        obj.Page_key = "getDepartments";
        obj.JSON = {};
        TransportCall(obj);
    }

    function getProcess() {
        let obj = {};
        obj.Module = "Settings";
        obj.Page_key = "getProcesses";
        obj.JSON = {};
        TransportCall(obj);
    }

    function onSuccess(rc) {

        if (rc.return_code) {
            switch (rc.Page_key) {
                case "getDepartments":
                    loadSelect("#Department", rc.return_data);
                    break;
                case "getProcesses":
                    loaddata(rc.return_data);
                    break;
                case "addProcess":
                    $("#modal-lg").modal("hide");
                    getProcess();
                    break;
                case "deleteItem":
                    getProcess();
                    break;
                default:
                    alert(rc.Page_key);
            }
        } else {
            alert(rc.return_data);
        }
        // alert(JSON.stringify(args));
    }

    function loaddata(data) {

        var table = $("#table");

        try {
            if ($.fn.DataTable.isDataTable($(table))) {
                $(table).DataTable().destroy();
            }
        } catch (ex) {}

        var text = ""

        if (data.length == 0) {
            // text += "No Data Found";
        } else {

            for (let i = 0; i < data.length; i++) {
                text += '<tr> ';

                text += '<th> ' + data[i].ProcessName + '</th>';
                text += '<td> ' + data[i].DefaultValue + '</td>';
                text += '<td> ';
                if (data[i].Rate != null)
                    text += data[i].Rate;
                text += '</td>';
                text += '<td> ';
                if (data[i].IsService == 1)
                    text += "Yes";
                else
                    text += "No";
                text += '</td>';
                text += '<td class="btn-group btn-group-sm">';
                // text += '   <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> View </a>';
                text += '   <a class="btn btn-info btn-sm text-white" onclick="onEdit(\'' + escape(JSON.stringify(data[i])) + '\')"> <i class="fas fa-pencil-alt"> </i> </a>';
                text += '</td>';
                text += '</tr >';
            }
        }

        $("#table tbody").html(text);

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

    function saveProcess() {

        let obj = {};
        obj.Module = "Settings";
        obj.Page_key = "addProcess";
        let json = {};
        if (ProcessID !== undefined) {
            json.ProcessID = ProcessID;
        }
        json.Name = $("#Name").val();
        json.DefaultValue = $("#DefaultValue").val();
        json.Rate = $("#Rate").val();
        json.IsService = $("#IsService").is(":checked");
        json.DepartmentID = $("#Department").val();

        obj.JSON = json;
        TransportCall(obj);
    }

    let ProcessID;

    function onEdit(Process) {
        Process = JSON.parse(unescape(Process));

        console.log(JSON.stringify(Process));
        ProcessID = Process.ProcessID;
        $("#Name").val(Process.ProcessName);
        $("#DefaultValue").val(Process.DefaultValue);
        if (Process.Rate != null)
            $("#Rate").val(Process.Rate);
        $("#IsService").prop('checked', Process.IsService == 1);
        $("#Department").select2().val((Process.DepartmentID).split(",")).trigger("change");

        $("#modal-lg").modal("show");
    }

    $('#modal-lg').on('hidden.bs.modal', function() {
        $(this).find('.is-invalid').removeClass("is-invalid");
        $(this).find('.input-validation-error').removeClass("input-validation-error");
        processValidator.resetForm();
        ProcessID = undefined;
        $("input").val("");
        $("#IsService").prop('checked', false);
        $('#Department').val(null).trigger('change');
    });
</script>