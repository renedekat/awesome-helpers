<?php

function money($input, $showCents = true, $locale = null, $decimalPlaces = 2)
{
    setlocale(LC_MONETARY, $locale ?: locale_get_default());

    $numberOfDecimalPlaces = $showCents ? $decimalPlaces : 0;

    return money_format('%.' . $numberOfDecimalPlaces . 'n', $input);
}
