<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputMediaAudio;
use Appto\TelegramBot\Type\InputMediaDocument;
use Appto\TelegramBot\Type\InputMediaPhoto;
use Appto\TelegramBot\Type\InputMediaVideo;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send a group of photos, videos, documents or audios as an
 * album. Documents and audio files can be only grouped in an album with messages
 * of the same type. On success, an array of <a href="#message">Messages</a> that
 * were sent is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendMediaGroup extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * A JSON-serialized array describing messages to be sent, must include 2-10 items
         * @var <InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo>[]
         */
        public array $media,
        /**
         * Sends messages <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent messages from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
    ) {
    }
}
