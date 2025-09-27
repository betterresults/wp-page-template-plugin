import React from 'react';
import { Link } from 'react-router-dom';

interface FooterProps {
  className?: string;
  variant?: 'default' | 'dark';
}

const Footer: React.FC<FooterProps> = ({ className = '', variant = 'default' }) => {
  const baseClasses = variant === 'dark' 
    ? 'bg-slate-900 text-white' 
    : 'bg-slate-50 text-slate-900';

  const currentYear = new Date().getFullYear();

  return (
    <footer className={`${baseClasses} ${className}`}>
      <div className="container mx-auto px-4 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div className="space-y-6">
            <div className="flex items-center space-x-2">
              <div className="w-10 h-10 bg-gradient-to-br from-teal-500 to-blue-600 rounded-lg flex items-center justify-center">
                <span className="text-white font-bold text-lg">EC</span>
              </div>
              <div>
                <span className="text-lg font-bold">End of Tenancy</span>
                <div className="text-sm opacity-80">Cleaning Services</div>
              </div>
            </div>
            <p className={`text-sm leading-relaxed ${variant === 'dark' ? 'text-slate-300' : 'text-slate-600'}`}>
              Professional end of tenancy cleaning services across London. We guarantee your deposit return with our comprehensive cleaning solutions.
            </p>
            <div className="flex space-x-4">
              <a 
                href="#" 
                className={`p-2 rounded-lg transition-colors duration-200 ${
                  variant === 'dark' 
                    ? 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white' 
                    : 'bg-white hover:bg-slate-100 text-slate-600 hover:text-slate-900'
                }`}
                aria-label="Facebook"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a 
                href="#" 
                className={`p-2 rounded-lg transition-colors duration-200 ${
                  variant === 'dark' 
                    ? 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white' 
                    : 'bg-white hover:bg-slate-100 text-slate-600 hover:text-slate-900'
                }`}
                aria-label="Twitter"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
              <a 
                href="#" 
                className={`p-2 rounded-lg transition-colors duration-200 ${
                  variant === 'dark' 
                    ? 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white' 
                    : 'bg-white hover:bg-slate-100 text-slate-600 hover:text-slate-900'
                }`}
                aria-label="Instagram"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-2.47 0-4.472-2.002-4.472-4.472s2.002-4.472 4.472-4.472c2.47 0 4.472 2.002 4.472 4.472s-2.002 4.472-4.472 4.472z"/>
                </svg>
              </a>
              <a 
                href="#" 
                className={`p-2 rounded-lg transition-colors duration-200 ${
                  variant === 'dark' 
                    ? 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white' 
                    : 'bg-white hover:bg-slate-100 text-slate-600 hover:text-slate-900'
                }`}
                aria-label="LinkedIn"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div className="space-y-6">
            <h3 className="text-lg font-semibold">Quick Links</h3>
            <nav className="flex flex-col space-y-3">
              <Link 
                to="/" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Home
              </Link>
              <Link 
                to="/services" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Our Services
              </Link>
              <Link 
                to="/areas" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Service Areas
              </Link>
              <Link 
                to="/about" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                About Us
              </Link>
              <Link 
                to="/contact" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Contact
              </Link>
              <Link 
                to="/faq" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                FAQ
              </Link>
            </nav>
          </div>

          {/* Services */}
          <div className="space-y-6">
            <h3 className="text-lg font-semibold">Our Services</h3>
            <nav className="flex flex-col space-y-3">
              <Link 
                to="/services/end-of-tenancy" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                End of Tenancy Cleaning
              </Link>
              <Link 
                to="/services/carpet-cleaning" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Carpet Cleaning
              </Link>
              <Link 
                to="/services/deep-cleaning" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Deep Cleaning
              </Link>
              <Link 
                to="/services/oven-cleaning" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Oven Cleaning
              </Link>
              <Link 
                to="/services/window-cleaning" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Window Cleaning
              </Link>
              <Link 
                to="/guarantee" 
                className={`transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                }`}
              >
                Our Guarantee
              </Link>
            </nav>
          </div>

          {/* Contact Info */}
          <div className="space-y-6">
            <h3 className="text-lg font-semibold">Get In Touch</h3>
            <div className="space-y-4">
              <div className="flex items-start space-x-3">
                <div className={`mt-1 p-2 rounded-lg ${
                  variant === 'dark' ? 'bg-slate-800' : 'bg-white'
                }`}>
                  <svg className="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div>
                  <div className="font-medium">Phone</div>
                  <a 
                    href="tel:+44" 
                    className={`transition-colors duration-200 hover:text-teal-600 ${
                      variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                    }`}
                  >
                    020 XXXX XXXX
                  </a>
                </div>
              </div>

              <div className="flex items-start space-x-3">
                <div className={`mt-1 p-2 rounded-lg ${
                  variant === 'dark' ? 'bg-slate-800' : 'bg-white'
                }`}>
                  <svg className="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <div className="font-medium">Email</div>
                  <a 
                    href="mailto:info@endoftenancycleaning.com" 
                    className={`transition-colors duration-200 hover:text-teal-600 ${
                      variant === 'dark' ? 'text-slate-300' : 'text-slate-600'
                    }`}
                  >
                    info@endoftenancycleaning.com
                  </a>
                </div>
              </div>

              <div className="flex items-start space-x-3">
                <div className={`mt-1 p-2 rounded-lg ${
                  variant === 'dark' ? 'bg-slate-800' : 'bg-white'
                }`}>
                  <svg className="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <div className="font-medium">Service Area</div>
                  <div className={`${variant === 'dark' ? 'text-slate-300' : 'text-slate-600'}`}>
                    London & Surrounding Areas
                  </div>
                </div>
              </div>

              <div className="pt-4">
                <Link 
                  to="/quote" 
                  className="inline-block w-full text-center bg-gradient-to-r from-teal-600 to-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-teal-700 hover:to-blue-700 transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
                >
                  Get Free Quote
                </Link>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className={`mt-12 pt-8 border-t ${
          variant === 'dark' ? 'border-slate-800' : 'border-slate-200'
        }`}>
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div className={`text-sm ${variant === 'dark' ? 'text-slate-400' : 'text-slate-600'}`}>
              © {currentYear} End of Tenancy Cleaning Services. All rights reserved.
            </div>
            <div className="flex space-x-6">
              <Link 
                to="/privacy" 
                className={`text-sm transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-400' : 'text-slate-600'
                }`}
              >
                Privacy Policy
              </Link>
              <Link 
                to="/terms" 
                className={`text-sm transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-400' : 'text-slate-600'
                }`}
              >
                Terms of Service
              </Link>
              <Link 
                to="/cookies" 
                className={`text-sm transition-colors duration-200 hover:text-teal-600 ${
                  variant === 'dark' ? 'text-slate-400' : 'text-slate-600'
                }`}
              >
                Cookie Policy
              </Link>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;