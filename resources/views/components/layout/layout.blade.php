@props([
	'title' => config('app.name', 'Laravel'),
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ $title }}</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-900 antialiased">
	
	<!-- This pulls directly from resources/views/components/layouts/nav.blade.php -->
	<x-layout.nav />

	<main class="mx-auto min-h-[calc(100vh-8.5rem)] max-w-7xl px-6 py-10">
		{{ $slot }}
	</main>
{{-- //hi --}}
	<footer class="border-t border-gray-200 bg-white">
		<div class="mx-auto max-w-7xl px-6 py-6 text-center text-sm text-gray-500">
			&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
		</div>
	</footer>
</body>
</html>
