<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetStickerEmojiList
 *
 * Use this method to change the list of emoji assigned to a regular or custom
 * emoji sticker. The sticker must belong to a sticker set created by the bot.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetStickerEmojiList extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized list of 1-20 emoji associated with the sticker
         * @var array<string>
         */
        public array $emoji_list,
    ) {
    }
}
