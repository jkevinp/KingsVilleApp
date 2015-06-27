<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model {
	protected $table = 'contents';
	protected $fillable = ['title' , 'content' , 'userid', 'created_at' ,'updated_at'];
}
