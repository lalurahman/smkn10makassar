<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMKN 10 Makassar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-white min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <div class="mb-6 text-center">
            <img src="{{asset('assets/img/logo.png') }}" alt="Logo" class="mx-auto h-16 mb-2">
            {{-- <img src="{{asset('assets/img/logo.png') }}" class="w-80"> --}}
            <h2 class="text-2xl font-bold text-gray-800">Login ke Sistem</h2>
            <p class="text-gray-500 text-sm">SMK Negeri 10 Makassar</p>
        </div>

        <form method="POST" action="{{route('login')}}" class="space-y-5">
            <!-- Tambahkan csrf jika digunakan dalam Laravel -->
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required
                    class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="you@example.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded text-blue-600">
                    <span class="ml-2 text-gray-600">Ingat saya</span>
                </label>
                <a href="#" class="text-blue-600 hover:underline">Lupa password?</a>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Belum punya akun?
            <a href="/register" class="text-blue-600 hover:underline">Daftar sekarang</a>
        </p>
    </div>

</body>
</html>
