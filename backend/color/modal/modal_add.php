<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_add" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-gradient-secondary">
                <h5 class="modal-title">เพิ่มสีสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="frmAddColor" id="frmAddColor" method="POST" style="padding:10px;"
                    action="javascript:void(0);">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label class="col-form-label">ชื่อสี </label>
                            <input type="text" class="form-control" name="add_clname" id="add_clname" required>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">ชื่อ Type </label>                            
                            <select class="form-control" name="add_typecode" id="add_typecode" required>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `type` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["typecode"].'">'.$row["typename"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <div class="col text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" form="frmAddColor" class="btn btn-primary">เพิ่ม</button>
                </div>
            </div>
        </div>
    </div>
</div>