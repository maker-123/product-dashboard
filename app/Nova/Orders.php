<?php

namespace App\Nova;


use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
class Orders extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Orders>
     */
    public static $model = \App\Models\Orders::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
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

            Text::make('fname')->hideWhenCreating()->hideWhenUpdating(),
            Text::make('email')->hideWhenCreating()->hideWhenUpdating(),
            Text::make('contact_no')->hideWhenCreating()->hideWhenUpdating(),
            DateTime::make('date')->hideWhenCreating()->hideWhenUpdating(),
            new Panel('User Details', $this->userFields()),
            new Panel('Order Details', $this->orderFields()),
            new Panel('Address', $this->addressFields()),
            new Panel('Recipient', $this->recipientFields()),
            new Panel('Admin Notes', $this->adminNotesFields()),

        ];
    }

    protected function userFields()
    {
        return [
            Text::make('First Name', 'fname')->hideFromIndex()->required(),
            Text::make('Last Name', 'lname')->hideFromIndex()->required(),
            Text::make('Email')->hideFromIndex()->required(),
            Text::make('Contact No','contact_no')->hideFromIndex()->required(),
            Select::make('Contact type','contact_type')->hideFromIndex()->options([
                'Facebook' => 'Facebook',
                'instagram' => 'instagram',
            ])->nullable()->required(),
            Text::make('Username')->hideFromIndex(),
        ];
    }

    protected function orderFields()
    {
        return [
            Select::make('Status', 'status')->options([
                'Awaiting Payment' => 'Awaiting Payment',         
            ])->required(),            
            Select::make('Order Type', 'order_type')->hideFromIndex()->options([
                'Pick up' =>  'Pick up',
                'Delivery' => 'Delivery',
            ])->nullable()->required(),
            DateTime::make('Date')->hideFromIndex()->required(),
            BelongsTo::make('Branch')->nullable(), 
            BelongsTo::make('Schedules' ,'Schedules', 'App\Nova\Schedules' )->nullable(), 
        ];
    }

    protected function addressFields()
    {
        return [
            Text::make('Address', 'address_line_1')->hideFromIndex()->required(),
            Text::make('Address Line 2' ,'address_line_2')->hideFromIndex(),
            Text::make('City')->hideFromIndex()->required(),
            Text::make('Province')->hideFromIndex()->required(),
            Textarea::make('Landmark')->hideFromIndex(),
        ];
    }

    
    protected function recipientFields()
    {
        return [    
            Text::make('Recipient First Name', 'rep_fname')->hideFromIndex()->required(),
            Text::make('Recipient Last Name', 'rep_lname')->hideFromIndex()->required(),
            Text::make('Recipient Contact No','rep_contact_no')->hideFromIndex()->required(),
        ];
    }
    protected function adminNotesFields()
    {
        return [    
            Textarea::make('Notes','admin_notes')->hideFromIndex(),
            
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
