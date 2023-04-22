<div class="modal fade" id="view-task-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4>Details Task</h4>
        </div>
        <div class="modal-body">
            <table class="table">
                <h5>Vehicle Info</h5>
                <thead class="text-muted">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Vehicle Number</th>
                    <th>Weight</th>
                    <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>tck0710</td>
                    <td>Truck</td>
                    <td>79L4-XXXX</td>
                    <td>150</td>
                    <td>2000</td>
                </tr>
                </tbody>
            </table>
            <table class="table">
                <h5>MCP Info</h5>
                <thead class="text-muted">
                <tr>
                    <th>ID</th>
                    <th>MCP Name</th>
                    <th>Capacity</th>
                    <th>Full</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>001</td>
                    <td>q1</td>
                    <td>500</td>
                    <td>90%</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>q2</td>
                    <td>500</td>
                    <td>90%</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>q3</td>
                    <td>500</td>
                    <td>90%</td>
                </tr>
                </tbody>
            </table> 
            <table class="table">
                <h5>Other Info</h5>
                <thead class="text-muted">
                <tr>
                    <th>Status</th>
                    <th>Assign Date</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="badge text-bg-success">Complete</span></td>
                    <td>2023-04-22</td>
                    <td>09:00 AM</td>
                    <td>10:00 AM</td>
                </tr>
                </tbody>
            </table>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<script>
    $('[data-target="#view-task-modal"]').click(function() {
        var target = $(this).data('target');
        $(target).modal('show');
    });
</script>