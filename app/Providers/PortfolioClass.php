<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PortfolioClass extends ServiceProvider
{
    const ARTISTS_FOLDER = '/available/images/artists/';
    //const CATEGORIES_FOLDER = '/available/images/categories/';

    /**
     * Remove spaces in the beginning and in the end of the string;
     * Replace space between words for a $character.
     * 
     * @param $string
     * @param $character
     * @return string $string
     */

    public function stringCleanReplaceSpace($string,$character)
    {
        return strtolower(str_replace(' ',$character, preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($string)))));
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
