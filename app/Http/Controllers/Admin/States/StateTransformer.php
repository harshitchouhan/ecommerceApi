<?php

namespace App\Http\Controllers\Admin\States;

use League\Fractal\TransformerAbstract;

class StateTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(State $state)
    {
        return [
            'stateId' => $state->stateid,
            'name' => $state->statename,
            'code' => $state->statecode,
            'status' => $state->stateactive,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'stateId' => 'stateid',
            'name' => 'statename',
            'code' => 'statecode',
            'status' => 'stateactive',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'stateid' => 'stateId',
            'statename' => 'name',
            'statecode' => 'code',
            'stateactive' => 'status',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
