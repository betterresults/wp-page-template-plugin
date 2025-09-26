import { useEffect } from "react";

const TestimonialsSection = () => {
  useEffect(() => {
    // Load the testimonials widget script
    const script = document.createElement('script');
    script.innerHTML = `
      ! function(w, d){
        if (!w || !d) return false;    
        d.addEventListener("DOMContentLoaded", function(event) {
            var s = d.createElement('script');
            s.setAttribute('src','https://fbl.embedwidgets.com/dcWK51Qwf6A51i8gEolc.js');
            d.body.appendChild(s);
          });
        }(window, document)
    `;
    document.head.appendChild(script);

    return () => {
      // Cleanup script on unmount
      document.head.removeChild(script);
    };
  }, []);

  return (
    <section className="section-padding bg-gradient-to-br from-muted/20 to-background">
      <div className="section-container">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            What Our <span className="text-primary">Customers Say</span>
          </h2>
        </div>

        {/* Real Review Widget */}
        <div className="card-glass p-8 mb-12">
          <div className="fbl_w_dcWK51Qwf6A51i8gEolc"></div>
        </div>

        {/* Trust Indicators */}
        <div className="bg-white rounded-2xl p-8 shadow-md">
          <div className="grid md:grid-cols-3 gap-8 text-center">
            <div>
              <div className="text-3xl font-bold text-primary mb-2">500+</div>
              <p className="text-muted-foreground">Properties Cleaned</p>
            </div>
            <div>
              <div className="text-3xl font-bold text-primary mb-2">4.9/5</div>
              <p className="text-muted-foreground">Average Rating</p>
            </div>
            <div>
              <div className="text-3xl font-bold text-primary mb-2">100%</div>
              <p className="text-muted-foreground">Deposit Success Rate</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;