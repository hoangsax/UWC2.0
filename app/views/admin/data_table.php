<div class="card">
    <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Bảng thông tin chung
    </div>
    <div class="card-body">
        <div class="table-responsive">
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
                        foreach ($data['allUser'] as $key => $user){
                            if ($user['type'] == "Admin") continue;?>
                            <tr id="row_<?=$i?>">
                                    <td><?php echo $user['id'];?></td>
                                    <td><?php echo $user['name'];?></td>
                                    <td><?php echo $user['type'];?></td>
                                    <td>
                                        <?php
                                            $key = NULL;
                                            $key = array_search($user['id'], array_reverse(array_column($data['allTask'], 'Staff_ID'), true));
                                            if (!empty($key) || $key === 0){
                                                echo $data['allTask'][$key]['Assign_Date'];
                                                
                                            }
                                            else 
                                                echo "N/A";
                                            ?></td>
                                    <td>
                                        <?php
                                            if (!empty($key) || $key === 0){
                                                $status = $data['allTask'][$key]['Status'];
                                                if ($status == "Completed")
                                                    echo "<span class=\"badge text-bg-success\">Completed</span>";
                                                if ($status == "Pending")
                                                    echo "<span class=\"badge text-bg-warning\">Pending</span>";
                                                if ($status == "Confirmed")
                                                    echo "<span class=\"badge text-bg-primary\">Confirmed</span>";
                                            }
                                            else
                                                echo "<span class=\"badge bg-secondary\">N/A</span>";
                                        ?>
                                    </td>
                                    <td>
                                    <form method="POST">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm ms-5" name="detail_Task" value="<?=$user['id']?>" ><a>...</a></button>
                                    </div>
                                    </form>
                                    </td>
                                    <td>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-danger" data-target="#confirm-delete-modal" name="delete" onclick="del_par(<?=$user['id']?>)">Xoá</button>
                                            <?php require 'modal_delete_employee.php'; ?>
                                        </div>
                                    
                                    </td>
                                <?php $i = $i + 1; ?>
                            </tr>
                    <?php }?> 
                </tbody>
            </table>
            <?php $this->modal_add_employee($data); ?>
        </div>
    </div>  
</div>
<script>
</script>