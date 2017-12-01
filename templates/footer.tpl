<div class="footer"></div>
<footer class="bg-dark text-white fixed-bottom">
    <div class="container">
        <div class="mt-2 d-none d-sm-block">「臺南公民智庫」是一個全新的概念，有效地運用社大的公民教育場域、加上民間NGO、專業學者，成為一個具有研究與提供思考與政策方向的機構，並兼具有行動力及參與城市運作的社會機能。</div>
        <div class="my-1 d-block d-sm-none text-center">臺南公民智庫</div>
    </div>
</footer>


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script>
    $(document).ready(function () {
        //     var images = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
        //     $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        // });
        //圖片大小隨著視窗執行，但是移動視窗時要移動載入
        $(document).ready(function () {
            // $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
        //自動調整圖片大小
        $(window).resize(function () {
            // $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());

        });

</script>