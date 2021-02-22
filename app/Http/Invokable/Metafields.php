<?php

namespace App\Http\Invokable;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Metafields{

    public function __invoke()
    {
        return [
            Text::make('Meta Title','meta_title')->nullable(),
            
            Textarea::make('Meta Description','meta_description')->nullable()
        ];
    }


}