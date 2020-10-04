<?php

namespace App\Http\Middleware;

use Closure;

class HumanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $nextを実行し、結果を$responseに代入する
        $response = $next($request);
        // レスポンスから返送されるコンテンツを取得する
        $content = $response->content();

        // <middleware>というタグを正規表現で置換する
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        // レスポンスにコンテンツを設定し、returnする
        $response->setContent($content);
        return $response;
    }
}
