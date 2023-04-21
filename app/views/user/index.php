<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/employee/UI_Employee1.css" >
    <!-- ======= Scripts ====== -->
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=ROOT?>/assets/jquery/jquery-3.6.4.js"></script>
</head>
<body style="margin: 0;">
    <!-- Topbar Start -->
    <div class="row align-items-center d-flex p-3" style="background-color: #d9e6ff; padding-top: 0;">
        <div class="col-md-6 ps-3">
            <a href="#" style="text-decoration: none; color: black;">
                <h1 style="margin-top: 0; margin-bottom: 0;">UWC-2.0</h1>
            </a>
        </div>
        <div class="col-md-6 pe-4">
            <div class="align-items-center d-flex justify-content-end">
                <i class="fas fa-bell me-4"></i>
                <div class="inline-block me-4">
                    <div style="font-weight: 500;"><?=$username?></div>
                    <div><?=$type?></div>
                </div>
                <img src="<?=ROOT?>/assets/images/avt_user.jpg" alt="Avatar" class="avatar me-4">
                <div>
                    <a href="<?php echo ROOT; ?>/user/logout" class="nav-item nav-link" style="font-weight: 500;">
                        <i class="bi bi-box-arrow-right text-dark"></i>
                        Đăng xuất
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- List Tab Start -->
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="list-group">
                <a class="list-group-item active" href="<?=ROOT?>/user/profile_tab" data-url= "<?=ROOT?>/user/profile_tab">
                <i class="fas fa-address-card me-2"></i>Thông Tin Cá Nhân</a>
                <a class="list-group-item" href="<?=ROOT?>/user/calendar_tab" data-url="<?=ROOT?>/user/calendar_tab">
                <i class="bi bi-calendar3 me-2"></i>Lịch Làm Việc</a>
                <a class="list-group-item" href="<?=ROOT?>/user/notify_tab" data-url="<?=ROOT?>/user/notify_tab">
                <i class="fas fa-comments me-2"></i>Giao Tiếp</a>
            </div>
        </div>
        <div class="col-md-9 mt-4">
            <div id="tab-content"></div>
        </div>
    </div>
    <!-- List Tab End -->
    <script>   
      $(document).ready(function() {
        $('#tab-content').load($('a.list-group-item.active').data('url'));
        $('a.list-group-item').click(function() {
          var url = $(this).data('url');
          var clickedTab = $(this);
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
              $('#tab-content').html(data);
              $('a.list-group-item').removeClass('active');
              clickedTab.addClass('active');
            }
          });
          return false;
        });
      });
    </script>
</body>

</html>