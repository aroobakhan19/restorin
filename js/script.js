
const desiTab = document.getElementById('desi-tab');
const fastfoodTab = document.getElementById('fastfood-tab');

const desiMenu = document.getElementById('desi-menu');
const fastfoodMenu = document.getElementById('fastfood-menu');

const menuItems = {
    desi: [
        { image: "img/menu/download (2).jpg", name: "Chicken Biryani", price: "Rs 280", description: "A fragrant and flavorful rice dish, made with tender chicken, aromatic spices, and perfectly cooked basmati rice. Served with a side of cooling raita to balance the heat, this is a must-try for all biryani lovers!" },
        { image: "img/menu/download (3).jpg", name: "Beef Biryani", price: "Rs 330", description: "A rich and indulgent biryani featuring tender beef cooked to perfection with a blend of spices, saffron-infused rice, and garnished with crispy onions. Served with raita for the perfect flavor balance." },
        { image: "img/menu/download (4).jpg", name: "Beef Roll", price: "Rs 300", description: "Delicious beef cooked with spices and wrapped in a soft, warm flatbread. Paired with fresh vegetables and a hint of tangy sauce, this is a flavorful, hand-held delight." },
        { image: "img/menu/download (5).jpg", name: "Qorma", price: "Rs 250", description: "A luxurious, creamy curry made with tender meat (chicken or beef) and slow-cooked in a rich gravy of yogurt, cream, and aromatic spices. Perfectly paired with naan or rice to soak up the flavorful sauce." },
        { image: "img/menu/download (6).jpg", name: "Sabzi", price: "Rs 170", description: "A colorful mix of fresh, seasonal vegetables cooked in a fragrant blend of spices, offering a light yet satisfying option for vegetarian lovers. Simple, healthy, and full of flavor." },
        { image: "img/menu/download (7).jpg", name: "Aloo Gosht", price: "Rs 250", description: "A hearty dish combining tender pieces of meat (usually mutton or beef) and potatoes in a spiced gravy. The rich flavors of the meat and the earthiness of potatoes create a comforting and filling meal." }
    ],
    fastfood: [
        { image: "img/menu/download (10).jpg", name: "zinger Burger", price: "Rs 330", description: "A crispy fried chicken patty served in a soft bun, topped with fresh lettuce, pickles, and a tangy sauce. This crunchy, juicy burger is sure to satisfy your cravings!" },
        { image: "img/menu/download (11).jpg", name: "Chicken Burger", price: "Rs 250", description: "A juicy grilled chicken breast served on a soft bun with fresh veggies, cheese, and a flavorful sauce. A healthy and delicious option for a burger lover." },
        { image: "img/menu/download (12).jpg", name: "Broast", price: "Rs 380", description: "Crispy on the outside, juicy on the inside, our broast chicken is fried to perfection. Served with your choice of sauce, it’s the ultimate comfort food for chicken lovers." },
        { image: "img/menu/download (13).jpg", name: "Club Sandwich", price: "Rs 350", description: "A classic club sandwich made with layers of fresh chicken, crispy bacon, lettuce, tomato, and mayo, stacked between toasted bread. A hearty, satisfying meal that’s perfect for any time of the day." },
        { image: "img/menu/download (8).jpg", name: "Fries", price: "Rs 280", description: "Golden and crispy, our fries are seasoned to perfection and make the ideal side dish or snack. Perfectly paired with any of our burgers or sandwiches." },
        { image: "img/menu/download (9).jpg", name: "Wings", price: "Rs 300", description: "Crispy, tender chicken wings tossed in a flavorful sauce of your choice—whether spicy, tangy, or sweet. Served hot and crispy, they are a perfect snack or appetizer for any meal." }

    ],

};

function displayMenuItems(category, targetMenu) {
    targetMenu.innerHTML = ''; // Clear previous items
    menuItems[category].forEach(item => {
        const menuItem = document.createElement('div');
        menuItem.classList.add('col-lg-6', 'menu-item'); // Add Bootstrap column class

        menuItem.innerHTML = `
            <img class="flex-shrink-0 img-fluid rounded" src="${item.image}" alt="${item.name}">
            <div class="menu-item-details">
                <h5 class="d-flex justify-content-between border-bottom pb-2">
                    <span>${item.name}</span>
                    <span class="text-primary">${item.price}</span>
                </h5>
                <small>${item.description}</small>
            </div>
        `;    
        targetMenu.appendChild(menuItem);
    });
}

desiTab.addEventListener('click', () => displayMenuItems('desi', desiMenu));
fastfoodTab.addEventListener('click', () => displayMenuItems('fastfood', fastfoodMenu));


// Display initial breakfast items on page load
displayMenuItems('desi', desiMenu);

