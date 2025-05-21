<?php
function validateName(string $name): void
{
    // 半角英数字・記号のみ許可（全角・日本語不可）
    if (!preg_match('/^[a-zA-Z0-9!"#$%&\'()*+,\-\.\/:;<=>?@\[\\\]^_`{|}~]+$/', $name)) {
        throw new InvalidArgumentException('名前には英数字および記号のみ使用可能です。');
    }
}
