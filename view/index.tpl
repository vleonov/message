{extends file="layout.tpl"}

{block "js"}
    {*<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>*}
    {*<script type="text/javascript" src="js/form.js"></script>*}
{/block}

{block "content"}

    <div class="Absolute-Center formMain">
        <form action="" id="formMain" method="post">
            <fieldset>
                <div class="input-append">
                    <input type="text" class="input-large" placeholder="+7 (xxx) xxx xx xx" autofocus="autofocus" name="phone" value="{$phone}"/>
                    <button class="btn">QR it</button>
                </div>
            </fieldset>
        </form>
    </div>

{/block}