import { Calendar, ClipboardCheck, Sparkles, ThumbsUp } from "lucide-react";

const ProcessSection = () => {
  const steps = [
    {
      icon: Calendar,
      number: "01",
      title: "Book Your Service",
      description: "Choose your preferred date and time. We offer flexible scheduling including weekends and same-day service."
    },
    {
      icon: ClipboardCheck,
      number: "02", 
      title: "Pre-Clean Assessment",
      description: "Our team conducts a thorough property assessment to create a customized cleaning plan for your specific needs."
    },
    {
      icon: Sparkles,
      number: "03",
      title: "Deep Clean Execution",
      description: "Professional cleaning using agency-approved methods and commercial-grade equipment for exceptional results."
    },
    {
      icon: ThumbsUp,
      number: "04",
      title: "Final Quality Check",
      description: "Complete inspection ensures every detail meets our high standards and your letting agent's requirements."
    }
  ];

  return (
    <section className="section-padding bg-background">
      <div className="section-container">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Our <span className="text-primary">4-Step Process</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            From booking to completion, we make the entire process simple and stress-free
          </p>
        </div>

        <div className="grid lg:grid-cols-4 gap-8">
          {steps.map((step, index) => (
            <div key={index} className="relative">
              {/* Connector Line */}
              {index < steps.length - 1 && (
                <div className="hidden lg:block absolute top-16 -right-4 w-8 h-0.5 bg-primary/30 z-0" />
              )}
              
              <div className="card-glass p-6 text-center relative z-10 hover:shadow-lg transition-all duration-300">
                {/* Step Number */}
                <div className="absolute -top-4 left-1/2 transform -translate-x-1/2">
                  <div className="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold text-sm">
                    {step.number}
                  </div>
                </div>

                {/* Icon */}
                <div className="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6 mt-4">
                  <step.icon className="w-8 h-8 text-primary" />
                </div>

                {/* Content */}
                <h3 className="text-xl font-bold text-foreground mb-4">
                  {step.title}
                </h3>
                <p className="text-muted-foreground leading-relaxed">
                  {step.description}
                </p>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mt-12">
          <div className="inline-flex items-center gap-3 bg-primary/10 px-6 py-3 rounded-xl">
            <Sparkles className="w-5 h-5 text-primary" />
            <span className="font-semibold text-primary">Average completion time: 3-5 hours</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ProcessSection;