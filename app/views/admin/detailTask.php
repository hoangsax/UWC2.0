<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết công việc</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

    <style>
      .calendar {
          max-width: 500px;
          margin: 0 auto;
      }

      .calendar th,
      .calendar td {
          text-align: center;
          padding: 10px;
      }

      .calendar .header {
          background-color: #007bff;
          color: #fff;
      }

      .calendar .days td:hover {
          background-color: #007bff;
          color: #fff;
          cursor: pointer;
      }

      .calendar .today {
          background-color: #007bff;
          color: #fff;
      }

      .calendar .selected {
          background-color: #28a745;
          color: #fff;
      }
    </style>
</head>
<body>
  <div class="p-4">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h2>Chi tiết công việc</h2>
          </div>
          <div class="col-md-6 mt-4 d-flex justify-content-end">
              <div class="row">
                  <h5 class="text-muted">Mã số việc: 0001</h5>
                  <div class="col-md-12">
                      <button class="btn btn-success btn-detail" data-target="#confirm-add-modal">Thêm</button>
                      <button class="btn btn-success btn-detail" data-target="#confirm-edit-modal">Chỉnh sửa </button>
                      <button class="btn btn-success btn-detail" data-target="#confirm-delete-modal">Xoá</button>
                      <a href="<?=ROOT?>/admin/"><button class="btn btn-success btn-detail">Trở lại</button></a>
                      <?php include 'modal_add_task.view.php' ?>
                      <?php include 'modal_edit_task.view.php' ?>
                      <?php include 'modal_delete_task.view.php' ?>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-5 pt-3" style="border: 1px solid #dfdddd;">
            <h4>Thông tin nhân viên</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>Mã số</th>
                        <th>Vai trò</th>
                        <th>Họ tên</th>
                        <th>Điện Thoại</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0001</td>
                        <td>Janitor</td>
                        <td>MinhLee</td>
                        <td>123456789</td>
                        <td>minhletravel@gmail.com</td>
                      </tr>
                    </tbody>
                </table> 
            </div>       
            <h4>Phương tiện</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>Mã số</th>
                        <th>Loại xe</th>
                        <th>Số xe</th>
                        <th>Trọng lượng</th>
                        <th>Sức chứa tối đa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0001</td>
                        <td>Truck</td>
                        <td>79-L4-XXXX</td>
                        <td>1700</td>
                        <td>200</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <h4>Thông tin MCP</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>Mã số</th>
                        <th>MCP</th>
                        <th>Sức chưa tối đa</th>
                        <th>Đầy</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0001</td>
                        <td>q1</td>
                        <td>500</td>
                        <td>90%</td>
                      </tr>
                      <tr>
                        <td>0002</td>
                        <td>q2</td>
                        <td>500</td>
                        <td>90%</td>
                      </tr>
                      <tr>
                        <td>0003</td>
                        <td>q3</td>
                        <td>500</td>
                        <td>90%</td>
                      </tr>
                      <tr>
                        <td>0004</td>
                        <td>q4</td>
                        <td>500</td>
                        <td>90%</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <h4>Thông tin khác</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>Trạng thái</th>
                        <th>Ngày giao việc</th>
                        <th>Thời gian</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Hoàn thành</td>
                        <td>04/04/2023</td>
                        <td>3 ngày</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-7">
          <div id="calendar"></div>
        </div>
      </div>
  </div>

  <script src="<?=ROOT?>/assets/scripts/employee_table.js"></script>
  <script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month',
            selectable: true,
            events: [
                {
                    title: 'Làng ĐH',
                    start: '2023-04-12T10:00:00',
                    end: '2023-04-12T11:30:00',
                    color: 'purple'
                },
                {
                    title: 'Ngã 4 Thủ Đức',
                    start: '2023-04-12T12:00:00',
                    end: '2023-04-12T14:30:00',
                    color: 'purple'
                },
                {
                    title: 'DH Bách Khoa',
                    start: '2023-04-14T14:30:00',
                    end: '2023-04-14T16:00:00',
                    color: 'green'
                }
            ],
            eventClick: function (event) {
                alert('Event: ' + event.title + '\nStart: ' + moment(event.start).format('YYYY-MM-DD HH:mm') + '\nEnd: ' + moment(event.end).format('YYYY-MM-DD HH:mm'));
            },
        });
    });
  </script>

</body>
</html>