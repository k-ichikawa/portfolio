<!DOCTYPE HTML>
<article>
    <p>{{ $name }}様から問い合わせがありました。</p>
    <p>「{!! nl2br($text) !!}」</p>
    <p>連絡先：{{ $mail_address }}</p>
    <p>なるべく早く返事をしましょう。</p>
</article>