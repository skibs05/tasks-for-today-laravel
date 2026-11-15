<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function welcome(): View
    {
        $today = now()->toDateString();
        $tasks = Task::whereDate('task_date', $today)->orderBy('status')->orderBy('title')->get();
        return view('tasks.welcome', compact('tasks', 'today'));
    }

    public function index(): View
    {
        $tasks = Task::orderBy('task_date')->orderBy('status')->orderBy('title')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function profile(): View
    {
        $user = User::first();
        return view('pages.profile', compact('user'));
    }

    public function about(): View
    {
        return view('pages.about');
    }
}
