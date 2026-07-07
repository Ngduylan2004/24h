'use client';

import { useScrollAnimation } from '@/app/hooks/useScrollAnimation';

export default function Services() {
  const { elementRef, isVisible } = useScrollAnimation();
  const services = [
    {
      icon: '🤖',
      title: 'AI & Machine Learning',
      description: 'Các giải pháp AI tiên tiến giúp tối ưu hóa quy trình kinh doanh của bạn.',
      features: ['NLP', 'Computer Vision', 'Predictive Analytics'],
    },
    {
      icon: '☁️',
      title: 'Cloud Computing',
      description: 'Hạ tầng cloud an toàn, mạnh mẽ, và có khả năng mở rộng.',
      features: ['AWS', 'Azure', 'Google Cloud'],
    },
    {
      icon: '🔐',
      title: 'Bảo Mật Dữ Liệu',
      description: 'Bảo vệ dữ liệu của bạn với mã hóa cấp enterprise.',
      features: ['Encryption', 'DLP', 'Access Control'],
    },
    {
      icon: '📊',
      title: 'Big Data Analytics',
      description: 'Phân tích dữ liệu lớn để đưa ra quyết định thông minh.',
      features: ['Real-time Analysis', 'Data Visualization', 'Insights'],
    },
    {
      icon: '🚀',
      title: 'DevOps & CI/CD',
      description: 'Tự động hóa quy trình triển khai và phát triển phần mềm.',
      features: ['Automation', 'Monitoring', 'Deployment'],
    },
    {
      icon: '🌐',
      title: 'Web3 & Blockchain',
      description: 'Công nghệ blockchain cho tương lai decentralized.',
      features: ['Smart Contracts', 'DeFi', 'NFT Solutions'],
    },
  ];

  return (
    <section id="services" className="py-20 sm:py-32 bg-gradient-to-b from-background to-surface relative">
      {/* Background elements */}
      <div className="absolute top-0 left-0 w-96 h-96 bg-accent-primary/5 rounded-full blur-3xl" />
      <div className="absolute bottom-0 right-0 w-96 h-96 bg-accent-tertiary/5 rounded-full blur-3xl" />

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" ref={elementRef}>
        {/* Header */}
        <div className={`text-center mb-16 ${isVisible ? 'animate-fade-in-up' : 'opacity-0'}`}>
          <h2 className="text-4xl sm:text-5xl font-bold mb-4 gradient-text-animated">
            Dịch Vụ Của Chúng Tôi
          </h2>
          <p className="text-lg text-text-secondary max-w-2xl mx-auto animate-fade-in-up delay-200">
            Các giải pháp công nghệ toàn diện để đưa doanh nghiệp của bạn lên tầm cao mới
          </p>
        </div>

        {/* Services Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          {services.map((service, index) => (
            <div
              key={index}
              className={`group p-6 bg-surface border border-border rounded-2xl hover-lift-big hover-glow-strong transition-all duration-300 cursor-pointer ${
                isVisible ? 'animate-fade-in-up' : 'opacity-0'
              }`}
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              {/* Icon */}
              <div className="text-5xl mb-4 group-hover:scale-110 group-hover:animate-spin-slow transition-all duration-500 inline-block">
                {service.icon}
              </div>

              {/* Title */}
              <h3 className="text-xl font-bold mb-3 text-foreground group-hover:text-accent-primary transition-colors duration-300">
                {service.title}
              </h3>

              {/* Description */}
              <p className="text-text-secondary mb-4 leading-relaxed">
                {service.description}
              </p>

              {/* Features */}
              <div className="flex flex-wrap gap-2">
                {service.features.map((feature, i) => (
                  <span
                    key={i}
                    className="px-3 py-1 bg-accent-primary/10 text-accent-primary text-sm rounded-full border border-accent-primary/20 group-hover:bg-accent-primary/20 transition-all duration-300"
                  >
                    {feature}
                  </span>
                ))}
              </div>

              {/* Arrow */}
              <div className="mt-4 flex items-center text-accent-primary group-hover:translate-x-2 transition-transform duration-300">
                <span>Tìm Hiểu →</span>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
