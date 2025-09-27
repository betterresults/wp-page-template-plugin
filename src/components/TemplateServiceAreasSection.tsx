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
            Professional cleaning services across <span className="bg-orange-300/30 px-1 rounded">[page_borough]</span>
          </p>
        </div>

        <div className="max-w-4xl mx-auto">
          <div className="card-glass p-8">
            <h3 className="text-2xl font-bold text-foreground mb-6 flex items-center justify-center gap-3">
              <MapPin className="w-6 h-6 text-primary" />
              Areas We Cover
            </h3>
            <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
              <div className="bg-orange-300/30 px-4 py-2 rounded-lg border border-orange-400 text-center">
                <span className="font-medium text-foreground">
                  [dynamic_areas_from_same_borough]
                </span>
                <p className="text-sm text-muted-foreground mt-1">
                  PHP: Extract all areas where borough = [page_borough]
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TemplateServiceAreasSection;