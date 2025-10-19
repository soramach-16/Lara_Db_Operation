<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Operation App</title>
</head>
<body>
    <header>
        <a class="my-navbar-brand" href="/">DB Operation App</a>
        <a class="my-navbar-brand" href="/staffs">Staffs</a>
        <a class="my-navbar-brand" href="/shops">Shops</a>
        <a class="my-navbar-brand" href="/items">Items</a>
    </header>
    <main>
        <h1>Shop Index Page</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ShopName</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shops as $shop)
                        <tr>
                            <td>{{ $shop->id }}</td>
                            <td>{{ $shop->shop_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
</body>
</html>