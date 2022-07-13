<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Block extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;
    use Attachable;
    use Translatable;
    use Searchable;


    protected $fillable = [
        'id',
        'name_uk',
        'name_ru',
        'name_en',
        'description_uk',
        'description_ru',
        'description_en',
        'status',
        'sort',
    ];

    /**
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name_uk',
        'name_ru',
        'name_en',
        'description_uk',
        'description_ru',
        'description_en',
        'status',
        'sort',
    ];

    /**
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name_uk',
        'name_ru',
        'name_en',
        'description_uk',
        'description_ru',
        'description_en',
        'status',
        'sort',
    ];

    public const STATUS = [
        'active' => 'Включена',
        'disable' => 'Отключена'
    ];


    public function course(){
        return $this->hasOne(Course::class);
    }
}
