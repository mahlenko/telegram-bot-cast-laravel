<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes a Telegram Star transaction.
 *
 * @version Telegram Bot API 7.10
 */
final class StarTransaction extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier of the transaction. Coincides with the identifer of the
         * original transaction for refund transactions. Coincides with
         * SuccessfulPayment.telegram_payment_charge_id for successful incoming payments
         * from users.
         * @var string
         */
        public string $id,
        /**
         * Number of Telegram Stars transferred by the transaction
         * @var int
         */
        public int $amount,
        /**
         * Date the transaction was created in Unix time
         * @var int
         */
        public int $date,
        /**
         * Source of an incoming transaction (e.g., a user purchasing goods or services,
         * Fragment refunding a failed withdrawal). Only for incoming transactions
         * @var TransactionPartner|null
         */
        public ?TransactionPartner $source,
        /**
         * Receiver of an outgoing transaction (e.g., a user for a purchase refund,
         * Fragment for a withdrawal). Only for outgoing transactions
         * @var TransactionPartner|null
         */
        public ?TransactionPartner $receiver,
    ) {
    }
}