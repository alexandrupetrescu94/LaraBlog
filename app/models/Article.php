<?php 

class Article extends Eloquent {
	
	public function user() {
		return $this->belongsTo('User'); //each article belongs to one user
	}

	public function category(){
		return $this->belongsTo('Category'); // each article belongs to one category
	}

}