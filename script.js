const hamburger = document.querySelector('.hamburger');
const navigation = document.querySelector('.navigation');



const handleHamburgerClick = () => {
    hamburger.classList.toggle('hamburger--active');
    navigation.classList.toggle('navigation--active');
}

hamburger.addEventListener('click', handleHamburgerClick);

const marketingCharts = document.querySelectorAll('.marketing-stats .stats__item-chart');
marketingCharts.forEach(chart => {
    new EasyPieChart(chart, {
        'barColor': '#ff6624',
        'scaleLength': 0,
        'lineCap': 'square',
        'lineWidth': 7,
        'size': 150
    });
});