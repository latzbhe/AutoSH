document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('nav ul li');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('a.accordion-header');
        const content = item.querySelector('ul.accordion-content');
        
        if (header && content) {
            header.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Toggle active class on the parent li
                item.classList.toggle('active');
                
                // Toggle the content visibility
                if (item.classList.contains('active')) {
                    content.style.display = 'block';
                    // Use setTimeout to ensure the display property is set before animating height
                    setTimeout(() => {
                        content.style.height = content.scrollHeight + 'px';
                    }, 0);
                } else {
                    content.style.height = '0';
                    // Wait for the height transition to complete before hiding
                    setTimeout(() => {
                        content.style.display = 'none';
                    }, 300);
                }
                
                // Close other open accordions
                accordionItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherContent = otherItem.querySelector('ul.accordion-content');
                        if (otherContent) {
                            otherContent.style.height = '0';
                            setTimeout(() => {
                                otherContent.style.display = 'none';
                            }, 300);
                        }
                    }
                });
            });
        }
    });
}); 