<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }  
}

it('can have tags', function () {
    $job = Job :: factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});