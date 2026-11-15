@extends('layouts.app')
@section('title', 'Today | Tasks for Today')
@section('content')
<section class="hero">
    <div><div class="eyebrow">Daily view</div><h1>Make room for the work that matters today.</h1><p>A calm, focused list of tasks scheduled for {{ \Carbon\Carbon::parse($today)->format('F j, Y') }}.</p></div>
    <div class="date-card"><span>ON THE DESK</span><strong>{{ $tasks->count() }} {{ $tasks->count() === 1 ? 'task' : 'tasks' }}</strong><span>scheduled for today</span></div>
</section>
<section class="panel"><div class="panel-head"><h2>Today's rhythm</h2><span class="count">{{ $tasks->where('status', 'done')->count() }} complete</span></div>
    <div class="task-list">
    @forelse($tasks as $task)
        <article class="task {{ $task->status === 'done' ? 'done' : '' }}"><span class="check">{{ $task->status === 'done' ? '✓' : '·' }}</span><div><div class="task-title">{{ $task->title }}</div><div class="task-meta">{{ $task->task_date->format('D, M j') }}</div></div><span class="pill {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></article>
    @empty <div class="empty">Nothing is scheduled for today yet. That can be a good thing.</div> @endforelse
    </div>
</section>
@endsection
