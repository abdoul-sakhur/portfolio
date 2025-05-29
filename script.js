document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('nav ul');
    
    menuToggle.addEventListener('click', function() {
        navList.classList.toggle('show');
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                navList.classList.remove('show');
            }
        });
    });
    
    // Scroll reveal animation
    const sections = document.querySelectorAll('.section');
    
    function checkScroll() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (sectionTop < windowHeight * 0.75) {
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Initial check
    checkScroll();
    
    // Check on scroll
    window.addEventListener('scroll', checkScroll);
    
    // Form submission
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to a server
            // For demo purposes, we'll just show an alert
            alert('Merci pour votre message! Je vous répondrai dès que possible.');
            this.reset();
        });
    }
    
    // Terminal typing effect for hero section
    const terminalLine = document.querySelector('.terminal-line.blink');
    if (terminalLine) {
        const commands = [
            "npm test",
            "node server.js",
            "git push origin main",
            "docker-compose up"
        ];
        
        let commandIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let isWaiting = false;
        
        function type() {
            if (isWaiting) return;
            
            const currentCommand = commands[commandIndex];
            
            if (isDeleting) {
                terminalLine.textContent = "$ " + currentCommand.substring(0, charIndex - 1);
                charIndex--;
                
                if (charIndex === 0) {
                    isDeleting = false;
                    commandIndex = (commandIndex + 1) % commands.length;
                    isWaiting = true;
                    setTimeout(() => isWaiting = false, 500);
                }
            } else {
                terminalLine.textContent = "$ " + currentCommand.substring(0, charIndex + 1);
                charIndex++;
                
                if (charIndex === currentCommand.length) {
                    isDeleting = true;
                    isWaiting = true;
                    setTimeout(() => isWaiting = false, 2000);
                }
            }
            
            setTimeout(type, isDeleting ? 50 : 100);
        }
        
        // Start typing effect after a delay
        setTimeout(type, 1000);
    }
});

// Initialize EmailJS
(function() {
    // TODO: Replace with your EmailJS public key
    emailjs.init("9v852BgRa7c2-4KqI");
})();

// Handle contact form submission
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Show loading spinner
    const buttonText = this.querySelector('.button-text');
    const loadingSpinner = this.querySelector('.loading-spinner');
    const submitButton = this.querySelector('button[type="submit"]');
    
    buttonText.style.display = 'none';
    loadingSpinner.style.display = 'inline-block';
    submitButton.disabled = true;

    // Get form data
    const templateParams = {
        from_name: document.getElementById('user_name').value,
        from_email: document.getElementById('user_email').value,
        message: document.getElementById('message').value
    };

    // Send email using EmailJS
    emailjs.send('service_1vf6jjj', 'template_xz9rgvi', templateParams)
        .then(function(response) {
            console.log('SUCCESS!', response.status, response.text);
            alert('Message envoyé avec succès !');
            document.getElementById('contactForm').reset();
        }, function(error) {
            console.log('FAILED...', error);
            alert('Erreur lors de l\'envoi du message. Veuillez réessayer.');
        })
        .finally(function() {
            // Hide loading spinner
            buttonText.style.display = 'inline-block';
            loadingSpinner.style.display = 'none';
            submitButton.disabled = false;
        });
});