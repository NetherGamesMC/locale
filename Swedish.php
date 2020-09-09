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

class Swedish implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Avaktiverade {%0} chatt och aktiverade {%1} chatt. Du chattar nu enbart med {%1} medlemmar.',
            'command.chat.disable' => '§6Avaktiverade {%0} chatt. Du chattar nu med alla spelare.',
            'command.chat.enable' => '§6Aktiverade {%0} chatt. Du chatt nu enbart med {%0} medlemmar.',
            'command.chat.public' => '§cLedsen, du är redan i en publik chatt.',
            'command.chat.usage' => '§cAnvänd /c [{%0}] för att aktivera en specifik chatt.',
            'command.chat.usage.nothing' => '§cLedsen, du kan inte växla chatter när du inte är i ett party.',
            'command.chat.usage.party' => '§cWoohoo! Använd /c party för att aktivera partychatt, använd /c off för att avaktivera partychatt.',
            'database.error' => '§l§cEtt oväntat fel inträffade vid databasanslutningen. Din data sparas inte under denna session.',
            'forms.profile.credits' => '§bKrediter: {%0}',
            'forms.profile.deaths' => '§bDödsfall: {%0}',
            'forms.profile.kills' => '§bDödade: {%0}',
            'forms.profile.level' => '§bNivå: {%0}',
            'forms.profile.rules.1' => '§aVälkommen till §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Stäng av dina klientmodifikationer',
            'forms.profile.rules.10.desc' => '§7Att använda klientmodifikationer eller "krackade klienter" som inte officiellt stödjs av Minecraft är förbjudet att använda på NetherGames. Förbjudna modifikationer inkluderar de som ger dig förmågor som inte erhållits med rätta - t.ex. fly hacking, jump/speed boost, auto clicking, etc. Resurs/texturpaket som ger kosmetiska förändringar som inte påverkar spelandet och/eller ger fördelar är tillåtna.',
            'forms.profile.rules.11' => '§e8. Använd ett lämpligt användarnamn och skin',
            'forms.profile.rules.11.desc' => '§7Håll ditt användarnamn och skin lämpligt för spelare av alla åldrar. Förbjudna skins inkluderar de som kan ge fördelar, t.ex. de som använder anpassad geometri och inte "Alex" eller "Steve" strukturen, eller de som visar ett överdrivet antal kroppsdelar.',
            'forms.profile.rules.12' => '§e9. Var omtänksam om dina lagkamrater och andra spelare',
            'forms.profile.rules.12.desc' => "§7När du spelar en match där du placeras i ett lag med andra spelare, tänk på dem. Att försöka trolla, griefa, eller döda dem är oacceptabelt.\nOm du är i en solomatch mot andra spelare är teaming förbjudet. Det finns en anledning till varför solo och lagmatcher är separerade.\nI Factions är \"teleport trapping\" av andra spelare förbjudet. Ta inte fördel av andra spelare genom att delta i sådana aktiviteter.",
            'forms.profile.rules.13' => '§e10. Håll dina klicks på en acceptabel nivå',
            'forms.profile.rules.13.desc' => '§7Tänk på spelarna med PE-klienter när du är i spelet. Jitter clicking är tillåtet, men butterfly clicking (att använda två fingrar på samma knapp) och drag clicking (att dra ditt finger längs med ytan på knappen) är förbjudet. Hård- eller mjukvara som tillåter dig att klicka på en oacceptabel nivå är också förbjuden. Hjälp oss att hålla spelet rättvist för spelare på både mobil och dator.',
            'forms.profile.rules.14' => '§e11. Anmäl en bugg i stället för att utnyttja den',
            'forms.profile.rules.14.desc' => '§7Utnyttjande av en bugg som ger dig fördel i spelet är förbjudet, även om du redan anmält den till vårat team. Om du hittar sådana spelförstörande buggar, ber vi dig att rapportera det till #bugs på vår Discord-server (§bngmc.co/d§7) omedelbart och rapportera spelare som använder dessa buggar till deras fördel.',
            'forms.profile.rules.15' => '§e12. Acceptera straffet',
            'forms.profile.rules.15.desc' => '§7Försök att kringgå ditt straff, eller assistera en annan spelare i detta, är strängt förbjudet.  Det finns regler och ett lämpligt varningssystem på plats och genom att använda/spela med våra tjänster godkänner du att följa de uppsatta regelverken för att alla ska ha en positiv upplevelse.',
            'forms.profile.rules.16' => '§e13. Prata engelska',
            'forms.profile.rules.16.desc' => "§7Vi strävar efter att inkludera alla spelare oavsett deras bakgrund eller var de kommer från. Vi ber dig att hjälpa oss uppnå detta mål genom att prata engelska, som är ett brett talat och använt språk runt om i världen.\nUndantag görs för spelare som har svårigheter att kommunicera i engelska.",
            'forms.profile.rules.17' => "§bOm du är osäker på vilken typ av aktivitet eller beteende som är tillåtet, uppmanar vi dig att kontakta vårat supportteam. Vi föredrar att du ställer frågor och reder ut eventuella missförstånd än att du möter potentiella konsekvenser om du bryter några av våra regler.\nTänk på att de regler som listas här endast är en referens. Du kan hitta den senaste versionen på §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bVi förbehåller rätten att göra ändringar till dessa regler närsomhelst utan förvarning eller rådfrågning med gemenskapen, och de kan även träda i kraft omedelbart. Vi utövar även rätten att bannlysa och vägra tjänster eller begränsa tillgängligheten hos våra tjänster till spelare/användare efter vår bedömning, oavsett om reglerna som listas ovan har brutits.',
            'forms.profile.rules.19' => '§bBehöver du hjälp eller har du frågor? Kontakta en personalmedlem med §e/tell§b, genom §engmc.co/lc§b, §e@NetherGamesMC §bpå Twitter eller §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bär ett gemenskapsbaserat servernätverk med ett brett utbud av spel för att underhålla Minecraft-spelare av alla åldrar.',
            'forms.profile.rules.20' => '§bTack för att du spelar på §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bInnan du börjar ditt äventyr här, skulle vi önska att du läser igenom följande riktlinjer och förväntningar vi har på dig när du nyttjar våra tjänster. Dessa regler hjälper oss att säkerställa att alla spelare kan njuta av en positiv och rolig upplevelse.',
            'forms.profile.rules.4' => '§e1. Respektera dig dig själv och andra',
            'forms.profile.rules.4.desc' => '§7Svär inte, förbanna eller kasta glåpord på en annan spelare. Respektera andra spelare och behandla andra som du själv önskar bli behandlad. Mobbning i någon form är inte tolererat på NetherGames och förövare straffas därmed.',
            'forms.profile.rules.5' => '§e2. Håll ditt innehåll lämpligt',
            'forms.profile.rules.5.desc' => '§7Skicka inte olämpligt innehåll. Ett bra sätt att kolla om ditt innehåll är lämpligt är att ställa dig själv frågan: är detta något jag kan visa mina föräldrar? Denna definition inkluderar även material som andra potentiellt kan uppfatta som stötande. Rasism, sexism eller någon annan form av diskriminering är förbjuden.',
            'forms.profile.rules.6' => '§e3. Var betänksam när du chattar',
            'forms.profile.rules.6.desc' => '§7Tänk på vad andra kommer se i chatten när du skickar ett meddelande. Spamma inte, använd samma ord/fras eller överdriv skiftläge i ditt meddelande för att få uppmärksamhet eller störa andra. Respektera det faktum att det finns ett chattfilter på plats av en anledning. Svordomar är tillåtet till en viss grad, så länge det är lämpligt censurerat och inte riktat mot en annan spelare.',
            'forms.profile.rules.7' => '§e4. Lyssna på och respektera vår personal',
            'forms.profile.rules.7.desc' => "§7Vår personal är här för att säkerställa att alla har en trevlig tid. När de instruerar dig något förväntar vi att du lyder.\nTänk på att vårt personalteam består av volontärer. De är här för att hjälpa till och hålla servern säker - men de är inte dina personliga betjänter. När du ställer frågor eller konverserar med dem, gör så i en vänlig ton.",
            'forms.profile.rules.8' => '§e5. Reklam/stödjande av andra servrar är förbjudet',
            'forms.profile.rules.8.desc' => '§7Att göra reklam för eller stödja en annan Minecraft Bedrock Edition-server är strängt förbjudet på NetherGames. Andra servrar kan nämnas om de används för att bidra till kontext i en konversation. Men någon annan form av konversation relaterat till andra servrar kommer klassas som reklam.',
            'forms.profile.rules.9' => '§e6. Håll din personliga information säker',
            'forms.profile.rules.9.desc' => '§7Medan vi skulle älska att tro att det inte finns några dåliga människor på denna jord, är det helt enkelt orealistiskt. Håll din personliga information för dig själv - detta är Internet. Tänk på att alla konversationer och meddelanden du skickar postas på ett offentligt forum, som sannolikt är var de stannar för alltid.',
            'forms.profile.stats' => '§aDina stats:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Rösta på oss dagligen på §bngmc.co/v §6och du kan vinna en gratis rankuppgradering!',
            'join.welcome' => '§bVälkommen till §eNether§6Games§b!',
            'minigame.party.member.join' => '§cDu är i ett party just nu. Vänta på att partyvärden bestämmer vad som ska spelas!',
            'skin.invalid.change' => '§cDitt skin är inte giltigt att spela med på §eNether§6Games§c. Vänligen välj ett annat.',
            'social.party.notin' => '§cDu är inte i ett party!',
        ];
    }

    public function getName(): string
    {
        return 'Swedish';
    }

    public function getLocale(): string
    {
        return 'sv_se';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/sweden.png';
    }

    public function getCredits(): string
    {
        return 'Casper';
    }
}