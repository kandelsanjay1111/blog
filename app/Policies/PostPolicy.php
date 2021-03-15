<?php

namespace App\Policies;

use App\Post;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view any = posts.
     *
     * @param  \App\Admin  $Admin
     * @return mixed
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can view the = post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\=Post  $=Post
     * @return mixed
     */
    public function view(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can create = posts.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $this->getPermission($admin,1);
    }

    /**
     * Determine whether the Admin can update the = post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\=Post  $=Post
     * @return mixed
     */
    public function update(Admin $admin)
    {
        return $this->getPermission($admin,2);
    }

    /**
     * Determine whether the Admin can delete the = post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\=Post  $=Post
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin,3);
    }

    /**
     * Determine whether the Admin can restore the = post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\=Post  $=Post
     * @return mixed
     */
    public function restore(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the = post.
     *
     * @param  \App\User  $admin
     * @param  \App\=Post  $=Post
     * @return mixed
     */
    public function forceDelete(Admin $admin, Post $post)
    {
        //
    }
    public function tag(Admin $admin)
    {
        return $this->getPermission($admin,7);
    }

    public function category(Admin $admin)
    {
        return $this->getPermission($admin,8);
    }

    public function getPermission($admin,$pid){
        foreach($admin->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id==$pid){
                    return true;
                }
            }
        }
        return false;
    }

}
