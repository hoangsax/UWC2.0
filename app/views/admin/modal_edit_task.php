<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
<div class="modal fade" id="confirm-edit-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Modify Task</h5>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="date-edit" style="font-weight: 500;">NGÀY ASSIGN TASK</label>
                            <input type="date" class="form-control mt-2" id="date-edit" name="date-edit"
                                value="2023-04-20" 
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idvehicle-edit" style="font-weight: 500;">Vehicle ID</label>
                                <input type="text" class="form-control mt-2" id="idvehicle-edit" name="idvehicle-edit" 
                                        value="79L4-XXXX"
                                        placeholder="Enter ID Vehicle" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="time-edit" style="font-weight: 500;">GIỜ ASSIGN TASK</label>
                                <input type="time" class="form-control mt-2" id="time-edit" name="time-edit" 
                                value="15:30"
                                required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="time_end-edit" style="font-weight: 500;">GIỜ KẾT THÚC</label>
                                <input type="time" class="form-control mt-2" id="time_end-edit" name="time_end-edit"
                                value="18:30" required>
                            </div>
                        </div>
                        
                    </div>    
                    <div class="row mt-2">  
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="listMCP-edit" style="font-weight: 500;">DANH SÁCH MCP</label>
                            <input class= "mt-2" style="font-weight: 500;" type="text" id="listMCP-edit" name="listMCP-edit" >
                            </div>
                        </div>
                    </div>                                  
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                <a href="#"><button type="button" class="btn btn-success" data-dismiss="modal">Save</button></a>
            </div>
        </div>
        </div>
</div>
<script>
$(document).ready(function() {
  $('#listMCP-edit').selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    create: true,
    options: [
      {value: 'Giá trị 1', text: 'Giá trị 1'},
      {value: 'Giá trị 2', text: 'Giá trị 2'},
      {value: 'Giá trị 3', text: 'Giá trị 3'},
      // Thêm các giá trị khác vào đây
    ],
    items: ['Giá trị 1', 'Giá trị 2'],
    render: {
      item: function(item, escape) {
        return '<div>' + escape(item.value) + '</div>';
      },
      option: function(item, escape) {
        return '<div>' + escape(item.value) + '</div>';
      }
    }
  });
});

    $('[data-target="#confirm-edit-modal"]').click(function() {
        var target = $(this).data('target');
        $(target).modal('show');
    });

</script>