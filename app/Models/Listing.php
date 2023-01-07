<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job',
        'birthplace',
        'birthday',
        'deathplace',
        'deathdate',
        'content',
        'tags'
    ];

    public function scopeFilter($query, array $filters)
    {   
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like', '%' . request('search') . '%' )
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        } 
    }
}