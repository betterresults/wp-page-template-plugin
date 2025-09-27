import { Sparkles, Star } from "lucide-react";

const ContentSection = () => {
  return (
    <section className="section-padding bg-background">
      <div className="section-container">
        <div className="max-w-4xl mx-auto">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            {/* Left Content */}
            <div className="space-y-8">
              <div className="space-y-6">
                <div className="flex items-center gap-3">
                  <div className="w-3 h-3 bg-primary rounded-full" />
                  <span className="text-primary font-semibold text-lg">Excellence Delivered</span>
                </div>
                
                <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground leading-tight">
                  More than just <span className="text-primary">cleaning</span>
                </h2>
                
                <p className="text-xl text-muted-foreground leading-relaxed">
                  We understand that moving out is stressful enough without worrying about your deposit. 
                  That's why we've perfected our end of tenancy cleaning service to meet the highest 
                  standards expected by letting agents and landlords across London.
                </p>
                
                <p className="text-lg text-muted-foreground leading-relaxed">
                  Our experienced team combines years of expertise with professional-grade equipment 
                  and eco-friendly cleaning products. We don't just clean – we restore your property 
                  to its original condition, ensuring you get your full deposit back while giving 
                  you peace of mind during your move.
                </p>
              </div>
            </div>

            {/* Right Visual Elements */}
            <div className="relative">
              <div className="bg-gradient-to-br from-primary/10 to-primary/5 rounded-3xl p-8 relative overflow-hidden">
                {/* Background decoration */}
                <div className="absolute top-4 right-4 w-20 h-20 bg-primary/20 rounded-full blur-2xl" />
                <div className="absolute bottom-8 left-8 w-16 h-16 bg-accent/20 rounded-full blur-xl" />
                
                <div className="relative z-10 space-y-6">
                  <div className="flex items-center gap-4 bg-white/80 backdrop-blur-sm p-4 rounded-2xl shadow-sm">
                    <div className="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                      <Star className="w-6 h-6 text-white" />
                    </div>
                    <div>
                      <h4 className="font-bold text-foreground">Premium Service</h4>
                      <p className="text-sm text-muted-foreground">Professional standards</p>
                    </div>
                  </div>
                  
                  <div className="flex items-center gap-4 bg-white/80 backdrop-blur-sm p-4 rounded-2xl shadow-sm">
                    <div className="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                      <Sparkles className="w-6 h-6 text-white" />
                    </div>
                    <div>
                      <h4 className="font-bold text-foreground">Attention to Detail</h4>
                      <p className="text-sm text-muted-foreground">Every corner matters</p>
                    </div>
                  </div>
                  
                  <div className="text-center pt-4">
                    <div className="inline-flex items-center gap-2 bg-primary/10 px-6 py-3 rounded-full">
                      <div className="w-2 h-2 bg-primary rounded-full animate-pulse" />
                      <span className="text-primary font-semibold">Trusted by hundreds</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContentSection;