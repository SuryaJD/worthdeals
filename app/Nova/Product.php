<?php

namespace App\Nova;

use Illuminate\Http\Request;
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
            Slug::make('Slug')->from('Name'),
            Text::make('Uuid')->default(function ($request) {
                return Str::orderedUuid();
            }),
            FilemanagerField::make('featured_image')->nullable(),
            Textarea::make('Description')->nullable(),
            Trix::make('Content')->nullable(),
            KeyValue::make('Images')->rules('json'),
            KeyValue::make('Extra')->rules('json'),
            KeyValue::make('Offers')->rules('json'),
            Number::make('Regular Price','regular_price')->nullable(),
            Number::make('Sale Price','sale_price')->nullable(),
            Text::make('link')->nullable(),
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
