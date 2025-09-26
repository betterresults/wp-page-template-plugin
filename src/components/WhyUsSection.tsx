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
    <section className="section-padding bg-slate-900">
      <div className="section-container">
        <div className="space-y-16">
          {/* Title and Description */}
          <div className="text-center">
            <h2 className="text-4xl lg:text-5xl font-bold font-heading text-white leading-tight mb-6">
              Your trusted <span className="text-primary">local cleaning experts</span>
            </h2>
            
            <p className="text-lg text-slate-300 leading-relaxed max-w-4xl mx-auto">
              Photo Warehouse licensed and insured cleaning professionals in South Hornchurch. 
              We guarantee your deposit return with our meticulous end of tenancy cleaning service.
            </p>
          </div>

          {/* Image and Features Grid */}
          <div className="grid lg:grid-cols-2 gap-16 items-start">
            {/* Image */}
            <div className="relative">
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
                <div className="absolute bottom-4 right-4 bg-white rounded-2xl p-4 shadow-lg z-20">
                  <div className="flex items-center gap-2">
                    <div className="w-3 h-3 bg-success rounded-full animate-pulse" />
                    <span className="text-sm font-semibold text-slate-800">Licensed & Insured</span>
                  </div>
                </div>
              </div>
            </div>

            {/* Features */}
            <div className="p-6 bg-slate-800 rounded-2xl shadow-xl border border-slate-700">
              <ul className="space-y-6">
                {features.map((feature, index) => (
                  <li key={index} className="flex gap-4">
                    <div className="flex-shrink-0">
                      <div className="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center">
                        <feature.icon className="w-6 h-6 text-primary" />
                      </div>
                    </div>
                    <div className="space-y-1">
                      <h4 className="text-xl font-semibold font-heading text-white">
                        {feature.title}
                      </h4>
                      <p className="text-slate-300 leading-relaxed">
                        {feature.description}
                      </p>
                    </div>
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhyUsSection;