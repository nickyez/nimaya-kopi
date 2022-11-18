<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    /**
     * Get the course that owns the CourseClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forumTopic()
    {
        return $this->belongsTo(ForumTopic::class, 'topic_id', 'id');
    }
}
