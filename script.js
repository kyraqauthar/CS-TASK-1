document.addEventListener('DOMContentLoaded', () => {
    const doors = document.querySelectorAll('.door');
    
    doors.forEach(door => {
        door.addEventListener('mouseenter', () => {
            door.style.transform = 'scale(1.1)';
        });
        
        door.addEventListener('mouseleave', () => {
            door.style.transform = 'scale(1)';
        });

        // Optional: Add click effect
        door.addEventListener('click', (e) => {
            door.style.transform = 'scale(0.95)';
            setTimeout(() => {
                door.style.transform = 'scale(1)';
            }, 100);
        });
    });

    // Optional: Smooth scroll to top of page on story load
    if (document.querySelector('.story-container')) {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
});