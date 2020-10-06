<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HumanValidator extends Validator
{
  public function validateHuman($attribute, $value, $parameters)
  {
    return $value % 2 == 0;
  }
}