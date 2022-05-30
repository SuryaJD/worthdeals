<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\KeyValue;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
Use Illuminate\Support\Str;
use Infinety\Filemanager\FilemanagerField;
use NovaAttachMany\AttachMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsToMany;
use Spatie\TagsField\Tags;

use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            
            Text::make('Name')->sortable(),
            
            Slug::make('Slug')->from('Name')->hideFromIndex(),
            
            Text::make('Uuid')->default(function ($request) {
                return Str::orderedUuid();
            })->hideFromIndex(),
            
            FilemanagerField::make('Image','featured_image')->nullable()->displayAsImage()->squared(),
            
            Textarea::make('Description')->nullable(),
            
            Trix::make('Content')->nullable(),
            
            KeyValue::make('Images')->rules('json')->hideFromIndex(),
            
            KeyValue::make('Extra')->rules('json'),
            
            KeyValue::make('Offers')->rules('json'),
            
            Number::make('Regular Price','regular_price')->nullable(),
            
            Number::make('Sale Price','sale_price')->nullable(),

            Text::make('link')->nullable()->displayUsing(function ($link) {
                return '<a href="'.$link.'" class="cursor-pointer text-70 hover:text-primary mr-3 items-center has-tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                </a>';
            })->asHtml()->onlyOnIndex(),

            Text::make('Page')->displayUsing(function ($slug){
                return route('product.single', ['product' => $slug]);
            })->asHtml()->onlyOnIndex(),
            
            AttachMany::make('Stores'),
            
            Tags::make('Tags')->type('tags'),
            
            BelongsToMany::make('Stores'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
