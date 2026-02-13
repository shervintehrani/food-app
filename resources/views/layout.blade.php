<!DOCTYPE html>
<html>
<head>
    <title>Food Order</title>


    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Food App</a>
        <a href="/cart" class="btn btn-warning">Cart</a>
    </div>
</nav>


<!-- Page Content -->
<div class="container mt-4">
    @yield('content')
</div>


</body>
</html>
