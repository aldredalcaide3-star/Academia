@extends('dashboard_layout.app')

@section('title', 'Dashboard - Online Classes')
@section('page_title', 'Virtual Classrooms')

@section('content')
<div class="grid md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col justify-between hover:border-indigo-500 transition-colors">
        <div>
            <div class="flex justify-between items-start mb-4">
                <span class="text-xs font-bold bg-emerald-100 text-emerald-700 px-2.5 py-1 rounded-full">In Progress</span>
                <i class="fas fa-video text-indigo-600 text-lg"></i>
            </div>
            <h3 class="font-bold text-slate-800 text-lg mb-1">SIA101</h3>
            <p class="text-slate-500 text-xs mb-4">Systems Integration & Architecture</p>
            <p class="text-slate-600 text-sm"><strong>Instructor:</strong> Prof. Ramirez</p>
        </div>
        <a href="#" class="mt-6 w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 rounded-lg text-sm transition-colors">Join Meeting</a>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col justify-between hover:border-indigo-500 transition-colors">
        <div>
            <div class="flex justify-between items-start mb-4">
                <span class="text-xs font-bold bg-amber-100 text-amber-700 px-2.5 py-1 rounded-full">Starts 01:00 PM</span>
                <i class="fas fa-clock text-amber-500 text-lg"></i>
            </div>
            <h3 class="font-bold text-slate-800 text-lg mb-1">ITE102</h3>
            <p class="text-slate-500 text-xs mb-4">Advanced Web Development</p>
            <p class="text-slate-600 text-sm"><strong>Instructor:</strong> Prof. Johnson</p>
        </div>
        <a href="#" class="mt-6 w-full text-center bg-slate-200 text-slate-700 font-medium py-2 rounded-lg text-sm cursor-not-allowed">Waiting Room</a>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col justify-between opacity-75">
        <div>
            <div class="flex justify-between items-start mb-4">
                <span class="text-xs font-bold bg-slate-100 text-slate-600 px-2.5 py-1 rounded-full">Offline</span>
                <i class="fas fa-power-off text-slate-400 text-lg"></i>
            </div>
            <h3 class="font-bold text-slate-800 text-lg mb-1">CS103</h3>
            <p class="text-slate-500 text-xs mb-4">Database Management Systems</p>
            <p class="text-slate-600 text-sm"><strong>Instructor:</strong> Prof. Davis</p>
        </div>
        <button disabled class="mt-6 w-full bg-slate-100 text-slate-400 font-medium py-2 rounded-lg text-sm cursor-not-allowed">Unavailable</button>
    </div>
</div>
@endsection