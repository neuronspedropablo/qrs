<?php defined('ALTUMCODE') || die() ?>

<?php ob_start() ?>
<script>
    document.querySelector('#switch_theme_style').addEventListener('click', event => {
        let theme_style = document.querySelector('body[data-theme-style]').getAttribute('data-theme-style');
        let new_theme_style = theme_style == 'light' ? 'dark' : 'light';

        /* Set a cookie with the new theme style */
        set_cookie('theme_style', new_theme_style, 30, <?= json_encode(COOKIE_PATH) ?>);

        /* Change the css and button on the page */
        let css = document.querySelector(`#css_theme_style`);

        document.querySelector(`body[data-theme-style]`).setAttribute('data-theme-style', new_theme_style);

        switch(new_theme_style) {
            case 'dark':
                css.setAttribute('href', <?= json_encode(ASSETS_FULL_URL . 'css/' . (\Altum\Routing\Router::$path == 'admin' ? 'admin-' : null) . \Altum\ThemeStyle::$themes['dark'][l('direction')] . '?v=' . PRODUCT_CODE) ?>);
                document.body.classList.add('c_darkmode');
                break;

            case 'light':
                css.setAttribute('href', <?= json_encode(ASSETS_FULL_URL . 'css/' . (\Altum\Routing\Router::$path == 'admin' ? 'admin-' : null) . \Altum\ThemeStyle::$themes['light'][l('direction')] . '?v=' . PRODUCT_CODE) ?>);
                document.body.classList.remove('c_darkmode');
                break;
        }

        document.querySelector(`#switch_theme_style`).setAttribute('data-original-title', document.querySelector(`#switch_theme_style`).getAttribute(`data-title-theme-style-${theme_style}`));
        document.querySelector(`#switch_theme_style [data-theme-style="${new_theme_style}"]`).classList.remove('d-none');
        document.querySelector(`#switch_theme_style [data-theme-style="${theme_style}"]`).classList.add('d-none');
        $(`#switch_theme_style`).tooltip('hide').tooltip('show');

        event.preventDefault();
    });
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>
