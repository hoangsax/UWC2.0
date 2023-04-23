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
                    <th>Name</th>
                    <th>Vehicle Number</th>
                    <th>Weight</th>
                    <th>Capacity</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody class="text-center" id="vehicle"><p id="test"></p>
                <!-- <tr>
                    <td>tck0710</td>
                    <td>Truck</td>
                    <td>79L4-XXXX</td>
                    <td>150</td>
                    <td>2000</td>
                </tr> -->
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
                <tbody id = "MCP">
                <tr id = "MCP_1">
                    <td>001</td>
                    <td>q1</td>
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
                <tbody id = "other">
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

    function view_task(id){
        task = <?=json_encode($data['allTask'])?>;
        veh = <?=json_encode($data['allVehicle'])?>;
        mcp = <?=json_encode($data['allMCP'])?>;
        for (i = 0; i < task.length; i++){
            if (task[i]['ID'] == id){
                task_t = task[i];
                console.log(task_t);
                break;
            }
        }
        //Vehicle Select
        for (i = 0; i < veh.length; i++){
            if (veh[i]['ID'] == task_t['Vehicle_ID']){
                veh_t = veh[i];
                break;
            }
        }
        //Vehicle Info
        content_veh = document.getElementById("vehicle");
        tr = document.createElement("tr");
        td = [];
        veh_1 = Object.values(veh_t);
        for(i = 0; i < veh_1.length; i++){
            td.push(document.createElement("td"));
            td[i].innerHTML = veh_1[i];
            tr.appendChild(td[i]);
        }
        content_veh.appendChild(tr);
        //MCP Select
        mcp_list = task_t['MCP_List'].split(",");
        mcp_t = [];
        for (i = 0; i < mcp_list.length; i++){
            for (j = 0; j < mcp.length; j++){
                if (mcp_list[i] == mcp[j]['ID']){
                    mcp_t[i] = mcp[j];
                    console.table(mcp_t[i]);
                }
            }
        }
        for (i = 0; i < mcp_t)
    }
</script>