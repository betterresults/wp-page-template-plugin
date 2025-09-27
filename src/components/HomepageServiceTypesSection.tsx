import { Home, Sparkles, Calendar, Zap, Users, Building2, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { trackEvent } from "@/utils/analytics";

const HomepageServiceTypesSection = () => {
  const residentialServices = [
    {
      icon: Home,
      title: "Regular House Cleaning",
      description: "Weekly, fortnightly, or monthly cleaning services",
      features: ["Kitchen & bathroom deep clean", "Dusting & vacuuming", "Mopping & sanitizing"]
    },
    {
      icon: Sparkles,
      title: "Deep Cleaning",
      description: "Comprehensive one-time deep cleaning service",
      features: ["Inside appliances", "Detailed bathroom clean", "Window sills & frames"]
    },
    {
      icon: Calendar,
      title: "One-Off Cleaning",
      description: "Perfect for special occasions or spring cleaning",
      features: ["Flexible scheduling", "Custom requirements", "Same-day availability"]
    },
    {
      icon: Zap,
      title: "Emergency Cleaning",
      description: "Same-day emergency cleaning services",
      features: ["Available 7 days a week", "Rapid response", "Professional equipment"]
    }
  ];

  const commercialServices = [
    {
      icon: Building2,
      title: "Office Cleaning",
      description: "Professional office maintenance services",
      features: ["Daily or weekly service", "After-hours cleaning", "Sanitization protocols"]
    },
    {
      icon: Users,
      title: "Retail Cleaning",
      description: "Specialized cleaning for retail environments",
      features: ["Customer-friendly hours", "High-traffic area focus", "Display area cleaning"]
    }
  ];

  const handleLearnMore = (serviceType: string) => {
    trackEvent('learn_more_click', {
      location: 'homepage_service_types',
      service_type: serviceType
    });
  };

  return (
    <section className="section-padding bg-gradient-to-b from-muted/30 to-background">
      <div className="section-container">
        {/* Residential Services */}
        <div className="mb-16">
          <div className="text-center mb-12">
            <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-4">
              Residential Cleaning Services
            </h2>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Comprehensive home cleaning solutions tailored to your lifestyle and schedule
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {residentialServices.map(({ icon: Icon, title, description, features }, idx) => (
              <div key={idx} className="bg-background rounded-2xl p-6 shadow-lg border border-border/50 hover:shadow-xl transition-all duration-300 group">
                <div className="space-y-4">
                  <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                    <Icon className="w-6 h-6 text-primary" />
                  </div>
                  
                  <div className="space-y-3">
                    <h3 className="text-xl font-bold text-foreground">{title}</h3>
                    <p className="text-muted-foreground text-sm leading-relaxed">{description}</p>
                    
                    <ul className="space-y-1">
                      {features.map((feature, featureIdx) => (
                        <li key={featureIdx} className="text-sm text-muted-foreground flex items-center gap-2">
                          <div className="w-1.5 h-1.5 bg-primary rounded-full flex-shrink-0" />
                          {feature}
                        </li>
                      ))}
                    </ul>
                  </div>
                  
                  <Button 
                    variant="outline" 
                    size="sm" 
                    className="w-full mt-4"
                    onClick={() => handleLearnMore(`residential_${title.toLowerCase().replace(/\s+/g, '_')}`)}
                  >
                    Learn More
                    <ArrowRight className="w-4 h-4 ml-2" />
                  </Button>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* Commercial Services */}
        <div>
          <div className="text-center mb-12">
            <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-4">
              Commercial Cleaning Services
            </h2>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Professional cleaning solutions for businesses of all sizes
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {commercialServices.map(({ icon: Icon, title, description, features }, idx) => (
              <div key={idx} className="bg-background rounded-2xl p-8 shadow-lg border border-border/50 hover:shadow-xl transition-all duration-300 group">
                <div className="space-y-6">
                  <div className="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                    <Icon className="w-8 h-8 text-primary" />
                  </div>
                  
                  <div className="space-y-4">
                    <h3 className="text-2xl font-bold text-foreground">{title}</h3>
                    <p className="text-muted-foreground leading-relaxed">{description}</p>
                    
                    <ul className="space-y-2">
                      {features.map((feature, featureIdx) => (
                        <li key={featureIdx} className="text-muted-foreground flex items-center gap-3">
                          <div className="w-2 h-2 bg-primary rounded-full flex-shrink-0" />
                          {feature}
                        </li>
                      ))}
                    </ul>
                  </div>
                  
                  <Button 
                    className="btn-primary group/btn"
                    onClick={() => handleLearnMore(`commercial_${title.toLowerCase().replace(/\s+/g, '_')}`)}
                  >
                    Get Quote
                    <ArrowRight className="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" />
                  </Button>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default HomepageServiceTypesSection;