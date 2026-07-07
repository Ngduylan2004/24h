'use client';

import { useState } from 'react';
import Link from 'next/link';

export default function Header() {
  const [isOpen, setIsOpen] = useState(false);

  const navLinks = [
    { label: 'Trang Chủ', href: '#' },
    { label: 'Dịch Vụ', href: '#services' },
    { label: 'Công Nghệ', href: '#tech' },
    { label: 'Về Chúng Tôi', href: '#about' },
    { label: 'Liên Hệ', href: '#contact' },
  ];

  return (
    <header className="sticky top-0 z-50 w-full border-b border-border/50 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60 animate-fade-in-down">
      <nav className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        {/* Logo */}
        <Link href="/" className="flex items-center space-x-2 hover-lift">
          <div className="w-8 h-8 bg-gradient-to-br from-accent-primary to-accent-tertiary rounded-lg flex items-center justify-center">
            <span className="text-sm font-bold text-background">24</span>
          </div>
          <span className="text-xl font-bold gradient-text">HCV</span>
        </Link>

        {/* Desktop Navigation */}
        <div className="hidden md:flex items-center space-x-8">
          {navLinks.map((link) => (
            <a
              key={link.label}
              href={link.href}
              className="relative text-text-secondary hover:text-accent-primary transition-colors duration-300 group"
            >
              {link.label}
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-accent-primary to-accent-tertiary group-hover:w-full transition-all duration-300" />
            </a>
          ))}
        </div>

        {/* CTA Button */}
        <div className="hidden md:flex items-center space-x-4">
          <button className="px-6 py-2 bg-gradient-to-r from-accent-primary to-accent-tertiary text-background rounded-full font-semibold hover-glow hover-lift transition-all duration-300 shadow-lg">
            Liên Hệ Ngay
          </button>
        </div>

        {/* Mobile Menu Button */}
        <button
          onClick={() => setIsOpen(!isOpen)}
          className="md:hidden p-2 text-text-secondary hover:text-accent-primary transition-colors"
        >
          <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </nav>

      {/* Mobile Menu */}
      {isOpen && (
        <div className="md:hidden bg-surface border-t border-border animate-slide-up">
          <div className="px-4 py-4 space-y-3">
            {navLinks.map((link) => (
              <a
                key={link.label}
                href={link.href}
                className="block px-3 py-2 text-text-secondary hover:text-accent-primary hover:bg-surface-secondary rounded-lg transition-all duration-300"
              >
                {link.label}
              </a>
            ))}
            <button className="w-full px-3 py-2 bg-gradient-to-r from-accent-primary to-accent-tertiary text-background rounded-lg font-semibold hover-lift transition-all">
              Liên Hệ Ngay
            </button>
          </div>
        </div>
      )}
    </header>
  );
}
