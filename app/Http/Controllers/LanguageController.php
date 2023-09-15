<?php

// Tạo LanguageController.php trong thư mục app/Http/Controllers

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLocale($locale)
    {
        // Đảm bảo rằng ngôn ngữ được yêu cầu nằm trong danh sách ngôn ngữ hợp lệ của bạn
        if (in_array($locale, ['en', 'vi', 'fr'])) {
            // Lưu ngôn ngữ đã chọn vào session hoặc cookie (tùy bạn chọn)
            session(['locale' => $locale]);

            // Chuyển hướng lại đến trang trước đó hoặc trang chính
            return back();
        }

        // Nếu ngôn ngữ không hợp lệ, bạn có thể xử lý theo ý muốn, ví dụ: hiển thị thông báo lỗi.
        return redirect()->route('home')->with('error', 'Ngôn ngữ không hợp lệ.');
    }
}
