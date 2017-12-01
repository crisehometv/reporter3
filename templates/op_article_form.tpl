<script src="ckeditor/ckeditor.js"></script>
<script src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">
<!-- <textarea name="content" id="content"></textarea> -->


<form action="admin.php" method="post" enctype="multipart/form-data" class=" my-4" id="myform">
    <div class="form-group">
        <!-- sr-only 一般讀者看不到，給視力障礙的閱讀器使用的 -->
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control validate[required]" name="title" id="title" placeholder="請輸入標題">
        <div class="form-group">
            <label for="content" class="col-form-label sr-only">文章內容</label>
            <textarea name="content" id="content" rows="20" class="form-control validate[required, minSize[10]]" placeholder="請輸入文章內容"></textarea>
        </div>
        <div class="form-group">
            <label for="title" class="col-form-label sr-only">封面圖</label>
            <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳圖片">
        </div>
        <div class="text-center">
            <input type="hidden" name="op" value="insert">
            <input type="hidden" name="username" value="{$smarty.session.username}">
            <button type="submit" class="btn btn-primary">儲存</button>
        </div>
    </div>
</form>

<script>
    // content對ID
    CKEDITOR.replace('content');
    $(document).ready(function () {
        $('#myform').validationEngine({ promptPosition: "bottomLeft" });
    });

</script>