<?php

/**
 * Description of Category
 *
 * @author seyfer
 */
class Category extends Eloquent
{

    protected $fillable = ['name'];
    public static $rules = ['name' => "required|min:3"];

}
