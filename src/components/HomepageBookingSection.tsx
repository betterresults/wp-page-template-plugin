import { Button } from "@/components/ui/button";
import { Search, FileText, Calendar, CheckCircle, ArrowRight } from "lucide-react";
import { trackEvent } from "@/utils/analytics";

const HomepageBookingSection = () => {
  const steps = [
    {
      icon: Search,
      title: "Choose a Service",
      description: "Select your cleaning requirements"
    },
    {
      icon: FileText,
      title: "Fill the Form",
      description: "Provide your details and preferences"
    },
    {
      icon: Calendar,
      title: "Book Online",
      description: "Select your preferred date and time"
    },
    {
      icon: CheckCircle,
      title: "Confirmation",
      description: "Receive booking confirmation instantly"
    }
  ];

  const handleBookNow = () => {
    trackEvent('book_now_click', {
      location: 'homepage_booking_section'
    });
  };

  return (
    <section className="section-padding bg-muted/30">
      <div className="section-container">
        <div className="text-center mb-12">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Simple Booking Process
          </h2>
        </div>

        <div className="grid md:grid-cols-4 gap-8 mb-12">
          {steps.map(({ icon: Icon, title, description }, idx) => (
            <div key={idx} className="text-center">
              <div className="relative mb-6">
                <div className="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto">
                  <Icon className="w-8 h-8 text-primary" />
                </div>
                <div className="absolute -top-2 -right-2 w-6 h-6 bg-primary rounded-full flex items-center justify-center text-xs font-bold text-white">
                  {idx + 1}
                </div>
              </div>
              
              <h3 className="text-xl font-bold text-foreground mb-2">{title}</h3>
              <p className="text-muted-foreground">{description}</p>
            </div>
          ))}
        </div>

        <div className="text-center">
          <Button 
            onClick={handleBookNow}
            className="btn-hero px-8 py-3 text-lg"
          >
            Get Quote & Book Online
            <ArrowRight className="w-5 h-5 ml-2" />
          </Button>
        </div>
      </div>
    </section>
  );
};

export default HomepageBookingSection;