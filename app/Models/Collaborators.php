<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborators extends Model
{
    protected $guarded = ['rec_id'];
	protected $primaryKey = 'rec_id';
}
