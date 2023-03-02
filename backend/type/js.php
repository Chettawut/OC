<script type="text/javascript">
$(function() {

    $.ajax({
        type: "POST",
        url: "ajax/get_type.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.typecode.length; count++) {

                var status = '';
                if (result.status[count] == 'Y')
                    status = 'เปิดใช้งาน'
                else
                    status = 'ปิดใช้งาน'

                $('#tableType').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .typecode[
                        count] + '" data-whatever="' + result.typecode[
                        count] + '">.<td>' + result.typename[count] + '</td><td>' +
                    status + '</td></tr>');
            }

            var table = $('#tableType').DataTable({
                "dom": '<"pull-right"f>rt<"bottom"p><"clear">',
                "ordering": false
            });

            $(".dataTables_filter input[type='search']").attr({
                size: 60,
                maxlength: 60
            });



        }
    });


})
$('#modal_edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var modal = $(this);

    $.ajax({
        type: "POST",
        url: "ajax/getsup_type.php",
        data: "idcode=" + recipient,
        success: function(result) {
            modal.find('.modal-body #typecode').val(result.typecode);
            modal.find('.modal-body #typename').val(result.typename);
            modal.find('.modal-body #status').val(result.status);

        }
    });
});

$("#btnRefresh").click(function() {
    window.location.reload();
});

//เพิ่มประเภท
$("#frmAddType").submit(function(e) {
    e.preventDefault();
    
    $.ajax({
        type: "POST",
        url: "ajax/add_type.php",
        data: $("#frmAddType").serialize() +
            "&id=" + '<?php echo $_SESSION['id'];?>',
        success: function(result) {
            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            }
        }
    });


});

$("#frmEditType").submit(function() {

    $.ajax({
        type: "POST",
        url: "ajax/edit_type.php",
        data: $("#frmEditType").serialize(),
        success: function(result) {

            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            }
        }
    });

});
</script>