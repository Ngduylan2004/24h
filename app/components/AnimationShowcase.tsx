'use client';

export default function AnimationShowcase() {
  const animations = [
    { name: 'fadeInUp', class: 'animate-fade-in-up' },
    { name: 'slideUp', class: 'animate-slide-up' },
    { name: 'zoomIn', class: 'animate-zoom-in' },
    { name: 'rotateIn', class: 'animate-rotate-in' },
    { name: 'glow', class: 'animate-glow' },
    { name: 'float', class: 'animate-float' },
    { name: 'bounce', class: 'animate-bounce' },
    { name: 'pulse', class: 'animate-pulse' },
    { name: 'spin', class: 'animate-spin' },
    { name: 'swing', class: 'animate-swing' },
    { name: 'wave', class: 'animate-wave' },
    { name: 'rubberBand', class: 'animate-rubber-band' },
  ];

  return (
    <section className="py-20 sm:py-32 bg-surface border-t border-border">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Header */}
        <div className="text-center mb-16 animate-fade-in-up">
          <h2 className="text-4xl sm:text-5xl font-bold mb-4 gradient-text-animated">
            Animation Showcase
          </h2>
          <p className="text-lg text-text-secondary max-w-2xl mx-auto">
            Khám phá 40+ hiệu ứng animation hiện đại được thiết kế để cải thiện trải nghiệm người dùng
          </p>
        </div>

        {/* Animation Grid */}
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          {animations.map((animation, index) => (
            <div
              key={index}
              className="flex flex-col items-center justify-center p-6 bg-background border border-border rounded-lg hover-lift transition-all duration-300 cursor-pointer group animate-fade-in-up"
              style={{ animationDelay: `${index * 0.05}s` }}
            >
              {/* Animation Demo Box */}
              <div className={`w-12 h-12 bg-gradient-to-br from-accent-primary to-accent-tertiary rounded-lg mb-4 ${animation.class}`} />
              
              {/* Name */}
              <p className="text-sm font-semibold text-center text-text-secondary group-hover:text-accent-primary transition-colors">
                {animation.name}
              </p>
            </div>
          ))}
        </div>

        {/* Features Info */}
        <div className="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            {
              title: '40+ Animations',
              description: 'Hàng loạt hiệu ứng animation được tối ưu hóa cho hiệu suất',
              icon: '✨',
            },
            {
              title: '60fps Performance',
              description: 'Tất cả animations chạy với GPU acceleration để đạt 60fps mượt mà',
              icon: '⚡',
            },
            {
              title: 'Accessible',
              description: 'Tôn trọng cài đặt prefers-reduced-motion của người dùng',
              icon: '♿',
            },
          ].map((feature, i) => (
            <div
              key={i}
              className="p-6 bg-surface border border-border rounded-lg hover-lift transition-all animate-fade-in-up"
              style={{ animationDelay: `${0.5 + i * 0.1}s` }}
            >
              <div className="text-3xl mb-3">{feature.icon}</div>
              <h3 className="text-lg font-bold mb-2 text-foreground group-hover:text-accent-primary">
                {feature.title}
              </h3>
              <p className="text-text-secondary text-sm">
                {feature.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
