<!doctype html>
<html lang="zh-Hant-TW">

<head>
    {include file="header.tpl"}
</head>

<body>
    {include file="nav.tpl"}
    <div class="container">
        {include file="op_`$op`.tpl"}
    </div>
    {include file="footer.tpl"}


</body>
<script src="ckeditor/ckeditor.js"></script>
<textarea name="content" id="content"></textarea>
<script>
    CKEDITOR.replace('content');

</script>

</html>