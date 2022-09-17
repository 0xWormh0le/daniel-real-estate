<?php
use Carbon\Carbon;

if(!function_exists('current_server_time')) {
    function current_server_time() {
        $now = Carbon::now('UTC');
        return $now->setTimezone(config('app.timezone'));
    }
}