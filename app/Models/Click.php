<?php

namespace App\Models;

use App\Enums\Role;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Click extends Model
{
  

    use HasFactory;

    protected $fillable=['listing_id','first_name','last_name','address','CV'];

    public function listing(){
        
        return $this->belongsTo(Listing::class);
    }
    
    public function scopeVisible($query, User $user){

        if($user->role === Role::Admin){
            return;
        }
        $query->where("listing_id", $user->id);
    }

}
