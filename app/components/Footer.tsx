'use client';

import Link from 'next/link';

export default function Footer() {
  const currentYear = new Date().getFullYear();

  const footerLinks = [
    {
      title: 'Sản Phẩm',
      links: ['AI Solutions', 'Cloud Services', 'Security', 'Analytics'],
    },
    {
      title: 'Công Ty',
      links: ['Về Chúng Tôi', 'Blog', 'Việc Làm', 'Liên Hệ'],
    },
    {
      title: 'Pháp Lý',
      links: ['Chính Sách Bảo Mật', 'Điều Khoản Dịch Vụ', 'Cookie', 'GDPR'],
    },
    {
      title: 'Kết Nối',
      links: ['Twitter', 'LinkedIn', 'GitHub', 'Discord'],
    },
  ];

  return (
    <footer className="bg-surface border-t border-border">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Main Footer */}
        <div className="py-12 sm:py-16 grid grid-cols-2 md:grid-cols-4 gap-8">
          {footerLinks.map((column, i) => (
            <div key={i} className="animate-fade-in-up" style={{ animationDelay: `${i * 0.1}s` }}>
              <h3 className="font-bold text-foreground mb-4">{column.title}</h3>
              <ul className="space-y-2">
                {column.links.map((link, j) => (
                  <li key={j}>
                    <Link
                      href="#"
                      className="text-text-secondary hover:text-accent-primary transition-colors duration-300"
                    >
                      {link}
                    </Link>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        {/* Divider */}
        <div className="border-t border-border" />

        {/* Bottom Footer */}
        <div className="py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
          {/* Logo & Copyright */}
          <div className="flex items-center space-x-2">
            <div className="w-6 h-6 bg-gradient-to-br from-accent-primary to-accent-tertiary rounded-lg flex items-center justify-center">
              <span className="text-xs font-bold text-background">24</span>
            </div>
            <span className="text-sm text-text-secondary">
              &copy; {currentYear} 24HCV. Bảo lưu mọi quyền.
            </span>
          </div>

          {/* Social Icons */}
          <div className="flex items-center space-x-4">
            {['Twitter', 'LinkedIn', 'GitHub', 'Discord'].map((social) => (
              <a
                key={social}
                href="#"
                className="w-8 h-8 rounded-full bg-border hover:bg-accent-primary/20 flex items-center justify-center text-text-secondary hover:text-accent-primary transition-all duration-300 hover-lift"
              >
                <span className="text-xs">
                  {social === 'Twitter' && '𝕏'}
                  {social === 'LinkedIn' && 'in'}
                  {social === 'GitHub' && '⚙'}
                  {social === 'Discord' && '⏰'}
                </span>
              </a>
            ))}
          </div>
        </div>
      </div>
    </footer>
  );
}
