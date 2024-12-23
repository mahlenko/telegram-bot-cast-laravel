<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a location to which a chat is connected.
 */
final class ChatLocation extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The location to which the supergroup is connected. Can't be a live location.
         * @var Location
         */
        public Location $location,
        /**
         * Location address; 1-64 characters, as defined by the chat owner
         * @var string
         */
        public string $address,
    ) {
    }
}
