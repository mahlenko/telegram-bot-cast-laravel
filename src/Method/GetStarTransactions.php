<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Returns the bot's Telegram Star transactions in chronological order. On success,
 * returns a <a href="#startransactions">StarTransactions</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class GetStarTransactions extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Number of transactions to skip in the response
         * @var int|null
         */
        public ?int $offset,
        /**
         * The maximum number of transactions to be retrieved. Values between 1-100 are
         * accepted. Defaults to 100.
         * @var int|null
         */
        public ?int $limit,
    ) {
    }
}