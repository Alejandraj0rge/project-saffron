<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
	protected $guarded = ['rec_id'];
	protected $primaryKey = 'rec_id';

	public function Collaborators(){
		return $this->hasMany(\App\Models\Module\Collaborators::class, 'task_id', 'task_id');
	}
}
