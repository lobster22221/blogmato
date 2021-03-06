<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
     //protected $table = "blogPost";
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeFilter($query, $filters)
    { 
        
        if($month = $filters['Month']) {
            
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        
        if($year = $filters['Year'])
        {
            $query->whereYear('created_at', $year);
        }
    }
    
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) publish')
                ->groupBy('year', 'month')
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->
                toArray();
    }
}

