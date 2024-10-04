<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PhotoSize
 *
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PhotoSize extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the
         * file
         */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over
         * time and for different bots. Can't be used to download or reuse the
         * file.
         */
        public string $file_unique_id,
        /** Photo width */
        public int $width,
        /** Photo height */
        public int $height,
        /** File size in bytes */
        public ?int $file_size,
    ) {
    }
}
