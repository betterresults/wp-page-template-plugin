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
          <Link to="/" className="flex items-center space-x-2 hover:opacity-80 transition-opacity">
            <div className="w-10 h-10 bg-gradient-to-br from-teal-500 to-blue-600 rounded-lg flex items-center justify-center">
              <span className="text-white font-bold text-lg">EC</span>
            </div>
            <div className="hidden sm:block">
              <span className="text-xl font-bold text-slate-900">End of Tenancy</span>
              <div className="text-sm text-slate-600">Cleaning Services</div>
            </div>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center space-x-8">
            <Link 
              to="/" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              Home
            </Link>
            <Link 
              to="/services" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              Services
            </Link>
            <Link 
              to="/areas" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              Areas We Cover
            </Link>
            <Link 
              to="/about" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              About Us
            </Link>
            <Link 
              to="/contact" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              Contact
            </Link>
            <Link 
              to="/faq" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              FAQ
            </Link>
          </nav>

          {/* CTA Buttons */}
          <div className="hidden lg:flex items-center space-x-4">
            <a 
              href="tel:+44" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200"
            >
              020 XXXX XXXX
            </a>
            <Link 
              to="/quote" 
              className="bg-gradient-to-r from-teal-600 to-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:from-teal-700 hover:to-blue-700 transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
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
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              Home
            </Link>
            <Link 
              to="/services" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              Services
            </Link>
            <Link 
              to="/areas" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              Areas We Cover
            </Link>
            <Link 
              to="/about" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              About Us
            </Link>
            <Link 
              to="/contact" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              Contact
            </Link>
            <Link 
              to="/faq" 
              className="text-slate-700 hover:text-teal-600 font-medium transition-colors duration-200 py-2"
              onClick={() => setIsMenuOpen(false)}
            >
              FAQ
            </Link>
            
            {/* Mobile CTA */}
            <div className="pt-4 border-t border-slate-200 space-y-3">
              <a 
                href="tel:+44" 
                className="block w-full text-center bg-slate-100 text-slate-700 py-3 rounded-lg font-medium hover:bg-slate-200 transition-colors duration-200"
              >
                Call: 020 XXXX XXXX
              </a>
              <Link 
                to="/quote" 
                className="block w-full text-center bg-gradient-to-r from-teal-600 to-blue-600 text-white py-3 rounded-lg font-semibold hover:from-teal-700 hover:to-blue-700 transition-all duration-200"
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