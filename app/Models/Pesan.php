<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pesan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user','menu'];


    public function user() {

        return $this->belongsTo(User::class,'user_id');
    }
    

    public function menu() {
        return $this->belongsTo(Menu::class,'menu_id')->withTrashed();
    }
}
