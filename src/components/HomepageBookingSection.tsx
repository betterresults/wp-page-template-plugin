import { Button } from "@/components/ui/button";
import { Search, FileText, Calendar, CheckCircle, ArrowRight } from "lucide-react";
import { trackEvent } from "@/utils/analytics";

const HomepageBookingSection = () => {
  const steps = [
    {
      icon: Search,
      title: "Choose a Service",
      description: "Browse our cleaning services and select what you need",
      color: "bg-blue-500"
    },
    {
      icon: FileText,
      title: "Fill the Form",
      description: "Provide your details and cleaning requirements",
      color: "bg-green-500"
    },
    {
      icon: Calendar,
      title: "Book Online",
      description: "Select your preferred date and time slot",
      color: "bg-purple-500"
    },
    {
      icon: CheckCircle,
      title: "Get Cleaned",
      description: "Sit back and enjoy your spotless space",
      color: "bg-primary"
    }
  ];

  const handleBookNow = () => {
    trackEvent('book_now_click', {
      location: 'homepage_booking_section'
    });
  };

  return (
    <section className="section-padding bg-gradient-to-br from-primary/5 to-accent/5">
      <div className="section-container">
        <div className="text-center mb-16">
          <div className="inline-block bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-6">
            SIMPLE BOOKING PROCESS
          </div>
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            How Easy Is It To Book?
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Get your cleaning service booked in just 4 simple steps. No phone calls required - 
            everything can be done online in minutes.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
          {steps.map(({ icon: Icon, title, description, color }, idx) => (
            <div key={idx} className="text-center group">
              <div className="relative mb-6">
                <div className={`w-20 h-20 ${color} rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:scale-110 transition-transform duration-300`}>
                  <Icon className="w-10 h-10 text-white" />
                </div>
                <div className="absolute -top-2 -right-2 w-8 h-8 bg-white rounded-full border-4 border-background flex items-center justify-center shadow-lg">
                  <span className="text-sm font-bold text-foreground">{idx + 1}</span>
                </div>
              </div>
              
              <h3 className="text-xl font-bold text-foreground mb-3">{title}</h3>
              <p className="text-muted-foreground leading-relaxed">{description}</p>
            </div>
          ))}
        </div>

        {/* CTA Section */}
        <div className="bg-background rounded-3xl p-8 lg:p-12 shadow-xl border border-border/50 text-center">
          <h3 className="text-3xl font-bold text-foreground mb-4">
            Ready to Experience the Easiest Booking Ever?
          </h3>
          <p className="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
            Join thousands of satisfied customers who love our simple online booking system. 
            Get your quote and book your cleaning service in under 5 minutes.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <Button 
              onClick={handleBookNow}
              className="btn-hero px-8 py-3 text-lg group"
            >
              Book Now - It's That Easy!
              <ArrowRight className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" />
            </Button>
            <Button 
              variant="outline" 
              className="px-8 py-3 text-lg"
              onClick={() => trackEvent('get_quote_click', { location: 'homepage_booking_section' })}
            >
              Get Instant Quote
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HomepageBookingSection;