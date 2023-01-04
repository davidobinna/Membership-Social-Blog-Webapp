<?php

namespace App\Models;

use App\Contracts\CommentAble;
use App\Traits\HasAuthor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;
    use HasAuthor; 

    const TABLE = 'comments';
    
    protected $table = self::TABLE;

    protected $fillable = [
        'body',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function body(): string
    {
        return $this->body;
    }
    
    public function excerpt(int $limit = 100): string
    {
        return Str::limit($this->body(), $limit);
    }

    public function commentAbleRelation():MorphTo
    {
      return $this->MorphTo('commentAbleRelation','commentable_id','commentable_type');
    }

    public function commentAble(): CommentAble
    {
        return $this->commentAbleRelation();
    }
    
}
