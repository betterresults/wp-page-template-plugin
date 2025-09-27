import TemplateHeroSection from "@/components/TemplateHeroSection";
import WhyUsSection from "@/components/WhyUsSection";
import ProcessSection from "@/components/ProcessSection";
import TemplateAboutSection from "@/components/TemplateAboutSection";
import TemplateServiceAreasSection from "@/components/TemplateServiceAreasSection";
import TestimonialsSection from "@/components/TestimonialsSection";
import ChecklistSection from "@/components/ChecklistSection";
import TemplateContentSection from "@/components/TemplateContentSection";
import TemplateFAQSection from "@/components/TemplateFAQSection";
import GuaranteeSection from "@/components/GuaranteeSection";

const EndOfTenancyTemplate = () => {
  return (
    <div className="min-h-screen bg-background">
      {/* Hero Section - Dynamic */}
      <TemplateHeroSection />
      
      {/* About Section - Dynamic */}
      <TemplateAboutSection />
      
      {/* Process Section - Static */}
      <ProcessSection />
      
      {/* Why Us Section - Static */}
      <WhyUsSection />
      
      {/* Testimonials Section - Static */}
      <TestimonialsSection />
      
      {/* Checklist Section - Static */}
      <ChecklistSection />
      
      {/* Content Section - Dynamic */}
      <TemplateContentSection />
      
      {/* FAQ Section - Dynamic + Static */}
      <TemplateFAQSection />
      
      {/* Service Areas Section - Dynamic */}
      <TemplateServiceAreasSection />
      
      {/* Guarantee Section - Static */}
      <GuaranteeSection />
    </div>
  );
};

export default EndOfTenancyTemplate;