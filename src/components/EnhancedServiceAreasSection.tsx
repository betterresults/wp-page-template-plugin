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

        {/* Visual Coverage Map */}
        <div className="max-w-5xl mx-auto mb-16">
          <div className="relative bg-white rounded-3xl p-8 shadow-lg overflow-hidden">
            {/* Geographic Coverage Visual */}
            <div className="relative h-96 bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl overflow-hidden border">
              {/* Background grid pattern */}
              <div className="absolute inset-0 opacity-30">
                <div className="grid grid-cols-8 grid-rows-6 h-full w-full">
                  {Array.from({ length: 48 }).map((_, i) => (
                    <div key={i} className="border border-slate-200"></div>
                  ))}
                </div>
              </div>
              
              {/* London Coverage Area - Left cluster */}
              <div className="absolute left-8 top-1/2 transform -translate-y-1/2 w-48">
                <div className="text-center mb-4">
                  <h3 className="text-2xl font-bold text-foreground mb-2">London Areas</h3>
                  <div className="w-full h-px bg-primary"></div>
                </div>
                <div className="grid grid-cols-2 gap-2">
                  {londonAreas.slice(0, 8).map((area, index) => (
                    <div 
                      key={index}
                      className="bg-primary/10 hover:bg-primary/20 transition-all duration-300 px-3 py-2 rounded-lg text-center cursor-pointer group"
                    >
                      <div className="w-2 h-2 bg-primary rounded-full mx-auto mb-1 group-hover:scale-150 transition-transform"></div>
                      <span className="text-xs font-medium text-foreground">{area}</span>
                    </div>
                  ))}
                </div>
              </div>

              {/* Essex Coverage Area - Right cluster */}
              <div className="absolute right-8 top-1/2 transform -translate-y-1/2 w-48">
                <div className="text-center mb-4">
                  <h3 className="text-2xl font-bold text-foreground mb-2">Essex Areas</h3>
                  <div className="w-full h-px bg-accent"></div>
                </div>
                <div className="grid grid-cols-2 gap-2">
                  {essexAreas.map((area, index) => (
                    <div 
                      key={index}
                      className="bg-accent/10 hover:bg-accent/20 transition-all duration-300 px-3 py-2 rounded-lg text-center cursor-pointer group"
                    >
                      <div className="w-2 h-2 bg-accent rounded-full mx-auto mb-1 group-hover:scale-150 transition-transform"></div>
                      <span className="text-xs font-medium text-foreground">{area}</span>
                    </div>
                  ))}
                </div>
              </div>

              {/* Connection visualization */}
              <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div className="flex items-center gap-4">
                  <div className="w-3 h-3 bg-primary rounded-full animate-pulse"></div>
                  <div className="w-16 h-px bg-gradient-to-r from-primary to-accent"></div>
                  <div className="w-3 h-3 bg-accent rounded-full animate-pulse delay-500"></div>
                </div>
                <div className="text-center mt-2">
                  <span className="text-sm font-semibold text-muted-foreground bg-white px-2 py-1 rounded">Coverage Zone</span>
                </div>
              </div>

              {/* Service icons floating */}
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

        {/* Additional Areas Lists */}
        <div className="grid lg:grid-cols-2 gap-12">
          {/* Remaining London Areas */}
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
              <div className="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                <MapPin className="w-4 h-4 text-white" />
              </div>
              Additional London Coverage
            </h3>
            <div className="grid sm:grid-cols-2 gap-4">
              {londonAreas.slice(8).map((area, index) => (
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

          {/* Coverage Info */}
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
              <div className="w-8 h-8 bg-accent rounded-full flex items-center justify-center">
                <CheckCircle className="w-4 h-4 text-white" />
              </div>
              Service Coverage
            </h3>
            <div className="space-y-4">
              <div className="flex items-start gap-3 p-4 bg-primary/5 rounded-lg">
                <CheckCircle className="w-5 h-5 text-primary mt-0.5" />
                <div>
                  <h4 className="font-semibold text-foreground mb-1">All Listed Areas Covered</h4>
                  <p className="text-sm text-muted-foreground">Professional cleaning services available in all mentioned locations</p>
                </div>
              </div>
              <div className="flex items-start gap-3 p-4 bg-accent/5 rounded-lg">
                <Clock className="w-5 h-5 text-accent mt-0.5" />
                <div>
                  <h4 className="font-semibold text-foreground mb-1">Fast Response Times</h4>
                  <p className="text-sm text-muted-foreground">Same-day quotes and next-day service availability</p>
                </div>
              </div>
              <div className="flex items-start gap-3 p-4 bg-success/5 rounded-lg">
                <MapPin className="w-5 h-5 text-success mt-0.5" />
                <div>
                  <h4 className="font-semibold text-foreground mb-1">Travel Included</h4>
                  <p className="text-sm text-muted-foreground">No additional charges for travel within our service areas</p>
                </div>
              </div>
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