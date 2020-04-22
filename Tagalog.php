<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Tagalog implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Pinatay ang {%0} chat at binukas ang {%1} chat. Pwede mo nang makausap ang mga miyembro ng {%1} lamang.',
            'command.chat.disable' => '§6Pinatay ang {%0} chat. Pwede mo nang makausap ang lahat.',
            'command.chat.enable' => '§6Binukas ang {%0} chat. Ang pwede mo lang makausap ngayon ay mga miyembro ng {%1} lamang',
            'command.chat.public' => '§cIPaumanhin, pero kanina ka pa nandito sa public chat.',
            'command.chat.usage' => '§cIsulat /c [{%0}] para buksan ang isang espesipiko na chat.',
            'command.chat.usage.nothing' => '§cPaumanhin, pero hindi ka po pwedeng lumipat ng chat habang hindi ikaw nasa isang party',
            'command.chat.usage.party' => '§cWoohoo! Isulat /c party para buksan ang party chat, isulat naman /c off para patayin ang party chat.',
            'database.error' => '§l§cNagkaroon ng di inaakalang problema habang kumokonekta. Ang iyong impormasyon ay hindi masasave para sa sesyon na ito',
            'forms.profile.credits' => '§bCredits: {%0}',
            'forms.profile.deaths' => '§bDeaths: {%0}',
            'forms.profile.kills' => '§bKills: {%0}',
            'forms.profile.level' => '§bLevel: {%0}',
            'forms.profile.stats' => '§a Ang iyong stats:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Iboto ninyo kami araw-araw sa §bngmc.co/v §6 at pwede kang manalo ng isang libreng rank upgrade!',
            'join.welcome' => '§bMaligayang pagdating sa §eNether§6Games§b!',
            'minigame.party.member.join' => '§cIkaw ngayon ay nasa isang party. Hintayin ang iyong party host para makapagpasya ng kung anong laro ang pagsasalihan!',
            'skin.invalid.change' => '§cAng iyong skin ay hindi wasto para sa §eNether§6Games§c. Humanap ka ng iba',
            'social.party.notin' => '§cHindi ka nasa party!',
        ];
    }

    public function getName(): string
    {
        return 'Tagalog';
    }

    public function getLocale(): string
    {
        return 'tl_PH';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/philippines.png';
    }

    public function getCredits(): string
    {
        return 'TameableFlame68 & JoshT';
    }
}