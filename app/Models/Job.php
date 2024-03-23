<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Job extends Model
{
    protected $table = 'job_listings';

    use HasFactory;
    
    public static function allJobs():array
    {
        return [
            ['id'=>1,
            'title' => 'Director',
            'salary' => '50,000'],
            ['id'=>2,
            'title' => 'Programmer',
            'salary' => '10,000'],
            ['id'=>3,
            'title' => 'Teacher',
            'salary' => '40,000']];
    }

    public static function find(int $id):array
    {
        $jobs = Job::all()->toArray();

        $job = Arr::first($jobs, 
        fn($job) => $job['id'] == $id, 
        ['id'=>$id, 'title'=>'Not Found', 'salary'=>false]);

        return $job;
    }
}

// check out `$ php artisan make:model` and `$ php artisan help make:model`
// --all, especially
// work on it! get it under your fingertips and migrations!!