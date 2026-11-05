@extends('dashboard_layout.app')

@section('title', 'Dashboard - Logout')
@section('page_title', 'Session Security')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl border border-slate-200 shadow-md text-center">
    <div class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
        <i class="fas fa-exclamation-triangle"></i>
    </div>
    <h3 class="text-xl font-bold text-slate-800 mb-2">Confirm Account Logout</h3>
    <p class="text-slate-600 text-sm mb-6">Are you sure you want to terminate your active portal session?</p>
    
    <form action="{{ route('dashboard.logout.action') }}" method="POST" class="flex gap-3 justify-center">
        @csrf
        <a href="{{ route('dashboard.home') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg text-sm transition-colors">Cancel</a>
        <button type="submit" class="px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg text-sm transition-colors">Confirm Logout</button>
    </form>
</div>
@endsection