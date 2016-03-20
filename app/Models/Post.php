<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['post_name','content','user_id'];

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('j F Y H:i');
    }

}
