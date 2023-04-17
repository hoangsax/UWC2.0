<div class="card">
    <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Data Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="employee-table" class="table table-striped" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Date Assign</th>
                        <th>Status</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($alluser as $user){?>
                            <tr>
                                <td><?php echo $user['ID'];?></td>
                                <td><?php echo $user['name'];?></td>
                                <td><?php echo $user['role'];?></td>
                                <td><?php echo $user['Date']?? "N/A";?></td>
                                <td><?php echo "<span class=\"badge bg-secondary\">N/A</span>";?></td>
                                <td>
                                    <a href="UI_DetailsTask.php" class="ms-5">...</a>
                                </td>
                                <td>
                                    <?php require 'modal_edit_employee.php'; ?>
                                    <?php require 'modal_delete_employee.php'; ?>
                                </td>
                        <?php }?>   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Date Assign</th>
                        <th>Status</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            <?php require 'modal_add_employee.php'; ?>
        </div>
    </div>  
</div>