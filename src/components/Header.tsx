import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import { Phone, MessageCircle } from 'lucide-react';
import snLogo from '@/assets/sn-cleaning-logo.png';

interface HeaderProps {
  className?: string;
  variant?: 'default' | 'transparent';
}

const Header: React.FC<HeaderProps> = ({ className = '', variant = 'default' }) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const baseClasses = variant === 'transparent' 
    ? 'fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-white/20' 
    : 'bg-white border-b border-border';

  return (
    <header className={`${baseClasses} ${className}`}>
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-16 lg:h-20">
          {/* Logo */}
          <Link to="/" className="flex items-center hover:opacity-90 transition-all duration-300">
            <img 
              src={snLogo} 
              alt="SN Cleaning Services" 
              className="h-12 w-auto"
            />
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center space-x-10">
            <Link 
              to="/" 
              className="relative text-foreground hover:text-primary font-semibold transition-all duration-300 group py-2"
            >
              Home
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-primary-light group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/services" 
              className="relative text-foreground hover:text-primary font-semibold transition-all duration-300 group py-2"
            >
              Services
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-primary-light group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/about" 
              className="relative text-foreground hover:text-primary font-semibold transition-all duration-300 group py-2"
            >
              About Us
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-primary-light group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/faq" 
              className="relative text-foreground hover:text-primary font-semibold transition-all duration-300 group py-2"
            >
              FAQ
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-primary-light group-hover:w-full transition-all duration-300"></span>
            </Link>
          </nav>

          {/* CTA Buttons */}
          <div className="hidden lg:flex items-center space-x-4">
            <a 
              href="tel:+442038355033" 
              className="flex items-center justify-center w-10 h-10 text-primary hover:text-primary-foreground hover:bg-primary rounded-xl transition-all duration-300 group hover:shadow-md"
              aria-label="Call us"
            >
              <Phone className="w-5 h-5 group-hover:scale-110 transition-transform duration-300" />
            </a>
            <a 
              href="https://wa.me/442038355033" 
              target="_blank"
              rel="noopener noreferrer"
              className="flex items-center justify-center w-10 h-10 text-primary hover:text-primary-foreground hover:bg-primary rounded-xl transition-all duration-300 group hover:shadow-md"
              aria-label="WhatsApp us"
            >
              <MessageCircle className="w-5 h-5 group-hover:scale-110 transition-transform duration-300" />
            </a>
            <Link 
              to="/quote" 
              className="bg-gradient-to-r from-primary to-primary-light text-primary-foreground px-7 py-3 rounded-xl font-bold hover:shadow-lg hover:-translate-y-1 hover:scale-105 transition-all duration-300"
            >
              Get Free Quote
            </Link>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="lg:hidden p-2 text-foreground hover:text-primary transition-colors duration-200"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            aria-label="Toggle menu"
          >
            <svg 
              className={`w-6 h-6 transition-transform duration-200 ${isMenuOpen ? 'rotate-90' : ''}`} 
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              {isMenuOpen ? (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
              ) : (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
              )}
            </svg>
          </button>
        </div>

        {/* Mobile Navigation */}
        <div className={`lg:hidden transition-all duration-300 ease-in-out ${
          isMenuOpen 
            ? 'max-h-screen opacity-100 pb-6' 
            : 'max-h-0 opacity-0 overflow-hidden'
        }`}>
          <nav className="flex flex-col space-y-4 pt-4 border-t border-border">
            <Link 
              to="/" 
              className="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              Home
            </Link>
            <Link 
              to="/services" 
              className="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              Services
            </Link>
            <Link 
              to="/about" 
              className="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              About Us
            </Link>
            <Link 
              to="/faq" 
              className="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              FAQ
            </Link>
            
            {/* Mobile CTA */}
            <div className="pt-4 border-t border-border space-y-3">
              <div className="flex gap-3">
                <a 
                  href="tel:+442038355033" 
                  className="flex-1 flex items-center justify-center gap-2 bg-muted text-foreground py-3 rounded-lg font-semibold hover:bg-primary hover:text-primary-foreground transition-all duration-300"
                >
                  <Phone className="w-4 h-4" />
                  Call
                </a>
                <a 
                  href="https://wa.me/442038355033" 
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex-1 flex items-center justify-center gap-2 bg-muted text-foreground py-3 rounded-lg font-semibold hover:bg-primary hover:text-primary-foreground transition-all duration-300"
                >
                  <MessageCircle className="w-4 h-4" />
                  WhatsApp
                </a>
              </div>
              <Link 
                to="/quote" 
                className="block w-full text-center bg-gradient-to-r from-primary to-primary-light text-primary-foreground py-3 rounded-xl font-bold hover:shadow-lg transition-all duration-300"
                onClick={() => setIsMenuOpen(false)}
              >
                Get Free Quote
              </Link>
            </div>
          </nav>
        </div>
      </div>
    </header>
  );
};

export default Header;