<script type="text/javascript">
$(function() {


    $.ajax({
        type: "POST",
        url: "ajax/get_stock.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.stcode.length; count++) {

                $('#tableStock').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .stcode[
                        count] + '" data-whatever="' + result.stcode[
                        count] + '">.<td>' + result.stcode[count] + '</td><td>' +
                    result.stname1[count] + '</td><td style="text-align:right">' +
                    result.typename[count] + '</td><td style="text-align:right">' +
                    result.amount1[count] + '</td><td  style="text-align:center">' + result
                    .unit[count] + '</td></tr>');
            }

            var table = $('#tableStock').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });

            $(".dataTables_filter input[type='search']").attr({
                size: 40,
                maxlength: 40
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
        url: "ajax/getsup_stock.php",
        data: "idcode=" + recipient,
        success: function(result) {            

            modal.find('.modal-body #stcode').val(result.stcode);
            modal.find('.modal-body #stname1').val(result.stname1);
            modal.find('.modal-body #unit').val(result.unit);
            modal.find('.modal-body #typecode').val(result.typecode);
            modal.find('.modal-body #bdcode').val(result.bdcode);
            modal.find('.modal-body #clcode').val(result.clcode);    
            modal.find('.modal-body #status').val(result.status);

        }
    });
});


$("#btnRefresh").click(function() {
    window.location.reload();
});

//เพิ่มวัสดุ
$("#frmAddStock").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "ajax/add_stock.php",
        data: $("#frmAddStock").serialize(),
        success: function(result) {
            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            } else {
                alert('รหัสซ้ำ');
            }
        }
    });


});

$("#frmEditStock").submit(function(e) {
    e.preventDefault();
    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
    $.ajax({
        type: "POST",
        url: "ajax/edit_stock.php",
        data: $("#frmEditStock").serialize(),
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