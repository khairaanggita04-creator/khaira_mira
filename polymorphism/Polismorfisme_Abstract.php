<?php
abstract class NotifikasiWeb{
    protected string $penerima;
    protected string $pesan;

    public function __construct(string $penerima, string $pesan)
    {
        $this->penerima = $penerima;
        $this->pesan = $pesan;
    }

    public function getInfoPengiriman(): string{
        return "Mengirim ke : {$this->penerima}";
    }

    abstract public function kirimNotifikasi(): void;

}

class NotifEmail extends NotifikasiWeb{
    private string $subjek;

    public function __construct(string $penrima, string $pesan, string $subjek)
    {
        parent::__construct($penrima, $pesan);
        $this->subjek = $subjek;
    }


 public function kirimNotifikasi(): void
 {
    echo "<div style ='border: 2px solid #007bff;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f8f9fa;'
    '>";

    echo "<h4> [EMAIL] - subjek: {$this->subjek}</h4>";
    echo "<p>{$this->getInfoPengiriman()}</p>";
    echo "<p> Isi Pesan: <i>{$this->pesan}</i></p>";
    echo "</div>";
 }
}

class NotifWA extends NotifikasiWeb{
    public function kirimNotifikasi():void
    {
        echo "<div style='border:2px solid #28a745;
                         padding: 10px;
                         margin-bottom:10px;
                         background-color: #e8f5e9;
                         '>";
        
        echo "<h4>[WhatsApp MESSAGE]</h4>";
        echo "<p>{$this->getInfoPengiriman()}</p>";
        echo "<p>Pesan: <i>{$this->pesan}</i></p>";
        echo "</div>";
    }
}

class NotifBrowser extends NotifikasiWeb{
    private string $browserApp;

    public function __construct(string $penerima, string $pesan, string $browserApp)
    {
    parent::__construct($penerima, $pesan);
    $this-> browserApp = $browserApp;
    }

public function kirimNotifikasi(): void
{
    echo "<div style='border:1px solid #ffc107;
    padding: 10px; margin-bottom:10px;
    background-color:#fff3cd;'>";

    echo "<h4>[PUSH NOTIF] - Browser: {$this->browserApp}</h4>";
    echo "<p>{$this->getInfoPengiriman()}</p>";
    echo "<p>Notif: <i>{$this->pesan}</i></p>";
    echo "</div>";
    }
}



class NotifManager{
    public static function prosesKirim(NotifikasiWeb $notif):void{
       $notif->kirimNotifikasi();
    }
}

class NotifGhitHub extends NotifikasiWeb{
    public function kirimNotifikasi():void
    {
        echo "<div style='border:2px solid #000000;
                         padding: 10px;
                         margin-bottom:10px;
                         background-color: #e8f5e9;
                         '>";
        
        echo "<h4>[GhitHub]</h4>";
        echo "<p>{$this->getInfoPengiriman()}</p>";
        echo "<p>Pesan: <i>{$this->pesan}</i></p>";
        echo "</div>";
    }
}


echo "<h2>Dashboard Simulasi Pengiriman Notifikasi Web</h2>";

$notif1 = new NotifEmail ("Mirakhaira@gmail.com", "Akun Anda berhasil didaftarkan.", "Konfirmasi Akun");
$notif2 = new NotifWA ("089529211221", "Kode OTP Anda adalah 987 Jangan berikan ke siapa pun!");
$notif3 = new NotifBrowser ("Token_Device_Asus", "Ada diskon 40% untuk produk pilihan Anda!", "Google Chrome");
$notif4 = new NotifGhitHub ("GhitHub","kode telah diterima");


NotifManager::prosesKirim($notif1);
NotifManager::prosesKirim($notif2);
NotifManager::prosesKirim($notif3);
NotifManager::prosesKirim($notif4);
?>