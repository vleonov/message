{extends "layout.tpl"}

{block "content"}
    <div class="Absolute-Center sent">
        <h1>Спасибо.</h1>
        <h3>Ваше сообщение отправлено.</h3>
        &larr;&nbsp;<a href="{$phone->hash}">Отправить еще одно сообщение</a>
    </div>
{/block}