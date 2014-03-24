<?php

class Snippet extends \Eloquent
{

    protected $fillable  = [];
    protected $guarded   = array();
    public static $rules = [
        'snippet' => 'required'
    ];

    public static function validate(array $input)
    {
        $v = Validator::make($input, static::$rules);
        $v->passes();

        return $v->errors()->get('snippet');
    }

}
