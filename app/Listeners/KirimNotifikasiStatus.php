<?php

namespace App\Listeners;

use App\Events\StatusDiubah;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusDiperbarui;

class KirimNotifikasiStatus
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StatusDiubah $event): void
    {
        // Variabel statis untuk melacak apakah email sudah dikirim dalam request ini
        static $emailSent = false;

        // Jika email belum dikirim, kirim dan tandai sebagai sudah terkirim
        if (!$emailSent) {
            Mail::to($event->pengaduan->email_pelapor)->send(new StatusDiperbarui($event->pengaduan, $event->riwayat));
            $emailSent = true;
        }
    }
}
