<?php

namespace Modules\Base\Helpers\Resources;

use Modules\Base\Helpers\Traits\Configure;


class Lang
{
    use Configure;

    private ?array $trans = [];
    private ?string $key;
    private $value;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public static function make(string $key)
    {
        $static = app(static::class, ['key' => $key]);
        $static->setUp();

        return $static;
    }

    public function get()
    {
        return [$this->key => $this->value];
    }

    public function value($value): ?static
    {
        $this->value = $value;
        return $this;
    }
}
