import ServicePageTemplate from "@/components/ServicePageTemplate";
import { ServicePageData } from "@/types/ServicePageData";

const ServicePageDemo = () => {
  // Sample data showing how dynamic fields would be populated
  const sampleData: ServicePageData = {
    // Hero Section Data
    page_title: "End of Tenancy Cleaning Hornchurch | Get Your Deposit Back",
    page_h1: "End of Tenancy Cleaning in Hornchurch",
    under_heading: "Professional end of tenancy cleaning service in Hornchurch. 100% deposit back guarantee. Expert cleaners, comprehensive checklist, and same-day service available.",
    page_area: "Hornchurch",
    page_borough: "Havering",
    
    // About Section Data
    page_subheading: "Your Trusted Hornchurch Cleaning Experts",
    page_subheading_description: "With over 10 years of experience providing end of tenancy cleaning services in Hornchurch and the surrounding areas, we understand exactly what landlords and letting agents expect. Our professional team uses industry-standard equipment and eco-friendly products to ensure your property meets the highest cleaning standards, helping you secure your full deposit return.",
    
    // Content Section Data
    page_h2: "Comprehensive End of Tenancy Cleaning in Hornchurch",
    page_h2_paragraph: "Our end of tenancy cleaning service in Hornchurch covers every inch of your property. From deep cleaning kitchens and bathrooms to detailed bedroom and living area cleaning, we follow a comprehensive 200-point checklist that meets all landlord requirements. We're familiar with local letting agents in Hornchurch and know exactly what they look for during property inspections.",
    page_h3: "Why Choose Our Hornchurch Cleaning Service",
    page_h3_paragraph: "We're local to Hornchurch and understand the area's rental market requirements. Our team is fully insured, uses professional-grade equipment, and offers flexible scheduling including weekend and evening appointments. With our 72-hour re-clean guarantee, you can be confident that your Hornchurch property will pass inspection first time.",
    
    // FAQ Section Data
    page_question_1: "How long does end of tenancy cleaning take in Hornchurch?",
    page_question_2: "Do you clean all areas covered by Hornchurch letting agents?"
  };

  return (
    <div>
      <ServicePageTemplate data={sampleData} />
    </div>
  );
};

export default ServicePageDemo;