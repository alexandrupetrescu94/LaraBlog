<?php 

class Article extends Eloquent {
	protected $fillable = array('name', 'type', 'danger_level');

	public function user() {
		return $this->belongsTo('User'); //each article belongs to one user
	}

	public function category(){
		return $this->belongsTo('Category'); // each article belongs to one category
	}

}