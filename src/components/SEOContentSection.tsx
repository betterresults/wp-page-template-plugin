import { CheckCircle, Shield, Clock, Award } from "lucide-react";

const SEOContentSection = () => {
  return (
    <section className="section-padding bg-gradient-to-br from-background to-muted/30">
      <div className="section-container">
        <div className="max-w-6xl mx-auto">
          <div className="text-center mb-16">
            <h3 className="text-3xl lg:text-4xl font-bold font-heading text-foreground mb-6">
              Our Approach to{" "}
              <span className="text-gradient-primary">End of Tenancy Cleaning</span>{" "}
              in South Hornchurch
            </h3>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Professional-grade cleaning that satisfies UK letting agents and secures your deposit
            </p>
          </div>
          
          <div className="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div className="space-y-8">
              <div className="flex items-start gap-4">
                <div className="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                  <Shield className="w-6 h-6 text-primary" />
                </div>
                <div>
                  <h4 className="text-xl font-semibold text-foreground mb-3">Systematic Deep Cleaning</h4>
                  <p className="text-muted-foreground leading-relaxed">
                    Our systematic approach ensures every corner meets the UK's demanding letting agent standards. From deep-cleaning carpets to degreasing ovens, we restore properties to their best condition.
                  </p>
                </div>
              </div>
              
              <div className="flex items-start gap-4">
                <div className="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                  <CheckCircle className="w-6 h-6 text-accent" />
                </div>
                <div>
                  <h4 className="text-xl font-semibold text-foreground mb-3">Agency-Approved Checklist</h4>
                  <p className="text-muted-foreground leading-relaxed">
                    Our trained specialists work through comprehensive, agency-approved checklists, ensuring every requirement is met for a smooth property handover.
                  </p>
                </div>
              </div>
              
              <div className="flex items-start gap-4">
                <div className="flex-shrink-0 w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center">
                  <Award className="w-6 h-6 text-success" />
                </div>
                <div>
                  <h4 className="text-xl font-semibold text-foreground mb-3">Local Expertise</h4>
                  <p className="text-muted-foreground leading-relaxed">
                    Our expertise in <span className="font-semibold text-primary">South Hornchurch</span> and <span className="font-semibold text-primary">Havering</span> means we understand exactly what local property managers expect.
                  </p>
                </div>
              </div>
            </div>
            
            <div className="card-glass p-8 lg:p-10">
              <div className="text-center mb-8">
                <Clock className="w-16 h-16 text-primary mx-auto mb-4" />
                <h4 className="text-2xl font-bold text-foreground mb-4">Guaranteed Results</h4>
              </div>
              <div className="space-y-4">
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
                  <span className="text-foreground">100% Deposit Back Guarantee</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
                  <span className="text-foreground">Specialist Equipment & Products</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
                  <span className="text-foreground">Trained & Insured Professionals</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
                  <span className="text-foreground">Same-Day Availability</span>
                </div>
              </div>
              <div className="mt-8 p-6 bg-gradient-to-r from-primary/5 to-accent/5 rounded-xl border border-primary/10">
                <p className="text-foreground font-medium text-center">
                  "Trusted by tenants and landlords across the region for consistently exceptional results"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default SEOContentSection;