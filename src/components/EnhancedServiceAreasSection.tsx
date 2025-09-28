import { MapPin, Clock, CheckCircle } from "lucide-react";

const EnhancedServiceAreasSection = () => {
  const londonAreas = [
    "South Hornchurch", "Hornchurch", "Upminster", "Rainham",
    "Elm Park", "Romford", "Gidea Park", "Harold Wood",
    "Harold Hill", "Emerson Park", "Cranham", "North Ockendon"
  ];

  const essexAreas = [
    "Brentwood", "Chelmsford", "Colchester", "Basildon",
    "Southend-on-Sea", "Harlow", "Braintree", "Maldon"
  ];

  return (
    <section className="section-padding bg-gradient-surface">
      <div className="section-container">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Service Areas Across <span className="text-primary">London & Essex</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Professional cleaning services covering Greater London and Essex regions with fast response times
          </p>
        </div>

        {/* Animated Map Visual */}
        <div className="max-w-5xl mx-auto mb-16">
          <div className="relative bg-white rounded-3xl p-8 shadow-lg overflow-hidden">
            {/* Map Background with Animation */}
            <div className="relative h-96 bg-gradient-to-br from-primary/10 to-accent/5 rounded-2xl overflow-hidden">
              {/* Animated Map Dots */}
              <div className="absolute inset-0 flex items-center justify-center">
                <div className="relative w-full h-full max-w-md">
                  {/* London Area - Left Side */}
                  <div className="absolute left-16 top-1/2 transform -translate-y-1/2">
                    <div className="relative">
                      <div className="w-20 h-20 bg-primary/20 rounded-full animate-pulse flex items-center justify-center">
                        <div className="w-12 h-12 bg-primary/40 rounded-full animate-pulse delay-300 flex items-center justify-center">
                          <div className="w-6 h-6 bg-primary rounded-full animate-pulse delay-500"></div>
                        </div>
                      </div>
                      <div className="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-white px-3 py-1 rounded-lg shadow-md">
                        <span className="text-sm font-semibold text-primary">London</span>
                      </div>
                    </div>
                  </div>

                  {/* Essex Area - Right Side */}
                  <div className="absolute right-16 top-1/3 transform -translate-y-1/2">
                    <div className="relative">
                      <div className="w-16 h-16 bg-accent/20 rounded-full animate-pulse delay-200 flex items-center justify-center">
                        <div className="w-10 h-10 bg-accent/40 rounded-full animate-pulse delay-400 flex items-center justify-center">
                          <div className="w-5 h-5 bg-accent rounded-full animate-pulse delay-600"></div>
                        </div>
                      </div>
                      <div className="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-white px-3 py-1 rounded-lg shadow-md">
                        <span className="text-sm font-semibold text-accent">Essex</span>
                      </div>
                    </div>
                  </div>

                  {/* Connection Line */}
                  <div className="absolute top-1/2 left-1/3 right-1/3 h-0.5 bg-gradient-to-r from-primary to-accent opacity-50 animate-pulse"></div>
                </div>
              </div>

              {/* Floating Service Icons */}
              <div className="absolute top-4 left-4 bg-white p-2 rounded-lg shadow-md animate-float">
                <Clock className="w-5 h-5 text-primary" />
              </div>
              <div className="absolute top-4 right-4 bg-white p-2 rounded-lg shadow-md animate-float delay-1000">
                <CheckCircle className="w-5 h-5 text-success" />
              </div>
              <div className="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-lg shadow-md animate-float delay-500">
                <MapPin className="w-5 h-5 text-accent" />
              </div>
            </div>
          </div>
        </div>

        {/* Areas Grid */}
        <div className="grid lg:grid-cols-2 gap-12">
          {/* London Areas */}
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
              <div className="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                <MapPin className="w-4 h-4 text-white" />
              </div>
              Greater London
            </h3>
            <div className="grid sm:grid-cols-2 gap-4">
              {londonAreas.map((area, index) => (
                <div 
                  key={index}
                  className="flex items-center gap-3 p-3 bg-background rounded-lg hover:bg-primary/5 transition-colors group"
                >
                  <div className="w-2 h-2 bg-primary rounded-full group-hover:scale-125 transition-transform" />
                  <span className="font-medium text-foreground text-sm">{area}</span>
                </div>
              ))}
            </div>
          </div>

          {/* Essex Areas */}
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
              <div className="w-8 h-8 bg-accent rounded-full flex items-center justify-center">
                <MapPin className="w-4 h-4 text-white" />
              </div>
              Essex County
            </h3>
            <div className="grid sm:grid-cols-2 gap-4">
              {essexAreas.map((area, index) => (
                <div 
                  key={index}
                  className="flex items-center gap-3 p-3 bg-background rounded-lg hover:bg-accent/5 transition-colors group"
                >
                  <div className="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform" />
                  <span className="font-medium text-foreground text-sm">{area}</span>
                </div>
              ))}
            </div>
          </div>
        </div>

        {/* Service Promise */}
        <div className="text-center mt-16">
          <div className="inline-flex items-center gap-4 bg-white px-8 py-4 rounded-2xl shadow-md">
            <CheckCircle className="w-6 h-6 text-success" />
            <span className="text-lg font-semibold text-foreground">
              Same-day quotes • 24/7 availability • Fully insured
            </span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default EnhancedServiceAreasSection;