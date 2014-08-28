<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 8/27/14
 * Time: 5:40 PM
 */

class ItemController extends BaseController
{


    public function create()
    {

        return View::make('item.create');
    }
} 