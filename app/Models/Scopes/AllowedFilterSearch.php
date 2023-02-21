<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;

trait AllowedFilterSearch{
    
    
    public function scopeAllowedSearch(Builder $query,...$keys){
    
        if($search=request()->query('search')){
       foreach($keys as $index=>$key){
        $method= $index===0 ? 'where':'orWhere';
        $query-> {$method}($key,"LIKE","%{$search}%");
       }
        }
    return $query;
    }
    
}