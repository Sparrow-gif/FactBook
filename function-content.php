
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     <!-- SweetAlert2 JS -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          
    <script>
       const mainHeading = document.getElementById('main-heading');
       const headerHeading = document.getElementById('header-heading');
       const stickyHeader = document.querySelector('.sticky-header');

       // Create an Intersection Observer
       const observer = new IntersectionObserver(
         ([entry]) => {
           if (!entry.isIntersecting) {
             // Replace sticky header text with main content heading
             headerHeading.textContent = mainHeading.textContent;
           //  stickyHeader.style.background = "#f8f9fa";  Slightly darker background
             headerHeading.style.fontSize = "18px"; // Smaller font size
             stickyHeader.style.borderBottom = "0.1px solid #ddd";
           } else {
             // Restore default header text
             headerHeading.textContent = "FactBook";
            // stickyHeader.style.background = "#ffffff";  Original background
             headerHeading.style.fontSize = "20px"; // Original font size
             stickyHeader.style.borderBottom = "none";
           }
         },
         { 
           rootMargin: "-50px 0px 0px 0px", // Trigger 50px before the heading leaves viewport
           threshold: 0.1 
         }
       );

    // Observe the main heading
    observer.observe(mainHeading);
  </script>
    
    <!-- Include the connection alert JS -->
    <script src="connection-alert.js?v=1.4"></script>