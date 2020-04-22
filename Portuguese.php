<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Portuguese implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Desativaste {%0} chat e ativaste {%1} chat. Agora falas só com os membros da {%1}.',
            'command.chat.disable' => '§6Desativaste {%0} chat. Agora falas para todos os jogadores.',
            'command.chat.enable' => '§6Ativaste {%0} chat. Agora falas apenas para os membros da {%0}.',
            'command.chat.public' => '§cDesculpa, já estás em chat público.',
            'command.chat.usage' => '§cExecute /c [{%0}] para ativares um chat específico.',
            'command.chat.usage.nothing' => '§cDesculpa, não podes trocar de chats se não estiveres numa party.',
            'command.chat.usage.party' => '§cWoohoo! Execute /c party para ativares o chat da party, execute /c off para desativares o chat da party.',
            'database.error' => '§l§cUm erro inesperado ocorreu durante a conexão com a base de dados. Os teus dados não serão salvos nesta sessão.',
            'forms.profile.credits' => '§bCréditos: {%0}',
            'forms.profile.deaths' => '§bMortes: {%0}',
            'forms.profile.kills' => '§bAssassínios: {%0}',
            'forms.profile.level' => '§bNível: {%0}',
            'forms.profile.stats' => '§aAs tuas estatísticas:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Vota por nós diariamente em §bngmc.co/v §6e podes ganhar uma melhoria de rank grátis!',
            'join.welcome' => '§bBem Vindo a §eNether§6Games§b!',
            'minigame.party.member.join' => '§cNeste momento estás numa party. Espera que o organizador decida que jogo vais jogar!',
            'skin.invalid.change' => '§cA tua skin não é válida para jogar em §eNether§6Games§c. Por favor escolhe outra.',
            'social.party.notin' => '§cTu não estás numa party!',
        ];
    }

    public function getName(): string
    {
        return 'Portuguese';
    }

    public function getLocale(): string
    {
        return 'pt_br';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/portugal.png';
    }

    public function getCredits(): string
    {
        return 'WaveHusky';
    }
}