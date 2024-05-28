<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="maincontent">\
    <section class="content">
        <div class="container-fluid">
            <div class="card col-md-5 mx-auto mt-5">

                <div class="card-header">

                    <div class="h2 text-center mb-4">
                        Change Password
                    </div>
                </div>

                <div class="card-body px-lg-4 py-lg-4">
                    <form id="form-change-password" role="form">
                        <div class="form-group mb-3">
                            <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Old Password" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="New Password" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" autocomplete="off">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="form-control btn btn-primary my-4">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function changePassword() {
        var obj = new Object();
        obj.Module = "Auth";
        obj.Page_key = "ChangePassword";
        var json = new Object();
        json.oldpassword = $("#oldpassword").val();
        json.newpassword = $("#newpassword").val();
        json.confirmpassword = $("#confirmpassword").val();

        obj.JSON = json;
        TransportCall(obj);
    }

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
            error.insertAfter(element);
        }
    });

    jQuery.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != $(param).val();
    }, "You cannot set this password");

    let Validator = $("#form-change-password").validate({
        rules: {
            oldpassword: {
                required: true,
                notEqual: "#newpassword"
            },
            newpassword: {
                required: true,
                notEqual: "#oldpassword"
            },
            confirmpassword: {
                required: true,
                equalTo: "#newpassword"
            }
        },
        messages: {
            confirmpassword: {
                equalTo: "New Password and Confirm Password doesn't match"
            }
        },
        submitHandler: function(form) {
            if ($("#form-change-password").valid()) {
                changePassword();
            } else {
                notify("error", "PLEASE FILL ALL THE MANDATORY FIELDS!!");
            }
        }
    });

    function onSuccess(rc) {

        if (rc.return_code) {
            switch (rc.Page_key) {
                case "ChangePassword":
                    alert(rc.return_data)
                    // notification("success", rc.return_data);
                    break;
            }
        } else {
            alert("Error");
        }
        // alert(JSON.stringify(args));
    }

    function onError(args) {
        alert(JSON.stringify(args));
    }
</script>