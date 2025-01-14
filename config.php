<?php
final class config
{
    public static array|null $config = null;
    final public static function setFromFile(string $jsonPath = __DIR__.'/../../.config.json'): void
    {
        if (self::$config === null)
            self::$config = json_decode
            (
                json: file_get_contents(filename: $jsonPath),
                associative: true
            );
    }
}