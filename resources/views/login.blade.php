<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css') ?>">
	<title>Login</title>
</head>
<body style="background-color: #0B2447;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12 p-5 text-center">
                <div class="pt-5">
                    <img src="https://pramukadiy.or.id/assets/uploads/2020/12/footer-kwardadiy.png" style="width: 250px;">
                </div>
                <div class="pt-3">
                    <h5 class="text-white">Administrasi Kwartir Daerah <br> Gerakan Pramuka DIY</h5>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-5 p-4 pt-5">
                <div class="row">
                    <div class="bg-light rounded p-5">
                        <div class="mb-3">
                            <h5 class="text-center">SILAHKAN LOGIN</h5>
                        </div>
						<form method="post" action="<?php echo url("dologin") ?>">
							@csrf
							@method('post')
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="text" name="username_login" class="form-control" placeholder="Username">
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="password" name="password_login" class="form-control" placeholder="Password">
							</div>
							<button class="btn text-white w-100" style="background-color: #0B2447;">Login</button>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>