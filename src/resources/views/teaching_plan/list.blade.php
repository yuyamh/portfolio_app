<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>教案一覧</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script> --}}
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">だてまき</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">教案一覧 <span class="sr-only"></span></a>
                    <a class="nav-item nav-link" href="#">教案投稿</a>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>教案一覧</h2>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>日付</th>
                        <th>タイトル</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2020/06/30</td>
                        <td>テスト</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark  fixed-bottom">
        <div class="container text-center">
            <span class="text-light">だてまき</span>
        </div>
    </footer>
</body>
</html>
