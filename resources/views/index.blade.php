<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易作業系統</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- 導覽列 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">我的網站</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">功能</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">聯絡我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('log.index') }}">登入</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 折線圖區域 -->
    <div class="container mt-5">
        <h2>數據圖表</h2>
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>
    <!-- 表格區域 -->
    <div class="container mt-5">
        <h2>資料表</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>名稱</th>
                    <th>描述</th>
                    <th>價格</th>
                </tr>
            </thead>
            <tbody>
                <!-- 範例動態數據，當連接到後端時可以迭代傳遞資料 -->
                <!-- 假設用 PHP / Laravel Blade 模板語法 -->
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (含 Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Chart.js 折線圖初始化 -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/sales', // 请求你的 Laravel 后端接口
                method: 'GET',
                success: function(response) {
                    // 在这里处理从后端获取的数据
                    var dates = response.dates;
                    var sales = response.sales;

                    // 使用 Chart.js 绘制图表
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: dates,
                            datasets: [{
                                label: '銷售量',
                                data: sales,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: true
                            }]
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX 请求失败: ' + status + ', ' + error);
                }
            });
        });
    </script>
</body>

</html>