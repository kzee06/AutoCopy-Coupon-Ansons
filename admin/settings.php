<?php
function autocopy_coupon_settings_menu() {
    add_options_page(
        'AutoCopy Coupon Settings',
        'AutoCopy Coupon',
        'manage_options',
        'autocopy-coupon-settings',
        'autocopy_coupon_settings_page'
    );
}
add_action('admin_menu', 'autocopy_coupon_settings_menu');

function autocopy_coupon_settings_page() {
    if (isset($_POST['save_autocopy_coupons'])) {
        $coupons = $_POST['autocopy_coupon'];
        update_option('autocopy_coupon_codes', $coupons);
        echo '<div class="updated"><p>Settings saved!</p></div>';
    }

    $coupons = get_option('autocopy_coupon_codes', []);
    ?>
    <div class="wrap">
        <h1>AutoCopy Coupon Settings</h1>
        <form method="post">
            <div id="coupon-container">
                <?php foreach ($coupons as $index => $coupon) : ?>
                    <div class="coupon-entry">
                        <input type="text" name="autocopy_coupon[<?php echo $index; ?>][class]" placeholder="Image Class" value="<?php echo esc_attr($coupon['class']); ?>">
                        <input type="text" name="autocopy_coupon[<?php echo $index; ?>][code]" placeholder="Coupon Code" value="<?php echo esc_attr($coupon['code']); ?>">
                        <button type="button" class="remove-coupon">Remove</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="button" id="add-coupon">+ Add Coupon</button>
            <p><input type="submit" name="save_autocopy_coupons" value="Save Settings" class="button button-primary"></p>
        </form>
    </div>
    <script>
    document.getElementById('add-coupon').addEventListener('click', function () {
        const container = document.getElementById('coupon-container');
        const index = container.children.length;
        const div = document.createElement('div');
        div.className = 'coupon-entry';
        div.innerHTML = `
            <input type="text" name="autocopy_coupon[${index}][class]" placeholder="Image Class">
            <input type="text" name="autocopy_coupon[${index}][code]" placeholder="Coupon Code">
            <button type="button" class="remove-coupon">Remove</button>
        `;
        container.appendChild(div);
    });
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-coupon')) {
            event.target.parentElement.remove();
        }
    });
    </script>
    <?php
}
?>
