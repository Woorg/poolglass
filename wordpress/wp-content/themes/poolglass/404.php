<?php
/* 
Template Name: Страница 404
*/
?>


<?php
get_header('page')
?>

<div class="error_404">
    <div class="error_404__container">
        <h2 class="error_404__title">
            <a href="<?php echo get_home_url();?>">Такой страницы не существует. Перейти на главную ?</a>
        </h2>
    </div>
</div>

<?php
get_footer('page')
?>