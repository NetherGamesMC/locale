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

class Vietnamese implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Vô hiệu hóa {%0} chat và kích hoạt {%1} chat. Bạn chỉ có thể chat với {%1} người thôi.',
            'command.chat.disable' => '§6Vô hiệu hóa {%0} chat. Bạn có thể chat với tất cả mọi người.',
            'command.chat.enable' => '§6Kích hoạt {%0} chat. Bạn chỉ có thể chat với {%0} người thôi.',
            'command.chat.public' => '§cBạn đã đang ở kênh chat thế giới rồi.',
            'command.chat.usage' => '§cNhập /c [{%0}] để kích hoạt một chat nhất định.',
            'command.chat.usage.nothing' => '§cXin lỗi, bạn không thể đổi chat khi đang không ở trong tổ đội.',
            'command.chat.usage.party' => '§cẦUU YÊ! Nhập /c party để kích hoạt chat trong tổ đội, nhập /c off để vô hiệu hóa.',
            'database.error' => '§l§c Đã gặp phải lỗi kĩ thuật trong quá trình kết nối với máy chủ. Dữ liệu của bạn sẽ không được giữ trong thời gian này.',
            'forms.profile.credits' => '§bCông trạng: {%0}',
            'forms.profile.deaths' => '§bBị hạ: {%0}',
            'forms.profile.kills' => '§bHạ: {%0}',
            'forms.profile.level' => '§bCấp bậc: {%0}',
            'forms.profile.rules.1' => '§aChào mừng bạn đến với §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Xin hãy tắt các phần mềm gian lận',
            'forms.profile.rules.10.desc' => '§7Sử dụng các phần mềm, ứng dụng gian lận hay không thuộc quyền sở hữu của Minecraft bị nghiêm cấm trên NetherGames - ví dụ những phần mềm cho phép bạn bay, tự động nhấn chuột, chạy hay bật xa, nhìn xuyên thấu,vv. Resource/texture packs chỉ có chức năng thay đổi ngọai hình không ảnh hưởng tới tiến độ trò chơi có thể được sử dụng.',
            'forms.profile.rules.11' => '§e8. Hãy dùng tên người dùng và trang phục hợp lệ',
            'forms.profile.rules.11.desc' => '§7Dùng tên và ngọai hình phù hợp với mọi lứa tuổi. Những ngọai hình bị cấm là những ngọai hình có cấu trúc không giống với "Steve" và "Alex", hay những trang phục phản cảm.',
            'forms.profile.rules.12' => '§e9. Hãy nghĩ đến cảm xúc của đồng đội hay những người chơi khác',
            'forms.profile.rules.12.desc' => "§7Khi ở trong cùng tổ đội với người chơi khác, xin đừng phá hay làm cản trở họ quá mức.\nNếu như đấu một mình, xin đừng bắt cặp với người chơi khác. Nếu muốn chơi cùng đội với người khác, hãy chuyển sang chế độ tổ hợp.\nTrên chế độ Factions, \"bẫy dịch chuyển\" người chơi khác là sai trái . Đừng trêu đùa người khác bằng cách này.",
            'forms.profile.rules.13' => '§e10. Giữ tốc độ nhấp chuột của bạn ở mức trung bình',
            'forms.profile.rules.13.desc' => '§7Xin hãy nghĩ đến những người chơi trên điện thọai thay vì máy tính. Bạn có thể dùng jitter clicking, nhưng nghiêm cấm sử dụng butterfly clicking (dùng nhiều ngón tay bấm chuột cùng một lúc) và drag clicking (kéo ngón tay di chuyển trên nút chuột) . Phần mềm và cài đặt giúp bạn bấm chuột với tốc độ quá cao cũng bị cấm. Hãy giúp chúng tôi giữ cân bằng giữa người chơi trên điện thọai hay máy tính.',
            'forms.profile.rules.14' => '§e11. Báo cáo sự cố thay vì lạm dụng nó',
            'forms.profile.rules.14.desc' => '§7Không được lạm dụng sự cố kĩ thuật vì mục đích sai trái kể cả khi bạn đã báo cáo lỗi đó. Nếu bạn phát hiện một lỗi kĩ thuật xin vui lòng báo cáo lại cho chúng tôi ở mục #bugs trên Discord (§bngmc.co/d§7) ngay lập tức và tố cáo những người chơi lạm dụng lỗi.',
            'forms.profile.rules.15' => '§e12. Chấp nhận hình phạt',
            'forms.profile.rules.15.desc' => '§7Không được phép trốn tránh hình phạt hay giúp người chơi khác né phạt. Bạn phải tuân theo nội quy chúng tôi đưa ra khi chơi trên máy chủ và chấp nhận xử phạt khi vi phạm.',
            'forms.profile.rules.16' => '§e13. Nói chuỵên bằng tiếng anh',
            'forms.profile.rules.16.desc' => "§7Chúng tôi cố gắng để bao gồm tất cả người chơi mặc kệ tiểu sử hay ngôn ngữ. Để đạt được điều đó chúng tôi khuyên bạn nên nói chuyện bằng tiếng anh, một ngôn ngữ được dùng rộng rãi trên toàn cầu.\nSẽ có những trường hợp ngọai lệ nếu bạn không thuận giao tiếp bằng tiếng anh.",
            'forms.profile.rules.17' => "§bNếu bạn có bất kì thắc mắc nào xin hãy liên hệ với bộ phận trợ giúp của chúng tôi. Chúng tôi muốn bạn hiểu rõ nội quy thay vì hiểu lầm nó mà vi phạm và chịu hình phạt.\nNhững quy định ở đây chỉ là tổng quát. Bạn có thể tìm thấy bản nội quy mới nhất tại đây §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bChúng tôi có quyền thay đổi các quy tắc này bất cứ lúc nào mà không cần thông báo trước hoặc tham khảo ý kiến với cộng đồng, và sự thay đôti có thể có hiệu lực ngay lập tức. Chúng tôi cũng có thể thực hiện quyền cấm và từ chối dịch vụ hoặc giới hạn khả năng tiếp cận dịch vụ đối với bất kỳ người chơi hay người dùng nào theo quyết định của chúng tôi, bất kể họ có vi phạm các quy định được liệt kê ở trên không.',
            'forms.profile.rules.19' => '§bCần sự trợ giúp, liên hệ với một nhân viên qua §e/tell§b, hay qua §engmc.co/lc§b, §e@NetherGamesMC §btrên Twitter hay §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §blà một cộng đồng máy chủ Minecraft với nhiều chế độ trò chơi đa dạng phù hợp cho mọi lứa tuổi.',
            'forms.profile.rules.20' => '§bCảm ơn vì đã lựa chọn §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bTrước khi bắt đầu cuộc hành trình tại NetherGames, xin vui lòng đọc kĩ những luật lệ và điều khoản của chúng tôi. Những nội quy này giúp chúng tôi đảm bảo rằng bạn nó một khoảng thời gian vui vẻ trên máy chủ.',
            'forms.profile.rules.4' => '§e1. Tôn trọng bản thân và những người chơi khác',
            'forms.profile.rules.4.desc' => '§7Không được chửi thề, nói bậy, xúc phạm người khác. Tôn trọng người khác và đối xử với họ như cách bạn muốn được đối xử. Xúc phạm người chơi khác dưới mọi hình thức là không thể chấp nhận ở NetherGames, nếu vi phạm sẽ bị xử phạt thích đáng.',
            'forms.profile.rules.5' => '§e2. Đảm bảo những nội dung bạn đăng tải là tốt',
            'forms.profile.rules.5.desc' => '§7Xin đừng đăng tải nội dung sai trái, đồi trụy ở đây. Một cách tốt để kiểm tra xem nội dung bạn đăng tải có phù hợp không là hãy tự hỏi bản thân:"Liệu đây có phải là những gì mình sẽ cho bố mẹ xem không?" Điều này cũng áp dụng cho những thông tin người khác có thể cảm thấy bị xúc phạm. Phân biệt màu da, chủng tộc, giới tính hay mọi hình thức phân biệt đối xử nào bị nghiêm cấm.',
            'forms.profile.rules.6' => '§e3. Hãy biết nghĩ cho người khác khi nói chuyện với họ',
            'forms.profile.rules.6.desc' => '§7Hãy nghĩ cho người khác khi họ thấy những gì mà bạn sẽ đăng. Không được liên tục gửi liên tục một hay nhiều tin nhắn lặp lại hay lạm dụng quá nhiều chữ cái viết hoa. Nhận thức được rằng chúng tôi có phần mềm lọc cuộc trò chuyện là có lý do đấy. Một số từ chửi thề có thể được sử dụng trong một số trường hợp, nhưng chỉ khi nó được che đi một phần và không trực tiếp nói về người chơi khác.',
            'forms.profile.rules.7' => '§e4. Vui lòng nghe lời và tôn trọng nhân viên của chúng tôi',
            'forms.profile.rules.7.desc' => "§7Nhân viên của chúng tôi có trách nhiệm đảm bảo bạn có một khoảng thời gian vui vẻ ở đây, xin vui lòng nghe theo chỉ thị của họ.\nHãy biết rằng mọi nhân viên đều là do tự nguyện. Họ ở đây là để giúp cho NetherGames an toàn, nhưng họ không phải là giúp việc riêng của bạn. Khi có câu hỏi hay muốn bắt chuyện với họ, xin hãy lịch sự.",
            'forms.profile.rules.8' => '§e5. Nghiêm cấm quảng bá cho những máy chủ khác',
            'forms.profile.rules.8.desc' => '§7Quảng cáo cho các máy chủ Minecraft Bedrock Edition khác là không được phép. Các máy chủ khác có thể được nêu tên nếu như dùng để chứng minh hay bàn về một luận điểm, nhưng nếu cả cuộc trò chuyện là về máy chủ khác sẽ được tính là quảng cáo.',
            'forms.profile.rules.9' => '§e6. Giữ an toàn thông tin cá nhân của bạn',
            'forms.profile.rules.9.desc' => '§7Tuy chúng tôi muốn tin rằng trên thế giới này không có kẻ xấu, đó không phải là sự thật. Giữ thông tin cá nhân của bạn an toàn, đây là ở trên mạng, mọi cuộc trò chuyện và tin nhắn của bạn sẽ được lưu giữ mãi mãi.',
            'forms.profile.stats' => '§aThông số của bạn:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Bầu chọn cho chúng tôi tại §bngmc.co/v §6và bạn có thể thắng được một lần nâng cấp cấp bậc miễn phí',
            'join.welcome' => '§bChào mừng đến với §eNether§6Games§b!',
            'minigame.party.member.join' => '§cBạn đang ở trong tổ đội, xin vui lòng chờ xem chủ đội của bạn quyết định chơi game gì!',
            'skin.invalid.change' => '§cTrang phục của bạn không phù hợp để chơi trên §eNether§6Games§c. Xin hãy chọn một trang phục khác.',
            'social.party.notin' => '§cBạn đang không ở trong tổ đội nào!',
        ];
    }

    public function getName(): string
    {
        return 'Vietnamese';
    }

    public function getLocale(): string
    {
        return 'vi_vn';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/vietnam.png';
    }

    public function getCredits(): string
    {
        return 'SirFonning';
    }
}