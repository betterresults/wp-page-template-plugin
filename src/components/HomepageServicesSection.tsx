import { Button } from "@/components/ui/button";
import { Home, Building2, ArrowRight, Sparkles, Hammer, Users, Baby, ShoppingBag, Car, Scissors } from "lucide-react";
import { trackEvent } from "@/utils/analytics";

const HomepageServicesSection = () => {
  const handleServiceClick = (service: string) => {
    trackEvent('service_click', {
      location: 'homepage_services',
      service: service
    });
  };

  const residentialServices = [
    { 
      name: "End of Tenancy", 
      icon: Home,
      gradient: "from-blue-500 to-purple-600",
      description: "Complete move-out cleaning"
    },
    { 
      name: "After Builders", 
      icon: Hammer,
      gradient: "from-orange-500 to-red-600",
      description: "Post-construction cleanup"
    },
    { 
      name: "Domestic", 
      icon: Sparkles,
      gradient: "from-green-500 to-teal-600",
      description: "Regular home cleaning"
    },
    { 
      name: "Airbnb", 
      icon: Users,
      gradient: "from-pink-500 to-rose-600",
      description: "Short-term rental cleaning"
    },
    { 
      name: "Deep House Cleaning", 
      icon: Home,
      gradient: "from-indigo-500 to-blue-600",
      description: "Thorough deep clean"
    },
    { 
      name: "Carpet Cleaning", 
      icon: Scissors,
      gradient: "from-purple-500 to-pink-600",
      description: "Professional carpet care"
    },
  ];

  const commercialServices = [
    { 
      name: "Office Cleaning", 
      icon: Building2,
      gradient: "from-slate-500 to-gray-600",
      description: "Professional workspace cleaning"
    },
    { 
      name: "School Cleaning", 
      icon: Users,
      gradient: "from-yellow-500 to-orange-600",
      description: "Educational facility maintenance"
    },
    { 
      name: "Nursery Cleaning", 
      icon: Baby,
      gradient: "from-green-500 to-emerald-600",
      description: "Child-safe cleaning solutions"
    },
    { 
      name: "Retail Cleaning", 
      icon: ShoppingBag,
      gradient: "from-blue-500 to-cyan-600",
      description: "Store and shop maintenance"
    },
  ];

  return (
    <section className="section-padding bg-gradient-to-b from-background via-muted/20 to-background">
      <div className="section-container">
        <div className="text-center mb-20">
          <h2 className="text-4xl lg:text-6xl font-bold font-heading text-foreground mb-4">
            Our Services
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Professional cleaning solutions tailored to your specific needs
          </p>
        </div>

        <div className="space-y-20">
          {/* Residential Cleaning */}
          <div>
            <div className="text-center mb-12">
              <h3 className="text-3xl lg:text-4xl font-bold font-heading text-foreground mb-3">
                Residential Cleaning
              </h3>
              <div className="w-24 h-1 bg-gradient-to-r from-primary to-primary/60 mx-auto rounded-full"></div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              {residentialServices.map((service, index) => {
                const IconComponent = service.icon;
                return (
                  <div 
                    key={index}
                    className="group relative overflow-hidden bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer transform hover:-translate-y-2"
                    onClick={() => handleServiceClick(service.name.toLowerCase().replace(/\s+/g, '_'))}
                  >
                    {/* Gradient background */}
                    <div className={`absolute inset-0 bg-gradient-to-br ${service.gradient} opacity-0 group-hover:opacity-90 transition-opacity duration-500`} />
                    
                    {/* Content */}
                    <div className="relative z-10 p-8 text-center">
                      <div className={`w-20 h-20 bg-gradient-to-br ${service.gradient} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg`}>
                        <IconComponent className="w-10 h-10 text-white" />
                      </div>
                      
                      <h4 className="text-2xl font-bold text-gray-800 group-hover:text-white mb-3 transition-colors duration-300">
                        {service.name}
                      </h4>
                      
                      <p className="text-gray-600 group-hover:text-white/90 mb-6 transition-colors duration-300">
                        {service.description}
                      </p>
                      
                      <div className="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                        <div className="flex items-center justify-center text-white font-semibold">
                          Learn More
                          <ArrowRight className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" />
                        </div>
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          </div>

          {/* Commercial Cleaning */}
          <div>
            <div className="text-center mb-12">
              <h3 className="text-3xl lg:text-4xl font-bold font-heading text-foreground mb-3">
                Commercial Cleaning
              </h3>
              <div className="w-24 h-1 bg-gradient-to-r from-primary to-primary/60 mx-auto rounded-full"></div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              {commercialServices.map((service, index) => {
                const IconComponent = service.icon;
                return (
                  <div 
                    key={index}
                    className="group relative overflow-hidden bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer transform hover:-translate-y-2"
                    onClick={() => handleServiceClick(service.name.toLowerCase().replace(/\s+/g, '_'))}
                  >
                    {/* Gradient background */}
                    <div className={`absolute inset-0 bg-gradient-to-br ${service.gradient} opacity-0 group-hover:opacity-90 transition-opacity duration-500`} />
                    
                    {/* Content */}
                    <div className="relative z-10 p-8 text-center">
                      <div className={`w-20 h-20 bg-gradient-to-br ${service.gradient} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg`}>
                        <IconComponent className="w-10 h-10 text-white" />
                      </div>
                      
                      <h4 className="text-2xl font-bold text-gray-800 group-hover:text-white mb-3 transition-colors duration-300">
                        {service.name}
                      </h4>
                      
                      <p className="text-gray-600 group-hover:text-white/90 mb-6 transition-colors duration-300">
                        {service.description}
                      </p>
                      
                      <div className="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                        <div className="flex items-center justify-center text-white font-semibold">
                          Learn More
                          <ArrowRight className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" />
                        </div>
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