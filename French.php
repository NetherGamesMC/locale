<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class French implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Chat {%0} désactivé et tchat {%1} activé. Vous parlez désormais uniquement aux membres du chat {%1}.',
            'command.chat.disable' => '§6Chat {%0} désactivé. Vous parlez désormais a tous les joueurs.',
            'command.chat.enable' => '§6Chat {%0} activé. Vous parlez désormais uniquement aux membre du tchat {%0}.',
            'command.chat.public' => '§cDésolé, vous êtes déjà dans le chat public.',
            'command.chat.usage' => '§cEntrez /c [{%0}] pour activer un tchat spécifique.',
            'command.chat.usage.nothing' => "§cDésolé, vous ne pouvez pas changer de tchat quand vous n'êtes pas dans un groupe.",
            'command.chat.usage.party' => '§cWoohoo! Entrez /c party pour activer le tchat de groupe, entrez /c off pour le désactiver.',
            'database.error' => '§l§cUne erreur inattendue est survenue lors de la connexion à la base de données. Vos données pour cette session ne vont pas être sauvegardés.',
            'forms.profile.credits' => '§bCrédits: {%0}',
            'forms.profile.deaths' => '§bMorts: {%0}',
            'forms.profile.kills' => '§bTués: {%0}',
            'forms.profile.level' => '§bNiveau: {%0}',
            'forms.profile.stats' => '§aVos statistiques:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Votez pour nous tous les jours sur §bngmc.co/v §6et vous gagnerez une augmentation de rang gratuite !',
            'join.welcome' => '§bBienvenue sur §eNether§6Games §b!',
            'minigame.party.member.join' => '§cVous êtes actuellement dans un groupe. Attendez que le chef décide à quel jeu vous allez jouer !',
            'skin.invalid.change' => '§cVotre skin n\'est pas valide pour jouer sur §eNether§6Games§c. Choisissez-en un autre.',
            'social.party.notin' => "§cVous n'êtes pas dans un groupe!",
        ];
    }

    public function getName(): string
    {
        return 'French';
    }

    public function getLocale(): string
    {
        return 'fr_fr';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/france.png';
    }

    public function getCredits(): string
    {
        return 'AzizVenzor, moskaoff & OperationCochon';
    }
}