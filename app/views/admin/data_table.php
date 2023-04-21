<div class="card">
    <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Bảng thông tin chung
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form methode="POST">
            <table id="employee-table" class="table table-striped" >
                <thead>
                    <tr>
                        <th>Mã số</th>
                        <th>Họ tên</th>
                        <th>Vai trò</th>
                        <th>Ngày giao việc</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết công việc</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($data['allUser'] as $user){?>
                            <tr id="row_<?=$i?>">
                                    <td><?php echo $user['id'];?></td>
                                    <td><?php echo $user['name'];?></td>
                                    <td><?php echo $user['type'];?></td>
                                    <td><?php echo $user['Date']?? "N/A";?></td>
                                    <td><?php echo "<span class=\"badge bg-secondary\">N/A</span>";?></td>
                                    <td>
                                        <a href="UI_DetailsTask.php" class="ms-5">...</a>
                                    </td>
                                    <td>
                                        
                                        <div class="form-group">
                                            <!-- <button class="btn btn-sm btn-dark" data-target="#confirm-edit-modal" name="edit" onclick="edit_par(<?=$user['id']?>)">Sửa</button> -->
                                            <?php //require 'modal_edit_employee.php';?>
                                            <button class="btn btn-sm btn-danger" data-target="#confirm-delete-modal" name="delete" onclick="del_par(<?=$user['id']?>)">Xoá</button>
                                            <?php require 'modal_delete_employee.php'; ?>
                                        </div>
                                    
                                    </td>
                                <?php $i = $i + 1; ?>
                            </tr>
                    <?php }?> 
                </tbody>
            </table>
            </form>
            <?php $this->modal_add_employee($data); ?>
        </div>
    </div>  
</div>
