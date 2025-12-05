@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md px-6">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-slate-900 text-white shadow-xl shadow-slate-900/10 mb-6">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h1 class="text-3xl font-bold tracking-tight text-slate-900">Welcome</h1>
        </div>

        <livewire:welcome-card />
    </div>
@endsection
