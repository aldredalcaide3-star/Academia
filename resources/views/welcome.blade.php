
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CampusFlow')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

<div class="app-shell">

    <aside class="sidebar">
        <a href="{{ route('homepage') }}" class="brand">
            <span class="brand-mark"><i data-lucide="graduation-cap"></i></span>
            <span>
                <strong>CampusFlow</strong>
                <small>STUDENT PORTAL</small>
            </span>
        </a>

        <div class="nav-caption">MAIN MENU</div>

        <nav class="nav-menu">
            <a href="{{ route('homepage') }}"
               class="{{ request()->routeIs('homepage') ? 'active' : '' }}">
                <i data-lucide="layout-dashboard"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('chat') }}"
               class="{{ request()->routeIs('chat') ? 'active' : '' }}">
                <i data-lucide="messages-square"></i>
                <span>Chat</span>
            </a>

            <a href="{{ route('calendar') }}"
               class="{{ request()->routeIs('calendar') ? 'active' : '' }}">
                <i data-lucide="calendar-days"></i>
                <span>Calendar</span>
            </a>

            <a href="{{ route('online_classes') }}"
               class="{{ request()->routeIs('online_classes') ? 'active' : '' }}">
                <i data-lucide="monitor-play"></i>
                <span>Online Classes</span>
            </a>

            <a href="{{ route('logout.page') }}"
               class="{{ request()->routeIs('logout.page') ? 'active' : '' }}">
                <i data-lucide="log-out"></i>
                <span>Logout</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="help-card">
                <div class="help-icon"><i data-lucide="headset"></i></div>
                <strong>Need assistance?</strong>
                <p>Stay organized and reach your academic goals.</p>
                <a href="{{ route('chat') }}">Contact classmates <i data-lucide="arrow-up-right"></i></a>
            </div>
            <div class="sidebar-foot">CAMPUSFLOW © 2026</div>
        </div>
    </aside>

    <main class="main-area">
        <header class="topbar">
            <div class="breadcrumb">
                Workspace <span>/</span>
                <b>@yield('section', 'Dashboard')</b>
            </div>

            <div class="topbar-actions">
                <span class="top-divider"></span>
                <div class="profile">
                    <div class="avatar">
                        {{ strtoupper(substr(session('student_name', 'Student'), 0, 1)) }}
                    </div>
                    <div class="profile-copy">
                        <strong>{{ session('student_name', 'Student') }}</strong>
                        <small>Main User</small>
                    </div>
                </div>
            </div>
        </header>

        <div class="page-content">
            @if(session('success'))
                <div class="alert-success">
                    <i data-lucide="check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')

            <footer class="page-footer">
                <span>© 2026 CampusFlow Student Portal</span>
                <span>Learn · Connect · Achieve</span>
            </footer>
        </div>
    </main>

</div>

<script>
    if (window.lucide) {
        lucide.createIcons();
    }
</script>

@stack('scripts')
</body>
</html>