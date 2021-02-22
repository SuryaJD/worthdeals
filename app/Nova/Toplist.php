<?php

namespace App\Nova;

use App\Models\Product;
use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\ID;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Panel;
use Spatie\TagsField\Tags;
use Techouse\SelectAutoComplete\SelectAutoComplete as Select;

class Toplist extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Ranker::class;

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
            Text::make('Title')->required(),

            Trix::make('summary'),

            FilemanagerField::make('banner')->nullable(),

            Flexible::make('list')
            ->addLayout('Product', 'video', [
                Text::make('Title')->nullable(),
                Textarea::make('Description')->nullable(),
                Select::make('Product','product')->options(
                    Product::select('name','id')->pluck('name','id')
                )->placeholder('Pick a product') // use a custom placeholder               // set the default to the User with the ID 7
                ->displayUsingLabels()
                ->maxResults(7)              // limit the dropdown select to a max of 5 hits       // limit the dropdown to a max height of 100px
                ->required()                 // make the field required,
            ]),

            new Panel('Seo information', $this->seoFields()),

        ];
    }

    public function seoFields()
    {
        return [
            Text::make('Meta Title','meta_title')->nullable(),
            
            Textarea::make('Meta Description','meta_description')->nullable(),

            Tags::make('Tags')->withLinkToTagResource()->type('Keywords'),

            FilemanagerField::make('image')->nullable()->displayAsImage(),

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
