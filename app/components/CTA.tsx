'use client';

export default function CTA() {
  return (
    <section className="py-20 sm:py-32 bg-gradient-to-r from-surface via-background to-surface-secondary relative overflow-hidden">
      {/* Background animation */}
      <div className="absolute inset-0 opacity-20">
        <div className="absolute top-0 left-0 w-96 h-96 bg-accent-primary/30 rounded-full blur-3xl animate-float" />
        <div className="absolute bottom-0 right-0 w-96 h-96 bg-accent-tertiary/30 rounded-full blur-3xl animate-float" style={{ animationDelay: '1s' }} />
      </div>

      <div className="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {/* Main heading */}
        <h2 className="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in-up gradient-text-animated">
          Sẵn Sàng Bắt Đầu?
        </h2>

        <p className="text-lg sm:text-xl text-text-secondary mb-8 max-w-2xl mx-auto animate-fade-in-up delay-100">
          Hãy liên hệ với chúng tôi ngay hôm nay để khám phá cách chúng tôi có thể giúp doanh nghiệp của bạn phát triển.
        </p>

        {/* CTA Buttons */}
        <div className="flex flex-col sm:flex-row items-center justify-center gap-6 mb-12 animate-fade-in-up delay-200">
          <button className="px-8 py-4 bg-gradient-to-r from-accent-primary to-accent-secondary text-background rounded-lg font-semibold hover-glow-strong hover-lift-big transition-all duration-300 shadow-lg text-lg animate-glow-pulse">
            Liên Hệ Ngay
          </button>
          <button className="px-8 py-4 border-2 border-accent-primary text-accent-primary rounded-lg font-semibold hover:bg-accent-primary/10 hover:border-accent-tertiary hover-lift-big transition-all duration-300 hover:text-accent-tertiary animate-border-flow">
            Xem Demo
          </button>
        </div>

        {/* Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mt-12">
          {[
            { number: '98%', label: 'Tỷ Lệ Hài Lòng' },
            { number: '150+', label: 'Dự Án Thành Công' },
            { number: '50+', label: 'Chuyên Gia' },
            { number: '24/7', label: 'Hỗ Trợ Kỹ Thuật' },
          ].map((stat, i) => (
            <div
              key={i}
              className="p-4 rounded-lg border border-border/50 hover-lift hover:border-accent-primary/50 animate-fade-in-up transition-all duration-300 group"
              style={{ animationDelay: `${0.3 + i * 0.08}s` }}
            >
              <div className="text-2xl sm:text-3xl font-bold gradient-text group-hover:animate-pulse">{stat.number}</div>
              <div className="text-sm text-text-secondary mt-2 group-hover:text-text-primary transition-colors">{stat.label}</div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
