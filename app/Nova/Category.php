<?php

namespace App\Nova;

use App\Models\Blog;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

Use App\Models\Category as CategroyModel;
use App\Models\Product;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Slug;

class Category extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Category::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'Title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','slug','description'
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
            
            Text::make('Title')->rules('required', 'max:255'),

            Slug::make('Slug')->from('Title')->separator('-'),

            FilemanagerField::make('Icon')->displayAsImage()->rules('required'),

            KeyValue::make('Banners')
            ->keyLabel('image') // Customize the key heading
            ->valueLabel('link') // Customize the value heading
            ->actionText('Add banner image')
            ->rules('json'),

            KeyValue::make('Extra')->rules('json'),


            Select::make('Parent Category','parent_id')->options(
                CategroyModel::select('title','id')->where('id','!=',$this->id)->pluck('title','id')
            )->nullable(),
            
            Boolean::make('Active','is_active')->default(true),


            
            Number::make('order')->min(1)->max(100)->step(1)->rules('required', 'numeric'),
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
