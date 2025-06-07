<?php

namespace Alfan06\LaravelCustomLogging;

class LogRecord extends \Monolog\LogRecordAdd commentMore actions
{
    public function toArray(): array
    {
        $array = parent::toArray();
        return array_merge(['origin' => 'app.' . config('custom-logging.container_role')], $array);
    }
}