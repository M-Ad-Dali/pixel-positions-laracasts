<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // 1. الترتيب (Arrange): إنشاء صاحب عمل ووظيفة مرتبطة به
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // 2. التحقق (Assert): هل الوظيفة تتبع صاحب العمل فعلاً؟
    expect($job->employer->is($employer))->toBeTrue();
});