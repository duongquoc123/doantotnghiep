<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
class ChatController extends Controller
{
 public function sendChat(Request $request){
 // Kiểm tra xem có dữ liệu đầu vào hay không
        $prompt = $request->input('input')  ; // Thay 'input' bằng tên trường chính xác
        if (!$prompt) {
        return response()->json(['error' => 'Prompt is required.'], 400);
        }

        // Gọi API OpenAI
        $result = OpenAI::completions()->create([
        'max_tokens' => 100,
        'model' => 'gpt-3.5-turbo-instruct',
        'prompt' => $prompt,
        ]);

      // Xử lý kết quả trả về từ API
        $response = array_reduce(
        $result->toArray()['choices'],
        fn(string $result, array $choice) => $result . ($choice['text'] ?? ''  ,
        ""
        );

        dd($response);

 }
}