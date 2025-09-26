import { Check, Sparkles, Home, Bath, ChefHat } from "lucide-react";

const ChecklistSection = () => {
  const kitchenTasks = [
    "All worktops thoroughly cleaned and degreased",
    "Kitchen cupboards cleaned inside, outside and on top",
    "Sink and taps cleaned and descaled to shine",
    "Oven deep cleaned inside and out, including trays and hob",
    "Fridge and freezer cleaned inside and out, including seals",
    "Dishwasher cleaned thoroughly inside and outside",
    "Washing machine drawer, seals and drum cleaned",
    "Microwave and small appliances cleaned inside and out",
    "Windows, window sills, doors and handles cleaned",
    "All skirting boards wiped down, cobwebs removed",
    "Floors vacuumed and mopped to perfection"
  ];

  const bathroomTasks = [
    "Bath, shower and screen cleaned and descaled",
    "Toilet thoroughly disinfected inside and out",
    "Sink and taps cleaned and descaled until sparkling", 
    "All tiles and grout deep cleaned",
    "Mirrors and glass surfaces polished",
    "Extractor fan and vents cleaned",
    "Skirting boards and baseboards wiped clean",
    "Radiators and light fittings dusted",
    "Floors vacuumed and mopped thoroughly"
  ];

  const generalTasks = [
    "All skirting boards and baseboards cleaned",
    "Light switches and electrical sockets wiped",
    "Windows and window sills cleaned inside",
    "Wardrobes and drawers cleaned inside and outside",
    "Mirrors and glass surfaces polished to shine",
    "Carpets professionally steam cleaned",
    "All floors vacuumed and mopped",
    "Mattress cleaning service available upon request"
  ];

  const TaskList = ({ title, tasks, icon: Icon }: { 
    title: string; 
    tasks: string[];
    icon: any;
  }) => (
    <div className="bg-white rounded-2xl p-8 shadow-sm border border-border hover:shadow-md transition-all duration-300 group">
      <div className="flex items-center gap-4 mb-8">
        <div className="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:scale-105 transition-transform">
          <Icon className="w-6 h-6 text-primary" />
        </div>
        <h4 className="text-xl font-bold font-heading text-foreground">
          {title}
        </h4>
      </div>
      
      <ul className="space-y-3">
        {tasks.map((task, index) => (
          <li key={index} className="flex items-start gap-3">
            <div className="flex-shrink-0 w-5 h-5 bg-primary/20 rounded-full flex items-center justify-center mt-0.5">
              <Check className="w-3 h-3 text-primary" />
            </div>
            <span className="text-muted-foreground leading-relaxed">{task}</span>
          </li>
        ))}
      </ul>
    </div>
  );

  return (
    <section className="section-padding bg-background">
      <div className="section-container">
        <div className="text-center mb-16 space-y-6">
          <div className="inline-flex items-center gap-3 bg-primary/10 px-6 py-3 rounded-full">
            <Sparkles className="w-5 h-5 text-primary" />
            <span className="text-primary font-semibold">Professional Deep Clean</span>
          </div>
          
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground leading-tight">
            A Checklist That Leaves{" "}
            <span className="text-primary">
              Nothing to Chance
            </span>
          </h2>
          
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            We clean everything. Our comprehensive service ensures every corner of your property meets 
            the highest standards for final inspection.
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8 mb-16">
          <TaskList
            title="Kitchen Deep Clean"
            tasks={kitchenTasks}
            icon={ChefHat}
          />
          <TaskList
            title="Bathroom Sanitisation"
            tasks={bathroomTasks}
            icon={Bath}
          />
          <TaskList
            title="General Areas"
            tasks={generalTasks}
            icon={Home}
          />
        </div>

        <div className="text-center">
          <div className="inline-flex items-center gap-4 bg-card px-8 py-4 rounded-2xl shadow-sm border border-border">
            <div className="w-3 h-3 bg-primary rounded-full animate-pulse" />
            <span className="text-lg font-semibold text-foreground">
              Over 200+ Individual Tasks Completed
            </span>
            <Sparkles className="w-5 h-5 text-primary" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default ChecklistSection;