<?php

if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (! function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'dashboard.main';
            }

            return 'login';
        }

        return 'login';
    }
}

if (! function_exists('__generate_number')) {
    /**
     * Generate number.
     * @param Exist total $count
     * @param Total length $length
     * @return string
     */
    function __generate_number($count, $length, $const = '')
    {
        $string = $const;
        $string .= date('dmY').str_pad($count + 1, $length, 0, STR_PAD_LEFT);

        return $string;
    }
}

if (! function_exists('__totalAmount')) {
    /**
     * @return number
     */
    function __totalAmount($subtotal, $other = 0)
    {
        // plus commercial tax 5%
        $tax = $subtotal / 100 * 5;
        $total = $subtotal;
        $total += $tax;

        return $total;
    }
}

if (! function_exists('__moneyFormat')) {
    /**
     * @return money format
     */
    function __moneyFormat($amount, $type = 'en')
    {
        switch ($type) {
            case 'mm':
                $format = 'MMK';
                $type = 'en';
                break;
            default:
                $format = 'USD';
                break;
        }
        $formatter = new \NumberFormatter($type, \NumberFormatter::CURRENCY);

        return $formatter->formatCurrency($amount, $format).PHP_EOL;
    }
}

if (! function_exists('__convertPercent')) {
    /**
     * @return percentage
     */
    function __convertPercent($result, $total)
    {
        if (! $result) {
            return $result;
        }
        // $base = 90;
        // $true = 12;
        // $p = $true / $base;
        // $p = $p * 100;

        $percentage = $result / $total;
        $percentage = $percentage * 100;

        return "{$percentage} %";
    }
}

if (! function_exists('__status_helper')) {
    /**
     * @return string
     */
    function __status_helper($status, $list)
    {
        $key = array_keys($list, $status)[0] + 1;
        if (array_key_exists($key, $list)) {
            return $list[$key];
        }
    }
}

if (! function_exists('__select_helper')) {
    /**
     * @return string
     */
    function __select_helper($key)
    {
        if (in_array($key, [1, 2])) {
            return 'Enquiry Management';
        }
        if (in_array($key, [3, 4])) {
            return 'Vehicle Management';
        }
        if (in_array($key, [5, 6])) {
            return 'Subscription Management';
        }
        if (in_array($key, [7, 8])) {
            return 'Feedback Management';
        }
        if (in_array($key, [9, 10])) {
            return 'Rate Management';
        }
        if (in_array($key, [11, 12])) {
            return 'Promotion Management';
        }
        if (in_array($key, [13, 14])) {
            return 'Invoice Management';
        }
        if (in_array($key, [15, 16])) {
            return 'Branch Management';
        }
        if (in_array($key, [17, 18])) {
            return 'Setting Management';
        }
        if (in_array($key, [19, 20])) {
            return 'Exchange Rate Management';
        }
        if (in_array($key, [21, 22])) {
            return 'Fixed Cost Management';
        }
        if (in_array($key, [23, 24])) {
            return 'User Management';
        }
        if (in_array($key, [25, 26])) {
            return 'Role Management';
        }
    }
}
