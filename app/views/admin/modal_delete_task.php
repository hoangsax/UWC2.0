<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="text-success" style="padding-left: 10px;">
                <i class="fas fa-trash me-3"></i>Are you sure you want to delete
                <br><br><br><br><br>
            </h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Delete</button>
            </div>
        </div>
        </div>
</div>

<script>
     $('[data-target="#confirm-delete-modal"]').click(function() {
        var target = $(this).data('target');
        $(target).modal('show');
    });
</script>