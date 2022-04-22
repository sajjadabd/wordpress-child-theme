<?php


function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'خرید', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'خرید', 'woocommerce' );
}




function my_text_strings( $translated_text, $text, $domain ) {
  switch ( trim(strtolower( $translated_text )) ) {
    case 'hello' :
      $translated_text = __( 'سلام', 'woocommerce' );
      break;
    case 'from your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.' :
      $translated_text = __( 'از صفحه کاربری شما می توانید سفارشات خود را مشاهده کنید، آدرس های حمل و نقل را مدیریت کنید، آدرس های صورتحساب و رمز عبور را ویرایش کنید و تنظیمات حساب خود را ویرایش کنید.', 'woocommerce' );
      break;
    case 'view cart' :
          $translated_text = __( 'سبد خرید', 'woocommerce' );
          break;
      case 'checkout' :
          $translated_text = __( 'پرداخت', 'woocommerce' );
          break;
      case 'continue shopping' :
          $translated_text = __( 'ادامه خرید', 'woocommerce' );
          break;
      case 'your cart is currently empty' :
          $translated_text = __( 'سبد خرید شما خالی است', 'woocommerce' );
          break;
      case 'your cart' :
          $translated_text = __( 'سبد خرید شما', 'woocommerce' );
          break;
      case 'description' :
          $translated_text = __( 'توضیحات', 'woocommerce' );
          break;
      case 'reviews' :
          $translated_text = __( 'نظرات', 'woocommerce' );
          break;
      case 'has been added to your cart':
          $translated_text = __( 'به سبد خرید اضافه شد', 'woocommerce' );
          break;
      case 'tags' :
          $translated_text = __( 'برچسب ها', 'woocommerce' );
          break;
      case 'apply coupon' :
          $translated_text = __( 'اعمال کوپن', 'woocommerce' );
          break;
      case 'update cart' :
          $translated_text = __( 'به روز رسانی سبد خرید', 'woocommerce' );
          break;
      case 'proceed to checkout' :
          $translated_text = __( 'پرداخت', 'woocommerce' );
          break;
      case 'place order':
          $translated_text = __( 'ثبت سفارش', 'woocommerce' );
          break;
      case 'coupon code' :
          $translated_text = __( 'کد کوپن', 'woocommerce' );
          break;
      case 'cart totals' :
          $translated_text = __( 'جمع سبد خرید', 'woocommerce' );
          break;
      case 'subtotal':
          $translated_text = __( 'قیمت', 'woocommerce' );
          break;
      case 'total' :
          $translated_text = __( 'جمع کل', 'woocommerce' );
          break;
      case 'product' :
          $translated_text = __( 'محصول', 'woocommerce' );
          break;
      case 'price':
          $translated_text = __( 'قیمت', 'woocommerce' );
          break;
      case 'quantity' :
          $translated_text = __( 'تعداد', 'woocommerce' );
          break;
      case 'cart' :
          $translated_text = __( 'سبد خرید', 'woocommerce' );
          break;
      case 'checkout' :
          $translated_text = __( 'پرداخت', 'woocommerce' );
          break;
      case 'your order' :
          $translated_text = __( 'سفارش شما', 'woocommerce' );
          break;
      case 'billing details' :
          $translated_text = __( 'جزئیات پرداخت', 'woocommerce' );
          break;
      case 'first name':
          $translated_text = __( 'نام', 'woocommerce' );
          break;
      case 'last name':
          $translated_text = __( 'نام خانوادگی', 'woocommerce' );
          break;
      case 'display name' :
          $translated_text = __( 'نام نمایشی', 'woocommerce' );
          break;
      case 'this will be how your name will be displayed in the account section and in reviews' :
          $translated_text = __( 'این نام برای نمایش در بخش حساب کاربری و نظرات است', 'woocommerce' );
          break;
      case 'company name' :
          $translated_text = __( 'شرکت', 'woocommerce' );
          break;
      case '' :
          $translated_text = __( 'اختیاری', 'woocommerce' );
          break;
      case 'country / region' :
          $translated_text = __( 'کشور', 'woocommerce' );
          break;
      case 'street address' : 
          $translated_text = __( 'آدرس', 'woocommerce' );
          break;
      case 'house number and street name':
          $translated_text = __( 'آدرس سکونت شما', 'woocommerce' );
          break;
      case 'town / city' : 
          $translated_text = __( 'شهر', 'woocommerce' );
          break;
      case 'state / county' :
          $translated_text = __( 'استان', 'woocommerce' );
          break;
      case 'postcode / zip' : 
          $translated_text = __( 'کد پستی', 'woocommerce' );
          break;
      case 'phone' :
          $translated_text = __( 'تلفن', 'woocommerce' );
          break;
      case 'email address' : 
          $translated_text = __( 'ایمیل', 'woocommerce' );
          break;
      case 'shipping address' :
          $translated_text = __( 'آدرس ارسال', 'woocommerce' );
          break;
      case 'additional information':
          $translated_text = __( 'اطلاعات بیشتر', 'woocommerce' );
          break;
      case 'order notes' :
          $translated_text = __( 'توضیحات', 'woocommerce' );
          break;
      case 'password change' :
          $translated_text = __( 'تغییر رمز عبور', 'woocommerce' );
          break;
      case 'save changes' :
          $translated_text = __( 'ذخیره تغییرات', 'woocommerce' );
          break;
      case 'send message' :
          $translated_text = __( 'ارسال پیام', 'woocommerce' );
          break;
      case 'our best sellers':
          $translated_text = __( 'پرفروش ترین محصولات', 'woocommerce' );
          break;
      case 'default sorting':
          $translated_text = __( 'مرتب سازی پیش فرض', 'woocommerce' );
          break;
      case 'sort by popularity':
          $translated_text = __( 'مرتب سازی بر اساس پربازدیدترین محصولات', 'woocommerce' );
          break;
      case 'sort by average rating':
          $translated_text = __( 'مرتب سازی بر اساس امتیاز داده شده', 'woocommerce' );
          break;
      case 'sort by latest':
          $translated_text = __( 'مرتب سازی بر اساس آخرین محصولات', 'woocommerce' );
          break;
      case 'sort by price: low to high':
          $translated_text = __( 'مرتب سازی بر اساس قیمت: کم به زیاد', 'woocommerce' );
          break;
      case 'sort by price: high to low':
          $translated_text = __( 'مرتب سازی بر اساس قیمت: زیاد به کم', 'woocommerce' );
          break;
      case 'search products...':
          $translated_text = __( 'جستجوی محصولات', 'woocommerce' );
          break;
      case 'my account':
          $translated_text = __( 'حساب کاربری', 'woocommerce' );
          break;
      case 'browse products':
          $translated_text = __( 'محصولات', 'woocommerce' );
          break;
      case 'no order has been made yet.':
          $translated_text = __( 'هنوز سفارشی ثبت نشده است', 'woocommerce' );
          break;
      case 'dashboard' :
          $translated_text = __( 'داشبورد', 'woocommerce' );
          break;
      case 'orders' :
          $translated_text = __( 'سفارشات', 'woocommerce' );
          break;
      case 'downloads' :
          $translated_text = __( 'دانلودها', 'woocommerce' );
          break;
      case 'no downloads available yet.' :
          $translated_text = __( 'هنوز دانلودی ثبت نشده است', 'woocommerce' );
          break;
      case 'edit account' :
          $translated_text = __( 'ویرایش حساب کاربری', 'woocommerce' );
          break;
      case 'addresses' :
          $translated_text = __( 'آدرس ها', 'woocommerce' );
          break;
      case 'billing address':
          $translated_text = __( 'آدرس پرداخت', 'woocommerce' );
          break;
      case 'add' :
          $translated_text = __( 'افزودن', 'woocommerce' );
          break;
      case 'the following addresses will be used on the checkout page by default.':
          $translated_text = __( 'آدرس های زیر برای پیش فرض در صفحه پرداخت استفاده خواهند شد.', 'woocommerce' );
          break;
      case 'you have not set up this type of address yet.':
          $translated_text = __( 'شما هنوز این نوع آدرس را تنظیم نکرده اید.', 'woocommerce' );
          break;
      case 'account details':
          $translated_text = __( 'جزئیات حساب کاربری', 'woocommerce' );
          break;
      case 'logout' :
          $translated_text = __( 'خروج از حساب کاربری', 'woocommerce' );
          break;
      case 'category' :
          $translated_text = __( 'دسته بندی', 'woocommerce' );
          break;
      case 'reviews' :
          $translated_text = __( 'نظرات', 'woocommerce' );
          break;
      case 'there are no reviews yet.' :
          $translated_text = __( 'هنوز نظری ثبت نشده است', 'woocommerce' );
          break;
      case 'review (%s)' :
          $translated_text = __( 'نظر (ها)', 'woocommerce' );
          break;
      case 'your rating' :
          $translated_text = __( 'امتیاز شما', 'woocommerce' );
          break;
      case 'your review' :
          $translated_text = __( 'نظر شما', 'woocommerce' );
          break;
      case 'submit' :
          $translated_text = __( 'ارسال', 'woocommerce' );
          break;  
      
  }
  return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );












function shop_page_strings( $translated_text, $text, $domain ) {
  switch ( trim(strtolower( $translated_text )) ) {
      case 'category' :
          $translated_text = __( 'ttttest', 'woocommerce' );
          break;
  }
  return $translated_text;
}
add_filter( 'gettext', 'shop_page_strings', 20, 3 );




//add_filter( 'wc_product_sku_enabled', '__return_false' );

//Change SKU text
function translate_woocommerce($translation, $text, $domain) {
  if ($domain == 'woocommerce') {
      switch ($text) {
          case 'SKU':
              $translation = 'شناسه محصول';
              break;
          case 'SKU:':
              $translation = 'شناسه محصول:';
              break;
      }
  }
  return $translation;
}
add_filter('gettext', 'translate_woocommerce', 10, 3);




function bbloomer_translate_tag_taxonomy( $translation, $single, $plural, $number, $domain ) {
   if ( is_product() && 'woocommerce' === $domain ) {
      // This will only trigger on the WooCommerce single product page
      $translation = ( 1 === $number ) ? 
      str_ireplace( 'Tag:', 'برچسب ها:', $translation ) : 
      str_ireplace( 'Tags:', 'برچسب ها:', $translation );
   }
   return $translation;
}
add_filter( 'ngettext', 'bbloomer_translate_tag_taxonomy', 9999, 5 );



function bbloomer_translate_category_taxonomy( $translation, $single, $plural, $number, $domain ) {
  if ( is_product() && 'woocommerce' === $domain ) {
     // This will only trigger on the WooCommerce single product page
     $translation = ( 1 === $number ) ? 
     str_ireplace( 'category:', 'دسته بندی ها:', $translation ) : 
     str_ireplace( 'categories:', 'دسته بندی ها:', $translation );
  }
  return $translation;
}
add_filter( 'ngettext', 'bbloomer_translate_category_taxonomy', 9999, 5 );



?>