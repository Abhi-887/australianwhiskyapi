<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'title_tag',
        'title',
        'subtitle',
        'text',
        'background_type',
        'background_image',
        'background_color'
    ];

    public function subfields()
    {
        return $this->hasMany(SectionSubfield::class);
    }

    public function buttons()
    {
        return $this->hasMany(Button::class);
    }
}
