// correct-summary-tag.js

// Wait for the HTML document to be fully loaded
window.addEventListener('DOMContentLoaded', () => {
    // Find all 'summery' elements
    const summeryElements = document.querySelectorAll('summery');
  
    // Replace 'summery' with 'summary'
    summeryElements.forEach(element => {
      const summary = document.createElement('summary');
      summary.textContent = element.textContent;
      element.parentNode.replaceChild(summary, element);
    });
  });
  