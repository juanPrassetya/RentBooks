<?php

namespace App\Models;
use  App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'book_code','tittle','cover','status','slug'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories(): BelongsToMany
    {
 //ini untuk di masukan ke database book_category yang ada di php my admin (dan janagn lupa pakai use illuminate yang di atas karena pakai belongs)
        return $this->belongsToMany(Category::class,'book_category','book_id','category_id');
    }
}
