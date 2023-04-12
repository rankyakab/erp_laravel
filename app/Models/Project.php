<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
        'budget',
        'expenditure',
        'start_date',
        'end_date',
        'status',
        'description',
        'user_id'
    ];

    public static function create(array $attributes = [])
    {
        return parent::create($attributes);
    }

    // Relationship With Tasks
    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}
