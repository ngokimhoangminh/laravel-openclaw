<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel OpenClaw</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-900">Laravel OpenClaw</h1>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-4">{{ auth()->user()->email ?? 'User' }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button 
                            type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition"
                        >
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Welcome to your Dashboard!</h2>
            <p class="text-gray-600">
                You are successfully logged in. This is a protected route that only authenticated users can access.
            </p>
            
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-indigo-50 rounded-lg p-4">
                    <h3 class="font-semibold text-indigo-900">Status</h3>
                    <p class="text-indigo-600 mt-1">Authenticated</p>
                </div>
                <div class="bg-green-50 rounded-lg p-4">
                    <h3 class="font-semibold text-green-900">Session</h3>
                    <p class="text-green-600 mt-1">Active</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4">
                    <h3 class="font-semibold text-blue-900">Role</h3>
                    <p class="text-blue-600 mt-1">User</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
