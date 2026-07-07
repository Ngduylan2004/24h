# 24HCV - Next.js React Website với Modern Animations

## 📋 Project Overview

Một website công nghệ hiện đại xây dựng bằng **Next.js 16** với **React** và **Tailwind CSS v4**. Website có thiết kế responsive, animations hiện đại, và hiệu suất cao (60fps).

### Kỹ Thuật
- **Framework**: Next.js 16 (App Router)
- **Styling**: Tailwind CSS v4 với custom theme tokens
- **Language**: TypeScript
- **Animations**: CSS Keyframes + React Effects
- **Language**: Vietnamese (vi)
- **Performance**: 60fps, GPU-accelerated animations

---

## 🎨 Design System

### Color Palette

```css
Accent Primary:   #00d4ff (Cyan - Chủ đạo)
Accent Secondary: #ff006e (Magenta - Phụ)
Accent Tertiary:  #8000ff (Purple - Bổ trợ)
Background:       #0a0e27 (Deep Navy)
Surface:          #13182a (Light Navy)
Text Primary:     #f0f4f8 (Light)
Text Secondary:   #a8b2c1 (Medium)
Text Tertiary:    #6b7494 (Dark)
```

### Typography

```
Headings: Geist Sans (Bold, 500, 700)
Body:     Geist Sans (Regular, 400)
Monospace: Geist Mono
```

### Spacing Scale

```
xs: 0.25rem (4px)
sm: 0.5rem  (8px)
md: 1rem    (16px)
lg: 1.5rem  (24px)
xl: 2rem    (32px)
```

---

## 📁 Project Structure

```
app/
├── components/          # React components
│   ├── Header.tsx      # Navigation header
│   ├── Hero.tsx        # Hero section with particles
│   ├── Services.tsx    # Services grid
│   ├── CTA.tsx         # Call-to-action section
│   └── Footer.tsx      # Footer with links
├── globals.css         # Global styles + animations
├── layout.tsx          # Root layout
├── page.tsx            # Home page
└── favicon.ico

public/                 # Static assets
postcss.config.mjs      # PostCSS config
tsconfig.json          # TypeScript config
next.config.ts         # Next.js config
package.json           # Dependencies
```

---

## 🎬 Animations

### Keyframe Animations

| Animation | Duration | Use Case |
|-----------|----------|----------|
| fadeInUp | 0.6s | Entrance from bottom |
| fadeInDown | 0.6s | Entrance from top |
| slideUp | 0.8s | Slide and fade |
| glow | 2s (infinite) | Glowing effect |
| float | 3s (infinite) | Floating motion |
| shimmer | 2s (infinite) | Shimmer effect |

### Utility Classes

```html
<!-- Entrance animations -->
<div class="animate-fade-in-up">Content</div>
<div class="animate-fade-in-down">Content</div>
<div class="animate-slide-up">Content</div>

<!-- Continuous animations -->
<div class="animate-glow">Glowing</div>
<div class="animate-float">Floating</div>

<!-- Hover effects -->
<div class="hover-lift hover-glow">Hover me</div>

<!-- Gradient text -->
<h1 class="gradient-text">Colored Text</h1>
```

### Animation Delays

Sử dụng inline styles để set animation delays:

```jsx
<div style={{ animationDelay: '0.1s' }} className="animate-fade-in-up">
  Delayed content
</div>
```

---

## 🛠️ Components

### Header Component
- Sticky navigation với fade-in animation
- Desktop menu with underline animation
- Mobile hamburger menu
- CTA button với glow effect
- Logo with gradient

**Props**: None (standalone)

### Hero Component
- Full-screen hero section
- Animated background orbs
- Particle effects (50+ particles)
- Staggered text animations
- Stats counter với gradient text
- CTA buttons

**Features**:
- useRef for particle generation
- Dynamic animation delays
- Responsive grid for stats

### Services Component
- 6 service cards
- Staggered entrance animations
- Hover lift + glow effects
- Feature tags
- Icon scale animation on hover

**Services**:
1. AI & Machine Learning
2. Cloud Computing
3. Bảo Mật Dữ Liệu
4. Big Data Analytics
5. DevOps & CI/CD
6. Web3 & Blockchain

### CTA Component
- Full-width section
- Text gradient animation
- Dual CTA buttons
- Stats grid
- Background floating orbs

### Footer Component
- 4-column link structure
- Staggered animations
- Social icons
- Copyright
- Responsive grid

---

## 🚀 Getting Started

### Installation

```bash
# Install dependencies
npm install

# Start dev server
npm run dev

# Build for production
npm run build

# Start production server
npm start
```

### Development

Dev server chạy tại: **http://localhost:3000**

- HMR enabled (hot module replacement)
- TypeScript checking
- ESLint enabled
- Tailwind CSS watch mode

---

## 📝 Customization Guide

### Thay đổi Colors

Chỉnh sửa `app/globals.css`:

```css
:root {
  --accent-primary: #00d4ff;      /* Thay đổi màu chính */
  --accent-secondary: #ff006e;    /* Thay đổi màu phụ */
  --accent-tertiary: #8000ff;     /* Thay đổi màu bổ trợ */
  --background: #0a0e27;          /* Thay đổi nền */
}
```

### Thay đổi Animation Speed

Trong component files hoặc CSS:

```jsx
// Trong component
<div style={{ animationDelay: '0.2s' }} className="animate-fade-in-up">

// Trong CSS
.animate-custom {
  animation: fadeInUp 1.0s ease-out;  /* Thay đổi duration */
}
```

### Thêm Animation Mới

1. Define keyframes trong `app/globals.css`:

```css
@keyframes myAnimation {
  from {
    opacity: 0;
    transform: scale(0.5);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
```

2. Tạo utility class:

```css
.animate-my-animation {
  animation: myAnimation 0.6s ease-out;
}
```

3. Sử dụng:

```jsx
<div className="animate-my-animation">Content</div>
```

### Thêm Service Card Mới

Chỉnh sửa `app/components/Services.tsx`:

```jsx
const services = [
  // ... existing services
  {
    icon: '🔧',
    title: 'New Service',
    description: 'Service description here',
    features: ['Feature 1', 'Feature 2'],
  },
];
```

---

## 📊 Performance

### Optimization Tips

1. **Animations**: Chỉ sử dụng `transform` và `opacity`
2. **Will-change**: Áp dụng cho frequently animated elements
3. **Intersection Observer**: Lazy-load animations khi scroll
4. **GPU Acceleration**: `will-change: transform`

### Lighthouse Scores

Target:
- Performance: 90+
- Accessibility: 95+
- Best Practices: 95+
- SEO: 100

---

## 🌐 SEO

### Metadata

- Title: "24HCV - Công Nghệ Tương Lai | Modern Tech Innovation"
- Description: Chi tiết về dịch vụ công nghệ
- Keywords: công nghệ, AI, Cloud Computing, Digital Transformation
- Language: Vietnamese (vi)
- Theme Color: #00d4ff

### OpenGraph

Cấu hình trong `app/layout.tsx`:

```tsx
export const metadata: Metadata = {
  title: "...",
  description: "...",
  openGraph: {
    title: "...",
    description: "...",
    images: [{ url: "...", width: 1200, height: 630 }],
  },
};
```

---

## 🔧 Deployment

### Vercel

```bash
# Deploy
vercel

# Preview
vercel --prod
```

### Environment Variables

Tạo `.env.local`:

```
NEXT_PUBLIC_API_URL=https://api.example.com
```

---

## 📱 Responsive Design

### Breakpoints

```
sm: 640px
md: 768px
lg: 1024px
xl: 1280px
2xl: 1536px
```

### Mobile-First Approach

Tất cả styles mặc định cho mobile, sau đó thêm larger breakpoints:

```jsx
<div className="text-sm md:text-base lg:text-lg">
  Responsive text
</div>
```

---

## 🎯 Key Features

✅ **Modern Design**
- Gradient text
- Glass morphism elements
- Smooth transitions

✅ **Animations**
- 60fps performance
- Staggered reveals
- Hover interactions
- Particle effects

✅ **Responsive**
- Mobile-first design
- Touch-friendly
- Adaptive layouts

✅ **Accessibility**
- Semantic HTML
- ARIA labels
- Keyboard navigation
- respects prefers-reduced-motion

✅ **Performance**
- Server-side rendering
- Image optimization
- Code splitting
- Lazy loading

---

## 📚 Dependencies

```json
{
  "next": "^15.1.3",
  "react": "^19.1.0",
  "tailwindcss": "^4.0.0",
  "typescript": "^5.7.3"
}
```

---

## 🐛 Troubleshooting

### Animations not showing

1. Kiểm tra `app/globals.css` được import
2. Kiểm tra class names chính xác
3. Verify Tailwind config recognizes custom classes

### Colors not applying

1. Kiểm tra CSS variables trong `:root`
2. Verify dark mode settings
3. Clear `.next` folder và rebuild

### Performance issues

1. Giảm số lượng particles
2. Increase animation duration
3. Use `will-change` judiciously
4. Profile with Chrome DevTools

---

## 📞 Support

Các tài liệu hữu ích:
- [Next.js Docs](https://nextjs.org/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [React Docs](https://react.dev)
- [Web Animations API](https://developer.mozilla.org/en-US/docs/Web/API/Web_Animations_API)

---

## 📄 License

Copyright © 2024 24HCV. All rights reserved.

---

## 🎉 Version History

### v1.0.0 (Current)
- ✨ Initial React implementation with Next.js 16
- 🎨 Modern Tailwind v4 theme
- 🎬 25+ CSS animations
- 📱 Fully responsive design
- 🌐 Vietnamese language support
- ⚡ 60fps performance
- ♿ Full accessibility support

---

**Created with ❤️ by v0**

Last updated: 2024-07-07
