import React from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';

const HeaderFooterPreview = () => {
  return (
    <div className="min-h-screen flex flex-col">
      {/* Header */}
      <Header />
      
      {/* Main Content Area */}
      <main className="flex-1 flex items-center justify-center bg-white">
        <div className="text-center space-y-8 p-8">
          <div className="space-y-4">
            <h1 className="text-4xl lg:text-6xl font-bold text-slate-800">
              Your Page Here
            </h1>
            <p className="text-xl text-slate-600 max-w-2xl">
              This is where your page content would go. The header and footer are separate, reusable components.
            </p>
          </div>
          
          <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {/* Header Info */}
            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200">
              <div className="mb-4">
                <div className="w-12 h-12 bg-gradient-to-br from-teal-500 to-blue-600 rounded-lg flex items-center justify-center mb-3">
                  <svg className="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </div>
                <h3 className="text-xl font-bold text-slate-900 mb-2">Header Component</h3>
              </div>
              <ul className="space-y-2 text-sm text-slate-600">
                <li>• Responsive navigation menu</li>
                <li>• Mobile hamburger menu</li>
                <li>• Two variants: default & transparent</li>
                <li>• CTA buttons included</li>
                <li>• Smooth animations</li>
              </ul>
            </div>
            
            {/* Footer Info */}
            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200">
              <div className="mb-4">
                <div className="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-3">
                  <svg className="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5" />
                  </svg>
                </div>
                <h3 className="text-xl font-bold text-slate-900 mb-2">Footer Component</h3>
              </div>
              <ul className="space-y-2 text-sm text-slate-600">
                <li>• 4-column layout (responsive)</li>
                <li>• Company info & social links</li>
                <li>• Service categories</li>
                <li>• Contact information</li>
                <li>• Legal links in bottom bar</li>
              </ul>
            </div>
          </div>
          
          {/* Usage Example */}
          <div className="bg-slate-900 rounded-xl p-6 text-left max-w-2xl mx-auto">
            <h4 className="text-lg font-bold text-white mb-4">Usage Example:</h4>
            <pre className="text-green-400 text-sm overflow-x-auto">
{`import Header from '../components/Header';
import Footer from '../components/Footer';

function MyPage() {
  return (
    <>
      <Header />
      <main>
        {/* Your content here */}
      </main>
      <Footer />
    </>
  );
}`}
            </pre>
          </div>
          
          {/* Variants */}
          <div className="space-y-4">
            <h4 className="text-2xl font-bold text-slate-800">Available Variants</h4>
            <div className="grid md:grid-cols-2 gap-4 max-w-2xl mx-auto">
              <div className="bg-blue-50 rounded-lg p-4 border border-blue-200">
                <h5 className="font-semibold text-blue-900 mb-2">Header Variants</h5>
                <p className="text-sm text-blue-700">
                  <code className="bg-blue-100 px-2 py-1 rounded">variant="default"</code> - Regular header<br/>
                  <code className="bg-blue-100 px-2 py-1 rounded">variant="transparent"</code> - For hero sections
                </p>
              </div>
              <div className="bg-purple-50 rounded-lg p-4 border border-purple-200">
                <h5 className="font-semibold text-purple-900 mb-2">Footer Variants</h5>
                <p className="text-sm text-purple-700">
                  <code className="bg-purple-100 px-2 py-1 rounded">variant="default"</code> - Light theme<br/>
                  <code className="bg-purple-100 px-2 py-1 rounded">variant="dark"</code> - Dark theme
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
      
      {/* Footer */}
      <Footer />
    </div>
  );
};

export default HeaderFooterPreview;