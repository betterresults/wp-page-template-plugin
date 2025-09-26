import { Shield, Clock, CheckCircle } from "lucide-react";
import { Button } from "@/components/ui/button";

const GuaranteeSection = () => {
  return (
    <section className="section-padding bg-gradient-to-br from-foreground via-primary-dark to-foreground text-white relative overflow-hidden">
      {/* Background decoration */}
      <div className="absolute inset-0">
        <div className="absolute top-10 right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl" />
        <div className="absolute bottom-20 left-20 w-32 h-32 bg-accent/20 rounded-full blur-2xl" />
      </div>
      
      <div className="section-container relative z-10">
        <div className="grid lg:grid-cols-12 gap-12 items-center">
          {/* Icon */}
          <div className="lg:col-span-3 text-center lg:text-left">
            <div className="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-primary to-primary-light rounded-3xl shadow-glow mx-auto lg:mx-0">
              <Shield className="w-16 h-16 text-white" />
            </div>
          </div>

          {/* Content */}
          <div className="lg:col-span-9 space-y-8">
            <div className="space-y-4">
              <h3 className="text-4xl lg:text-5xl font-bold font-heading">
                Our Cast-Iron <span className="text-gradient-accent text-accent">Guarantee</span>
              </h3>
              <p className="text-xl lg:text-2xl text-white/90 leading-relaxed">
                Your deposit is our priority. We are so confident in our agency-approved standards that we offer a 
                rock-solid guarantee: in the unlikely event of any issues flagged in your checkout report, we will 
                return to the property to rectify them{" "}
                <span className="font-bold text-accent">completely free of charge</span> within 72 hours.
              </p>
            </div>

            {/* Guarantee features */}
            <div className="grid md:grid-cols-3 gap-6">
              <div className="flex items-center gap-4 bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                <CheckCircle className="w-8 h-8 text-success flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-lg">No Arguments</h4>
                  <p className="text-white/80 text-sm">Instant resolution</p>
                </div>
              </div>
              
              <div className="flex items-center gap-4 bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                <Clock className="w-8 h-8 text-accent flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-lg">72-Hour Return</h4>
                  <p className="text-white/80 text-sm">Quick response time</p>
                </div>
              </div>
              
              <div className="flex items-center gap-4 bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                <Shield className="w-8 h-8 text-primary-light flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-lg">100% Free</h4>
                  <p className="text-white/80 text-sm">No additional costs</p>
                </div>
              </div>
            </div>

            {/* CTA */}
            <div className="pt-6">
              <Button className="btn-secondary text-lg px-8 py-4">
                Book Your Guaranteed Clean
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default GuaranteeSection;