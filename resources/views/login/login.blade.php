<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Left Section -->
        <div class="w-full md:w-1/2 p-10">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">TheCubeFactory</h1>
            </div>
            <h2 class="text-3xl font-semibold text-gray-800 mb-1">Welcome back</h2>
            <p class="text-sm text-gray-500 mb-6">Please enter your details</p>

            <form method="POST" action="{{ route('login.attempt') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500">
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">Sign
                    in</button>
            </form>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 bg-purple-100 p-8 flex items-center justify-center">
            <img src="//" alt="Illustration" class="max-w-full h-auto">
        </div>
    </div>

</body>

</html>
