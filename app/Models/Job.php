<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function isLiked()
    {
        if (!auth()->check()) {
            return false;
        }
        return auth()->user()->likes->contains('id', $this->id);
    }

    /** Ajouter mission */
    protected $fillable = ['title', 'description', 'price', 'attachment', 'status', 'user_id'];//Ajouter mission
}
