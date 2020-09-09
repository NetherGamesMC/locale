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

class Greek implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Το chat {%0} απενεργοποιήθηκε και το chat {%1} ενεργοποιήθηκε. Τώρα μπορείτε να μιλήσετε{%1} μόνο με μέλη.',
            'command.chat.disable' => '§6Το chat {%0} απενεργοποιήθηκε. Τώρα μιλάτε με όλους τους παίχτες.',
            'command.chat.enable' => '§6Το chat {%0} ενεργοποιήθηκε. Τώρα μιλάτε {%0} μόνο με μέλη.',
            'command.chat.public' => '§cΛυπάμαι, είστε ήδη σε ένα δημόσιο chat.',
            'command.chat.usage' => '§cΓράψτε /c [{%0}] για να ενεργοποιήσετε ένα συγκεκριμένο chat.',
            'command.chat.usage.nothing' => '§cΛυπάμαι, δεν μπορείτε να αλλάξετε chat εφόσον δεν είστε σε πάρτυ.',
            'command.chat.usage.party' => '§cWoohoo! Γράψτε /c party για να ενεργοποιήσετε το party chat, γράψτε /c off για να απενεργοποιήσετε το party chat.',
            'database.error' => '§l§cΈνα απροσδόκητο λάθος προέκυψε κατά τη σύνδεση στη βάση δεδομένων. Τα δεδομένα σας δεν θα σωθούν για αυτή την περίοδο.',
            'forms.profile.credits' => '§bΠόντοι: {%0}', 'forms.profile.deaths' => '§bΘάνατοι: {%0}',
            'forms.profile.kills' => '§bΣκοτωμοί: {%0}',
            'forms.profile.level' => '§bΕπίπεδο: {%0}',
            'forms.profile.stats' => '§aΤα στατιστικά σας:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Ψηφίστε μας καθημερινά στον σύνδεσμο §bngmc.co/v §6και θα μπορούσατε να κερδίσετε μια δωρεάν αναβάθμιση της κλάσης σας!',
            'join.welcome' => '§bΚαλωσήρθατε στον §eNether§6Games§b!',
            'minigame.party.member.join' => "§cΕίστε προς το παρόν σ'ένα πάρτυ. Περιμένετε τον οικοδεσπότη να αποφασίσει ποιο παιχνίδι να παίξετε!",
            'skin.invalid.change' => '§cΤο skin σας δεν είναι έγκυρο ώστε να παίξετε στον §eNether§6Games§c. Παρακαλούμε διαλέξτε ένα άλλο.',
            'social.party.notin' => '§cΔεν είστε σε πάρτυ!',
        ];
    }

    public function getName(): string
    {
        return 'Greek';
    }

    public function getLocale(): string
    {
        return 'el_gr';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/greece.png';
    }

    public function getCredits(): string
    {
        return 'SnowyBoar880643';
    }
}