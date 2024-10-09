<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSubfield extends Model
{
    protected $fillable = ['section_id', 'title_color', 'subtitle_color', 'text_color'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
