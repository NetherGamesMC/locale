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

class Finnish implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Poistettu käytöstä {%0} keskustelu ja otettu käyttöön {%1} keskustelu. Nyt sinä puhut vain {%1} käyttäjän kanssa.',
            'command.chat.disable' => '§6Poistettu käytöstä {%0} keskustelu. Nyt sinä puhut kaikille henkilöille.',
            'command.chat.enable' => '§6Otettu käyttöön {%0} keskustelu. Nyt sinä puhut vain {%0} käyttäjän kanssa.',
            'command.chat.public' => '§cValitettavasti olet jo julkisessa keskustelussa.',
            'command.chat.usage' => '§cKirjoita /c [{%0}] ottaaksesi käyttöön tarkoitetun keskustelun.',
            'command.chat.usage.nothing' => '§cValitettavasti et voi vaihtaa keskusteluita, kun et ole ryhmässä.',
            'command.chat.usage.party' => '§cJahuu! Kirjoita /c party ottaaksesi käyttöön ryhmäkeskustelun, kirjoita /c off ottaaksesi ryhmäkeskustelun pois päältä.',
            'database.error' => '§l§cOdottamaton virhe tapahtui yhdistättäessä datatilaan. Edistymistäsi ei tallenneta tässä tilassa.',
            'forms.profile.credits' => '§bKreditit: {%0}',
            'forms.profile.deaths' => '§bKuolemat: {%0}',
            'forms.profile.kills' => '§bTapot: {%0}',
            'forms.profile.level' => '§bTaso: {%0}',
            'forms.profile.stats' => '§aSinun tilastot:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Äänestä meitä päivittäin osoitteessa §bngmc.co/v §6ja sinä voit voittaa ilmaisen arvoylennyksen!',
            'join.welcome' => '§bTervetuloa §eNether§6Gamesiin§b!',
            'minigame.party.member.join' => '§cOlet tällä hetkellä ryhmässä. Odota ylemmän tahon valita mitä peliä pelata!',
            'skin.invalid.change' => '§cTyyliäsi ei voi käyttää §eNether§6Gamesissa§c. Ole hyvä ja valitse erilainen.',
            'social.party.notin' => '§cEt ole ryhmässä!',
        ];
    }

    public function getName(): string
    {
        return 'Finnish';
    }

    public function getLocale(): string
    {
        return 'fi_fi';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/finland.png';
    }

    public function getCredits(): string
    {
        return 'Apexor';
    }
}