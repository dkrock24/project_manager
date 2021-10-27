<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class AllExistsRule implements Rule
{
    /**
     * @var Model
     */
    private Model $model;
    private string $property;

    /**
     * Create a new rule instance.
     *
     * @param Model $model
     * @param string $property
     */
    public function __construct(Model $model, $property ='id')
    {
        //
        $this->model = $model;
        $this->property = $property;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (empty($value)) {
            return true;
        }
        $dbValues = $this->model
            ->newQuery()
            ->whereIn($this->property, $value)
            ->pluck($this->property)
            ->toArray();
        return empty(array_diff($value, $dbValues));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The data is invalid';
    }

    public function __toString()
    {
        return $this->message();
    }
}
