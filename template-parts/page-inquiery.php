


<h1 class="conatactForm--ttl">お問い合わせ</h1>
<div class="conatactForm">
<?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
</div>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = 'http://takanenonadeshiko.jp/sentmail/';
}, false );
</script>

<style>
    .conatactForm{
        max-width: 800px;
        margin: 0 auto;
    }
    .conatactForm--ttl{
        text-align: center;
        font-size: 24px;
        font-weight: normal;
    }
</style>