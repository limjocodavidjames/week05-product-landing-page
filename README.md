# 🍟 Potato Corner – Sta. Cruz, Laguna
### Responsive Product Landing Page
**ITST 302 – Client-Server Technologies | Week 5 Mini Project 04**

---

## 📌 Project Overview

This is a fully responsive product landing page built for **Potato Corner – Sta. Cruz, Laguna branch** as part of the ITST 302 laboratory activity. The project demonstrates the use of Laravel Blade Components, Tailwind CSS utility classes, and responsive design principles to create a modern, mobile-friendly marketing page.

---

## 🚀 Tech Stack

| Technology | Version | Purpose |
|---|---|---|
| Laravel | 10.x | PHP Framework, Blade templating |
| Tailwind CSS | 3.x | Utility-first CSS styling |
| Alpine.js | 3.x (CDN) | Mobile menu interactivity |
| Vite | 4.x | Asset bundling |
| PHP | 8.1+ | Backend runtime |

---

## 🧩 Blade Components

| Component | File | Description |
|---|---|---|
| Layout | `layouts/app.blade.php` | Base HTML layout with `@yield('content')` |
| Navbar | `components/navbar.blade.php` | Responsive nav with Alpine.js mobile menu |
| Hero | `components/hero.blade.php` | Full-screen hero with background photo |
| Button | `components/button.blade.php` | Reusable button with variants & sizes |
| Feature Card | `components/feature-card.blade.php` | Individual feature card with accent colors |
| Features | `components/features.blade.php` | 6-card features grid section |
| Showcase | `components/showcase.blade.php` | Product photo showcase section |
| Pricing Card | `components/pricing-card.blade.php` | Individual pricing tier card |
| Pricing | `components/pricing.blade.php` | 3-tier pricing section |
| Testimonial Card | `components/testimonial-card.blade.php` | Customer review card with avatar |
| Testimonials | `components/testimonials.blade.php` | 3-card testimonials section |
| CTA | `components/cta.blade.php` | Call-to-action with info cards |
| Footer | `components/footer.blade.php` | 4-column footer with links |

---

## 🎨 Brand Colors

```js
// tailwind.config.js
colors: {
    'pc-green':       '#166534',
    'pc-green-light': '#16a34a',
    'pc-yellow':      '#FBBF24',
    'pc-yellow-light':'#FDE68A',
    'pc-red':         '#DC2626',
    'pc-cream':       '#FFFBEB',
}
```

---

## 📐 Page Sections

1. **Navbar** — Fixed top navigation with logo, links, and mobile hamburger menu
2. **Hero** — Full background photo with dark green gradient overlay, headline, CTA buttons, and stats
3. **Features** — 6 feature cards on photo background explaining why Potato Corner is special
4. **Showcase** — BBQ fries photo card + flavor menu grid with product images
5. **Pricing** — 3 pricing tiers (Starter ₱35 / Regular ₱55 / Large ₱75) with featured card
6. **Testimonials** — 3 customer reviews with avatars, ratings, and summary stats
7. **CTA** — Call-to-action with location, store hours, and contact info cards
8. **Footer** — Logo, quick links, flavor list, and contact information

---

## 📱 Responsive Breakpoints

| Breakpoint | Width | Layout |
|---|---|---|
| Mobile | < 640px | Single column, stacked sections |
| Tablet | 640px – 1024px | 2-column grids |
| Desktop | > 1024px | Full 3-column layouts |

---

## 🖼️ Images Used

| File | Section | Description |
|---|---|---|
| `hero-fries.jpg` | Hero | Hero background + photo card |
| `features-bg.jpg` | Features | Section background |
| `bbq-fries.jpg` | Showcase | BBQ fries card |
| `flavors-grid.jpg` | Showcase | Flavor menu header |
| `pricing-bg.jpg` | Pricing | Section background |
| `testimonials-bg.jpg` | Testimonials | Section background |
| `customer-1.jpg` | Testimonials | Maria Santos avatar |
| `customer-2.jpg` | Testimonials | Carlo Reyes avatar |
| `customer-3.jpg` | Testimonials | Angela Cruz avatar |

---

## ⚙️ Installation & Setup

```bash
# 1. Clone the repository
git clone https://github.com/your-username/week05-product-landing-page.git
cd week05-product-landing-page

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Run development servers (in two separate terminals)
npm run dev
php artisan serve
```

Then visit: `http://127.0.0.1:8000`

---

## 📁 Project Structure

```
week05-product-landing-page/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── button.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── features.blade.php
│       │   ├── showcase.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── pricing.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── testimonials.blade.php
│       │   ├── cta.blade.php
│       │   └── footer.blade.php
│       └── pages/
│           └── home.blade.php
├── public/
│   └── images/
│       ├── hero-fries.jpg
│       ├── features-bg.jpg
│       ├── bbq-fries.jpg
│       ├── flavors-grid.jpg
│       ├── pricing-bg.jpg
│       ├── testimonials-bg.jpg
│       ├── customer-1.jpg
│       ├── customer-2.jpg
│       └── customer-3.jpg
├── routes/
│   └── web.php
├── tailwind.config.js
├── vite.config.js
└── README.md
```

---

## 👨‍💻 Developer

**David James Limjoco**
ITST 302 – Client-Server Technologies
Week 5 Laboratory Activity: Mini Project 04
Sta. Cruz, Laguna | 2026

---

## 📄 License

This project is created for educational purposes as part of ITST 302 coursework.
