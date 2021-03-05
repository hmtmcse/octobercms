<?php namespace Hmtmcse\Ecommerce\Models;

use Model;


class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'hmtmcse_ecommerce_product';
    protected $guarded = ['*'];
    protected $fillable = [];
    public $rules = [];
    protected $casts = [];
    protected $jsonable = [];
    protected $appends = [];
    protected $hidden = [];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $hasOne = [];
    public $hasMany = [];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
