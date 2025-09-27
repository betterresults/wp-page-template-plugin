const TemplateH2Section = () => {
  return (
    <section className="section-padding bg-muted/20 border-y border-border/50">
      <div className="section-container">
        <div className="max-w-4xl mx-auto text-center space-y-6">
          <h2 className="text-4xl lg:text-5xl font-bold font-heading text-foreground">
            <span className="bg-blue-300/30 px-2 py-1 rounded">[page_h2]</span>
          </h2>
          <p className="text-lg text-muted-foreground leading-relaxed">
            <span className="bg-blue-300/30 px-2 py-1 rounded">[page_h2_paragraph]</span>
          </p>
        </div>
      </div>
    </section>
  );
};

export default TemplateH2Section;
