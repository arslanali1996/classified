<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model{
	protected $connection=	'mysql';
	protected $table	 =	'Contact';
}