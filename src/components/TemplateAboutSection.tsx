import { Star, Award, Clock, Users } from "lucide-react";

const TemplateAboutSection = () => {
  const stats = [
    {
      icon: Star,
      number: "5,000+",
      label: "Happy Customers"
    },
    {
      icon: Award,
      number: "99.8%",
      label: "Success Rate"
    },
    {
      icon: Clock,
      number: "3-5",
      label: "Hours Average"
    },
    {
      icon: Users,
      number: "50+",
      label: "Expert Cleaners"
    }
  ];

  return (
    <section className="section-padding bg-background">
      <div className="section-container">
        <div className="max-w-4xl mx-auto text-center space-y-12">
          <div className="space-y-6">
            <h3 className="text-4xl lg:text-5xl font-bold font-heading text-foreground leading-tight">
              <span className="bg-blue-300/30 px-2 py-1 rounded">[page_h3]</span>
            </h3>
            
            <div className="space-y-6 text-lg text-muted-foreground leading-relaxed">
              <p className="bg-blue-300/30 px-2 py-1 rounded">
                [page_h3_paragraph]
              </p>
            </div>
          </div>

          {/* Dynamic Stats Grid */}
          <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div className="text-center p-6 bg-gradient-surface rounded-2xl">
              <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                <Star className="w-6 h-6 text-primary" />
              </div>
              <div className="text-3xl font-bold text-primary mb-2 bg-blue-300/30 px-2 py-1 rounded">
                [stat_1_number]
              </div>
              <div className="text-muted-foreground font-medium bg-blue-300/30 px-1 rounded">
                [stat_1_label]
              </div>
            </div>
            
            <div className="text-center p-6 bg-gradient-surface rounded-2xl">
              <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                <Award className="w-6 h-6 text-primary" />
              </div>
              <div className="text-3xl font-bold text-primary mb-2 bg-blue-300/30 px-2 py-1 rounded">
                [stat_2_number]
              </div>
              <div className="text-muted-foreground font-medium bg-blue-300/30 px-1 rounded">
                [stat_2_label]
              </div>
            </div>
            
            <div className="text-center p-6 bg-gradient-surface rounded-2xl">
              <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                <Clock className="w-6 h-6 text-primary" />
              </div>
              <div className="text-3xl font-bold text-primary mb-2 bg-blue-300/30 px-2 py-1 rounded">
                [stat_3_number]
              </div>
              <div className="text-muted-foreground font-medium bg-blue-300/30 px-1 rounded">
                [stat_3_label]
              </div>
            </div>
            
            <div className="text-center p-6 bg-gradient-surface rounded-2xl">
              <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                <Users className="w-6 h-6 text-primary" />
              </div>
              <div className="text-3xl font-bold text-primary mb-2 bg-blue-300/30 px-2 py-1 rounded">
                [stat_4_number]
              </div>
              <div className="text-muted-foreground font-medium bg-blue-300/30 px-1 rounded">
                [stat_4_label]
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TemplateAboutSection;