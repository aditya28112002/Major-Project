// search.js
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('find');
    const resultsContainer = document.getElementById('search-results');
    
    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        const results = items.filter(item => item.name.toLowerCase().includes(query));
        
        if (query.trim() === "") {
            // Clear results when input is empty
            resultsContainer.innerHTML = '';
        } else {
            // Display results based on the query
            displayResults(results);
        }
    });
    
    function displayResults(results) {
        resultsContainer.innerHTML = ''; // Clear previous results

        if (results.length === 0) {
            resultsContainer.innerHTML = '<p>No results found!</p>';
            return;
        }

        results.forEach(result => {
            const resultElement = document.createElement('div');
            resultElement.classList.add('result-item');
            resultElement.innerHTML = `
                <a href="${result.link}">
                    <h5>${result.name}</h5>
                    <p>${result.category}</p>
                </a>
            `;
            resultsContainer.appendChild(resultElement);
        });
    }
});

