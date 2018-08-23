<?php

use App\Models\Member;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    protected $members = [
        'alex@spatie.be' => [
            'first_name' => 'Alex',
            'last_name' => 'Vanderbist',
            'role' => 'Backend developer',
            'description' => 'Alex can throw backend code, servers and hardware in the mix. He\'s famous for winning the first Laravel blog contest and struggling with Paypal ever since.',
            'twitter' => 'alexvanderbist',
            'website' => 'https://alexvanderbist.com',
        ],

        'brent@spatie.be' => [
            'first_name' => 'Brent',
            'last_name' => 'Roose',
            'role' => 'Backend developer',
            'description' => 'Brent has a love for syntax and clean code and showed us how to work in a light theme. Our office has never been so bright.',
            'twitter' => 'brendt_gd',
            'website' => 'https://stitcher.io',
        ],

        'freek@spatie.be' => [
            'first_name' => 'Freek',
            'last_name' => 'Van der Herten',
            'role' => 'Backend developer',
            'description' => 'Freek is our godfather of backend code. You are not into Laravel if this face doesn\'t ring a bell to you.',
            'twitter' => 'freekmurze',
            'website' => 'https://murze.be',
            'founder' => true,
        ],

        'jef@spatie.be' => [
            'first_name' => 'Jef',
            'last_name' => 'Van der Voort',
            'role' => 'Account manager',
            'description' => 'Jef keeps things going and basically runs the office. Who needs fancy applications when you can have a spreadsheet?',
            'twitter' => 'vdv_jef',
            'founder' => true,
            'public_email' => true,
        ],

        'sebastian@spatie.be' => [
            'first_name' => 'Sebastian',
            'last_name' => 'De Deyne',
            'role' => 'Full stack developer',
            'description' => 'Seb really earns the label ‘full stack’. Throw anything at this guy and he\'ll kick it back to you as a component.',
            'twitter' => 'sebdedeyne',
            'website' => 'https://sebastiandedeyne.com',
        ],

        'willem@spatie.be' => [
            'first_name' => 'Willem',
            'last_name' => 'Van Bockstal',
            'role' => 'Frontend designer',
            'description' => 'You ended up in this particular place on the internet because Willem created this site. And this company. Is there something this guy can\'t do?',
            'twitter' => 'willemvbockstal',
            'founder' => true,
        ],

        'wouter@spatie.be' => [
            'first_name' => 'Wouter',
            'last_name' => 'Brouwers',
            'role' => 'Project Manager',
            'description' => 'Who needs a status board when you have Wouter? This fellow knows a thing or 2 about closing Basecamp tickets.',
            'twitter' => 'brouwerswouter',
            'public_email' => true,
        ],
    ];

    public function run()
    {
        foreach ($this->members as $email => $attributes) {
            Member::firstOrNew(['email' => $email])
                ->fill($attributes)
                ->save();
        }

        Member::whereNotIn('email', array_keys($this->members))
            ->delete();
    }
}