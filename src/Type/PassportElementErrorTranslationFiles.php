<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * PassportElementErrorTranslationFiles
 *
 * Represents an issue with the translated version of a document. The error is
 * considered resolved when a file with the document translation change.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportElementErrorTranslationFiles extends Data implements TypeInterface
{
    public function __construct(
        /** Error source, must be translation_files */
        public string $source,
        /**
         * Type of element of the user's Telegram Passport which has the issue,
         * one of "passport", "driver_license", "identity_card",
         * "internal_passport", "utility_bill", "bank_statement",
         * "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,
        /**
         * List of base64-encoded file hashes
         * @var array<string>
         */
        public array $file_hashes,
        /** Error message */
        public string $message,
    ) {
    }
}
