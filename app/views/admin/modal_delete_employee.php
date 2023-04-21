<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5>Xác nhận xóa</h5>
            </div>
            <div class="modal-body">
            Bạn có chắc chắn muốn xóa thông tin nhân viên? </br>
            <p> ID: <span id="tester"></span></p>
            </div>
            <form method="POST">
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger" id="btn_del_employee" name="btn_del_employee" value="0">Xóa</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function del_par(id){
        document.getElementById("tester").innerText = id;
        document.getElementById("btn_del_employee").value = id;
    }
</script>