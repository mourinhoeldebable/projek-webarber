<?php

namespace App\Models;
use App\Models\dashboard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dashboards()
    {
        return $this->hasMany(dashboard::class);
    }

}
 