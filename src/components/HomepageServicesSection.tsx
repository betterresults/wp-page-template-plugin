import { Button } from "@/components/ui/button";
import { Home, Building2, ArrowRight, Sparkles, Hammer, Users, Baby, ShoppingBag, Car } from "lucide-react";
import { trackEvent } from "@/utils/analytics";

const HomepageServicesSection = () => {
  const handleServiceClick = (service: string) => {
    trackEvent('service_click', {
      location: 'homepage_services',
      service: service
    });
  };

  const residentialServices = [
    { name: "End of Tenancy", icon: Home },
    { name: "After Builders", icon: Hammer },
    { name: "Domestic", icon: Sparkles },
    { name: "Airbnb", icon: Users },
    { name: "Deep House Cleaning", icon: Home },
    { name: "Carpet Cleaning", icon: Car },
  ];

  const commercialServices = [
    { name: "Office Cleaning", icon: Building2 },
    { name: "School Cleaning", icon: Users },
    { name: "Nursery Cleaning", icon: Baby },
    { name: "Retail Cleaning", icon: ShoppingBag },
  ];

  return (
    <section className="section-padding bg-gradient-to-b from-background to-muted/30">
      <div className="section-container">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Our Services
          </h2>
        </div>

        <div className="space-y-16">
          {/* Residential Cleaning */}
          <div>
            <h3 className="text-3xl font-bold font-heading text-foreground text-center mb-8">
              Residential Cleaning
            </h3>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {residentialServices.map((service, index) => {
                const IconComponent = service.icon;
                return (
                  <div 
                    key={index}
                    className="group relative overflow-hidden bg-background rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-border/50 hover:scale-105 cursor-pointer"
                    onClick={() => handleServiceClick(service.name.toLowerCase().replace(/\s+/g, '_'))}
                  >
                    {/* Hover overlay with darker background */}
                    <div className="absolute inset-0 bg-gradient-to-br from-primary/10 to-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                    
                    <div className="relative z-10 text-center space-y-4">
                      <div className="w-16 h-16 bg-primary/10 group-hover:bg-primary/30 rounded-xl flex items-center justify-center mx-auto transition-all duration-300 group-hover:scale-110">
                        <IconComponent className="w-8 h-8 text-primary group-hover:text-primary transition-colors" />
                      </div>
                      
                      <h4 className="text-xl font-semibold text-foreground group-hover:text-foreground transition-colors">
                        {service.name}
                      </h4>
                      
                      <div className="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <ArrowRight className="w-5 h-5 mx-auto text-primary group-hover:translate-x-1 transition-transform" />
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>

          {/* Commercial Cleaning */}
          <div>
            <h3 className="text-3xl font-bold font-heading text-foreground text-center mb-8">
              Commercial Cleaning
            </h3>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              {commercialServices.map((service, index) => {
                const IconComponent = service.icon;
                return (
                  <div 
                    key={index}
                    className="group relative overflow-hidden bg-background rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-border/50 hover:scale-105 cursor-pointer"
                    onClick={() => handleServiceClick(service.name.toLowerCase().replace(/\s+/g, '_'))}
                  >
                    {/* Hover overlay with darker background */}
                    <div className="absolute inset-0 bg-gradient-to-br from-primary/10 to-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                    
                    <div className="relative z-10 text-center space-y-4">
                      <div className="w-16 h-16 bg-primary/10 group-hover:bg-primary/30 rounded-xl flex items-center justify-center mx-auto transition-all duration-300 group-hover:scale-110">
                        <IconComponent className="w-8 h-8 text-primary group-hover:text-primary transition-colors" />
                      </div>
                      
                      <h4 className="text-xl font-semibold text-foreground group-hover:text-foreground transition-colors">
                        {service.name}
                      </h4>
                      
                      <div className="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <ArrowRight className="w-5 h-5 mx-auto text-primary group-hover:translate-x-1 transition-transform" />
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HomepageServicesSection;