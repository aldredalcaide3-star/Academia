<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <!-- Tailwind CSS for Professional Styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col justify-between shadow-xl">
            <div>
                <div class="px-6 py-5 border-b border-slate-800">
                    <h1 class="text-xl font-bold tracking-wider text-indigo-400">ACADEMIA<span class="text-white">PORTAL</span></h1>
                </div>
                <nav class="mt-6 px-4 space-y-1">
                    <a href="{{ route('dashboard.home') }}" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard.home') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i class="fas fa-home w-6"></i> Homepage
                    </a>
                    <a href="{{ route('dashboard.chat') }}" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard.chat') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i class="fas fa-comments w-6"></i> Chat System
                    </a>
                    <a href="{{ route('dashboard.calendar') }}" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard.calendar') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i class="fas fa-calendar-alt w-6"></i> Academic Calendar
                    </a>
                    <a href="{{ route('dashboard.online_classes') }}" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard.online_classes') ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i class="fas fa-chalkboard-teacher w-6"></i> Online Classes
                    </a>
                </nav>
            </div>
            <div class="p-4 border-t border-slate-800">
                <a href="{{ route('dashboard.logout') }}" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium text-red-400 hover:bg-red-500/10 hover:text-red-300 transition-colors">
                    <i class="fas fa-sign-out-alt w-6"></i> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content Viewport -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center">
                <h2 class="text-xl font-bold text-slate-800">@yield('page_title')</h2>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-medium text-slate-600">John Doe</span>
                    <div class="w-9 h-9 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">JD</div>
                </div>
            </header>

            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>