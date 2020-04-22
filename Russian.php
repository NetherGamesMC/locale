<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Russian implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Disabled {%0} чат и включен {%1} чат . Вы сейчас общаться только с {%1} участниками.',
            'command.chat.disable' => '§6Disabled {%0} chat. Теперь вы общаетесь со всеми игроками. ',
            'command.chat.enable' => '§6Enabled {%0} chat. Теперь вы общаетесь только с {%0} участниками. ',
            'command.chat.public' => '§c Извините, вы уже в публичном чате.',
            'command.chat.usage' => '§cRun /c [{%0}] для включения определенного чата.',
            'command.chat.usage.nothing' => '§c Извините, вы не можете переключать чаты, пока вы не в партии.',
            'command.chat.usage.party' => '§cWoohoo! Запустите /c party, чтобы включить чат для вечеринки, запустите /c off, чтобы отключить чат для вечеринки. ',
            'database.error' => '§l§cНеожиданная ошибка случилась вовремя подключения. Ваша дата не сохранилась.',
            'forms.profile.credits' => '§bКредиты: {%0}',
            'forms.profile.deaths' => '§bСмерти : {%0}',
            'forms.profile.kills' => '§bУбивства: {%0}',
            'forms.profile.level' => '§bУровень: {%0}',
            'forms.profile.stats' => '§aВаша статистика:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Голосуйте за нас ежедневно по §bngmc.co/v §6и вы сможете выиграть бесплатное ранг обновить!',
            'join.welcome' => '§bДобро пожаловать в §Nether§6Games§b!',
            'minigame.party.member.join' => '§cВы сейчас на вечеринке. Подождите, пока хозяин вашей партии не решит, в какую игру играть!',
            'skin.invalid.change' => '§c Ваш скин не подходит для воспроизведения на §Nether§6Games§c. Пожалуйста, выберите другой.',
            'social.party.notin' => '§cВы не на вечеринке!',
        ];
    }

    public function getName(): string
    {
        return 'Russian';
    }

    public function getLocale(): string
    {
        return 'ru_ru';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/russia.png';
    }

    public function getCredits(): string
    {
        return 'SashieCat & xSebyMCPEYT';
    }
}