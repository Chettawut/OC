<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_edit" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-gradient-secondary">
                <h5 class="modal-title">แก้ไขสี</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmEditColor" id="frmEditColor" method="POST" style="padding:10px;" action="javascript:void(0);">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label class="col-form-label">ชื่อสี </label>
                            <input type="text" class="form-control" name="clname" id="clname" required>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">หมวดสินค้า </label>
                            <select class="form-control" name="grcode" id="grcode" required>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `group` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["grcode"].'">'.$row["grname"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label class="col-form-label">สถานะการใช้งาน</label>
                            <select class="form-control" name="status" id="status">

                                <option value="Y">เปิดการใช้งาน</option>
                                <option value="N">ปิดการใช้งาน</option>

                            </select>
                        </div>
                    </div>


                    <hr>
                    <input type="hidden" id="clcode" name="clcode">
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" form="frmEditColor" class="btn btn-primary">แก้ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>