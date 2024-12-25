<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | outcome such as failure due to an invalid password / reset token.
    |
    */

    'reset' => 'Your password has been reset.',
    'sent' => 'We have emailed your password reset link.',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",
    'password_reset' => [
        'subject' => "Reset password notification",
        'button' => "Reset",
        'greeting' => "Hello!",
        'line_1' => "You are receiving this email because we received a password reset request for your account.",
        'line_2' => "This password reset link will expire in 60 minutes.",
        'line_3' => "If you did not request a password reset, no further action is required.",
        'formula' => "Regards,",
        "footer" => "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below into your web browser: "
    ],

];
