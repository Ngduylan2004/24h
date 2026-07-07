import Header from './components/Header';
import Hero from './components/Hero';
import Services from './components/Services';
import CTA from './components/CTA';
import Footer from './components/Footer';

export default function Home() {
  return (
    <div className="flex flex-col min-h-screen bg-background text-foreground">
      <Header />
      <main className="flex-1">
        <Hero />
        <Services />
        <CTA />
      </main>
      <Footer />
    </div>
  );
}
