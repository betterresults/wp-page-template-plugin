import React, { useState } from 'react';
import { Link } from 'react-router-dom';

interface HeaderProps {
  className?: string;
  variant?: 'default' | 'transparent';
}

const Header: React.FC<HeaderProps> = ({ className = '', variant = 'default' }) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const baseClasses = variant === 'transparent' 
    ? 'fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-white/20' 
    : 'bg-white border-b border-slate-200';

  return (
    <header className={`${baseClasses} ${className}`}>
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-16 lg:h-20">
          {/* Logo */}
          <Link to="/" className="flex items-center space-x-3 hover:opacity-90 transition-all duration-300 group">
            <div className="w-12 h-12 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-0.5">
              <span className="text-white font-bold text-xl">SN</span>
            </div>
            <div className="hidden sm:block">
              <span className="text-2xl font-bold bg-gradient-to-r from-blue-700 to-blue-900 bg-clip-text text-transparent">SN Cleaning</span>
              <div className="text-sm font-medium text-slate-600 -mt-1">Professional Services</div>
            </div>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center space-x-10">
            <Link 
              to="/" 
              className="relative text-slate-700 hover:text-blue-600 font-semibold transition-all duration-300 group py-2"
            >
              Home
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/services" 
              className="relative text-slate-700 hover:text-blue-600 font-semibold transition-all duration-300 group py-2"
            >
              Services
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/about" 
              className="relative text-slate-700 hover:text-blue-600 font-semibold transition-all duration-300 group py-2"
            >
              About Us
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 group-hover:w-full transition-all duration-300"></span>
            </Link>
            <Link 
              to="/faq" 
              className="relative text-slate-700 hover:text-blue-600 font-semibold transition-all duration-300 group py-2"
            >
              FAQ
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-blue-700 group-hover:w-full transition-all duration-300"></span>
            </Link>
          </nav>

          {/* CTA Buttons */}
          <div className="hidden lg:flex items-center space-x-5">
            <a 
              href="tel:+442038355033" 
              className="flex items-center space-x-2 text-slate-700 hover:text-blue-600 font-semibold transition-all duration-300 group"
            >
              <svg className="w-4 h-4 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span>020 3835 5033</span>
            </a>
            <Link 
              to="/quote" 
              className="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-7 py-3 rounded-xl font-bold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:scale-105"
            >
              Get Free Quote
            </Link>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="lg:hidden p-2 text-slate-700 hover:text-teal-600 transition-colors duration-200"
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
          <nav className="flex flex-col space-y-4 pt-4 border-t border-slate-200">
            <Link 
              to="/" 
              className="text-slate-700 hover:text-blue-600 font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              Home
            </Link>
            <Link 
              to="/services" 
              className="text-slate-700 hover:text-blue-600 font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              Services
            </Link>
            <Link 
              to="/about" 
              className="text-slate-700 hover:text-blue-600 font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              About Us
            </Link>
            <Link 
              to="/faq" 
              className="text-slate-700 hover:text-blue-600 font-semibold transition-colors duration-300 py-3"
              onClick={() => setIsMenuOpen(false)}
            >
              FAQ
            </Link>
            
            {/* Mobile CTA */}
            <div className="pt-4 border-t border-slate-200 space-y-3">
              <a 
                href="tel:+442038355033" 
                className="block w-full text-center bg-slate-100 text-slate-700 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-colors duration-300"
              >
                Call: 020 3835 5033
              </a>
              <Link 
                to="/quote" 
                className="block w-full text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-xl font-bold hover:from-blue-700 hover:to-blue-800 transition-all duration-300"
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