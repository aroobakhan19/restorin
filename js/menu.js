const beefTab = document.getElementById('beef-tab');
const chickenTab = document.getElementById('chicken-tab');
const tandoorTab = document.getElementById('tandoor-tab');
const daysTab = document.getElementById('days-tab');
const dessertTab = document.getElementById('dessert-tab');
const drinksTab = document.getElementById('drinks-tab');

const beefMenu = document.getElementById('beef-menu');
const chickenMenu = document.getElementById('chicken-menu');
const tandoorMenu = document.getElementById('tandoor-menu');
const daysMenu = document.getElementById('days-menu');
const dessertMenu = document.getElementById('dessert-menu');
const drinksMenu = document.getElementById('drinks-menu');

const menufood = {
    beef: [
        { name: "Beef Pulao", price: 320 },
        { name: "Beef Biryani Single", price: 330 },
        { name: "Beef Biryani Double", price: 550},
        { name: "Beef Green/Keema Biryani", price: 360},
        { name: "Beef Green/Keema Biryani 1kg", price: 1440},
        { name: "Beef Biryani 1kg", price: 850 },
        { name: "Beef Biryani Family Pack", price: 2000 }
    ],
    chicken: [
        { name: "Chicken Biryani Single", price: 280 },
        { name: "Chicken Biryani Double", price: 400 },
        { name: "Chicken Biryani 1kg", price: 700 },
        { name: "Chicken Biryani Family Pack", price: 1850 },
        { name: "Sada Aloo Biryani (500gram)", price: 220 }
    ],
    tandoor: [
        { name: "Naan", price: 20 },
        { name: "Farmaishi Chapati", price: 20 },
        { name: "Girlic Naan", price: 80 },
        { name: "Roghni Naan", price: 80 },
        { name: "Milky Naan", price: 35 },
        { name: "Taftan/Shermall", price: 65 },
        { name: "Kulcha", price: 45 },
        { name: "Puri Pharatha", price: 60 }
    ],
    days: [
        { name: "Sabzi", price: 170, day: "Monday" },
        { name: "Aloo Gosht", price: 250, day: "Monday" },
        { name: "Quarma", price: 260, day: "Monday" },
        { name: "Daal Loki", price: 120, day: "Tuesday" },
        { name: "Daal Gosht", price: 180, day: "Tuesday" },
        { name: "Plain Rice", price: 100, day: "Tuesday" },
        { name: "Chicken Kofta", price: 260, day: "Wednesday" },
        { name: "Beef Qorma", price: 280, day: "Wednesday" },
        { name: "Aloo Qeema", price: 250, day: "Thursday" },
        { name: "Chicken Qorma", price: 250, day: "Thursday" },
        { name: "Daal Loki", price: 120, day: "Friday" },
        { name: "Daal Gosht", price: 180, day: "Friday" },
        { name: "Plain Rice", price: 100, day: "Friday" },
        { name: "Beef Biryani Single", price: 330, day: "Saturday" },
        { name: "Beef Biryani Double", price: 550, day: "Saturday" },
        { name: "Beef Biryani 1kg", price: 850, day: "Saturday" },
        { name: "Chicken Biryani 1kg", price: 700, day: "Saturday" },
        { name: "Special Paya", price: "N/A", day: "Sunday" },
        { name: "Kuna Gosht", price: "N/A", day: "Sunday" },
        { name: "Green Beef Biryani Pulao", price: "N/A", day: "Sunday" }
        ],
        dessert: [
            { name: "Zarda", price: 100 },
            { name: "Kheer Jori ", price: 100 },
            { name: "Cherry Crunch", price: 150 },
            { name: "Kulfa", price: 60 },
            { name: "Ice Cream (Scoop)", price: 60 }
        ],
        drinks: [
            { name: "Regular Cold Drink", price: 60 },
            { name: "Mineral Water Small", price: 50 },
            { name: "Mineral Water Large", price: 120 },
            { name: "Cold Drink 1.5ltr", price: 220 },
            { name: "Cold Drink 1ltr", price: 180 },
            { name: "Cold Drink 350ml", price: 75 },
            { name: "Green Salad", price: 70 },
            { name: "Raita", price: 60 },
            { name: "Special Tea (Sindhi Muhajir Chai)", price: 50 }
        ] 
    };

    function displaymenufood(category, targetMenu) {
        targetMenu.innerHTML = ''; // Clear previous items
        menufood[category].forEach(item => {
            const menufeed = document.createElement('div');
            menufeed.classList.add('col-lg-6', 'menu-item', 'mb-3'); // Added margin-bottom for spacing
    
            let description = '';
            if (category === 'days') {
                description = `Available on ${item.day}`;
            }
    
            menufeed.innerHTML = `
                <div class="menu-item-detail p-3 rounded"> <!-- Added padding and border -->
                    <h5 class="d-flex justify-content-center align-items-center  border-bottom pb-2">
                        <span class="me-auto fw-bold">${item.name}</span>
                 <span  class="text-primary fw-bold ms-4">RS ${item.price}</span> <!-- Added ms-4 for spacing -->
                    </h5>
                    <button onclick="addToCart('${item.name}', ${item.price})" class="btn btn-warning text-white fw-bold">Add to Cart</button>
                    ${description ? `<small class="text-muted">${description}</small>` : ''}
                </div>
            `;
            targetMenu.appendChild(menufeed);
        });
    }
    
    
    // Add to Cart function
    function addToCart(itemName, itemPrice) {
        const userId = localStorage.getItem('user_id'); // Get the logged-in user's ID
        if (!userId) {
            alert('Please log in to add items to the cart.');
            return;
        }
    
        const cartKey = `cart_${userId}`; // User-specific cart key
        let cart = JSON.parse(localStorage.getItem(cartKey)) || []; // Get cart from localStorage
        let itemFound = cart.find(item => item.name === itemName); // Check if item already exists
    
        if (itemFound) {
            itemFound.quantity += 1; // Increase quantity if item exists
        } else {
            cart.push({ name: itemName, price: itemPrice, quantity: 1 }); // Add new item
        }
    
        localStorage.setItem(cartKey, JSON.stringify(cart)); // Save cart to localStorage
        alert('Item added to cart!');
    }

    beefTab.addEventListener('click', () => displaymenufood('beef', beefMenu));
    chickenTab.addEventListener('click', () => displaymenufood('chicken', chickenMenu));
    tandoorTab.addEventListener('click', () => displaymenufood('tandoor', tandoorMenu));
    daysTab.addEventListener('click', () => displaymenufood('days', daysMenu));
    dessertTab.addEventListener('click', () => displaymenufood('dessert', dessertMenu));
    drinksTab.addEventListener('click', () => displaymenufood('drinks', drinksMenu));

    // Display initial beef items on page load
    displaymenufood('beef', beefMenu);
    const broastTab = document.getElementById('broast-tab');
const burgersTab = document.getElementById('burgers-tab');
const sandwichesTab = document.getElementById('sandwiches-tab');
const bbqTab = document.getElementById('bbq-tab');
const rollTab = document.getElementById('roll-tab');
const friesTab = document.getElementById('fries-tab');

const broastMenu = document.getElementById('broast-menu');
const burgersMenu = document.getElementById('burgers-menu');
const sandwichesMenu = document.getElementById('sandwiches-menu');
const bbqMenu = document.getElementById('bbq-menu');
const rollMenu = document.getElementById('roll-menu');
const friesMenu = document.getElementById('fries-menu');

const menuItems = {
    bbq: [
        { name: "Chicken Boti (10pcs)", price: 550},
        { name: "Chicken Mali Boti (10pcs)", price: 630},
        { name: "Chicken Bihari Boti (10pcs)", price: 570},
        { name: "Chicken Seekh Kabab (4pcs)", price: 520},
        { name: "Chicken Bihari Chest Tikka", price: 480},
        { name: "Chicken Leg Tikka", price: 460},
        { name: "Chicken Mali Tikka Chest", price: 630},
        { name: "Chicken Mali Tikka Leg", price: 600},
        { name: "Chicken Green Tikka", price: 650},
        { name: "Beef Boti (12pcs)", price: 590},
        { name: "Beef Bihari Boti (10pcs)", price: 610},
        { name: "Beef Seekh Kabab (4pcs)", price: 560}
    ],
    broast: [
        { name: "Leg Quarter", price: 380},
        { name: "Chest Quarter", price: 430},
        { name: "Crispy Wings", price: 350},
        { name: "Fried Wings", price: 300}
    ],
    burgers: [
        { name: "Zinger Burger", price: 320},
        { name: "Zinger Cheese Burger", price: 350},
        { name: "Chicken Burger", price: 250},
        { name: "Chicken Cheese Burger", price: 280},
        { name: "Beef Burger", price: 330}
    ],
    sandwiches: [
        { name: "Club Sandwich", price: 350},
        { name: "Club Sandwich Cheese", price: 400},
        { name: "Grilled Sandwich", price: 370},
        { name: "Grilled Sandwich Cheese", price: 420},
        { name: "Zinger Sandwich", price: 350},
        { name: "Zinger Sandwich Cheese", price: 400}
    ],
   
    roll: [
        { name: "Chicken Rashmi Kaba Roll", price: 300},
        { name: "Chicken Chatni Roll", price: 250},
        { name: "Chicken Chapati Roll", price: 250},
        { name: "Chicken Mayo Roll", price: 320},
        { name: "Cgicken Cheese Roll", price: 320},
        { name: "Chicken Garlic Roll", price: 320},
        { name: "Chicken Juicy Roll", price: 330},
        { name: "Chicken Mali Roll", price: 330},
        { name: "Beef Boti Roll", price: 300},
        { name: "Beef Kabab Roll", price: 280},
        { name: "Beef Chapati Roll", price: 280},
        { name: "Beef Cheese Roll", price: 350},
        { name: "Beef Juicy Roll", price: 350},
        { name: "Beef Bihari Roll", price: 300}
    ],
    fries: [
        { name: "Plain Fries Regular", price: 280},
        { name: "Masala Fries", price: 300},
        { name: "Mayo Fries", price: 320},
        { name: "Cheese Fries", price: 320},
        { name: "Loaded Fries", price: 360}
    ]
};

function displayMenuItems(category, targetMenu) {
    targetMenu.innerHTML = ''; // Clear previous items
    menuItems[category].forEach(item => {
        const menuItem = document.createElement('div');
        menuItem.classList.add('col-lg-6', 'menu-item'); // Add Bootstrap column class

        let description = ''; // Add description logic if needed

        menuItem.innerHTML = `
            <div class="menu-item-detail p-3 rounded">
                <h5 class="d-flex justify-content-between align-items-center border-bottom pb-2">
                    <span class="me-auto fw-bold">${item.name}</span>
                    <span class="text-primary fw-bold ms-4">Rs ${item.price}</span>
                </h5>
                <button onclick="addToCart('${item.name}', ${item.price})" class="btn btn-primary">Add to Cart</button>
                ${description ? `<small>${description}</small>` : ''}
            </div>
        `;
        targetMenu.appendChild(menuItem);
    });
}

// Add to Cart function
function addToCart(itemName, itemPrice) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let itemFound = cart.find(item => item.name === itemName);

    if (itemFound) {
        itemFound.quantity += 1; // Increase quantity if item already exists
    } else {
        cart.push({ name: itemName, price: itemPrice, quantity: 1 }); // Add new item
    }

    localStorage.setItem('cart', JSON.stringify(cart)); // Save to localStorage
    alert('Item added to cart!');
}
bbqTab.addEventListener('click', () => displayMenuItems('bbq', bbqMenu));
broastTab.addEventListener('click', () => displayMenuItems('broast', broastMenu));
burgersTab.addEventListener('click', () => displayMenuItems('burgers', burgersMenu));
sandwichesTab.addEventListener('click', () => displayMenuItems('sandwiches', sandwichesMenu));
rollTab.addEventListener('click', () => displayMenuItems('roll', rollMenu));
friesTab.addEventListener('click', () => displayMenuItems('fries', friesMenu));

// Display initial broast items on page load
displayMenuItems('bbq', bbqMenu);





