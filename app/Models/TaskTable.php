<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class TaskTable extends Model
{
    use HasFactory;

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function taskLists():HasMany{
        return $this->hasMany(TaskList::class);
    }
    public function tasks():HasManyThrough{
        return $this->hasManyThrough(Task::class, TaskList::class);
    }
}
