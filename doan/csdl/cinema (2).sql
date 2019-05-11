-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 01, 2019 lúc 03:29 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `gioithieu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tuyendung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lienhequangcao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dieukhoanchung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dieukhoangiaodich` longtext COLLATE utf8_unicode_ci NOT NULL,
  `chinhsachbaomat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `chinhsachthanhtoan` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cauhoithuonggap` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `gioithieu`, `tuyendung`, `lienhequangcao`, `dieukhoanchung`, `dieukhoangiaodich`, `chinhsachbaomat`, `chinhsachthanhtoan`, `cauhoithuonggap`) VALUES
(1, '<h2 class=\"h2-color\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 2rem; color: rgb(255, 163, 0); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; background-color: rgb(255, 255, 255);\"><br></h2><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255); text-align: justify;\"><div style=\"box-sizing: border-box;\">CJ CL là một trong top 5 cụm rạp chiếu phim lớn nhất toàn cầu và là nhà phát hành, cụm rạp chiếu phim lớn nhất Việt Nam.Mục tiêu của chúng tôi là trở thành hình mẫu công ty điển hình đóng góp cho sự phát triển không ngừng của ngành công nghiệp điện ảnh Việt Nam.</div><div style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></div><div style=\"box-sizing: border-box;\">CJ CL đã tạo nên khái niệm độc đáo về việc chuyển đổi rạp chiếu phim truyền thống thành tổ hợp văn hóa “Cultureplex”, nơi khán giả không chỉ đến thưởng thức điện ảnh đa dạng thông qua các công nghệ tiên tiến như SCREENX, IMAX, STARIUM, 4DX, Dolby Atmos, cũng như thưởng thức ẩm thực hoàn toàn mới và khác biệt trong khi trải nghiệm dịch vụ chất lượng nhất tại CL.</div><div style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></div><div style=\"box-sizing: border-box;\">Thông qua những nỗ lực trong việc xây dựng chương trình Nhà biên kịch tài năng, Dự án phim ngắn CJ, Lớp học làm phim TOTO, CL ArtHouse cùng việc tài trợ cho các hoạt động liên hoan phim lớn trong nước như Liên hoan Phim quốc tế Hà Nội, Liên hoan Phim Việt Nam, CJ CL Việt Nam mong muốn sẽ khám phá và hỗ trợ phát triển cho các nhà làm phim trẻ tài năng của Việt Nam.</div><div style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></div><div style=\"box-sizing: border-box;\">CJ CL Việt Nam cũng tập trung quan tâm đến đối tượng khán giả ở các khu vực không có điều kiện tiếp cận nhiều với điện ảnh, bằng cách tạo cơ hội để họ có thể thưởng thức những bộ phim chất lượng cao thông qua các chương trình vì cộng đồng như Trăng cười và Điện ảnh cho mọi người.</div><div style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></div><div style=\"box-sizing: border-box;\">CJ CL Việt Nam sẽ tiếp tục cuộc hành trình bền bỉ trong việc góp phần xây dựng một nền công nghiệp điện ảnh Việt Nam ngày càng vững mạnh hơn cùng các khách hàng tiềm năng, các nhà làm phim, các đối tác kinh doanh uy tín, và cùng toàn thể xã hội.</div></div>\n\n\n\n', '<div style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\"><img src=\"https://www.cgv.vn/media/wysiwyg/jobs/cgv-2.png\"><font color=\"#ff0000\"><br></font></div><div style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\"><font color=\"#ff0000\">ĐỒNG HÀNH CÙNG CL VIETNAM</font></div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">CL trực thuộc CL Groupmột trong những tập đoàn kinh tế đa ngành lớn nhất của Hàn Quốc đã có mặt ở 21 quốc gia trên thế giới. CL là một trong top 05 cụm rạp chiếu phim lớn nhất toàn cầu và là nhà phát hành, cụm rạp chiếu phim lớn nhất tại Việt Nam.</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">CL luôn mong muốn mang đến nhiều cơ hội làm việc cho các tài năng trẻ, năng động, yêu thích ngành công nghiệp điện ảnh.</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Để gia nhập gia đình CJ CL Việt Nam và trở thành một CGVians chính hiệu, bạn có thể tham khảo một số cách dưới đây:</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">1. Gửi CV kèm ảnh đến email cltalent@cj.net ghi rõ tiêu đề \"[TÊN] - Ứng tuyển [VỊ TRÍ] – [NƠI LÀM VIỆC]\".</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">2. Đăng ký ứng tuyển trực tiếp qua link:</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Hà Nội và các tỉnh miền Bắc.Các tỉnh miền Trung.Thành phố Hồ Chí Minh và các tỉnh miền Đông.Các tỉnh khu vực Mekong.</div><div style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">3. Nộp hồ sơ trực tiếp tại Quầy hướng dẫn của các cụm rạp CL ứng viên mong muốn làm việc.</div>\n\n\n\n', '', '<div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">1. Trách nhiệm của người sử dụng:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Khi truy cập vào trang web này, bạn đồng ý chấp nhận mọi rủi ro. CL và các bên đối tác khác không chịu trách nhiệm về bất kỳ tổn thất nào do những hậu quả trực tiếp, tình cờ hay gián tiếp; những thất thoát, chi phí (bao gồm chi phí pháp lý, chi phí tư vấn hoặc các khoản chi tiêu khác) có thể phát sinh trực tiếp hoặc gián tiếp do việc truy cập trang web hoặc khi tải dữ liệu về máy; những tổn hại gặp phải do virus, hành động phá hoại trực tiếp hay gián tiếp của hệ thống máy tính khác, đường dây điện thoại, phần cứng, phần mềm, lỗi chương trình, hoặc bất kì các lỗi nào khác; đường truyền dẫn của máy tính hoặc nối kết mạng bị chậm…</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">2. Về nội dung trên trang web:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Tất cả những thông tin ở đây được cung cấp cho bạn một cách trung thực như bản thân sự việc. CL và các bên liên quan không bảo đảm, hay có bất kỳ tuyên bố nào liên quan đến tính chính xác, tin cậy của việc sử dụng hay kết quả của việc sử dụng nội dung trên trang web này. Nột dung trên website được cung cấp vì lợi ích của cộng đồng và có tính phi thương mại. Các cá nhân và tổ chức không được phếp sử dụng nội dung trên website này với mục đích thương mại mà không có sự ưng thuận của CL bằng văn bản. Mặc dù CL luôn cố gắng cập nhật thường xuyên các nội dung tại trang web, nhưng chúng tôi không bảo đảm rằng các thông tin đó là mới nhất, chính xác hay đầy đủ. Tất cả các nội dung website có thể được thay đổi bất kỳ lúc nào.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">3. Về bản quyền:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">CL là chủ bản quyền của trang web này. Việc chỉnh sửa trang, nội dung, và sắp xếp thuộc về thẩm quyền của CL. Sự chỉnh sửa, thay đổi, phân phối hoặc tái sử dụng những nội dung trong trang này vì bất kì mục đích nào khác được xem như vi phạm quyền lợi hợp pháp của CL.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">4. Về việc sử dụng thông tin:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Chúng tôi sẽ không sử dụng thông tin cá nhân của bạn trên website này nếu không được phép. Nếu bạn đồng ý cung cấp thông tin cá nhân, bạn sẽ được bảo vệ. Thông tin của bạn sẽ được sử dụng với mục đích, liên lạc với bạn để thông báo các thông tin cập nhật của CL như lịch chiếu phim, khuyến mại qua email hoặc bưu điện. Thông tin cá nhân của bạn sẽ không được gửi cho bất kỳ ai sử dụng ngoài trang web CL, ngoại trừ những mở rộng cần thiết để bạn có thể tham gia vào trang web (những nhà cung cấp dịch vụ, đối tác, các công ty quảng cáo) và yêu cầu cung cấp bởi luật pháp. Nếu chúng tôi chia sẻ thông tin cá nhân của bạn cho các nhà cung cấp dịch vụ, công ty quảng cáo, các công ty đối tác liên quan, thì chúng tôi cũng yêu cầu họ bảo vệ thông tin cá nhân của bạn như cách chúng tôi thực hiện.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">5. Vể việc tải dữ liệu:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Nếu bạn tải về máy những phần mềm từ trang này, thì phần mềm và các dữ liệu tải sẽ thuộc bản quyền của CL và cho phép bạn sử dụng. Bạn không được sở hữu những phầm mềm đã tải và CL không nhượng quyền cho bạn. Bạn cũng không được phép bán, phân phối lại, hay bẻ khóa phần mềm…</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">6. Thay đổi nội dung:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">CL giữ quyền thay đổi, chỉnh sửa và loại bỏ những thông tin hợp pháp vào bất kỳ thời điểm nào vì bất kỳ lý do nào.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">7. Liên kết với các trang khác:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Mặc dù trang web này có thể được liên kết với những trang khác, CL không trực tiếp hoặc gián tiếp tán thành, tổ chức, tài trợ, đứng sau hoặc sát nhập với những trang đó, trừ phi điều này được nêu ra rõ ràng. Khi truy cập vào trang web bạn phải hiểu và chấp nhận rằng CL không thể kiểm soát tất cả những trang liên kết với trang CL và cũng không chịu trách nhiệm cho nội dung của những trang liên kết.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">8. Đưa thông tin lên trang web:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Bạn không được đưa lên, hoặc chuyển tải lên trang web tất cả những hình ảnh, từ ngữ khiêu dâm, thô tục, xúc phạm, phỉ báng, bôi nhọ, đe dọa, những thông tin không hợp pháp hoặc những thông tin có thể đưa đến việc vi phạm pháp luật, trách nhiệm pháp lý. CL và tất cả các bên có liên quan đến việc xây dựng và quản lý trang web không chịu trách nhiệm hoặc có nghĩa vụ pháp lý đối với những phát sinh từ nội dung do bạn tải lên trang web.</p></div><div class=\"content-show-term-condition content\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; float: left; width: 725px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span class=\"linktag\" style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">9. Luật áp dụng:</strong></span><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px 0px 0px 20px; float: left; width: 725px; color: rgb(99, 99, 99); font-family: Verdana, Arial, sans-serif; line-height: 24px;\">Mọi hoạt động phát sinh từ trang web có thể sẽ được phân tích và đánh giá theo luật pháp Việt Nam và toà án Tp. Hồ Chí Minh. Và bạn phải đồng ý tuân theo các điều khoản riêng của các toà án này.</p></div>\n\n\n\n', '<div>Chào mừng quý khách đến với CL</div><div><br></div><div>Chúng tôi là Công ty TNHH CJ CL Vietnam, địa chỉ trụ sở chính tại Tòa nhà CJ, Tầng 10-11, 2Bis-4-6 đường Lê Thánh Tôn, Quận 1, Thành phố Hồ Chí Minh.</div><div><br></div><div>Khi quý khách truy cập vào trang web của CL có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Quy định và Điều kiện sử dụng, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Quy định và Điều kiện được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó. Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của CL.</div><div><br></div><div>Xin vui lòng đọc kỹ trước khi quyết định Đặt Vé trực tuyến.</div><div><br></div><div>1. Phạm Vi Áp Dụng</div><div>Điều kiện dưới đây áp dụng riêng cho chức năng mua vé trực tuyến tại Website. Khi sử dụng chức năng để đặt chỗ và mua vé, Quý khách mặc nhiên đã chấp thuận và tuân thủ tất cả các chỉ dẫn, điều khoản, điều kiện và lưu ý đăng tải trên Website, bao gồm nhưng không giới hạn bởi Điều kiện Sử dụng nêu ở đây. Nếu Quý khách không có ý định mua vé trực tuyến hay không đồng ý với bất kỳ điều khoản hay điều kiện nào nêu trong Điều kiện Sử dụng, xin hãy DỪNG VIỆC SỬ DỤNG chức năng này.</div><div><br></div><div>2. Điều kiện sử dụng tính năng mua vé trực tuyến</div><div>Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.</div><div><br></div><div>3. Quy định về đặt vé trực tuyến</div><div>- Tính năng đặt vé trực tuyến hiện chỉ áp dụng cho thành viên của CL. Vui lòng tham khảo thông tin đăng ký thành viên trên website www.CL.vn.- Thông thường, CL mở bán vé trực tuyến trước ngày chiếu phim, tuy nhiên điều này phụ thuộc vào mỗi phim, mỗi rạp. Nếu suất chiếu bạn muốn đặt chưa được hiển thị trên website vào thời điểm khách đặt vé, xin vui lòng quay lại sau, hoặc liên hệ tới số hot line của CL 1900 6017 để biết thêm thông tin chi tiết.- Thời gian đóng chức năng mua vé trực tuyến là 30 phút trước giờ chiếu phim hoặc khi suất chiếu đã được bán hết vé. Sau thời gian này quý khách có thể đến liên hệ trực tiếp tại rạp để mua vé.- CL không cam kết giữ chỗ ngồi cho quý khách cho đến khi quý khách hoàn tất thanh toán cho đơn hàng của mình.- Khách hàng có thể đặt chỗ cho tối đa 8 khách (không bao gồm vé trẻ em) trong mỗi lần thực hiện.- Khi tiến hành các bước thanh toán, cần đọc kĩ các thông tin trên màn hình về rạp chiếu phim, tên phim, suất chiếu, và chỗ ngồi trước khi hoàn tất việc xác nhận tất cả các thông tin về vé.- Quý khách thanh toán giao dịch đặt vé theo quy định tại Chính Sách Thanh Toán đăng tải trên CL trước khi nhận mã đặt vé của giao dịch đó. Khi quý khách nhấn (click) vào ô “Thanh toán” để tiến hành thanh toán Đặt chỗ có nghĩa là đã xác nhận rà soát thông tin Đặt chỗ; và đồng ý là Điều Khoản Và Điều Kiện sẽ được áp dụng cho giao dịch mua vé trong giao dịch đó.- Email và tin nhắn xác nhận đặt vé sau khi hoàn thành việc thanh toán vé trực tuyến, quý khách sẽ nhận được thư xác nhận thông tin chi tiết vé đã thanh toán thông qua địa chỉ thư điện tử (email) mà quý khách đã cung cấp. Email xác nhận thông tin đặt vé có thể đi vào hộp thư rác (spam mail) của bạn, vì vậy hãy kiểm tra chúng trước khi liên lạc với CL.- Bằng việc thanh toán qua website này, quý khách chấp nhận vị trí ghế ngồi mà bạn đã đặt. Quý khách đồng ý rằng, trong những trường hợp có sự thay đổi về chương trình phim hoặc bất khả kháng, CL có quyền hoàn trả lại bất kỳ vé nào từ việc mua bán qua trang web này hoặc thực hiện việc chuyển vé cho bạn qua suất chiếu khác theo yêu cầu của quý khách.- Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</div><div>4. Giá Vé</div><div>- Giá vé được niêm yết tại CL là giá bán cuối cùng đã bao gồm thuế Giá trị gia tăng (VAT). Giá vé có thể thay đổi tùy thời điểm và chương trình khuyến mãi kèm theo và sẽ được hiển thị rõ tại trang Thanh toán khi quý khách tiến hành đặt hàng.- Giá vé khi đặt vé trực tuyến trên website CL là giá vé người lớn. Các loại vé như học sinh-sinh viên, vé trẻ em và người cao tuổi vui lòng mua trực tiếp tại quầy vé tại các rạp CL Cinemas.- Căn cứ Thông tư số 12/2015/TT-BVHTTDL của Bộ trưởng Bộ Văn hóa, Thể thao và Du lịch có hiệu lực thi hành từ ngày 01/01/2017, Tiêu chí phân loại phim theo lứa tuổi được quy định như sau:o P: Phim được phép phổ biến rộng rãi đến mọi đối tượngo C13: Phim cấm phổ biến đến khán giả dưới 13 tuổio C16: Phim cấm phổ biến đến khán giả dưới 16 tuổio C18: Phim cấm phổ biến đến khán giả dưới 18 tuổi- Khán giả khi xem phim thuộc các phân loại trên vui lòng mang theo giấy tờ tùy thân hoặc hình ảnh của giấy tờ tùy thân có ảnh nhận diện và ngày tháng năm sinh để đảm bảo việc tuân thủ theo quy định.o C13: Thẻ học sinh, thẻ bảo hiểm, thẻ thư viện, Hộ chiếu… còn hiệu lựco C16: CMND, Thẻ học sinh , Hộ chiếu, Thẻ thư viện,… còn hiệu lựco C18: CMND, Thẻ HSSV, Bằng lái xe, Hộ chiếu,… còn hiệu lực- Khách hàng vui lòng chứng thực được độ tuổi phù hợp với phim được phân loại như trên. CL có quyền từ chối việc bán vé hoặc vào phòng chiếu nếu khách hàng không tuân thủ đúng theo quy định.</div><div>5. Giá trị giao dịch và hình thức thanh toán</div><div>- CL cung cấp các hình thức thanh toán: thẻ Thanh toán Quốc tế hoặc thẻ Thanh toán Nội địa, thẻ quà Tặng CL, CL Voucher và bằng điểm thưởng thành viên.- Trừ một số trường hợp có ghi chú riêng, thông thường quý khách có thể lựa chọn một trong các hình thức thanh toán trên khi tiến hành đặt vé.- CL có quyền từ chối chấp nhận cho Khách Hàng thanh toán bằng thẻ tín dụng trong một số trường hợp theo quyết định của CL.- Để đảm bảo an toàn thanh toán, Khách Hàng lưu ý:o Chỉ thực hiện thanh toán trực tuyến tại cửa sổ liên kết từ CL chuyển đến;o Sử dụng và bảo quản thẻ (thẻ tín dụng, thẻ ATM, thẻ mua hàng…) và thông tin tài khoản/thông tin thẻ cẩn thận;o Không cho người khác mượn hoặc sử dụng thẻ thành viên để mua vé tại CL. Ngay khi phát hiện giao dịch phát sinh bất thường nào tại CL, Khách Hàng cần liên hệ ngay với bộ phận chăm sóc Khách Hàng của CL để được xử lý kịp thời;o Trong mọi trường hợp, với thẻ tín dụng/ghi nợ quốc tế, Khách Hàng vui lòng không để lộ số CVV/CVC/CSC (là mã số bảo mật, bộ ba kí tự số được in ở mặt sau của thẻ) để bảo mật thông tin thẻ;o Kiểm tra tài khoản ngân hàng của mình thường xuyên để đảm bảo tất cả giao dịch qua thẻ đều nằm trong tầm kiểm soát.</div><div>6. Điểm thưởng và đổi điểm</div><div>- Quy định về tích lũy và quy đổi điểm thưởng được thực hiện theo chính sách cụ thể của CL tại từng thời điểm.- CL khuyến khích Khách Hàng đăng ký tài khoản thành viên trên CL để tiện theo dõi lịch sử giao dịch, nhận thông tin cập nhật về hàng hóa, các chương trình khuyến mại, hưởng các ưu đãi đối với khách hàng thân thiết…</div><div>7. Giao kết giao dịch tại CL</div><div>Khách hàng khi mua vé trực tuyến tại website CL phải đăng nhập tài khoản thành viên CL và thực hiện các thao tác theo trình tự sau:</div><div><br></div><div>o Bước 1: Khách hàng lựa chọn suất chiếu theo phim hoặc suất chiếu theo rạp.o Bước 2: Khách hàng lựa chọn chỗ ngồi.o Bước 3: Thanh toán bằng các hình thức thanh toán online qua thẻ tín dụng (Visa, Master card..), thẻ ATM, điểm thưởng thành viên, Thẻ quà tặng CL, CL Voucher.o Bước 4: Khách hàng nhận mã đặt chỗ qua tin nhắn SMS và email.o Bước 5: Khách hàng cung cấp mã đặt vé và các thông tin tài khoản thành viên CL dùng để đặt vé để nhận vé tại rạp. Khách hàng chỉ có thể nhận vé tại rạp đã đặt vé coi phim. Nếu khách hàng không cung cấp được thông tin tài khoản CL và mã đặt vé, CL có quyền từ chối xuất vé.</div><div>8. Thay đổi, hủy bỏ giao dịch đặt vé tại CL</div><div>- Hiện tại CL chưa hỗ trợ dịch vụ hủy hoặc thay đổi thông tin vé đã thanh toán thành công.- Hệ thống Đặt vé Online của CL có liên kết với rất nhiều đối tác khác, bao gồm Cổng thanh toán ONEPAY, các ngân hàng nội địa và các Tổ chức tín dụng quốc tế. Việc thanh toán thành công hay không phụ thuộc rất nhiều vào kết nối mạng của quý khách , việc truyền dẫn, nhận và trả tín hiệu của các tổ chức đối tác trên. CL chỉ thực hiện hoàn tiền trong trường hợp khi giao dịch, tài khoản của quý khách đã bị trừ tiền nhưng hệ thống của chúng tôi không ghi nhận việc đặt vé đó, và quý khách không nhận được xác nhận đặt vé thành công. Khi đó, quý khách vui lòng liên hệ hotline 1900 6017 (từ 8:00 đến 22:00 tất cả các ngày trong tuần) hoặc bạn có thể liên hệ với chúng tôi qua địa chỉ email hoidap@CL.vn để được hỗ trợ.- Sau khi đã xác nhận các thông tin của khách hàng cung cấp về giao dịch không thành công, tùy theo từng loại tài khoản khách hàng sử dụng mà việc hoàn tiền sẽ có thời gian khác nhau:o Thẻ ATM (Nội địa): hoàn tiền trong 7 ngày làm việc.o Thẻ VISA/ MasterCard (Nội địa): hoàn tiền từ 30 đến 45 ngày làm việc.o Thẻ ATM của ngân hàng Vietcombank: hoàn tiền trong vòng 48 giờ làm việc.*Lưu ý: Thời gian hoàn tiền không tính các ngày thứ 7, Chủ nhật và Lễ Tết.- Trước khi thanh toán vé trực tuyến, chúng tôi khuyên quý khách nên xác nhận lại Tên phim, Độ tuổi, Giờ chiếu và Rạp chiếu của bộ phim muốn xem.</div><div>9. Thương hiệu và bản quyền</div><div>Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của CL. Toàn bộ nội dung của trang web được bảo vệ theo pháp luật sở hữu trí tuệ của Việt Nam và các công ước, điều ước quốc tế mà Việt Nam tham gia hoặc là thành viên.</div><div><br></div><div>10. Luật áp dụng và giải quyết tranh chấp</div><div>Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh và giải thích theo luật pháp Việt Nam. Các tranh chấp phát sinh từ hoặc liên quan đến (các) giao dịch thực hiện tại trang web này sẽ được ưu tiên giải quyết thông qua thương lượng, hòa giải. Trường hợp các bên không tự giải quyết, tranh chấp sẽ được đưa ra xét xử tại Tòa án cấp có thẩm quyền của Việt Nam.</div><div><br></div><div>11. Quy định về bảo mật</div><div>Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.</div><div><br></div><div>Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết. Mọi thông tin giao dịch sẽ được bảo mật trừ trường hợp buộc phải cung cấp theo yêu cầu của tòa án, (các) cơ quan có thẩm quyền hoặc theo quy định của pháp luật.</div><div><br></div><div>12. Giải quyết hậu quả do lỗi nhập sai thông tin thương mại tại CL</div><div>Khách hàng có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại CL. Trong trường hợp khách hàng nhập sai thông tin tại trang thông tin My CL, CL có quyền từ chối thực hiện giao dịch. Ngoài ra, trong mọi trường hợp, khách hàng đều có quyền đơn phương chấm dứt giao dịch nếu đã thực hiện bằng cách thông báo cho CL qua đường dây nóng 1900 6017</div><div><br></div><div>13. Quy định chấm dứt thỏa thuận</div><div>Trong trường hợp có bất kỳ thiệt hại nào phát sinh do việc vi phạm Quy Định sử dụng trang web, chúng tôi có quyền đình chỉ hoặc khóa tài khoản của quý khách vĩnh viễn. Nếu quý khách không hài lòng với trang web hoặc bất kỳ điều khoản, điều kiện, quy tắc, chính sách, hướng dẫn, hoặc cách thức vận hành của CL thì biện pháp khắc phục duy nhất là ngưng sử dụng dịch vụ của chúng tôi.</div><div><br></div><div>Xin quý khách lưu ý chỉ mua hàng khi chấp nhận và hiểu rõ những quy định trên. Nếu cần hỗ trợ thêm thông tin, quý khách vui lòng tham khảo tại www.CL.vn</div>\n\n\n\n', '<div>1. Mục đích và phạm vi thu thập thông tin</div><div>1.1 Việc thu thập thông tin cá nhân được thực hiện trên cơ sở khách hàng tự khai báo để đăng ký thành viên CL tại website www.CL.vn, tùy từng thời điểm, thông tin thu thập sẽ bao gồm nhưng không giới hạn ở:</div><div><br></div><div>- Thông tin cá nhân như: họ tên, giới tính, độ tuổi, số CMND.- Thông tin liên lạc như: địa chỉ, số điện thoại di động, email/fax.- Các thông tin khác phục vụ cho chương trình khách hàng thân thiết (nếu có).</div><div>1.2 Mục đích thu thập thông tin khách hàng bao gồm:</div><div><br></div><div>(i) Cung cấp các dịch vụ, sản phẩm theo nhu cầu của khách hàng;(ii) Liên hệ xác nhận khi khách hàng đăng ký sử dụng dịch vụ, xác lập giao dịch trên website www.CL.vn;(iii) Thực hiện việc quản lý website www.CL.vn, gửi thông tin cập nhật về website, các chương trình khuyến mại, ưu đãi/tri ân tới khách hàng;(iv) Bảo đảm quyền lợi của khách hàng khi phát hiện các hành động giả mạo, phá hoại tài khoản, lừa đảo khách hàng;(v) Liên lạc, hỗ trợ, giải quyết với khách hàng trong các trường hợp đặc biệt.</div><div>1.3 Để tránh nghi ngờ, trong quá trình giao dịch thanh toán tại website www.CL.vn, CL chỉ lưu giữ thông tin chi tiết về đơn hàng đã thanh toán của khách hàng, các thông tin về tài khoản ngân hàng của khách hàng sẽ không được lưu giữ.</div><div><br></div><div>2. Phạm vi sử dụng thông tin</div><div>2.1 CL chỉ sử dụng thông tin cá nhân của khách hàng cho các mục đích quy định tại Mục 1 hoặc mục đích khác (nếu có) với điều kiện đã thông báo và được sự đồng ý của khách hàng.</div><div><br></div><div>2.2 CL sẽ không sử dụng thông tin cá nhân của khách hàng để gửi quảng cáo, giới thiệu dịch vụ và các thông tin có tính thương mại khác khi chưa được khách hàng chấp thuận.</div><div><br></div><div>2.3 Khách hàng hiểu và đồng ý rằng CL có nghĩa vụ phải cung cấp thông tin khách hàng theo yêu cầu/quyết định của Cơ quan nhà nước có thẩm quyền và/hoặc quy định pháp luật. CL sẽ được miễn trừ mọi trách nhiệm liên quan đến bảo mật thông tin trong trường hợp này.</div><div><br></div><div>3. Thời gian lưu trữ thông tin</div><div>Dữ liệu cá nhân cơ bản của khách hàng đăng ký thành viên CL sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự thành viên đăng nhập và thực hiện đóng tài khoản. Đối với các tài khoản đã đóng chúng tôi vẫn lưu trữ thông tin cá nhân và truy cập của khách hàng để phục vụ cho mục đích phòng chống gian lận, điều tra, giải đáp thắc mắc ... Các thông tin này sẽ được lưu trữ trong hệ thống máy chủ tối đa mười hai (12) tháng. Hết thời hạn này, CL sẽ tiến hành xóa vĩnh viễn thông tin cá nhân của khách hàng.</div><div>4. Thông tin Công ty</div><div>CÔNG TY TNHH CJ CL VIỆT NAM (“CL”)</div><div>MST: 0303675393</div><div>Địa chỉ: Lầu 10-11, 2bis-4-6 Lê Thánh Tôn, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh</div><div>Điện thoại: 028. 3822 0333</div><div>Email: hoidap@CL.vn</div><div>5. Cách thức chỉnh sửa dữ liệu cá nhân</div><div>Để chỉnh sửa dữ liệu cá nhân của mình trên hệ thống thương mại điện tử của CL, khách hàng có thể tự đăng nhập và chỉnh sửa thông tin, dữ liệu cá nhân, ngoại trừ các thông tin về Họ tên, Giới tính, Ngày sinh và Chứng minh nhân dân.</div><div>6. CL cam kết</div><div>6.1 Mọi thông tin cá nhân của khách hàng thu thập được từ website www.CL.vn sẽ được lưu giữ an toàn; chỉ có khách hàng mới có thể truy cập vào tài khoản cá nhân của mình bằng tên đăng nhập và mật khẩu do khách hàng chọn.</div><div><br></div><div>6.2 CL cam kết bảo mật thông tin, không chia sẻ, tiết lộ, chuyển giao thông tin cá nhân của khách hàng, thông tin giao dịch trực tuyến trên website www.CL.vn cho bất kỳ bên thứ ba nào khi chưa được sự đồng ý của khách hàng, trừ trường hợp phải thực hiện theo yêu cầu của các cơ quan Nhà nước có thẩm quyền, hoặc theo quy định của pháp luật hoặc việc cung cấp thông tin đó là cần thiết để CL cung cấp dịch vụ/ tiện ích cho khách hàng</div><div><br></div><div>6.3 CL, bằng nỗ lực tốt nhất của mình, sẽ áp dụng các giải pháp công nghệ để ngăn chặn các hành vi đánh cắp hoặc tiếp cận thông tin trái phép; sử dụng, thay đổi hoặc phá hủy thông tin trái phép. Tuy nhiên, CL không thể cam kết sẽ ngăn chặn được tất cả các hành vi xâm phạm, sử dụng thông tin cá nhân trái phép nằm ngoài khả năng kiểm soát của CL. CL sẽ không chịu trách nhiệm dưới bất kỳ hình thức nào đối với bất kỳ khiếu nại, tranh chấp hoặc thiệt hại nào phát sinh từ hoặc liên quan đến việc truy cập, xâm nhập, sử dụng thông tin trái phép như vậy.</div><div><br></div><div>6.4 Trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân, gây ảnh hưởng xấu đến khách hàng, CL sẽ ngay lập tức thông báo cho khách hàng và trình vụ việc cho cơ quan chức năng điều tra xử lý.</div><div><br></div><div>6.5 Đối với các giao dịch trực tuyến được thực hiện thông qua website www.CL.vn, CL không lưu trữ thông tin thẻ thanh toán của khách hàng. Thông tin tài khoản, thẻ thanh toán của khách hàng sẽ được các đối tác cổng thanh toán của CL bảo vệ theo tiêu chuẩn quốc tế.</div><div><br></div><div>6.6 Khách hàng có nghĩa vụ bảo mật tên đăng ký, mật khẩu và hộp thư điện tử của mình. CL sẽ không chịu trách nhiệm dưới bất kỳ hình thức nào đối với các thiệt hại, tổn thất (nếu có) do khách hàng không tuân thủ quy định bảo mật này.</div><div><br></div><div>6.7 Khách hàng tuyệt đối không được có các hành vi sử dụng công cụ, chương trình để can thiệp trái phép vào hệ thống hay làm thay dổi dữ liệu của CL. Trong trường hợp CL phát hiện khách hàng có hành vi cố tình giả mạo, gian lận, phát tán thông tin cá nhân trái phép … CL có quyền chuyển thông tin cá nhân của khách hàng cho các cơ quan có thẩm quyền để xử lý theo quy định của pháp luật.</div>\n\n\n\n', '<div>1. Quy định về thanh toán</div><div>Khách hàng có thể lựa chọn các hình thức thanh toán sau để thanh toán cho giao dịch đặt vé trên website CL- Điểm thưởng thành viên- Thẻ quà tặng CL (CL Giftcard)- Ticket Voucher- Thẻ ATM (Thẻ ghi nợ/thanh toán/trả trước nội địa)- Thẻ tín dụng thẻ, thẻ ghi nợ, thẻ trả trước quốc tế</div><div>2. Chi tiết các hình thức thanh toán</div><div>- Điểm Thưởng Thành Viên (Membership Point): Mỗi 01 điểm thưởng tương đương với 1.000 VND. Điểm thưởng này, bạn có thể sử dụng để thanh toán vé xem phim và các sản phẩm đồ ăn thức uống tại hệ thống CL toàn quốc. Khi sử dụng điểm thưởng, bạn vui lòng xuất trình thẻ thành viên để được nhân viên hỗ trợ thanh toán. Điểm thưởng được sử dụng phải từ 20 điểm trở lên.- Để kiểm tra điểm thưởng, bạn vui lòng truy cập vào mục Tài Khoản CL trên website.- Thẻ quà tặng CL (CL GiftCard): Thẻ Quà Tặng có thể được dùng để mua vé xem phim, bắp nước tại các rạp CL trên toàn quốc và có thể dùng để thanh toán khi mua vé trực tuyến. Bạn có thể mua thẻ quà tặng tại tất cả các cụm rạp CL trên toàn quốc với mệnh giá thấp nhất là 300,000 VNĐ và có giá trị sử dụng trong vòng 1 năm kể từ ngày kích hoạt.Thẻ có các mệnh giá 300,000 VNĐ, 500,000 VNĐ hoặc 1,000,000 VNĐ. Thẻ có thể nạp thêm tiền để tiếp tục sử dụng. Khách hàng vui lòng xem thêm thông tin chi tiết về thẻ quà tặng tại https://www.CL.vn/default/gift-card/.- Thẻ ATM (Thẻ ghi nợ/thanh toán /trả trước nội địa): Để thanh toán bằng thẻ ngân hàng nội địa, thẻ của khách hàng phải được đăng ký sử dụng tính năng thanh toán trực tuyến, hoặc ngân hàng điện tử của Ngân hàng. Giao dịch phải được ghi nhận thành công từ thông báo cấp phép thành công do hệ thống cổng thanh toán trả về (đảm bảo số dư/hạn mức và xác thực khách hàng theo quy định sử dụng của thẻ).- Thẻ tín dụng, thẻ thanh toán quốc tế, thẻ trả trước quốc tế: Thẻ tín dụng/ghi nợ/trả trước VISA, MasterCard, JCB, Union Pay, Amex của các Ngân hàng trong nước và nước ngoài phát hành. Giao dịch phải được ghi nhận cấp phép thành công do đúng hệ thống cổng thanh toán trả về (đảm bảo số dư/hạn mức và xác thực khách hàng theo quy định sử dụng của thẻ).- Ticket Voucher: CL áp dụng thanh toán trực tuyến đối với Ticket Voucher. Mỗi loại Voucher sẽ có giá trị quy đổi và thời hạn sử dụng khác nhau. Bạn vui lòng đọc kỹ các điều khoản sử dụng ở mặt sau Voucher để biết thêm chi tiết. Khi thanh toán trực tuyến, bạn vui lòng đăng ký mã voucher và mã PIN để thực hiện thanh toán. Xin lưu ý Ticket Voucher giấy sau khi mất lớp tráng bạc sẽ không thể đổi vé tại quầy.</div><div>3. Danh sách thẻ được chấp nhận thanh toán trực tuyến</div><div>(Cập nhật theo thông báo của nhà cung cấp dịch vụ)</div><div><br></div><div>Thẻ quốc tế:</div><div><br></div><div>- Visa- MasterCard- JCB- American Express- Union Pay</div><div>Thẻ nội địa:</div><div><br></div><div>- Ngân hàng Nông nghiệp và phát triển nông thôn - Agribank.- Ngân hàng TMCP Ngoại thương Việt Nam - Vietcombank.- Ngân hàng TMCP Đông Á – Dong A bank.- Ngân hàng TMCP Công thương Việt Nam - Vietinbank.- Ngân hàng TMCP Kỹ thương Việt Nam – Techcombank.- Ngân hàng TMCP Quốc tế Việt Nam – VIB.- Ngân hàng TMCP Tiên phong – TienphongBank.- Ngân hàng TMCP Phát triển Nhà Tp.HCM – HDBank.- Ngân hàng TMCP Sài gòn – Hà Nội – SHB.- Ngân hàng Xuất nhập khẩu Việt Nam – Eximbank.- Ngân hàng TMCP Hàng Hải Việt Nam – MSB.- Ngân hàng Việt Á - VietA Bank.- Ngân hàng Quân đội – MB.- Ngân hàng TMCP Nam Á - Nam A Bank.- Ngân hàng TMCP Sài Gòn Thương Tín – Sacombank.- Ngân Hàng TMCP Đông Nam Á – SeABank.- Ngân Hàng TMCP Đại Dương – OceanBank.- Ngân Hàng Đầu Tư và Phát triển Việt Nam – BIDV.- Ngân hàng Việt Nam Thịnh Vượng – VPBank.- Ngân Hàng TMCP Bắc Á - BAC A BANK.- Ngân hàng TMCP AN BÌNH – ABBANK.</div><div>4. Trường hợp giao dịch thanh toán không thành công</div><div>Giao dịch thanh toán không thành công có thể do nhiều nguyên nhân. Bạn tham khảo các nguyên nhân sau:</div><div><br></div><div>- Chưa đăng ký chức năng thanh toán trên Internet với Ngân hàng- Đối với thẻ Visa, MasterCard: Trong quá trình thanh toán, có thể bạn được yêu cầu nhập Mật khẩu của chương trình Verified by Visa hoặc MasterCard SecureCode... nhưng bạn đã không hoàn thành bước xác thực này.- Thẻ không đủ hạn mức/ số dư để thanh toán. Một số Ngân hàng có quy định cả hạn mức chi tiêu theo ngày cho thẻ.- Nhập sai thông tin thẻ.</div><div>Vui lòng liên hệ hotline 1900 6017 hoặc Ngân hàng phát hành thẻ để tìm hiểu nguyên nhân chính xác.</div>\n\n\n\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bapnuoc`
--

CREATE TABLE `bapnuoc` (
  `id_bapnuoc` int(11) NOT NULL,
  `namebap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detailbap` longtext COLLATE utf8_unicode_ci,
  `gia` decimal(11,0) DEFAULT NULL,
  `imagebap` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bapnuoc`
--

INSERT INTO `bapnuoc` (`id_bapnuoc`, `namebap`, `detailbap`, `gia`, `imagebap`) VALUES
(4, 'iCombo 2', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">1 BẮP (NGỌT/MẶN) + 2 NƯỚC (PEPSI/7UP/MIRINDA CAM/MIRINDA SARSI)</span>\'', '81000', 'combo.jpg'),
(5, 'i-Family 2 Food Voucher', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 12px; background-color: rgb(249, 249, 249);\">1 BẮP (NGỌT/MẶN) + 2 NƯỚC (PEPSI/7UP/MIRINDA CAM/MIRINDA SARSI</span><br>\'', '162000', 'combo.jpg'),
(6, 'i-Family 2 Voucher', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">1 BẮP (NGỌT/MẶN) + 2 NƯỚC (PEPSI/7UP/MIRINDA CAM/MIRINDA SARSI)</span><br>\'', '162000', 'combo.jpg'),
(7, 'iCombo 1 ', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 12px; background-color: rgb(249, 249, 249);\">1 BẮP (NGỌT/MẶN) + 1 NƯỚC (PEPSI/7UP/MIRINDA CAM/MIRINDA SARSI)</span>\n\n\n\n\'', '65000', 'combo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capdo`
--

CREATE TABLE `capdo` (
  `id_capdo` int(11) NOT NULL,
  `namecapdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phantram` int(11) DEFAULT NULL,
  `descriptioncapdo` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `capdo`
--

INSERT INTO `capdo` (`id_capdo`, `namecapdo`, `phantram`, `descriptioncapdo`) VALUES
(1, 'Thành viên', 1, 'Chưa có ưu đãi cho thẻ thành viên'),
(2, 'Đồng', 2, 'Được tặng giảm 5% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(3, 'Bạc', 0, 'Được tặng giảm 10% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(4, 'Vàng', 20, 'Được tăng giảm 20% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(5, 'Bạch kim', 40, 'Được tăng giảm 40% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(6, 'Kim cương', 70, 'Được tăng giảm 70% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(9, 'Vip 1', 90, 'Được tăng giảm 90% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)'),
(10, 'Vip 2', 100, 'Được tăng giảm 100% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cumrap`
--

CREATE TABLE `cumrap` (
  `idcumrap` int(11) NOT NULL,
  `namecumrap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cumrap`
--

INSERT INTO `cumrap` (`idcumrap`, `namecumrap`) VALUES
(11, 'Hậu Giang'),
(12, 'Phú Thọ'),
(14, 'Quảng Ninh'),
(13, 'Tiền Giang'),
(15, 'TP.Hồ Chí Minh'),
(9, 'Trà Vinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daodien`
--

CREATE TABLE `daodien` (
  `id_daodien` int(11) NOT NULL,
  `tendaodien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `daodien`
--

INSERT INTO `daodien` (`id_daodien`, `tendaodien`) VALUES
(8, 'Đỗ Thành An\r\n'),
(7, 'Đoàn Lê\r\n'),
(33, 'fasdfasf'),
(10, 'Hồ Quang Minh\r\n'),
(36, 'Huỳnh Đông'),
(11, 'Lê Phong Lan\r\n'),
(34, 'Lê Thiện Viễn'),
(12, 'Lưu Huỳnh\r\n'),
(13, 'Lưu Trọng Ninh\r\n'),
(3, 'Lý Hải'),
(14, 'Mai Thế Hiệp\r\n'),
(15, 'Ngô Y Linh\r\n'),
(9, 'Ngọc Hiệp (diễn viên)\r\n'),
(16, 'Nguyễn Hà Bắc\r\n'),
(17, 'Nguyễn Hồng Sến\r\n'),
(18, 'Nguyễn Khánh Dư (nghệ sĩ)\r\n'),
(19, 'Nguyễn Kim Hồng (đạo diễn)\r\n'),
(5, 'Nguyễn Quang Dũng (đạo diễn)\r\n'),
(20, 'Nguyễn Võ Nghiêm Minh\r\n'),
(22, 'Phạm Văn Khoa\r\n'),
(23, 'Phước Sang\r\n'),
(24, 'Quang Huy (nhà quản lý)\r\n'),
(25, 'Thương Tín (diễn viên)\r\n'),
(26, 'Timothy Linh Bùi\r\n'),
(35, 'Tô Gia Tuấn'),
(28, 'Văn Công Viễn\r\n'),
(32, 'Victor Vũ'),
(29, 'Việt Trinh\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienvien`
--

CREATE TABLE `dienvien` (
  `id_dienvien` int(11) NOT NULL,
  `tendienvien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienvien`
--

INSERT INTO `dienvien` (`id_dienvien`, `tendienvien`) VALUES
(7, 'Angela Phương Trinh\r\n'),
(8, 'Anh Đức\r\n'),
(6, 'Anh Tài\r\n'),
(10, 'Anh Thư\r\n'),
(15, 'Bạch Long\r\n'),
(14, 'Bùi Bài Bình\r\n'),
(12, 'Bùi Thị Thanh Mai\r\n'),
(23, 'Cao Minh Đạt\r\n'),
(22, 'Cao Mỹ Kim\r\n'),
(21, 'Cao Thái Hà\r\n'),
(20, 'Cát Tường\r\n'),
(18, 'Chi Bảo\r\n'),
(17, 'Chi Pu\r\n'),
(25, 'Chí Tài\r\n'),
(24, 'Chí Thiện\r\n'),
(26, 'Công Dương\r\n'),
(19, 'Công Ninh\r\n'),
(27, 'Diễm Liên\r\n'),
(34, 'Diễm My\r\n'),
(35, 'Diễm My 9x\r\n'),
(32, 'Diệu Nhi\r\n'),
(36, 'Don Nguyễn\r\n'),
(31, 'Dũng Nhí\r\n'),
(28, 'Dương Cẩm Lynh\r\n'),
(29, 'Dương Hoàng Anh\r\n'),
(30, 'Dustin Nguyễn\r\n'),
(33, 'Duy Khánh\r\n'),
(37, 'Đại Nghĩa\r\n'),
(43, 'Đinh Ngọc Diệp\r\n'),
(44, 'Đình Toàn\r\n'),
(40, 'Đỗ Duy Nam\r\n'),
(42, 'Đỗ Đức Thịnh\r\n'),
(38, 'Đỗ Thị Hải Yến\r\n'),
(39, 'Đông Nhi\r\n'),
(41, 'Đức Hải\r\n'),
(45, 'Hà Kiều Anh\r\n'),
(55, 'Hà Trí Quang\r\n'),
(46, 'Hải Băng\r\n'),
(47, 'Hạnh Thúy\r\n'),
(48, 'Hari Won\r\n'),
(68, 'Hiếu Hiền\r\n'),
(69, 'Hiếu Nguyễn\r\n'),
(51, 'Hồ Bích Trâm\r\n'),
(62, 'Hòa Hiệp\r\n'),
(54, 'Hoài Lâm\r\n'),
(56, 'Hoài Linh\r\n'),
(60, 'Hoàng Dũng\r\n'),
(66, 'Hoàng Oanh\r\n'),
(71, 'Hoàng Sơn\r\n'),
(53, 'Hồng Vân\r\n'),
(58, 'Hứa Minh Đạt\r\n'),
(57, 'Hứa Vĩ Văn\r\n'),
(72, 'Hùng Thuận\r\n'),
(59, 'Hữu Châu\r\n'),
(67, 'Hữu Vi\r\n'),
(61, 'Huy Khánh\r\n'),
(63, 'Huỳnh Anh\r\n'),
(70, 'Huỳnh Đông\r\n'),
(65, 'Huỳnh Kim Khánh\r\n'),
(64, 'Huỳnh Lập\r\n'),
(73, 'Johnny Trí Nguyễn\r\n'),
(74, 'Jun Phạm\r\n'),
(75, 'Jun Vũ\r\n'),
(76, 'Kathy Uyên\r\n'),
(78, 'Khả Ngân\r\n'),
(77, 'Khả Như\r\n'),
(79, 'Khánh Hiền\r\n'),
(80, 'Khánh Huyền\r\n'),
(87, 'Khổng Tú Quỳnh\r\n'),
(88, 'Khương Ngọc\r\n'),
(89, 'Kiều Minh Tuấn\r\n'),
(81, 'Kiều Oanh\r\n'),
(90, 'Kiều Trinh\r\n'),
(82, 'Kim Hiền\r\n'),
(86, 'Kim Lý\r\n'),
(83, 'Kim Ngọc\r\n'),
(91, 'Kim Ny Ngọc\r\n'),
(84, 'Kim Tuyến\r\n'),
(85, 'Kim Xuân\r\n'),
(104, 'Lâm Minh Thắng\r\n'),
(93, 'Lâm Vỹ Dạ\r\n'),
(92, 'Lan Phương\r\n'),
(94, 'Lê Bình\r\n'),
(97, 'Lê Giang\r\n'),
(95, 'Lê Hạ Anh\r\n'),
(96, 'Lê Khánh\r\n'),
(103, 'Lilly Luta\r\n'),
(98, 'Linh Huyền\r\n'),
(107, 'Lona Huỳnh / Huỳnh Hồng Loan\r\n'),
(99, 'Lương Bích Hữu\r\n'),
(106, 'Lương Mạnh Hải\r\n'),
(102, 'Lương Thế Thành\r\n'),
(105, 'Lý Hải\r\n'),
(100, 'Lý Nhã Kỳ\r\n'),
(101, 'Lý Thanh Thảo\r\n'),
(108, 'Mạc Can\r\n'),
(3, 'Mạc Văn Khoa'),
(109, 'Mai Hải Anh\r\n'),
(110, 'Mai Thu Huyền\r\n'),
(111, 'Maya\r\n'),
(115, 'Midu\r\n'),
(114, 'Minh Hằng\r\n'),
(116, 'Miu Lê\r\n'),
(112, 'Mỹ Duyên\r\n'),
(113, 'Mỹ Tâm\r\n'),
(133, 'Nam Em\r\n'),
(117, 'Ngân Khánh\r\n'),
(128, 'Ngô Kiến Huy\r\n'),
(123, 'Ngô Thanh Vân\r\n'),
(121, 'Ngọc Giàu\r\n'),
(129, 'Ngọc Thuận\r\n'),
(122, 'Ngọc Trai\r\n'),
(130, 'Nguyễn Chánh Tín\r\n'),
(124, 'Nguyễn Linh Nga\r\n'),
(131, 'Nguyễn Phi Hùng\r\n'),
(125, 'Nguyễn Thị Thu An\r\n'),
(126, 'Nguyệt Ánh\r\n'),
(118, 'Nhã Phương\r\n'),
(119, 'Nhan Phúc Vinh\r\n'),
(120, 'Nhật Kim Anh\r\n'),
(134, 'Nhi Katy\r\n'),
(127, 'Như Quỳnh\r\n'),
(132, 'Ninh Dương Lan Ngọc\r\n'),
(135, 'Oanh Kiều\r\n'),
(136, 'Ốc Thanh Vân\r\n'),
(137, 'Phan Thị Mơ\r\n'),
(138, 'Phi Huyền Trang / Trang Phi\r\n'),
(139, 'Phi Thanh Vân\r\n'),
(140, 'Phương Anh Đào\r\n'),
(142, 'Phương Thanh\r\n'),
(199, 'Phương trang'),
(141, 'Phương Trinh Jolie\r\n'),
(150, 'Quách Ngọc Ngoan\r\n'),
(151, 'Quách Ngọc Tuyên\r\n'),
(149, 'Quang Hòa\r\n'),
(148, 'Quang Sự\r\n'),
(147, 'Quang Tuấn\r\n'),
(146, 'Quốc Anh\r\n'),
(145, 'Quốc Khánh\r\n'),
(144, 'Quý Bình\r\n'),
(152, 'Sam / Sam Hà My\r\n'),
(153, 'Sơn Tùng M-TP\r\n'),
(154, 'Tâm Tít\r\n'),
(175, 'Tấn Beo\r\n'),
(176, 'Tấn Bo\r\n'),
(171, 'Tăng Thanh Hà\r\n'),
(165, 'Thái Hòa\r\n'),
(166, 'Thẩm Thúy Hằng\r\n'),
(191, 'Thanh Điền\r\n'),
(164, 'Thanh Hằng\r\n'),
(159, 'Thanh Lan\r\n'),
(192, 'Thanh Nam\r\n'),
(155, 'Thanh Nga\r\n'),
(157, 'Thanh Ngọc\r\n'),
(158, 'Thanh Quý\r\n'),
(169, 'Thanh Thức\r\n'),
(160, 'Thanh Thủy\r\n'),
(162, 'Thanh Trúc\r\n'),
(163, 'Thanh Tú\r\n'),
(183, 'Thu Trang\r\n'),
(173, 'Thúy Diễm\r\n'),
(167, 'Thùy Lâm\r\n'),
(168, 'Thùy Liên\r\n'),
(193, 'Thúy Nga\r\n'),
(184, 'Tiến Luật\r\n'),
(200, 'Tiến luật'),
(5, 'Tiến Ngô'),
(172, 'Trần Bảo Sơn\r\n'),
(178, 'Trần Bùm\r\n'),
(180, 'Trần Lực\r\n'),
(170, 'Trấn Thành\r\n'),
(189, 'Trịnh Kim Chi\r\n'),
(177, 'Trung Anh\r\n'),
(179, 'Trương Chi Trúc Diễm\r\n'),
(188, 'Trường Giang\r\n'),
(185, 'Trương Minh Cường\r\n'),
(186, 'Trương Minh Quốc Thái\r\n'),
(174, 'Trương Nam Thành\r\n'),
(156, 'Trương Ngọc Ánh\r\n'),
(187, 'Trương Thế Vinh\r\n'),
(181, 'Tự Long\r\n'),
(182, 'Tuấn Trần\r\n'),
(190, 'Tường Vi\r\n'),
(194, 'Vân Trang\r\n'),
(195, 'Việt Anh\r\n'),
(196, 'Việt Hương\r\n'),
(197, 'Việt Trinh\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienvien_listfilm`
--

CREATE TABLE `dienvien_listfilm` (
  `id_dienvien` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienvien_listfilm`
--

INSERT INTO `dienvien_listfilm` (`id_dienvien`, `id`) VALUES
(7, 90),
(7, 95),
(7, 97),
(8, 90),
(8, 91),
(32, 89),
(89, 94),
(139, 92),
(150, 89),
(196, 89),
(199, 93);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `element_of_people`
--

CREATE TABLE `element_of_people` (
  `id_loainguoi` int(11) NOT NULL,
  `loainguoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `element_of_people`
--

INSERT INTO `element_of_people` (`id_loainguoi`, `loainguoi`) VALUES
(4, 'G-Star'),
(1, 'Người lớn'),
(2, 'Sinh viên-Người cao tuổi'),
(3, 'Trẻ em');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nameevent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_event` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_event` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `event`
--

INSERT INTO `event` (`id_event`, `nameevent`, `image_event`, `content_event`) VALUES
(5, 'CAPTAIN MARVEL COMBO', '/doan/admin/image/image-event/captainmarvel_combo_240x201.png', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Đón chào Tháng 3 với sức mạnh vô song đến từ Captain Marvel.</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Combo \"chị đại\" đã sẵn sàng đón chờ bạn tại CGV.</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Chi tiết combo:</strong></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- 1 Ly Captain Marvel: 139.000đ</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- 1 Ống hút Captain Marvel: 49.000đ</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- 2 Ly Captain Marvel + 1 Bắp: 279.000đ</span></p>\n\n\n\n'),
(6, 'SJORA - NƯỚC TRÁI CÂY VỊ ĐÀO VÀ XOÀI', '/doan/admin/image/image-event/sjora_240x201.jpg', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 11pt; font-family: Calibri, sans-serif;\">Sjora – nước&nbsp;trái cây vị Đào và Xoài huyền thoại của đất nước Singapore và Malaysia nay đã có mặt tại CGV Việt Nam.</span></p><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 11pt; font-family: Calibri, sans-serif;\">Nếu ai đã từng ghé thăm đất nước Sư tử đều sẽ không quên được hương vị ngây ngất của dòng sản phẩm này,hãy cùng đắm chìm trong vị tươi mát và mới mẻ của sản phẩm này khi thưởng thức các phim bom tấn tại CGV nhé.</span></p>\n\n\n\n'),
(8, 'BÁNH WAFFLE - GIÒN THƠM KHÓ CƯỠNG', '/doan/admin/image/image-event/waffle_240-x-201.jpg', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Bánh nướng Waffle giòn thơm đã có mặt tại CGV .</strong></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">Bánh waffle được nhiều người yêu thích bởi không chỉ ngon, bổ dưỡng mà còn rất dễ làm với những nguyên liệu cơ bản là bột mỳ, đường, muối, trứng, sữa, bơ. Và đặc biệt hơn tại CGV, các bạn sẽ được trải nghiệm cảm giác mới lạ với 2 loại nhân ngon không cưỡng nổi :&nbsp;<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Waffle xúc xích</strong>&nbsp;và&nbsp;<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Waffle jambon phô mai</strong>.</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">Còn chần chờ gì nữa hãy cùng nhau thưởng thức sản phẩm mới này chỉ với mức giá 39,000 vnd nào!</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Lưu ý</strong>: Bánh Waffle hiện có mặt tại</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">-&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">CGV Cresent Mall</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- CGV Liberty centre point</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- CGV Vivo City</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- CGV Pearl Plaza</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">CGV&nbsp;</span>Liberty Tân Bình</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV Vincom Đồng Khởi</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV Saigonres Nguyễn Xí</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV Parkson Đồng Khởi</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV Sự Vạn Hạnh</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV IMC Trần Quang Khải</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- CGV Vincom Landmark</p>\n\n\n\n'),
(9, 'PIZZA NÓNG HỔI, VỪA THỔI VỪA ĂN', '/doan/admin/image/image-event/web_240x201_13.jpg', '\n	\n	<h2 style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 20px; font-weight: normal; color: rgb(231, 26, 15); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; line-height: 1.2; text-rendering: optimizelegibility; width: 950px; text-transform: uppercase; background-color: rgb(253, 252, 240);\"><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Sản phẩm Pizza mới được làm thủ công hoàn toàn theo phong cách Ý. Đế bánh được làm từ bột mì cao cấp để đảm bảo được chất lượng và hương vị tốt nhất. Các thành phần phủ bánh được chọn lọc kỹ lưỡng giữ nguyên hương vị tươi mới cho sản phẩm. Cà chua và phô mai được nhập khẩu từ Ý, giữ đúng nguyên bản hương vị truyền thống.</span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Sản phẩm có 3 hương vị:&nbsp;<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Hải sản</strong>;&nbsp;<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Thịt bò Teriyaki</strong>;&nbsp;<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Thịt nguội và Nấm</strong></span></span></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Giá bán chính thức:</strong></p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"></strong>- 95k (Pizza single -1 pizza)</p><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-size: 14px; text-align: justify; text-transform: none;\">- 115k (Pizza combo – 1pizza + 1 nước lớn (L)</p></h2>\n\n\n\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gheso`
--

CREATE TABLE `gheso` (
  `id_ghe` int(11) NOT NULL,
  `id_khuvuc` int(11) DEFAULT NULL,
  `tenghe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_thanhtoan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giave`
--

CREATE TABLE `giave` (
  `id_giave` int(11) NOT NULL,
  `id_loai` int(11) DEFAULT NULL,
  `id_loainguoi` int(11) DEFAULT NULL,
  `ngay` int(11) DEFAULT NULL,
  `giave` decimal(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giave`
--

INSERT INTO `giave` (`id_giave`, `id_loai`, `id_loainguoi`, `ngay`, `giave`) VALUES
(6, 22, 4, 2, '50000'),
(7, 22, 4, 4, '50000'),
(8, 22, 4, 5, '50000'),
(9, 22, 1, 2, '60000'),
(10, 22, 1, 4, '60000'),
(11, 22, 1, 5, '60000'),
(17, 22, 2, 2, '45000'),
(18, 22, 2, 3, '45000'),
(19, 22, 2, 4, '45000'),
(20, 22, 2, 5, '45000'),
(21, 22, 2, 6, '45000'),
(22, 22, 3, 2, '45000'),
(23, 22, 3, 3, '45000'),
(24, 22, 3, 4, '45000'),
(25, 22, 3, 5, '45000'),
(26, 22, 3, 6, '45000'),
(27, 22, 4, 7, '60000'),
(28, 22, 4, 8, '60000'),
(29, 22, 1, 7, '80000'),
(30, 22, 1, 8, '80000'),
(31, 22, 2, 7, '60000'),
(32, 22, 2, 8, '60000'),
(33, 22, 3, 7, '55000'),
(34, 22, 3, 8, '55000'),
(35, 25, 4, 2, '90000'),
(36, 25, 4, 3, '90000'),
(37, 25, 4, 4, '90000'),
(38, 25, 4, 5, '90000'),
(39, 25, 4, 6, '90000'),
(40, 25, 4, 7, '90000'),
(41, 25, 4, 8, '90000'),
(42, 25, 1, 2, '90000'),
(43, 25, 1, 3, '90000'),
(44, 25, 1, 4, '90000'),
(45, 25, 1, 5, '90000'),
(46, 25, 1, 6, '90000'),
(47, 25, 1, 7, '90000'),
(48, 25, 1, 8, '90000'),
(49, 25, 2, 2, '90000'),
(50, 25, 2, 3, '90000'),
(51, 25, 2, 4, '90000'),
(52, 25, 2, 5, '90000'),
(53, 25, 2, 6, '90000'),
(54, 25, 2, 7, '90000'),
(55, 25, 2, 8, '90000'),
(56, 25, 3, 2, '90000'),
(57, 25, 3, 3, '90000'),
(58, 25, 3, 4, '90000'),
(59, 25, 3, 5, '90000'),
(60, 25, 3, 6, '90000'),
(61, 25, 3, 7, '90000'),
(62, 25, 3, 8, '90000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichchieuphim`
--

CREATE TABLE `lichchieuphim` (
  `id_khuvuc` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `giochieuphim` int(11) NOT NULL,
  `ngaychieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichchieuphim`
--

INSERT INTO `lichchieuphim` (`id_khuvuc`, `id`, `giochieuphim`, `ngaychieu`) VALUES
(10, 89, 405, '2019-05-01'),
(11, 89, 328, '2019-05-01'),
(13, 89, 275, '2019-05-01'),
(14, 89, 237, '2019-05-01'),
(7, 90, 332, '2019-05-01'),
(9, 90, 197, '2019-05-01'),
(13, 90, 562, '2019-05-01'),
(14, 90, 474, '2019-05-01'),
(7, 91, 462, '2019-05-01'),
(10, 91, 120, '2019-05-01'),
(11, 91, 448, '2019-05-01'),
(9, 92, 517, '2019-05-01'),
(10, 92, 528, '2019-05-01'),
(11, 92, 113, '2019-05-01'),
(11, 92, 601, '2019-05-01'),
(7, 93, 572, '2019-05-01'),
(13, 93, 110, '2019-05-01'),
(14, 93, 594, '2019-05-01'),
(14, 94, 102, '2019-05-01'),
(9, 95, 655, '2019-05-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listfilm`
--

CREATE TABLE `listfilm` (
  `id` int(11) NOT NULL,
  `namefilm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoiluong` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ngaykhoichieu` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `contentfilm` longtext COLLATE utf8_unicode_ci NOT NULL,
  `anhdaidien` longtext COLLATE utf8_unicode_ci NOT NULL,
  `trailer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ngonngu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `daodien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `listfilm`
--

INSERT INTO `listfilm` (`id`, `namefilm`, `thoiluong`, `ngaykhoichieu`, `ngayketthuc`, `contentfilm`, `anhdaidien`, `trailer`, `id_loai`, `ngonngu`, `daodien`) VALUES
(89, 'VU QUY ĐẠI NÁO', '110', '2019-05-01', '2019-06-01', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Trước sức ép lấy chồng của gia đình, Trang và Hiền đã quyết định bỏ trốn. Mặt khác, để kiếm tiền mưu sinh, hai cô gái ế quyết định nhận tổ chức tiệc cưới. Với sự chung tay của cậu bạn thân Hoàng, ca sĩ Tài, dì Hai chủ nhà - Một ekip&nbsp;tổ chức đám cưới độc nhất vô nhị được ra đời.</span>\n\n\n\n\'', '/doan/admin/image/image-film/vuquydainao2_1547113140821.jpg', 'vuquydainao.mp4', 22, 'VIET NAM\n', 34),
(90, 'AVENGERS: ENDGAME', '182', '2019-05-01', '2019-06-01', '\'<span style=\"color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; background-color: rgb(253, 252, 240);\">Sau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame - tác phẩm điện ảnh đánh dấu sự khép lại sau 22 bộ phim của Marvel Studios.</span>\n\n\n\n\'', '/doan/admin/image/image-film/a4_160.jpg', 'mavel.mp4', 22, 'VIET NAM\n', 8),
(91, 'LẬT MẶT: NHÀ CÓ KHÁCH', '105', '2019-05-01', '2019-06-01', '\'<span style=\"color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; background-color: rgb(253, 252, 240);\">Lật Mặt: Nhà Có Khách xoay quanh chuyến trở về nhà ngỡ tưởng rất vui vẻ đầm ấm của Vy cùng bạn bè. Thế nhưng, một chuỗi những tai nạn và sự việc bất thường diễn ra đã đẩy tình thế của tất cả mọi người, đặc biệt là Vy vào tình thế nguy hiểm. Làm sao để có thể cứu Vy và ngăn những mối nguy hiểm tiếp theo xảy ra? Tai nạn đã xảy đến với mẹ của Vy và cậu em trai có liên quan gì đến những thế lực hiểm ác đang đeo bám tất cả mọi người?</span>\n\n\n\n\'', '/doan/admin/image/image-film/Lat-Mat-4-1-poster.jpg', 'latmat.mp4', 22, 'VIET NAM\n', 3),
(92, 'HAI PHƯỢNG', '98', '2019-05-01', '2019-06-01', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Hai Phượng kể về cuộc hành trình đầy gay cấn và gian của khi người mẹ vùng quê tìm cách cứu con mình thoát khỏi đường dây bắt cóc khổng lồ. Không tấc sắc trong tay, người phụ nữ thân cô thế cô làm sao chống lại bọn xã hội đen tàn ác để giành lại nguồn sống của đời mình?</span>\n\n\n\n\'', '/doan/admin/image/image-film/160_12_3.jpg', 'haiphuong.mp4', 22, 'VIET NAM\n', 8),
(93, 'CHỊ MƯỜI BA', '95', '2019-05-01', '2019-06-01', '\'<p class=\"ng-scope\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-family: Roboto, sans-serif; font-size: 15px; vertical-align: baseline; color: rgb(67, 70, 75); text-align: justify; background-color: rgb(255, 255, 255);\">Sau thành công của webdrama Thập Tam Muội, \"hoa hậu hài\" Thu Trang tiến công màn ảnh rộng bằng phim điện ảnh Chị Mười Ba.</p><p class=\"ng-scope\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.5; font-family: Roboto, sans-serif; font-size: 15px; vertical-align: baseline; color: rgb(67, 70, 75); text-align: justify; background-color: rgb(255, 255, 255);\">Chị Mười Ba tiếp tục kể về nhóm xã hội đen An Cư Nghĩa Đoàn do chị đại Mười Ba (Thu Trang) và đại ca Đường Băng (Tiến Luật) làm thủ lĩnh. Cả hai phải đối đầu cùng đối thủ bí ẩn- đại ca Hắc Hổ. Hắn chính là kẻ bảo kê cho Bi Long (Khương Ngọc) quậy phá suốt bấy lâu nay.</p>\n\n\n\n\'', '/doan/admin/image/image-film/1-1548904223401692986772.jpg', 'chimuoiba.mp4', 22, 'VIET NAM\n', 35),
(94, 'HẠNH PHÚC CỦA MẸ', '87', '2019-05-01', '2019-06-01', '\'<span style=\"color: rgb(67, 70, 75); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Phim kể về câu chuyện đầy cảm động của người mẹ đơn thân, nghèo khó và nhiều bệnh tật Tuệ giúp con trai Tim mắc hội chứng tự kỷ mạnh dạn theo đuổi ước mơ của cuộc đời mình…</span>\n\n\n\n\'', '/doan/admin/image/image-film/406_14_2.jpg', 'hanhphuccuame.mp4', 22, 'VIET NAM\n', 36),
(95, 'Đại Úy Marvel', '123', '2019-05-01', '2019-06-01', '\'<span style=\"background-color: rgb(251, 251, 251);\"><b><span style=\"color: rgb(187, 187, 187); font-family: arial; font-size: 13px;\">Lấy bối cảnh những năm 90s,&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(187, 187, 187); font-family: arial; font-size: 13px;\">Captain Marvel</span><span style=\"color: rgb(187, 187, 187); font-family: arial; font-size: 13px;\">&nbsp;là một cuộc phiêu lưu hoàn toàn mới đến với một thời kỳ chưa từng xuất hiện trong vũ trụ điện ảnh Marvel. Bộ phim kể về con đường trở thành siêu anh hùng mạnh mẽ nhất vũ trụ của Carol Danvers. Bên cạnh đó, trận chiến ảnh hưởng đến toàn vũ trụ giữa tộc Kree và tộc Skrull đã lan đến Trái Đất, liệu Danvers và các đồng minh có thể ngăn chặn binh đoàn Skrull cũng như các thảm họa tương lai?</span></b></span>\n\n\n\n\'', '/doan/admin/image/image-film/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg', 'captain-marvel.mp4', 22, 'AUSTRALIA\n', 8),
(97, 'LẬT MẶT: NHÀ CÓ KHÁCH 1', '1', '2019-05-03', '2019-06-01', '\'\n\n\n\n\'', '/doan/admin/image/image-film/1-1548904223401692986772.jpg', 'captain-marvel.mp4', 22, 'UNITED ARAB EMIRATES\n', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaive`
--

CREATE TABLE `loaive` (
  `id_loai` int(11) NOT NULL,
  `tenloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaive`
--

INSERT INTO `loaive` (`id_loai`, `tenloai`, `image`) VALUES
(22, '2D', '/doan/admin/image/image-loaive/2d_1539069218310.png'),
(25, '3D', '/doan/admin/image/image-loaive/3dcm_1539069225141.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moofcard` int(11) NOT NULL,
  `diemtichluy` int(11) NOT NULL,
  `tongchitieu` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `phone`, `email`, `moofcard`, `diemtichluy`, `tongchitieu`) VALUES
(21, 'Bùi thị hương', '1', '0932688659', 'huong@gmail.com', 492460800, 73, '1690000'),
(22, 'sadfasf', 'as', '0932688659', 'vuyeuai_008@yahoo.com', 500000, 0, '0'),
(23, 'Vũ đào', '123456', '0932688659', 'linkthuy9@gmail.com', 500000, 0, '0'),
(65, 'dao vu', '1', '0932688659', 'vuyeuai_009@yahoo.com', 5000000, 0, '0'),
(84, 'dao vu', '1', '0932688659', 'vuyeuai_007@yahoo.com', 500000, 0, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pr`
--

CREATE TABLE `pr` (
  `id_pr` int(11) NOT NULL,
  `namepr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentpr` longtext COLLATE utf8_unicode_ci,
  `imagepr` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pr`
--

INSERT INTO `pr` (`id_pr`, `namepr`, `contentpr`, `imagepr`) VALUES
(3, 'THỬ THÁCH 100', '\n	\n		\n	\n		<div>Hoàn thành thử thách 100 VÉ trên “đường đua” gay cấn nhất tại CL từ trước đến nay để nhận ngay cơn bão quà tặng hấp dẫn khi cán đích tại mỗi chặng đua:&nbsp;&nbsp;</div><div><br></div><div>* Chặng 1: Mua đủ 20 vé, nhận ngay 01 CL COMBO</div><div><br></div><div>* Chặng 2: Mua đủ 50 vé, nhận ngay 01 vé 2D miễn phí</div><div><br></div><div>* Chặng 3: Mua đủ 70 vé, nhận ngay 01 MOVIE COMBO&nbsp;</div><div><br></div><div>* Về đích: Mua đủ 100 vé, nhận ngạy 01 ONE DAY PASS – tấm vé đặc quyền xem phim KHÔNG GIỚI HẠN trong vòng 24 giờ.</div><div><br></div><div>Đặc biệt: Các quán quân hoàn thành đường đua sẽ trở thành những VVIP đầu tiên của năm 2020!</div><div><br></div><div>THAM GIA NGAY!&nbsp;</div><div><br></div><div>&nbsp;</div><div><br></div><div>Điều kiện áp dụng</div><div><br></div><div>- Vé hợp lệ là các vé phát sinh trong thời gian khuyến mãi từ 01/1 – 31/12/2019.</div><div><br></div><div>- Không áp dụng cho vé U22 và Lateshow, các vé ưu đãi miễn phí (vé ưu đãi sinh nhật, vé ưu đãi VIP/VVIP, vé ưu đãi COUPON/VOUCHER) và các vé thanh toán bằng điểm thưởng/coupon/vouchers.</div><div><br></div><div>- Không áp dụng khi khách hàng mua GROUP SALE/PRIVATE SHOW.</div><div><br></div><div>- Danh sách khách hàng mua đủ số vé theo thể lệ chương trình sẽ được tổng kết theo tháng (tính đến hết ngày cuối cùng của tháng). Các phần quà sẽ được gắn vào tài khoản thành viên của khách vào NGÀY 5 HÀNG THÁNG. (HSD: 1 tháng kể từ ngày được ghi nhận).</div><div><br></div><div>&nbsp;Lưu ý: đối với Tháng 2, ưu đãi sẽ được gắn vào tài khoản thành viên khách hàng vào ngày&nbsp; 15/2/2019.</div><div><br></div><div>- Khách hàng chỉ có thể đổi các phần quà, bao gồm CL COMBO, vé 2D, MOVIE COMBO trực tiếp tại quầy ở tất cả các rạp CL trên toàn quốc.</div><div><br></div><div>- Phần CL COMBO bao gồm 01 bắp lớn 44oz vị mặn/ngọt &amp; 02 nước lớn 22oz</div><div><br></div><div>- Vé 2D MIỄN PHÍ áp dụng cho tất cả các ngày trong tuần, không áp dụng Lễ/Tết, Sneak Show hoặc Early release.</div><div><br></div><div>- Phần MOVIE COMBO bao gồm 01 ly nước theo phim kèm 01 bắp lớn 44oz</div><div><br></div><div>Lưu ý:</div><div><br></div><div>- Danh sách Movie Combo sẽ được cập nhật theo tháng:</div><div><br></div><div>+ Tháng 1 (HSD:18/2 - 17/3): Combo Bumblebee &amp; Grinch.&nbsp;</div><div><br></div><div>+ Tháng 2 (HSD: 6/3-5/4): Combo Bumblebee, Grinch, Combo Wreck-it Ralph 2 &amp; Wonder Park</div><div><br></div><div>+ Tháng 3 (HSD: 5/4-5/5): Combo Bumblebee, Grinch, Wreck-it Ralph 2, Captain Marvel &amp; Wonder Park&nbsp;</div><div><br></div><div>- Vé ONE DAY PASS:</div><div><br></div><div>+ Áp dụng cho 01 người xem phim không giới hạn cho tất cả các suất chiếu và phòng chiếu của CL trong 1 ngày (không áp dụng GOLD CLASS/PREMIUM/SWEETBOX/L’AMOUR/4DX).</div><div><br></div><div>+ Khách hàng được tùy ý lựa chọn 1 ngày để sử dụng vé ONE DAY PASS với điều kiện ngày sử dụng vẫn nằm trong thời hạn sử dụng.</div><div><br></div><div>+ ONE DAY PASS được kích hoạt trong ngày nào thì khách hàng chỉ được đặt vé cho các suất chiếu trong ngày đó.&nbsp;</div><div>(Ví dụ: khách hàng A bắt đầu sử dụng ONE DAY PASS vào ngày 11/3/2019, thì chỉ có thể đặt vé cho các suất chiếu trong ngày 11/3/2019)</div><div><br></div><div>+ ONE DAY PASS được áp dụng vào các ngày trong tuần, bao gồm ngày Lễ/ Tết.</div><div><br></div><div>+ Thời hạn sử dụng: 1 tháng kể từ ngày ONE DAY PASS được ghi nhận.</div><div><br></div><div>+ Chỉ áp dụng trực tiếp tại quầy.</div><div><br></div><div>+ Chỉ áp dụng cho 01 người là chủ tài khoản thành viên thỏa điều kiện chương trình.</div><div><br></div><div>+ Khách hàng chỉ có thể đặt vé cho suất chiếu tiếp theo sau khi suất chiếu xem trước đó đã kết thúc</div><div><br></div><div>- Hạng thàng viên VVIP 2020: sẽ được áp dụng từ ngày 1/1/2020 - 31/12/2020.</div>\n\n\n\n	\n	\n', '/doan/admin/image/image-quangcao/980_11.jpg'),
(4, 'BẠN CŨ ƠI, CUỐI TUẦN MUA VÉ CGV QUA ZALOPAY: 79.000Đ/VÉ', '\n	\n		<div>BẠN CŨ ƠI, CUỐI TUẦN MUA VÉ CL QUA ZALOPAY: 79.000Đ/VÉ</div><div><br></div><div>- Thời gian: 10h sáng 18/04/2019 –&nbsp; 23h59 ngày 31/08/2019 (áp dụng thứ 5, thứ 6, thứ 7 &amp; Chủ nhật)</div><div><br></div><div>- Địa điểm sử dụng: Toàn quốc</div><div><br></div><div>Cuối tuần tưng bừng xem phim với giá “hot” hơn loạt bom tấn đang cận kề. Chỉ 79.000đ/vé CL khi bạn thanh toán qua ZaloPay!</div><div><br></div><div>Đối tượng nhận ưu đãi:</div><div><br></div><div>- Áp dụng cho những người bạn cũ, từng có ít nhất 01 giao dịch thanh toán qua ZaloPay.</div><div><br></div><div>- Áp dụng 2 vé/tuần với mức giá 79.000đ/vé khi mua vào THỨ 5, THỨ 6, THỨ 7, CHỦ NHẬT trong suốt thời gian diễn ra chương trình.</div><div><br></div><div><br></div><div>Cách thức tham gia:</div><div><br></div><div>- Bước 1: Tải/ cập nhật ứng dụng ZaloPay phiên bản mới nhất (từ 4.6.1 trở lên).</div><div><br></div><div>- Bước 2: Nạp tiền vào ví từ thẻ/ tài khoản liên kết với ZaloPay.</div><div><br></div><div>- Bước 3: Thanh toán đơn hàng mua vé phim tại web/app của rạp CL, chọn thanh toán bằng ZaloPay.</div><div><br></div><div>- Bước 4: Trên ứng dụng ZaloPay, kiểm tra giá trị đơn hàng trước và sau giảm giá. Sau đó, xác nhận thanh toán đơn hàng.</div><div><br></div><div><br></div><div>QUI ĐỊNH CHUNG:</div><div><br></div><div>- Cập nhật ZaloPay phiên bản mới nhất! Từ 4.6.1 trở lên.</div><div><br></div><div>- Áp dụng cho nguồn tiền từ ví hoặc thẻ/tk ngân hàng liên kết với ZaloPay.</div><div><br></div><div>- Thanh toán trực tiếp áp dụng cho đơn hàng từ 10.000đ trở lên. Riêng Vietcombank là từ 100.000đ.</div><div><br></div><div>- Mỗi bạn khách hàng/tài khoản tài khoản ZaloPay/mỗi thiết bị/mỗi email đăng ký tài khoản (đối với CL) chỉ được mua tối đa 2 vé/tuần trong suốt thời gian diễn ra chương trình.</div><div><br></div><div>- Áp dụng các suất chiếu thứ 5, thứ 6, thứ 7, chủ nhật hàng tuần.</div><div><br></div><div>- Khuyến mãi áp dụng cho suất chiếu tại Rạp 2D của CL (ghế Standard, ghế VIP).</div><div><br></div><div>- KHÔNG áp dụng ghế Sweetbox, Deluxe. KHÔNG áp dụng cho các Suất chiếu sớm/ Suất chiếu đặc biệt/ Suất chiếu 2D trong phòng chiếu đặc biệt HOẶC các phòng chiếu như: IMAX, 4DX, GOLD GLASS, STARIUM, L’AMOUR….</div><div><br></div><div>- Khuyến mãi không áp dụng đồng thời với các CT khuyến mãi khác.</div><div><br></div><div>- Không áp dụng thẻ ảo, thẻ prepaid và các thẻ có dấu hiệu đầu cơ, gian lận.</div><div><br></div><div>- Chương trình có thể kết thúc trước thời hạn nếu hết ngân sách khuyến mãi hoặc tạm dừng nếu có dấu hiệu gian lận, đầu cơ.</div><div><br></div><div>- Chương trình này không hỗ trợ các giao dịch hủy, đổi trả đối với các đơn hàng đã thanh toán thành công.</div><div><br></div><div>- Khi thanh toán, nếu khách hàng KHÔNG được giảm giá vui lòng gọi Hotline: 1900 54 54 36 để nhận hướng dẫn trước khi xác nhận thanh toán</div><div><br></div><div><br></div><div>Thông tin liên hệ:</div><div><br></div><div>Hotline: 1900 54 54 36</div><div><br></div><div>Email: hotro@zalopay.vn</div>\n\n\n\n	\n', '/doan/admin/image/image-quangcao/big_banner_web_cgv_79k_1242x598.png'),
(6, 'SĂN ĐIỂM KHỦNG TẠI CGV', '\'<p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">Thời gian: 25/3 – 11/8/2019</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Xem trọn 5 phim DISNEY &amp; MARVEL STUDIOS’, nhận ngay 130 điểm thưởng từ CGV!</strong></p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Xem 2 phim đầu tiên, nhận ngay 30 điểm</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Xem 3 phim tiếp theo, nhận ngay 100 điểm</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Áp dụng chọ các phim sau:</strong></p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">DUMBO (29/3)</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">AVENGERS: END GAME (26/4)</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">ALADIN (24/5)</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">TOYS STORY 4 (21/6)</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">THE LION KING (19/7)</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: red;\">Điều kiện áp dụng:</span></strong></p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Chỉ áp dụng cho thành viên CGV.</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Áp dụng tại các rạp CGV trên toàn quốc.</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Vé hợp lệ là các vé phát sinh trong thời gian 25/3 – 11/8/2019</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Mỗi phim phải mua ít nhất 2 vé.</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Không áp dụng cho các vé miễn phí &nbsp;(vé ưu đãi sinh nhật/vé ưu đãi VIP/VVIP, coupon, voucher) &nbsp;</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">-&nbsp;Không áp dụng các vé thanh toán 100% bằng điểm thưởng.</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Khách hàng thỏa điều kiện chương trình sẽ nhận được 1 tin nhắn xác nhận từ tổng đài CGV vào ngày 21/5 và 13/8/2019</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">- Điểm thưởng sẽ được cộng vào tài khoản thành viên của khách hàng thỏa điều kiện vào 2 đợt:</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">&nbsp; &nbsp; &nbsp; Đợt 1: &nbsp;22/5/2019</p><p class=\"MsoNormal\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(253, 252, 240);\">&nbsp; &nbsp; &nbsp; Đợt 2: 14/8/2019&nbsp;</p>\n\n\n\n\'', '/doan/admin/image/image-quangcao/980x448_57.png'),
(7, 'Galaxy Tràng Thi: Trải Nghiệm Bom Tấn Càng Đông Càng Vui', '\'<div>CL Tràng Thi là cụm rạp thuộc CL Cinema, tọa lạc ở vị trí ở đắc địa (Tầng 4 tòa nhà Nguyễn Kim, 10B Tràng Thi, Hoàn Kiếm, Hà Nội) – Nơi tập trung nhiều địa điểm vui chơi giải trí hàng đầu của giới trẻ thủ đô. Cụm rạp này chính thức đi vào hoạt động từ ngày 27.04.2019. Đây cũng là thời điểm “đổ bộ” của loạt bom tấn đến từ trong và ngoài nước, điển hình như: Avengers: Endgame, Lật Mặt: Nhà Có Khách, Aladdin... Vậy còn gì tuyệt vời hơn khi có thể thưởng thức loạt bom tấn đỉnh cao mà không lo “cháy túi”?!</div><div><br></div><div>Nhân dịp khai trương cụm rạp CL Tràng Thi, CL Cinema dành tặng các Stars hai chương trình ưu đãi đầy hấp dẫn không thể bỏ qua trong thời gian từ 27.04 – 03.05.2019.</div><div><br></div><div>Cụ thể, khi các Stars mua 02 vé xem phim tại CL Tràng Thi (Bao gồm: Mua trực tiếp tại quầy và online) sẽ nhận được 01 Movie voucher.</div><div><br></div><div>Điều kiện áp dụng:</div><div><br></div><div>Chương trình chỉ áp dụng cho thành viên Gstar</div><div>Chương trình không áp dụng cho Movie voucher</div><div>Trong mọi trường hợp, quyết định của CL Cinema là quyết định cuối cùng.</div><div>Đối với Movie voucher được tặng:</div><div><br></div><div>Movie voucher có thời hạn sử dụng từ ngày 13.05 – 13.06.2019</div><div>Movie voucher chỉ được áp dụng cho giao dịch trực tiếp tại quầy vé và khi mua kèm với 01 vé xem phim cùng suất chiếu</div><div>Mỗi giao dịch chỉ được sử dụng tối đa 01 movie voucher</div><div>01 Movie voucher có giá trị tương ứng với 01 vé xem phim 2D</div><div>Movie voucher không áp dụng trong ngày lễ, Tết, ngày Tri ân, Happy Day và các suất chiếu sớm</div><div>Movie voucher không có giá trị khi bị rách, tẩy xoá, hư hỏng hoặc không có đóng dấu;</div><div>Voucher không có giá trị quy đổi thành tiền mặt.</div>\n\n\n\n\'', '/doan/admin/image/image-quangcao/banner-2048x682--m2t1_1555577648872.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapchieuphim`
--

CREATE TABLE `rapchieuphim` (
  `idrap` int(11) NOT NULL,
  `namerap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Addressrap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thanhpho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_daidien` longtext COLLATE utf8_unicode_ci,
  `ngaymorap` date DEFAULT NULL,
  `idcumrap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rapchieuphim`
--

INSERT INTO `rapchieuphim` (`idrap`, `namerap`, `Addressrap`, `quan`, `thanhpho`, `image_daidien`, `ngaymorap`, `idcumrap`) VALUES
(1, 'CGV Hùng Vương Plaza', 'Tầng 7 | Hùng Vương Plaza 126 Hùng Vương', 'Quận 5', 'Tp. Hồ Chí Minh', '/doan/admin/image/image-rapchieuphim/img_0027_2a_2_1.jpg', '2019-04-30', 15),
(2, 'asdfa', 'asdfas', 'fasdfasf', 'asdfsaf', '/doan/admin/image/image-rapchieuphim/img_0027_2a_2_1.jpg', '2019-04-30', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapchieuphim_khuvucchieu`
--

CREATE TABLE `rapchieuphim_khuvucchieu` (
  `id_khuvuc` int(11) NOT NULL,
  `name_khuvuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idrap` int(11) DEFAULT NULL,
  `soluonghangghe` int(11) DEFAULT NULL,
  `maxofghe` int(11) DEFAULT NULL,
  `sumofghe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rapchieuphim_khuvucchieu`
--

INSERT INTO `rapchieuphim_khuvucchieu` (`id_khuvuc`, `name_khuvuc`, `idrap`, `soluonghangghe`, `maxofghe`, `sumofghe`) VALUES
(7, 'Rạp 1', 1, 16, 16, 256),
(9, 'Rạp 3', 1, 16, 16, 256),
(10, 'Rạp 4', 1, 16, 16, 256),
(11, 'Rạp 5', 1, 16, 16, 256),
(13, 'Rạp 6', 1, 16, 16, 256),
(14, 'Rạp 7', 1, 16, 16, 256);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapchieuphim_listfilm`
--

CREATE TABLE `rapchieuphim_listfilm` (
  `id` int(11) NOT NULL,
  `idrap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_thanhtoan` int(11) NOT NULL,
  `nameuser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneuser` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `namefilm` longtext COLLATE utf8_unicode_ci,
  `idfilm` int(11) NOT NULL,
  `rapchieuphim` longtext COLLATE utf8_unicode_ci,
  `khuvucchieu` longtext COLLATE utf8_unicode_ci,
  `thoiluongfilm` int(11) DEFAULT NULL,
  `soluongve` int(11) DEFAULT NULL,
  `tongtienve` decimal(10,0) DEFAULT NULL,
  `tongtienbapnuoc` decimal(10,0) DEFAULT NULL,
  `tongtatca` decimal(10,0) DEFAULT NULL,
  `giochieuphim` int(11) DEFAULT NULL,
  `ngaychieuphim` date DEFAULT NULL,
  `ngaythanhtoan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan_bapnuoc`
--

CREATE TABLE `thanhtoan_bapnuoc` (
  `id_thanhtoan` int(11) NOT NULL,
  `id_bapnuoc` int(11) NOT NULL,
  `soluongbapnuoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan_nguoi`
--

CREATE TABLE `thanhtoan_nguoi` (
  `id_giave` int(11) NOT NULL,
  `id_thanhtoan` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaiphim`
--

CREATE TABLE `theloaiphim` (
  `id_theloai` int(11) NOT NULL,
  `tentheloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloaiphim`
--

INSERT INTO `theloaiphim` (`id_theloai`, `tentheloai`) VALUES
(13, 'asfdsafa'),
(12, 'Chiến tranh'),
(4, 'Hài'),
(2, 'Hành động'),
(6, 'Hình sự'),
(5, 'Hoạt hình'),
(11, 'Khoa học viễn tưởng'),
(9, 'Kinh dị'),
(8, 'lịch sử,cổ trang'),
(3, 'Phiêu lưu'),
(7, 'Tâm lí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai_listfilm`
--

CREATE TABLE `theloai_listfilm` (
  `id_theloai` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai_listfilm`
--

INSERT INTO `theloai_listfilm` (`id_theloai`, `id`) VALUES
(2, 90),
(2, 92),
(2, 93),
(2, 95),
(4, 89),
(4, 91),
(4, 93),
(7, 94),
(9, 91),
(11, 90),
(13, 97);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thequatang_member`
--

CREATE TABLE `thequatang_member` (
  `id` int(11) NOT NULL,
  `id_capdo` int(11) NOT NULL,
  `action` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thequatang_member`
--

INSERT INTO `thequatang_member` (`id`, `id_capdo`, `action`) VALUES
(21, 1, b'1'),
(21, 9, b'1'),
(21, 10, b'1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bapnuoc`
--
ALTER TABLE `bapnuoc`
  ADD PRIMARY KEY (`id_bapnuoc`),
  ADD UNIQUE KEY `namebap` (`namebap`);

--
-- Chỉ mục cho bảng `capdo`
--
ALTER TABLE `capdo`
  ADD PRIMARY KEY (`id_capdo`),
  ADD UNIQUE KEY `namecapdo` (`namecapdo`);

--
-- Chỉ mục cho bảng `cumrap`
--
ALTER TABLE `cumrap`
  ADD PRIMARY KEY (`idcumrap`),
  ADD UNIQUE KEY `namecumrap` (`namecumrap`);

--
-- Chỉ mục cho bảng `daodien`
--
ALTER TABLE `daodien`
  ADD PRIMARY KEY (`id_daodien`),
  ADD UNIQUE KEY `tendaodien` (`tendaodien`);

--
-- Chỉ mục cho bảng `dienvien`
--
ALTER TABLE `dienvien`
  ADD PRIMARY KEY (`id_dienvien`),
  ADD UNIQUE KEY `tendienvien` (`tendienvien`);

--
-- Chỉ mục cho bảng `dienvien_listfilm`
--
ALTER TABLE `dienvien_listfilm`
  ADD PRIMARY KEY (`id_dienvien`,`id`),
  ADD KEY `fk_thisdienvien_listfilm` (`id`);

--
-- Chỉ mục cho bảng `element_of_people`
--
ALTER TABLE `element_of_people`
  ADD PRIMARY KEY (`id_loainguoi`),
  ADD UNIQUE KEY `loainguoi` (`loainguoi`);

--
-- Chỉ mục cho bảng `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `nameevent` (`nameevent`);

--
-- Chỉ mục cho bảng `gheso`
--
ALTER TABLE `gheso`
  ADD PRIMARY KEY (`id_ghe`),
  ADD KEY `fk_gheso_thanhtoan` (`id_thanhtoan`),
  ADD KEY `fk_gheso_khuvuc` (`id_khuvuc`);

--
-- Chỉ mục cho bảng `giave`
--
ALTER TABLE `giave`
  ADD PRIMARY KEY (`id_giave`),
  ADD KEY `fk_giave_loaive` (`id_loai`),
  ADD KEY `fk_giave_people` (`id_loainguoi`);

--
-- Chỉ mục cho bảng `lichchieuphim`
--
ALTER TABLE `lichchieuphim`
  ADD PRIMARY KEY (`id_khuvuc`,`giochieuphim`,`ngaychieu`),
  ADD KEY `fk_lichchieuphim_listfilm` (`id`);

--
-- Chỉ mục cho bảng `listfilm`
--
ALTER TABLE `listfilm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `namefilm` (`namefilm`),
  ADD KEY `fk_listfilm_loaive` (`id_loai`),
  ADD KEY `fk_listfilm_daodien` (`daodien`);

--
-- Chỉ mục cho bảng `loaive`
--
ALTER TABLE `loaive`
  ADD PRIMARY KEY (`id_loai`),
  ADD UNIQUE KEY `tenloai` (`tenloai`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`id_pr`),
  ADD UNIQUE KEY `namepr` (`namepr`);

--
-- Chỉ mục cho bảng `rapchieuphim`
--
ALTER TABLE `rapchieuphim`
  ADD PRIMARY KEY (`idrap`),
  ADD UNIQUE KEY `namerap` (`namerap`),
  ADD KEY `fk_rapchieuphim_cumrap` (`idcumrap`);

--
-- Chỉ mục cho bảng `rapchieuphim_khuvucchieu`
--
ALTER TABLE `rapchieuphim_khuvucchieu`
  ADD PRIMARY KEY (`id_khuvuc`),
  ADD UNIQUE KEY `name_khuvuc` (`name_khuvuc`,`idrap`),
  ADD KEY `fk_khuvucchieu_rapchieuphim` (`idrap`);

--
-- Chỉ mục cho bảng `rapchieuphim_listfilm`
--
ALTER TABLE `rapchieuphim_listfilm`
  ADD PRIMARY KEY (`id`,`idrap`),
  ADD KEY `fk_this_rapchieuphim` (`idrap`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_thanhtoan`);

--
-- Chỉ mục cho bảng `thanhtoan_bapnuoc`
--
ALTER TABLE `thanhtoan_bapnuoc`
  ADD PRIMARY KEY (`id_thanhtoan`,`id_bapnuoc`),
  ADD KEY `fk_this_bapnuoc` (`id_bapnuoc`);

--
-- Chỉ mục cho bảng `thanhtoan_nguoi`
--
ALTER TABLE `thanhtoan_nguoi`
  ADD PRIMARY KEY (`id_giave`,`id_thanhtoan`),
  ADD KEY `fk_thanhtoannguoi_thanhtoan` (`id_thanhtoan`);

--
-- Chỉ mục cho bảng `theloaiphim`
--
ALTER TABLE `theloaiphim`
  ADD PRIMARY KEY (`id_theloai`),
  ADD UNIQUE KEY `tentheloai` (`tentheloai`);

--
-- Chỉ mục cho bảng `theloai_listfilm`
--
ALTER TABLE `theloai_listfilm`
  ADD PRIMARY KEY (`id_theloai`,`id`),
  ADD KEY `fk_thistheloai_listfilm` (`id`);

--
-- Chỉ mục cho bảng `thequatang_member`
--
ALTER TABLE `thequatang_member`
  ADD PRIMARY KEY (`id`,`id_capdo`),
  ADD KEY `fk_thequatang_capdo` (`id_capdo`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bapnuoc`
--
ALTER TABLE `bapnuoc`
  MODIFY `id_bapnuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `capdo`
--
ALTER TABLE `capdo`
  MODIFY `id_capdo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cumrap`
--
ALTER TABLE `cumrap`
  MODIFY `idcumrap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `daodien`
--
ALTER TABLE `daodien`
  MODIFY `id_daodien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `dienvien`
--
ALTER TABLE `dienvien`
  MODIFY `id_dienvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT cho bảng `element_of_people`
--
ALTER TABLE `element_of_people`
  MODIFY `id_loainguoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `gheso`
--
ALTER TABLE `gheso`
  MODIFY `id_ghe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giave`
--
ALTER TABLE `giave`
  MODIFY `id_giave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `listfilm`
--
ALTER TABLE `listfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `loaive`
--
ALTER TABLE `loaive`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `pr`
--
ALTER TABLE `pr`
  MODIFY `id_pr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `rapchieuphim`
--
ALTER TABLE `rapchieuphim`
  MODIFY `idrap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `rapchieuphim_khuvucchieu`
--
ALTER TABLE `rapchieuphim_khuvucchieu`
  MODIFY `id_khuvuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_thanhtoan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `theloaiphim`
--
ALTER TABLE `theloaiphim`
  MODIFY `id_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dienvien_listfilm`
--
ALTER TABLE `dienvien_listfilm`
  ADD CONSTRAINT `fk_thisdienvien2_dienvien` FOREIGN KEY (`id_dienvien`) REFERENCES `dienvien` (`id_dienvien`),
  ADD CONSTRAINT `fk_thisdienvien_listfilm` FOREIGN KEY (`id`) REFERENCES `listfilm` (`id`);

--
-- Các ràng buộc cho bảng `gheso`
--
ALTER TABLE `gheso`
  ADD CONSTRAINT `fk_gheso_khuvuc` FOREIGN KEY (`id_khuvuc`) REFERENCES `rapchieuphim_khuvucchieu` (`id_khuvuc`),
  ADD CONSTRAINT `fk_gheso_thanhtoan` FOREIGN KEY (`id_thanhtoan`) REFERENCES `thanhtoan` (`id_thanhtoan`);

--
-- Các ràng buộc cho bảng `giave`
--
ALTER TABLE `giave`
  ADD CONSTRAINT `fk_giave_loaive` FOREIGN KEY (`id_loai`) REFERENCES `loaive` (`id_loai`),
  ADD CONSTRAINT `fk_giave_people` FOREIGN KEY (`id_loainguoi`) REFERENCES `element_of_people` (`id_loainguoi`);

--
-- Các ràng buộc cho bảng `lichchieuphim`
--
ALTER TABLE `lichchieuphim`
  ADD CONSTRAINT `fk_lichchieuphim_khuvuc` FOREIGN KEY (`id_khuvuc`) REFERENCES `rapchieuphim_khuvucchieu` (`id_khuvuc`),
  ADD CONSTRAINT `fk_lichchieuphim_listfilm` FOREIGN KEY (`id`) REFERENCES `listfilm` (`id`);

--
-- Các ràng buộc cho bảng `listfilm`
--
ALTER TABLE `listfilm`
  ADD CONSTRAINT `fk_listfilm_daodien` FOREIGN KEY (`daodien`) REFERENCES `daodien` (`id_daodien`),
  ADD CONSTRAINT `fk_listfilm_loaive` FOREIGN KEY (`id_loai`) REFERENCES `loaive` (`id_loai`);

--
-- Các ràng buộc cho bảng `rapchieuphim`
--
ALTER TABLE `rapchieuphim`
  ADD CONSTRAINT `fk_rapchieuphim_cumrap` FOREIGN KEY (`idcumrap`) REFERENCES `cumrap` (`idcumrap`);

--
-- Các ràng buộc cho bảng `rapchieuphim_khuvucchieu`
--
ALTER TABLE `rapchieuphim_khuvucchieu`
  ADD CONSTRAINT `fk_khuvucchieu_rapchieuphim` FOREIGN KEY (`idrap`) REFERENCES `rapchieuphim` (`idrap`);

--
-- Các ràng buộc cho bảng `rapchieuphim_listfilm`
--
ALTER TABLE `rapchieuphim_listfilm`
  ADD CONSTRAINT `fk_this_listfilm` FOREIGN KEY (`id`) REFERENCES `listfilm` (`id`),
  ADD CONSTRAINT `fk_this_rapchieuphim` FOREIGN KEY (`idrap`) REFERENCES `rapchieuphim` (`idrap`);

--
-- Các ràng buộc cho bảng `thanhtoan_bapnuoc`
--
ALTER TABLE `thanhtoan_bapnuoc`
  ADD CONSTRAINT `fk_this_bapnuoc` FOREIGN KEY (`id_bapnuoc`) REFERENCES `bapnuoc` (`id_bapnuoc`),
  ADD CONSTRAINT `fk_this_thanhtoan` FOREIGN KEY (`id_thanhtoan`) REFERENCES `thanhtoan` (`id_thanhtoan`);

--
-- Các ràng buộc cho bảng `thanhtoan_nguoi`
--
ALTER TABLE `thanhtoan_nguoi`
  ADD CONSTRAINT `fk_thanhtoannguoi_giave` FOREIGN KEY (`id_giave`) REFERENCES `giave` (`id_giave`),
  ADD CONSTRAINT `fk_thanhtoannguoi_thanhtoan` FOREIGN KEY (`id_thanhtoan`) REFERENCES `thanhtoan` (`id_thanhtoan`);

--
-- Các ràng buộc cho bảng `theloai_listfilm`
--
ALTER TABLE `theloai_listfilm`
  ADD CONSTRAINT `fk_thislistfilmtheloai_theloai` FOREIGN KEY (`id_theloai`) REFERENCES `theloaiphim` (`id_theloai`),
  ADD CONSTRAINT `fk_thistheloai_listfilm` FOREIGN KEY (`id`) REFERENCES `listfilm` (`id`);

--
-- Các ràng buộc cho bảng `thequatang_member`
--
ALTER TABLE `thequatang_member`
  ADD CONSTRAINT `fk_thequatang_capdo` FOREIGN KEY (`id_capdo`) REFERENCES `capdo` (`id_capdo`),
  ADD CONSTRAINT `fk_thequatang_member` FOREIGN KEY (`id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
