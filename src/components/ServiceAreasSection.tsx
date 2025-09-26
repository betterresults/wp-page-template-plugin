import { MapPin, Clock, Phone } from "lucide-react";

const ServiceAreasSection = () => {
  const areas = [
    "South Hornchurch",
    "Hornchurch", 
    "Upminster",
    "Rainham",
    "Elm Park",
    "Romford",
    "Gidea Park",
    "Harold Wood",
    "Harold Hill",
    "Emerson Park",
    "Cranham",
    "North Ockendon"
  ];

  return (
    <section className="section-padding bg-muted/20">
      <div className="section-container">
        <div className="text-center mb-12">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Service Areas in <span className="text-primary">Havering</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Professional end of tenancy cleaning across all areas of Havering borough
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8 mb-12">
          {/* Service Areas Grid */}
          <div className="lg:col-span-2">
            <div className="card-glass p-8">
              <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
                <MapPin className="w-6 h-6 text-primary" />
                Areas We Cover
              </h3>
              <div className="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                {areas.map((area, index) => (
                  <div 
                    key={index}
                    className="flex items-center gap-3 p-3 bg-background rounded-lg hover:bg-primary/5 transition-colors"
                  >
                    <div className="w-2 h-2 bg-primary rounded-full" />
                    <span className="font-medium text-foreground">{area}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>

          {/* Contact Info */}
          <div className="space-y-6">
            <div className="card-glass p-6">
              <div className="flex items-center gap-3 mb-4">
                <Clock className="w-6 h-6 text-primary" />
                <h3 className="text-xl font-bold text-foreground">Operating Hours</h3>
              </div>
              <div className="space-y-2 text-muted-foreground">
                <div className="flex justify-between">
                  <span>Monday - Friday:</span>
                  <span className="font-semibold">7:00 AM - 8:00 PM</span>
                </div>
                <div className="flex justify-between">
                  <span>Saturday:</span>
                  <span className="font-semibold">8:00 AM - 6:00 PM</span>
                </div>
                <div className="flex justify-between">
                  <span>Sunday:</span>
                  <span className="font-semibold">9:00 AM - 5:00 PM</span>
                </div>
              </div>
            </div>

            <div className="card-glass p-6">
              <div className="flex items-center gap-3 mb-4">
                <Phone className="w-6 h-6 text-primary" />
                <h3 className="text-xl font-bold text-foreground">Quick Response</h3>
              </div>
              <p className="text-muted-foreground mb-4">
                Same-day availability in most areas. Call for immediate assistance.
              </p>
              <div className="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-lg">
                <div className="w-2 h-2 bg-primary rounded-full animate-pulse" />
                <span className="text-primary font-semibold">Available Today</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ServiceAreasSection;