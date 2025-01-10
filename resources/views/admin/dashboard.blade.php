<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white px-4 py-3 shadow">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <div>
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="text-sm bg-red-500 px-4 py-2 rounded hover:bg-red-700">
                   Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <!-- Sidebar & Content -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-gray-800 text-white p-4">
            <ul>
                <li class="mb-4">
                    <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                        Dashboard
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/products" class="block py-2 px-4 rounded hover:bg-gray-700">
                        Manage Products
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/orders" class="block py-2 px-4 rounded hover:bg-gray-700">
                        View Orders
                    </a>
                </li>
                <li>
                    <a href="/admin/users" class="block py-2 px-4 rounded hover:bg-gray-700">
                        Manage Users
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 p-6">
            <h2 class="text-2xl font-bold mb-4">Welcome, Admin!</h2>
            <div class="grid grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Total Products</h3>
                    <p class="text-gray-600 text-lg">{{ $totalProducts ?? '0' }}</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Total Orders</h3>
                    <p class="text-gray-600 text-lg">{{ $totalOrders ?? '0' }}</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Total Users</h3>
                    <p class="text-gray-600 text-lg">{{ $totalUsers ?? '0' }}</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="background: #e74c3c; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px;">
        Logout
    </button>
</form>
<div class="d-flex justify-content-between align-items-center">
    <h1>Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
<div class="bg-body-tertiary p-5 rounded">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
  </div>