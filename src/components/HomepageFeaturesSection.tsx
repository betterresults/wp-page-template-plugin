import { Zap, Clock, Shield, Users, Smartphone, Calendar, HeadphonesIcon, Star } from "lucide-react";

const HomepageFeaturesSection = () => {
  const features = [
    {
      icon: Zap,
      title: "Same-Day Emergency Cleaning",
      description: "Need urgent cleaning? We offer same-day emergency services to handle any cleaning crisis.",
      highlight: "Available 7 days a week"
    },
    {
      icon: Clock,
      title: "Flexible Scheduling",
      description: "Book cleaning services that fit your schedule. Early morning, evening, or weekend slots available.",
      highlight: "Your time, your choice"
    },
    {
      icon: Smartphone,
      title: "Online Customer Portal",
      description: "Manage your bookings, track cleaning progress, and communicate with your team through our portal.",
      highlight: "24/7 online access"
    },
    {
      icon: Calendar,
      title: "Easy Rebooking",
      description: "Love your service? Rebook your favorite cleaner with just one click through your customer portal.",
      highlight: "One-click rebooking"
    },
    {
      icon: Users,
      title: "Dedicated Team Assignment",
      description: "Get the same professional cleaning team every visit for consistent, personalized service.",
      highlight: "Consistent quality"
    },
    {
      icon: HeadphonesIcon,
      title: "24/7 Customer Support",
      description: "Questions or concerns? Our customer support team is available around the clock to help you.",
      highlight: "Always here for you"
    },
    {
      icon: Shield,
      title: "Satisfaction Guarantee",
      description: "Not happy with the service? We'll come back and make it right at no additional cost.",
      highlight: "100% satisfaction promise"
    },
    {
      icon: Star,
      title: "Quality Assurance",
      description: "Every cleaning is quality-checked and rated to ensure we maintain our high standards.",
      highlight: "Consistently excellent"
    }
  ];

  return (
    <section className="section-padding bg-background">
      <div className="section-container">
        <div className="text-center mb-16">
          <div className="inline-block bg-accent/10 text-accent px-4 py-2 rounded-full text-sm font-semibold mb-6">
            WHY WE'RE DIFFERENT
          </div>
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
            Features That Make Us
            <span className="text-primary block">The Professional Choice</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            We've built our service around what matters most to you - convenience, quality, 
            and peace of mind. Here's what sets us apart from the competition.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          {features.map(({ icon: Icon, title, description, highlight }, idx) => (
            <div key={idx} className="bg-gradient-surface rounded-2xl p-6 border border-border/50 hover:shadow-lg transition-all duration-300 group">
              <div className="space-y-4">
                <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                  <Icon className="w-6 h-6 text-primary" />
                </div>
                
                <div className="space-y-3">
                  <h3 className="text-lg font-bold text-foreground leading-tight">{title}</h3>
                  <p className="text-muted-foreground text-sm leading-relaxed">{description}</p>
                  
                  <div className="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold inline-block">
                    {highlight}
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Stats Section */}
        <div className="mt-16 bg-gradient-to-r from-primary/10 to-accent/10 rounded-3xl p-8 lg:p-12 border border-border/50">
          <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div className="space-y-2">
              <div className="text-4xl font-bold text-primary">98%</div>
              <div className="text-muted-foreground font-medium">Customer Retention Rate</div>
            </div>
            <div className="space-y-2">
              <div className="text-4xl font-bold text-primary">15min</div>
              <div className="text-muted-foreground font-medium">Average Response Time</div>
            </div>
            <div className="space-y-2">
              <div className="text-4xl font-bold text-primary">50K+</div>
              <div className="text-muted-foreground font-medium">Successful Cleanings</div>
            </div>
            <div className="space-y-2">
              <div className="text-4xl font-bold text-primary">24/7</div>
              <div className="text-muted-foreground font-medium">Support Available</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HomepageFeaturesSection;