{extends "layout.tpl"}

{block "content"}
    <div class="Absolute-Center phone">
        <form action="{$phone->hash}" method="post">
            {foreach from=$messages item=message}
                <div>
                    <button type="submit" class="btn btn-large btn-block" name="messageId" value="{$message->id}">{$message->text}</button>
                </div>
            {/foreach}
        </form>
    </div>
{/block}