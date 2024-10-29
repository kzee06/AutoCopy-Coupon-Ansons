# AutoCopy Coupon WordPress Plugin

## Description
AutoCopy Coupon is a lightweight WordPress plugin that lets you copy coupon codes to the clipboard when users click on specific images. You can add multiple coupon-image pairs directly from the admin panel and use the provided image class selectors to trigger the auto-copy feature.

### Features
- **Multiple Coupon-Image Pairs:** Add unlimited coupon and image class combinations through the admin settings.
- **Easy to Use:** Manage coupon-image pairs from a simple settings page.
- **Seamless Integration:** Works smoothly with WPBakery and Elementor page builders.
- **Lightweight & Conflict-Free:** Designed to be small and efficient with minimal overhead.

## Installation
1. Download the plugin from the [releases section](https://github.com/your-username/AutoCopy-Coupon-Ansons/releases).
2. In your WordPress dashboard, go to **Plugins → Add New**.
3. Click **Upload Plugin** and select the downloaded ZIP file.
4. Activate the plugin from the **Plugins** page.

## Usage
1. Go to **Settings → AutoCopy Coupon** in your WordPress admin panel.
2. Use the **Add Coupon** button to create new coupon-image pairs.
3. Enter the class name of the target image and the corresponding coupon code.
4. Use these class names on your images within WPBakery, Elementor, or any other content editor.

## Example Image Setup
If you enter the class name `promo-image` and coupon code `SAVE20` in the admin settings:
```html
<img class="promo-image" src="your-image-url.jpg" alt="Promo Image">
