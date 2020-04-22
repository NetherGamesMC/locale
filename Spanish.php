<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


class Spanish implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Chat {%0} deshabilitado y chat {%1} habilitado. Ahora solo chateas con miembros de {%1} .',
            'command.chat.disable' => '§6Chat {%0} deshabilitado. Ahora chates con todos.',
            'command.chat.enable' => '§6Chat {%0} habilitado. Ahora hablas con miembros de {%0} solamente.',
            'command.chat.public' => '§cLo sentimos, ya estás en el chat público.',
            'command.chat.usage' => '§cUsa /c [{%0}] para habilitar un chat específico.',
            'command.chat.usage.nothing' => '§cLo sentimos, no puedes cambiar de chat cuando no estás en una party.',
            'command.chat.usage.party' => '§cHurra! Usa /c party para habilitar el chat de la party y usa /c off para deshabilitarlo.',
            'database.error' => '§l§cSe produjo un error inesperado al conectarse a la base de datos. Tus datos no serán guardados durante esta sesión.',
            'forms.profile.credits' => '§bCreditos: {%0}',
            'forms.profile.deaths' => '§bMuertes: {%0}',
            'forms.profile.kills' => '§bAssesinatos: {%0}',
            'forms.profile.level' => '§bNivel: {%0}',
            'forms.profile.rules.1' => '§aBienvenido a §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Desactiva las modificaciones de tu cliente',
            'forms.profile.rules.10.desc' => '§7El uso de modificaciones de clientes o "clientes alternos" que no estén respaldados oficialmente por Minecraft no se puede usar en NetherGames. Las modificaciones prohibidas incluyen aquellas que le brindan habilidades que no se obtienen correctamente, por ejemplo poder volar, salto / aumento de velocidad, clics automáticos, etc. Se permiten paquetes de recursos / texturas que proporcionan cambios cosméticos que no afectan el juego y / o proporcionan ventajas.',
            'forms.profile.rules.11' => '§e8. Use un nombre de usuario y skin apropiada',
            'forms.profile.rules.11.desc' => '§7Mantenga su nombre de usuario y skin apropiados para jugadores de todas las edades. Las skins prohibidas incluyen las que pueden proporcionar una ventaja, como una que usa geometría personalizada y no la estructura de la piel "Alex" o "Steve", o aquellas que muestran una cantidad excesiva de partes del cuerpo.',
            'forms.profile.rules.12' => '§e9. Sea considerado con sus compañeros de equipo y otros jugadores',
            'forms.profile.rules.12.desc' => "§7Cuando juegues en un partido en el que te colocas en un equipo con otros jugadores, tenlos en cuenta. No es aceptable intentar troll, duelo o matarlos.\nSi estás en un partido en solitario contra otros jugadores, no está permitido formar equipo con otros jugadores. Hay una razón por la cual los partidos en solitario y en equipo están separados.\nEn Facciones, \"teletransportar\" otros jugadores no está permitido. No se aproveche de otros jugadores participando en tales actividades.",
            'forms.profile.rules.13' => '§e10. Mantenga sus clicks a un ritmo aceptable',
            'forms.profile.rules.13.desc' => '§7Piensa en los jugadores de los clientes de PE mientras estás en el juego. Se permite hacer jitter click sin embargo, no se permite hacer click en excesivo (con dos dedos para el mismo botón) y hacer click en arrastrar (arrastrar el dedo a lo largo de la superficie del botón). También se prohíbe el hardware o software que le permite hacer click a un ritmo inaceptable. Ayúdanos a mantener el juego justo para jugadores móviles y de escritorio.',
            'forms.profile.rules.14' => '§e11. Informar de un error en vez de abusar',
            'forms.profile.rules.14.desc' => '§7Está prohibido abusar de un error que te da una ventaja en el juego, incluso si ya lo has informado a nuestro equipo. Si encuentra errores que rompen el juego, se le pide que lo informe a #bugs en nuestro servidor Discord (§bngmc.co/d§7) inmediatamente y que presente informes para los jugadores que están usando estos errores en su beneficio.',
            'forms.profile.rules.15' => '§e12. Aceptar el castigo',
            'forms.profile.rules.15.desc' => '§7Intentar evadir su castigo, o brindar asistencia a otro jugador para evadir el suyo, está estrictamente prohibido. Existen reglas y un sistema de advertencia apropiado y al usar / jugar en nuestros servicios, usted acepta seguir estas pautas establecidas para ayudar a garantizar que todos tengan una experiencia positiva.',
            'forms.profile.rules.16' => '§e13. Hablar en Ingles',
            'forms.profile.rules.16.desc' => "§7Nos esforzamos por incluir a todos los jugadores, independientemente de su origen o de dónde provienen. Le pedimos que nos ayude a lograr este objetivo hablando en inglés, que se habla y usa ampliamente en todo el mundo.\nHay excepciones para jugadores que tienen dificultades para comunicarse en inglés.",
            'forms.profile.rules.17' => "§bSi no está seguro sobre qué tipo de actividad o comportamiento está permitido, le recomendamos que se comunique con nuestro equipo de soporte. Preferimos que haga preguntas para ayudar a aclarar cualquier idea errónea que pueda tener que enfrentar posibles consecuencias si incumple una de nuestras regulaciones.\nRecuerde que las reglas aquí se enumeran solo como referencia. Puede encontrar la última versión en §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bNos reservamos el derecho de hacer cambios a estas reglas en cualquier momento sin previo aviso o consulta con la comunidad en general, lo que puede entrar en vigencia de inmediato. También podemos ejercer el derecho de prohibir y rechazar el servicio o limitar la accesibilidad del servicio a cualquier jugador / usuario a nuestro criterio, independientemente de si han infringido las normas enumeradas anteriormente.',
            'forms.profile.rules.19' => '§b¿Necesita ayuda o tiene preguntas? Póngase en contacto con un miembro del personal utilizando §e/tell§b, a través de §engmc.co/lc§b, §e@NetherGamesMC §ben Twitter o §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bes una red de servidores basada en una comunidad con amplia variedad de juegos para entretener a jugadores de Minecraft de todas las edades.',
            'forms.profile.rules.20' => '§bGracias por jugar en §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bAntes de comenzar su experiencia en el servidor , nos gustaria que lea las siguientes pautas y expectativas que tenemos de usted al utilizar nuestros servicios. Estas reglas nos ayudan a garantizar que todos los jugadores tengan una experiencia positiva y divertida.',
            'forms.profile.rules.4' => '§e1. Respetate a ti mismo y a los demas',
            'forms.profile.rules.4.desc' => '§7No insultar, ofender o presentar abuso a otro jugador. Respeta a otros jugadores y trata a los demas como te gustaria que te traten. La intimidación en cualquier forma no se tolera en NetherGames y los infractores serán procesados ​​en consecuencia.',
            'forms.profile.rules.5' => '§e2. Mantenga su contenido apropiado',
            'forms.profile.rules.5.desc' => '§7No publique contenido inapropiado, una buena manera para verificar si su contenido es apropiado es preguntarse ¿Es algo que podria mostrarle a mis padres?, Esta definicion tambien incluye material que otros podrian encontrar ofensivo. El racismo, el sexismo o cualquier otra forma de discriminación está estrictamente prohibido.',
            'forms.profile.rules.6' => '§e3. Sea considerado mientras interactua',
            'forms.profile.rules.6.desc' => '§7Piensa en los demas y lo que veran en el chat cuando lo publiques un mensaje. No envie correos no deseados o use la misma palabra repetidamente/frase o use mayusculas excesivas en sus mensajes para llamar la atención o molestar a otros. Respete el hecho de que hay un filtro de chat establecido por alguna razón. Se permite jurar en cierta medida, siempre que esté debidamente censurado y no se dirija a otro jugador.',
            'forms.profile.rules.7' => '§e4. Escuche y respete a los miembros de nuestro personal',
            'forms.profile.rules.7.desc' => "§7Los miembros de nuestro personal estan aqui para garantizar que todos la esten pasando muy bien. Cuando te dan una instrucción, esperamos que sigas lo que dicen.\nTen en cuenta que nuestro equipo de personal está compuesto por voluntarios. Están aquí para ayudar y mantener el servidor seguro, pero no son sus servidores personales. Al hacer preguntas o entablar una conversación con ellos, hágalo de manera cortés.",
            'forms.profile.rules.8' => '§e5. No se permite anunciar / respaldar otros servidores',
            'forms.profile.rules.8.desc' => '§7La publicidad o el respaldo de otro servidor de Minecraft Bedrock Edition está estrictamente prohibido en NetherGames. Se pueden mencionar otros servidores si se van a utilizar para proporcionar contexto en una conversación, sin embargo, cualquier otra forma de conversación relacionada con otro servidor se tratará como publicidad.',
            'forms.profile.rules.9' => '§e6. Mantenga segura su informacion personal',
            'forms.profile.rules.9.desc' => '§7Si bien nos encantaría creer que no hay personas malas en el mundo, esto simplemente no es realista. Guarde su información personal para sí mismo: esto es Internet. Tenga en cuenta que todas las conversaciones y mensajes que envíe se publican en un foro público, que es probable que permanezcan para siempre.',
            'forms.profile.stats' => '§aTus estadísticas:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Vota por nosotros diariamente en §bngmc.co/v §6y puedes ganar una mejora de rango gratis!',
            'join.welcome' => '§bBienvenido a §eNether§6Games§b!',
            'minigame.party.member.join' => '§cEstás en una party, espera a que el anfitrión decida a qué juego jugar!',
            'skin.invalid.change' => '§cTu skin no es válida para jugar en §eNether§6Games§c. Porfavor escoje otra.',
            'social.party.notin' => '§cNo estás en una party!',
        ];
    }

    public function getName(): string
    {
        return 'Spanish';
    }

    public function getLocale(): string
    {
        return 'es_mx';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/mexico.png';
    }

    public function getCredits(): string
    {
        return 'Ducc, Josewowgame, Maicol';
    }
}