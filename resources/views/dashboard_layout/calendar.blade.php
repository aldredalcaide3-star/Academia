@extends('dashboard_layout.app')

@section('title', 'Dashboard - Calendar')
@section('page_title', 'Class Schedules & Assignments')

@section('content')
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-200">
        <h3 class="text-lg font-bold text-slate-800">Weekly Timetable</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-xs font-semibold uppercase tracking-wider border-b border-slate-200">
                    <th class="px-6 py-4">Day</th>
                    <th class="px-6 py-4">Time Slot</th>
                    <th class="px-6 py-4">Subject</th>
                    <th class="px-6 py-4">Assigned Room</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm">
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-indigo-600">Monday</td>
                    <td class="px-6 py-4 text-slate-600">08:00 AM - 11:00 AM</td>
                    <td class="px-6 py-4 font-medium text-slate-800">SIA101 - Systems Integration & Architecture</td>
                    <td class="px-6 py-4"><span class="bg-slate-100 text-slate-700 font-semibold px-2.5 py-1 rounded border">Lab 301</span></td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-indigo-600">Wednesday</td>
                    <td class="px-6 py-4 text-slate-600">01:00 PM - 04:00 PM</td>
                    <td class="px-6 py-4 font-medium text-slate-800">ITE102 - Advanced Web Development</td>
                    <td class="px-6 py-4"><span class="bg-slate-100 text-slate-700 font-semibold px-2.5 py-1 rounded border">Lab 302</span></td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-indigo-600">Friday</td>
                    <td class="px-6 py-4 text-slate-600">10:00 AM - 12:00 PM</td>
                    <td class="px-6 py-4 font-medium text-slate-800">CS103 - Database Management Systems</td>
                    <td class="px-6 py-4"><span class="bg-slate-100 text-slate-700 font-semibold px-2.5 py-1 rounded border">Room 204</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection