document.addEventListener('click', function (event) {
    const target = event.target;
    const coupons = AutoCopyCouponData.coupons;

    coupons.forEach(coupon => {
        if (target.classList.contains(coupon.class)) {
            navigator.clipboard.writeText(coupon.code).then(() => {
                alert('Coupon copied!');
            }).catch(err => console.error('Failed to copy coupon:', err));
        }
    });
});
