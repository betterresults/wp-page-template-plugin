import HeroSection from "@/components/HeroSection";
import WhyUsSection from "@/components/WhyUsSection";
import SEOContentSection from "@/components/SEOContentSection";
import ChecklistSection from "@/components/ChecklistSection";
import GuaranteeSection from "@/components/GuaranteeSection";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <HeroSection />
      <WhyUsSection />
      <SEOContentSection />
      <ChecklistSection />
      <GuaranteeSection />
    </div>
  );
};

export default Index;
