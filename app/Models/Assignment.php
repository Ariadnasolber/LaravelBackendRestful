<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'subject_id', 'due_date'];

    // Relación con la asignatura
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Relación con entregas (submissions)
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
