<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PDFData extends Model
{
    protected $table = 'pdf_data';
    protected $fillable = ['content'];
}
