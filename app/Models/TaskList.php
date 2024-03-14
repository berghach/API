<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskList extends Model
{
    use HasFactory;

    public function taskTable():BelongsToMany{
        return $this->belongsToMany(TaskTable::class)->using(TaskList::class);
    }    

    public function tasks():HasMany{
        return $this->hasMany(Task::class);
    }
}
