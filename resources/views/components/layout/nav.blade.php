<header class="border-b border-gray-200 bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4" aria-label="Main navigation">
        <a href="{{ url('/') }}" class="text-xl font-bold tracking-tight">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div class="flex items-center gap-6 text-sm font-medium">
            <a href="{{ url('/') }}" class="transition {{ request()->is('/') ? 'text-indigo-600 font-semibold' : 'text-gray-600 hover:text-indigo-600' }}">Home</a>
            <a href="{{ url('/about') }}" class="transition {{ request()->is('about') ? 'text-indigo-600 font-semibold' : 'text-gray-600 hover:text-indigo-600' }}">About</a>
            <a href="{{ url('/contact') }}" class="transition {{ request()->is('contact') ? 'text-indigo-600 font-semibold' : 'text-gray-600 hover:text-indigo-600' }}">Contact</a>
        </div>
    </nav>
</header>
