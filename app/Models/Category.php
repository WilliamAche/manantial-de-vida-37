<?php

namespace App;

use App\CategoryQuestions;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
    ];

    public function CategoryQuestions($id)
    {
        $quests = CategoryQuestions::where('category_id', $id)->get();

        return $quests;
    }
}