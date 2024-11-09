<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>註冊畫面</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">註冊</h5>
                        <form id="registerForm" action="#" method="post">
                            <div class="form-group">
                                <label for="username">帳號</label>
                                <input type="text" class="form-control" id="username" placeholder="請輸入帳號" required>
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control" id="password" placeholder="請輸入密碼" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">確認密碼</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="請再次輸入密碼" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">註冊</button>
                        </form>
                        <p class="mt-3 text-center">已經有帳號了？<a href="{{ route('log.index') }}">登入</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>