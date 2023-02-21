<?php

namespace App\Models;

use App\Enums\Role;
use App\Models\User;
use App\Models\Click;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Scopes\AllowedFilterSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory, AllowedFilterSearch;
 
    
    protected $fillable = ['title','salary', 'user_id','slug'];

    public function clicks(){
        
        return $this->hasMany(Click::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query){

        return $query->where('is_active', true);
    }

    
    public function scopeVisibleFor($query, User $user){

        if($user->role === Role::Admin){
            return;
        }
        $query->where("user_id", $user->id);
    }


    public function route($method, $key = 'id'){

        return route("listings.{$method}", $this->$key);
    }

    
    public function getSlug()
    {
        $slug = str($this->title)->slug();
        $numSlugsFound = static::where('slug', 'regexp', "^" . $slug . "(-[0-9])?")->count();
        if ($numSlugsFound > 0) {
            return $slug . "-" .$numSlugsFound + 1;
        }
        return $slug;
    }

    protected static function booted()
    {
        static::creating(function ($listing) {
            if ($listing->title) {
                $listing->slug = $listing->getSlug();
                $listing->is_active = true;
            }
        });
        
        static::updating(function ($listing) {
            if ($listing->title && !$listing->slug) {
                $listing->slug = $listing->getSlug();
                $listing->is_active = true;
            }
        });

        
    }
}
