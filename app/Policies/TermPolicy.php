<?php

namespace App\Policies;

use App\User;
use App\Term;
use Illuminate\Auth\Access\HandlesAuthorization;

class TermPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the term.
     *
     * @param  \App\User  $user
     * @param  \App\Term  $term
     * @return mixed
     */
    public function view(User $user, Term $term)
    {
        //
    }

    /**
     * Determine whether the user can create terms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == 1 ? true : false;
    }

    /**
     * Determine whether the user can update the term.
     *
     * @param  \App\User  $user
     * @param  \App\Term  $term
     * @return mixed
     */
    public function update(User $user, Term $term)
    {
        return $user->id == 1 ? true : false;
    }

    /**
     * Determine whether the user can delete the term.
     *
     * @param  \App\User  $user
     * @param  \App\Term  $term
     * @return mixed
     */
    public function delete(User $user, Term $term)
    {
        return $user->id == $term->user_id;
    }
}
