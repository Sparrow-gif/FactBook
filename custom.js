
   document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.sticky-header');
            let lastScroll = 0;
            const scrollThreshold = 50;
            const hideThreshold = 50;
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                // Add/remove scrolled class for style changes
                if (currentScroll > scrollThreshold) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                
                // At top of page - always show header
                if (currentScroll <= 0) {
                    header.classList.remove('hide');
                    return;
                }
                
                // Only apply hide/show logic if we've scrolled past the hideThreshold
                if (currentScroll > hideThreshold) {
                    if (currentScroll > lastScroll && !header.classList.contains('hide')) {
                        // Scrolling down - hide header
                        header.classList.add('hide');
                    } else if (currentScroll < lastScroll && header.classList.contains('hide')) {
                        // Scrolling up - show header
                        header.classList.remove('hide');
                    }
                }
                
                lastScroll = currentScroll;
            });
        });

