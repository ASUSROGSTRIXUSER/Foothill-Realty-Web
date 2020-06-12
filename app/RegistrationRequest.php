<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationRequest extends Model
{
    protected $fillable = [
        'Project Name','Block ','isAllowed',
        'HouseStatMod','RequestoAdminMod','ViewRequestMod',
        'UserManageMod','ReportsMod','ProjectsMod',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}
