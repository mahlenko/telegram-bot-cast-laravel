<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's short description.
 */
final class BotShortDescription extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's short description
         * @var string
         */
        public string $short_description,
    ) {
    }
}
