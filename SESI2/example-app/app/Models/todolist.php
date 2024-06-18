<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    protected $primaryKey = "id";
    protected $table = 'todolist';
    protected $fillable = [ 'id','task_title','task_description','task_status'];
    
    use HasFactory;
}
