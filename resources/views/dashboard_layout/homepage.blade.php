    @extends('dashboard_layout.app')

    @section('title', 'Dashboard - Home')
    @section('page_title', 'Institutional Overview')

    @section('content')
    <div class="space-y-6">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-indigo-700 to-indigo-900 rounded-2xl p-8 text-white shadow-lg">
            <h1 class="text-3xl font-extrabold mb-2">Welcome Back, Student!</h1>
            <p class="text-indigo-200 max-w-2xl">Access your academic resources, connect with faculty, and stay on top of your schedule seamlessly through your dashboard portal.</p>
        </div>

        <!-- Mission & Vision Cards -->
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Institutional Mission</h3>
                <p class="text-slate-600 leading-relaxed">
                University of Eastern Pangasinan is dedicated to producing highly competent and morally responsible UEPians through innovation, industry-focused education, sustainable research, and values-based curriculum. We commit to shaping ethical trailblazers bringing our principle-centered culture defining our values of Maka-Diyos, Marunong and Malinis.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Institutional Vision</h3>
                <p class="text-slate-600 leading-relaxed">
                    A leading local university known to develop excellent and virtuous professionals who are catalysts of progress for both the local and global communities.
                </p>
            </div>
        </div>
    </div>
    @endsection