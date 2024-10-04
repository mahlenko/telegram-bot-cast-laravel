<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * UserProfilePhotos
 *
 * This object represent a user's profile pictures.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class UserProfilePhotos extends Dto implements TypeInterface
{
    public function __construct(
        /** Total number of profile pictures the target user has */
        public int $total_count,
        /**
         * Requested profile pictures (in up to 4 sizes each)
         * @var array<PhotoSize>
         */
        public array $photos,
    ) {
    }
}
