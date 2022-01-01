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

class Turkish implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Sohbet {%0} kapatıldı ve sohbet {%1} etkinleştirildi. Artık sadece {%1} üyeleriyle yazışacaksın.',
            'command.chat.disable' => '§6Sohbet {%0} kapatıldı. Artık tüm üyelerle yazışacaksın.',
            'command.chat.enable' => '§6Sohbet {%0} etkinleştirildi. Artık sadece {%0} üyeleriyle yazışacaksın.',
            'command.chat.public' => "§cÜzgünüm, zaten genel sohbettesin.",
            'command.chat.usage' => '§cÖzel bir sohbet seçmek için /c [{%0}] kullan.',
            'command.chat.usage.nothing' => '§cBir partide değilken sohbet geçişi yapamazsın.',
            'command.chat.usage.party' => '§cParti sohbetini açmak için /c party, kapatmak için /c off kullanabilirsin.',
            'command.reserved.estaff' => '§cBu komut §eNether§6Games §cyönetimi içindir.',
            'command.reserved.staff' => '§cBu komut §eNether§6Games §cyetkilileri içindir.',
            'database.error' => '§l§cVeritabanına bağlanırken bir sorun oluştu. Verileriniz bu oturum için kaydedilmeyecek.',
            'forms.profile.credits' => '§bKrediler: {%0}',
            'forms.profile.deaths' => '§bÖlümler: {%0}',
            'forms.profile.kills' => '§bÖldürmeler: {%0}',
            'forms.profile.level' => '§bSeviye: {%0}',
            'forms.profile.rules.1' => "§§eNether§6Games§a'e hoş geldiniz!",
            'forms.profile.rules.10' => '§e7. Oyun modifikasyonlarını kapat.',
            'forms.profile.rules.10.desc' => '§7Minecraft tarafından onaylanmayan oyun modifikasyonları veya "hileler" kullanmak NetherGames\'te yasaktır. Erişmemeniz gereken yetenekler verdiği için bunlar yasaktır. - örn. uçma hilesi, zıplama/hız, otomatik tıklama, vb. Haksız rekabete sebep olabilecek kaynak paketleri kullanmak yasaktır.',
            'forms.profile.rules.11' => '§e8. Uygun kullanıcı adı ve dış görünüş kullan.',
            'forms.profile.rules.11.desc' => '§7Kullanıcı adı ve dış görünüşünün tüm yaş grubuna uygun olduğuna emin ol. Anormal dış görünüşler haksız avantaj sağlayabilir, "Alex" veya "Steve" geometrisi gibi olmayan özel geometriler gibi.',
            'forms.profile.rules.12' => '§e9. Takım arkadaşlarına ve oyunculara karşı düşünceli ol.',
            'forms.profile.rules.12.desc' => "§7Diğer oyuncularla takımda oynarken onları da düşün. Onları trollemek veya kışkırtmak uygun kabul edilmez.\nEğer takımsız bir oyunda oynuyorsan, diğer oyuncularla takımlaşmak yasaktır. Tekli ve takımlı oyunların ayrılmasının sebebi var.\nFactions'ta, \"ışınlama tuzağı\" yapmak uygunsuzdur. Bu tür etkinliklere katılarak diğer oyunculardan faydalanmayın.",
            'forms.profile.rules.13' => '§e10. Tıklamalarınızı kabul edilebilir bir oranda tutun.',
            'forms.profile.rules.13.desc' => '§7Mobilden oynayanlara karşı düşünceli olun. Jitter click serbesttir, ancak butterfly click (Tek butonda iki parmak) ve drag click (parmağınızı düğmenin yüzeyi boyunca sürüklemek) yasaktır. Kabul edilemez bir oranda tıklamanızı sağlayan donanım veya yazılım da yasaktır. Oyunu hem mobil hem de masaüstü oyuncular için adil tutmamıza yardımcı olun.',
            'forms.profile.rules.14' => '§e11. Hatayı kullanmak yerine bildir.',
            'forms.profile.rules.14.desc' => '§7Oyunda size avantaj sağlayan bir hatayı kötüye kullanmak, ekibimize önceden bildirmiş olsanız bile yasaktır. Bu tür oyun bozma hataları bulursanız, bunu hemen Discord sunucumuzdaki (§bngmc.co/d§7) #bugs\'a bildirmeniz ve bu hataları kendi çıkarları için kullanan oyuncular için rapor göndermeniz istenir.',
            'forms.profile.rules.15' => '§e12. Cezayı kabul et.',
            'forms.profile.rules.15.desc' => '§7Cezanızdan kaçmaya çalışmak veya başka bir oyuncuya onların cezalarından kaçması için yardım sağlamak kesinlikle yasaktır. Kurallar ve uygun bir uyarı sistemi vardır ve hizmetlerimizi kullanarak/oynayarak herkesin olumlu bir deneyim yaşamasını sağlamaya yardımcı olmak için bu belirlenmiş yönergeleri izlemeyi kabul etmiş olursunuz.',
            'forms.profile.rules.16' => '§e13. İngilizce konuş.',
            'forms.profile.rules.16.desc' => "§7Geçmişleri veya nereden geldikleri ne olursa olsun tüm oyuncuları kapsayıcı olmaya çalışıyoruz. Dünya çapında yaygın olarak konuşulan ve kullanılan İngilizce konuşarak bu hedefe ulaşmamıza yardımcı olmanızı rica ediyoruz.\nİngilizce iletişim kurmakta zorluk çeken oyuncular için yapılan istisnalar vardır.",
            'forms.profile.rules.17' => "§bNe tür bir faaliyete veya davranışa izin verildiğinden emin değilseniz, destek ekibimizle iletişime geçmenizi öneririz. Düzenlemelerimizden birini ihlal etmeniz durumunda olası sonuçlarla karşılaşmaktansa, sahip olabileceğiniz yanlış anlamaları gidermeye yardımcı olacak sorular sormanızı tercih ederiz.\nBuradaki kuralların yalnızca referans olarak listelendiğini unutmayın. En son sürümü §engmc.co/tac§b adresinde bulabilirsiniz.",
            'forms.profile.rules.18' => '§bBu kurallarda herhangi bir zamanda önceden bildirimde bulunmadan veya daha geniş topluluğa danışmadan hemen yürürlüğe girebilecek değişiklikler yapma hakkımızı saklı tutuyoruz. Ayrıca, yukarıda listelenen düzenlemeleri ihlal edip etmediklerine bakılmaksızın, kendi takdirimize bağlı olarak herhangi bir oyuncu/kullanıcı için hizmeti yasaklama ve reddetme veya hizmet erişimini sınırlama hakkını kullanabiliriz.',
            'forms.profile.rules.19' => '§bYardıma ihtiyacın veya bir sorun mu var? /tell kullanarak, §engmc.co/lc§b aracılığıyla, §e@NetherGamesMC §bTwitter hesabıyla veya §esupport@nethergames.org §badresinden bir yetkiliye ulaşabilirsin.',
            'forms.profile.rules.2' => '§eNether§6Games §bher yaştan Minecraft oyuncularını eğlendirmek için çok çeşitli oyunlara sahip topluluk tabanlı bir sunucu ağıdır.',
            'forms.profile.rules.20' => '§eNether§6Games§b\'te oynadığınız için teşekkür ederiz!',
            'forms.profile.rules.3' => '§bBuradaki yolculuğunuza başlamadan önce, hizmetlerimizi kullanırken aşağıdaki yönergeleri ve sizden beklentilerimizi okumanızı istiyoruz. Bu kurallar, tüm oyuncuların olumlu ve eğlenceli bir deneyim yaşamasını sağlamamıza yardımcı olur.',
            'forms.profile.rules.4' => '§e1. Kendine ve başkalarına saygılı ol.',
            'forms.profile.rules.4.desc' => '§7Başka bir oyuncuya küfretmeyin veya tacizde bulunmayın. Diğer oyunculara saygı gösterin ve başkalarına size nasıl davranılmasını istiyorsanız öyle davranın. NetherGames\'te hiçbir şekilde zorbalığa müsamaha gösterilmez ve suçlular buna göre yargılanacaktır.',
            'forms.profile.rules.5' => '§e2. Konuşmanı düzgün tut.',
            'forms.profile.rules.5.desc' => '§7Uygunsuz içerik yayınlamayın. İçeriğinizin uygun olup olmadığını kontrol etmenin iyi bir yolu kendinize sormaktır - bu, aileme gösterebileceğim bir şey mi? Bu tanım, başkalarının potansiyel olarak saldırgan bulabileceği materyalleri de içerir. Irkçılık, cinsiyetçilik veya diğer herhangi bir ayrımcılık şekli kesinlikle yasaktır.',
            'forms.profile.rules.6' => '§e3. Sohbet ederken düşünceli olun.',
            'forms.profile.rules.6.desc' => '§7Bir mesaj gönderirken diğerlerini ve sohbette ne göreceklerini düşünün. Mesajlarınızda dikkat çekmek veya başkalarını rahatsız etmek için spam yapmayın, aynı kelimeyi/ifadeyi tekrar tekrar kullanmayın veya aşırı büyük harf kullanmayın. Bir nedenden dolayı bir sohbet filtresinin bulunduğu gerçeğine saygı gösterin. Uygun şekilde sansürlendiği ve başka bir oyuncuya yönlendirilmediği sürece, küfüre belirli bir dereceye kadar izin verilir.',
            'forms.profile.rules.7' => '§e4. Yetkili ekibini dinleyin ve saygı gösterin.',
            'forms.profile.rules.7.desc' => "§7Çalışanlarımız, herkesin iyi vakit geçirmesini sağlamak için buradalar. Size talimat verdiklerinde, dediklerini takip etmenizi bekliyoruz.\nPersonel ekibimizin gönüllülerden oluştuğunu unutmayın. Yardım etmek ve sunucuyu güvende tutmak için buradalar - ama onlar sizin kişisel hizmetçileriniz değiller. Soru sorarken veya onlarla sohbet ederken bunu kibar bir şekilde yapın.",
            'forms.profile.rules.8' => '§e5. Diğer sunucuların reklamına/onaylanmasına izin verilmez.',
            'forms.profile.rules.8.desc' => '§7NetherGames\'te başka bir Minecraft Bedrock Edition sunucusunun reklamını yapmak veya onaylamak kesinlikle yasaktır. Bir konuşmada bağlam sağlamak için kullanılacaklarsa diğer sunuculardan bahsedilebilir, ancak başka bir sunucuyla ilgili diğer herhangi bir konuşma biçimi reklam olarak kabul edilecektir.',
            'forms.profile.rules.9' => '§e6. Kişisel bilgilerinizi güvende tutun.',
            'forms.profile.rules.9.desc' => '§7Dünyada kötü insan olmadığına inanmak istesek de, bu gerçekçi değil. Kişisel bilgilerinizi kendinize saklayın - burası internet. Gönderdiğiniz tüm konuşmaların ve mesajların, muhtemelen sonsuza kadar kalacakları bir genel forumda yayınlandığını unutmayın.',
            'forms.profile.stats' => '§aİstatistiklerin:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => "§6§bngmc.co/v§6'de günlük olarak oy verin, bedava rank yükseltmesi kazanın!",
            'join.welcome' => "§eNether§6Games§b'e hoş geldiniz!",
            'kick.maintenance' => '§o§l§eN§6G§r§7: §cPlanlı bakım çalışması. Gelişmeler için bizi Twitterda takip edin - §6@NetherGamesMC',
            'kick.client.outdated' => '§o§l§eN§6G§r§7: §eNether§6Games §coynamak için oyununuzu en güncel sürüme güncelleyin.',
            'kick.server.outdated' => "§o§l§eN§6G§r§7: §eNether§6Games §chenüz yeni oyun sürümüne güncellenmedi. Gelişmeler için bizi Twitterda takip edin - §6@NetherGamesMC",
            'minigame.party.member.join' => "§cŞuan bir partidesin. Oynamak için parti sahibini bekle!",
            'skin.invalid.change' => "§cDış görünüşün §eNether§6Games§c'te oynamak için uygun değil. Lütfen değiştir.",
            'social.guild.notin' => '§cBir toplulukta değilsin!',
            'social.party.notin' => '§cBir partide değilsin!',
        ];
    }

    public function getName(): string
    {
        return 'Turkish';
    }

    public function getLocale(): string
    {
        return 'tr_tr';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/turkey.png';
    }

    public function getCredits(): string
    {
        return 'SGT8077';
    }
}