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

class Chinese implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6禁用了 {%0} 频道，启用了 {%1}频道。 您现在只能跟{%1} 的成员聊天。',
            'command.chat.disable' => '§6禁用了 {%0} 频道，您现在可以跟所有玩家聊天。',
            'command.chat.enable' => '§6启用了 {%0} 频道，您现在可以跟 {%0} 玩家聊天。',
            'command.chat.public' => '§c抱歉，您已经在公共频道。',
            'command.chat.usage' => '§c输入 /c [{%0}] 来启用另外一个频道。',
            'command.chat.usage.nothing' => '§c对不起，您不在派对中时，您无法切换频道。',
            'command.chat.usage.party' => '§c耶嘿! 输入 /c party 来启用派对频道，输入 /c off 来禁用排队频道。',
            'database.error' => '§l§c 一个意外的问题在连接数据的过程中产生了，您这段时间的数据将不会被保存。',
            'forms.profile.credits' => '§b游戏积分: {%0}',
            'forms.profile.deaths' => '§b死亡次数: {%0}',
            'forms.profile.kills' => '§b击杀人数: {%0}',
            'forms.profile.level' => '§b等级: {%0}',
            'forms.profile.rules.1' => '§a欢迎来到§eNether§6Games§a。',
            'forms.profile.rules.10' => '§e7. 请不要使用任何附加程序或者材质包来达到作弊的目的',
            'forms.profile.rules.10.desc' => '§7不允许在NetherGames上使用未经Minecraft官方认可的客户端修改或“破解客户端”。禁止的修改包括那些给你的能力，不是得到正确的-例如飞行，跳跃/速度提高，自动点击等包，不影响游戏性和/或提供优势是允许的。',
            'forms.profile.rules.11' => '§e8. 请使用合适的名称和皮肤',
            'forms.profile.rules.11.desc' => '§7请保持你的名字和皮肤适合所有年龄段的玩家。禁止的皮肤包括可能提供优势的皮肤，例如使用自定义几何体而不是"Alex"或"Steve"皮肤结构的皮肤，或显示过多身体部位的皮肤。',
            'forms.profile.rules.12' => '§e9. 请体贴你的队友和其他队员',
            'forms.profile.rules.12.desc' => "§7当您在一局与别的玩家的游戏中时，请为他们着想。击杀他们，恶作剧等都是不被允许的。同样，如果您在一局单人游戏中，和别的玩家组队是绝对不可接受的。单人和组队游戏的分开存在是有意义的。\n在阵营的时候, 使用\"传送陷阱\" 来击杀别的玩家是不被允许的。 请不要为了击杀别的玩家而参与此等活动。",
            'forms.profile.rules.13' => '§e10. 请把您的点击保持在一个合适的频率',
            'forms.profile.rules.13.desc' => '§7请为我们的PE玩家着想一下。 抖类点击是被允许的，但蝶点击 (同时使用两根手指来按一个按键) 与划类点击 (用您的手指在按键上来回划动) 是不被允许的。 任何可令您的点击率达到一种不可理喻的速度的硬件或软件是绝对不被允许的。请帮助我们为大家把游戏变得更加公平，有趣。',
            'forms.profile.rules.14' => '§e11. 报告错误而不是滥用它',
            'forms.profile.rules.14.desc' => '§7即使您已经向我们报告过，也不允许在游戏中使用给您带来优势的故障。如果您发现此类破坏游戏规则的漏洞，请立即向我们的Discord（§bngmc.co/d§7）报告。',
            'forms.profile.rules.15' => '§e12. 请接受惩罚',
            'forms.profile.rules.15.desc' => '§7企图逃避惩罚是不允许的。帮助人们逃避惩罚是不被允许的。我们拥有规则和预警系统。你必须遵守这些规则。',
            'forms.profile.rules.16' => '§e13.请使用英语交流',
            'forms.profile.rules.16.desc' => "§7我们希望包括所有背景的所有人。我们希望您也能帮助我们实现这一目标，所以请使用英语，英语在世界各地广为使用。\n对于英语沟通有困难的人，也有例外。",
            'forms.profile.rules.17' => "§b如果您不确定允许的行为类型，我们鼓励您联系我们的帮助团队。如果您违反了我们的一项规定，我们宁愿您提出问题来帮助您澄清任何可能产生的误解，也不愿您面临潜在的后果。\n请记住，此处列出的规则仅供参考。您可以在§engmc.co/tac§b找到最新版本。",
            'forms.profile.rules.18' => '§b我们保留随时更改这些规则的权利。我们也可以行使权利，禁止和拒绝服务，或限制任何玩家/用户的服务访问权，无论他们是否违反了上述规定。',
            'forms.profile.rules.19' => '§b需要帮助，还是有问题？使用 §e/tell §b与工作人员联系，通过 §engmc.co/lc§b，Twitter上的 §e@NetherGamesMC §b或 §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games§b是一个基于社区的服务器网络，提供各种各样的游戏，以娱乐各个年龄段的Minecraft服务器。',
            'forms.profile.rules.20' => '§b谢谢你玩§eNether§6Games§b!',
            'forms.profile.rules.3' => '§b在您开始玩游戏之前，我们希望您在使用我们的服务时仔细阅读我们对您的以下指导原则和期望。这些规则帮助我们确保每个人都能玩得开心。',
            'forms.profile.rules.4' => '§e1.请尊重每一个人',
            'forms.profile.rules.4.desc' => '§7请不要对任何人咒骂。尊重每一个人。任何形式的欺凌在NetherGames都是不可容忍的，违者将受到相应的惩罚。',
            'forms.profile.rules.5' => '§e2. 请保持内容适当',
            'forms.profile.rules.5.desc' => '§7不允许发布不当言论。问问你自己，我的家长们会喜欢看到这个吗? 这也包括任何类型的种族主义、性别歧视。',
            'forms.profile.rules.6' => '§e3. 聊天时要体贴',
            'forms.profile.rules.6.desc' => '§7聊天时请思考别人都会看到些什么，请不要大量刷屏或者重复使用一组或一个词汇，或使用大写字母以达到受关注或骚扰他人的目的。请尊重我们的聊天过滤器，它的存在是有意义的。我们将会允许被适当局部屏蔽并且不是针对另外的玩家的脏话，但请切记这因您说的话而异。',
            'forms.profile.rules.7' => '§e4.请听从我们工作人员的话',
            'forms.profile.rules.7.desc' => "§7我们的工作人员来这里是为了确保每个人都玩得开心。请听从他们说的话。\n请记住，我们的员工团队是由志愿者组成的。他们是来帮助和保护服务器安全的，但他们不是你的私人仆人。当问问题或与他们交谈时，请礼貌一些。",
            'forms.profile.rules.8' => '§e5. 请不要发布有关其他服务器的广告',
            'forms.profile.rules.8.desc' => '§7在NetherGames上严禁发布其他服务器的广告。如果要使用其他服务器在会话中提供上下文，则可以提及其他服务器，但是与其他服务器相关的任何其他形式的会话将被视为广告。',
            'forms.profile.rules.9' => '§e6. 请保护您的个人信息',
            'forms.profile.rules.9.desc' => '§7虽然我们愿意相信世界上没有坏人，但这并不现实。把你的个人信息留给自己-这是互联网。请记住，您发送的所有对话和消息都发布在公共论坛上。',
            'forms.profile.stats' => '§a您的数据:',
            'forms.profile.xp' => '§b经验: {%0}',
            'join.vote' => '§6每天在 §bngmc.co/v 投票§6来赢取免费的一次级别升级!',
            'join.welcome' => '§b欢迎来到§eNether§6Games§b!',
            'minigame.party.member.join' => '§c您在一个派对中，请等待派对主办方决定来玩哪局游戏!',
            'skin.invalid.change' => '§c你的皮肤对于§eNether§6Games§b来说是无效的。请换一个皮肤。',
            'social.party.notin' => '§c您并不在一个派对中!',
        ];
    }

    public function getName(): string
    {
        return 'Chinese';
    }

    public function getLocale(): string
    {
        return 'zh_cn';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/china.png';
    }

    public function getCredits(): string
    {
        return 'Frozen, Thunder33345 & Kanine';
    }
}
