@extends('dashboard_layout.app')

@section('title', 'Dashboard - Chat')
@section('page_title', 'Course Discussion Forum')

@section('content')
<div class="bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col h-[600px]">
    <div class="p-4 border-b border-slate-200 bg-slate-50 rounded-t-xl flex justify-between items-center">
        <span class="font-semibold text-slate-700">Channel: #SIA101-Discussion</span>
        <span class="text-xs text-emerald-600 font-semibold bg-emerald-100 px-2.5 py-1 rounded-full">Active Channel</span>
    </div>

    <div class="flex-1 p-6 overflow-y-auto space-y-4">
        <div class="flex gap-3">
            <div class="w-8 h-8 rounded-full bg-slate-800 text-white flex items-center justify-center text-xs font-bold">PR</div>
            <div>
                <div class="flex items-baseline gap-2">
                    <span class="font-bold text-xs text-slate-800">Prof. Ramirez</span>
                    <span class="text-[10px] text-slate-400">10:00 AM</span>
                </div>
                <div class="bg-slate-100 p-3 rounded-r-lg rounded-bl-lg mt-1 text-sm text-slate-700 max-w-md">
                    Good morning class! Reminder that your laboratory submissions are due this Friday at midnight.
                </div>
            </div>
        </div>

        <div class="flex gap-3 flex-row-reverse">
            <div class="w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center text-xs font-bold">JD</div>
            <div class="text-right">
                <div class="flex items-baseline gap-2 justify-end">
                    <span class="font-bold text-xs text-slate-800">You</span>
                    <span class="text-[10px] text-slate-400">10:05 AM</span>
                </div>
                <div class="bg-indigo-600 text-white p-3 rounded-l-lg rounded-br-lg mt-1 text-sm max-w-md text-left">
                    Thank you for the update, Sir. Should we upload the source files together with the screenshots?
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 border-t border-slate-200 bg-slate-50 rounded-b-xl">
        <form class="flex gap-2" action="#" method="POST">
            @csrf
            <input type="text" placeholder="Write a message..." class="flex-1 px-4 py-2 border border-slate-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg text-sm font-medium transition-colors">Send</button>
        </form>
    </div>
</div>
@endsection