<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Auth\Notifications\ResetPassword as BaseResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Log;

class CustomResetPasswordNotification extends BaseResetPassword
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(#[\SensitiveParameter] $token)
    {
        $this->token = $token;
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        Log::info($this->token);

        return $this->buildMailMessage($this->resetUrl($notifiable));
    }

    /**
     * Get the reset password notification mail message for the given URL.
     *
     * @param  string  $url
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->subject(__('passwords.password_reset.subject'))
            ->greeting(__('passwords.password_reset.greeting'))
            ->line(__('passwords.password_reset.line_1'))
            ->action(__('passwords.password_reset.button'), $url)
            ->line(__('passwords.password_reset.line_2'))
            ->line(__('passwords.password_reset.line_3'))
            ->salutation(__('passwords.password_reset.formula'));
    }
}
