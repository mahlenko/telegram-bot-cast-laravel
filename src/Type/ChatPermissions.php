<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ChatPermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatPermissions extends Data implements TypeInterface
{
    public function __construct(
        /**
         * True, if the user is allowed to send text messages, contacts,
         * giveaways, giveaway winners, invoices, locations and venues
         */
        public ?bool $can_send_messages,
        /** True, if the user is allowed to send audios */
        public ?bool $can_send_audios,
        /** True, if the user is allowed to send documents */
        public ?bool $can_send_documents,
        /** True, if the user is allowed to send photos */
        public ?bool $can_send_photos,
        /** True, if the user is allowed to send videos */
        public ?bool $can_send_videos,
        /** True, if the user is allowed to send video notes */
        public ?bool $can_send_video_notes,
        /** True, if the user is allowed to send voice notes */
        public ?bool $can_send_voice_notes,
        /** True, if the user is allowed to send polls */
        public ?bool $can_send_polls,
        /**
         * True, if the user is allowed to send animations, games, stickers and
         * use inline bots
         */
        public ?bool $can_send_other_messages,
        /**
         * True, if the user is allowed to add web page previews to their
         * messages
         */
        public ?bool $can_add_web_page_previews,
        /**
         * True, if the user is allowed to change the chat title, photo and other
         * settings. Ignored in public supergroups
         */
        public ?bool $can_change_info,
        /** True, if the user is allowed to invite new users to the chat */
        public ?bool $can_invite_users,
        /**
         * True, if the user is allowed to pin messages. Ignored in public
         * supergroups
         */
        public ?bool $can_pin_messages,
        /**
         * True, if the user is allowed to create forum topics. If omitted
         * defaults to the value of can_pin_messages
         */
        public ?bool $can_manage_topics,
    ) {
    }
}
