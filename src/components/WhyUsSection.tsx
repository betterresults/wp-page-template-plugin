import { CheckCircle, Users, Shield } from "lucide-react";
import professionalImage from "@/assets/professional-cleaner.jpg";

const WhyUsSection = () => {
  const features = [
    {
      icon: Shield,
      title: "Deposit Back Guarantee",
      description: "Our 72-hour re-clean guarantee means if there's an issue, we return and fix it, free of charge. Your deposit is safe with us."
    },
    {
      icon: Users,
      title: "Professionally Trained Team",
      description: "Our full-time employees are vetted, insured, and rigorously trained on an agency-approved checklist for unmatched quality."
    },
    {
      icon: CheckCircle,
      title: "Agency-Approved Standards",
      description: "We follow strict protocols that satisfy even the most demanding letting agents and property managers."
    }
  ];

  return (
    <section className="section-padding bg-gradient-surface">
      <div className="section-container">
        <div className="space-y-16">
          {/* Title and Description */}
          <div className="text-center">
            <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground leading-tight mb-6">
              Why Trust Us For Your Clean in{" "}
              <span className="text-primary">South Hornchurch</span>?
            </h2>
            
            <p className="text-lg text-muted-foreground leading-relaxed max-w-4xl mx-auto">
              When it comes to securing your deposit, you can't afford to take risks. We're not just another cleaning company; 
              we're your local partners in making your move as smooth and successful as possible. Our meticulous attention to 
              detail and unwavering commitment to quality set us apart from the competition in the{" "}
              <span className="font-semibold text-primary">Havering</span> borough.
            </p>
          </div>

          {/* Image */}
          <div className="flex justify-center">
            <div className="relative max-w-2xl">
              <div className="relative overflow-hidden rounded-3xl">
                {/* Background decoration */}
                <div className="absolute -top-8 -left-8 w-full h-full bg-gradient-primary rounded-3xl opacity-20 z-0" />
                
                {/* Main image */}
                <div className="relative z-10 bg-white p-4 rounded-3xl shadow-primary">
                  <img
                    src={professionalImage}
                    alt="Professional cleaner meticulously cleaning a modern space"
                    className="w-full h-96 object-cover rounded-2xl"
                  />
                </div>
                
                {/* Floating badges */}
                <div className="absolute -bottom-4 -right-4 bg-white rounded-2xl p-4 shadow-lg z-20">
                  <div className="flex items-center gap-2">
                    <div className="w-3 h-3 bg-success rounded-full animate-pulse" />
                    <span className="text-sm font-semibold text-foreground">Licensed & Insured</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* Features */}
          <div className="grid md:grid-cols-3 gap-8">
            {features.map((feature, index) => (
              <div 
                key={index}
                className="flex flex-col items-center text-center p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-1"
              >
                <div className="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mb-6">
                  <feature.icon className="w-8 h-8 text-white" />
                </div>
                <h4 className="text-xl font-semibold font-heading text-foreground mb-4">
                  {feature.title}
                </h4>
                <p className="text-muted-foreground leading-relaxed">
                  {feature.description}
                </p>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhyUsSection;