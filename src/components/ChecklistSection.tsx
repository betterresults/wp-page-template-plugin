import { Check, Sparkles, Home, Bath, ChefHat } from "lucide-react";

const ChecklistSection = () => {
  const kitchenTasks = [
    "Worktops cleaned & degreased",
    "Cupboards inside/outside/on top",
    "Sink & taps cleaned & descaled",
    "Oven in/out, trays, racks, hob",
    "Fridge/freezer in/out, seals & drawers",
    "Dishwasher inside/outside",
    "Washing machine drawer, seals, drum",
    "Microwave & small appliances in/out",
    "Windows & sills, doors & handles",
    "Skirting boards, cobwebs removed",
    "Floor vacuumed & mopped"
  ];

  const bathroomTasks = [
    "Bath/shower/screen cleaned & descaled",
    "Toilet disinfected (in/out)",
    "Sink & taps cleaned & descaled", 
    "Tiles & grout cleaned",
    "Mirrors polished",
    "Extractor fan wiped",
    "Skirting boards cleaned",
    "Radiators & light fittings",
    "Floor vacuumed & mopped"
  ];

  const bedroomTasks = [
    "Skirting boards cleaned",
    "Switches & sockets wiped",
    "Windows & sills cleaned",
    "Wardrobes & drawers inside/outside",
    "Mirrors & glass polished",
    "Carpets steam cleaned",
    "Floor vacuumed & mopped",
    "Mattress cleaning available"
  ];

  const TaskList = ({ title, tasks, icon: Icon, gradient }: { 
    title: string; 
    tasks: string[];
    icon: any;
    gradient: string;
  }) => (
    <div className={`relative overflow-hidden rounded-3xl ${gradient} p-8 shadow-lg hover:shadow-xl transition-all duration-300 group`}>
      {/* Decorative elements */}
      <div className="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16" />
      <div className="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12" />
      
      <div className="relative z-10">
        <div className="flex items-center gap-4 mb-8">
          <div className="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
            <Icon className="w-7 h-7 text-white" />
          </div>
          <h4 className="text-2xl font-bold font-heading text-white">
            {title}
          </h4>
        </div>
        
        <ul className="space-y-4">
          {tasks.map((task, index) => (
            <li key={index} className="flex items-start gap-4 group/item">
              <div className="flex-shrink-0 w-6 h-6 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center mt-0.5 group-hover/item:scale-125 transition-transform">
                <Check className="w-4 h-4 text-white" />
              </div>
              <span className="text-white/90 font-medium leading-relaxed">{task}</span>
            </li>
          ))}
        </ul>
      </div>
    </div>
  );

  return (
    <section className="section-padding bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 relative overflow-hidden">
      {/* Background decorative elements */}
      <div className="absolute inset-0">
        <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-emerald-200/30 rounded-full blur-3xl" />
        <div className="absolute bottom-1/4 right-1/4 w-80 h-80 bg-teal-200/40 rounded-full blur-3xl" />
        <div className="absolute top-3/4 left-1/2 w-64 h-64 bg-cyan-200/20 rounded-full blur-3xl" />
      </div>
      
      <div className="section-container relative">
        <div className="text-center mb-20 space-y-8">
          <div className="inline-flex items-center gap-3 bg-white/80 backdrop-blur-sm px-6 py-3 rounded-full border border-emerald-200/50">
            <Sparkles className="w-5 h-5 text-emerald-600" />
            <span className="text-emerald-700 font-semibold">Professional Deep Clean</span>
          </div>
          
          <h2 className="text-4xl lg:text-6xl font-bold font-heading text-slate-800 leading-tight">
            A Checklist That Leaves{" "}
            <span className="bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
              Nothing to Chance
            </span>
          </h2>
          
          <p className="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
            We clean everything. Our comprehensive service ensures every corner of your property meets 
            the highest standards for final inspection.
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8 mb-20">
          <TaskList
            title="Kitchen Deep Clean"
            tasks={kitchenTasks}
            icon={ChefHat}
            gradient="bg-gradient-to-br from-emerald-500 to-emerald-600"
          />
          <TaskList
            title="Bathroom Sanitisation"
            tasks={bathroomTasks}
            icon={Bath}
            gradient="bg-gradient-to-br from-teal-500 to-cyan-500"
          />
          <TaskList
            title="Living & Bedrooms"
            tasks={bedroomTasks}
            icon={Home}
            gradient="bg-gradient-to-br from-cyan-500 to-blue-500"
          />
        </div>

        {/* Enhanced call-to-action */}
        <div className="text-center">
          <div className="inline-flex items-center gap-4 bg-white/90 backdrop-blur-sm px-10 py-6 rounded-3xl shadow-lg border border-emerald-200/50 hover:shadow-xl transition-all duration-300">
            <div className="relative">
              <div className="w-6 h-6 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full animate-pulse" />
              <div className="absolute inset-0 w-6 h-6 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full animate-ping opacity-75" />
            </div>
            <span className="text-xl font-bold text-slate-800">
              Over 200+ Individual Tasks Completed
            </span>
            <Sparkles className="w-6 h-6 text-emerald-600" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default ChecklistSection;