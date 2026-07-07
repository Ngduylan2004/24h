# Website Công Nghệ 24HCV - Animation Guide

## Tổng Quan

Website này sử dụng các **animation hiện đại nhất 2024** kết hợp giữa CSS3 animations, Tailwind CSS, và custom JS. Mỗi section được thiết kế với smooth transitions, particle effects, và interactive elements.

---

## 1. Animations Cơ Bản

### 1.1 Fade In Animations

```css
/* Fade In Up - Từ dưới lên trên */
.animate-fade-in-up
Animation: 0.6s ease-out
Effect: Phần tử xuất hiện từ dưới với fade-in

/* Fade In Down */
.animate-fade-in-down
Animation: 0.6s ease-out
Effect: Phần tử xuất hiện từ trên

/* Fade In Left / Right */
.animate-fade-in-left | .animate-fade-in-right
Animation: 0.6s ease-out
Effect: Phần tử xuất hiện từ hai bên
```

### 1.2 Slide Animations

```css
.animate-slide-up
Animation: 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)
Effect: Slide từ dưới lên trên (bounce effect)

.animate-slide-down
Animation: 0.8s ease-out
Effect: Slide từ trên xuống dưới
```

### 1.3 Floating & Glow Effects

```css
.animate-float
Animation: 3s ease-in-out infinite
Effect: Phần tử nổi lơ lửng nhẹ nhàng (parallax)

.animate-glow
Animation: 2s ease-in-out infinite
Effect: Tạo hiệu ứng phát sáng xung quanh
```

### 1.4 Pulse & Scale

```css
.animate-pulse-glow
Animation: 2s infinite
Effect: Pulse ring mở rộng (như ripple)

.animate-scale-bounce
Animation: 1s ease-in-out infinite
Effect: Phần tử giãn nở và co lại
```

---

## 2. Advanced Animations

### 2.1 Shimmer (Loading Effect)

```css
.animate-shimmer
Animation: 2s infinite
Effect: Hiệu ứng loading với shine effect
Dùng cho: Loading states, skeleton screens
```

### 2.2 Text Animations

```css
.text-gradient
Effect: Gradient chảy liên tục trên chữ
Animation: gradientFlow 3s infinite

.text-shimmer
Animation: 2s infinite
Effect: Shine effect chạy qua chữ
```

### 2.3 Staggered Children

```css
.animate-stagger-children > *
Effect: Mỗi child animate với delay tăng dần
Delays: 0.1s, 0.2s, 0.3s, ..., 0.6s
Perfect for: Lists, grids, card collections
```

### 2.4 Blur In

```css
.animate-blur-in
Animation: 0.7s ease-out
Effect: Fade in + blur out (modern effect)
```

### 2.5 Gradient Flow

```css
.animate-gradient-flow
Animation: 3s ease infinite
Effect: Gradient chảy động trên background
Dùng cho: CTA buttons, feature cards
```

---

## 3. Hover Effects

### 3.1 Lift Effect

```css
.hover-lift
Hover: translateY(-8px)
Shadow: Tăng shadow khi hover
Dùng cho: Cards, buttons, links
```

### 3.2 Scale

```css
.hover-scale
Hover: scale(1.05)
Dùng cho: Interactive elements, product cards
```

### 3.3 Glow

```css
.hover-glow
Hover: Box-shadow glow rgba(0, 212, 255, 0.4)
Dùng cho: Accent elements, CTAs
```

### 3.4 Accent Text

```css
.hover-accent-text
Hover: Color #00d4ff + text-shadow glow
Dùng cho: Links, menu items
```

---

## 4. Scroll Animations (Reveal Effects)

### 4.1 Scroll Reveal

```css
.reveal-up
Initial: opacity: 0, transform: translateY(30px)
On Scroll: opacity: 1, transform: translateY(0)
Trigger: IntersectionObserver (threshold: 0.15)
```

### 4.2 Variants

```css
.reveal-left     /* Từ trái sang phải */
.reveal-right    /* Từ phải sang trái */
.reveal-scale    /* Scale 0.9 → 1 */
```

---

## 5. Color Palette & Design Tokens

### Theme Colors (Tailwind v4)

```
Primary Brand: #00d4ff (Cyan - Accent)
Secondary: #8000ff (Purple - Accent)
Tertiary: #ff006e (Magenta - Accent)
Background: #0a0e27 (Deep Navy)
Surface: #13182a (Light Navy)
Text Primary: #f0f4f8 (Light Gray)
Text Secondary: #a8b2c1 (Medium Gray)
Text Tertiary: #6b7494 (Dark Gray)
```

### Shadows (Glow Effects)

```
--shadow-glow: 0 0 30px rgba(0, 212, 255, 0.3)
--shadow-glow-strong: 0 0 50px rgba(0, 212, 255, 0.5)
```

---

## 6. Section Animations

### 6.1 Header
- Navigation links: Underline animation on hover (slide-in from right)
- CTA Button: Gradient shift + glow pulse on hover
- Logo: Scale + rotate on hover
- Mobile menu: Smooth height transition with opacity

### 6.2 Hero Section
- Badge: fadeInLeft
- Title: fadeInUp with stagger
- Description: fadeInUp (0.2s delay)
- CTA Buttons: fadeInUp (0.3s delay)
- Stats Cards: Staggered fadeInUp (0.1s - 0.5s delay)
- Particle Effect: Float animation for sparkles

### 6.3 Partners Marquee
- Track: Infinite scroll animation (45s)
- Logo Cards: Hover lift + scale
- On Hover: Animation pause
- Shine Effect: Infinite shine across logo

### 6.4 Services Grid
- Cards: Staggered fadeInUp (0.1s - 0.6s delay)
- On Hover: translateY(-8px) + glow shadow
- Gradient Border: Appear on hover
- Title: Color change to accent color

### 6.5 CTA Section
- Heading: Gradient text animation
- Buttons: Smooth transitions + hover effects
- Features: Staggered appearance with icon rotation
- Form Inputs: Focus glow effect

### 6.6 Footer
- Sections: Staggered fadeInUp (0.1s - 0.4s delay)
- Links: Underline slide-in effect
- Social Icons: Hover pulse + scale + lift
- Bottom: FadeInUp with 0.5s delay

---

## 7. Performance Optimizations

### Will-Change
```css
/* Applied to animated elements */
will-change: transform;
will-change: opacity;
```

### Reduced Motion
```css
@media (prefers-reduced-motion: reduce) {
  /* All animations disabled for accessibility */
  animation-duration: 0.01ms !important;
  transition-duration: 0.01ms !important;
}
```

### Transform & Opacity Only
- All animations use `transform` and `opacity` for 60fps performance
- Avoid animating width, height, left, right properties

---

## 8. Timing Functions

```
ease-out: cubic-bezier(0.4, 0, 1, 1)
- Best for entrance animations (starts fast, ends slow)

cubic-bezier(0.34, 1.56, 0.64, 1) [Spring-like]
- Bouncy effect for interactive elements

cubic-bezier(0.16, 1, 0.3, 1) [Expo]
- Professional ease for entrance/exit

linear
- Used for continuous animations (marquee, rotate)
```

---

## 9. Using Animations in HTML

### Basic Usage

```html
<!-- Fade in on load -->
<div class="animate-fade-in-up">Content</div>

<!-- Hover effects -->
<button class="hover-lift hover-glow">Click me</button>

<!-- Staggered children -->
<ul class="animate-stagger-children">
  <li>Item 1</li> <!-- Delay: 0.1s -->
  <li>Item 2</li> <!-- Delay: 0.2s -->
  <li>Item 3</li> <!-- Delay: 0.3s -->
</ul>

<!-- Scroll reveal -->
<div class="reveal-up">Appears on scroll</div>

<!-- Glow text -->
<h1 class="text-gradient animate-glow">Glowing Title</h1>
```

### Scroll Observer in JS

```javascript
const els = document.querySelectorAll('.reveal-up');
const io = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      io.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });
els.forEach(el => io.observe(el));
```

---

## 10. Best Practices

1. **Duration**: Keep animations 0.3s - 0.8s for UI interactions
2. **Easing**: Use ease-out for entrance, ease-in for exit
3. **Accessibility**: Always respect `prefers-reduced-motion`
4. **Performance**: Use `transform` and `opacity` only
5. **Consistency**: Apply animations uniformly across similar elements
6. **Stagger**: Use 0.1s - 0.2s delays for multi-element animations
7. **Hover States**: Provide visual feedback immediately
8. **Mobile**: Consider reducing animation complexity on mobile
9. **Testing**: Test animations at various network speeds
10. **Naming**: Use semantic class names for animations

---

## 11. File Structure

```
resources/
├── css/
│   ├── app.css (Main + imports)
│   ├── animations.css (Core animations)
│   └── page/
│       └── home.css (Page-specific)

public/css/layout/
├── header.css (Header + nav animations)
├── hero.css (Hero + particle effects)
├── partners.css (Marquee + logo animations)
├── services.css (Service cards + stagger)
├── cta.css (CTA + form animations)
└── footer-modern.css (Footer animations)
```

---

## 12. Browser Support

- ✅ Chrome/Edge 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Mobile browsers (iOS Safari 14+, Chrome Mobile)
- ⚠️ IE11 (Graceful degradation)

---

## 13. Resources

- **Tailwind CSS v4**: @import 'tailwindcss'
- **CSS Animations**: Custom @keyframes in animations.css
- **JS Scroll**: Native IntersectionObserver API
- **Easing**: cubic-bezier.com

---

## Các Animation Được Sử Dụng Trên Website

| Section | Animations | Duration | Easing |
|---------|-----------|----------|--------|
| Header | Slide down, nav underline, button glow | 0.3s - 0.6s | ease-out, spring |
| Hero | Staggered fade-in, particle float | 0.6s - 0.8s | ease-out |
| Partners | Marquee scroll, logo shine, hover lift | 45s marquee, 0.45s hover | linear, spring |
| Services | Staggered fade-in, card lift | 0.6s + delay | ease-out, spring |
| CTA | Text glow, button shine, feature pop | 0.4s - 0.6s | spring |
| Footer | Staggered fade-in, social pulse | 0.6s + delay | ease-out, spring |

---

**Happy Animating! 🚀**
