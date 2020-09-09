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

class German implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6{%0}-Chat deaktiviert und {%1}-chat aktiviert. Sie chatten jetzt nur mit {%1}-mitgliedern.',
            'command.chat.disable' => '§6{%0}-Chat deaktiviert. Sie chatten jetzt mit allen spielern.',
            'command.chat.enable' => '§6{%0}-Chat aktiviert. Sie chatten jetzt nur mit {%0}-mitgliedern.',
            'command.chat.public' => '§cEntschuldigung, sie sind bereits im öffentlichen chat.',
            'command.chat.usage' => '§cFühren sie /c [{%0}] aus, um einen bestimmten chat zu aktivieren.',
            'command.chat.usage.nothing' => '§cEntschuldigung, sie können keine chats wechseln, während sie nicht in einer party sind.',
            'command.chat.usage.party' => '§cWoohoo! Führen sie /c party aus, um den party-chat zu aktivieren, und führen sie /c off aus, um den party-chat zu deaktivieren.',
            'database.error' => '§l§cBeim herstellen der verbindung zur datenbank ist ein unerwarteter fehler aufgetreten. Ihre daten werden für diese sitzung nicht gespeichert.',
            'forms.profile.credits' => '§bCredits: {%0}',
            'forms.profile.deaths' => '§bTode: {%0}',
            'forms.profile.kills' => '§bGetötet: {%0}',
            'forms.profile.level' => '§bLevel: {%0}',
            'forms.profile.rules.1' => '§aWillkommen auf §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Deaktiviere deine client-modifizierungen',
            'forms.profile.rules.10.desc' => '§7Die Nutzung von client-modifikationen oder "cracked clients", die nicht offiziell von Minecraft unterstützt werden, ist auf NetherGames nicht erlaubt. Zu den verbotenen Änderungen gehören die, die dir Fähigkeiten verleihen, die du nicht richtig erhalten hast -zb. Fly hacking, jump/speed-boost, automatisches klicken etc. ressource/texturpakete mit kosmetischen Änderungen, die das gameplay nicht beeinflussen und/oder vorteile bieten, sind erlaubt.',
            'forms.profile.rules.11' => '§e8. Verwende einen angemessenen benutzernamen und skin',
            'forms.profile.rules.11.desc' => '§7Halte deinen benutzernamen und deinen skin für spieler jeden alters geeignet. Zu den verbotenen skins gehören skins, die möglicherweise einen vorteil bieten. Zum beispiel skins mit benutzerdefinierter geometrie und nicht mit der hautstruktur "Alex" oder "Steve" oder skins mit einer übermäßigen menge an körperteilen.',
            'forms.profile.rules.12' => '§e9. Sei vorsichtig mit deinen teamkollegen und anderen spielern',
            'forms.profile.rules.12.desc' => "§7Wenn du in einem match spielst, in dem du mit anderen spielern in ein team platziert wirst, behalte sie im hinterkopf. Sie zu trollen, griefen oder töten, ist nicht akzeptabel.\nWenn du in einem einzelmatch gegen andere spieler bist, ist das teamen mit ihnen verboten. Es gibt einen grund, warum einzel- und teamspiele getrennt sind.\nIn Factions anderen spieler eine \"teleportier Falle\" zu stellen, ist nicht erlaubt. Nutze nicht die vorteile anderer spieler, durch die teilnahme an solchen aktivitäten.",
            'forms.profile.rules.13' => '§e10. Halte deine klicks bei einer akzeptablen rate',
            'forms.profile.rules.13.desc' => '§7Erspare den spielern auf PE-clients einen gedanken, während du im spiel bist. Jitter clicking ist erlaubt, jedoch ist butterfly clicking (benutzen von zwei fingern für die selbe taste) und drag clicking (ziehen der finger über die oberfläche der schaltfläche) nicht erlaubt. Hardware oder software, die es dir ermöglicht, mit einer nicht akzeptablen rate zu klicken, ist auch verboten. Hilf uns, das spiel für mobile als auch für desktop-spieler fair zu halten.',
            'forms.profile.rules.14' => '§e11. Meldet einen fehler, anstatt ihn zu missbrauchen',
            'forms.profile.rules.14.desc' => '§7Einen bug auszunutzen, der dir vorteile verschafft, ist verboten. Auch wenn du ihn schon an unser team gemeldet hast. Wenn du solche spiel zerstörende fehler findest, bitten wir dich, diese sofort an #bugs auf unserem Discord-server (§bngmc.co/d§7) zu melden und berichte für spieler einzureichen, die diese fehler zu ihrem vorteil nutzen.',
            'forms.profile.rules.15' => '§e12. Akzeptiere die bestrafung',
            'forms.profile.rules.15.desc' => '§7Der versuch, deiner bestrafung zu entgehen oder einem anderen spieler zu helfen, sich dessen zu entziehen, ist strengstens untersagt. Es gibt regeln und ein entsprechendes warnsystem. Durch die nutzung unserer dienste erklärst du dich damit einverstanden, diese festgelegten richtlinien zu befolgen, um sicherzustellen, dass jeder eine positive erfahrung macht.',
            'forms.profile.rules.16' => '§e13. Rede in Englisch',
            'forms.profile.rules.16.desc' => "§7Wir bemühen uns, alle spieler einzubeziehen, unabhängig von ihrem hintergrund oder ihrer herkunft. Wir bitten dich, uns dabei zu helfen, dieses ziel zu erreichen, indem du Englisch sprichst, das auf der ganzen welt gesprochen und verwendet wird.\nEs gibt ausnahmen für spieler, die schwierigkeiten haben, in Englisch zu kommunizieren.",
            'forms.profile.rules.17' => "§bWenn du dir nicht sicher bist, welche art von aktivität oder verhalten zulässig ist, empfehlen wir dir, dich an unser support-team zu wenden. Wir möchten, dass du fragen stellst, um eventuelle missverständnisse aufzuklären, anstatt sich möglichen konsequenzen zu stellen, wenn du gegen eine unserer bestimmungen verstoßt.\nBeachte, dass die hier aufgeführten regeln nur als referenz dienen. Die neueste version findest du unter §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bWir behalten uns das recht vor, Änderungen an diesen regeln jederzeit ohne vorheriger ankündigung oder rücksprache mit der community vorzunehmen, die möglicherweise sofort in kraft tretet. Wir können auch das recht ausüben, den dienst zu verbieten und zu verweigern oder den zugang zu diensten für jeden spieler/benutzer nach unserem ermessen zu beschränken, unabhängig davon, ob er gegen die oben aufgeführten bestimmungen verstoßen hat.',
            'forms.profile.rules.19' => '§bBrauchst du hilfe oder hast du eine frage? Kontaktiere ein staff mitglied mit §e/tell§b, über §engmc.co/lc§b, §e@NetherGamesMC §bauf Twitter oder §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bist ein community-basiertes servernetzwerk mit einer vielzahl von spielen, um Minecraft-spieler jeden alters zu unterhalten.',
            'forms.profile.rules.20' => '§bDanke fürs spielen auf §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bBevor du deine reise hier beginnst, möchten wir dich bitten, die folgenden richtlinien und erwartungen zu lesen, die wir bei der nutzung unserer dienste an dich haben. Diese regeln tragen dazu bei, dass alle spieler eine positive und unterhaltsame erfahrung machen können.',
            'forms.profile.rules.4' => '§e1. Respektiere dich selbst und andere',
            'forms.profile.rules.4.desc' => '§7Beschimpfe, verfluche oder schleudere keinen missbrauch an andere spieler. Respektiere andere spieler und behandle andere so, wie du behandelt werden möchtest. Mobbing in jeder form wird bei NetherGames nicht toleriert und straftäter werden entsprechend strafrechtlich verfolgt.',
            'forms.profile.rules.5' => '§e2. Halte deinen inhalt angemessen',
            'forms.profile.rules.5.desc' => '§7Poste keine unangemessenen inhalte. Eine gute möglichkeit, um zu überprüfen, ob dein inhalt angemessen ist, besteht darin, sich zu fragen: könnte ich das meinen eltern zeigen? Diese definition umfasst auch material, das andere möglicherweise als anstößig empfinden könnten. Rassismus, sexismus oder jede andere form von diskriminierung ist strengstens untersagt.',
            'forms.profile.rules.6' => '§e3. Sei rücksichtsvoll beim chatten',
            'forms.profile.rules.6.desc' => '§7Denke an andere und was sie im chat sehen werden, wenn du eine nachricht postest. Spame nicht, verwende nicht mehrmals dasselbe wort oder denselben satz oder verwende keine übermäßigen großbuchstaben in deinen nachrichten, um aufmerksamkeit zu erregen oder andere zu ärgern. Respektiere die tatsache, dass ein chat-filter aus einem bestimmten grund vorhanden ist. Fluchen ist bis zu einem gewissen grad erlaubt, solange es angemessen zensiert wird und nicht an einen anderen spieler gerichtet ist.',
            'forms.profile.rules.7' => '§e4. Höre auf unsere staff mitglieder und respektiere sie',
            'forms.profile.rules.7.desc' => "§7Unsere staff mitglieder sind hier, um sicherzustellen, dass jeder eine tolle zeit hat. Wenn sie dir anweisungen geben, erwarten wir, dass du die anweisungen befolgst.\nDenke daran, dass sich unser staff team aus freiwilligen zusammensetzt. Sie sind hier, um zu helfen und den server zu schützen - aber sie sind nicht deine persönlichen diener. Wenn du fragen stellst oder dich mit ihnen unterhaltest, tue dies höflich.",
            'forms.profile.rules.8' => '§e5. Werbung/unterstützung anderer server ist nicht erlaubt',
            'forms.profile.rules.8.desc' => '§7Werbung oder unterstützung für einen anderen Minecraft Bedrock Edition-server ist bei NetherGames strengstens untersagt. Andere server können erwähnt werden, wenn sie verwendet werden, um kontext in einer konversation bereitzustellen, jedoch wird jede andere form von konversation, die sich auf einen anderen server bezieht, als werbung behandelt.',
            'forms.profile.rules.9' => '§e6. Halte deine persönlichen informationen privat',
            'forms.profile.rules.9.desc' => '§7Wir würden gerne glauben, dass es keine schlechten Menschen auf der welt gibt, aber das ist einfach nicht realistisch. Behalte deine persönlichen daten für dich - das ist das internet. Denke daran, dass alle von dir gesendeten konversationen und nachrichten in einem öffentlichen forum veröffentlicht werden, in dem sie wahrscheinlich für immer bleiben werden.',
            'forms.profile.stats' => '§aIhre statistiken:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Stimmen sie täglich bei §bngmc.co/v §6 für uns ab und gewinnen sie ein kostenlosen rang-upgrade!',
            'join.welcome' => '§bWillkommen auf §eNether§6Games§b!',
            'minigame.party.member.join' => '§cSie sind gerade in einer Party. Warten Sie, bis Ihr Party-Host entschieden hat, welches spiel sie spielen möchten!',
            'skin.invalid.change' => '§cIhr Skin ist nicht berechtigt auf §eNether§6Games§c zu spielen. Bitte wählen Sie einen anderen aus.',
            'social.party.notin' => '§cSie sind nicht in einer party!',
        ];
    }

    public function getName(): string
    {
        return 'German';
    }

    public function getLocale(): string
    {
        return 'de_de';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/germany.png';
    }

    public function getCredits(): string
    {
        return 'GigantLeyKey & JussycrafterLP';
    }
}