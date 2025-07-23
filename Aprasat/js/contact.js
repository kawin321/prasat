        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = {};
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }
            
            // Simulate form submission
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'block';
                this.reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }, 1000);
        });

        // Add smooth scrolling animation
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationDelay = '0s';
                        entry.target.style.opacity = '1';
                    }
                });
            });
            
            cards.forEach(card => {
                observer.observe(card);
            });
        });

        // Add floating animation to info items
        document.querySelectorAll('.info-item').forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        })
