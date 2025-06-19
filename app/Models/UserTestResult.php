<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestResult extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'test_id', 'start_time', 'end_time', 'score', 'total_questions', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class);
    }
}