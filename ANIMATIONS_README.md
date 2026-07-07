# 🚀 Website Công Nghệ 24HCV - Modern Animation Edition

## Overview

Đây là một **website công nghệ hiện đại** được xây dựng với:
- **Tailwind CSS v4** - Utility-first CSS framework
- **Advanced CSS Animations** - Các animation mới nhất 2024
- **Interactive Effects** - Hover effects, scroll animations
- **Particle System** - Hero section particle effects
- **Responsive Design** - Mobile-first approach

---

## ✨ Key Features

### 🎨 Modern Design
- **Dark Theme** - Professional dark mode optimized for tech
- **Gradient Accents** - Cyan (#00d4ff) + Purple (#8000ff) + Magenta (#ff006e)
- **Glass Morphism** - Frosted glass effect on cards
- **Responsive Layout** - Works perfectly on all devices

### 🎬 Advanced Animations

#### Header & Navigation
```
✓ Slide-down animation on page load
✓ Nav link underline animation (cubic-bezier spring)
✓ CTA button glow pulse effect
✓ Mobile menu smooth transitions
✓ Logo hover rotation + scale
```

#### Hero Section
```
✓ Staggered fade-in animations
✓ Particle sparkle effects
✓ Hero slide transitions
✓ Stat cards staggered reveal
✓ CTA button hover lift + glow
```

#### Partners Marquee
```
✓ Infinite horizontal scroll
✓ Logo shine effect overlay
✓ Hover lift + scale
✓ Pause on hover
✓ Smooth transitions
```

#### Services Grid
```
✓ Staggered fade-in (0.1s intervals)
✓ Card hover lift animation
✓ Gradient border appear effect
✓ Title color change on hover
✓ Icon hover rotation
```

#### CTA Section
```
✓ Text gradient animation
✓ Button shine effect
✓ Feature icon pop animation
✓ Form input focus glow
✓ Floating animation
```

#### Footer
```
✓ Staggered section animations
✓ Link underline slide-in
✓ Social icon pulse + lift
✓ Newsletter form interactions
✓ Smooth hover transitions
```

### 🎯 Performance
- 60fps animations (transform + opacity only)
- Will-change optimization
- Intersection Observer for scroll animations
- Respects prefers-reduced-motion
- Minimal JavaScript - most CSS-based

---

## 📁 File Structure

```
resources/
├── css/
│   ├── app.css ..................... Main CSS with @import animations.css
│   ├── animations.css .............. Core animations library
│   └── page/
│       └── home.css ................ Page-specific styles

public/css/layout/
├── header.css ...................... Header + nav animations
├── hero.css ........................ Hero section + particles
├── partners.css .................... Marquee animations
├── services.css .................... Service cards stagger
├── cta.css ......................... CTA section animations
└── footer-modern.css ............... Footer animations
```

---

## 🎨 Color System

### Primary Colors
```css
--color-accent-primary: #00d4ff    /* Cyan - Main accent */
--color-accent-secondary: #8000ff  /* Purple - Secondary */
--color-accent-tertiary: #ff006e   /* Magenta - Tertiary */

--color-background: #0a0e27        /* Deep Navy - BG */
--color-surface: #13182a           /* Light Navy - Cards */
--color-surface-secondary: #1a2145  /* Extra Light Navy */

--color-text-primary: #f0f4f8      /* Light - Main text */
--color-text-secondary: #a8b2c1    /* Medium - Secondary */
--color-text-tertiary: #6b7494     /* Dark - Tertiary */
```

---

## 🎬 Animation Classes

### Entrance Animations
```html
<div class="animate-fade-in-up">     <!-- Fade + Move Up -->
<div class="animate-fade-in-down">   <!-- Fade + Move Down -->
<div class="animate-fade-in-left">   <!-- Fade + Move Left -->
<div class="animate-fade-in-right">  <!-- Fade + Move Right -->
<div class="animate-slide-up">       <!-- Slide with bounce -->
<div class="animate-slide-down">     <!-- Smooth slide down -->
```

### Continuous Animations
```html
<div class="animate-float">          <!-- Floating effect -->
<div class="animate-glow">           <!-- Glow pulse -->
<div class="animate-pulse-glow">     <!-- Ripple effect -->
<div class="animate-scale-bounce">   <!-- Scale bounce -->
<div class="animate-rotate">         <!-- Rotate 360° -->
<div class="animate-shimmer">        <!-- Loading shine -->
```

### Scroll Reveal
```html
<div class="reveal-up">              <!-- Reveal on scroll up -->
<div class="reveal-left">            <!-- Reveal from left -->
<div class="reveal-right">           <!-- Reveal from right -->
<div class="reveal-scale">           <!-- Scale reveal -->
```

### Hover Effects
```html
<button class="hover-lift">          <!-- Lift on hover -->
<button class="hover-scale">         <!-- Scale on hover -->
<button class="hover-glow">          <!-- Glow on hover -->
<a class="hover-accent-text">        <!-- Text glow on hover -->
```

### Staggered Animation
```html
<ul class="animate-stagger-children">
  <li>Item 1</li>  <!-- Delay: 0.1s -->
  <li>Item 2</li>  <!-- Delay: 0.2s -->
  <li>Item 3</li>  <!-- Delay: 0.3s -->
  ...
</ul>
```

---

## 🚀 Getting Started

### Installation

1. **Clone the repository**
   ```bash
   git clone <repo-url>
   cd 24h
   ```

2. **Install dependencies**
   ```bash
   npm install
   # or
   pnpm install
   ```

3. **Start dev server**
   ```bash
   npm run dev
   ```

4. **Build for production**
   ```bash
   npm run build
   ```

### Usage

The animations are automatically applied to components with the appropriate classes. No additional setup required.

---

## 📊 Animation Timing

### Durations
```
Fast interactions: 0.25s - 0.35s
Standard animations: 0.5s - 0.7s
Smooth transitions: 0.8s - 1s
Continuous loops: 2s - 20s
```

### Easing Functions
```
ease-out: cubic-bezier(0.4, 0, 1, 1)
  → Best for entrance animations

spring: cubic-bezier(0.34, 1.56, 0.64, 1)
  → Bouncy feel for interactive elements

expo: cubic-bezier(0.16, 1, 0.3, 1)
  → Professional entrance/exit

linear
  → For continuous animations (marquee, rotate)
```

---

## 🌐 Browser Support

| Browser | Support | Version |
|---------|---------|---------|
| Chrome | ✅ Full | 90+ |
| Firefox | ✅ Full | 88+ |
| Safari | ✅ Full | 14+ |
| Edge | ✅ Full | 90+ |
| Mobile | ✅ Full | iOS 14+, Android 10+ |

---

## ♿ Accessibility

All animations respect `prefers-reduced-motion`:

```css
@media (prefers-reduced-motion: reduce) {
  /* Animations automatically disabled */
  animation-duration: 0.01ms !important;
  transition-duration: 0.01ms !important;
}
```

---

## 📚 Documentation

For detailed animation documentation, see [ANIMATIONS_GUIDE.md](./ANIMATIONS_GUIDE.md)

---

## 🎯 Technology Stack

- **Framework**: Laravel + Vite + Tailwind CSS v4
- **Styling**: Tailwind CSS v4 (@import 'tailwindcss')
- **Animations**: Custom CSS3 Keyframes
- **JavaScript**: Vanilla JS (Intersection Observer)
- **Build Tool**: Vite

---

## 🔧 Customization

### Modify Colors

Edit `resources/css/app.css`:

```css
@theme {
  --color-accent-primary: #your-color;
  --color-background: #your-bg-color;
  /* ... more tokens */
}
```

### Adjust Animation Speed

Edit `resources/css/animations.css`:

```css
.animate-fade-in-up {
  animation: fadeInUp 1s ease-out forwards; /* Change duration here */
}
```

### Create Custom Animation

Add to `resources/css/animations.css`:

```css
@keyframes myAnimation {
  from { /* initial state */ }
  to { /* final state */ }
}

.animate-my-animation {
  animation: myAnimation 0.5s ease-out forwards;
}
```

---

## 🐛 Troubleshooting

### Animations not showing?

1. Check if CSS files are linked in `app.blade.php`
2. Clear browser cache (Ctrl+Shift+Delete)
3. Rebuild with `npm run build`
4. Check console for CSS errors

### Performance issues?

1. Check `will-change` usage (use sparingly)
2. Ensure only `transform` and `opacity` are animated
3. Disable animations on low-end devices
4. Profile with Chrome DevTools

### Mobile animations laggy?

1. Reduce animation count on mobile
2. Use `will-change` for critical animations
3. Consider using simpler animations on mobile
4. Test on actual devices

---

## 📝 Contributing

When adding new animations:

1. Add keyframes to `animations.css`
2. Create utility class
3. Test in all browsers
4. Document in `ANIMATIONS_GUIDE.md`
5. Ensure accessibility (respects prefers-reduced-motion)

---

## 📄 License

This project is part of the 24HCV company website.

---

## 🎓 Learning Resources

- [CSS Animations MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Animations)
- [Tailwind CSS](https://tailwindcss.com/)
- [Cubic Bezier](https://cubic-bezier.com/)
- [Animation Performance](https://web.dev/animations-guide/)

---

## 🚀 Next Steps

- Add more micro-interactions
- Implement scroll parallax
- Add theme switcher animations
- Create animation presets library
- Build animation component library

---

**Built with ❤️ by 24HCV Tech Team**

For questions or issues, contact the development team.
