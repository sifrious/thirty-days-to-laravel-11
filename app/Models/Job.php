<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
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
        $job = Arr::first(Job::allJobs(), 
        fn($job) => $job['id'] == $id, 
        ['id'=>$id, 'title'=>'Not Found', 'salary'=>false]);

        return $job;
    }
}
