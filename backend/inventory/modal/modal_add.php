<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_add" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-gradient-secondary">
                <h5 class="modal-title">เพิ่มสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmAddStock" id="frmAddStock" method="POST" style="padding:10px;" action="javascript:void(0);">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">รหัสสินค้า</label>
                            <input type="text" class="form-control" name="add_stcode" id="add_stcode" minlength="6"
                                maxlength="9" required>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label class="col-form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" name="add_stname1" id="add_stname1" required>
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">หน่วย</label>
                            <select class="form-control" name="add_unit" id="add_unit" required>
                            <option value="">--- กรุณาเลือก ---</option>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `unit` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["unit"].'">'.$row["unit"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">หมวดสินค้า</label>
                            <select class="form-control" name="add_grcode" id="add_grcode" required>
                                <option value="">--- กรุณาเลือก ---</option>
                                <?php 
                                            
                                        	$sql = "SELECT * FROM `group` where status = 'Y' ";
                                            $query = mysqli_query($conn,$sql);
                                        
                                            while($row = $query->fetch_assoc()) {
                                                echo '<option value="'.$row["grcode"].'">'.$row["grname"].'</option>';
                                            }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">ประเภทสินค้า</label>
                            <select class="form-control" name="add_typecode" id="add_typecode" required>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">แบรนด์สินค้า</label>
                            <select class="form-control" name="add_bdcode" id="add_bdcode" required>
                            </select>
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <label for="recipient-name" class="col-form-label">สีสินค้า</label>
                            <select class="form-control" name="add_clcode" id="add_clcode" required>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" id="btnAddSo" form="frmAddStock" class="btn btn-primary">เพิ่ม</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>