<?php
function validateName(string $name): void
{
    // 半角英数字・記号のみ許可（全角文字や日本語は禁止）
    if (preg_match('/^[\x20-\x7E]+$/', $name)) {
        throw new InvalidArgumentException('名前には半角英数字および記号のみ使用可能です。');
    }
}
