<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class resetPassword extends Notification
{
    use Queueable;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->greeting('Olá ' . $notifiable->name)
        ->subject('Recuperar Senha | SAS-Seduc')
      ->line('Este e-mail foi solicitado para alteração de senha de usuário ')
        ->action('Alterar senha', url('password/reset', $this->token))
        ->line('Se não foi você que solicitou a alteração de senha, ignore este e-mail que nada será alterado.')
        ->salutation('Atenciosamente, DETIN-Seduc');
    }

}
