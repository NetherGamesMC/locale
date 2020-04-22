<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Dutch implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Je hebt {%0} chat gedeactiveerd en {%1} chat geactiveerd. Je kunt nu met {%1} spelers praten.',
            'command.chat.disable' => '§6Je hebt {%0} chat gedeactiveerd. Je praat nu met iedereen.',
            'command.chat.enable' => '§6Je hebt {%0} chat geactiveerd. Je kunt nu met {%0} spelers praten.',
            'command.chat.public' => '§cSorry, je bent al in openbare chat.',
            'command.chat.usage' => '§cType /c [{%0}] om een specifieke chat te activeren',
            'command.chat.usage.nothing' => '§cSorry, Je kunt niet van chat wisselen als je niet in een party zit.',
            'command.chat.usage.party' => '§cWoohoo! Type /c party om je party chat te activeren, type /c off om de party chat te deactiveren.',
            'database.error' => '§l§cEen onverwachte error ontstond terwijl je verbinding maakte met de server. Je data zal niet worden opgeslagen voor deze sessie.',
            'forms.profile.credits' => '§bCredits: {%0}',
            'forms.profile.deaths' => '§bSterftes : {%0}',
            'forms.profile.kills' => '§bDood geslagen: {%0}',
            'forms.profile.level' => '§bLevel: {%0}',
            'forms.profile.stats' => '§aJouw statistieken:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Stem dagelijks voor ons op §bngmc.co/v§6, je kunt er een gratis rank mee winnen',
            'join.welcome' => '§bWelkom bij §eNether§6Games§b!',
            'minigame.party.member.join' => '§cJe zit momenteel in een party. Wacht tot je partyleider beslist welk spel je gaat spelen!',
            'skin.invalid.change' => '§cJe skin is niet geldig om mee te spelen §eNether§6Games§c. Kies alsjeblieft een andere.',
            'social.party.notin' => '§cJe zit niet in een party!',
        ];
    }

    public function getName(): string
    {
        return 'Dutch';
    }

    public function getLocale(): string
    {
        return 'nl_nl';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/netherlands.png';
    }

    public function getCredits(): string
    {
        return 'Liverno, Classique_ & Martje2003';
    }
}