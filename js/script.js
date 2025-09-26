// Custom JavaScript for PHP Exercise Website

document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scrolling to all links
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add copy to clipboard functionality for code blocks
    const codeBlocks = document.querySelectorAll('.code-block');
    codeBlocks.forEach(block => {
        // Create copy button
        const copyBtn = document.createElement('button');
        copyBtn.className = 'btn btn-sm btn-outline-light position-absolute top-0 end-0 m-2';
        copyBtn.innerHTML = '<i class="fas fa-copy"></i>';
        copyBtn.title = 'Copy code';
        
        // Make parent relative for absolute positioning
        block.style.position = 'relative';
        block.appendChild(copyBtn);
        
        copyBtn.addEventListener('click', function() {
            const text = block.textContent.replace('PHP Code:', '').trim();
            navigator.clipboard.writeText(text).then(function() {
                copyBtn.innerHTML = '<i class="fas fa-check text-success"></i>';
                setTimeout(() => {
                    copyBtn.innerHTML = '<i class="fas fa-copy"></i>';
                }, 2000);
            });
        });
    });

    // Add active state to current page in sidebar
    const currentPage = window.location.pathname.split('/').pop();
    const sidebarLinks = document.querySelectorAll('.list-group-item');
    sidebarLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage || 
            link.getAttribute('href').includes(currentPage)) {
            link.classList.add('active');
        }
    });

    // Add loading animation for form submissions
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="loading me-2"></span>Processing...';
                submitBtn.disabled = true;
                
                // Re-enable button after 3 seconds (adjust as needed)
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    });

    // Add tooltips to all elements with title attribute
    const tooltipElements = document.querySelectorAll('[title]');
    tooltipElements.forEach(element => {
        new bootstrap.Tooltip(element);
    });

    // Add collapsible functionality to sidebar sections
    const sidebarHeaders = document.querySelectorAll('.list-group-item.bg-light');
    sidebarHeaders.forEach(header => {
        header.style.cursor = 'pointer';
        header.addEventListener('click', function() {
            let nextElement = this.nextElementSibling;
            while (nextElement && !nextElement.classList.contains('bg-light')) {
                if (nextElement.style.display === 'none') {
                    nextElement.style.display = 'block';
                } else {
                    nextElement.style.display = 'none';
                }
                nextElement = nextElement.nextElementSibling;
            }
        });
    });

    // Auto-hide alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.remove();
            }, 500);
        }, 5000);
    });
});

// Function to highlight PHP syntax in code blocks
function highlightPHPSyntax(codeBlock) {
    let code = codeBlock.innerHTML;
    
    // Highlight PHP keywords
    const keywords = ['php', 'echo', 'print', 'if', 'else', 'elseif', 'while', 'for', 'foreach', 'function', 'class', 'return', 'include', 'require'];
    keywords.forEach(keyword => {
        const regex = new RegExp(`\\b${keyword}\\b`, 'gi');
        code = code.replace(regex, `<span class="php-keyword">${keyword}</span>`);
    });
    
    // Highlight strings
    code = code.replace(/(['"])(.*?)\1/g, '<span class="php-string">$1$2$1</span>');
    
    // Highlight variables
    code = code.replace(/\$\w+/g, '<span class="php-variable">$&</span>');
    
    // Highlight comments
    code = code.replace(/(\/\/.*$|\/\*[\s\S]*?\*\/)/gm, '<span class="php-comment">$1</span>');
    
    codeBlock.innerHTML = code;
}

// Apply syntax highlighting to all code blocks
document.addEventListener('DOMContentLoaded', function() {
    const codeBlocks = document.querySelectorAll('.code-block');
    codeBlocks.forEach(highlightPHPSyntax);
});
