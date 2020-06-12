<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    protected $fillable = [
        'ProjectName','Block','Lot',
        'TitleNo','Borrower','PackagePrice',
        'Type','Remarks',    
    ];
}
