<?php



namespace App\Models;



use Cartalyst\Sentinel\Users\EloquentUser;



class User extends EloquentUser

{

    /**

     * Return the posts relationship.

     *

     * @return \Illuminate\Database\Eloquent\Relations\HasMany

     */

	public function posts()

	{

		return $this->hasMany('App\Models\Post');

	}



	/**

		 * Return the comment relationship.

		 *

		 * @return \Illuminate\Database\Eloquent\Relations\HasMany

		 */

		 public function comment()

	 {

	     return $this->hasMany('App\Comment');

	 }

}