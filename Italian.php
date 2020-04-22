<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Italian implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Chat {%0} disabilitata e chat {%1} abilitata. Ora puoi messaggiare{%1} solo i membri.',
            'command.chat.disable' => '§6Chat {%0} disabilitata. Ora puoi messaggiare tutti i giocatori.',
            'command.chat.enable' => '§6Chat {%0} attivata. Ora messaggi  {%0} solo ai membri.',
            'command.chat.public' => '§cScusa, sei già nella chat pubblica',
            'command.chat.usage' => '§cScrivi /c [{%0}] per abilitare una chat definita.',
            'command.chat.usage.nothing' => '§cScusa, non puoi cambiare chat quando non sei in un party.',
            'command.chat.usage.party' => '§cWoohoo! Scrivi/c party per abilitare la chat del party, scrivi/c off per disabilitare la chat del party.',
            'database.error' => '§l§cÈ stato ritrovato un errore nella connessione con la banca-dati. I tuoi dati non verranno salvati in questa sessione.',
            'forms.profile.credits' => '§bCrediti: {%0}',
            'forms.profile.deaths' => '§bMorti: {%0}',
            'forms.profile.kills' => '§bUccisioni: {%0}',
            'forms.profile.level' => '§bLivello: {%0}',
            'forms.profile.rules.1' => '§aBenvenuto su §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Disattiva modifiche del client',
            'forms.profile.rules.10.desc' => '§7Usare modifiche del client "client crackati" che non sono promossi ufficialmente da Minecraft non sono permessi su NetherGames. Modifiche proibite includono quelle che ti danno abilità che non sono ottenute lecitamente - es. hack di volo, incremento salto/velocità, auto click, ecc. Resource/texture pack che forniscono cambiamenti cosmetici che non modificano l\'esperienza di gioco e/o forniscono vantaggi sono permesse.',
            'forms.profile.rules.11' => '§e8. Usa skin e nome appropriati',
            'forms.profile.rules.11.desc' => '§7Fai in modo che il tuo nome e skin siano appropriati per utenti di tutte le età. Skin proibite includono quelle che forniscono un vantaggio, come quelle che usano geometria personalizzata e non le strutture delle skin "Alex" o "Steve", o quelle che mostrano una quantità eccessiva di parti del corpo.',
            'forms.profile.rules.12' => '§e9. Sii riflessivo sui tuoi compagni di squadra o altri giocatori',
            'forms.profile.rules.12.desc' => "§7Quando giochi in una partita dove sei posizionato in un team con altri giocatori, rispettali. Cercare di trollare, griefare o ucciderli non è accettabile.\nSe sei in una partita solitaria contro altri giocatori, far squadra con gli altri giocatori non è permesso. C'è una ragione se partite in solitaria e squadre sono separate.\nSu Factions, il \"teleport trapping\" non è permesso. Non trarre vantaggio da altri giocatori tramite tali attività.",
            'forms.profile.rules.13' => '§e10. Mantieni i tuoi click ad un ritmo accettabile',
            'forms.profile.rules.13.desc' => '§7Pensa ai giocatori che usano client PE mentre giochi. Il jitter clicking è permesso, tuttavia, butterfly clicking (usare due dita per lo stesso pulsante) e drag clicking (trascinare il tuo dito sulla superficie del pulsante) non sono permessi. Hardware o software che ti permettono di cliccare ad un ritmo inaccettabile sono anche proibiti. Aiutaci a tenere il gioco giusto per entrambe giocatori mobile e desktop.',
            'forms.profile.rules.14' => '§e11. Segnala un bug invece di abusarlo',
            'forms.profile.rules.14.desc' => '§7Abusare un bug che ti da un vantaggio in gioco è proibito, anche se l\'hai già segnalato al nostro team. Se trovi bug che interferiscono con il gioco regolare, ti preghiamo di segnalarlo in #bugs sul nostro server Discord (§bngmc.co/d§7) immediatamente e mandare segnalazioni di giocatori che usano questi bug a loro vantaggio.',
            'forms.profile.rules.15' => '§e12. Accetta la punizione',
            'forms.profile.rules.15.desc' => '§7Cercare di evadere la tua punizione, o aiutare altri giocatori ad evadere la loro, è strettamente proibito. Ci sono regole e un sistema di avvertenze e usando/giocando sui nostri servizi, accetti di seguire queste linee guida per assicurare che tutti abbiano una esperienza positiva.',
            'forms.profile.rules.16' => '§e13. Parla inglese',
            'forms.profile.rules.16.desc' => "§7Cerchiamo di includere tutti i giocatori indifferentemente dalla loro situazione o provenienza. Ti chiediamo di aiutarci ad ottenere tale obiettivo parlando inglese, che è molto parlato e usato in tutto il mondo.\nCi sono eccezioni per giocatori che hanno difficoltà a parlare inglese.",
            'forms.profile.rules.17' => "§bSe non sai quale tipo di attività o comportamento sia permesso, ti incoraggiamo a contattare il nostro team di supporto. Preferiremmo che tu ci faccia domande per aiutare ad eliminare qualsiasi tuo malinteso che affrontare potenziali conseguenze se infrangi una delle nostre regole.\nRicorda che queste regole sono usate solo come riferimento. Puoi trovare la versione aggiornata a §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bPossiamo cambiare queste regole in ogni momento senza alcun avviso o consultazione con la community, che potrebbero avere effetto immediatamente. Possiamo anche bandire e negare servizio o limitare l\'accessibilità al servizio ad ogni giocatore/utente secondo il nostro giudizio, che abbiano infranto le regole menzionate sopra o meno.',
            'forms.profile.rules.19' => '§bHai bisogno di aiuto, o hai domande? Contatta un membro dello staff usando §e/tell§b, tramite §engmc.co/lc§b, §e@NetherGamesMC §bsu Twitter o §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bè un server basato sulla community con una varietà di giochi per intrattenere giocatori di Minecraft di tutte le età.',
            'forms.profile.rules.20' => '§bGrazie per giocare su §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bPrima che tu cominci il tuo viaggio qui, vorremmo che tu leggessi le seguenti linee guida e aspettative che abbiamo di te durante l\'utilizzo dei nostri servizi. Queste regole ci aiutano ad assicurare che tutti i giocatori riescano a godersi una esperienza positiva e divertente.',
            'forms.profile.rules.4' => '§e1. Rispetta te stesso e gli altri',
            'forms.profile.rules.4.desc' => '§7Non dire parolacce, bestemmiare, o insultare qualcun altro. Rispetta gli altri giocatori e trattali come desideri essere trattato. Bullismo di ogni forma non è tollerato a NetherGames e gli offensori verrano perseguiti di conseguenza.',
            'forms.profile.rules.5' => '§e2. Mantieni i tuoi contenuti appropriati',
            'forms.profile.rules.5.desc' => '§7Non pubblicare contenuti inappropriati. Un buon modo per sapere se il tuo contenuto è appropriato è chiedersi - è qualcosa che potrei mostrare ai miei genitori? Tale definizione comprende contenuti che altri potrebbero trovare offensivo. Razzismo, sessismo o qualsiasi altra forma di discriminazione è strettamente proibita.',
            'forms.profile.rules.6' => '§e3. Sii moderato quando chatti',
            'forms.profile.rules.6.desc' => '§7Pensa agli altri e cosa vedranno in chat quando mandi un messaggio. Non spammare, usare la stessa parola/frase di continuo, o usare maiuscole eccessive nei tuoi messaggi per attrarre l\'attenzione o infastidire gli altri. Rispetta il fatto che c\'è un filtro per la chat per una ragione. Brutte parole sono permesse fino ad un certo punto, finché sono censurate a dovere e non dirette ad un altro giocatore.',
            'forms.profile.rules.7' => '§e4. Ascolta e rispetta i membri del nostro staff',
            'forms.profile.rules.7.desc' => "§7I nostri membri dello staff sono qui per assicurare che tutti stiano avendo una bella esperienza. Quando ti danno una istruzione, ci aspettiamo che tu la segua.\nRicorda che il nostro team dello staff è composto da volontari. Sono qui per aiutare e tenere il server sicuro - ma non sono i tuoi servitori personali. Quando chiedi qualcosa o entri in una conversazione con loro, fallo educatamente.",
            'forms.profile.rules.8' => '§e5. Fare pubblicità ad altri server non è permesso',
            'forms.profile.rules.8.desc' => '§7Pubblicizzare o promuovere altri server di Minecraft Bedrock Edition è strettamente proibito a NetherGames. Si può fare riferimento ad altri server se sono usati per fornire contesto in una conversazione, tuttavia qualsiasi altra forma di conversazione riguardante un altro server sarà vista come pubblicità.',
            'forms.profile.rules.9' => '§e6. Tieni le tue informazioni personali al sicuro',
            'forms.profile.rules.9.desc' => '§7Sebbene ci piacerebbe credere che non c\'è gente cattiva al mondo, ciò è semplicemente irrealistico. Tieni le tue informazioni personali per te stesso - questo è l\'internet. Tieni in mente che tutte le conversazioni e messaggi che mandi sono pubblicati su un forum pubblico, che probabilmente è dove rimarranno per sempre.',
            'forms.profile.stats' => '§aLe tue statistiche:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Vota per noi tutti i giorni su §bngmc.co/v §6e potresti vincere un nuovo rank',
            'join.welcome' => '§bBenvenuto su §eNether§6Games§b!',
            'minigame.party.member.join' => '§cSei attualmente in un party. Attendi che l\'host del tuo party decida quale gioco giocare!',
            'skin.invalid.change' => '§cLa tua skin non è valida per giocare su §eNether§6Games§c. Per cortesia scegline un\'altra.',
            'social.party.notin' => '§cNon sei in un party!',
        ];
    }

    public function getName(): string
    {
        return 'Italian';
    }

    public function getLocale(): string
    {
        return 'it_IT';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/italy.png';
    }

    public function getCredits(): string
    {
        return 'CarlottaCGG & ThatzMatt';
    }
}