<?php

namespace App\Nova;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Timezone;
use Laravel\Nova\Http\Requests\NovaRequest;

class Schedules extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Schedules>
     */
    public static $model = \App\Models\Schedules::class;

    
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = '';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'type',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Text::make('name', 'start' , function ($_ ,$body){
                return  date_format( $body->start, "H:i A") .' - '. date_format( $body->end, "H:i A");
            })
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->hideFromDetail(),
            
            Select::make('Type','type')->options([
                'DELIVERY'=>'DELIVERY' ,
                'PICKUP' =>'PICKUP'
            ])->hideFromIndex(),
            
            Badge::make('type')->map([
                'PICKUP' => 'info',
                'DELIVERY' => 'success',
            ]),

            DateTime::make('Start' ,'start')->displayUsing(function($value){
                return date_format( $value, "H:i A") ;
            })->hideFromIndex(),
            
            DateTime::make('End' ,'end')->displayUsing(function($value){
                return date_format( $value, "H:i A") ;
            })->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
