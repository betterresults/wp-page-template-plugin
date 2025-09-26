import { Star, Quote } from "lucide-react";

const TestimonialsSection = () => {
  const testimonials = [
    {
      name: "Sarah M.",
      location: "South Hornchurch",
      rating: 5,
      text: "Absolutely fantastic service! Got my full deposit back thanks to their thorough cleaning. The team was professional and efficient.",
      highlight: "Full deposit returned"
    },
    {
      name: "James L.", 
      location: "Upminster",
      rating: 5,
      text: "Best cleaning service in Havering! They went above and beyond expectations. My letting agent was impressed with the standard.",
      highlight: "Above expectations"
    },
    {
      name: "Maria K.",
      location: "Hornchurch", 
      rating: 5,
      text: "Same-day service when I needed it most. Professional team, fair pricing, and excellent results. Highly recommended!",
      highlight: "Same-day availability"
    }
  ];

  return (
    <section className="section-padding bg-gradient-to-br from-muted/20 to-background">
      <div className="section-container">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            What Our <span className="text-primary">Customers Say</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Real reviews from satisfied customers across Havering
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8 mb-12">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="card-glass p-8 relative">
              {/* Quote Icon */}
              <div className="absolute -top-4 left-8">
                <div className="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                  <Quote className="w-4 h-4 text-white" />
                </div>
              </div>

              {/* Rating */}
              <div className="flex items-center gap-1 mb-4 mt-4">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="w-5 h-5 fill-primary text-primary" />
                ))}
              </div>

              {/* Testimonial Text */}
              <p className="text-muted-foreground leading-relaxed mb-6">
                "{testimonial.text}"
              </p>

              {/* Customer Info */}
              <div className="border-t border-border pt-4">
                <div className="flex items-center justify-between">
                  <div>
                    <p className="font-semibold text-foreground">{testimonial.name}</p>
                    <p className="text-sm text-muted-foreground">{testimonial.location}</p>
                  </div>
                  <div className="bg-primary/10 px-3 py-1 rounded-full">
                    <span className="text-xs font-semibold text-primary">
                      {testimonial.highlight}
                    </span>
                  </div>
                </div>
              </div>
            </div>
          ))}
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