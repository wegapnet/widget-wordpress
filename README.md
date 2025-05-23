# 💬 Wegap Widget for WordPress / ویجت ویگپ برای وردپرس

This repository contains the official WordPress integration method of the Wegap widget.  
این مخزن شامل روش رسمی افزودن ویجت ویگپ به سایت‌های WordPress است. با استفاده از این ویجت می‌توانید قابلیت‌هایی مانند **چت، تماس صوتی/تصویری، دانشیار هوش مصنوعی و مرکز تماس** را به سایت خود اضافه کنید.

---

## 📦 Installation / نصب

افزونه رسمی ویگپ در حال توسعه است. در حال حاضر می‌توانید از روش درج کد HTML استفاده کنید:

1. به پنل مدیریت وردپرس بروید.
2. به مسیر **نمایش → ابزارک‌ها** یا **ویرایشگر برگه‌ها** بروید.
3. یک بلوک HTML سفارشی اضافه کنید.
4. کد زیر را در آن وارد کنید:

```html
<script src="https://cdn.wegap.net/widget.js"></script>
<script>
  window.WegapWidget && WegapWidget.init({
    authKey: 'YOUR_AUTH_KEY',
    theme: 'light',
    position: 'bottom-right',
    language: 'fa'
  });
</script>
```

---

## ⚙️ Config Options / تنظیمات

| Prop Name | Type   | Description EN                                      | توضیح فارسی |
|-----------|--------|------------------------------------------------------|--------------|
| authKey   | string | Your unique authentication key                      | کلید احراز هویت شما |
| theme     | string | Theme mode: `light` or `dark`                       | تم: روشن یا تیره |
| position  | string | Widget position: `bottom-right`, `bottom-left`, etc | موقعیت ویجت |
| language  | string | Default widget language (fa, en, ar, ...)           | زبان پیش‌فرض |

---

## 📄 Documentation / مستندات کامل

- [See full guide in Wegap Wiki](https://wegap.net/wiki/wordpress/نصب-و-راه-اندازی/راهنمای-ویجت-ویگپ/دانشیار-ویگپ-id-8903)
- مشاهده راهنما در ویکی ویگپ ↑
