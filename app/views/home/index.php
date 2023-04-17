<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <style>
        .frame_login{
            background-color: #f2f2f2c9;
            padding: 40px 30px 40px 30px;
        }
        .bg_login{
            background-image: url(https://accgroup.vn/wp-content/uploads/2023/02/Background-la-gi.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg_login">
    <div class="row" style="justify-content: center;">
        <div class="col-md-6 p-5">
            <div class="frame_login">
                    <h4 style="font-weight: 700;">ĐĂNG NHẬP</h4>
                    <h6 class="mt-3 text-muted text-white" style="font-weight: 500;">Điền thông tin để đăng nhập</h6>
                    <form action="index.php?controller=user&action=login" method="post">
                        <div class="form-group mt-5">
                            <label for="email" style="font-weight: 700;">EMAIL</label>
                            <div class="input-group">
                                <input type="text" class="form-control mt-3"  name='email'
                                        id="email" style="border-radius: 0; padding-left: 40px;" 
                                        placeholder="Nhập email...">
                                <span class="input-group-addon" 
                                        style="position: absolute; left: 15px; top: 23px;">
                                        <i class="fa fa-id-card text-success"></i>
                                </span>
                            </div>
                            </div>                                  
                        <div class="form-group mt-3">
                            <label for="password" style="font-weight: 700;">MẬT KHẨU</label>
                            <div class="input-group">
                                <input type="password" class="form-control mt-3" name='password'
                                        id="password" style="border-radius: 0; padding-left: 40px;"
                                        placeholder="Nhập mật khẩu...">
                                <span class="input-group-addon" 
                                        style="position: absolute; left: 15px; top: 23px;">
                                        <i class="fa fa-lock text-success"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mt-3" style="font-weight: 500;" >
                            <label for="role"  style="font-weight: 700;">ĐĂNG NHẬP DÀNH CHO</label><br>
                            <div class="form-check-inline mt-2">
                                <label>
                                    <input type="radio" class="form-check-input" 
                                    name="role" value="backofficer" required> QUẢN TRỊ VIÊN
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label>
                                    <input type="radio" class="form-check-input" 
                                    name="role" value="employee" required> NHÂN VIÊN
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger mt-4" 
                                style="min-width: 120px; border-radius: 0;">
                                Đăng Nhập
                        </button>
                    </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function login() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if (email == "h@gmail.com" && password == "123")
            {
                $_SESSION('user') = email;
                $_SESSION('password') = password;
                require 
            }
        }
    </script>
</body>
</html>