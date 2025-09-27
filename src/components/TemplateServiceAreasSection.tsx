import { MapPin } from "lucide-react";

const TemplateServiceAreasSection = () => {
  const areas = [
    { name: "South Hornchurch", highlighted: true },
    { name: "Hornchurch", highlighted: true },
    { name: "Upminster", highlighted: false },
    { name: "Rainham", highlighted: false },
    { name: "Elm Park", highlighted: false },
    { name: "Romford", highlighted: false },
    { name: "Gidea Park", highlighted: false },
    { name: "Harold Wood", highlighted: false },
    { name: "Harold Hill", highlighted: false },
    { name: "Emerson Park", highlighted: false },
    { name: "Cranham", highlighted: false },
    { name: "North Ockendon", highlighted: false }
  ];

  return (
    <section className="section-padding bg-muted/20">
      <div className="section-container">
        <div className="text-center mb-12">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Areas in <span className="bg-orange-300/30 px-1 rounded">[page_borough]</span> We <span className="text-primary">Cover</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Professional cleaning services across <span className="bg-orange-300/30 px-1 rounded">[page_borough]</span>
          </p>
        </div>

        <div className="max-w-4xl mx-auto">
          <div className="bg-white rounded-2xl p-8 shadow-lg border">
            <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
              {areas.map((area, index) => (
                <div 
                  key={index}
                  className={`flex items-center gap-3 px-4 py-3 rounded-xl border transition-all duration-200 hover:shadow-md ${
                    area.highlighted 
                      ? 'bg-cyan-50 border-cyan-200 hover:bg-cyan-100' 
                      : 'bg-gray-50 border-gray-200 hover:bg-gray-100'
                  }`}
                >
                  <div className={`w-2 h-2 rounded-full ${
                    area.highlighted ? 'bg-cyan-500' : 'bg-gray-400'
                  }`} />
                  <span className="font-medium text-foreground text-sm">
                    {area.name}
                  </span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TemplateServiceAreasSection;