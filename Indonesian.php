<?php
/**
 *   _   _  _____ ______                    _   _       _
 *  | \ | |/ ____|  ____|                  | | (_)     | |
 *  |  \| | |  __| |__   ___ ___  ___ _ __ | |_ _  __ _| |___
 *  | . ` | | |_ |  __| / __/ __|/ _ \ '_ \| __| |/ _` | / __|
 *  | |\  | |__| | |____\__ \__ \  __/ | | | |_| | (_| | \__ \
 *  |_| \_|\_____|______|___/___/\___|_| |_|\__|_|\__,_|_|___/
 *
 * Copyright (C) 2016-2020 NetherGames Network
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author k3ithos, matcracker, driesboy
 *
 */
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;

class Indonesian implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Dimatikan {%0} obrolan dan diaktifkan {%1} obrolan. Sekarang anda hanya mengobrol dengan {%1} anggota.',
            'command.chat.disable' => '§6Di matikan {%0} chat. Sekarang anda bisa chat ke semua orang.',
            'command.chat.enable' => '§6Diaktifkan {%0} chat. Sekarang anda hanya bisa mengobrol dengan anggota {%0}.',
            'command.chat.public' => '§cMaaf, anda sudah berada di obrolan publik.',
            'command.chat.usage' => '§cJalankan /c [{%0}] Untuk menyalakan obrolan spesifik.',
            'command.chat.usage.nothing' => '§cMaaf, anda tidak bisa berganti obrolan saat tidak berada di pesta.',
            'command.chat.usage.party' => '§cWoohoo! jalankan /c pesta untuk menyalakan obrolan pesta, jalankan /c off untuk mematikan obrolan pesta.',
            'database.error ' => ' §l§c Terjadi kesalahan tak terduga saat menyambung ke database. Data anda tidak akan disimpan untuk sesi ini. ',
            'forms.profile.credits' => '§bCredit: {%0} ',
            'forms.profile.deaths' => '§bKematian: {%0}',
            'forms.profile.kills' => '§bMembunuh: {%0}',
            'forms.profile.level' => '§bLevel: {%0}',
            'forms.profile.rules.1' => '§aSelamat datang di §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Matikan pemberitahuan klien anda',
            'forms.profile.rules.10.desc' => '§7Menggunakan modifikasi klien atau "klien bajakan" yang tidak disetujui secara resmi oleh Minecraft tidak diizinkan untuk digunakan di NetherGames. Modifikasi terlarang mencakup yang memberi anda kemampuan yang tidak diperoleh dengan benar - mis. peretasan terbang, peningkatan kecepatan / kecepatan, klik otomatis, dll. Paket sumber daya / tekstur yang memberikan perubahan kosmetik yang tidak memengaruhi gameplay dan / atau memberikan keuntungan diizinkan.',
            'forms.profile.rules.11' => '§e8. Gunakanlah nama pengguna dan skin yang pantas',
            'forms.profile.rules.11.desc' => '§7Usahakan nama pengguna dan skin anda pantas untuk pemain dari segala usia. Skin yang dilarang termasuk yang dapat memberikan keuntungan, seperti yang menggunakan geometri khusus dan bukan struktur Skin "Alex" atau "Steve", atau skin yang menunjukkan jumlah bagian tubuh yang berlebihan.',
            'forms.profile.rules.12' => '§e9. Bijaksanalah terhadap rekan satu tim anda dan pemain lain',
            'forms.profile.rules.12.desc' => "§7Saat bermain dalam pertandingan di mana anda ditempatkan dalam tim dengan pemain lain, ingatlah itu. Mencoba untuk memancing emosi, mencuri, atau membunuh mereka tidak dapat diterima.\nJika anda berada dalam pertandingan solo melawan pemain lain, bekerja sama dengan pemain lain tidak diperbolehkan. Ada alasan mengapa pertandingan solo dan tim dipisahkan.\nPada Fraksi, \"penjebakan teleport\" pemain lain tidak diizinkan. Jangan mengambil keuntungan dari pemain lain dengan mengambil bagian dalam kegiatan tersebut.",
            'forms.profile.rules.13' => '§e10. Pertahankan klik anda pada tingkat yang diterima',
            'forms.profile.rules.13.desc' => '§7Siapkan pikiran untuk para pemain pada klien PE saat anda berada dalam permainan. Jitterclick diperbolehkan, namun butterfly click (menggunakan dua jari untuk tombol yang sama) dan menyeret mengklik (menyeret jari anda di sepanjang permukaan tombol) tidak diperbolehkan. Perangkat keras atau perangkat lunak yang memungkinkan anda mengklik pada tingkat yang tidak dapat diterima juga dilarang. Bantu kami menjaga permainan tetap adil untuk pemain seluler dan desktop.',
            'forms.profile.rules.14' => '§e11. Laporkan sebuah bug bukan menyalahgunakannya',
            'forms.profile.rules.14.desc' => '§7Menyalahgunakan bug yang memberi anda keuntungan dalam permainan dilarang, bahkan jika anda sudah melaporkannya ke tim kami. Jika anda menemukan bug perusak game seperti itu, anda diminta untuk melaporkannya ke #bugs di server Discord kami (§bngmc.co/d§7) segera dan untuk melaporkan laporan untuk pemain yang menggunakan bug ini untuk keuntungan mereka.',
            'forms.profile.rules.15' => '§e12. Terima hukumannya',
            'forms.profile.rules.15.desc' => '§7Dilarang keras menghindar dari hukuman anda, atau memberikan bantuan kepada pemain lain. Ada aturan dan sistem peringatan yang pantas dan dengan menggunakan/bermain di layanan kami, anda setuju untuk mengikuti panduan yang ditetapkan ini untuk membantu memastikan bahwa setiap orang memiliki pengalaman positif.',
            'forms.profile.rules.16' => '§e13. Berbicara bahasa Inggris',
            'forms.profile.rules.16.desc' => "§7Kami berusaha keras untuk melibatkan semua pemain terlepas dari latar belakang mereka atau dari mana mereka berasal. Kami meminta anda membantu kami dalam mencapai tujuan ini dengan berbicara dalam bahasa Inggris, yang digunakan secara luas dan digunakan di seluruh dunia.\nAda pengecualian yang dibuat untuk pemain yang mengalami kesulitan berkomunikasi dalam bahasa Inggris.",
            'forms.profile.rules.17' => "§bJika anda tidak yakin tentang jenis kegiatan atau perilaku apa yang diperbolehkan, kami menganjurkan anda untuk menghubungi tim dukungan kami. Kami lebih suka anda mengajukan pertanyaan untuk membantu menjernihkan kesalahpahaman yang mungkin anda miliki daripada menghadapi konsekuensi potensial jika anda melanggar salah satu peraturan kami.\nPerhatikan bahwa aturan di sini hanya terdaftar sebagai referensi. Anda dapat menemukan versi terbaru di §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bKami berhak untuk membuat perubahan pada peraturan ini kapan saja tanpa pemberitahuan sebelumnya atau berkonsultasi dengan komunitas yang lebih luas, yang dapat segera berlaku. Kami juga dapat menggunakan hak untuk melarang dan menolak layanan atau membatasi aksesibilitas layanan kepada pemain/pengguna berdasarkan kebijaksanaan kami, terlepas dari apakah mereka telah melanggar peraturan yang tercantum di atas.',
            'forms.profile.rules.19' => '§bButuh bantuan, atau punya pertanyaan? Hubungi anggota staff menggunakan §e/tell§b, melalui §engmc.co/lc§b, §e@NetherGamesMC §bdi Twitter atau §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §badalah jaringan server berbasis komunitas dengan beragam games untuk menghibur para pemain minecraft dari segala usia.',
            'forms.profile.rules.20' => '§bTerima kasih sudah bermain di §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bSebelum anda memulai perjalanan anda di sini, kami ingin anda membaca panduan dan harapan berikut yang kami miliki tentang anda saat menggunakan layanan kami. Aturan-aturan ini membantu kami memastikan bahwa semua pemain dapat menikmati pengalaman positif dan menyenangkan.',
            'forms.profile.rules.4' => '§e1. Hormati diri anda sendiri dan yang lainnya',
            'forms.profile.rules.4.desc' => '§7Jangan bersumpah, mengutuk, atau melemparkan pelecehan pada pemain lain. Hormati pemain lain dan perlakukan orang lain seperti anda ingin diperlakukan. Penindasan dalam bentuk apa pun tidak ditoleransi di NetherGames dan pelanggar akan dituntut yang sesuai.',
            'forms.profile.rules.5' => '§e2. Pastikan konten anda pantas',
            'forms.profile.rules.5.desc' => '§7Jangan memposting konten yang tidak pantas. Cara yang baik untuk memeriksa apakah konten anda sesuai adalah bertanya pada diri sendiri - apakah ini sesuatu yang bisa saya tunjukkan kepada orang tua saya? Definisi ini juga mencakup materi yang berpotensi menyinggung orang lain. Rasisme, seksisme, atau segala bentuk diskriminasi lainnya dilarang keras.',
            'forms.profile.rules.6' => '§e3. Perhatikan saat berbicara',
            'forms.profile.rules.6.desc' => '§7Pikirkan tentang orang lain dan apa yang akan mereka lihat dalam obrolan ketika anda memposting pesan. Jangan melakukan spam, berulang kali menggunakan kata/frasa yang sama, atau menggunakan huruf besar dalam pesan anda untuk menarik perhatian atau mengganggu orang lain. Hormati fakta bahwa ada filter obrolan di tempat karena suatu alasan. Bersumpah diperbolehkan sampai tingkat tertentu, selama itu disensor dengan tepat dan tidak diarahkan ke pemain lain.',
            'forms.profile.rules.7' => '§e4. Dengarkan dan hormati anggota staff kami',
            'forms.profile.rules.7.desc' => "§7Anggota staf kami di sini untuk memastikan bahwa semua orang bersenang-senang. Ketika mereka memberi anda instruksi, kami berharap anda mengikuti apa yang mereka katakan.\nIngatlah bahwa tim staf kami terdiri dari sukarelawan. Mereka ada di sini untuk membantu dan menjaga server tetap aman - tetapi mereka bukan pelayan pribadi anda. Saat mengajukan pertanyaan atau terlibat dalam percakapan dengan mereka, lakukan dengan sopan.",
            'forms.profile.rules.8' => '§e5. Mengiklankan/mendukung server yang lain tidak diizinkan',
            'forms.profile.rules.8.desc' => '§7Mengiklankan atau mendukung server Minecraft Bedrock Edition lainnya dilarang keras di NetherGames. Server lain dapat disebutkan jika mereka akan digunakan untuk memberikan konteks dalam percakapan, namun segala bentuk percakapan lain yang berkaitan dengan server lain akan diperlakukan sebagai iklan.',
            'forms.profile.rules.9' => '§e6. Jaga informasi pribadi anda',
            'forms.profile.rules.9.desc' => '§7Sementara kami ingin percaya bahwa tidak ada orang jahat di dunia, ini sama sekali tidak realistis. Simpan informasi pribadi anda untuk diri sendiri - ini adalah internet. Ingatlah bahwa semua percakapan dan pesan yang anda kirim diposkan di forum publik, yang kemungkinan akan tetap ada selamanya.',
            'forms.profile.stats' => '§aStatistik anda:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Vote untuk kami tiap hari di §bngmc.co/v §6Dan anda bisa memenangkan peningkatan peringkat secara gratis!',
            'join.welcome' => '§bSelamat Datang di §eNether§6Games§b!',
            'minigame.party.member.join' => '§cAnda sedang berada di Pesta. Mohon tunggu tuan rumah untuk memutuskan permainan apa yang akan dimainkan!',
            'skin.invalid.change' => '§cSkin anda tidak bisa digunakan di §eNether§6Games§c. Mohon untuk memilih skin yang lain.',
            'social.party.notin' => '§cAnda sedang tidak ada di pesta!',
        ];
    }

    public function getName(): string
    {
        return 'Indonesian';
    }

    public function getLocale(): string
    {
        return 'id_id';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/indonesia.png';
    }

    public function getCredits(): string
    {
        return 'RedFoxyStyles13, mysoz & Damarun1231927';
    }
}