import { Check } from "lucide-react";

const ChecklistSection = () => {
  const kitchenTasks = [
    "Deep Oven & Hob Degreasing",
    "Inside & Out of All Cupboards",
    "Fridge, Freezer & Appliances",
    "Sink & Tap Descaling",
    "Worktop Deep Clean",
    "Floor Scrubbing & Mopping"
  ];

  const bathroomTasks = [
    "Limescale Removal from Taps & Tiles",
    "Bathroom & Shower Sanitisation",
    "Toilet Deep Clean & Disinfection",
    "Mirror & Glass Polishing",
    "Grout & Sealant Cleaning",
    "Floor Sanitisation"
  ];

  const generalTasks = [
    "All Floors Vacuumed & Mopped",
    "Skirting Boards & Window Sills",
    "Light Switches & Door Handles",
    "Radiator Cleaning",
    "Carpet Deep Cleaning",
    "Final Quality Inspection"
  ];

  const TaskList = ({ title, tasks, gradientFrom, gradientTo }: { 
    title: string; 
    tasks: string[]; 
    gradientFrom: string; 
    gradientTo: string; 
  }) => (
    <div className="card-feature">
      <div className="mb-6">
        <h4 className="text-2xl font-bold font-heading text-primary pb-3 border-b-2 border-primary/20">
          {title}
        </h4>
      </div>
      <ul className="space-y-3">
        {tasks.map((task, index) => (
          <li key={index} className="flex items-center gap-3 group">
            <div className="flex-shrink-0 w-6 h-6 bg-success rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
              <Check className="w-4 h-4 text-white" />
            </div>
            <span className="text-foreground font-medium">{task}</span>
          </li>
        ))}
      </ul>
    </div>
  );

  return (
    <section className="section-padding bg-muted/30">
      <div className="section-container">
        <div className="text-center mb-16 space-y-6">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground">
            A Checklist That Leaves{" "}
            <span className="text-primary">Nothing to Chance</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            We clean everything. Our comprehensive service ensures every corner of your property meets 
            the highest standards for final inspection.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <TaskList
            title="Kitchen Deep Clean"
            tasks={kitchenTasks}
            gradientFrom=""
            gradientTo=""
          />
          <TaskList
            title="Bathroom Sanitisation"
            tasks={bathroomTasks}
            gradientFrom=""
            gradientTo=""
          />
          <TaskList
            title="General Areas"
            tasks={generalTasks}
            gradientFrom=""
            gradientTo=""
          />
        </div>

        {/* Call-to-action */}
        <div className="text-center mt-16">
          <div className="inline-flex items-center gap-3 bg-white px-8 py-4 rounded-2xl shadow-md">
            <div className="w-4 h-4 bg-success rounded-full animate-pulse" />
            <span className="text-lg font-semibold text-foreground">
              Over 200+ Individual Tasks Completed
            </span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ChecklistSection;