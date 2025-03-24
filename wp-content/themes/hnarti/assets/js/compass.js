document.addEventListener('DOMContentLoaded', function() {
    // Get all compass elements
    const compassContainer = document.querySelector('.compass-container');
    const compassBg = document.querySelector('.compass-bg');
    const compassHand = document.querySelector('.compass-hand');
    const compassCenter = document.querySelector('.compass-center');
    
    if (!compassContainer || !compassHand || !compassCenter) {
        console.error('One or more compass elements not found');
        return;
    }
    
    // Function to precisely position elements
    function positionCompassElements() {
        // Get container dimensions
        const containerRect = compassContainer.getBoundingClientRect();
        const containerWidth = containerRect.width;
        const containerHeight = containerRect.height;
        
        // Calculate center position
        const centerX = containerWidth / 2;
        const centerY = containerHeight / 2;
        
        // Position the background to fill the container
        if (compassBg) {
            compassBg.style.width = '100%'; 
            compassBg.style.height = '100%';
            compassBg.style.position = 'absolute';
            compassBg.style.top = '0';
            compassBg.style.left = '0';
        }
        
        // Set transform-origin for the hand to ensure it rotates around its center
        compassHand.style.position = 'absolute';
        compassHand.style.transformOrigin = 'center center';
        
        // Calculate compass hand sizing and position - use translate for more precise positioning
        compassHand.style.left = 'calc(50% + 15px)';
        compassHand.style.top = 'calc(50% + 25px)';
        compassHand.style.transform = 'translate(-50%, -50%)';
        
        // Calculate compass center position - use translate for more precise positioning
        // With slight offset to bottom and right
        compassCenter.style.position = 'absolute';
        compassCenter.style.left = 'calc(50% + 13px)';  // 10px to the right
        compassCenter.style.top = 'calc(50% + 25px)';   // 15px to the bottom
        compassCenter.style.transform = 'translate(-50%, -50%)';
        
        console.log('Positioned compass elements', {
            container: { width: containerWidth, height: containerHeight },
            center: { x: centerX, y: centerY }
        });
    }
    
    // Function to handle rotation
    function handleRotation() {
        const scrollY = window.scrollY || window.pageYOffset;
        const rotation = scrollY * 0.2; // Adjust factor as needed
        
        // Apply rotation without affecting position
        compassHand.style.transform = `translate(-50%, -50%) rotate(${rotation}deg)`;
    }
    
    // Make sure container has position relative
    compassContainer.style.position = 'relative';
    
    // Initial setup
    // Wait for images to load before positioning
    window.addEventListener('load', function() {
        // Force a reflow to ensure images are loaded
        setTimeout(function() {
            positionCompassElements();
            // Initial rotation
            handleRotation();
        }, 100);
    });
    
    // Handle scroll for rotation
    window.addEventListener('scroll', handleRotation);
    
    // Handle window resize
    window.addEventListener('resize', function() {
        // Debounce resize events
        clearTimeout(window.resizeTimer);
        window.resizeTimer = setTimeout(positionCompassElements, 200);
    });
});