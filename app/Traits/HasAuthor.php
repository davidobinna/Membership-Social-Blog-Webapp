<?php 
namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 */
trait HasAuthor
{
    public function author(): User
    {
        # code...
        return $this->authorRelation;
    }
    public function authorRelation(): BelongsTo
    {
        # code...
        return $this->belongsTo(User::class,'author_id')->withDefault([
            'name' => 'David Obinna',
        ]);
    }

    public function isAuthoredBy(User $user): bool
    {
        # code...
        return $this->author()->matches($user);
    }

    public function authoredBy(User $author)
    {
        $this->authorRelation()->associate($author);
        $this->unsetRelation('authorRelation');
    }
}



?>