'use client';

import { useEffect, useRef } from 'react';

export default function Hero() {
  const containerRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    // Create particles
    const container = containerRef.current;
    if (!container) return;

    for (let i = 0; i < 50; i++) {
      const particle = document.createElement('div');
      particle.className = 'absolute w-1 h-1 bg-accent-primary rounded-full opacity-50';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.top = Math.random() * 100 + '%';
      particle.style.animation = `float ${3 + Math.random() * 4}s ease-in-out infinite`;
      particle.style.animationDelay = Math.random() * 2 + 's';
      container.appendChild(particle);
    }
  }, []);

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-b from-background via-background to-surface">
      {/* Animated Background */}
      <div ref={containerRef} className="absolute inset-0 pointer-events-none">
        {/* Large gradient orbs */}
        <div className="absolute top-20 left-20 w-96 h-96 bg-accent-tertiary/20 rounded-full blur-3xl animate-float" />
        <div className="absolute bottom-20 right-20 w-96 h-96 bg-accent-primary/20 rounded-full blur-3xl animate-float" style={{ animationDelay: '1s' }} />
      </div>

      {/* Content */}
      <div className="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {/* Floating badge */}
        <div className="mb-6 inline-block animate-fade-in-down">
          <span className="px-4 py-2 bg-surface border border-border rounded-full text-sm text-accent-primary font-semibold">
            ✨ Công Nghệ Tương Lai
          </span>
        </div>

        {/* Main title */}
        <h1 className="mb-6 text-5xl sm:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in-up" style={{ animationDelay: '0.1s' }}>
          Khám Phá <span className="gradient-text">Công Nghệ</span> Tiên Tiến
        </h1>

        {/* Subtitle */}
        <p className="mb-8 text-lg sm:text-xl text-text-secondary max-w-2xl mx-auto animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
          Giải pháp công nghệ hiện đại với các animation tuyệt vời nhất. Khám phá AI, Cloud Computing, và Digital Transformation.
        </p>

        {/* CTA Buttons */}
        <div className="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style={{ animationDelay: '0.3s' }}>
          <button className="px-8 py-3 bg-gradient-to-r from-accent-primary to-accent-secondary text-background rounded-lg font-semibold hover-glow hover-lift transition-all duration-300 shadow-lg">
            Bắt Đầu Ngay
          </button>
          <button className="px-8 py-3 border border-accent-primary text-accent-primary rounded-lg font-semibold hover:bg-accent-primary/10 hover-lift transition-all duration-300">
            Tìm Hiểu Thêm
          </button>
        </div>

        {/* Stats */}
        <div className="mt-16 grid grid-cols-3 gap-4 sm:gap-8">
          {[
            { number: '500+', label: 'Dự Án' },
            { number: '100K+', label: 'Người Dùng' },
            { number: '24/7', label: 'Hỗ Trợ' },
          ].map((stat, i) => (
            <div
              key={i}
              className="p-4 animate-fade-in-up"
              style={{ animationDelay: `${0.4 + i * 0.1}s` }}
            >
              <div className="text-2xl sm:text-3xl font-bold gradient-text">{stat.number}</div>
              <div className="text-sm text-text-secondary mt-2">{stat.label}</div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
