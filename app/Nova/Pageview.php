<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Stack;


use Laravel\Nova\Http\Requests\NovaRequest;

class Pageview extends Resource
{
    /**
     * The model the resource corresponds to. 
     *
     * @var string
     */
    public static $model = \App\Models\Pageview::class;

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
            Stack::make('Details', [
                Text::make('Operating System','os')->sortable(),
                Text::make('Device')->sortable(),
            ]),
            Text::make('Source','utm_source')->sortable(),
            Text::make('Medium','utm_medium')->sortable(),
            Text::make('Campaign','utm_campaign')->sortable(),
            Text::make('Content','utm_content')->sortable(),
            Text::make('Term','utm_term')->sortable(),
            Text::make('from','refferal')->sortable(),
            Text::make('Shouter','affiliate')->sortable(),
            DateTime::make('Visited At','created_at')->format('DD-MM-Y')->sortable(),

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
