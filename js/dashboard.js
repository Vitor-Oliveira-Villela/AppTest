const salesCtx = document.getElementById('salesChart').getContext('2d');
const salesChart = new Chart(salesCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Vendas',
            data: [12000, 15000, 14000, 17000, 18000, 20000],
            borderColor: '#6c757d',
            backgroundColor: 'rgba(108,117,125,0.2)',
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});

const usersCtx = document.getElementById('usersChart').getContext('2d');
const usersChart = new Chart(usersCtx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Novos Usuários',
            data: [50, 70, 60, 90, 100, 120],
            backgroundColor: '#adb5bd'
        }]
    },
    options: {
        responsive: true
    }
});
