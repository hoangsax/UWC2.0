<div class="modal fade" id="confirm-edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form method="POST">
            <div class="modal-header">
                <h5>Chỉnh sửa thông tin nhân viên</h5>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="edit_ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                <input type="number" class="form-control mt-2" id="edit_ID" name="ID" 
                        value="1" readonly required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="edit_name" style="font-weight: 500;">TÊN</label>
                <input type="text" class="form-control mt-2" id="edit_name" name="name" 
                        placeholder="Enter name" required>
                </div>
            </div>
        </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edit_email" style="font-weight: 500;">EMAIL</label>
                        <input type="email" class="form-control mt-2" id="edit_email" name="email" 
                                placeholder="Enter email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edit_phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                        <input type="tel" class="form-control mt-2" id="edit_phone" name="phone" 
                            value="2" required>
                    </div>
                </div>
        
            </div>                                          
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                            <input type="text" class="form-control mt-2" id="edit_address" name="address" 
                                value="Enter address" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edit_gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                        <div class="form-check-inline mt-1">
                            <label>
                                <input type="radio" class="form-check-input" id="male" name="edit_gender" value="male" required>Nam
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label>
                                <input type="radio" class="form-check-input" id="female" name="edit_gender" value="female" required>Nữ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edit_type" style="font-weight: 500;">VỊ TRÍ</label><br>
                        <div class="form-check-inline mt-1">
                            <label>
                                <input type="radio" class="form-check-input" id="collector" name="edit_type" value="Collector" required>Collector
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label>
                                <input type="radio" class="form-check-input" id="janitor" name="edit_type" value="Janitor" required>Janitor
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary" name="btn_edit_employee" value="0">Lưu</button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    att = document.createAttribute("checked");
    att2 = document.createAttribute("checked");
    function edit_par(id){
        user = <?php echo json_encode($data['allUser'])?>;
        for(i = 0; i < user.length; i++){
            if (user[i]['id'] == id){
                document.getElementById('edit_ID').value = user[i]['id'];
                document.getElementById('edit_name').value = user[i]['name'];
                document.getElementById('edit_email').value = user[i]['email'];
                document.getElementById('edit_phone').value = user[i]['phone'];
                document.getElementById('edit_address').value = user[i]['address'];     
                if (user[i]['gender'] == "male"){
                    document.getElementById('female').removeAttribute("checked");
                    document.getElementById('male').setAttributeNode(att);
                }
                else{
                    document.getElementById('male').removeAttribute("checked");
                    document.getElementById('female').setAttributeNode(att);
                }
                break;
            }
        }
    }
</script>