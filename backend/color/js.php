<script type="text/javascript">
$(function() {

    $.ajax({
        type: "POST",
        url: "ajax/get_color.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.clcode.length; count++) {

                var status = '';
                if (result.status[count] == 'Y')
                    status = 'เปิดใช้งาน'
                else
                    status = 'ปิดใช้งาน'
                    
                $('#tableColor').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .clcode[
                        count] + '" data-whatever="' + result.clcode[
                        count] + '"><td>' + result.clname[count] + '</td><td>' + result.grname[count] + '</td><td>' +
                    status + '</td></tr>');
            }

            var table = $('#tableColor').DataTable({
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
        url: "ajax/getsup_color.php",
        data: "idcode=" + recipient,
        success: function(result) {
            modal.find('.modal-body #clcode').val(result.clcode);
            modal.find('.modal-body #clname').val(result.clname);
            modal.find('.modal-body #grcode').val(result.grcode);
            modal.find('.modal-body #status').val(result.status);

        }
    });
});

$("#btnRefresh").click(function() {
    window.location.reload();
});

$("#frmAddColor").submit(function(e) {
    e.preventDefault();
    
    $.ajax({
        type: "POST",
        url: "ajax/add_color.php",
        data: $("#frmAddColor").serialize() +
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

$("#frmEditColor").submit(function() {

    $.ajax({
        type: "POST",
        url: "ajax/edit_color.php",
        data: $("#frmEditColor").serialize() +
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
</script>