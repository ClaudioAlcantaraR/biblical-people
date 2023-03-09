<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    use HasRichText;

    protected $fillable = [
        'name',
        'user_id',
        'job',
        'birthplace',
        'birthday',
        'deathplace',
        'deathdate',
        'content',
        'tags'
    ];

    protected $richTextFields = [
        'content',
    ];

    /**
     * Search and search by tag
     */
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

    /**
     * Relationship to user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}