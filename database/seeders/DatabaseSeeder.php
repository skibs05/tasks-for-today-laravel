<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->delete();
        Task::query()->delete();

        User::create([
            'username' => 'thomas.esguerra',
            'full_name' => 'Thomas Pantas Esguerra',
            'email' => 'thomas.esguerra@example.test',
        ]);

        $today = now()->startOfDay();
        Task::insert([
            ['title' => 'Review database migration notes', 'status' => 'in progress', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Check Laravel route responses', 'status' => 'pending', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare project screenshots', 'status' => 'pending', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Refine the dashboard copy', 'status' => 'done', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Test the profile page on mobile', 'status' => 'done', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Plan the next feature sketch', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Write a short deployment checklist', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Archive completed planning notes', 'status' => 'pending', 'task_date' => $today->copy()->addDays(3)->toDateString(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
