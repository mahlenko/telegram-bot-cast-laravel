<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a list of administrators in a chat, which aren't bots.
 * Returns an Array of <a href="#chatmember">ChatMember</a> objects.
 */
final class GetChatAdministrators extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
