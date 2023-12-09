<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websites extends Model
{
    use HasFactory;
    /**
     * Tên bảng trong cơ sở dữ liệu
     *
     * @var string
     */

    /**
     * Các trường dữ liệu có thể được gán thông qua phương thức create và fill
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'hotline',
        'email_support',
        'facebook',
        'instagram',
        'tiktok',
        'youtube',
        'zalo',
    ];

    public $timestamps = true;
}

