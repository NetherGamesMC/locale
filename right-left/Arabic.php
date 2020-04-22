<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Arabic implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§تم تعطيل دردشة{0%} وتم تفعيل دردشة {1%}. أنت الآن تكلم أعضاء {1%} فقط.',
            'command.chat.disable' => '§6تم تعطيل دردشة {0%}. أنت الآن تكلم جميع اللاعبين.',
            'command.chat.enable' => '§6تم تفعيل دردشة {0%}. أنت الآن تكلم أعضاء {0%} فقط.',
            'command.chat.public' => '§cآسف ، أنت بالفعل في الدردشة عامة.',
            'command.chat.usage' => '§c\أدخل /c [{0%}] لتفعيل دردشة معينة.',
            'command.chat.usage.nothing' => '§cاسف ، لا يمكنك تبديل الدردشات أثناء عدم وجودك في مجموعة',
            'command.chat.usage.party' => '§cWoohoo! أدخل /c party لتفعيل دردشة المجموعة, أدخل /c off لتعطيل دردشة المجموعة.',
            'database.error' => '§l§cحدث خطأ غير متوقع أثناء الاتصال بقاعدة البيانات. لن يتم حفظ بياناتك في جلسة اللعب هذه.',
            'forms.profile.credits' => '§b{%رصيد: {0',
            'forms.profile.deaths' => '§b{%عدد مرات الموت: {0',
            'forms.profile.kills' => '§b{%عدد مرات القتل: {0',
            'forms.profile.level' => '§b{%مستوى: {0',
            'forms.profile.rules.1' => '§aأهلا بك في §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e- ابقي معلوماتك الشخصية خاصة بك, جميع الخدمات عامة ( المحادثات عبر المنتدي الخاص بالشبكة مستثناة ) ',
            'forms.profile.rules.11' => '§e- يمنع استخدام لعبة معدلة أو مقرصنة في أي محاولة للغش',
            'forms.profile.rules.12' => '§e- لا مظاهر شخصية غير اخلاقية او اسماء مستخدم غير اخلاقية',
            'forms.profile.rules.13' => '§e- غير مسموح بمظاهر الشخصية غير المرئية أو أي شكل يشبه كتلة أو كيان يمكن استخدامه للغش"،',
            'forms.profile.rules.14' => '§e- استغلال الأخطاء ممنوع (بلغ عن جميع الأخطاء التي تواجهك في #bugs على Discord من خلال ngmc.co/d أو ngmc.co/s)',
            'forms.profile.rules.15' => '§7هذة القواعد معرضة للتغير في اي وقت بدون اي تحذير مسبق. بأمكانك الحصول علي الشروط والأحكام الشاملة للسلوك علي §dngmc.co/tac§7.',
            'forms.profile.rules.17' => '§bبحاجة الى مساعدة ، أو لديك أسئلة؟ تواصل مع احد افراد فريق عمل الشبكة باستخدام §e/tell§b, عبر §engmc.co/s§b, §e@NetherGamesMC §bعلي Twitter او §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bهو سيرفر قائم على المجتمع مع مجموعة واسعة من الألعاب والمميزات لجعل اللعب أكثر متعة',
            'forms.profile.rules.3' => '§bكلاعب على شبكتنا ومستخدم لخدماتنا ، نرجو منك أن تقرأ وتتابع القواعد الواردة أدناه بعناية:',
            'forms.profile.rules.4' => '§e- تمنع الشتائم والألفاظ المهينة الموجهة إلى أي شخص أو بشكل عام',
            'forms.profile.rules.5' => '§e- لا يوجد محتوى غير اخلاقي (اسأل نفسك ، هل هذا شيء يرغب والداي في رؤيته؟)',
            'forms.profile.rules.6' => '§e- احترم الجميع وتعامل الجميع بالطريقة التي تريد أن يعاملوك بها ',
            'forms.profile.rules.7' => '§e- لا تستخدم نفس الكلمة أو العبارة مراراً وتكراراً لجذب الانتباه أو لإزعاج الآخرين',
            'forms.profile.rules.8' => '§e- استمع إلى أي اعضاء فريق العمل في جميع الأوقات',
            'forms.profile.rules.9' => '§e- ممنوع الإعلان أو الحديث عن أي سيرفرات أخرى',
            'forms.profile.stats' => '§aاحصائياتك:',
            'forms.profile.wins' => '§bعدد مرات الفوز: ',
            'forms.profile.xp' => '§bنقاط الخبرة: ',
            'join.vote' => '§6صوت لنا يومياً على §bngmc.co/v §6وستكون لديك فرصة ربح رتبة مجانية!',
            'join.welcome' => '§bأهلا بك في §eNether§6Games§b!',
            'minigame.party.member.join' => '§cأنت حاليًا في مجموعة. انتظر رئيس مجموعتك لأختيار اللعبة التي ستلعبها!',
            'skin.invalid.change' => '§cمظهر شخصيتك غير صالح للعب علي §eNether§6Games§c. يرجى اختيار مظهر آخر..',
            'social.party.notin' => '§cأنت لست في مجموعة!',
        ];
    }

    public function getName(): string
    {
        return 'Arabic';
    }

    public function getLocale(): string
    {
        return 'ar_sa';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/saudiarabia.png';
    }

    public function getCredits(): string
    {
        return 'R0XG4MER, AxPlayzMC, Al33eXx, AzizVenzor & prohussin';
    }
}