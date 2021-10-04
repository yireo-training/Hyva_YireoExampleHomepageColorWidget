# Hyva_YireoExampleHomepageColorWidget compatibility module
This module illustrates how to create a compatibility module, by adding Hyva compatibility with a dummy module Yireo_ExampleHomepageColorWidget. Note that this module explains this through 4 methods, while in practice you could only stick to method 4. It is educational only.

- Method 1: The PHTML template is rewritten manually via XML layout so that Tailwind and Alpine can be implemented.
- Method 2: The Widget XML is extended to allow for picking the right template.
- Method 3: A DI plugin remaps the PTML template, so that method 1 is no longer needed (flag in `di.xml` is disabled in this code).
- Method 4: The `CompatModuleRegistry` is used to automatically rewrite the PHTML template and disable the original XML layout
