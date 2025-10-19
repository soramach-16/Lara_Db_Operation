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
        <h1>Staffs Index Page</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shop</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->name }}</td>
                            <td>{{ $staff->shop_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
</body>
</html>