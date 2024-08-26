<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['class'] ?? false) {
            $query->where('class','like','%'.request('class').'%');

        };

        if($filters['search'] ?? false){
            $query->where('class','like','%'.request('search').'%')
                ->orWhere('teacher','like','%'.request('search').'%')
                ->orWhere('no_of_students','like','%'.request('search').'%');
        }
    }
    //RelationShip to user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
