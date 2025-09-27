import { MapPin } from "lucide-react";

const TemplateServiceAreasSection = () => {
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
            Areas We <span className="text-primary">Cover</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Professional cleaning services across <span className="bg-orange-300/30 px-1 rounded">[page_area]</span>, <span className="bg-orange-300/30 px-1 rounded">[page_borough]</span>
          </p>
        </div>

        <div className="max-w-4xl mx-auto">
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center justify-center gap-3">
              <MapPin className="w-6 h-6 text-primary" />
              Areas We Cover
            </h3>
            <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
              {areas.map((area, index) => {
                // Highlight current area placeholder
                const isCurrentAreaPlaceholder = area === "South Hornchurch"; // This would be dynamic in PHP
                return (
                  <div 
                    key={index}
                    className={`flex items-center gap-3 p-3 rounded-lg transition-colors ${
                      isCurrentAreaPlaceholder 
                        ? 'bg-orange-300/30 border border-orange-400' 
                        : 'bg-background hover:bg-primary/5'
                    }`}
                  >
                    <div className="w-2 h-2 bg-primary rounded-full" />
                    <span className="font-medium text-foreground">
                      {isCurrentAreaPlaceholder ? '[page_area] (highlighted)' : area}
                    </span>
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

export default TemplateServiceAreasSection;