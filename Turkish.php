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
            'command.chat.change' => '§6Disabled {%0} sohbet ve {%1} sohbet etkinleştirildi. Artık yalnızca {%1} üyelerle sohbet ediyorsun.',
            'command.chat.disable' => '§6Engelli {%0} sohbet. Artık tüm oyuncularla sohbet ediyorsun.',
            'command.chat.enable' => '§6Etkin {%0} sohbet. Artık yalnızca {%0} üyelerle sohbet ediyorsun.',
            'command.chat.public' => '§Üzgünüm, zaten genel bir sohbette.',
            'command.chat.usage' => '§cRun / c [{%0}] belirli bir sohbeti etkinleştirmek için.',
            'command.chat.usage.nothing' => '§cSorry, partide değilken sohbetleri değiştiremezsiniz.',
            'command.chat.usage.party' => '§cWoohoo! Parti sohbetini etkinleştirmek için / c partisini çalıştırın, parti sohbetini devre dışı bırakmak için c / çalıştırın.',
            'database.error' => '§l§cVeritabanına bağlanırken beklenmeyen bir hata oluştu. Verileriniz bu oturum için kaydedilmeyecek.',
            'forms.profile.credits' => '§bKredisi: {%0}',
            'forms.profile.deaths' => '§bÖlümleri: {%0}',
            'forms.profile.kills' => '§bKills: {%0}',
            'forms.profile.level' => '§bSeviye: {%0}',
            'forms.profile.rules.1' => '§eNether§6Games\'e §ahoşgeldiniz.',
            'forms.profile.rules.10' => '§e7. Client ayarlarınızı kapalı tutun.',
            'forms.profile.rules.10.desc' => '§7Minecraft tarafından resmen onaylanmayan client modifikasyonları veya "hileli clientler" kullanılması NetherGames\'te kullanılamaz. Yasaklanan değişiklikler, size doğru şekilde elde edilmeyen yetenekleri verenleri içerir; uçmak hack, atlama / hız artışı, otomatik tıklatma, vb. Oyunu etkilemeyen ve / veya avantaj sağlayan kozmetik değişiklikler sağlayan kaynak / doku paketleri.',
            'forms.profile.rules.11' => '§e8. Uygun isim ve kostüm kullanın.',
            'forms.profile.rules.11.desc' => '§7Kullanıcı adınızı ve cildinizi her yaştan oyuncuya uygun tutun. Yasaklanmış kaplamalar, "Alex" veya "Steve" cilt yapısını değil, özel geometriyi kullananlar veya aşırı miktarda vücut parçası gösterenler gibi bir avantaj sağlayabilecek olanları içerir.',
            'forms.profile.rules.12' => '§e9. Takım arkadaşların ve diğer oyuncuların hakkında düşünceli ol.',
            'forms.profile.rules.12.desc' => "§7Diğer oyuncularla beraber bir takıma girdiğiniz bir maçta oynarken onları aklınızda bulundurun. Troll, keder veya onları öldürmeye çalışmak kabul edilemez.\nBaşka oyunculara karşı solo bir maç yapıyorsanız, diğer oyuncularla takımlaşmaya izin verilmez. Solo ve takım maçlarının birbirleriyle ayrılmasının bir nedeni var.\nFactions'ta, \"teleport tuzağı\" diğer oyunculara izin verilmez. Bu tür aktivitelere katılarak diğer oyuncuların avantajlarından yararlanmayın.",
            'forms.profile.rules.13' => '§e10. Tıklamalarınızı kabul edilebilir bir oranda tutun.',
            'forms.profile.rules.13.desc' => '§7Oyundayken PE istemcilerindeki oyunculara bir fikir verin. Jitter tıklamaya izin verilir, ancak kelebek tıklaması (aynı düğme için iki parmağınızı kullanarak) ve sürüklemeye tıklayıp (parmağınızı düğmenin yüzeyi boyunca sürükleyerek) izin verilmez. Kabul edilemez oranda tıklama yapmanızı sağlayan donanım veya yazılım da yasaktır. Hem mobil hem de masaüstü oyuncular için oyunu adil tutmamıza yardımcı olun.',
            'forms.profile.rules.14' => '§e11. Bir bug\'u(hatayı) kötüye kullanmak yerine bildirin.',
            'forms.profile.rules.14.desc' => '§7Oyunda size avantaj sağlayan bir hatayı kötüye kullanmak, ekibimize daha önce bildirmiş olsanız bile yasaktır. Böyle bir oyun kırma hatası bulursanız, derhal Discord sunucumuzdaki (§bngmc.co/d§7) #bugs\'a bildirmeniz ve bu hataları kullanan oyunculara avantajlarını bildirmeniz istenir.',
            'forms.profile.rules.15' => '§e12. Cezayı kabul edin.',
            'forms.profile.rules.15.desc' => '§7Cezanızdan kaçınmaya çalışmak veya başka bir oyuncuya, kendisinden kaçmak için yardım sağlamak kesinlikle yasaktır. Kurallar ve uygun bir uyarı sistemi var ve hizmetlerimizi kullanarak/oynayarak, herkesin olumlu bir deneyim yaşamasını sağlamak için bu kurallara uymayı kabul ediyorsunuz.',
            'forms.profile.rules.16' => '§e13 İngilizce konuşun.',
            'forms.profile.rules.16.desc' => "§7Geçmişi veya nereden geldiklerinden bağımsız olarak tüm oyuncuları dahil etmeye çalışıyoruz. Tüm dünyada yaygın olarak konuşulan ve kullanılan İngilizce konuşarak bu amaca ulaşmamıza yardımcı olmanızı istiyoruz.\nİngilizce iletişim kurmakta zorlanan oyuncular için istisnalar var.",
            'forms.profile.rules.17' => "§bNe tür bir faaliyete veya davranışa izin verildiğinden emin değilseniz, destek ekibimizle iletişim kurmanızı öneririz. Yönetmeliklerimizden birini ihlal ederseniz olası sonuçlarla karşı karşıya kalabileceğiniz yanlış anlamaların giderilmesine yardımcı olacak sorular sormanızı rica ediyoruz.\nBuradaki kuralların sadece referans olarak listelendiğini unutmayın. En son sürümü §engmc.co/tac §badresinde bulabilirsiniz.",
            'forms.profile.rules.18' => '§bBu kurallarda herhangi bir zamanda önceden haber vermeden veya derhal yürürlüğe girebilecek olan daha geniş toplulukla danışmadan değişiklik yapma hakkımızı saklı tutarız. Ayrıca yukarıda listelenen düzenlemeleri ihlal edip etmediklerine bakılmaksızın, herhangi bir oyuncu/kullanıcının takdirine bağlı olarak hizmeti yasaklama ve reddetme veya hizmet erişimini sınırlama hakkını kullanabiliriz.',
            'forms.profile.rules.19' => '§bYardıma mı ihtiyacınız var veya bir sorunuz mu var? §e/tell§b, §engmc.co/lc§b, §e@NetherGamesMC §bTwitter\'dan veya §esupport@nethergames.org §badresinden bir personel üyesine başvurun.',
            'forms.profile.rules.2' => '§eNether§6Games §bbütün yaştaki Minecraft Oyuncuları için uygun bir sunucudur.',
            'forms.profile.rules.20' => '§eNether§6Games§b\'de §boynadığınız için teşekkür ederiz!',
            'forms.profile.rules.3' => '§bBurdaki yolculuğunuza başlamadan önce /nburdaki servisleri kullanmak için sizin için belirlediğimiz kuralları ve yönergeleri okumanızı isteriz. Bu kurallar bütün oyuncuların oyundan keyifli bir oyun zevki çıkarmalarını sağlar.',
            'forms.profile.rules.4' => '§e1.Kendi ve başka oyunculara saygı gösterin.',
            'forms.profile.rules.4.desc' => '§7Küfür ve kötü kelimeler kullanmayın. Diğer oyunculara saygı gösterin ve diğerlerine de davranılmasını istediğiniz gibi davranın. Herhangi bir şekilde zorbalık NetherGames\'te hoş görülmüyor ve suçlular buna göre yargılanacak.',
            'forms.profile.rules.5' => '§e2. İçeriğinizi karşınızda tutun.',
            'forms.profile.rules.5.desc' => '§7Uygunsuz dil konuşmayın. İçeriğinizin uygun olup olmadığını kontrol etmenin iyi bir yolu kendinize sormaktır - bu aileme gösterebileceğim bir şey mi? Bu tanım ayrıca, başkalarının potansiyel olarak rahatsız edici bulabileceği materyalleri de içerir. Irkçılık, cinsiyetçilik veya başka herhangi bir ayrımcılık şekli kesinlikle yasaktır.',
            'forms.profile.rules.6' => '§e3. Mesajlaşırken saygılı ve dikkatli olun.',
            'forms.profile.rules.6.desc' => '§7Bir mesaj gönderirken diğerlerini ve sohbette ne göreceklerini düşünün. Dikkatleri çekmek veya başkalarını rahatsız etmek için spam yapmayın, tekrar tekrar aynı kelimeyi / cümleyi kullanın veya mesajlarınızda aşırı büyük harfler kullanmayın. Bir nedenden dolayı sohbet filtresi bulunduğuna saygı gösterin. Küfür, uygun bir şekilde sansürlendiği ve başka bir oyuncuya yönlendirilmediği sürece belirli bir dereceye kadar kabul edilir.',
            'forms.profile.rules.7' => '§e4. Çalışanlarımızı dinleyin ve saygı gösterin.',
            'forms.profile.rules.7.desc' => "§7Personelimiz, herkesin iyi vakit geçirmesini sağlamak için buradalar. Size bir talimat verdiklerinde, söylediklerini takip etmenizi bekliyoruz.\nPersonel ekibimizin gönüllülerden oluştuğunu unutmayın. Sunucuyu güvende tutmak ve korumak için buradalar - ama sizin kişisel görevlileriniz değil. Sorular sorarken veya onlarla sohbet ederken, kibar bir şekilde yapın.",
            'forms.profile.rules.8' => '§e5. Diğer sunucuların reklamına izin verilmez.',
            'forms.profile.rules.8.desc' => '§7NetherGames\'te başka bir Minecraft Bedrock Sürümü sunucusunun reklamı veya onaylanması kesinlikle yasaktır. Bir konuşmada bağlam sağlamak için kullanılacaksa, diğer sunuculardan söz edilebilir, ancak başka bir sunucuya ilişkin diğer herhangi bir konuşma şekli reklam olarak kabul edilir.',
            'forms.profile.rules.9' => '§e6. Kişisel bilgilerinizi gizli tutun.',
            'forms.profile.rules.9.desc' => '§7Dünyada kötü insan olmadığına inanmayı sevmemize rağmen, bu sadece gerçekçi değil. Kişisel bilgilerinizi kendinize saklayın - bu internet. Gönderdiğiniz tüm sohbetlerin ve mesajların, sonsuza kadar kalacakları ortak bir forumda yayınlandığını unutmayın.',
            'forms.profile.stats' => '§aSisteminiz:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => "§6Günlük bize §bngmc.co / v §6'da günlük olarak oy verin, ve ücretsiz bir sıralama yükseltmesi kazanabilirsiniz!'",
            'join.welcome' => "§Başka§6 Oyun§b'ye Hoş Geldiniz!', 'minigame.party.member.join' => '§Şu anda bir parti içindesiniz. Parti sunucunuzun hangi oyunu oynayacağına karar vermesini bekleyin!",
            'skin.invalid.change' => "§cSenin cildin, §eether§6Games§c'de oynamak için geçerli değil. Lütfen başka bir tane seç.",
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
