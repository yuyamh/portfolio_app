<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching_plan extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル名
    protected $table = 'teaching_plans';

    // 可変項目
    protected $fillable =
    [
        'title',
        'content',
    ];
}
