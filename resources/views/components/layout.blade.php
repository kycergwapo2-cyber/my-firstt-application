<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $heading ?? 'My Modern Site' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Optionally include Tailwind config for customizing theme -->
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header / Navbar -->
  <header class="bg-white shadow-md fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo / Brand -->
      <a href="/" class="flex items-center space-x-2">
        <img src="/logo.png" alt="Logo" class="h-8 w-8 object-contain">
        <span class="text-xl font-bold text-indigo-600">BrandName</span>
      </a>

      <!-- Navigation links (for desktop) -->
      <nav class="hidden md:flex space-x-6">
        <a href="/" class="{{ request()->is('/') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-indigo-600' }} pb-1">Home</a>
        <a href="/jobs" class="{{ request()->is('jobs') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-indigo-600' }} pb-1">Jobs</a>
      </nav>

      <!-- Mobile menu toggle -->
      <div class="md:hidden">
        <button id="menu-btn" class="text-gray-600 hover:text-indigo-600 focus:outline-none">
          <!-- hamburger icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-sm">
      <div class="px-6 pt-4 pb-4 space-y-2">
        <a href="/" class="{{ request()->is('/') ? 'block text-indigo-600 font-semibold' : 'block text-gray-700 hover:text-indigo-600' }}">Home</a>
        <a href="/jobs" class="{{ request()->is('jobs') ? 'block text-indigo-600 font-semibold' : 'block text-gray-700 hover:text-indigo-600' }}">Jobs</a>
      </div>
    </div>
  </header>

  <!-- Main content -->
  <main class="pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6">
      <h1 class="text-3xl font-extrabold text-gray-900 mb-6">{{ $heading ?? '' }}</h1>
      <div>
        {{ $slot }}
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t mt-12">
    <div class="max-w-7xl mx-auto px-6 py-6 text-center text-gray-500 text-sm">
      &copy; {{ date('Y') }} BrandName. All rights reserved.
    </div>
  </footer>

  <!-- Optional JS for mobile menu toggle -->
  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
