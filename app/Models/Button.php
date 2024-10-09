<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $fillable = ['section_id', 'background_color', 'text_color', 'background_hover_color', 'text_hover_color', 'link_url', 'link_title', 'link_target'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}

