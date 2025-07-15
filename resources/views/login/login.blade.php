<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white dark:bg-gray-300 min-h-screen flex items-center justify-center ">
    <div
        class="w-full max-w-5xl bg-white shadow-2xl border border-gray-300 rounded-lg overflow-hidden flex flex-col md:flex-row">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 p-10">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">MONSTER GALAXY GYM</h1>
            </div>
            <p class="text-sm text-gray-500 mb-6">Please Login to Continue</p>

            <form method="POST" action="{{ route('login.attempt') }}" class="space-y-4">
                @csrf

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="w-full mt-1 p-2 pr-10 border border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500">
                        <span onclick="togglePassword()"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-500">
                            <!-- Eye icon SVG -->
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>

                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">
                    Sign in
                </button>

            </form>
            <a class="w-full block text-center bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition"
                href="{{ url('/') }}">Back</a>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 bg-purple-100 p-8 flex items-center justify-center">
            <img src="{{ asset('img/logo.png') }}" alt="Illustration" class="max-w-full h-auto">
            {{-- <img src="{{ asset('img/ass.jpg') }}" alt="Illustration" class="max-w-full h-auto"> --}}
        </div>
    </div>
    <!-- Toggle Password Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a9.961 9.961 0 011.27-2.727M3 3l18 18M9.88 9.88A3 3 0 0012 15a3 3 0 002.12-5.12" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 12.414M6.343 6.343L10.586 10.586" />
            `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;
            }
        }
    </script>
</body>

</html>
