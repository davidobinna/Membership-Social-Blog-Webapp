<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

   const UPDATE = 'update';
   const DELETE = 'delete';
   
   public function before(User $user): bool
   {
    return $user->isAdmin() || $user->isSuperAdmin();
   }
   
   public function update(User $user, Post $post): bool
   {
     return $post->isAuthoredBy($user);
   }
   public function delete(User $user, $post): bool 
   {
    return $post->isAuthoredBy($user);
   }
}
