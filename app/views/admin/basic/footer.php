<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="http://techz.in" target="_blank">Iewduh Techz Private
            Limited</a>.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

</div>
<!-- ./wrapper -->

<!-- DataTables -->
<link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" />

<!-- DataTables -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!--<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>

<script>
    $('.select2').select2();

    function getBase64(file) {
        return new Promise(function(resolve) {
        var reader = new FileReader();
        reader.onloadend = function() {
            resolve(reader.result)
        }
        reader.readAsDataURL(file);
        });
    }

    function onError(rc) {
        console.log(rc);
    }

    // // for treeview
    // $('.nav-treeview').find("a").each(function() {
    //     if (this.href == document.URL){
    //         $(this).parent().parent().siblings().addClass('active');
    //         // $(this).addClass('active');
    //         $(this).css("background-color", "rgb(94 114 228 / 38%)");
    //         $(this).parent().parent().parent().addClass('menu-open');
    //     }
    // });


    // for nav-link
    $("ul li a.nav-link").each(function() {
        if (this.href == document.URL){
            if ($(this).parent().hasClass("has-treeview") || $(this).parent().parent().parent().hasClass("has-treeview")){
                $(this).parent().parent().siblings().addClass('active');
                // $(this).addClass('active');
                $(this).css("background-color", "rgb(94 114 228 / 38%)");
                $(this).parent().parent().parent().addClass('menu-open');

                document.title=$(this).text() +" | "+$(this).parent().parent().siblings().text();
            }else{
                $(this).addClass('active');
                document.title=$(this).text();

            }
        }
    });


    function loadSelect(id, data,isSelect=true) {

        var text;
        if (data.length == 0) {
            text += "<option disabled>No Data</option>";
        } else {
            if (isSelect)
                text += "<option value=-1> Select </option>";
            for (let i = 0; i < data.length; i++) {
                text += '<option value="' + data[i][Object.keys(data[i])[0]] + '">' + data[i][Object.keys(data[i])[1]] + '</option>';
            }
        }
        $(id).html("");
        $(id).append(text);
    }

    function  notify(type,text) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });


        switch(type){
            case "success":
                Toast.fire({
                    icon: 'success',
                    title: text
                });
                break;
            case "error":
                Toast.fire({
                    icon: 'error',
                    title: text
                });
                break;
            case "info":
                Toast.fire({
                    icon: 'info',
                    title: text
                });
                break;
            default:
                Toast.fire({
                    icon: 'info',
                    title: text
                });
        }

    }

    Array.prototype.remove = function(tofind) {
        return this.splice(this.map(function(item) { return item; }).indexOf(tofind), 1);
    };


    // async function getBase64(file) {
    //     debugger;
    //     return await new Promise((resolve, reject) => {
    //         const reader = new FileReader();
    //         reader.readAsDataURL(file);
    //         reader.onload = () => resolve(reader.result);
    //         reader.onerror = error => reject(error);
    //     });
    // }
</script>
</body>

</html>