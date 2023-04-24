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
                </tbody>
            </table>
            <table class="table">
                <h5>MCP Info</h5>
                <thead class="text-muted">
                <tr>
                    <th>ID</th>
                    <th>MCP Name</th>
                    <th>Capacity</th>
                    <th>Status(%)</th>
                </tr>
                </thead>
                <tbody id = "MCP">
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
                break;
            }
        }
        display_task(task_t);
        //Vehicle Select
        for (i = 0; i < veh.length; i++){
            if (veh[i]['ID'] == task_t['Vehicle_ID']){
                veh_t = veh[i];
                break;
            }
        }
        display_vehicle(veh_t);

        //MCP Select
        mcp_list = task_t['MCP_List'].split(",");
        mcp_t = [];
        for (i = 0; i < mcp_list.length; i++){
            for (j = 0; j < mcp.length; j++){
                if (mcp_list[i] == mcp[j]['ID']){
                    mcp_t[i] = mcp[j];
                }
            }
        }
        display_mcp(mcp_t);
    }

    function display_task(task_t){
        content_task = document.getElementById("other");
        while(content_task.hasChildNodes())
            content_task.removeChild(content_task.firstChild);
        tr = document.createElement("tr");
        td = [];
        td.push(document.createElement("td"));
        if (task_t['Status'] == "Completed"){
            td[0].className = "badge text-bg-success";
        }
        else if (task_t['Status'] == "Pending"){
            td[0].className = "badge text-bg-warning";
        }
        else{
            td[0].className = "badge text-bg-primary";
        }
        td[0].innerHTML = task_t['Status'];
        console.log(td[0]);
        tr.appendChild(td[0]);
        task_t2 = Object.values(task_t);
        for (i = 1; i < 4; i++){
            td.push(document.createElement("td"));
            if (4 < i + 3){
                task_t2[i+3] = time_12f(task_t2[i+3]);
            }
            td[i].innerHTML = task_t2[i+3];
            tr.appendChild(td[i]);
        }
        content_task.appendChild(tr);

    }

    function display_vehicle(veh_t){
        content_veh = document.getElementById("vehicle");
        while (content_veh.hasChildNodes())
            content_veh.removeChild(content_veh.firstChild);
        tr = document.createElement("tr");
        td = [];
        veh_1 = Object.values(veh_t);
        for(i = 0; i < veh_1.length; i++){
            td.push(document.createElement("td"));
            td[i].innerHTML = veh_1[i];
            tr.appendChild(td[i]);
        }
        content_veh.appendChild(tr);
    }

    function display_mcp(mcp_t){
        content_mcp = document.getElementById("MCP");
        while (content_mcp.hasChildNodes())
            content_mcp.removeChild(content_mcp.firstChild);
        for (i = 0; i < mcp_t.length; i++){
            mcp_t2 = Object.values(mcp_t[i]);
            tr = document.createElement("tr");
            td = [];
            for (j = 0; j < mcp_t2.length - 1; j++){
                td.push(document.createElement("td"));
                td[j].innerHTML = mcp_t2[j];
                tr.appendChild(td[j]);
            }
            content_mcp.appendChild(tr);
        }
    }

    function time_12f(time){
        time = time.substring(0, 5);
        if ((time[0] + time[1]) == 0)
            return "12:00 PM";
        else if ((time[0] + time[1]) < 12){
            time += ' AM';
        }
        else if ((time[0] + time[1]) == 12){
            time += ' PM';
        }
        else{
            time = ((time[0] + time[1]) - 12) + time.substring(2, time.length); 
            if ((time[0] + time[1]) == '12'){
                time += ' AM';
            }
            else{
                time += ' PM';
            }
        }
        return time;
    }
</script>