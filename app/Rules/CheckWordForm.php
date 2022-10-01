<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckWordForm implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $value ;
    public function __construct($value)
    {
       $this->value = $value ;
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
        // return str_word_count($value) =>10 ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
