import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const FAQSection = () => {
  const faqs = [
    {
      question: "How long does an end-of-tenancy clean take?",
      answer: "A typical end-of-tenancy clean takes 4-8 hours depending on the size and condition of the property. We'll provide an accurate time estimate during our initial assessment."
    },
    {
      question: "Do you guarantee deposit return?",
      answer: "Yes! We offer a 72-hour guarantee. If your landlord or letting agent isn't satisfied with our cleaning, we'll return to re-clean any missed areas at no extra cost."
    },
    {
      question: "What's included in your cleaning checklist?",
      answer: "Our comprehensive checklist covers every room including deep cleaning of kitchens, bathrooms, bedrooms, living areas, hallways, and general areas. We clean inside appliances, behind furniture, and all surfaces."
    },
    {
      question: "Do I need to be present during the cleaning?",
      answer: "No, you don't need to be present. Many of our clients prefer to hand over the keys and let us work undisturbed. We're fully insured and bonded for your peace of mind."
    },
    {
      question: "What cleaning products do you use?",
      answer: "We use professional-grade, eco-friendly cleaning products that are safe for all surfaces. All equipment and supplies are provided by us - you don't need to prepare anything."
    },
    {
      question: "How much does an end-of-tenancy clean cost?",
      answer: "Prices vary based on property size and condition. We offer competitive rates with no hidden fees. Contact us for a free, no-obligation quote tailored to your specific needs."
    }
  ];

  return (
    <section className="section-padding bg-gradient-surface">
      <div className="section-container">
        <div className="text-center mb-12">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Frequently Asked Questions
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            Got questions? We've got answers. Here are the most common questions about our end-of-tenancy cleaning service.
          </p>
        </div>
        
        <div className="max-w-3xl mx-auto">
          <Accordion type="single" collapsible className="space-y-4">
            {faqs.map((faq, index) => (
              <AccordionItem 
                key={index} 
                value={`item-${index}`}
                className="bg-card border border-border rounded-lg px-6"
              >
                <AccordionTrigger className="text-left hover:no-underline py-6">
                  <span className="font-semibold text-foreground">{faq.question}</span>
                </AccordionTrigger>
                <AccordionContent className="pb-6 text-muted-foreground leading-relaxed">
                  {faq.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>
        </div>
      </div>
    </section>
  );
};

export default FAQSection;