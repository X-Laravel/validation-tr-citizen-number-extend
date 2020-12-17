<?php

namespace XLaravel\ValidationTrCitizenNumberExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
use XAdam\TrCitizenNumberValidation;

class TrCitizenNumberRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        return TrCitizenNumberValidation::validate($value);
    }

    public function message(): string
    {
        return trans('X-Laravel::validationTrCitizenNumberExtend.error');
    }
}
