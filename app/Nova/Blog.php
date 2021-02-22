<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Spatie\TagsField\Tags;
use Laravel\Nova\Fields\MorphToMany;

class Blog extends Resource
{

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Blog::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','slug'
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

            Text::make('Title'),

            Slug::make('URL','slug')->from('title'),

            FilemanagerField::make('Featured Image')
                ->displayAsImage()
                ->filterBy('images')
                ->validateUpload('image', 'max:1000')
                ->nullable(),

            Textarea::make('summary')
                ->rows(2)
                ->nullable(),

            Trix::make('Content')->withFiles('public'),

            MorphToMany::make('categories'),

            new Panel('Seo Details',$this->seoFields()),

            BelongsTo::make('user'),
        ];
    }


    public function seoFields()
    {
        return [
            Text::make('Meta Title','meta_title')->nullable(),
            
            Textarea::make('Meta Description','meta_description')->rows(2)->nullable(),

            Tags::make('Tags')->withLinkToTagResource()->type('Keywords'),

            FilemanagerField::make('Open Graph Image','meta_image')->nullable()->displayAsImage(),

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
