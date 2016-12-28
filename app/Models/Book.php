<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'books';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */
	protected $fillable = [];
	protected $guarded = ['id'];

	/**
	* To allow soft deletes
	*/
	use SoftDeletes;

    protected $dates = ['deleted_at'];
}
