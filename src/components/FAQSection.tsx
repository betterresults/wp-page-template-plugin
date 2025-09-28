import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const FAQSection = () => {
  const faqs = [
    {
      question: "What cleaning services do you offer?",
      answer: "We provide comprehensive cleaning services including end-of-tenancy cleaning, domestic regular cleaning, one-off deep cleans, office cleaning, after builders cleaning, and carpet cleaning across London and Essex."
    },
    {
      question: "How much do your cleaning services cost?",
      answer: "Our prices vary based on the type of service, property size, and specific requirements. We offer competitive rates with no hidden fees. Contact us for a free, personalized quote tailored to your needs."
    },
    {
      question: "Are you insured and bonded?",
      answer: "Yes, we are fully insured and bonded for your complete peace of mind. All our staff are vetted, trained professionals who take pride in delivering exceptional cleaning results."
    },
    {
      question: "Do you provide all cleaning supplies and equipment?",
      answer: "Absolutely! We bring all professional-grade, eco-friendly cleaning products and equipment. You don't need to provide anything - just sit back and let us handle everything."
    },
    {
      question: "How do I book your cleaning service?",
      answer: "Booking is easy! Simply call us, fill out our online form, or get an instant quote through our website. We'll confirm your booking and provide all the details you need."
    },
    {
      question: "What areas do you cover?",
      answer: "We provide cleaning services across London and Essex, including areas like Hornchurch, Romford, Upminster, Rainham, and surrounding boroughs. Check our service areas page for the full list."
    },
    {
      question: "Do you offer satisfaction guarantees?",
      answer: "Yes! We stand behind our work with satisfaction guarantees. If you're not completely happy with our service, we'll return to make it right at no additional cost."
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
            Got questions? We've got answers. Here are the most common questions about our professional cleaning services.
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