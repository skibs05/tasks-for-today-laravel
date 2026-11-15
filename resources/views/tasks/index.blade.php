@extends('layouts.app')
@section('title', 'All Tasks | Tasks for Today')
@section('content')
<div class="eyebrow">The wider view</div><h1 class="section-title">Every task, in date order.</h1><p class="section-sub">A simple archive of what is planned, moving, and finished.</p>
<section class="panel"><div class="panel-head"><h2>Task list</h2><span class="count">{{ $tasks->count() }} total</span></div><div class="table-wrap"><table class="task-table"><thead><tr><th>Task</th><th>Date</th><th>Status</th></tr></thead><tbody>
@forelse($tasks as $task)<tr><td><strong>{{ $task->title }}</strong></td><td>{{ $task->task_date->format('M j, Y') }}</td><td><span class="pill {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></td></tr>@empty<tr><td colspan="3">No tasks have been added.</td></tr>@endforelse
</tbody></table></div></section>
@endsection
