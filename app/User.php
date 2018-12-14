<?php
namespace App;

//use Laravel\Passport\HasApiTokens;
//use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use EntrustUserTrait;
use HasApiTokens,Notifiable;


class User extends Authenticatable
{

    protected $hidden = [ 'password', 'remember_token' ];    
    protected $table="users";
    protected $primaryKey = 'id';
    protected $fillable = [ 'username', 'email','password', 'remember_token', 'roles_id', 'group_id', 'status', 'puid', 'first_login', ];
    

    public function useroles()
    {
        return $this->belongsTo('App\Role', 'roles_id', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'group_id', 'id');
    }

    public function clientes()
    {
        return $this->hasOne('App\Models\Cliente', 'user_id', 'id');
    }

    public function installers()
    {
        return $this->hasOne('App\Models\Installer');
    }

    public function novedades()
    {
        return $this->hasMany('App\Novedad', 'user_id', 'id');
    }
    
    public function equipos()
    {
        return $this->hasMany('App\Models\Equipo');
    }


    public function usuariodelinstalador()
    {
        return $this->hasMany('App\Models\Instalaciones', 'installer_id', 'id');
    }
}
