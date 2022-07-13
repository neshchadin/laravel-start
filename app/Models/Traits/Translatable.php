<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

trait Translatable
{
    protected $defaultLocale = 'ru';
    protected $defaultLocaleRu = '_ru';

    public function __($oroginalFieldName){




        $locale = LaravelLocalization::getCurrentLocale();




        $fieldName = $oroginalFieldName.'_'.$locale;



        if(in_array( $fieldName, array_keys($this->attributes)) AND !empty($this->attributes[$fieldName])){
            return $this->$fieldName;
        }

        $oroginalFieldName =$oroginalFieldName.$this->defaultLocaleRu;


        return $this->$oroginalFieldName ;
    }
}
