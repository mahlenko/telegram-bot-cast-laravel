<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * Birthdate
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class Birthdate extends Dto implements TypeInterface
{
    public function __construct(
        /** Day of the user's birth; 1-31 */
        public int $day,
        /** Month of the user's birth; 1-12 */
        public int $month,
        /** Year of the user's birth */
        public ?int $year,
    ) {
    }
}
