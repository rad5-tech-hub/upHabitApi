<?php

namespace Database\Seeders;

use App\Models\Suggestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Suggestion::create([
            'condition' => 'Struggle staying focused',
            'suggestion' => 'Try breaking your tasks into smaller chunks and taking short breaks.',
        ]);

        Suggestion::create([
            'condition' => 'Managing distraction',
            'suggestion' => 'Create a dedicated workspace and minimize interruptions.',
        ]);

        Suggestion::create([
            'condition' => 'Forgetting deadlines',
            'suggestion' => 'Use a planner or digital calendar to set reminders and deadlines.',
        ]);

        Suggestion::create([
            'condition' => 'Feeling overwhelmed by large tasks',
            'suggestion' => 'Break down big tasks into smaller steps and focus on one at a time.',
        ]);

        Suggestion::create([
            'condition' => 'Better time management',
            'suggestion' => 'Use the Pomodoro technique to allocate focused work periods.',
        ]);

        Suggestion::create([
            'condition' => 'Improve focus',
            'suggestion' => 'Practice mindfulness and limit multitasking during work.',
        ]);

        Suggestion::create([
            'condition' => 'Reduce procrastination',
            'suggestion' => 'Start with easier tasks to build momentum and reward yourself for completing goals.',
        ]);

        Suggestion::create([
            'condition' => 'Boost productivity',
            'suggestion' => 'Prioritize tasks using the Eisenhower matrix and eliminate distractions.',
        ]);

        Suggestion::create([
            'condition' => 'To build new habit',
            'suggestion' => 'Start small, be consistent, and track your progress daily.',
        ]);

        Suggestion::create([
            'condition' => 'To break bad habits',
            'suggestion' => 'Identify triggers for bad habits and replace them with positive alternatives.',
        ]);

        Suggestion::create([
            'condition' => 'To track my daily routines',
            'suggestion' => 'Maintain a daily journal or use a habit-tracking app for accountability.',
        ]);

        Suggestion::create([
            'condition' => 'To manage academic stress',
            'suggestion' => 'Develop a study schedule, prioritize tasks, and take regular breaks.',
        ]);
    }
}
